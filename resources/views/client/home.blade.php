<?php
/**
 * Created by PhpStorm.
 * User: Dren
 * Date: 7/22/2019
 * Time: 4:00 PM
 */
?>
@extends('layouts/main')
@section('title', 'Ballina')
@section('content')
    <div class="content-header-left col-md-4 col-12 mb-2">
        <h3 class="content-header-title">Ballina</h3>
    </div>
    <div class="content-body">


        <!-- Revenue, Hit Rate & Deals -->
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Numri i te Diplomuarve ne TIK</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li>
                                    <a class="btn btn-glow btn-round btn-bg-gradient-x-red-pink" href="{{ url('stats') }}">Më Shumë</a>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body p-0 pb-0">
                            <div class="chartist">
                                <div id="project-stats" class="height-350 areaGradientShadow1"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">

                <div class="row">

                    <div class="col-12">
                        <div class="card pull-up border-top-info border-top-3 rounded-0">
                            <div class="card-header">
                                <h4 class="card-title">Numri i te regjistruarve ne Shkenca Kompjuterike </h4>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body p-1">
                                    <h4 class="font-large-1 text-bold-400">3990 <i class="ft-users float-right"></i></h4>
                                </div>
                                <div class="card-footer p-1">
                                    <span class="text-muted"><i class="la la-arrow-circle-o-up info"></i> 42% Rritje mrenda 8 viteve</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

             </div>
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header p-1">
                        <h4 class="card-title float-left" >Statistika te pergjithshme  - <span class="blue-grey lighten-2 font-small-3 mb-0">2018</span></h4>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-footer text-center p-1">
                            <div class="row">
                                <div class="col-md-3 col-12 border-right-blue-grey border-right-lighten-5 text-center">
                                    <p class="blue-grey lighten-2 mb-0">Paga Mesatare Meshkuj</p>
                                    <p class="font-medium-5 text-bold-400">450 euro</p>
                                </div>
                                <div class="col-md-3 col-12 border-right-blue-grey border-right-lighten-5 text-center">
                                    <p class="blue-grey lighten-2 mb-0">Paga Mesatare Femra</p>
                                    <p class="font-medium-5 text-bold-400">470 euro</p>
                                </div>
                                <div class="col-md-3 col-12 border-right-blue-grey border-right-lighten-5 text-center">
                                    <p class="blue-grey lighten-2 mb-0">Numri i punesuarve</p>
                                    <p class="font-medium-5 text-bold-400">58%</p>
                                </div>
                                <div class="col-md-3 col-12 border-right-blue-grey border-right-lighten-5 text-center">
                                    <p class="blue-grey lighten-2 mb-0">Numri i te diplomuarve</p>
                                    <p class="font-medium-5 text-bold-400">42%</p>
                                </div>

                            </div>
                            <hr>
                            <span class="text-muted"><a href="{{ url('stats') }}" class="danger darken-2">Statistika te pergjithshme</a></span>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <div class="card" style="height: 100%">
                    <div class="card-header">
                        <h4 class="card-title">Pershkrimi Dhe Qellimi</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    </div>

                    <div class="col-xl-8 col-lg-8">
                        <div class="card" >

                            <div class="card-content">
                                <div class="card-body">
                                    <ul class="nav nav-pills nav-pill-with-active-bordered">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="base-pill21" data-toggle="pill" href="#pill21" aria-expanded="true">Hyrja</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="base-pill22" data-toggle="pill" href="#pill22" aria-expanded="false">Qellimi</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="base-pill23" data-toggle="pill" href="#pill23" aria-expanded="false">Bashkepunimi</a>
                                        </li>

                                    </ul>
                                    <div class="tab-content px-1 pt-1">
                                        <div role="tabpanel" class="tab-pane active" id="pill21" aria-expanded="true" aria-labelledby="base-pill21">
                                            <p>Open Data Kosovo (ODK) beson se hapja e te dhenave publike eshte shume e rendesishme ne ndertimin e nje qeverisjeje te mire, transparente dhe llogaridhenese. </br>Prandaj, te dhenat e zotuara nga institucionet shteterore duhet te jene publike, lehte te qasshme dhe te prezentohen ne formate te hapura. </br>Leshimi i te dhenave te institucioneve shteterore permban kushtin bazik qe qytetaret, shoqeria civile, akademite dhe palet tjera te interesuara t’i perdorin keto te dhena per te ndikuar pozitivisht ne shoqerine.</p>
                                        </div>
                                        <div class="tab-pane" id="pill22" aria-labelledby="base-pill22">
                                            <p>Objektivi kryesor i Projektit eshte te rris informacionet e tregut te punes ne sektorin e TIK ne Kosove ne menyre qe kjo te kontribuoje ne mundesi punesimi permes sherbimeve te ndryshme te identifikuara dhe mundesive biznesore ne Kosove. Objektivi specifik 1: Te krijoj mekanizma/produkte digjitale qe bejne nderlidhjen e te dhenave te cilat kontribuojne ne zhvillimin ekonomik; Objektivi specifik 2: Te ndihmoje qe potenciali i tregut te punes ne sektorin e TIK te kuptohet me lehte; Objektivi specifik 2: Te kontribuoje ne rritjen e industrise se TIK-ut.</p>
                                        </div>
                                        <div class="tab-pane" id="pill23" aria-labelledby="base-pill23">
                                            <p>ODK ne bashkepunim me OEK zhvilloi nje produkt digjital qe mblodhi, analizoi dhe prodhoi te dhena te tregut te punes ne sektorin e TIK-ut. Produkti digjital mblodhi te dhena nga sektori I edukimit, duke perfshire sektorin public dhe privat te shkollave te mesme, shkollave profesionale, dhe Universiteteve ne menyre qe te analizoje trended a kaluara dhe te tanishme, dhe ky produkt do sherbeje si pikenisje per te prodhuar produkte per sektoret tjera. Gjithashtu, produkti digjital analizoi dallimet ne gjini ne edukim dhe perqindjen e punesimit ne tregun e punes.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4">
                <div class="card card-transparent">
                    <div class="card-header bg-transparent pl-0">
                        <h5 class="card-title text-bold-700">Graph 1</h5>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    </div>
                    <div class="card-content">
                        <div id="project-income-chart" class="height-450 BarChartShadow"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-1">
            <div class="col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Numri i te diplomuarve ne Universitetet e TIK</h4>
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
                        <div id="new-projects" class="height-400 GradientlineShadow"></div>
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
@endsection