<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="author" content="Rashida">
        <meta name="description" content="Social">
        <meta name="keywords" content=""/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/jquery-1.11.1.min.js"></script>
        <link type='text/css' rel="stylesheet" href="<?php echo base_url(); ?>resources/css/bootstrap.min.css">
        <link type='text/css' rel="stylesheet" href="<?php echo base_url(); ?>resources/css/template.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>resources/css/styles.css"/>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>resources/css/navbar.css"/>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>resources/css/theme-default.css"/>
        <link href="<?php echo base_url(); ?>resources/css/theme-default.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url(); ?>resources/css/zebra_datePicker.css" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>resources/css/zebra_datePicker_custom.css" type="text/css">
        <script type="text/javascript" src="<?php echo base_url() ?>resources/css/image-crop-styles.css"></script>



        <script src="<?php echo base_url(); ?>resources/js/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>resources/js/jquery-2.0.3.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>resources/js/chosen.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>resources/js/datepicker.js" type="text/javascript"></script>    
        <script src="<?php echo base_url(); ?>resources/js/ajax_req.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>resources/js/smscounter.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>resources/js/recharge.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>resources/js/utils.js" type="text/javascript"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>resources/js/zebra_datepicker.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>resources/js/zebra_datepicker_core.js"></script>
        <!--<angular>-->
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/angular/angular.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/angular/angular-animate.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/angular-bootstrap/ui-bootstrap.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/bootstrap.min.js" ></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/angular/angular-file-upload.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/angular/image-crop.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/csv_file_dependencies/angular-sanitize.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/csv_file_dependencies/ng-csv.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/angular/dirPagination.js"></script>

        <!--<angular Services>-->
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/AngularService/memberService.js"></script>
        <!--<script type="text/javascript" src="<?php // echo base_url(); ?>resources/js/AngularService/resellerService.js"></script>-->
        <!--<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/AngularService/paymentService.js"></script>-->
        <!--<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/AngularService/reportService.js"></script>-->

        <!--<angular Controller>-->
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/AngularController/memberController.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/AngularController/imageCropController.js"></script>
        <!--<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/AngularController/resellerController.js"></script>-->
        <!--<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/AngularController/paymentController.js"></script>-->
        <!--<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/AngularController/leftController.js"></script>-->
        <!--<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/AngularController/reportController.js"></script>-->

        <!--<angular Apps>-->
        <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/AngularApp/memberApp.js"></script>
        <!--<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/AngularApp/resellerApp.js"></script>-->
        <!--<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/AngularApp/paymentApp.js"></script>-->
        <!--<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/AngularApp/reportApp.js"></script>-->
        <title>TIMFinance</title>
    </head>
    <body class="back">
        <div id="wrapper">
            <div id="header">
                <?php $this->load->view("templates/sections/header"); ?>
            </div>
            <div style="background-color: #FFFFFF;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-2" style="background-color: #FFFFFF">
                            <?php $this->load->view("templates/left_panel"); ?>
                        </div>
                        <div class="col-md-9" style="background-color: #FFFFFF">
                            <?php echo $contents; ?>
                        </div>
                        <div class="col-md-1">
                            
                        </div>
                    </div>
                </div>
            </div>
<!--            <div id="footer">
                <?php // $this->load->view("templates/sections/footer"); ?>
            </div>-->
        </div>
    </body>
</html>