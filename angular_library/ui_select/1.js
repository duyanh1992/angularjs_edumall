var app = angular.module('myApp', ['ngSanitize', 'ui.select']);

angular.module('myApp')
.controller('MyController', ['$scope', function ($scope){
    $scope.itemArray = [
        {id: 1, name: 'first'},
        {id: 2, name: 'second'},
        {id: 3, name: 'third'},
        {id: 4, name: 'fourth'},
        {id: 5, name: 'fifth'},
    ];

    $scope.selected = {value : $scope.itemArray[0]};

    $scope.getdata = function(){
    	console.log($scope.selected.value.id+' - '+$scope.selected.value.name);
    };
}]);