/**
 * Created by Nicolas on 17.12.2016.
 */

var musicbrowserApp = new angular.module('musicbrowserApp', ['ngRoute']);

musicbrowserApp.config(function($routeProvider) {
    $routeProvider
        .when("/", {
            templateUrl : "./templates/main.html",
            controller: "top20Controller"
        })
        .when("/songs", {
            templateUrl : "./templates/songs.html",
            controller: "songController"
        })
        .when("/alben", {
            templateUrl : "./templates/alben.html",
            controller: "albumController"
        })
        .when("/artists", {
            templateUrl : "./templates/kuenstler.html",
            controller: "kuenstlerController"
        })
        .when("/artists/:id", {
            templateUrl : "./templates/kuenstlerdetail.html",
            controller: "kuenstlerDetailController"
        })
        .otherwise({
            redirectTo: '/'
        });
});
// Standart Controller
musicbrowserApp.controller('top20Controller',
    function top20Controller($scope, $http) {
        $http.get('uebersicht.php?class=top20').success(
            function(data) {
                $scope.top20 = data;
            }
        );
    }
);
// Standart Controller
musicbrowserApp.controller('songController',
    function songController($scope, $http) {
        $http.get('uebersicht.php?class=song').success(
            function(data) {
                $scope.songs = data;
            }
        );
    }
);
// Standart Controller
musicbrowserApp.controller('kuenstlerDetailController',
    function kuenstlerDetailController($scope, $http, $routeParams) {
        $http.get('uebersicht.php?class=kuenstler&id=' + $routeParams.id).success(
            function(data) {
                $scope.kuenstler = data[0];
            }
        );
    }
);
// Standart Controller
musicbrowserApp.controller('kuenstlerController',
    function kuenstlerController($scope, $http) {
        $http.get('uebersicht.php?class=kuenstler').success(
            function(data) {
                $scope.kuenstler = data;
            }
        );
    }
);
// Standart Controller
musicbrowserApp.controller('albumController',
    function albumController($scope, $http) {
        $http.get('uebersicht.php?class=album').success(
            function(data) {
                $scope.alben = data;
            }
        );
    }
);