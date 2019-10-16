<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light navbar-shadow">
    <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
        <span class="float-md-left d-block d-md-inline-block" style="margin-top: 1%;"><span class="copytirght-text">{{ now()->year }} &copy; Copyright </span><a
                    class="text-bold-800 grey darken-2 odk-footer-text"
                    href="https://opendatakosovo.org"
                    target="_blank">Open Data Kosovo</a></span>
        <span class="float-md-right d-block footer-funded-text d-md-inline-block" style="float: right ">{{ now()->year }} &copy;  {{Lang::get('translation.funded_by')}}
            <div class="funded-logos">
                <img src="/app-assets/css/about_us/img/clients/mcc.svg" style="width: 80px; padding-left: 5%;" alt="">
                <img src="/app-assets/css/about_us/img/clients/mcc-gov.svg" style="width: 140px; " alt="">
            </div>
        </span>

    </div>
</footer>
<!-- END: Footer-->

{{--<style>--}}
    {{--footer {--}}
        {{--background: #0a292a;--}}
        {{--color: #e8efee;--}}
        {{--padding-top: 10px;--}}
    {{--}--}}

    {{--footer a {--}}
        {{--color: #aaa;--}}
    {{--}--}}

    {{--footer a:hover {--}}
        {{--color: #fff;--}}
    {{--}--}}

    {{--footer h3 {--}}
        {{--color: #e8efee;--}}
        {{--letter-spacing: 1px;--}}
        {{--margin: 30px 0 20px;--}}
    {{--}--}}

    {{--footer .three-column {--}}
        {{--overflow: hidden;--}}
    {{--}--}}

    {{--footer .three-column li{--}}
        {{--width: 33.3333%;--}}
        {{--float: left;--}}
        {{--padding: 5px 0;--}}
    {{--}--}}

    {{--footer .socila-list {--}}
        {{--overflow: hidden;--}}
        {{--margin: 20px 0 10px;--}}
    {{--}--}}

    {{--footer .socila-list li {--}}
        {{--float: left;--}}
        {{--margin-right: 3px;--}}
        {{--opacity: 0.7;--}}
        {{--overflow: hidden;--}}
        {{--border-radius: 50%;--}}
        {{--transition: all 0.3s ease-in-out;--}}
    {{--}--}}

    {{--footer .socila-list li:hover {--}}
        {{--opacity: 1;--}}
    {{--}--}}

    {{--footer .img-thumbnail {--}}
        {{--background: rgba(0, 0, 0, 0.2);--}}
        {{--border: 1px solid #444;--}}
        {{--margin-bottom: 5px;--}}
    {{--}--}}

    {{--footer .copyright {--}}
        {{--padding: 15px 0;--}}
        {{--background: #333;--}}
        {{--margin-top: 20px;--}}
        {{--font-size: 15px;--}}
    {{--}--}}

    {{--footer .copyright span {--}}
        {{--color: #0894d1;--}}
    {{--}--}}
{{--</style>--}}
{{--<footer>--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}

            {{--<div class="col-lg-4 col-md-6">--}}
                {{--<h3>Site Map</h3>--}}
                {{--<ul class="list-unstyled three-column">--}}
                    {{--<li>Home</li>--}}
                    {{--<li>Statistics</li>--}}
                    {{--<li>Company Data</li>--}}
                    {{--<li>Workforce Data</li>--}}
                    {{--<li>Skills Mismatch</li>--}}
                    {{--<li>Blog</li>--}}
                    {{--<li>About</li>--}}
                    {{--<li>Downloads</li>--}}
                {{--</ul>--}}
                {{--<ul class="list-unstyled socila-list">--}}
                    {{--<li><img style="width: 48px;height: 48px; object-fit: cover;" src="app-assets/images/footer/facebook.jpg" /></li>--}}
                    {{--<li><img style="width: 48px;height: 48px; object-fit: cover;" src="app-assets/images/footer/instagram.png" alt="" /></li>--}}
                    {{--<li><img style="width: 48px;height: 48px; object-fit: cover;" src="app-assets/images/footer/twitter.png" alt="" /></li>--}}
                    {{--<li><img style="width: 48px;height: 48px; object-fit: cover;" src="app-assets/images/footer/medium.png" alt="" /></li>--}}
                {{--</ul>--}}
            {{--</div>--}}

            {{--<div class="col-lg-4 col-md-6">--}}
                {{--<h3>latest Articles</h3>--}}
                {{--<div class="media">--}}
                    {{--<a href="#" class="pull-left">--}}
                        {{--<img src="http://placehold.it/64x64" alt="" class="media-object" />--}}
                    {{--</a>--}}
                    {{--<div class="media-body">--}}
                        {{--<h4 class="media-heading">Programming</h4>--}}
                        {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="media">--}}
                    {{--<a href="#" class="pull-left">--}}
                        {{--<img src="http://placehold.it/64x64" alt="" class="media-object" />--}}
                    {{--</a>--}}
                    {{--<div class="media-body">--}}
                        {{--<h4 class="media-heading">Coding</h4>--}}
                        {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="media">--}}
                    {{--<a href="#" class="pull-left">--}}
                        {{--<img src="http://placehold.it/64x64" alt="" class="media-object" />--}}
                    {{--</a>--}}
                    {{--<div class="media-body">--}}
                        {{--<h4 class="media-heading">Web Sesign</h4>--}}
                        {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>--}}
                    {{--</div>--}}
                {{--</div>--}}

            {{--</div>--}}

            {{--<div class="col-lg-4">--}}
                {{--<h3>Our Partners</h3>--}}
                {{--<img class="img-thumbnail" src="http://placehold.it/150x100" alt="" />--}}
                {{--<img class="img-thumbnail" src="http://placehold.it/150x100" alt="" />--}}
            {{--</div>--}}

        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="copyright text-center">--}}
        {{--Copyright &copy; {{ now()->year }} <span>Open Data Kosovo</span>--}}
    {{--</div>--}}
{{--</footer>--}}