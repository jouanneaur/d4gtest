       <?php
        include('connection.php');

                 $sql = "SELECT data_f.data, data_f.v_date FROM logem INNER JOIN data_f ON logem.id_f = data_f.id_f WHERE logem.id_u ='".$_SESSION['id_u']."' ";
                    $result = mysqli_query($db,$sql);



                    if (mysqli_num_rows($result)>0) {
                        echo '<div class="container">';
                        echo '<table class="table">';
                        echo '<tr class="border">';
                        echo '<th>'.'Date'.'</th>';
                        echo '<th>'.'Data'.'</th>';
                        echo '</tr>';
                        
                        while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr class="border">';
                        echo '<td>'.$row['v_date'].'</td>';
                        echo '<td>'.$row['data'].'</td>';
                        echo '<tr>';
                    }
                    }
                
?>
