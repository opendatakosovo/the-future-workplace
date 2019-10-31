<?php
/**
 * Created by PhpStorm.
 * User: Dren
 * Date: 7/22/2019
 * Time: 4:08 PM
 */ ?>


<!-- BEGIN: Main Menu-->
<style>
    .navbar-mobile {
        display: none;
    }

    .selected-nav{
        background-color: rgba(255, 255, 255, 0.12);
    }

    @media screen and (max-width: 480px) {
        .navbar-mobile {
            display: block !important;
        }

        .navbar-normal {
            display: none !important;
        }

        #dropdown-flag {
            display: none;
        }

        .main-menu-content ul {
            -moz-transform: rotate(180deg);
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg);
        }

        .main-menu-content ul > li {
            -moz-transform: rotate(-180deg);
            -webkit-transform: rotate(-180deg);
            transform: rotate(-180deg);
        }

        .main-menu-content{
            display: none ;
        }
    }
</style>
<div class="header-navbar navbar-expand-sm navbar navbar-horizontal navbar-fixed navbar-dark navbar-without-dd-arrow navbar-shadow" role="navigation" data-menu="menu-wrapper" >
    <div class="navbar-container main-menu-content" >
        <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"
                                                      onclick="openFullscreen()"><i class="ficon ft-maximize"></i></a>
            <li class="dropdown dropdown-language nav-item">
                <a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <i class="flag-icon "></i><span class="selected-language">{{strtoupper(app()->getLocale())}}</span></a>
                <div class="dropdown-menu" aria-labelledbyps--active-y="dropdown-flag">
                    <div class="arrow_box">
                        <a class="dropdown-item" href="/en/{{get_current_url()}}"><i class="flag-icon "></i> English</a>
                        <a class="dropdown-item" href="/al/{{get_current_url()}}"><i class="flag-icon "></i> Albanian</a>
                        <a class="dropdown-item" href="/sr/{{get_current_url()}}"><i class="flag-icon "></i> Serbian</a>
                    </div>
                </div>
            </li>
            </li>
            <li style="margin-right: 1%;" class="dropdown nav-item @if(Request::segment(2) == 'downloads') selected-nav @endif"><a class=" nav-link" href="{{ url(app()->getLocale().'/downloads') }}"><i
                            class="ft-download"></i><span>{{Lang::get('translation.downloads')}}</span></a>
            </li>
            <li class="dropdown nav-item @if(Request::segment(2) == 'about') selected-nav @endif"><a class=" nav-link" href="{{ url( app()->getLocale().'/about') }}"><i
                            class="ft-info"></i><span>{{Lang::get('translation.about')}}</span></a>
            </li>
            <li class="dropdown nav-item @if(Request::segment(2) == 'blog') selected-nav @endif"><a class=" nav-link" href="{{ url(app()->getLocale().'/blog') }}"><i
                            class="ft-aperture"></i><span>{{Lang::get('translation.blog')}}</span></a>
            </li>
            <li class="dropdown nav-item @if(Request::segment(2) == 'skills-mismatch') selected-nav @endif"><a class=" nav-link" href="{{ url(app()->getLocale().'/skills-mismatch') }}"><i
                            class="ft-grid"></i><span>{{Lang::get('translation.skills_mismatch')}}</span></a>
            </li>
            <li class="dropdown nav-item @if(Request::segment(2) == 'workforce-map' || Request::segment(2) == 'highschool-data') selected-nav @endif" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="index.html"
                                                                  data-toggle="dropdown"><i
                            class="ft-book"></i><span>{{Lang::get('translation.workforce_data')}}</span></a>
                <ul class="dropdown-menu">
                    <div class="arrow_box">
                        <li data-menu=""><a class="dropdown-item @if(Request::segment(2) == 'workforce-map') selected-nav @endif"
                                            href="{{ url(app()->getLocale().'/workforce-map') }}">{{Lang::get('translation.university')}}</a>
                        </li>
                        <li data-menu=""><a class="dropdown-item @if(Request::segment(2) == 'highschool-data') selected-nav @endif"
                                            href="{{ url(app()->getLocale().'/highschool-data') }}">{{Lang::get('translation.high_school')}}</a>
                        </li>
                    </div>
                </ul>
            </li>

            <li class="dropdown nav-item @if(Request::segment(2) == 'company-data' || Request::segment(2) == 'atk-data') selected-nav @endif" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="index.html"
                                                                  data-toggle="dropdown"><i
                            class="ft-activity "></i><span>{{Lang::get('translation.company_data')}}</span></a>
                <ul class="dropdown-menu">
                    <div class="arrow_box">
                        <li data-menu=""><a class="dropdown-item @if(Request::segment(2) == 'company-data') selected-nav @endif"
                                            href="{{ url(app()->getLocale().'/company-data') }}">{{Lang::get('translation.businesses_data')}}</a>
                        </li>
                        <li data-menu=""><a class="dropdown-item @if(Request::segment(2) == 'atk-data') selected-nav @endif"
                                            href="{{ url(app()->getLocale().'/atk-data') }}">{{Lang::get('translation.atk_data')}}</a>
                        </li>
                    </div>
                </ul>
            </li>


            {{--<li class="dropdown nav-item"><a class="nav-link" href="{{ url('company-data') }}"><i--}}
                            {{--class="ft-activity"></i><span>{{Lang::get('translation.company_data')}}</span></a>--}}
            {{--</li>--}}
            <li class="dropdown nav-item @if(Request::segment(2) == 'stats') selected-nav @endif"><a class=" nav-link" href="{{ url(app()->getLocale().'/stats') }}"><i
                            class="ft-bar-chart-2"></i><span>{{Lang::get('translation.statistics')}}</span></a>
            </li>
            <li class="dropdown nav-item @if(Request::segment(2) == 'home') selected-nav @endif"><a class=" nav-link" href="{{ url(app()->getLocale().'/home') }}"><i
                            class="ft-home"></i><span>{{Lang::get('translation.home')}}</span></a>
            </li>
            <div class="navbar-header navbar-normal"
                 style="direction: ltr; width: 100% !important;">
                <ul class=" navbar-nav flex-row">
                    <li class="nav-item d-md-none "  >
                        <a class="nav-link nav-menu-main menu-toggle hidden-xs"  onclick="show_nav()" href="#"><i class="ft-menu font-large-1"></i></a>
                    </li>
                    <li class="nav-item"><a class="navbar-brand" style="margin-left: 10%;" href="/">
                            <img class="brand-logo" alt="creaative admin logo" src="/app-assets/images/logo/logo.svg">
                            <h3 class="brand-text">The Future Workplace</h3>
                        </a>
                    </li>
                    <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse"
                                                      data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a>
                    </li>
                </ul>
            </div>
        </ul>
    </div>
</div>
<!-- END: Main Menu-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js" type="text/javascript"></script>

<script>
    // $(window).on('ready', function() {
    //     $(".main-menu-content").css('display','block');
    // });
    //
    // $(window).on('load', function() {
    //     alert('page is loaded');
    //     $(".main-menu-content").css('display','block');
    //     setTimeout(function () {
    //         alert('page is loaded and 1 minute has passed');
    //     }, 60000);
    //
    // });
    // $(".main-menu-content").css('display','block','!important');
</script>
<script>
/* Get the documentElement (<html>) to display the page in fullscreen */
var elem = document.documentElement;

/* View in fullscreen */
function openFullscreen() {
if (elem.requestFullscreen) {
elem.requestFullscreen();
} else if (elem.mozRequestFullScreen) { /* Firefox */
elem.mozRequestFullScreen();
} else if (elem.webkitRequestFullscreen) { /* Chrome, Safari and Opera */
elem.webkitRequestFullscreen();
} else if (elem.msRequestFullscreen) { /* IE/Edge */
elem.msRequestFullscreen();
}
}

/* Close fullscreen */
function closeFullscreen() {
if (document.exitFullscreen) {
document.exitFullscreen();
} else if (document.mozCancelFullScreen) { /* Firefox */
document.mozCancelFullScreen();
} else if (document.webkitExitFullscreen) { /* Chrome, Safari and Opera */
document.webkitExitFullscreen();
} else if (document.msExitFullscreen) { /* IE/Edge */
document.msExitFullscreen();
}
}


//
// window.addEventListener('load', function () {
//
//     $(".main-menu-content").css('display','block')
// })
// jQuery(window).load(function () {
//
//
// })

</script>