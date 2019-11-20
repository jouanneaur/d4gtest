<?php 
	session_start();

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'green');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$idn = mysqli_real_escape_string($db, $_POST['idn']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$pwd_1 = mysqli_real_escape_string($db, $_POST['pwd_1']);
		$pwd_2 = mysqli_real_escape_string($db, $_POST['pwd_2']);

		if ($pwd_1 != $pwd_2) {
			echo("The two pwds do not match");
		}
        else{
		// register user if there are no errors in the form
			//$pwd = md5($pwd_1);//encrypt the pwd before saving in the database
			$query = "INSERT INTO access (idn, email, pwd, levl) 
					  VALUES('$idn', '$email', '$pwd_1', '0')";
			mysqli_query($db, $query);

		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$idn = mysqli_real_escape_string($db, $_POST['idn']);
		$pwd = mysqli_real_escape_string($db, $_POST['pwd']);

		//$pwd = md5($pwd);
			$query = "SELECT levl FROM access WHERE idn='$idn' AND pwd='$pwd'";
        
			$results = mysqli_query($db, $query);
            $row = mysqli_fetch_array($results);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['idn'] = $idn;
				$_SESSION['levl'] = $row[0];
                echo($_SESSION['idn']);
                echo($_SESSION['levl']);
			}else {
				echo("Wrong idn/pwd combination");
			}
	}

?>
