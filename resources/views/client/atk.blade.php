<?php
/**
 * Created by PhpStorm.
 * User: Dren
 * Date: 9/19/2019
 * Time: 1:32 PM
 */
?>

@section('title', 'Atk Data')
@extends('layouts/main')

@section('content')
    <div class="content-header-left col-md-6 col-12 mb-2">
        <h3 class="content-header-title">{{Lang::get('translation.atk_data')}}</h3>
    </div>
    <div class="content-body" style="width: 100%;">
        <!-- Revenue, Hit Rate & Deals -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{Lang::get('translation.comparison_ict_atk_category')}}</h4><br>
                        <p class="content-graph">{{Lang::get('translation.atk_graph1')}}</p>
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
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{Lang::get('translation.comparison_worker_atk_category')}}</h4><br>
                        <p class="content-graph">{{Lang::get('translation.atk_graph2')}}</p>
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
        </div>

    </div>
    </div>
    </div>

    <script src="{{URL::asset('/app-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
    <script src="app-assets/vendors/js/forms/select/select2.full.min.js" type="text/javascript"></script>
    <script src="app-assets/js/scripts/forms/select/form-select2.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.8.3/apexcharts.js" type="text/javascript"></script>


    <script>
        function get_filtered(clicked = null) {

            var year = $('#year').find(":selected").val();
            var status = $('#status').find(":selected").val();
            var cities = $('#cities').val();
            var activity = $('#activity').find(":selected").val();

            $.ajax({
                type: "GET",
                url: "get_number_atk_categories",
                data: {"year": year, "status": status, "activity": activity, "cities": cities},
                // beforeSend: function() {
                //     reload_data();
                // },
                success: function (result) {
                    var categories = [];
                    var data_sets = [];
                    data = JSON.parse(result);

                    $.each(data[0], function (key, value) {
                        categories.push(value);
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
                            categories: categories,
                        },
                        yaxis: {
                            offsetY: 200,
                        },
                        legend: {
                            position: 'top',
                            horizontalAlign: 'left',
                            offsetX: 40
                        },
                        tooltip: {
                            y: {
                                formatter: function (val) {
                                    return val + "K"
                                }
                            }
                        },
                        responsive: [{
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
                        document.querySelector("#chartContainer"),
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

            var year = $('#year').find(":selected").val();
            var status = $('#status').find(":selected").val();
            var cities = $('#cities').val();
            var activity = $('#activity').find(":selected").val();

            $.ajax({
                type: "GET",
                url: "get_number_atk_employees",
                data: {"year": year, "status": status, "activity": activity, "cities": cities},
                // beforeSend: function() {
                //     reload_data();
                // },
                success: function (result) {
                    var categories = [];
                    var data_sets = [];
                    data = JSON.parse(result);

                    $.each(data[0], function (key, value) {
                        categories.push(value);
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
                            categories: categories,
                        },
                        yaxis: {
                            offsetY: 200,
                        },
                        legend: {
                            position: 'top',
                            horizontalAlign: 'left',
                            offsetX: 40
                        },
                        tooltip: {
                            y: {
                                formatter: function (val) {
                                    return val + "K"
                                }
                            }
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




                    var chart4 = new ApexCharts(
                        document.querySelector("#chartContainer2"),
                        options1
                    );

                    chart4.render();


                    if (clicked != null) {
                        update();
                    }

                    function update() {
                        chart4.updateOptions({
                            series: data_sets,
                        })

                    }



                }
            });
        }

        $(document).ready(function () {
            get_filtered();
            get_filtered2();
        });
    </script>

@endsection