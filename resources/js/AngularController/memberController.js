angular.module('controller.Member', ['services.Member']).
        controller('memberController', function ($scope, memberService) {
            $scope.memberSurveyInfo = {};
            $scope.memberSurveyInfo.firstName = "zia";
            $scope.zoneList = [];
            $scope.areaList = [];
            $scope.branchList = [];
            $scope.genderList = [];
            $scope.educationList = [];
            $scope.ageList = [];
            $scope.yearList = [];
            $scope.allow_action = true;

            $scope.setZoneList = function (zoneList) {
                $scope.zoneList = JSON.parse(zoneList);
            }
            $scope.setAreaList = function (areaList) {
                $scope.areaList = JSON.parse(areaList);
            }
            $scope.setBranchList = function (branchList) {
                $scope.branchList = JSON.parse(branchList);
            }
            $scope.setGenderList = function (genderList) {
                $scope.genderList = JSON.parse(genderList);
            }
            $scope.setAgeList = function (ageList) {
                $scope.ageList = JSON.parse(ageList);
            }
            $scope.setEducationList = function (educationList) {
                $scope.educationList = JSON.parse(educationList);
            }
            $scope.setYearList = function (yearList) {
                $scope.yearList = JSON.parse(yearList);
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

            $scope.Test = function () {
                console.log($scope.memberSurveyInfo);
            }

        });


