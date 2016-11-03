angular.module('controller.Payment', ['services.Payment']).
        controller('paymentController', function ($scope, paymentService) {
            $scope.paymentInfo = {};
            $scope.paymentTypeList = [];
            $scope.allow_payment = true;
            $scope.createPayment = function (userId, callbackFunction) {
                if ($scope.allow_payment == false) {
                    return;
                }
                $scope.allow_payment = false;
                paymentService.createPayment(userId, $scope.paymentInfo).
                        success(function (data, status, headers, config) {
                            $scope.allow_payment = true;
                            callbackFunction(data);
                        });
            }
           


        });


