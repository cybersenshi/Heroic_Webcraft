	// create the module and name it loadApp
	var loadApp = angular.module('loadApp', ['ngRoute']);

	// configure our routes
	loadApp.config(function($routeProvider, $locationProvider) {
		$routeProvider

			// route for Home
			.when('/', {
				templateUrl : 'pages/home.php',
				controller  : 'mainController'
			})

			// route for About
			.when('/about', {
				templateUrl : 'pages/about.php',
				controller  : 'aboutController'
			})

			// route for Creations
			.when('/creations', {
				templateUrl : 'pages/creations.php',
				controller  : 'createController'
			})
			
			// route for Hire Me
			.when('/hire', {
				templateUrl : 'pages/hire.php',
				controller  : 'hireController'
			})
			
			// route for Success
			.when('/success', {
				templateUrl : 'pages/success.php',
				controller  : 'successController'
			})
			
			// route for Shyguy
			.when('/shyguy', {
				templateUrl : 'pages/shyguy.php',
				controller  : 'portfolioController'
			})
			
			// route for LaValle
			.when('/lavalle', {
				templateUrl : 'pages/lavalle.php',
				controller  : 'portfolioController'
			})
			
			// route for Nerdy.fm
			.when('/nerdyfm', {
				templateUrl : 'pages/nerdyfm.php',
				controller  : 'portfolioController'
			})
			
			// route for SCS
			.when('/scs', {
				templateUrl : 'pages/scs.php',
				controller  : 'portfolioController'
			})
			
			// route for Squares
			.when('/squares', {
				templateUrl : 'pages/squares.php',
				controller  : 'portfolioController'
			})
			
			// route for CV
			.when('/cv', {
				templateUrl : 'pages/cv.php',
				controller  : 'portfolioController'
			});
			
		// use the HTML5 History API
		$locationProvider.html5Mode(true);
		
	});

	// create controller and inject scope
	loadApp.controller('mainController', function($scope) {
	});

	loadApp.controller('aboutController', function($scope) {
	});

	loadApp.controller('createController', function($scope) {
	});
	
	loadApp.controller('hireController', function($scope) {
	});
	
	loadApp.controller('successController', function($scope) {
	});
	
	loadApp.controller('portfolioController', function($scope) {
	});