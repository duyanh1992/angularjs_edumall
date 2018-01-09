<!DOCTYPE html>
<html lang="en"  >
	<head>
	<title> Document  </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 	
	<link rel="stylesheet" href="<?php echo base_url() ?>frontend4/vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>frontend4/vendor/angular-material.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>frontend4/vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?php echo base_url() ?>frontend4/1.css">
</head>
<body ng-app="myApp" ng-controller="MyController">
	<div id="content" ng-repeat="data in aboutData" ng-init="data.display = true">
		<div class="container">
			<div class="card">
			  <div class="card-body">
			    <p class="card-text">{{ data.header_title }}</p>
			    <p ng-show="data.display">
			    	<a href="#" class="card-link" ng-click="changeDisplaying(data)">Edit</a>
			    </p>
			    <p ng-show="!data.display">
		    		<input type="text" ng-model="data.header_title">
			    	<a href="#" class="card-link" ng-click="saveData(data)">Save</a>
			    </p>
			  </div>
			</div>
		</div>

		<div class="container">
			<div class="card">
			  <div class="card-body">
			    <p class="card-text">{{ data.header_subtitle }}</p>
			    <p ng-show="data.display">
			    	<a href="#" class="card-link" ng-click="changeDisplaying(data)">Edit</a>
			    </p>
			    <p ng-show="!data.display">
		    		<input type="text" ng-model="data.header_subtitle">
			    	<a href="#" class="card-link" ng-click="saveData(data)">Save</a>
			    </p>
			  </div>
			</div>
		</div>

		<div class="container">
			<div class="card">
			  <div class="card-body">
			    <p class="card-text">{{ data.content }}</p>
			    <p ng-show="data.display">
			    	<a href="#" class="card-link" ng-click="changeDisplaying(data)">Edit</a>
			    </p>
			    <p ng-show="!data.display">
		    		<input type="text" ng-model="data.content">
			    	<a href="#" class="card-link" ng-click="saveData(data)">Save</a>
			    </p>
			  </div>
			</div>
		</div>

		<div class="container">
			<div class="card">
			  <div class="card-body">
				<img src="{{ data.image }}" alt="" width="800px" height="200px">	
				<p ng-show="data.display">
			    	<a href="#" class="card-link" ng-click="changeDisplaying(data)">Edit</a>
			    </p>
			    <p ng-show="!data.display">
		    		<input type="text" ng-model="data.image">
			    	<a href="#" class="card-link" ng-click="saveData(data)">Save</a>
			    </p>
			  </div>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="<?php echo base_url() ?>frontend4/vendor/bootstrap.js"></script>  
	<script type="text/javascript" src="<?php echo base_url() ?>frontend4/vendor/angular-1.5.min.js"></script>  
  	<script type="text/javascript" src="<?php echo base_url() ?>frontend4/vendor/angular-animate.min.js"></script>
  	<script type="text/javascript" src="<?php echo base_url() ?>frontend4/vendor/angular-route.min.js"></script>  
  	<script type="text/javascript" src="<?php echo base_url() ?>frontend4/vendor/angular-aria.min.js"></script>
 	<script type="text/javascript" src="<?php echo base_url() ?>frontend4/vendor/angular-messages.min.js"></script>
 	<script type="text/javascript" src="<?php echo base_url() ?>frontend4/vendor/angular-material.min.js"></script>  
  	<script type="text/javascript" src="<?php echo base_url() ?>frontend4/1.js"></script>
</body>
</html>