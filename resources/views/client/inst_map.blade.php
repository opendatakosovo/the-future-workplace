<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
          content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
    <meta name="keywords"
          content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Dashboard Analytics - Chameleon Admin - Modern Bootstrap 4 WebApp & Dashboard HTML Template + UI Kit</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700"
          rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/charts/chartist.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/charts/chartist-plugin-tooltip.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/components.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/horizontal-menu.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/chat-application.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/dashboard-analytics.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="horizontal-layout horizontal-menu 2-columns  " data-open="hover" data-menu="horizontal-menu"
      data-color="bg-gradient-x-blue-green" data-col="2-columns">

<!-- BEGIN: Header-->
<!-- fixed-top-->
<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow navbar-static-top navbar-light navbar-brand-center">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs"
                                                                  href="#"><i class="ft-menu font-large-1"></i></a></li>
            <li class="nav-item"><a class="navbar-brand" href="main.html"><img class="brand-logo"
                                                                               alt="creaative admin logo"
                                                                               src="app-assets/images/logo/logo.svg">
                    <h3 class="brand-text">TFW</h3>
                </a></li>
            <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse"
                                              data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a></li>
        </ul>
    </div>
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs"
                                                              href="#"><i class="ft-menu"></i></a></li>
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i
                                    class="ficon ft-maximize"></i></a></li>


                </ul>

            </div>
        </div>
    </div>
</nav>
<!-- END: Header-->


<!-- BEGIN: Main Menu-->
<div class="header-navbar navbar-expand-sm navbar navbar-horizontal navbar-fixed navbar-dark navbar-without-dd-arrow navbar-shadow" role="navigation" data-menu="menu-wrapper">
    <div class="navbar-container main-menu-content" data-menu="menu-container">
        <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="dropdown nav-item" ><a class=" nav-link" href="{{ url('home') }}" ><i class="ft-home"></i><span>Ballina</span></a>
            </li>
            <li class="dropdown nav-item" ><a class=" nav-link" href="{{ url('roadmap') }}" ><i class="la la-line-chart"></i><span>Udhërrëfyesi i Edukimit</span></a>
            </li>

            <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="la la-map"></i><span>Hartat</span></a>
                <ul class="dropdown-menu">
                    <div class="arrow_box">
                        <li class="" ><a class="dropdown-item " href="{{ url('inst_map') }}" >Harta e Institucioneve Arsimore</a>

                        </li>
                        <li class="" ><a class="dropdown-item " href="{{ url('work_force_map') }}" >Harta e fuqisë punëtore </a>

                        </li>
                        <li class="" ><a class="dropdown-item " href="{{ url('business_map') }}" >Harta e Bizneseve</a>

                        </li>
                    </div>
                </ul>
            </li>
            <li class="dropdown nav-item" ><a class=" nav-link" href="stats.html" ><i class="la la-bar-chart"></i><span>Statistikat</span></a>
            </li>
            <li class="dropdown nav-item" ><a class=" nav-link" href="{{ url('blog') }}" ><i class="ft-aperture"></i><span>Blogu</span></a>
            </li>

        </ul>
    </div>
</div>
<!-- END: Main Menu-->

<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title">Harta e Institucioneve Arsimore</h3>
            </div>
            <div class="content-body">
                <!-- Revenue, Hit Rate & Deals -->
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="card" style="height: 96%">
                            <div class="card-header">
                                <h4 class="card-title">Filtrimi</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            </div>

                            <div class="card-content collapse show">
                                <div class="card-body p-0 pb-0">
                                    <p class="card-body">
                                        Më poshtë hartës, përdoruesit mund të shikojnë grafikët duke përfshirë shkollimin,
                                        numrin e programeve dhe kurseve të ofruara nga TIK dhe pabarazinë gjinore në
                                        regjistrim. Përdoruesit mund t'i krahasojnë universitetet duke zgjedhur ato përmes
                                        një filtri
                                    </p>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-12">
                                <div class="card" style="height: 484px; overflow-y: auto">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                        <label class="custom-control-label" for="customCheck1">Zgjidh të gjitha</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                                        <label class="custom-control-label" for="customCheck1">Universiteti Haxhi
                                            Zeka</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck3">
                                        <label class="custom-control-label" for="customCheck1">Universiteti i
                                            Pristines</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck4">
                                        <label class="custom-control-label" for="customCheck1">Universiteti i
                                            Prizrenit</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck5">
                                        <label class="custom-control-label" for="customCheck1">Universiteti i Shkencave Te
                                            Aplikuara</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck6">
                                        <label class="custom-control-label" for="customCheck1">Universiteti "Kadri
                                            Zeka"</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck6">
                                        <label class="custom-control-label" for="customCheck1">Universiteti I Prishtines Ne Mitrovice</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck6">
                                        <label class="custom-control-label" for="customCheck1">Universiteti Europian I Kosoves"</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck6">
                                        <label class="custom-control-label" for="customCheck1">IBC-M International Business College </label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck6">
                                        <label class="custom-control-label" for="customCheck1">Universiteti Europian I Kosoves
                                        </label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck6">
                                        <label class="custom-control-label" for="customCheck1">Universiteti Europian I Kosoves
                                        </label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck6">
                                        <label class="custom-control-label" for="customCheck1">Kolegji AAB</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck6">
                                        <label class="custom-control-label" for="customCheck1">American University in Kosovo
                                        </label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck6">
                                        <label class="custom-control-label" for="customCheck1">European Vision University
                                        </label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck6">
                                        <label class="custom-control-label" for="customCheck1">Universiteti Iliria
                                        </label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck6">
                                        <label class="custom-control-label" for="customCheck1">Universiteti per Biznes dhe Teknologji
                                        </label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck6">
                                        <label class="custom-control-label" for="customCheck1">Universiteti Universum
                                        </label>
                                    </div>



                                    <!--<iframe src="https://datawrapper.dwcdn.net/lkglR/1/" scrolling="yes" style="margin-left:6px; margin-right:6px;" height="500px" name="myiFrame" frameborder="0" marginheight="0px" style="width:0; min-width:100%!important; border:none;" ></iframe>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Harta e Institucioneve Arsimore</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            </div>

                            <div class="card-content collapse show">
                                <div class="card-body p-0 pb-0">
                                    <p class="card-body">
                                        Me poshte eshte paraqitur harta e Kosoves me shumicen e komunave ku ne to paraqitet
                                        numri i te diplomuarve ne sektorin e TIK-ut dhe numrin e zhvilluesve te softuerit.
                                    </p>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-12">
                                <div class="card" style="height: auto;">
                                    <iframe src="https://datawrapper.dwcdn.net/lkglR/2/"  scrolling="yes" class="center"
                                            style="margin-left:6px; margin-right:6px;" height="500px" name="myiFrame"
                                            frameborder="0" marginheight="0px"
                                            style="width:0; min-width:100%!important; border:none;"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-12">
                        <div class="card"  style="height: 505px;">
                            <div class="card-header">
                                <h4 class="card-title">Programet e TIKU-t <br>dhe kurset e ofruara</h4>
                                <a class="heading-elements-toggle">
                                    <i class="la la-ellipsis-v font-medium-3"></i>
                                </a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li>
                                            <a data-action="collapse">
                                                <i class="ft-minus"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-action="reload">
                                                <i class="ft-rotate-cw"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-action="close">
                                                <i class="ft-x"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">

                                    <div id="vertical-bar" class="height-400 BarChartShadow"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-12">
                        <div class="card"  style="height: 505px;">
                            <div class="card-header">
                                <h4 class="card-title">Numri i fermrave dhe <br>meshkujve te regjistruar</h4>
                                <a class="heading-elements-toggle">
                                    <i class="la la-ellipsis-v font-medium-3"></i>
                                </a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li>
                                            <a data-action="collapse">
                                                <i class="ft-minus"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-action="reload">
                                                <i class="ft-rotate-cw"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-action="close">
                                                <i class="ft-x"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">

                                    <div id="vertical-bar2" class="height-400 BarChartShadow"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-12">
                        <div class="card"  style="height: 505px;">
                            <div class="card-header">
                                <h4 class="card-title">Shkollimi</h4>
                                <a class="heading-elements-toggle">
                                    <i class="la la-ellipsis-v font-medium-3"></i>
                                </a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li>
                                            <a data-action="collapse">
                                                <i class="ft-minus"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-action="reload">
                                                <i class="ft-rotate-cw"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-action="close">
                                                <i class="ft-x"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">

                                    <div id="vertical-bar3" class="height-400 BarChartShadow"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light navbar-shadow">
        <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span
                    class="float-md-left d-block d-md-inline-block">2019 &copy; Copyright <a class="text-bold-800 grey darken-2"
                                                                                             href="https://opendatakosovo.org"
                                                                                             target="_blank">Open Data Kosovo</a></span>
            <ul class="list-inline float-md-right d-block d-md-inline-blockd-none d-lg-block mb-0">
                <li class="list-inline-item"><a class="my-1" href="#" target="_blank">
                        Support</a></li>
            </ul>
        </div>
    </footer>
    <!-- END: Footer-->

    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script type="text/javascript" src="app-assets/vendors/js/ui/jquery.sticky.js"></script>
    <script src="app-assets/vendors/js/charts/chartist.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/charts/chartist-plugin-tooltip.min.js" type="text/javascript"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js" type="text/javascript"></script>
    <script src="app-assets/js/core/app.js" type="text/javascript"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/charts/chartist/bar/vertical-bar.js" type="text/javascript"></script>
    <script src="app-assets/js/scripts/charts/chartist/bar/stacked-bar.js" type="text/javascript"></script>
    <script src="app-assets/js/scripts/charts/chartist/line/area.js" type="text/javascript"></script>
    <script src="app-assets/js/scripts/charts/chartist/line/line.js" type="text/javascript"></script>
    <script src="app-assets/js/scripts/charts/chartist/pie/pie.js" type="text/javascript"></script>
    <script src="app-assets/js/scripts/charts/chartist/pie/donut.js" type="text/javascript"></script>
</div>
</body>
<!-- END: Body-->


</html>
