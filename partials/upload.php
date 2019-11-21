 <h2>Insérer des données</h2>
 <form method="post" action="index.php">
    <p>Consulter la base de données si correspondance id/utlisateur oublié</p>
     <div class="row">
         <input type="text" class="form-control mb-2 mr-sm-2 col-4" placeholder="id utilisateur" name="idu">
         <select class="form-control col-4" name="month" ng-model="month" aria-label="Toggle ngHide" placeholder="Mois">
             <option value="/01/2019">Janvier</option>
             <option value="/02/2019">Février</option>
             <option value="/03/2019">Mars</option>
             <option value="/04/2019">Avril</option>
             <option value="/05/2019">Mai</option>
             <option value="/06/2019">Juin</option>
             <option value="/07/2019">Juillet</option>
             <option value="/08/2019">Aout</option>
             <option value="/09/2019">Septembre</option>
             <option value="/10/2019">Octobre</option>
             <option value="/11/2019">Novembre</option>
             <option value="/12/2019">Decembre</option>
         </select>
     </div>
     <div class="form-group " ng-hide="!month" action="/index.php">
         <div class="form-inline col-6 offset-3 mt-4">
             <label class="mb-2 mr-sm-2">
                 <h5>01{{month}}</h5>
             </label>
             <input type="text" class="form-control mb-2 mr-sm-2" placeholder="data kW/h" name="data1"></div>
         <div class="form-inline col-6 offset-3 mt-4">
             <label class="mb-2 mr-sm-2">
                 <h5>02{{month}}</h5>
             </label>
             <input type="text" class="form-control mb-2 mr-sm-2" placeholder="data kW/h" name="data2"></div>
         <div class="form-inline col-6 offset-3 mt-4">
             <label class="mb-2 mr-sm-2">
                 <h5>03{{month}}</h5>
             </label>
             <input type="text" class="form-control mb-2 mr-sm-2" placeholder="data kW/h" name="data3"></div>
         <div class="form-inline col-6 offset-3 mt-4">
             <label class="mb-2 mr-sm-2">
                 <h5>04{{month}}</h5>
             </label>
             <input type="text" class="form-control mb-2 mr-sm-2" placeholder="data kW/h" name="data4"></div>
         <div class="form-inline col-6 offset-3 mt-4">
             <label class="mb-2 mr-sm-2">
                 <h5>05{{month}}</h5>
             </label>
             <input type="text" class="form-control mb-2 mr-sm-2" placeholder="data kW/h" name="data5"></div>
         <div class="form-inline col-6 offset-3 mt-4">
             <label class="mb-2 mr-sm-2">
                 <h5>06{{month}}</h5>
             </label>
             <input type="text" class="form-control mb-2 mr-sm-2" placeholder="data kW/h" name="data6"></div>
         <div class="form-inline col-6 offset-3 mt-4">
             <label class="mb-2 mr-sm-2">
                 <h5>07{{month}}</h5>
             </label>
             <input type="text" class="form-control mb-2 mr-sm-2" placeholder="data kW/h" name="data7"></div>
         <div class="form-inline col-6 offset-3 mt-4">
             <label class="mb-2 mr-sm-2">
                 <h5>08{{month}}</h5>
             </label>
             <input type="text" class="form-control mb-2 mr-sm-2" placeholder="data kW/h" name="data8"></div>
         <div class="form-inline col-6 offset-3 mt-4">
             <label class="mb-2 mr-sm-2">
                 <h5>09{{month}}</h5>
             </label>
             <input type="text" class="form-control mb-2 mr-sm-2" placeholder="data kW/h" name="data9"></div>
         <div class="form-inline col-6 offset-3 mt-4">
             <label class="mb-2 mr-sm-2">
                 <h5>10{{month}}</h5>
             </label>
             <input type="text" class="form-control mb-2 mr-sm-2" placeholder="data kW/h" name="data10"></div>
         <div class="form-inline col-6 offset-3 mt-4">
             <label class="mb-2 mr-sm-2">
                 <h5>11{{month}}</h5>
             </label>
             <input type="text" class="form-control mb-2 mr-sm-2" placeholder="data kW/h" name="data11"></div>
         <div class="form-inline col-6 offset-3 mt-4">
             <label class="mb-2 mr-sm-2">
                 <h5>12{{month}}</h5>
             </label>
             <input type="text" class="form-control mb-2 mr-sm-2" placeholder="data kW/h" name="data12"></div>
         <div class="form-inline col-6 offset-3 mt-4">
             <label class="mb-2 mr-sm-2">
                 <h5>13{{month}}</h5>
             </label>
             <input type="text" class="form-control mb-2 mr-sm-2" placeholder="data kW/h" name="data13"></div>
         <div class="form-inline col-6 offset-3 mt-4">
             <label class="mb-2 mr-sm-2">
                 <h5>14{{month}}</h5>
             </label>
             <input type="text" class="form-control mb-2 mr-sm-2" placeholder="data kW/h" name="data14"></div>
         <div class="form-inline col-6 offset-3 mt-4">
             <label class="mb-2 mr-sm-2">
                 <h5>15{{month}}</h5>
             </label>
             <input type="text" class="form-control mb-2 mr-sm-2" placeholder="data kW/h" name="data15"></div>
         <div class="form-inline col-6 offset-3 mt-4">
             <label class="mb-2 mr-sm-2">
                 <h5>16{{month}}</h5>
             </label>
             <input type="text" class="form-control mb-2 mr-sm-2" placeholder="data kW/h" name="data16"></div>
         <div class="form-inline col-6 offset-3 mt-4">
             <label class="mb-2 mr-sm-2">
                 <h5>17{{month}}</h5>
             </label>
             <input type="text" class="form-control mb-2 mr-sm-2" placeholder="data kW/h" name="data17"></div>
         <div class="form-inline col-6 offset-3 mt-4">
             <label class="mb-2 mr-sm-2">
                 <h5>18{{month}}</h5>
             </label>
             <input type="text" class="form-control mb-2 mr-sm-2" placeholder="data kW/h" name="data18"></div>
         <div class="form-inline col-6 offset-3 mt-4">
             <label class="mb-2 mr-sm-2">
                 <h5>19{{month}}</h5>
             </label>
             <input type="text" class="form-control mb-2 mr-sm-2" placeholder="data kW/h" name="data19"></div>
         <div class="form-inline col-6 offset-3 mt-4">
             <label class="mb-2 mr-sm-2">
                 <h5>20{{month}}</h5>
             </label>
             <input type="text" class="form-control mb-2 mr-sm-2" placeholder="data kW/h" name="data20"></div>
         <div class="form-inline col-6 offset-3 mt-4">
             <label class="mb-2 mr-sm-2">
                 <h5>21{{month}}</h5>
             </label>
             <input type="text" class="form-control mb-2 mr-sm-2" placeholder="data kW/h" name="data21"></div>
         <div class="form-inline col-6 offset-3 mt-4">
             <label class="mb-2 mr-sm-2">
                 <h5>22{{month}}</h5>
             </label>
             <input type="text" class="form-control mb-2 mr-sm-2" placeholder="data kW/h" name="data22"></div>
         <div class="form-inline col-6 offset-3 mt-4">
             <label class="mb-2 mr-sm-2">
                 <h5>23{{month}}</h5>
             </label>
             <input type="text" class="form-control mb-2 mr-sm-2" placeholder="data kW/h" name="data23"></div>
         <div class="form-inline col-6 offset-3 mt-4">
             <label class="mb-2 mr-sm-2">
                 <h5>24{{month}}</h5>
             </label>
             <input type="text" class="form-control mb-2 mr-sm-2" placeholder="data kW/h" name="data24"></div>
         <div class="form-inline col-6 offset-3 mt-4">
             <label class="mb-2 mr-sm-2">
                 <h5>25{{month}}</h5>
             </label>
             <input type="text" class="form-control mb-2 mr-sm-2" placeholder="data kW/h" name="data25"></div>
         <div class="form-inline col-6 offset-3 mt-4">
             <label class="mb-2 mr-sm-2">
                 <h5>26{{month}}</h5>
             </label>
             <input type="text" class="form-control mb-2 mr-sm-2" placeholder="data kW/h" name="data26"></div>
         <div class="form-inline col-6 offset-3 mt-4">
             <label class="mb-2 mr-sm-2">
                 <h5>27{{month}}</h5>
             </label>
             <input type="text" class="form-control mb-2 mr-sm-2" placeholder="data kW/h" name="data27"></div>
         <div class="form-inline col-6 offset-3 mt-4">
             <label class="mb-2 mr-sm-2">
                 <h5>28{{month}}</h5>
             </label>
             <input type="text" class="form-control mb-2 mr-sm-2" placeholder="data kW/h" name="data28"></div>
         <div class="form-inline col-6 offset-3 mt-4">
             <label class="mb-2 mr-sm-2">
                 <h5>29{{month}}</h5>
             </label>
             <input type="text" class="form-control mb-2 mr-sm-2" placeholder="data kW/h" name="data29"></div>
         <div class="form-inline col-6 offset-3 mt-4">
             <label class="mb-2 mr-sm-2">
                 <h5>30{{month}}</h5>
             </label>
             <input type="text" class="form-control mb-2 mr-sm-2" placeholder="data kW/h" name="data30"></div>
         <div class="form-inline col-6 offset-3 mt-4">
             <label class="mb-2 mr-sm-2">
                 <h5>31{{month}}</h5>
             </label>
             <input type="text" class="form-control mb-2 mr-sm-2" placeholder="data kW/h" name="data31"></div>


         <button type="submit" class="btn btn-primary" name="reg_data">Submit</button>
     </div>
</form>
