angular.module('services.Configuration', []).
        factory('configurationService', function ($http, $location) {
            var $app_name = "/timfinance";
            //var $app_name = "";
            var configurationService = {};
           
            configurationService.addOrganization = function (organizationInfo) {
               return $http({
                    method: 'post',
                    url: $location.path() + $app_name + '/configuration/organization_settings',
                    data: {
                        organizationInfo: organizationInfo
                    }
                });
            };
           
            return configurationService;
        });

