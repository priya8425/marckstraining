<?php
include('include/configure.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Marcks Training And IT Solutions- Courses</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/courses_styles.css">
<link rel="stylesheet" type="text/css" href="styles/courses_responsive.css">
<link rel="stylesheet" type="text/css" href="styles/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="super_container">
<?php 
  include("include/header.php");
  ?>

  <div class="home">
    
    <div class="home_background_container prlx_parent">
      <div class="home_background prlx" style="background-image:url(images/courses_background.jpg)"></div>
    </div>
    <div class="home_content">
      <h1>Courses</h1>
    </div>
  </div>

  <!-- Popular -->

  <div class="popular page_section">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="section_title text-center">
            <h1>Popular Courses</h1>
          </div>
        </div>
      </div>

      <div class="row course_boxes">
        <?php
        $sql=mysqli_query($conn,"Select * from courses");
        while($arr=mysqli_fetch_array($sql)){
        ?>
        <!-- Popular Course Item -->
        <div class="col-lg-4 course_box">
          <div class="card">
            <img class="card-img-top" src="admin/dist/img/background/<?php echo $arr['upload_icon'];?>">
            <div class="card-body text-center">
              <div class="card-title"><a href="courses.php"><?php echo $arr['course_name'];?></a></div>
              <div class="card-text"><?php echo $arr['description'];?></div>
            </div>
            <div class="price_box d-flex flex-row align-items-center">
              <!-- <div class="course_author_image">
                <img src="images/author.jpg" alt="https://unsplash.com/@mehdizadeh">
              </div> -->
              <div class="course_author_name"><?php echo $arr['instructor'];?> <span>Trainer</span></div>
              <div class="course_price d-flex flex-column align-items-center justify-content-center"><span><?php echo $arr['price'];?></span></div>
            </div>
          </div>
        </div>
        <?php } ?>
        <!-- Popular Course Item -->
        
      </div>
    </div>    
  </div>

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
                <div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-center">
                  <input id="newsletter_email" class="newsletter_email" type="email" placeholder="Email Address" required="required" data-error="Valid email is required.">
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
                <li class="footer_list_item"><a href="#">Courses</a></li>
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
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Designed By MTIS
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
<script src="plugins/easing/easing.js"></script>
<script src="js/courses_custom.js"></script>

</body>
</html>