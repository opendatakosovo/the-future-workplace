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
            <li class="dropdown nav-item" ><a class=" nav-link" href="{{ url('home') }}" ><i class="ft-home"></i><span>Home</span></a>
            </li>
            <li class="dropdown nav-item" ><a class=" nav-link" href="{{ url('stats') }}" ><i class="ft-bar-chart-2"></i><span>Statistikat</span></a>
            </li>

            <li class="dropdown nav-item"><a class="nav-link" href="{{ url('company-data') }}"><i class="ft-activity"></i><span>Company Data</span></a>
            </li>

            <li class="dropdown nav-item" ><a class=" nav-link" href="{{ url('workforce-map') }}" ><i class="ft-trending-up"></i><span>Workforce Data</span></a>
            </li>
            <li class="dropdown nav-item" ><a class=" nav-link" href="{{ url('skills-mismatch') }}" ><i class="ft-grid"></i><span>Skills Mismatch</span></a>
            </li>
            <li class="dropdown nav-item" ><a class=" nav-link" href="{{ url('blog') }}" ><i class="ft-aperture"></i><span>Blog</span></a>
            </li>
            <li class="dropdown nav-item" ><a class=" nav-link" href="{{ url('about') }}" ><i class="ft-info"></i><span>About</span></a>
            </li>


        </ul>
    </div>
</div>
<!-- END: Main Menu-->
