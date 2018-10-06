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
  <title>Upload(s)</title>
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
        <div class="container"></div>
        <div class="row">
          <div class="col-12">
            <h2 class="title-1">Upload an image</h2>
            <div id="itemupload">
              <div class="row">
                <div class="col-12">

                  <form action="php/upload.php" method="post" enctype="multipart/form-data">
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="fileToUpload" class="custom-file-input" id="fileToUpload">
                        <label class="custom-file-label" for="customFile">Select an image</label>
                      </div>
                      <div class="input-group-append">
                        <button class="btn btn-outline-primary" type="submit" name="submit" id="fileToUploadBtn">Upload Image</button>
                      </div>
                    </div>

                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="itemupload">
          <h2 class="title-1">Uploaded images</h2>
          <div class="row">
                <?php
                $all_files = glob("../img/boxoffice/*.*");
                for ($i=0; $i<count($all_files); $i++)
                {
                  $image_name = $all_files[$i];
                  $img_name1 = explode('/', $image_name);
                  $img_name = explode('.', $img_name1[3]);
                  $upper_name = ucfirst($img_name[0]);
                  $supported_format = array('jpg','jpeg','png');
                  $ext = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
                  if (in_array($ext, $supported_format))
                  {
                    echo'<div class="col-12 col-sm-6 col-md-6 col-lg-3 pointer open-AddBookDialog" data-id="'.$image_name.'" data-toggle="modal" data-target="#mediumModal">
                    <div class="card">
                    <img class="card-img-top" src="'.$image_name.'" alt="'.$image_name.'">
                    <div class="card-footer">
                    <h5 class="card-title">'.$upper_name.'</h5>
                    </div>
                    </div>
                    </div>';

                  } else {
                    continue;
                  }
                }
                ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END PAGE CONTAINER-->

  <div class="modal hide" id="addBookDialog">
   <div class="modal-header">
      <button class="close" data-dismiss="modal">×</button>
      <h3>Modal header</h3>
    </div>
      <div class="modal-body">
          <p>some content</p>
          <input type="text" name="bookId" id="bookId" value=""/>
      </div>
  </div>


  <!-- modal medium -->
  <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">

        <form action="php/selection.php" method="get">
          <div class="modal-header">
            <h5 class="modal-title" id="mediumModalLabel">Image</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

            <input id="selImgText" name="img" class="form-control" type="text" placeholder="Readonly input here…" readonly>
            <br>
            <img id="selImg" src="" alt="">
            <br>


            <div class="form-group">
              <label for="exampleFormControlSelect1">What do you want do with your image?</label>
              <select name="mo" type="text" class="form-control" id="exampleFormControlSelect1">
                <option>Please Select</option>
                <option>Add to Gallery</option>
                <option>Add to Event</option>
                <option>Delete</option>
              </select>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Confirm</button>
          </div>
        </form>

      </div>
    </div>
  </div>
  <!-- end modal medium -->

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
<script src="js/custom.js"></script>

</body>

</html>
<!-- end document-->
