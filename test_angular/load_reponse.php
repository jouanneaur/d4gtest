 <?php  
 $connect = mysqli_connect("localhost", "root", "", "bdd_gr");  
 $output = array();  


 $query = "SELECT reponses.reponse_text FROM reponses WHERE reponses.question_id='1'";  
 $result = mysqli_query($connect, $query);  
 while($row = mysqli_fetch_array($result))  
 {  
      $output[] = $row;  
 }  
 echo json_encode($output);  
 ?>  



