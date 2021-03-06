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
        //Ronny Müller
        $scope.upvote = function(song) {
            $http.get("./data.php?upvote=" + song.pk_song);
            song.bewertung = song.bewertung - 1 + 2;
        }
        $scope.downvote = function(song) {
                $http.get("./data.php?downvote=" + song.pk_song);
                song.bewertung = song.bewertung - 1;
            }
            //Ronny Müller
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
        //Ronny Müller
        $scope.upvote = function(song) {
            $http.get("./data.php?upvote=" + song.pk_song);
            song.bewertung = song.bewertung - 1 + 2;
        }
        $scope.downvote = function(song) {
                $http.get("./data.php?downvote=" + song.pk_song);
                song.bewertung = song.bewertung - 1;
            }
            //Ronny Müller
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
        $http.get('data.php?class=song&fk=' + $routeParams.id).success( //Ronny Müller Vorlage für Nadja
            function(data) {
                $scope.songs = data;
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
        $http.get('data.php?class=album&fk=' + $routeParams.id).success( //Ronny Müller Vorlage für Nadja
            function(data) {
                $scope.alben = data;
            }
        );
    }
);