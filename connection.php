<?php

function Connect()
{
	$dbhost = "localhost";
	$dbuser = "qwickso1_rental";
	$dbpass = "PassCTW2020@1";
	$dbname = "qwickso1_EzRentaldb";

	//Create Connection
	$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);

	return $conn;
}
?>