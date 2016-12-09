<div class="content-wrapper" ng-controller="memberController">
    <!-- Content Header (Page header) -->
    <section class="content-header" style="padding-top: 1%">
        <h1 class=" text-center">টিএমএসএস ইসলামিক মাইক্রো ফাইনান্স (TMSSIMF)</h1>
        <p class="text-blue text-center"><u>ঋণ আবেদন ফরম</u></p>
    </section>


    <section class="content">

        <table frame="box" rules="all" ng-init="setInflowList('<?php echo htmlspecialchars(json_encode($inflow_list)) ?>')">
            <thead>


                <tr>

                    <th>Description</th>
                    <th>Quantity</th>
                    <th>UOM</th>
                    <th>Unit Price</th>
                    <th>Amount</th>
                    <th>Remarks</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>

                <tr></tr>
                <tr ng-repeat="r in itemRows">
                    <td>
<!--                        <select ng-model="r.name" ng-change="getProductDetails(r)" ng-options=" p.name  for p in infowList">
                            <option value="">Select Product</option>
                        </select>-->
                    </td>
                    <td>
                        <select class="form-control " ng-model="r.name" style="width: 100%;" ng-change="getProductDetails(r)">
                            <option ng-repeat="infow in infowList" value={{infow.id}} >{{infow.name}}</option>
                        </select>
                    </td>
                    <td>
                        <input type="text" disabled="disabled" style="width: 80px" ng-model="r.uom" />
                    </td>
                    <td>
                        <input type="text" style="width: 80px" disabled="disabled" ng-model="r.product_mrp" value="0" />
                    </td>
                </tr>

            </tbody>
        </table>
        </table>
        <div class="text-center">
            <button ng-click="addRow()">Add Row</button>

        </div>


        <div class="row">

            <div class="col-md-12">

                <div class="box-body">
                    <div class="col-sm-2 pull-right">
                        <button type="button" class="btn btn-info btn-flat ">Save</button>
                    </div>
                </div>

            </div>


        </div>

    </section>
    <!-- /.content -->
</div>

<script>


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

