<?php
    $hostname = "localhost";
    $username = "root";
    $password = "12345678";
    $databasename = "feed";

    
    $connect = mysqli_connect($hostname, $username, $password, $databasename);
    
    $IDinput = $_POST['hsIDToUpdate'];

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $middle = $_POST['middle'];
    $hsID = $_POST['hsID'];
    $brgyID = $_POST['brgyID'];
    $familyNum = $_POST['familynum'];
    $birthday = $_POST['birthday'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $mobilenumber = $_POST['mobilenumber'];
    $hsStatus = $_POST['hsStatus'];
    $brgyStatus = $_POST['brgyStatus'];

    if (isset($IDinput)) {
        
    
       $query = "UPDATE hsadult SET hsID = '$hsID',
            brgyID = '$brgyID',
            familyNum = '$familyNum',
            firstname = '$firstname', 
            middle = '$middle',
            lastname = '$lastname',
            birthday = '$birthday',
            gender = '$gender',
            address = '$address',
            mobilenumber = '$mobilenumber',
            hsStatus = '$hsStatus',
            brgyStatus = '$brgyStatus'
            WHERE hsID = '$IDinput'";

        $result = mysqli_query($connect, $query);
            
    } 

   header("location:table_updatehs.php");
   exit;










?>