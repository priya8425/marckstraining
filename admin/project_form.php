<?php
include("_includes/config.php");
session_start();
if(!isset($_SESSION['id'])){
    header("location:adminlogin.php");
}
    if(isset($_POST['submit']))
    {
      $chkl2="";
      $icon="";
        $building_name = $_POST['building_name'];
        $flat = $_POST['flat'];
        $property = $_POST['property'];
        $price = $_POST['price'];
        $carpet_area = $_POST['carpet_area'];
        $builtup_area = $_POST['builtup_area'];
        $location = $_POST['location'];
        $description = $_POST['description'];
        $water_source= $_POST['water_source'];
        $furnishing = $_POST['radio2'];
        $amenities = $_POST['amenities'];
        foreach($amenities as $chkl1){$chkl2.= $chkl1.",";}
        $facing= $_POST['facing'];
        $power_backup = $_POST['radio1'];
        $age_of_construction = $_POST['age_of_construction'];

        $image1 = $_FILES['image1']['name'];
        $tmp_name = $_FILES['image1']['tmp_name'];
        $path = "dist/img/".$image1;
        move_uploaded_file($tmp_name,$path);

        $image2 = $_FILES['image2']['name'];
        $tmp_name = $_FILES['image2']['tmp_name'];
        $path = "dist/img/".$image2;
        move_uploaded_file($tmp_name,$path);

        $image3= $_FILES['image3']['name'];
        $tmp_name = $_FILES['image3']['tmp_name'];
        $path = "dist/img/".$image3;
        move_uploaded_file($tmp_name,$path);

        $image4 = $_FILES['image4']['name'];
        $tmp_name = $_FILES['image4']['tmp_name'];
        $path = "dist/img/".$image4;
        move_uploaded_file($tmp_name,$path);

        $features = "NO";

        $query = "INSERT INTO `property`(`building_name`, `property`, `price`, `carpet_area`, `builtup_area`, `location`, `water_source`, `furnishing`, `facing`, `power_backup`, `age_of_construction`, `amenities`,`description`,`image`,`image2`,`image3`,`image4`,`feature`,`flat`) VALUES ('$building_name','$property','$price','$carpet_area','$builtup_area','$location','$water_source','$furnishing','$facing','$power_backup','$age_of_construction','$chkl2','$description','$image1','$image2','$image3','$image4','$features','$flat')";
        if (mysqli_query($conn,$query)){
          echo "<script> alert ('New record has been added successfully !');</script>";
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
  
  <title>AS | PROJECT FORM </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
   <!-- Select2 -->
   <script src="plugins/select2/js/select2.full.min.js"></script>
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
   <!-- Select2 -->
   <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
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
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
            <h1>Project Form</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Project Form</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- SELECT2 EXAMPLE -->
          <div class="card card-default">
            <div class="card-header">
              <h3 class="card-title">Project Form</h3>

            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <form method="post" enctype="multipart/form-data">

              <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                    <label> Property Type</label>
                      <select class="select2" data-placeholder="Select a State" name="property" style="width: 100%;">
                      <option value="" selected disabled>Select</option>
                        <option value="New project">New Project</option>
                        <option value="resale">Resale</option>
                        <option value="rent">Rent</option>

                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Building Name</label>
                      <input type="text" name="building_name" class="form-control" placeholder="Enter Building Name ">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Carpet Area (sq.ft)</label>
                      <input type="text" name="carpet_area" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Built-up Area (sq.ft)</label>
                      <input type="text" name="builtup_area" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Location</label>
                      <input type="text" name="location" class="form-control">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Age of Construction</label>
                      <select class="select2" name="age_of_construction" data-placeholder="Age of Construction"
                        style="width: 100%;">
                        <option value="" selected disabled>Select</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>

                      </select>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Facing</label>
                      <input type="text" name="facing" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Price</label>
                      <input type="text" name="price" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Flat</label>
                      
                      <select class="select2" data-placeholder="Select a flat" name="flat" style="width: 100%;">
                      <option value="" selected disabled>Select</option>
                        <option value="1RK">1RK</option>
                        <option value="1BHK">1BHK</option>
                        <option value="2BHK">2BHK</option>
                        <option value="3BHK">3BHK</option>
                        <option value="4BHK">4BHK</option>

                      </select>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Power Backup</label>
                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" value="Yes" name="radio1" type="radio">
                          <label class="form-check-label">YES</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="No" name="radio1" type="radio">
                          <label class="form-check-label">NO</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Furnishing</label>
                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" value="Yes" name="radio2" type="radio">
                          <label class="form-check-label">YES</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="No" name="radio2" type="radio">
                          <label class="form-check-label">NO</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Water Source</label>
                      <input type="text" name="water_source" class="form-control">
                    </div>
                  </div>
                </div>


                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Aminities </label>
                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" value="Lift" name=amenities[] type="checkbox">
                          
                          <i class="fas fa-tram"></i>
                          
                          <!-- <i class=" nav-icon fa-solid fa-elevator"></i> -->
                          <label class="form-check-label">Lift</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Gymnasium" name=amenities[] type="checkbox">
                          
                          <i class="nav-icon fas fa-solid fa-dumbbell"></i>
                          <label class="form-check-label">Gymnasium</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Security" name=amenities[] type="checkbox">
                          
                          <i class="fas fa-user-lock"></i>
                          <label class="form-check-label">Security</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Kids Play Area" name=amenities[] type="checkbox">
                          <!-- <i class="fa-solid fa-arrow-up-from-water-pump"></i> -->
                         
                          <i class="fas fa-skating"></i>
                          <label class="form-check-label">Kids Play Area</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Swimming Pool" name=amenities[] type="checkbox">
                         
                          <i class="fas fa-swimmer"></i>
                          <label class="form-check-label">Swimming Pool</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Terrace garden" name=amenities[] type="checkbox">
                          
                          <i class="nav-icon fas fa-solid fa-building"></i>
                          <label class="form-check-label">Terrace garden</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label> </label>
                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" value="Club House" name="amenities[ ]"
                            type="checkbox">
                            <i class="fas fa-dice"></i>
                            <!-- <i class="nav-icon fas fa-solid fa-club"></i> -->
                          <label class="form-check-label">Club House</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="Cycling & Jogging Track" name="amenities[ ]" type="checkbox">
                          
                          <i class="fas fa-biking"></i>
                          <label class="form-check-label">Cycling & Jogging Track</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" name="amenities[ ]" value="Reserved Parking" type="checkbox">
                          
                          <i class='fas fa-parking'></i>
                          <label class="form-check-label">Reserved Parking</label>
                        </div>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" value="Kids Splash Pool" name=amenities[] type="checkbox">
                       
                        <i class='fas fa-bath'></i>
                        
                        <label class="form-check-label">Kids Splash Pool</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" value="Volleyball court" name=amenities[] type="checkbox">
                        
                        <i class="fas fa-volleyball-ball"></i>
                        
                        <label class="form-check-label">Volleyball court</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" value="Intercom Facility" name=amenities[] type="checkbox">
                        <i class="fas fa-newspaper"></i>
                         
                        <label class="form-check-label">Intercom Facility</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Image</label><span style="color:red;">(Only webp Format)</span>
                      <input type="file" name="image1" class="form-control"  accept=".webp">
                    </div>
                    <div class="form-group">
                      <label>Image</label><span style="color:red;">(Only webp Format)</span>
                      <input type="file" name="image2" class="form-control"  accept=".webp">
                    </div>
                    <div class="form-group">
                      <label>Image</label><span style="color:red;">(Only webp Format)</span>
                      <input type="file" name="image3" class="form-control"  accept=".webp">
                    </div>
                    <div class="form-group">
                      <label>Image</label><span style="color:red;">(Only webp Format)</span>
                      <input type="file" name="image4" class="form-control"  accept=".webp">
                    </div>
                  </div>
                  </div>
                  <div class="row">
                <div class="col-md-12 ">
                <label>Description</label>
                   <div class="form-group">
              <textarea id="summernote" name="description">
              
              </textarea>
            </div>
                    </div>
  </div>
                  <div class="card-footer">
                <button type="submit" name="submit" class="btn btn-primary" style="float: right;">Submit</button>
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
<!-- Select2 -->
<script src="plugins/select2/js/select2.full.min.js"></script>
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
<!-- Page specific script -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<script>
            let refs = {};
refs.imagePreviews = document.querySelector('#previews');
refs.fileSelector = document.querySelector('input[type=file]');

function addImageBox(container) {
  let imageBox = document.createElement("div");
  let progressBox = document.createElement("progress");
  imageBox.appendChild(progressBox);
  container.appendChild(imageBox);
  
  return imageBox;
}

function processFile(file) {
  if (!file) {
    return;
  }
  console.log(file);

  let imageBox = addImageBox(refs.imagePreviews);

  // Load the data into an image
  new Promise(function (resolve, reject) {
    let rawImage = new Image();

    rawImage.addEventListener("load", function () {
      resolve(rawImage);
    });

    rawImage.src = URL.createObjectURL(file);
  })
  .then(function (rawImage) {
    // Convert image to webp ObjectURL via a canvas blob
    return new Promise(function (resolve, reject) {
      let canvas = document.createElement('canvas');
      let ctx = canvas.getContext("2d");

      canvas.width = rawImage.width;
      canvas.height = rawImage.height;
      ctx.drawImage(rawImage, 0, 0);

      canvas.toBlob(function (blob) {
        resolve(URL.createObjectURL(blob));
      }, "image/webp");
    });
  })
  .then(function (imageURL) {
    // Load image for display on the page
    return new Promise(function (resolve, reject) {
      let scaledImg = new Image();

      scaledImg.addEventListener("load", function () {
        resolve({imageURL, scaledImg});
      });

      scaledImg.setAttribute("src", imageURL);
    });
  })
  .then(function (data) {
    // Inject into the DOM
    let imageLink = document.createElement("a");

    imageLink.setAttribute("href", data.imageURL);
    imageLink.setAttribute('download', `${file.name}.webp`);
    imageLink.appendChild(data.scaledImg);

    imageBox.innerHTML = "";
    imageBox.appendChild(imageLink);
  });
}

function processFiles(files) {
  for (let file of files) {
    processFile(file);
  }
}

function fileSelectorChanged() {
  processFiles(refs.fileSelector.files);
  refs.fileSelector.value = "";
}

refs.fileSelector.addEventListener("change", fileSelectorChanged);

// Set up Drag and Drop
function dragenter(e) {
  e.stopPropagation();
  e.preventDefault();
}

function dragover(e) {
  e.stopPropagation();
  e.preventDefault();
}

function drop(callback, e) {
  e.stopPropagation();
  e.preventDefault();
  callback(e.dataTransfer.files);
}

function setDragDrop(area, callback) {
  area.addEventListener("dragenter", dragenter, false);
  area.addEventListener("dragover", dragover, false);
  area.addEventListener("drop", function (e) { drop(callback, e); }, false);
}
setDragDrop(document.documentElement, processFiles);
            </script>
<script>
    $(function () {
      //Initialize Select2 Elements
      $('.select2').select2()

      //Initialize Select2 Elements
      $('.select2bs4').select2({
        theme: 'bootstrap4'
      })

      //Datemask dd/mm/yyyy
      $('#datemask').inputmask('dd/mm/yyyy', {
        'placeholder': 'dd/mm/yyyy'
      })
      //Datemask2 mm/dd/yyyy
      $('#datemask2').inputmask('mm/dd/yyyy', {
        'placeholder': 'mm/dd/yyyy'
      })
      //Money Euro
      $('[data-mask]').inputmask()

      //Date picker
      $('#reservationdate').datetimepicker({
        format: 'L'
      });

      //Date and time picker
      $('#reservationdatetime').datetimepicker({
        icons: {
          time: 'far fa-clock'
        }
      });

      //Date range picker
      $('#reservation').daterangepicker()
      //Date range picker with time picker
      $('#reservationtime').daterangepicker({
        timePicker: true,
        timePickerIncrement: 30,
        locale: {
          format: 'MM/DD/YYYY hh:mm A'
        }
      })
      //Date range as a button
      $('#daterange-btn').daterangepicker({
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf(
              'month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
        }
      )

      //Timepicker
      $('#timepicker').datetimepicker({
        format: 'LT'
      })

      //Bootstrap Duallistbox
      $('.duallistbox').bootstrapDualListbox()

      //Colorpicker
      $('.my-colorpicker1').colorpicker()
      //color picker with addon
      $('.my-colorpicker2').colorpicker()

      $('.my-colorpicker2').on('colorpickerChange', function (event) {
        $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
      })

      $("input[data-bootstrap-switch]").each(function () {
        $(this).bootstrapSwitch('state', $(this).prop('checked'));
      })

    })
    // BS-Stepper Init
    document.addEventListener('DOMContentLoaded', function () {
      window.stepper = new Stepper(document.querySelector('.bs-stepper'))
    })

    // DropzoneJS Demo Code Start
    Dropzone.autoDiscover = false

    // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
    var previewNode = document.querySelector("#template")
    previewNode.id = ""
    var previewTemplate = previewNode.parentNode.innerHTML
    previewNode.parentNode.removeChild(previewNode)

    var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
      url: "/target-url", // Set the url
      thumbnailWidth: 80,
      thumbnailHeight: 80,
      parallelUploads: 20,
      previewTemplate: previewTemplate,
      autoQueue: false, // Make sure the files aren't queued until manually added
      previewsContainer: "#previews", // Define the container to display the previews
      clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
    })

    myDropzone.on("addedfile", function (file) {
      // Hookup the start button
      file.previewElement.querySelector(".start").onclick = function () {
        myDropzone.enqueueFile(file)
      }
    })

    // Update the total progress bar
    myDropzone.on("totaluploadprogress", function (progress) {
      document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
    })

    myDropzone.on("sending", function (file) {
      // Show the total progress bar when upload starts
      document.querySelector("#total-progress").style.opacity = "1"
      // And disable the start button
      file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
    })

    // Hide the total progress bar when nothing's uploading anymore
    myDropzone.on("queuecomplete", function (progress) {
      document.querySelector("#total-progress").style.opacity = "0"
    })

    // Setup the buttons for all transfers
    // The "add files" button doesn't need to be setup because the config
    // `clickable` has already been specified.
    document.querySelector("#actions .start").onclick = function () {
      myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
    }
    document.querySelector("#actions .cancel").onclick = function () {
      myDropzone.removeAllFiles(true)
    }
    // DropzoneJS Demo Code End
  </script>
  <script>
    $(function () {
      // Summernote
      $('#summernote').summernote()

      // CodeMirror
      CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
        mode: "htmlmixed",
        theme: "monokai"
      });
    })
  </script>
   
</body>
</html>
