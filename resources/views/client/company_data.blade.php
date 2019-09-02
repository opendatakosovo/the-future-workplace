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
    </style>
    <script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>

    <div class="content-header-left col-md-6 col-12 mb-2">
        <h3 class="content-header-title">Company Data</h3>
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
                            <div class="row">
                                <div class="form-body">
                                    <h6 class="form-section"><i class="la la-eye"></i> Filtrimet</h6>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label class="col-md-12 label-control" for="userinput2">Viti</label>

                                                <select class="select2 form-control" id="year">
                                                    <optgroup label="Zgjedh Vitin">
                                                        <option name='year' selected value="all">Të gjitha</option>
                                                        @for ($i = 2008; $i < 2019; $i++)
                                                            <option name='year' value="{{$i}}">{{ $i }}</option>
                                                        @endfor
                                                    </optgroup>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label class="col-md-12 label-control" for="userinput2">Statusi</label>

                                                <select class="select2 form-control" id="status">
                                                    <optgroup label="Zgjedh Statusin">
                                                        <option name='status' selected value="all">Të gjitha</option>
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
                                                       for="userinput2">Aktiviteti</label>

                                                <select class="select2 form-control" id="activity">
                                                    <optgroup label="Zgjedh Aktivitetin">
                                                        <option name='activity' selected value="all">Të gjitha</option>
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
                                                <label class="col-md-12 label-control" for="userinput2">Qytetet</label>

                                                <select class="select2 form-control" name="city" multiple="multiple"
                                                        id="cities">
                                                    <optgroup label="Zgjedh Qytetin">
                                                        <option name='activity'  value="all" disabled>Të
                                                            gjitha
                                                        </option>
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
                                                    class="btn btn-primary">
                                                <i class="la la-check-square-o"></i> Filtro
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
            <div class="col-lg-12 col-md-12">
                <div class="card">
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
                            <div class="row">
                                <div class="form-body" style="padding: 15px">
                                    <h6 class="form-section"><i class="la la-eye"></i> Filtrimet</h6>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label class="col-md-12 label-control" for="userinput2">Viti</label>

                                                <select class="select2 form-control" id="year2">
                                                    <optgroup label="Zgjedh Vitin">
                                                        <option name='year' selected value="all">Të gjitha</option>
                                                        @for ($i = 2008; $i < 2019; $i++)
                                                            <option name='year' value="{{$i}}">{{ $i }}</option>
                                                        @endfor
                                                    </optgroup>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label class="col-md-12 label-control" for="userinput2">Statusi</label>

                                                <select class="select2 form-control" id="status2">
                                                    <optgroup label="Zgjedh Statusin">
                                                        <option name='status' selected value="all">Të gjitha</option>
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
                                                       for="userinput2">Aktiviteti</label>

                                                <select class="select2 form-control" id="activity2">
                                                    <optgroup label="Zgjedh Aktivitetin">
                                                        <option name='activity' selected value="all">Të gjitha</option>
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
                                                <label class="col-md-12 label-control" for="userinput2">Qytetet</label>

                                                <select class="select2 form-control" name="city" multiple="multiple"
                                                        id="cities2">
                                                    <optgroup label="Zgjedh Qytetin">
                                                        <option name='activity'  value="all" disabled>Të
                                                            gjitha
                                                        </option>
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
                                                    class="btn btn-primary">
                                                <i class="la la-check-square-o"></i> Filtro
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




    <script src="app-assets/vendors/js/forms/select/select2.full.min.js" type="text/javascript"></script>

    <script src="app-assets/js/scripts/forms/select/form-select2.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.8.3/apexcharts.js" type="text/javascript"></script>


    <script>

        function get_filtered(clicked = null) {

            var year = $('#year').find(":selected").text();
            var status = $('#status').find(":selected").text();
            var cities = $('#cities').val();
            var activity = $('#activity').find(":selected").text();

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
            var year2 = $('#year2').find(":selected").text();
            var status2 = $('#status2').find(":selected").text();
            var cities2 = $('#cities2').val();
            var activity2 = $('#activity2').find(":selected").text();



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
                            breakpoint: 2000,
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
@endsection
