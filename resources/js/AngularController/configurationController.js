angular.module('controller.Configuration', ['services.Configuration']).
        controller('configurationController', function ($scope, configurationService) {
              $scope.investorList = [];
              $scope.processList = [];
              $scope.organizationInfo = {};
            $scope.setInvestorList = function (investorList) {
                $scope.investorList = JSON.parse(investorList);
            }
            $scope.setProcessList = function (processList) {
                $scope.processList = JSON.parse(processList);
            }

            $scope.addOrganization = function () {
                if ($scope.allow_action == false) {
                    return;
                }
                $scope.allow_action = false;
                configurationService.addOrganization($scope.organizationInfo).
                        success(function (data, status, headers, config) {
                            alert(data.message);
                            $scope.organizationInfo = {};
                            $scope.allow_action = true;
                        });
            }



        });


