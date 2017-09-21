var animalApp = angular.module('animalApp', ['ngMaterial','ngRoute']);

animalApp.controller('mainController', function mainController($scope, $http, $location) {
    $http.get(global_config.api_endpoint + 'animals_types').then(function(response) {
        $scope.animals_types = response.data;
    });
    $scope.$location = $location;
});

angular.module('animalApp').config(['$locationProvider', '$routeProvider',function config($locationProvider, $routeProvider) {
    $locationProvider.hashPrefix('!');

    $routeProvider.
      when('/dashboard', {
        template: '<dashboard></dashboard>'
      }).
      when('/animals/:id', {
        template: '<animals></animals>'
      }).
      otherwise('/dashboard');
  }
]);

angular.module('animalApp').component('dashboard', {
    templateUrl: 'templates/dashboard.html',
    controller: function dashboardController($http) {
        $http.get(global_config.api_endpoint + 'get_analytics').then(function(response) {
            self.phones = response.data;
        });
    }
});

angular.module('animalApp').component('animals', {
    templateUrl: 'templates/animals.html',
    controller: function animalsController($scope,$http,$routeParams) {
        var type = $routeParams.id;
        $http.get(global_config.api_endpoint + 'animals/' + type).then(function(response) {
            $scope.animals = response.data;
            console.log(response);
        });
    }
});