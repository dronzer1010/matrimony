angular.module('matrimonialApp')
	   .controller('matchesController' ,function($scope , $http , dataService){
			
			$scope.profiles=[];
			$scope.filteredProfiles=[];
	   		$scope.currentPage=1;
	   		$scope.numOfProfilePerPage=5;
	   		$scope.maxSize=5;
	   		$scope.religionModel="";
	   		$scope.pageChanged= function() {
    		var begin = (($scope.currentPage - 1) * $scope.numOfProfilePerPage)
    			, end = begin + $scope.numOfProfilePerPage;
    			
    				   		dataService.get('allprofiles')
	   					.then(function(data){
	   						$scope.profiles=data['data'];	
	   						$scope.filteredProfiles = $scope.profiles.slice(begin, end);
	   					});
    			
    			console.log("Clicked");
    			console.log($scope.currentPage + ' , ' +$scope.profiles.length + ' , ' + begin +' , ' + end);
  			};

  			$scope.pageChanged();
	   		$scope.changeReligion= function(religion){
  				$scope.religionModel=religion;
  				
  			}

  			
		});