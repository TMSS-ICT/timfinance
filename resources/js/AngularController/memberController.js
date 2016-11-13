angular.module('controller.Member', ['services.Member']).
        controller('memberController', function ($scope, memberService) {
            $scope.memberSurveyInfo = {};
            $scope.zoneList = [];
            $scope.areaList = [];
            $scope.branchList = [];
            $scope.allow_action = true;

            $scope.setZoneList = function (zoneList) {
                $scope.zoneList = JSON.parse(zoneList);
                console.log($scope.zoneList);
            }
            $scope.setAreaList = function (areaList) {
                $scope.areaList = JSON.parse(areaList);
            }
            $scope.setBranchList = function (branchList) {
                $scope.branchList = JSON.parse(branchList);
            }
            $scope.addSurveyInfo = function (callbackFunction) {
                if ($scope.allow_action == false) {
                    return;
                }
                $scope.allow_action = false;
                memberService.addSurveyInfo($scope.memberSurveyInfo).
                        success(function (data, status, headers, config) {
                            $scope.allow_action = true;
                            callbackFunction(data);
                        });
            }



        });


