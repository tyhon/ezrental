<html>

<head>
  <title>Inventory Input</title>
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
<?php session_start(); ?>
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

<section class="cid-rSGemtvQVk" id="content7-f">
<?php
require 'connection.php';
$conn = Connect();

function GetImageExtension($imagetype) {
    if(empty($imagetype)) return false;
    
    switch($imagetype) {
        case 'assets/img/cars/bmp': return '.bmp';
        case 'assets/img/cars/gif': return '.gif';
        case 'assets/img/cars/jpeg': return '.jpg';
        case 'assets/img/cars/png': return '.png';
        default: return false;
    }
}
$car_make = $conn->real_escape_string($_POST['car_make']);
$car_model = $conn->real_escape_string($_POST['car_model']);
$car_color = $conn->real_escape_string($_POST['car_color']);
$car_size = $conn->real_escape_string($_POST['car_size']);
$car_tagplate = $conn->real_escape_string($_POST['car_tagplate']);
$car_price = $conn->real_escape_string($_POST['car_price']);
$car_status = "yes";
if (!empty($_FILES["uploadedimage"]["name"])) {
    $file_name=$_FILES["uploadedimage"]["name"];
    $temp_name=$_FILES["uploadedimage"]["tmp_name"];
    $imgtype=$_FILES["uploadedimage"]["type"];
    $ext= GetImageExtension($imgtype);
    $imagename=$_FILES["uploadedimage"]["name"];
    $target_path = "assets/images/cars/".$imagename;
    if(move_uploaded_file($temp_name, $target_path)) {
      $query = "INSERT into car(car_make,car_model,car_color,car_size,car_tagplate,car_img,price,car_status) VALUES('" . $car_make . "','" . $car_model . "','" . $car_color . "','" . $car_size . "','" . $car_tagplate . "','".$target_path."','" . $car_price . "','" . $car_status ."')";
        $success = $conn->query($query);  
    } 
}
$query1 = "SELECT car_ID from car where car_tagplate = '$car_tagplate'";
$result = mysqli_query($conn, $query1);
$rs = mysqli_fetch_array($result, MYSQLI_BOTH);
$car_id = $rs['car_ID'];
$query2 = "INSERT into manage(man_username,car_ID) values('" . $_SESSION['login_client'] . "','" . $car_id ."')";
$success2 = $conn->query($query2);
if (!$success){ ?>
<div class="container">
	<div class="jumbotron" style="text-align: center;">
        Car with the same vehicle number already exists!
<?php echo $conn->error; 
?>
<br><br>
        <a href="inventory_input.php" class="btn btn-default"> Go Back </a>
</div>
<?php	
}
else {
    header("location: inventory_input.php"); //Redirecting 
}
$conn->close();
?>
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