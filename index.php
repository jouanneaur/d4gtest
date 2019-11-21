<?php include('php/server.php') ?>

<?php if (isset($_GET['logout'])) {
session_destroy();
header("location: /d4gtest/index.php");
}?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular-route.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>D4G2019</title>
    <script>
        function displayLineChart() {
            var test19 = [<?php include('partials/graph.php') ?>];
            var date = [];
            var k = test19.length;
            for (var i = 0; i <= k; i++) {
                date.push(i);
            }
            var data = {
                labels: date,
                datasets: [{
                    label: "Famille A",
                    fillColor: "lighblue",
                    strokeColor: "rgba(220,220,220,1)",
                    pointColor: "rgba(220,220,220,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(220,220,220,1)",
                    data: test19,
                }, ]
            };
            var ctx = document.getElementById("lineChart").getContext("2d");
            var options = {};
            var lineChart = new Chart(ctx).Line(data, options);
        }

    </script>
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
                <a href="#/visualise">TEST Clément gwendal (une fois co)</a>
                <?php  if (isset($_SESSION['idn'])) : ?>
                <?php  if (($_SESSION['levl'])=='1') : ?>
                <a href="#/register">Créer un nouvel utilisateur</a>
                <a href="#/upload">Ajouter des données</a>
                <?php endif ?>
                <p> <a href="index.php?logout='1'" style="color: red;">logout</a></p>
                <?php endif ?>
            </div>
        </div>
    </div>
</body>

</html>

<script>
    angular.module('MonApp', ['ngRoute']).config(['$routeProvider', function($routeProvider) {
        $routeProvider
            .when('/', {
                <?php  if (!isset($_SESSION['idn'])) : ?>
                templateUrl: 'partials/connect.php'
                <?php endif ?><?php  if (isset($_SESSION['idn'])) : ?>
                templateUrl: 'partials/visualise.php'
                <?php endif ?>
            })
            .when('/visualise', {
                templateUrl: 'partials/visualise.php'
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
