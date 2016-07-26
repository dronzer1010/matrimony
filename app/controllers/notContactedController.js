angular.module('matrimonialApp')
		.controller('notContactedController' ,function($scope ,$http , dataService ,$filter){
			$scope.profiles=[];
			$scope.filteredProfiles=[];
	   		$scope.currentPage=1;
	   		$scope.numOfProfilePerPage=5;
	   		$scope.maxSize=5;
	   		$scope.religionModel="";
	   		$scope.pageChanged= function() {
    		var begin = (($scope.currentPage - 1) * $scope.numOfProfilePerPage)
    			, end = begin + $scope.numOfProfilePerPage;
    			
    				   		dataService.get()
	   					.success(function(data){
	   						$scope.profiles=data;
	   						$scope.notContactedProfiles=$scope.profiles.filter(function (profile) {
    															return (profile.contacted == "no");
														});
	
	   						$scope.filteredProfiles = $scope.notContactedProfiles.slice(begin, end);
	   					});
    			
    			console.log("Clicked");
    			console.log($scope.currentPage + ' , ' +$scope.profiles.length + ' , ' + begin +' , ' + end);
  			};

  			$scope.pageChanged();
  			$scope.changeReligion= function(religion){
  				$scope.religionModel=religion;
  				
  			}
		});