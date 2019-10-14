<?php
/**
 * Created by PhpStorm.
 * User: Dren
 * Date: 9/20/2019
 * Time: 10:50 AM
 */
?>

<!-- Modal -->
<div class="modal fade " id="importCSV" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Import Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form name="atk_data" action="/admin/atk-data/import_data" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
                <div class="modal-body">
                    @CSRF
                    <input type="file" name="csv_file"  accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" id="degree_modal_button" class="btn btn-primary">Import</button>
                </div>
            </form>

        </div>
    </div>
</div>

<script>
    function validateForm() {
        var x = document.forms["atk_data"]["csv_file"].value;
        var file_format = x.split('.')[1];
        console.log(file_format);
        if (x == "") {
            alert("Please choose a file");
            return false;
        }
        if (file_format != "csv"){
            alert("Please choose a csv file");
            return false;
        }
        else{
            return true;
        }
    }
</script>