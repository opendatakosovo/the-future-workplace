<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="Chameleon" content="admin template, modern admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">

    <!-- Title -->
    <title>Chameleon Admin - Clean & Modern responsive bootstrap 4 WebApp & admin dashboard template</title>

    <!-- Favicon -->
    <link rel="icon" href="app-assets/landing/img/core-img/favicon.png">

    <!-- Core Stylesheet -->
    <link href="{{URL::asset('/app-assets/style.min.css')}}" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="{{URL::asset('/app-assets/landing/css/responsive.min.css')}}" rel="stylesheet">

    <!-- 3d Card Effect-->
    <link href="{{URL::asset('/app-assets/landing/css/3dcard.min.css')}}" rel="stylesheet">

    <!-- Menu CSS-->
    <link href=" {{URL::asset('/app-assets/landing/css/menu.min.css')}}" rel="stylesheet">

</head>

<style>
    .atvImg-rendered-layer{
        background-position: initial !important;
    }
</style>

<body>
<!-- ***** Header Area Start ***** -->
<header class="header_area headroom">
    <div class="container-fluid" style="width:100% !important;">
        <div class="row align-items-center">
            <!-- Menu Area Start -->
            <div class="col-12">
                <div class="menu_area">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="box-outer">
                            <div class="main_box">
                                <h4 class="mt-2 sm-white text-white"><img src="app-assets/images/logo/logo.svg" alt="logo" class="brand-logo"><b class="ml-4">The Future Workplace</b></h4>
                            </div>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ca-navbar" aria-controls="ca-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <!-- Menu Area -->

                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->

<!-- ***** Wellcome Area Start ***** -->
<section class="wellcome_area clearfix mb-100" id="home">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-12 col-md text-center">
                <div class="wellcome-heading">
                    <h1 class="ml12 wow fadeInDown">The Future Workplace</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Welcome thumb -->

    <a href="main.html" target="_blank">
        <div class="welcome-thumb mx-auto wow fadeInDown cover atvImg mx-auto d-block">
            <div class="cover atvImg">
                <div class="atvImg-layer"  data-img="https://opendatakosovo.github.io/thefutureworkplace/app-assets/landing/img/bg-img/app_img.PNG"></div>
            </div>
        </div>
    </a>
    <div class="text-center">
        <h5 class="mt-5 mb-4 text-min-white">Open Data Kosovo (ODK) beson se hapja e te dhenave publike eshte shume e rendesishme ne ndertimin e nje qeverisjeje te mire, transparente dhe llogaridhenese.
            <br>Prandaj, te dhenat e zotuara nga institucionet shteterore duhet te jene publike, lehte te qasshme dhe te prezentohen ne formate te hapura.</h5>

        <a class="btn btn-primary" target="_blank" href="main.html">Shiko Aplikacionin</a>
    </div>
</section>


<!-- ***** Footer Area Start ***** -->
<footer class="text-center p-50 clearfix bg-grey">

    <!-- Foooter Text-->
    <div class="copyright-text">
        <p>Copyright ©2019 Application by <a href="https://opendatakosovo.org" target="_blank">Open Data Kosovo</a></p>
    </div>
</footer>
<!-- ***** Footer Area End ***** -->

<!-- ***** App Screenshots Area End *****====== -->
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-96096445-4', 'auto');
    ga('send', 'pageview');
</script>

<!-- Start of Async Drift Code -->
<script>
    "use strict";

    !function() {
        var t = window.driftt = window.drift = window.driftt || [];
        if (!t.init) {
            if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
            t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ],
                t.factory = function(e) {
                    return function() {
                        var n = Array.prototype.slice.call(arguments);
                        return n.unshift(e), t.push(n), t;
                    };
                }, t.methods.forEach(function(e) {
                t[e] = t.factory(e);
            }), t.load = function(t) {
                var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
                o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
                var i = document.getElementsByTagName("script")[0];
                i.parentNode.insertBefore(o, i);
            };
        }
    }();
    drift.SNIPPET_VERSION = '0.3.1';
    drift.load('pkh7ig2bwu34');
</script>
<!-- End of Async Drift Code -->

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-58d9fa1af7a79649"></script>

<!-- Jquery-2.2.4 JS -->
<script src="{{URL::asset('/app-assets/landing/js/jquery-2.2.4.min.js')}}"></script>
<!-- Headroom js -->
<script src="{{URL::asset('/app-assets/landing/js/headroom.js')}}"></script>
<!-- Anime JS -->
<script src="{{URL::asset('/app-assets/landing/js/popper.min.js')}}"></script>
<!-- Bootstrap-4 Beta JS -->
<script src="{{URL::asset('/app-assets/landing/js/bootstrap.min.js')}}"></script>
<!-- 3d Card -->
<script src="{{URL::asset('/app-assets/landing/js/3dcard.min.js')}}"></script>
<!-- All Plugins JS -->
<script src="{{URL::asset('/app-assets/landing/js/plugins.min.js')}}"></script>
<!-- Active JS -->
<script src="{{URL::asset('/app-assets/landing/js/active.min.js')}}"></script>

<!-- Headroom -->
<script>
    $(document).ready(function(){
        // Select all links with hashes
        $('a[href*="#"]')
        // Remove links that don't actually link to anything
            .not('[href="#"]')
            .not('[href="#0"]')
            .click(function(event) {
                // On-page links
                if (
                    location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
                    &&
                    location.hostname == this.hostname
                ) {
                    // Figure out element to scroll to
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    // Does a scroll target exist?
                    if (target.length) {
                        // Only prevent default if animation is actually gonna happen
                        event.preventDefault();
                        $('html, body').animate({
                            scrollTop: target.offset().top
                        }, 1000, function() {
                            // Callback after animation
                            // Must change focus!
                            var $target = $(target);
                            $target.focus();
                            if ($target.is(":focus")) { // Checking if the target was focused
                                return false;
                            } else {
                                $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                                $target.focus(); // Set focus again
                            };
                        });
                    }
                }
            });
        // grab an element
        var myElement = document.querySelector("header");
        // construct an instance of Headroom, passing the element
        var headroom  = new Headroom(myElement);
        // initialise
        headroom.init();
    });
</script>
<!-- End Headroom -->
</body>
</html>