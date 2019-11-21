<?php 
    session_start();

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'green');

    // Check connection
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
}
?>