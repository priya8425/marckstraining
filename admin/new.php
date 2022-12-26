<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Advanced form elements</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="plugins/bs-stepper/css/bs-stepper.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="plugins/dropzone/min/dropzone.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
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
              <form method="post">


                <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                 <label>Property ID</label>
                 <input type="text" class="form-control" placeholder="Enter Name">
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                      <label> Building Name</label>
                      <input type="text" class="form-control" placeholder="Enter Name">
                    </div>
                    </div>
                    </div>

                <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                 <label>Property</label>
                      <select class="select2" multiple="multiple" data-placeholder="Select a State"
                        style="width: 100%;">
                        <option value="select" disabled>select</option>
                        <option value="project">New Project</option>
                        <option value="resale">Resale</option>
                        <option value="rent">Rent</option>

                      </select>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                    <label>Carpet Area(sq-ft)</label>
                      <input type="text" class="form-control" placeholder="Enter Area">
                    </div>
                    </div>
                    </div>

                    <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                  <label>Location</label>
                      <input type="text" class="form-control" placeholder="Enter location">
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                    <label>Built-up Area(sq-ft)</label>
                      <input type="tel" class="form-control" placeholder="Enter contact number">
                    </div>
                    </div>
                    </div>

             <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                  <label>Age of Construction</label>
                      <select class="select2" multiple="multiple" data-placeholder="Age of Construction"
                        style="width: 100%;">
                        <option value="select" disabled>select</option>
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
                    <div class="col-md-6">
                    <div class="form-group">
                      <label>Facing</label>
                      <input type="text" class="form-control" placeholder="Enter Facing">
                    </div>
                    </div>
                    </div>

                    <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                  <label>Price</label>
                      <input type="text" class="form-control" placeholder="Enter location">
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                    <label>Image</label>
                      <input type="file" class="form-control" placeholder="Enter contact number">
                    </div>
                    </div>
                    </div>

       
                    <div class="row">
                    <div class="col-md-6">
                <label>Power Backup</label>
                  <div class="form-group">
                  <div class="form-check">
                  <input class="form-check-input" type="checkbox">
                  <label class="form-check-label">YES</label>
                  </div>
                  <div class="form-check">
                  <input class="form-check-input" type="checkbox">
                  <label class="form-check-label">NO</label>
                  </div>
                  </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                    <label>Furnishing</label>
                  <div class="form-check">
                  <input class="form-check-input" type="checkbox">
                  <label class="form-check-label">YES</label>
                  </div>
                  <div class="form-check">
                  <input class="form-check-input" type="checkbox">
                  <label class="form-check-label">NO</label>
                  </div>
                  </div>
                    </div>
                    </div>


                <div class="row">
                <div class="col-md-6">
                <label>Description</label>
                   <div class="form-group">
              <textarea id="summernote">
                Place <em>some</em> <u>text</u> <strong>here</strong>
              </textarea>
            </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                    <label>Amenities</label>
                  <div class="form-group">         
<div class="row">
<div class="col-sm-4">
<div class="form-group">
<div class="form-check">
<input class="form-check-input" type="checkbox">
<label class="form-check-label">Children Play Area</label>
</div>
<div class="form-check">
<input class="form-check-input" type="checkbox">
<label class="form-check-label">Gym</label>
</div>
<div class="form-check">
<input class="form-check-input" type="checkbox">
<label class="form-check-label">High Tech Lift</label>
</div>
</div>
</div>
<div class="col-sm-7">

<div class="form-group">
<div class="form-check">
<input class="form-check-input" type="checkbox">
<label class="form-check-label">Wifi-Connectivity</label>
</div>
<div class="form-check">
<input class="form-check-input" type="checkbox">
<label class="form-check-label">Swimming Pool</label>
</div>
<div class="form-check">
<input class="form-check-input" type="checkbox">
<label class="form-check-label">Terrace garden</label>
</div>
</div>
</div>
</div>
  </div>
 </div>
 
</div>
</form>
</div>
</div>
</div>
</section>



  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Select2 -->
  <script src="plugins/select2/js/select2.full.min.js"></script>
  <!-- Bootstrap4 Duallistbox -->
  <script src="plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
  <!-- InputMask -->
  <script src="plugins/moment/moment.min.js"></script>
  <script src="plugins/inputmask/jquery.inputmask.min.js"></script>
  <!-- date-range-picker -->
  <script src="plugins/daterangepicker/daterangepicker.js"></script>
  <!-- bootstrap color picker -->
  <script src="plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Bootstrap Switch -->
  <script src="plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
  <!-- BS-Stepper -->
  <script src="plugins/bs-stepper/js/bs-stepper.min.js"></script>
  <!-- dropzonejs -->
  <script src="plugins/dropzone/min/dropzone.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- Page specific script -->
  <script src="plugins/summernote/summernote-bs4.min.js"></script>
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