<?php
include "php/db_conn.inc.php";

$EventId = $_GET['item'];
$sql = "SELECT * FROM boxoffice WHERE Event_Id='$EventId'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) < 1){
} else {
  if($row = mysqli_fetch_assoc($result)){
    $EventName = $row['Event_Name'];
    $EventImg = $row['Event_Img'];
    $EventPrice = $row['Event_Cost'];
    $EventDate = $row['Event_Date'];
    $EventDsc = $row['Event_Dsc'];
  }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Sawbridgeworth Memorial Hall</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/logo.jpg" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="vendor/npm-asset/ionicons/dist/css/ionicons.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/boxoffice.css" rel="stylesheet">

</head>

<body id="body">

  <!--==========================
  Top Bar
  ============================-->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="fa fa-envelope-o"></i> <a href="mailto:book.smh@gmail.com">book.smh@gmail.com</a>
        <i class="fa fa-phone"></i> 07952 465739
      </div>
      <div class="social-links float-right">
        <a href="https://www.facebook.com/smht.org/" class="facebook"><i class="fa fa-facebook"></i></a>
      </div>
    </div>
  </section>

  <!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <!--<h1><a href="#body" class="scrollto">Reve<span>al</span></a></h1>-->
        <a href="./index.html#body"><img src="img/logo.jpg" alt="" title="" /></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="./index.html#body">Home</a></li>
          <li><a href="#">Box Office</a></li>
          <li><a href="websitewrapper.html">Diary/Booking</a></li>
          <li><a href="./index.html#about">About Us</a></li>
          <li><a href="gallery.html">Gallery</a></li>
          <li><a href="./index.html#team">Trustees</a></li>
          <li><a href="#contact">Contact</a></li>


          <li class="menu-has-children"><a href="">Activities/Parties</a>
            <ul>
              <li><a href="#childrensparties">Childrens Parties</a></li>
              <li><a href="#">Daytime Leisure Activites</a></li>
              <li><a href="#">Regular Activites</a></li>
              <li><a href="#">SMHT Jazz Club</a></li>
              <li><a href="#">SMHT Sawbo Cinema</a></li>
              <li><a href="#">Outdoor Cinema</a></li>
            </ul>
          </li>

          <li class="menu-has-children"><a href="">Venue</a>
            <ul>
              <li><a href="#">Main Hall</a></li>
              <li><a href="#">Small Hall</a></li>
              <li><a href="#">Stage</a></li>
              <li><a href="#">Kitchen</a></li>
              <li><a href="#">Bar Area</a></li>
            </ul>
          </li>

        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
  Boxoffice Section
  ============================-->

  <section id="boxofficeitem">
    <div class="container">
      <div class="section-header">
        <h2>Box Office More information</h2>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="card">
            <img class="card-img-top" src="<?php echo $EventImg;?>" alt="Image Not Found">
          </div>
        </div>

        <div class="col-md-6">
          <div class="">
            <h4 class=""><?php echo $EventName;?></h4>
            <p class=""><?php echo $EventDate;?></p>
            <br>
            <p class=""><?php echo $EventDsc;?></p>
            <hr>

          </div>
          <form>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">£</span>
                <span class="input-group-text"><?php echo $EventPrice;?></span>
                <span class="input-group-text">X</span>
              </div>
              <input type="text" class="form-control" value="1" placeholder="" aria-label="" aria-describedby="basic-addon1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>

      </div>
    </div>
  </section>
  <!-- #boxoffice -->

</body>

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- JavaScript Libraries -->
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/jquery/jquery-migrate.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/superfish/hoverIntent.js"></script>
<script src="lib/superfish/superfish.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/isotope/isotope.pkgd.min.js"></script>
<script src="lib/magnific-popup/magnific-popup.min.js"></script>
<script src="lib/sticky/sticky.js"></script>
<script src="vendor/npm-asset/ionicons/dist/ionicons.js"></script>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<!-- Contact Form JavaScript File -->
<script src="contactform/contactform.js"></script>

<!-- Template Main Javascript File -->
<script src="js/main.js"></script>

</body>
</html>
