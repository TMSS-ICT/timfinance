    <div ng-controller="ImageCopperController" ng-clock style="position: relative; left: 0px; z-index: 1001;">
        <div  ng-show="imageCropStep == 1" class="fileinput-cover-button">
            
            <span>
                <img class="img-responsive" fallback-src="<?php echo base_url() ?>resources/images/pages/cover_picture/01.jpg"  ng-src="<?php echo base_url()?>resources/images/logo.png"/>
                <input class="profile_cover_upload_input" style="z-index: 1005" type="file" name="fileInput" id="fileInput" onchange="angular.element(this).scope().fileChanged(event)"/>
                <div class="profile_cover_upload_img">
                    <img ng-src="<?php echo base_url() ?>resources/images/upload_icon.png"/>
                    <span>Upload Cover Picture</span>
                </div>
            </span>
        </div>	
        <div ng-show="imageCropStep == 2" class="zoom_disable">
            <image-crop			 
                data-height="272"
                data-width="760"
                data-shape="square"
                data-step="imageCropStep"
                src="imgSrc"
                data-result="result"
                data-result-blob="resultBlob"
                crop="initCrop"
                padding="0"
                max-size="1012"
                imagepath="<?php echo base_url(); ?>pages/add_cover_picture/"
                reloadpath = ""
                ></image-crop>	   
        </div>
        <div ng-show="imageCropStep == 2">
            <button class="btn btn-sm" style="position: absolute; bottom: 0; right: 300px; bottom: 30px; background-color: #999; color: #fff;"  ng-click="initCrop = true">Crop</button>		
            <button class="btn btn-sm" style="position: absolute; bottom: 0; left: 300px; bottom: 30px; background-color: #999; color: #fff; vertical-align: middle;" ng-click="clear()">Cancel</button>
        </div>		  
        <div  ng-show="imageCropStep == 3">
            <div >
                <img ng-src="{{result}}"/>
            </div>
        </div>
    </div>