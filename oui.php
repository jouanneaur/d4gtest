<!--
<!DOCTYPE html>
 <html>  
      <head>  
           <title>Webslesson Tutorial | Dynamic Dropdown list using AngularJS in PHP</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:600px;">  
                <h3 align="center">Dynamic Dropdown list using AngularJS in PHP</h3>  
                <br />  
                <div ng-app="myapp" ng-controller="usercontroller" ng-init="loadCountry()">  
                     <select name="questions" ng-model="questions" class="form-control">  
                          <option value="">Select Country</option>  
                          <option ng-repeat="Question in questions" value="{{questions.id_Question}}">{{questions.Question}}</option>  
                     </select>
                     <br />  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>
    var app = angular.module("myapp",[]);  
    app.controller("usercontroller", function($scope, $http){$scope.loadCountry = function()
    {$http.get("load_country.php").success(function(data){$scope.questions = data;})}});  
 </script>  -->
