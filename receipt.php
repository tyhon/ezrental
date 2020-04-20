<!DOCTYPE html>
<html  >
<?php 
session_start(); 
require 'connection.php';
$conn = Connect();
?>
<head>
  <!-- Date 4/17/2020
        Ver 1.2 adding cancel functional requirement if customer changes their mind before pickup day
        Chi Luong   -->
  
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/ezrentallogo-128x40-1.png" type="image/x-icon">
  <meta name="description" content="EZ Rental, Affordable auto rental">
  
  <title>Reservation Confirmation</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/facebook-plugin/style.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/animatecss/animate.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
 
  
  

</head>
<body>
  <section class="menu cid-qIuNheldqe" once="menu" id="menu1-p">

    
    

    <nav class="navbar navbar-dropdown navbar-fixed-top">
        <?php
                 if (isset($_SESSION['login_customer'])){
            ?>
             <div class="nav navbar-nav">
                
                        <a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_customer']; ?></a>
                
            </div>
        <div class="navbar-brand">
            
            
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
     
            <div class="collapse navbar-collapse navbar-right" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown navbar-nav-top-padding" data-app-modern-menu="true"><li class="nav-item"><a class="nav-link link text-black display-4" href="index.php"><br><br>Home<br></a></li><li class="nav-item"><a class="nav-link link text-black display-4" href="filtering.php">Get Quote<br></a></li><li class="nav-item"><a class="nav-link link text-black display-4" href="myreservation.php">My Reservation<br></a></li><li class="nav-item"><a class="nav-link link text-black display-4" href="returnnow.php">Return Now<br></a></li><li class="nav-item"><a class="nav-link link text-black display-4" href="logout.php">Logout<br></a></li></ul>
            <div class="icons-menu">
              <div class="soc-item">
                <a href="https://twitter.com/mobirise" target="_blank">
                  <span class="mbr-iconfont socicon-twitter socicon" style="color: rgb(255, 255, 255); fill: rgb(255, 255, 255);"></span>
                </a>
              </div>
              <div class="soc-item">
                <a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">
                  <span class="mbr-iconfont socicon-facebook socicon" style="color: rgb(255, 255, 255); fill: rgb(255, 255, 255);"></span>
                </a>
              </div>
              <div class="soc-item">
                <a href="https://instagram.com/mobirise" target="_blank">
                  <span class="mbr-iconfont socicon-instagram socicon" style="color: rgb(255, 255, 255); fill: rgb(255, 255, 255);"></span>
                </a>
              </div>
              
              
              
            </div>
            <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-white display-4" href="page2.html">RENT NOW</a></div>
      </div>
       <?php
            }
                else {
            ?>
   
        <div class="navbar-brand">
            
            
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown navbar-nav-top-padding" data-app-modern-menu="true"><li class="nav-item"><a class="nav-link link text-black display-4" href="index.php"><br><br>Home<br></a></li><li class="nav-item"><a class="nav-link link text-black display-4" href="customerlogin.php">Login/Signup<br></a></li><li class="nav-item"><a class="nav-link link text-black display-4" href="page3.html">About Us</a></li><li class="nav-item"><a class="nav-link link text-black display-4" href="page4.html">Contact Us<br><br></a></li></ul>
            <div class="icons-menu">
              <div class="soc-item">
                <a href="https://twitter.com/mobirise" target="_blank">
                  <span class="mbr-iconfont socicon-twitter socicon" style="color: rgb(255, 255, 255); fill: rgb(255, 255, 255);"></span>
                </a>
              </div>
              <div class="soc-item">
                <a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">
                  <span class="mbr-iconfont socicon-facebook socicon" style="color: rgb(255, 255, 255); fill: rgb(255, 255, 255);"></span>
                </a>
              </div>
              <div class="soc-item">
                <a href="https://instagram.com/mobirise" target="_blank">
                  <span class="mbr-iconfont socicon-instagram socicon" style="color: rgb(255, 255, 255); fill: rgb(255, 255, 255);"></span>
                </a>
              </div>
              
              
              
            </div>
            <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-white display-4" href="customerlogin.php">RENT NOW</a></div>
      </div>
       <?php   }
                ?>
    </nav>
</section>
<section class="header5 cid-rzBfcbdf3b mbr-parallax-background" id="header5-q">

    

    

    <div class="container align-left">
        <div class="row justify-content-center mbr-white">
                <div class="mbr-white col-md-12">
                    <h4 class="mbr-section-subtitle mbr-fonts-style align-left pb-2 display-5"><strong>THINKING OF renting a vehicle?</strong></h4>
                    <h1 class="mbr-section-title mbr-white mbr-fonts-style align-left mbr-bold display-1">Ez Rental</h1>
                    
                    <div class="mbr-section-btn align-left"><a class="btn btn-lg btn-white display-4">Rent Now !</a></div>
                </div>
            </div>
        </div>
    
    
</section>
<section class="cid-qIjMfqP1Ii" id="content7-k">

    

    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-12 align-center">
                
                <h2 class="mbr-section-title align-center mbr-fonts-style mbr-bold display-2">We will help you to choose the best headphones!</h2>
            </div>
        </div>
    </div>
</section>
<?php
date_default_timezone_set("America/New_York");
    $id = $_GET["id"];
    $duration = $conn->real_escape_string($_POST['durations']);
    $car_price = $conn->real_escape_string($_POST['price']);
    $totalamount = $duration*$car_price;
    $return_status = "R";
    $today = date('Y-m-d');
  
    
    $customer_username = $_SESSION["login_customer"];
    $mysql0 = "SELECT * FROM customer WHERE cus_username = '$customer_username'";
    $myresult0 = $conn->query($mysql0);
    if (mysqli_num_rows($myresult0) > 0) {
        while($myrow0 = mysqli_fetch_assoc($myresult0)) {
          $customer_id = $myrow0["cus_ID"];
          $customer_name = $myrow0["cus_FName"];
          $customer_phone = $myrow0["cus_phone_no"];
          $customer_email = $myrow0["cus_email"];
        }
      }
      $sql0 = "SELECT * FROM car c, reservation r WHERE r.res_ID = '$id' AND c.car_ID = r.res_car_ID";
    $result0 = $conn->query($sql0);
    if (mysqli_num_rows($result0) > 0) {
        while($row0 = mysqli_fetch_assoc($result0)) {
          $car_price = $row0["price"];
          $car_make = $row0["car_make"];
          $car_model = $row0["car_model"];
          $car_size = $row0["car_size"];
          $car_tagplate = $row0["car_tagplate"];
          $book_date = $row0["res_date"];
          $rent_start_date = $row0["res_rentstart_date"];
        }
      }
    //$car_id = $conn->real_escape_string($_POST['hidden_carid']);
    //$rent_start_date = date('Y-m-d', strtotime($_POST['rent_start_date']));
    //$rent_end_date = date('Y-m-d', strtotime($_POST['rent_end_date']));
    //$rent_start_date = date('Y-m-d', strtotime($_SESSION['start_date']));
    //$rent_end_date = date('Y-m-d', strtotime($_SESSION['end_date']));
    //$return_status = "NR"; // not returned
    //$fare = "NA";
/*

    function dateDiff($start, $end) {
        $start_ts = strtotime($start);
        $end_ts = strtotime($end);
        $diff = $end_ts - $start_ts;
        return round($diff / 86400);
    }
    
    $err_date = dateDiff("$rent_start_date", "$rent_end_date");

    


    
    if($err_date >= 0) { 
    $sql1 = "INSERT into reservation(res_date,res_rentstart_date,res_rentend_date,res_status,res_car_ID,res_cus_ID,res_amount) 
    VALUES('" . date("Y-m-d") ."','" . $rent_start_date ."','" . $rent_end_date . "','" . $return_status . "','" . $car_id . "','" . $customer_id . "', '" . $totalamount . "')";
    $result1 = $conn->query($sql1);

    $sql2 = "UPDATE car SET car_status = 'no' WHERE car_id = '$car_id'";
    $result2 = $conn->query($sql2);

    $sql4 = "SELECT * FROM  car c, reservation r WHERE c.car_ID = '$car_id'";
    $result4 = $conn->query($sql4);


    if (mysqli_num_rows($result4) > 0) {
        while($row = mysqli_fetch_assoc($result4)) {
            $id = $row["res_ID"];
        }
    }

    

    if (!$result1 | !$result2){
        die("Couldnt enter data: ".$conn->error);
    }*/
    $sql1 = "UPDATE reservation SET res_return_date = '$today', res_amount = '$totalamount' ,res_status = 'R' WHERE res_ID = '$id'";
    $result1 = $conn->query($sql1);

if ($result1){
     $sql2 = "UPDATE car c, reservation r SET c.car_statud='yes'
     WHERE r.res_car_ID=c.car_ID AND rc.res_cus_ID = '$customer_id' AND r.id = '$id'";
     $result2 = $conn->query($sql2);
}
else {
    echo $conn->error;
}

?>


<section class="features19 cid-qIjES4e5vV" id="features19-5">
   <div class="container">
        <div class="jumbotron">
            <h1 class="text-center" style="color: green;"><span class="glyphicon glyphicon-ok-circle"></span> <?php if ($today > $rent_start_date){ echo "Car Returned"; } else { echo "Reservation canceled"; } ?> </h1>
        </div>
    </div>
    <br>

    <h2 class="text-center"> Thank you for visiting Ez Rental Services! We wish you have a safe ride. </h2>

 

    <h3 class="text-center"> <strong>Your Reservation Number:</strong> <span style="color: blue;"><?php echo "$id"; ?></span> </h3>


    <div class="container">
        <h5 class="text-center">Please read the following information about your order.</h5>
        <div class="box bg-custom">
            <div class="col-md-10" style="float: none; margin: 0 auto; text-align: center;">
                <h3 style="color: orange;">Your booking has been received and placed into out order processing system.</h3>
                <br>
                <h4>Please make a note of your <strong>order number</strong> now and keep in the event you need to communicate with us about your order.</h4>
                <br>
                <h3 style="color: orange;">Receipt</h3>
                <br>
            </div>
            <div class="col-md-10" style="float: none; margin: 0 auto; ">
                <h4> <strong>Your Name: </strong> <?php echo $customer_name; ?></h4>
                <br>
                <h4> <strong>Your Phone No.:</strong> <?php echo $customer_phone; ?></h4>
                <br>
                <h4> <strong>Your Email: </strong> <?php echo $customer_email; ?></h4>
                <br>
                <h4> <strong>Vehicle Make:</strong> <?php echo $car_make; ?></h4>
                <br>
                <h4> <strong>Vehicle Model:</strong> <?php echo $car_model; ?></h4>
                <br>
                <h4> <strong>Vehicle Tag:</strong> <?php echo $car_tagplate; ?></h4>
                <br>
                <h4> <strong>Booking Date: </strong> <?php echo $book_date ?> </h4>
                <br>
                <h4> <strong>Start Date: </strong> <?php echo $rent_start_date; ?></h4>
                <br>
                <h4> <strong>Return Date: </strong> <?php echo $today; ?></h4>
                <br>
                <h4> <strong>Total Amount: $</strong><?php echo $totalamount; ?> </h4>
                <br>
                
            </div>


        </div>
       
        <div class="col-md-12" style="float: none; margin: 0 auto; text-align: center;">
          <br>
            <h6>Warning! <strong>Do not reload this page</strong> or the above display will be lost. If you want a hardcopy of this page, please print it now.</h6>
        </div>

    </div>
</section>

<section class="mbr-section info5 cid-qIjGVVeB7i" id="info5-9">

    

    
    <div class="container">
        <div class="row justify-content-center content-row">
            <div class="media-container-column title col-12 col-lg-7 col-md-6">
                <h3 class="mbr-section-subtitle align-left mbr-light pb-3 mbr-fonts-style display-5">
                   HURRY UP! THE OFFER IS LIMITED</h3>
                <h2 class="align-left mbr-bold mbr-fonts-style mbr-white mbr-section-title display-2">Like it? Reserve and get a discount<br></h2>
            </div>
            <div class="media-container-column col-12 col-lg-3 col-md-4">
                <div class="mbr-section-btn align-right py-4"><a class="btn btn-white display-4" href="index.html">Learn More</a></div>
            </div>
        </div>
    </div>
</section>

<section class="features8 cid-qIjI4pKeSS" id="features8-c">
    
    

    
    <div class="container">
        <h2 class="mbr-section-title align-left mbr-fonts-style display-2">Why rent from us?</h2>
        

        <div class="row justify-content-center content-row pt-4">
                    <div class="card p-3 col-md-6 col-lg-3">
                        <div class="card-box">
                            <div class="title">
                                <span class="num mbr-fonts-style mbr-bold display-1">01.</span>
                                <h4 class="card-title m-0 mbr-fonts-style mbr-bold display-5">
                                    HIGH QUALITY</h4>
                            </div>
                            <p class="mbr-text card-text mbr-fonts-style  display-7">
                                We stock our inventory with only cars from the highest quality brands.<br><a href="#" class="text-warning">Learn More...</a>
                            </p>
                        </div>
                    </div>
                    <div class="card p-3 col-md-6 col-lg-3">
                        <div class="card-box">
                            <div class="title">
                                <span class="num mbr-fonts-style mbr-bold display-1">02.</span>
                                <h4 class="card-title mbr-fonts-style m-0 mbr-bold display-5">AFFORDABLE PRICES</h4>
                            </div>
                            <p class="mbr-text card-text mbr-fonts-style display-7">We take time to offer deals that match or beat the going market rates.<br><a href="#" class="text-warning">Learn More...</a>
                            </p>
                        </div>
                    </div>
                    <div class="card p-3 col-md-6 col-lg-3">
                        <div class="card-box">
                            <div class="title">
                                <span class="num mbr-fonts-style mbr-bold display-1">03.</span>
                                <h4 class="card-title m-0 mbr-fonts-style mbr-bold display-5">RELIABLE SERVICE</h4>
                            </div>
                            <p class="mbr-text card-text mbr-fonts-style  display-7">
                                We take pride in world class customer service.<br><a href="#" class="text-warning">Learn More...</a>
                            </p>
                        </div>
                    </div>
                    <div class="card p-3 col-md-6 col-lg-3">
                        <div class="card-box">
                            <div class="title">
                                <span class="num mbr-fonts-style mbr-bold display-1">04.</span>
                                <h4 class="card-title mbr-fonts-style m-0 mbr-bold display-5">CONVIENIENT LOCATION</h4>
                            </div>
                            <p class="mbr-text card-text mbr-fonts-style display-7">
                                Pickup your vehicle conviniently from our strategically placed location.<br><a href="#" class="text-warning">Learn More...</a>
                            </p>
                        </div>
                    </div>

        </div>
    </div>
</section>

<section class="cid-qIjKmBgNqd" id="content7-e">

    

    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-12 align-center">
                <h3 class="mbr-section-subtitle align-center mbr-fonts-style pb-2 display-5"><strong>STILL NOT CONVINCED?</strong></h3>
                <h2 class="mbr-section-title align-center mbr-fonts-style mbr-bold display-2">Visit us and see yourself!</h2>
            </div>
        </div>
    </div>
</section>

<section class="map1 cid-qIjKkTKkO4" id="map1-d">

     

    <div class="google-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCy9r70T3NYf3PhvVflTo0_zdif2_IoIYs&amp;q=place_id:ChIJ9YKSGocD9YgR5ODhXHdtZ1w" allowfullscreen=""></iframe></div>
</section>

<section class="cid-qIjMDc36tP" id="footer2-l">

    

    

    <div class="container">
        <div class="row align-center justify-content-center align-items-center">
            <div class="logo-section col-sm-12 col-lg-4">
                <a href="#"><img src="assets/images/ezrentallogo-174x55.jpg" height="128" alt="" title="" style="height: 3.8rem;">
                </a>
            </div>
            <div class="col-sm-12 col-lg-4 mbr-text mbr-fonts-style mbr-light display-7">
                © 2020 All Rights Reserved Terms of Use and Privacy Policy
            </div>
            <div class="social-media col-sm-12 col-lg-4">
                <ul>
                    <li>
                      <a class="icon-transition" href="index.html">
                        <span class="mbr-iconfont socicon-facebook socicon"></span>
                      </a>
                    </li>
                    <li>
                      <a class="icon-transition" href="index.html">
                        <span class="mbr-iconfont socicon-twitter socicon"></span>
                      </a>
                    </li>
                    <li>
                      <a class="icon-transition" href="index.html">
                        <span class="mbr-iconfont socicon-linkedin socicon"></span>
                      </a>
                    </li>
                    <li>
                      <a class="icon-transition" href="index.html">
                        <span class="mbr-iconfont socicon-youtube socicon"></span>
                      </a>
                    </li>
                    <li>
                      <a class="icon-transition" href="index.html">
                        <span class="mbr-iconfont socicon-rss socicon" style=""></span>
                      </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5"></script>
  <script src="https://apis.google.com/js/plusone.js"></script>
  <script src="assets/facebook-plugin/facebook-script.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/dropdown/js/nav-dropdown.js"></script>
  <script src="assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
    <input name="animation" type="hidden">
</body>

</html>