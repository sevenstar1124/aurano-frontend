@extends('layouts/client')
@section('content')
    <div class="aur-main-content">
        <div class="aur-flex-between" style="padding: 0px 10px;">
            <div class="aur-flex-column-center aur-service-agent-name">
                <h1 style="font-size: 48px;">welcome</h1>
                <h1 style="font-size: 48px;">Vaughn</h1>
            </div>
            <div class="aur-main-service-agent-wrap aur-flex-end">
                <div class="aur-main-agent-polygon1">
                    <div class="aur-main-agent-polygon2">
                        <div class="aur-main-agent-avatar">
                            <img src="{{url("image/Polygon 1.png")}}" alt="">
                        </div>
                    </div>
                </div>  
            </div>
        </div>
        <div class="aur-flex-between aur-main-calling-history-wrap">
            <div class="aur-calling-history-item">
                <div class="aur-flex-end">
                    <svg width="48" height="45" viewBox="0 0 48 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23 2.73205C24.8564 1.66025 27.1436 1.66025 29 2.73205L42.0526 10.2679C43.909 11.3397 45.0526 13.3205 45.0526 15.4641V30.5359C45.0526 32.6795 43.909 34.6603 42.0526 35.7321L29 43.2679C27.1436 44.3397 24.8564 44.3397 23 43.2679L9.94744 35.7321C8.09104 34.6603 6.94744 32.6795 6.94744 30.5359V15.4641C6.94744 13.3205 8.09103 11.3397 9.94744 10.2679L23 2.73205Z" fill="#D3F26A"/>
                        <path d="M34.5719 33.3298V30.2049C34.5719 28.5474 33.9134 26.9577 32.7414 25.7856C31.5693 24.6135 29.9796 23.9551 28.3221 23.9551H15.8224C14.1648 23.9551 12.5751 24.6135 11.403 25.7856C10.231 26.9577 9.57251 28.5474 9.57251 30.2049V33.3298" stroke="#6FCF97" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M22.0721 17.7048C25.5238 17.7048 28.322 14.9066 28.322 11.4549C28.322 8.00323 25.5238 5.20508 22.0721 5.20508C18.6204 5.20508 15.8223 8.00323 15.8223 11.4549C15.8223 14.9066 18.6204 17.7048 22.0721 17.7048Z" stroke="#6FCF97" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M19.75 3.03109C21.1423 2.22724 22.8577 2.22724 24.25 3.03109L37.3026 10.567C38.6949 11.3708 39.5526 12.8564 39.5526 14.4641V29.5359C39.5526 31.1436 38.6949 32.6292 37.3026 33.433L24.25 40.9689C22.8577 41.7728 21.1423 41.7728 19.75 40.9689L6.69744 33.433C5.30514 32.6292 4.44744 31.1436 4.44744 29.5359V14.4641C4.44744 12.8564 5.30514 11.3708 6.69744 10.567L19.75 3.03109Z" stroke="#6FCF97" stroke-width="3"/>
                    </svg>
                </div>
                <div class="aur-flex-start text-white aur-font-30 aur-font-700">006</div>
                <div class="aur-flex-start text-white aur-font-16 aur-font-500">Active Agent
                </div>
                <div class="aur-flex-start text-white-50 aur-font-12 aur-font-500">&nbsp;</div>
            </div>
            <div class="aur-calling-history-item">
                <div class="aur-flex-end">
                    <svg width="52" height="48" viewBox="0 0 52 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M49.4993 35.0122V41.5938C49.5018 42.2048 49.3767 42.8096 49.1319 43.3695C48.8871 43.9293 48.5281 44.4318 48.0779 44.8449C47.6276 45.2579 47.0961 45.5724 46.5173 45.7682C45.9385 45.9639 45.3252 46.0366 44.7167 45.9816C37.9657 45.2481 31.481 42.9412 25.7835 39.2464C20.4827 35.8781 15.9886 31.3839 12.6202 26.0831C8.9125 20.3597 6.60512 13.8434 5.88499 7.06217C5.83017 6.45549 5.90227 5.84404 6.0967 5.26675C6.29114 4.68946 6.60365 4.15898 7.01433 3.70909C7.42501 3.25919 7.92488 2.89974 8.48209 2.65361C9.03931 2.40749 9.64166 2.28008 10.2508 2.27951H16.8325C17.8972 2.26903 18.9294 2.64606 19.7366 3.34032C20.5439 4.03458 21.0712 4.99871 21.2202 6.05298C21.498 8.15925 22.0132 10.2273 22.7559 12.2178C23.0511 13.003 23.115 13.8564 22.94 14.6769C22.765 15.4973 22.3585 16.2504 21.7687 16.8469L18.9825 19.6331C22.1056 25.1256 26.6533 29.6733 32.1457 32.7964L34.932 30.0102C35.5285 29.4203 36.2815 29.0138 37.102 28.8388C37.9224 28.6639 38.7758 28.7277 39.5611 29.0229C41.5515 29.7656 43.6196 30.2808 45.7259 30.5586C46.7916 30.709 47.7649 31.2458 48.4606 32.0669C49.1564 32.8881 49.526 33.9363 49.4993 35.0122Z" fill="#D3F26A"/>
                        <path d="M45.8052 35.0122V41.5938C45.8077 42.2048 45.6826 42.8096 45.4378 43.3695C45.193 43.9293 44.834 44.4318 44.3838 44.8449C43.9335 45.2579 43.402 45.5724 42.8232 45.7682C42.2444 45.9639 41.6311 46.0366 41.0226 45.9816C34.2716 45.2481 27.7869 42.9412 22.0894 39.2464C16.7886 35.878 12.2945 31.3839 8.92612 26.0831C5.21841 20.3597 2.91103 13.8434 2.1909 7.06217C2.13608 6.45549 2.20818 5.84404 2.40261 5.26675C2.59705 4.68946 2.90955 4.15898 3.32024 3.70909C3.73092 3.25919 4.23078 2.89974 4.788 2.65361C5.34521 2.40749 5.94757 2.28008 6.55673 2.27951H13.1384C14.2031 2.26903 15.2353 2.64606 16.0425 3.34032C16.8498 4.03458 17.3771 4.99871 17.5261 6.05298C17.8039 8.15925 18.3191 10.2273 19.0618 12.2178C19.357 13.003 19.4209 13.8564 19.2459 14.6769C19.0709 15.4973 18.6644 16.2504 18.0746 16.8469L15.2884 19.6331C18.4115 25.1256 22.9592 29.6733 28.4517 32.7964L31.2379 30.0102C31.8344 29.4203 32.5875 29.0138 33.4079 28.8388C34.2283 28.6639 35.0817 28.7277 35.867 29.0229C37.8574 29.7656 39.9255 30.2808 42.0318 30.5586C43.0975 30.709 44.0708 31.2458 44.7665 32.0669C45.4623 32.8881 45.8319 33.9363 45.8052 35.0122Z" stroke="#F2994A" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M30.8691 11.6256C33.2195 12.0841 35.3797 13.2337 37.073 14.927C38.7663 16.6203 39.9158 18.7804 40.3744 21.1308M30.8691 2C35.7524 2.54249 40.306 4.72927 43.7824 8.20129C47.2588 11.6733 49.4513 16.2242 50 21.1068" stroke="#F2994A" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="aur-flex-start text-white aur-font-30 aur-font-700">240</div>
                <div class="aur-flex-start text-white aur-font-16 aur-font-500">Completed Calls
                </div>
                <div class="aur-flex-start text-white-50 aur-font-12 aur-font-500">In Last 24Hours</div>
            </div>
            <div class="aur-calling-history-item">
                <div class="aur-flex-end">
                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M46.9988 35.47V41.7772C47.0012 42.3628 46.8813 42.9423 46.6467 43.4788C46.4121 44.0153 46.0681 44.4969 45.6366 44.8928C45.2052 45.2886 44.6958 45.59 44.1411 45.7775C43.5864 45.9651 42.9987 46.0348 42.4156 45.9821C35.946 45.2791 29.7316 43.0684 24.2716 39.5276C19.1918 36.2997 14.885 31.9929 11.6571 26.9131C8.10391 21.4283 5.89272 15.1836 5.20261 8.68505C5.15007 8.10366 5.21917 7.5177 5.4055 6.96448C5.59183 6.41126 5.89131 5.90289 6.28487 5.47175C6.67843 5.04061 7.15746 4.69614 7.69144 4.46028C8.22543 4.22441 8.80268 4.10232 9.38644 4.10177H15.6937C16.714 4.09172 17.7032 4.45304 18.4768 5.11836C19.2505 5.78368 19.7558 6.70761 19.8986 7.71794C20.1648 9.73641 20.6585 11.7183 21.3703 13.6258C21.6531 14.3783 21.7144 15.1961 21.5467 15.9823C21.379 16.7686 20.9894 17.4902 20.4242 18.0619L17.7541 20.732C20.747 25.9955 25.1051 30.3536 30.3687 33.3465L33.0387 30.6764C33.6104 30.1112 34.332 29.7216 35.1183 29.5539C35.9045 29.3863 36.7223 29.4475 37.4748 29.7303C39.3823 30.4421 41.3642 30.9358 43.3827 31.202C44.404 31.3461 45.3367 31.8605 46.0034 32.6474C46.6702 33.4344 47.0244 34.4389 46.9988 35.47Z" fill="#D3F26A"/>
                        <path d="M45.5616 14.6146V2H32.947" stroke="#2884FF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M30.8442 16.717L45.5612 2" stroke="#2884FF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M43.4588 35.47V41.7772C43.4612 42.3628 43.3412 42.9423 43.1067 43.4788C42.8721 44.0153 42.5281 44.4969 42.0966 44.8928C41.6651 45.2886 41.1558 45.59 40.6011 45.7775C40.0464 45.9651 39.4587 46.0348 38.8755 45.9821C32.406 45.2791 26.1916 43.0684 20.7316 39.5276C15.6518 36.2997 11.345 31.9929 8.11702 26.9131C4.56387 21.4283 2.35268 15.1836 1.66257 8.68505C1.61003 8.10366 1.67913 7.5177 1.86546 6.96448C2.05179 6.41126 2.35127 5.90289 2.74483 5.47175C3.13839 5.04061 3.61742 4.69614 4.15141 4.46028C4.68539 4.22441 5.26264 4.10232 5.8464 4.10177H12.1537C13.174 4.09172 14.1632 4.45304 14.9368 5.11836C15.7104 5.78368 16.2157 6.70761 16.3585 7.71794C16.6247 9.73641 17.1185 11.7183 17.8302 13.6258C18.1131 14.3783 18.1743 15.1961 18.0066 15.9823C17.839 16.7686 17.4494 17.4902 16.8841 18.0619L14.2141 20.732C17.207 25.9955 21.5651 30.3536 26.8286 33.3465L29.4987 30.6764C30.0703 30.1112 30.792 29.7216 31.5782 29.5539C32.3645 29.3863 33.1823 29.4475 33.9348 29.7303C35.8423 30.4421 37.8242 30.9358 39.8426 31.202C40.8639 31.3461 41.7966 31.8605 42.4634 32.6474C43.1301 33.4344 43.4844 34.4389 43.4588 35.47Z" stroke="#70CF97" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="aur-flex-start text-white aur-font-30 aur-font-700">2400</div>
                <div class="aur-flex-start text-white aur-font16 aur-font-500">OutBound Calls
                </div>
                <div class="aur-flex-start text-white-50 aur-font-12 aur-font-500">&nbsp;</div>
            </div>
            <div class="aur-calling-history-item">
                <div class="aur-flex-end">
                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M46.9988 35.47V41.7772C47.0012 42.3628 46.8813 42.9423 46.6467 43.4788C46.4121 44.0153 46.0681 44.4969 45.6366 44.8928C45.2052 45.2886 44.6958 45.59 44.1411 45.7775C43.5864 45.9651 42.9987 46.0348 42.4156 45.9821C35.946 45.2791 29.7316 43.0684 24.2716 39.5276C19.1918 36.2997 14.885 31.9929 11.6571 26.9131C8.10391 21.4283 5.89272 15.1836 5.20261 8.68505C5.15007 8.10366 5.21917 7.5177 5.4055 6.96448C5.59183 6.41126 5.89131 5.90289 6.28487 5.47175C6.67843 5.04061 7.15746 4.69614 7.69144 4.46028C8.22543 4.22441 8.80268 4.10232 9.38644 4.10177H15.6937C16.714 4.09172 17.7032 4.45304 18.4768 5.11836C19.2505 5.78368 19.7558 6.70761 19.8986 7.71794C20.1648 9.73641 20.6585 11.7183 21.3703 13.6258C21.6531 14.3783 21.7144 15.1961 21.5467 15.9823C21.379 16.7686 20.9894 17.4902 20.4242 18.0619L17.7541 20.732C20.747 25.9955 25.1051 30.3536 30.3687 33.3465L33.0387 30.6764C33.6104 30.1112 34.332 29.7216 35.1183 29.5539C35.9045 29.3863 36.7223 29.4475 37.4748 29.7303C39.3823 30.4421 41.3642 30.9358 43.3827 31.202C44.404 31.3461 45.3367 31.8605 46.0034 32.6474C46.6702 33.4344 47.0244 34.4389 46.9988 35.47Z" fill="#D3F26A"/>
                        <path d="M30.8439 4.10224V16.7168H43.4585" stroke="#FBBC05" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M30.8447 16.717L45.5617 2" stroke="#FBBC05" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M43.4588 35.47V41.7772C43.4612 42.3628 43.3412 42.9423 43.1067 43.4788C42.8721 44.0153 42.5281 44.4969 42.0966 44.8928C41.6651 45.2886 41.1558 45.59 40.6011 45.7775C40.0464 45.9651 39.4587 46.0348 38.8755 45.9821C32.406 45.2791 26.1916 43.0684 20.7316 39.5276C15.6518 36.2997 11.345 31.9929 8.11702 26.9131C4.56387 21.4283 2.35268 15.1836 1.66257 8.68505C1.61003 8.10366 1.67913 7.5177 1.86546 6.96448C2.05179 6.41126 2.35127 5.90289 2.74483 5.47175C3.13839 5.04061 3.61742 4.69614 4.15141 4.46028C4.68539 4.22441 5.26264 4.10232 5.8464 4.10177H12.1537C13.174 4.09172 14.1632 4.45304 14.9368 5.11836C15.7104 5.78368 16.2157 6.70761 16.3585 7.71794C16.6247 9.73641 17.1185 11.7183 17.8302 13.6258C18.1131 14.3783 18.1743 15.1961 18.0066 15.9823C17.839 16.7686 17.4494 17.4902 16.8841 18.0619L14.2141 20.732C17.207 25.9955 21.5651 30.3536 26.8286 33.3465L29.4987 30.6764C30.0703 30.1112 30.792 29.7216 31.5782 29.5539C32.3645 29.3863 33.1823 29.4475 33.9348 29.7303C35.8423 30.4421 37.8242 30.9358 39.8426 31.202C40.8639 31.3461 41.7966 31.8605 42.4634 32.6474C43.1301 33.4344 43.4844 34.4389 43.4588 35.47Z" stroke="#70CF97" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="aur-flex-start text-white aur-font-30 aur-font-700">240</div>
                <div class="aur-flex-start text-white aur-font-16 aur-font-500">Inbound Calls
                </div>
                <div class="aur-flex-start text-white-50 aur-font-12 aur-font-500">OutBound Calls</div>
            </div>
        </div>
        <div class="aur-flex-start aur-main-agent-wrap aur-gap-12">
            <div class="aur-main-best-agent">
                <div class="aur-font-700 aur-font-18">Best Performing Agent</div>
                <div class="aur-flex-center">
                    <div class="aur-best-agent-logo">
                        <img src="{{url('image/Mask group.png')}}" alt="">
                    </div>
                </div>
                <h2 class="aur-font-700" style="margin-bottom: 20px">Glen Q.</h2>
                <div class="aur-flex-between" style="grid-gap: 40px">
                    <div>
                        <div class="aur-font-700 aur-font-14">3d 41h </div>
                        <div class="aur-font-12 aur-font-500 aur-flx-start">Running<br>Time</div>
                    </div>
                    <div>
                        <div class="aur-font-700 aur-font-14">3d 41h </div>
                        <div class="aur-font-12 aur-font-500 aur-flx-start">Running<br>Time</div>
                    </div>
                    <div>
                        <div class="aur-font-700 aur-font-14">3d 41h </div>
                        <div class="aur-font-12 aur-font-500 aur-flx-start">Running<br>Time</div>
                    </div>
                </div>

            </div>
            <div class="aur-main-agents-wrap">
                <div class="aur-font-18 aur-font-700" style="margin-bottom: 15px; margin-top: 15px;">Service Agents </div>
                <div class="aur-main-agents aur-flex-start aur-gap-24">
                    <div class="aur-main-agent-item">
                        <div class="aur-agent-avatar-wrap">
                            <div class="aur-flex-center">
                                <img src="{{url('image/Ellipse.png')}}" alt="">
                            </div>
                            <div class="text-center aur-font-700 aur-font-20" style="text-align: center">
                                Oto G.
                            </div>
                            <div class="aur-flex-center">
                                <div class="aur-agent-avatar-line"></div>
                            </div>
                        </div>
                        <div class="aur-flex-between" style="grid-gap: 40px">
                            <div>
                                <div class="aur-font-500">23d 4h</div>
                                <div class="aur-font-400 aur-font-12">Run Time</div>
                            </div>
                            <div>
                                <div class="aur-font-500">23d 4h</div>
                                <div class="aur-font-400 aur-font-12">Run Time</div>
                            </div>
                        </div>
                    </div>
                    <div class="aur-main-agent-item">
                        <div class="aur-agent-avatar-wrap">
                            <div class="aur-flex-center">
                                <img src="{{url('image/Ellipse.png')}}" alt="">
                            </div>
                            <div class="text-center aur-font-700 aur-font-20" style="text-align: center">
                                Oto G.
                            </div>
                            <div class="aur-flex-center">
                                <div class="aur-agent-avatar-line"></div>
                            </div>
                        </div>
                        <div class="aur-flex-between" style="grid-gap: 40px">
                            <div>
                                <div class="aur-font-500">23d 4h</div>
                                <div class="aur-font-400 aur-font-12">Run Time</div>
                            </div>
                            <div>
                                <div class="aur-font-500">23d 4h</div>
                                <div class="aur-font-400 aur-font-12">Run Time</div>
                            </div>
                        </div>
                    </div>
                    <div class="aur-main-agent-item">
                        <div class="aur-agent-avatar-wrap">
                            <div class="aur-flex-center">
                                <img src="{{url('image/Ellipse.png')}}" alt="">
                            </div>
                            <div class="text-center aur-font-700 aur-font-20" style="text-align: center">
                                Oto G.
                            </div>
                            <div class="aur-flex-center">
                                <div class="aur-agent-avatar-line"></div>
                            </div>
                        </div>
                        <div class="aur-flex-between" style="grid-gap: 40px">
                            <div>
                                <div class="aur-font-500">23d 4h</div>
                                <div class="aur-font-400 aur-font-12">Run Time</div>
                            </div>
                            <div>
                                <div class="aur-font-500">23d 4h</div>
                                <div class="aur-font-400 aur-font-12">Run Time</div>
                            </div>
                        </div>
                    </div>
                    <div class="aur-main-agent-item">
                        <div class="aur-agent-avatar-wrap">
                            <div class="aur-flex-center">
                                <img src="{{url('image/Ellipse.png')}}" alt="">
                            </div>
                            <div class="text-center aur-font-700 aur-font-20" style="text-align: center">
                                Oto G.
                            </div>
                            <div class="aur-flex-center">
                                <div class="aur-agent-avatar-line"></div>
                            </div>
                        </div>
                        <div class="aur-flex-between" style="grid-gap: 40px">
                            <div>
                                <div class="aur-font-500">23d 4h</div>
                                <div class="aur-font-400 aur-font-12">Run Time</div>
                            </div>
                            <div>
                                <div class="aur-font-500">23d 4h</div>
                                <div class="aur-font-400 aur-font-12">Run Time</div>
                            </div>
                        </div>
                    </div>
                    <div class="aur-main-agent-item">
                        <div class="aur-agent-avatar-wrap">
                            <div class="aur-flex-center">
                                <img src="{{url('image/Ellipse.png')}}" alt="">
                            </div>
                            <div class="text-center aur-font-700 aur-font-20" style="text-align: center">
                                Oto G.
                            </div>
                            <div class="aur-flex-center">
                                <div class="aur-agent-avatar-line"></div>
                            </div>
                        </div>
                        <div class="aur-flex-between" style="grid-gap: 40px">
                            <div>
                                <div class="aur-font-500">23d 4h</div>
                                <div class="aur-font-400 aur-font-12">Run Time</div>
                            </div>
                            <div>
                                <div class="aur-font-500">23d 4h</div>
                                <div class="aur-font-400 aur-font-12">Run Time</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('custom_style')
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
@endpush
@push('custom_script')
    
@endpush