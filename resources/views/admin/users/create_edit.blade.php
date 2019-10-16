<?php
/**
 * Created by PhpStorm.
 * User: Dren
 * Date: 10/14/2019
 * Time: 11:51 AM
 */
?>

<div class="modal fade" id="createUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title-users" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="admin/users/store_user" method="post" id="users_form">
                @CSRF
                <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" name="id" id="hidden_uni_edit_id">
                        <label for="recipient-name" class="col-form-label">User Name:</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">User Email:</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">User Password:</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" id="users_modal_button" class="btn btn-primary">Add User</button>
                </div>
            </form>
        </div>
    </div>
</div>

