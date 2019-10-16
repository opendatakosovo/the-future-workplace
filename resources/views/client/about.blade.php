<?php
?>
@section('title', 'About')
@extends('layouts/main')
{{--<link href="/app-assets/css/about_us/font-awesome/css/font-awesome.min.css" rel="stylesheet">--}}
{{--<link href="/app-assets/css/about_us/animate/animate.min.css" rel="stylesheet">--}}
{{--<link href="/app-assets/css/about_us/ionicons/css/ionicons.min.css" rel="stylesheet">--}}
{{--<link href="/app-assets/css/about_us/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">--}}
{{--<link href="/app-assets/css/about_us/lightbox/css/lightbox.min.css" rel="stylesheet">--}}
<link href="/app-assets/css/about_us/css/style.css" rel="stylesheet">
@section('content')
    <main id="main" style="width: 100%; margin-top: 2%">

        <section id="about">
            <div class="container">

                <header class="section-header">
                    <h3>About</h3> <br><br>

                </header>

                <center>The Future Workplace is a data-driven digital tool developed to declutter the ICT market in Kosovo.
                    It has everything. What ICT students are learning in high school and university, how many ICT
                    graduates are there, ,what activities are ICT businesses engaged in, how much do ICT businesses
                    earn, what ICT skills are being demanded, and much, much more.</center> <br><br>
                <center>The Future Workplace provides an overall basis for understanding of the ICT market (supply and demand
                    side), insights on how the education system should be modified to match the market demand, and a
                    great pathway to explore the human capacities in Kosovo.</center>
            </div>
        </section><!-- #about -->
        <div class="card-columns">
            <div class="card">
                <img src="https://www.telegraph.co.uk/content/dam/opinion/2019/08/04/TELEMMGLPICT000003366104_trans_NvBQzQNjv4BqpVlberWd9EgFPZtcLiMQfyf2A9a6I9YchsjMeADBa08.jpeg?imwidth=450"
                     class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title that wraps to a new line</h5>
                    <p class="card-text">It is a long established fact that a reader will be distracted by the readable
                        content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                        more-or-less normal distribution of letters, as opposed to using 'Content here, content here',
                        making it look like readable English.</p>
                </div>
            </div>
            <div class="card p-3">
                <blockquote class="blockquote mb-0 card-body">
                    <h3>Ministry of Education, Science and Technology </h3><br>
                    <p>The Ministry has provided us with crucial data about the number of ICT graduates, curricula of
                        ICT education, amongst others.</p>
                    <footer class="blockquote-footer">
                        <small class="text-muted">
                            Someone famous in <cite title="Source Title">Source Title</cite>
                        </small>
                    </footer>
                </blockquote>
            </div>
            <div class="card">
                <img src="https://cdn.hipwallpaper.com/i/33/24/eTatqO.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a type specimen book</p>
                    <p class="card-text">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </p>
                </div>
            </div>
            <div class="card bg-primary text-white text-center p-3"
                 style="background-color: mediumseagreen !important;">
                <blockquote class="blockquote mb-0">
                    <h3>LET’S TALK DATA</h3> <br>
                    <p>The Future Workplace is wholly based on the data provided by the institutions we collaborated
                        during the project, for whom we are very grateful for.</p>
                    <footer class="blockquote-footer text-white">
                        <small>
                            Someone famous in <cite title="Source Title">Source Title</cite>
                        </small>
                    </footer>
                </blockquote>
            </div>
            <div class="card text-center">
                <div class="card-body">
                    <h3>BUSINESSES</h3><br>
                    <p class="card-text">XX ICT businesses in Kosovo have responded to a questionnaire in regards to the
                        skills required for the ICT workplace.</p>
                    <p class="card-text">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </p>
                </div>
            </div>
            <div class="card">
                <img src="https://s3.treasury.qld.gov.au/files/Programs-and-Policies-Business-Development-Fund-1.jpg"
                     class="card-img-top" alt="...">
            </div>
            <div class="card p-3 text-right">
                <blockquote class="blockquote mb-0">
                    <h3>Ministry of Trade and Industry</h3><br>
                    <p>The Ministry has provided us with crucial data about ICT businesses in Kosovo through the Open
                        Businesses platform. </p>
                    <footer class="blockquote-footer">
                        <small class="text-muted">
                            Someone famous in <cite title="Source Title">Source Title</cite>
                        </small>
                    </footer>
                </blockquote>
            </div>
            <div class="card">
                <div class="card-body">
                    <h3>Tax Administration of Kosovo</h3><br>
                    <p class="card-text">
                        The agency has provided us with crucial data about the earning of ICT businesses, number of
                        people employed in such businesses, amongst others.</p>
                    <p class="card-text">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </p>
                </div>
            </div>
        </div>

        <div class="card border-success mb-3 text-center" style="margin-top:57px;">
            <div class="card-body">
                <blockquote class="card-blockquote">
                    <h3>PLAY WITH THE DATA</h3><br>
                    <strong>
                        We know that the charts look all fancy and stuff, but you are more than welcome to play with the
                        data.</strong><br><br>

                    <ul style="list-style-type: square; list-style-position: inside;">
                        <li>Use the various filters at the charts to compare data from one category to the other</li>
                        <li>When you filter the data, you can download the result as picture by clicking on the three
                            bars on the right-upper corner of the chart
                        </li>
                        <li>You can download the datasets since we believe that such data should be open and easily
                            re-used for other purposes
                        </li>
                    </ul>
                </blockquote>
            </div>
        </div>
        <div class="card bg-primary text-white text-center p-3"
             style="background-color: mediumseagreen !important;border: 1.5px solid; margin-top: 70px;">
            <blockquote class="blockquote mb-0">
                <h3>TWF</h3> <br>
                <p>This platform has been developed by the amazing Open Data Kosovo team which at first struggled to get
                    all the data fit in a few charts, but managed to deliver this platform in a user-friendly and
                    innovative manner.</p><br>
                <p>This has been made possible by the help of the great partner Kosovo Chamber of Commerce.</p><br>
                <i>Feel free to contact us for anything at info@opendatakosovo.org or info@oek-kcc.org</i>
            </blockquote>
        </div>

        <section id="clients" class="wow fadeInUp">
            <div class="container">
                <header class="section-header">
                    <h3>Funded By</h3>
                </header>
                <img src="/app-assets/css/about_us/img/clients/mcc.svg" style="width: 150px; margin-left: 32%;" alt="">
                <img src="/app-assets/css/about_us/img/clients/mcc-gov.svg"
                     style="width: 313px;margin-left: 5%; margin-top: 22px;" alt="">
            </div>
        </section><!-- #clients -->
        <hr style="width: 70%">
        <section id="clients" class="wow fadeInUp">
            <div class="container">
                <header class="section-header">
                    <h3>Our Partner</h3>
                </header>
                {{--<img src="app-assets/css/about_us/img/clients/mcc.svg" style="width: 150px; margin-left: 35%;" alt="">--}}
                <img class="center" src="/app-assets/css/about_us/img/clients/oek.svg"
                     style="width: 213px; display: block; margin-left: auto; margin-right: auto;" alt="">
            </div>
        </section><!-- #clients -->

    </main>


{{--    <!-- JavaScript Libraries -->--}}
{{--    <script src="/app-assets/css/about_us/jquery/jquery.min.js"></script>--}}
{{--    <script src="/app-assets/css/about_us/superfish/hoverIntent.js"></script>--}}
{{--    <script src="/app-assets/css/about_us/superfish/superfish.min.js"></script>--}}
{{--    <script src="/app-assets/css/about_us/wow/wow.min.js"></script>--}}
{{--    <script src="/app-assets/css/about_us/waypoints/waypoints.min.js"></script>--}}
{{--    <script src="/app-assets/css/about_us/counterup/counterup.min.js"></script>--}}
{{--    <script src="/app-assets/css/about_us/owlcarousel/owl.carousel.min.js"></script>--}}
{{--    <script src="/app-assets/css/about_us/isotope/isotope.pkgd.min.js"></script>--}}
{{--    <script src="/app-assets/css/about_us/lightbox/js/lightbox.min.js"></script>--}}
{{--    <script src="/app-assets/css/about_us/touchSwipe/jquery.touchSwipe.min.js"></script>--}}

{{--    <!-- Template Main Javascript File -->--}}
{{--    <script src="/app-assets/css/about_us/js/main.js"></script>--}}


@endsection