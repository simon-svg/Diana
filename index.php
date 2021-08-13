<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<title>Diana – Furniture Store eCommerce Bootstrap5 Template</title>

	<!--== Favicon ==-->
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
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

	<?php
	require_once "php/admin/home/index.php";
	$obj = new Home();
	$result = $obj->select(false, "php/connect.php");
	?>

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

		<!--== Start Top Notification Wrapper ==-->
		<div class="top-notification-bar">
			<div class="container">
				<div class="row">
					<div class="notification-entry text-center col-12">
						<p>All featured product 50% off <a href="#">Shop Now</a></p>
						<button class="notification-close-btn">X</button>
					</div>
				</div>
			</div>
		</div>
		<!--== End Top Notification Wrapper ==-->

		<!--== Start Header Wrapper ==-->
		<?php require_once "components/header.php" ?>
		<!--== End Header Wrapper ==-->

		<main class="main-content">
			<!--== Start Hero Area Wrapper ==-->
			<section class="home-slider-area">
				<div class="swiper-container swiper-slide-gap home-slider-container default-slider-container">
					<div class="swiper-wrapper home-slider-wrapper slider-default">
						<?php foreach ($result as $res) { ?>
							<div class="swiper-slide">
								<div class="slider-content-area" data-bg-img="assets/img/home/<?php echo $res->img ?>">
									<div class="container">
										<div class="row align-items-center">
											<div class="col-12">
												<div class="slider-content text-center">
													<h5 class="sub-title"><?php echo $res->sub_title ?></h5>
													<h2 class="title"><?php echo $res->title ?></h2>
													<a class="btn-slider" href="shop.php">Shop Now</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>

					<!--== Add Swiper Arrows ==-->
					<div class="swiper-button-next"><i class="fa fa-angle-right"></i></div>
					<div class="swiper-button-prev"><i class="fa fa-angle-left"></i></div>
				</div>
			</section>
			<!--== End Hero Area Wrapper ==-->

			<!--== Start Product Area Wrapper ==-->
			<section class="product-area product-list-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 m-auto">
							<div class="section-title text-center">
								<h2 class="title">Product List</h2>
								<div class="desc">
									<p>Some of our customers say that they trust us and buy our product without any
										hesitation because
										they believe us and always happy to buy our product.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="product-category-tab-wrap">
								<ul data-aos="fade-down" class="nav nav-tabs product-category-nav justify-content-center" id="myTab" role="tablist">
									<li class="nav-item" role="presentation">
										<button class="nav-link active" id="featured-tab" data-bs-toggle="tab" data-bs-target="#featured" type="button" role="tab" aria-controls="featured" aria-selected="true">All</button>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link" id="chair-tab" data-bs-toggle="tab" data-bs-target="#chair" type="button" role="tab" aria-controls="chair" aria-selected="false">Chair</button>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link" id="sofa-tab" data-bs-toggle="tab" data-bs-target="#sofa" type="button" role="tab" aria-controls="sofa" aria-selected="false">Sofa</button>
									</li>
								</ul>
								<div class="tab-content product-category-content" id="myTabContent">
									<div class="tab-pane fade show active" id="featured" role="tabpanel" aria-labelledby="featured-tab">
										<div class="row">
											<div class="col-12">
												<div class="swiper-container swiper-nav swiper-slide-gap product-swiper-pagination product-slider-container">
													<div class="swiper-wrapper">
														<div class="swiper-slide">
															<!--== Start Shop Item ==-->
															<div class="product-item">
																<div class="inner-content">
																	<div class="product-thumb">
																		<a href="shop-single.php">
																			<img class="w-100" src="assets/img/chairs/chair1.jpg" alt="Image-HasTech">
																		</a>
																		<div class="product-action">
																			<div class="addto-wrap">
																				<a class="add-cart" href="shop-cart.php">
																					<span class="icon">
																						<i class="bardy bardy-shopping-cart"></i>
																						<i class="hover-icon bardy bardy-shopping-cart"></i>
																					</span>
																				</a>
																				<a class="add-wishlist" href="wishlist.php">
																					<span class="icon">
																						<i class="bardy bardy-wishlist"></i>
																						<i class="hover-icon bardy bardy-wishlist"></i>
																					</span>
																				</a>
																				<a class="add-quick-view" href="javascript:void(0);">
																					<span class="icon">
																						<i class="bardy bardy-quick-view"></i>
																						<i class="hover-icon bardy bardy-quick-view"></i>
																					</span>
																				</a>
																			</div>
																		</div>
																	</div>
																	<div class="product-desc">
																		<div class="product-info">
																			<h4 class="title"><a href="shop-single.php">1. New and
																					sale badge product</a>
																			</h4>
																			<div class="star-content">
																				<i class="fa fa-star-o"></i>
																				<i class="fa fa-star-o"></i>
																				<i class="fa fa-star-o"></i>
																				<i class="fa fa-star-o"></i>
																				<i class="fa fa-star-o"></i>
																			</div>
																			<div class="prices">
																				<span class="price">Tk 110.00 </span>
																				<span class="price-old">Tk 130.00</span>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<!--== End Shop Item ==-->

															<!--== Start Shop Item ==-->
															<div class="product-item">
																<div class="inner-content">
																	<div class="product-thumb">
																		<a href="shop-single.php">
																			<img class="w-100" src="assets/img/shop/2.jpg" alt="Image-HasTech">
																		</a>
																		<div class="product-action">
																			<div class="addto-wrap">
																				<a class="add-cart" href="shop-cart.php">
																					<span class="icon">
																						<i class="bardy bardy-shopping-cart"></i>
																						<i class="hover-icon bardy bardy-shopping-cart"></i>
																					</span>
																				</a>
																				<a class="add-wishlist" href="wishlist.php">
																					<span class="icon">
																						<i class="bardy bardy-wishlist"></i>
																						<i class="hover-icon bardy bardy-wishlist"></i>
																					</span>
																				</a>
																				<a class="add-quick-view" href="javascript:void(0);">
																					<span class="icon">
																						<i class="bardy bardy-quick-view"></i>
																						<i class="hover-icon bardy bardy-quick-view"></i>
																					</span>
																				</a>
																			</div>
																		</div>
																	</div>
																	<div class="product-desc">
																		<div class="product-info">
																			<h4 class="title"><a href="shop-single.php">2. New badge
																					product</a></h4>
																			<div class="star-content">
																				<i class="fa fa-star-o"></i>
																				<i class="fa fa-star-o"></i>
																				<i class="fa fa-star-o"></i>
																				<i class="fa fa-star-o"></i>
																				<i class="fa fa-star-o"></i>
																			</div>
																			<div class="prices">
																				<span class="price">Tk 80.00 </span>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<!--== End Shop Item ==-->
														</div>
														<div class="swiper-slide">
															<!--== Start Shop Item ==-->
															<div class="product-item">
																<div class="inner-content">
																	<div class="product-thumb">
																		<a href="shop-single.php">
																			<img class="w-100" src="assets/img/sofas/sofa3.jpg" alt="Image-HasTech">
																		</a>
																		<div class="product-action">
																			<div class="addto-wrap">
																				<a class="add-cart" href="shop-cart.php">
																					<span class="icon">
																						<i class="bardy bardy-shopping-cart"></i>
																						<i class="hover-icon bardy bardy-shopping-cart"></i>
																					</span>
																				</a>
																				<a class="add-wishlist" href="wishlist.php">
																					<span class="icon">
																						<i class="bardy bardy-wishlist"></i>
																						<i class="hover-icon bardy bardy-wishlist"></i>
																					</span>
																				</a>
																				<a class="add-quick-view" href="javascript:void(0);">
																					<span class="icon">
																						<i class="bardy bardy-quick-view"></i>
																						<i class="hover-icon bardy bardy-quick-view"></i>
																					</span>
																				</a>
																			</div>
																		</div>
																	</div>
																	<div class="product-desc">
																		<div class="product-info">
																			<h4 class="title"><a href="shop-single.php">3. Variable
																					product</a></h4>
																			<div class="star-content">
																				<i class="fa fa-star-o"></i>
																				<i class="fa fa-star-o"></i>
																				<i class="fa fa-star-o"></i>
																				<i class="fa fa-star-o"></i>
																				<i class="fa fa-star-o"></i>
																			</div>
																			<div class="prices">
																				<span class="price">Tk 40.00 </span>
																				<span class="price-old">Tk 85.00</span>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<!--== End Shop Item ==-->

															<!--== Start Shop Item ==-->
															<div class="product-item">
																<div class="inner-content">
																	<div class="product-thumb">
																		<a href="shop-single.php">
																			<img class="w-100" src="assets/img/sofas/sofa1.jpg" alt="Image-HasTech">
																		</a>
																		<div class="product-action">
																			<div class="addto-wrap">
																				<a class="add-cart" href="shop-cart.php">
																					<span class="icon">
																						<i class="bardy bardy-shopping-cart"></i>
																						<i class="hover-icon bardy bardy-shopping-cart"></i>
																					</span>
																				</a>
																				<a class="add-wishlist" href="wishlist.php">
																					<span class="icon">
																						<i class="bardy bardy-wishlist"></i>
																						<i class="hover-icon bardy bardy-wishlist"></i>
																					</span>
																				</a>
																				<a class="add-quick-view" href="javascript:void(0);">
																					<span class="icon">
																						<i class="bardy bardy-quick-view"></i>
																						<i class="hover-icon bardy bardy-quick-view"></i>
																					</span>
																				</a>
																			</div>
																		</div>
																	</div>
																	<div class="product-desc">
																		<div class="product-info">
																			<h4 class="title"><a href="shop-single.php">4. Soldout
																					product</a></h4>
																			<div class="star-content">
																				<i class="fa fa-star-o"></i>
																				<i class="fa fa-star-o"></i>
																				<i class="fa fa-star-o"></i>
																				<i class="fa fa-star-o"></i>
																				<i class="fa fa-star-o"></i>
																			</div>
																			<div class="prices">
																				<span class="price">Tk 19.00 </span>
																				<span class="price-old">Tk 29.00</span>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<!--== End Shop Item ==-->
														</div>
														<div class="swiper-slide">
															<!--== Start Shop Item ==-->
															<div class="product-item">
																<div class="inner-content">
																	<div class="product-thumb">
																		<a href="shop-single.php">
																			<img class="w-100" src="assets/img/chairs/chair5.jpg" alt="Image-HasTech">
																		</a>
																		<div class="product-action">
																			<div class="addto-wrap">
																				<a class="add-cart" href="shop-cart.php">
																					<span class="icon">
																						<i class="bardy bardy-shopping-cart"></i>
																						<i class="hover-icon bardy bardy-shopping-cart"></i>
																					</span>
																				</a>
																				<a class="add-wishlist" href="wishlist.php">
																					<span class="icon">
																						<i class="bardy bardy-wishlist"></i>
																						<i class="hover-icon bardy bardy-wishlist"></i>
																					</span>
																				</a>
																				<a class="add-quick-view" href="javascript:void(0);">
																					<span class="icon">
																						<i class="bardy bardy-quick-view"></i>
																						<i class="hover-icon bardy bardy-quick-view"></i>
																					</span>
																				</a>
																			</div>
																		</div>
																	</div>
																	<div class="product-desc">
																		<div class="product-info">
																			<h4 class="title"><a href="shop-single.php">5. Simple
																					product</a></h4>
																			<div class="star-content">
																				<i class="fa fa-star-o"></i>
																				<i class="fa fa-star-o"></i>
																				<i class="fa fa-star-o"></i>
																				<i class="fa fa-star-o"></i>
																				<i class="fa fa-star-o"></i>
																			</div>
																			<div class="prices">
																				<span class="price">Tk 50.00</span>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<!--== End Shop Item ==-->

															<!--== Start Shop Item ==-->
															<div class="product-item">
																<div class="inner-content">
																	<div class="product-thumb">
																		<a href="shop-single.php">
																			<img class="w-100" src="assets/img/shop/6.jpg" alt="Image-HasTech">
																		</a>
																		<div class="product-action">
																			<div class="addto-wrap">
																				<a class="add-cart" href="shop-cart.php">
																					<span class="icon">
																						<i class="bardy bardy-shopping-cart"></i>
																						<i class="hover-icon bardy bardy-shopping-cart"></i>
																					</span>
																				</a>
																				<a class="add-wishlist" href="wishlist.php">
																					<span class="icon">
																						<i class="bardy bardy-wishlist"></i>
																						<i class="hover-icon bardy bardy-wishlist"></i>
																					</span>
																				</a>
																				<a class="add-quick-view" href="javascript:void(0);">
																					<span class="icon">
																						<i class="bardy bardy-quick-view"></i>
																						<i class="hover-icon bardy bardy-quick-view"></i>
																					</span>
																				</a>
																			</div>
																		</div>
																	</div>
																	<div class="product-desc">
																		<div class="product-info">
																			<h4 class="title"><a href="shop-single.php">6. Variable
																					with soldout product</a>
																			</h4>
																			<div class="star-content">
																				<i class="fa fa-star-o"></i>
																				<i class="fa fa-star-o"></i>
																				<i class="fa fa-star-o"></i>
																				<i class="fa fa-star-o"></i>
																				<i class="fa fa-star-o"></i>
																			</div>
																			<div class="prices">
																				<span class="price">Tk 55.00</span>
																				<span class="price-old">Tk 75.00</span>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<!--== End Shop Item ==-->
														</div>
														<div class="swiper-slide">
															<!--== Start Shop Item ==-->
															<div class="product-item">
																<div class="inner-content">
																	<div class="product-thumb">
																		<a href="shop-single.php">
																			<img class="w-100" src="assets/img/sofas/sofa7.jpg" alt="Image-HasTech">
																		</a>
																		<div class="product-action">
																			<div class="addto-wrap">
																				<a class="add-cart" href="shop-cart.php">
																					<span class="icon">
																						<i class="bardy bardy-shopping-cart"></i>
																						<i class="hover-icon bardy bardy-shopping-cart"></i>
																					</span>
																				</a>
																				<a class="add-wishlist" href="wishlist.php">
																					<span class="icon">
																						<i class="bardy bardy-wishlist"></i>
																						<i class="hover-icon bardy bardy-wishlist"></i>
																					</span>
																				</a>
																				<a class="add-quick-view" href="javascript:void(0);">
																					<span class="icon">
																						<i class="bardy bardy-quick-view"></i>
																						<i class="hover-icon bardy bardy-quick-view"></i>
																					</span>
																				</a>
																			</div>
																		</div>
																	</div>
																	<div class="product-desc">
																		<div class="product-info">
																			<h4 class="title"><a href="shop-single.php">7. Sample
																					affiliate product</a></h4>
																			<div class="star-content">
																				<i class="fa fa-star-o"></i>
																				<i class="fa fa-star-o"></i>
																				<i class="fa fa-star-o"></i>
																				<i class="fa fa-star-o"></i>
																				<i class="fa fa-star-o"></i>
																			</div>
																			<div class="prices">
																				<span class="price">Tk 29.00</span>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<!--== End Shop Item ==-->

															<!--== Start Shop Item ==-->
															<div class="product-item">
																<div class="inner-content">
																	<div class="product-thumb">
																		<a href="shop-single.php">
																			<img class="w-100" src="assets/img/shop/8.jpg" alt="Image-HasTech">
																		</a>
																		<div class="product-action">
																			<div class="addto-wrap">
																				<a class="add-cart" href="shop-cart.php">
																					<span class="icon">
																						<i class="bardy bardy-shopping-cart"></i>
																						<i class="hover-icon bardy bardy-shopping-cart"></i>
																					</span>
																				</a>
																				<a class="add-wishlist" href="wishlist.php">
																					<span class="icon">
																						<i class="bardy bardy-wishlist"></i>
																						<i class="hover-icon bardy bardy-wishlist"></i>
																					</span>
																				</a>
																				<a class="add-quick-view" href="javascript:void(0);">
																					<span class="icon">
																						<i class="bardy bardy-quick-view"></i>
																						<i class="hover-icon bardy bardy-quick-view"></i>
																					</span>
																				</a>
																			</div>
																		</div>
																		<div class="ht-countdown ht-countdown-style" data-date="4/24/2022"></div>
																	</div>
																	<div class="product-desc">
																		<div class="product-info">
																			<h4 class="title"><a href="shop-single.php">8. Countdown
																					product</a></h4>
																			<div class="star-content">
																				<i class="fa fa-star-o"></i>
																				<i class="fa fa-star-o"></i>
																				<i class="fa fa-star-o"></i>
																				<i class="fa fa-star-o"></i>
																				<i class="fa fa-star-o"></i>
																			</div>
																			<div class="prices">
																				<span class="price">Tk 39.00 </span>
																				<span class="price-old">Tk 60.00</span>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<!--== End Shop Item ==-->
														</div>
														<div class="swiper-slide">
															<!--== Start Shop Item ==-->
															<div class="product-item">
																<div class="inner-content">
																	<div class="product-thumb">
																		<a href="shop-single.php">
																			<img class="w-100" src="assets/img/chairs/chair8.jpg" alt="Image-HasTech">
																		</a>
																		<div class="product-action">
																			<div class="addto-wrap">
																				<a class="add-cart" href="shop-cart.php">
																					<span class="icon">
																						<i class="bardy bardy-shopping-cart"></i>
																						<i class="hover-icon bardy bardy-shopping-cart"></i>
																					</span>
																				</a>
																				<a class="add-wishlist" href="wishlist.php">
																					<span class="icon">
																						<i class="bardy bardy-wishlist"></i>
																						<i class="hover-icon bardy bardy-wishlist"></i>
																					</span>
																				</a>
																				<a class="add-quick-view" href="javascript:void(0);">
																					<span class="icon">
																						<i class="bardy bardy-quick-view"></i>
																						<i class="hover-icon bardy bardy-quick-view"></i>
																					</span>
																				</a>
																			</div>
																		</div>
																	</div>
																	<div class="product-desc">
																		<div class="product-info">
																			<h4 class="title"><a href="shop-single.php">9. Without
																					shortcode product</a></h4>
																			<div class="star-content">
																				<i class="fa fa-star-o"></i>
																				<i class="fa fa-star-o"></i>
																				<i class="fa fa-star-o"></i>
																				<i class="fa fa-star-o"></i>
																				<i class="fa fa-star-o"></i>
																			</div>
																			<div class="prices">
																				<span class="price">Tk 79.00</span>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<!--== End Shop Item ==-->

															<!--== Start Shop Item ==-->
															<div class="product-item">
																<div class="inner-content">
																	<div class="product-thumb">
																		<a href="shop-single.php">
																			<img class="w-100" src="assets/img/sofas/sofa4.jpg" alt="Image-HasTech">
																		</a>
																		<div class="product-action">
																			<div class="addto-wrap">
																				<a class="add-cart" href="shop-cart.php">
																					<span class="icon">
																						<i class="bardy bardy-shopping-cart"></i>
																						<i class="hover-icon bardy bardy-shopping-cart"></i>
																					</span>
																				</a>
																				<a class="add-wishlist" href="wishlist.php">
																					<span class="icon">
																						<i class="bardy bardy-wishlist"></i>
																						<i class="hover-icon bardy bardy-wishlist"></i>
																					</span>
																				</a>
																				<a class="add-quick-view" href="javascript:void(0);">
																					<span class="icon">
																						<i class="bardy bardy-quick-view"></i>
																						<i class="hover-icon bardy bardy-quick-view"></i>
																					</span>
																				</a>
																			</div>
																		</div>
																	</div>
																	<div class="product-desc">
																		<div class="product-info">
																			<h4 class="title"><a href="shop-single.php">11. Product
																					with video</a></h4>
																			<div class="star-content">
																				<i class="fa fa-star-o"></i>
																				<i class="fa fa-star-o"></i>
																				<i class="fa fa-star-o"></i>
																				<i class="fa fa-star-o"></i>
																				<i class="fa fa-star-o"></i>
																			</div>
																			<div class="prices">
																				<span class="price">Tk 39.00</span>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<!--== End Shop Item ==-->
														</div>
													</div>

													<!--== Add Swiper navigation Buttons ==-->
													<div class="swiper-button swiper-button-prev"><i class="fa fa-angle-left"></i></div>
													<div class="swiper-button swiper-button-next"><i class="fa fa-angle-right"></i></div>

													<!--== Add Swiper Pagination Buttons ==-->
													<div class="swiper-pagination"></div>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="chair" role="tabpanel" aria-labelledby="chair-tab">
										<div class="row">
											<div class="col-sm-6 col-lg-4 col-xl-3">
												<!--== Start Shop Item ==-->
												<div class="product-item">
													<div class="inner-content">
														<div class="product-thumb">
															<a href="shop-single.php">
																<img class="w-100" src="assets/img/chairs/chair1.jpg" alt="Image-HasTech">
															</a>
															<div class="product-action">
																<div class="addto-wrap">
																	<a class="add-cart" href="shop-cart.php">
																		<span class="icon">
																			<i class="bardy bardy-shopping-cart"></i>
																			<i class="hover-icon bardy bardy-shopping-cart"></i>
																		</span>
																	</a>
																	<a class="add-wishlist" href="wishlist.php">
																		<span class="icon">
																			<i class="bardy bardy-wishlist"></i>
																			<i class="hover-icon bardy bardy-wishlist"></i>
																		</span>
																	</a>
																	<a class="add-quick-view" href="javascript:void(0);">
																		<span class="icon">
																			<i class="bardy bardy-quick-view"></i>
																			<i class="hover-icon bardy bardy-quick-view"></i>
																		</span>
																	</a>
																</div>
															</div>
														</div>
														<div class="product-desc">
															<div class="product-info">
																<h4 class="title"><a href="shop-single.php">1. New and
																		sale badge product</a></h4>
																<div class="star-content">
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																</div>
																<div class="prices">
																	<span class="price">Tk 110.00 </span>
																	<span class="price-old">Tk 130.00</span>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!--== End Shop Item ==-->

												<!--== Start Shop Item ==-->
												<div class="product-item">
													<div class="inner-content">
														<div class="product-thumb">
															<a href="shop-single.php">
																<img class="w-100" src="assets/img/chairs/chair5.jpg" alt="Image-HasTech">
															</a>
															<div class="product-action">
																<div class="addto-wrap">
																	<a class="add-cart" href="shop-cart.php">
																		<span class="icon">
																			<i class="bardy bardy-shopping-cart"></i>
																			<i class="hover-icon bardy bardy-shopping-cart"></i>
																		</span>
																	</a>
																	<a class="add-wishlist" href="wishlist.php">
																		<span class="icon">
																			<i class="bardy bardy-wishlist"></i>
																			<i class="hover-icon bardy bardy-wishlist"></i>
																		</span>
																	</a>
																	<a class="add-quick-view" href="javascript:void(0);">
																		<span class="icon">
																			<i class="bardy bardy-quick-view"></i>
																			<i class="hover-icon bardy bardy-quick-view"></i>
																		</span>
																	</a>
																</div>
															</div>
														</div>
														<div class="product-desc">
															<div class="product-info">
																<h4 class="title"><a href="shop-single.php">2. New
																		badge product</a></h4>
																<div class="star-content">
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																</div>
																<div class="prices">
																	<span class="price">Tk 80.00 </span>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!--== End Shop Item ==-->
											</div>
											<div class="col-sm-6 col-lg-4 col-xl-3">
												<!--== Start Shop Item ==-->
												<div class="product-item">
													<div class="inner-content">
														<div class="product-thumb">
															<a href="shop-single.php">
																<img class="w-100" src="assets/img/chairs/chair2.jpg" alt="Image-HasTech">
															</a>
															<div class="product-action">
																<div class="addto-wrap">
																	<a class="add-cart" href="shop-cart.php">
																		<span class="icon">
																			<i class="bardy bardy-shopping-cart"></i>
																			<i class="hover-icon bardy bardy-shopping-cart"></i>
																		</span>
																	</a>
																	<a class="add-wishlist" href="wishlist.php">
																		<span class="icon">
																			<i class="bardy bardy-wishlist"></i>
																			<i class="hover-icon bardy bardy-wishlist"></i>
																		</span>
																	</a>
																	<a class="add-quick-view" href="javascript:void(0);">
																		<span class="icon">
																			<i class="bardy bardy-quick-view"></i>
																			<i class="hover-icon bardy bardy-quick-view"></i>
																		</span>
																	</a>
																</div>
															</div>
														</div>
														<div class="product-desc">
															<div class="product-info">
																<h4 class="title"><a href="shop-single.php">3. Variable
																		product</a></h4>
																<div class="star-content">
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																</div>
																<div class="prices">
																	<span class="price">Tk 40.00 </span>
																	<span class="price-old">Tk 85.00</span>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!--== End Shop Item ==-->

												<!--== Start Shop Item ==-->
												<div class="product-item">
													<div class="inner-content">
														<div class="product-thumb">
															<a href="shop-single.php">
																<img class="w-100" src="assets/img/chairs/chair6.jpg" alt="Image-HasTech">
															</a>
															<div class="product-action">
																<div class="addto-wrap">
																	<a class="add-cart" href="shop-cart.php">
																		<span class="icon">
																			<i class="bardy bardy-shopping-cart"></i>
																			<i class="hover-icon bardy bardy-shopping-cart"></i>
																		</span>
																	</a>
																	<a class="add-wishlist" href="wishlist.php">
																		<span class="icon">
																			<i class="bardy bardy-wishlist"></i>
																			<i class="hover-icon bardy bardy-wishlist"></i>
																		</span>
																	</a>
																	<a class="add-quick-view" href="javascript:void(0);">
																		<span class="icon">
																			<i class="bardy bardy-quick-view"></i>
																			<i class="hover-icon bardy bardy-quick-view"></i>
																		</span>
																	</a>
																</div>
															</div>
														</div>
														<div class="product-desc">
															<div class="product-info">
																<h4 class="title"><a href="shop-single.php">4. Soldout
																		product</a></h4>
																<div class="star-content">
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																</div>
																<div class="prices">
																	<span class="price">Tk 19.00 </span>
																	<span class="price-old">Tk 29.00</span>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!--== End Shop Item ==-->
											</div>
											<div class="col-sm-6 col-lg-4 col-xl-3 d-none d-lg-block">
												<!--== Start Shop Item ==-->
												<div class="product-item">
													<div class="inner-content">
														<div class="product-thumb">
															<a href="shop-single.php">
																<img class="w-100" src="assets/img/chairs/chair3.jpg" alt="Image-HasTech">
															</a>
															<div class="product-action">
																<div class="addto-wrap">
																	<a class="add-cart" href="shop-cart.php">
																		<span class="icon">
																			<i class="bardy bardy-shopping-cart"></i>
																			<i class="hover-icon bardy bardy-shopping-cart"></i>
																		</span>
																	</a>
																	<a class="add-wishlist" href="wishlist.php">
																		<span class="icon">
																			<i class="bardy bardy-wishlist"></i>
																			<i class="hover-icon bardy bardy-wishlist"></i>
																		</span>
																	</a>
																	<a class="add-quick-view" href="javascript:void(0);">
																		<span class="icon">
																			<i class="bardy bardy-quick-view"></i>
																			<i class="hover-icon bardy bardy-quick-view"></i>
																		</span>
																	</a>
																</div>
															</div>
														</div>
														<div class="product-desc">
															<div class="product-info">
																<h4 class="title"><a href="shop-single.php">5. Simple
																		product</a></h4>
																<div class="star-content">
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																</div>
																<div class="prices">
																	<span class="price">Tk 50.00</span>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!--== End Shop Item ==-->

												<!--== Start Shop Item ==-->
												<div class="product-item">
													<div class="inner-content">
														<div class="product-thumb">
															<a href="shop-single.php">
																<img class="w-100" src="assets/img/chairs/chair7.jpg" alt="Image-HasTech">
															</a>
															<div class="product-action">
																<div class="addto-wrap">
																	<a class="add-cart" href="shop-cart.php">
																		<span class="icon">
																			<i class="bardy bardy-shopping-cart"></i>
																			<i class="hover-icon bardy bardy-shopping-cart"></i>
																		</span>
																	</a>
																	<a class="add-wishlist" href="wishlist.php">
																		<span class="icon">
																			<i class="bardy bardy-wishlist"></i>
																			<i class="hover-icon bardy bardy-wishlist"></i>
																		</span>
																	</a>
																	<a class="add-quick-view" href="javascript:void(0);">
																		<span class="icon">
																			<i class="bardy bardy-quick-view"></i>
																			<i class="hover-icon bardy bardy-quick-view"></i>
																		</span>
																	</a>
																</div>
															</div>
														</div>
														<div class="product-desc">
															<div class="product-info">
																<h4 class="title"><a href="shop-single.php">6. Variable
																		with soldout product</a></h4>
																<div class="star-content">
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																</div>
																<div class="prices">
																	<span class="price">Tk 55.00</span>
																	<span class="price-old">Tk 75.00</span>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!--== End Shop Item ==-->
											</div>
											<div class="col-sm-6 col-lg-4 col-xl-3 d-none d-xl-block">
												<!--== Start Shop Item ==-->
												<div class="product-item">
													<div class="inner-content">
														<div class="product-thumb">
															<a href="shop-single.php">
																<img class="w-100" src="assets/img/chairs/chair4.jpg" alt="Image-HasTech">
															</a>
															<div class="product-action">
																<div class="addto-wrap">
																	<a class="add-cart" href="shop-cart.php">
																		<span class="icon">
																			<i class="bardy bardy-shopping-cart"></i>
																			<i class="hover-icon bardy bardy-shopping-cart"></i>
																		</span>
																	</a>
																	<a class="add-wishlist" href="wishlist.php">
																		<span class="icon">
																			<i class="bardy bardy-wishlist"></i>
																			<i class="hover-icon bardy bardy-wishlist"></i>
																		</span>
																	</a>
																	<a class="add-quick-view" href="javascript:void(0);">
																		<span class="icon">
																			<i class="bardy bardy-quick-view"></i>
																			<i class="hover-icon bardy bardy-quick-view"></i>
																		</span>
																	</a>
																</div>
															</div>
														</div>
														<div class="product-desc">
															<div class="product-info">
																<h4 class="title"><a href="shop-single.php">7. Sample
																		affiliate product</a></h4>
																<div class="star-content">
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																</div>
																<div class="prices">
																	<span class="price">Tk 29.00</span>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!--== End Shop Item ==-->

												<!--== Start Shop Item ==-->
												<div class="product-item">
													<div class="inner-content">
														<div class="product-thumb">
															<a href="shop-single.php">
																<img class="w-100" src="assets/img/chairs/chair8.jpg" alt="Image-HasTech">
															</a>
															<div class="product-action">
																<div class="addto-wrap">
																	<a class="add-cart" href="shop-cart.php">
																		<span class="icon">
																			<i class="bardy bardy-shopping-cart"></i>
																			<i class="hover-icon bardy bardy-shopping-cart"></i>
																		</span>
																	</a>
																	<a class="add-wishlist" href="wishlist.php">
																		<span class="icon">
																			<i class="bardy bardy-wishlist"></i>
																			<i class="hover-icon bardy bardy-wishlist"></i>
																		</span>
																	</a>
																	<a class="add-quick-view" href="javascript:void(0);">
																		<span class="icon">
																			<i class="bardy bardy-quick-view"></i>
																			<i class="hover-icon bardy bardy-quick-view"></i>
																		</span>
																	</a>
																</div>
															</div>
															<div class="ht-countdown ht-countdown-style" data-date="4/24/2022"></div>
														</div>
														<div class="product-desc">
															<div class="product-info">
																<h4 class="title"><a href="shop-single.php">8.
																		Countdown product</a></h4>
																<div class="star-content">
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																</div>
																<div class="prices">
																	<span class="price">Tk 39.00 </span>
																	<span class="price-old">Tk 60.00</span>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!--== End Shop Item ==-->
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="sofa" role="tabpanel" aria-labelledby="sofa-tab">
										<div class="row">
											<div class="col-sm-6 col-lg-4 col-xl-3">
												<!--== Start Shop Item ==-->
												<div class="product-item">
													<div class="inner-content">
														<div class="product-thumb">
															<a href="shop-single.php">
																<img class="w-100" src="assets/img/sofas/sofa1.jpg" alt="Image-HasTech">
															</a>
															<div class="product-action">
																<div class="addto-wrap">
																	<a class="add-cart" href="shop-cart.php">
																		<span class="icon">
																			<i class="bardy bardy-shopping-cart"></i>
																			<i class="hover-icon bardy bardy-shopping-cart"></i>
																		</span>
																	</a>
																	<a class="add-wishlist" href="wishlist.php">
																		<span class="icon">
																			<i class="bardy bardy-wishlist"></i>
																			<i class="hover-icon bardy bardy-wishlist"></i>
																		</span>
																	</a>
																	<a class="add-quick-view" href="javascript:void(0);">
																		<span class="icon">
																			<i class="bardy bardy-quick-view"></i>
																			<i class="hover-icon bardy bardy-quick-view"></i>
																		</span>
																	</a>
																</div>
															</div>
														</div>
														<div class="product-desc">
															<div class="product-info">
																<h4 class="title"><a href="shop-single.php">1. New and
																		sale badge product</a></h4>
																<div class="star-content">
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																</div>
																<div class="prices">
																	<span class="price">Tk 110.00 </span>
																	<span class="price-old">Tk 130.00</span>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!--== End Shop Item ==-->

												<!--== Start Shop Item ==-->
												<div class="product-item">
													<div class="inner-content">
														<div class="product-thumb">
															<a href="shop-single.php">
																<img class="w-100" src="assets/img/sofas/sofa5.jpg" alt="Image-HasTech">
															</a>
															<div class="product-action">
																<div class="addto-wrap">
																	<a class="add-cart" href="shop-cart.php">
																		<span class="icon">
																			<i class="bardy bardy-shopping-cart"></i>
																			<i class="hover-icon bardy bardy-shopping-cart"></i>
																		</span>
																	</a>
																	<a class="add-wishlist" href="wishlist.php">
																		<span class="icon">
																			<i class="bardy bardy-wishlist"></i>
																			<i class="hover-icon bardy bardy-wishlist"></i>
																		</span>
																	</a>
																	<a class="add-quick-view" href="javascript:void(0);">
																		<span class="icon">
																			<i class="bardy bardy-quick-view"></i>
																			<i class="hover-icon bardy bardy-quick-view"></i>
																		</span>
																	</a>
																</div>
															</div>
														</div>
														<div class="product-desc">
															<div class="product-info">
																<h4 class="title"><a href="shop-single.php">2. New
																		badge product</a></h4>
																<div class="star-content">
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																</div>
																<div class="prices">
																	<span class="price">Tk 80.00 </span>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!--== End Shop Item ==-->
											</div>
											<div class="col-sm-6 col-lg-4 col-xl-3">
												<!--== Start Shop Item ==-->
												<div class="product-item">
													<div class="inner-content">
														<div class="product-thumb">
															<a href="shop-single.php">
																<img class="w-100" src="assets/img/sofas/sofa2.jpg" alt="Image-HasTech">
															</a>
															<div class="product-action">
																<div class="addto-wrap">
																	<a class="add-cart" href="shop-cart.php">
																		<span class="icon">
																			<i class="bardy bardy-shopping-cart"></i>
																			<i class="hover-icon bardy bardy-shopping-cart"></i>
																		</span>
																	</a>
																	<a class="add-wishlist" href="wishlist.php">
																		<span class="icon">
																			<i class="bardy bardy-wishlist"></i>
																			<i class="hover-icon bardy bardy-wishlist"></i>
																		</span>
																	</a>
																	<a class="add-quick-view" href="javascript:void(0);">
																		<span class="icon">
																			<i class="bardy bardy-quick-view"></i>
																			<i class="hover-icon bardy bardy-quick-view"></i>
																		</span>
																	</a>
																</div>
															</div>
														</div>
														<div class="product-desc">
															<div class="product-info">
																<h4 class="title"><a href="shop-single.php">3. Variable
																		product</a></h4>
																<div class="star-content">
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																</div>
																<div class="prices">
																	<span class="price">Tk 40.00 </span>
																	<span class="price-old">Tk 85.00</span>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!--== End Shop Item ==-->

												<!--== Start Shop Item ==-->
												<div class="product-item">
													<div class="inner-content">
														<div class="product-thumb">
															<a href="shop-single.php">
																<img class="w-100" src="assets/img/sofas/sofa6.jpg" alt="Image-HasTech">
															</a>
															<div class="product-action">
																<div class="addto-wrap">
																	<a class="add-cart" href="shop-cart.php">
																		<span class="icon">
																			<i class="bardy bardy-shopping-cart"></i>
																			<i class="hover-icon bardy bardy-shopping-cart"></i>
																		</span>
																	</a>
																	<a class="add-wishlist" href="wishlist.php">
																		<span class="icon">
																			<i class="bardy bardy-wishlist"></i>
																			<i class="hover-icon bardy bardy-wishlist"></i>
																		</span>
																	</a>
																	<a class="add-quick-view" href="javascript:void(0);">
																		<span class="icon">
																			<i class="bardy bardy-quick-view"></i>
																			<i class="hover-icon bardy bardy-quick-view"></i>
																		</span>
																	</a>
																</div>
															</div>
														</div>
														<div class="product-desc">
															<div class="product-info">
																<h4 class="title"><a href="shop-single.php">4. Soldout
																		product</a></h4>
																<div class="star-content">
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																</div>
																<div class="prices">
																	<span class="price">Tk 19.00 </span>
																	<span class="price-old">Tk 29.00</span>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!--== End Shop Item ==-->
											</div>
											<div class="col-sm-6 col-lg-4 col-xl-3 d-none d-lg-block">
												<!--== Start Shop Item ==-->
												<div class="product-item">
													<div class="inner-content">
														<div class="product-thumb">
															<a href="shop-single.php">
																<img class="w-100" src="assets/img/sofas/sofa3.jpg" alt="Image-HasTech">
															</a>
															<div class="product-action">
																<div class="addto-wrap">
																	<a class="add-cart" href="shop-cart.php">
																		<span class="icon">
																			<i class="bardy bardy-shopping-cart"></i>
																			<i class="hover-icon bardy bardy-shopping-cart"></i>
																		</span>
																	</a>
																	<a class="add-wishlist" href="wishlist.php">
																		<span class="icon">
																			<i class="bardy bardy-wishlist"></i>
																			<i class="hover-icon bardy bardy-wishlist"></i>
																		</span>
																	</a>
																	<a class="add-quick-view" href="javascript:void(0);">
																		<span class="icon">
																			<i class="bardy bardy-quick-view"></i>
																			<i class="hover-icon bardy bardy-quick-view"></i>
																		</span>
																	</a>
																</div>
															</div>
														</div>
														<div class="product-desc">
															<div class="product-info">
																<h4 class="title"><a href="shop-single.php">5. Simple
																		product</a></h4>
																<div class="star-content">
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																</div>
																<div class="prices">
																	<span class="price">Tk 50.00</span>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!--== End Shop Item ==-->

												<!--== Start Shop Item ==-->
												<div class="product-item">
													<div class="inner-content">
														<div class="product-thumb">
															<a href="shop-single.php">
																<img class="w-100" src="assets/img/sofas/sofa7.jpg" alt="Image-HasTech">
															</a>
															<div class="product-action">
																<div class="addto-wrap">
																	<a class="add-cart" href="shop-cart.php">
																		<span class="icon">
																			<i class="bardy bardy-shopping-cart"></i>
																			<i class="hover-icon bardy bardy-shopping-cart"></i>
																		</span>
																	</a>
																	<a class="add-wishlist" href="wishlist.php">
																		<span class="icon">
																			<i class="bardy bardy-wishlist"></i>
																			<i class="hover-icon bardy bardy-wishlist"></i>
																		</span>
																	</a>
																	<a class="add-quick-view" href="javascript:void(0);">
																		<span class="icon">
																			<i class="bardy bardy-quick-view"></i>
																			<i class="hover-icon bardy bardy-quick-view"></i>
																		</span>
																	</a>
																</div>
															</div>
														</div>
														<div class="product-desc">
															<div class="product-info">
																<h4 class="title"><a href="shop-single.php">6. Variable
																		with soldout product</a></h4>
																<div class="star-content">
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																</div>
																<div class="prices">
																	<span class="price">Tk 55.00</span>
																	<span class="price-old">Tk 75.00</span>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!--== End Shop Item ==-->
											</div>
											<div class="col-sm-6 col-lg-4 col-xl-3 d-none d-xl-block">
												<!--== Start Shop Item ==-->
												<div class="product-item">
													<div class="inner-content">
														<div class="product-thumb">
															<a href="shop-single.php">
																<img class="w-100" src="assets/img/sofas/sofa4.jpg" alt="Image-HasTech">
															</a>
															<div class="product-action">
																<div class="addto-wrap">
																	<a class="add-cart" href="shop-cart.php">
																		<span class="icon">
																			<i class="bardy bardy-shopping-cart"></i>
																			<i class="hover-icon bardy bardy-shopping-cart"></i>
																		</span>
																	</a>
																	<a class="add-wishlist" href="wishlist.php">
																		<span class="icon">
																			<i class="bardy bardy-wishlist"></i>
																			<i class="hover-icon bardy bardy-wishlist"></i>
																		</span>
																	</a>
																	<a class="add-quick-view" href="javascript:void(0);">
																		<span class="icon">
																			<i class="bardy bardy-quick-view"></i>
																			<i class="hover-icon bardy bardy-quick-view"></i>
																		</span>
																	</a>
																</div>
															</div>
														</div>
														<div class="product-desc">
															<div class="product-info">
																<h4 class="title"><a href="shop-single.php">7. Sample
																		affiliate product</a></h4>
																<div class="star-content">
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																</div>
																<div class="prices">
																	<span class="price">Tk 29.00</span>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!--== End Shop Item ==-->

												<!--== Start Shop Item ==-->
												<div class="product-item">
													<div class="inner-content">
														<div class="product-thumb">
															<a href="shop-single.php">
																<img class="w-100" src="assets/img/sofas/sofa8.jpg" alt="Image-HasTech">
															</a>
															<div class="product-action">
																<div class="addto-wrap">
																	<a class="add-cart" href="shop-cart.php">
																		<span class="icon">
																			<i class="bardy bardy-shopping-cart"></i>
																			<i class="hover-icon bardy bardy-shopping-cart"></i>
																		</span>
																	</a>
																	<a class="add-wishlist" href="wishlist.php">
																		<span class="icon">
																			<i class="bardy bardy-wishlist"></i>
																			<i class="hover-icon bardy bardy-wishlist"></i>
																		</span>
																	</a>
																	<a class="add-quick-view" href="javascript:void(0);">
																		<span class="icon">
																			<i class="bardy bardy-quick-view"></i>
																			<i class="hover-icon bardy bardy-quick-view"></i>
																		</span>
																	</a>
																</div>
															</div>
															<div class="ht-countdown ht-countdown-style" data-date="4/24/2022"></div>
														</div>
														<div class="product-desc">
															<div class="product-info">
																<h4 class="title"><a href="shop-single.php">8.
																		Countdown product</a></h4>
																<div class="star-content">
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																</div>
																<div class="prices">
																	<span class="price">Tk 39.00 </span>
																	<span class="price-old">Tk 60.00</span>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!--== End Shop Item ==-->
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--== End Product Area Wrapper ==-->

			<!--== Start Single Banner Wrapper ==-->
			<section>
				<div class="container pt--0 pb--0">
					<div class="row">
						<div class="col-12">
							<!--== Start Single Banner Item ==-->
							<div class="single-banner-image" data-aos="fade-right">
								<a href="shop.php">
									<img class="w-100" src="assets/img/home/home3.jpg" alt="Image-HasTech">
								</a>
							</div>
							<!--== End Single Banner Item ==-->
						</div>
					</div>
				</div>
			</section>
			<!--== End Single Banner Wrapper ==-->

			<!--== Start Product Area Wrapper ==-->
			<section class="product-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 m-auto">
							<div class="section-title text-center">
								<h2 class="title">New Arrivals</h2>
								<div class="desc">
									<p>Some of our customers say that they trust us and buy our product without any
										hesitation because
										they believe us and always happy to buy our product.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="swiper-container swiper-nav swiper-slide-gap product-slider-container">
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<!--== Start Shop Item ==-->
										<div class="product-item">
											<div class="inner-content">
												<div class="product-thumb">
													<a href="shop-single.php">
														<img class="w-100" src="assets/img/shop/1.jpg" alt="Image-HasTech">
													</a>
													<div class="product-action">
														<div class="addto-wrap">
															<a class="add-cart" href="shop-cart.php">
																<span class="icon">
																	<i class="bardy bardy-shopping-cart"></i>
																	<i class="hover-icon bardy bardy-shopping-cart"></i>
																</span>
															</a>
															<a class="add-wishlist" href="wishlist.php">
																<span class="icon">
																	<i class="bardy bardy-wishlist"></i>
																	<i class="hover-icon bardy bardy-wishlist"></i>
																</span>
															</a>
															<a class="add-quick-view" href="javascript:void(0);">
																<span class="icon">
																	<i class="bardy bardy-quick-view"></i>
																	<i class="hover-icon bardy bardy-quick-view"></i>
																</span>
															</a>
														</div>
													</div>
												</div>
												<div class="product-desc">
													<div class="product-info">
														<h4 class="title"><a href="shop-single.php">1. New and sale
																badge product</a></h4>
														<div class="star-content">
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<div class="prices">
															<span class="price">Tk 110.00 </span>
															<span class="price-old">Tk 130.00</span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!--== End Shop Item ==-->
									</div>
									<div class="swiper-slide">
										<!--== Start Shop Item ==-->
										<div class="product-item">
											<div class="inner-content">
												<div class="product-thumb">
													<a href="shop-single.php">
														<img class="w-100" src="assets/img/shop/2.jpg" alt="Image-HasTech">
													</a>
													<div class="product-action">
														<div class="addto-wrap">
															<a class="add-cart" href="shop-cart.php">
																<span class="icon">
																	<i class="bardy bardy-shopping-cart"></i>
																	<i class="hover-icon bardy bardy-shopping-cart"></i>
																</span>
															</a>
															<a class="add-wishlist" href="wishlist.php">
																<span class="icon">
																	<i class="bardy bardy-wishlist"></i>
																	<i class="hover-icon bardy bardy-wishlist"></i>
																</span>
															</a>
															<a class="add-quick-view" href="javascript:void(0);">
																<span class="icon">
																	<i class="bardy bardy-quick-view"></i>
																	<i class="hover-icon bardy bardy-quick-view"></i>
																</span>
															</a>
														</div>
													</div>
												</div>
												<div class="product-desc">
													<div class="product-info">
														<h4 class="title"><a href="shop-single.php">2. New badge
																product</a></h4>
														<div class="star-content">
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<div class="prices">
															<span class="price">Tk 80.00 </span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!--== End Shop Item ==-->
									</div>
									<div class="swiper-slide">
										<!--== Start Shop Item ==-->
										<div class="product-item">
											<div class="inner-content">
												<div class="product-thumb">
													<a href="shop-single.php">
														<img class="w-100" src="assets/img/shop/3.jpg" alt="Image-HasTech">
													</a>
													<div class="product-action">
														<div class="addto-wrap">
															<a class="add-cart" href="shop-cart.php">
																<span class="icon">
																	<i class="bardy bardy-shopping-cart"></i>
																	<i class="hover-icon bardy bardy-shopping-cart"></i>
																</span>
															</a>
															<a class="add-wishlist" href="wishlist.php">
																<span class="icon">
																	<i class="bardy bardy-wishlist"></i>
																	<i class="hover-icon bardy bardy-wishlist"></i>
																</span>
															</a>
															<a class="add-quick-view" href="javascript:void(0);">
																<span class="icon">
																	<i class="bardy bardy-quick-view"></i>
																	<i class="hover-icon bardy bardy-quick-view"></i>
																</span>
															</a>
														</div>
													</div>
												</div>
												<div class="product-desc">
													<div class="product-info">
														<h4 class="title"><a href="shop-single.php">3. Variable
																product</a></h4>
														<div class="star-content">
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<div class="prices">
															<span class="price">Tk 40.00 </span>
															<span class="price-old">Tk 85.00</span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!--== End Shop Item ==-->
									</div>
									<div class="swiper-slide">
										<!--== Start Shop Item ==-->
										<div class="product-item">
											<div class="inner-content">
												<div class="product-thumb">
													<a href="shop-single.php">
														<img class="w-100" src="assets/img/shop/4.jpg" alt="Image-HasTech">
													</a>
													<div class="product-action">
														<div class="addto-wrap">
															<a class="add-cart" href="shop-cart.php">
																<span class="icon">
																	<i class="bardy bardy-shopping-cart"></i>
																	<i class="hover-icon bardy bardy-shopping-cart"></i>
																</span>
															</a>
															<a class="add-wishlist" href="wishlist.php">
																<span class="icon">
																	<i class="bardy bardy-wishlist"></i>
																	<i class="hover-icon bardy bardy-wishlist"></i>
																</span>
															</a>
															<a class="add-quick-view" href="javascript:void(0);">
																<span class="icon">
																	<i class="bardy bardy-quick-view"></i>
																	<i class="hover-icon bardy bardy-quick-view"></i>
																</span>
															</a>
														</div>
													</div>
												</div>
												<div class="product-desc">
													<div class="product-info">
														<h4 class="title"><a href="shop-single.php">4. Soldout
																product</a></h4>
														<div class="star-content">
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<div class="prices">
															<span class="price">Tk 19.00 </span>
															<span class="price-old">Tk 29.00</span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!--== End Shop Item ==-->
									</div>
									<div class="swiper-slide">
										<!--== Start Shop Item ==-->
										<div class="product-item">
											<div class="inner-content">
												<div class="product-thumb">
													<a href="shop-single.php">
														<img class="w-100" src="assets/img/shop/5.jpg" alt="Image-HasTech">
													</a>
													<div class="product-action">
														<div class="addto-wrap">
															<a class="add-cart" href="shop-cart.php">
																<span class="icon">
																	<i class="bardy bardy-shopping-cart"></i>
																	<i class="hover-icon bardy bardy-shopping-cart"></i>
																</span>
															</a>
															<a class="add-wishlist" href="wishlist.php">
																<span class="icon">
																	<i class="bardy bardy-wishlist"></i>
																	<i class="hover-icon bardy bardy-wishlist"></i>
																</span>
															</a>
															<a class="add-quick-view" href="javascript:void(0);">
																<span class="icon">
																	<i class="bardy bardy-quick-view"></i>
																	<i class="hover-icon bardy bardy-quick-view"></i>
																</span>
															</a>
														</div>
													</div>
												</div>
												<div class="product-desc">
													<div class="product-info">
														<h4 class="title"><a href="shop-single.php">5. Simple
																product</a></h4>
														<div class="star-content">
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<div class="prices">
															<span class="price">Tk 50.00</span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!--== End Shop Item ==-->
									</div>
									<div class="swiper-slide">
										<!--== Start Shop Item ==-->
										<div class="product-item">
											<div class="inner-content">
												<div class="product-thumb">
													<a href="shop-single.php">
														<img class="w-100" src="assets/img/shop/6.jpg" alt="Image-HasTech">
													</a>
													<div class="product-action">
														<div class="addto-wrap">
															<a class="add-cart" href="shop-cart.php">
																<span class="icon">
																	<i class="bardy bardy-shopping-cart"></i>
																	<i class="hover-icon bardy bardy-shopping-cart"></i>
																</span>
															</a>
															<a class="add-wishlist" href="wishlist.php">
																<span class="icon">
																	<i class="bardy bardy-wishlist"></i>
																	<i class="hover-icon bardy bardy-wishlist"></i>
																</span>
															</a>
															<a class="add-quick-view" href="javascript:void(0);">
																<span class="icon">
																	<i class="bardy bardy-quick-view"></i>
																	<i class="hover-icon bardy bardy-quick-view"></i>
																</span>
															</a>
														</div>
													</div>
												</div>
												<div class="product-desc">
													<div class="product-info">
														<h4 class="title"><a href="shop-single.php">6. Variable with
																soldout product</a></h4>
														<div class="star-content">
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<div class="prices">
															<span class="price">Tk 55.00</span>
															<span class="price-old">Tk 75.00</span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!--== End Shop Item ==-->
									</div>
									<div class="swiper-slide">
										<!--== Start Shop Item ==-->
										<div class="product-item">
											<div class="inner-content">
												<div class="product-thumb">
													<a href="shop-single.php">
														<img class="w-100" src="assets/img/shop/7.jpg" alt="Image-HasTech">
													</a>
													<div class="product-action">
														<div class="addto-wrap">
															<a class="add-cart" href="shop-cart.php">
																<span class="icon">
																	<i class="bardy bardy-shopping-cart"></i>
																	<i class="hover-icon bardy bardy-shopping-cart"></i>
																</span>
															</a>
															<a class="add-wishlist" href="wishlist.php">
																<span class="icon">
																	<i class="bardy bardy-wishlist"></i>
																	<i class="hover-icon bardy bardy-wishlist"></i>
																</span>
															</a>
															<a class="add-quick-view" href="javascript:void(0);">
																<span class="icon">
																	<i class="bardy bardy-quick-view"></i>
																	<i class="hover-icon bardy bardy-quick-view"></i>
																</span>
															</a>
														</div>
													</div>
												</div>
												<div class="product-desc">
													<div class="product-info">
														<h4 class="title"><a href="shop-single.php">7. Sample affiliate
																product</a></h4>
														<div class="star-content">
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<div class="prices">
															<span class="price">Tk 29.00</span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!--== End Shop Item ==-->
									</div>
									<div class="swiper-slide">
										<!--== Start Shop Item ==-->
										<div class="product-item">
											<div class="inner-content">
												<div class="product-thumb">
													<a href="shop-single.php">
														<img class="w-100" src="assets/img/shop/8.jpg" alt="Image-HasTech">
													</a>
													<div class="product-action">
														<div class="addto-wrap">
															<a class="add-cart" href="shop-cart.php">
																<span class="icon">
																	<i class="bardy bardy-shopping-cart"></i>
																	<i class="hover-icon bardy bardy-shopping-cart"></i>
																</span>
															</a>
															<a class="add-wishlist" href="wishlist.php">
																<span class="icon">
																	<i class="bardy bardy-wishlist"></i>
																	<i class="hover-icon bardy bardy-wishlist"></i>
																</span>
															</a>
															<a class="add-quick-view" href="javascript:void(0);">
																<span class="icon">
																	<i class="bardy bardy-quick-view"></i>
																	<i class="hover-icon bardy bardy-quick-view"></i>
																</span>
															</a>
														</div>
													</div>
													<div class="ht-countdown ht-countdown-style" data-date="4/24/2022">
													</div>
												</div>
												<div class="product-desc">
													<div class="product-info">
														<h4 class="title"><a href="shop-single.php">8. Countdown
																product</a></h4>
														<div class="star-content">
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<div class="prices">
															<span class="price">Tk 39.00 </span>
															<span class="price-old">Tk 60.00</span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!--== End Shop Item ==-->
									</div>
									<div class="swiper-slide">
										<!--== Start Shop Item ==-->
										<div class="product-item">
											<div class="inner-content">
												<div class="product-thumb">
													<a href="shop-single.php">
														<img class="w-100" src="assets/img/shop/9.jpg" alt="Image-HasTech">
													</a>
													<div class="product-action">
														<div class="addto-wrap">
															<a class="add-cart" href="shop-cart.php">
																<span class="icon">
																	<i class="bardy bardy-shopping-cart"></i>
																	<i class="hover-icon bardy bardy-shopping-cart"></i>
																</span>
															</a>
															<a class="add-wishlist" href="wishlist.php">
																<span class="icon">
																	<i class="bardy bardy-wishlist"></i>
																	<i class="hover-icon bardy bardy-wishlist"></i>
																</span>
															</a>
															<a class="add-quick-view" href="javascript:void(0);">
																<span class="icon">
																	<i class="bardy bardy-quick-view"></i>
																	<i class="hover-icon bardy bardy-quick-view"></i>
																</span>
															</a>
														</div>
													</div>
												</div>
												<div class="product-desc">
													<div class="product-info">
														<h4 class="title"><a href="shop-single.php">9. Without
																shortcode product</a></h4>
														<div class="star-content">
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<div class="prices">
															<span class="price">Tk 79.00</span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!--== End Shop Item ==-->
									</div>
									<div class="swiper-slide">
										<!--== Start Shop Item ==-->
										<div class="product-item">
											<div class="inner-content">
												<div class="product-thumb">
													<a href="shop-single.php">
														<img class="w-100" src="assets/img/shop/10.jpg" alt="Image-HasTech">
													</a>
													<div class="product-action">
														<div class="addto-wrap">
															<a class="add-cart" href="shop-cart.php">
																<span class="icon">
																	<i class="bardy bardy-shopping-cart"></i>
																	<i class="hover-icon bardy bardy-shopping-cart"></i>
																</span>
															</a>
															<a class="add-wishlist" href="wishlist.php">
																<span class="icon">
																	<i class="bardy bardy-wishlist"></i>
																	<i class="hover-icon bardy bardy-wishlist"></i>
																</span>
															</a>
															<a class="add-quick-view" href="javascript:void(0);">
																<span class="icon">
																	<i class="bardy bardy-quick-view"></i>
																	<i class="hover-icon bardy bardy-quick-view"></i>
																</span>
															</a>
														</div>
													</div>
												</div>
												<div class="product-desc">
													<div class="product-info">
														<h4 class="title"><a href="shop-single.php">11. Product with
																video</a></h4>
														<div class="star-content">
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<div class="prices">
															<span class="price">Tk 39.00</span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!--== End Shop Item ==-->
									</div>
								</div>

								<!--== Add Swiper navigation Buttons ==-->
								<div class="swiper-button swiper-button-prev"><i class="fa fa-angle-left"></i></div>
								<div class="swiper-button swiper-button-next"><i class="fa fa-angle-right"></i></div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--== End Product Area Wrapper ==-->

			<!--== Start Divider Area Wrapper ==-->
			<section class="divider-area divider-offer-area bg-color-222">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="divider-style-wrap text-center">
								<div class="divider-content">
									<h4 class="sub-title">Special <span>Offers</span> for Subscription</h4>
									<h4 class="title">GET INSTANT DISCOUNT FOR MEMBERSHIP</h4>
									<p>Subscribe our newsletter and get all latest news abot our latest <br>products,
										promotions, offers
										and discount</p>
									<div class="newsletter-content-wrap">
										<div class="newsletter-form">
											<div class="suscribe-form">
												<input type="email" class="form-control subscribe-inp" name="email" placeholder="Enter your email here">
												<button class="btn-submit subscribe-btn" type="button">Subscribe</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--== End Divider Area Wrapper ==-->

			<!--== Start Blog Area Wrapper ==-->
			<section class="blog-area">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-lg-6 m-auto">
							<div class="section-title text-center">
								<h2 class="title">Latest Blog</h2>
								<div class="desc">
									<p>Some of our customers say that they trust us and buy our product without any
										hesitation because
										they believe us and always happy to buy our product.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="swiper-container swiper-nav swiper-slide-gap post-slider-container">
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<!--== Start Blog Item ==-->
										<div class="post-item">
											<div class="inner-content">
												<div class="thumb">
													<a href="single-blog.php">
														<img class="w-100" src="assets/img/blog/1.jpg" alt="Image-HasTech">
													</a>
												</div>
												<div class="content">
													<h4 class="title"><a href="single-blog.php">Standard dummy text
															ever since</a></h4>
													<p>Sed quia consequuntur magni dolores eos qui ratione voluptatem
														sequi nesciunt. Neque porro
														quisquam est,...</p>
													<a class="btn-link" href="single-blog.php">Read More</a>
													<ul class="meta-info">
														<li><span>By - </span><a class="author" href="blog.php">Diana
																Demo Admin</a></li>
														<li><span>01 February, 2021</span></li>
													</ul>
												</div>
											</div>
										</div>
										<!--== End Blog Item ==-->
									</div>
									<div class="swiper-slide">
										<!--== Start Blog Item ==-->
										<div class="post-item">
											<div class="inner-content">
												<div class="thumb">
													<a href="single-blog.php">
														<img class="w-100" src="assets/img/blog/2.jpg" alt="Image-HasTech">
													</a>
												</div>
												<div class="content">
													<h4 class="title"><a href="single-blog.php">Make a type specimen
															book</a></h4>
													<p>Sed quia consequuntur magni dolores eos qui ratione voluptatem
														sequi nesciunt. Neque porro
														quisquam est,...</p>
													<a class="btn-link" href="single-blog.php">Read More</a>
													<ul class="meta-info">
														<li><span>By - </span><a class="author" href="blog.php">Diana
																Demo Admin</a></li>
														<li><span>01 February, 2021</span></li>
													</ul>
												</div>
											</div>
										</div>
										<!--== End Blog Item ==-->
									</div>
									<div class="swiper-slide">
										<!--== Start Blog Item ==-->
										<div class="post-item">
											<div class="inner-content">
												<div class="thumb">
													<a href="single-blog.php">
														<img class="w-100" src="assets/img/blog/3.jpg" alt="Image-HasTech">
													</a>
												</div>
												<div class="content">
													<h4 class="title"><a href="single-blog.php">Lorem Ipsum is simply
															dummy</a></h4>
													<p>Sed quia consequuntur magni dolores eos qui ratione voluptatem
														sequi nesciunt. Neque porro
														quisquam est,...</p>
													<a class="btn-link" href="single-blog.php">Read More</a>
													<ul class="meta-info">
														<li><span>By - </span><a class="author" href="blog.php">Diana
																Demo Admin</a></li>
														<li><span>01 February, 2021</span></li>
													</ul>
												</div>
											</div>
										</div>
										<!--== End Blog Item ==-->
									</div>
									<div class="swiper-slide">
										<!--== Start Blog Item ==-->
										<div class="post-item">
											<div class="inner-content">
												<div class="thumb">
													<a href="single-blog.php">
														<img class="w-100" src="assets/img/blog/4.jpg" alt="Image-HasTech">
													</a>
												</div>
												<div class="content">
													<h4 class="title"><a href="single-blog.php">It is a long
															established</a></h4>
													<p>Sed quia consequuntur magni dolores eos qui ratione voluptatem
														sequi nesciunt. Neque porro
														quisquam est,...</p>
													<a class="btn-link" href="single-blog.php">Read More</a>
													<ul class="meta-info">
														<li><span>By - </span><a class="author" href="blog.php">Diana
																Demo Admin</a></li>
														<li><span>01 February, 2021</span></li>
													</ul>
												</div>
											</div>
										</div>
										<!--== End Blog Item ==-->
									</div>
									<div class="swiper-slide">
										<!--== Start Blog Item ==-->
										<div class="post-item">
											<div class="inner-content">
												<div class="thumb">
													<a href="single-blog.php">
														<img class="w-100" src="assets/img/blog/5.jpg" alt="Image-HasTech">
													</a>
												</div>
												<div class="content">
													<h4 class="title"><a href="single-blog.php">Sed quia non
															numquam</a></h4>
													<p>Sed quia consequuntur magni dolores eos qui ratione voluptatem
														sequi nesciunt. Neque porro
														quisquam est,...</p>
													<a class="btn-link" href="single-blog.php">Read More</a>
													<ul class="meta-info">
														<li><span>By - </span><a class="author" href="blog.php">Diana
																Demo Admin</a></li>
														<li><span>01 February, 2021</span></li>
													</ul>
												</div>
											</div>
										</div>
										<!--== End Blog Item ==-->
									</div>
									<div class="swiper-slide">
										<!--== Start Blog Item ==-->
										<div class="post-item">
											<div class="inner-content">
												<div class="thumb">
													<a href="single-blog.php">
														<img class="w-100" src="assets/img/blog/6.jpg" alt="Image-HasTech">
													</a>
												</div>
												<div class="content">
													<h4 class="title"><a href="single-blog.php">Ratione voluptatem
															sequi nesciunt</a></h4>
													<p>Sed quia consequuntur magni dolores eos qui ratione voluptatem
														sequi nesciunt. Neque porro
														quisquam est,...</p>
													<a class="btn-link" href="single-blog.php">Read More</a>
													<ul class="meta-info">
														<li><span>By - </span><a class="author" href="blog.php">Diana
																Demo Admin</a></li>
														<li><span>01 February, 2021</span></li>
													</ul>
												</div>
											</div>
										</div>
										<!--== End Blog Item ==-->
									</div>
								</div>

								<!--== Add Swiper navigation Buttons ==-->
								<div class="swiper-button swiper-button-prev"><i class="fa fa-angle-left"></i></div>
								<div class="swiper-button swiper-button-next"><i class="fa fa-angle-right"></i></div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--== End Blog Area Wrapper ==-->

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
								<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
									piece of
									classical Latin literature from 45 BC, making it over 2000 years old. Richard
									McClintock, a Latin
									professor at Hampden-Sydney College in Virginia,</p>
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
	<script src="assets/js/subscribe.js"></script>


</body>

</html>