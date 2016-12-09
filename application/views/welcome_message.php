

<div id="fileupload" method="POST" enctype="multipart/form-data" data-ng-app="demo" data-ng-controller="DemoFileUploadController" ng-init="setPath('<?php echo base_url(); ?>member/image_upload')" data-file-upload="options" data-ng-class="{'fileupload-processing': processing() || loadingFiles}">
    <div class="row fileupload-buttonbar">
        <div class="col-md-4">
        <level>NID</level>
            <span class="btn btn-sm btn-success fileinput-button" ng-class="{disabled: disabled}">
                <i class="glyphicon glyphicon-plus"></i>
                <span>upload NID</span>
                <input type="file" name="userfile" multiple ng-disabled="disabled">
            </span>
            <span class="fileupload-process"></span>
        </div>
        <div class="col-md-4">
            <div class="row"  data-ng-repeat="file in queue" data-ng-class="{'processing': file.$processing()}">
                <div class="col-md-3" >
                    {{file.name}}
                </div> 
<!--                <div class="col-md-1 " data-on="!!file.thumbnailUrl">
                    <div class="preview" data-file-upload-preview="file"></div>
                </div>-->
                <div class="col-md-2">
                    <button type="button" class="btn btn-sm btn-danger cancel" data-ng-click="file.$cancel()" data-ng-hide="!file.$cancel">
                        <i class="glyphicon glyphicon-ban-circle"></i>
                        <span>Cancel</span>
                    </button>
                </div>
                <div class="col-md-3">
                    <button type="button" class="btn btn-sm btn-primary start" data-ng-click="submit()">
                        <i class="glyphicon glyphicon-upload"></i>
                        <span>upload files</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="fileupload" method="POST" enctype="multipart/form-data" data-ng-app="demo" data-ng-controller="DemoFileUploadController" ng-init="setPath('<?php echo base_url(); ?>member/image_upload')" data-file-upload="options" data-ng-class="{'fileupload-processing': processing() || loadingFiles}">
    <div class="row fileupload-buttonbar">
        <div class="col-md-4">
            <level>Driving Licence</level>
            <span class="btn btn-sm btn-success fileinput-button" ng-class="{disabled: disabled}">
                <i class="glyphicon glyphicon-plus"></i>
                <span>Upload</span>
                <input type="file" name="userfile" multiple ng-disabled="disabled">
            </span>
            <span class="fileupload-process"></span>
        </div>
        <div class="col-md-4">
            <div class="row"  data-ng-repeat="file in queue" data-ng-class="{'processing': file.$processing()}">
                <div class="col-md-3" >
                    {{file.name}}
                </div> 
                <div class="col-md-1 " data-on="!!file.thumbnailUrl">
                    <div class="preview" data-file-upload-preview="file"></div>
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-sm btn-danger cancel" data-ng-click="file.$cancel()" data-ng-hide="!file.$cancel">
                        <i class="glyphicon glyphicon-ban-circle"></i>
                        <span>Cancel</span>
                    </button>
                </div>
                <div class="col-md-3">
                    <button type="button" class="btn btn-sm btn-primary start" data-ng-click="submit()">
                        <i class="glyphicon glyphicon-upload"></i>
                        <span>upload files</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
