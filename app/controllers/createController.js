angular.module('matrimonialApp')
	   .controller('createController' ,function($scope , $http , dataService ,$window , $rootScope, $routeParams, $location){	

	   	$scope.create = {};
	   	$scope.create = {
	   		gender : '' ,
	   		firstname : '' ,
			lastname : '' ,
			postedby : '' ,
			edob : '' ,
			religion : '' ,
			caste : '' ,
			mothertongue : '' ,
			residing : '' ,
			mobileno : '' ,
			phoneno : '' ,
			maritalstatus : '' ,
	   		complexion : '' ,
			phisicallychallenged : '' ,
			height : '' ,
			borncitizenship : '' ,
			educationcategory : '' ,
			specialization : '' ,
			employedin : '' ,
			professiongroup : '' ,
			profession : '' ,
			companyname : '' ,
			monthlysalary : '' ,
	   		state : '' ,
			district : '' ,
			city : '' ,
			fathername : '' ,
			mothername : '' ,
			fathereducation : '' ,
			mothereducation : '' ,
			fatherprofession : '' ,
			motherprofession : '' ,
			fathernative : '' ,
			mothernative : '' ,
	   		fathermobileno : '' ,
			mothermobileno : '' ,
			yielderbro : '' ,
			yieldersis : '' ,
			youngerbro : '' ,
			youngersis : '' ,
			relativedet : '' ,
		};

	   	$scope.getCreated = function(create){
	   		dataService.post('create' ,{
	   			customer : profile
	   		}).then(function(results){
	   			
	   			if(results.status == "success"){
	   				$location.path('matches');
	   			}else{
	   				console.log("unsuccessful");
	   			}
	   		});
	   	};

	   	

	$scope.testing=function(){
		console.log("this is working");
	}

	 
});