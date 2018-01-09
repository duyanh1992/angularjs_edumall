var app = angular.module('myApp', ['ngRoute']);


app.controller('MyController', function($scope){
	
})

app.config(function ($routeProvider, $locationProvider) {
	$routeProvider
	.when('/', {
		templateUrl : 'main.html',
		controller: 'MainController'
	})

	.when('/social', {
		templateUrl : 'social.html'
	})

	.when('/ad', {
		templateUrl : 'ad.html'
	})

 	.otherwise({ redirectTo : '/' })

 	$locationProvider.html5Mode(true);
});

app.controller('MainController', function($scope, $http){
	$http.get('data/data.json').then(
		function(res){
			//console.log(res.data);
			$scope.data = res.data;
		}
		,function(){
			console.log('failed !!!');
		})
})