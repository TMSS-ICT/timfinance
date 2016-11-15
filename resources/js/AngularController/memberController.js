angular.module('controller.Member', ['services.Member']).
        controller('memberController', function ($scope, memberService) {
            $scope.memberSurveyInfo = {};
            $scope.zoneList = [];
            $scope.areaList = [];
            $scope.branchList = [];
            $scope.genderList = [];
            $scope.educationList = [];
            $scope.ageList = [];
            $scope.yearList = [];
            $scope.proList = [];
            $scope.maritalList = [];
            $scope.politicalStatusList = [];
            $scope.nameTitleList = [];
            $scope.districtList = [];
            $scope.unionList = [];
            $scope.familyTitleList = [];
            $scope.fTitleList = [];
            $scope.mTitleList = [];
            $scope.thanaList = [];
            $scope.postList = [];
            $scope.paymentTypeList = [];
            $scope.memberNoList = [];
            $scope.allow_action = true;

            $scope.setPaymentTypeList = function (paymentTypeList) {
                $scope.paymentTypeList = JSON.parse(paymentTypeList);
            }
            $scope.setUnionList = function (unionList) {
                $scope.unionList = JSON.parse(unionList);
            }
            $scope.setDistrictList = function (districtList) {
                $scope.districtList = JSON.parse(districtList);
            }
            $scope.setPostList = function (postList) {
                $scope.postList = JSON.parse(postList);
            }
            $scope.setThanaList = function (thanaList) {
                $scope.thanaList = JSON.parse(thanaList);
            }
            $scope.setMemberList = function (memberNoList) {
                $scope.memberNoList = JSON.parse(memberNoList);
            }
            $scope.setBTypeList = function (bTypeList) {
                $scope.bTypeList = JSON.parse(bTypeList);
            }
            $scope.setNameTitleList = function (nameTitleList) {
                $scope.nameTitleList = JSON.parse(nameTitleList);
            }
            $scope.setFamilyTitleList = function (familyTitleList) {
                $scope.familyTitleList = JSON.parse(familyTitleList);
            }
            $scope.setFTitleList = function (fTitleList) {
                $scope.fTitleList = JSON.parse(fTitleList);
            }
            $scope.setMTitleList = function (mTitleList) {
                $scope.mTitleList = JSON.parse(mTitleList);
            }
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
            $scope.setProfessionList = function (proList) {
                $scope.proList = JSON.parse(proList);
            }
            $scope.setMaritalList = function (maritalList) {
                $scope.maritalList = JSON.parse(maritalList);
            }
            $scope.setCountryList = function (countryList) {
                $scope.countryList = JSON.parse(countryList);
            }
            $scope.setPSList = function (politicalStatusList) {
                $scope.politicalStatusList = JSON.parse(politicalStatusList);
            }
            $scope.addSurveyInfo = function (callbackFunction) {
                if ($scope.allow_action == false) {
                    return;
                }
                $scope.allow_action = false;
                memberService.addSurveyInfo($scope.memberSurveyInfo).
                        success(function (data, status, headers, config) {
                            $scope.allow_action = true;
//                            callbackFunction(data);
                        });
            }

            $scope.Test = function () {
                console.log($scope.memberSurveyInfo);
            }

        });


