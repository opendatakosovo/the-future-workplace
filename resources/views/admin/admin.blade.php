@extends('layouts/admin/main')
@section('content')

    <div class="content-body">
        <!-- BEGIN: Content-->
        <!-- Chart -->
        <div class="row match-height">
            <div class="col-12">
                <div class="">
                    <div id="gradient-line-chart1" class="height-250 GradientlineShadow1"></div>
                </div>
            </div>
        </div>
        <!-- Chart -->
        <!-- eCommerce statistic -->
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-header ">
                        <!-- <h4 class="card-title">New Customers</h4> -->
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
                    <div class="card-content">
                        <div class="card-body text-center">
                            <div class="card-header pt-0 pb-0">
                                <p class="danger darken-2">Visitors Today</p>
                                <h3 class="display-4 blue-grey lighten-1">{{$data['total_visitors_today']}}</h3>
                            </div>
                            <div class="card-content">
                                <div id="new-customers" class="height-150 newCustomersdonutShadow"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-header ">
                        <!-- <h4 class="card-title">New Projects</h4> -->
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
                    <div class="card-content">
                        <div class="card-body text-center">
                            <div class="card-header pt-0 pb-0">
                                <p class="info darken-2">Most Visited Page Today</p>
                                <h3 class="display-4 blue-grey lighten-1">{{$data['most_visited_page']}}</h3>
                            </div>
                            <div class="card-content">
                                <div id="new-projects" class="height-150 newProjectsdonutShadow">
                                    <svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%"
                                         class="ct-chart-donut" style="width: 100%; height: 100%;">
                                        <g class="ct-series ct-series-a">
                                            <path d="M232.55,5A70,70,0,1,0,232.563,5L232.563,15A60,60,0,1,1,232.552,15Z"
                                                  class="ct-slice-donut-solid" ct:value="100"></path>
                                        </g>
                                        <g>
                                            <text dx="232.5625" dy="82.001953125" text-anchor="middle" class="ct-label"
                                                  font-family="feather">
                                            </text>
                                        </g>
                                        <defs>
                                            <linearGradient id="donutGradient6" x1="0" y1="1" x2="0" y2="0">
                                                <stop offset="0%" stop-color="rgba(40,175,208,1)"></stop>
                                                <stop offset="95%" stop-color="rgba(40,175,208, 0.3)"></stop>
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-12">
                <div class="card">
                    <div class="card-header ">
                        <!-- <h4 class="card-title">Tasks Completed</h4> -->
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
                    <div class="card-content">
                        <div class="card-body text-center">
                            <div class="card-header pt-0 pb-0">
                                <p class="warning darken-2">Total Page Views Today</p>
                                <h3 class="display-4 blue-grey lighten-1">{{$data['total_pageViews_today']}}</h3>
                            </div>
                            <div class="card-content">
                                <div id="tasks-completed" class="height-150 tasksCompleteddonutShadow"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-donut" style="width: 100%; height: 100%;"><g class="ct-series ct-series-a"><path d="M232.55,5A70,70,0,1,0,232.563,5L232.563,15A60,60,0,1,1,232.552,15Z" class="ct-slice-donut-solid" ct:value="100"></path></g><g><text dx="232.5625" dy="82.001953125" text-anchor="middle" class="ct-label" font-family="feather"></text></g><defs><linearGradient id="donutGradient7" x1="0" y1="1" x2="0" y2="0"><stop offset="0%" stop-color="rgba(253,185,1,1)"></stop><stop offset="95%" stop-color="rgba(253,185,1, 0.3)"></stop></linearGradient></defs></svg></div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <!--/ eCommerce statistic -->
            <div class="row match-height">
                <div class="col-xl-12 col-lg-12">
                    <h5 class="card-title text-bold-700 my-2">Most Visited Pages</h5>
                    <div class="card">
                        <div class="card-content">
                            <div id="product-summary" class="media-list position-relative">
                                <div class="table-responsive">
                                    <table class="table table-padded table-xl mb-0" id="product-summary-table">
                                        <thead>
                                        <tr>
                                            <th class="border-top-0">Page Title</th>
                                            <th class="border-top-0">Url</th>
                                            <th class="border-top-0">Page Views</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($data['most_visited_pages'] as $d)
                                        <tr>
                                            <td class="text-truncate">{{$d['pageTitle']}}</td>
                                            <td class="text-truncate">
                                                <a href="{{$d['url']}}" target="_blank">{{$d['url']}}</a>
                                            </td>

                                            <td class="text-truncate">
                                                        <span>{{$d['pageViews']}}</span>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-6 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Top Browsers</h4>
                            <a class="heading-elements-toggle">
                                <i class="fa fa-ellipsis-v font-medium-3"></i>
                            </a>

                        </div>
                        <div class="card-body">
                            <div id="todays-tasks">
                                <div class="table-responsive">
                                    <table class="table table-padded mb-0" id="recent-buyer-table">
                                        <tbody>
                                            @foreach($data['top_browsers'] as $browser)
                                            <tr>
                                                <td class="text-truncate border-0 pl-0">
                                                    <span class="list-group-item-heading">{{$browser['browser']}}</span>
                                                </td>
                                                <td class="text-truncate border-0">
                                                    <span class="badge @if($browser['browser'] == 'Safari') badge-primary @elseif($browser['browser'] == 'Chrome' ) badge-warning @else badge-dander @endif">{{{$browser['sessions']}}}</span>
                                                </td>

                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Visitors And Page Views <small>1 Month</small></h4>
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
                        <div class="card-content collapse show">
                            <div class="card-body" style="height: 450px; overflow-y: auto;">
                                <table class="table table-padded table-xl mb-0" id="product-summary-table">
                                    <thead>
                                    <tr>
                                        <th class="border-top-0">Date</th>
                                        <th class="border-top-0">Page Title</th>
                                        <th class="border-top-0">Visitors</th>
                                        <th class="border-top-0">Page Views</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data['visitors_and_page_views'] as $d)
                                        <tr>
                                            <td class="text-truncate">{{$d['date']->toDateString()}}</td>
                                            <td class="text-truncate">
                                                <a href="#" >{{$d['pageTitle']}}</a>
                                            </td>
                                            <td class="text-truncate">{{$d['visitors']}}</td>
                                            <td class="text-truncate">
                                                <span>{{$d['pageViews']}}</span>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Statistics -->
        </div>
        <!--/ Statistics -->
        <!-- END: Content-->
    </div>

@endsection