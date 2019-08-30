<?php
?>

@extends('layouts.admin.main')


@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Business Data</h4>
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
                        <div class="pull-right">
                            <button type="button" class="btn btn-outline-primary btn-sm a-btn-slide-text"
                                    data-toggle="modal" data-target="#createUniversity" onclick="createUniversity()">
                                Add New
                            </button>
                        </div>
                        <div class="pull-right">
                            <button type="button" class="btn btn-outline-primary btn-sm a-btn-slide-text"
                                    data-toggle="modal" data-target="#createUniversity" onclick="createUniversity()">
                                Import
                            </button>
                        </div>
                        <table id="example0" class="display" style="width:100%">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name of Business</th>
                                <th>Status</th>
                                <th>Fiscal Number</th>
                                <th>Business Type</th>
                                <th>Capital</th>
                                <th>Number of Employees</th>
                                <th>Date of Registration</th>
                                <th>Registration Number</th>
                                <th>Municipality</th>
                                <th style="width: 100%;">Activities</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data['business_data'] as $key=> $business)
                                <tr>
                                    <td>{{$business['id']}}</td>
                                    <td>{{$business['name_of_business']}}</td>
                                    <td>{{$business['status']}}</td>
                                    <td>{{$business['fiscal_number']}}</td>
                                    <td>{{$business['business_type']}}</td>
                                    <td>{{$business['capital']}}</td>
                                    <td>{{$business['number_of_employees']}}</td>
                                    <td>{{$business['date_of_registration']}}</td>
                                    <td>{{$business['registration_number']}}</td>
                                    <td>{{$business['municipality']}}</td>
                                    <td>
                                        <button type="button" class="btn btn-info btn-sm a-btn-slide-text"
                                                data-toggle="modal" data-target="#createUniversity"
                                                onclick="editUniversity({{$business['id']}},'{{$business['name_of_business']}}')">
                                            Edit
                                        </button>
                                        <button type="button" class="btn btn-danger btn-sm a-btn-slide-text"
                                                data-toggle="modal" data-target="#DeleteModal"
                                                onclick="deleteUniversity({{$business['id']}})">
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection