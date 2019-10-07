<?php
?>

@extends('layouts.admin.main')


@section('content')
    <!-- DELETE -->
    <div class="modal fade" id="DeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Delete</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/admin/uni-settings/destroy_business" method="post" id="delete_form">
                    @CSRF
                    <div class="modal-body">
                        Are you sure you want to delete the item , it cannot be reverted!
                    </div>
                    <input type="hidden" name="id" id="del_hidden_id">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    @include('admin.businesses_crud.CSV.import_modal')
    @include('admin.businesses_crud.Survey.create_edit')
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
                            {{--<button type="button" class="btn btn-outline-primary btn-sm a-btn-slide-text"--}}
                                    {{--data-toggle="modal" data-target="#createUniversity" onclick="createUniversity()">--}}
                                {{--Add New--}}
                            {{--</button>--}}
                        </div>
                        <div class="pull-right">
                            <button type="button" class="btn btn-outline-primary btn-sm a-btn-slide-text"
                                    data-toggle="modal" data-target="#importCSV">
                                Import
                            </button>
                        </div>
                        <table id="example123" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Name of Business</th>
                                    <th>Status</th>
                                    <th>Fiscal Number</th>
                                    <th>Business Type</th>
                                    <th>Capital</th>
                                    <th>Number of Employees</th>
                                    <th>Date of Registration</th>
                                    <th>Registration Number</th>
                                    <th>Municipality</th>
                                    <th>Primary Activity</th>
                                    <th>Secondary Activity</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Survey Data</h4>
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
                            {{--<button type="button" class="btn btn-outline-primary btn-sm a-btn-slide-text"--}}
                            {{--data-toggle="modal" data-target="#createUniversity" onclick="createUniversity()">--}}
                            {{--Add New--}}
                            {{--</button>--}}
                        </div>
                        <div class="pull-right">
                            <button type="button" class="btn btn-outline-primary btn-sm a-btn-slide-text"
                                    data-toggle="modal" data-target="#addSurvey">
                                Add
                            </button>
                        </div>
                        <table id="example1234" class="display" style="width:100%">
                            <thead>
                            <tr>
                                <th>Company Name</th>
                                <th>Skills</th>
                                <th>Type</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $('#example123').DataTable({
                "bProcessing": true,
                "serverSide": true,
                "searching": false,
                "ajax": {
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: "/admin/business-data/fetch_data",
                    type: "post",
                    error: function () {
                        $("#example123").css("display", "none");
                    }
                },
                "aoColumns": [
                    {data: 'name_of_business'},
                    {data: 'status'},
                    {data: 'fiscal_number'},
                    {data: 'business_type'},
                    {data: 'capital'},
                    {data: 'number_of_employees'},
                    // {data: 'owners'},
                    // {data: 'owners_gender'},
                    // {data: 'authorized_persons'},
                    {data: 'date_of_registration'},
                    // {data: 'link_of_arbk'},
                    {data: 'registration_number'},
                    {data: 'municipality'},
                    {data: 'primary_activity'},
                    {data: 'secondary_activity'},
                    {data: 'actions'}
                ]

            });
        });


        function deletebusiness(id) {
            var url = '/admin/business-data/destroy_business';
            $('#delete_form').attr('action', url);
            $('#del_hidden_id').val(id);
        }

        function deletesurvey(id) {
            var url = '/admin/business-data/destroy_survey';
            $('#delete_form').attr('action', url);
            $('#del_hidden_id').val(id);
        }

    </script>
    <script>
        $(document).ready(function () {
            $('#example1234').DataTable({
                "bProcessing": true,
                "serverSide": true,
                "searching": false,
                "ajax": {
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: "/admin/business-data/fetch_data2",
                    type: "post",
                    error: function () {
                        $("#example1234").css("display", "none");
                    }
                },
                "aoColumns": [
                    {data: 'name_of_company'},
                    {data: 'skills'},
                    {data: 'type'},
                    {data: 'actions'}
                ]

            });
        });
    </script>
@endsection
