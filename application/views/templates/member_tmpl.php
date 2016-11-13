<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TIMF</title>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="stylesheet" href="<?php echo base_url();?>resources/css/bootstrap.min.css">

    <link rel="stylesheet" href="<?php echo base_url();?>resources/css/font-awesome.css">

    <link rel="stylesheet" href="<?php echo base_url();?>resources/css/ionicons.min.css">

    <link rel="stylesheet" href="<?php echo base_url();?>resources/css/AdminLTE.css">

    <link rel="stylesheet" href="<?php echo base_url();?>resources/css/skins/_all-skins.css">

    <script src="<?php echo base_url();?>resources/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?php echo base_url();?>resources/js/jquery-ui.js"></script>

    <script src="<?php echo base_url();?>resources/js/bootstrap.min.js"></script>

    <script src="<?php echo base_url();?>resources/js/app.min.js"></script>

</head>

<body class="hold-transition skin-blue sidebar-mini">


<div class="wrapper">


    <?php $this->load->view("templates/sections/header"); ?>
    <?php $this->load->view('templates/left_panel');?>
        <div style="background-color: #FFFFFF;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-11">
                        <?php echo $contents; ?>
                    </div>
                    </div>
                    <div class="col-md-2">

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
