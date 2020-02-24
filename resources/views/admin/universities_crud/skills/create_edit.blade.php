<?php
/**
 * Created by PhpStorm.
 * User: Dren
 * Date: 8/19/2019
 * Time: 3:28 PM
 */
?>
<!-- Modal -->
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title-skill" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="admin/uni-settings/store_skill" method="post" id="skill_form">
                @CSRF
                <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" name="id" id="hidden_skill_id">
                        <label for="recipient-name" class="col-form-label">Skill Name:</label>
                        <input type="text" class="form-control" id="skill_name" name="skill_name">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" id="skill_modal_button" class="btn btn-primary">Add Skill</button>
                </div>
            </form>
        </div>
    </div>
</div>
