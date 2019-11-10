<?php  
 session_start();
 //load_country.php  
 $output = array();
 $query = "SELECT * FROM questions";  
 $result = mysqli_query($connect, $query);  
 while($row = mysqli_fetch_array($result))  
 {  
      $output[] = $row;  
 }  
 echo json_encode($output);  
 ?>