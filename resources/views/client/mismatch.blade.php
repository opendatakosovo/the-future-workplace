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
    .custom-button{
        background-color: #14cea4 !important;
    }
    .card-title a{
        color:#222222 !important;
    }
    .base-timeline-info a {
        color: #2d5650!important;
    }
</style>
@section('content')
    <div class="content-body" style="width: 100%;">
        <!-- Revenue, Hit Rate & Deals -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="card" style="height: 100%">
                    <div class="card-header">
                        <h4 class="card-title">{{Lang::get('translation.skills_mismatch')}}</h4><br>
                        <p class="content-graph">{{Lang::get('translation.mismatch_graph1')}}</p>
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
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title"> {{Lang::get('translation.roadmap')}}</div>
                    </div>
                    <div class="card-body pt-0">
                        <p>Here is the advanced example of how vertical timeline can be used to display information
                            about company</p>
                    </div>
                </div>

                <div class="col-md-8" style="margin-top: 1%;margin: auto;">
                    <section id="timeline" class="timeline-center timeline-wrapper">
                        <h3 class="page-title text-center">{{Lang::get('translation.roadmap')}}</h3>
                        <ul class="timeline">
                            <li class="timeline-line"></li>
                            <li class="timeline-group">
                                <a href="#" class="btn btn-primary round">
                                    <i class="ft-calendar"></i> Viti i 1</a>
                            </li>
                        </ul>
                        <ul class="timeline">
                            <li class="timeline-line"></li>
                            <li class="timeline-item">
                                <div class="timeline-badge custom-badge">
                                <span class="custom-button bg-glow bg-darken-1" data-toggle="tooltip" data-placement="left"
                                      title="Universiteti i Prishtines (FSHMN-Shkenca kompjuterike)">
                                    <i class="la la-graduation-cap"></i>
                                </span>
                                </div>
                                <div class="timeline-card card border-grey border-lighten-2">
                                    <div class="card-header">
                                        <h4 class="card-title">
                                            <a href="#">Universiteti i Prishtines (FSHMN-Shkenca kompjuterike)</a>
                                        </h4>
                                        <p class="card-subtitle text-muted mb-0 pt-1">
                                            <span class="font-small-3">2019</span>
                                        </p>

                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <ul class="list-unstyled base-timeline activity-timeline mt-3"
                                                style="margin-top: 1rem !important;">
                                                @foreach($data['up_fshmn_shk_year1_result'] as $up_fshmn_year1)
                                                    <li>
                                                        <div class="timeline-icon bg-{{$up_fshmn_year1['logo']}}">
                                                            <i class="ft-monitor font-medium-1"></i>
                                                        </div>
                                                        <div class="act-time">Public 2019</div>
                                                        <div class="base-timeline-info">
                                                            <a href="javascript:void(0)"
                                                               class="text-primary  line-height-2">{{$up_fshmn_year1['name']}}</a>
                                                            {{--<span class="d-block">Design for dashboard, login page and user profile page completed.</span>--}}
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-item mt-3">
                                <div class="timeline-badge custom-badge">
                                    <span class="custom-button bg-glow bg-darken-1" data-toggle="tooltip" data-placement="right"
                                          title="Universiteti i Prishtines (Teknik-Inxhinieri Kompjuterike)">
                                        <i class="la la-graduation-cap"></i>
                                    </span>
                                </div>
                                <div class="timeline-card card border-grey border-lighten-2">
                                    <div class="card-header">
                                        <h4 class="card-title black">
                                            <a href="#">Universiteti i Prishtines (Teknik-Inxhinieri Kompjuterike)</a>
                                        </h4>
                                        <p class="card-subtitle text-muted mb-0 pt-1">
                                            <span class="font-small-3">2019</span>
                                        </p>
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
                                                <li>
                                                    <a data-action="expand">
                                                        <i class="ft-maximize"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <ul class="list-unstyled base-timeline activity-timeline mt-3"
                                                style="margin-top: 1rem !important;">
                                                @foreach($data['up_teknik_inxh_year1_result'] as $up_fshmn_tek_inxh_year1)
                                                    <li>
                                                        <div class="timeline-icon bg-{{$up_fshmn_tek_inxh_year1['logo']}}">
                                                            <i class="ft-monitor font-medium-1"></i>
                                                        </div>
                                                        <div class="act-time">Public 2019</div>
                                                        <div class="base-timeline-info">
                                                            <a href="javascript:void(0)"
                                                               class="text-primary  line-height-2">{{$up_fshmn_tek_inxh_year1['name']}}</a>
                                                            {{--<span class="d-block">Design for dashboard, login page and user profile page completed.</span>--}}
                                                        </div>
                                                    </li>
                                                @endforeach

                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="timeline-item block">
                                <div class="timeline-badge custom-badge" style="z-index: 10;">
                                   <span class="custom-button bg-glow bg-darken-1" data-toggle="tooltip" data-placement="right"
                                         title="Universiteti i Prishtines (Teknik-Telekomunikacion)">
                                        <i class="la la-graduation-cap"></i>
                                    </span>
                                </div>
                                <div class="timeline-card card border-grey border-lighten-2" style="width: 60%; margin: auto;">
                                    <div class="card-header">
                                        <div class="text-center">
                                            <h4 style="margin: 2%">Universiteti i Prishtines (Teknik-Telekomunikacion)</h4>
                                        </div>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <ul class="list-unstyled base-timeline activity-timeline mt-3"
                                                style="margin-top: 1rem !important;">
                                                @foreach($data['up_teknik_telekomunikacion_year1_result'] as $up_fshmn_tek_tel_year1)
                                                    <li>
                                                        <div class="timeline-icon bg-{{$up_fshmn_tek_tel_year1['logo']}}">
                                                            <i class="ft-monitor font-medium-1"></i>
                                                        </div>
                                                        <div class="act-time">Public 2019</div>
                                                        <div class="base-timeline-info">
                                                            <a href="javascript:void(0)"
                                                               class="text-primary  line-height-2">{{$up_fshmn_tek_tel_year1['name']}}</a>
                                                            {{--<span class="d-block">Design for dashboard, login page and user profile page completed.</span>--}}
                                                        </div>
                                                    </li>
                                                @endforeach

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>


                        <!-- 2016 -->
                        <ul class="timeline">
                            <li class="timeline-line"></li>
                            <li class="timeline-group">
                                <a href="#" class="btn btn-primary round">
                                    <i class="ft-calendar"></i> Viti 2</a>
                            </li>
                        </ul>
                        <ul class="timeline">
                            <li class="timeline-line"></li>
                            <!-- /.timeline-line -->

                            <li class="timeline-item">
                                <div class="timeline-badge custom-badge">
                                <span class="custom-button bg-glow bg-darken-1" data-toggle="tooltip" data-placement="left"
                                      title="Universiteti i Prishtines (FSHMN-Shkenca kompjuterike)">
                                    <i class="la la-graduation-cap"></i>
                                </span>
                                </div>
                                <div class="timeline-card card border-grey border-lighten-2">
                                    <div class="card-header">
                                        <h4 class="card-title">
                                            <a href="#">Universiteti i Prishtines (FSHMN-Shkenca kompjuterike)</a>
                                        </h4>
                                        <p class="card-subtitle text-muted mb-0 pt-1">
                                            <span class="font-small-3">2019</span>
                                        </p>

                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <ul class="list-unstyled base-timeline activity-timeline mt-3"
                                                style="margin-top: 1rem !important;">
                                                @foreach($data['up_fshmn_shk_year2_result'] as $up_fshmn_year2)
                                                    <li>
                                                        <div class="timeline-icon bg-{{$up_fshmn_year2['logo']}}">
                                                            <i class="ft-monitor font-medium-1"></i>
                                                        </div>
                                                        <div class="act-time">Public 2019</div>
                                                        <div class="base-timeline-info">
                                                            <a href="javascript:void(0)"
                                                               class="text-primary  line-height-2">{{$up_fshmn_year2['name']}}</a>
                                                            {{--<span class="d-block">Design for dashboard, login page and user profile page completed.</span>--}}
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-item mt-3">
                                <div class="timeline-badge custom-badge">
                                    <span class="custom-button bg-glow bg-darken-1" data-toggle="tooltip" data-placement="right"
                                          title="Universiteti i Prishtines (Teknik-Inxhinieri Kompjuterike)">
                                        <i class="la la-graduation-cap"></i>
                                    </span>
                                </div>
                                <div class="timeline-card card border-grey border-lighten-2">
                                    <div class="card-header">
                                        <h4 class="card-title black">
                                            <a href="#">Universiteti i Prishtines (Teknik-Inxhinieri Kompjuterike)</a>
                                        </h4>
                                        <p class="card-subtitle text-muted mb-0 pt-1">
                                            <span class="font-small-3">2019</span>
                                        </p>
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
                                                <li>
                                                    <a data-action="expand">
                                                        <i class="ft-maximize"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <ul class="list-unstyled base-timeline activity-timeline mt-3"
                                                style="margin-top: 1rem !important;">
                                                @foreach($data['up_teknik_inxh_year2_result'] as $up_fshmn_tek_inxh_year2)
                                                    <li>
                                                        <div class="timeline-icon bg-{{$up_fshmn_tek_inxh_year2['logo']}}">
                                                            <i class="ft-monitor font-medium-1"></i>
                                                        </div>
                                                        <div class="act-time">Public 2019</div>
                                                        <div class="base-timeline-info">
                                                            <a href="javascript:void(0)"
                                                               class="text-primary  line-height-2">{{$up_fshmn_tek_inxh_year2['name']}}</a>
                                                            {{--<span class="d-block">Design for dashboard, login page and user profile page completed.</span>--}}
                                                        </div>
                                                    </li>
                                                @endforeach

                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-item block">
                                <div class="timeline-badge custom-badge" style="z-index: 10;">
                                   <span class="custom-button bg-glow bg-darken-1" data-toggle="tooltip" data-placement="right"
                                         title="Universiteti i Prishtines (Teknik-Telekomunikacion)">
                                        <i class="la la-graduation-cap"></i>
                                    </span>
                                </div>
                                <div class="timeline-card card border-grey border-lighten-2" style="width: 60%; margin: auto;">
                                    {{--<div class="gif-image"></div>--}}
                                    {{--<img class="overlay" src="/app-assets/videos/background.gif"  style="position: absolute; width: 100%;height: 100%">--}}
                                    {{--<div class="overlay"></div>--}}
                                    <div class="card-header">
                                        <div class="text-center">
                                            <h4 style="margin: 2%">Universiteti i Prishtines (Teknik-Telekomunikacion)</h4>
                                        </div>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <ul class="list-unstyled base-timeline activity-timeline mt-3"
                                                style="margin-top: 1rem !important;">
                                                @foreach($data['up_teknik_telekomunikacion_year2_result'] as $up_fshmn_tek_tel_year2)
                                                    <li>
                                                        <div class="timeline-icon bg-{{$up_fshmn_tek_tel_year2['logo']}}">
                                                            <i class="ft-monitor font-medium-1"></i>
                                                        </div>
                                                        <div class="act-time">Public 2019</div>
                                                        <div class="base-timeline-info">
                                                            <a href="javascript:void(0)"
                                                               class="text-primary  line-height-2">{{$up_fshmn_tek_tel_year2['name']}}</a>
                                                            {{--<span class="d-block">Design for dashboard, login page and user profile page completed.</span>--}}
                                                        </div>
                                                    </li>
                                                @endforeach

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>

                        <!-- 2015 -->
                        <ul class="timeline">
                            <li class="timeline-line"></li>
                            <li class="timeline-group">
                                <a href="#" class="btn btn-primary round">
                                    <i class="ft-calendar"></i> Viti 3</a>
                            </li>
                        </ul>
                        <!-- 2015 -->
                        <ul class="timeline">
                            <li class="timeline-line"></li>
                            <li class="timeline-item">
                                <div class="timeline-badge custom-badge">
                                <span class="custom-button bg-glow bg-darken-1" data-toggle="tooltip" data-placement="left"
                                      title="Universiteti i Prishtines (FSHMN-Shkenca kompjuterike)">
                                    <i class="la la-graduation-cap"></i>
                                </span>
                                </div>
                                <div class="timeline-card card border-grey border-lighten-2">
                                    <div class="card-header">
                                        <h4 class="card-title">
                                            <a href="#">Universiteti i Prishtines (FSHMN-Shkenca kompjuterike)</a>
                                        </h4>
                                        <p class="card-subtitle text-muted mb-0 pt-1">
                                            <span class="font-small-3">2019</span>
                                        </p>

                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <ul class="list-unstyled base-timeline activity-timeline mt-3"
                                                style="margin-top: 1rem !important;">
                                                @foreach($data['up_fshmn_shk_year3_result'] as $up_fshmn_year3)
                                                    <li>
                                                        <div class="timeline-icon bg-{{$up_fshmn_year3['logo']}}">
                                                            <i class="ft-monitor font-medium-1"></i>
                                                        </div>
                                                        <div class="act-time">Public 2019</div>
                                                        <div class="base-timeline-info">
                                                            <a href="javascript:void(0)"
                                                               class="text-primary  line-height-2">{{$up_fshmn_year3['name']}}</a>
                                                            {{--<span class="d-block">Design for dashboard, login page and user profile page completed.</span>--}}
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-item mt-3">
                                <div class="timeline-badge custom-badge">
                                    <span class="custom-button bg-glow bg-darken-1" data-toggle="tooltip" data-placement="right"
                                          title="Universiteti i Prishtines (Teknik-Inxhinieri Kompjuterike">
                                        <i class="la la-graduation-cap"></i>
                                    </span>
                                </div>
                                <div class="timeline-card card border-grey border-lighten-2">
                                    <div class="card-header">
                                        <h4 class="card-title black">
                                            <a href="#">Universiteti i Prishtines (Teknik-Inxhinieri Kompjuterike</a>
                                        </h4>
                                        <p class="card-subtitle text-muted mb-0 pt-1">
                                            <span class="font-small-3">2019</span>
                                        </p>
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
                                                <li>
                                                    <a data-action="expand">
                                                        <i class="ft-maximize"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <ul class="list-unstyled base-timeline activity-timeline mt-3"
                                                style="margin-top: 1rem !important;">
                                                @foreach($data['up_teknik_inxh_year3_result'] as $up_fshmn_tek_inxh_year3)
                                                    <li>
                                                        <div class="timeline-icon bg-{{$up_fshmn_tek_inxh_year3['logo']}}">
                                                            <i class="ft-monitor font-medium-1"></i>
                                                        </div>
                                                        <div class="act-time">Public 2019</div>
                                                        <div class="base-timeline-info">
                                                            <a href="javascript:void(0)"
                                                               class="text-primary  line-height-2">{{$up_fshmn_tek_inxh_year3['name']}}</a>
                                                            {{--<span class="d-block">Design for dashboard, login page and user profile page completed.</span>--}}
                                                        </div>
                                                    </li>
                                                @endforeach

                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-item block">
                                <div class="timeline-badge custom-badge" style="z-index: 10;">
                                   <span class="custom-button bg-darken-1" data-toggle="tooltip" data-placement="right"
                                         title="Universiteti i Prishtines (Teknik-Telekomunikacion)">
                                        <i class="la la-graduation-cap"></i>
                                    </span>
                                </div>
                                <div class="timeline-card card border-grey border-lighten-2" style="width: 60%; margin: auto;">
                                    {{--<div class="gif-image"></div>--}}
                                    {{--<img class="overlay" src="/app-assets/videos/background.gif"  style="position: absolute; width: 100%;height: 100%">--}}
                                    {{--<div class="overlay"></div>--}}
                                    <div class="card-header">
                                        <div class="text-center">
                                            <h4 style="margin: 2%">Universiteti i Prishtines (Teknik-Telekomunikacion)</h4>
                                        </div>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <ul class="list-unstyled base-timeline activity-timeline mt-3"
                                                style="margin-top: 1rem !important;">
                                                @foreach($data['up_teknik_telekomunikacion_year3_result'] as $up_fshmn_tek_tel_year3)
                                                    <li>
                                                        <div class="timeline-icon bg-{{$up_fshmn_tek_tel_year3['logo']}}">
                                                            <i class="ft-monitor font-medium-1"></i>
                                                        </div>
                                                        <div class="act-time">Public 2019</div>
                                                        <div class="base-timeline-info">
                                                            <a href="javascript:void(0)"
                                                               class="text-primary  line-height-2">{{$up_fshmn_tek_tel_year3['name']}}</a>
                                                            {{--<span class="d-block">Design for dashboard, login page and user profile page completed.</span>--}}
                                                        </div>
                                                    </li>
                                                @endforeach

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </section>
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
                            colors: ['#215048', '#42a695']

                        },
                        tooltip: {
                            y: {
                                formatter: function (val) {
                                    return val + " %"
                                }
                            }
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

