<?php
//<!-- Date 4/19/2020
 //Ver 1.2 encrypt password using hashing password and the bcrypt algorithm
  // Chi Luong   -->
session_start(); // Starting Session
$error=''; // Variable To Store Error Message

if (isset($_POST['submit'])) {
if (empty($_POST['customer_username']) || empty($_POST['customer_password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$customer_username=$_POST['customer_username'];
$customer_password=$_POST['customer_password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
require 'connection.php';
$conn = Connect();

$query = "SELECT cus_username, cus_password from customer WHERE cus_username = '$customer_username'";
$result = $conn -> query($query);
if (mysqli_num_rows($result)>0)
{
	while ($row = mysqli_fetch_array($result)) {
		# code...
		if (password_verify($customer_password, $row['cus_password'])){
			$_SESSION['login_customer']=$customer_username; // Initializing Session
			header("location: index.php"); // Redirecting To Other Page
		} else {
			$error = "Username or Password is invalid";
		}
	}

} else {
	$error = "Username or Password is invalid";
}

mysqli_close($conn); // Closing Connection
}
}
?>