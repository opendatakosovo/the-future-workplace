<?php
/**
 * Created by PhpStorm.
 * User: Dren
 * Date: 8/8/2019
 * Time: 2:31 PM
 */
?>
@extends('layouts.admin.main')

<style>
    .onoffswitch {
        position: relative;
        width: 78px;
        -webkit-user-select:none; -moz-user-select:none; -ms-user-select: none;
    }

    .onoffswitch-checkbox {
        display: none;
    }

    .onoffswitch-label {
        display: block;
        overflow: hidden;
        cursor: pointer;
        border: 1px solid #999999;
        border-radius: 20px;
    }

    .onoffswitch-inner {
        width: 200%; margin-left: -100%;
        -moz-transition: margin 0.3s ease-in 0s; -webkit-transition: margin 0.3s ease-in 0s;
        -o-transition: margin 0.3s ease-in 0s; transition: margin 0.3s ease-in 0s;
    }

    .onoffswitch-inner:before, .onoffswitch-inner:after {
        float: left; width: 50%; height: 30px; padding: 0; line-height: 30px;
        font-size: 15px; color: white; font-family: Trebuchet, Arial, sans-serif; font-weight: bold;
        -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box;
    }

    .onoffswitch-inner:before {
        content: "ON";
        padding-left: 11px;
        background-color: #00A600; color: #FFFFFF;
    }

    .onoffswitch-inner:after {
        content: "OFF";
        padding-right: 11px;
        background-color: #EEEEEE; color: #999999;
        text-align: right;
    }

    .onoffswitch-switch {
        width: 26px; margin: 2px;
        background: #FFFFFF;
        border: 2px solid #999999; border-radius: 20px;
        position: absolute; top: 0; bottom: 0; right: 44px;
        -moz-transition: all 0.3s ease-in 0s; -webkit-transition: all 0.3s ease-in 0s;
        -o-transition: all 0.3s ease-in 0s; transition: all 0.3s ease-in 0s;
    }

    .onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-inner {
        margin-left: 0;
    }

    .onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-switch {
        right: 0px;
    }

</style>
@section('content')
    <section id="javascript">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Navigation</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                <li><a data-action="close"><i class="ft-x"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content collpase show">
                        <div class="card-body card-dashboard">
                            <div class="table-responsive">
                                <table class="table table-padded table-xl mb-0" id="product-summary-table">
                                    <thead>
                                    <tr>
                                        <th class="border-top-0">Navigation</th>
                                        <th class="border-top-0">URL</th>
                                        <th class="border-top-0">Sub Menu</th>
                                        <th class="border-top-0">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="text-truncate"><input type="text" class="form-control" value="Ballina"></td>
                                        <td class="text-truncate"><input type="text" class="form-control" value="/home"></td>
                                        <td class="text-truncate"><input type="text" class="form-control" value="Main"></td>
                                        <td class="text-truncate">
                                            <div class="onoffswitch">
                                                <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
                                                <label class="onoffswitch-label" for="myonoffswitch">
                                                    <div class="onoffswitch-inner"></div>
                                                    <div class="onoffswitch-switch"></div>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-truncate"><input type="text" class="form-control" value="Udhërrëfyesi i Edukimit"></td>
                                        <td class="text-truncate"><input type="text" class="form-control" value="/udherrefyesi"></td>
                                        <td class="text-truncate"><input type="text" class="form-control" value="Main"></td>
                                        <td class="text-truncate">
                                            <div class="onoffswitch">
                                                <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch1" checked>
                                                <label class="onoffswitch-label" for="myonoffswitch">
                                                    <div class="onoffswitch-inner"></div>
                                                    <div class="onoffswitch-switch"></div>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-truncate"><input type="text" class="form-control" value="Hartat"></td>
                                        <td class="text-truncate"><input type="text" class="form-control" disabled ></td>
                                        <td class="text-truncate"><input type="text" class="form-control" value="Main"></td>
                                        <td class="text-truncate">
                                            <div class="onoffswitch">
                                                <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch2" checked>
                                                <label class="onoffswitch-label" for="myonoffswitch">
                                                    <div class="onoffswitch-inner"></div>
                                                    <div class="onoffswitch-switch"></div>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-truncate"><input type="text" class="form-control" value="Harta e institucioneve Arsimore"></td>
                                        <td class="text-truncate"><input type="text" class="form-control" value="/inst-map" ></td>
                                        <td class="text-truncate"><input type="text" class="form-control" value="Hartat"></td>
                                        <td class="text-truncate">
                                            <div class="onoffswitch">
                                                <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch3" checked>
                                                <label class="onoffswitch-label" for="myonoffswitch">
                                                    <div class="onoffswitch-inner"></div>
                                                    <div class="onoffswitch-switch"></div>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-truncate"><input type="text" class="form-control" value="Harta e fuqise punetore4"></td>
                                        <td class="text-truncate"><input type="text" class="form-control" value="/workforce-map" ></td>
                                        <td class="text-truncate"><input type="text" class="form-control" value="Hartat"></td>
                                        <td class="text-truncate">
                                            <div class="onoffswitch">
                                                <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
                                                <label class="onoffswitch-label" for="myonoffswitch">
                                                    <div class="onoffswitch-inner"></div>
                                                    <div class="onoffswitch-switch"></div>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-truncate"><input type="text" class="form-control" value="Harta e Bizneseve"></td>
                                        <td class="text-truncate"><input type="text" class="form-control" value="/bussiness-map" ></td>
                                        <td class="text-truncate">
                                            <select name="subs" class="form-control">
                                                <option>Ballina</option>
                                                <option>Ballina</option>
                                                <option>Ballina</option>
                                                <option>Ballina</option>
                                            </select>
                                        </td>
                                        <td class="text-truncate">
                                            <div class="onoffswitch">
                                                <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch5" checked>
                                                <label class="onoffswitch-label" for="myonoffswitch">
                                                    <div class="onoffswitch-inner"></div>
                                                    <div class="onoffswitch-switch"></div>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-truncate"><input type="text" class="form-control" value="Statistikat"></td>
                                        <td class="text-truncate"><input type="text" class="form-control" value="/stats" ></td>
                                        <td class="text-truncate"><input type="text" class="form-control" value="Main"></td>
                                        <td class="text-truncate">
                                            <div class="onoffswitch">
                                                <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch6" checked>
                                                <label class="onoffswitch-label" for="myonoffswitch">
                                                    <div class="onoffswitch-inner"></div>
                                                    <div class="onoffswitch-switch"></div>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-truncate"><input type="text" class="form-control" value="Blog"></td>
                                        <td class="text-truncate"><input type="text" class="form-control" value="/blog" ></td>
                                        <td class="text-truncate"><input type="text" class="form-control" value="Main"></td>
                                        <td class="text-truncate">
                                            <div class="onoffswitch">
                                                <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch7" checked>
                                                <label class="onoffswitch-label" for="myonoffswitch">
                                                    <div class="onoffswitch-inner"></div>
                                                    <div class="onoffswitch-switch"></div>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-truncate"><input type="text" class="form-control" value="Test"></td>
                                        <td class="text-truncate"><input type="text" class="form-control" value="/test" ></td>
                                        <td class="text-truncate"><input type="text" class="form-control" value="Main"></td>
                                        <td class="text-truncate">
                                            <div class="onoffswitch">
                                                <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch8" >
                                                <label class="onoffswitch-label" for="myonoffswitch">
                                                    <div class="onoffswitch-inner"></div>
                                                    <div class="onoffswitch-switch"></div>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <script src = "http://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js" defer ></script>


@endsection
