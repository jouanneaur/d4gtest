<?php  
 //load_country.php
 $connect = mysqli_connect("localhost", "root", "", "bdd_gr");
 $output = array();  
 $query = "SELECT * FROM questions";  
 $result = mysqli_query($connect, $query);  
 while($row = mysqli_fetch_array($result))  
 {  
      $output[] = $row;  
 }  
 echo json_encode($output);  
 ?>  