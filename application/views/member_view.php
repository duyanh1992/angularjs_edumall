<!DOCTYPE html>
<html lang="en"  >
	<head>
	<title> Document  </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 	
	<link rel="stylesheet" href="<?php echo base_url('frontend') ?>/vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url('frontend') ?>/vendor/angular-material.min.css">
	<link rel="stylesheet" href="<?php echo base_url('frontend') ?>/vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?php echo base_url('frontend') ?>/1.css">
</head>
<body ng-app="myApp">

	<div class="jumbotron" ng-controller="MyController">
		<div class="container">
			<p>
				<div class="card" ng-repeat="member in members" ng-init="member.display=true">
					<div class="card-header">
						<b class="float-xs-right" ng-click="show(member);"><i class="fa fa-pencil"></i></b>
					</div>

					<div class="card-block">
						<ul ng-show="member.display">
							<li>Name : {{ member.name }}</li>
							<li>Facebook : {{ member.facebook }}</li>
							<li>Year_of_birth : {{ member.year_of_birth }}</li>
							<li>Phone number : {{ member.phone_number }}</li>
						</ul>

						<ul ng-show="!member.display">
							<li><input type="text" class="form-control" ng-model="member.id"></li>
							<li><input type="text" class="form-control" ng-model="member.name"></li>
							<li><input type="text" class="form-control" ng-model="member.facebook"></li>
							<li><input type="text" class="form-control" ng-model="member.year_of_birth"></li>
							<li><input type="text" class="form-control" ng-model="member.phone_number"></li>
							<li><input type="submit" class="form-control btn btn-primary" value="OK" ng-click="postMemberData(member);"></li>
						</ul>
					</div>
				</div>	
			</p>
		</div>
	</div>	 
	 
	<script type="text/javascript" src="<?php echo base_url('frontend') ?>/vendor/bootstrap.js"></script>  
	<script type="text/javascript" src="<?php echo base_url('frontend') ?>/vendor/angular-1.5.min.js"></script>  
  	<script type="text/javascript" src="<?php echo base_url('frontend') ?>/vendor/angular-animate.min.js"></script>
  	<script type="text/javascript" src="<?php echo base_url('frontend') ?>/vendor/angular-aria.min.js"></script>
 	<script type="text/javascript" src="<?php echo base_url('frontend') ?>/vendor/angular-messages.min.js"></script>
 	<script type="text/javascript" src="<?php echo base_url('frontend') ?>/vendor/angular-material.min.js"></script>  
  	<script type="text/javascript" src="<?php echo base_url('frontend') ?>/1.js"></script>
</body>
</html>