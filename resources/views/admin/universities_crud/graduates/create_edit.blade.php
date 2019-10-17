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
                        <input type="hidden" name="id_degree" id="hidden_degree_id">
                        <select class="select2 form-control" id="degree_id" name="degree_id">
                            <optgroup label="Choose Degree">
                                @foreach($data['degrees'] as $degree)
                                    <option  value="{{$degree['id']}}">{{$degree['degree_name']}}</option>
                                @endforeach
                            </optgroup>
                        </select>
                    </div>
                    <input type="hidden" name="id" id="hidden_uni_id">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Select School:</label>
                        <select class="select2 form-control graduate_school_select" id="uni_id" name="school_id"  onchange="changeFunc();">
                            <optgroup label="Choose University">
                                @foreach($data['universities_all'] as $university)
                                    <option class="@if($university['is_high_school'] == 1)high_school @endif" name="university" value="{{$university['id']}}">{{$university['school_name']}}</option>
                                @endforeach
                            </optgroup>
                        </select>
                    </div>

                    <div class="form-group" id="grade_input" style="display: none">
                        <label for="recipient-name" class="col-form-label">Select Grade:</label>
                        <select class="select2 form-control" id="grade" name="grade">
                            <optgroup label="Choose Grade">
                                @for($i=10 ; $i <= 12; $i++)
                                    <option value="{{$i}}">{{$i}}</option>
                                @endfor
                            </optgroup>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Number of Graduates:</label>
                        <input type="number" class="form-control" id="no_graduates" name="no_graduates">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Number of Males:</label>
                        <input type="number" class="form-control" id="no_males" name="no_males">
                    </div>
                    <div class="form-group">

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

<script>

    function changeFunc() {
        var selectBox = document.getElementById("uni_id");
        var selectedValue = selectBox.options[selectBox.selectedIndex];
        var attribute = $('select[class="select2 form-control graduate_school_select select2-hidden-accessible"] :selected').attr('class');

        if (attribute == 'high_school '){
            $('#grade_input').show();
        }else{
            $('#grade_input').hide();
        }
    }


</script>
