<?php
include("_includes/config.php");
// session_start();
// if(!isset($_SESSION['id'])){
//     header("location:adminlogin.php");
// } 

if(isset($_GET['delid'])){
  $id=mysqli_real_escape_string($conn,$_GET['delid']);
  $sql=mysqli_query($conn,"delete from trainers where id='$id'");
  if($sql=1){
    header("location:trainers.php");
  }
}

    if(isset($_POST['trainersedit1'])){
      $id= $_POST['id'];
      $image=$_FILES['image']['name'];
    $dnk=$_FILES['image']['tmp_name'];
    $loc="dist/img/".$image;
      move_uploaded_file($dnk,$loc);
      $trainer_name = $_POST['trainer_name'];
      $about = $_POST['about'];
      $experience = $_POST['experience'];
      
      $sql="UPDATE `trainers` SET `image`='$image',`trainer_name`='$trainer_name',`about`='$about',`experience`='$experience' WHERE id='$id'";
      if (mysqli_query($conn, $sql)){
       
        echo "<script>alert('Successfully Updated');</script>";
     } else {
        echo "<script> alert ('connection failed !');window.location.href='trainers.php'</script>";
     }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>Marcks Training | About</title>

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
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
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
   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>About</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">About</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">


              <div class="card">
                <div class="card-header" style="padding:0px;">
                  <h3 class="card-title" style="padding-top:25px; margin-left:10px;">About Us</h3>
                  <div class="card-tools my-3" style="text-align:end;">
                    <a class="btn btn-primary" href="about_form.php" data-tt="tooltip" title=""
                      data-original-title="Click here to Add project" style="margin-right:20px;">Add About</a>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                  <thead>
                      <tr>
                      <th>sr.no</th>
                    <th>Image</th>                   
                    <th>Trainer Name</th>
                    <th>About</th>
                    <th>Experience</th>
                    <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                  <?php     
                    $sql=mysqli_query($conn,"select * from  trainers");
                    $count=1;
                    while($arr=mysqli_fetch_array($sql)){
                    ?>
                  <tr>
                  <td><?php echo $count;?></td>
                    <td><img src="dist/img/<?php echo $arr['image'];?>"
                            style="height:150px; width:150px;"></td>
                    <td>
                    <?php echo $arr['trainer_name'];?>
                    </td>
                    <td>
                    <?php echo $arr['about'];?>
                    </td>
                    <td>
                    <?php echo $arr['experience'];?>
                    </td>
                        <td>
                       
                       <button  type="button" class="btn btn-primary btn-rounded btn-icon trainersedit btn-sm" data-toggle="modal" data-id='<?php echo $arr['id']; ?>'
                        style="color: aliceblue"> <i class="fas fa-pen"></i> </button>
                                                               
                        <a href="trainers.php?delid=<?php echo $arr['id'];?>"><button type="button"
                              class="btn btn-danger btn-md" style="color: aliceblue"> <i
                                class="fas fa-trash"></i></button></a>
                       
                        <!-- <a href="manual-attendance.php?delid=<?php echo $arr['id']; ?>"><button type="button" class="btn btn-primary btn-rounded btn-icon"  style="color: aliceblue"> <i class="fas fa-eye"></i> </button></a> -->

                                                         
                                               </td> 
                       
                       
    </tr>     
    
                                                 
    <?php
   $count++; } 
    ?>
                    </tbody>

                  </table>

                  <div class="modal fade closemaual" id="dnkModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
      </div>
      <form method="post" enctype="multipart/form-data">
      <div class="modal-body body4">
      </div>
    <div class="modal-footer">
    <button type="button" class="btn-close btn btn-secondary" data-dismiss="modal">Close</button>
      <button type="submit" class="btn btn-primary" name="trainersedit1">Save changes</button>
    </div>
  </form>
  </div>
  </div>
</div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
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
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="plugins/jszip/jszip.min.js"></script>
  <script src="plugins/pdfmake/pdfmake.min.js"></script>
  <script src="plugins/pdfmake/vfs_fonts.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- Page specific script -->
  <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
    <script>
          $(document).ready(function(){
          $('.trainersedit').click(function(){
            let dnkk2 = $(this).data('id');

            $.ajax({
            url: 'check.php',
            type: 'post',
            data: {dnkk2: dnkk2},
            success: function(response4){ 
              $('.body4').html(response4);
              $('#dnkModal3').modal('show'); 
            }
          });
          });


          });
          </script>
</body>

</html>