<?php
?>
@section('title', 'About')
@extends('layouts/main')
<link href="app-assets/css/about_us/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="app-assets/css/about_us/animate/animate.min.css" rel="stylesheet">
<link href="app-assets/css/about_us/ionicons/css/ionicons.min.css" rel="stylesheet">
<link href="app-assets/css/about_us/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="app-assets/css/about_us/lightbox/css/lightbox.min.css" rel="stylesheet">
<link href="app-assets/css/about_us/css/style.css" rel="stylesheet">
@section('content')
    <main id="main" style="width: 100%; margin-top: 5%">
        <section id="about">
            <div class="container">

                <header class="section-header">
                    <h3>About Us</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </header>

                <div class="row about-cols">

                    <div class="col-md-4 wow fadeInUp">
                        <div class="about-col">
                            <div class="img">
                                <img src="app-assets/css/about_us/img/about-mission.jpg" alt="" class="img-fluid">
                                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
                            </div>
                            <h2 class="title"><a href="#">Our Mission</a></h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="about-col">
                            <div class="img">
                                <img src="app-assets/css/about_us/img/about-plan.jpg" alt="" class="img-fluid">
                                <div class="icon"><i class="ion-ios-list-outline"></i></div>
                            </div>
                            <h2 class="title"><a href="#">Our Plan</a></h2>
                            <p>
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem  doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="about-col">
                            <div class="img">
                                <img src="app-assets/css/about_us/img/about-vision.jpg" alt="" class="img-fluid">
                                <div class="icon"><i class="ion-ios-eye-outline"></i></div>
                            </div>
                            <h2 class="title"><a href="#">Our Vision</a></h2>
                            <p>
                                Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores eos qui ratione voluptatem sequi nesciunt Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- #about -->
        <section id="clients" class="wow fadeInUp">
            <div class="container">

                <header class="section-header">
                    <h3>Our Clients</h3>
                </header>

                <div class="owl-carousel clients-carousel">
                    <img src="app-assets/css/about_us/img/clients/client-1.png" alt="">
                    <img src="app-assets/css/about_us/img/clients/client-2.png" alt="">
                    <img src="app-assets/css/about_us/img/clients/client-3.png" alt="">
                    <img src="app-assets/css/about_us/img/clients/client-4.png" alt="">
                    <img src="app-assets/css/about_us/img/clients/client-5.png" alt="">
                    <img src="app-assets/css/about_us/img/clients/client-6.png" alt="">
                    <img src="app-assets/css/about_us/img/clients/client-7.png" alt="">
                    <img src="app-assets/css/about_us/img/clients/client-8.png" alt="">
                </div>

            </div>
        </section><!-- #clients -->
    </main>


    <!-- JavaScript Libraries -->
    <script src="app-assets/css/about_us/jquery/jquery.min.js"></script>
    <script src="app-assets/css/about_us/superfish/hoverIntent.js"></script>
    <script src="app-assets/css/about_us/superfish/superfish.min.js"></script>
    <script src="app-assets/css/about_us/wow/wow.min.js"></script>
    <script src="app-assets/css/about_us/waypoints/waypoints.min.js"></script>
    <script src="app-assets/css/about_us/counterup/counterup.min.js"></script>
    <script src="app-assets/css/about_us/owlcarousel/owl.carousel.min.js"></script>
    <script src="app-assets/css/about_us/isotope/isotope.pkgd.min.js"></script>
    <script src="app-assets/css/about_us/lightbox/js/lightbox.min.js"></script>
    <script src="app-assets/css/about_us/touchSwipe/jquery.touchSwipe.min.js"></script>

    <!-- Template Main Javascript File -->
    <script src="app-assets/css/about_us/js/main.js"></script>
    
@endsection