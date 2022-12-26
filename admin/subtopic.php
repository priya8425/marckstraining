<?php
include("_includes/config.php");
// session_start();
// if(!isset($_SESSION['id'])){
//     header("location:adminlogin.php");
// } 

if(isset($_GET['delsubtopic_id'])){
  $subtopic_id=mysqli_real_escape_string($conn,$_GET['delsubtopic_id']);
  $sql=mysqli_query($conn,"delete from subtopic where subtopic_id='$subtopic_id'");
  if($sql=1){
      header("location:subtopic.php");
  }
  }

  if(isset($_POST['subtopicedit1'])){
   
      $subtopic_id=$_POST['subtopic_id'];
      $description = $_POST['description'];
      $image=$_FILES['image']['name'];
     $dnk=$_FILES['image']['tmp_name'];
     $loc="../../dist/img/credit/".$image;
       move_uploaded_file($dnk,$loc);
       $name = $_POST['name'];
      
       $sql="UPDATE `subtopic` SET `description`='$description',`image`='$image',`name`='$name' WHERE id='$id'";
       if (mysqli_query($conn, $sql)){
        
         echo "<script>alert('Successfully Updated');</script>";
      } else {
         echo "<script> alert ('connection failed !');window.location.href='trainning.php'</script>";
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
              <h1>course</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Subtopic</li>
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
                  <h3 class="card-title" style="padding-top:25px; margin-left:10px;">course</h3>
                  <div class="card-tools my-3" style="text-align:end;">
                    <a class="btn btn-primary" href="subtopic_form.php" data-tt="tooltip" title=""
                      data-original-title="Click here to Add project" style="margin-right:20px;">Add subtopic</a>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                  <thead>
                      <tr>
                      <th>course id</th>
                                      <th>Course Name</th>
                                      <th>Maintopic Id</th>
                                      <th>Maintopic Name</th>
                                      <th>Subtopic Name</th>
                                      <th>content</th>
                                    <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                                <?php     
                                  $sql=mysqli_query($conn,"select subtopic.subtopic_name,course.course_id,course.course_name,maintopic.maintopic_name,maintopic.maintopic_id from subtopic inner join course on subtopic.course_id=course.course_id inner join maintopic on subtopic.course_id=maintopic.course_id");
                                  
                                  while($arr=mysqli_fetch_array($sql)){
                                  ?>
                                        <tr>
                                        
                                        <td><?php echo $arr['course_id'];?></td>
                                        <td><?php echo $arr['course_name'];?></td>
                                        <td><?php echo $arr['maintopic_id'];?></td>
                                        <td><?php echo $arr['maintopic_name'];?></td> 
                                        <td><?php echo $arr['subtopic_name'];?></td>
                                        <td>
                    <?php
                        $maintopicCount=1;
                        $cid=$arr['course_id'];
                        $resMaintopic=mysqli_query($conn,"select * from maintopic where course_id=$cid");
                        if(mysqli_num_rows($resMaintopic)>0){
                          ?><ul style="list-style-type:none;"><?php
                          while($rowmaintopic=mysqli_fetch_array($resMaintopic)){
                            ?>
                            <li><?=$maintopicCount.".".$rowmaintopic['maintopic_name'];?></li> 
                                                      
                            <?php
                              $subtopicCount=1;
                              $maintopicId=$rowmaintopic['maintopic_id'];
                              $resSubtopic=mysqli_query($conn,"select * from subtopic where maintopic_id=$maintopicId and course_id=$cid");
                              if(mysqli_num_rows($resSubtopic)>0){
                                ?><ul style="list-style-type:none;"><?php
                                while($rowsubtopic=mysqli_fetch_array($resSubtopic)){
                                  ?>
                                  <li style="text-indent:20px; line-height:8px;"><?=$maintopicCount.".".$subtopicCount." ".$rowsubtopic['subtopic_name']?></li>
                                  
                                    <?php
                                    $subsubtopicCount=1;
                                    $subTopicId=$rowsubtopic['subtopic_id'];
                                    $resSubSubtopic=mysqli_query($conn,"select * from subtopic_sub where subtopic_id=$subTopicId and maintopic_id=$maintopicId and course_id=$cid");
                                    if(mysqli_num_rows($resSubSubtopic)>0){
                                      ?><ul style="list-style-type:none;"> <?php
                                      while($rowsubSubtopic=mysqli_fetch_array($resSubSubtopic)){
                                        ?>
                                        <p><li style="text-indent:30px; line-height:8px;"><?=$maintopicCount.".".$subtopicCount.".".$subsubtopicCount." ".$rowsubSubtopic['subtopicsub_name'];?></li></p>                            
                                      <?php
                                      $subsubtopicCount++;
                                    }
                                    ?></ul><?php
                                  }
                                  
                                  $subtopicCount++;
                                }
                                ?></ul><?php
                              }
                              $maintopicCount++;
                            }
                            ?></ul><?php                           
                          }                          
                          ?>
                                  </td>
                                    <td>
                       <button  type="button" class="btn btn-primary btn-rounded btn-icon subtopicedit btn-sm" data-toggle="modal" data-id='<?php echo $arr['subtopic_id']; ?>'
                        style="color: aliceblue"> <i class="fas fa-pen"></i> </button>
                                                               
                        <a href="subtopic.php?delsubtopic_id=<?php echo $arr['subtopic']; ?>"><button type="button" class="btn btn-danger btn-rounded btn-icon btn-sm"  style="color: aliceblue"> <i class="fas fa-trash"></i> </button></a> </td>         
    </tr>     
    
                                                 
    <?php
    } 
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
      <button type="submit" class="btn btn-primary" name="subtopicedit1">Save changes</button>
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
          $('.subtopicedit').click(function(){
            let dnkk8 = $(this).data('id');

            $.ajax({
            url: 'check.php',
            type: 'post',
            data: {dnkk8: dnkk8},
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