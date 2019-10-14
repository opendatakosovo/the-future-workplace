<?php
/**
 * Created by PhpStorm.
 * User: Dren
 * Date: 8/8/2019
 * Time: 11:37 AM
 */
?>

@extends('layouts/admin/main')
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
        </div>
        <div class="content-body">
            <div id="user-profile">
                <div class="row">
                    <div class="col-sm-12 col-xl-8">
                        <div class="media d-flex m-1 ">
                            <div class="align-left p-1">
                                <a href="#" class="profile-image">
                                    <img src="app-assets/images/portrait/small/custom_avatar.png" class="rounded-circle img-border height-100" alt="Card image">
                                </a>
                            </div>
                            <div class="media-body text-left  mt-1">
                                <h3 class="font-large-1 white">{{Auth::user()->name}}
                                    <span class="font-medium-1 white">({{Auth::user()->email}})</span>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header pb-0">
                                <div class="card-title-wrap bar-primary">
                                    <div class="card-title">User Details</div>
                                    <hr>
                                    <form action="/admin/users/edit_current_user" method="post" id="users_form">
                                        @CSRF
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <input type="hidden" name="id" value="{{$user->id}}" id="hidden_uni_edit_id">
                                                <label for="recipient-name" class="col-form-label">User Name:</label>
                                                <input type="text" class="form-control" id="name" value="{{$user->name}}" name="name">
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">User Email:</label>
                                                <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">User Password:</label>
                                                <input type="password" class="form-control" id="password" name="password" value="{{ substr($user->password, 0, 8)}}">
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="submit" id="users_modal_button" class="btn btn-primary">Edit User</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection