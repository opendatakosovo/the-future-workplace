<?php
/**
 * Created by PhpStorm.
 * User: Dren
 * Date: 9/5/2019
 * Time: 4:32 PM
 */
?>
@section('title', 'Skills Mismatch')
@extends('layouts/main')
<style>
    .btn-primary {
        background-color: #256960 !important;
    }
</style>
@section('content')
    <div class="content-body" style="width: 100%;">
        <!-- Revenue, Hit Rate & Deals -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="card" style="height: 100%">
                    <div class="card-header">
                        <h4 class="card-title">{{Lang::get('translation.skills_mismatch')}}</h4>
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
                                <div class="form-body col-md-12">
                                    <h6 class="form-section"><i
                                                class="la la-eye"></i> {{Lang::get('translation.filters')}}</h6>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="col-md-12 label-control"
                                                       for="userinput2">{{Lang::get('translation.year')}}</label>
                                                <select class="select2 form-control" id="year">
                                                    <optgroup label="{{Lang::get('translation.choose_year')}}">
                                                        <option name='year' selected
                                                                value="all">{{Lang::get('translation.all')}}</option>
                                                        {{--@for ($i = 2008; $i < 2019; $i++)--}}
                                                        {{--<option name='year' value="{{$i}}">{{ $i }}</option>--}}
                                                        {{--@endfor--}}
                                                    </optgroup>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-md-2" style="padding: 5px">
                                            <label class="col-md-12 label-control" for="userinput2"></label>
                                            <button disabled type="button" onclick="get_filtered('clicked')"
                                                    class="btn btn-primary filter-button">
                                                <i class="la la-check-square-o"></i> {{Lang::get('translation.filter_button')}}
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div id="chartContainer" style="width:100%; height:300px;"></div>
                        </div>
                    </div>
                </div>
            </div>
            {{--<div class="col-xl-4 col-lg-4 col-md-4">--}}
                {{--<div class="card" style="height: 100%">--}}
                    {{--<div class="card-header">--}}
                        {{--<h4 class="card-title"> {{Lang::get('translation.skills_mismatch_data_graph2_title')}} </h4>--}}
                        {{--<a class="heading-elements-toggle">--}}
                            {{--<i class="la la-ellipsis-v font-medium-3"></i>--}}
                        {{--</a>--}}
                        {{--<div class="heading-elements">--}}
                            {{--<ul class="list-inline mb-0">--}}
                                {{--<li>--}}
                                    {{--<a data-action="collapse">--}}
                                        {{--<i class="ft-minus"></i>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a data-action="reload">--}}
                                        {{--<i class="ft-rotate-cw"></i>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a data-action="close">--}}
                                        {{--<i class="ft-x"></i>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="card-body">--}}
                        {{--<div class="card-content collapse show">--}}
                            {{--<div class="card-body p-0 pb-0">--}}
                                {{--<p class="card-body">--}}
                                    {{--{{Lang::get('translation.workforce_data_map_desc')}}--}}
                                {{--</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div id="chartContainer2" style="width:100%; height:300px;"></div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>



    </div>

    <!-- BEGIN: Page JS-->
    <script src="{{URL::asset('/app-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>

    <script src="app-assets/vendors/js/forms/select/select2.full.min.js" type="text/javascript"></script>
    <script src="app-assets/js/scripts/forms/select/form-select2.js" type="text/javascript"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.8.3/apexcharts.js" type="text/javascript"></script>

    <script>

        function get_filtered() {
            $.ajax({
                type: "GET",
                url: "get_mismatch_data",
                // data: {"year":year,"status":status,"activity":activity,"cities":cities},
                success: function (result) {
                    var skills = [];
                    var data_sets = [];
                    data = JSON.parse(result);

                    $.each(data[0], function (key, value) {
                        skills.push(value);
                    });

                    $.each(data[1], function (key, value) {
                        data_sets.push(value);
                    });
                    console.log(data_sets);
                    var options = {
                        chart: {
                            height: 350,
                            type: 'bar',
                        },
                        plotOptions: {
                            bar: {
                                horizontal: false,
                                columnWidth: '55%',
                                endingShape: 'rounded'
                            },
                        },
                        dataLabels: {
                            enabled: false
                        },
                        stroke: {
                            show: true,
                            width: 2,
                            colors: ['transparent']
                        },
                        series: data_sets,
                        xaxis: {
                            categories: skills,
                        },
                        yaxis: {
                            title: {
                                text: '% (percentage)'
                            }
                        },
                        fill: {
                            opacity: 1,
                            colors: [ '#215048','#42a695']

                        },
                        tooltip: {
                            y: {
                                formatter: function (val) {
                                    return val + " %"
                                }
                            }
                        }
                    }

                    var chart = new ApexCharts(
                        document.querySelector("#chartContainer"),
                        options
                    );

                    chart.render();
                }
            });
        }


        function get_filtered2() {
            $.ajax({

                success: function (result) {
                    var options = {
                        chart: {
                            height: 350,
                            type: 'radialBar',
                        },
                        plotOptions: {
                            radialBar: {
                                dataLabels: {
                                    name: {
                                        fontSize: '22px',
                                    },
                                    value: {
                                        fontSize: '16px',
                                    },
                                    total: {
                                        show: true,
                                        label: 'Total',
                                        formatter: function (w) {
                                            return 249
                                        }
                                    }
                                }
                            }
                        },
                        series: [44, 55, 67, 83],
                        labels: ['Apples', 'Oranges', 'Bananas', 'Berries'],

                    }

                    var chart = new ApexCharts(
                        document.querySelector("#chartContainer2"),
                        options
                    );

                    chart.render();
                }
            });
        }


    </script>
    <script>
        $(document).ready(function () {
            get_filtered();
            get_filtered2();
        });
    </script>
@endsection

