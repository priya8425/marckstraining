<?php
include('include/configure.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Marcks Training And IT Solutions</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<link rel="stylesheet" type="text/css" href="styles/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
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
<!-- JavaScript for adding
slider for multiple images
shown at once-->


</head>
<body>

<div class="super_container">
<?php 
  include("include/header.php");
  ?>
	<!-- popup for sign up form -->
 <div id="myModal1" class="modal fade">
			<div class="modal-dialog">
			    <div class="modal-content">
			        <!-- <div class="modal-header" style="padding: 0px;">
			             -->
			            
			           <!--  </div> -->
			            <div class="modal-body" style="position: relative;;padding: 0px;">
			            	<button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="border-radius: 50%;  top: 4px;  position: absolute;  padding: 2px 5px;   background-color: blanchedalmond; right: 0">&times;</button>
			              <img src="images/addpop.png" style="margin:0; width: 100%;">
			            </div>
			        </div>
			    </div>
		</div> 
<!-- //popup for sign up form -->

	<!-- Menu -->
	<!-- Header -->
	
	
	<!-- Home -->

	<div class="home">

		<!-- Hero Slider -->
		<div class="hero_slider_container" style="height:520px;">
			<div class="hero_slider owl-carousel">
			<?php
					$sql=mysqli_query($conn,"Select * from bg_image");
					while($arr=mysqli_fetch_array($sql)){
					?>
				<!-- Hero Slide -->
				<div class="hero_slide">
					<div class="hero_slide_background" style="background-image:url(admin/dist/img/<?php echo $arr['image'];?>)"></div>
					<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
						<div class="hero_slide_content text-center">
							<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Get your <span>Education</span> today!</h1>
						</div>
					</div>
				</div>
				
				<!-- Hero Slide -->
				
				<?php } ?>
			</div>

			<div class="hero_slider_left hero_slider_nav trans_200"><span class="trans_200">prev</span></div>
			<div class="hero_slider_right hero_slider_nav trans_200"><span class="trans_200">next</span></div>
		</div>

	</div>

	<div class="hero_boxes" style="margin-top:300px;">
		<div class="hero_boxes_inner">
			<div class="container">
				<div class="row">

					<div class="col-lg-4 hero_box_col">
						<div class="hero_box d-flex flex-row align-items-center justify-content-start">
							<img src="images/earth-globe.svg" class="svg" alt="">
							<div class="hero_box_content">
								<h2 class="hero_box_title">Online Courses</h2>
								<a href="courses.php" class="hero_box_link">view more</a>
							</div>
						</div>
					</div>

					<div class="col-lg-4 hero_box_col">
						<div class="hero_box d-flex flex-row align-items-center justify-content-start">
							<img src="images/ourpro.png" class="svg" alt="">
							<div class="hero_box_content">
								<h2 class="hero_box_title">Our Projects</h2>
								<a href="projects.php" class="hero_box_link">view more</a>
							</div>
						</div>
					</div>

					<div class="col-lg-4 hero_box_col">
						<div class="hero_box d-flex flex-row align-items-center justify-content-start">
							<img src="images/professor.svg" class="svg" alt="">
							<div class="hero_box_content">
								<h2 class="hero_box_title">Our Trainers</h2>
								<a href="teachers.php" class="hero_box_link">view more</a>
							</div>
						</div>
					</div>

				</div>
			</div>
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
					$sql=mysqli_query($conn,"Select * from course limit 6");
					while($arr=mysqli_fetch_array($sql)){
					?>
				<!-- Popular Course Item -->
				<div class="col-lg-4 course_box mt-4" >
					<div class="card">
						<img class="card-img-top" src="admin/dist/img/<?php echo $arr['image'];?>" style="height:40vh;" 							alt="https://unsplash.com/@kellybrito">
						<div class="card-body text-center">
							<div class="card-title"><a href="course.php?course_id=<?php echo $arr['course_id']?>"><?php echo $arr['course_name'];?>							</a></div>
							<div class="card-text"><?php echo $arr['course_description'];?></div>
						</div>
						<div class="price_box d-flex flex-row align-items-center">
							<!-- <div class="course_author_image">
								<img src="images/author.jpg" alt="https://unsplash.com/@mehdizadeh">
							</div> -->
							<div class="course_author_name"><?php echo $arr['instructor'];?></div>
							<div class="course_price d-flex flex-column align-items-center justify-content-center"><?php echo 										$arr['price'];?></div>
						</div>
					</div>
				</div>
				
				<!-- Popular Course Item -->
				<?php } ?>

				<!-- Popular Course Item -->
				
			</div>
		</div>		
	</div>

	<!-- Register -->

	<div class="register">

		<div class="container-fluid">
			
			<div class="row row-eq-height">
				<div class="col-lg-6 nopadding">
					
					<!-- Register -->

					<div class="register_section d-flex flex-column align-items-center justify-content-center">
						<div class="register_content text-center">
							<h1 class="register_title">Register here & get discount of <span>50%</span> for the selected courses.</h1>
							<p class="register_text">Create your free account now and get immediate access to online courses and webinar invites.
							                         GET ONLINE COURSES & ATTEND WEBINARS FOR FREE REGISTER NOW</p>
							<div class="button button_1 register_button mx-auto trans_200"><a href="#">register now</a></div>
						</div>
					</div>

				</div>

				<div class="col-lg-6 nopadding">
					
					<!-- Search -->

					<div class="search_section d-flex flex-column align-items-center justify-content-center">
						<div class="search_background" style="background-image:url(images/search_background.jpg);"></div>
						<div class="search_content text-center">
							<h1 class="search_title">Search for your course</h1>
							<form id="search_form" class="search_form" action="post">
								<input id="search_form_name" class="input_field search_form_name" type="text" placeholder="Course Name" required="required" data-error="Course name is required.">
								<input id="search_form_category" class="input_field search_form_category" type="text" placeholder="Category">
								<input id="search_form_degree" class="input_field search_form_degree" type="text" placeholder="Degree">
								<button id="search_submit_button" type="submit" class="search_submit_button trans_200" value="Submit">search course</button>
							</form>
						</div> 
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- Services -->
	
	<div class="services page_section">
		
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Our Services</h1>
					</div>
				</div>
			</div>

			<div class="row services_row">
			<?php
						$sql=mysqli_query($conn,"Select * from home_page");
						while($arr=mysqli_fetch_array($sql)){
						?>
				<div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
					<div class="icon_container d-flex flex-column justify-content-end">
					<img src="admin/dist/img/<?php echo $arr['image'];?>" alt="">
					</div>
					<h3><?php echo $arr['service_name'];?></h3>
					<p><?php echo $arr['service_content'];?></p>
				</div>

				<?php } ?>
				
			</div>
		</div>
	</div>

	<!-- Testimonials -->

	<div class="testimonials page_section">
		<!-- <div class="testimonials_background" style="background-image:url(images/testimonials_background.jpg)"></div> -->
		<div class="testimonials_background_container prlx_parent">
			<div class="testimonials_background prlx" style="background-image:url(images/test3.jpg)"></div>
		</div>
		<div class="container">

			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>What our students say</h1>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					
					<div class="testimonials_slider_container">

						<!-- Testimonials Slider -->
						<div class="owl-carousel owl-theme testimonials_slider">
						
							<!-- Testimonials Item -->
							<div class="owl-item">
								<div class="testimonials_item text-center">
									<div class="quote">“</div>
									<p class="testimonials_text">Great stuff, very comprehensive materials . Lectures are so clean, elaborate and to the point. Trainer was so resourceful, knowledgeable and seasoned. It was fun and refreshing to understand the concepts explained with simple real live examples.</p>
									<div class="testimonial_user">
										<div class="testimonial_image mx-auto">
											<img src="images/t5.jpg" alt="">
										</div>
										<div class="testimonial_name">Ishan Trivedi</div>
										<div class="testimonial_title">Graduate Student</div>
									</div>
								</div>
							</div>

							<!-- Testimonials Item -->
							<div class="owl-item">
								<div class="testimonials_item text-center">
									<div class="quote">“</div>
									<p class="testimonials_text">Great stuff, very comprehensive materials . Lectures are so clean, elaborate and to the point. Trainer was so resourceful, knowledgeable and seasoned. It was fun and refreshing to understand the concepts explained with simple real live examples.</p>
									<div class="testimonial_user">
										<div class="testimonial_image mx-auto">
											<img src="images/t5.jpg" alt="">
										</div>
										<div class="testimonial_name">Ishan Trivedi</div>
										<div class="testimonial_title">Graduate Student</div>
									</div>
								</div>
							</div>
							<div class="owl-item">
								<div class="testimonials_item text-center">
									<div class="quote">“</div>
									<p class="testimonials_text">Great stuff, very comprehensive materials . Lectures are so clean, elaborate and to the point. Trainer was so resourceful, knowledgeable and seasoned. It was fun and refreshing to understand the concepts explained with simple real live examples.</p>
									<div class="testimonial_user">
										<div class="testimonial_image mx-auto">
											<img src="images/t5.jpg" alt="">
										</div>
										<div class="testimonial_name">Ishan Trivedi</div>
										<div class="testimonial_title">Graduate Student</div>
									</div>
								</div>
							</div>

						</div>
						
					</div>
				</div>
			</div>

		</div>
	</div>
	
	<!-- Events -->

	<div class="events page_section">
		<div class="container">
			
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Upcoming Events</h1>
						<br>
						<h2>No upcoming events for now</h2>
					</div>
				</div>
			</div>
			
			<div class="event_items">

				<!-- Event Item -->
				<!-- <div class="row event_item">
					<div class="col">
						<div class="row d-flex flex-row align-items-end">

							<div class="col-lg-2 order-lg-1 order-2">
								<div class="event_date d-flex flex-column align-items-center justify-content-center">
									<div class="event_day">07</div>
									<div class="event_month">January</div>
								</div>
							</div>

							<div class="col-lg-6 order-lg-2 order-3">
								<div class="event_content">
									<div class="event_name"><a class="trans_200" href="#">Student Festival</a></div>
									<div class="event_location">Grand Central Park</div>
									<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor.</p>
								</div>
							</div>

							<div class="col-lg-4 order-lg-3 order-1">
								<div class="event_image">
									<img src="images/event_1.jpg" alt="https://unsplash.com/@theunsteady5">
								</div>
							</div>

						</div>	
					</div>
				</div> -->

				<!-- Event Item -->
				<!-- <div class="row event_item">
					<div class="col">
						<div class="row d-flex flex-row align-items-end">

							<div class="col-lg-2 order-lg-1 order-2">
								<div class="event_date d-flex flex-column align-items-center justify-content-center">
									<div class="event_day">07</div>
									<div class="event_month">January</div>
								</div>
							</div>

							<div class="col-lg-6 order-lg-2 order-3">
								<div class="event_content">
									<div class="event_name"><a class="trans_200" href="#">Open day in the Univesrsity campus</a></div>
									<div class="event_location">Grand Central Park</div>
									<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor.</p>
								</div>
							</div>

							<div class="col-lg-4 order-lg-3 order-1">
								<div class="event_image">
									<img src="images/event_2.jpg" alt="https://unsplash.com/@claybanks1989">
								</div>
							</div>

						</div>	
					</div>
				</div> -->

				<!-- Event Item -->
				<!-- <div class="row event_item">
					<div class="col">
						<div class="row d-flex flex-row align-items-end">

							<div class="col-lg-2 order-lg-1 order-2">
								<div class="event_date d-flex flex-column align-items-center justify-content-center">
									<div class="event_day">07</div>
									<div class="event_month">January</div>
								</div>
							</div>

							<div class="col-lg-6 order-lg-2 order-3">
								<div class="event_content">
									<div class="event_name"><a class="trans_200" href="#">Student Graduation Ceremony</a></div>
									<div class="event_location">Grand Central Park</div>
									<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor.</p>
								</div>
							</div>

							<div class="col-lg-4 order-lg-3 order-1">
								<div class="event_image">
									<img src="images/event_3.jpg" alt="https://unsplash.com/@juanmramosjr">
								</div>
							</div>

						</div>	
					</div>
				</div> -->

			</div>
				
		</div>
	</div>

	<!-- container class for bootstrap card-->


<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="margin-bottom: 30px; margin-top: -15px;">
	<?php
	$sql=mysqli_query($conn,"Select * from course ");
	while($arr=mysqli_fetch_array($sql)){
		$data[]=$arr;
	}
	//print_r($data);
	$is_active = true; 
	$i=0;
	?>
	  <div class="carousel-inner">
		<?php
		foreach($data as $course){
			if ($i % 4 == 0){?>
			<div class="carousel-item <?php if ($is_active) echo ' active'?>">
			<?php } ?>
				<div class="col-sm-3">
					<div class="card" style="border:1px solid;">
				<img class="d-block w-100" src="admin/dist/img/<?=$course['image'];?>" alt="First slide">
				</div>
				</div>
			<?php
			if (($i+1) % 4 == 0 || $i == count($data)-1){?>
			</div>
			<?php }
		$i++;
	if ($is_active) $is_active = false;

		}
		?>
	  
	  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



	<!-- Footer -->

	<footer class="footer" >
	
			<div class="footer_content">
				<div class="row" style="margin-top:-100px !important;">

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
<script>
$(document).ready(function () {
 $("#myModal1").modal('show');
  });
  function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>






<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>

</body>
</html>