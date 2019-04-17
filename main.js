var app_name = angular.module('app_name', []);

app_name.controller('ctrl1', function($scope){

    $scope.first = 1;
    $scope.second = 1;

    $scope.updateValue = function () {
         $scope.calculation = $scope.first + ' + ' + $scope.second + ' = ' + 
            (+$scope.first + +$scope.second);
    }

});

