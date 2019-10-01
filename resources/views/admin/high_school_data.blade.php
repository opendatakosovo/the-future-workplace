<?php
/**
 * Created by PhpStorm.
 * User: Dren
 * Date: 9/20/2019
 * Time: 1:12 PM
 */
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



    @include('admin.high_school_crud.CSV.import_modal')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">High School Data</h4>
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
                                <th>School</th>
                                <th>Municipality</th>
                                <th>Profile</th>
                                <th>Year</th>
                                <th>Grade</th>
                                <th>Male</th>
                                <th>Female</th>
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
                    url: "/admin/highschool-data/fetch_data",
                    type: "get",
                    error: function () {
                        $("#example123").css("display", "none");
                    }
                },
                "aoColumns": [
                    {data: 'school'},
                    {data: 'municipality'},
                    {data: 'profile'},
                    {data: 'year'},
                    {data: 'grade'},
                    {data: 'male'},
                    {data: 'female'},
                    {data: 'actions'}
                ]

            });
        });


        function delete_data(id) {
            var url = '/admin/highschool-data/destroy_data';
            $('#delete_form').attr('action', url);
            $('#del_hidden_id').val(id);
        }
    </script>

@endsection
