<div class="content-wrapper" ng-controller="memberController">
    <!-- Content Header (Page header) -->
    <section class="content-header" style="padding-top: 1%">
        <h4 class="text-center">টিএমএসএস ইসলামিক মাইক্রো ফাইনান্স (TMSSIMF)</h4>
        <p class="text-blue text-center"><u>বিনিয়োগের গ্রহনের জন্য আবেদনের তালিকা</u></p>
    </section>

    <section class="content">
        <div class="row">

            <div class="col-md-12">

                <div class="box  box-info">

                    <div class="box-body">
                        <div class="row">
                            <div class="form-inline">

                                <div class="form group inline col-lg-6">
                                    <label>Search</label>
                                    <input type="text" class="form-control"ng-model="searchParam.searchValue" placeholder="">
                                    <button type="button" class="btn bg-navy btn-flat margin" ng-click="searchSurveyInfo()">অনুসন্ধান করুন</button>
                                </div>
                                <div class="form-group col-sm-6">
                                    <a href="<?php echo base_url() . 'member/product' ?>"><button type="button" class="btn bg-purple btn-flat margin pull-right" value="">Add a New Product</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-md-12">

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title "> Application List for Investment</h3>
                    </div>

                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover" ng-init="setLoanList('<?php echo htmlspecialchars(json_encode($loan_list)) ?>')">
                            <thead>
                            <tr>
                                <th>Sl No</th>
                                <th>Member ID</th>
                                <th>NID</th>
                                <th>Type</th>
                                <th>Amount</th>
                                <th>Edit</th>
                                <th>Delete</th>
                                <th>Approval Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr ng-repeat="(key, memberInfo) in memberList">
                                <td>{{key+1}}</td>
                                <td>{{memberInfo.id}}</td>
                                <td>{{memberInfo.nid}}</td>
                                <td>{{memberInfo.investmentType}} </td>
                                <td>{{memberInfo.amount}}</td>
                                <td><a class="btn btn-app">
                                        <i class="fa fa-edit"></i> Edit
                                    </a></td>
                                <td><i class="glyphicon glyphicon-trash"></i> Delete</td>
                                <td> <input type="checkbox"> </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- /.content -->
</div>
