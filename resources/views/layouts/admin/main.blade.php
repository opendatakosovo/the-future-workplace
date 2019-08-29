<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    @include('partials.admin.head')
</head>
<body class="vertical-layout vertical-menu-modern 2-columns   fixed-navbar" data-open="click"
      data-menu="vertical-menu-modern" data-color="bg-chartbg" data-col="2-columns">
@include('partials.admin.header')
@include('partials.admin.navigation')
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="col-md-12">
                @yield('content')
            </div>
        </div>
    </div>
</div>
<!--End:Content-->

@include('partials.admin.footer')
@include('partials.admin.scripts')
@include('partials.admin.custom_scripts')

</body>
</html>
