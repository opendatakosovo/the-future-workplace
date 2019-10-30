<?php
/**
 * Created by PhpStorm.
 * User: Dren
 * Date: 7/22/2019
 * Time: 4:00 PM
 */
?>
@extends('layouts/main')
@section('title', 'Statistikat')
@section('content')
    <div class="content-header-left col-md-4 col-12 mb-2">
        <h3 class="content-header-title">{{Lang::get('translation.statistics')}}</h3>
    </div>
    <div class="content-body" style="width: 100%">
        <!-- Revenue, Hit Rate & Deals -->
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{Lang::get('translation.num_ict_grads_uni')}}</h4><br>
                        <p class="content-graph">{{Lang::get('translation.statistics_graph1')}}</p>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li>
                                    <a class="btn btn-glow btn-round btn-bg-gradient-x-green-pink" href="{{ url('workforce-map') }}">{{Lang::get('translation.more')}}</a>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body p-0 pb-0">
                            <div id="chartContainer-uni" style="width:100%; height:300px;"></div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{Lang::get('translation.num_ict_grads')}}</h4><br>
                        <p class="content-graph">{{Lang::get('translation.statistics_graph2')}}</p>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li>
                                    <a class="btn btn-glow btn-round btn-bg-gradient-x-green-pink" href="{{ url('highschool-data') }}">{{Lang::get('translation.more')}}</a>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body p-0 pb-0">
                            <div id="chartContainer3" style="width:100%; height:300px;"></div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-12">
                <div class="row">
                    <div class="col-12">
                        <div class="card pull-up border-top-info border-top-3 rounded-0">
                            <div class="card-header">
                                <h4 class="card-title">{{Lang::get('translation.total_num_ict_grads_uni')}}</h4>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body p-1">
                                    <h4 class="font-large-1 text-bold-400">{{$data['total_graduated_uni']}} <i class="ft-users float-right"></i></h4>
                                </div>
                                <div class="card-footer p-1">
                                    <span class="text-muted"><i class="la @if($data['growth_uni'] < 0 )la-arrow-circle-o-down @else la-arrow-circle-o-up @endif  info"></i> {{$data['growth']}}% @if($data['growth'] < 0 ){{Lang::get('translation.drop')}} @else {{Lang::get('translation.growth')}}  @endif {{Lang::get('translation.within_10_years')}} </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card pull-up border-top-info border-top-3 rounded-0">
                            <div class="card-header">
                                <h4 class="card-title">{{Lang::get('translation.total_num_ict_grads')}}</h4>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body p-1">
                                    <h4 class="font-large-1 text-bold-400">{{$data['total_graduated']}} <i class="ft-users float-right"></i></h4>
                                </div>
                                <div class="card-footer p-1">
                                    <span class="text-muted"><i class="la @if($data['growth'] < 0 )la-arrow-circle-o-down @else la-arrow-circle-o-up @endif  info"></i> {{$data['growth']}}% @if($data['growth'] < 0 ){{Lang::get('translation.drop')}} @else {{Lang::get('translation.growth')}}  @endif {{Lang::get('translation.within_10_years')}} </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card pull-up border-top-info border-top-3 rounded-0">
                            <div class="card-header">
                                <h4 class="card-title">{{Lang::get('translation.total_num_ict_business')}}</h4>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body p-1">
                                    <h4 class="font-large-1 text-bold-400">{{$data['total_biz']}} <i class="ft-users float-right"></i></h4>
                                </div>
                                <div class="card-footer p-1">
                                    <span class="text-muted"><i class="la @if($data['growth_biz'] < 0 )la-arrow-circle-o-down @else la-arrow-circle-o-up @endif  info"></i> {{$data['growth_biz']}}% @if($data['growth_biz'] < 0 ){{Lang::get('translation.drop')}} @else {{Lang::get('translation.growth')}}  @endif {{Lang::get('translation.within_10_years')}} </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row comparison">


            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="card card-transparent">
                    <div class="card-header bg-transparent pl-0 comparison-text">
                        <h5 class="card-title text-bold-700">{{Lang::get('translation.municipality_activity_comparison')}}</h5><br>
                        <p class="content-graph"> {{Lang::get('translation.statistics_graph3')}}</p>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    </div>
                    <div id="chartContainer2" style="width:100%; height:300px;"></div>
                </div>
            </div>
        </div>

        <div class="row mt-1">
            <div class="col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{Lang::get('translation.num_registered_businesses_ict')}}</h4><br>
                        <p class="content-graph">{{Lang::get('translation.statistics_graph4')}}</p>
                        <a class="heading-elements-toggle">
                            <i class="la la-ellipsis-v font-medium-3"></i>
                        </a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li>
                                    <a data-action="reload">
                                        <i class="ft-rotate-cw"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content mt-1">
                        <div id="chartContainer4" style="width:100%; height:300px;"></div>
                    </div>
                </div>
            </div>


        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header p-1">
                        <h4 class="card-title float-left" >{{Lang::get('translation.general_stats')}} - <span class="blue-grey lighten-2 font-small-3 mb-0">2018</span></h4>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-footer text-center p-1">
                            <div class="row">
                                <div class="col-md-4 col-12 border-right-blue-grey border-right-lighten-5 text-center">
                                    <p class="blue-grey lighten-2 mb-0">{{Lang::get('translation.num_businesses')}}</p>
                                    <p class="font-medium-5 text-bold-400">{{$data['number_of_bussinesses']}}</p>
                                </div>
                                <div class="col-md-4 col-12 border-right-blue-grey border-right-lighten-5 text-center">
                                    <p class="blue-grey lighten-2 mb-0">{{Lang::get('translation.num_active_businesses')}}</p>
                                    <p class="font-medium-5 text-bold-400">{{$data['number_of_active']}}</p>
                                </div>
                                <div class="col-md-4 col-12 border-right-blue-grey border-right-lighten-5 text-center">
                                    <p class="blue-grey lighten-2 mb-0">{{Lang::get('translation.num_dissolved_businesses')}}</p>
                                    <p class="font-medium-5 text-bold-400">{{$data['number_of_dissolved']}}</p>
                                </div>

                            </div>
                            <hr>
                            <span class="text-muted"><a href="http://biznesetehapura.com/en" target="_blank" class="danger darken-2" style="color: #004D40 !important;">{{Lang::get('translation.explore_further')}}</a></span>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!--/ Revenue, Hit Rate & Deals -->
        <!-- Emails Products & Avg Deals -->
        <!--/ Emails Products & Avg Deals -->
        <!-- Chat and Recent Projects -->
        <!--/ Products sell and New Orders -->
        <!-- Total earning & Recent Sales  -->
        <!--/ Total earning & Recent Sales  -->
    </div>
    <!-- BEGIN: Page JS-->
    <script src="{{URL::asset('/app-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>

    <script src="app-assets/vendors/js/forms/select/select2.full.min.js" type="text/javascript"></script>
    <script src="app-assets/js/scripts/forms/select/form-select2.js" type="text/javascript"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.8.3/apexcharts.js" type="text/javascript"></script>


    <script>
        function number_of_ict_grads(clicked = null) {

            var year = $('#year').find(":selected").val();
            var degree =$('#degree').find(":selected").val();
            var university = $('#university').find(":selected").val();

            $.ajax({
                type: "GET",
                url: "grads_ict",
                data: {"year": year,"university": university, "degree": degree},
                success: function (result) {
                    var years = [];
                    var data_sets = [];
                    data = JSON.parse(result);

                    $.each(data[0], function (key, value) {
                        years.push(value);
                    });

                    $.each(data[1], function (key, value) {
                        data_sets.push(value);
                    });
                    console.log(data_sets);

                    var options1 = {
                        chart: {
                            height: 350,
                            type: 'area',
                        },
                        dataLabels: {
                            enabled: false
                        },
                        stroke: {
                            curve: 'smooth'
                        },
                        fill: {
                            colors: ['#093637', '#266961','#358577','#449f8c']
                        },
                        series: data_sets,

                        xaxis: {
                            categories: years,
                        },
                        tooltip: {
                            x: {
                                format: 'yy'
                            },
                        }
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

        function number_of_ict_grads_uni(clicked = null) {
            var year = $('#year').find(":selected").val();
            var degree =$('#degree').find(":selected").val();
            var university = $('#university').find(":selected").val();

            $.ajax({
                type: "GET",
                url: "grads_ict_uni",
                data: {"year": year,"university": university, "degree": degree},
                success: function (result) {
                    var years = [];
                    var data_sets = [];
                    data = JSON.parse(result);

                    $.each(data[0], function (key, value) {
                        years.push(value);
                    });

                    $.each(data[1], function (key, value) {
                        data_sets.push(value);
                    });
                    console.log(data_sets);

                    var options1 = {
                        chart: {
                            height: 350,
                            type: 'area',
                        },
                        dataLabels: {
                            enabled: false
                        },
                        stroke: {
                            curve: 'smooth'
                        },
                        fill: {
                            colors: ['#093637', '#266961','#358577','#449f8c']
                        },
                        series: data_sets,

                        xaxis: {
                            categories: years,
                        },
                        tooltip: {
                            x: {
                                format: 'yy'
                            },
                        }
                    }


                    var chart3 = new ApexCharts(
                        document.querySelector("#chartContainer-uni"),
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
                        colors: [ '#266961','#093637','#449f8c','#358577'],
                        plotOptions: {
                            bar: {
                                horizontal: false,
                                columnWidth: '30%',
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
                        ,

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
                                        barHeight: '40%',
                                    },

                                }
                            },
                        }]
                    }
                    var chart2 = new ApexCharts(
                        document.querySelector("#chartContainer2"),
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

        function number_of_bussiness_years(clicked = null) {


            $.ajax({
                type: "GET",
                url: "number_businnesses",
                success: function (result) {
                    var years4 = [];
                    var data_sets4 = [];
                    data = JSON.parse(result);

                    $.each(data[0], function (key, value) {
                        years4.push(value);
                    });

                    $.each(data[1], function (key, value) {
                        data_sets4.push(value);
                    });
                    console.log(data_sets4);

                    var options3 = {
                        chart: {
                            height: 350,
                            type: 'line',
                            shadow: {
                                enabled: true,
                                color: '#000',
                                top: 18,
                                left: 7,
                                blur: 10,
                                opacity: 1
                            },
                            toolbar: {
                                show: false
                            }
                        },

                        colors: ['#093637', '#358577'],
                        dataLabels: {
                            enabled: true,
                        },
                        stroke: {
                            curve: 'smooth'
                        },
                        series: data_sets4,
                        grid: {
                            borderColor: '#e7e7e7',
                            row: {
                                colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
                                opacity: 0.5
                            },
                        },
                        markers: {

                            size: 6
                        },
                        xaxis: {
                            categories: years4,
                            title: {
                                text: 'Years'
                            }
                        },
                        yaxis: {
                            title: {
                                text: 'Number of Businesses'
                            }

                        },
                        legend: {
                            position: 'top',
                            horizontalAlign: 'right',
                            floating: true,
                            offsetY: -25,
                            offsetX: -5
                        }
                    }


                    var chart3 = new ApexCharts(
                        document.querySelector("#chartContainer4"),
                        options3
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

        $(document).ready(function () {
            number_of_ict_grads();
            number_of_ict_grads_uni();
            get_filtered2();
            number_of_bussiness_years();
        });

    </script>
@endsection