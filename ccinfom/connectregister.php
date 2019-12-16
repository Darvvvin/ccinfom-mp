<?php

	$firstname = filter_input(INPUT_POST, 'firstname');
	$lastname = filter_input(INPUT_POST, 'lastname');
	$middle = filter_input(INPUT_POST, 'middle');
	$personnelid = filter_input(INPUT_POST, 'personnelid');
	$password = filter_input(INPUT_POST, 'password');
	$address = filter_input(INPUT_POST, 'address');
	$mobilenumber = filter_input(INPUT_POST, 'mobilenumber');

	$host = "localhost";
	$dbusername = "root";
	$dbpassword = "12345678";
	$dbname = "feed";

	$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

	if(mysqli_connect_error()) {
		die('Connect Error ('.mysqli_connect_errno().')'
			.mysqli_connect_error());
	} else {
		echo "Connect Success! <br>";

		$sql = "INSERT INTO registerngo
		VALUES ('$personnelid', '$firstname', '$middle', '$lastname' ,'$address', '$mobilenumber')";

		$sql2 = "INSERT INTO loginngo
		VALUES ('$password', '$personnelid')";

		if($conn->query($sql)) {
			?>
			<script type="text/javascript">
				window.location.href = 'success.html';
			</script>
			<?

		} else {
			echo "Error: ". $sql . "<br>". $conn->error;
		}

		if($conn->query($sql2)) {
			echo " & Login is inserted sucessfully";
			header("Location: ../ccinfom/success.html");
			exit();

		} else {
			echo "Error: ". $sql2 . "<br>". $conn->error;
		}
		
		$conn->close();
	}