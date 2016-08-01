angular.module('matrimonialApp')
	   .controller('mainController' ,function($scope , $http , dataService ,$window ,$location){	

	 
	   	$scope.searchById=function(){
	   		if($scope.searchId!="")
	   			$window.location.href = '#/profile/'+$scope.searchId;

	   		console.log("clicked Me" + $scope.searchId);
	   	};

	   	$scope.logout = function () {
        dataService.get('logout').then(function (results) {
            dataService.toast(results);
            $location.path('/');
        });
    	};
	});