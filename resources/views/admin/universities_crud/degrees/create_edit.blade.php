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
            <form action="/admin/uni-settings/store_degree" method="post" id="degree_form">
                @CSRF
                <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" name="id" id="hidden_degree_id">
                        <label for="recipient-name" class="col-form-label">Degree Name:</label>
                        <input type="text" class="form-control" id="degree_name" name="degree_name">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Select University:</label>
                        <select class="select2 form-control" id="uni_id" name="school_id">
                            <optgroup label="Choose University">
                                @foreach($data['universities_all'] as $university)
                                    <option name="university" value="{{$university['id']}}">{{$university['school_name']}}</option>
                                @endforeach
                            </optgroup>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Select Skills:</label>
                        <select class="select2 form-control" id="skill_id" name="skill_ids[]"  multiple="multiple">
                            <optgroup label="Choose Skills">
                                @foreach($data['skills'] as $skill)
                                    <option value="{{$skill['skill_name']}}">{{$skill['skill_name']}}</option>
                                @endforeach
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
