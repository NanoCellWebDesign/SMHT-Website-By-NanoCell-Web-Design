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
  <title>Badge</title>

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

</head>

<body class="animsition">
  <div class="page-wrapper">
    <?php
    include 'menues.php'
    ?>


    <!-- MAIN CONTENT-->
    <div class="main-content">
      <div class="section__content section__content--p30">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6">

              <div class="card">
                <div class="card-header">
                  <strong>Badges</strong>
                  <small>Use
                    <code>.badge</code> class within
                    <code>&lt;span&gt;</code> elements to create badges:
                  </small>
                </div>
                <div class="card-body">

                  <a href="#">News
                    <span class="badge badge-primary">5</span>
                  </a>
                  <br>
                  <a href="#">Comments
                    <span class="badge badge-warning">10</span>
                  </a>
                  <br>
                  <a href="#">Updates
                    <span class="badge badge-success">2</span>
                  </a>
                </div>
              </div>
              <!-- /# card -->


              <div class="card">
                <div class="card-header">
                  <strong>Labels</strong>
                </div>
                <div class="card-body">
                  <p class="text-muted m-b-15">Use the
                    <code>.label</code> class,&nbsp; followed by one of the six contextual classes
                    <code>.label-default</code>,
                    <code>.label-primary</code>,
                    <code>.label-success</code>,
                    <code>.label-info</code>,
                    <code>.label-warning</code> or
                    <code>.label-danger</code>, within a
                    <code>&lt;span&gt;</code> element to create a label:</p>

                    <h1>Example heading
                      <span class="badge badge-secondary">New</span>
                    </h1>
                    <h2>Example heading
                      <span class="badge badge-secondary">New</span>
                    </h2>
                    <h3>Example heading
                      <span class="badge badge-secondary">New</span>
                    </h3>
                    <h4>Example heading
                      <span class="badge badge-secondary">New</span>
                    </h4>
                    <h5>Example heading
                      <span class="badge badge-secondary">New</span>
                    </h5>
                    <h6>Example heading
                      <span class="badge badge-secondary">New</span>
                    </h6>
                  </div>
                </div>

              </div>
              <div class="col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <strong>Badges in Buttons</strong>
                  </div>
                  <div class="card-body">
                    <p class="text-muted m-b-15">Use the
                      <code>.badge</code> class within
                      <code>&lt;span&gt;</code> elements to create badges:</p>

                      <button type="button" class="btn btn-primary m-l-10 m-b-10">Primary
                        <span class="badge badge-light">7</span>
                      </button>
                      <button type="button" class="btn btn-success m-l-10 m-b-10">Success
                        <span class="badge badge-light">7</span>
                      </button>
                      <button type="button" class="btn btn-info m-l-10 m-b-10">Info
                        <span class="badge badge-light">7</span>
                      </button>
                      <button type="button" class="btn btn-warning m-l-10 m-b-10">Warning
                        <span class="badge badge-light">7</span>
                      </button>
                      <button type="button" class="btn btn-danger m-l-10 m-b-10">Danger
                        <span class="badge badge-light">7</span>
                      </button>
                    </div>
                  </div>

                  <div class="card">
                    <div class="card-header">
                      <strong>Labels</strong>
                    </div>
                    <div class="card-body">
                      <p class="text-muted m-b-15">Use the
                        <code>.label</code> class,&nbsp; followed by one of the six contextual classes
                        <code>.label-default</code>,
                        <code>.label-primary</code>,
                        <code>.label-success</code>,
                        <code>.label-info</code>,
                        <code>.label-warning</code> or
                        <code>.label-danger</code>, within a
                        <code>&lt;span&gt;</code> element to create a label:</p>

                        <span class="badge badge-primary">Primary</span>
                        <span class="badge badge-secondary">Secondary</span>
                        <span class="badge badge-success">Success</span>
                        <span class="badge badge-danger">Danger</span>
                        <span class="badge badge-warning">Warning</span>
                        <span class="badge badge-info">Info</span>
                        <span class="badge badge-light">Light</span>
                        <span class="badge badge-dark">Dark</span>


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
