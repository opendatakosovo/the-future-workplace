@extends('layouts/main')

@section('content')

    <div class="content-header-left col-md-4 col-12 mb-2">
        <h3 class="content-header-title">Blogu</h3>
    </div>

    <div class="content-body">
        <!-- Basic Horizontal Timeline -->
        <div class="card">
            <div class="card-header">

                <div id="retainable-rss-embed"
                     data-rss="https://medium.com/feed/@open_data_kosovo"
                     data-maxcols="3"
                     data-layout="grid"
                     data-poststyle="inline"
                     data-readmore="Read the rest"
                     data-buttonclass="btn btn-primary"
                     data-offset="-100"></div>
                <script src="https://www.retainable.io/assets/retainable/rss-embed/retainable-rss-embed.js"></script>
            </div>
        </div>
        <!--/ Basic Horizontal Timeline -->
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
    <script src="app-assets/vendors/js/timeline/horizontal-timeline.js" type="text/javascript"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js" type="text/javascript"></script>
    <script src="app-assets/js/core/app.js" type="text/javascript"></script>
    <!-- END: Theme JS-->

    </body>
    <!-- END: Body-->

@endsection