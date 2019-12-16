<?php

$firstname = filter_input(INPUT_POST, 'firstname');
$lastname = filter_input(INPUT_POST, 'lastname');
$middle = filter_input(INPUT_POST, 'middle');
$personnelid = filter_input(INPUT_POST, 'personnelid');
$password = filter_input(INPUT_POST, 'password');
$address = filter_input(INPUT_POST, 'address');
$mobilenumber = filter_input(INPUT_POST, 'mobilenumber');

$hsID = filter_input(INPUT_POST, 'hsID');
$brgyID = filter_input(INPUT_POST, 'brgyID');
$familynum = filter_input(INPUT_POST, 'familynum');
$birthday = filter_input(INPUT_POST, 'birthday');
$gender = filter_input(INPUT_POST, 'gender');
$hsStatus = filter_input(INPUT_POST, 'hsStatus');
$brgyStatus = filter_input(INPUT_POST, 'brgyStatus');

$fathername = filter_input(INPUT_POST, 'fathername');
$mothername = filter_input(INPUT_POST, 'mothername');
$fcontact = filter_input(INPUT_POST, 'fcontact');
$mcontact = filter_input(INPUT_POST, 'mcontact');


$eName = filter_input(INPUT_POST, 'eName');
$eAddress = filter_input(INPUT_POST, 'eAddress');
$eContactNum = filter_input(INPUT_POST, 'eContactNum');
$eRelationship = filter_input(INPUT_POST, 'eRelationship');

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

	$sql = "INSERT INTO hschild
	VALUES ('$hsID', '$brgyID', '$familynum', '$firstname', '$middle', '$lastname', '$birthday', '$gender', '$address', '$fathername', '$mothername', '$fcontact', '$mcontact', '$hsStatus', '$brgyStatus')";

	if($conn->query($sql)) {
		echo "New record is inserted sucessfully";
	} else {
		echo "Error: ". $sql . "<br>". $conn->error;
	}
	
	$conn->close();
}

?>
