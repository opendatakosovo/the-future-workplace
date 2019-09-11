<?php
/**
 * Created by PhpStorm.
 * User: Dren
 * Date: 8/20/2019
 * Time: 2:27 PM
 */
?>

<!-- Modal -->
<div class="modal fade " id="importCSV" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Import Businesses </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="/admin/business-data/import_businesses" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    @CSRF
                    <input type="file" name="csv_file"  accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" id="degree_modal_button" class="btn btn-primary">Add Skill</button>
                </div>
            </form>

        </div>
    </div>
</div>


{{--<script>--}}
{{--var dropzone = new Dropzone('#graduates-dropzone', {--}}
{{--previewTemplate: document.querySelector('#preview-template').innerHTML,--}}
{{--parallelUploads: 1,--}}
{{--thumbnailHeight: 120,--}}
{{--thumbnailWidth: 120,--}}
{{--maxFilesize: 3,--}}
{{--filesizeBase: 8000,--}}
{{--thumbnail: function(file, dataUrl) {--}}
{{--if (file.previewElement) {--}}
{{--file.previewElement.classList.remove("dz-file-preview");--}}
{{--var images = file.previewElement.querySelectorAll("[data-dz-thumbnail]");--}}
{{--for (var i = 0; i < images.length; i++) {--}}
{{--var thumbnailElement = images[i];--}}
{{--thumbnailElement.alt = file.name;--}}
{{--thumbnailElement.src = dataUrl;--}}
{{--}--}}
{{--setTimeout(function() { file.previewElement.classList.add("dz-image-preview"); }, 1);--}}
{{--}--}}
{{--}--}}

{{--});--}}


{{--// Now fake the file upload, since GitHub does not handle file uploads--}}
{{--// and returns a 404--}}

{{--var minSteps = 6,--}}
{{--maxSteps = 60,--}}
{{--timeBetweenSteps = 100,--}}
{{--bytesPerStep = 100000;--}}

{{--dropzone.uploadFiles = function(files) {--}}
{{--var self = this;--}}

{{--for (var i = 0; i < files.length; i++) {--}}

{{--var file = files[i];--}}
{{--totalSteps = Math.round(Math.min(maxSteps, Math.max(minSteps, file.size / bytesPerStep)));--}}

{{--for (var step = 0; step < totalSteps; step++) {--}}
{{--var duration = timeBetweenSteps * (step + 1);--}}
{{--setTimeout(function(file, totalSteps, step) {--}}
{{--return function() {--}}
{{--file.upload = {--}}
{{--progress: 100 * (step + 1) / totalSteps,--}}
{{--total: file.size,--}}
{{--bytesSent: (step + 1) * file.size / totalSteps--}}
{{--};--}}

{{--self.emit('uploadprogress', file, file.upload.progress, file.upload.bytesSent);--}}
{{--if (file.upload.progress == 100) {--}}
{{--file.status = Dropzone.SUCCESS;--}}
{{--self.emit("success", file, 'success', null);--}}
{{--self.emit("complete", file);--}}
{{--self.processQueue();--}}
{{--//document.getElementsByClassName("dz-success-mark").style.opacity = "1";--}}
{{--}--}}
{{--};--}}
{{--}(file, totalSteps, step), duration);--}}
{{--}--}}
{{--}--}}
{{--}--}}
{{--</script>--}}

{{--<script>--}}
{{--Dropzone.options.dpzSingleFile = {--}}
{{--paramName: "file", // The name that will be used to transfer the file--}}
{{--maxFiles: 1,--}}
{{--init: function () {--}}
{{--this.on("maxfilesexceeded", function (file) {--}}
{{--this.removeAllFiles();--}}
{{--this.addFile(file);--}}
{{--});--}}
{{--}--}}
{{--};--}}
{{--</script>--}}