@extends('layouts/main')
@section('title', 'Udherrefyesi')
@section('content')
    <style>

        #parag{
            max-height: 310px;
            overflow-x: auto;
            color: white !important;
            background: /* top, transparent #736363, faked with gradient */ linear-gradient( rgba(5, 5, 5, 0.45), rgba(12, 168, 175, 0.22) );
        }
        #parag::-webkit-scrollbar-track
        {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
            background-color: #F5F5F5;
            border-radius: 10px;
        }

        #parag::-webkit-scrollbar
        {
            width: 10px;
            background-color: #F5F5F5;
        }

        #parag::-webkit-scrollbar-thumb
        {
            background-color: #AAA;
            border-radius: 10px;
            background-image: -webkit-linear-gradient(90deg,
            rgba(0, 0, 0, .2) 25%,
            transparent 25%,
            transparent 50%,
            rgba(0, 0, 0, .2) 50%,
            rgba(0, 0, 0, .2) 75%,
            transparent 75%,
            transparent)
        }



        h2,h3,h4{
            color: white !important;
        }
    </style>
    <div class="content-header-left col-md-4 col-12 mb-2">
        <h3 class="content-header-title">Udherrefyesi</h3>
    </div>

    <div class="structure" ng-app="app" ng-controller="HomeController">

        <div class="preloaderimg">
            <img src="https://wallpaperscraft.com/image/tropics_sea_palm_trees_vacation_84858_2412x1810.jpg" alt="" style="display: none;" />
            <img src="http://extrawall.net/images/wallpapers/378_1920x1080_abstract_city.jpg" alt="" style="display: none;" />
            <img src="http://www.churchmilitant.com/images/uploads/2015-06-12-niles-x.jpg" alt="" style="display: none;"/>
        </div>

        <div class="timeline"></div>

        <div class="timeline">
            <div ng-repeat="date in dates track by $index" class="date date-@{{$index}}">
                <div class="goal_wrap goal_real_estate_@{{date |slugify }}" ng-show="goal_real_estate_@{{date |slugify }}">
                    <i class="fa fa-pencil" aria-hidden="true"></i>
                </div>
                <div class="goal_wrap goal_involve_@{{date |slugify }}" ng-show="goal_involve_@{{date | slugify }}">
                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                </div>
                <div class="goal_wrap goal_retirement" ng-show="goal_retirement_@{{date | slugify }}">
                    <i class="fa fa-pencil-square" aria-hidden="true"></i>
                </div>
                <p class="focus">
                    <a href="#">@{{date}}</a>
                </p>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 style="margin-right: 80%;width: 30%;" id="goal_title"></h1>
                    <div id="parag"></div>
                </div>
            </div>
        </div>
    </div>

    <script src="app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN Vendor JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.4/TweenMax.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.5/angular.min.js"></script>
    <!-- BEGIN: Page Vendor JS-->
    <script type="text/javascript" src="app-assets/vendors/js/ui/jquery.sticky.js"></script>
    <!--<script src="app-assets/vendors/js/timeline/horizontal-timeline.js" type="text/javascript"></script>-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js" type="text/javascript"></script>
    <script src="app-assets/js/core/app.js" type="text/javascript"></script>

    <script>
        var app = angular.module('app', []);

        app.controller('HomeController', function($scope) {

            $scope.goal_title = "Klasa e 10 te ";

            $scope.dates = [
                'Shkolla e mesme','Klasa 10te','Klasa 11te','Klasa 12te','Profesionale','Universitet','Viti i pare', 'Viti i dyte','Viti i trete',
            ];

            $scope.goal_real_estate = false;

            for (x in $scope.dates) {
                if($scope.dates[x]== 'Klasa 10te'){
                    $scope.goal_real_estate_klasa_10te = true;

                }else if($scope.dates[x]== 'Klasa 11te'){
                    $scope.goal_real_estate_klasa_11te = true;

                }else if($scope.dates[x]== 'Klasa 12te'){
                    $scope.goal_real_estate_klasa_12te = true;
                }else if($scope.dates[x]== 'Profesionale'){
                    $scope.goal_retirement_profesionale = true;
                }
                else if($scope.dates[x]== 'Viti i pare'){
                    $scope.goal_involve_viti_i_pare = true;
                }
                else if($scope.dates[x]== 'Viti i dyte'){
                    $scope.goal_involve_viti_i_dyte = true;
                }
                else if($scope.dates[x]== 'Viti i trete'){
                    $scope.goal_involve_viti_i_trete = true;
                }

            }

        });

        angular.module('app')
            .filter('slugify', function() {
                return function(input) {
                    input = input || '';

                    return input.replace(/ /g, '_').toLowerCase();
                }
            });
        $(document).ready(function(e) {
            var viewport =Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
            console.log(viewport);


            $('a').click(function(e){
                e.preventDefault()
            })

            $('.goal_wrap').click(function(){
                var diff = $(this).parent()[0].offsetLeft;
                $('.date .goal_wrap').removeClass('active bounce');
                $(this).addClass('active bounce');
                console.log(diff);
                console.log((viewport - diff));
                TweenLite.to($('.date').parent(), 1, {x:((viewport*0.5) - diff), onComplete:function(){
                        console.log('success');
                        /*TweenLite.to($('.timeline'), 1, {top:"50%"});*/
                    }});
            });

            $('.goal_real_estate_klasa_10te').click(function(){
                console.log('goal click');
                $('#goal_title').text('Klasa e 10-te')
                $('body').fadeTo('ease', 0.3, function()
                {
                    $(this).css('background-image', 'url(http://extrawall.net/images/wallpapers/378_1920x1080_abstract_city.jpg)');
                    $('#parag').text(' ');
                    $('#parag').append('<ol>\n' +
                        '                                        <li class="selected" data-date="1/01/2017">\n' +
                        '                                            \n' +
                        '                                            <h4 class=" mb-1">Gjimnazi i shkencave shoqërore dhe natyrore</h4><br>\n' +
                        '                                            <!-- <p class="lead"> -->\n' +
                        '\n' +
                        '                                            <h3>Excel</h3> <br>\n' +
                        '                                            <p>Kuptoni dhe ekzekutoni formula aritmetike në fletët e punës<br>\n' +
                        '                                            Përdorni spreadsheets për zgjidhjen e problemeve dhe llogaritjet\n' +
                        '                                            aritmetike<br>\n' +
                        '                                            Renditja dhe filtrimi i të dhënave<br>\n' +
                        '                                            Organizimi i të dhënave dhe manipulimi i tabelës<br><br>\n' +
                        '                                            </p>\n' +
                        '                                            <h3>Prezantimet në Powerpoint</h3><br>\n' +
                        '                                            <p>Kuptoni rrjedhjen vizuale, tematikat dhe stilin e krijimit të slide-ve<br>\n' +
                        '                                            Integro grafikat, tekstin dhe multimediat për prezantim efekt<br><br>\n' +
                        '                                            </p>\n' +
                        '                                            <h3>Multimedia</h3> <br>\n' +
                        '                                           <p> Përpunimi elementar i fotografisë<br>\n' +
                        '                                            Krijo sekuenca filmike të shkurtra për të ndihmuar prezantimin<br>\n' +
                        '                                            Siguria në internet Hyrje në konceptet dhe pasojat e internetit dhe sigurisë\n' +
                        '                                            kibernetike\n' +
                        '                                            </p>\n' +
                        '\n' +
                        '\n' +
                        '\n' +
                        '\n' +
                        '\n' +
                        '\n' +
                        '\n' +
                        '\n' +
                        '\n' +
                        '                                        </li> </ol>')
                }).fadeTo('slow', 1);

            });
            $('.goal_real_estate_klasa_11te').click(function(){
                console.log('goal click');
                $('#goal_title').text('Klasa e 11-te')

                $('body').fadeTo('ease', 0.3, function()
                {
                    $(this).css('background-image', 'url(http://extrawall.net/images/wallpapers/378_1920x1080_abstract_city.jpg)');
                    $('#parag').text(' ');
                    $('#parag').append('<ol>\n' +
                        '                                       <li data-date="1/01/2018" class="selected">\n' +
                        '                                          \n' +
                        '                                            <h3 class=" mb-1"><em>Gjimnazi i shkencave shoqërore dhe natyrore</em></h3><br>\n' +
                        '\n' +
                        '                                            <h3>Interneti si Makinë Kërkimore</h3><br>\n' +
                        '                                               <p> Shfrytëzojeni internetin si një Makinë kërkimore, ndërsa jeni të vetëdijshëm për besueshmërinë e informacionit<br>\n' +
                        '                                                Kuptoni elementet bazë të lidhjes në internet dhe komunikimit digjital<br>\n' +
                        '                                                Shkarkimi dhe ngarkimi i të dhënave në internet<br>\n' +
                        '                                                Konceptet dhe pasojat e viruseve të internetit dhe sigurisë<br><br>\n' +
                        '                                               </p>\n' +
                        '                                            <h3>Email-at dhe Komunikimi Elektronik</h3><br>\n' +
                        '                                              <p>  Hapat themelore për ekzekutimin e komunikimit elektronik<br>\n' +
                        '                                                Organizimi dhe menaxhimi i informacionit në email<br><br>\n' +
                        '                                            </p>\n' +
                        '                                            <h3>Procesimi i të dhënave</h3><br>\n' +
                        '                                               <p> Ndërtimi, ruajtja dhe analizimi i një baze të dhënash<br>\n' +
                        '                                                Ndërtimi dhe analiza e tabelave<br>\n' +
                        '                                                Krijo lidhje në mes të tabelave<br>\n' +
                        '                                                Rendisni dhe filtroni pikat e të dhënave<br>\n' +
                        '                                                Kuptoni rolin e variablave në tabela<br><br>\n' +
                        '                                            </p>\n' +
                        '                                            <h3>Blerjet Online</h3><br>\n' +
                        '                                                <p>Hapat e blerjes në internet dhe bashkëveprimi me e-tregtinë</p>\n' +
                        '\n' +
                        '\n' +
                        '\n' +
                        '                                        </li> </ol>')
                }).fadeTo('slow', 1);

            });
            $('.goal_real_estate_klasa_12te').click(function(){
                console.log('goal click');
                $('#goal_title').text('Klasa e 12-te')
                $('body').fadeTo('ease', 0.3, function()
                {
                    $(this).css('background-image', 'url(http://extrawall.net/images/wallpapers/378_1920x1080_abstract_city.jpg)');
                    $('#parag').text(' ');
                    $('#parag').append('<ol><li data-date="1/01/2019" class="selected">\n' +
                        '                                          \n' +
                        '                                            <h3 class=" mb-1"><em>Gjimnazi i shkencave shoqërore dhe natyrore</em></h3><br>\n' +
                        '\n' +
                        '                                            <h3>Hardueri i Kompjuterit</h3><br>\n' +
                        '                                              <p>  Montoni dhe instaloni harduer kompjuterik duke përfshirë printera, skanera dhe hard disk të jashtëm<br>\n' +
                        '                                                Test / konfiguro harduerin përmes softuerit<br>\n' +
                        '                                                Instaloni, konfiguroni dhe menaxhoni sistemet operative<br><br>\n' +
                        '                                              </p>\n' +
                        '                                            <h3>Rrjetat Kompjuterike</h3><br>\n' +
                        '                                               <p> Kuptoni se si kompjuterët lidhen me rrjetet<br>\n' +
                        '                                                Kuptoni dallimet midis LAN dhe WAN<br>\n' +
                        '                                                Konfiguro pajisjet për t\'u lidhur me LAN dhe WAN<br>\n' +
                        '                                                Kuptoni konceptet dhe pasojat e sigurisë së rrjetit<br><br>\n' +
                        '                                               </p>\n' +
                        '                                            <h3>Programimi në Java</h3><br>\n' +
                        '                                           <p> Instaloni dhe ekzekutoni Java-n<br>\n' +
                        '                                            Krijoni projekte të reja dhe përpiloni klasa dhe objekte<br>\n' +
                        '                                            Identifikon dhe rregullon gabimet<br>\n' +
                        '                                            Planifikoni, zhvilloni, zbatoni dhe vlerësoni një aplikim të vetë-krijuar\n' +
                        '                                           </p>\n' +
                        '\n' +
                        '\n' +
                        '                                        </li></ol>')
                }).fadeTo('slow', 1);

            });

            $('.goal_retirement').click(function(){
                console.log('goal click');
                $('#goal_title').text('Shkolla Profesionale')
                $('body').fadeTo('ease', 0.3, function()
                {
                    $(this).css('background-image', 'url(https://teenlife.s3.amazonaws.com/media/uploads/blogs/7-study-tips-high-school-students/iStock-495718767.jpg)');
                    $('#parag').text(' ');
                    $('#parag').append('<ol><li data-date="1/01/2020" class="selected">\n' +
                        '                                            \n' +
                        '                                            <h4 class=" mb-1"><em>Profilet</em></h4><br><br>\n' +
                        '                                           <h4>Lëmi natyror - Matematikor</h4><br><br>\n' +
                        '                                            <h4>Lëmi i Elektroteknikes</h4><br><br>\n' +
                        '                                            <h4>Lëmi i Teknologjisë Informatikës</h4>\n' +
                        '                                        </li></ol>')
                }).fadeTo('slow', 1);

            });

            $('.goal_involve_viti_i_pare').click(function(){
                console.log('goal click');
                $('#goal_title').text('Viti i pare')
                $('body').fadeTo('ease', 0.3, function()
                {
                    $(this).css('background-image', 'url(https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RE285rD?ver=8d4f&q=90&m=6&h=600&w=1200&b=%23FFFFFFFF&f=jpg&o=f&aim=true)');
                    $('#parag').text(' ');
                    $('#parag').append('<ol><li data-date="1/01/2021" class="selected">\n' +
                        '                                         \n' +
                        '                                            <h3 class=" mb-1"><em>Shkencat Kompjuterike</em></h3><br>\n' +
                        '\n' +
                        '                                              <p>  Hyrje në programim<br>\n' +
                        '                                                Matematika 1,2<br>\n' +
                        '                                                Bazat e Elektronikës / Inxhinierisë Elektronike<br>\n' +
                        '                                                Arkitektura dhe Organizimi i Kompjuterit<br>\n' +
                        '                                                Algoritmet<br>\n' +
                        '                                                Qarqet dixhitale<br>\n' +
                        '                                            </p>\n' +
                        '                                        </li></ol>')
                }).fadeTo('slow', 1);

            });
            $('.goal_involve_viti_i_dyte').click(function(){
                console.log('goal click');
                $('#goal_title').text('Viti i dyte')
                $('body').fadeTo('ease', 0.3, function()
                {
                    $(this).css('background-image', 'url(https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RE285rD?ver=8d4f&q=90&m=6&h=600&w=1200&b=%23FFFFFFFF&f=jpg&o=f&aim=true)');
                    $('#parag').text(' ');
                    $('#parag').append('<ol><li data-date="1/01/2022" class="selected">\n' +
                        '                                           \n' +
                        '                                            <h3 class=" mb-1"><em>Shkencat Kompjuterike</em></h3><br>\n' +
                        '\n' +
                        '                                               <p> Sistemet operative<br>\n' +
                        '                                                Sistemet e të dhënave<br>\n' +
                        '                                                Programim i orientuar nga objekti<br>\n' +
                        '                                                Inxhinieria e softuerit<br>\n' +
                        '                                                Rrjetat kompjuterike dhe komunikimi<br>\n' +
                        '                                                Inxhinieri e Web-it<br>\n' +
                        '\n' +
                        '\n' +
                        '                                            </p>\n' +
                        '                                        </li></ol>')
                }).fadeTo('slow', 1);

            });
            $('.goal_involve_viti_i_trete').click(function(){
                console.log('goal click');
                $('#goal_title').text('Viti i trete')
                $('body').fadeTo('ease', 0.3, function()
                {
                    $(this).css('background-image', 'url(https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RE285rD?ver=8d4f&q=90&m=6&h=600&w=1200&b=%23FFFFFFFF&f=jpg&o=f&aim=true)');
                    $('#parag').text(' ');
                    $('#parag').append('<ol><li data-date="1/01/2023" class="selected">\n' +
                        '                                            \n' +
                        '                                            <h3 class=" mb-1"><em>Shkencat Kompjuterike (kurset kryesore)</em></h3><br>\n' +
                        '                                            <h3> Inxhinierët e softuerit</h3><br><br>\n' +
                        '\n' +
                        '                                           <p> Dizajnimi dhe Zbatimi i Softuerit<br>\n' +
                        '                                            Inxhinieria e sistemeve softuerike<br>\n' +
                        '                                            Arkitektura e Softuerit<br>\n' +
                        '                                            Testimi dhe mirëmbajtja e softuerit<br><br>\n' +
                        '                                           </p>\n' +
                        '                                            <h3> Robotikë dhe Mekatronikë</h3><br><br>\n' +
                        '                                            <p> Mikrokontrollerët<br>\n' +
                        '                                            Elektronikë<br>\n' +
                        '                                            Rrobotikë<br>\n' +
                        '                                            Automatizimi i procesit<br>\n' +
                        '                                            Sisteme mekatronike<br><br>\n' +
                        '                                            </p>\n' +
                        '                                            <h3>TIT</h3><br><br>\n' +
                        '                                            <p> Bazat e Telekomunikacionit<br>\n' +
                        '                                            Komunikimet Mobile<br>\n' +
                        '                                            Menaxhimi i Rrjetit dhe Siguria<br>\n' +
                        '                                            Rrjetet Wireless në Internet<br>\n' +
                        '                                            Sensorë dhe ndërfaqe<br>\n' +
                        '\n' +
                        '                                            </p>\n' +
                        '\n' +
                        '\n' +
                        '\n' +
                        '\n' +
                        '                                        </li></ol>')
                }).fadeTo('slow', 1);

            });

        });


    </script>

@endsection