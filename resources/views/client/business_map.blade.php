@extends('layouts/main')
@section('title', 'Harta e Bizneseve')
@section('content')
    <script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>

    <div class="content-header-left col-md-6 col-12 mb-2">
        <h3 class="content-header-title">Harta e Institucioneve Arsimore</h3>
    </div>
    <div class="content-body">
        <!-- Revenue, Hit Rate & Deals -->
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-12">
                <div class="card" >
                    <div class="card-header">
                        <h4 class="card-title">Numri i kompanive të TIK sipas Komunave</h4>
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

                            <div id="chartContainer2" style="width:100%; height:300px;"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4">
                <div class="card" style="    height: 97%;">
                    <div class="card-header">
                        <h4 class="card-title">Harta e Bizneseve</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    </div>

                    <div class="card-content collapse show">
                        <div class="card-body p-0 pb-0">
                            <p class="card-body">
                                Me poshte eshte paraqitur harta e Kosoves me shumicen e komunave ku ne to paraqitet
                                numri i bizneseve te regjistruara ne sektorin e TIK-ut.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-12">
                        <div class="card" style="height: auto;">
                            <iframe src="https://datawrapper.dwcdn.net/C0Dcf/3/" scrolling="yes" class="center"
                                    style="margin-left:6px; margin-right:6px;" height="500px" name="myiFrame"
                                    frameborder="0" marginheight="0px"
                                    style="width:0; min-width:100%!important; border:none;"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            {{--<div class="col-xl-4 col-lg-6 col-md-12">--}}
                {{--<div class="card" style="height: 96%">--}}
                    {{--<div class="card-header">--}}
                        {{--<h4 class="card-title">Filtrimi</h4>--}}
                        {{--<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>--}}
                    {{--</div>--}}

                    {{--<div class="card-content collapse show">--}}
                        {{--<div class="card-body p-0 pb-0">--}}
                            {{--<p class="card-body">--}}
                                {{--Më poshtë hartës, përdoruesit mund të shikojnë grafikët duke përfshirë shkollimin,--}}
                                {{--numrin e programeve dhe kurseve të ofruara nga TIK dhe pabarazinë gjinore në--}}
                                {{--regjistrim. Përdoruesit mund t'i krahasojnë universitetet duke zgjedhur ato përmes--}}
                                {{--një filtri--}}
                            {{--</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-xl-9 col-lg-12">--}}
                        {{--<div class="card" style="height: 240px; overflow-y: auto">--}}
                            {{--<div class="custom-control custom-checkbox">--}}
                                {{--<input type="checkbox" class="custom-control-input" id="customCheck1" checked>--}}
                                {{--<label class="custom-control-label" for="customCheck1">Zgjidh të gjitha</label>--}}
                            {{--</div>--}}
                            {{--<div class="custom-control custom-checkbox">--}}
                                {{--<input type="checkbox" class="custom-control-input" id="customCheck2">--}}
                                {{--<label class="custom-control-label" for="customCheck1">Dragash</label>--}}
                            {{--</div>--}}
                            {{--<div class="custom-control custom-checkbox">--}}
                                {{--<input type="checkbox" class="custom-control-input" id="customCheck3">--}}
                                {{--<label class="custom-control-label" for="customCheck1">Elez Han</label>--}}
                            {{--</div>--}}
                            {{--<div class="custom-control custom-checkbox">--}}
                                {{--<input type="checkbox" class="custom-control-input" id="customCheck4">--}}
                                {{--<label class="custom-control-label" for="customCheck1">Ferizaj</label>--}}
                            {{--</div>--}}
                            {{--<div class="custom-control custom-checkbox">--}}
                                {{--<input type="checkbox" class="custom-control-input" id="customCheck5">--}}
                                {{--<label class="custom-control-label" for="customCheck1">Gjakova</label>--}}
                            {{--</div>--}}
                            {{--<div class="custom-control custom-checkbox">--}}
                                {{--<input type="checkbox" class="custom-control-input" id="customCheck6">--}}
                                {{--<label class="custom-control-label" for="customCheck1">Gjilan"</label>--}}
                            {{--</div>--}}
                            {{--<div class="custom-control custom-checkbox">--}}
                                {{--<input type="checkbox" class="custom-control-input" id="customCheck6">--}}
                                {{--<label class="custom-control-label" for="customCheck1">Gllogovc</label>--}}
                            {{--</div>--}}
                            {{--<div class="custom-control custom-checkbox">--}}
                                {{--<input type="checkbox" class="custom-control-input" id="customCheck6">--}}
                                {{--<label class="custom-control-label" for="customCheck1">Gracanica"</label>--}}
                            {{--</div>--}}
                            {{--<div class="custom-control custom-checkbox">--}}
                                {{--<input type="checkbox" class="custom-control-input" id="customCheck6">--}}
                                {{--<label class="custom-control-label" for="customCheck1">Istog </label>--}}
                            {{--</div>--}}
                            {{--<div class="custom-control custom-checkbox">--}}
                                {{--<input type="checkbox" class="custom-control-input" id="customCheck6">--}}
                                {{--<label class="custom-control-label" for="customCheck1">Junik</label>--}}
                            {{--</div>--}}
                            {{--<div class="custom-control custom-checkbox">--}}
                                {{--<input type="checkbox" class="custom-control-input" id="customCheck6">--}}
                                {{--<label class="custom-control-label" for="customCheck1">Kamenicë </label>--}}
                            {{--</div>--}}
                            {{--<div class="custom-control custom-checkbox">--}}
                                {{--<input type="checkbox" class="custom-control-input" id="customCheck6">--}}
                                {{--<label class="custom-control-label" for="customCheck1">Kacanik</label>--}}
                            {{--</div>--}}
                            {{--<div class="custom-control custom-checkbox">--}}
                                {{--<input type="checkbox" class="custom-control-input" id="customCheck6">--}}
                                {{--<label class="custom-control-label" for="customCheck1">Klinë--}}
                                {{--</label>--}}
                            {{--</div>--}}
                            {{--<div class="custom-control custom-checkbox">--}}
                                {{--<input type="checkbox" class="custom-control-input" id="customCheck6">--}}
                                {{--<label class="custom-control-label" for="customCheck1">Kllokot--}}
                                {{--</label>--}}
                            {{--</div>--}}
                            {{--<div class="custom-control custom-checkbox">--}}
                                {{--<input type="checkbox" class="custom-control-input" id="customCheck6">--}}
                                {{--<label class="custom-control-label" for="customCheck1">Fushë Kosovë--}}
                                {{--</label>--}}
                            {{--</div>--}}
                            {{--<div class="custom-control custom-checkbox">--}}
                                {{--<input type="checkbox" class="custom-control-input" id="customCheck6">--}}
                                {{--<label class="custom-control-label" for="customCheck1">Leposavic--}}
                                {{--</label>--}}
                            {{--</div>--}}
                            {{--<div class="custom-control custom-checkbox">--}}
                                {{--<input type="checkbox" class="custom-control-input" id="customCheck6">--}}
                                {{--<label class="custom-control-label" for="customCheck1">Lipjan--}}
                                {{--</label>--}}
                            {{--</div>--}}
                            {{--<div class="custom-control custom-checkbox">--}}
                                {{--<input type="checkbox" class="custom-control-input" id="customCheck6">--}}
                                {{--<label class="custom-control-label" for="customCheck1">Malishevë--}}
                                {{--</label>--}}
                            {{--</div>--}}
                            {{--<div class="custom-control custom-checkbox">--}}
                                {{--<input type="checkbox" class="custom-control-input" id="customCheck6">--}}
                                {{--<label class="custom-control-label" for="customCheck1">Mamushë--}}
                                {{--</label>--}}
                            {{--</div>--}}
                            {{--<div class="custom-control custom-checkbox">--}}
                                {{--<input type="checkbox" class="custom-control-input" id="customCheck6">--}}
                                {{--<label class="custom-control-label" for="customCheck1">Mitrovicë--}}
                                {{--</label>--}}
                            {{--</div>--}}
                            {{--<div class="custom-control custom-checkbox">--}}
                                {{--<input type="checkbox" class="custom-control-input" id="customCheck6">--}}
                                {{--<label class="custom-control-label" for="customCheck1">Mitrovica Veriore--}}
                                {{--</label>--}}
                            {{--</div>--}}
                            {{--<div class="custom-control custom-checkbox">--}}
                                {{--<input type="checkbox" class="custom-control-input" id="customCheck6">--}}
                                {{--<label class="custom-control-label" for="customCheck1">Novobërdë--}}
                                {{--</label>--}}
                            {{--</div>--}}
                            {{--<div class="custom-control custom-checkbox">--}}
                                {{--<input type="checkbox" class="custom-control-input" id="customCheck6">--}}
                                {{--<label class="custom-control-label" for="customCheck1">Obilic--}}
                                {{--</label>--}}
                            {{--</div>--}}
                            {{--<div class="custom-control custom-checkbox">--}}
                                {{--<input type="checkbox" class="custom-control-input" id="customCheck6">--}}
                                {{--<label class="custom-control-label" for="customCheck1">Rahovec--}}
                                {{--</label>--}}
                            {{--</div>--}}
                            {{--<div class="custom-control custom-checkbox">--}}
                                {{--<input type="checkbox" class="custom-control-input" id="customCheck6">--}}
                                {{--<label class="custom-control-label" for="customCheck1">Pejë--}}
                                {{--</label>--}}
                            {{--</div>--}}
                            {{--<div class="custom-control custom-checkbox">--}}
                                {{--<input type="checkbox" class="custom-control-input" id="customCheck6">--}}
                                {{--<label class="custom-control-label" for="customCheck1">Podujevë--}}
                                {{--</label>--}}
                            {{--</div>--}}
                            {{--<div class="custom-control custom-checkbox">--}}
                                {{--<input type="checkbox" class="custom-control-input" id="customCheck6">--}}
                                {{--<label class="custom-control-label" for="customCheck1">Prishtinë--}}
                                {{--</label>--}}
                            {{--</div>--}}
                            {{--<div class="custom-control custom-checkbox">--}}
                                {{--<input type="checkbox" class="custom-control-input" id="customCheck6">--}}
                                {{--<label class="custom-control-label" for="customCheck1">Prizren--}}
                                {{--</label>--}}
                            {{--</div>--}}
                            {{--<div class="custom-control custom-checkbox">--}}
                                {{--<input type="checkbox" class="custom-control-input" id="customCheck6">--}}
                                {{--<label class="custom-control-label" for="customCheck1">Ranillug--}}
                                {{--</label>--}}
                            {{--</div>--}}
                            {{--<div class="custom-control custom-checkbox">--}}
                                {{--<input type="checkbox" class="custom-control-input" id="customCheck6">--}}
                                {{--<label class="custom-control-label" for="customCheck1">Skënderaj--}}
                                {{--</label>--}}
                            {{--</div>--}}
                            {{--<div class="custom-control custom-checkbox">--}}
                                {{--<input type="checkbox" class="custom-control-input" id="customCheck6">--}}
                                {{--<label class="custom-control-label" for="customCheck1">Suharekë--}}
                                {{--</label>--}}
                            {{--</div>--}}
                            {{--<div class="custom-control custom-checkbox">--}}
                                {{--<input type="checkbox" class="custom-control-input" id="customCheck6">--}}
                                {{--<label class="custom-control-label" for="customCheck1">Viti--}}
                                {{--</label>--}}
                            {{--</div>--}}
                            {{--<div class="custom-control custom-checkbox">--}}
                                {{--<input type="checkbox" class="custom-control-input" id="customCheck6">--}}
                                {{--<label class="custom-control-label" for="customCheck1">Vushtrri--}}
                                {{--</label>--}}
                            {{--</div>--}}
                            {{--<div class="custom-control custom-checkbox">--}}
                                {{--<input type="checkbox" class="custom-control-input" id="customCheck6">--}}
                                {{--<label class="custom-control-label" for="customCheck1">Zhubin Potok--}}
                                {{--</label>--}}
                            {{--</div>--}}
                            {{--<div class="custom-control custom-checkbox">--}}
                                {{--<input type="checkbox" class="custom-control-input" id="customCheck6">--}}
                                {{--<label class="custom-control-label" for="customCheck1">Zvecan--}}
                                {{--</label>--}}
                            {{--</div>--}}
                            {{--<div class="custom-control custom-checkbox">--}}
                                {{--<input type="checkbox" class="custom-control-input" id="customCheck6">--}}
                                {{--<label class="custom-control-label" for="customCheck1">Shtime--}}
                                {{--</label>--}}
                            {{--</div>--}}
                            {{--<div class="custom-control custom-checkbox">--}}
                                {{--<input type="checkbox" class="custom-control-input" id="customCheck6">--}}
                                {{--<label class="custom-control-label" for="customCheck1">Shtërpcë--}}
                                {{--</label>--}}
                            {{--</div>--}}


                            {{--<!--<iframe src="https://datawrapper.dwcdn.net/lkglR/1/" scrolling="yes" style="margin-left:6px; margin-right:6px;" height="500px" name="myiFrame" frameborder="0" marginheight="0px" style="width:0; min-width:100%!important; border:none;" ></iframe>-->--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            <div class="col-lg-12 col-md-12">
                <div class="card" >
                    <div class="card-header">
                        <h4 class="card-title">Ndarja e Kompanive TIK sipas Komunës</h4>
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
                            <div id="chartContainer" style="width:100%; height:300px;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="card" style="height: 505px;">
                    <div class="card-header">
                        <h4 class="card-title">Krahasimi i kompanive TIK sipas Komunave</h4>
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

                            <div id="chartContainer3" style="width:100%; height:300px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
    </div>
    <!-- BEGIN: Page JS-->

    <script src="{{URL::asset('/app-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>

    <script src="{{URL::asset('/app-assets/js/scripts/charts/chartist/bar/vertical-bar.js')}}"
            type="text/javascript"></script>
    <script src="{{URL::asset('/app-assets/js/scripts/charts/chartist/bar/stacked-bar.js')}}"
            type="text/javascript"></script>
    <script src="{{URL::asset('/app-assets/js/scripts/charts/chartist/line/area.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('/app-assets/js/scripts/charts/chartist/line/line.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('/app-assets/js/scripts/charts/chartist/pie/pie.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('/app-assets/js/scripts/charts/chartist/pie/donut.js')}}" type="text/javascript"></script>

    <script src="https://cdn.jsdelivr.net/npm/apexcharts" type="text/javascript"></script>


    <script>
        var municipalities = [];
        var data_sets = [];
        $.ajax({
            type: "GET",
            url: "get_business_data", // Using our resources.json file to serve results
            success: function (result) {
                var municipalities = [];
                var data_sets = [];
                data = JSON.parse(result);

                $.each(data[0], function (key, value) {
                    municipalities.push(value);
                });

                $.each(data[1], function (key, value) {
                    data_sets.push(value);
                });


                console.log(data_sets);
                var options1 = {
                    chart: {
                        height: 750,
                        type: 'bar',
                        stacked: true,
                        stackType: '100%',
                        width: '100%'
                    },
                    plotOptions: {
                        bar: {
                            horizontal: false,
                        },

                    },
                    stroke: {
                        width: 1,
                        colors: ['#fff']
                    },
                    series:
                        data_sets
                    ,   title: {
                        text: '100% Stacked Bar'
                    },
                    xaxis: {
                        categories: municipalities,
                    },

                    tooltip: {
                        y: {
                            formatter: function (val) {
                                return val
                            }
                        }
                    },
                    fill: {
                        opacity: 1

                    },

                    legend: {
                        position: 'top',
                        horizontalAlign: 'left',
                        offsetX: 40
                    }
                }
                var options2 = {
                    chart: {
                        height: 600,
                        type: 'bar',
                        stacked: true,
                    },
                    plotOptions: {
                        bar: {
                            horizontal: false,
                        },

                    },
                    stroke: {
                        width: 0.1,
                        colors: ['#fff']
                    },
                    series:
                        [{"name":"Publishing of computer games","data":[1,0,6,3,2,9,9,1,0,0,5,0,0,1,2,0,13,0,0,4,3,155,7,0,4,0,1,2,0,0,0,0]},{"name":"Computer programming activities","data":[8,1,46,28,19,40,13,1,20,0,3,7,2,7,12,4,61,0,1,43,13,757,58,2,5,1,7,12,8,3,0,4]},{"name":"Computer consultancy activities","data":[8,0,75,49,40,65,26,2,31,0,6,10,7,10,30,2,80,2,7,76,21,1346,87,18,9,6,4,21,8,10,1,7]},{"name":"Computer facilities management activities","data":[1,1,26,17,9,27,12,1,17,0,3,7,1,9,6,4,43,1,2,29,8,479,31,3,5,0,6,9,4,6,0,8]},{"name":"Information technology and computer service","data":[7,3,92,61,45,79,27,2,29,0,25,10,11,21,42,10,95,4,6,85,22,1431,115,23,6,7,9,34,14,19,2,9]},{"name":"Wired telecommunications activities","data":[18,29,112,82,76,115,18,5,33,0,35,22,20,9,87,19,139,3,14,93,40,1213,179,21,11,5,26,33,41,63,5,12]},{"name":"Wireless telecommunication activities","data":[0,2,16,17,7,18,6,2,9,0,1,5,0,8,8,7,43,2,5,20,16,271,36,7,3,0,6,4,9,5,1,8]},{"name":"Satellite telecommunication activities","data":[0,0,3,6,3,7,2,0,4,0,0,4,0,4,2,3,28,2,1,14,8,166,36,2,3,0,3,0,0,1,0,7]},{"name":"Other telecommunication activities","data":[0,1,30,26,8,32,9,2,6,0,8,6,3,11,12,8,50,1,7,26,16,451,61,6,9,1,6,7,8,10,0,8]},{"name":"Other software publishing","data":[11,1,79,47,40,61,22,0,24,0,9,8,7,5,35,4,68,3,3,59,19,1321,105,17,10,9,1,29,11,16,1,2]},{"name":"Data processing hosting and related activities","data":[7,2,62,47,33,68,23,1,18,0,6,9,5,6,26,4,67,4,5,65,21,1435,111,12,10,5,3,26,13,20,1,8]}],   title: {
                        text: '100% Stacked Bar'
                    },
                    xaxis: {
                        categories: municipalities,
                    },

                    tooltip: {
                        y: {
                            formatter: function (val) {
                                return val
                            }
                        }
                    },
                    fill: {
                        opacity: 1

                    },

                    legend: {
                        position: 'top',
                        horizontalAlign: 'left',
                        offsetX: 40
                    }
                }

                var options = {
                    chart: {
                        height: 430,
                        type: 'bar',
                    },
                    plotOptions: {
                        bar: {
                            horizontal: false,
                            dataLabels: {
                                position: 'top',
                            },
                        }
                    },
                    dataLabels: {
                        enabled: true,
                        offsetX: 10,
                        style: {
                            fontSize: '12px',
                            colors: ['#fff']
                        }
                    },
                    stroke: {
                        show: true,
                        width: 1,
                        colors: ['#fff']
                    },
                    series:  [{"data":[1,0,6,3,2,9,9,1,0,0,5,0,0,1,2,0,13,0,0,4,3,155,7,0,4,0,1,2,0,0,0,0]},{"data":[8,1,46,28,19,40,13,1,20,0,3,7,2,7,12,4,61,0,1,43,13,757,58,2,5,1,7,12,8,3,0,4]},{"data":[8,0,75,49,40,65,26,2,31,0,6,10,7,10,30,2,80,2,7,76,21,1346,87,18,9,6,4,21,8,10,1,7]},{"data":[1,1,26,17,9,27,12,1,17,0,3,7,1,9,6,4,43,1,2,29,8,479,31,3,5,0,6,9,4,6,0,8]},{"data":[7,3,92,61,45,79,27,2,29,0,25,10,11,21,42,10,95,4,6,85,22,1431,115,23,6,7,9,34,14,19,2,9]},{"data":[18,29,112,82,76,115,18,5,33,0,35,22,20,9,87,19,139,3,14,93,40,1213,179,21,11,5,26,33,41,63,5,12]},{"data":[0,2,16,17,7,18,6,2,9,0,1,5,0,8,8,7,43,2,5,20,16,271,36,7,3,0,6,4,9,5,1,8]},{"data":[0,0,3,6,3,7,2,0,4,0,0,4,0,4,2,3,28,2,1,14,8,166,36,2,3,0,3,0,0,1,0,7]},{"data":[0,1,30,26,8,32,9,2,6,0,8,6,3,11,12,8,50,1,7,26,16,451,61,6,9,1,6,7,8,10,0,8]},{"data":[11,1,79,47,40,61,22,0,24,0,9,8,7,5,35,4,68,3,3,59,19,1321,105,17,10,9,1,29,11,16,1,2]},{"data":[7,2,62,47,33,68,23,1,18,0,6,9,5,6,26,4,67,4,5,65,21,1435,111,12,10,5,3,26,13,20,1,8]}],


                    xaxis: {
                        categories: municipalities,
                    },

                }




                var chart = new ApexCharts(
                    document.querySelector("#chartContainer"),
                    options1
                );

                var chart2 = new ApexCharts(
                    document.querySelector("#chartContainer2"),
                    options2
                );
                var chart3 = new ApexCharts(
                    document.querySelector("#chartContainer3"),
                    options
                );



                chart.render();
                chart2.render();
                chart3.render();
            }
        });


    </script>
@endsection
