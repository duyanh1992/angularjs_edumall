var app = angular.module('myApp',['ngMaterial']);

app.controller('MyController', function($scope, $http, $mdToast){
	var url = 'http://localhost/PHP_ANGULAR/index.php/lesson42/AboutController/getData';
	$http.get(url)
	.then(function(res){
		$scope.aboutData = res.data;
	}, function(res){
		console.log('Failed !!!');
	});

	$scope.changeDisplaying = function(data){
		data.display = !data.display;
	};

	$scope.saveData = function(data){
		data.display = !data.display;

		var config = {
			headers : {
				'content-type' : 'application/x-www-form-urlencoded;charset=UTF-8'
			}
		}

		var dataSend = $.param({
			id : data.id,
			header_title : data.header_title,
			header_subtitle : data.header_subtitle,
			content : data.content,
			image : data.image
		});

		var urlPost = 'http://localhost/PHP_ANGULAR/index.php/lesson42/AboutController/editdata';

		//Send data:
		$http.post(urlPost,dataSend,config)
		.then(function(res){
			$scope.showSimpleToast();
			console.log(res.data);
		}, function(res){
			console.log(res.data);
		});
	}

	  var last = {
      bottom: false,
      top: true,
      left: false,
      right: true
    };

  $scope.toastPosition = angular.extend({},last);

  $scope.getToastPosition = function() {
    sanitizePosition();

    return Object.keys($scope.toastPosition)
      .filter(function(pos) { return $scope.toastPosition[pos]; })
      .join(' ');
  };

  function sanitizePosition() {
    var current = $scope.toastPosition;

    if ( current.bottom && last.top ) current.top = false;
    if ( current.top && last.bottom ) current.bottom = false;
    if ( current.right && last.left ) current.left = false;
    if ( current.left && last.right ) current.right = false;

    last = angular.extend({},current);
  }

  $scope.showSimpleToast = function() {
    var pinTo = $scope.getToastPosition();

    $mdToast.show(
      $mdToast.simple()
        .textContent('Updating successfully !')
        .position(pinTo )
        .hideDelay(3000)
    );
  };

  $scope.showActionToast = function() {
    var pinTo = $scope.getToastPosition();
    var toast = $mdToast.simple()
      .textContent('Marked as read')
      .action('UNDO')
      .highlightAction(true)
      .highlightClass('md-accent')// Accent is used by default, this just demonstrates the usage.
      .position(pinTo);

    $mdToast.show(toast).then(function(response) {
      if ( response == 'ok' ) {
        alert('You clicked the \'UNDO\' action.');
      }
    });
  };
})