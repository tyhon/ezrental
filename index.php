<!DOCTYPE html>
<html  >
<?php 
session_start(); 
require 'connection.php';
$conn = Connect();
?>
<head>
  <!-- Date 4/12/2020
        Ver 1.1 adding return functional requirement, fixed entering date twice, modified paypal button, adding back button for filtering function
        Chi Luong   -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/ezrentallogo-128x40-1.png" type="image/x-icon">
  <meta name="description" content="EZ Rental, Affordable auto rental">
  
  <title>Home</title>
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
     <!--adding return function  -->
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
            <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-white display-4" href="filtering.php">RENT NOW</a></div>
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
                    <p class="mbr-text pb-3 mbr-fonts-style mbr-white align-left display-7">Sign up &amp; Login to rent today!</p>
                    <div class="mbr-section-btn align-left"><a class="btn btn-lg btn-white display-4">Rent Now !</a></div>
                </div>
            </div>
        </div>
    
    
</section>

<section class="cid-qIjLr2VMr0" id="content7-i">

    

    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-12 align-center">
                
                <h2 class="mbr-section-title align-center mbr-fonts-style mbr-bold display-2"><span style="font-weight: normal;">Finding the right place to rent quality and affordable vehicles is a challenge...</span></h2>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section article content1 cid-qIjLmYAeqy" id="content1-h">
    
     

    <div class="container">
        <div class="media-container-row">
            <div class="col-md-12">
                <p class="mbr-text m-0 mbr-fonts-style mbr-black display-7">Ranked #1 in Rental Car Customer Satisfaction, Ez Rental offers exceptional service and vehicles on every rental.&nbsp;<br><br>Join now and choose from luxury sedans and sports cars to SUVs, trucks, vans and more. No matter where your journey takes you, Hertz has thousands of locations in more than 150 countries, including 3,000 neighborhood locations in the U.S. Find your perfect vehicle today.<a href="#" class="text-primary">Learn More...</a></p>
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

<section class="features19 cid-qIjES4e5vV" id="features19-5">

    

    
    <div class="container">
        <h2 class="mbr-section-title align-left mbr-fonts-style display-2">
            Hottest rental deals of the season</h2>

        
        <div class="row justify-content-center align-items-start">
            
            <div class="card px-3 py-4 col-md-4">
                <div class="card-wrapper flip-card">
                    <div class="card-img">
                        <img src="assets/images/car-hero-363x142.png" alt="" title="">
                        <div class="img-text mbr-text mbr-fonts-style align-left mbr-white display-4">
                             Compact 25 USD Per Day</div>
                    </div>
                    <div class="card-box">
                        <h3 class="mbr-title mbr-fonts-style mbr-bold mbr-black display-5">
                            Compact Vehicles &nbsp;2/4 Door<br><br>(Chevrolet Spark or similar)<br><br></h3>
                        <p class="mbr-card-text mbr-fonts-style align-left display-7">4 Passengers
<br>  1 Large Suitcase, 1 Small Suitcase
<br>A Automatic Transmission
<br>  Air Conditioning
<br>  35 miles/gallon or better</p>
                        <div class="mbr-section-btn align-left"><a href="#" class="btn btn-md btn-black display-4">Rent</a></div>
                    </div>
                </div>
            </div>

            <div class="card px-3 py-4 col-md-4">
                <div class="card-wrapper flip-card">
                    <div class="card-img">
                        <img src="assets/images/fullsize2-600x300.jpg" alt="" title="">
                        <div class="img-text mbr-text mbr-fonts-style align-left mbr-white display-4">
                             Full Size 35 USD Per Day</div>
                    </div>
                    <div class="card-box">
                        <h3 class="mbr-title mbr-fonts-style mbr-bold mbr-black display-5">
                            Full Size Vehicles &nbsp;2/4 Door<br><br>(Chrystler 300 or similar)<br><br></h3>
                        <p class="mbr-card-text mbr-fonts-style align-left display-7">5 Passengers
<br>  2 Large Suitcases, 2 Small Suitcases
<br>A Automatic Transmission
<br>  Air Conditioning
<br>19 miles/gallon or better</p>
                        <div class="mbr-section-btn align-left"><a href="#" class="btn btn-md btn-black display-4">Rent</a></div>
                    </div>
                </div>
            </div>

            <div class="card px-3 py-4 col-md-4">
                <div class="card-wrapper flip-card">
                    <div class="card-img">
                        <img src="assets/images/yukon-220x128.jpg" alt="" title="">
                        <div class="img-text mbr-text mbr-fonts-style align-left mbr-white display-4">
                             Green 45 USD Per Day<br></div>
                    </div>
                    <div class="card-box">
                        <h3 class="mbr-title mbr-fonts-style mbr-bold mbr-black display-5">Fullsize SUV<br><br>(GMC Yukon or similar)<br><br></h3>
                        <p class="mbr-card-text mbr-fonts-style align-left display-7">7 Passengers
<br>  2 Large Suitcases, 2 Small Suitcases
<br>A Automatic Transmission
<br>  Air Conditioning
<br>  19 miles/gallon or better</p>
                        <div class="mbr-section-btn align-left"><a href="#" class="btn btn-md btn-black display-4">Rent</a></div>
                    </div>
                </div>
            </div>

            
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