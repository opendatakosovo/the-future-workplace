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

@section('content')
    <div class="col-12 d-flex align-items-center justify-content-center">
        <div class="col-lg-4 col-md-6 col-10 box-shadow-2 p-0">
            <div class="card border-grey border-lighten-3 px-1 py-1 box-shadow-3 m-0">
                <div class="card-header border-0">
                    <div class="text-center mb-1">
                        <img src="app-assets/images/logo/logo.png" alt="branding logo">
                    </div>
                    <div class="font-large-1  text-center">
                        This page is under maintenance
                    </div>
                </div>
                <div class="card-body text-center pt-0">
                    <p>We're sorry for the inconvenience.
                        <br> Please check back later.</p>
                    <div class="mt-2">
                        <i class="la la-cog spinner font-large-2 danger"></i>
                    </div>
                </div>
                <hr>
                <div class="text-center pt-2 pb-2">
                    <a href="#" class="btn btn-social-icon round mr-1 mb-1 btn-facebook">
                        <span class="ft-facebook"></span>
                    </a>
                    <a href="#" class="btn btn-social-icon round mr-1 mb-1 btn-twitter">
                        <span class="ft-twitter"></span>
                    </a>
                    <a href="#" class="btn btn-social-icon round mr-1 mb-1 btn-instagram">
                        <span class="ft-instagram"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection