<?php

	$personnelid = $_POST['personnelid'];
	$password = $_POST['password'];

	$host = "localhost";
	$dbusername = "root";
	$dbpassword = "12345678";
	$dbname = "feed";

	$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

	$sql = "SELECT * FROM loginbhw WHERE personnelid =?;";
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
				
				header("Location: ../ccinfom/index-logged-hw.html");
				exit();
			}

		} else {
			echo "NO USER";
		}
	}
