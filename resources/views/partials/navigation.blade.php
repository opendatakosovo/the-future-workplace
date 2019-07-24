<?php
/**
 * Created by PhpStorm.
 * User: Dren
 * Date: 7/22/2019
 * Time: 4:08 PM
 */?>

<!-- BEGIN: Main Menu-->
<div class="header-navbar navbar-expand-sm navbar navbar-horizontal navbar-fixed navbar-dark navbar-without-dd-arrow navbar-shadow" role="navigation" data-menu="menu-wrapper">
    <div class="navbar-container main-menu-content" data-menu="menu-container">
        <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="dropdown nav-item" ><a class=" nav-link" href="{{url('home')}}" ><i class="ft-home"></i><span>Ballina</span></a>
            </li>
            <li class="dropdown nav-item" ><a class=" nav-link" href="{{url('roadmap')}}" ><i class="la la-line-chart"></i><span>Udhërrëfyesi i Edukimit</span></a>
            </li>

            <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="la la-map"></i><span>Hartat</span></a>
                <ul class="dropdown-menu">
                    <div class="arrow_box">
                        <li class="" ><a class="dropdown-item " href="inst_map.html" >Harta e Institucioneve Arsimore</a>

                        </li>
                        <li class="" ><a class="dropdown-item " href="work_force_map.html" >Harta e fuqisë punëtore </a>

                        </li>
                        <li class="" ><a class="dropdown-item " href="bussiness_map.html" >Harta e Bizneseve</a>

                        </li>
                    </div>
                </ul>
            </li>
            <li class="dropdown nav-item" ><a class=" nav-link" href="stats.html" ><i class="la la-bar-chart"></i><span>Statistikat</span></a>
            </li>
            <li class="dropdown nav-item" ><a class=" nav-link" href="{{url('blog')}}" ><i class="ft-aperture"></i><span>Blogu</span></a>
            </li>

        </ul>
    </div>
</div>
<!-- END: Main Menu-->
