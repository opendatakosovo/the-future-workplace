<?php
/**
 * Created by PhpStorm.
 * User: Dren
 * Date: 8/19/2019
 * Time: 3:28 PM
 */
?>
<!-- Modal -->
<style>
    .select2-container {
        width: 100% !important;
    }
</style>
<div class="modal fade" id="addSurvey" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/admin/business-data/add_survey" method="post" id="business_form">
                @CSRF
                <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" name="id" id="hidden_business_id">
                        <label for="recipient-name" class="col-form-label">Name of Company:</label>
                        <input type="text" class="form-control" id="name_of_business" name="name_of_company">
                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Select Skills:</label>
                        <select class="select2 form-control" id="skills" name="skills[]" multiple="multiple">
                            <optgroup label="Choose Status">
                                @foreach($data['skills_data'] as $skill)
                                    <option  value="{{$skill['skill_name']}}">{{$skill['skill_name']}}</option>
                                    @endforeach
                            </optgroup>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Select Type:</label>
                        <select class="select2 form-control" id="status" name="type">
                            <optgroup label="Choose Status">
                                <option  value="ICT">ICT</option>
                            </optgroup>
                        </select>
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
