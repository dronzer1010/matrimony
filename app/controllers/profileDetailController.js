angular.module('matrimonialApp')
	   .controller('profileDetailController' ,function($scope , $http , dataService ,$routeParams){
			
		$scope.profiles=[];
		$scope.selectedProfile={};
		$scope.getProfileById=function(){
			//Get data from APIs (Angular Promise)
			dataService.get()
	   					.success(function(data){
	   						$scope.profiles=data;	
	   						angular.forEach($scope.profiles , function(item , index){
	   							console.log($routeParams.id);
	   							if(item.id==$routeParams.id){
	   								$scope.selectedProfile=item;
	   								console.log("Matched");
	   							}
	   						});
	   					});
		};

		$scope.getProfileById();
	   		

  			
		});