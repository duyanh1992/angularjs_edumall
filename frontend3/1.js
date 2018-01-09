var app = angular.module('myApp', ['ngRoute']);


app.controller('MyController', function($scope){
	
})

app.config(function($routeProvider, $locationProvider){
	$locationProvider.html5Mode(true);

	$routeProvider
	.when('/', {
		templateUrl : 'blocks/content_index.html'
	})
	.when('/about', {
		templateUrl : 'blocks/content_about.html',
		controller: 'aboutController'
	})
	.when('/contact', {
		templateUrl : 'blocks/content_contact.html'
	})
	.when('/post', {
		templateUrl : 'blocks/content_post.html'
	})
	.otherwise({redirectTo: '/'});
});

app.controller('aboutController', function($scope, $http){
	var url = 'http://localhost/PHP_ANGULAR/index.php/lesson42/AboutController/getData';
	$http.get(url)
	.then(function(res){
		$scope.aboutData = res.data;
	}, function(res){
		console.log("FAILED !!!");
	});
});