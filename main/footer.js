angular.module('ionicApp', ['ionic'])

.controller('MainCtrl', function($scope, $rootScope) {

    $rootScope.showFooter = true;
  
    $scope.toggle = function() {
      $rootScope.showFooter = !$rootScope.showFooter;
    };
});
s