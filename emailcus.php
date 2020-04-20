<?php

//Updated by Olajide A 04-18-2020
//Updated line 43 Changed transaction_paypal to payment

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\smtp;
require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';

session_start();
require 'connection.php';
$conn = Connect();

$pm_cus_name = $_SESSION['login_customer'];

$mysql0 = "SELECT cus_ID, cus_email  FROM customer WHERE cus_username = '$pm_cus_name'";
    $myresult0 = $conn->query($mysql0);
    if (mysqli_num_rows($myresult0) > 0) {
        while($myrow0 = mysqli_fetch_assoc($myresult0)) {
          $customer_id = $myrow0["cus_ID"];
          $customer_email = $myrow0["cus_email"];
        }
      }
$sql0 = "SELECT * FROM reservation WHERE res_cus_ID = '$customer_id'";
    $result0 = $conn->query($sql0);
    if (mysqli_num_rows($result0) > 0) {
        while($row0 = mysqli_fetch_assoc($result0)) {
          $res_start_date = $row0["res_rentstart_date"];
          $res_end_date = $row0["res_rentend_date"];
          $res_amount = $row0["res_amount"];
          $res_date = $row0["res_date"];
          $res_car_id = $row0["res_car_ID"];
          $res_ID = $row0["res_ID"];
        }
      }
      $mysql1 = "SELECT * FROM car WHERE car_ID = '$res_car_id'";
      $myresult1 = $conn->query($mysql1);
      if (mysqli_num_rows($myresult1) > 0) {
          while($myrow1 = mysqli_fetch_assoc($myresult1)) {
            $car_make = $myrow1["car_make"];
            $car_model = $myrow1["car_model"];
            $car_size = $myrow1["car_size"];
            $car_tagplate = $myrow1["car_tagplate"];
          }
        }
    $sql1 = "SELECT pm_key FROM payment WHERE pm_res_ID = '$res_ID'";
    $result1 = $conn->query($sql1);
    if (mysqli_num_rows($result1) > 0) {
        while($row1 = mysqli_fetch_assoc($result1)) {
          $pm_key = $row1["pm_key"];
        }
    }

// //email customer

$mail = new PHPMailer(true);

    try {

        $body = '<h3 class="text-center"> <strong>Your Order Number:</strong> <span style="color: blue;">' . $res_ID . '</span> </h3>
        <div class="container">
            <h5 class="text-center">Please read the following information about your order.</h5>
            <div class="box bg-custom">
                <div class="col-md-10" style="float: none; margin: 0 auto; text-align: center;">
                    <h3 style="color: orange;">Your booking has been received and placed into out order processing system.</h3>
                    <br>
                    <h4>Please make a note of your <strong>order number and transaction ID</strong> in order to communicate with us about your order.</h4>
                    <br>
                    <h3 style="color: orange;">Invoice</h3>
                    <br>
                </div>
                <div class="col-md-10" style="float: none; margin: 0 auto; ">
                    <h4> <strong>Transaction ID: </strong>' . $pm_key . ' </h4>
                    <br>
                    <h4> <strong>Your Username: </strong>' . $pm_cus_name . '</h4>
                    <br>
                    <h4> <strong>Vehicle Make:</strong> ' . $car_make . ' </h4>
                    <br>
                    <h4> <strong>Vehicle Model:</strong> ' . $car_model . ' </h4>
                    <br>
                    <h4> <strong>Vehicle Size:</strong> '. $car_size . ' </h4>
                    <br>
                    <h4> <strong>Vehicle Tag:</strong> ' . $car_tagplate . ' </h4>
                    <br>
                    <h4> <strong>Booking Date: </strong> ' . $res_date . ' </h4>
                    <br>
                    <h4> <strong>Start Date: </strong> ' . $res_start_date . ' </h4>
                    <br>
                    <h4> <strong>Return Date: </strong> ' . $res_end_date . ' </h4>
                    <br>
                    <h4> <strong>Total Amount: $</strong>' . $res_amount . '</h4>
                    <br>
                </div>
            </div>
            <div class="col-md-12" style="float: none; margin: 0 auto; text-align: center;">
                <h6>Notice: <strong>Keep this page for future reference in order to return your vehicle.</h6>
            </div>
        </div>';

        //Server settings
      //  $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
        $mail->isSMTP();                                           
        $mail->Host       = 'smtp.gmail.com';                   
        $mail->SMTPAuth   = true;                                  
        $mail->Username   = 'ezrentalcars@gmail.com';                   //vendor google account
        $mail->Password   = 'P.aAp^aM,1iIA';                   //vendor google password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         
        $mail->Port       = 587;                                   

        //Recipients
        $mail->setFrom('ezrentalcars@gmail.com', 'EzRental');          //vendor email
        $mail->addAddress($customer_email);                  //enter customer email

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'EzRental Reservation Confirmation';
        $mail->Body    = $body;

        $mail->send();
        //echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
     <!--   <p>Transaction complete <a href="index.php">Return home</a></p> --> 
    </body>
</html>