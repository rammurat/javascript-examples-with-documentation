var app = angular.module('OOJSApp', ['ngRoute']);

//This configures the routes and associates each route with a view and a controller
app.config(function ($routeProvider) {
    
    $routeProvider
        .when('/js',
            {
                controller: 'OOJSController',
                templateUrl: '/app/partials/js-intro.html'
            })
        .when('/prototype',
            {
                controller: 'OOJSController',
                templateUrl: '/app/partials/prototype.html'
            })
            .when('/object',
            {
                controller: 'OOJSController',
                templateUrl: '/app/partials/object.html'
            })
			.when('/debugger',
            {
                controller: 'OOJSController',
                templateUrl: '/app/partials/browser-debugger.html'
            })
			.when('/this',
            {
                controller: 'OOJSController',
                templateUrl: '/app/partials/this.html'
            })
        .otherwise({ redirectTo: '/js' });
});




