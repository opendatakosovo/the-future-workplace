<?php
/**
 * Created by PhpStorm.
 * User: Dren
 * Date: 8/19/2019
 * Time: 3:28 PM
 */
?>
<!-- Modal -->
<div class="modal fade" id="createDegree" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/admin/uni-settings/store_business" method="post" id="business_form">
                @CSRF
                <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" name="id" id="hidden_business_id">
                        <label for="recipient-name" class="col-form-label">Name of Business:</label>
                        <input type="text" class="form-control" id="name_of_business" name="name_of_business">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Status:</label>
                        <select class="select2 form-control" id="status" name="status">
                            <optgroup label="Choose Status">
                                    <option  value="Active">Active</option>
                                    <option  value="Dissolved">Disolved</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Fiscal Number:</label>
                        <input type="text" class="form-control" id="fiscal_number" name="fiscal_number">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" id="degree_modal_button" class="btn btn-primary">Add Skill</button>
                </div>
            </form>
        </div>
    </div>
</div>
