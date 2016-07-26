angular.module('matrimonialApp')
	   .controller('mainController' ,function($scope , $http , dataService ,$window){	

	 
	   	$scope.searchById=function(){
	   		if($scope.searchId!="")
	   			$window.location.href = '#/profile/'+$scope.searchId;

	   		console.log("clicked Me" + $scope.searchId);
	   	}
		});