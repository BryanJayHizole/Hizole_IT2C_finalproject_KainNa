<?php

SESSION_START();

if (isset($_SESSION['ses_useremail']) === false){
  header("Location: index.php?logfirst");
}
else if (isset($_REQUEST['logout']) === true){
  session_destroy();
  header("Location: index.php?logout");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>KainNa</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">

	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="wrap-menu-header gradient1 trans-0-4">
			<div class="container h-full">
				<div class="wrap_header trans-0-3">
					<!-- Logo -->
					<div class="logo">
						<a href="home.php">
							<img src="images/logo.png" alt="IMG-LOGO" >
						</a>
					</div>

					<!-- Menu -->
					<div class="wrap_menu p-l-45 p-l-0-xl">
						<nav class="menu">
							<ul class="main_menu">
								<li>
									<a href="home.php">Home</a>
								</li>

								<li>
									<a href="menu.php">Menu</a>
								</li>

								<li>
									<a href="reservation.php">Reservation</a>
								</li>

								<li>
									<a href="gallery.php">Gallery</a>
								</li>

								<li>
									<a href="about.php">About</a>
								</li>

								<li>
									<a href="blog.php">Blog</a>
								</li>

								<li>
									<a href="contact.php">Contact</a>
								</li>
							</ul>
						</nav>
					</div>

					<!-- Social -->
					<div class="social flex-w flex-l-m p-r-20">
						<a href="#"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-facebook m-l-21" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-twitter m-l-21" aria-hidden="true"></i></a>

						<button class="btn-show-sidebar m-l-33 trans-0-4"></button>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Sidebar -->
	<aside class="sidebar trans-0-4">
		<!-- Button Hide sidebar -->
		<button class="btn-hide-sidebar ti-close color0-hov trans-0-4"></button>

		<!-- - -->
		<ul class="menu-sidebar p-t-95 p-b-70">
			<li class="t-center m-b-13">
				<a href="home.php" class="txt19">Home</a>
			</li>

			<li class="t-center m-b-13">
				<a href="menu.php" class="txt19">Menu</a>
			</li>

			<li class="t-center m-b-13">
				<a href="gallery.php" class="txt19">Gallery</a>
			</li>

			<li class="t-center m-b-13">
				<a href="about.php" class="txt19">About</a>
			</li>

			<li class="t-center m-b-13">
				<a href="blog.php" class="txt19">Blog</a>
			</li>

			<li class="t-center m-b-33">
				<a href="contact.php" class="txt19">Contact</a>
			</li>

			<li class="t-center">
				<!-- Button3 -->
				<a href="reservation.php" class="btn3 flex-c-m size13 txt11 trans-0-4 m-l-r-auto">
					Reservation
				</a>
			</li>
		</ul>

		<!-- - -->
		<div class="gallery-sidebar t-center p-l-60 p-r-60 p-b-40">
			<!-- - -->
			<h4 class="txt20 m-b-33">
				Gallery
			</h4>

			<!-- Gallery -->
			<div class="wrap-gallery-sidebar flex-w">
				<a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-01.jpg" data-lightbox="gallery-footer">
				<?php
					$imagePath = 'images/photo-gallery-thumb-01.jpg';

					echo file_exists($imagePath) ? '<img src="'.$imagePath.'" alt="GALLERY">' : 'Image not found.';
				?>
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-02.jpg" data-lightbox="gallery-footer">
				<?php
					$imagePath = 'images/photo-gallery-thumb-02.jpg';

					echo file_exists($imagePath) ? '<img src="'.$imagePath.'" alt="GALLERY">' : 'Image not found.';
				?>
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-03.jpg" data-lightbox="gallery-footer">
				<?php
					$imagePath = 'images/photo-gallery-thumb-03.jpg';

					echo file_exists($imagePath) ? '<img src="'.$imagePath.'" alt="GALLERY">' : 'Image not found.';
				?>
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-05.jpg" data-lightbox="gallery-footer">
				<?php
					$imagePath = 'images/photo-gallery-thumb-05.jpg';

					echo file_exists($imagePath) ? '<img src="'.$imagePath.'" alt="GALLERY">' : 'Image not found.';
				?>
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-06.jpg" data-lightbox="gallery-footer">
				<?php
					$imagePath = 'images/photo-gallery-thumb-06.jpg';

					echo file_exists($imagePath) ? '<img src="'.$imagePath.'" alt="GALLERY">' : 'Image not found.';
				?>
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-07.jpg" data-lightbox="gallery-footer">
				<?php
					$imagePath = 'images/photo-gallery-thumb-07.jpg';

					echo file_exists($imagePath) ? '<img src="'.$imagePath.'" alt="GALLERY">' : 'Image not found.';
				?>
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-09.jpg" data-lightbox="gallery-footer">
				<?php
					$imagePath = 'images/photo-gallery-thumb-09.jpg';

					echo file_exists($imagePath) ? '<img src="'.$imagePath.'" alt="GALLERY">' : 'Image not found.';
				?>
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-10.jpg" data-lightbox="gallery-footer">
				<?php
					$imagePath = 'images/photo-gallery-thumb-10.jpg';

					echo file_exists($imagePath) ? '<img src="'.$imagePath.'" alt="GALLERY">' : 'Image not found.';
				?>
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="images/photo-gallery-11.jpg" data-lightbox="gallery-footer">
				<?php
					$imagePath = 'images/photo-gallery-thumb-11.jpg';

					echo file_exists($imagePath) ? '<img src="'.$imagePath.'" alt="GALLERY">' : 'Image not found.';
				?>
				</a>
			</div>
		</div>
	</aside>


	<!-- Title Page -->
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(images/bg-title-page-01.jpg);">
		<h2 class="tit6 t-center">
			KainNa Menu
		</h2>
	</section>


	<!-- Main menu -->

	<!-- Starters -->
	<section class="section-lunch bgwhite" style="margin: 200px 150px ; ">
		<div  class="header-lunch parallax0 parallax100" style="background-image: url(images/header-menu-01.jpg);">
			<div onclick="location.href='menu-starters.php';" style="cursor: pointer;" class="bg1-overlay t-center p-t-170 p-b-165">
				<h2  class="tit4 t-center">
					Starters
				</h2>
			</div>
		</div>
	</section>
	

	<!-- Lunch -->
	<section class="section-lunch bgwhite" style="margin: 200px 150px ; ">
		<div  class="header-lunch parallax0 parallax100" style="background-image: url(images/header-menu-01.jpg);">
			<div onclick="location.href='menu-lunch.php';" style="cursor: pointer;" class="bg1-overlay t-center p-t-170 p-b-165">
				<h2  class="tit4 t-center">
					Lunch
				</h2>
			</div>
		</div>
	</section>
	


	<!-- Dinner -->
	<section class="section-lunch bgwhite" style="margin: 200px 150px; ">
		<div  class="header-lunch parallax0 parallax100" style="background-image: url(images/header-menu-01.jpg);">
			<div onclick="location.href='menu-dinner.php';" style="cursor: pointer;" class="bg1-overlay t-center p-t-170 p-b-165">
				<h2  class="tit4 t-center">
					Dinner
				</h2>
			</div>
		</div>
	</section>

	<!-- Dessert -->
	<section class="section-lunch bgwhite" style="margin: 200px 150px; ">
		<div  class="header-lunch parallax0 parallax100" style="background-image: url(images/header-menu-01.jpg);">
			<div onclick="location.href='menu-dessert.php';" style="cursor: pointer;" class="bg1-overlay t-center p-t-170 p-b-165">
				<h2  class="tit4 t-center">
					Dessert
				</h2>
			</div>
		</div>
	</section>

	<!-- Drinks -->
	<section class="section-lunch bgwhite" style="margin: 200px 150px ; ">
		<div  class="header-lunch parallax0 parallax100" style="background-image: url(images/header-menu-01.jpg);">
			<div onclick="location.href='menu-drinks.php';" style="cursor: pointer;" class="bg1-overlay t-center p-t-170 p-b-165">
				<h2  class="tit4 t-center">
				Drinks
				</h2>
			</div>
		</div>
	</section>

	<!-- Wine -->
	<section class="section-lunch bgwhite" style="margin:200px 150px ; ">
		<div  class="header-lunch parallax0 parallax100" style="background-image: url(images/header-menu-01.jpg);">
			<div onclick="location.href='menu-wine.php';" style="cursor: pointer;" class="bg1-overlay t-center p-t-170 p-b-165">
				<h2  class="tit4 t-center">
				Wine
				</h2>
			</div>
		</div>
	</section>

	<!-- Specialties -->
	<section class="section-lunch bgwhite" style="margin:200px 150px; ">
		<div  class="header-lunch parallax0 parallax100" style="background-image: url(images/header-menu-01.jpg);">
			<div onclick="location.href='menu-specialties.php';" style="cursor: pointer;" class="bg1-overlay t-center p-t-170 p-b-165">
				<h2  class="tit4 t-center">
				Specialties
				</h2>
			</div>
		</div>
	</section>


	<!-- Footer -->
	<footer class="bg1">
		<div class="container p-t-40 p-b-70">
			<div class="row">
				<div class="col-sm-6 col-md-4 p-t-50">
					<!-- - -->
					<h4 class="txt13 m-b-33">
						Contact Us
					</h4>

					<ul class="m-b-70">
						<li class="txt14 m-b-14">
							<i class="fa fa-map-marker fs-16 dis-inline-block size19" aria-hidden="true"></i>
							8th floor, 379 Hudson St, New York, NY 10018
						</li>

						<li class="txt14 m-b-14">
							<i class="fa fa-phone fs-16 dis-inline-block size19" aria-hidden="true"></i>
							(+1) 96 716 6879
						</li>

						<li class="txt14 m-b-14">
							<i class="fa fa-envelope fs-13 dis-inline-block size19" aria-hidden="true"></i>
							contact@site.com
						</li>
					</ul>

					<!-- - -->
					<h4 class="txt13 m-b-32">
						Opening Times
					</h4>

					<ul>
						<li class="txt14">
							09:30 AM – 11:00 PM
						</li>

						<li class="txt14">
							Every Day
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-md-4 p-t-50">
					<!-- - -->
					<h4 class="txt13 m-b-33">
						Latest twitter
					</h4>

					<div class="m-b-25">
						<span class="fs-13 color2 m-r-5">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</span>
						<a href="#" class="txt15">
							@colorlib
						</a>

						<p class="txt14 m-b-18">
							Activello is a good option. It has a slider built into that displays the featured image in the slider.
							<a href="#" class="txt15">
								https://buff.ly/2zaSfAQ
							</a>
						</p>

						<span class="txt16">
							21 Dec 2017
						</span>
					</div>

					<div>
						<span class="fs-13 color2 m-r-5">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</span>
						<a href="#" class="txt15">
							@colorlib
						</a>

						<p class="txt14 m-b-18">
							Activello is a good option. It has a slider built into that displays
							<a href="#" class="txt15">
								https://buff.ly/2zaSfAQ
							</a>
						</p>

						<span class="txt16">
							21 Dec 2017
						</span>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 p-t-50">
					<!-- - -->
					<h4 class="txt13 m-b-38">
						Gallery
					</h4>

					<!-- Gallery footer -->
					<div class="wrap-gallery-footer flex-w">
						<?php
						$imagePaths = array(
							"images/photo-gallery-01.jpg",
							"images/photo-gallery-02.jpg",
							"images/photo-gallery-03.jpg",
							"images/photo-gallery-04.jpg",
							"images/photo-gallery-05.jpg",
							"images/photo-gallery-06.jpg",
							"images/photo-gallery-07.jpg",
							"images/photo-gallery-08.jpg",
							"images/photo-gallery-09.jpg",
							"images/photo-gallery-10.jpg",
							"images/photo-gallery-11.jpg",
							"images/photo-gallery-12.jpg"
						);

						foreach ($imagePaths as $index => $imagePath) {
							$thumbnailPath = "images/photo-gallery-thumb-" . sprintf("%02d", $index + 1) . ".jpg";
							$lightboxData = "gallery-footer";
							$altText = "GALLERY";
						?>
						<a class="item-gallery-footer wrap-pic-w" href="<?php echo $imagePath; ?>" data-lightbox="<?php echo $lightboxData; ?>">
							<img src="<?php echo $thumbnailPath; ?>" alt="<?php echo $altText; ?>">
						</a>
						<?php
						}
						?>
					</div>

				</div>
			</div>
		</div>

		<div class="end-footer bg2">
			<div class="container">
				<div class="flex-sb-m flex-w p-t-22 p-b-22">
					<div class="p-t-5 p-b-5">
						<a href="#" class="fs-15 c-white"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>
						<a href="#" class="fs-15 c-white"><i class="fa fa-facebook m-l-18" aria-hidden="true"></i></a>
						<a href="#" class="fs-15 c-white"><i class="fa fa-twitter m-l-18" aria-hidden="true"></i></a>
					</div>

					<div class="txt17 p-r-20 p-t-5 p-b-5">
						Copyright &copy; 2018 All rights reserved  |  This template is made with <i class="fa fa-heart"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
					</div>
				</div>
			</div>
		</div>
	</footer>


	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>


<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/parallax100/parallax100.js"></script>
	<script type="text/javascript">
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
