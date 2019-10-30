<?php
/**
 * Created by PhpStorm.
 * User: Dren
 * Date: 8/14/2019
 * Time: 10:55 AM
 */
?>
@section('title', 'Company Data')
@extends('layouts/main')
<script src="https://code.highcharts.com/maps/highmaps.js"></script>
<script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
<script src="/app-assets/js/scripts/highcharts/kv-all.js"></script>
@section('content')
    <style>
        .select2-container--classic .select2-selection--multiple .select2-selection__choice, .select2-container--default .select2-selection--multiple .select2-selection__choice {

            border-color: #256960 !important;
            background-color: #256960 !important;
        }
        .btn-primary {
            border-color: #00e4b5;
            background-color:  #256960 !important;
        }
        .btn-primary:hover {
            border-color: #00e6b0;
            background-color: #29ac8c;
        }

        .highcharts-root{
            width: 100%;
            height: 110%;
            margin-left: -40px;
        }
        .highcharts-container{
            width: 150% ;
            height: 100% ;
        }
        .highcharts-label text{
            font-weight: normal !important;
        }
    </style>
    <script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>

    <div class="content-header-left col-md-6 col-12 mb-2">
        <h3 class="content-header-title">{{Lang::get('translation.company_data')}}</h3>
    </div>
    <div class="content-body">
        <!-- Revenue, Hit Rate & Deals -->
        <div class="row">
            {{--<div class="col-md-12">--}}
            {{--<div class="card">--}}
            {{--<div class="card-header">--}}

            {{--</div>--}}
            {{--<div class="card-content collapse show">--}}
            {{--<div class="card-body">--}}
            {{--<div class="form-body">--}}
            {{--<h4 class="form-section"><i class="la la-eye"></i> Filtrimet</h4>--}}
            {{--<div class="row">--}}
            {{--<div class="col-md-4">--}}
            {{--<div class="form-group row">--}}
            {{--<label class="col-md-3 label-control" for="userinput2">Viti</label>--}}
            {{--<div class="col-md-9">--}}
            {{--<select class="select2 form-control" id="year">--}}
            {{--<optgroup label="Zgjedh Vitin">--}}
            {{--<option name='year' selected value="all">Të gjitha</option>--}}
            {{--@for ($i = 2008; $i < 2019; $i++)--}}
            {{--<option name='year' value="{{$i}}">{{ $i }}</option>--}}
            {{--@endfor--}}
            {{--</optgroup>--}}
            {{--</select>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-md-4">--}}
            {{--<div class="form-group row">--}}
            {{--<label class="col-md-3 label-control" for="userinput2">Statusi</label>--}}
            {{--<div class="col-md-9">--}}
            {{--<select class="select2 form-control" id="status">--}}
            {{--<optgroup label="Zgjedh Statusin">--}}
            {{--<option name='status' selected value="all">Të gjitha</option>--}}
            {{--@foreach($data['statuses'] as $status)--}}
            {{--<option name="status" value="{{$status}}">{{$status}}</option>--}}
            {{--@endforeach--}}
            {{--</optgroup>--}}
            {{--</select>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-md-4">--}}
            {{--<div class="form-group row">--}}
            {{--<label class="col-md-3 label-control" for="userinput2">Aktiviteti</label>--}}
            {{--<div class="col-md-9">--}}
            {{--<select class="select2 form-control" id="activity">--}}
            {{--<optgroup label="Zgjedh Aktivitetin">--}}
            {{--<option name='activity' selected value="all">Të gjitha</option>--}}
            {{--@foreach($data['activities'] as $activity)--}}
            {{--<option name="activity" value="{{$activity}}">{{$activity}}</option>--}}
            {{--@endforeach--}}
            {{--</optgroup>--}}
            {{--</select>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-md-4">--}}
            {{--<div class="form-group row">--}}
            {{--<label class="col-md-3 label-control" for="userinput2">Qytetet</label>--}}
            {{--<div class="col-md-9">--}}
            {{--<select class="select2 form-control" name="city" multiple="multiple" id="cities" >--}}
            {{--<optgroup label="Zgjedh Aktivitetin">--}}
            {{--<option name='activity' selected value="all" disabled>Të gjitha</option>--}}
            {{--@foreach($data['cities'] as $city)--}}
            {{--<option value="{{$city}}">{{$city}}</option>--}}
            {{--@endforeach--}}
            {{--</optgroup>--}}
            {{--</select>--}}

            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="form-actions right">--}}
            {{--<button type="button" onclick="get_filtered('clicked')" class="btn btn-primary">--}}
            {{--<i class="la la-check-square-o"></i> Filtro--}}
            {{--</button>--}}
            {{--</div>--}}

            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}

            <div class="col-xl-8 col-lg-8 col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{Lang::get('translation.comparison_ict_businesses_municipality')}}</h4><br>
                        <p class="content-graph">{{Lang::get('translation.company_graph1')}}</p>
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
                            <div class="row">
                                <div class="form-body">
                                    <h6 class="form-section"><i class="la la-eye"></i>{{Lang::get('translation.filters')}}</h6>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label class="col-md-12 label-control" for="userinput2"> {{Lang::get('translation.year')}}</label>

                                                <select class="select2 form-control" id="year">
                                                    <optgroup label="{{Lang::get('translation.choose_year')}}">
                                                        <option name='year' selected value="all"><span>{{Lang::get('translation.all')}}</span></option>
                                                        @for ($i = 2008; $i < 2019; $i++)
                                                            <option name='year' value="{{$i}}">{{ $i }}</option>
                                                        @endfor
                                                    </optgroup>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label class="col-md-12 label-control" for="userinput2">{{Lang::get('translation.status')}}</label>

                                                <select class="select2 form-control" id="status">
                                                    <optgroup label="{{Lang::get('translation.choose_status')}}">
                                                        <option name='status' selected value="all">{{Lang::get('translation.all')}}</option>
                                                        @foreach($data['statuses'] as $status)
                                                            <option name="status"
                                                                    value="{{$status}}">{{$status}}</option>
                                                        @endforeach
                                                    </optgroup>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group ">
                                                <label class="col-md-12 label-control"
                                                       for="userinput2">{{Lang::get('translation.activity')}}</label>

                                                <select class="select2 form-control" id="activity">
                                                    <optgroup label="{{Lang::get('translation.choose_activity')}}">
                                                        <option name='activity' selected value="all">{{Lang::get('translation.all')}}</option>
                                                        @foreach($data['activities'] as $activity)
                                                            <option name="activity"
                                                                    value="{{$activity}}">{{$activity}}</option>
                                                        @endforeach
                                                    </optgroup>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group ">
                                                <label class="col-md-12 label-control" for="userinput2">{{Lang::get('translation.cities')}}</label>

                                                <select class="select2 form-control" name="city" multiple="multiple"
                                                        id="cities">
                                                    <optgroup label="{{Lang::get('translation.choose_city')}}">
                                                        <option name='activity'  value="all" disabled>{{Lang::get('translation.all')}}</option>
                                                        @foreach($data['cities'] as $city)
                                                            <option value="{{$city}}" @if(in_array($city,$data['def_cities'])) selected @endif>{{$city}}</option>
                                                        @endforeach
                                                    </optgroup>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-md-2" style="padding: 5px">
                                            <label class="col-md-12 label-control" for="userinput2"></label>
                                            <button type="button" onclick="get_filtered('clicked')"
                                                    class="btn btn-primary filter-button">
                                                <i class="la la-check-square-o"></i> {{Lang::get('translation.filter_button')}}
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div id="chartContainer3" style="width:100%; height:300px;"></div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-4">
                <div class="card" style="    height: 97%;">
                    <div class="card-header">
                        <h4 class="card-title">{{Lang::get('translation.business_map')}}</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    </div>

                    <div class="card-content collapse show">
                        <div class="card-body p-0 pb-0">
                            <p class="card-body">
                                {{Lang::get('translation.business_map_desc')}}
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12">
                        <div class="card" style="height: auto;">

                            <div id="map" class="center" style="margin-left:6px; margin-right:6px;"></div>


                            {{--<iframe src="https://datawrapper.dwcdn.net/C0Dcf/3/" scrolling="yes" class="center"--}}
                                    {{--style="margin-left:6px; margin-right:6px;" height="500px" name="myiFrame"--}}
                                    {{--frameborder="0" marginheight="0px"--}}
                                    {{--style="width:0; min-width:100%!important; border:none;"></iframe>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{Lang::get('translation.company_div_per_municipality')}}</h4><br>
                        <p class="content-graph">{{Lang::get('translation.company_graph2')}}</p>
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
                            <div class="row">
                                <div class="form-body" style="padding: 15px">
                                    <h6 class="form-section"><i class="la la-eye"></i> {{Lang::get('translation.filters')}}</h6>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label class="col-md-12 label-control" for="userinput2">{{Lang::get('translation.year')}}</label>

                                                <select class="select2 form-control" id="year2">
                                                    <optgroup label="{{Lang::get('translation.choose_year')}}">
                                                        <option name='year' selected value="all">{{Lang::get('translation.all')}}</option>
                                                        @for ($i = 2008; $i < 2019; $i++)
                                                            <option name='year' value="{{$i}}">{{ $i }}</option>
                                                        @endfor
                                                    </optgroup>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label class="col-md-12 label-control" for="userinput2">{{Lang::get('translation.status')}}</label>

                                                <select class="select2 form-control" id="status2">
                                                    <optgroup label="{{Lang::get('translation.choose_status')}}">
                                                        <option name='status' selected value="all">{{Lang::get('translation.all')}}</option>
                                                        @foreach($data['statuses'] as $status)
                                                            <option name="status"
                                                                    value="{{$status}}">{{$status}}</option>
                                                        @endforeach
                                                    </optgroup>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group ">
                                                <label class="col-md-12 label-control"
                                                       for="userinput2">{{Lang::get('translation.activity')}}</label>

                                                <select class="select2 form-control" id="activity2">
                                                    <optgroup label="{{Lang::get('translation.choose_activity')}}">
                                                        <option name='activity' selected value="all">{{Lang::get('translation.all')}}</option>
                                                        @foreach($data['activities'] as $activity)
                                                            <option name="activity"
                                                                    value="{{$activity}}">{{$activity}}</option>
                                                        @endforeach
                                                    </optgroup>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group ">
                                                <label class="col-md-12 label-control" for="userinput2">{{Lang::get('translation.cities')}}</label>

                                                <select class="select2 form-control" name="city" multiple="multiple"
                                                        id="cities2">
                                                    <optgroup label="{{Lang::get('translation.choose_city')}}">
                                                        <option name='activity'  value="all" disabled>{{Lang::get('translation.all')}}</option>
                                                        @foreach($data['cities'] as $city)
                                                            <option value="{{$city}}" @if(in_array($city,$data['def_cities'])) selected @endif>{{$city}}</option>
                                                        @endforeach
                                                    </optgroup>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-md-2" style="padding: 5px">
                                            <label class="col-md-12 label-control" for="userinput2"></label>
                                            <button type="button" onclick="get_filtered2('clicked')"
                                                    class="btn btn-primary filter-button">
                                                <i class="la la-check-square-o"></i> {{Lang::get('translation.filter_button')}}
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="chartContainer" style="width:100%; height:300px;"></div>
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

    {{--<script src="{{URL::asset('/app-assets/js/scripts/charts/chartist/bar/vertical-bar.js')}}"--}}
    {{--type="text/javascript"></script>--}}
    {{--<script src="{{URL::asset('/app-assets/js/scripts/charts/chartist/bar/stacked-bar.js')}}"--}}
    {{--type="text/javascript"></script>--}}
    {{--<script src="{{URL::asset('/app-assets/js/scripts/charts/chartist/line/area.js')}}" type="text/javascript"></script>--}}
    {{--<script src="{{URL::asset('/app-assets/js/scripts/charts/chartist/line/line.js')}}" type="text/javascript"></script>--}}
    {{--<script src="{{URL::asset('/app-assets/js/scripts/charts/chartist/pie/pie.js')}}" type="text/javascript"></script>--}}
    {{--<script src="{{URL::asset('/app-assets/js/scripts/charts/chartist/pie/donut.js')}}" type="text/javascript"></script>--}}




    <script src="/app-assets/vendors/js/forms/select/select2.full.min.js" type="text/javascript"></script>

    <script src="/app-assets/js/scripts/forms/select/form-select2.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.8.3/apexcharts.js" type="text/javascript"></script>


    <script>

        function get_filtered(clicked = null) {

            var year = $('#year').find(":selected").val();
            var status = $('#status').find(":selected").val();
            var cities = $('#cities').val();
            var activity = $('#activity').find(":selected").val();

            $.ajax({
                type: "GET",
                url: "get_business_data",
                data: {"year": year, "status": status, "activity": activity, "cities": cities},
                beforeSend: function() {
                    reload_data();
                },
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
                            height: 700,
                            type: 'bar',
                        },
                        colors: [ '#266961','#093637','#449f8c','#358577'],
                        plotOptions: {
                            bar: {
                                horizontal: false,
                                dataLabels: {
                                    position: 'top',

                                },
                            }
                        },
                        dataLabels: {
                            enabled: false,
                            offsetX: 10,
                            style: {
                                fontSize: '12px',

                            }
                        },
                        stroke: {
                            show: true,
                            width: 0.01,
                            colors: ['#fff'],
                        },
                        fill: {
                            colors: [ '#266961','#093637','#449f8c','#358577']
                        },
                        series: data_sets,

                        xaxis: {
                            categories: municipalities,
                        },
                        yaxis: {
                            offsetY: 200,
                        },
                        legend: {
                            position: 'top',
                            horizontalAlign: 'left',
                            offsetX: 40
                        },
                        breakpoint: 1000,
                        responsive: [{
                            breakpoint: 1000,
                            options: {
                                chart: {
                                    height: 900,
                                },
                                plotOptions: {
                                    bar: {
                                        horizontal: true,
                                    },

                                }
                            },
                        }]

                    }




                    var chart3 = new ApexCharts(
                        document.querySelector("#chartContainer3"),
                        options1
                    );

                    chart3.render();


                    if (clicked != null) {
                        update();
                    }

                    function update() {
                        chart3.updateOptions({
                            series: data_sets,
                        })

                    }



                }
            });
        }




        function get_filtered2(clicked = null) {
            var year2 = $('#year2').find(":selected").val();
            var status2 = $('#status2').find(":selected").val();
            var cities2 = $('#cities2').val();
            var activity2 = $('#activity2').find(":selected").val();



            $.ajax({
                type: "GET",
                url: "get_business_data",
                data: {"year": year2, "status": status2, "activity": activity2, "cities": cities2},
                beforeSend: function() {
                    reload_data();
                },
                success: function (result) {
                    var municipalities2 = [];
                    var data_sets2 = [];
                    data = JSON.parse(result);

                    $.each(data[0], function (key, value) {
                        municipalities2.push(value);
                    });

                    $.each(data[1], function (key, value) {
                        data_sets2.push(value);
                    });
                    console.log(data_sets2);


                    var options1 = {
                        chart: {
                            height: 750,
                            type: 'bar',
                            stacked: true,
                            stackType: '100%',
                            width: '100%',
                            zoom: {
                                enabled: true,
                                type: 'x',
                                autoScaleYaxis: false,
                                zoomedArea: {
                                    fill: {
                                        color: '#90CAF9',
                                        opacity: 0.4
                                    },
                                    stroke: {
                                        color: '#0D47A1',
                                        opacity: 0.4,
                                        width: 1
                                    }
                                }
                            }
                        },
                        colors: [ '#266961','#093637','#449f8c','#358577'],
                        plotOptions: {
                            bar: {
                                horizontal: false,
                            },

                        },
                        stroke: {
                            width: 1,
                            colors: ['#fff']
                        },
                        fill: {
                            colors: [ '#266961','#093637','#449f8c','#358577']
                        },
                        series:
                        data_sets2
                        , title: {
                            text: '100% Stacked Bar'
                        },

                        xaxis: {
                            categories: municipalities2,
                        },

                        tooltip: {
                            y: {
                                formatter: function (val) {
                                    return val
                                }
                            }
                        },

                        legend: {
                            position: 'top',
                            horizontalAlign: 'left',
                            offsetX: 40
                        },

                        responsive: [{
                            breakpoint: 3000,
                            options: {
                                chart: {
                                    height: 600,
                                },
                                plotOptions: {
                                    bar: {
                                        horizontal: true,
                                        barHeight: '40%',
                                        columnWidth: '5%',
                                    },

                                }
                            },
                        }]
                    }
                    var chart2 = new ApexCharts(
                        document.querySelector("#chartContainer"),
                        options1
                    );


                    chart2.render();



                    if (clicked != null) {
                        update2();
                    }

                    function update2() {
                        chart2.updateOptions({
                            series: data_sets2,
                        })
                    }
                }
            });

        }



        $(document).ready(function () {
            get_filtered();
            get_filtered2();
        });


        function reload_data() {
            // Reload Card
                var block_ele =  $('a[data-action="reload"]').closest('.card');

                // Block Element
                block_ele.block({
                    message: '<div class="ft-refresh-cw icon-spin font-medium-2"></div>',
                    timeout: 3000, //unblock after 2 seconds
                    overlayCSS: {
                        backgroundColor: '#FFF',
                        cursor: 'wait',
                    },
                    css: {
                        border: 0,
                        padding: 0,
                        backgroundColor: 'none'
                    }
                });

        }
    </script>

    <script>
        // Prepare demo data
        // Data is joined to map using value of 'hc-key' property by default.
        // See API docs for 'joinBy' for more info on linking data and map.
        var data = [
            ['kv-841', 12339],
            ['kv-7318', 8827],
            ['kv-7319', 8256],
            ['kv-7320', 8722],
            ['kv-7321', 7189],
            ['kv-7322', 10786],
            ['kv-844', 7675],
            ['kv-7302', 10760],
            ['kv-7303', 10398],
            ['kv-7304', 7488],
            ['kv-7305', 7140],
            ['kv-7306', 10334],
            ['kv-845', 8360],
            ['kv-7307', 8469],
            ['kv-7308', 9118],
            ['kv-7309', 8507],
            ['kv-7310', 6432],
            ['kv-7311', 9315],
            ['kv-842', 8582],
            ['kv-7312', 9735],
            ['kv-7313', 8450],
            ['kv-7314', 5053],
            ['kv-843', 5554],
            ['kv-7315', 10531],
            ['kv-7316', 7776],
            ['kv-7317', 9551],
            ['kv-7323', 7109],
            ['kv-7324', 8569],
            ['kv-7325', 10310],
            ['kv-7326', 8976]
        ];

        // Create the chart
        Highcharts.mapChart('map', {
            chart: {
                map: 'countries/kv/kv-all'
            },

            title: {
                text: ''
                // null
            },
        //     subtitle: {
        //     // text: 'Source map: <a href="http://code.highcharts.com/mapdata/countries/kv/kv-all.js">Kosovo</a>'
        // },

        mapNavigation: {
            enabled: true,
                buttonOptions: {
                verticalAlign: 'bottom'
            }
        },

        colorAxis: {
            stops: [
                [0, '#EFEFFF'],
                [0.67, '#44a08d'],
                [1, '#0a3737'],
            ],
            min: 0
        },

        series: [{
            data: data,
            name: 'Total',
            states: {
                hover: {
                    color: '#0d3c3c'
                }
            },
            dataLabels: {
                fontSize:'15px',
                enabled: true,
                format: '{point.name}'
            },

        }]
        });

    </script>
@endsection
