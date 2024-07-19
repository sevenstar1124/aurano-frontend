<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>>Aurano | @yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('image/favico.png') }}">
    <!-- Bootstrap -->
    <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link href="{{ asset('admin_assets/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin_assets/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

    <link href="{{ asset('admin_assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin_assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('admin_assets/vendors/jquery/dist/jquery.min.js') }}"></script>

    <link rel="stylesheet" type="text/css" href="{{asset('vendor/lc-switch/lc_switch.css')}}">
    <script src="{{asset('vendor/lc-switch/lc_switch.js')}}" type="text/javascript"></script>

    <link rel="stylesheet" type="text/css" href="{{asset('vendor/sweetalert/sweetalert2.min.css')}}">
    <script src="{{asset('vendor/sweetalert/sweetalert2.all.min.js')}}" type="text/javascript"></script>
    <!-- Custom Theme Style -->
    <link href="{{ asset('admin_assets/css/custom.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/toast-modal/jquery.toast.min.css') }}">
    <script type="text/javascript" src="{{ asset('vendor/toast-modal/jquery.toast.min.js') }}"></script>
    <style type="text/css">
      .img-circle.profile_img{
        background: #2a3f54;
      }
      .user-profile img{
        background: #2a3f54;
      }

      .nav.side-menu>li>a {
          margin-bottom: 6px;
          display: grid;
          grid-template-columns: 24px auto 20px;
          grid-gap: 5px;
      }
      .nav.side-menu>li>a svg{
        margin-top: 0px !important;
      }
      [v-cloak] {
        display: none;
      }
      .verify-invoice-loading {
        display: grid;
        place-content: center;
        background: rgba(0, 0, 0, 0.3);
        z-index: 999;
        position: fixed;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
      }
      #verify_user_invoice_app:not([v-cloak]) ~ .verify-invoice-loading {
        display: none;
      }
    </style>
    <script>(function(w){w.fpr=w.fpr||function(){w.fpr.q = w.fpr.q||[];w.fpr.q[arguments[0]=='set'?'unshift':'push'](arguments);};})(window);
    fpr("init", {cid:"35lybsgs"});
    fpr("click");
    </script>
    <script src="https://cdn.firstpromoter.com/fpr.js" async></script>
  </head>
  <?php
    $aws_url = env('AWS_URL')!=''?env('AWS_URL'):'https://videotours360.s3.us-east-1.amazonaws.com/public';

  ?>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{ url('a652bafe-7f8e-11ed-a1eb-0242ac120002') }}" class="site_title" style="text-align: center;padding: 0px;"><img  src="{{ asset('image/logo-white.png') }}"></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{ asset('upload/'.session('admin_photo'))}}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{ session('admin_user_name') }}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  @if(session('admin_status') == "admin" || session('admin_status') == "superadmin")
                  <li><a href="{{url('a652bafe-7f8e-11ed-a1eb-0242ac120002/stats')}}">
                     <svg style="height: 16px; margin-top: -5px; margin-right:10px" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 6V0H18V6H10ZM0 10V0H8V10H0ZM10 18V8H18V18H10ZM0 18V12H8V18H0ZM2 8H6V2H2V8ZM12 16H16V10H12V16ZM12 4H16V2H12V4ZM2 16H6V14H2V16Z" fill="white"/>
                    </svg>
                   Dashboard </a></li>

                    <li>
                        <a>
                            <svg  style="height: 18px; margin-top: -5px; margin-right:6px"  viewBox="0 0 22 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 13C2.16667 13 1.45833 12.7083 0.875 12.125C0.291667 11.5417 0 10.8333 0 10C0 9.16667 0.291667 8.45833 0.875 7.875C1.45833 7.29167 2.16667 7 3 7V5C3 4.45 3.196 3.97933 3.588 3.588C3.97933 3.196 4.45 3 5 3H8C8 2.16667 8.29167 1.45833 8.875 0.875C9.45833 0.291667 10.1667 0 11 0C11.8333 0 12.5417 0.291667 13.125 0.875C13.7083 1.45833 14 2.16667 14 3H17C17.55 3 18.021 3.196 18.413 3.588C18.8043 3.97933 19 4.45 19 5V7C19.8333 7 20.5417 7.29167 21.125 7.875C21.7083 8.45833 22 9.16667 22 10C22 10.8333 21.7083 11.5417 21.125 12.125C20.5417 12.7083 19.8333 13 19 13V17C19 17.55 18.8043 18.021 18.413 18.413C18.021 18.8043 17.55 19 17 19H5C4.45 19 3.97933 18.8043 3.588 18.413C3.196 18.021 3 17.55 3 17V13ZM8 11C8.41667 11 8.77067 10.854 9.062 10.562C9.354 10.2707 9.5 9.91667 9.5 9.5C9.5 9.08333 9.354 8.72933 9.062 8.438C8.77067 8.146 8.41667 8 8 8C7.58333 8 7.22933 8.146 6.938 8.438C6.646 8.72933 6.5 9.08333 6.5 9.5C6.5 9.91667 6.646 10.2707 6.938 10.562C7.22933 10.854 7.58333 11 8 11ZM14 11C14.4167 11 14.7707 10.854 15.062 10.562C15.354 10.2707 15.5 9.91667 15.5 9.5C15.5 9.08333 15.354 8.72933 15.062 8.438C14.7707 8.146 14.4167 8 14 8C13.5833 8 13.2293 8.146 12.938 8.438C12.646 8.72933 12.5 9.08333 12.5 9.5C12.5 9.91667 12.646 10.2707 12.938 10.562C13.2293 10.854 13.5833 11 14 11ZM7 15H15V13H7V15ZM5 17H17V5H5V17Z" fill="white"/>
                            </svg>
                            Copy AI Models
                            <span class="fa fa-chevron-down"></span>
                        </a>
                        <ul class="nav child_menu">
                              <li><a href="{{url('a652bafe-7f8e-11ed-a1eb-0242ac120002/copyAImodel')}}">CopyAI Model</a></li>
                              <li><a href="{{url('a652bafe-7f8e-11ed-a1eb-0242ac120002/formerCopy')}}">Copy Category</a></li>
                              <li><a href="{{url('a652bafe-7f8e-11ed-a1eb-0242ac120002/bookPrompts')}}">Book Prompt</a></li>
                              <li><a href="{{url('a652bafe-7f8e-11ed-a1eb-0242ac120002/socialPrompts')}}">Social Spark Prompt</a></li>
                              <li><a href="{{url('a652bafe-7f8e-11ed-a1eb-0242ac120002/personalities')}}">Chat Personality</a></li>
                              <li><a href="{{url('a652bafe-7f8e-11ed-a1eb-0242ac120002/badword')}}">Bad Words</a></li>
                              <li><a href="{{url('a652bafe-7f8e-11ed-a1eb-0242ac120002/prompts')}}">Prompts</a></li>
                              <li><a href="{{url('a652bafe-7f8e-11ed-a1eb-0242ac120002/avartarPrompts')}}">Avatar Prompts</a></li>
                        </ul>
                  </li>
                   
                  <li><a href="{{url('a652bafe-7f8e-11ed-a1eb-0242ac120002/alerts')}}">
                   <svg width="19" height="21" viewBox="0 0 19 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.9912 0.00195329C17.8599 0.00187836 17.7298 0.0276929 17.6084 0.0779211C17.4871 0.128149 17.3768 0.201806 17.2839 0.294679C17.1911 0.387553 17.1174 0.497822 17.0672 0.619181C17.017 0.740541 16.9911 0.87061 16.9912 1.00195V1.63867C16.1478 2.68438 15.0819 3.52887 13.871 4.11067C12.66 4.69248 11.3346 4.99696 9.99121 5.00195H3.99121C3.19583 5.00282 2.43327 5.31917 1.87085 5.88159C1.30843 6.44401 0.992079 7.20657 0.991211 8.00195V10.002C0.992079 10.7973 1.30843 11.5599 1.87085 12.1223C2.43327 12.6847 3.19583 13.0011 3.99121 13.002H4.475L2.07227 18.6084C2.00698 18.7604 1.98047 18.9263 1.99512 19.0911C2.00978 19.256 2.06514 19.4146 2.15624 19.5528C2.24734 19.6909 2.37133 19.8043 2.51706 19.8827C2.6628 19.9611 2.82572 20.0021 2.99121 20.002H6.99121C7.18696 20.0021 7.37843 19.9446 7.54182 19.8368C7.7052 19.729 7.83329 19.5755 7.91016 19.3955L10.6339 13.04C11.8646 13.1303 13.0636 13.472 14.157 14.0439C15.2505 14.6158 16.215 15.4058 16.9912 16.365V17.002C16.9912 17.2672 17.0966 17.5215 17.2841 17.7091C17.4716 17.8966 17.726 18.002 17.9912 18.002C18.2564 18.002 18.5108 17.8966 18.6983 17.7091C18.8859 17.5215 18.9912 17.2672 18.9912 17.002V1.00195C18.9913 0.87061 18.9655 0.74054 18.9152 0.61918C18.865 0.49782 18.7914 0.38755 18.6985 0.294676C18.6056 0.201803 18.4953 0.128146 18.374 0.0779185C18.2526 0.0276908 18.1226 0.00187705 17.9912 0.00195329ZM3.99121 11.002C3.72605 11.0018 3.4718 10.8964 3.2843 10.7089C3.0968 10.5214 2.99139 10.2671 2.99121 10.002V8.00195C2.99139 7.73679 3.09681 7.48254 3.2843 7.29505C3.4718 7.10755 3.72605 7.00213 3.99121 7.00195H4.99121V11.002H3.99121ZM6.33203 18.002H4.50781L6.65039 13.002H8.47461L6.33203 18.002ZM16.9912 13.5238C15.0195 11.8994 12.5459 11.0082 9.99121 11.0019H6.99121V7.0019H9.99121C12.5459 6.99537 15.0195 6.10406 16.9912 4.47956V13.5238Z" fill="white"></path>
                    </svg>
                  Alert Management </a></li>
                  @endif
                  @if(session('admin_status') != "support")
                  <li><a>
                    <svg style="height: 16px; margin-top: -5px; margin-right:8px"   viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 16C1.45 16 0.979333 15.8043 0.588 15.413C0.196 15.021 0 14.55 0 14V2C0 1.45 0.196 0.979333 0.588 0.588C0.979333 0.196 1.45 0 2 0H18C18.55 0 19.021 0.196 19.413 0.588C19.8043 0.979333 20 1.45 20 2V14C20 14.55 19.8043 15.021 19.413 15.413C19.021 15.8043 18.55 16 18 16H2ZM2 14H12.5V10.5H2V14ZM14.5 14H18V5H14.5V14ZM2 8.5H12.5V5H2V8.5Z" fill="white"/>
                    </svg>
                      Page Builder<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <!-- <li><a href="{{url('a652bafe-7f8e-11ed-a1eb-0242ac120002/pagePrompt')}}">Page Prompts</a></li> -->
                      <li><a href="{{url('a652bafe-7f8e-11ed-a1eb-0242ac120002/pageTemplates')}}">Page Templates</a></li>
                      <li><a href="{{url('a652bafe-7f8e-11ed-a1eb-0242ac120002/sectionTemplates')}}">Section Templates</a></li>
                    </ul>
                  </li>

                  <li><a>
                    <svg style="height: 18px; margin-top: -5px; margin-right:10px" width="16" height="19" viewBox="0 0 16 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 19C6.45 19 5.97933 18.8043 5.588 18.413C5.196 18.021 5 17.55 5 17V13H2C1.45 13 0.979333 12.804 0.588 12.412C0.196 12.0207 0 11.55 0 11V4C0 2.9 0.391667 1.95833 1.175 1.175C1.95833 0.391667 2.9 0 4 0H16V11C16 11.55 15.8043 12.0207 15.413 12.412C15.021 12.804 14.55 13 14 13H11V17C11 17.55 10.8043 18.021 10.413 18.413C10.021 18.8043 9.55 19 9 19H7ZM2 7H14V2H13V6H11V2H10V4H8V2H4C3.45 2 2.97933 2.196 2.588 2.588C2.196 2.97933 2 3.45 2 4V7ZM2 11H14V9H2V11Z" fill="white"/>
                    </svg>
                      Graphics <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <!-- <li><a href="{{ url('a652bafe-7f8e-11ed-a1eb-0242ac120002/graphics/category') }}">Category</a></li> -->
                      <li><a href="{{ url('a652bafe-7f8e-11ed-a1eb-0242ac120002/graphics/templates/'.base64_encode('6')) }}">AI Business Cards Templates</a></li>
                      <li><a href="{{ url('a652bafe-7f8e-11ed-a1eb-0242ac120002/graphics/templates/'.base64_encode(2)) }}">AI Banner Designs Templates</a></li>
                      <li><a href="{{ url('a652bafe-7f8e-11ed-a1eb-0242ac120002/graphics/templates/'.base64_encode(10)) }}">AI Custom Designer Templates</a></li>
                    </ul>
                  </li>

                  <li><a>
                    <svg style="height: 18px; margin-top: -5px; margin-right:10px; margin-left: 2px;"  viewBox="0 0 11 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 14V0L11 7L0 14ZM2 10.35L7.25 7L2 3.65V10.35Z" fill="white"/>
                    </svg>
                    Video <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('a652bafe-7f8e-11ed-a1eb-0242ac120002/video/category') }}">Video Category</a></li>
                      <li><a href="{{ url('a652bafe-7f8e-11ed-a1eb-0242ac120002/video/upload') }}">Upload Video</a></li>
                      <li><a href="{{ url('a652bafe-7f8e-11ed-a1eb-0242ac120002/video/templateCategory') }}">Template Category</a></li>
                      <li><a href="{{ url('a652bafe-7f8e-11ed-a1eb-0242ac120002/video/sceneTemplates') }}">Scene Templates</a></li>
                      <li><a href="{{ url('a652bafe-7f8e-11ed-a1eb-0242ac120002/video/basicSceneTemplates') }}">Basic Scene Design</a></li>
                      <li><a href="{{ url('a652bafe-7f8e-11ed-a1eb-0242ac120002/video/textTemplates') }}">Text Templates</a></li>
                    </ul>
                  </li>
                  <li><a>
                    <svg style="height: 16px; margin-top: -5px; margin-right:8px"   viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 16C1.45 16 0.979333 15.8043 0.588 15.413C0.196 15.021 0 14.55 0 14V2C0 1.45 0.196 0.979333 0.588 0.588C0.979333 0.196 1.45 0 2 0H18C18.55 0 19.021 0.196 19.413 0.588C19.8043 0.979333 20 1.45 20 2V14C20 14.55 19.8043 15.021 19.413 15.413C19.021 15.8043 18.55 16 18 16H2ZM2 14H12.5V10.5H2V14ZM14.5 14H18V5H14.5V14ZM2 8.5H12.5V5H2V8.5Z" fill="white"/>
                    </svg>
                    Form <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('a652bafe-7f8e-11ed-a1eb-0242ac120002/form/category') }}">Form Category</a></li>
                      <li><a href="{{ url('a652bafe-7f8e-11ed-a1eb-0242ac120002/form/templates') }}">Form Templates</a></li>
                    </ul>
                  </li>
                  @endif

                  @if(session('admin_status') == "admin" || session('admin_status') == "superadmin" || session('admin_status') == "support")
                  <li>
                        <a>
                           <svg style="height: 16px; margin-top: -5px; margin-right:10px"  viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M8 8C6.9 8 5.95833 7.60833 5.175 6.825C4.39167 6.04167 4 5.1 4 4C4 2.9 4.39167 1.95833 5.175 1.175C5.95833 0.391667 6.9 0 8 0C9.1 0 10.0417 0.391667 10.825 1.175C11.6083 1.95833 12 2.9 12 4C12 5.1 11.6083 6.04167 10.825 6.825C10.0417 7.60833 9.1 8 8 8ZM0 16V13.2C0 12.6333 0.146 12.1123 0.438 11.637C0.729334 11.1623 1.11667 10.8 1.6 10.55C2.63333 10.0333 3.68333 9.64567 4.75 9.387C5.81667 9.129 6.9 9 8 9C9.1 9 10.1833 9.129 11.25 9.387C12.3167 9.64567 13.3667 10.0333 14.4 10.55C14.8833 10.8 15.2707 11.1623 15.562 11.637C15.854 12.1123 16 12.6333 16 13.2V16H0ZM2 14H14V13.2C14 13.0167 13.9543 12.85 13.863 12.7C13.771 12.55 13.65 12.4333 13.5 12.35C12.6 11.9 11.6917 11.5623 10.775 11.337C9.85833 11.1123 8.93333 11 8 11C7.06667 11 6.14167 11.1123 5.225 11.337C4.30833 11.5623 3.4 11.9 2.5 12.35C2.35 12.4333 2.22933 12.55 2.138 12.7C2.046 12.85 2 13.0167 2 13.2V14ZM8 6C8.55 6 9.021 5.804 9.413 5.412C9.80433 5.02067 10 4.55 10 4C10 3.45 9.80433 2.97933 9.413 2.588C9.021 2.196 8.55 2 8 2C7.45 2 6.97933 2.196 6.588 2.588C6.196 2.97933 6 3.45 6 4C6 4.55 6.196 5.02067 6.588 5.412C6.97933 5.804 7.45 6 8 6Z" fill="white"/>
                              </svg>
                            Users
                            <span class="fa fa-chevron-down"></span>
                        </a>
                        <ul class="nav child_menu">
                              <li><a href="{{url('a652bafe-7f8e-11ed-a1eb-0242ac120002/userList')}}">Users</a></li>
                              <li><a href="{{url('a652bafe-7f8e-11ed-a1eb-0242ac120002/unactivatedUserList')}}">Unconfirmed Signups</a></li>
                              <li><a href="{{url('a652bafe-7f8e-11ed-a1eb-0242ac120002/nonePlanUserList')}}">Unactivated Trials</a></li>
                              <li><a href="{{url('a652bafe-7f8e-11ed-a1eb-0242ac120002/reseller')}}">Resellers</a></li>
                              <li><a href="{{url('a652bafe-7f8e-11ed-a1eb-0242ac120002/collaborator')}}">Collaborator Users</a></li>
                              <!-- <li><a href="{{url('a652bafe-7f8e-11ed-a1eb-0242ac120002/planCancel')}}">Cancellation Win Back</a></li> -->
                              <li><a href="{{url('a652bafe-7f8e-11ed-a1eb-0242ac120002/userPlan')}}">User Plan List</a></li>
                              <li><a href="{{url('a652bafe-7f8e-11ed-a1eb-0242ac120002/migrationUser')}}">Migration Users</a></li>
                              <li><a href="{{url('a652bafe-7f8e-11ed-a1eb-0242ac120002/noSubscriptionUser')}}">No Subscription Users</a></li>
                        </ul>
                  </li>

                 
                  {{--<li><a href="{{url('a652bafe-7f8e-11ed-a1eb-0242ac120002/userStatus')}}">
                    <svg style="height: 16px; margin-top: -5px; margin-right:10px"  viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M8 8C6.9 8 5.95833 7.60833 5.175 6.825C4.39167 6.04167 4 5.1 4 4C4 2.9 4.39167 1.95833 5.175 1.175C5.95833 0.391667 6.9 0 8 0C9.1 0 10.0417 0.391667 10.825 1.175C11.6083 1.95833 12 2.9 12 4C12 5.1 11.6083 6.04167 10.825 6.825C10.0417 7.60833 9.1 8 8 8ZM0 16V13.2C0 12.6333 0.146 12.1123 0.438 11.637C0.729334 11.1623 1.11667 10.8 1.6 10.55C2.63333 10.0333 3.68333 9.64567 4.75 9.387C5.81667 9.129 6.9 9 8 9C9.1 9 10.1833 9.129 11.25 9.387C12.3167 9.64567 13.3667 10.0333 14.4 10.55C14.8833 10.8 15.2707 11.1623 15.562 11.637C15.854 12.1123 16 12.6333 16 13.2V16H0ZM2 14H14V13.2C14 13.0167 13.9543 12.85 13.863 12.7C13.771 12.55 13.65 12.4333 13.5 12.35C12.6 11.9 11.6917 11.5623 10.775 11.337C9.85833 11.1123 8.93333 11 8 11C7.06667 11 6.14167 11.1123 5.225 11.337C4.30833 11.5623 3.4 11.9 2.5 12.35C2.35 12.4333 2.22933 12.55 2.138 12.7C2.046 12.85 2 13.0167 2 13.2V14ZM8 6C8.55 6 9.021 5.804 9.413 5.412C9.80433 5.02067 10 4.55 10 4C10 3.45 9.80433 2.97933 9.413 2.588C9.021 2.196 8.55 2 8 2C7.45 2 6.97933 2.196 6.588 2.588C6.196 2.97933 6 3.45 6 4C6 4.55 6.196 5.02067 6.588 5.412C6.97933 5.804 7.45 6 8 6Z" fill="white"/>
                  </svg>
                    User Status
                  </a></li>

                  <li><a href="{{url('a652bafe-7f8e-11ed-a1eb-0242ac120002/dualsubscriptions')}}">
                    <svg style="height: 16px; margin-top: -5px; margin-right:10px"  viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.59258 14.1667V8.33337H4.23279V14.1667H2.59258ZM7.51321 14.1667V8.33337H9.15343V14.1667H7.51321ZM0.132263 17.5V15.8334H16.5344V17.5H0.132263ZM12.4338 14.1667V8.33337H14.0741V14.1667H12.4338ZM0.132263 6.66671V5.00004L8.33332 0.833374L16.5344 5.00004V6.66671H0.132263ZM3.78173 5.00004H12.8849L8.33332 2.70837L3.78173 5.00004Z" fill="white"/>
                    </svg>
                    Dual subscription users
                  </a></li>
                  <li><a href="{{url('a652bafe-7f8e-11ed-a1eb-0242ac120002/manualUsers')}}">
                    <svg style="height: 16px; margin-top: -5px; margin-right:10px"  viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.59258 14.1667V8.33337H4.23279V14.1667H2.59258ZM7.51321 14.1667V8.33337H9.15343V14.1667H7.51321ZM0.132263 17.5V15.8334H16.5344V17.5H0.132263ZM12.4338 14.1667V8.33337H14.0741V14.1667H12.4338ZM0.132263 6.66671V5.00004L8.33332 0.833374L16.5344 5.00004V6.66671H0.132263ZM3.78173 5.00004H12.8849L8.33332 2.70837L3.78173 5.00004Z" fill="white"/>
                    </svg>
                    Manual Users
                  </a></li>
<!--
                  <li><a href="{{url('a652bafe-7f8e-11ed-a1eb-0242ac120002/stripeuser')}}">
                    <svg style="height: 16px; margin-top: -5px; margin-right:10px"  viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.59258 14.1667V8.33337H4.23279V14.1667H2.59258ZM7.51321 14.1667V8.33337H9.15343V14.1667H7.51321ZM0.132263 17.5V15.8334H16.5344V17.5H0.132263ZM12.4338 14.1667V8.33337H14.0741V14.1667H12.4338ZM0.132263 6.66671V5.00004L8.33332 0.833374L16.5344 5.00004V6.66671H0.132263ZM3.78173 5.00004H12.8849L8.33332 2.70837L3.78173 5.00004Z" fill="white"/>
                    </svg>
                    Stripe User
                  </a></li> -->
                  --}}
                  {{--<li><a>
                    <svg style="height: 16px; margin-top: -5px; margin-right:10px"  viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 8C6.9 8 5.95833 7.60833 5.175 6.825C4.39167 6.04167 4 5.1 4 4C4 2.9 4.39167 1.95833 5.175 1.175C5.95833 0.391667 6.9 0 8 0C9.1 0 10.0417 0.391667 10.825 1.175C11.6083 1.95833 12 2.9 12 4C12 5.1 11.6083 6.04167 10.825 6.825C10.0417 7.60833 9.1 8 8 8ZM0 16V13.2C0 12.6333 0.146 12.1123 0.438 11.637C0.729334 11.1623 1.11667 10.8 1.6 10.55C2.63333 10.0333 3.68333 9.64567 4.75 9.387C5.81667 9.129 6.9 9 8 9C9.1 9 10.1833 9.129 11.25 9.387C12.3167 9.64567 13.3667 10.0333 14.4 10.55C14.8833 10.8 15.2707 11.1623 15.562 11.637C15.854 12.1123 16 12.6333 16 13.2V16H0ZM2 14H14V13.2C14 13.0167 13.9543 12.85 13.863 12.7C13.771 12.55 13.65 12.4333 13.5 12.35C12.6 11.9 11.6917 11.5623 10.775 11.337C9.85833 11.1123 8.93333 11 8 11C7.06667 11 6.14167 11.1123 5.225 11.337C4.30833 11.5623 3.4 11.9 2.5 12.35C2.35 12.4333 2.22933 12.55 2.138 12.7C2.046 12.85 2 13.0167 2 13.2V14ZM8 6C8.55 6 9.021 5.804 9.413 5.412C9.80433 5.02067 10 4.55 10 4C10 3.45 9.80433 2.97933 9.413 2.588C9.021 2.196 8.55 2 8 2C7.45 2 6.97933 2.196 6.588 2.588C6.196 2.97933 6 3.45 6 4C6 4.55 6.196 5.02067 6.588 5.412C6.97933 5.804 7.45 6 8 6Z" fill="white"/>
                    </svg>
                    Admin <span class="fa fa-chevron-down"></span></a>

                    <ul class="nav child_menu">
                      <li><a href="{{ url('a652bafe-7f8e-11ed-a1eb-0242ac120002/adminList') }}">Admin</a></li>
                    </ul>
                  </li>--}}

                  <li><a href="{{url('a652bafe-7f8e-11ed-a1eb-0242ac120002/adminList')}}">
                    <svg style="height: 16px; margin-top: -5px; margin-right:10px"  viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 8C6.9 8 5.95833 7.60833 5.175 6.825C4.39167 6.04167 4 5.1 4 4C4 2.9 4.39167 1.95833 5.175 1.175C5.95833 0.391667 6.9 0 8 0C9.1 0 10.0417 0.391667 10.825 1.175C11.6083 1.95833 12 2.9 12 4C12 5.1 11.6083 6.04167 10.825 6.825C10.0417 7.60833 9.1 8 8 8ZM0 16V13.2C0 12.6333 0.146 12.1123 0.438 11.637C0.729334 11.1623 1.11667 10.8 1.6 10.55C2.63333 10.0333 3.68333 9.64567 4.75 9.387C5.81667 9.129 6.9 9 8 9C9.1 9 10.1833 9.129 11.25 9.387C12.3167 9.64567 13.3667 10.0333 14.4 10.55C14.8833 10.8 15.2707 11.1623 15.562 11.637C15.854 12.1123 16 12.6333 16 13.2V16H0ZM2 14H14V13.2C14 13.0167 13.9543 12.85 13.863 12.7C13.771 12.55 13.65 12.4333 13.5 12.35C12.6 11.9 11.6917 11.5623 10.775 11.337C9.85833 11.1123 8.93333 11 8 11C7.06667 11 6.14167 11.1123 5.225 11.337C4.30833 11.5623 3.4 11.9 2.5 12.35C2.35 12.4333 2.22933 12.55 2.138 12.7C2.046 12.85 2 13.0167 2 13.2V14ZM8 6C8.55 6 9.021 5.804 9.413 5.412C9.80433 5.02067 10 4.55 10 4C10 3.45 9.80433 2.97933 9.413 2.588C9.021 2.196 8.55 2 8 2C7.45 2 6.97933 2.196 6.588 2.588C6.196 2.97933 6 3.45 6 4C6 4.55 6.196 5.02067 6.588 5.412C6.97933 5.804 7.45 6 8 6Z" fill="white"/>
                    </svg>
                    Admin
                  </a></li>



                  <li><a>
                    <svg style="height: 16px; margin-top: -5px; margin-right:10px"  viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 8C6.9 8 5.95833 7.60833 5.175 6.825C4.39167 6.04167 4 5.1 4 4C4 2.9 4.39167 1.95833 5.175 1.175C5.95833 0.391667 6.9 0 8 0C9.1 0 10.0417 0.391667 10.825 1.175C11.6083 1.95833 12 2.9 12 4C12 5.1 11.6083 6.04167 10.825 6.825C10.0417 7.60833 9.1 8 8 8ZM0 16V13.2C0 12.6333 0.146 12.1123 0.438 11.637C0.729334 11.1623 1.11667 10.8 1.6 10.55C2.63333 10.0333 3.68333 9.64567 4.75 9.387C5.81667 9.129 6.9 9 8 9C9.1 9 10.1833 9.129 11.25 9.387C12.3167 9.64567 13.3667 10.0333 14.4 10.55C14.8833 10.8 15.2707 11.1623 15.562 11.637C15.854 12.1123 16 12.6333 16 13.2V16H0ZM2 14H14V13.2C14 13.0167 13.9543 12.85 13.863 12.7C13.771 12.55 13.65 12.4333 13.5 12.35C12.6 11.9 11.6917 11.5623 10.775 11.337C9.85833 11.1123 8.93333 11 8 11C7.06667 11 6.14167 11.1123 5.225 11.337C4.30833 11.5623 3.4 11.9 2.5 12.35C2.35 12.4333 2.22933 12.55 2.138 12.7C2.046 12.85 2 13.0167 2 13.2V14ZM8 6C8.55 6 9.021 5.804 9.413 5.412C9.80433 5.02067 10 4.55 10 4C10 3.45 9.80433 2.97933 9.413 2.588C9.021 2.196 8.55 2 8 2C7.45 2 6.97933 2.196 6.588 2.588C6.196 2.97933 6 3.45 6 4C6 4.55 6.196 5.02067 6.588 5.412C6.97933 5.804 7.45 6 8 6Z" fill="white"/>
                    </svg>
                    Support <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a class="verify_user_invoice" href="#">Verify User Invoice</a></li>
                      
                      <li><a href="{{ url('a652bafe-7f8e-11ed-a1eb-0242ac120002/unlockedUserList') }}">Tshirt Unlocked Users</a></li>
                     
                      <!-- <li><a href="{{ url('a652bafe-7f8e-11ed-a1eb-0242ac120002/adminList') }}">Admin</a></li> -->
                      <li><a href="{{ url('a652bafe-7f8e-11ed-a1eb-0242ac120002/cancelRequests') }}">Cancel Requests</a></li>
                      <li><a href="{{ url('a652bafe-7f8e-11ed-a1eb-0242ac120002/smsmessage') }}">SMS Text</a></li>
                      <li><a href="{{url('a652bafe-7f8e-11ed-a1eb-0242ac120002/planCancel')}}">Cancellation Win Back</a></li>
                      <li><a href="{{url('a652bafe-7f8e-11ed-a1eb-0242ac120002/cancelSurvey')}}">Cancellation Survey</a></li>

                      {{--
                        <li><a href="{{ url('admin/addUser/user') }}">Add User</a></li>
                        <li><a href="{{ url('admin/addUserPlan') }}">Add User Plan</a></li> 
                        <li><a href="{{ url('a652bafe-7f8e-11ed-a1eb-0242ac120002/paidUserList/all') }}">Paid User</a></li>
                         <!-- <li><a href="{{ url('a652bafe-7f8e-11ed-a1eb-0242ac120002/unlimitedUserList') }}">Unlimited Founders Deal Users</a></li>
                      <li><a href="{{ url('a652bafe-7f8e-11ed-a1eb-0242ac120002/expiredUnlimitedUserList') }}">Expired Founders Deal Users</a></li> -->
                      <!-- <li><a href="{{ url('a652bafe-7f8e-11ed-a1eb-0242ac120002/refundedUserList') }}">Refunded Users</a></li> -->

                      --}}
                    </ul>
                  </li>
                  @endif
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                <ul class=" navbar-right">
                  <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                      <img src="{{ asset('upload/'.session('admin_photo'))}}" alt="">{{ session('admin_user_name') }}
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item"  href="javascript:;"> Profile</a>
                      <a class="dropdown-item"  href="{{ url('a652bafe-7f8e-11ed-a1eb-0242ac120002/logout') }}"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    </div>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        <!-- /top navigation -->

        <!-- page content -->
        @yield('content')
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            <!-- Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a> -->
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>



    <div id="verify_user_invoice_modal" class="modal fade modal-small" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true">
      <div id="verify_user_invoice_app" v-cloak class="modal-dialog modal-lg">
        <div class="modal-content">

          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Verify User Invoice</h4>
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <form id="verify_user_invoice" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Gateway<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <select v-model="form.gateway" id="invoice_gateway" name="gateway" required="required" class="form-control">
                    <option value="paddle">Paddle</option>
                    <option value="jvzoo">Jvzoo</option>
                    <option value="thrive">ThriveCart</option>
                    <!-- <option value="paystack">Paystack</option> -->
                    <!-- <option value="clickbank">Clickbank</option> -->
                  </select>
                </div>
              </div>
              <div v-if="form.gateway == 'thrive'" class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Email<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input v-model="form.email" type="email" id="invoice_email" name="email" required="required" class="form-control ">
                </div>
              </div>
              <div  class="item form-group">
                <label v-if="form.gateway == 'paddle'" class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Subscription Id<span class="required">*</span>
                </label>
                <label v-if="form.gateway == 'jvzoo'" class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Payment Id<span class="required">*</span>
                </label>
                <label v-if="form.gateway == 'thrive' || form.gateway == 'clickbank'" class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Order Id<span class="required">*</span>
                </label>
                <label v-if="form.gateway == 'paystack'" class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Transaction Id<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input v-model="form.number" type="text" id="invoice_number" name="invoice_number" required="required" class="form-control ">
                </div>
              </div>
              <div class="item form-group" style="justify-content: center;">
                <button @click="checkInvoice" type="button" class="btn btn-primary pull-right" style="width: 365px;">
                  <span v-if="!isLoading">Search</span>
                  <span v-if="isLoading">Searching...</span>
                </button>
              </div>
              <div v-if="!transactions && transactions.length == 0" class="item form-group" style="justify-content: center;">
                 No record found!
              </div>
              <div v-if="transactions && transactions.length > 0" class="row">
                <div class="col-sm-12">
                  <div class="card-box table-responsive">

                  <table id="user_table" class="table table-striped table-bordered dataTable" style="width:100%">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>User</th>
                        <th>Plan</th>
                        <th>Status</th>
                        <th>Paid</th>
                        <th>Purchase Date</th>
                        <th>Signup Date</th>
                      </tr>
                    </thead>
                    <tbody id="user_table_body">
                        <tr v-for="(transaction,index) in transactions">
                          <td>@{{transaction.subscription_id}}</td>
                          <td>
                              @{{transaction.email}}
                          </td>
                          <td>@{{transaction.plan}}</td>
                          <td>@{{transaction.status}}</td>
                          <td>@{{transaction.payments.amount}}</td>
                          <td>@{{transaction.payments.date}}</td>
                          <td>@{{transaction.signup_date}}</td>
                        </tr>
                    </tbody>
                  </table>


                </div>
              </div>
            </div>
              <!-- <div v-if="isError" class="item form-group" style="color:red;justify-content: center;">
                 No record found!
              </div> -->
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>

        </div>
      </div>
      <div class="verify-invoice-loading">
        <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
      </div>
    </div>


    <!-- jQuery -->
    <!-- Bootstrap -->
    <script src=" {{ asset('admin_assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- FastClick -->
    <script src=" {{ asset('admin_assets/vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src=" {{ asset('admin_assets/vendors/nprogress/nprogress.js') }}"></script>
    <!-- iCheck -->
    <script src=" {{ asset('admin_assets/vendors/iCheck/icheck.min.js') }}"></script>
    <!-- Datatables -->
    <script src=" {{ asset('admin_assets/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src=" {{ asset('admin_assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script src=" {{ asset('admin_assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>

    <!-- Custom Theme Scripts -->
    <script type="text/javascript">
      var asset_url = "{{ asset('') }}";
      var _token = "<?php echo csrf_token(); ?>";
      var aws_url = "{{ $aws_url."/" }}";
      window.token = _token;
    </script>
    <script src="{{ asset('admin_assets/js/custom.min.js') }}"></script>
    <script src="{{ asset('admin_assets/js/admin.js') }}"></script>

    <script src="{{ asset('js/vendors/axios.min.js') }}"></script>
    <script src="{{ asset('js/vendors/vue.js') }}"></script>
    <script src="{{ asset('js/vendors/vee-validate.min.js') }}"></script>
    <script src="{{ asset('admin_assets/js/verify-invoice.js') }}?v=1.0"></script>

    <script>

    </script>
    @yield('scripts')


  </body>
</html>