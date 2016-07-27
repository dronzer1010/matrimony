angular.module('matrimonialApp')
	   .controller('profileDetailController' ,function($scope , $http , dataService ,$routeParams){

			dataService.get('profile/'+$routeParams.id)
	   					.then(function(data){
	   						$scope.selectedProfile=data["data"];	
	   					});
});