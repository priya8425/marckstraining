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
          echo "<script> alert ('New record has been added successfully !');window.location='registration.php'</script>";
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
  <style>
    @media (min-width: 1025px) {
.h-custom {
height: 100vh !important;
}
}
  </style>
  
<style type="text/css">
.card-registration .select-input.form-control[readonly]:not([disabled]) {
font-size: 1rem;
line-height: 2.15;
padding-left: .75em;
padding-right: .75em;
}
.card-registration .select-arrow {
top: 13px;
}</style>
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
      <h1>Courses</h1>
    </div>
  </div>

  <!-- Contact -->

 
     
            <section class="h-100 bg-white">
              <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                  <div class="col">
                    <div class="card card-registration my-4">
                      <div class="row g-0">
                        <div class="col-xl-6 d-none d-xl-block">

                          <img src="images/contact_background.jpg"
                            alt="Sample photo" class="img-fluid"
                            style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem; height: 100%;" />
                        </div>
                        <div class="col-xl-6">
                          <div class="card-body p-md-5 text-black">
                            <h3 class="mb-5 text-uppercase">Student registration form</h3>

                            <div class="row">
                              <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                  <input type="text" id="form3Example1m" class="form-control form-control-lg" />
                                  <label class="form-label" for="form3Example1m">First name</label>
                                </div>
                              </div>
                              <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                  <input type="text" id="form3Example1n" class="form-control form-control-lg" />
                                  <label class="form-label" for="form3Example1n">Last name</label>
                                </div>
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                  <input type="text" id="form3Example1m1" class="form-control form-control-lg" />
                                  <label class="form-label" for="form3Example1m1">Mother's name</label>
                                </div>
                              </div>
                              <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                  <input type="text" id="form3Example1n1" class="form-control form-control-lg" />
                                  <label class="form-label" for="form3Example1n1">Father's name</label>
                                </div>
                              </div>
                            </div>

                            <div class="form-outline mb-4">
                              <input type="text" id="form3Example8" class="form-control form-control-lg" />
                              <label class="form-label" for="form3Example8">Address</label>
                            </div>

                            <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                              <h6 class="mb-0 me-4">Gender: </h6>

                              <div class="form-check form-check-inline mb-0 me-4">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender"
                                  value="option1" />
                                <label class="form-check-label" for="femaleGender">Female</label>
                              </div>

                              <div class="form-check form-check-inline mb-0 me-4">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender"
                                  value="option2" />
                                <label class="form-check-label" for="maleGender">Male</label>
                              </div>

                              <div class="form-check form-check-inline mb-0">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="otherGender"
                                  value="option3" />
                                <label class="form-check-label" for="otherGender">Other</label>
                              </div>

                            </div>

                            <div class="row">
                              <div class="col-md-6 mb-4">

                                <select class="select">
                                  <option value="1">State</option>
                                  <option value="2">Option 1</option>
                                  <option value="3">Option 2</option>
                                  <option value="4">Option 3</option>
                                </select>

                              </div>
                              <div class="col-md-6 mb-4">

                                <select class="select">
                                  <option value="1">City</option>
                                  <option value="2">Option 1</option>
                                  <option value="3">Option 2</option>
                                  <option value="4">Option 3</option>
                                </select>

                              </div>
                            </div>

                            <div class="form-outline mb-4">
                              <input type="text" id="form3Example9" class="form-control form-control-lg" />
                              <label class="form-label" for="form3Example9">DOB</label>
                            </div>

                            <div class="form-outline mb-4">
                              <input type="text" id="form3Example90" class="form-control form-control-lg" />
                              <label class="form-label" for="form3Example90">Pincode</label>
                            </div>

                            <div class="form-outline mb-4">
                              <input type="text" id="form3Example99" class="form-control form-control-lg" />
                              <label class="form-label" for="form3Example99">Course</label>
                            </div>

                            <div class="form-outline mb-4">
                              <input type="text" id="form3Example97" class="form-control form-control-lg" />
                              <label class="form-label" for="form3Example97">Email ID</label>
                            </div>

                            <div class="d-flex justify-content-end pt-3">
                              <button type="button" class="btn btn-light btn-lg">Reset all</button>
                              <button type="button" class="btn btn-warning btn-lg ms-2">Submit form</button>
                            </div>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
       
      
       
  


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