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
            <div class="card-columns">
                <div class="card">
                    <img src="https://i.ibb.co/bbFL7W8/10566199-54802c52ac99e.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3>{{Lang::get('translation.about_title')}}</h3> <br>
                        <p>{{Lang::get('translation.about_card')}}</p>
                    </div>
                </div>

            <div class="card">
                <img src="https://i.ibb.co/JFnJpX8/ads.jpg"
                     class="card-img-top" alt="...">
            </div>

            <div class="card text-center">
                <img src="https://www.binarytides.com/blog/wp-content/uploads/2018/08/laptop-keyboard.jpg"
                     class="card-img-top" alt="...">
                <div class="card-body">
                    <h3>{{Lang::get('translation.about_second_title')}}</h3><br>
                    <p class="card-text">{{Lang::get('translation.about_second_card')}}</p>
                </div>
            </div>
                <div class="card bg-primary text-white text-center p-3"
                     style="background-color: mediumseagreen !important;">

                    <blockquote class="blockquote mb-0">
                        <h3>{{Lang::get('translation.about_first_title')}}</h3> <br>
                        <p>{{Lang::get('translation.about_first_card')}}.</p>
                    </blockquote>
                </div>

            <div class="card p-3 text-left">
                <img src="https://www.portalpune.com/Files/L012123.png"
                     class="card-img-top" alt="...">
                <blockquote class="blockquote mb-0">
                    <h3>{{Lang::get('translation.about_third_title')}}</h3><br>
                    <p>{{Lang::get('translation.about_third_card')}}</p>
                </blockquote>
            </div>

            <div class="card">
                <img src="http://www.atk-ks.org/wp-content/uploads/2017/09/logo_qeveria_atk11.png"
                     class="card-img-top" alt="...">
                <div class="card-body">
                    <h3>{{Lang::get('translation.about_fourth_title')}}</h3><br>
                    <p class="card-text">
                        {{Lang::get('translation.about_fourth_card')}}.
                    </p>
                </div>
            </div>
        </div>

        <div class="card border-success mb-3 text-center" style="margin-top:57px;">
            <div class="card-body">
                <blockquote class="card-blockquote">
                    <h3>{{Lang::get('translation.about_fifth_title')}}</h3><br>
                    <strong>
                        {{Lang::get('translation.about_fifth_card')}}</strong><br><br>

                    <ul style="list-style-type: square; list-style-position: inside;">
                        <li> {{Lang::get('translation.about_first_list')}}</li>
                        <li> {{Lang::get('translation.about_second_list')}}
                        </li>
                        <li> {{Lang::get('translation.about_third_list')}}
                        </li>
                    </ul>
                </blockquote>
            </div>
        </div>
        <div class="card bg-primary text-white text-center p-3"
             style="background-color: mediumseagreen !important;border: 1.5px solid; margin-top: 70px;">

            <blockquote class="blockquote mb-0">
                <h3>TWF</h3> <br>
                <p>{{Lang::get('translation.about_sixth_card')}}</p><br>
                <p>{{Lang::get('translation.about_seventh_card')}}</p><br>
                <i>{{Lang::get('translation.about_eighth_card')}}</i>
            </blockquote>
        </div>

        <section id="clients" class="wow fadeInUp">
            <div class="container">
                <header class="section-header">
                    <h3>{{Lang::get('translation.powered_by')}}</h3>
                </header>
                <img src="/app-assets/css/about_us/img/clients/MFK.png" style="width: 243px; margin-left: 25%; margin-top: 22px;" alt="">
                <img src="/app-assets/css/about_us/img/clients/MCC.png" style="width: 400px;  margin-left: 2%;" alt="">
            </div>
        </section><!-- #clients -->
        <hr style="width: 70%">
        <section id="clients" class="wow fadeInUp">
            <div class="container">
                <header class="section-header">
                    <h3>{{Lang::get('translation.implementing_partners')}}</h3>
                </header>
                {{--<img src="app-assets/css/about_us/img/clients/mcc.svg" style="width: 150px; margin-left: 35%;" alt="">--}}
                <img class="center" src="/app-assets/css/about_us/img/clients/oek.svg"
                     style="width: 213px; display: block; margin-left: 243px; margin-right: auto;" alt="">
                <img class="center" src="/app-assets/css/about_us/img/clients/ODK.png"
                     style="width: 213px; display: block;margin-left: 656px;margin-top: -166px; margin-right: auto;" alt="">
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
