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
  <link href="/css/admin.css" rel="stylesheet" media="all">

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
          <div id="boxoffice">
            <?php
            if(isset($_GET['img'])){
              echo '<div class="row">';
            }else{
              echo '<div class="row noshow">';
            }
            ?>
            <div class="col-12">
              <h2 class="title-1">Add Event</h2>
            </div>
            <?php
            echo '<div class="col-md-4">
            <div class="container-fluid">
            <img style="width:100%; height:100%;" src="'.$_GET['img'].'" class="">
            </div>
            </div>';

            echo'<div class="col-md-8">
            <form action="php/addevent.inc.php" method="post">
            <div class="form-row">
            <div class="form-group col-md-6">
            <label>Event Name</label>
            <input name="evntName" type="text" class="form-control" id="" placeholder="Event Name">
            </div>
            <div class="form-group col-md-6">
            <label>Event Image</label>
            <input name="evntImg" type="text" class="form-control" id="" value="'.$_GET['img'].'" readonly>
            </div>
            </div>

            <div class="form-group">
            <label>Event Description</label>
            <textarea name="evntDsc" class="form-control" id="" placeholder="Event Description" rows="3"></textarea>
            </div>
            <div class="form-row">
            <div class="form-group col-md-6">
            <label>Event Cost</label>
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">£</span>
            </div>
            <input name="evntCost" type="text" class="form-control" placeholder="Event Cost">
            </div>
            </div>
            <div class="form-group col-md-3">
            <label for="exampleFormControlInput1">Event Date</label>
            <input name="evntDate" type="text" class="form-control" id="datepicker" placeholder="Select...">
            </div>
            <div class="form-group col-md-3">
            <button style="margin-top:33px; width:100%;" class="btn btn-outline-primary" type="submit">Add Event</button>
            </div>
            </div>
            </form>';
            ?>
          </div>
        </div>

        <br>
        <br>
        <br>

        <div class="row">
          <div class="col-12">
            <h2 class="title-1">Current Events</h2>
            <div class="row">
              <?php
              include "../php/db_conn.inc.php";

              $sql = "SELECT * FROM boxoffice";
              $result = mysqli_query($conn, $sql);

              if(mysqli_num_rows($result) < 1){
              } else {
                while($row = $result->fetch_assoc()) {
                  $EventId = $row['Event_Id'];
                  $EventName = $row['Event_Name'];
                  $EventImg = $row['Event_Img'];
                  $EventPrice = $row['Event_Price'];
                  $EventDate = $row['Event_Date'];
                  echo'<div class="col-3">
                  <div class="card pointer open-BoxOfficeModalLink" data-toggle="modal" data-target="#mediumModal">
                  <img class="card-img-top" src="../'.$EventImg.'" alt="Image Not Found">
                  <div class="card-body">
                  <h5 class="card-title">'.$EventName.'</h5>
                  <p class="card-text">'.$EventDate.'</p>
                  </div>
                  <div class="card-footer">
                  <a href="boxofficeitem.php?item='.$EventId.'" class="btn btn-primary">Show More</a>
                  </div>
                  </div>
                  </div>';
                }
              }
              ?>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
</div>
</div>
<!-- END PAGE CONTAINER-->

<!-- modal medium -->
<div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <form action="php/boxofficeselection.php" method="get">
        <div class="modal-header">
          <h5 class="modal-title" id="mediumModalLabel">Event Item</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="exampleFormControlSelect1">What do you want do with your event item?</label>
            <select name="mo" type="text" class="form-control" id="exampleFormControlSelect1">
              <option>Please Select</option>
              <option>Edit</option>
              <option>Delete</option>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary">Confirm</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- end modal medium -->

</div>

<!-- Jquery JS-->
<script src="vendor/jquery-3.2.1.min.js"></script>
<script src="vendor/jquery-ui.min.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<!-- Bootstrap JS-->
<script src="vendor/bootstrap-4.1/popper.min.js"></script>
<script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS       -->
<script src="vendor/slick/slick.min.js"></script>
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
<script src="vendor/select2/select2.min.js"></script>

<!-- Main JS-->
<script src="js/main.js"></script>
<script>
$( function() {
  $( "#datepicker" ).datepicker();
} );
</script>
</body>

</html>
<!-- end document-->
