<?php
/**
 * Created by PhpStorm.
 * User: Dren
 * Date: 8/20/2019
 * Time: 2:27 PM
 */
?>
<!-- Modal -->
<div class="modal fade" id="createGrad" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Create Graduate</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/admin/uni-settings/store_graduate" method="post" id="grad_form">
                @CSRF
                <div class="modal-body">

                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Select Degree:</label>
                        <select class="select2 form-control" id="degree_id" name="degree_id">
                            <optgroup label="Choose Degree">
                                @foreach($data['degrees'] as $degree)
                                    <option  value="{{$degree['id']}}">{{$degree['degree_name']}}</option>
                                @endforeach
                            </optgroup>
                        </select>
                    </div>
                    <input type="hidden" name="id" id="hidden_id">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Select University:</label>
                        <select class="select2 form-control" id="uni_id" name="uni_id">
                            <optgroup label="Choose University">
                                @foreach($data['universities'] as $university)
                                    <option name="university" value="{{$university['id']}}">{{$university['uni_name']}}</option>
                                @endforeach
                            </optgroup>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="id" id="hidden_degree_id">
                        <label for="recipient-name" class="col-form-label">Number of Graduates:</label>
                        <input type="number" class="form-control" id="no_graduates" name="no_graduates">
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="id" id="hidden_degree_id">
                        <label for="recipient-name" class="col-form-label">Number of Males:</label>
                        <input type="number" class="form-control" id="no_males" name="no_males">
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="id" id="hidden_degree_id">
                        <label for="recipient-name" class="col-form-label">Number of Females:</label>
                        <input type="number" class="form-control" id="no_females" name="no_females">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Select Year:</label>
                        <select class="select2 form-control" id="year" name="year">
                            <optgroup label="Choose Year">
                                @for($i=2008 ; $i <= 2020; $i++)
                                    <option value="{{$i}}">{{$i}}</option>
                                @endfor
                            </optgroup>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" id="grad_modal_button" class="btn btn-primary">Add Graduate</button>
                </div>
            </form>
        </div>
    </div>
</div>
