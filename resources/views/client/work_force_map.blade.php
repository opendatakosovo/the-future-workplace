@extends('layouts/main')
@section('title', 'Harta e Fuqise Punetore')
<script src="https://code.highcharts.com/maps/highmaps.js"></script>
<script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
<script src="/app-assets/js/scripts/highcharts/kv-all.js"></script>
@section('content')
    <style>
        .btn-primary{
            background-color: #256960 !important;
        }
        .highcharts-root{
            width: 100%;
            height: 560px;
            margin-left: -150px;
        }
        .highcharts-container{
            width: 150% ;
            height: 100% ;
        }
        .highcharts-label text{
            font-weight: normal !important;
        }

    </style>
    <div class="content-header-left col-md-6 col-12 mb-2">
        <h3 class="content-header-title">{{Lang::get('translation.workforce_data')}}</h3>
    </div>
    <div class="content-body">
        <!-- Revenue, Hit Rate & Deals -->
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{Lang::get('translation.workforce_data_graph1_title')}}</h4>
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
                                    <h6 class="form-section"><i class="la la-eye"></i> {{Lang::get('translation.filters')}}</h6>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="col-md-12 label-control" for="userinput2">{{Lang::get('translation.year')}}</label>
                                                <select class="select2 form-control" id="year">
                                                    <optgroup label="{{Lang::get('translation.choose_year')}}">
                                                        <option name='year' selected value="all">{{Lang::get('translation.all')}}</option>
                                                        @for ($i = 2008; $i < 2019; $i++)
                                                            <option name='year' value="{{$i}}">{{ $i }}</option>
                                                        @endfor
                                                    </optgroup>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="col-md-12 label-control" for="userinput2">{{Lang::get('translation.degree')}}</label>
                                                <select class="select2 form-control" id="degree">
                                                    <optgroup label="{{Lang::get('translation.choose_degree')}}">
                                                       @foreach($data['degrees'] as $degree)
                                                            <option name='degree' value="{{$degree['degree_id']}}">{{ $degree['degree_name'] }}</option>
                                                        @endforeach
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group ">
                                                <label class="col-md-12 label-control"
                                                       for="userinput2">{{Lang::get('translation.university')}}</label>
                                                <select class="select2 form-control" id="university">
                                                    <optgroup label="{{Lang::get('translation.choose_university')}}">
                                                        <option name='university' selected value="all">{{Lang::get('translation.all')}}</option>
                                                        @foreach($data['universities'] as $university)
                                                            <option name="university"
                                                                    value="{{$university['uni_id']}}">{{$university['uni_name']}}</option>
                                                        @endforeach
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                        {{--<div class="col-md-4">--}}
                                            {{--<div class="form-group ">--}}
                                                {{--<label class="col-md-12 label-control"--}}
                                                       {{--for="userinput2">Gender</label>--}}
                                                {{--<select class="select2 form-control" name="gender"--}}
                                                        {{--id="gender">--}}
                                                    {{--<optgroup label="Choose Gender">--}}
                                                        {{--<option  value="all" disabled>Të--}}
                                                            {{--gjitha--}}
                                                        {{--</option>--}}
                                                        {{--<option value="male" disabled>Male--}}
                                                        {{--</option>--}}
                                                        {{--<option  value="all" disabled>Female--}}
                                                        {{--</option>--}}
                                                    {{--</optgroup>--}}
                                                {{--</select>--}}

                                            {{--</div>--}}
                                        {{--</div>--}}
                                        <div class="col-md-2" style="padding: 5px">
                                            <label class="col-md-12 label-control" for="userinput2"></label>
                                            <button type="button" onclick="get_filtered('clicked')"
                                                    class="btn btn-primary">
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
            <div class="col-lg-4 col-md-4">
                <div class="card" style="height: 97%">
                    <div class="card-header">
                        <h4 class="card-title">{{Lang::get('translation.workforce_data_map_title')}}</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body p-0 pb-0">
                            <p class="card-body">
                                {{Lang::get('translation.workforce_data_map_desc')}}
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12">
                        <div class="card" style="height: auto;">
                            <div id="map" class="center" style="margin-left:6px; margin-right:6px;"></div>

                            {{--<iframe src="https://datawrapper.dwcdn.net/fz5Xj/1/" scrolling="yes" class="center"--}}
                                    {{--style="margin-left:6px; margin-right:6px;" height="500px" name="myiFrame"--}}
                                    {{--frameborder="0" marginheight="0px"--}}
                                    {{--style="width:0; min-width:100%!important; border:none;"></iframe>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="card" >
                    <div class="card-header">
                        <h4 class="card-title"> {{Lang::get('translation.workforce_data_graph2_title')}} </h4>
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
                    <div class="card-body">
                        <div class="row">
                            <div class="form-body col-md-12">
                                <h6 class="form-section"><i class="la la-eye"></i> {{Lang::get('translation.filters')}}</h6>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="col-md-12 label-control" for="userinput2">{{Lang::get('translation.year')}}</label>
                                            <select class="select2 form-control" id="year2">
                                                <option name='year' value="all" selected >All</option>
                                                <optgroup label="{{Lang::get('translation.choose_year')}}">
                                                    @for ($i = 2008; $i <= 2019; $i++)
                                                        <option name='year'  value="{{$i}}">{{ $i }}</option>
                                                    @endfor
                                                </optgroup>
                                            </select>

                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group ">
                                            <label class="col-md-12 label-control"
                                                   for="userinput2">{{Lang::get('translation.skills')}}</label>
                                            <select class="select2 form-control" name="skills[]" multiple="multiple"
                                                    id="skills">
                                                <optgroup label="{{Lang::get('translation.choose_skills')}}">
                                                    <option name='city' value="all" disabled>{{Lang::get('translation.all')}}</option>
                                                    @foreach($data['skills'] as $skill)
                                                        <option value="{{$skill['skill_name']}}">{{$skill['skill_name']}}</option>
                                                    @endforeach
                                                </optgroup>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-md-2" style="padding: 5px">
                                        <label class="col-md-12 label-control" for="userinput2"></label>
                                        <button type="button" onclick="get_filtered2('clicked')"
                                                class="btn btn-primary">
                                            <i class="la la-check-square-o"></i> {{Lang::get('translation.filter_button')}}
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div id="chartContainer2" style="width:100%; height:300px;"></div>
                    </div>
                </div>
            </div>
            {{--<div class="col-xl-12 col-lg-12 col-md-12">--}}
                {{--<div class="card">--}}
                    {{--<div class="card-header">--}}
                        {{--<h4 class="card-title">{{Lang::get('translation.workforce_data_graph3_title')}}</h4>--}}
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
                    {{--<div class="card-content collapse show">--}}
                        {{--<div class="card-body">--}}
                            {{--<div class="row">--}}
                                {{--<div class="form-body col-md-12">--}}
                                    {{--<h6 class="form-section"><i class="la la-eye"></i> {{Lang::get('translation.filters')}}</h6>--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col-md-3">--}}
                                            {{--<div class="form-group">--}}
                                                {{--<label class="col-md-12 label-control" for="userinput2">{{Lang::get('translation.gender')}}</label>--}}
                                                {{--<select class="select2 form-control" id="gender3" name="gender3">--}}
                                                    {{--<optgroup label="{{Lang::get('translation.choose_gender')}}">--}}
                                                        {{--<option selected value="all">{{Lang::get('translation.all')}}</option>--}}
                                                        {{--<option   value="Male">{{Lang::get('translation.male')}}</option>--}}
                                                        {{--<option   value="Female">{{Lang::get('translation.female')}}</option>--}}
                                                    {{--</optgroup>--}}
                                                {{--</select>--}}

                                            {{--</div>--}}
                                        {{--</div>--}}


                                        {{--<div class="col-md-4">--}}
                                            {{--<div class="form-group ">--}}
                                                {{--<label class="col-md-12 label-control"--}}
                                                       {{--for="userinput2">{{Lang::get('translation.skills')}}</label>--}}
                                                {{--<select class="select2 form-control" name="skills3" multiple="multiple"--}}
                                                        {{--id="skills3">--}}
                                                    {{--<optgroup label="{{Lang::get('translation.choose_skills')}}">--}}
                                                        {{--<option name='city' value="all" disabled>{{Lang::get('translation.all')}}</option>--}}
                                                        {{--@foreach($data['skills'] as $skill)--}}
                                                            {{--<option value="{{$skill['skill_id']}}">{{$skill['skill_name']}}</option>--}}
                                                        {{--@endforeach--}}
                                                    {{--</optgroup>--}}
                                                {{--</select>--}}

                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-md-2" style="padding: 5px">--}}
                                            {{--<label class="col-md-12 label-control" for="userinput2"></label>--}}
                                            {{--<button type="button" onclick="get_filtered('clicked')"--}}
                                                    {{--class="btn btn-primary">--}}
                                                {{--<i class="la la-check-square-o"></i> {{Lang::get('translation.filter_button')}}--}}
                                            {{--</button>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<hr>--}}
                            {{--<div id="chartContainer3" style="width:100%; height:300px;"></div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-xl-12 col-lg-12 col-md-12">--}}
                {{--<div class="card" >--}}
                    {{--<div class="card-header">--}}
                        {{--<h4 class="card-title">{{Lang::get('translation.workforce_data_graph4_title')}}</h4>--}}
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
                    {{--<div class="card-content collapse show">--}}
                        {{--<div class="card-body">--}}
                            {{--<div class="row">--}}
                                {{--<div class="form-body col-md-12">--}}
                                    {{--<h6 class="form-section"><i class="la la-eye"></i> {{Lang::get('translation.filters')}}</h6>--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col-md-3">--}}
                                            {{--<div class="form-group ">--}}
                                                {{--<label class="col-md-12 label-control"--}}
                                                       {{--for="userinput2">{{Lang::get('translation.gender')}}</label>--}}
                                                {{--<select class="select2 form-control" id="gender4">--}}
                                                    {{--<optgroup label="{{Lang::get('translation.choose_gender')}}">--}}
                                                        {{--<option selected value="all">{{Lang::get('translation.all')}}</option>--}}
                                                        {{--<option  value="male">{{Lang::get('translation.male')}}</option>--}}
                                                        {{--<option  value="female">{{Lang::get('translation.female')}}</option>--}}
                                                    {{--</optgroup>--}}
                                                {{--</select>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-md-4">--}}
                                            {{--<div class="form-group ">--}}
                                                {{--<label class="col-md-12 label-control"--}}
                                                       {{--for="userinput2">Skills</label>--}}
                                                {{--<select class="select2 form-control" name="skills4" multiple="multiple"--}}
                                                        {{--id="skills4">--}}
                                                    {{--<optgroup label="Choose Skills">--}}
                                                        {{--<option name='city' value="all" disabled>Të--}}
                                                            {{--gjitha--}}
                                                        {{--</option>--}}
                                                        {{--@foreach($data['skills'] as $skill)--}}
                                                            {{--<option value="{{$skill['skill_id']}}">{{$skill['skill_name']}}</option>--}}
                                                        {{--@endforeach--}}
                                                    {{--</optgroup>--}}
                                                {{--</select>--}}

                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-md-2" style="padding: 5px">--}}
                                            {{--<label class="col-md-12 label-control" for="userinput2"></label>--}}
                                            {{--<button type="button" onclick="get_filtered('clicked')"--}}
                                                    {{--class="btn btn-primary">--}}
                                                {{--<i class="la la-check-square-o"></i> {{Lang::get('translation.filter_button')}}--}}
                                            {{--</button>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<hr>--}}
                            {{--<div id="chartContainer4" style="width:100%; height:300px;"></div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>

    </div>
    </div>
    </div>
    <!-- BEGIN: Page JS-->
    <script src="{{URL::asset('/app-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>

    <script src="/app-assets/vendors/js/forms/select/select2.full.min.js" type="text/javascript"></script>
    <script src="/app-assets/js/scripts/forms/select/form-select2.js" type="text/javascript"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.8.3/apexcharts.js" type="text/javascript"></script>



    <script>

        function get_filtered(clicked = null) {

            var year = $('#year').find(":selected").val();
            var degree =$('#degree').find(":selected").val();
            var university = $('#university').find(":selected").val();

            $.ajax({
                type: "GET",
                url: "graduating_per_ict_dep_each_university",
                data: {"year": year,"university": university, "degree": degree},
                beforeSend: function() {
                    reload_data();
                },
                success: function (result) {
                    var universities = [];
                    var data_sets = [];
                    data = JSON.parse(result);

                    $.each(data[0], function (key, value) {
                        universities.push(value);
                    });

                    $.each(data[1], function (key, value) {
                        data_sets.push(value);
                    });
                    console.log(universities);

                    var options1 = {
                        chart: {
                            height: 430,
                            type: 'bar',
                        },
                        plotOptions: {
                            bar: {
                                horizontal: true,
                                dataLabels: {
                                    position: 'top',
                                    columnWidth: '55%',
                                    endingShape: 'rounded'
                                },
                            }
                        },
                        dataLabels: {
                            enabled: true,
                            offsetX: -6,
                            style: {
                                fontSize: '12px',
                                colors: ['#fff']
                            }
                        },
                        fill: {
                            colors: [ '#266961','#093637']
                        },
                        series: data_sets,
                        xaxis: {
                            categories: universities,
                        },

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

            var year2 = $('#year2').find(":selected").text();
            var skills = $('#skills').val();

            $.ajax({
                type: "GET",
                url: "grad_students_per_skill_area",
                data: {"year": year2,"skills": skills},
                beforeSend: function() {
                    reload_data();
                },
                success: function (result) {
                    var skills2 = [];
                    var data_sets2 = [];
                    data = JSON.parse(result);

                    $.each(data[0], function (key, value) {
                        skills2.push(value);
                    });

                    $.each(data[1], function (key, value) {
                        data_sets2.push(value);
                    });
                    console.log(data_sets2);

                    var options2 = {
                        chart: {
                            height: 350,
                            type: 'bar',
                            stacked: true,
                        },
                        plotOptions: {
                            bar: {
                                horizontal: false,
                            },

                        },

                        fill: {
                            colors: [ '#266961','#358577']
                        },
                        series: data_sets2,
                        title: {
                            text: 'Year ' + 2019
                        },
                        xaxis: {
                            categories: skills2,
                            labels: {
                                formatter: function(val) {
                                    return val
                                }
                            }
                        },
                        yaxis: {
                            title: {
                                text: undefined
                            },

                        },
                        tooltip: {
                            y: {
                                formatter: function(val) {
                                    return val
                                }
                            }
                        },


                        legend: {
                            position: 'top',
                            horizontalAlign: 'left',
                            offsetX: 40
                        }
                    }





                    var chart2 = new ApexCharts(
                        document.querySelector("#chartContainer2"),
                        options2
                    );

                    chart2.render();


                    if (clicked != null) {
                        update();
                    }

                    function update() {
                        chart2.updateOptions({
                            series: data_sets2,
                        })

                    }



                }
            });
        }
        function get_filtered3(clicked = null) {

            var year3 = $('#gender3').find(":selected").text();
            var skills3 = $('#skills3').val();

            $.ajax({
                type: "GET",
                url: "get_ict_per_year",
                data: {"year": year3, "skills": skills3},
                beforeSend: function() {
                    reload_data();
                },
                success: function (result) {
                    var years_set = [];
                    var data_sets3 = [];
                    data = JSON.parse(result);

                    $.each(data[0], function (key, value) {
                        years_set.push(value);
                    });

                    $.each(data[1], function (key, value) {
                        data_sets3.push(value);
                    });
                    console.log(years_set);

                    var options3 = {
                        chart: {
                            height: 750,
                            type: 'bar',
                            stacked: true,
                            width: '100%'
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
                        },
                        fill: {
                            colors: [ '#3CB371','#093637','#449f8c','#358577']
                        },
                        series: data_sets3,

                        xaxis: {
                            categories: years_set,
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
                        options3
                    );

                    chart3.render();


                    if (clicked != null) {
                        update();
                    }

                    function update() {
                        chart3.updateOptions({
                            series: data_sets3,
                        })

                    }



                }
            });
        }
        function get_filtered4(clicked = null) {

            var gender4 = $('#gender4').find(":selected").text();
            var cities4 = $('#cities4').val();
            var degree4 = $('#degree4').find(":selected").text();

            $.ajax({
                type: "GET",
                url: "get_aggregate_supply",
                data: {"gender": gender4},
                beforeSend: function() {
                    reload_data();
                },
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

                    var options4 = {
                        chart: {
                            height: 700,
                            type: 'bar',
                            stacked: true,
                            stackType: '100%',
                            width: '100%'

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
                        },
                        fill: {
                            colors: ['#093637', '#266961','#358577','#449f8c']
                        },
                        series: data_sets4,

                        xaxis: {
                            categories: years4,
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




                    var chart4 = new ApexCharts(
                        document.querySelector("#chartContainer4"),
                        options4
                    );

                    chart4.render();


                    if (clicked != null) {
                        update();
                    }

                    function update() {
                        chart4.updateOptions({
                            series: data_set4,
                        })

                    }



                }
            });
        }
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

        $(document).ready(function () {
            get_filtered();
            get_filtered2();
            get_filtered3();
            get_filtered4();
        });



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
            ['kv-7313', 20],
            ['kv-7314', 21],
            ['kv-843', 22],
            ['kv-7315', 23],
            ['kv-7316', 24],
            ['kv-7317', 25],
            ['kv-7323', 26],
            ['kv-7324', 27],
            ['kv-7325', 28],
            ['kv-7326', 29]
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