angular.module('services.Member', []).
        factory('memberService', function ($http, $location) {
            var $app_name = "/tmifinance";
            //var $app_name = "";
            var memberService = {};
            memberService.addSurveyInfo = function (memberSurveyInfo) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/member/add_survey_info/',
                    data: {
                        memberSurveyInfo: memberSurveyInfo
                    }
                });
            }
           
            return memberService;
        });

