<?php
include('include/configure.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Marcks Training And IT Solutions- Training</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/teachers_styles.css">
<link rel="stylesheet" type="text/css" href="styles/teachers_responsive.css">
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
			<div class="home_background prlx" style="background-image:url(images/teachers_background.jpg)"></div>
		</div>
		<div class="home_content">
			<h1>Training</h1>
		</div>
	</div>

	<!-- Teachers -->

	<!-- Become -->

	<div class="become">
		<div class="container">
					<?php
						$sql=mysqli_query($conn,"Select * from trainning");
						while($arr=mysqli_fetch_array($sql)){
						?>
			<div class="row row-eq-height">
						
				<div class="col-lg-6 ">
							
					<div class="become_title">
						<h1><?php echo $arr['name'];?></h1>
					</div>
					<p class="become_text">
					 <?php echo $arr['description'];?></p>
				</div>

				<div class="col-lg-6 order-1 order-lg-2">
					<div class="become_image">
					<img src="admin/dist/img/credit/<?php echo $arr['image'];?>" alt="">
					</div>
				</div>
				
			</div>
			<?php } ?>
		</div>
	</div>
		
		<!-- <br>
			<br>
		<div class="container">
			
			<div class="row row-eq-height">
						<?php
						$sql=mysqli_query($conn,"Select * from trainning");
						while($arr=mysqli_fetch_array($sql)){
						?>
				<div class="col-lg-6 order-1 order-lg-2">
					<div class="become_title">
						<h1><?php echo $arr['name'];?></h1>
					</div>
				    
                    <p class="become_text"><?php echo $arr['description'];?></p>
			 	</div>
						<div class="col-lg-6">
					<div class="become_image">
					<img src="admin/dist/img/credit/<?php echo $arr['image'];?>" alt="">
					</div>
				</div> 
				<?php } ?>
			</div>
		</div>
			<br>
			<br>
		<div class="container">
			<div class="row row-eq-height">
			<div class="col-lg-6 order-2 order-lg-1">
					<div class="become_title">
						<h1>Corporate Training</h1>
					</div>
						<p class="become_text">Creation of MTIS and its successful journey are the result of inspiration of certain ideas, in other words, our collective dream. It’s this long cherished dream that motivates us and takes us forward.</p>
                    <p class="become_text">To provide best of breed technology based solutions, have a company of people who are proud of their company and enjoy working together and continue to dream to make their company bigger, smarter, sweeter,
                       					   reputed and admirable.</p>
                    <p class="become_text">With this dream in brain, vision in mind, mission in hands and values in heart,the company was set up by a group of entrepreneurs headed by an IT professional with Headquater in Ranchi and other two centre at  
                                           Hyderabad and Coimbatore by which it adds up more experience in various verticals and technology platforms.</p>
			 	</div>
						<div class="col-lg-6 order-1 order-lg-2">
						<br>
					<div class="become_image">
						<img src="images/corporatetraining.jpg" alt="">
					</div>
				</div> 
				
			</div>
		</div>
	</div> -->

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			
			<!-- Newsletter -->

			<!-- <div class="newsletter">
				<div class="row">
					<div class="col">
						<div class="section_title text-center">
							<h1>Upcoming Events</h1>
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

			</div> -->

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
<script src="js/teachers_custom.js"></script>

</body>
</html>