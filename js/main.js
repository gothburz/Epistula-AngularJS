var validationApp = angular.module('validationApp',[]);
	validationApp.controller('formController', function($scope){
		$scope.submitForm = function(isValid){
			if (isValid){
				alert('Your form has been successfully submitted!')
			}
		};

	});