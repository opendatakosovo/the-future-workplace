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
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">

                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body">
                                <div class="form-body">
                                    <h4 class="form-section"><i class="la la-eye"></i> Filtrimet</h4>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="userinput2">Viti</label>
                                                <div class="col-md-9">
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
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="userinput2">Statusi</label>
                                                <div class="col-md-9">
                                                    <select class="select2 form-control" id="status">
                                                        <optgroup label="Zgjedh Statusin">
                                                            <option name='status' selected value="all">Të gjitha</option>
                                                            @foreach($data['statuses'] as $status)
                                                                <option name="status" value="{{$status}}">{{$status}}</option>
                                                                @endforeach
                                                        </optgroup>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="userinput2">Aktiviteti</label>
                                                <div class="col-md-9">
                                                    <select class="select2 form-control" id="activity">
                                                        <optgroup label="Zgjedh Aktivitetin">
                                                            <option name='activity' selected value="all">Të gjitha</option>
                                                            @foreach($data['activities'] as $activity)
                                                                <option name="activity" value="{{$activity}}">{{$activity}}</option>
                                                            @endforeach
                                                        </optgroup>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="userinput2">Qytetet</label>
                                                <div class="col-md-9">
                                                    <select class="select2 form-control" name="city" multiple="multiple" id="cities" >
                                                        <optgroup label="Zgjedh Aktivitetin">
                                                            <option name='activity' selected value="all" disabled>Të gjitha</option>
                                                            @foreach($data['cities'] as $city)
                                                                <option value="{{$city}}">{{$city}}</option>
                                                            @endforeach
                                                        </optgroup>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions right">
                                    <button type="button" onclick="get_filtered('clicked')" class="btn btn-primary">
                                        <i class="la la-check-square-o"></i> Filtro
                                    </button>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-12">
                <div class="card">
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
                            <div id="chartContainer" style="width:100%; height:300px;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12">
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

        function get_filtered(clicked = null){

            var year = $('#year').find(":selected").text();
            var status = $('#status').find(":selected").text();
            var cities = $('#cities').val();
            var activity = $('#activity').find(":selected").text();

            $.ajax({
                type: "GET",
                url: "get_business_data",
                data: {"year":year,"status":status,"activity":activity,"cities":cities},
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
                        data_sets
                        , title: {
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
                        },
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
                        , title: {
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


                    var options = {
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
                            enabled: true,
                            offsetX: 10,
                            style: {
                                fontSize: '12px',
                                colors: ['#fff']
                            }
                        },
                        stroke: {
                            show: true,
                            width: 0.01,
                            colors: ['#fff'],
                        },
                        series: data_sets,


                        xaxis: {
                            categories: municipalities,
                        },
                        yaxis:{
                            offsetY:200,
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


                    if(clicked != null){
                        update();
                    }

                    function update() {
                        chart.updateOptions({
                            series: data_sets,
                        })
                        chart2.updateOptions({
                            series: data_sets,
                        })
                        chart3.updateOptions({
                            series: data_sets,
                        })
                    }

                    function reset() {
                        return options.series
                    }

                }
            });
        }

        $( document ).ready(function() {
            get_filtered();
        });

    </script>
@endsection
