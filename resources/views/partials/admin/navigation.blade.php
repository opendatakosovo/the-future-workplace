<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow expanded" data-scroll-to-active="true" data-img="app-assets/images/backgrounds/04.jpg">
    <div class="navbar-header expanded">
        <ul class="nav navbar-nav flex-row position-relative">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="index.html"><img class="brand-logo" alt="TFW" src="../app-assets/images/logo/logo.svg">
                    <h3 class="brand-text">TFW</h3>
                </a></li>
            <li class="nav-item d-none d-md-block nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="toggle-icon font-medium-3 ft-disc" data-ticon="ft-disc"></i></a></li>
            <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
        </ul>
    </div>
    <div class="navigation-background"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item"><a href="{{url('admin/home')}}"><i class="ft-home"></i><span class="menu-title" data-i18n="">Ballina</span></a></li>
            <li class=" nav-item"><a href="{{url('admin/uni-settings')}}"><i class="ft-layout"></i><span class="menu-title" data-i18n="">Universities</span></a></li>
            <li class=" nav-item"><a href="{{ url('admin/business_data') }}"><i class="ft-layers"></i><span class="menu-title" data-i18n="">Business Data</span></a>

            </li>

            {{--<li class=" nav-item"><a href="{{url('admin/workforce_data')}}"><i class="ft-layout"></i><span class="menu-title" data-i18n="">WorkForce Data</span></a>--}}

            {{--<li class=" nav-item"><a href="{{url('admin/skills_mismatch')}}"><i class="ft-layout"></i><span class="menu-title" data-i18n="">Skills Mismatch</span></a>--}}


            <li class=" nav-item"><a href="#"><i class="ft-settings"></i><span class="menu-title" data-i18n="">Settings</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{url('admin/user-management')}}">User Management</a></li>
                    {{--<li><a class="menu-item" href="{{url('admin/statistics')}}">Statistics</a></li>--}}
                    {{--<li><a class="menu-item" href="{{url('admin/navigation')}}">Navigation</a></li>--}}
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- END: Main Menu-->
