@extends('layouts/main')
@section('title', 'Blog')
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


@endsection