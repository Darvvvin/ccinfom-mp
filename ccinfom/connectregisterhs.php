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

	$sql = "INSERT INTO hsadult
	VALUES ('$hsID', '$brgyID', '$familynum', '$firstname', '$middle', '$lastname', '$birthday', '$gender', '$address', '$mobilenumber', '$hsStatus', '$brgyStatus', '$password')";

	$sql2 = "INSERT INTO loginhs
	VALUES ('$hsID', '$password')";

	$sql3 = "INSERT INTO adultemergencydet
	VALUES ('$hsID', '$eName', '$eAddress', '$eContactNum', '$eRelationship')";

	if($conn->query($sql)) {
		echo "New record is inserted sucessfully";
	} else {
		echo "Error: ". $sql . "<br>". $conn->error;
	}

	if($conn->query($sql3)) {
		echo "Emergency is inserted sucessfully";
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
		
	} else {
		echo "Error: ". $sql2 . "<br>". $conn->error;
	}
	
	$conn->close();
}

?>
