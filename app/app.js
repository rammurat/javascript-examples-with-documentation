
/*#######################################################################
  
  Dan Wahlin
  http://twitter.com/DanWahlin
  http://weblogs.asp.net/dwahlin
  http://pluralsight.com/training/Authors/Details/dan-wahlin

  Normally like to break AngularJS apps into the following folder structure
  at a minimum:

  /app
      /controllers      
      /directives
      /services
      /partials
      /views

  #######################################################################*/



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
        .otherwise({ redirectTo: '/js' });
});




