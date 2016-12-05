<div class="content-wrapper" ng-controller="memberController">
    <!-- Content Header (Page header) -->
    <section class="content-header" style="padding-top: 1%">
        <h1 class=" text-center">টিএমএসএস ইসলামিক মাইক্রো ফাইনান্স (TMIMF)</h1>
        <p class="text-blue text-center"><u>ঋণ আবেদন ফরম</u></p>
    </section>

    <section class="content">

        <div class="row">

            <div class="col-md-12">

                <div class="box box-primary" >
                    <div class="box-header with-border">
                        <h3 class="box-title ">Cash Flow/ অর্থ প্রবাহ বিবরণী (মাসিক সর্বনিম্ন)</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <div class="box-header with-border">
                        <p class=" ">উদ্যোগ/ব্যবসার অর্থ প্রবাহঃ (এ ছকে শুধু মাত্র যে ব্যবসার জন্য বিনিয়োগ নিতে
                            আগ্রহী সেই ব্যবসার মাসিক গড় ক্যাশ প্রবাহের তথ্য যাবে)</p>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-body" ng-init="setInflowList('<?php echo htmlspecialchars(json_encode($inflow_list)) ?>')">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr class="">
                                                    <th colspan="4" style="width: 50% ;text-align: center">Cash Inflow
                                                        (অর্থ আগমন)
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th><input type="checkbox" ng-model="selectedAll"
                                                               ng-click="checkAll()"/></th>
                                                    <th>ক্রমিক নং</th>
                                                    <th>সেবা/পণ্য বিক্রয়ের বিবরণ</th>
                                                    <th>টাকার পরিমাণ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr ng-repeat="(key, infowInfo) in inflowsRow">
                                                    <td>
                                                        <input type="checkbox" ng-model="infowInfo.selected"/>
                                                    </td>
                                                    <td>
                                                        {{key + 1}}
                                                    </td>
                                                    <td>
                                                        <input id="name_{{key}}" type="text" class="form-control" onclick="showDropdown(angular.element(this).scope().key)"
                                                               ng-model="infowInfo.name" required/>
                                                        <select class="form-control " style="width: 100%; display: none" id="option_{{key}}" ng-model="infowInfo.cash_inflow_id" >
                                                            <option value="">নির্বাচন করুন</option>/option>
                                                            <option ng-repeat="branchInfo in infowList" value={{branchInfo.id}} >{{branchInfo.name}}</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control"
                                                               ng-model="infowInfo.amount" required/>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <div class="form-group">

                                            <input ng-hide="!inflowsRow.length" type="button"
                                                   class="btn btn-danger pull-right" ng-click="remove()"
                                                   value="Remove">
                                            <input type="submit" class="btn btn-primary addnew pull-right"
                                                   value="Add New" ng-click="addNew()">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title ">Cash Flow/ অর্থ প্রবাহ বিবরণী (মাসিক সর্বনিম্ন)</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <div class="box-header with-border">
                        <p class=" ">উদ্যোগ/ব্যবসার অর্থ প্রবাহঃ (এ ছকে শুধু মাত্র যে ব্যবসার জন্য বিনিয়োগ নিতে
                            আগ্রহী সেই ব্যবসার মাসিক গড় ক্যাশ প্রবাহের তথ্য যাবে)</p>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-body" ng-init="setOutflowList('<?php echo htmlspecialchars(json_encode($outflow_list)) ?>')">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr class="">
                                                    <th colspan="4" style="width: 50% ;text-align: center">Cash OutFlow
                                                        (অর্থ বহিঃরগমন)
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th><input type="checkbox" ng-model="selectedAll"
                                                               ng-click="checkAll()"/></th>
                                                    <th>ক্রমিক নং</th>
                                                    <th>কাঁচামাল ক্রয় ও খরচের বিবরণ</th>
                                                    <th>টাকার পরিমাণ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr ng-repeat="(key, outfowInfo) in outflowsRow">
                                                    <td>
                                                        <input type="checkbox" ng-model="outfowInfo.selected"/>
                                                    </td>
                                                    <td>
                                                        {{key + 1}}
                                                    </td>
                                                    <td>
                                                        <input id="name_out_{{key}}" type="text" class="form-control" onclick="showOutFlow(angular.element(this).scope().key)"
                                                               ng-model="outfowInfo.name" />
                                                        <select class="form-control " style="width: 100%; display: none" id="option_out_{{key}}" ng-model="outfowInfo.cash_outflow_id" >
                                                            <option value="">নির্বাচন করুন</option>/option>
                                                            <option ng-repeat="outInfo in outfowList" value={{outInfo.id}} >{{outInfo.name}}</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control"
                                                               ng-model="outfowInfo.amount" required/>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <div class="form-group">
                                            <input ng-hide="!outflowsRow.length" type="button"
                                                   class="btn btn-danger pull-right" ng-click="removeOutFlow()"
                                                   value="Remove">
                                            <input type="submit" class="btn btn-primary addnew pull-right"
                                                   value="Add New" ng-click="addOutNew()">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title ">Cash Flow/ অর্থ প্রবাহ বিবরণী (মাসিক সর্বনিম্ন)</h3>
                    </div>

                    <div class="box-header with-border">
                        <p class=" ">সামগ্রীক অর্থ প্রবাহ ছকঃ (এ ছকে বিনিয়োগ নিতে
                            আগ্রহী ব্যক্তির সকল ধরনের আয়ের উৎসের মাসিক গড় ক্যাশ প্রবাহের তথ্য যাবে)</p>
                    </div>

                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <table class="table table-striped table-bordered" ng-init="setInflowList1('<?php echo htmlspecialchars(json_encode($inflow_list)) ?>')">
                                            <thead>
                                                <tr class="">
                                                    <th colspan="4" style="width: 50% ;text-align: center">Cash Inflow
                                                        (অর্থ আগমন)
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th><input type="checkbox" ng-model="selectedAll"
                                                               ng-click="checkAll()"/></th>
                                                    <th>ক্রমিক নং</th>
                                                    <th>আয়ের বিবরণ</th>
                                                    <th>টাকার পরিমাণ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr ng-repeat="(key, infowInfo) in overallInflowsRow">
                                                    <td>
                                                        <input type="checkbox" ng-model="infowInfo.selected"/>
                                                    </td>
                                                    <td>
                                                        {{key + 1}}
                                                    </td>
                                                    <td>
                                                        <input id="overall_name_{{key}}" type="text" class="form-control" onclick="showOverallDropdown(angular.element(this).scope().key)"
                                                               ng-model="infowInfo.name" required/>
                                                        <select class="form-control " style="width: 100%; display: none" id="overall_option_{{key}}" ng-model="infowInfo.cash_inflow_id" >
                                                            <option value="">নির্বাচন করুন</option>/option>
                                                            <option ng-repeat="inInfo in infowList" value={{inInfo.id}} >{{inInfo.name}}</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control"
                                                               ng-model="infowInfo.amount" required/>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <div class="form-group">
                                            <input ng-hide="!overallInflowsRow.length" type="button"
                                                   class="btn btn-danger pull-right" ng-click="overallInflowRemove()"
                                                   value="Remove">
                                            <input type="submit" class="btn btn-primary addnew pull-right"
                                                   value="Add New" ng-click="addOverallInNew()">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title ">Cash Flow/ অর্থ প্রবাহ বিবরণী (মাসিক সর্বনিম্ন)</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <div class="box-header with-border">
                        <p class=" ">সামগ্রীক অর্থ প্রবাহ ছকঃ (এ ছকে বিনিয়োগ নিতে
                            আগ্রহী ব্যক্তির সকল ধরনের আয়ের উৎসের মাসিক গড় ক্যাশ প্রবাহের তথ্য যাবে)</p>
                    </div>

                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <table class="table table-striped table-bordered" ng-init="setOutflowList1('<?php echo htmlspecialchars(json_encode($outflow_list)) ?>')">
                                            <thead>
                                                <tr class="">
                                                    <th colspan="4" style="width: 50% ;text-align: center">Cash OutFlow
                                                        (অর্থ বহিঃরগমন)
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th><input type="checkbox" ng-model="selectedAll"
                                                               ng-click="checkAll()"/></th>
                                                    <th>ক্রমিক নং</th>
                                                    <th>খরচের বিবরণ</th>
                                                    <th>টাকার পরিমাণ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr ng-repeat="(key, outfowInfo) in overallOutflowsRow">
                                                    <td>
                                                        <input type="checkbox" ng-model="outfowInfo.selected"/>
                                                    </td>
                                                    <td>
                                                        {{key + 1}}
                                                    </td>
                                                    <td>
                                                        <input id="name_overall_out_{{key}}" type="text" class="form-control" onclick="showOverallOutFlow(angular.element(this).scope().key)"
                                                               ng-model="outfowInfo.name" />
                                                        <select class="form-control " style="width: 100%; display: none" id="option_overall_out_{{key}}" ng-model="outfowInfo.cash_outflow_id" >
                                                            <option value="">নির্বাচন করুন</option>/option>
                                                            <option ng-repeat="outInfo in outfowList" value={{outInfo.id}} >{{outInfo.name}}</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control"
                                                               ng-model="outfowInfo.amount" required/>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <div class="form-group">
                                            <input ng-hide="!overallOutflowsRow.length" type="button"
                                                   class="btn btn-danger pull-right" ng-click="removeOverallOutFlow()"
                                                   value="Remove">
                                            <input type="submit" class="btn btn-primary addnew pull-right"
                                                   value="Add New" ng-click="addOverallOutNew()">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!--                <div class="box-header with-border">
                                    <h3 class="box-title ">অত্র সংস্থা বা অন্য কোন আর্থিক প্রতিষ্ঠানে আবেদনকারীর বিনিয়োগের
                                        তথ্যঃ</h3>
                                </div>-->

                <!--                <div class="box-body">
                                    <div class="row">
                                        <div class="form-inline">
                
                                            <div class="form-group col-lg-3">
                                                <label>বিনিয়োগ দাতা প্রতিষ্ঠানের নামঃ</label>
                                                <input type="text" class="form-control" name="cultivable_land"
                                                       placeholder="বিনিয়োগ দাতা প্রতিষ্ঠানের নামঃ" style="width: 100%;">
                                            </div>
                
                                            <div class="form-group col-lg-3">
                                                <label>বিনিয়োগ দাতা প্রতিষ্ঠানের ঠিকানাঃ</label>
                                                <textarea class="form-control" name="org_address" style="width: 100%"></textarea>
                                            </div>
                
                                            <div class="form-group col-lg-3">
                                                <label>গৃহীত বিনিয়োগ/ঋনের পরিমানঃ</label>
                                                <input type="text" class="form-control" name="cultivable_land"
                                                       placeholder="গৃহীত বিনিয়োগ/ঋনের পরিমানঃ" style="width: 100%;">
                                            </div>
                
                                            <div class="form-group col-sm-3">
                                                <label>বিনিয়োগ সামগ্রীর নামঃ</label>
                                                <input type="text" class="form-control" name="cultivable_land"
                                                       placeholder="বিনিয়োগ সামগ্রীর নামঃ" style="width: 100%;">
                                            </div>
                
                                        </div>
                                    </div>
                                </div>-->

                <!--                <div class="box-body">
                                    <div class="row">
                                        <div class="form-inline">
                
                                            <div class="form-group col-lg-3">
                                                <label>বিনিয়োগের দফা নংঃ</label>
                                                <input type="text" class="form-control" name="cultivable_land"
                                                       placeholder="বিনিয়োগের দফাঃ নংঃ" style="width: 100%;">
                                            </div>
                
                                            <div class="form-group col-lg-3">
                                                <label>বিনিয়োগের মেয়াদঃ</label>
                                                <input type="text" class="form-control" name="cultivable_land"
                                                       placeholder="বিনিয়োগের মেয়াদঃ" style="width: 100%;">
                                            </div>
                
                                            <div class="form-group col-lg-3">
                                                <label>বিনিয়োগ/ঋণ গ্রহনের তাংঃ</label>
                                                <input type="text" class="form-control" name="cultivable_land"
                                                       placeholder="" style="width: 100%;">
                                            </div>
                
                                            <div class="form-group col-sm-3">
                                                <label>এ পর্যন্ত পরিশোধঃ</label>
                                                <input type="text" class="form-control" name="cultivable_land"
                                                       placeholder="এ পর্যন্ত পরিশোধঃ" style="width: 100%;">
                                            </div>
                
                                        </div>
                                    </div>
                                </div>-->

                <!--                <div class="box-body">
                                    <div class="row">
                                        <div class="form-inline">
                
                                            <div class="form-group col-lg-3">
                                                <label>বর্তমান স্থিতিঃ </label>
                                                <input type="text" class="form-control" name="cultivable_land"
                                                       placeholder="বর্তমান স্থিতিঃ " style="width: 100%;">
                                            </div>
                
                                            <div class="form-group col-lg-3">
                                                <label>অবশিষ্ট কিস্তি সংখ্যাঃ</label>
                                                <input type="text" class="form-control" name="cultivable_land"
                                                       placeholder="অবশিষ্ট কিস্তি সংখ্যাঃ" style="width: 100%;">
                                            </div>
                
                                            <div class="form-group col-lg-3">
                                                <label>সম্ভাব্য পরিশোধের তারিখঃ</label>
                                                <input type="text" class="form-control" name="cultivable_land"
                                                       placeholder="" style="width: 100%;">
                                            </div>
                
                                            <div class="form-group col-sm-3">
                
                                            </div>
                
                                        </div>
                                    </div>
                                </div>-->

            </div>

        </div>

        <div class="row">

            <div class="col-md-12">

                <div class="box-body">
                    <div class="col-sm-2 pull-right">
                        <button type="button" id ="saveInflowOutflow" class="btn btn-info btn-flat "onclick="saveLoanInflowOutFlow()" >Save</button>
<!--                        <button type="button" class="btn btn-info btn-flat "onclick="saveLoanInflowOutFlow()" ng-click="saveLoanInflowOutFlow('<?php echo $member_id; ?>', '<?php echo $loan_id; ?>')">Save</button>-->
                    </div>
                </div>

            </div>


        </div>

    </section>
    <!-- /.content -->
</div>

<script type="text/javascript">
    function saveLoanInflowOutFlow() {
        angular.element($('#saveInflowOutflow')).scope().saveLoanInflowOutFlow('<?php echo $member_id; ?>', '<?php echo $loan_id; ?>', function (data) {
            window.location = '<?php echo base_url(); ?>member/loan_application2/<?php echo $member_id; ?>/ <?php echo $loan_id; ?>';
        });
    }

    function showDropdown(key) {
        $("#name_" + key).hide();
        $("#option_" + key).show();
    }
    function showOutFlow(key) {
        $("#name_out_" + key).hide();
        $("#option_out_" + key).show();
    }
    function showOverallDropdown(key) {
        $("#overall_name_" + key).hide();
        $("#overall_option_" + key).show();
    }
    function showOverallOutFlow(key) {
        $("#name_overall_out_" + key).hide();
        $("#option_overall_out_" + key).show();
    }

    $(function () {
        $('#application_date').datepicker({
            autoclose: true
        });
        $('#investment_date').datepicker({
            autoclose: true
        });
        $(".timepicker").timepicker({
            showInputs: false
        });
    });
</script>

