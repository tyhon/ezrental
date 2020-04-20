<?php

//Modified by Olajide A 4-18-2020
//Modified line 23 & 39 changed transaction_paypal to payment
//Added require 'vendor/autoload.php'; to line 13

use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;

session_start();
require 'config.php';
require 'connection.php';
require 'vendor/autoload.php';

$conn = Connect();

if(isset($_GET['approved']))    {
    $approved = $_GET['approved'] === 'true';

    if($approved)    {
        
        $payerId = $_GET['PayerID']; 

        //Get payment-id from database
        $paymentId = $conn->prepare("SELECT pm_key FROM payment WHERE pm_hash = ?");
        $paymentId->bind_param("s", $hash);
        $hash = $_SESSION['paypal_hash'];
        $paymentId->execute();
        $paymentId->bind_result($paymentId);
        $paymentId->fetch();
        //gets paypal payment
        $payment = Payment::get($paymentId, $api);

        $execution = new PaymentExecution();
        $execution->setPayerId($payerId);

        //execute paypal payment (charge)
        $payment->execute($execution, $api);

        //update transaction
        $updateTransaction = $conn->prepare("UPDATE payment SET pm_status = 'yes' WHERE pm_key = ?");
        $updateTransaction->bind_param("s", $paymentId);
        $updateTransaction->execute();

        //any other changes after transaction complete.

        //unset Paypal hash
        unset($_SESSION['paypal_hash']);

        header('Location: complete.php');

    } else{
        header('Location: cancelled.php');
    }

}
?>