@extends('layouts.auth')
@section('title', 'Login')

@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('css/login-1.css')}}">
<link href="https://fonts.googleapis.com/css?family=Nunito|Poppins:700,500" rel="stylesheet">
<div class="rc-login-content" style="margin: 0px auto; width: 100%; max-width: 400px; padding: 40px 20px;">
    <div class="rc-loing-title">
        Create Your Account: Step 1 of 2
    </div>
    <div class="rc-login-step-wrap mt-3">
        <div class="rc-login-step-item active">
            <div class="rc-loing-step-num">1</div>
            <div class="rc-loing-step-bar">
                <div class="rc-loing-step-bar-content"></div>
            </div>
        </div>
        <div class="rc-login-step-item">
            <div class="rc-loing-step-num">2</div>
            <div class="rc-loing-step-bar">
                <div class="rc-loing-step-bar-content"></div>
            </div>
        </div>
    </div>
    <div class="rc-loing-desc mt-5">
        1,527 People Joined<br/>Last Week. Join Them!
    </div>
    <div class="rc-loing-subtitle mt-3">
        Start Your FREE Trial Now!
    </div>


    <div class="rc-login-main">
        <form class="login100-form validate-form" action="{{ url('signup') }}" method="post">
        @csrf
        @if(session('success_msg') == "")
        <div class="rc-login-input validate-input">
            <input type="text" name="full_name" class="input100 form-control" required="" placeholder="Enter your full name" value="{{session('u_name')}}">
        </div>
        <div class="rc-login-input validate-input">
            <input type="email" name="email" class="input100 form-control" required="" placeholder="Enter your email" value="{{session('u_email')}}">
        </div>
        <div class="rc-login-input validate-input">
            <input type="tel" name="phone" class="input100 form-control" required="" placeholder="Enter your phone number">
        </div>
        <div class="rc-login-input validate-input">
            <input type="password" id="password" name="password" class="input100 form-control" required="" placeholder="Enter your password" value="{{session('u_password')}}">
        </div>
        @endif

         @if(session('success_msg') != "")
        <div style="border: 1px solid #005200;    padding: 20px;    border-radius: 5px;    margin-bottom: 20px;    background: #00800014;    color: #013401; margin-top: 20px;" id="success_msg">
            {{session('success_msg')}}
        </div>
        @endif
        @if(session('error_msg') != "")
        <div style="border: 1px solid rgb(243 7 7);padding: 20px;border-radius: 5px;margin-bottom: 20px;background: rgb(155 3 3 / 8%);color: rgb(217 0 0); margin-top: 20px;" id="error_msg">
            {{session('error_msg')}}
        </div>
        @endif
        @if($errors->any())
        <div style="border: 1px solid rgb(243 7 7);padding: 20px;border-radius: 5px;margin-bottom: 20px;background: rgb(155 3 3 / 8%);color: rgb(217 0 0); margin-top: 20px;" id="error_msg">
            {{$errors->first()}}
        </div>
        @endif


        <input type="hidden" name="signup_type" value="1">
        @if(session('success_msg') == "")
        <div class="rc-login-button" style="margin-top: 20px;">
            <button class="btn btn-success form-control" style="text-transform:uppercase; font-weight:600; font-size: 14px !important;">Start Building My Marketing Assets</button>
        </div>
        @endif
        <div class="rc-login-policy-wrap mt-3">
            <div class="rc-flex-top" style="padding-top:4px">
                <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.4584 6.03174H2.54173C1.75932 6.03174 1.12506 6.70331 1.12506 7.53174V13.5317C1.12506 14.3602 1.75932 15.0317 2.54173 15.0317H12.4584C13.2408 15.0317 13.8751 14.3602 13.8751 13.5317V7.53174C13.8751 6.70331 13.2408 6.03174 12.4584 6.03174Z" stroke="#757575" stroke-width="1.53809" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M3.25012 3.03174C3.25012 2.435 3.47401 1.8627 3.87252 1.44075C4.27104 1.01879 4.81154 0.781738 5.37512 0.781738H9.62512C10.1887 0.781738 10.7292 1.01879 11.1277 1.44075C11.5262 1.8627 11.7501 2.435 11.7501 3.03174V6.03174H3.25012V3.03174Z" stroke="#757575" stroke-width="1.53809" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <div class="rc-flex-top rc-login-policy">
                By providing us with your information you are consenting to the collection and use of your information in accordance with our Terms of Service and Privacy Policy.
            </div>
        </div>

        <div class="rc-flex" style="margin-top: 10px; grid-gap: 10px; font-size:14px; color:#757575;">
            Already have an account? <a href="{{ url('login') }}" style="color:#623ceb; font-weight: 500;">Login Now</a>
        </div>
        
    </form>
    </div>
</div>
@php
    session()->forget('error_msg');
    session()->forget('success_msg');
    session()->forget('u_email');
    session()->forget('u_name');
    session()->forget('u_password');
@endphp

@endsection

@section('scripts')
<script src="https://unpkg.com/vee-validate@2.2.15/dist/vee-validate.js"></script>
<script>
    Vue.use(VeeValidate, {
        events: 'change'
    });

    let errors = @json($errors->all()) || [];

    new Vue({
        name: 'ResetPassword',
        el: '#app',
        methods: {
            async submitForm(evt) {
                const isValid = await this.$validator.validate();

                if (isValid) {
                    evt.target.submit();
                }
            }
        },
        // mounted() {
        //     if (errors.length > 0) {
        //         errors.forEach(err => {
        //             this.errors.add({
        //                 field: 'email',
        //                 msg: err
        //             })
        //         })
        //     }
        // }
    })

</script>
@endsection
