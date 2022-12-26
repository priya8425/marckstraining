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
          echo "<script> alert ('New record has been added successfully !');window.location='interview_preparation.php'</script>";
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

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="styles/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="super_container">

  <!-- Header -->
  <?php 
  include("include/header.php");
  ?>
  <!-- Home -->

  <div class="home">
    <div class="home_background_container prlx_parent">
      <div class="home_background prlx" style="background-image:url(images/contact_background.jpg)"></div>
    </div>
    <div class="home_content">
      <h1>Trainers Profile</h1>
    </div>
  </div>

  <!-- Contact -->

  <div class="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <h3> Trainers Profile</h3>
          <hr>
          "If you can't explain it simply, you don't understand it well enough. ~Albert Einstein
          <hr>
          
          <br>
  <h2>Mostly Asked Interview Questions </h2>
 
  <ul class="nav nav-pills"  style="font-size:15px;">
    <li class="active"><a data-toggle="pill" href="#home">Home</a></li>
    <li><a data-toggle="pill" href="#menu1">Menu 1</a></li>
    <li><a data-toggle="pill" href="#menu2">Menu 2</a></li>
    <li><a data-toggle="pill" href="#menu3">Menu 3</a></li>
  </ul>
  
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
    <h4>Android</h4>
    <h4>Python</h4>
    <h4>core java</h4>
   
      <br>
     
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Android</h3>
      <br>
      <ul  style="font-size:15px;">
      <li>1) What is Android? ...</li>
      <li>2) Who is the founder of Android? ...</li>
      <li>3) Explain the Android application Architecture. ...</li>
      <li>4) What are the code names of android? ...</li>
      <li>5) What are the advantages of Android? ...</li>
      <li>6) Does android support other languages than java? ...</li>
      <li>7) What are the core building blocks of android? ...</li>
      <li>8) What is activity in Android? ...</li>
      </ul>
    </div> 
    <div id="menu2" class="tab-pane fade">
      <h3>Python</h3>
      <br>
        <ul  style="font-size:15px;">
        <li>1. What is Python? ...</li>
        <li>2. What are the benefits of using Python language as a tool in the present scenario? ...</li>
        <li>3. Which sorting technique is used by sort () and sorted () functions of python? ...</li>
        <li>4. Differentiate between List and Tuple? ...</li>
        <li>5. How memory management is done in Python? ...</li>
        <li>6. What is PEP 8? ...</li>
        <li>7. Is Python a compiled language or an interpreted language? ...</li>
        </ul>
    </div>
    <div id="menu3" class="tab-pane fade">
    <h3>core java</h3>
      <br>
     <ul  style="font-size:15px;">
        <li>What is Java?</li>
        <li>Define Object in Java?</li>
        <li>What is typecasting?</li>
        <li>How many types of operators are available in Java?</li>
        <li>What are the bitwise operators in Java?</li>
        <li>List out the control statements in Java?</li>
        <li>Describe in brief OOPs concepts?</li>
        <li>What is a static variable?</li>
        <li>What is the usage of this keyword in Java?</li>
        <li>Can we have virtual functions in Java?</li>
    </ul>
    </div>
  </div>

		<!-- row -->
        
         
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
                              <option value="1" >Online</option>
                              <option value="2">Offline</option>
                              <option value="3">Other</option>
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

</body>
</html>