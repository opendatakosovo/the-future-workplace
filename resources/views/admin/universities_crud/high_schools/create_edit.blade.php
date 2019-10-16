<?php
/**
 * Created by PhpStorm.
 * User: Dren
 * Date: 8/19/2019
 * Time: 4:51 PM
 */
?>
<!-- Modal -->
<div class="modal fade" id="createHighSchool" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title-high" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/admin/uni-settings/store_university" method="post" id="uni_form">
                @CSRF
                <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" name="id" id="hidden_uni_id">
                        <label for="recipient-name" class="col-form-label">School Name:</label>
                        <input type="text" class="form-control" id="uni_name" name="uni_name">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Select Type:</label>
                        <select class="select2 form-control" id="uni_type" name="uni_type" >
                            <optgroup label="Choose Type">
                                <option value="Private" >Private</option>
                                <option value="Public" >Public</option>
                            </optgroup>
                        </select>
                    </div>

                    <div class="form-group">
                        <input type="hidden" name="high_school" id="hidden_uni_id" value="true">
                        <label for="recipient-name" class="col-form-label">Municipality:</label>
                        <input type="text" class="form-control" id="municipality" name="municipality">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" id="uni_modal_button" class="btn btn-primary">Add School</button>
                </div>
            </form>
        </div>
    </div>
</div>
