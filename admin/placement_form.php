<?php
include("_includes/config.php");
// session_start();
// if(!isset($_SESSION['id'])){
//     header("location:adminlogin.php");
// } 
    if(isset($_POST['submit']))
    {
        $date = $_POST['date'];
        $company_name = $_POST['company_name'];
        $tech = $_POST['tech'];
        $location = $_POST['location'];
        $placed = $_POST['placed'];
        $query = "INSERT INTO `placement`(`date`,`company_name`,`tech`,`location`,`placed`) VALUES ('$date','$company_name','$tech','$location','$placed')";
        if (mysqli_query($conn, $query)){
          echo "<script> alert ('New record has been added successfully !');window.location='placement.php'</script>";
       } else {
          echo "<script> alert ('connection failed !');</script>";
       }
    }
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>Marcks Training | Placement FORM </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <?php
  include("_includes/header.php");
  include("_includes/sidebar.php");
   ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">    
          <h1>Placement Form</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Placement Form</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <!-- SELECT2 EXAMPLE -->
          <div class="card card-default">
            <div class="card-header">
              <h3 class="card-title">Placement Form</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <form method="post" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Date Of Drive</label>
                      <input type="date" class="form-control" name="date" placeholder="">
                    </div>

                  </div>
                  <!-- /.col -->
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Company Name</label>
                      <input type="text" class="form-control" name="company_name" placeholder="Enter company_name">
                    </div>

                  </div>
                </div>
                  <!-- /.col -->
                  <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Technology</label>
                      <input type="text" class="form-control" name="tech" placeholder="">
                    </div>

                  </div>
                  <!-- /.col -->
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Location</label>
                      <input type="text" class="form-control" name="location" placeholder="Enter location">
                    </div>

                  </div>
                </div>
                <!-- /.row -->
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Placed</label>
                      <input type="text" class="form-control" name="placed" placeholder="">
                    </div>

                  </div>
                  <!-- /.col -->
                  
                </div>


                <!-- /.form-group -->
                <button type="submit" name="submit" class="btn btn-primary" style="float: right;">Submit</button>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
          </form>
        </div>
        <!-- /.card-body -->

  <!-- /.container-fluid -->
  </section>

  
  <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php

include("_includes/footer.php");
 ?>
 

  <!-- Control Sidebar -->  
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
