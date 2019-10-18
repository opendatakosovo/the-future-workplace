<?php
/**
 * Created by PhpStorm.
 * User: Dren
 * Date: 9/17/2019
 * Time: 11:16 AM
 */
?>

@section('title', 'Downloads')
@extends('layouts/main')

@section('content')
    <style>
        @media screen and (max-width: 480px) {
            .mobile{
                left: 0 !important;
            }
            .content-wrapper-before{
                display: none;
            }
        }
    </style>
    <div class="row">
        <div class="col-xl-8 col-lg-8 col-md-8 mobile" style="left: 15%;">
            <div class="card">
                {{--<img class="card-img-top" src="app-assets/videos/Landingpagevideo.mp4" alt="Card image cap">--}}
                <video class="card-img-top" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                    <source src="/app-assets/videos/DownloadSample.mp4" type="video/mp4">
                </video>
                <div class="card-body">
                    <h5 class="card-title">{{Lang::get('translation.download')}}</h5>
                    <hr>
                    <p class="card-text">{{Lang::get('translation.download_title')}}</p>

                    <div class="col-md-12">
                        <form class="form form-horizontal" action="/{{app()->getLocale()}}/download_content" method="GET">
                            <div class="form-body">
                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="projectinput6">{{Lang::get('translation.select_document')}}</label>
                                    <div class="col-md-9">
                                        <select id="projectinput6" name="document" class="form-control">
                                            <option value="companies_data">{{Lang::get('translation.company_data')}}</option>
                                            <option value="workforce_data">{{Lang::get('translation.workforce_data')}}</option>
                                            <option value="high_school_data">{{Lang::get('translation.highschool_data')}}</option>
                                            <option value="atk_data">{{Lang::get('translation.atk_data')}}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="projectinput6">{{Lang::get('translation.select_type')}}</label>
                                    <div class="col-md-9">
                                        <select id="projectinput6" name="type" class="form-control">
                                            <option value="csv" selected="">CSV</option>
                                            <option value="json">JSON</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 label-control" for="projectinput6">{{Lang::get('translation.select_year')}}</label>
                                    <div class="col-md-9">
                                        <select id="projectinput6" name="year" class="form-control">
                                            <option value="all">{{Lang::get('translation.all')}}</option>
                                            @for($i = 2008; $i < 2019; $i++)
                                                <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                                <div class="form-actions right">
                                    <button type="submit" class="btn" style="background-color: #24675f; color: white;">
                                        <i class="la la-download"></i> Download
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
