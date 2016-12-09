angular.module('controller.Header', []).
        controller('headerController', function ($scope) {
           
            $scope.groupInfo = {};
            $scope.officeInfo = {};
            $scope.memberNoList = [];
            $scope.allow_action = true;

            $scope.setGroupInfo = function (groupInfo) {
                $scope.groupInfo = JSON.parse(groupInfo);
            }
            $scope.setOfficeInfo = function (officeInfo) {
                $scope.officeInfo = JSON.parse(officeInfo);
            }
        });


