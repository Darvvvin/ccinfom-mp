<?php

	$personnelid = $_POST['personnelid'];
	$password = $_POST['password'];

	$host = "localhost";
	$dbusername = "root";
	$dbpassword = "12345678";
	$dbname = "module_4";

	$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

	$sql = "SELECT * FROM ngo_login WHERE personnelid =?;";
	$stmt = mysqli_stmt_init($conn);

	if(!mysqli_stmt_prepare($stmt, $sql)) {
		echo "ERROR!";
		exit();

	} else {
		mysqli_stmt_bind_param($stmt, "s", $personnelid);
		mysqli_stmt_execute($stmt);
		$result = mysqli_stmt_get_result($stmt);

		if($row = mysqli_fetch_assoc($result)) {
			$pwdCheck = password_verify($password, $row['password']);

			if($password != $row['password']) {
				echo "WRONG PASSWORD";
				exit();
			} else if($password == $row['password']) {
				
				header("Location: ../ccinfom/index-logged.html");
				exit();
				//echo "SUCCESS";
				//session_start();
				//$_SESSION['userId'] = $row['password'];
			}

		} else {
			echo "NO USER";
		}
	}
