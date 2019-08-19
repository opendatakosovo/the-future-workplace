@extends('layouts/main')
@section('title', 'Harta e Fuqise Punetore')
@section('content')
    <div class="content-header-left col-md-6 col-12 mb-2">
        <h3 class="content-header-title">Harta e Institucioneve Arsimore</h3>
    </div>
    <div class="content-body">
        <!-- Revenue, Hit Rate & Deals -->
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Graduating students per ICT department in each University</h4>
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
                                    <h6 class="form-section"><i class="la la-eye"></i> Filtrimet</h6>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="col-md-12 label-control" for="userinput2">Year</label>
                                                <select class="select2 form-control" id="year">
                                                    <optgroup label="Choose Year">
                                                        <option name='year' selected value="all">Të gjitha</option>
                                                        @for ($i = 2008; $i < 2019; $i++)
                                                            <option name='year' value="{{$i}}">{{ $i }}</option>
                                                        @endfor
                                                    </optgroup>
                                                </select>

                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group ">
                                                <label class="col-md-12 label-control"
                                                       for="userinput2">University</label>
                                                <select class="select2 form-control" id="activity">
                                                    <optgroup label="Choose University">
                                                        <option name='activity' selected value="all">Të gjitha</option>
                                                        @foreach($data['degrees'] as $degree)
                                                            <option name="activity"
                                                                    value="{{$degree}}">{{$degree}}</option>
                                                        @endforeach
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group ">
                                                <label class="col-md-12 label-control"
                                                       for="userinput2">Gender</label>
                                                <select class="select2 form-control" name="gender"
                                                        id="gender">
                                                    <optgroup label="Choose Gender">
                                                        <option  value="all" disabled>Të
                                                            gjitha
                                                        </option>
                                                        <option value="male" disabled>Male
                                                        </option>
                                                        <option  value="all" disabled>Female
                                                        </option>
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
                            <div id="chartContainer" style="width:100%; height:300px;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="card" style="height: 97%">
                    <div class="card-header">
                        <h4 class="card-title">Harta e Fuqisë Punëtore</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body p-0 pb-0">
                            <p class="card-body">
                                Me poshte eshte paraqitur harta e Kosoves me shumicen e komunave ku ne to paraqitet
                                numri varësisht nga sa studentë kanë diplomuar në fushen e TIK-ut në nivel universitar.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-12">
                        <div class="card" style="height: auto;">
                            <iframe src="https://datawrapper.dwcdn.net/fz5Xj/1/" scrolling="yes" class="center"
                                    style="margin-left:6px; margin-right:6px;" height="500px" name="myiFrame"
                                    frameborder="0" marginheight="0px"
                                    style="width:0; min-width:100%!important; border:none;"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="card" >
                    <div class="card-header">
                        <h4 class="card-title">Graduating students per skills area </h4>
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
                                <h6 class="form-section"><i class="la la-eye"></i> Filtrimet</h6>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="col-md-12 label-control" for="userinput2">Year</label>
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

                                    <div class="col-md-4">
                                        <div class="form-group ">
                                            <label class="col-md-12 label-control"
                                                   for="userinput2">Skills</label>
                                            <select class="select2 form-control" name="city" multiple="multiple"
                                                    id="skills">
                                                <optgroup label="Choose Skills">
                                                    <option name='city' value="all" disabled>Të
                                                        gjitha
                                                    </option>
                                                    @foreach($data['cities'] as $city)
                                                        <option value="{{$city}}">{{$city}}</option>
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
                        <div id="chartContainer2" style="width:100%; height:300px;"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Aggregate supply of ICT graduates broken down by skills Area</h4>
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
                                    <h6 class="form-section"><i class="la la-eye"></i> Filtrimet</h6>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="col-md-12 label-control" for="userinput2">Year</label>
                                                <select class="select2 form-control" id="year3">
                                                    <optgroup label="Zgjedh Vitin">
                                                        <option name='year' selected value="all">Të gjitha</option>
                                                        @for ($i = 2008; $i < 2019; $i++)
                                                            <option name='year' value="{{$i}}">{{ $i }}</option>
                                                        @endfor
                                                    </optgroup>
                                                </select>

                                            </div>
                                        </div>


                                        <div class="col-md-4">
                                            <div class="form-group ">
                                                <label class="col-md-12 label-control"
                                                       for="userinput2">Skills</label>
                                                <select class="select2 form-control" name="skills3" multiple="multiple"
                                                        id="skills3">
                                                    <optgroup label="Choose Skills">
                                                        <option name='city' value="all" disabled>Të
                                                            gjitha
                                                        </option>
                                                        @foreach($data['cities'] as $city)
                                                            <option value="{{$city}}">{{$city}}</option>
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
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="card" >
                    <div class="card-header">
                        <h4 class="card-title">Breakdown of supply of ICT graduates by Skills Area</h4>
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
                                    <h6 class="form-section"><i class="la la-eye"></i> Filtrimet</h6>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group ">
                                                <label class="col-md-12 label-control"
                                                       for="userinput2">Gender</label>
                                                <select class="select2 form-control" id="gender4">
                                                    <optgroup label="Choose Degree/Program">
                                                        <option  selected value="all">Të gjitha</option>
                                                        <option  value="male">Male</option>
                                                        <option  value="female">Female</option>
                                                        @foreach($data['degrees'] as $degree)
                                                            <option name="activity"
                                                                    value="{{$degree}}">{{$degree}}</option>
                                                        @endforeach
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group ">
                                                <label class="col-md-12 label-control"
                                                       for="userinput2">Skills</label>
                                                <select class="select2 form-control" name="skills4" multiple="multiple"
                                                        id="skills4">
                                                    <optgroup label="Choose Skills">
                                                        <option name='city' value="all" disabled>Të
                                                            gjitha
                                                        </option>
                                                        @foreach($data['cities'] as $city)
                                                            <option value="{{$city}}">{{$city}}</option>
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
                            <div id="chartContainer4" style="width:100%; height:300px;"></div>
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

    <script src="app-assets/vendors/js/forms/select/select2.full.min.js" type="text/javascript"></script>

    <script src="app-assets/js/scripts/forms/select/form-select2.js" type="text/javascript"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.8.3/apexcharts.js" type="text/javascript"></script>



    <script>

        function get_filtered(clicked = null) {

            var year = $('#year').find(":selected").text();
            var cities = $('#cities').val();
            var degree = $('#degree').find(":selected").text();

            $.ajax({
                type: "GET",
                url: "get_business_data",
                data: {"year": year,"degree": degree, "cities": cities},
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
            var cities2 = $('#cities2').val();
            var degree2 = $('#degree2').find(":selected").text();

            $.ajax({
                type: "GET",
                url: "get_business_data",
                data: {"year": year2,"degree": degree2, "cities": cities2},
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

                    var options2 = {
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
                        series: data_sets2,

                        xaxis: {
                            categories: municipalities2,
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
                            series: data_set2,
                        })

                    }



                }
            });
        }
        function get_filtered3(clicked = null) {

            var year3 = $('#year3').find(":selected").text();
            var cities3 = $('#cities3').val();
            var degree3 = $('#degree3').find(":selected").text();

            $.ajax({
                type: "GET",
                url: "get_business_data",
                data: {"year": year3,"degree": degree3, "cities": cities3},
                beforeSend: function() {
                    reload_data();
                },
                success: function (result) {
                    var municipalities3 = [];
                    var data_sets3 = [];
                    data = JSON.parse(result);

                    $.each(data[0], function (key, value) {
                        municipalities3.push(value);
                    });

                    $.each(data[1], function (key, value) {
                        data_sets3.push(value);
                    });
                    console.log(data_sets3);

                    var options3 = {
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
                        series: data_sets3,

                        xaxis: {
                            categories: municipalities3,
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

            var year4 = $('#year4').find(":selected").text();
            var cities4 = $('#cities4').val();
            var degree4 = $('#degree4').find(":selected").text();

            $.ajax({
                type: "GET",
                url: "get_business_data",
                data: {"year": year4,"degree": degree4, "cities": cities4},
                beforeSend: function() {
                    reload_data();
                },
                success: function (result) {
                    var municipalities4 = [];
                    var data_sets4 = [];
                    data = JSON.parse(result);

                    $.each(data[0], function (key, value) {
                        municipalities4.push(value);
                    });

                    $.each(data[1], function (key, value) {
                        data_sets4.push(value);
                    });
                    console.log(data_sets4);

                    var options4 = {
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
                        series: data_sets4,

                        xaxis: {
                            categories: municipalities4,
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
@endsection