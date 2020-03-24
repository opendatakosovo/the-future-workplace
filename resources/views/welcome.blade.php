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

        main{
            display:block;
            position:relative;
            box-sizing:border-box;
            padding:30px;
            width:100%;
            background: #f1f9ff;
            margin:0 auto;
            margin-top:50px;
            box-shadow:0px 0px 5px rgba(0,0,0,0.1);
            text-align: center;
        }
        h1{
            padding-left:20px;
            padding-right:20px;
            font-size:32px;
            font-weight:300;
        }
        .topic{
            padding:20px;
            padding-top:0px;
            padding-bottom:0px;
            border-bottom:solid 1px #ebebeb;
        }
        .open{
            cursor:pointer;
            display:block;
            padding:0px;
        }
        .open:hover{
            opacity:0.7;
        }
        .expanded{
            background-color:#f5f5f5;
            transition: all .3s ease-in-out;
        }
        .question{
            padding-top:30px;
            padding-right: 40px;
            padding-bottom:20px;
            font-size: 18px;
            font-weight: 900;
            color: #474747;
        }
        .answer{
            font-size:16px;
            line-height:26px;
            display:none;
            margin-bottom:30px;
            text-align:justify;
            padding-left:20px;
            padding-right:20px;
        }
        .faq-t{
            -moz-transform: rotate(-45deg);
            -ms-transform: rotate(-45deg);
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            display: inline-block;
            float:right;
            position:relative;
            top:-55px;
            right:10px;
            width: 10px;
            height: 10px;
            background: transparent;
            border-left: 2px solid #ccc;
            border-bottom: 2px solid #ccc;
            transition: all .3s ease-in-out;
        }
        .faq-o{
            top:-50px;
            -moz-transform: rotate(-224deg);
            -ms-transform: rotate(-224deg);
            -webkit-transform: rotate(-224deg);
            transform: rotate(-224deg);
        }
        @media only screen and (max-width: 480px) {
            .faq-t{display:none;}
            .question{
                padding-right: 0px;
            }
            main{
                padding:10px;
            }
            .answer{
                margin-bottom:30px;
                padding-left:0px;
                padding-right:0px;
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


    <section class="feature-area" style="width: 100%;padding: 0;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8" style="height: 100px;">
                    <div class="section-title text-center">
                        <h1 style="margin-top: 3%"><i class="ft-help-circle" style="padding-right: 3%"></i>{{Lang::get('translation.FAQ')}}</h1>
                    </div>
                </div>
            </div>
            <div class="feature-inner row">
                <div class="col-lg-12 col-md-12">
                    <main>
                        <div class="topic">
                            <div class="open">
                                <h2 class="question">{{Lang::get('translation.question_1')}}</h2>
                                <span class="faq-t"></span>
                            </div>
                            <p class="answer">{{Lang::get('translation.answer_1')}}</p>
                        </div>
                        <div class="topic">
                            <div class="open">
                                <h2 class="question">{{Lang::get('translation.question_2')}}</h2>
                                <span class="faq-t"></span>
                            </div>
                            <p class="answer">{{Lang::get('translation.answer_2')}}</p>
                        </div>
                        <div class="topic">
                            <div class="open">
                                <h2 class="question">{{Lang::get('translation.question_3')}}</h2>
                                <span class="faq-t"></span>
                            </div>
                            <p class="answer">{{Lang::get('translation.answer_3')}}</p>
                        </div>
                        <div class="topic">
                            <div class="open">
                                <h2 class="question">{{Lang::get('translation.question_4')}}</h2>
                                <span class="faq-t"></span>
                            </div>
                            <p class="answer">{{Lang::get('translation.answer_4')}}</p>
                        </div>
                        <div class="topic">
                            <div class="open">
                                <h2 class="question">{{Lang::get('translation.question_5')}}</h2>
                                <span class="faq-t"></span>
                            </div>
                            <p class="answer">{{Lang::get('translation.answer_5')}}</p>
                        </div>
                       </main>
                </div>

            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>
        $(".open").click( function () {
            var container = $(this).parents(".topic");
            var answer = container.find(".answer");
            var trigger = container.find(".faq-t");

            answer.slideToggle(200);

            if (trigger.hasClass("faq-o")) {
                trigger.removeClass("faq-o");
            }
            else {
                trigger.addClass("faq-o");
            }

            if (container.hasClass("expanded")) {
                container.removeClass("expanded");
            }
            else {
                container.addClass("expanded");
            }
        });
    </script>
@endsection