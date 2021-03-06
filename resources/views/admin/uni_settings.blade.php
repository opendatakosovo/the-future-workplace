<?php
/**
 * Created by PhpStorm.
 * User: Dren
 * Date: 8/19/2019
 * Time: 11:03 AM
 */
?>
@extends('layouts/admin/main')

<style>
    .select2-container {
        width: 100% !important;
    }
    .page-link {
        position: relative;
        display: block;
        padding: 0.5rem 0.75rem;
        margin-left: -1px;
        line-height: 1.25;
        color: #5654c8;
        background-color: #fff;
        border: 1px solid #626E82;
    }




</style>
@section('content')
    @include('admin.universities_crud.universities.create_edit')
    @include('admin.universities_crud.skills.create_edit')
    @include('admin.universities_crud.degrees.create_edit')
    @include('admin.universities_crud.graduates.CSV.import_modal')
    @include('admin.universities_crud.graduates.create_edit')
    @include('admin.universities_crud.high_schools.create_edit')

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
                <form action="/admin/uni-settings/destroy_university" method="post" id="delete_form">
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


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Universities</h4>
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
                        <table id="example0" class="display table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>University Name</th>
                                <th>University Type</th>
                                <th>Municipality</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data['universities'] as $key=> $university)
                                <tr>
                                    <td>{{$university['id']}}</td>
                                    <td>{{$university['school_name']}}</td>
                                    <td>{{$university['school_type']}}</td>
                                    <td>{{$university['municipality']}}</td>
                                    <td>
                                        <button type="button" class="btn btn-info btn-sm a-btn-slide-text"
                                                data-toggle="modal" data-target="#createUniversity"
                                                onclick="editUniversity({{$university['id']}},'{{$university['school_name']}}','{{$university['school_type']}}','{{$university['municipality']}}')">
                                            Edit
                                        </button>
                                        <button type="button" class="btn btn-danger btn-sm a-btn-slide-text"
                                                data-toggle="modal" data-target="#DeleteModal"
                                                onclick="deleteUniversity({{$university['id']}})">
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
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">High School</h4>
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
                                    data-toggle="modal" data-target="#createHighSchool" onclick="createHighSchool()">
                                Add New
                            </button>
                        </div>
                        <table id="example1" class="display table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>School Name</th>
                                <th>School Type</th>
                                <th>Municipality</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data['high_schools'] as $key=> $university)
                                <tr>
                                    <td>{{$university['id']}}</td>
                                    <td>{{$university['school_name']}}</td>
                                    <td>{{$university['school_type']}}</td>
                                    <td>{{$university['municipality']}}</td>
                                    <td>
                                        <button type="button" class="btn btn-info btn-sm a-btn-slide-text"
                                                data-toggle="modal" data-target="#createUniversity"
                                                onclick="editUniversity('{{$university['id']}}','{{$university['school_name']}}','{{$university['school_type']}}','{{$university['municipality']}}','true')">
                                            Edit
                                        </button>
                                        <button type="button" class="btn btn-danger btn-sm a-btn-slide-text"
                                                data-toggle="modal" data-target="#DeleteModal"
                                                onclick="deleteUniversity({{$university['id']}})">
                                            Delete
                                        </button>
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

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Skills</h4>
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
                                    data-toggle="modal" data-target="#create" onclick="createSkill()">
                                Add New
                            </button>
                        </div>
                        <table id="example" class="display table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Skill Name</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data['skills'] as $key=> $skill)
                                <tr>
                                    <td>{{$skill['id']}}</td>
                                    <td>{{$skill['skill_name']}}</td>
                                    <td>
                                        <button type="button" class="btn btn-info btn-sm a-btn-slide-text"
                                                data-toggle="modal" data-target="#create"
                                                onclick="editSkill({{$skill['id']}},'{{$skill['skill_name']}}')">
                                            Edit
                                        </button>
                                        <button type="button" class="btn btn-danger btn-sm a-btn-slide-text"
                                                data-toggle="modal" data-target="#DeleteModal"
                                                onclick="deleteSkill({{$skill['id']}})">
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

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Degrees</h4>
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
                                    data-toggle="modal" data-target="#createDegree" onclick="createDegree()">
                                Add New
                            </button>
                        </div>
                        <table id="example2" class="display table table-striped table-bordered zero-configuration dataTable" style="width:100%">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Degree Name</th>
                                <th>University</th>
                                <th>Skills</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data['degrees'] as $key=> $degree)
                                <tr>
                                    <td>{{$degree['id']}}</td>
                                    <td>{{$degree['degree_name']}}</td>
                                    <td>{{$degree['school_name']}}</td>
                                    <td>
                                        @foreach(explode(',',$degree['skills']) as $skill)
                                            <span class="badge badge-info">{{$skill}}</span>
                                        @endforeach
                                    </td>


                                    <td>
                                        <button type="button" class="btn btn-info btn-sm a-btn-slide-text"
                                                data-toggle="modal" data-target="#createDegree"
                                                onclick="editDegree({{$degree['id']}},'{{$degree['degree_name']}}',{{$degree['school_id']}},'{{$degree['skills']}}')">
                                            Edit
                                        </button>
                                        <button type="button" class="btn btn-danger btn-sm a-btn-slide-text"
                                                data-toggle="modal" data-target="#DeleteModal"
                                                onclick="deleteDegree({{$degree['id']}})">
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                            </tfoot>
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
                    <h4 class="card-title">Graduates</h4>
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
                                    data-toggle="modal" data-target="#createGrad" onclick="createGrad()">
                                Add New
                            </button>
                        </div>
                        <div class="pull-right">
                            <button type="button" class="btn btn-outline-primary btn-sm a-btn-slide-text"
                                    data-toggle="modal" data-target="#importCSV" onclick="createDegree()">
                                Import CSV
                            </button>
                        </div>
                        <table id="example3" class="display table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr>
                                <th>School</th>
                                <th>Degree</th>
                                <th>Grade</th>
                                <th>Intitution Type</th>
                                <th>Number of Graduates</th>
                                <th>Number of Males</th>
                                <th>Number of Females</th>
                                <th>Year</th>
                                <th style="width: 100%;">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript">
        function deleteData(id) {
            $('#del_hidden_id').val(id);
        }

        function editSkill(id, skill_name) {
            var url = '/admin/uni-settings/edit_skill';
            $('#hidden_skill_id').val(id);
            $('#skill_name').val(skill_name);
            $('#skill_form').attr('action', url);
            $('#skill_modal_button').text('Edit Skill');
        }

        function createSkill() {
            var url = '/admin/uni-settings/store_skill';
            $('#skill_name').val('');
            $('#skill_form').attr('action', url);
            $('#skill_modal_button').text('Add Skill');
            $('.modal-title-skill').text('Add Skill');
        }


        function createDegree() {
            var url = '/admin/uni-settings/store_degree';
            $('#degree_name').val('');
            $('#uni_id').val('');
            $('#skill_id').val('');
            $('#degree_form').attr('action', url);
            $('#degree_modal_button').text('Add Degree');
            $('.modal-title-degree').text('Add Degree');
        }

        function editDegree(id, degree_name, uni_id, skills) {

            var skills_array = skills.split(',');
            var url = '/admin/uni-settings/edit_degree';
            $('#hidden_degree_id').val(id);
            $('#degree_name').val(degree_name);
            $('#uni_id').val(uni_id);
            $('#uni_id').trigger('change');
            $('#skill_ids').select2('val', [skills_array]);
            $('#degree_form').attr('action', url);
            $('#degree_modal_button').text('Edit Degree');
            $('.modal-title-degree').text('Edit Degree');
        }

        function deleteDegree(id) {
            var url = '/admin/uni-settings/destroy_degree';
            $('#delete_form').attr('action', url);
            $('#del_hidden_id').val(id);
        }


        function createUniversity() {
            var url = '/admin/uni-settings/store_university';
            $('#uni_name').val('');
            // $('#uni_type').val('');
            $('#uni_type').val('Public');
            $('#uni_type').trigger('change');
            $('#uni_form').attr('action', url);
            $('#uni_modal_button').text('Add University');
            $('.modal-title-uni').text('Add University');
        }

        function createHighSchool() {

            var url = '/admin/uni-settings/store_university';
            $('#uni_name').val('');
            // $('#uni_type').val('');
            $('#uni_type').val('Public');
            $('#uni_type').trigger('change');
            $('#uni_form').attr('action', url);
            $('#uni_modal_button').text('Add High School');
            $('.modal-title-high').text('Add High School');
        }

        function editUniversity(id, uni_name, uni_type,municipality,is_high_school) {
            var url = '/admin/uni-settings/edit_university';

            $('#hidden_uni_edit_id').val(id);
            $('#uni_name').val(uni_name);
            $('#uni_type').val(uni_type);
            $('#uni_municipality').val(municipality);
            $('#uni_type').trigger('change');
            // $("#uni_type select").val(uni_type);
            $('#uni_form').attr('action', url);
            if(is_high_school == 'true'){
                $('#uni_modal_button').text('Edit High School');
                $('.modal-title-uni').text('Edit High School');
            }else{
                $('#uni_modal_button').text('Edit University');
                $('.modal-title-uni').text('Edit University');
            }

        }

        function deleteUniversity(id) {
            $('#del_hidden_id').val(id);
        }


        function deleteSkill(id) {
            $('#del_hidden_id').val(id);
            var url = '/admin/uni-settings/destroy_skill';
            $('#delete_form').attr('action', url);
        }


        function createGrad() {
            var url = '/admin/uni-settings/store_graduate';
            $('#uni_name').val('');
            // $('#uni_type').val('');
            $('#uni_type').val('Public');
            $('#uni_type').trigger('change');
            $('#grad_form').attr('action', url);
            $('#grad_modal_button').text('Add Degree');
        }

        function editGrad(id, uni_id, degree_id,grade, no_graduates,no_males,no_females,year) {
            var url = '/admin/uni-settings/edit_graduate';
            $('#hidden_uni_id').val(id);
            $('#uni_id').val(uni_id);
            $('#degree_id').val(degree_id);
            if(grade != 0){
                $('#grade_input').show();
                $('#grade').val(grade);
                $('#grade').trigger('change');
            }

            console.log(no_graduates);
            if(no_graduates){
                $('#no_graduates').val(no_graduates);
            }else{
                $('#no_graduates').val('');
            }
            if(no_males){
                $('#no_males').val(no_males);
            }else{
                $('#no_males').val('');
            }
            if(no_females){
                $('#no_females').val(no_females);
            }else{
                $('#no_females').val('');
            }


            $('#year').val(year);
            $('#year').trigger('change');
            $('#uni_id').trigger('change');
            $('#degree_id').trigger('change');
            // $("#uni_type select").val(uni_type);
            $('#grad_form').attr('action', url);
            $('#grad_modal_button').text('Edit Graduate');
        }

        function deleteGrad(id) {
            var url = '/admin/uni-settings/destroy_graduate';
            $('#del_hidden_id').val(id);
            $('#delete_form').attr('action', url);
        }

    </script>

    {{--<script>--}}
    {{--Dropzone.options.myAwesomeDropzone = {--}}
    {{--paramName: "file", // The name that will be used to transfer the file--}}
    {{--maxFilesize: 2, // MB--}}
    {{--accept: function(file, done) {--}}
    {{--if (file.name == "justinbieber.jpg") {--}}
    {{--done("Naha, you don't.");--}}
    {{--}--}}
    {{--else { done(); }--}}
    {{--}--}}
    {{--};--}}
    {{--</script>--}}

    <script>
        $(document).ready(function () {
            $('#example3').DataTable({
                "bProcessing": true,
                "serverSide": true,
                "searching": false,
                "ajax": {
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: "/admin/uni-settings/fetch_graduates",
                    type: "get",
                    error: function () {
                        $("#example3").css("display", "none");
                    }
                },
                "aoColumns": [
                    {data: 'school_id'},
                    {data: 'degree_id'},
                    {data: 'grade'},
                    {data: 'instit_type'},
                    {data: 'number_of_graduates'},
                    {data: 'number_of_males'},
                    {data: 'number_of_females'},
                    {data: 'year'},
                    {data: 'actions'}
                ]

            });
        });
    </script>
@endsection
