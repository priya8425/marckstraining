<?php
include('include/configure.php');
if(isset($_POST['submit']))
    {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $mode_of_training = $_POST['mode_of_training'];
        $state = $_POST['state'];
        
        $query = "INSERT INTO `registration`(`first_name`,`last_name`, `email`, `phone`, `mode_of_training`, `state`) VALUES ('$first_name','$last_name','$email','$phone','$mode_of_training','$state')";
        if (mysqli_query($conn, $query)){
          echo "<script> alert ('New record has been added successfully !');window.location='course_schedule.php'</script>";
       } else {
          echo "<script> alert ('connection failed !');</script>";
       }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Marcks Training And IT Solutions- Contact</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="styles/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href=
"https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" />
  
     <!-- jQuery library file -->
     <script type="text/javascript" 
     src="https://code.jquery.com/jquery-3.5.1.js">
     </script>
  
      <!-- Datatable plugin JS library file -->
     <script type="text/javascript" src=
"https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js">
     </script>
  <style>
    @media (min-width: 1025px) {
.h-custom {
height: 100vh !important;
}
}
  </style>
  <script type="text/javascript"
src="//code.jquery.com/jquery-1.9.1.js">
</script>
<link rel="stylesheet"
type="text/css"
href="/css/result-light.css">

<script type="text/javascript"
src=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js">
</script>
<link rel="stylesheet"
type="text/css"
href=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<link rel="stylesheet"
type="text/css"
href=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>

<div class="super_container">
<?php 
  include("include/header.php");
  ?>
  
  <!-- Home -->

  <div class="home">
    <div class="home_background_container prlx_parent">
      <div class="home_background prlx" style="background-image:url(images/contact_background.jpg)"></div>
    </div>
    <div class="home_content">
      <h1>Courses</h1>
    </div>
  </div>

  <!-- Contact -->

  <div class="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <h3>Course Schedule</h3>
          <hr>
          This is a page description
          <hr>
          
          <br>
          <h5>The MTIS Software Training Institute of mumbai, India offers multiple training schedules to meet our student’s needs.  Most of our students already have careers, work obligations, children etc., and our software training classes are designed to work well within these lifestyles.</h5>
          <br>
          <br>
          <input class="form-control" id="myInput" type="text" placeholder="Search.." style="width:120px; float:right;">
            <br>
            <table class="table table-bordered table-striped" style="margin-top:20px;" id="tableID" class="display">
              <thead style="background-color: #ffc40c;">
                <tr>
                  <th>Course</th>
                  <th>Faculty</th>
                  <th>Date</th>
                  <th>Time</th>
                  <th>Meeting ID & Passcode:112233</th>
                </tr>
              </thead>
              <tbody id="myTable">
             
                  
                <?php     
                $sql=mysqli_query($conn,"select * from course_schedule");
               
                while($arr=mysqli_fetch_array($sql)){
                ?>
                <tr>
                  <td><?php echo $arr['course_name'];?></td>
                  <td>
                    <?php echo $arr['faculty_name'];?>
                    
                  </td>
                  <td>
                   <?php echo $arr['date'];?>
                  </td>
                   <td>
                   <?php echo $arr['time'];?>
                  </td>
                  <td>
                    <a href="#">
                      <div style="height:100%;width:100%">
                      Get Link
                      </div>
                    </a>
                  </td>
                  
                </tr>
                <?php }  ?>
              </tbody>
            </table>
         
        </div>
          <div class="col-lg-1"></div>
          <div class="col-lg-4">
          <div class="about">
                <div class="about_title">Join Courses</div>
                        <p class="about_text">MTIS is a leading Software Training Institute providing software training, project                  guidance, IT consulting & corporate training.</p> 

                  <div class="contact_info" style="margin-top:-1px;">
                      <h3>Registration Info</h3>
                    <form method="post">
                        <div class="form-outline mb-4">
                          <label class="form-label" for="form3Example1q">First Name*</label>
                        <input type="text" id="form3Example1q" placeholder="Enter Your Name" name="first_name"  class="form-control" />
                        
                      </div>
                      <div class="form-outline mb-4">
                          <label class="form-label" for="form3Example1q">Last Name*</label>
                        <input type="text" id="form3Example1q" placeholder="Enter Your Last Name"  name="last_name" class="form-control" />
                        
                      </div>
                      <div class="form-outline mb-4">
                          <label class="form-label" for="form3Example1q">Email*</label>
                        <input type="Email" id="form3Example1q" placeholder="Enter Your Email"  name="email"  class="form-control" />
                        
                      </div>
                      <div class="form-outline mb-4">
                          <label class="form-label" for="form3Example1q">Phone*</label>
                          <input type="number" id="form3Example1q" placeholder="Enter Your Mobile Number"  name="phone"                         class="form-                control" />
                        
                      </div>

                      <div class="row">
                
                        <div class="col-md-12 mb-4">
                          <div class="form-outline mb-4">
                            <label class="form-label" for="form3Example1q">Mode OF Training*</label>
                            <select class="form-control" style="height:34px; width:100%;"  name="mode_of_training">
                              <option >Online</option>
                              <option >Offline</option>
                              <option >Other</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example1q">State*</label>
                        <input type="text" id="form3Example1q" placeholder="Enter State" name="state"  class="form-control" />
                      
                      </div>
                      <div class="row">
                        <?php

                        $sql="select * from course";
                        $result=mysqli_query($conn,$sql);
                        ?>
                        <div class="col-md-12 mb-4">
                          <div class="form-outline mb-4">
                            <label class="form-label" for="form3Example1q">Course*</label>
                            
                            <select class="form-control" style="height:34px; width:100%;">
                            <option value="1" >select</option>
                            <?php
                            while($row=mysqli_fetch_assoc($result)){
                            ?>
                              <option value="2" ><?php echo $row['course_name']?></option>
                              <?php } ?>
                            </select>
                          
                          </div>
                        </div>
                        
                      </div>

                      <button type="submit" name="submit" class="btn btn-warning btn-lg mb-1">Submit</button>

                    </form>
       
                  </div>

                </div>

          </div>
        </div>

      </div>
                </div>
                </div>
      <!-- Google Map -->

     

  <!-- Footer -->

  <footer class="footer">
    <div class="container">
      
      <!-- Newsletter -->

      <div class="newsletter">
        <div class="row">
          <div class="col">
            <div class="section_title text-center">
              <h1>Subscribe to newsletter</h1>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col text-center">
            <div class="newsletter_form_container mx-auto">
              <form action="post">
                <div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-                     content-center">
                  <input id="newsletter_email" class="newsletter_email" type="email" placeholder="Email Address"                        required="required" data-error="Valid email is required.">
                  <button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">Subscribe</button>
                </div>
              </form>
            </div>
          </div>
        </div>

      </div>

      <!-- Footer Content -->

      <div class="footer_content">
        <div class="row">

          <!-- Footer Column - About -->
          <div class="col-lg-3 footer_col">

            <!-- Logo -->
            <div class="logo_container">
              <div class="logo">
                <img src="images/mtis.png" alt="">
                <!-- <span>course</span> -->
              </div>
            </div>

            <p class="footer_about_text">MTIS is a leading Software Training Institute providing software training, project guidance, IT consulting & corporate training.</p>

          </div>

          <!-- Footer Column - Menu -->

          <div class="col-lg-3 footer_col">
            <div class="footer_column_title">Menu</div>
            <div class="footer_column_content">
              <ul>
                <li class="footer_list_item"><a href="index.php">Home</a></li>
                <li class="footer_list_item"><a href="about.php">About Us</a></li>
                <li class="footer_list_item"><a href="courses.php">Courses</a></li>
                <li class="footer_list_item"><a href="training.php">Training</a></li>
                <li class="footer_list_item"><a href="event.php">Event</a></li>
                <li class="footer_list_item"><a href="contact.php">Contact</a></li>
              </ul>
            </div>
          </div>

          <!-- Footer Column - Usefull Links -->

          <div class="col-lg-3 footer_col">
            <div class="footer_column_title">Usefull Links</div>
            <div class="footer_column_content">
              <ul>
                <li class="footer_list_item"><a href="#">Testimonials</a></li>
                <li class="footer_list_item"><a href="#">FAQ</a></li>
                <li class="footer_list_item"><a href="#">Campus Pictures</a></li>
                <li class="footer_list_item"><a href="#">Tuitions</a></li>
              </ul>
            </div>
          </div>

          <!-- Footer Column - Contact -->

          <div class="col-lg-3 footer_col">
            <div class="footer_column_title">Contact</div>
            <div class="footer_column_content">
              <ul>
                <li class="footer_contact_item">
                  <div class="footer_contact_icon">
                    <img src="images/placeholder.svg" alt="https://www.flaticon.com/authors/lucy-g">
                  </div>
                  T-09, 3rd Floor, Haware Centurion Mall, Sector-19A, Seawoods, NaviMumbai
                </li>
                <li class="footer_contact_item">
                  <div class="footer_contact_icon">
                    <img src="images/smartphone.svg" alt="https://www.flaticon.com/authors/lucy-g">
                  </div>
                  9930067580, 9029941077
                </li>
                <li class="footer_contact_item">
                  <div class="footer_contact_icon">
                    <img src="images/envelope.svg" alt="https://www.flaticon.com/authors/lucy-g">
                  </div>marckstech@gmail.com
                </li>
              </ul>
            </div>
          </div>

        </div>
      </div>

      <!-- Footer Copyright -->

      <div class="footer_bar d-flex flex-column flex-sm-row align-items-center">
        <div class="footer_copyright">
          <span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |Designed By MTIS
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
        </div>
        <div class="footer_social ml-sm-auto">
          <ul class="menu_social">
            <!-- <li class="menu_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li> -->
            <li class="menu_social_item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
            <li class="menu_social_item"><a href="#"><i class="fab fa-instagram"></i></a></li>
            <li class="menu_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li class="menu_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
          </ul>
        </div>
      </div>

    </div>
  </footer>

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<!-- <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script> -->
<script src="plugins/easing/easing.js"></script>
<script src="js/contact_custom.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});

</script>
<script>
  $(document).ready(function() {
  
  /* To hide column 2 and 3 */
  $('#tableID').DataTable( {
      "columnDefs": [
          {
              "targets": [ 2 ],
              "visible": false,
              "searchable": false
          },
          {
              "targets": [ 3 ],
              "visible": false
          }
      ]
  } );
} );
      
    </script>
</body>
</html>