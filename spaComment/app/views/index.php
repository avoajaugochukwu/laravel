<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/bootstrap-3.min.css"> <!-- load bootstrap via cdn -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css"> <!-- load fontawesome -->
	<style>
        body        { padding-top:30px; }
        form        { padding-bottom:20px; }
        .comment    { padding-bottom:20px; }
    </style>
    
    <!-- JS -->
    
    <script src="js/angular.new.js"></script>
    <script src="js/controllers/mainCtrl.js"></script> <!-- load our controller -->
    <script src="js/services/commentService.js"></script> <!-- load our service -->
    <script src="js/app.js"></script> <!-- load our application -->
	<title>Comments App</title>
</head>
<body class="container" ng-app="commentApp" ng-controller="mainController">
	<div class="col-md-8 col-md-offset-2">

		<div class="page-header">
			<h1>Laravel and Angular Single Page Application</h1>
			<h3>Commenting system</h3>
		</div>

		<form ng-submit="submitComment()">
			<div class="form-group">
				<input type="text" class="form-control input-sm" name="author" ng-model="commentData.author" placeholder="Name">
			</div>
			<div class="form-group">
				<input type="text" class="form-control input-sm" name="comment" ng-model="commentData.text" placeholder="Say something">
			</div>
			<div class="form-group text-right">
				<button type="submit" class="btn btn-primary btn-lg">Submit</button>
			</div>
		</form>

		<!-- Loading Icon -->
		<p class="text-center" ng-show="loading"><span class="fa fa-refresh fa-5x fa-spin"></span></p>

		<div class="comment" ng-hide="loading" ng-repeat="comment in comments">
			<h3>Comment #{{ comment.id }} <small>by {{ comment.author }}</small></h3>
			<p>{{ comment.text }}</p>

			<p><a href="#" ng-click="deleteComment(comment.id)" class="text-muted">Delete</a></p>
		</div>
	</div>
	
</body>
</html>