angular.module('mainCtrl', [])

.controller('mainController', function($scope, $http, Comment) {
	$scope.commentData = {};

	// loading variable to show spinning loading icon
	$scope.loading = true;

	// get all the comment first and bind it to the $scope.comment object

	//use the function we created in our service
	// Get all comments

	Comment.get()
		.success(function(data) {
			$scope.comments = data;
			$scope.loading = false;
		});

	$scope.submitComment = function() {
		$scope.loading = true;

		// save the comment. pass in comment data from the form
		// use the function we created in our service

		Comment.save($scope.commentData)
			.success(function(data) {
				$scope.commentData = {};
				// if successful, we'll need to refresh the comment list
				Comment.get()
					.success(function(getData) {
						$scope.comments = getData;
						$scope.loading = false;
					});
			})
			.error(function(data) {
				console.log(data);
			});
	};


	// function to handle deleting a commit
	// =========
	// Delete a Comment

	$scope.deleteComment = function(id) {
		$scope.loading = true;

		// use the function we created in our service
		Comment.destroy(id)

			.success(function(data) {
				// if successful, we'll need to refresh the comment list
				Comment.get()
					.success(function(getData) {
						$scope.comments = getData;
						$scope.loading = false;
					});

			});
	};
});