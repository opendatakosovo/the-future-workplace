<?php
/**
 * Created by PhpStorm.
 * User: Dren
 * Date: 7/22/2019
 * Time: 4:08 PM
 */ ?>

<style>
    .navbar-static-top {
        display: none;
    }
</style>
<!-- BEGIN: Main Menu-->
<div class="header-navbar navbar-expand-sm navbar navbar-horizontal navbar-fixed navbar-dark navbar-without-dd-arrow navbar-shadow"
     role="navigation" data-menu="menu-wrapper" style="direction: rtl;">
    <div class="navbar-container main-menu-content" data-menu="menu-container">
        <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="dropdown dropdown-language nav-item">
                <a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <i class="flag-icon flag-icon-us"></i><span class="selected-language"></span></a>
                <div class="dropdown-menu" aria-labelledby="dropdown-flag">
                    <div class="arrow_box">
                        <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-us"></i> English</a>
                        <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-al"></i> Albanian</a>
                        <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-rs"></i> Serbian</a>
                    </div>
                </div>
            </li>
            <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"
                                                      onclick="openFullscreen()"><i class="ficon ft-maximize"></i></a>
            </li>
            <li class="dropdown nav-item"><a class=" nav-link" href="{{ url('about') }}"><i
                            class="ft-info"></i><span>{{Lang::get('translation.about')}}</span></a>
            </li>
            <li class="dropdown nav-item"><a class=" nav-link" href="{{ url('blog') }}"><i
                            class="ft-aperture"></i><span>{{Lang::get('translation.blog')}}</span></a>
            </li>
            <li class="dropdown nav-item"><a class=" nav-link" href="{{ url('skills-mismatch') }}"><i
                            class="ft-grid"></i><span>{{Lang::get('translation.skills_mismatch')}}</span></a>
            </li>
            <li class="dropdown nav-item"><a class=" nav-link" href="{{ url('workforce-map') }}"><i
                            class="ft-trending-up"></i><span>{{Lang::get('translation.workforce_data')}}</span></a>
            </li>
            <li class="dropdown nav-item"><a class="nav-link" href="{{ url('company-data') }}"><i
                            class="ft-activity"></i><span>{{Lang::get('translation.company_data')}}</span></a>
            </li>
            <li class="dropdown nav-item"><a class=" nav-link" href="{{ url('stats') }}"><i
                            class="ft-bar-chart-2"></i><span>{{Lang::get('translation.statistics')}}</span></a>
            </li>
            <li class="dropdown nav-item"><a class=" nav-link" href="{{ url('home') }}"><i
                            class="ft-home"></i><span>{{Lang::get('translation.home')}}</span></a>
            </li>
            <div class="navbar-header"
                 style="direction: ltr; left: 52% !important; margin: 1; width: 100% !important;">
                <ul class=" navbar-nav flex-row">
                    <li class="nav-item mobile-menu d-md-none mr-auto"><a
                                class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i
                                    class="ft-menu font-large-1"></i></a></li>
                    <li class="nav-item"><a class="navbar-brand" href="/"><img class="brand-logo"
                                                                               alt="creaative admin logo"
                                                                               src="app-assets/images/logo/logo.svg">
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
</script>