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
            <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="la la-map"></i><span>Business Data</span></a>
                <ul class="dropdown-menu">
                    <div class="arrow_box">
                        <li class="" ><a class="dropdown-item " href="{{ url('company-data') }}" >Company Data</a>

                        </li>
                        <li class="" ><a class="dropdown-item " href="{{ url('employee-data') }}" >Employee Data </a>
                        </li>
                    </div>
                </ul>
            </li>

            <li class="dropdown nav-item" ><a class=" nav-link" href="{{ url('workforce-map') }}" ><i class="ft-aperture"></i><span>Workforce Data</span></a>
            </li>
            <li class="dropdown nav-item" ><a class=" nav-link" href="{{ url('skills-mismatch') }}" ><i class="ft-aperture"></i><span>Skills Mismatch</span></a>
            </li>
            <li class="dropdown nav-item" ><a class=" nav-link" href="{{ url('blog') }}" ><i class="ft-aperture"></i><span>Blog</span></a>
            </li>

        </ul>
    </div>
</div>
<!-- END: Main Menu-->
