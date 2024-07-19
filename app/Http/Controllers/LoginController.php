<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Mail;
use App\Helpers\Jwt;
use Carbon\Carbon;
use Validator;

use App\Models\LoginHistory;

use App\Models\User;

use Storage;
use ActiveCampaign;

class LoginController extends Controller
{
    public function index()
    {
        if (!empty(session('user_id'))) {
            return redirect('dashboard');
        }
        return view('login');
    }

    public function doLogin(Request $request)
    {
        $user = User::where("email", $request->post("email"))->first();
        $error_msg = "";

        if (is_null($user)) {
            $error_msg = "Email or password is incorrect.";
        } else {
            if (gettype($request->post("password")) == "array" || gettype($request->post("password")) == "object" || gettype($request->post("password")) == "NULL") {
                $error_msg = "Password is incorrect.";
            } else if (Hash::check($request->post("password"), $user->password)) {
                // var_dump($user); exit;
                if ($user->status == 0) {
                    $error_msg = "This account has not been verified yet. We sent you an activation email. Please check your inbox or spam folder and click on the link to activate your account.";
                    $this->sendVerification($user);
                } elseif ($user->verified == 1) {
                    $error_msg = "This account has not been verified yet. We sent you an activation email. Please check your inbox or spam folder and click on the link to activate your account.";
                } else {
                    $request->session()->put('user_id', $user->id);

                    \Auth::loginUsingId($user->id);

                    $user_name = $user->first_name . " " . $user->last_name;
                    $request->session()->put('user_name', $user_name);
                    $request->session()->put('user_email', $user->email);

                    if (strpos($user->photo, "http") !== false) {
                        $request->session()->put('photo', $user->photo);
                    } else {
                        $request->session()->put('photo', asset('upload/' . $user->photo));
                    }

                    $request->session()->put('user_role', $user->role);

                    $request->session()->put('u_id', $user->id);

                    $request->session()->put('user_status', $user->status);


                    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
                        $ip = $_SERVER['HTTP_CLIENT_IP'];
                    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
                    } else {
                        $ip = $_SERVER['REMOTE_ADDR'];
                    }

                    $user->ip = $ip;
                    $user->save();

                    $login_history = LoginHistory::where(['user_id' => $user->id, 'date' => date("Y-m-d")])->first();
                    if (is_null($login_history)) {
                        $login_history = new LoginHistory([
                            'user_id' => $user->id,
                            'count' => 1,
                            'date' => date('Y-m-d'),
                            'status' => 1
                        ]);
                        $login_history->save();
                    } else {
                        $login_history->count = $login_history->count * 1 + 1;
                        $login_history->save();
                    }

                    $request->session()->put('ip', $ip);
                }
            } else {
                $error_msg = "Email or password is incorrect.";
            }
        }

        if ($error_msg == "") {
            return redirect("/");
        } else {
            $request->session()->put('error_msg', $error_msg);
            return redirect("login");
        }
    }

    public function signup()
    {
        return view('signup');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|string|max:40',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);
        if ($validator->fails()) {
            $request->session()->put('u_email', $request->post("email"));
            $request->session()->put('u_name', $request->post("full_name"));
            $request->session()->put('u_password', $request->post("password"));
            return redirect()->back()->withErrors($validator->errors());
        }

        $full_name = $request->post("full_name");
        $full_name_arr = explode(' ', $full_name);
        $first_name = $full_name_arr[0];
        $last_name = $full_name_arr[1] | "";

        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }

        $user = new User([
            'uuid' => (string) \Str::uuid(),
            'first_name' => $first_name,
            'last_name' => $last_name,
            'email' => $request->post("email"),
            'verified' => 1,
            'password' => Hash::make($request->get("password")),
            'photo' => "man.png",
            'role' => 0,
            'status' => 0,
            'ip' => $ip,
        ]);

        $user->save();

        $this->sendVerification($user);

        //$request->session()->put('ip', $ip);

        $request->session()->put('success_msg', 'Your account has been created successfully and we have sent you an activation email. Please check your inbox or spam folder to activate your account.');

        return redirect()->back();
    }

    public function activateAccount(Request $request)
    {
        if (empty($request->jwt)) {
            return abort(401);
        }

        $jwt = Jwt::decode($request->jwt);

        if (empty($jwt->email)) {
            return abort(401);
        }

        $user =  User::where("email", $jwt->email)->where("verified", 1)->first();

        $active_status = "";
        if (empty($user)) {
            $user =  User::where("email", $jwt->email)->first();
            $active_status = "yes";
        }
        if (empty($user)) {
            return abort(400);
        }

        $user_first_name = $user->first_name;
        $user_last_name = $user->last_name;
        $user_email = $user->email;
        if ($user->status == 0) {
            $user->status = 2;
        }

        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }

        $user->save();

        if ($active_status == "") {
            $user->verified = 2;
            $user->email_verified_at = Carbon::now()->format('Y-m-d H:i:s');
            $user->save();

            if (!empty($ip)) {
                $user->ip = $ip;
            }

            $data = [];
            $data['user'] = $user;

            $this->initMailConfig();
            Mail::send("emails.welcome", $data, function ($message) use ($user, $jwt) {
                $message->to($user->email, '')
                    ->subject("Welcome to Aurano");
                $message->from('support@aurano.ai', 'Aurano');
            });

            $ac = new ActiveCampaign('https://snapilabshub.api-us1.com', '5be556aa05ebc70fb1c771e816ceac912f2c497ec01fe0968767b450c043b8ffffa8afa4');

            $params = [
                'ids'  => 'all',
                'full' => '1'
            ];
            $list_id = 18;
            if ($list_id != 0) {
                $contact = array(
                    "email" => $user_email,
                    "first_name" => $user_first_name,
                    "last_name" => $user_last_name,
                    "p[{$list_id}]" => 18,
                    "status[{$list_id}]" => 1, // "Active" status
                );

                $contact_sync = $ac->api("contact/sync", $contact);

                $ac->version(1);

                $message = array(
                    "format" => "mime",
                    "subject" => "A new lead has been added!",
                    "fromemail" => "support@campaign.com",
                    "fromname" => "Support",
                    "html" => "<p>A new lead has been created on your campaign!<br/>Name : " . ($user_first_name . " " . $user_last_name) . " <br/> Email : " . $user_email . "</p>",
                    "p[{$list_id}]" => $list_id,
                );
                $message_add = $ac->api("message/add", $message);
            }
        }

        $request->session()->put('user_id', $user->id);
        $request->session()->put('owner_account_id', $user->id);
        $request->session()->put('collaborator', "no");
        \Auth::loginUsingId($user->id);
        $this->setActiveProject($user->id);
        $user_name = $user->first_name . " " . $user->last_name;
        $request->session()->put('user_name', $user_name);
        $request->session()->put('user_email', $user->email);

        if (strpos($user->photo, "http") !== false) {
            $request->session()->put('photo', $user->photo);
        } else {
            $request->session()->put('photo', asset('upload/' . $user->photo));
        }

        $request->session()->put('user_role', $user->role);
        if ($user->copy_credits  == -1 || $user->monthly_credits == -1)
            $request->session()->put('copy_credits', -1);
        else
            $request->session()->put('copy_credits', $user->copy_credits + $user->monthly_credits);

        $request->session()->put('team_member', "no");
        $request->session()->put('skip_survey', $user->skip_survey);
        $skip_survey = $user->skip_survey;
        $request->session()->put('u_id', $user->id);
        $user_first_name = $user->first_name;
        $user_last_name = $user->last_name;
        $user_email = $user->email;

        $request->session()->put('user_status', $user->status);

        if (!empty($ip)) {
            $request->session()->put('ip', $ip);
        }

        session()->put("checked", "yes");
        //$request->session()->put('success_msg', 'Your account has been activated successfully. Please login with your email and password you used during signup.');

        $login_history = LoginHistory::where(['user_id' => $user->id, 'date' => date("Y-m-d")])->first();
        if (is_null($login_history)) {
            $login_history = new LoginHistory([
                'user_id' => $user->id,
                'count' => 1,
                'date' => date('Y-m-d'),
                'status' => 1
            ]);
            $login_history->save();
        } else {
            $login_history->count = $login_history->count * 1 + 1;
            $login_history->save();
        }

        return redirect("onboarding/survey");
    }

    private function sendVerification($user)
    {
        // try {
        //     $payload = [
        //         'email' => $user->email,
        //         'status' => "1",
        //         'generated_at' => time()
        //     ];

        //     $jwt = Jwt::encode($payload);

        //     $data = [];
        //     $data['email'] = $user->email;
        //     $data['jwt'] = $jwt;

        //     $this->initMailConfig();
        //     Mail::send("emails.verification", $data, function ($message) use ($user, $jwt) {
        //         $message->to($user->email, '')
        //             ->subject("Activate your account");
        //         $message->from('support@aurano.ai', 'Aurano');
        //     });
        // } catch (\Exception $e) {
        //     echo "Sorry, currently undergoing server maintenance! Please try again later.";
        //     exit;
        // }
    }

    public function resetPassword()
    {
        return view("reset_password");
    }

    public function doResetPassword(Request $request)
    {
        $user = User::where("email", $request->get("email"))->first();

        if (is_null($user)) {
            $error_msg = "Email is not register.";
            $request->session()->put('error_msg', $error_msg);
        } else {
            if ($request->post("con_password") != $request->post("password")) {
                $error_msg = "Password is not matached.";
                $request->session()->put('error_msg', $error_msg);
            } else {
                // $user[0]->password = Hash::make($request->get("password"));
                // $user[0]->save();
                // $request->session()->put('success_msg', "Successfuly reset your password!");
                $password = $request->post("password");
                try {
                    $data = array();
                    $data['password'] = $password;
                    $data['user_id'] = $user['id'];
                    $data['old_password'] = $user['password'];
                    $to_email = $user['email'];
                    $to_name = $user['first_name'] . " " . $user['last_name'];
                    $request->session()->put('success_msg', "Reset Password email is sent already! Please check confirm email on your inbox.");
                    $this->initMailConfig();
                    Mail::send("emails.reset_password", $data, function ($message) use ($to_name, $to_email) {
                        $message->to($to_email, $to_name)
                            ->subject("Reset your Password");
                        $message->from('support@aurano.ai', 'Aurano');
                    });
                } catch (Exception $e) {
                    $request->session()->put('success_msg', "Faild! Plese try again");
                } finally {
                    return redirect("login");
                }
            }
        }
        return redirect("forgotPassword");
        // return redirect("forgotPassword");
    }
    public function forgotPassword()
    {
        return view('forgot');
    }

    public function doForgotPassword($code, Request $request)
    {
        $code = base64_decode($code);
        $code = explode("^", $code);
        $id = $code[0];
        if (!isset($code[1])) {
            session()->put('error_msg', "detected fraud action");
            return redirect("login");
        }
        $password = $code[1];
        $user  = User::find($id);
        if (is_null($user)) {
            session()->put('error_msg', "detected fraud action");
            return redirect("login");
        }
        if (empty($code[2]) || $user->password != $code[2]) {
            session()->put('error_msg', "detected fraud action");
            return redirect("login");
        }
        $user->password = Hash::make($password);
        $user->save();
        session()->put('success_msg', "Successfuly reset your password!");
        // return redirect("forgotPassword");
        return redirect("login");
    }

    public function updatePassword(Request $request)
    {
        $user = User::find(session('user_id'));
        $user->password = Hash::make($request->get("password"));
        $user->save();
        echo json_encode(array("status" => "ok"));
    }

    public function logout(Request $request)
    {
        $admin_user_id = "";
        $admin_user_name = "";
        $admin_user_email = "";
        $admin_photo = "";
        $admin_role = "";
        $admin_status = "";
        if (!empty(session('admin_user_id'))) {
            $admin_user_id = session('admin_user_id');
            $admin_user_name = session('admin_user_name');
            $admin_user_email = session('admin_user_email');
            $admin_photo = session('admin_photo');
            $admin_role = session('admin_role');
            $admin_status = session('admin_status');
        }
        Session::flush(); // removes all session data
        if ($admin_user_id != "") {
            session()->put('admin_user_id', $admin_user_id);
            session()->put('admin_user_name', $admin_user_name);
            session()->put('admin_user_email', $admin_user_email);
            session()->put('admin_photo', $admin_photo);
            session()->put('admin_role', $admin_role);
            session()->put('admin_status', $admin_status);
        }
        return redirect("login");
    }

    public function updateProfile(Request $request)
    {
        $user = User::find(session('user_id'));

        $user->email = $request->post("email");
        $user->first_name = $request->post("first_name");
        $user->last_name = $request->post("last_name");

        if ($request->hasFile('profile_img')) {
            $image = $request->file('profile_img');
            $mime_type = $image->getClientmimeType();
            if (strpos($mime_type, 'image') !== false) {
                $file_name = "user_" . $request->session()->get("user_id") . "_" . time() . '.' . $image->getClientOriginalExtension();
                Storage::disk('s3')->put('public/upload/' . $file_name, file_get_contents($image));

                $aws_url = env('AWS_URL') != '' ? env('AWS_URL') : config('filesystems.disks.s3.url');
                $img_url = $aws_url . '/public/upload/' . $file_name;

                // $name = "user_".$request->session()->get("user_id")."_".time().'.'.$image->getClientOriginalExtension();
                // $destinationPath = public_path('/upload');
                // $image->move($destinationPath, $name);
                if (session("user_role") == "team_user") {
                    $user->img_url = $img_url;
                } else {
                    $user->photo = $img_url;
                }
            }
        }
        $user->save();
        $user_name = $user->first_name . " " . $user->last_name;
        $request->session()->put('owner_account_id', $user->id);

        $request->session()->put('user_name', $user_name);
        $request->session()->put('user_email', $user->email);
        if (session("user_role") == "team_user") {
            $request->session()->put('photo', $user->img_url);
        } else {

            if (strpos($user->photo, "http") !== false) {
                $request->session()->put('photo', $user->photo);
            } else {
                $request->session()->put('photo', asset('upload/' . $user->photo));
            }
        }

        return redirect($_SERVER['HTTP_REFERER']);
    }
}
