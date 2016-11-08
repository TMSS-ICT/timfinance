angular.module('controller.Member', ['services.Member']).
        controller('memberController', function ($scope, memberService) {
            $scope.paymentInfo = {};
            $scope.paymentTypeList = [];
            $scope.allow_payment = true;
            $scope.createPayment = function (userId, callbackFunction) {
                if ($scope.allow_payment == false) {
                    return;
                }
                $scope.allow_payment = false;
                memberService.createPayment(userId, $scope.paymentInfo).
                        success(function (data, status, headers, config) {
                            $scope.allow_payment = true;
                            callbackFunction(data);
                        });
            }
           


        });


