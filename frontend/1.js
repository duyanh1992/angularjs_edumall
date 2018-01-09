var app = angular.module('myApp',['ngMaterial']);

app.controller('MyController', function($scope, $http, $mdToast){
	// $scope.display = 'true';
	// $scope.show = function(){
	// 	$scope.display = !$scope.display;
	// };

	$scope.show = function(member){
	 	member.display = !member.display;
	};

	$scope.postMemberData = function(member){
		member.display = !member.display;

		var data = $.param({
			id : member.id,
			name : member.name,
			facebook : member.facebook,
			year_of_birth : member.year_of_birth,
			phone_number : member.phone_number
		});

		var config = {
			headers : {
				'content-type' : 'application/x-www-form-urlencoded;charset=UTF-8'
			}
		}

		$http.post('http://localhost/PHP_ANGULAR/index.php/member/editMember', data, config)
		.then(function(response){
			//console.log(response.data);
			$scope.showSimpleToast();
		}, function(response){
			//console.log(response.data);
		});
	}

	 $http.get("http://localhost/PHP_ANGULAR/index.php/member/getAllMember")
    .then(function(response) {

    	$scope.members = response.data;
        console.log('success !!!');
    });

	// $scope.members = [
	// 	{
	// 		"name":"Duy Anh",
	// 		"phone": {
	// 			"home_phone":"0435181312",
	// 			"personal_phone":"01298101529"
	// 		},
	// 		"sex":"male"
	// 	},

	// 	{
	// 		"name":"Carrick",
	// 		"phone": {
	// 			"home_phone":"0435",
	// 			"personal_phone":"0129"
	// 		},
	// 		"sex":"male"
	// 	},

	// 	{
	// 		"name":"Alyssa chia",
	// 		"phone": {
	// 			"home_phone":"1312",
	// 			"personal_phone":"1529"
	// 		},
	// 		"sex":"female"
	// 	}
	// ];	

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
        .textContent('Update Successfully!')
        .position(pinTo)
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

.controller('ToastCtrl', function($scope, $mdToast) {
  $scope.closeToast = function() {
    $mdToast.hide();
  };
});