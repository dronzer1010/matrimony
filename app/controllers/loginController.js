angular.module('matrimonialApp')
	   .controller('loginController' ,function($scope , $http , dataService ,$window , $rootScope, $routeParams, $location){	

	   	$scope.register = {};
	   	$scope.register = {
	   		email : '' ,
	   		password : '' ,
	   		name : '' ,
	   	};

	   	$scope.getRegistered = function(user){
	   		dataService.post('signUp' ,{
	   			customer : user
	   		}).then(function(results){
	   			dataService.toast(results);
	   			if(results.status == "success"){
	   				$location.path('matches');
	   			}else{
	   				console.log("unsuccessful");
	   			}
	   		});
	   	};

	   	$scope.login={};
	   	$scope.doLogin = function (user) {
        dataService.post('login', {
            customer: user
        }).then(function (results) {
        	dataService.toast(results);
            if (results.status == "success") {
               $location.path('matches');
            }
        });
    };


	 
});