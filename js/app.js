var musicbrowserApp = new angular.module('musicbrowserApp', ['ngRoute']);

musicbrowserApp.config(function($routeProvider) {
    $routeProvider
        .when("/", {
            templateUrl: "./templates/main.html",
            controller: "top20Controller"
        })
        .when("/songs", {
            templateUrl: "./templates/songs.html",
            controller: "songController"
        })
        .when("/alben", {
            templateUrl: "./templates/alben.html",
            controller: "albumController"
        })
        .when("/album/:id", {
            templateUrl: "./templates/albumdetail.html",
            controller: "albenDetailController"
        })
        .when("/artists", {
            templateUrl: "./templates/kuenstler.html",
            controller: "kuenstlerController"
        })
        .when("/artists/:id", {
            templateUrl: "./templates/kuenstlerdetail.html",
            controller: "kuenstlerDetailController"
        })
        .otherwise({
            redirectTo: '/'
        });
});
// Top20 Controller
musicbrowserApp.controller('top20Controller',
    function top20Controller($scope, $http) {
        $http.get('data.php?class=top20').success(
            function(data) {
                $scope.top20 = data;
            }
        );
    }
);
// Song Controller
musicbrowserApp.controller('songController',
    function songController($scope, $http) {
        $http.get('data.php?class=song').success(
            function(data) {
                $scope.songs = data;
            }
        );
    }
);
// Album Controller
musicbrowserApp.controller('albumController',
    function albumController($scope, $http) {
        $http.get('data.php?class=album').success(
            function(data) {
                $scope.alben = data;
            }
        );
    }
);

// Album Detail Controller
musicbrowserApp.controller('albenDetailController',
    function albenDetailController($scope, $http, $routeParams) {
        $http.get('data.php?class=album&id=' + $routeParams.id).success(
            function(data) {
                $scope.alben = data[0];
            }
        );
    }
);
// Künstler Controller
musicbrowserApp.controller('kuenstlerController',
    function kuenstlerController($scope, $http) {
        $http.get('data.php?class=kuenstler').success(
            function(data) {
                $scope.kuenstler = data;
            }
        );
    }
);
// Künstler Detail Controller
musicbrowserApp.controller('kuenstlerDetailController',
    function kuenstlerDetailController($scope, $http, $routeParams) {
        $http.get('data.php?class=kuenstler&id=' + $routeParams.id).success(
            function(data) {
                $scope.kuenstler = data[0];
            }
        );
    }
);