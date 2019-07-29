@extends('layouts.app')

@section('content')
<    <!-- BEGIN: Vendor CSS-->
<link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
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
<link rel="stylesheet" type="text/css" href="app-assets/css/pages/login-register.css">
<!-- END: Page CSS-->

<!-- BEGIN: Custom CSS-->
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="horizontal-layout horizontal-menu 1-column  bg-full-screen-image blank-page blank-page" data-open="hover" data-menu="horizontal-menu" data-color="bg-gradient-x-purple-blue" data-col="1-column">
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
        </div>
        <div class="content-body">
            <section class="flexbox-container">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="col-lg-4 col-md-6 col-10 box-shadow-2 p-0">
                        <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                            <div class="card-header border-0">
                                <div class="text-center mb-1">
                                    <img src="app-assets/images/logo/logo.png" alt="branding logo">
                                    <h3 class="brand-text">TWF</h3>
                                </div>
                                <div class="font-large-1  text-center">
                                    Become A Member
                                </div>
                            </div>
                            <div class="card-content">

                                <div class="card-body">
                                    <form class="form-horizontal" action="{{('home')}}" novalidate>
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input type="text" class="form-control round" id="user-name" placeholder="Your Email Adress" required>
                                            <div class="form-control-position">
                                                <i class="ft-user"></i>
                                            </div>
                                        </fieldset>

                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input type="password" class="form-control round" id="user-password" placeholder="Enter Password" required>
                                            <div class="form-control-position">
                                                <i class="ft-lock"></i>
                                            </div>
                                        </fieldset>

                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input type="password" class="form-control round" id="user-password" placeholder="Confirm Password" required>
                                            <div class="form-control-position">
                                                <i class="ft-lock"></i>
                                            </div>
                                        </fieldset>

                                        <div class="form-group text-center">
                                            <button type="submit" class="btn round btn-block btn-glow btn-bg-gradient-x-purple-blue col-12 mr-1 mb-1">Register</button>
                                        </div>

                                    </form>
                                </div>
                                <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-2 ">
                                    <span>OR Sign Up Using</span>
                                </p>
                                <div class="text-center">
                                    <a href="#" class="btn btn-social-icon round mr-1 mb-1 btn-facebook">
                                        <span class="ft-facebook"></span>
                                    </a>
                                    <a href="#" class="btn btn-social-icon round mr-1 mb-1 btn-twitter">
                                        <span class="ft-twitter"></span>
                                    </a>
                                    <a href="#" class="btn btn-social-icon round mr-1 mb-1 btn-instagram">
                                        <span class="ft-instagram"></span>
                                    </a>
                                </div>

                                <p class="card-subtitle text-muted text-right font-small-3 mx-2 my-1">
                                        <span>Already a member ?
                                            <a href="{{('login')}}" class="card-link">Sign In</a>
                                        </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<!-- END: Content-->


<!-- BEGIN: Vendor JS-->
<script src="app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script type="text/javascript" src="app-assets/vendors/js/ui/jquery.sticky.js"></script>
<script src="app-assets/vendors/js/forms/validation/jqBootstrapValidation.js" type="text/javascript"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="app-assets/js/core/app-menu.js" type="text/javascript"></script>
<script src="app-assets/js/core/app.js" type="text/javascript"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="app-assets/js/scripts/forms/form-login-register.js" type="text/javascript"></script>
<!-- END: Page JS-->

@endsection
