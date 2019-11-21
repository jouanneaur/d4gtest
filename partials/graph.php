<?php  


$sql = "SELECT data_f.data FROM logem INNER JOIN data_f ON logem.id_f = data_f.id_f WHERE logem.id_f = 1 ";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["data"].",";
    }
} else {
    echo "0 results";
}

?>
