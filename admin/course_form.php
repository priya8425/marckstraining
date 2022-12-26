<?php
include("_includes/config.php");
// session_start();
// if(!isset($_SESSION['id'])){
//     header("location:adminlogin.php");
// } 
    if(isset($_POST['submit']))
    {
        $course_name = $_POST['course_name'];
        $course_description = $_POST['course_description'];
        $image = $_FILES['image']['name'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $path = "dist/img/".$image;
        move_uploaded_file($tmp_name,$path);
        $price = $_POST['price'];
        $instructor = $_POST['instructor'];
        $about_course = $_POST['about_course'];
        $paragraph = $_POST['paragraph'];
        $heading = $_POST['heading'];
        $paragraph1 = $_POST['paragraph1'];
        $second_heading = $_POST['second_heading'];
        $paragraph2 = $_POST['paragraph2'];
       
        
        $query = "INSERT INTO `course`(`course_name`,`course_description`,`image`,`price`,`instructor`,`about_course`,`paragraph`,`heading`,`paragraph1`,`second_heading`,`paragraph2`) VALUES ('$course_name','$course_description','$image','$price','$instructor','$about_course','$paragraph','$heading','$paragraph1','$second_heading','$paragraph2')";
        if (mysqli_query($conn, $query)){
          echo "<script> alert ('New record has been added successfully !');window.location='course.php'</script>";
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
  
  <title>Marcks Training | course FORM </title>

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
          <h1>course Form</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">course Form</li>
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
              <h3 class="card-title">course Form</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <form method="post" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Course Name</label>
                      <input type="text" class="form-control" name="course_name" placeholder="Enter Name">
                    </div>
                  </div>
                  <!-- /.col -->
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Course Description</label>
                      <input type="text" class="form-control" name="course_description" placeholder="Enter Name">
                    </div>
                  </div>
                </div>
                  <!-- /.col -->
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Image</label><span style="color:red;"></span>
                      <input type="file" name="image" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Price</label>
                      <input type="text" class="form-control" name="price" placeholder="Enter price">
                    </div>
                  </div>
                </div>
                <!-- /.row -->
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>instructor</label>
                      <input type="text" class="form-control" name="instructor" placeholder="Enter instructor Name">
                    </div>
                  </div>
                  <!-- /.col -->
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>About Course</label>
                      <input type="text" class="form-control" name="about_course" placeholder="Enter Name">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Paragraph</label>
                      <input type="text" class="form-control" name="paragraph" placeholder="Enter Name">
                    </div>
                  </div>
                  <!-- /.col -->
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Heading</label>
                      <input type="text" class="form-control" name="heading" placeholder="Enter Name">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Second Paragraph Of course</label>
                      <input type="text" class="form-control" name="paragraph1" placeholder="Enter Name">
                    </div>
                  </div>
                  <!-- /.col -->
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Second Heading Of course</label>
                      <input type="text" class="form-control" name="second_heading" placeholder="Enter Name">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Third Paragraph Of course</label>
                      <input type="text" class="form-control" name="paragraph2" placeholder="Enter Name">
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
