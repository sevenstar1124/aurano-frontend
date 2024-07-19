@extends('layouts/client')
@section('content')
    {{-- <div class="aur-main-route">View Agent</div> --}}
    <div class="aur-main-content">
        <div class="row">
            <div class="col-md-12 col-lg-4 aur-agent-info-wrap">
                <div class="aur-agent-avatar-wrap mb-4 aur-flex-start aur-gap-24">
                    <div class="aur-agent-avatar-logo">
                        <img src="{{asset('image/Polygon 1.png')}}" alt="">
                    </div>
                    <div class="aur-agent-avatar-name">
                        <div class="aur-font-20 aur-font-700 aur-heading-color">
                            Oto G.
                        </div>
                        <div class="aur-font-12 aur-font-400 aur-heading-color">
                            SERVICE AGENT
                        </div>
                    </div>
                </div>
                <div class="aur-agent-content-wrap">
                    <div class="aur-agent-phone-wrap mb-4 aur-flex-center">
                        <div class="aur-font-30 aur-font-500 aur-agent-phone aur-text-color">+01 234 123 345</div>
                        <div class="aur-font-12 aur-font-500 aur-heading-color aur-add-agent-phone aur-flex-center">
                            + Purchase No
                        </div>
                    </div>
                    <div class="aur-agent-prompt-wrap mb-4">
                        <div class="aur-font-16 aur-font-500 mb-3">Prompt Directive</div>
                        <div class="aur-agent-prompt-content mb-3 aur-font-14 aur-font-400 aur-text-color">
                            Task: Imagine you are a receptionist at Toronto Dental Office, handling phone calls to schedule appointments. Your greeting should be warm and welcoming, starting with 'Hi, this is Toronto Dental Office, how may I help you?' Be mindful of the office's operational hours: available next Tuesday from 8am to 5pm, and the insurance plans accepted are Delta Dental and Anthem. 
        
                            Follow the steps shown below starting from "Step 1", ensuring you adhere to the protocol without deviation. Please follow the steps and do step 1 first to know if they are new or existing patient and don't ask for their name or phone number before knowing they are existing or new patients.
        
                            Step 1: Determine if the caller is a new or existing patient. Direct new patients to step 2; existing patients proceed to step 3.
        
                        </div>
                        <div class="btn btn-dark text-white aur-add-agent-prompt-btn">+ Explore Prompts</div>
                    </div>
                    <div class="aur-agent-history-wrap">
                        <div class="aur-agent-history-item">
                            <div class="aur-flex-end">
                                <svg width="27" height="26" viewBox="0 0 27 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.5882 25.0006C21.1182 25.0006 26.4118 19.707 26.4118 13.1771C26.4118 6.6471 21.1182 1.35352 14.5882 1.35352C8.05823 1.35352 2.76465 6.6471 2.76465 13.1771C2.76465 19.707 8.05823 25.0006 14.5882 25.0006Z" fill="#D3F26A"/>
                                    <path d="M12.8236 24.6471C19.3535 24.6471 24.6471 19.3535 24.6471 12.8236C24.6471 6.29359 19.3535 1 12.8236 1C6.29359 1 1 6.29359 1 12.8236C1 19.3535 6.29359 24.6471 12.8236 24.6471Z" stroke="#002B49" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M12.8232 5.72852V12.8226L17.5527 15.1874" stroke="#41D37E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="aur-flex-center aur-font-30 aur-font-700 aur-primay-color">02:05:30</div>
                            <div class="aur-flex-center aur-font-16 aur-font-500 aur-text-color">Running Time</div>
                        </div>
                        <div class="aur-agent-history-item">
                            <div class="aur-flex-end">
                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M25.7384 19.2565V22.6969C25.7397 23.0162 25.6743 23.3324 25.5463 23.625C25.4184 23.9176 25.2307 24.1803 24.9954 24.3962C24.76 24.6121 24.4822 24.7765 24.1796 24.8788C23.8771 24.9812 23.5565 25.0192 23.2384 24.9904C19.7096 24.607 16.3199 23.4011 13.3417 21.4698C10.5709 19.7091 8.22176 17.3599 6.46107 14.5891C4.52299 11.5974 3.31688 8.19126 2.94046 4.64657C2.9118 4.32945 2.94949 4.00983 3.05112 3.70808C3.15276 3.40632 3.31611 3.12903 3.53078 2.89386C3.74545 2.65869 4.00674 2.4708 4.29801 2.34215C4.58927 2.21349 4.90413 2.1469 5.22255 2.1466H8.66288C9.21942 2.14112 9.75896 2.3382 10.1809 2.7011C10.6029 3.064 10.8785 3.56797 10.9564 4.11905C11.1016 5.22004 11.3709 6.30106 11.7592 7.3415C11.9135 7.75196 11.9469 8.19804 11.8554 8.6269C11.7639 9.05576 11.5515 9.4494 11.2431 9.7612L9.78672 11.2176C11.4192 14.0886 13.7964 16.4658 16.6674 18.0983L18.1238 16.6419C18.4356 16.3335 18.8292 16.1211 19.2581 16.0296C19.687 15.9381 20.133 15.9715 20.5435 16.1258C21.5839 16.5141 22.665 16.7834 23.7659 16.9286C24.323 17.0072 24.8318 17.2877 25.1954 17.717C25.5591 18.1462 25.7524 18.6941 25.7384 19.2565Z" fill="#D3F26A"/>
                                    <path d="M24.9539 7.88067V1H18.0732" stroke="#2884FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M16.9268 9.02744L24.9542 1" stroke="#2884FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M23.8072 19.2565V22.6969C23.8085 23.0162 23.7431 23.3324 23.6152 23.625C23.4872 23.9176 23.2996 24.1803 23.0642 24.3962C22.8289 24.6121 22.551 24.7765 22.2485 24.8788C21.9459 24.9812 21.6254 25.0192 21.3073 24.9904C17.7784 24.607 14.3888 23.4011 11.4106 21.4698C8.63977 19.7091 6.29061 17.3599 4.52992 14.5891C2.59184 11.5974 1.38573 8.19126 1.00931 4.64657C0.980651 4.32945 1.01834 4.00983 1.11997 3.70808C1.22161 3.40632 1.38496 3.12903 1.59963 2.89386C1.8143 2.65869 2.07559 2.4708 2.36685 2.34215C2.65812 2.21349 2.97298 2.1469 3.2914 2.1466H6.73173C7.28827 2.14112 7.82781 2.3382 8.24979 2.7011C8.67177 3.064 8.94739 3.56797 9.02528 4.11905C9.17049 5.22004 9.43979 6.30106 9.82803 7.3415C9.98232 7.75196 10.0157 8.19804 9.92425 8.6269C9.83279 9.05576 9.62031 9.4494 9.31198 9.7612L7.85557 11.2176C9.48807 14.0886 11.8652 16.4658 14.7362 18.0983L16.1926 16.6419C16.5044 16.3335 16.8981 16.1211 17.3269 16.0296C17.7558 15.9381 18.2019 15.9715 18.6123 16.1258C19.6528 16.5141 20.7338 16.7834 21.8348 16.9286C22.3919 17.0072 22.9006 17.2877 23.2643 17.717C23.628 18.1462 23.8212 18.6941 23.8072 19.2565Z" stroke="#002B49" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="aur-flex-center aur-font-40 aur-font-700 aur-primay-color">340</div>
                            <div class="aur-flex-center aur-font-16 aur-font-500 aur-text-color">Initiated Calls</div>
                        </div>
                        <div class="aur-agent-history-item">
                            <div class="aur-flex-end">
                                <svg width="27" height="25" viewBox="0 0 27 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M25.7384 18.2565V21.6969C25.7397 22.0162 25.6743 22.3324 25.5463 22.625C25.4184 22.9176 25.2307 23.1803 24.9954 23.3962C24.76 23.6121 24.4822 23.7765 24.1796 23.8788C23.8771 23.9812 23.5565 24.0192 23.2384 23.9904C19.7096 23.607 16.3199 22.4011 13.3417 20.4698C10.5709 18.7091 8.22176 16.3599 6.46107 13.5891C4.52299 10.5974 3.31688 7.19126 2.94046 3.64657C2.9118 3.32945 2.94949 3.00983 3.05112 2.70808C3.15276 2.40632 3.31611 2.12903 3.53078 1.89386C3.74545 1.65869 4.00674 1.4708 4.29801 1.34215C4.58927 1.21349 4.90413 1.1469 5.22255 1.1466H8.66288C9.21942 1.14112 9.75896 1.3382 10.1809 1.7011C10.6029 2.064 10.8785 2.56797 10.9564 3.11905C11.1016 4.22004 11.3709 5.30106 11.7592 6.3415C11.9135 6.75196 11.9469 7.19804 11.8554 7.6269C11.7639 8.05576 11.5515 8.4494 11.2431 8.7612L9.78672 10.2176C11.4192 13.0886 13.7964 15.4658 16.6674 17.0983L18.1238 15.6419C18.4356 15.3335 18.8292 15.1211 19.2581 15.0296C19.687 14.9381 20.133 14.9715 20.5435 15.1258C21.5839 15.5141 22.665 15.7834 23.7659 15.9286C24.323 16.0072 24.8318 16.2877 25.1954 16.717C25.5591 17.1462 25.7524 17.6941 25.7384 18.2565Z" fill="#D3F26A"/>
                                    <path d="M23.8072 18.2565V21.6969C23.8085 22.0162 23.7431 22.3324 23.6152 22.625C23.4872 22.9176 23.2996 23.1803 23.0642 23.3962C22.8289 23.6121 22.551 23.7765 22.2485 23.8788C21.9459 23.9812 21.6254 24.0192 21.3073 23.9904C17.7784 23.607 14.3888 22.4011 11.4106 20.4698C8.63977 18.7091 6.29061 16.3599 4.52992 13.5891C2.59184 10.5974 1.38573 7.19125 1.00931 3.64657C0.980651 3.32945 1.01834 3.00983 1.11997 2.70808C1.22161 2.40632 1.38496 2.12903 1.59963 1.89386C1.8143 1.65869 2.07559 1.4708 2.36685 1.34215C2.65812 1.21349 2.97298 1.1469 3.2914 1.1466H6.73173C7.28827 1.14112 7.82781 1.3382 8.24979 1.7011C8.67177 2.064 8.94739 2.56797 9.02528 3.11905C9.17049 4.22004 9.43979 5.30106 9.82803 6.3415C9.98232 6.75196 10.0157 7.19804 9.92425 7.6269C9.83279 8.05575 9.6203 8.4494 9.31198 8.7612L7.85557 10.2176C9.48807 13.0886 11.8652 15.4658 14.7362 17.0983L16.1926 15.6419C16.5044 15.3335 16.8981 15.1211 17.3269 15.0296C17.7558 14.9381 18.2019 14.9715 18.6123 15.1258C19.6528 15.5141 20.7338 15.7834 21.8348 15.9286C22.3919 16.0072 22.9006 16.2877 23.2643 16.717C23.628 17.1462 23.8212 17.6941 23.8072 18.2565Z" stroke="#002B49" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M16 6.03145C17.2286 6.27115 18.3577 6.87202 19.2428 7.75715C20.128 8.64228 20.7288 9.7714 20.9686 11M16 1C18.5525 1.28357 20.9328 2.42663 22.75 4.24152C24.5672 6.0564 25.7132 8.43523 26 10.9874" stroke="#002B49" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="aur-flex-center aur-font-40 aur-font-700 aur-primay-color">23k</div>
                            <div class="aur-flex-center aur-font-16 aur-font-500 aur-text-color">Completed Calls</div>
                        </div>
                        <div class="aur-agent-history-item">
                            <div class="aur-flex-end">
                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.8417 4.63086H5.9995C4.74958 4.63086 3.73633 5.64411 3.73633 6.89403V22.7362C3.73633 23.9861 4.74958 24.9994 5.9995 24.9994H21.8417C23.0916 24.9994 24.1049 23.9861 24.1049 22.7362V6.89403C24.1049 5.64411 23.0916 4.63086 21.8417 4.63086Z" fill="#D3F26A"/>
                                    <path d="M19.1054 3.26367H3.26317C2.01326 3.26367 1 4.27693 1 5.52684V21.369C1 22.6189 2.01326 23.6322 3.26317 23.6322H19.1054C20.3553 23.6322 21.3685 22.6189 21.3685 21.369V5.52684C21.3685 4.27693 20.3553 3.26367 19.1054 3.26367Z" stroke="#002B49" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15.7104 1V5.52634" stroke="#D3F26A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M6.65771 1V5.52634" stroke="#002B49" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M1 10.0527H21.3685" stroke="#002B49" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="aur-flex-center aur-font-40 aur-font-700 aur-primay-color">2k</div>
                            <div class="aur-flex-center aur-font-16 aur-font-500 aur-text-color">Appointments</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-8 aur-agent-control-wrap">
                <div class="aur-agent-update-wrap pt-4">
                    <div class="aur-agent-update-sidebar">
                        <div class="sidebar-item general">General</div>
                        <div class="sidebar-item installation">Installation</div>
                        <div class="sidebar-item integration">Integration</div>
                        <div class="sidebar-item configuration">Configuration</div>
                    </div>
                    <div class="aur-agent-update-content p-5" data-type="general" >
                        <div class="text-white aur-font-20 aur-font-700">Details</div>
                        <div class="text-white aur-font-16 aur-font-400">Update the Details for your AI Agent </div>
                        <div class="row pb-6 aur-agent-profile">
                            <div class="col-lg-6 p-4 aur-agent-profile-item">
                                <div class="text-white aur-font-14 aur-font-500 mb-2">Agent Name</div>
                                <div class="aur-flex-start aur-gap-8 aur-border aur-radius-10" style="padding: 10px">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.646 12.7155C16.6264 11.9442 17.342 10.8864 17.6933 9.68944C18.0445 8.49246 18.014 7.21576 17.6058 6.03696C17.1977 4.85817 16.4323 3.83589 15.4161 3.11235C14.3999 2.38881 13.1835 2 11.936 2C10.6886 2 9.47215 2.38881 8.45596 3.11235C7.43978 3.83589 6.67438 4.85817 6.26624 6.03696C5.85811 7.21576 5.82754 8.49246 6.17879 9.68944C6.53004 10.8864 7.24564 11.9442 8.22603 12.7155C6.54611 13.3885 5.08032 14.5048 3.98492 15.9454C2.88953 17.386 2.20559 19.0968 2.00603 20.8955C1.99159 21.0268 2.00315 21.1597 2.04006 21.2866C2.07697 21.4134 2.1385 21.5317 2.22114 21.6348C2.38805 21.843 2.63082 21.9763 2.89603 22.0055C3.16125 22.0347 3.42719 21.9573 3.63536 21.7904C3.84352 21.6235 3.97686 21.3807 4.00603 21.1155C4.22562 19.1607 5.15772 17.3553 6.62425 16.0443C8.09078 14.7333 9.98893 14.0085 11.956 14.0085C13.9231 14.0085 15.8213 14.7333 17.2878 16.0443C18.7543 17.3553 19.6864 19.1607 19.906 21.1155C19.9332 21.3612 20.0505 21.5882 20.2351 21.7525C20.4198 21.9169 20.6588 22.007 20.906 22.0055H21.016C21.2782 21.9753 21.5178 21.8428 21.6826 21.6367C21.8474 21.4307 21.9241 21.1679 21.896 20.9055C21.6955 19.1017 21.0079 17.3865 19.9069 15.9437C18.8059 14.5009 17.3329 13.385 15.646 12.7155ZM11.936 12.0055C11.1449 12.0055 10.3715 11.7709 9.71375 11.3314C9.05595 10.8918 8.54326 10.2671 8.24051 9.53623C7.93776 8.80533 7.85855 8.00106 8.01289 7.22513C8.16723 6.44921 8.54819 5.73648 9.1076 5.17707C9.66701 4.61766 10.3797 4.2367 11.1557 4.08235C11.9316 3.92801 12.7359 4.00723 13.4668 4.30998C14.1977 4.61273 14.8224 5.12542 15.2619 5.78321C15.7014 6.44101 15.936 7.21437 15.936 8.0055C15.936 9.06636 15.5146 10.0838 14.7645 10.8339C14.0143 11.5841 12.9969 12.0055 11.936 12.0055Z" fill="#41D37E"/>
                                    </svg>
                                    <input type="text" class="non-bd non-ol text-white" style="background-color: transparent; width: 80%;">
                                </div>
                            </div>
                            <div class="col-lg-6 p-4 aur-agent-profile-item">
                                <div class="text-white aur-font-14 aur-font-500 mb-2">Choose Avater</div>
                                <div class="aur-flex-between aur-gap-8 aur-border aur-radius-10 aur-cu-po" id="agent_avatar">
                                    <img src="{{asset("image/agent_avatar.png")}}" alt="" style="width: 50px; height: 48px;">
                                    <div class="text-white aur-font-14 aur-font-500">Select</div>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.0542 15.3708L17.7042 9.71079C17.7979 9.61783 17.8723 9.50723 17.9231 9.38537C17.9739 9.26351 18 9.1328 18 9.00079C18 8.86878 17.9739 8.73807 17.9231 8.61622C17.8723 8.49436 17.7979 8.38376 17.7042 8.29079C17.5168 8.10454 17.2634 8 16.9992 8C16.735 8 16.4816 8.10454 16.2942 8.29079L11.2942 13.2408L6.3442 8.29079C6.15684 8.10454 5.90339 8 5.6392 8C5.37502 8 5.12156 8.10454 4.9342 8.29079C4.83971 8.38341 4.76454 8.49385 4.71305 8.61573C4.66155 8.7376 4.63475 8.86848 4.6342 9.00079C4.63475 9.1331 4.66155 9.26398 4.71305 9.38586C4.76454 9.50773 4.83971 9.61818 4.9342 9.71079L10.5842 15.3708C10.6778 15.4723 10.7915 15.5533 10.918 15.6087C11.0445 15.6641 11.1811 15.6927 11.3192 15.6927C11.4573 15.6927 11.5939 15.6641 11.7204 15.6087C11.8469 15.5533 11.9606 15.4723 12.0542 15.3708Z" fill="white"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="text-white aur-font-20 aur-font-700">Voice Settings</div>
                        <div class="text-white aur-font-16 aur-font-400">Current Voice</div>
                        <div class="row" style="padding: 10px 0px 12px 7px;">
                            <div class="col-lg-7 col-sm-12">
                                <div class="aur-flex-start aur-gap-12">
                                    <img src="{{asset("image/agent_avatar.png")}}" alt="" style="width: 40px; height: 40px;">
                                    <div>
                                        <div class="text-white aur-font-14 aur-font-700 mb-1">Adrian</div>
                                        <div class="text-white aur-font-14 aur-font-400"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-sm-12 aur-flex-end">
                                <div class="aur-flex-start aur-radius-10 aur-gap-16" style="background: #41D37E14; padding:4px 14px;">
                                    <img src="{{asset('image/agent_voice.png')}}" alt="" style="width: 32px; height: 32px; background-size: 100%;">
                                    <div class="aur-font-14 aur-font-500" style="color: #D3F26A; text-wrap: nowrap;">Select Voice</div>
                                </div>
                            </div>
                        </div>
                        <div class="aur-agent-voice-wrap mb-4">
                            <div class="aur-agent-lists-wrap">
                                <div class="text-white aur-font-20 aur-font-700" style="padding: 10px 10px 25px 10px;">Agent Voices</div>
                                <div class="aur-agent-list-wrap" style="max-height: 280px; overflow: auto;">
                                    <div class="aur-agent-list aur-flex-between aur-gap-14 p-1">
                                        <img class="non-p" src="{{asset('image/agent_voice.png')}}" alt="" style="width: 40px; height:40px">
                                        <div class="non-p aur-agent-list-name" >
                                            <div class="text-white aur-font-14 aur-font-700">Adrian</div>
                                            <div class="text-white aur-font-8">Soft Eclectic Voice with east European accent </div>
                                        </div>
                                    </div>
                                    <div class="aur-agent-list aur-flex-between aur-gap-14 p-1">
                                        <img class="non-p" src="{{asset('image/agent_voice.png')}}" alt="" style="width: 40px; height:40px">
                                        <div class="non-p aur-agent-list-name" >
                                            <div class="text-white aur-font-14 aur-font-700">Adrian</div>
                                            <div class="text-white aur-font-8">Soft Eclectic Voice with east European accent </div>
                                        </div>
                                    </div>
                                    <div class="aur-agent-list aur-flex-between aur-gap-14 p-1">
                                        <img class="non-p" src="{{asset('image/agent_voice.png')}}" alt="" style="width: 40px; height:40px">
                                        <div class="non-p aur-agent-list-name" >
                                            <div class="text-white aur-font-14 aur-font-700">Adrian</div>
                                            <div class="text-white aur-font-8">Soft Eclectic Voice with east European accent </div>
                                        </div>
                                    </div>
                                    <div class="aur-agent-list aur-flex-between aur-gap-14 p-1">
                                        <img class="non-p" src="{{asset('image/agent_voice.png')}}" alt="" style="width: 40px; height:40px">
                                        <div class="non-p aur-agent-list-name" >
                                            <div class="text-white aur-font-14 aur-font-700">Adrian</div>
                                            <div class="text-white aur-font-8">Soft Eclectic Voice with east European accent </div>
                                        </div>
                                    </div>
                                    <div class="aur-agent-list aur-flex-between aur-gap-14 p-1">
                                        <img class="non-p" src="{{asset('image/agent_voice.png')}}" alt="" style="width: 40px; height:40px">
                                        <div class="non-p aur-agent-list-name" >
                                            <div class="text-white aur-font-14 aur-font-700">Adrian</div>
                                            <div class="text-white aur-font-8">Soft Eclectic Voice with east European accent </div>
                                        </div>
                                    </div>
                                    <div class="aur-agent-list aur-flex-between aur-gap-14 p-1">
                                        <img class="non-p" src="{{asset('image/agent_voice.png')}}" alt="" style="width: 40px; height:40px">
                                        <div class="non-p aur-agent-list-name" >
                                            <div class="text-white aur-font-14 aur-font-700">Adrian</div>
                                            <div class="text-white aur-font-8">Soft Eclectic Voice with east European accent </div>
                                        </div>
                                    </div>
                                    <div class="aur-agent-list aur-flex-between aur-gap-14 p-1">
                                        <img class="non-p" src="{{asset('image/agent_voice.png')}}" alt="" style="width: 40px; height:40px">
                                        <div class="non-p aur-agent-list-name" >
                                            <div class="text-white aur-font-14 aur-font-700">Adrian</div>
                                            <div class="text-white aur-font-8">Soft Eclectic Voice with east European accent </div>
                                        </div>
                                    </div>
                                    <div class="aur-agent-list aur-flex-between aur-gap-14 p-1">
                                        <img class="non-p" src="{{asset('image/agent_voice.png')}}" alt="" style="width: 40px; height:40px">
                                        <div class="non-p aur-agent-list-name" >
                                            <div class="text-white aur-font-14 aur-font-700">Adrian</div>
                                            <div class="text-white aur-font-8">Soft Eclectic Voice with east European accent </div>
                                        </div>
                                    </div>
                                    <div class="aur-agent-list aur-flex-between aur-gap-14 p-1">
                                        <img class="non-p" src="{{asset('image/agent_voice.png')}}" alt="" style="width: 40px; height:40px">
                                        <div class="non-p aur-agent-list-name" >
                                            <div class="text-white aur-font-14 aur-font-700">Adrian</div>
                                            <div class="text-white aur-font-8">Soft Eclectic Voice with east European accent </div>
                                        </div>
                                    </div>
                                    <div class="aur-agent-list aur-flex-between aur-gap-14 p-1">
                                        <img class="non-p" src="{{asset('image/agent_voice.png')}}" alt="" style="width: 40px; height:40px">
                                        <div class="non-p aur-agent-list-name" >
                                            <div class="text-white aur-font-14 aur-font-700">Adrian</div>
                                            <div class="text-white aur-font-8">Soft Eclectic Voice with east European accent </div>
                                        </div>
                                    </div>
                                    <div class="aur-agent-list aur-flex-between aur-gap-14 p-1">
                                        <img class="non-p" src="{{asset('image/agent_voice.png')}}" alt="" style="width: 40px; height:40px">
                                        <div class="non-p aur-agent-list-name" >
                                            <div class="text-white aur-font-14 aur-font-700">Adrian</div>
                                            <div class="text-white aur-font-8">Soft Eclectic Voice with east European accent </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="aur-agent-voice-contet-wrap">
                                <div class="aur-agent-voice-contet aur-flex-center" style="padding: 46px 0px; width: 100%; object-fit: cover;">
                                    <img src="{{asset("image/voice.png")}}" alt="">
                                </div>
                                <div class="aur-agent-voice-text">Hello, My Name is a Adrian i am an agent persona ready to work for you 24x7 no sick days </div>
                            </div>
                        </div>
                        <div class="aur-flex-end" style="padding: 0px 40px;">
                            <div class="aur-flex-start aur-gap-20">
                                <div class="aur-font-14 aur-font-500 aur-cu-po" style="color: #7C7C8D ">Cancel</div>
                                <div class="aur-font-14 aur-font-500 aur-cu-po" style="color: #41D37E">Update</div>
                            </div>
                        </div>
                    </div>
                    <div class="aur-agent-update-content p-5" data-type="instalation" style="display: none;">
                        <div class="text-white aur-font-20 aur-font-700">Website Asistance Widget </div>
                        <div class="text-white aur-font-16 aur-font-400 mb-4">Install this Agent on your website to  help take appointments, handle sales calls
                        </div>
                        <div class="aur-agent-widget-wrap mb-4">
                            <div class="text-white aur-font-20 aur-font-700 mb-4">Settings</div>
                            <div class="aur-agent-widget-subwrap">
                                <div class="mb-4 aur-flex-between">
                                    <div class="text-white aur-font-16 aur-font-500">Enable Widget </div>
                                    <input type="checkbox" class="aur-switch-radio">
                                </div>
                                <div class="mb-4 aur-flex-between">
                                    <div class="text-white aur-font-16 aur-font-500">Header Color</div>
                                    <div class="aur-agent-widget-color"></div>
                                </div>
                                <div class="mb-4 aur-flex-between">
                                    <div class="text-white aur-font-16 aur-font-500">Background Color</div>
                                    <div class="aur-agent-widget-color"></div>
                                </div>
                                <div class="mb-4 aur-flex-between">
                                    <div class="text-white aur-font-16 aur-font-500">Enable Book Appointment</div>
                                    <input type="checkbox" class="aur-switch-radio">
                                </div>
                                <div class="mb-4 aur-flex-between">
                                    <div class="text-white aur-font-16 aur-font-500">Enable Speak to Agent</div>
                                    <input type="checkbox" class="aur-switch-radio">
                                </div>
                                <div class="mb-4 aur-flex-between">
                                    <div class="text-white aur-font-16 aur-font-500">Enable Request Callback</div>
                                    <input type="checkbox" class="aur-switch-radio">
                                </div>
                                <div class="aur-flex-between">
                                    <div class="text-white aur-font-16 aur-font-500">Business Logo</div>
                                    <div class="btn btn-success aur-btn-success aur-agent-upload-logo">Upload Logo</div>
                                </div>
                            </div>
                        </div>
                        <div class="text-white aur-font-20 aur-font-700">Embed Code</div>
                        <div class="text-white aur-font-16 aur-font-400 mb-4">Copy the snippet below and past into the header of your 
                        </div>
                        <div class="aur-agent-snippet-wrap p-4 mb-4">
                            <input type="text" class="non-bd non-ol" style="color: #E0E4E7; width: 100%; background-color: transparent">
                            <div class="aur-agent-snippet-add-btn text-white aur-font-14 aur-font-500">
                                + Copy Snippet
                            </div>
                        </div>
                        <div class="btn btn-success aur-btn-success">Verify Snippet</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="aur-popup" id="aur_agent_avatar_pick_wrap">
        <div class="aur-popup-content">
            <div class="aur-font-12 aur-font-500 mb-1">Select Avatr</div>
            <div class="aur-agent-avatars-wrap">
                <div class="aur-agent-avatar-item">
                    <img src="{{asset("image/login-img.png")}}" alt="">
                </div>
                <div class="aur-agent-avatar-item">
                    <img src="{{asset("image/login-img.png")}}" alt="">
                </div>
                <div class="aur-agent-avatar-item">
                    <img src="{{asset("image/login-img.png")}}" alt="">
                </div>
                <div class="aur-agent-avatar-item">
                    <img src="{{asset("image/login-img.png")}}" alt="">
                </div>
                <div class="aur-agent-avatar-item">
                    <img src="{{asset("image/login-img.png")}}" alt="">
                </div>
                <div class="aur-agent-avatar-item">
                    <img src="{{asset("image/login-img.png")}}" alt="">
                </div>
                <div class="aur-agent-avatar-item">
                    <img src="{{asset("image/login-img.png")}}" alt="">
                </div>
                <div class="aur-agent-avatar-item">
                    <img src="{{asset("image/login-img.png")}}" alt="">
                </div>
            </div>
        </div>
        <div class="aur-popup-footer">
            <div class="aur-flex-center aur-gap-10">
                <div class="aur-font-12 aur-font-500">Upload Custom Avatr</div>
                <div>
                    <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.7488 8.41659C16.8807 7.23784 15.6425 6.38408 14.2322 5.99172C13.7923 4.37885 12.7461 2.9984 11.3122 2.13887C9.87836 1.27934 8.16777 1.00725 6.53797 1.37947C5.60848 1.59202 4.73745 2.00734 3.98717 2.59574C3.2369 3.18413 2.62592 3.93106 2.19794 4.78309C1.76996 5.63512 1.53555 6.57119 1.51148 7.52437C1.48741 8.47754 1.67428 9.42426 2.05871 10.2968C1.25547 10.8245 0.638753 11.5918 0.296016 12.4897C-0.0467214 13.3876 -0.0980829 14.3706 0.149215 15.2993C0.42108 16.2936 1.01688 17.1688 1.84227 17.7863C2.66766 18.4037 3.67545 18.7282 4.70605 18.7083H6.72955C7.04449 18.7083 7.34654 18.5831 7.56924 18.3604C7.79194 18.1377 7.91705 17.8357 7.91705 17.5208C7.91705 17.2058 7.79194 16.9038 7.56924 16.6811C7.34654 16.4584 7.04449 16.3333 6.72955 16.3333H4.70605C4.20567 16.3469 3.7146 16.1962 3.30799 15.9042C2.90138 15.6123 2.60161 15.1952 2.45455 14.7167C2.37749 14.4336 2.35741 14.138 2.39546 13.847C2.43352 13.5561 2.52895 13.2756 2.67624 13.0218C2.82352 12.7681 3.01972 12.5461 3.25346 12.3687C3.4872 12.1913 3.75383 12.0621 4.03788 11.9886C4.22628 11.94 4.39986 11.8458 4.54333 11.7144C4.6868 11.5829 4.79578 11.4183 4.86067 11.2348C4.92557 11.0514 4.9444 10.8548 4.91551 10.6624C4.88661 10.47 4.81088 10.2876 4.69496 10.1313C4.31555 9.61959 4.06008 9.02675 3.94867 8.3995C3.83726 7.77225 3.87295 7.12771 4.05292 6.51659C4.25085 5.83283 4.62604 5.21355 5.14045 4.72153C5.65486 4.2295 6.2902 3.88222 6.98209 3.71488C7.31013 3.63812 7.64586 3.59908 7.98276 3.59851C8.87368 3.59584 9.74086 3.88564 10.4512 4.42343C11.3226 5.08469 11.896 6.0647 12.0456 7.14834C12.0792 7.40795 12.1972 7.64932 12.3815 7.83528C12.5657 8.02124 12.806 8.14149 13.0653 8.17751C13.6131 8.25258 14.1404 8.43669 14.6159 8.71898C15.0914 9.00126 15.5055 9.37598 15.8337 9.82101C16.1611 10.2667 16.3944 10.7743 16.5197 11.3129C16.6449 11.8516 16.6593 12.41 16.562 12.9544C16.4615 13.4908 16.2518 14.0009 15.9459 14.4529C15.6401 14.9049 15.2446 15.2892 14.784 15.582C14.6195 15.6904 14.4847 15.8381 14.3915 16.0117C14.2984 16.1853 14.2499 16.3793 14.2504 16.5763C14.2486 16.7908 14.3045 17.0019 14.4121 17.1875C14.5197 17.3731 14.6751 17.5264 14.8621 17.6315C15.0491 17.7366 15.2609 17.7897 15.4754 17.7851C15.6898 17.7805 15.8992 17.7185 16.0815 17.6055C16.8199 17.1314 17.452 16.5093 17.9378 15.7785C18.4235 15.0477 18.7525 14.2241 18.9038 13.3598C19.0566 12.5006 19.033 11.6192 18.8344 10.7694C18.6358 9.91965 18.2665 9.11913 17.7488 8.41659Z" fill="#002B49"/>
                        <path d="M12.2711 18.3125V13.9583H13.5877C13.7442 13.9583 13.8972 13.9118 14.0274 13.8248C14.1576 13.7378 14.259 13.6142 14.3189 13.4696C14.3788 13.3249 14.3945 13.1658 14.364 13.0122C14.3334 12.8587 14.258 12.7176 14.1474 12.6069L11.6433 10.1029C11.4949 9.95447 11.2935 9.87109 11.0836 9.87109C10.8737 9.87109 10.6724 9.95447 10.5239 10.1029L8.01988 12.6069C7.90919 12.7176 7.83382 12.8587 7.80329 13.0122C7.77276 13.1658 7.78843 13.3249 7.84834 13.4696C7.90824 13.6142 8.00969 13.7378 8.13985 13.8248C8.27 13.9118 8.42303 13.9583 8.57958 13.9583H9.89612V18.3125C9.89612 18.6274 10.0212 18.9295 10.2439 19.1522C10.4666 19.3749 10.7687 19.5 11.0836 19.5C11.3986 19.5 11.7006 19.3749 11.9233 19.1522C12.146 18.9295 12.2711 18.6274 12.2711 18.3125Z" fill="#002B49"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>
    <div class="aur-popup" id="aur_agent_virtual_phone_wrap" style="width: 440px">
        <div class="aur-popup-content" style="padding: 34px 24px;">
            <div class="aur-font-20 aur-font-700">Virtual Phone Number</div>
            <div class="aur-font-12 aur-font-400 mb-2">Find and purchase phone number for your agent</div>
            <div class="aur-flex-start aur-gap-24 mb-2">
                <div class="aur-flex-between">
                    <div class="aur-flex-start aur-gap-8"></div>
                    <div class="aur-flex-center" style="width:24px; height:24px;">
                        <svg width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.0542 7.00636L13.7042 2.21712C13.7979 2.13846 13.8723 2.04488 13.9231 1.94177C13.9739 1.83866 14 1.72806 14 1.61636C14 1.50465 13.9739 1.39406 13.9231 1.29094C13.8723 1.18783 13.7979 1.09425 13.7042 1.01559C13.5168 0.857989 13.2634 0.769531 12.9992 0.769531C12.735 0.769531 12.4816 0.857989 12.2942 1.01559L7.2942 5.20405L2.3442 1.01559C2.15684 0.857989 1.90339 0.769531 1.6392 0.769531C1.37502 0.769531 1.12156 0.857989 0.934202 1.01559C0.839714 1.09395 0.764544 1.18741 0.713047 1.29053C0.66155 1.39366 0.634752 1.5044 0.634203 1.61636C0.634752 1.72831 0.66155 1.83905 0.713047 1.94218C0.764543 2.0453 0.839714 2.13876 0.934202 2.21712L6.5842 7.00636C6.67784 7.09224 6.79149 7.16079 6.91799 7.20767C7.04449 7.25456 7.1811 7.27876 7.3192 7.27876C7.4573 7.27876 7.59391 7.25456 7.72041 7.20767C7.84691 7.16079 7.96056 7.09224 8.0542 7.00636Z" fill="#002B49"/>
                        </svg>
                    </div>
                </div>
                <div>
                    <div class="aur-font-12 aur-font-500 mb-1">Popular Countries</div>
                    <div class="aur-flex-start aur-gap-10"></div>
                </div>
            </div>
            <div class="aur-agent-virtural-phones"> 
                <div class="aur-agent-phone-item aur-flex-between">
                    <div class="aur-flex-start aur-gap-8">
                        <div class=""></div>
                        <div class="aur-font-30 aur-font-500">+01 234 123 345</div>
                    </div>
                    <div class="aur-font-14 aur-font-500 aur-text-heading">Assign</div>
                </div>
            </div>
        </div>
        <div class="aur-flex-between aur-popup-footer" style="padding:12px 24px;">
            <div class="aur-font-12 aur-font-500">
                <span class="aur-font-20 aur-font-700">2</span>
                Phone Numbers Selected
            </div>
            <div class="">
                <div class="aur-font-12 aur-font-400 mb-1">TOTAL</div>
                <div class="aur-font-20 aur-font-700">$49</div>
            </div>
            <div class="btn btn-dark aur-btn-dark">+ Make Payment</div>
        </div>
    </div>
@endsection
@push('custom_style')
    <link rel="stylesheet" href="{{asset('css/agent.css')}}">
@endpush
@push('custom_script')
    <script src="{{asset('js/agent.js')}}"></script>
@endpush