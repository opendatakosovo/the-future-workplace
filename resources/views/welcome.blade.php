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
        @if(is_mobile())
        <video style="width: 100%" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="/app-assets/videos/home-video-compressed5.mp4" type="video/mp4">
        </video>
        @else
            <video style="width: 100%" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                <source src="/app-assets/videos/home-video-compressed2.mp4" type="video/mp4">
            </video>
        @endif
        <div class="container">
            <div class="row fullscreen d-flex align-items-center justify-content-center">
                <div class="banner-content col-lg-8 col-md-12" style="position: absolute; margin-top: -35%">
                    <img class="brand-logo" alt="creaative admin logo" src="/app-assets/images/logo/logo.svg"
                         style="width: 7%;box-shadow: blue;">
                    <h1 class="wow fadeIn" data-wow-duration="4s">The Future Workplace</h1>
                    <p class="text-white">
                        {{Lang::get('translation.welcome_slogan')}}
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
                        <h1 style="margin-top: 3%">{{Lang::get('translation.welcome_content_title')}}</h1>
                        <p style="font-size: 20px">
                            {{Lang::get('translation.welcome_content_slogan')}}
                        </p>
                    </div>
                </div>
            </div>
            <div class="feature-inner row">
                <div class="col-lg-4 col-md-6">
                    <div class="feature-item">
                        <i class="ft-bar-chart-2"></i>
                        <h4> {{Lang::get('translation.statistics')}}</h4>
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".1s"
                             style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeIn;">
                            <p>
                                {{Lang::get('translation.welcome_statistics')}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-item">
                        <i class="ft-activity"></i>
                        <h4>{{Lang::get('translation.company_data')}}</h4>
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".3s"
                             style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeIn;">
                            <p>
                                {{Lang::get('translation.welcome_company_data')}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-item">
                        <i class="ft-trending-up"></i>
                        <h4>{{Lang::get('translation.workforce_data')}}</h4>
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s"
                             style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeIn;">
                            <p>
                                {{Lang::get('translation.welcome_workforce_data')}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-item">
                        <i class="ft-shuffle"></i>
                        <h4>{{Lang::get('translation.skills_mismatch')}}</h4>
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".1s"
                             style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeIn;">
                            <p>
                                {{Lang::get('translation.welcome_skills_mismatch')}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-item">
                        <i class="ft-target"></i>
                        <h4> {{Lang::get('translation.blog')}}</h4>
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".3s"
                             style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeIn;">
                            <p>
                                {{Lang::get('translation.welcome_blog')}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-item">
                        <i class="ft-download"></i>
                        <h4> {{Lang::get('translation.downloads')}}</h4>
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s"
                             style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeIn;">
                            <p>
                                {{Lang::get('translation.welcome_downloads')}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
@endsection