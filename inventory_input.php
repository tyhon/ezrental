<!DOCTYPE html>
<html>
<?php 
include('session_client.php'); ?>  
<head>
  <title>Inventory Input</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/ezrentallogo-128x40-1.png" type="image/x-icon">
  <meta name="description" content="EZ Rental, Affordable auto rental">
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
  <section class="menu cid-rSGemrEJWi" once="menu" id="menu1-d">

    
    

    <nav class="navbar navbar-dropdown navbar-fixed-top collapsed">
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
            <ul class="navbar-nav nav-dropdown navbar-nav-top-padding" data-app-modern-menu="true"><li class="nav-item"><a class="nav-link link text-black display-4" href="inventory_input.php"><br><br>Inventory Input<br></a></li><li class="nav-item"><a class="nav-link link text-black display-4" href="logout.php">Logout<br></a></li><li class="nav-item"><a class="nav-link link text-black display-4" href="page3.html">About Us</a></li></ul>
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
    </nav>
</section>

<section class="header5 cid-rSGemsHUiP mbr-parallax-background" id="header5-e">

    

    

    <div class="container align-left">
        <div class="row justify-content-center mbr-white">
                <div class="mbr-white col-md-12">
                    <h4 class="mbr-section-subtitle mbr-fonts-style align-left pb-2 display-5"><strong>THINKING OF renting a vehicle?</strong></h4>
                    <h1 class="mbr-section-title mbr-white mbr-fonts-style align-left mbr-bold display-1">Ez Rental</h1>
                    <p class="mbr-text pb-3 mbr-fonts-style mbr-white align-left display-7">Sign up &amp; Login to rent today!</p>
                    <div class="mbr-section-btn align-left"><a class="btn btn-lg btn-white display-4">Rent Now !</a></div>
                </div>
            </div>
        </div>
    
    
</section>

<section class="cid-rSGemtvQVk" id="content7-f">
	<div class="container" style="margin-top: 65px;" >
    <div class="col-md-7" style="float: none; margin: 0 auto;">
      <div class="form-area">
        <form role="form" action="input.php" enctype="multipart/form-data" method="POST">
        <br style="clear: both">
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> Input Car Inventory. </h3>

          <div class="form-group">
            <input type="text" class="form-control" id="car_make" name="car_make" placeholder="Make " required autofocus="">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="car_model" name="car_model" placeholder="Model " required autofocus="">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="car_color" name="car_color" placeholder="Color " required autofocus="">
          </div>
          <div class="form-group">
            <label for="size_car">Car Size: <span class="text-danger" style="margin-right: 5px; float:left;"></span></label>
                                    <select id="car_size" name="car_size">
                                        <option value="compact">Compact</option>
                                        <option value="fullsize">Full Size</option>
                                        <option value="suv">SUV</option>
                                    </select>
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="car_tagplate" name="car_tagplate" placeholder="Vehicle Number (Name Plate Number)" required>
          </div>     

          <div class="form-group">
            <input type="text" class="form-control" id="car_price" name="car_price" placeholder="Price per day" required>
          </div>

       

          <div class="form-group">
            <input name="uploadedimage" type="file">
          </div>
           <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right"> Add car</button>    
        </form>
      </div>
    </div>


        <div class="col-md-12" style="float: none; margin: 0 auto;">
    <div class="form-area" style="padding: 0px 100px 100px 100px;">
        <form action="" method="POST">
        <br style="clear: both">
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> My Cars </h3>
<?php
// Storing Session
$user_check=$_SESSION['login_client'];
$sql = "SELECT * FROM car WHERE car_id IN (SELECT car_id FROM manage WHERE man_username='$user_check');";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  ?>
<div style="overflow-x:auto;">
  <table class="table table-striped">
    <thead class="thead-dark">
      <tr>
        <th></th>
        <th width="20%"> Make</th>
        <th width="18%"> Model</th>
        <th width="15%"> Color </th>
        <th width="15%"> Size </th>
        <th width="17%"> Tagplate</th>
        <th width="13%"> Price (/day)</th>
        <th width="1%"> Availability </th>
      </tr>
    </thead>

    <?PHP
      //OUTPUT DATA OF EACH ROW
      while($row = mysqli_fetch_assoc($result)){
    ?>

  <tbody>
    <tr>
      <td> <span class="glyphicon glyphicon-menu-right"></span> </td>
      <td><?php echo $row["car_make"]; ?></td>
      <td><?php echo $row["car_model"]; ?></td>
      <td><?php echo $row["car_color"]; ?></td>
      <td><?php echo $row["car_size"]; ?></td>
      <td><?php echo $row["car_tagplate"]; ?></td>
      <td><?php echo $row["price"]; ?></td>
      <td><?php echo $row["car_status"]; ?></td>
      
    </tr>
  </tbody>
  <?php } ?>
  </table>
  </div>
    <br>
  <?php } else { ?>
  <h4><center>0 Cars available</center> </h4>
  <?php } ?>
        </form>
</div>        
        </div>
    </div>

    

    
    
</section>

<section class="cid-rSGemArtJj" id="footer2-n">

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