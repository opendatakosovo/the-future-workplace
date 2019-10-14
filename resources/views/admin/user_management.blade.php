<?php
/**
 * Created by PhpStorm.
 * User: Dren
 * Date: 8/8/2019
 * Time: 1:18 PM
 */
?>

@extends('layouts.admin.main')


@section('content')
    @include('admin.users.create_edit')
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
                <form action="/admin/users/destroy" method="post" id="delete_form">
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
    <section id="javascript">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">User Management</h4>
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
                                        data-toggle="modal" data-target="#createUser" onclick="createUser()">
                                    Add New
                                </button>
                            </div>
                            <div class="table-responsive">
                                <table id="example" class="table table-striped table-bordered base-style">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Created_at</th>
                                        <th>Updated at</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->created_at}}</td>
                                        <td>{{$user->updated_at}}</td>
                                        <td>
                                            <button type="button" class="btn btn-info btn-sm a-btn-slide-text"
                                                    data-toggle="modal" data-target="#createUser"
                                                    onclick="editUser('{{$user->id}}','{{$user->name}}','{{$user->email}}','{{$user->password}}')">
                                                Edit
                                            </button>
                                            <button type="button" class="btn btn-danger btn-sm a-btn-slide-text"
                                                    data-toggle="modal" data-target="#DeleteModal"
                                                    onclick="deleteUser({{$user->id}})">
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
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <script src = "http://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js" defer ></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>

    <script>
        function createUser() {
            var url = '/admin/users/store_user';
            $('#name').val('');
            $('#email').val('');
            $('#password').val('');
            $('#users_form').attr('action', url);
            $('#users_modal_button').text('Add User');
            $('.modal-title-users').text('Add User');
        }

        function deleteUser(id) {
            $('#del_hidden_id').val(id);
        }
        function editUser(id,name, email, password) {

            var url = '/admin/users/edit_user';
            $('#hidden_user_id').val(id);
            $('#name').val(name);
            $('#email').val(email);
            $('#password').val(password.substr(0, 8));
            $('#users_form').attr('action', url);
            $('#users_modal_button').text('Edit User');
            $('.modal-title-users').text('Edit User');
        }
    </script>
@endsection
