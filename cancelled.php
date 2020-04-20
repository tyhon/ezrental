<?php
session_start();

require 'connection.php';
$conn = Connect();
 //code that cancels order (removes reservation info from database)
 $pm_cus_name = $_SESSION['login_customer'];

try {
 $mysql0 = "SELECT cus_ID  FROM customer WHERE cus_username = '$pm_cus_name'";
    $myresult0 = $conn->query($mysql0);
    if (mysqli_num_rows($myresult0) > 0) {
        while($myrow0 = mysqli_fetch_assoc($myresult0)) {
          $customer_id = $myrow0["cus_ID"];
        }
      }

 $sql0 = "SELECT res_ID FROM reservation WHERE res_cus_ID = '$customer_id'";
    $result0 = $conn->query($sql0);
    if (mysqli_num_rows($result0) > 0) {
        while($row0 = mysqli_fetch_assoc($result0)) {
          $res_ID = $row0["res_ID"];
        }
      }    

 $cancel = $conn->prepare("DELETE FROM reservation WHERE res_ID = ?");
        $cancel->bind_param("i", $res_ID);
        $cancel->execute();

  header('Location: index.php');


}   catch (Exception $e) {
    echo("Error description: " . $conn->error);
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <p>You cancelled.</p> 
    </body>
</html>