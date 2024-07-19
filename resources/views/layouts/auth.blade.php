<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ asset('image/favico.png') }}">
    <title>Aurano | @yield('title')</title>

    <meta property="og:site_name" content="Aurano" />
    <meta property="og:title" content="Aurano">
    <meta property="og:type" content="website" />
    <meta property="og:image" content="">
    <meta property="og:locale" content="en_US">
    <meta property="og:description" content="">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="628">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@4.6.0/dist/css/bootstrap.min.css">

    <style type="text/css">
        .ci-goole-login {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            grid-gap: 10px;
            font-weight: bold;
        }

        .ci-goole-login img {
            height: 18px;
        }
    </style>

    @stack('css')

    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">

    @yield('css')
    <style>
        .image:nth-child(1) {
            background: url('{{asset("image/paul.png")}}') no-repeat center/cover;
        }

        .image:nth-child(2) {
            background: url('{{asset("image/lisa.png")}}') no-repeat center/cover;
        }

        .image:nth-child(3) {
            background: url('{{asset("image/ron.png")}}') no-repeat center/cover;
        }

        .image:nth-child(4) {
            background: url('{{asset("image/simon.png")}}') no-repeat center/cover;
        }

        blockquote {
            font-size: 14px;
        }

        .active.image {
            width: 140px;
            height: 140px;
        }
    </style>


    <!-- Global site tag (gtag.js) - Google Ads: 630346475 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-630346475"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-630346475');
    </script>

    <script type="text/javascript">
        (function(f, b) {
            if (!b.__SV) {
                var e, g, i, h;
                window.mixpanel = b;
                b._i = [];
                b.init = function(e, f, c) {
                    function g(a, d) {
                        var b = d.split(".");
                        2 == b.length && (a = a[b[0]], d = b[1]);
                        a[d] = function() {
                            a.push([d].concat(Array.prototype.slice.call(arguments, 0)))
                        }
                    }
                    var a = b;
                    "undefined" !== typeof c ? a = b[c] = [] : c = "mixpanel";
                    a.people = a.people || [];
                    a.toString = function(a) {
                        var d = "mixpanel";
                        "mixpanel" !== c && (d += "." + c);
                        a || (d += " (stub)");
                        return d
                    };
                    a.people.toString = function() {
                        return a.toString(1) + ".people (stub)"
                    };
                    i = "disable time_event track track_pageview track_links track_forms track_with_groups add_group set_group remove_group register register_once alias unregister identify name_tag set_config reset opt_in_tracking opt_out_tracking has_opted_in_tracking has_opted_out_tracking clear_opt_in_out_tracking start_batch_senders people.set people.set_once people.unset people.increment people.append people.union people.track_charge people.clear_charges people.delete_user people.remove".split(" ");
                    for (h = 0; h < i.length; h++) g(a, i[h]);
                    var j = "set set_once union unset remove delete".split(" ");
                    a.get_group = function() {
                        function b(c) {
                            d[c] = function() {
                                call2_args = arguments;
                                call2 = [c].concat(Array.prototype.slice.call(call2_args, 0));
                                a.push([e, call2])
                            }
                        }
                        for (var d = {}, e = ["get_group"].concat(Array.prototype.slice.call(arguments, 0)), c = 0; c < j.length; c++) b(j[c]);
                        return d
                    };
                    b._i.push([e, f, c])
                };
                b.__SV = 1.2;
                e = f.createElement("script");
                e.type = "text/javascript";
                e.async = !0;
                e.src = "undefined" !== typeof MIXPANEL_CUSTOM_LIB_URL ?
                    MIXPANEL_CUSTOM_LIB_URL : "file:" === f.location.protocol && "//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js".match(/^\/\//) ? "https://cdn.mxpnl.com/libs/mixpanel-2-latest.min.js" : "//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js";
                g = f.getElementsByTagName("script")[0];
                g.parentNode.insertBefore(e, g)
            }
        })(document, window.mixpanel || []);

        // Enabling the debug mode flag is useful during implementation,
        // but it's recommended you remove it for production
        mixpanel.init('12428ef4af55fad4994f5f7e3262e3f0', {
            debug: true
        });
        mixpanel.track('Sign up');
    </script>


    <!-- Facebook Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1754168658177984');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1754168658177984&ev=PageView&noscript=1" /></noscript>
    <!-- End Facebook Pixel Code -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-THCLH3GVEC"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-THCLH3GVEC');
    </script>

    <!-- <script type="text/javascript">!function(e,t){(e=t.createElement("script")).src="https://cdn.convertbox.com/convertbox/js/embed.js",e.id="app-convertbox-script",e.async=true,e.dataset.uuid="71ccb998-9c39-415b-9bef-82cb45241bf5",document.getElementsByTagName("head")[0].appendChild(e)}(window,document);</script> -->

    <script>
        (function(w) {
            w.fpr = w.fpr || function() {
                w.fpr.q = w.fpr.q || [];
                w.fpr.q[arguments[0] == 'set' ? 'unshift' : 'push'](arguments);
            };
        })(window);
        fpr("init", {
            cid: "35lybsgs"
        });
        fpr("click");
    </script>
    <script src="https://cdn.firstpromoter.com/fpr.js" async></script>

</head>

<body>
    <div v-cloak class="container-fluid" id="app">
        <div class="row">
            <div class="px-0 col-lg-5 d-none d-lg-block">
                <div class="px-4 py-3 h-100" style="min-height: 100vh; background: #F3F2F7; background-image:url('{{asset('image/login-img.png')}}'); background-position:top; background-repeat:no-repeat;">
                    <div class="h-100 d-flex flex-column">
                        <div class="mx-auto my-auto">
                            <div id="carouselExampleCaptions" class="pt-5 my-5 carousel slide" data-ride="carousel" style="display: none;">
                                <div class="mx-auto mb-5 carousel-indicators box">
                                    <div class="image active" data-target="#carouselExampleCaptions" data-slide-to="0"></div>
                                    <div class="image" data-target="#carouselExampleCaptions" data-slide-to="1"></div>
                                    <div class="image" data-target="#carouselExampleCaptions" data-slide-to="2"></div>
                                    <div class="image" data-target="#carouselExampleCaptions" data-slide-to="3"></div>
                                </div>

                                <div class="mx-auto d-flex align-items-center" style="width: 85%; margin-top: 4rem;">
                                    <a class="carousel-control-prevs" href="#carouselExampleCaptions" role="button" data-slide="prev">
                                        <span class="carousel-arrows prev" aria-hidden="true">&larr;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>

                                    <div class="text-center carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="mx-auto w-80">
                                                <h5 class="mb-0 text-capitalize">Paul</h5>
                                                <blockquote class="pt-3 mx-auto w-80">
                                                    <p style="line-height: 21px">Aurano is literally changing my life. <br /> I closed 2 copy writing clients. Aurano literally writes the emails, my ads and everything else for me. If you wanna get more out of your copywriting and your online business, then get Aurano.</p>
                                                </blockquote>
                                            </div>
                                        </div>

                                        <div class="carousel-item">
                                            <div class="mx-auto w-80">
                                                <h5 class="mb-0 text-capitalize">Lisa</h5>
                                                <blockquote class="pt-3 mx-auto w-80">
                                                    <p>I have been using Copy Blocks to create content for my clients and myself. The interface is very easy to use and I have been getting better results from my copy. I would recommend this tool to any business owner who wants to get the most out of their writing.</p>
                                                </blockquote>
                                            </div>
                                        </div>

                                        <div class="carousel-item">
                                            <div class="mx-auto w-80">
                                                <h5 class="mb-0 text-capitalize">Ron</h5>
                                                <blockquote class="pt-3 mx-auto w-80">
                                                    <p>If you're like me, sometimes you squirm at the thought of having to write sales copy. Writing sales copy is like opening a vein and bleeding on the page. It's not easy, but Aurano makes it fun, fast and easy; sort of like riding on a magic carpet.</p>
                                                </blockquote>
                                            </div>
                                        </div>

                                        <div class="carousel-item">
                                            <div class="mx-auto w-80">
                                                <h5 class="mb-0 text-capitalize">Simon</h5>
                                                <blockquote class="pt-3 mx-auto w-80">
                                                    <p>We have saved over $2,000 in the last 8 day by using Aurano to write all the content and marketing copy for our new project. I don't know why I didn't come across Aurano sooner! It has been a lifesaver for me because I can write better marketing copy in half the time!</p>
                                                </blockquote>
                                            </div>
                                        </div>
                                    </div>

                                    <a class="carousel-control-nexts" href="#carouselExampleCaptions" role="button" data-slide="next">
                                        <span class="carousel-arrows next" aria-hidden="true">&rarr;</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <p class="mt-auto mb-0 d-flex align-items-center">
                            <img src="{{ asset('image/logo.svg') }}" width="80" alt="Aurano">
                            <strong class="ml-1" style="font-size: 14px;">&copy; {{ date('Y') }}</strong>
                        </p>
                    </div>
                </div>
            </div>

            <div class="px-0 bg-white col">
                <div class="h-100 d-flex align-items-center" style="min-height: 100vh;">
                    <div class="px-0 mx-auto col-md-6 col-9">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://unpkg.com/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://unpkg.com/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/axios@0.21.1/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@2.6.14/dist/vue.min.js"></script>
    @yield('scripts')
</body>

</html>