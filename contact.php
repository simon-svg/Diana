<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Contact – Diana – Furniture Store eCommerce Bootstrap5 Template</title>
	<link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800" rel="stylesheet">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/headroom.css" rel="stylesheet" />
	<link href="assets/css/animate.css" rel="stylesheet" />
	<link href="assets/css/font-awesome.min.css" rel="stylesheet" />
	<link href="assets/css/bardy.icon.css" rel="stylesheet" />
	<link href="assets/css/swiper.min.css" rel="stylesheet" />
	<link href="assets/css/fancybox.min.css" rel="stylesheet" />
	<link href="assets/css/slicknav.css" rel="stylesheet" />
	<link href="assets/css/aos.min.css" rel="stylesheet" />
	<link href="assets/css/style.css" rel="stylesheet" />
</head>

<body>

	<!--wrapper start-->
	<div class="wrapper">

		<!--== Start Preloader Content ==-->
		<div class="preloader-wrap">
			<div class="preloader">
				<span class="dot"></span>
				<div class="dots">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
		</div>
		<!--== End Preloader Content ==-->

		<!--== Start Header Wrapper ==-->
		<?php require_once "components/header.php" ?>
		<!--== End Header Wrapper ==-->

		<main class="main-content">
			<!--== Start Page Header Area Wrapper ==-->
			<?php
			$pagesTopSection = "Contact";
			require_once "components/pagesTopSection.php";
			?>
			<!--== End Page Header Area Wrapper ==-->

			<!--== Start Contact Area Wrapper ==-->
			<section class="contact-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-5">
							<div class="contact-info">
								<div class="info-item">
									<div class="info">
										<h4 class="title">Address</h4>
										<p>Your current address goes to here,120 example, country.</p>
									</div>
								</div>
								<div class="info-item">
									<div class="info">
										<h4 class="title">Phone</h4>
										<a href="tel:+8801234 567 890">+8801234 567 890</a>
										<a href="tel:+8801234 567 890">+8801234 567 890</a>
									</div>
								</div>
								<div class="info-item">
									<div class="info">
										<h4 class="title">Web</h4>
										<a href="mailto:info@example.com">info@example.com</a>
										<a href="mailto:www.example.com">www.example.com</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-7">
							<!--== Start Contact Form ==-->
							<div class="contact-form">
								<h4 class="contact-form-title">Contact Form Title</h4>
								<p class="desc">Contact Form Brief</p>
								<form id="contact-form" action="php/admin/contact/querys.php" method="POST">
									<div class="row row-gutter-20">
										<div class="col-md-6">
											<div class="form-group">
												<input class="form-control" type="text" name="name" placeholder="Name" required>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<input class="form-control" type="email" name="email" placeholder="Email" required>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<input class="form-control" type="tel" name="phone" placeholder="Phone">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<input class="form-control" type="text" name="subject" placeholder="Subject">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<textarea class="form-control" name="message" placeholder="Message"></textarea>
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<button class="btn btn-theme" type="submit" name="submit">Submit</button>
											</div>
										</div>
									</div>
								</form>
							</div>
							<!--== End Contact Form ==-->

							<!--== Message Notification ==-->
							<div class="form-message"></div>
						</div>
					</div>
				</div>
			</section>
			<!--== End Contact Area Wrapper ==-->

			<!--== Start Brand Logo Area Wrapper ==-->
			<section class="brand-logo-area">
				<div class="container pt--0">
					<div class="brand-logo-content">
						<div class="row">
							<div class="col-12">
								<div class="swiper-container brand-logo-slider-container">
									<div class="swiper-wrapper">
										<div class="swiper-slide">
											<!--== Start Brand Logo Item ==-->
											<div class="brand-logo-item">
												<a href="#/"><img src="assets/img/brand-logo/1.jpg" alt="Image-HasTech"></a>
											</div>
											<!--== End Brand Logo Item ==-->
										</div>
										<div class="swiper-slide">
											<!--== Start Brand Logo Item ==-->
											<div class="brand-logo-item">
												<a href="#/"><img src="assets/img/brand-logo/2.jpg" alt="Image-HasTech"></a>
											</div>
											<!--== End Brand Logo Item ==-->
										</div>
										<div class="swiper-slide">
											<!--== Start Brand Logo Item ==-->
											<div class="brand-logo-item">
												<a href="#/"><img src="assets/img/brand-logo/3.jpg" alt="Image-HasTech"></a>
											</div>
											<!--== End Brand Logo Item ==-->
										</div>
										<div class="swiper-slide">
											<!--== Start Brand Logo Item ==-->
											<div class="brand-logo-item">
												<a href="#/"><img src="assets/img/brand-logo/4.jpg" alt="Image-HasTech"></a>
											</div>
											<!--== End Brand Logo Item ==-->
										</div>
										<div class="swiper-slide">
											<!--== Start Brand Logo Item ==-->
											<div class="brand-logo-item">
												<a href="#/"><img src="assets/img/brand-logo/5.jpg" alt="Image-HasTech"></a>
											</div>
											<!--== End Brand Logo Item ==-->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--== End Brand Logo Area Wrapper ==-->

			<!--== Start Feature Area Wrapper ==-->
			<section class="feature-area">
				<div class="feature-container">
					<div class="row no-gutter">
						<div class="feature-col col-xl-3 col-md-6 col-12">
							<div class="feature-icon-box">
								<div class="inner-content">
									<div class="icon-box" data-bg-img="assets/img/icons/1.jpg"></div>
									<div class="content">
										<h3 class="title">Free home delivery</h3>
										<p>Provide free home delivery for all product over $100</p>
									</div>
								</div>
							</div>
						</div>
						<div class="feature-col col-xl-3 col-md-6 col-12">
							<div class="feature-icon-box">
								<div class="inner-content">
									<div class="icon-box" data-bg-img="assets/img/icons/1.jpg"></div>
									<div class="content">
										<h3 class="title">Quality Products</h3>
										<p>We ensure the product quality that is our main goal</p>
									</div>
								</div>
							</div>
						</div>
						<div class="feature-col col-xl-3 col-md-6 col-12">
							<div class="feature-icon-box">
								<div class="inner-content">
									<div class="icon-box" data-bg-img="assets/img/icons/1.jpg"></div>
									<div class="content">
										<h3 class="title">3 Days Return</h3>
										<p>Return product within 3 days for any product you buy</p>
									</div>
								</div>
							</div>
						</div>
						<div class="feature-col col-xl-3 col-md-6 col-12">
							<div class="feature-icon-box">
								<div class="inner-content">
									<div class="icon-box" data-bg-img="assets/img/icons/1.jpg"></div>
									<div class="content">
										<h3 class="title">Online Support</h3>
										<p>We ensure the product quality that you can trust easily</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--== End Feature Area Wrapper ==-->
		</main>

		<!--== Start Footer Area Wrapper ==-->
		<?php require_once "components/footer.php" ?>
		<!--== End Footer Area Wrapper ==-->

		<!--== Scroll Top Button ==-->
		<div id="scroll-to-top" class="scroll-to-top"><span class="fa fa-angle-up"></span></div>

		<!--== Start Quick View Menu ==-->
		<aside class="product-quick-view-modal">
			<div class="product-quick-view-inner">
				<div class="product-quick-view-content">
					<button type="button" class="btn-close">
						<span class="close-icon"><i class="fa fa-close"></i></span>
					</button>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-12">
							<div class="thumb">
								<img src="assets/img/shop/quick-view1.jpg" alt="Alan-Shop">
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-12">
							<div class="content">
								<h4 class="title">3. Variable product</h4>
								<div class="prices">
									<del class="price-old">$85.00</del>
									<span class="price">$70.00</span>
								</div>
								<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia,</p>
								<div class="quick-view-select">
									<div class="quick-view-select-item">
										<label for="forSize" class="form-label">Size:</label>
										<select class="form-select" id="forSize" required>
											<option selected value="">s</option>
											<option>m</option>
											<option>l</option>
											<option>xl</option>
										</select>
									</div>
									<div class="quick-view-select-item">
										<label for="forColor" class="form-label">Color:</label>
										<select class="form-select" id="forColor" required>
											<option selected value="">red</option>
											<option>green</option>
											<option>blue</option>
											<option>yellow</option>
											<option>white</option>
										</select>
									</div>
								</div>
								<div class="action-top">
									<div class="pro-qty">
										<input type="text" id="quantity2" title="Quantity" value="1" />
									</div>
									<button class="btn btn-black">Add to cart</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="canvas-overlay"></div>
		</aside>
		<!--== End Quick View Menu ==-->

		<!--== Start Side Menu ==-->
		<aside class="off-canvas-wrapper">
			<div class="off-canvas-inner">
				<div class="off-canvas-overlay"></div>
				<!-- Start Off Canvas Content Wrapper -->
				<div class="off-canvas-content">
					<!-- Off Canvas Header -->
					<div class="off-canvas-header">
						<div class="close-action">
							<button class="btn-menu-close">menu <i class="fa fa-chevron-left"></i></button>
						</div>
					</div>

					<div class="off-canvas-item">
						<!-- Start Mobile Menu Wrapper -->
						<div class="res-mobile-menu menu-active-one">
							<!-- Note Content Auto Generate By Jquery From Main Menu -->
						</div>
						<!-- End Mobile Menu Wrapper -->
					</div>
				</div>
				<!-- End Off Canvas Content Wrapper -->
			</div>
		</aside>
		<!--== End Side Menu ==-->
	</div>

	<!--=======================Javascript============================-->

	<!--=== jQuery Modernizr Min Js ===-->
	<script src="assets/js/modernizr.js"></script>
	<!--=== jQuery Min Js ===-->
	<script src="assets/js/jquery-main.js"></script>
	<!--=== jQuery Migration Min Js ===-->
	<script src="assets/js/jquery-migrate.js"></script>
	<!--=== jQuery Popper Min Js ===-->
	<script src="assets/js/popper.min.js"></script>
	<!--=== jQuery Bootstrap Min Js ===-->
	<script src="assets/js/bootstrap.min.js"></script>
	<!--=== jQuery Appear Js ===-->
	<script src="assets/js/jquery.appear.js"></script>
	<!--=== jQuery Headroom Min Js ===-->
	<script src="assets/js/headroom.min.js"></script>
	<!--=== jQuery Swiper Min Js ===-->
	<script src="assets/js/swiper.min.js"></script>
	<!--=== jQuery Fancybox Min Js ===-->
	<script src="assets/js/fancybox.min.js"></script>
	<!--=== jQuery Slick Nav Js ===-->
	<script src="assets/js/slicknav.js"></script>
	<!--=== jQuery Waypoint Js ===-->
	<script src="assets/js/waypoint.js"></script>
	<!--=== jQuery Parallax Min Js ===-->
	<script src="assets/js/parallax.min.js"></script>
	<!--=== jQuery Aos Min Js ===-->
	<script src="assets/js/aos.min.js"></script>
	<!--=== jQuery Countdown Js ===-->
	<script src="assets/js/countdown.js"></script>

	<!--=== jQuery Custom Js ===-->
	<script src="assets/js/custom.js"></script>

</body>

</html>