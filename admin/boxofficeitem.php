<?php
include "../php/db_conn.inc.php";

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
  <!-- Required meta tags-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="au theme template">
  <meta name="author" content="Hau Nguyen">
  <meta name="keywords" content="au theme template">

  <!-- Title Page-->
  <title>Box Office</title>
  <link rel="icon" href="images/icon/logo-mini.png">

  <!-- Fontfaces CSS-->
  <link href="css/font-face.css" rel="stylesheet" media="all">
  <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
  <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
  <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

  <!-- Bootstrap CSS-->
  <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

  <!-- Vendor CSS-->
  <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
  <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
  <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
  <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
  <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
  <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
  <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

  <!-- Main CSS-->
  <link href="css/theme.css" rel="stylesheet" media="all">
  <link href="css/admin.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
  <div class="page-wrapper">
    <?php
    include 'menues.php';
    ?>

    <!-- MAIN CONTENT-->
    <div class="main-content">
      <div class="section__content section__content--p30">
        <div class="container-fluid">

          <div class="row">
            <div class="col-12"style="margin-bottom:30px;">
              <h2 class="title-1">Current Events</h2>
              <div class="row">
                <div class="col-md-6">
                <div class="card">
                  <img class="card-img-top" src="../<?php echo $EventImg;?>" alt="Image Not Found">
                </div>
              </div>

              <div class="col-md-6">
                <div class="">
                  <h4 class=""><?php echo $EventName;?></h4>
                  <p class=""><?php echo $EventDate;?></p>
                  <br>
                  <span class=""><?php echo $EventDsc;?></span>
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
          </div>

        </div>

      </div>
    </div>
  </div>
  <!-- END PAGE CONTAINER-->

</div>

<!-- Jquery JS-->
<script src="vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="vendor/bootstrap-4.1/popper.min.js"></script>
<script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS       -->
<script src="vendor/slick/slick.min.js">
</script>
<script src="vendor/wow/wow.min.js"></script>
<script src="vendor/animsition/animsition.min.js"></script>
<script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
</script>
<script src="vendor/counter-up/jquery.waypoints.min.js"></script>
<script src="vendor/counter-up/jquery.counterup.min.js">
</script>
<script src="vendor/circle-progress/circle-progress.min.js"></script>
<script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="vendor/chartjs/Chart.bundle.min.js"></script>
<script src="vendor/select2/select2.min.js">
</script>

<!-- Main JS-->
<script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
