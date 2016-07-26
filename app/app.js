angular.module('matrimonialApp' ,['ngRoute' ,'ui.bootstrap'])
		.config(['$routeProvider' ,'$locationProvider' ,function($routeProvider , $locationProvider){

				$routeProvider
					.when('/' ,{
						templateUrl : 'app/views/main.html' ,
						contoller : 'loginController'

					}) 
					.when('/matches' ,{
						templateUrl : 'app/views/matches.html' ,
						contoller : 'matchesController'

					})
					.when('/not-contacted' ,{
						templateUrl : 'app/views/not-contacted.html' ,
						contoller : 'notContactedController'
					})
					.when('/viewed-profiles' ,{
						templateUrl : 'app/views/viewed-profile.html' ,
						contoller : 'viewedProfileController'
					})
					.when('/profile/:id' ,{
						templateUrl : 'app/views/view_profile.html' ,
						controller : 'profileDetailController'
					});
		}]);


