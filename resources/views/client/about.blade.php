<?php
?>
@section('title', 'About')
@extends('layouts/main')
{{--<link href="/app-assets/css/about_us/font-awesome/css/font-awesome.min.css" rel="stylesheet">--}}
{{--<link href="/app-assets/css/about_us/animate/animate.min.css" rel="stylesheet">--}}
{{--<link href="/app-assets/css/about_us/ionicons/css/ionicons.min.css" rel="stylesheet">--}}
{{--<link href="/app-assets/css/about_us/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">--}}
{{--<link href="/app-assets/css/about_us/lightbox/css/lightbox.min.css" rel="stylesheet">--}}
<link href="/app-assets/css/about_us/css/style.css" rel="stylesheet">
@section('content')
    <main id="main" style="width: 100%; margin-top: 2%">

        <section id="about">
            <div class="container">

                <header class="section-header">
                    <h3> {{Lang::get('translation.about')}}</h3> <br><br>
                </header>

                <center>  {{Lang::get('translation.about_text1')}}</center> <br><br>
                <center>  {{Lang::get('translation.about_text2')}}</center><br><br>
                <center> {{Lang::get('translation.about_text3')}}</center>
            </div>
        </section><!-- #about -->


        <section id="clients" class="wow fadeInUp">
            <div class="container">
                <header class="section-header">
                    <h3>{{Lang::get('translation.powered_by')}}</h3>
                </header>
                <a href="https://digdata.millenniumkosovo.org/" target="_blank"><img href="" src="/app-assets/css/about_us/img/clients/digdata.png" style="width: 175px;  margin-left:7%;margin-top: 49px" alt=""></a>
                <a href="https://millenniumkosovo.org/" target="_blank"><img src="/app-assets/css/about_us/img/clients/MFK.png" style="width: 243px; margin-left: 9%; margin-top: 22px;" alt=""><a/>
                <a href="https://www.mcc.gov/" target="_blank"><img src="/app-assets/css/about_us/img/clients/MCC.png" style="width: 400px;  margin-left: 7%;" alt=""></a>
            </div>
        </section><!-- #clients -->
        <hr style="width: 70%">
        <section id="clients" class="wow fadeInUp">
            <div class="container">
                <header class="section-header">
                    <h3>{{Lang::get('translation.implementing_partners')}}</h3>
                </header>
                {{--<img src="app-assets/css/about_us/img/clients/mcc.svg" style="width: 150px; margin-left: 35%;" alt="">--}}
               <a href="https://www.oek-kcc.org/" target="_blank"><img class="center" src="/app-assets/css/about_us/img/clients/oek.svg"
                style="width: 213px; display: block; margin-left: 243px; margin-right: auto;" alt=""></a>
                <a href="https://opendatakosovo.org/" target="_blank"><img class="center" src="/app-assets/css/about_us/img/clients/ODK.png"
                style="width: 213px; display: block;margin-left: 656px;margin-top: -166px; margin-right: auto;" alt=""></a>
            </div>
        </section><!-- #clients -->

    </main>


    {{--    <!-- JavaScript Libraries -->--}}
    {{--    <script src="/app-assets/css/about_us/jquery/jquery.min.js"></script>--}}
    {{--    <script src="/app-assets/css/about_us/superfish/hoverIntent.js"></script>--}}
    {{--    <script src="/app-assets/css/about_us/superfish/superfish.min.js"></script>--}}
    {{--    <script src="/app-assets/css/about_us/wow/wow.min.js"></script>--}}
    {{--    <script src="/app-assets/css/about_us/waypoints/waypoints.min.js"></script>--}}
    {{--    <script src="/app-assets/css/about_us/counterup/counterup.min.js"></script>--}}
    {{--    <script src="/app-assets/css/about_us/owlcarousel/owl.carousel.min.js"></script>--}}
    {{--    <script src="/app-assets/css/about_us/isotope/isotope.pkgd.min.js"></script>--}}
    {{--    <script src="/app-assets/css/about_us/lightbox/js/lightbox.min.js"></script>--}}
    {{--    <script src="/app-assets/css/about_us/touchSwipe/jquery.touchSwipe.min.js"></script>--}}

    {{--    <!-- Template Main Javascript File -->--}}
    {{--    <script src="/app-assets/css/about_us/js/main.js"></script>--}}


@endsection
