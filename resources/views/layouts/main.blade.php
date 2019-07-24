<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
@include('partials.head')
</head>
<body class="horizontal-layout horizontal-menu 2-columns  " data-open="hover" data-menu="horizontal-menu" data-color="bg-gradient-x-blue-green" data-col="2-columns">
@include('partials/top')
@include('partials.header')
@include('partials.navigation')
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            @yield('content')
        </div>
    </div>
    <!-- END: Content-->
</div>
@include('partials.footer')
@include('partials/scripts')
</body>