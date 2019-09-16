@extends('layouts/main')
@section('title', 'Home')
@section('content')
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/app-assets/css/landing/linearicons.css')}}">
    <!-- Start Banner Area -->
    <section class="home-banner-area relative" style="width: 100%">
        <video style="width: 100%" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" >
            <source src="app-assets/videos/Landingpagevideo.mp4" type="video/mp4">
        </video>
        <div class="container">
            <div class="row fullscreen d-flex align-items-center justify-content-center">
                <div class="banner-content col-lg-8 col-md-12" style="position: absolute; margin-top: -35%">
                    <img class="brand-logo" alt="creaative admin logo" src="app-assets/images/logo/logo.svg" style="width: 7%;box-shadow: blue;">
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
                        <h1 style="margin-top: 3%">Features That Make Us Hero</h1>
                        <p style="font-size: 20px">
                            If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for
                            as low as $.17 each.
                        </p>
                    </div>
                </div>
            </div>
            <div class="feature-inner row">
                <div class="col-lg-4 col-md-6">
                    <div class="feature-item">
                        <i class="ti-crown"></i>
                        <h4>Architecture</h4>
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeIn;">
                            <p>
                                Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed do eiusmod tempor incididunt labore.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-item">
                        <i class="ti-briefcase"></i>
                        <h4>Interior Design</h4>
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeIn;">
                            <p>
                                Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed do eiusmod tempor incididunt labore.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-item">
                        <i class="ti-medall-alt"></i>
                        <h4>Concept Design</h4>
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeIn;">
                            <p>
                                Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed do eiusmod tempor incididunt labore.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-item">
                        <i class="ti-key"></i>
                        <h4>Lifetime Access</h4>
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeIn;">
                            <p>
                                Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed do eiusmod tempor incididunt labore.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-item">
                        <i class="ti-files"></i>
                        <h4>Source File Included</h4>
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeIn;">
                            <p>
                                Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed do eiusmod tempor incididunt labore.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-item">
                        <i class="fas fa-fish"></i>
                        <h4>Live Support</h4>
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeIn;">
                            <p>
                                Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed do eiusmod tempor incididunt labore.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
@endsection