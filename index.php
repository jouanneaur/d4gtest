<?php include('php/server.php') ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular-route.min.js"></script>


    <!--<link rel="stylesheet" type="text/css" href="css/style.css">-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>D4G2019</title>
</head>

<body ng-app="MonApp">
    <div class="jumbotron bg-info jumbotron-fluid">
        <div class="container text-white">
            <h1>Carnet du numérique du logement</h1>
            <h6>Romain JOUANNEAU, Gwendal QUELLEC, Clément LE RENDU, Emmanuel POISSONIÈRE, Estéban MINGOT</h6>
        </div>
    </div>
    <div class="container">
        <div class="row bg-light shadow mt-4 mb-4 rounded">
            <div class="col-lg-12 ">
                <div ng-view></div>
            </div>
        </div>
    </div>
</body>

</html>

<script>
    angular.module('MonApp', ['ngRoute']).config(['$routeProvider', function($routeProvider) {
        $routeProvider
            .when('/', {
                templateUrl: 'partials/connect.php'
            })
            .when('/visualise', {
                templateUrl: 'partials/visualise.html'
            })
            .when('/forgetpwd', {
                templateUrl: 'partials/forgetpwd.php'
            })
            .when('/register', {
                templateUrl: 'partials/register.php'
            })
            .when('/upload', {
                templateUrl: 'partials/upload.php'
            })
            .otherwise({
                redirectTo: '/'
            });
    }]);

</script>
