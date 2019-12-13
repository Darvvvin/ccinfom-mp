<?php

$firstname = filter_input(INPUT_POST, 'firstname');
$lastname = filter_input(INPUT_POST, 'lastname');
$personnelid = filter_input(INPUT_POST, 'personnelid');
$password = filter_input(INPUT_POST, 'password');
$address = filter_input(INPUT_POST, 'address');
$mobilenumber = filter_input(INPUT_POST, 'mobilenumber');

$host = "localhost";
$dbusername = "root";
$dbpassword = "12345678";
$dbname = "module_4";

$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if(mysqli_connect_error()) {
	die('Connect Error ('.mysqli_connect_errno().')'
		.mysqli_connect_error());
} else {
	echo "Connect Success! <br>";

	$sql = "INSERT INTO ngo_users
	VALUES ('$firstname', '$lastname', '$personnelid', '$address', '$mobilenumber')";

	$sql2 = "INSERT INTO ngo_login
	VALUES ('$personnelid', '$password')";

	if($conn->query($sql)) {
		echo "New record is inserted sucessfully";
	} else {
		echo "Error: ". $sql . "<br>". $conn->error;
	}

	if($conn->query($sql2)) {
		echo " & Login is inserted sucessfully";
	} else {
		echo "Error: ". $sql2 . "<br>". $conn->error;
	}
	
	$conn->close();
}

?>
