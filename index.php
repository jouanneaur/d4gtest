<?php include('php/connection.php') ?>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.2.61/jspdf.min.js"></script>
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

            //original canvas
            var canvas = document.querySelector('#cool-canvas');
            var context = canvas.getContext('2d');
            new Chart(context).Line(data);
            //hidden canvas
            var newCanvas = document.querySelector('#supercool-canvas');
            newContext = newCanvas.getContext('2d');
            var supercoolcanvas = new Chart(newContext).Line(data);
            supercoolcanvas.defaults.global = {
                scaleFontSize: 600
            }

            //add event listener to button
            document.getElementById('download-pdf').addEventListener("click", downloadPDF);
            //donwload pdf from original canvas
            function downloadPDF() {
                var canvas = document.querySelector('#cool-canvas');
                var canvasImg = canvas.toDataURL("image/jpeg", 1.0);
                var doc = new jsPDF('landscape');
                doc.setFontSize(20);
                doc.text(15, 15, "Cool Chart");
                doc.addImage(canvasImg, 'JPEG', 10, 10, 280, 150);
                doc.save('canvas.pdf');
            }

        }

    </script>
    <script>
        function loadDoc() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("demo").innerHTML =
                        this.responseText;
                }
            };
            xhttp.open("GET", "php/tableaux.php", true);
            xhttp.send();
        }

    </script>

</head>

<body ng-app="MonApp">
    <nav class="navbar navbar-expand-sm bg-light navbar-light sticky-top">
        <!-- Brand/logo -->
        <a class="navbar-brand" href="#">
            <img src="images/logov2-min.PNG" alt="logo" style="width:40px;">
        </a>

        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#/visualise">TEST</a>
            </li>
            <?php  if (isset($_SESSION['idn'])) : ?>
            <?php  if (($_SESSION['levl'])=='1') : ?>
            <li class="nav-item">
                <a class="nav-link" href="#/register">NEWU</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#/upload">DATA</a>
            </li>
            <li class="nav-item">
                <?php endif ?>
                <a class="nav-link" href="index.php?logout='1'" style="color: red;">LOGOUT</a>
                <?php endif ?>
            </li>
        </ul>
    </nav>

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
                <?php if (isset($_SESSION['idn'])) {
                echo($_SESSION['idn']);
                echo($_SESSION['levl']);
                echo($_SESSION['id_u']); }?>


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
