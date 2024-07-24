@extends('layouts/client')
@section('content')
    {{-- <div class="aur-main-route">View Agent</div> --}}
    <div class="aur-main-content">
        <div class="aur-font-20 aur-font-700 aur-text-heading mb-3">Upcoming Appointments</div>
        <div class="aur-appoint-navbar pb-2">
            <div class="aur-flex-start" style="grid-gap: 30px">
                <div class="aur-appoint-date-wrap aur-flex-start">
                    <div class="aur-appoint-date-prev aur-flex-center">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.7068 5.29279C12.8943 5.48031 12.9996 5.73462 12.9996 5.99979C12.9996 6.26495 12.8943 6.51926 12.7068 6.70679L9.41379 9.99979L12.7068 13.2928C12.8889 13.4814 12.9897 13.734 12.9875 13.9962C12.9852 14.2584 12.88 14.5092 12.6946 14.6946C12.5092 14.88 12.2584 14.9852 11.9962 14.9875C11.734 14.9897 11.4814 14.8889 11.2928 14.7068L7.29279 10.7068C7.10532 10.5193 7 10.265 7 9.99979C7 9.73462 7.10532 9.48031 7.29279 9.29279L11.2928 5.29279C11.4803 5.10532 11.7346 5 11.9998 5C12.265 5 12.5193 5.10532 12.7068 5.29279Z" fill="#18181B"/>
                        </svg>
                    </div>
                    <div class="aur-flex-center aur-font-12 aur-font-400" style="padding: 6px 16px ; background-color:#F4F4F5">Today</div>
                    <div class="aur-appoint-date-next aur-flex-center">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.29279 14.7064C7.10532 14.5189 7 14.2646 7 13.9994C7 13.7343 7.10532 13.48 7.29279 13.2924L10.5858 9.99943L7.29279 6.70643C7.11063 6.51783 7.00983 6.26523 7.01211 6.00303C7.01439 5.74083 7.11956 5.49002 7.30497 5.30461C7.49038 5.1192 7.74119 5.01403 8.00339 5.01176C8.26558 5.00948 8.51818 5.11027 8.70679 5.29243L12.7068 9.29243C12.8943 9.47996 12.9996 9.73427 12.9996 9.99943C12.9996 10.2646 12.8943 10.5189 12.7068 10.7064L8.70679 14.7064C8.51926 14.8939 8.26495 14.9992 7.99979 14.9992C7.73462 14.9992 7.48031 14.8939 7.29279 14.7064Z" fill="#18181B"/>
                        </svg>
                    </div>
                </div>
                <div class="aur-flex-start aur-gap-24 aur-appoint-date-choose-wrap">
                    <div class="aur-font-12 aur-font-600 aur-text-heading aur-appoint-date-item">Day</div>
                    <div class="aur-font-12 aur-font-600 aur-text-heading aur-appoint-date-item">Week</div>
                    <div class="aur-font-12 aur-font-600 aur-text-heading aur-appoint-date-item">Month</div>
                    <div class="aur-font-12 aur-font-600 aur-text-heading aur-appoint-date-item">Year</div>
                </div>
            </div>
            <div class="aur-flex-end aur-appoint-navbar-right" style="grid-gap: 40px; padding-right: 40px;">
                <div class="aur-appoint-agent-select-wrap aur-flex-between p-1 aur-gap-8">
                    <div class="aur-font-12 aur-font-400" style="color: #A1A1AA">All Agents</div>
                    <svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 11L0.937822 0.5H13.0622L7 11Z" fill="#002B49"/>
                    </svg>
                </div>
                <div class="aur-appoint-search-warp aur-gap-12">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8 4.00077C6.93913 4.00077 5.92172 4.42219 5.17157 5.17234C4.42143 5.92248 4 6.9399 4 8.00077C4 9.06163 4.42143 10.079 5.17157 10.8292C5.92172 11.5793 6.93913 12.0008 8 12.0008C9.06087 12.0008 10.0783 11.5793 10.8284 10.8292C11.5786 10.079 12 9.06163 12 8.00077C12 6.9399 11.5786 5.92248 10.8284 5.17234C10.0783 4.42219 9.06087 4.00077 8 4.00077ZM2 8.00077C1.99988 7.05647 2.22264 6.12548 2.65017 5.28351C3.0777 4.44154 3.69792 3.71236 4.4604 3.15529C5.22287 2.59822 6.10606 2.22898 7.03815 2.0776C7.97023 1.92622 8.92488 1.99698 9.82446 2.28412C10.724 2.57126 11.5432 3.06667 12.2152 3.73006C12.8872 4.39346 13.3931 5.2061 13.6919 6.1019C13.9906 6.9977 14.0737 7.95136 13.9343 8.88532C13.795 9.81928 13.4372 10.7072 12.89 11.4768L17.707 16.2938C17.8892 16.4824 17.99 16.735 17.9877 16.9972C17.9854 17.2594 17.8802 17.5102 17.6948 17.6956C17.5094 17.881 17.2586 17.9862 16.9964 17.9884C16.7342 17.9907 16.4816 17.8899 16.293 17.7078L11.477 12.8918C10.5794 13.53 9.52335 13.9089 8.42468 13.9869C7.326 14.0648 6.22707 13.8389 5.2483 13.3337C4.26953 12.8286 3.44869 12.0638 2.87572 11.1231C2.30276 10.1824 1.99979 9.1022 2 8.00077Z" fill="#18181B"/>
                    </svg>
                    <input type="text" class="non-bd non-ol" placeholder="Search">
                </div>
                <div class="aur-flex-center" style="width: 30px; height:30px; border-radius:4px; background-color: #F4F4F5">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.583 12.5007C14.2062 12.5007 13.6738 12.5527 13.1195 12.6286C12.8606 12.6641 12.6631 12.8616 12.6277 13.1205C12.5518 13.6748 12.4997 14.2072 12.4997 14.584C12.4997 14.9608 12.5518 15.4932 12.6277 16.0475C12.6631 16.3064 12.8606 16.5039 13.1195 16.5393C13.6738 16.6152 14.2062 16.6673 14.583 16.6673C14.9598 16.6673 15.4922 16.6152 16.0465 16.5393C16.3054 16.5039 16.5029 16.3064 16.5383 16.0475C16.6143 15.4932 16.6663 14.9608 16.6663 14.584C16.6663 14.2072 16.6143 13.6748 16.5383 13.1205C16.5029 12.8616 16.3054 12.6641 16.0465 12.6286C15.4922 12.5527 14.9598 12.5007 14.583 12.5007ZM12.8934 10.9774C11.8935 11.1143 11.1134 11.8944 10.9764 12.8943C10.8979 13.4679 10.833 14.0908 10.833 14.584C10.833 15.0772 10.8979 15.7001 10.9764 16.2736C11.1134 17.2735 11.8935 18.0536 12.8934 18.1906C13.4669 18.2691 14.0898 18.334 14.583 18.334C15.0762 18.334 15.6991 18.2691 16.2726 18.1906C17.2726 18.0536 18.0527 17.2735 18.1896 16.2736C18.2681 15.7001 18.333 15.0772 18.333 14.584C18.333 14.0908 18.2681 13.4679 18.1896 12.8943C18.0527 11.8944 17.2726 11.1143 16.2726 10.9774C15.6991 10.8988 15.0762 10.834 14.583 10.834C14.0898 10.834 13.4669 10.8988 12.8934 10.9774Z" fill="#5F6165"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.41699 12.5007C5.04017 12.5007 4.50776 12.5527 3.9535 12.6286C3.69456 12.6641 3.49712 12.8616 3.46165 13.1205C3.38575 13.6748 3.33366 14.2072 3.33366 14.584C3.33366 14.9608 3.38575 15.4932 3.46165 16.0475C3.49712 16.3064 3.69456 16.5039 3.9535 16.5393C4.50776 16.6152 5.04017 16.6673 5.41699 16.6673C5.79381 16.6673 6.32622 16.6152 6.88048 16.5393C7.13942 16.5039 7.33687 16.3064 7.37233 16.0475C7.44824 15.4932 7.50033 14.9608 7.50033 14.584C7.50033 14.2072 7.44824 13.6748 7.37233 13.1205C7.33687 12.8616 7.13942 12.6641 6.88048 12.6286C6.32622 12.5527 5.79381 12.5007 5.41699 12.5007ZM3.72736 10.9774C2.72744 11.1143 1.94734 11.8944 1.8104 12.8943C1.73186 13.4679 1.66699 14.0908 1.66699 14.584C1.66699 15.0772 1.73186 15.7001 1.8104 16.2736C1.94734 17.2735 2.72744 18.0536 3.72736 18.1906C4.30086 18.2691 4.92379 18.334 5.41699 18.334C5.91019 18.334 6.53312 18.2691 7.10663 18.1906C8.10655 18.0536 8.88664 17.2735 9.02358 16.2736C9.10213 15.7001 9.16699 15.0772 9.16699 14.584C9.16699 14.0908 9.10213 13.4679 9.02358 12.8943C8.88664 11.8944 8.10655 11.1143 7.10663 10.9774C6.53312 10.8988 5.91019 10.834 5.41699 10.834C4.92379 10.834 4.30086 10.8988 3.72736 10.9774Z" fill="#5F6165"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.583 3.33268C14.2062 3.33268 13.6738 3.38477 13.1195 3.46068C12.8606 3.49614 12.6631 3.69359 12.6277 3.95252C12.5518 4.50679 12.4997 5.0392 12.4997 5.41602C12.4997 5.79283 12.5518 6.32524 12.6277 6.87951C12.6631 7.13845 12.8606 7.33589 13.1195 7.37135C13.6738 7.44726 14.2062 7.49935 14.583 7.49935C14.9598 7.49935 15.4922 7.44726 16.0465 7.37135C16.3054 7.33589 16.5029 7.13845 16.5383 6.87951C16.6143 6.32524 16.6663 5.79283 16.6663 5.41602C16.6663 5.0392 16.6143 4.50679 16.5383 3.95252C16.5029 3.69359 16.3054 3.49614 16.0465 3.46068C15.4922 3.38477 14.9598 3.33268 14.583 3.33268ZM12.8934 1.80943C11.8935 1.94637 11.1134 2.72646 10.9764 3.72638C10.8979 4.29989 10.833 4.92282 10.833 5.41602C10.833 5.90921 10.8979 6.53214 10.9764 7.10565C11.1134 8.10557 11.8935 8.88566 12.8934 9.02261C13.4669 9.10115 14.0898 9.16602 14.583 9.16602C15.0762 9.16602 15.6991 9.10115 16.2726 9.02261C17.2726 8.88566 18.0527 8.10557 18.1896 7.10565C18.2681 6.53214 18.333 5.90921 18.333 5.41602C18.333 4.92282 18.2681 4.29989 18.1896 3.72638C18.0527 2.72646 17.2726 1.94637 16.2726 1.80943C15.6991 1.73088 15.0762 1.66602 14.583 1.66602C14.0898 1.66602 13.4669 1.73088 12.8934 1.80943Z" fill="#5F6165"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.41699 3.33268C5.04017 3.33268 4.50776 3.38477 3.9535 3.46068C3.69456 3.49614 3.49712 3.69359 3.46165 3.95252C3.38575 4.50679 3.33366 5.0392 3.33366 5.41602C3.33366 5.79283 3.38575 6.32524 3.46165 6.87951C3.49712 7.13845 3.69456 7.33589 3.9535 7.37135C4.50776 7.44726 5.04017 7.49935 5.41699 7.49935C5.79381 7.49935 6.32622 7.44726 6.88048 7.37135C7.13942 7.33589 7.33687 7.13845 7.37233 6.87951C7.44824 6.32524 7.50033 5.79283 7.50033 5.41602C7.50033 5.0392 7.44824 4.50679 7.37233 3.95252C7.33687 3.69359 7.13942 3.49614 6.88048 3.46068C6.32622 3.38477 5.79381 3.33268 5.41699 3.33268ZM3.72736 1.80943C2.72744 1.94637 1.94734 2.72646 1.8104 3.72638C1.73186 4.29989 1.66699 4.92282 1.66699 5.41602C1.66699 5.90921 1.73186 6.53214 1.8104 7.10565C1.94734 8.10557 2.72744 8.88566 3.72736 9.02261C4.30086 9.10115 4.92379 9.16602 5.41699 9.16602C5.91019 9.16602 6.53312 9.10115 7.10663 9.02261C8.10655 8.88566 8.88664 8.10557 9.02358 7.10565C9.10213 6.53214 9.16699 5.90921 9.16699 5.41602C9.16699 4.92282 9.10213 4.29989 9.02358 3.72638C8.88664 2.72646 8.10655 1.94637 7.10663 1.80943C6.53312 1.73088 5.91019 1.66602 5.41699 1.66602C4.92379 1.66602 4.30086 1.73088 3.72736 1.80943Z" fill="#5F6165"/>
                        </svg>
                </div>
            </div>
        </div>
        <div class="aur-appoint-main">
            <div class="aur-appoint-main-wrap">
                <div class="aur-flex-between aur-appoint-item">
                    <div class="">
                        <div class="aur-font-12 aur-font-600 mb-1">SUN</div>
                        <div class="aur-font-30 aur-font-700 mb-1">21</div>
                    </div>
                    <div>
                        <div class="aur-flex-start aur-gap-8 mb-1">
                            <div class="aur-font-12 aur-font-500" style="color: #394146b0">12:00am</div>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 15C11.866 15 15 11.866 15 8C15 4.13401 11.866 1 8 1C4.13401 1 1 4.13401 1 8C1 11.866 4.13401 15 8 15Z" stroke="#4D6B80" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M8 3.80078V8.00078L10.8 9.40078" stroke="#4D6B80" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="aur-font-15 aur-font-600 mb-1 aur-text-heading">Joe Black</div>
                        <div class="aur-font-15 aur-font-500" style="color: #002B49b0">+01 234 ***327</div>
                    </div>
                    <div class="aur-appoint-agent-avatar">
                        <img src="{{asset('image/Polygon 15.png')}}" alt="">
                    </div>
                </div>
                <div class="aur-flex-between aur-appoint-item">
                    <div class="">
                        <div class="aur-font-12 aur-font-600 mb-1">SUN</div>
                        <div class="aur-font-30 aur-font-700 mb-1">21</div>
                    </div>
                    <div>
                        <div class="aur-flex-start aur-gap-8 mb-1">
                            <div class="aur-font-12 aur-font-500" style="color: #394146b0">12:00am</div>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 15C11.866 15 15 11.866 15 8C15 4.13401 11.866 1 8 1C4.13401 1 1 4.13401 1 8C1 11.866 4.13401 15 8 15Z" stroke="#4D6B80" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M8 3.80078V8.00078L10.8 9.40078" stroke="#4D6B80" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="aur-font-15 aur-font-600 mb-1 aur-text-heading">Joe Black</div>
                        <div class="aur-font-15 aur-font-500" style="color: #002B49b0">+01 234 ***327</div>
                    </div>
                    <div class="aur-appoint-agent-avatar">
                        <img src="{{asset('image/Polygon 15.png')}}" alt="">
                    </div>
                </div>
                <div class="aur-flex-between aur-appoint-item">
                    <div class="">
                        <div class="aur-font-12 aur-font-600 mb-1">SUN</div>
                        <div class="aur-font-30 aur-font-700 mb-1">21</div>
                    </div>
                    <div>
                        <div class="aur-flex-start aur-gap-8 mb-1">
                            <div class="aur-font-12 aur-font-500" style="color: #394146b0">12:00am</div>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 15C11.866 15 15 11.866 15 8C15 4.13401 11.866 1 8 1C4.13401 1 1 4.13401 1 8C1 11.866 4.13401 15 8 15Z" stroke="#4D6B80" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M8 3.80078V8.00078L10.8 9.40078" stroke="#4D6B80" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="aur-font-15 aur-font-600 mb-1 aur-text-heading">Joe Black</div>
                        <div class="aur-font-15 aur-font-500" style="color: #002B49b0">+01 234 ***327</div>
                    </div>
                    <div class="aur-appoint-agent-avatar">
                        <img src="{{asset('image/Polygon 15.png')}}" alt="">
                    </div>
                </div>
                <div class="aur-flex-between aur-appoint-item">
                    <div class="">
                        <div class="aur-font-12 aur-font-600 mb-1">SUN</div>
                        <div class="aur-font-30 aur-font-700 mb-1">21</div>
                    </div>
                    <div>
                        <div class="aur-flex-start aur-gap-8 mb-1">
                            <div class="aur-font-12 aur-font-500" style="color: #394146b0">12:00am</div>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 15C11.866 15 15 11.866 15 8C15 4.13401 11.866 1 8 1C4.13401 1 1 4.13401 1 8C1 11.866 4.13401 15 8 15Z" stroke="#4D6B80" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M8 3.80078V8.00078L10.8 9.40078" stroke="#4D6B80" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="aur-font-15 aur-font-600 mb-1 aur-text-heading">Joe Black</div>
                        <div class="aur-font-15 aur-font-500" style="color: #002B49b0">+01 234 ***327</div>
                    </div>
                    <div class="aur-appoint-agent-avatar">
                        <img src="{{asset('image/Polygon 15.png')}}" alt="">
                    </div>
                </div>
                <div class="aur-flex-between aur-appoint-item">
                    <div class="">
                        <div class="aur-font-12 aur-font-600 mb-1">SUN</div>
                        <div class="aur-font-30 aur-font-700 mb-1">21</div>
                    </div>
                    <div>
                        <div class="aur-flex-start aur-gap-8 mb-1">
                            <div class="aur-font-12 aur-font-500" style="color: #394146b0">12:00am</div>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 15C11.866 15 15 11.866 15 8C15 4.13401 11.866 1 8 1C4.13401 1 1 4.13401 1 8C1 11.866 4.13401 15 8 15Z" stroke="#4D6B80" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M8 3.80078V8.00078L10.8 9.40078" stroke="#4D6B80" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="aur-font-15 aur-font-600 mb-1 aur-text-heading">Joe Black</div>
                        <div class="aur-font-15 aur-font-500" style="color: #002B49b0">+01 234 ***327</div>
                    </div>
                    <div class="aur-appoint-agent-avatar">
                        <img src="{{asset('image/Polygon 15.png')}}" alt="">
                    </div>
                </div>
                <div class="aur-flex-between aur-appoint-item">
                    <div class="">
                        <div class="aur-font-12 aur-font-600 mb-1">SUN</div>
                        <div class="aur-font-30 aur-font-700 mb-1">21</div>
                    </div>
                    <div>
                        <div class="aur-flex-start aur-gap-8 mb-1">
                            <div class="aur-font-12 aur-font-500" style="color: #394146b0">12:00am</div>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 15C11.866 15 15 11.866 15 8C15 4.13401 11.866 1 8 1C4.13401 1 1 4.13401 1 8C1 11.866 4.13401 15 8 15Z" stroke="#4D6B80" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M8 3.80078V8.00078L10.8 9.40078" stroke="#4D6B80" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="aur-font-15 aur-font-600 mb-1 aur-text-heading">Joe Black</div>
                        <div class="aur-font-15 aur-font-500" style="color: #002B49b0">+01 234 ***327</div>
                    </div>
                    <div class="aur-appoint-agent-avatar">
                        <img src="{{asset('image/Polygon 15.png')}}" alt="">
                    </div>
                </div>
                <div class="aur-flex-between aur-appoint-item">
                    <div class="">
                        <div class="aur-font-12 aur-font-600 mb-1">SUN</div>
                        <div class="aur-font-30 aur-font-700 mb-1">21</div>
                    </div>
                    <div>
                        <div class="aur-flex-start aur-gap-8 mb-1">
                            <div class="aur-font-12 aur-font-500" style="color: #394146b0">12:00am</div>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 15C11.866 15 15 11.866 15 8C15 4.13401 11.866 1 8 1C4.13401 1 1 4.13401 1 8C1 11.866 4.13401 15 8 15Z" stroke="#4D6B80" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M8 3.80078V8.00078L10.8 9.40078" stroke="#4D6B80" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="aur-font-15 aur-font-600 mb-1 aur-text-heading">Joe Black</div>
                        <div class="aur-font-15 aur-font-500" style="color: #002B49b0">+01 234 ***327</div>
                    </div>
                    <div class="aur-appoint-agent-avatar">
                        <img src="{{asset('image/Polygon 15.png')}}" alt="">
                    </div>
                </div>
                <div class="aur-flex-between aur-appoint-item">
                    <div class="">
                        <div class="aur-font-12 aur-font-600 mb-1">SUN</div>
                        <div class="aur-font-30 aur-font-700 mb-1">21</div>
                    </div>
                    <div>
                        <div class="aur-flex-start aur-gap-8 mb-1">
                            <div class="aur-font-12 aur-font-500" style="color: #394146b0">12:00am</div>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 15C11.866 15 15 11.866 15 8C15 4.13401 11.866 1 8 1C4.13401 1 1 4.13401 1 8C1 11.866 4.13401 15 8 15Z" stroke="#4D6B80" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M8 3.80078V8.00078L10.8 9.40078" stroke="#4D6B80" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="aur-font-15 aur-font-600 mb-1 aur-text-heading">Joe Black</div>
                        <div class="aur-font-15 aur-font-500" style="color: #002B49b0">+01 234 ***327</div>
                    </div>
                    <div class="aur-appoint-agent-avatar">
                        <img src="{{asset('image/Polygon 15.png')}}" alt="">
                    </div>
                </div>
                <div class="aur-flex-between aur-appoint-item">
                    <div class="">
                        <div class="aur-font-12 aur-font-600 mb-1">SUN</div>
                        <div class="aur-font-30 aur-font-700 mb-1">21</div>
                    </div>
                    <div>
                        <div class="aur-flex-start aur-gap-8 mb-1">
                            <div class="aur-font-12 aur-font-500" style="color: #394146b0">12:00am</div>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 15C11.866 15 15 11.866 15 8C15 4.13401 11.866 1 8 1C4.13401 1 1 4.13401 1 8C1 11.866 4.13401 15 8 15Z" stroke="#4D6B80" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M8 3.80078V8.00078L10.8 9.40078" stroke="#4D6B80" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="aur-font-15 aur-font-600 mb-1 aur-text-heading">Joe Black</div>
                        <div class="aur-font-15 aur-font-500" style="color: #002B49b0">+01 234 ***327</div>
                    </div>
                    <div class="aur-appoint-agent-avatar">
                        <img src="{{asset('image/Polygon 15.png')}}" alt="">
                    </div>
                </div>
                <div class="aur-flex-between aur-appoint-item">
                    <div class="">
                        <div class="aur-font-12 aur-font-600 mb-1">SUN</div>
                        <div class="aur-font-30 aur-font-700 mb-1">21</div>
                    </div>
                    <div>
                        <div class="aur-flex-start aur-gap-8 mb-1">
                            <div class="aur-font-12 aur-font-500" style="color: #394146b0">12:00am</div>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 15C11.866 15 15 11.866 15 8C15 4.13401 11.866 1 8 1C4.13401 1 1 4.13401 1 8C1 11.866 4.13401 15 8 15Z" stroke="#4D6B80" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M8 3.80078V8.00078L10.8 9.40078" stroke="#4D6B80" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="aur-font-15 aur-font-600 mb-1 aur-text-heading">Joe Black</div>
                        <div class="aur-font-15 aur-font-500" style="color: #002B49b0">+01 234 ***327</div>
                    </div>
                    <div class="aur-appoint-agent-avatar">
                        <img src="{{asset('image/Polygon 15.png')}}" alt="">
                    </div>
                </div>
                <div class="aur-flex-between aur-appoint-item">
                    <div class="">
                        <div class="aur-font-12 aur-font-600 mb-1">SUN</div>
                        <div class="aur-font-30 aur-font-700 mb-1">21</div>
                    </div>
                    <div>
                        <div class="aur-flex-start aur-gap-8 mb-1">
                            <div class="aur-font-12 aur-font-500" style="color: #394146b0">12:00am</div>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 15C11.866 15 15 11.866 15 8C15 4.13401 11.866 1 8 1C4.13401 1 1 4.13401 1 8C1 11.866 4.13401 15 8 15Z" stroke="#4D6B80" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M8 3.80078V8.00078L10.8 9.40078" stroke="#4D6B80" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="aur-font-15 aur-font-600 mb-1 aur-text-heading">Joe Black</div>
                        <div class="aur-font-15 aur-font-500" style="color: #002B49b0">+01 234 ***327</div>
                    </div>
                    <div class="aur-appoint-agent-avatar">
                        <img src="{{asset('image/Polygon 15.png')}}" alt="">
                    </div>
                </div>
                <div class="aur-flex-between aur-appoint-item">
                    <div class="">
                        <div class="aur-font-12 aur-font-600 mb-1">SUN</div>
                        <div class="aur-font-30 aur-font-700 mb-1">21</div>
                    </div>
                    <div>
                        <div class="aur-flex-start aur-gap-8 mb-1">
                            <div class="aur-font-12 aur-font-500" style="color: #394146b0">12:00am</div>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 15C11.866 15 15 11.866 15 8C15 4.13401 11.866 1 8 1C4.13401 1 1 4.13401 1 8C1 11.866 4.13401 15 8 15Z" stroke="#4D6B80" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M8 3.80078V8.00078L10.8 9.40078" stroke="#4D6B80" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="aur-font-15 aur-font-600 mb-1 aur-text-heading">Joe Black</div>
                        <div class="aur-font-15 aur-font-500" style="color: #002B49b0">+01 234 ***327</div>
                    </div>
                    <div class="aur-appoint-agent-avatar">
                        <img src="{{asset('image/Polygon 15.png')}}" alt="">
                    </div>
                </div>
                <div class="aur-flex-between aur-appoint-item">
                    <div class="">
                        <div class="aur-font-12 aur-font-600 mb-1">SUN</div>
                        <div class="aur-font-30 aur-font-700 mb-1">21</div>
                    </div>
                    <div>
                        <div class="aur-flex-start aur-gap-8 mb-1">
                            <div class="aur-font-12 aur-font-500" style="color: #394146b0">12:00am</div>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 15C11.866 15 15 11.866 15 8C15 4.13401 11.866 1 8 1C4.13401 1 1 4.13401 1 8C1 11.866 4.13401 15 8 15Z" stroke="#4D6B80" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M8 3.80078V8.00078L10.8 9.40078" stroke="#4D6B80" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="aur-font-15 aur-font-600 mb-1 aur-text-heading">Joe Black</div>
                        <div class="aur-font-15 aur-font-500" style="color: #002B49b0">+01 234 ***327</div>
                    </div>
                    <div class="aur-appoint-agent-avatar">
                        <img src="{{asset('image/Polygon 15.png')}}" alt="">
                    </div>
                </div>
                <div class="aur-flex-between aur-appoint-item">
                    <div class="">
                        <div class="aur-font-12 aur-font-600 mb-1">SUN</div>
                        <div class="aur-font-30 aur-font-700 mb-1">21</div>
                    </div>
                    <div>
                        <div class="aur-flex-start aur-gap-8 mb-1">
                            <div class="aur-font-12 aur-font-500" style="color: #394146b0">12:00am</div>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 15C11.866 15 15 11.866 15 8C15 4.13401 11.866 1 8 1C4.13401 1 1 4.13401 1 8C1 11.866 4.13401 15 8 15Z" stroke="#4D6B80" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M8 3.80078V8.00078L10.8 9.40078" stroke="#4D6B80" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="aur-font-15 aur-font-600 mb-1 aur-text-heading">Joe Black</div>
                        <div class="aur-font-15 aur-font-500" style="color: #002B49b0">+01 234 ***327</div>
                    </div>
                    <div class="aur-appoint-agent-avatar">
                        <img src="{{asset('image/Polygon 15.png')}}" alt="">
                    </div>
                </div>
                <div class="aur-flex-between aur-appoint-item">
                    <div class="">
                        <div class="aur-font-12 aur-font-600 mb-1">SUN</div>
                        <div class="aur-font-30 aur-font-700 mb-1">21</div>
                    </div>
                    <div>
                        <div class="aur-flex-start aur-gap-8 mb-1">
                            <div class="aur-font-12 aur-font-500" style="color: #394146b0">12:00am</div>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 15C11.866 15 15 11.866 15 8C15 4.13401 11.866 1 8 1C4.13401 1 1 4.13401 1 8C1 11.866 4.13401 15 8 15Z" stroke="#4D6B80" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M8 3.80078V8.00078L10.8 9.40078" stroke="#4D6B80" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="aur-font-15 aur-font-600 mb-1 aur-text-heading">Joe Black</div>
                        <div class="aur-font-15 aur-font-500" style="color: #002B49b0">+01 234 ***327</div>
                    </div>
                    <div class="aur-appoint-agent-avatar">
                        <img src="{{asset('image/Polygon 15.png')}}" alt="">
                    </div>
                </div>
                <div class="aur-flex-between aur-appoint-item">
                    <div class="">
                        <div class="aur-font-12 aur-font-600 mb-1">SUN</div>
                        <div class="aur-font-30 aur-font-700 mb-1">21</div>
                    </div>
                    <div>
                        <div class="aur-flex-start aur-gap-8 mb-1">
                            <div class="aur-font-12 aur-font-500" style="color: #394146b0">12:00am</div>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 15C11.866 15 15 11.866 15 8C15 4.13401 11.866 1 8 1C4.13401 1 1 4.13401 1 8C1 11.866 4.13401 15 8 15Z" stroke="#4D6B80" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M8 3.80078V8.00078L10.8 9.40078" stroke="#4D6B80" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="aur-font-15 aur-font-600 mb-1 aur-text-heading">Joe Black</div>
                        <div class="aur-font-15 aur-font-500" style="color: #002B49b0">+01 234 ***327</div>
                    </div>
                    <div class="aur-appoint-agent-avatar">
                        <img src="{{asset('image/Polygon 15.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('custom_style')
    <link rel="stylesheet" href="{{asset('css/appoinment.css')}}">
@endpush
@push('custom_script')
    <script src="{{asset('js/appoinment.js')}}"></script>
@endpush