<?php
/**
 * Created by PhpStorm.
 * User: Dren
 * Date: 7/22/2019
 * Time: 4:41 PM
 */?>

<nav class="navbar-mobile header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow navbar-static-top navbar-light navbar-brand-center">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mobile-menu d-md-none mr-auto"onclick="show_nav()"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
            <li class="nav-item">
                <a class="navbar-brand" ><img class="brand-logo" alt="creaative admin logo" src="/app-assets/images/logo/logo.svg">
                    <h3 class="brand-text">TFW</h3>
                </a>
            </li>
            <select onchange="location = this.value;" style="border: 0px; outline: 0px;">
                <option @if(Request::segment(1) == 'en') selected @endif value="/en/{{get_current_url()}}">EN</option>
                <option @if(Request::segment(1) == 'al') selected @endif value="/al/{{get_current_url()}}">AL</option>
                <option @if(Request::segment(1) == 'sr') selected @endif value="/sr/{{get_current_url()}}">SR</option>
            </select>
            {{--<li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a></li>--}}
        </ul>

    </div>
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu" ></i></a></li>
                    <li class="nav-item d-none d-md-block">
                        <a class="nav-link nav-link-expand" href="#">
                            <i class="ficon ft-maximize"></i>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</nav>


<!-- END: Header-->
