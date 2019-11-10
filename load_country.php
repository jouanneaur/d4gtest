<?php  
 //load_country.php  
 $connect = mysqli_connect("localhost", "root", "", "greenit");  
 $output = array();  
 $query = "SELECT * FROM informations ORDER BY nom ASC";  
 $result = mysqli_query($connect, $query);  
 while($row = mysqli_fetch_array($result))  
 {  
      $output[] = $row;  
 }  
 echo json_encode($output);  
 ?>  