<?php
//<!-- Date 4/12/2020
//        Ver 1.0
//       Chi Luong   -->
// mysqli_connect() function opens a new connection to the MySQL server.
require 'connection.php';
$conn = Connect();

session_start();// Starting Session

// Storing Session
$user_check=$_SESSION['login_client'];

// SQL Query To Fetch Complete Information Of User
$query = "SELECT man_username FROM manager WHERE man_username = '$user_check'";
$ses_sql = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['man_username'];
?>