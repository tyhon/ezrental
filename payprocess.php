
<?php
//Modified by Olajide A 4-18-2020
//Updated sql statements & moved coe blocks directed by Brian C
//Modified line 46 changed variable to $res_amount

session_start();
require 'config.php';
require 'connection.php';

$conn = Connect();

use PayPal\Api\Payer;
use PayPal\Api\Details;
use PayPal\Api\Amount;
use PayPal\Api\Transaction;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Exception\PPConnectionException;

$pm_cus_name = $_SESSION['login_customer'];
    //access database for key info
    $mysql0 = "SELECT cus_ID FROM customer WHERE cus_username = '$pm_cus_name'";
    $myresult0 = $conn->query($mysql0);
    if (mysqli_num_rows($myresult0) > 0) {
        while($myrow0 = mysqli_fetch_assoc($myresult0)) {
          $customer_id = $myrow0["cus_ID"];
        }
      }

    $sql0 = "SELECT * FROM reservation WHERE res_cus_ID = '$customer_id'";
    $result0 = $conn->query($sql0);
    if (mysqli_num_rows($result0) > 0) {
        while($row0 = mysqli_fetch_assoc($result0)) {
          $res_ID = $row0["res_ID"];
          $res_amount = $row0["res_amount"];
          $res_date = $row0["res_date"];
        }
      }

$payer = new Payer();
$details = new Details();
$amount = new Amount();
$transaction = new Transaction(); //amount + description
$payment = new Payment(); //intent
$redirectUrls = new RedirectUrls(); //success url, return url
$subtotal = $res_amount;

//Payer
$payer->setPaymentMethod('paypal');

//Details
$details->setShipping('0.00')
    ->setTax('0.00')
    ->setSubtotal($subtotal); //depends on car type

//Amount
$amount->setCurrency('USD')
    ->setTotal($subtotal) //subtotal + tax + shipping
    ->setDetails($details);

//Transaction
$transaction->setAmount($amount)
    ->setDescription('Rental');

//Payment    
$payment->setIntent('sale')
    ->setPayer($payer)
    ->setTransactions([$transaction]);

//Redirect URLs
$redirectUrls->setReturnUrl('http://localhost:8080/ezrental/pay.php?approved=true') //redirect on success
    ->setCancelUrl('http://localhost:8080/ezrental/pay.php?approved=false'); //redirect on fail, 

$payment->setRedirectUrls($redirectUrls);    


try {
    $payment->create($api);
    //generate and store hash
    $hash = md5($payment->getId());
    $_SESSION['paypal_hash'] = $hash;
    $pm_date = $res_date;
    $pm_cus_ID = $customer_id;
    $pm_res_ID = $res_ID;
    $pm_amount = $res_amount;
    $pm_key = $payment->getId();
    $pm_hash = $hash;
    $pm_status = 'no';
    //prepare and execute transaction storage to table in db
    $store = $conn->prepare("INSERT INTO payment (pm_date, pm_cus_ID, pm_res_ID, pm_cus_name, pm_key, pm_hash, pm_status, pm_amount ) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $store->bind_param("siissssd",$pm_date, $pm_cus_ID, $pm_res_ID, $pm_cus_name, $pm_key, $pm_hash, $pm_status, $pm_amount);
    
    if($store->execute())   {
    echo $pm_cus_name;
    echo $pm_key;
    echo $pm_hash;
    echo $pm_status;
    } else  {
        echo("Error description: " . $conn->error);
    }
} catch (PPConnectionException $e)  {
    //could also log error
    header('Location: /error.php');
}
foreach($payment->getLinks() as $link)   {
    if($link->getRel() == 'approval_url')    {
        $redirectUrl = $link->getHref();
    }
}

//var_dump($redirectUrl);
//var_dump($payment->getLinks());

header('Location: ' . $redirectUrl); //uncomment when done testing

?>