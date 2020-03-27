<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message

if (isset($_POST['submit'])) {
if (empty($_POST['man_username']) || empty($_POST['man_password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$man_username=$_POST['man_username'];
$man_password=$_POST['man_password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
require 'connection.php';
$conn = Connect();

// SQL query to fetch information of registerd users and finds user match.
$query = "SELECT man_username, man_password FROM manager WHERE man_username=? AND man_password=? LIMIT 1";

// To protect MySQL injection for Security purpose
$stmt = $conn->prepare($query);
$stmt -> bind_param("ss", $man_username, $man_password);
$stmt -> execute();
$stmt -> bind_result($man_username, $man_password);
$stmt -> store_result();

if ($stmt->fetch())  //fetching the contents of the row
{
	$_SESSION['login_client']=$man_username; // Initializing Session
	header("location: inventory_input.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
}
mysqli_close($conn); // Closing Connection
}
}
?>