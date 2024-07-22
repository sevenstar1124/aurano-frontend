@extends('layouts/client')
@section('content')
    <div class="aur-main-content">
        <div class="aur-flex-between mt-4 mb-4" style="align-items: flex-start">
            <div class="text-dark aur-font-30 aur-font-700">Campaigns</div>
            <div class="btn btn-dark aur-btn-dark">+ Create Campaign</div>
        </div>
        <div class="aur-campaign-items-wrap">
            <div class="aur-campaign-for-scroll">
                <div class="aur-campaign-item">
                    <div class="">
                        <div class="aur-font-12 aur-font-400 aur-text-primary">CAMPAIGN TITLE</div>
                        <div class="aur-font-20 aur-font-700 aur-text-dark">Insurance Claims</div>
                    </div>
                    <div class="">
                        <div class="aur-font-12 aur-font-400 aur-text-primary">OUTBOUND CALLS</div>
                        <div class="aur-font-20 aur-font-700 aur-text-dark aur-flex-start" style="align-items: flex-end">
                            24000
                            <svg width="15" height="9" viewBox="0 0 15 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.646447 8.14645C0.451184 8.34171 0.451184 8.65829 0.646447 8.85355C0.841709 9.04882 1.15829 9.04882 1.35355 8.85355L0.646447 8.14645ZM6.5 3L6.85355 2.64645L6.5 2.29289L6.14645 2.64645L6.5 3ZM9.5 6L9.14645 6.35355L9.51571 6.72281L9.86858 6.33786L9.5 6ZM15 0L9.4934 1.73512L13.7494 5.63642L15 0ZM1.35355 8.85355L6.85355 3.35355L6.14645 2.64645L0.646447 8.14645L1.35355 8.85355ZM6.14645 3.35355L9.14645 6.35355L9.85355 5.64645L6.85355 2.64645L6.14645 3.35355ZM9.86858 6.33786L12.3278 3.65506L11.5907 2.97933L9.13142 5.66214L9.86858 6.33786Z" fill="#41D37E"/>
                            </svg>
                        </div>
                    </div>
                    <div class="">
                        <div class="aur-font-12 aur-font-400 aur-text-primary">DROPPED CALLS</div>
                        <div class="aur-font-20 aur-font-700 aur-text-dark aur-flex-start" style="align-items: flex-end">
                            1300
                            <svg width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.646447 1.35355C0.451184 1.15829 0.451184 0.841709 0.646447 0.646446C0.841709 0.451184 1.15829 0.451184 1.35355 0.646446L0.646447 1.35355ZM6.5 6.5L6.85355 6.85355L6.5 7.20711L6.14645 6.85355L6.5 6.5ZM9.5 3.5L9.14645 3.14645L9.51571 2.77719L9.86858 3.16214L9.5 3.5ZM15 9.5L9.4934 7.76488L13.7494 3.86358L15 9.5ZM1.35355 0.646446L6.85355 6.14645L6.14645 6.85355L0.646447 1.35355L1.35355 0.646446ZM6.14645 6.14645L9.14645 3.14645L9.85355 3.85355L6.85355 6.85355L6.14645 6.14645ZM9.86858 3.16214L12.3278 5.84494L11.5907 6.52067L9.13142 3.83786L9.86858 3.16214Z" fill="#EA4335"/>
                            </svg>
                        </div>
                    </div>
                    <div class="">
                        <div class="aur-font-12 aur-font-400 aur-text-primary">TAGS</div>
                        <div class="aur-font-20 aur-font-700 aur-text-dark aur-flex-start" style="align-items: flex-end">
                            1300
                            <svg width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.646447 1.35355C0.451184 1.15829 0.451184 0.841709 0.646447 0.646446C0.841709 0.451184 1.15829 0.451184 1.35355 0.646446L0.646447 1.35355ZM6.5 6.5L6.85355 6.85355L6.5 7.20711L6.14645 6.85355L6.5 6.5ZM9.5 3.5L9.14645 3.14645L9.51571 2.77719L9.86858 3.16214L9.5 3.5ZM15 9.5L9.4934 7.76488L13.7494 3.86358L15 9.5ZM1.35355 0.646446L6.85355 6.14645L6.14645 6.85355L0.646447 1.35355L1.35355 0.646446ZM6.14645 6.14645L9.14645 3.14645L9.85355 3.85355L6.85355 6.85355L6.14645 6.14645ZM9.86858 3.16214L12.3278 5.84494L11.5907 6.52067L9.13142 3.83786L9.86858 3.16214Z" fill="#EA4335"/>
                            </svg>
                        </div>
                    </div>
                    <div class="">
                        <div class="aur-font-12 aur-font-400 aur-text-primary mb-1">ASSIGNED AGENTS</div>
                        <div class="aur-flex-start">
                            <img class="aur-campaign-agent-item" src="{{asset('image/agent.png')}}" alt="" style="width: 40px; height:40px; border-radius: 50%;">
                            <img class="aur-campaign-agent-item" src="{{asset('image/agent.png')}}" alt="" style="width: 40px; height:40px; border-radius: 50%;">
                            <img class="aur-campaign-agent-item" src="{{asset('image/agent.png')}}" alt="" style="width: 40px; height:40px; border-radius: 50%;">
                        </div>
                    </div>
                    <div class="aur-campaign-drodown">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.0562 17.9187L14.5662 9.4437C14.4267 9.3031 14.2608 9.19151 14.0781 9.11536C13.8953 9.03921 13.6992 9 13.5012 9C13.3032 9 13.1071 9.03921 12.9243 9.11536C12.7415 9.19151 12.5756 9.3031 12.4362 9.4437C12.1568 9.72474 12 10.1049 12 10.5012C12 10.8975 12.1568 11.2777 12.4362 11.5587L19.8612 19.0587L12.4362 26.4837C12.1568 26.7647 12 27.1449 12 27.5412C12 27.9375 12.1568 28.3177 12.4362 28.5987C12.5751 28.7404 12.7408 28.8532 12.9236 28.9304C13.1064 29.0077 13.3027 29.0479 13.5012 29.0487C13.6996 29.0479 13.896 29.0077 14.0788 28.9304C14.2616 28.8532 14.4273 28.7404 14.5662 28.5987L23.0562 20.1237C23.2084 19.9832 23.33 19.8128 23.4131 19.623C23.4962 19.4333 23.5391 19.2283 23.5391 19.0212C23.5391 18.814 23.4962 18.6091 23.4131 18.4194C23.33 18.2296 23.2084 18.0592 23.0562 17.9187Z" fill="#002B49"/>
                            </svg>
                    </div>
                </div>
                <div class="aur-campaign-item">
                    <div class="">
                        <div class="aur-font-12 aur-font-400 aur-text-primary">CAMPAIGN TITLE</div>
                        <div class="aur-font-20 aur-font-700 aur-text-dark">Insurance Claims</div>
                    </div>
                    <div class="">
                        <div class="aur-font-12 aur-font-400 aur-text-primary">OUTBOUND CALLS</div>
                        <div class="aur-font-20 aur-font-700 aur-text-dark aur-flex-start" style="align-items: flex-end">
                            24000
                            <svg width="15" height="9" viewBox="0 0 15 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.646447 8.14645C0.451184 8.34171 0.451184 8.65829 0.646447 8.85355C0.841709 9.04882 1.15829 9.04882 1.35355 8.85355L0.646447 8.14645ZM6.5 3L6.85355 2.64645L6.5 2.29289L6.14645 2.64645L6.5 3ZM9.5 6L9.14645 6.35355L9.51571 6.72281L9.86858 6.33786L9.5 6ZM15 0L9.4934 1.73512L13.7494 5.63642L15 0ZM1.35355 8.85355L6.85355 3.35355L6.14645 2.64645L0.646447 8.14645L1.35355 8.85355ZM6.14645 3.35355L9.14645 6.35355L9.85355 5.64645L6.85355 2.64645L6.14645 3.35355ZM9.86858 6.33786L12.3278 3.65506L11.5907 2.97933L9.13142 5.66214L9.86858 6.33786Z" fill="#41D37E"/>
                            </svg>
                        </div>
                    </div>
                    <div class="">
                        <div class="aur-font-12 aur-font-400 aur-text-primary">DROPPED CALLS</div>
                        <div class="aur-font-20 aur-font-700 aur-text-dark aur-flex-start" style="align-items: flex-end">
                            1300
                            <svg width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.646447 1.35355C0.451184 1.15829 0.451184 0.841709 0.646447 0.646446C0.841709 0.451184 1.15829 0.451184 1.35355 0.646446L0.646447 1.35355ZM6.5 6.5L6.85355 6.85355L6.5 7.20711L6.14645 6.85355L6.5 6.5ZM9.5 3.5L9.14645 3.14645L9.51571 2.77719L9.86858 3.16214L9.5 3.5ZM15 9.5L9.4934 7.76488L13.7494 3.86358L15 9.5ZM1.35355 0.646446L6.85355 6.14645L6.14645 6.85355L0.646447 1.35355L1.35355 0.646446ZM6.14645 6.14645L9.14645 3.14645L9.85355 3.85355L6.85355 6.85355L6.14645 6.14645ZM9.86858 3.16214L12.3278 5.84494L11.5907 6.52067L9.13142 3.83786L9.86858 3.16214Z" fill="#EA4335"/>
                            </svg>
                        </div>
                    </div>
                    <div class="">
                        <div class="aur-font-12 aur-font-400 aur-text-primary">TAGS</div>
                        <div class="aur-font-20 aur-font-700 aur-text-dark aur-flex-start" style="align-items: flex-end">
                            1300
                            <svg width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.646447 1.35355C0.451184 1.15829 0.451184 0.841709 0.646447 0.646446C0.841709 0.451184 1.15829 0.451184 1.35355 0.646446L0.646447 1.35355ZM6.5 6.5L6.85355 6.85355L6.5 7.20711L6.14645 6.85355L6.5 6.5ZM9.5 3.5L9.14645 3.14645L9.51571 2.77719L9.86858 3.16214L9.5 3.5ZM15 9.5L9.4934 7.76488L13.7494 3.86358L15 9.5ZM1.35355 0.646446L6.85355 6.14645L6.14645 6.85355L0.646447 1.35355L1.35355 0.646446ZM6.14645 6.14645L9.14645 3.14645L9.85355 3.85355L6.85355 6.85355L6.14645 6.14645ZM9.86858 3.16214L12.3278 5.84494L11.5907 6.52067L9.13142 3.83786L9.86858 3.16214Z" fill="#EA4335"/>
                            </svg>
                        </div>
                    </div>
                    <div class="">
                        <div class="aur-font-12 aur-font-400 aur-text-primary mb-1">ASSIGNED AGENTS</div>
                        <div class="aur-flex-start">
                            <img class="aur-campaign-agent-item" src="{{asset('image/agent.png')}}" alt="" style="width: 40px; height:40px; border-radius: 50%;">
                            <img class="aur-campaign-agent-item" src="{{asset('image/agent.png')}}" alt="" style="width: 40px; height:40px; border-radius: 50%;">
                            <img class="aur-campaign-agent-item" src="{{asset('image/agent.png')}}" alt="" style="width: 40px; height:40px; border-radius: 50%;">
                        </div>
                    </div>
                    <div class="aur-campaign-drodown">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.0562 17.9187L14.5662 9.4437C14.4267 9.3031 14.2608 9.19151 14.0781 9.11536C13.8953 9.03921 13.6992 9 13.5012 9C13.3032 9 13.1071 9.03921 12.9243 9.11536C12.7415 9.19151 12.5756 9.3031 12.4362 9.4437C12.1568 9.72474 12 10.1049 12 10.5012C12 10.8975 12.1568 11.2777 12.4362 11.5587L19.8612 19.0587L12.4362 26.4837C12.1568 26.7647 12 27.1449 12 27.5412C12 27.9375 12.1568 28.3177 12.4362 28.5987C12.5751 28.7404 12.7408 28.8532 12.9236 28.9304C13.1064 29.0077 13.3027 29.0479 13.5012 29.0487C13.6996 29.0479 13.896 29.0077 14.0788 28.9304C14.2616 28.8532 14.4273 28.7404 14.5662 28.5987L23.0562 20.1237C23.2084 19.9832 23.33 19.8128 23.4131 19.623C23.4962 19.4333 23.5391 19.2283 23.5391 19.0212C23.5391 18.814 23.4962 18.6091 23.4131 18.4194C23.33 18.2296 23.2084 18.0592 23.0562 17.9187Z" fill="#002B49"/>
                            </svg>
                    </div>
                </div>
                <div class="aur-campaign-item">
                    <div class="">
                        <div class="aur-font-12 aur-font-400 aur-text-primary">CAMPAIGN TITLE</div>
                        <div class="aur-font-20 aur-font-700 aur-text-dark">Insurance Claims</div>
                    </div>
                    <div class="">
                        <div class="aur-font-12 aur-font-400 aur-text-primary">OUTBOUND CALLS</div>
                        <div class="aur-font-20 aur-font-700 aur-text-dark aur-flex-start" style="align-items: flex-end">
                            24000
                            <svg width="15" height="9" viewBox="0 0 15 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.646447 8.14645C0.451184 8.34171 0.451184 8.65829 0.646447 8.85355C0.841709 9.04882 1.15829 9.04882 1.35355 8.85355L0.646447 8.14645ZM6.5 3L6.85355 2.64645L6.5 2.29289L6.14645 2.64645L6.5 3ZM9.5 6L9.14645 6.35355L9.51571 6.72281L9.86858 6.33786L9.5 6ZM15 0L9.4934 1.73512L13.7494 5.63642L15 0ZM1.35355 8.85355L6.85355 3.35355L6.14645 2.64645L0.646447 8.14645L1.35355 8.85355ZM6.14645 3.35355L9.14645 6.35355L9.85355 5.64645L6.85355 2.64645L6.14645 3.35355ZM9.86858 6.33786L12.3278 3.65506L11.5907 2.97933L9.13142 5.66214L9.86858 6.33786Z" fill="#41D37E"/>
                            </svg>
                        </div>
                    </div>
                    <div class="">
                        <div class="aur-font-12 aur-font-400 aur-text-primary">DROPPED CALLS</div>
                        <div class="aur-font-20 aur-font-700 aur-text-dark aur-flex-start" style="align-items: flex-end">
                            1300
                            <svg width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.646447 1.35355C0.451184 1.15829 0.451184 0.841709 0.646447 0.646446C0.841709 0.451184 1.15829 0.451184 1.35355 0.646446L0.646447 1.35355ZM6.5 6.5L6.85355 6.85355L6.5 7.20711L6.14645 6.85355L6.5 6.5ZM9.5 3.5L9.14645 3.14645L9.51571 2.77719L9.86858 3.16214L9.5 3.5ZM15 9.5L9.4934 7.76488L13.7494 3.86358L15 9.5ZM1.35355 0.646446L6.85355 6.14645L6.14645 6.85355L0.646447 1.35355L1.35355 0.646446ZM6.14645 6.14645L9.14645 3.14645L9.85355 3.85355L6.85355 6.85355L6.14645 6.14645ZM9.86858 3.16214L12.3278 5.84494L11.5907 6.52067L9.13142 3.83786L9.86858 3.16214Z" fill="#EA4335"/>
                            </svg>
                        </div>
                    </div>
                    <div class="">
                        <div class="aur-font-12 aur-font-400 aur-text-primary">TAGS</div>
                        <div class="aur-font-20 aur-font-700 aur-text-dark aur-flex-start" style="align-items: flex-end">
                            1300
                            <svg width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.646447 1.35355C0.451184 1.15829 0.451184 0.841709 0.646447 0.646446C0.841709 0.451184 1.15829 0.451184 1.35355 0.646446L0.646447 1.35355ZM6.5 6.5L6.85355 6.85355L6.5 7.20711L6.14645 6.85355L6.5 6.5ZM9.5 3.5L9.14645 3.14645L9.51571 2.77719L9.86858 3.16214L9.5 3.5ZM15 9.5L9.4934 7.76488L13.7494 3.86358L15 9.5ZM1.35355 0.646446L6.85355 6.14645L6.14645 6.85355L0.646447 1.35355L1.35355 0.646446ZM6.14645 6.14645L9.14645 3.14645L9.85355 3.85355L6.85355 6.85355L6.14645 6.14645ZM9.86858 3.16214L12.3278 5.84494L11.5907 6.52067L9.13142 3.83786L9.86858 3.16214Z" fill="#EA4335"/>
                            </svg>
                        </div>
                    </div>
                    <div class="">
                        <div class="aur-font-12 aur-font-400 aur-text-primary mb-1">ASSIGNED AGENTS</div>
                        <div class="aur-flex-start">
                            <img class="aur-campaign-agent-item" src="{{asset('image/agent.png')}}" alt="" style="width: 40px; height:40px; border-radius: 50%;">
                            <img class="aur-campaign-agent-item" src="{{asset('image/agent.png')}}" alt="" style="width: 40px; height:40px; border-radius: 50%;">
                            <img class="aur-campaign-agent-item" src="{{asset('image/agent.png')}}" alt="" style="width: 40px; height:40px; border-radius: 50%;">
                        </div>
                    </div>
                    <div class="aur-campaign-drodown">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.0562 17.9187L14.5662 9.4437C14.4267 9.3031 14.2608 9.19151 14.0781 9.11536C13.8953 9.03921 13.6992 9 13.5012 9C13.3032 9 13.1071 9.03921 12.9243 9.11536C12.7415 9.19151 12.5756 9.3031 12.4362 9.4437C12.1568 9.72474 12 10.1049 12 10.5012C12 10.8975 12.1568 11.2777 12.4362 11.5587L19.8612 19.0587L12.4362 26.4837C12.1568 26.7647 12 27.1449 12 27.5412C12 27.9375 12.1568 28.3177 12.4362 28.5987C12.5751 28.7404 12.7408 28.8532 12.9236 28.9304C13.1064 29.0077 13.3027 29.0479 13.5012 29.0487C13.6996 29.0479 13.896 29.0077 14.0788 28.9304C14.2616 28.8532 14.4273 28.7404 14.5662 28.5987L23.0562 20.1237C23.2084 19.9832 23.33 19.8128 23.4131 19.623C23.4962 19.4333 23.5391 19.2283 23.5391 19.0212C23.5391 18.814 23.4962 18.6091 23.4131 18.4194C23.33 18.2296 23.2084 18.0592 23.0562 17.9187Z" fill="#002B49"/>
                            </svg>
                    </div>
                </div>
                <div class="aur-campaign-item">
                    <div class="">
                        <div class="aur-font-12 aur-font-400 aur-text-primary">CAMPAIGN TITLE</div>
                        <div class="aur-font-20 aur-font-700 aur-text-dark">Insurance Claims</div>
                    </div>
                    <div class="">
                        <div class="aur-font-12 aur-font-400 aur-text-primary">OUTBOUND CALLS</div>
                        <div class="aur-font-20 aur-font-700 aur-text-dark aur-flex-start" style="align-items: flex-end">
                            24000
                            <svg width="15" height="9" viewBox="0 0 15 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.646447 8.14645C0.451184 8.34171 0.451184 8.65829 0.646447 8.85355C0.841709 9.04882 1.15829 9.04882 1.35355 8.85355L0.646447 8.14645ZM6.5 3L6.85355 2.64645L6.5 2.29289L6.14645 2.64645L6.5 3ZM9.5 6L9.14645 6.35355L9.51571 6.72281L9.86858 6.33786L9.5 6ZM15 0L9.4934 1.73512L13.7494 5.63642L15 0ZM1.35355 8.85355L6.85355 3.35355L6.14645 2.64645L0.646447 8.14645L1.35355 8.85355ZM6.14645 3.35355L9.14645 6.35355L9.85355 5.64645L6.85355 2.64645L6.14645 3.35355ZM9.86858 6.33786L12.3278 3.65506L11.5907 2.97933L9.13142 5.66214L9.86858 6.33786Z" fill="#41D37E"/>
                            </svg>
                        </div>
                    </div>
                    <div class="">
                        <div class="aur-font-12 aur-font-400 aur-text-primary">DROPPED CALLS</div>
                        <div class="aur-font-20 aur-font-700 aur-text-dark aur-flex-start" style="align-items: flex-end">
                            1300
                            <svg width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.646447 1.35355C0.451184 1.15829 0.451184 0.841709 0.646447 0.646446C0.841709 0.451184 1.15829 0.451184 1.35355 0.646446L0.646447 1.35355ZM6.5 6.5L6.85355 6.85355L6.5 7.20711L6.14645 6.85355L6.5 6.5ZM9.5 3.5L9.14645 3.14645L9.51571 2.77719L9.86858 3.16214L9.5 3.5ZM15 9.5L9.4934 7.76488L13.7494 3.86358L15 9.5ZM1.35355 0.646446L6.85355 6.14645L6.14645 6.85355L0.646447 1.35355L1.35355 0.646446ZM6.14645 6.14645L9.14645 3.14645L9.85355 3.85355L6.85355 6.85355L6.14645 6.14645ZM9.86858 3.16214L12.3278 5.84494L11.5907 6.52067L9.13142 3.83786L9.86858 3.16214Z" fill="#EA4335"/>
                            </svg>
                        </div>
                    </div>
                    <div class="">
                        <div class="aur-font-12 aur-font-400 aur-text-primary">TAGS</div>
                        <div class="aur-font-20 aur-font-700 aur-text-dark aur-flex-start" style="align-items: flex-end">
                            1300
                            <svg width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.646447 1.35355C0.451184 1.15829 0.451184 0.841709 0.646447 0.646446C0.841709 0.451184 1.15829 0.451184 1.35355 0.646446L0.646447 1.35355ZM6.5 6.5L6.85355 6.85355L6.5 7.20711L6.14645 6.85355L6.5 6.5ZM9.5 3.5L9.14645 3.14645L9.51571 2.77719L9.86858 3.16214L9.5 3.5ZM15 9.5L9.4934 7.76488L13.7494 3.86358L15 9.5ZM1.35355 0.646446L6.85355 6.14645L6.14645 6.85355L0.646447 1.35355L1.35355 0.646446ZM6.14645 6.14645L9.14645 3.14645L9.85355 3.85355L6.85355 6.85355L6.14645 6.14645ZM9.86858 3.16214L12.3278 5.84494L11.5907 6.52067L9.13142 3.83786L9.86858 3.16214Z" fill="#EA4335"/>
                            </svg>
                        </div>
                    </div>
                    <div class="">
                        <div class="aur-font-12 aur-font-400 aur-text-primary mb-1">ASSIGNED AGENTS</div>
                        <div class="aur-flex-start">
                            <img class="aur-campaign-agent-item" src="{{asset('image/agent.png')}}" alt="" style="width: 40px; height:40px; border-radius: 50%;">
                            <img class="aur-campaign-agent-item" src="{{asset('image/agent.png')}}" alt="" style="width: 40px; height:40px; border-radius: 50%;">
                            <img class="aur-campaign-agent-item" src="{{asset('image/agent.png')}}" alt="" style="width: 40px; height:40px; border-radius: 50%;">
                        </div>
                    </div>
                    <div class="aur-campaign-drodown">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.0562 17.9187L14.5662 9.4437C14.4267 9.3031 14.2608 9.19151 14.0781 9.11536C13.8953 9.03921 13.6992 9 13.5012 9C13.3032 9 13.1071 9.03921 12.9243 9.11536C12.7415 9.19151 12.5756 9.3031 12.4362 9.4437C12.1568 9.72474 12 10.1049 12 10.5012C12 10.8975 12.1568 11.2777 12.4362 11.5587L19.8612 19.0587L12.4362 26.4837C12.1568 26.7647 12 27.1449 12 27.5412C12 27.9375 12.1568 28.3177 12.4362 28.5987C12.5751 28.7404 12.7408 28.8532 12.9236 28.9304C13.1064 29.0077 13.3027 29.0479 13.5012 29.0487C13.6996 29.0479 13.896 29.0077 14.0788 28.9304C14.2616 28.8532 14.4273 28.7404 14.5662 28.5987L23.0562 20.1237C23.2084 19.9832 23.33 19.8128 23.4131 19.623C23.4962 19.4333 23.5391 19.2283 23.5391 19.0212C23.5391 18.814 23.4962 18.6091 23.4131 18.4194C23.33 18.2296 23.2084 18.0592 23.0562 17.9187Z" fill="#002B49"/>
                            </svg>
                    </div>
                </div>
                <div class="aur-campaign-item">
                    <div class="">
                        <div class="aur-font-12 aur-font-400 aur-text-primary">CAMPAIGN TITLE</div>
                        <div class="aur-font-20 aur-font-700 aur-text-dark">Insurance Claims</div>
                    </div>
                    <div class="">
                        <div class="aur-font-12 aur-font-400 aur-text-primary">OUTBOUND CALLS</div>
                        <div class="aur-font-20 aur-font-700 aur-text-dark aur-flex-start" style="align-items: flex-end">
                            24000
                            <svg width="15" height="9" viewBox="0 0 15 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.646447 8.14645C0.451184 8.34171 0.451184 8.65829 0.646447 8.85355C0.841709 9.04882 1.15829 9.04882 1.35355 8.85355L0.646447 8.14645ZM6.5 3L6.85355 2.64645L6.5 2.29289L6.14645 2.64645L6.5 3ZM9.5 6L9.14645 6.35355L9.51571 6.72281L9.86858 6.33786L9.5 6ZM15 0L9.4934 1.73512L13.7494 5.63642L15 0ZM1.35355 8.85355L6.85355 3.35355L6.14645 2.64645L0.646447 8.14645L1.35355 8.85355ZM6.14645 3.35355L9.14645 6.35355L9.85355 5.64645L6.85355 2.64645L6.14645 3.35355ZM9.86858 6.33786L12.3278 3.65506L11.5907 2.97933L9.13142 5.66214L9.86858 6.33786Z" fill="#41D37E"/>
                            </svg>
                        </div>
                    </div>
                    <div class="">
                        <div class="aur-font-12 aur-font-400 aur-text-primary">DROPPED CALLS</div>
                        <div class="aur-font-20 aur-font-700 aur-text-dark aur-flex-start" style="align-items: flex-end">
                            1300
                            <svg width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.646447 1.35355C0.451184 1.15829 0.451184 0.841709 0.646447 0.646446C0.841709 0.451184 1.15829 0.451184 1.35355 0.646446L0.646447 1.35355ZM6.5 6.5L6.85355 6.85355L6.5 7.20711L6.14645 6.85355L6.5 6.5ZM9.5 3.5L9.14645 3.14645L9.51571 2.77719L9.86858 3.16214L9.5 3.5ZM15 9.5L9.4934 7.76488L13.7494 3.86358L15 9.5ZM1.35355 0.646446L6.85355 6.14645L6.14645 6.85355L0.646447 1.35355L1.35355 0.646446ZM6.14645 6.14645L9.14645 3.14645L9.85355 3.85355L6.85355 6.85355L6.14645 6.14645ZM9.86858 3.16214L12.3278 5.84494L11.5907 6.52067L9.13142 3.83786L9.86858 3.16214Z" fill="#EA4335"/>
                            </svg>
                        </div>
                    </div>
                    <div class="">
                        <div class="aur-font-12 aur-font-400 aur-text-primary">TAGS</div>
                        <div class="aur-font-20 aur-font-700 aur-text-dark aur-flex-start" style="align-items: flex-end">
                            1300
                            <svg width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.646447 1.35355C0.451184 1.15829 0.451184 0.841709 0.646447 0.646446C0.841709 0.451184 1.15829 0.451184 1.35355 0.646446L0.646447 1.35355ZM6.5 6.5L6.85355 6.85355L6.5 7.20711L6.14645 6.85355L6.5 6.5ZM9.5 3.5L9.14645 3.14645L9.51571 2.77719L9.86858 3.16214L9.5 3.5ZM15 9.5L9.4934 7.76488L13.7494 3.86358L15 9.5ZM1.35355 0.646446L6.85355 6.14645L6.14645 6.85355L0.646447 1.35355L1.35355 0.646446ZM6.14645 6.14645L9.14645 3.14645L9.85355 3.85355L6.85355 6.85355L6.14645 6.14645ZM9.86858 3.16214L12.3278 5.84494L11.5907 6.52067L9.13142 3.83786L9.86858 3.16214Z" fill="#EA4335"/>
                            </svg>
                        </div>
                    </div>
                    <div class="">
                        <div class="aur-font-12 aur-font-400 aur-text-primary mb-1">ASSIGNED AGENTS</div>
                        <div class="aur-flex-start">
                            <img class="aur-campaign-agent-item" src="{{asset('image/agent.png')}}" alt="" style="width: 40px; height:40px; border-radius: 50%;">
                            <img class="aur-campaign-agent-item" src="{{asset('image/agent.png')}}" alt="" style="width: 40px; height:40px; border-radius: 50%;">
                            <img class="aur-campaign-agent-item" src="{{asset('image/agent.png')}}" alt="" style="width: 40px; height:40px; border-radius: 50%;">
                        </div>
                    </div>
                    <div class="aur-campaign-drodown">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.0562 17.9187L14.5662 9.4437C14.4267 9.3031 14.2608 9.19151 14.0781 9.11536C13.8953 9.03921 13.6992 9 13.5012 9C13.3032 9 13.1071 9.03921 12.9243 9.11536C12.7415 9.19151 12.5756 9.3031 12.4362 9.4437C12.1568 9.72474 12 10.1049 12 10.5012C12 10.8975 12.1568 11.2777 12.4362 11.5587L19.8612 19.0587L12.4362 26.4837C12.1568 26.7647 12 27.1449 12 27.5412C12 27.9375 12.1568 28.3177 12.4362 28.5987C12.5751 28.7404 12.7408 28.8532 12.9236 28.9304C13.1064 29.0077 13.3027 29.0479 13.5012 29.0487C13.6996 29.0479 13.896 29.0077 14.0788 28.9304C14.2616 28.8532 14.4273 28.7404 14.5662 28.5987L23.0562 20.1237C23.2084 19.9832 23.33 19.8128 23.4131 19.623C23.4962 19.4333 23.5391 19.2283 23.5391 19.0212C23.5391 18.814 23.4962 18.6091 23.4131 18.4194C23.33 18.2296 23.2084 18.0592 23.0562 17.9187Z" fill="#002B49"/>
                            </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('custom_style')
    <link rel="stylesheet" href="{{asset('css/campaign.css')}}">
@endpush
@push('custom_script')
    <script src="{{asset('js/campaign.js')}}"></script>
@endpush