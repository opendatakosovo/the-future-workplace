<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true" data-img="app-assets/images/backgrounds/04.jpg">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row position-relative">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="{{url('admin/home')}}"><img class="brand-logo" alt="Chameleon admin logo" src="/app-assets/images/logo/logo.png" />
                    <h3 class="brand-text">TFW</h3>
                </a></li>
               <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
        </ul>
    </div>
    <div class="navigation-background"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item"><a href="{{url('admin/home')}}"><i class="ft-home"></i><span class="menu-title" data-i18n="">Ballina</span></a>

            </li>
            <li class=" nav-item"><a href="#"><i class="ft-layers"></i><span class="menu-title" data-i18n="">Hartat</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{url('admin/business_map')}}">Harta e Bizneseve</a>
                    </li>
                    <li><a class="menu-item" href="{{url('admin/inst_map')}}">Harta e Institucioneve</a>
                    </li>
                    <li><a class="menu-item" href="{{url('admin/work_force_map')}}">Harta e Fuqise Punetore</a>
                    </li>
                </ul>

            </li>

            <li class=" nav-item"><a href="{{url('admin/blog')}}"><i class="ft-layout"></i><span class="menu-title" data-i18n="">Blogu</span></a>

            <li class=" nav-item"><a href="#"><i class="ft-settings"></i><span class="menu-title" data-i18n="">Settings</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{url('admin/user-management')}}">User Management</a></li>
                    <li><a class="menu-item" href="{{url('admin/statistics')}}">Statistics</a></li>
                    <li><a class="menu-item" href="{{url('admin/navigation')}}">Navigation</a></li>
                </ul>
            </li>

            </li>
        </ul>
    </div>
</div>
<!-- END: Main Menu-->
