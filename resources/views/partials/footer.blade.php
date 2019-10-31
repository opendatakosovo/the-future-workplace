<!-- BEGIN: Footer-->
<style>
    .copy-text{
        position: absolute;
        bottom: 0;
        left: 0;
        text-align: center;
        margin-left: 45%;
        font-size: 11px;
    }
</style>
<footer class="footer footer-static footer-light navbar-shadow">
    <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2" style="position: relative">
          <span class="float-md-left d-block footer-funded-text d-md-inline-block" style="font-size: 13px; text-align: left;float: right ">{{ Lang::get('translation.powered_by')}}
              <div class="funded-logos">
              <a href="https://millenniumkosovo.org/" target="_blank"><img src="/app-assets/css/about_us/img/clients/digdata.png" style="width: 70px; " alt=""></a>
              <a href="https://millenniumkosovo.org/" target="_blank"><img src="/app-assets/css/about_us/img/clients/MFK.png" style="width: 70px; padding-left: 0%;" alt=""></a>
                  <a href="https://www.mcc.gov/" target="_blank"><img src="/app-assets/css/about_us/img/clients/MCC.png" style="width: 130px; " alt=""></a>
            </div>
        </span>

        <span class="float-md-right d-block footer-funded-text d-md-inline-block" style="font-size: 13px; text-align: left;float: right ">{{Lang::get('translation.implemented_by')}}
            <div class="funded-logos">
               <a href="https://opendatakosovo.org" target="_blank"><img src="/app-assets/css/about_us/img/clients/ODK.png" style="margin-top:3%; width: 79px; padding-right: 14px" alt=""></a>
               <a href="https://www.oek-kcc.org/" target="_blank"><img src="/app-assets/css/about_us/img/clients/oek.svg" style="margin-top:0%; width: 70px; " alt=""></a>
            </div>
        </span>
        <span class="float-md-center copy-text d-block d-md-inline-block" style="margin-top: 1%;"><span class="copytirght-text">{{ now()->year }} &copy; Copyright </span></span>
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