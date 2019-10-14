@extends('layouts/main')
@section('title', 'Home')
@section('content')
    <style>
        @media screen and (max-width: 480px) {
            .home-banner-area {
                height: auto !important;
            }

            .brand-logo {
                width: 17% !important;
                margin-bottom: 6%;
            }

            .content-wrapper-before {
                display: none;
            }
            .navbar-brand{
                left: 57% !important;
            }
        }
    </style>
     <!-- Start Banner Area -->
    <section class="home-banner-area relative" style="width: 100%">
        <video style="width: 100%" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="/app-assets/videos/Landingpagevideo.mp4" type="video/mp4">
        </video>
        <div class="container">
            <div class="row fullscreen d-flex align-items-center justify-content-center">
                <div class="banner-content col-lg-8 col-md-12" style="position: absolute; margin-top: -35%">
                    <img class="brand-logo" alt="creaative admin logo" src="/app-assets/images/logo/logo.svg"
                         style="width: 7%;box-shadow: blue;">
                    <h1 class="wow fadeIn" data-wow-duration="4s">The Future Workplace</h1>
                    <p class="text-white">
                        Choose your Future Career wisely!
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- End Banner Area -->
    <section class="feature-area" style="width: 100%">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <h1 style="margin-top: 3%">The Future Workplace Data</h1>
                        <p style="font-size: 20px">
                            If you are looking to see what career path you should take in ICT, this is the best place to
                            be
                        </p>
                    </div>
                </div>
            </div>
            <div class="feature-inner row">
                <div class="col-lg-4 col-md-6">
                    <div class="feature-item">
                        <i class="ft-bar-chart-2"></i>
                        <h4>Statistics</h4>
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".1s"
                             style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeIn;">
                            <p>
                                General statistics about high school and university graduates, business companies and
                                workforce numbers.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-item">
                        <i class="ft-activity"></i>
                        <h4>Company Data</h4>
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".3s"
                             style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeIn;">
                            <p>
                                Data and graphs about companies in ICT divided by municipalities and field of expertise
                                and their skills demand.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-item">
                        <i class="ft-trending-up"></i>
                        <h4>Workforce Data</h4>
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s"
                             style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeIn;">
                            <p>
                                Data and graphs about students graduated in ICT Universities divided by municipalities
                                and skills.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-item">
                        <i class="ft-shuffle"></i>
                        <h4>Skills Mismatch</h4>
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".1s"
                             style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeIn;">
                            <p>
                                See if your degree and skills are a good match with companies demands and experts
                                they're seeking for.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-item">
                        <i class="ft-target"></i>
                        <h4>Blog</h4>
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".3s"
                             style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeIn;">
                            <p>
                               Always be updated with our work and ICT information.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-item">
                        <i class="ft-download"></i>
                        <h4>Downloads</h4>
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s"
                             style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeIn;">
                            <p>
                                Download all the data you see and need from this site.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
@endsection