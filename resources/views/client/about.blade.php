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

                </header>

                <div class="row about-cols">

                    <div class="col-md-4 wow fadeInUp">
                        <div class="about-col">
                            <div class="img">
                                <img src="app-assets/css/about_us/img/about-mission.jpg" alt="" class="img-fluid">
                                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
                            </div>
                            <h2 class="title"><a href="#">Our Mission</a></h2>
                            <p>The overall objective of The Future Workplace project is to increase ICT market
                                information
                                in Kosovo in order to contribute to employment opportunities through among other
                                identifying
                                services offered in Kosovo and business opportunities.<br>
                                The data presented in The Future Workplace platform has been obtained by Ministry of
                                Education, Science and Technology, Ministry of Trade and Industry, and Tax
                                Administration of
                                Kosovo.
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
                            <p>1.Create a mechanism/digital tool of interlinking data that can contribute to economic
                                development;<br>
                                2.Help understand ICT market potential in Kosovo;<br>
                                3.Contribute to the growth of the industry.
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
                            <p>1.A basis for an overall understanding of the educational preparation of students and
                                graduates in the ICT field and how their qualifications match ICT market demand;<br>
                                2.An understanding on how the education system in Kosovo should be modified/improved in
                                order
                                to adapt the next generations for the current and future ICT market needs;<br>
                                3.Valuable data to potential international companies on what human capacities currently
                                exist
                                in Kosovo, and insights on what investments can potentially be made;<br>
                                4.Suggestions on practical methods of improvement in other sectors in order to reach
                                their
                                growth potential.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- #about -->
        <section id="clients" class="wow fadeInUp">
            <div class="container">
                <header class="section-header">
                    <h3>Funded By</h3>
                </header>
                <img src="app-assets/css/about_us/img/clients/mcc.svg" style="width: 150px; margin-left: 35%;" alt="">
                <img src="app-assets/css/about_us/img/clients/mcc-gov.svg" style="width: 213px; margin-top: 22px;" alt="">
            </div>
        </section><!-- #clients -->
        <section id="clients" class="wow fadeInUp">
            <div class="container">
                <header class="section-header">
                    <h3>Our Partner</h3>
                </header>
                    {{--<img src="app-assets/css/about_us/img/clients/mcc.svg" style="width: 150px; margin-left: 35%;" alt="">--}}
                    <img class="center" src="app-assets/css/about_us/img/clients/oek.svg" style="width: 213px; display: block; margin-left: auto; margin-right: auto;" alt="">
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