<?php
include("_includes/config.php");
// session_start();
// if(!isset($_SESSION['id'])){
//     header("location:adminlogin.php");
// } 
if(isset($_POST['submitcourse']))
{
    $subtopicsub_name = $_POST['subtopicsub_name'];
    $maintopicId = $_POST['maintopicId'];
    $courseId = $_POST['courseId'];
    $subtopicId = $_POST['subtopicId'];
    $sql="insert into subtopic_sub(subtopicsub_name,subtopic_id,maintopic_id,course_id) values('$subtopicsub_name',$subtopicId,$maintopicId,$courseId)";
   // $sql="INSERT INTO `subtopic_sub`(`subtopicsub_name`,`subtopic_id,`maintopic_id`,`course_id`) VALUES ('$subtopicsub_name','$maintopicId','$courseId','$subtopicId')";
   echo $sql; 
   if (mysqli_query($conn, $sql)){
      echo "<script> alert ('New record has been added successfully !');</script>";
   }
    else {
      echo "<script> alert ('connection failed !');</script>".mysqli_error($conn);
   }
}
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>Marcks Training | subtopic FORM </title>

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
          <h1>subtopic Form</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">subtopic Form</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    <div class="row">
            <div class="col-md-12">
              <div class="card card-primary">

                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-sample" method="post" enctype="multipart/form-data">
                  <div class="card-body">
                      <div class="row">
                          <div class="col-md-6">
                            <div class="form-group col">
                            <label for="exampleInputEmail1">Course Name</label>
                              <select class="form-control" name="courseId" id="courseId" onchange="getmainTopic();">
                                <?php
                                $result=mysqli_query($conn,"select * from course order by course_id desc");
                                if(mysqli_num_rows($result)>0){
                                  while($row=mysqli_fetch_array($result)){
                                    ?>
                                    <option value="<?=$row['course_id'];?>"><?=$row['course_name'];?></option>
                                    <?php
                                  }
                                }
                                ?>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group col">
                                <label for="exampleInputEmail1">Mani Topic</label>
                                  <select class="form-control" name="maintopicId" id="maintopicId" onchange="getsubTopic();">
                                    
                                  </select>
                            </div>
                          </div>
                      </div>
                      <div class="row">
                      <div class="col-md-6">
                            <div class="form-group col">
                                <label for="exampleInputEmail1">subtopic Topic</label>
                                  <select class="form-control" name="subtopicId" id="subtopicId">
                                    
                                  </select>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group col">
                              <label for="exampleInputEmail1">Name</label>
                              <input type="text" class="form-control" value="" name="subtopicsub_name">
                            </div>
                          </div>
                      </div>
                    

                    <!-- /.card-body -->

                    <div class="card-footer">
                      <button type="submit" name="submitcourse" class="btn btn-primary">Submit</button>
                    </div>
                </form>
              </div>
              
            </div>
          </div>
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
