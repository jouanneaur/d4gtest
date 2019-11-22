       <?php
        include('connection.php');

                 $sql = "SELECT logem.type, logem.surface, logem.pieces, logem.chauffage, logem.annee_c, logem.n_voie, logem.voie, logem.c_postal, logem.ville FROM access INNER JOIN logem ON logem.id_u = access.id_u WHERE logem.id_u ='".$_SESSION['id_u']."' ";
                    $result = mysqli_query($db,$sql);
                    if (mysqli_num_rows($result)>0) {
                        echo '<div class="container">';
                        echo '<table class="table">';
                        echo '<tr class="border">';
                        echo '<th>'.'type'.'</th>';
                        echo '<th>'.'surface'.'</th>';
                        echo '<th>'.'pieces'.'</th>';
                        echo '<th>'.'chauffage'.'</th>';
                        echo '<th>'.'année_construction'.'</th>';
                        echo '<th>'.'numéro'.'</th>';
                        echo '<th>'.'voie'.'</th>';
                        echo '<th>'.'code_postal'.'</th>';
                        echo '<th>'.'ville'.'</th>';
                        echo '</tr>';
//                        
                        while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr class="border">';
                        echo '<td>'.$row['type'].'</td>';
                        echo '<td>'.$row['surface'].'</td>';
                        echo '<td>'.$row['pieces'].'</td>';
                        echo '<td>'.$row['chauffage'].'</td>';
                        echo '<td>'.$row['annee_c'].'</td>';
                        echo '<td>'.$row['n_voie'].'</td>';
                        echo '<td>'.$row['voie'].'</td>';
                        echo '<td>'.$row['c_postal'].'</td>';
                        echo '<td>'.$row['ville'].'</td>';
                        echo '<tr>';
                        }
                        echo '</div>';
                    }
                
?>
