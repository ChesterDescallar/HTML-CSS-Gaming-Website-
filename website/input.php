<?php
include 'connectpdo.php';
$client_uname = $_POST['username'];
$client_fname = $_POST['firstname'];
$client_lname = $_POST['lastname'];
$client_email = $_POST['emailaddress'];
$client_password = $_POST['cpassword'];

try{
$sql = "INSERT INTO useraccounts (Username, First_Name, Last_Name, Email, Password) VALUES ('".$client_uname."', '".$client_fname."', '".$client_lname."', '".$client_email."', '".$client_password."')";
	// use exec() because no results are returned
	$conn -> exec($sql);
	echo " New record has been created";
    }
	catch(PDOException $e)
	{
			echo $sql. "<br>" . $e->getMessage();
    }

$conn = null;

?>