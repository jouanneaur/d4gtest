<?php 
	session_start();

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'green');

//	// REGISTER USER
//	if (isset($_POST['reg_user'])) {
//		// receive all input values from the form
//		$idn = mysqli_real_escape_string($db, $_POST['idn']);
//		$email = mysqli_real_escape_string($db, $_POST['email']);
//		$pwd_1 = mysqli_real_escape_string($db, $_POST['pwd_1']);
//		$pwd_2 = mysqli_real_escape_string($db, $_POST['pwd_2']);
//
//		// form validation: ensure that the form is correctly filled
//		if (empty($idn)) { array_push($errors, "idn is required"); }
//		if (empty($email)) { array_push($errors, "Email is required"); }
//		if (empty($pwd_1)) { array_push($errors, "pwd is required"); }
//
//		if ($pwd_1 != $pwd_2) {
//			array_push($errors, "The two pwds do not match");
//		}
//
//		// register user if there are no errors in the form
//		if (count($errors) == 0) {
//			$pwd = md5($pwd_1);//encrypt the pwd before saving in the database
//			$query = "INSERT INTO access (idn, pwd) 
//					  VALUES('$idn', '$pwd')";
//			mysqli_query($db, $query);
//
//			$_SESSION['idn'] = $idn;
//			$_SESSION['success'] = "You are now logged in";
//			
//		}
//
//	}
//
//	// ... 

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
                //header('Location: #/visualise');
			}else {
				echo("Wrong idn/pwd combination");
			}
	}

?>