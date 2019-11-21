<?php  


$sql = "SELECT data_f.data FROM access INNER JOIN data_f ON access.id_u = data_f.id_f WHERE access.id_u = $row2[0]";
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
