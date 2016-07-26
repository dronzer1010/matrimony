angular.module('matrimonialApp')
	   .controller('viewedProfileController' ,function($scope ,$http ,dataService , $filter){
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
	   						$scope.viewedProfiles=$scope.profiles.filter(function (profile) {
    															return (profile.contacted == "yes");
														});
	
	   						$scope.filteredProfiles = $scope.viewedProfiles.slice(begin, end);
	   					});
    			
    			console.log("Clicked");
    			console.log($scope.currentPage + ' , ' +$scope.profiles.length + ' , ' + begin +' , ' + end);
  			};

  			$scope.pageChanged();
  			$scope.changeReligion= function(religion){
  				$scope.religionModel=religion;
  				
  			}
		});