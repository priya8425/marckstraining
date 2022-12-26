
<?php
include("_includes/config.php");
// session_start();
// if(!isset($_SESSION['id'])){
//     header("location:adminlogin.php");
//  } 
 if(isset($_GET['delid'])){
  $id=mysqli_real_escape_string($conn,$_GET['delid']);
  $sql=mysqli_query($conn,"delete from property where id='$id'");
  if($sql=1){
      header("location:rent.php");
  }
  }
  if(isset($_POST['rentedit1'])){
    $id=$_POST['propertyid'];
    $building_name = $_POST['building_name'];
    $flat = $_POST['flat'];
    $location = $_POST['location'];
    $builtup_area = $_POST['builtup_area'];
    $carpet_area = $_POST['carpet_area'];
    $property = $_POST['property'];
   
    $sql="UPDATE `property` SET `building_name`='$building_name',`flat`='$flat',`location`='$location',`builtup_area`='$builtup_area',`carpet_area`='$carpet_area',`property`='$property' WHERE id='$id'";
    if (mysqli_query($conn, $sql)){
      // header("location:new_project.php");
      echo "<script>alert('Successfully Updated');</script>";
   } else {
      echo "<script> alert ('connection failed !');window.location.href='rent.php'</script>";
   }
  }
  
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>AS | RENT</title>

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
              <h1>Rent</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Rent</li>
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
                <div class="card-header" style="padding-top:0px;">
                  <h3 class="card-title" style="padding-top:30px;margin-left:10px;">List of Rent</h3>
                  <div class="card-tools my-3" style="text-align:end;">
                    <a class="btn btn-primary" href="project_form.php" data-tt="tooltip" title=""
                      data-original-title="Click here to Add project" style="margin-right:20px;">Add Rent</a>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                  <thead>
                      <tr>
                        <th>PID</th>
                        <th>Building Name</th>
                        <th>Flat</th>
                        <th>Location</th>
                        <th>Build-up Area</th>
                        <th>Carpet Area</th>
                        <th>Type</th>
                        <th>Action</th>

                      </tr>
                    </thead>
                    <tbody>
                    <?php     
    $sql=mysqli_query($conn,"select * from property where property='rent'");
    while($arr=mysqli_fetch_array($sql)){
    ?>
                      <tr>
                        <td>
                          <?php echo $arr['property_id'];?>
                        </td>
                        <td>
                          <?php echo $arr['building_name'];?>
                        </td>
                        <td>
                          <?php echo $arr['flat'];?>
                        </td>
                        <td>
                          <?php echo $arr['location'];?>
                        </td>
                        <td>
                          <?php echo $arr['builtup_area'];?>
                        </td>
                        <td>
                          <?php echo $arr['carpet_area'];?>
                        </td>
                        <td>
                          <?php echo $arr['property'];?>
                        </td>  
                        <td>
                       
                       <button  type="button" class="btn btn-primary btn-rounded btn-icon rentedit btn-sm" data-toggle="modal" data-id='<?php echo $arr['id']; ?>'
                        style="color: aliceblue"> <i class="fas fa-pen"></i> </button>
                                                               
                        <a href="rent.php?delid=<?php echo $arr['id']; ?>"><button type="button" class="btn btn-danger btn-rounded btn-icon btn-sm"  style="color: aliceblue"> <i class="fas fa-trash"></i> </button></a>
                       
                        <a href="../info.php?id=<?php echo $arr['id'];?>"><button type="button" class="btn btn-primary btn-rounded btn-icon btn-sm"  data-id='<?php echo $arr['id']; ?>' style="color: aliceblue"> <i class="fas fa-eye"></i> </button></a>
                                     
                                   
                                                         
                                               </td>               
    </tr>     
    
                                                 
    <?php
    } 
    ?>
                    </tbody>

                  </table>

                  <div class="modal fade closemaual" id="dnkModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
      </div>
      <form method="post">
      <div class="modal-body body2">
      </div>
    <div class="modal-footer">
    <button type="button" class="btn-close btn btn-secondary" data-dismiss="modal">Close</button>
      <button type="submit" class="btn btn-primary" name="rentedit1">Save changes</button>
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
          $('.rentedit').click(function(){
            let dnkk = $(this).data('id');

            $.ajax({
            url: 'check.php',
            type: 'post',
            data: {dnkk: dnkk},
            success: function(response2){ 
              $('.body2').html(response2);
              $('#dnkModal1').modal('show'); 
            }
          });
          });


          });
          </script>
</body>

</html>