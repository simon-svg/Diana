<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<title>Diana – Furniture Store eCommerce Bootstrap5 Template</title>

	<!--== Favicon ==-->
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
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
						<?php
						require_once "php/admin/home/index.php";
						$obj = new Home();
						$result = $obj->select(false, "php/connect.php");
						foreach ($result as $res) { ?>
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
										<button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all" type="button" role="tab" aria-controls="all" aria-selected="true">All</button>
									</li>
									<?php
									require_once "php/admin/productCategory/index.php";
									$objProdCat = new ProductCategory();
									$result = $objProdCat->select(false, "php/connect.php", "name");
									foreach ($result as $res) {
									?>
										<li class="nav-item" role="presentation">
											<button class="nav-link" id="<?php echo $res->name; ?>-tab" data-bs-toggle="tab" data-bs-target="#<?php echo $res->name; ?>" type="button" role="tab" aria-controls="<?php echo $res->name; ?>" aria-selected="false"><?php echo $res->name; ?></button>
										</li>
									<?php } ?>
								</ul>
								<div class="tab-content product-category-content" id="myTabContent">
									<div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
										<div class="row">
											<div class="col-12">
												<div class="swiper-container swiper-nav swiper-slide-gap product-swiper-pagination product-slider-container">
													<div class="swiper-wrapper">
														<?php
														require_once "php/admin/product/index.php";
														$objProd = new Product();
														$result = $objProd->select(false, "php/connect.php");
														$l = count($result);
														for ($i = 0; $i < $l; $i += 2) {
														?>
															<div class="swiper-slide">
																<!--== Start Shop Item ==-->
																<div class="product-item">
																	<div class="inner-content">
																		<div class="product-thumb">
																			<a href="shop-single.php?id=<?php echo $result[$i]->id ?>">
																				<img class="w-100" src="assets/img/product/<?php echo $result[$i]->img ?>" alt="<?php echo $result[$i]->name ?>">
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
																				</div>
																			</div>
																		</div>
																		<div class="product-desc">
																			<div class="product-info">
																				<h4 class="title">
																					<a href="shop-single.php?id=<?php echo $result[$i]->id ?>"><?php echo $result[$i]->name ?></a>
																				</h4>
																				<div class="star-content">
																					<i class="fa fa-star-o"></i>
																					<i class="fa fa-star-o"></i>
																					<i class="fa fa-star-o"></i>
																					<i class="fa fa-star-o"></i>
																					<i class="fa fa-star-o"></i>
																				</div>
																				<div class="prices">
																					<?php if (!empty($result[$i]->sale)) { ?>
																						<span class="price">$<?php echo $result[$i]->sale; ?></span>
																						<span class="price-old">$<?php echo $result[$i]->price; ?></span>
																					<?php } else { ?>
																						<span class="price">$<?php echo $result[$i]->price; ?></span>
																					<?php } ?>
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
																				<img class="w-100" src="assets/img/product/<?php echo $result[$i + 1]->img; ?>" alt="<?php echo $result[$i + 1]->name; ?>">
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
																				</div>
																			</div>
																		</div>
																		<div class="product-desc">
																			<div class="product-info">
																				<h4 class="title">
																					<a href="shop-single.php?id=<?php echo $result[$i + 1]->id; ?>">
																						<?php echo $result[$i + 1]->name; ?>
																					</a>
																				</h4>
																				<div class="star-content">
																					<i class="fa fa-star-o"></i>
																					<i class="fa fa-star-o"></i>
																					<i class="fa fa-star-o"></i>
																					<i class="fa fa-star-o"></i>
																					<i class="fa fa-star-o"></i>
																				</div>
																				<div class="prices">
																					<?php if (!empty($result[$i + 1]->sale)) { ?>
																						<span class="price">$<?php echo $result[$i + 1]->sale; ?></span>
																						<span class="price-old">$<?php echo $result[$i + 1]->price; ?></span>
																					<?php } else { ?>
																						<span class="price">$<?php echo $result[$i + 1]->price; ?></span>
																					<?php } ?>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																<!--== End Shop Item ==-->
															</div>
														<?php } ?>
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
											<?php
											require_once "php/admin/product/index.php";
											$objProd = new Product();
											$result = $objProd->selectInCat("php/connect.php", "chair");
											$l = count($result);
											for ($i = 0; $i < $l; $i += 2) {
											?>
												<div class="col-sm-6 col-lg-4 col-xl-3">
													<!--== Start Shop Item ==-->
													<div class="product-item">
														<div class="inner-content">
															<div class="product-thumb">
																<a href="shop-single.php?id=<?php echo $result[$i]->id ?>">
																	<img class="w-100" src="assets/img/product/<?php echo $result[$i]->img ?>" alt="<?php echo $result[$i]->name ?>">
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
																	</div>
																</div>
															</div>
															<div class="product-desc">
																<div class="product-info">
																	<h4 class="title">
																		<a href="shop-single.php?id=<?php echo $result[$i]->id ?>"><?php echo $result[$i]->name ?></a>
																	</h4>
																	<div class="star-content">
																		<i class="fa fa-star-o"></i>
																		<i class="fa fa-star-o"></i>
																		<i class="fa fa-star-o"></i>
																		<i class="fa fa-star-o"></i>
																		<i class="fa fa-star-o"></i>
																	</div>
																	<div class="prices">
																		<?php if (!empty($result[$i]->sale)) { ?>
																			<span class="price">$<?php echo $result[$i]->sale; ?></span>
																			<span class="price-old">$<?php echo $result[$i]->price; ?></span>
																		<?php } else { ?>
																			<span class="price">$<?php echo $result[$i]->price; ?></span>
																		<?php } ?>
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
																<a href="shop-single.php?id=<?php echo $result[$i + 1]->id; ?>">
																	<img class="w-100" src="assets/img/product/<?php echo $result[$i + 1]->img; ?>" alt="<?php echo $result[$i + 1]->name; ?>">
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
																	</div>
																</div>
															</div>
															<div class="product-desc">
																<div class="product-info">
																	<h4 class="title">
																		<a href="shop-single.php?id=<?php echo $result[$i + 1]->id; ?>"><?php echo $result[$i + 1]->name; ?></a>
																	</h4>
																	<div class="star-content">
																		<i class="fa fa-star-o"></i>
																		<i class="fa fa-star-o"></i>
																		<i class="fa fa-star-o"></i>
																		<i class="fa fa-star-o"></i>
																		<i class="fa fa-star-o"></i>
																	</div>
																	<div class="prices">
																		<?php if (!empty($result[$i + 1]->sale)) { ?>
																			<span class="price">$<?php echo $result[$i + 1]->sale; ?></span>
																			<span class="price-old">$<?php echo $result[$i + 1]->price; ?></span>
																		<?php } else { ?>
																			<span class="price">$<?php echo $result[$i + 1]->price; ?></span>
																		<?php } ?>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<!--== End Shop Item ==-->
												</div>
											<?php } ?>
										</div>
									</div>
									<div class="tab-pane fade" id="sofa" role="tabpanel" aria-labelledby="sofa-tab">
										<div class="row">
											<?php
											require_once "php/admin/product/index.php";
											$objProd = new Product();
											$result = $objProd->selectInCat("php/connect.php", "sofa");
											$l = count($result);
											for ($i = 0; $i < $l; $i += 2) {
											?>
												<div class="col-sm-6 col-lg-4 col-xl-3">
													<!--== Start Shop Item ==-->
													<div class="product-item">
														<div class="inner-content">
															<div class="product-thumb">
																<a href="shop-single.php?id=<?php echo $result[$i]->id; ?>">
																	<img class="w-100" src="assets/img/product/<?php echo $result[$i]->img; ?>" alt="<?php echo $result[$i]->name; ?>">
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
																	</div>
																</div>
															</div>
															<div class="product-desc">
																<div class="product-info">
																	<h4 class="title">
																		<a href="shop-single.php?id=<?php echo $result[$i]->id; ?>"><?php echo $result[$i]->name; ?></a>
																	</h4>
																	<div class="star-content">
																		<i class="fa fa-star-o"></i>
																		<i class="fa fa-star-o"></i>
																		<i class="fa fa-star-o"></i>
																		<i class="fa fa-star-o"></i>
																		<i class="fa fa-star-o"></i>
																	</div>
																	<div class="prices">
																		<?php if (!empty($result[$i]->sale)) { ?>
																			<span class="price">$<?php echo $result[$i]->sale; ?></span>
																			<span class="price-old">$<?php echo $result[$i]->price; ?></span>
																		<?php } else { ?>
																			<span class="price">$<?php echo $result[$i]->price; ?></span>
																		<?php } ?>
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
																<a href="shop-single.php?id=<?php echo $result[$i + 1]->id; ?>">
																	<img class="w-100" src="assets/img/product/<?php echo $result[$i + 1]->img; ?>" alt="<?php echo $result[$i + 1]->img; ?>">
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
																	</div>
																</div>
															</div>
															<div class="product-desc">
																<div class="product-info">
																	<h4 class="title">
																		<a href="shop-single.php?id=<?php echo $result[$i + 1]->id; ?>"><?php echo $result[$i + 1]->name; ?></a>
																	</h4>
																	<div class="star-content">
																		<i class="fa fa-star-o"></i>
																		<i class="fa fa-star-o"></i>
																		<i class="fa fa-star-o"></i>
																		<i class="fa fa-star-o"></i>
																		<i class="fa fa-star-o"></i>
																	</div>
																	<div class="prices">
																		<?php if (!empty($result[$i + 1]->sale)) { ?>
																			<span class="price">$<?php echo $result[$i + 1]->sale; ?></span>
																			<span class="price-old">$<?php echo $result[$i + 1]->price; ?></span>
																		<?php } else { ?>
																			<span class="price">$<?php echo $result[$i + 1]->price; ?></span>
																		<?php } ?>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<!--== End Shop Item ==-->
												</div>
											<?php } ?>
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
								<h2 class="title">Discount Products</h2>
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
									<?php
									require_once "php/admin/product/index.php";
									$products = new Product();
									$result =  $products->select(false, "php/connect.php", 'stock_time');
									foreach ($result as $res) { ?>
										<div class="swiper-slide">
											<!--== Start Shop Item ==-->
											<div class="product-item">
												<div class="inner-content">
													<div class="product-thumb">
														<a href="shop-single.php?id=<?php echo $res->id; ?>">
															<img class="w-100" src="assets/img/product/<?php echo $res->img; ?>" alt="<?php echo $res->name; ?>">
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
															</div>
														</div>
														<div class="ht-countdown ht-countdown-style" data-date="<?php echo $res->stock_time; ?>">
														</div>
														<div class="product-desc">
															<div class="product-info discount__products">
																<h4 class="title discount__products_inner">
																	<a href="shop-single.php?id=<?php echo $res->id; ?>"><?php echo $res->name; ?></a>
																</h4>
																<div class="star-content discount__products_inner">
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																</div>
																<div class="prices">
																	<?php if (!empty($res->sale)) { ?>
																		<span class="price">$<?php echo $res->sale; ?></span>
																		<span class="price-old">$<?php echo $res->price; ?></span>
																	<?php } else { ?>
																		<span class="price">$<?php echo $res->price; ?></span>
																	<?php } ?>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!--== End Shop Item ==-->
											</div>
										</div>
									<?php } ?>
								</div>
								<!--== Add Swiper navigation Buttons ==-->
								<div class="swiper-button swiper-button-prev"><i class="fa fa-angle-left"></i></div>
								<div class="swiper-button swiper-button-next"><i class="fa fa-angle-right"></i></div>
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
									<?php
									require_once "php/admin/blog/index.php";
									$objBlog = new Blog();
									$result = $objBlog->select(false, "php/connect.php");
									foreach ($result as $res) {
									?>
										<div class="swiper-slide">
											<!--== Start Blog Item ==-->
											<div class="post-item">
												<div class="inner-content">
													<div class="thumb">
														<a href="single-blog.php?blog_id=<?php echo $res->id; ?>">
															<img class="w-100" src="assets/img/blogs/<?php echo $res->img; ?>" alt="<?php echo $res->name; ?>">
														</a>
													</div>
													<div class="content">
														<h4 class="title blog__title">
															<a href="single-blog.php"><?php echo $res->title; ?></a>
														</h4>
														<p class="blog__text"><?php echo $res->text; ?></p>
														<a class="btn-link" href="single-blog.php?blog_id=<?php echo $res->id; ?>">Read More</a>
														<ul class="meta-info">
															<li><span><?php echo $res->date; ?></span></li>
														</ul>
													</div>
												</div>
											</div>
											<!--== End Blog Item ==-->
										</div>

									<?php }	?>
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