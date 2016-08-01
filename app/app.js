angular.module('matrimonialApp' ,['ngRoute' ,'ui.bootstrap','ngAnimate','toaster'])
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
					})
					.otherwise({
                		redirectTo: '/'
            		});
		}])
		.run(function ($rootScope, $location, dataService) {
        $rootScope.$on("$routeChangeStart", function (event, next, current) {
            $rootScope.authenticated = false;
            dataService.get('session').then(function (results) {
                if (results.uid) {
                    $rootScope.authenticated = true;
                    $rootScope.uid = results.uid;
                    $rootScope.name = results.name;
                    $rootScope.email = results.email;
                    var nextUrl = next.$$route.originalPath;
                    if(nextUrl == '/'){
                    	$location.path("/matches");
                    }
                } else {
                    var nextUrl = next.$$route.originalPath;
                    if (nextUrl == '/') {

                    } else {
                        $location.path("/");
                    }
                }
            });
        });
    });


