<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Product – Diana – Furniture Store eCommerce Bootstrap5 Template</title>
	<link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,400i,600,700" rel="stylesheet">
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
			$pagesTopSection = "Products";
			require_once "components/pagesTopSection.php";
			?>
			<!--== End Page Header Area Wrapper ==-->

			<!--== Start Product Area Wrapper ==-->
			<section class="product-area product-grid-list-area">
				<div class="container">
					<div class="row flex-row-reverse">
						<div class="col-lg-9">
							<div class="product-header-wrap">
								<div class="grid-list-option">
									<nav>
										<div class="nav nav-tabs" id="nav-tab" role="tablist">
											<button class="nav-link active" id="nav-grid-tab" data-bs-toggle="tab" data-bs-target="#nav-grid" type="button" role="tab" aria-controls="nav-grid" aria-selected="true"><span data-bg-img="assets/img/icons/1.webp"></span></button>
											<button class="nav-link" id="nav-list-tab" data-bs-toggle="tab" data-bs-target="#nav-list" type="button" role="tab" aria-controls="nav-list" aria-selected="false"><span data-bg-img="assets/img/icons/1.webp"></span></button>
										</div>
									</nav>
								</div>
								<div class="show-product-area">
									<p class="show-product">Showing 1 - 15 of 33 result</p>
								</div>
								<div class="nav-short-area">
									<div class="toolbar-shorter">
										<label for="SortBy">Sort by</label>
										<select id="SortBy" class="form-select" aria-label="Sort by">
											<option value="manual">Featured</option>
											<option value="best-selling">Best Selling</option>
											<option value="title-ascending" selected>Alphabetically, A-Z</option>
											<option value="title-descending">Alphabetically, Z-A</option>
											<option value="price-ascending">Price, low to high</option>
											<option value="price-descending">Price, high to low</option>
											<option value="created-descending">Date, new to old</option>
											<option value="created-ascending">Date, old to new</option>
										</select>
									</div>
								</div>
							</div>
							<div class="product-body-wrap">
								<div class="tab-content" id="nav-tabContent">
									<div class="tab-pane fade show active" id="nav-grid" role="tabpanel" aria-labelledby="nav-grid-tab">
										<div class="row">
											<div class="col-sm-6 col-xl-4">
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
																<h4 class="title"><a href="shop-single.php">1. New and sale badge product</a></h4>
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

											<div class="col-sm-6 col-xl-4">
												<!--== Start Shop Item ==-->
												<div class="product-item">
													<div class="inner-content">
														<div class="product-thumb">
															<a href="shop-single.php">
																<img class="w-100" src="assets/img/shop/11.jpg" alt="Image-HasTech">
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
																<h4 class="title"><a href="shop-single.php">10. This is the large title for testing large title and there is an image for testing</a></h4>
																<div class="star-content">
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																</div>
																<div class="prices">
																	<span class="price">Tk 19.00</span>
																	<span class="price-old">Tk 21.00</span>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!--== End Shop Item ==-->
											</div>

											<div class="col-sm-6 col-xl-4">
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
																<h4 class="title"><a href="shop-single.php">11. Product with video</a></h4>
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

											<div class="col-sm-6 col-xl-4">
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
																<h4 class="title"><a href="shop-single.php">2. New badge product</a></h4>
																<div class="star-content">
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																</div>
																<div class="prices">
																	<span class="price">Tk 80.00</span>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!--== End Shop Item ==-->
											</div>

											<div class="col-sm-6 col-xl-4">
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
																<h4 class="title"><a href="shop-single.php">3. Variable product</a></h4>
																<div class="star-content">
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																</div>
																<div class="prices">
																	<span class="price">Tk 40.00</span>
																	<span class="price-old">Tk 85.00</span>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!--== End Shop Item ==-->
											</div>

											<div class="col-sm-6 col-xl-4">
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
																<h4 class="title"><a href="shop-single.php">4. Soldout product</a></h4>
																<div class="star-content">
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																</div>
																<div class="prices">
																	<span class="price">Tk 19.00</span>
																	<span class="price-old">Tk 29.00</span>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!--== End Shop Item ==-->
											</div>

											<div class="col-sm-6 col-xl-4">
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
																<h4 class="title"><a href="shop-single.php">5. Simple product</a></h4>
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

											<div class="col-sm-6 col-xl-4">
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
																<h4 class="title"><a href="shop-single.php">6. Variable with soldout product</a></h4>
																<div class="star-content">
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																</div>
																<div class="prices">
																	<span class="price">Tk 55.00 </span>
																	<span class="price-old">Tk 75.00</span>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!--== End Shop Item ==-->
											</div>

											<div class="col-sm-6 col-xl-4">
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
																<h4 class="title"><a href="shop-single.php">7. Sample affiliate product</a></h4>
																<div class="star-content">
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																</div>
																<div class="prices">
																	<span class="price">Tk 29.00 </span>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!--== End Shop Item ==-->
											</div>

											<div class="col-sm-6 col-xl-4">
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
																<h4 class="title"><a href="shop-single.php">8. Countdown product</a></h4>
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

											<div class="col-sm-6 col-xl-4">
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
																<h4 class="title"><a href="shop-single.php">9. Without shortcode product</a></h4>
																<div class="star-content">
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																</div>
																<div class="prices">
																	<span class="price">Tk 79.00 </span>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!--== End Shop Item ==-->
											</div>

											<div class="col-sm-6 col-xl-4">
												<!--== Start Shop Item ==-->
												<div class="product-item">
													<div class="inner-content">
														<div class="product-thumb">
															<a href="shop-single.php">
																<img class="w-100" src="assets/img/shop/12.jpg" alt="Image-HasTech">
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
																<h4 class="title"><a href="shop-single.php">Demo product title</a></h4>
																<div class="star-content">
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																</div>
																<div class="prices">
																	<span class="price">Tk 29.00 </span>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!--== End Shop Item ==-->
											</div>

											<div class="col-sm-6 col-xl-4">
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
																<h4 class="title"><a href="shop-single.php">Demo product title</a></h4>
																<div class="star-content">
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																</div>
																<div class="prices">
																	<span class="price">Tk 50.00 </span>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!--== End Shop Item ==-->
											</div>

											<div class="col-sm-6 col-xl-4">
												<!--== Start Shop Item ==-->
												<div class="product-item">
													<div class="inner-content">
														<div class="product-thumb">
															<a href="shop-single.php">
																<img class="w-100" src="assets/img/shop/13.jpg" alt="Image-HasTech">
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
																<h4 class="title"><a href="shop-single.php">Demo product title</a></h4>
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

											<div class="col-sm-6 col-xl-4">
												<!--== Start Shop Item ==-->
												<div class="product-item">
													<div class="inner-content">
														<div class="product-thumb">
															<a href="shop-single.php">
																<img class="w-100" src="assets/img/shop/14.jpg" alt="Image-HasTech">
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
																<h4 class="title"><a href="shop-single.php">Demo product title</a></h4>
																<div class="star-content">
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																</div>
																<div class="prices">
																	<span class="price">Tk 19.00 </span>
																	<span class="price-old">Tk 21.00</span>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!--== End Shop Item ==-->
											</div>
										</div>
										<!--== Start Pagination Wrap ==-->
										<div class="row">
											<div class="col-12">
												<div class="pagination-content-wrap">
													<nav class="pagination-nav">
														<ul class="pagination justify-content-center">
															<li><a class="disabled active prev" href="#/"><i class="fa fa-angle-left"></i>Back</a></li>
															<li><a class="disabled" href="#/">1</a></li>
															<li><a href="#/">2</a></li>
															<li><a href="#/">3</a></li>
															<li><a class="next" href="#/">Next <i class="fa fa-angle-right"></i></a></li>
														</ul>
													</nav>
												</div>
											</div>
										</div>
										<!--== End Pagination Wrap ==-->
									</div>
									<div class="tab-pane fade" id="nav-list" role="tabpanel" aria-labelledby="nav-list-tab">
										<div class="row">
											<div class="col-12">
												<!--== Start Shop Item ==-->
												<div class="product-item product-item-list">
													<div class="inner-content">
														<div class="product-thumb">
															<a href="shop-single.php">
																<img class="w-100" src="assets/img/shop/1.jpg" alt="Image-HasTech">
															</a>
														</div>
														<div class="product-desc">
															<div class="product-info">
																<h4 class="title"><a href="shop-single.php">1. New and sale badge product</a></h4>
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
																<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia,</p>
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
														</div>
													</div>
												</div>
												<!--== End Shop Item ==-->
											</div>
											<div class="col-12">
												<!--== Start Shop Item ==-->
												<div class="product-item product-item-list">
													<div class="inner-content">
														<div class="product-thumb">
															<a href="shop-single.php">
																<img class="w-100" src="assets/img/shop/11.jpg" alt="Image-HasTech">
															</a>
														</div>
														<div class="product-desc">
															<div class="product-info">
																<h4 class="title"><a href="shop-single.php">10. This is the large title for testing large title and there is an image for testing</a></h4>
																<div class="star-content">
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																</div>
																<div class="prices">
																	<span class="price">Tk 19.00 </span>
																	<span class="price-old">Tk 21.00</span>
																</div>
																<p>A long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal...</p>
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
														</div>
													</div>
												</div>
												<!--== End Shop Item ==-->
											</div>
											<div class="col-12">
												<!--== Start Shop Item ==-->
												<div class="product-item product-item-list">
													<div class="inner-content">
														<div class="product-thumb">
															<a href="shop-single.php">
																<img class="w-100" src="assets/img/shop/10.jpg" alt="Image-HasTech">
															</a>
														</div>
														<div class="product-desc">
															<div class="product-info">
																<h4 class="title"><a href="shop-single.php">11. Product with video</a></h4>
																<div class="star-content">
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																</div>
																<div class="prices">
																	<span class="price">Tk 39.00 </span>
																</div>
																<p>As opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for...</p>
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
														</div>
													</div>
												</div>
												<!--== End Shop Item ==-->
											</div>
											<div class="col-12">
												<!--== Start Shop Item ==-->
												<div class="product-item product-item-list">
													<div class="inner-content">
														<div class="product-thumb">
															<a href="shop-single.php">
																<img class="w-100" src="assets/img/shop/2.jpg" alt="Image-HasTech">
															</a>
														</div>
														<div class="product-desc">
															<div class="product-info">
																<h4 class="title"><a href="shop-single.php">2. New badge product</a></h4>
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
																<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
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
														</div>
													</div>
												</div>
												<!--== End Shop Item ==-->
											</div>
											<div class="col-12">
												<!--== Start Shop Item ==-->
												<div class="product-item product-item-list">
													<div class="inner-content">
														<div class="product-thumb">
															<a href="shop-single.php">
																<img class="w-100" src="assets/img/shop/3.jpg" alt="Image-HasTech">
															</a>
														</div>
														<div class="product-desc">
															<div class="product-info">
																<h4 class="title"><a href="shop-single.php">3. Variable product</a></h4>
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
																<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
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
														</div>
													</div>
												</div>
												<!--== End Shop Item ==-->
											</div>
											<div class="col-12">
												<!--== Start Shop Item ==-->
												<div class="product-item product-item-list">
													<div class="inner-content">
														<div class="product-thumb">
															<a href="shop-single.php">
																<img class="w-100" src="assets/img/shop/4.jpg" alt="Image-HasTech">
															</a>
														</div>
														<div class="product-desc">
															<div class="product-info">
																<h4 class="title"><a href="shop-single.php">4. Soldout product</a></h4>
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
																<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
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
														</div>
													</div>
												</div>
												<!--== End Shop Item ==-->
											</div>
											<div class="col-12">
												<!--== Start Shop Item ==-->
												<div class="product-item product-item-list">
													<div class="inner-content">
														<div class="product-thumb">
															<a href="shop-single.php">
																<img class="w-100" src="assets/img/shop/5.jpg" alt="Image-HasTech">
															</a>
														</div>
														<div class="product-desc">
															<div class="product-info">
																<h4 class="title"><a href="shop-single.php">5. Simple product</a></h4>
																<div class="star-content">
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																</div>
																<div class="prices">
																	<span class="price">Tk 50.00 </span>
																</div>
																<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will</p>
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
														</div>
													</div>
												</div>
												<!--== End Shop Item ==-->
											</div>
											<div class="col-12">
												<!--== Start Shop Item ==-->
												<div class="product-item product-item-list">
													<div class="inner-content">
														<div class="product-thumb">
															<a href="shop-single.php">
																<img class="w-100" src="assets/img/shop/6.jpg" alt="Image-HasTech">
															</a>
														</div>
														<div class="product-desc">
															<div class="product-info">
																<h4 class="title"><a href="shop-single.php">6. Variable with soldout product</a></h4>
																<div class="star-content">
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																</div>
																<div class="prices">
																	<span class="price">Tk 55.00 </span>
																	<span class="price-old">Tk 75.00</span>
																</div>
																<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur.</p>
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
														</div>
													</div>
												</div>
												<!--== End Shop Item ==-->
											</div>
											<div class="col-12">
												<!--== Start Shop Item ==-->
												<div class="product-item product-item-list">
													<div class="inner-content">
														<div class="product-thumb">
															<a href="shop-single.php">
																<img class="w-100" src="assets/img/shop/7.jpg" alt="Image-HasTech">
															</a>
														</div>
														<div class="product-desc">
															<div class="product-info">
																<h4 class="title"><a href="shop-single.php">7. Sample affiliate product</a></h4>
																<div class="star-content">
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																</div>
																<div class="prices">
																	<span class="price">Tk 29.00 </span>
																</div>
																<p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
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
														</div>
													</div>
												</div>
												<!--== End Shop Item ==-->
											</div>
											<div class="col-12">
												<!--== Start Shop Item ==-->
												<div class="product-item product-item-list">
													<div class="inner-content">
														<div class="product-thumb">
															<a href="shop-single.php">
																<img class="w-100" src="assets/img/shop/8.jpg" alt="Image-HasTech">
															</a>
															<div class="ht-countdown ht-countdown-style" data-date="4/24/2022"></div>
														</div>
														<div class="product-desc">
															<div class="product-info">
																<h4 class="title"><a href="shop-single.php">8. Countdown product</a></h4>
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
																<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
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
														</div>
													</div>
												</div>
												<!--== End Shop Item ==-->
											</div>
											<div class="col-12">
												<!--== Start Shop Item ==-->
												<div class="product-item product-item-list">
													<div class="inner-content">
														<div class="product-thumb">
															<a href="shop-single.php">
																<img class="w-100" src="assets/img/shop/9.jpg" alt="Image-HasTech">
															</a>
														</div>
														<div class="product-desc">
															<div class="product-info">
																<h4 class="title"><a href="shop-single.php">9. Without shortcode product</a></h4>
																<div class="star-content">
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																</div>
																<div class="prices">
																	<span class="price">Tk 79.00 </span>
																</div>
																<p>we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that...</p>
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
														</div>
													</div>
												</div>
												<!--== End Shop Item ==-->
											</div>
											<div class="col-12">
												<!--== Start Shop Item ==-->
												<div class="product-item product-item-list">
													<div class="inner-content">
														<div class="product-thumb">
															<a href="shop-single.php">
																<img class="w-100" src="assets/img/shop/12.jpg" alt="Image-HasTech">
															</a>
														</div>
														<div class="product-desc">
															<div class="product-info">
																<h4 class="title"><a href="shop-single.php">Demo product title</a></h4>
																<div class="star-content">
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																</div>
																<div class="prices">
																	<span class="price">Tk 29.00 </span>
																</div>
																<p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
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
														</div>
													</div>
												</div>
												<!--== End Shop Item ==-->
											</div>
											<div class="col-12">
												<!--== Start Shop Item ==-->
												<div class="product-item product-item-list">
													<div class="inner-content">
														<div class="product-thumb">
															<a href="shop-single.php">
																<img class="w-100" src="assets/img/shop/5.jpg" alt="Image-HasTech">
															</a>
														</div>
														<div class="product-desc">
															<div class="product-info">
																<h4 class="title"><a href="shop-single.php">Demo product title</a></h4>
																<div class="star-content">
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																</div>
																<div class="prices">
																	<span class="price">Tk 50.00 </span>
																</div>
																<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will</p>
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
														</div>
													</div>
												</div>
												<!--== End Shop Item ==-->
											</div>
											<div class="col-12">
												<!--== Start Shop Item ==-->
												<div class="product-item product-item-list">
													<div class="inner-content">
														<div class="product-thumb">
															<a href="shop-single.php">
																<img class="w-100" src="assets/img/shop/13.jpg" alt="Image-HasTech">
															</a>
														</div>
														<div class="product-desc">
															<div class="product-info">
																<h4 class="title"><a href="shop-single.php">Demo product title</a></h4>
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
																<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
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
														</div>
													</div>
												</div>
												<!--== End Shop Item ==-->
											</div>
											<div class="col-12">
												<!--== Start Shop Item ==-->
												<div class="product-item product-item-list">
													<div class="inner-content">
														<div class="product-thumb">
															<a href="shop-single.php">
																<img class="w-100" src="assets/img/shop/14.jpg" alt="Image-HasTech">
															</a>
														</div>
														<div class="product-desc">
															<div class="product-info">
																<h4 class="title"><a href="shop-single.php">Demo product title</a></h4>
																<div class="star-content">
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																</div>
																<div class="prices">
																	<span class="price">Tk 19.00 </span>
																	<span class="price-old">Tk 21.00</span>
																</div>
																<p>A long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal...</p>
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
														</div>
													</div>
												</div>
												<!--== End Shop Item ==-->
											</div>
										</div>
										<!--== Start Pagination Wrap ==-->
										<div class="row">
											<div class="col-12">
												<div class="pagination-content-wrap">
													<nav class="pagination-nav">
														<ul class="pagination justify-content-center">
															<li><a class="disabled active prev" href="#/"><i class="fa fa-angle-left"></i>Back</a></li>
															<li><a class="disabled" href="#/">1</a></li>
															<li><a href="#/">2</a></li>
															<li><a href="#/">3</a></li>
															<li><a class="next" href="#/">Next <i class="fa fa-angle-right"></i></a></li>
														</ul>
													</nav>
												</div>
											</div>
										</div>
										<!--== End Pagination Wrap ==-->
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3">
							<!--== Start Product Sidebar Wrapper ==-->
							<div class="product-sidebar-wrapper">
								<!--== Start Product Sidebar Item ==-->
								<div class="product-sidebar-item">
									<h4 class="product-sidebar-title">Search</h4>
									<div class="product-sidebar-body">
										<div class="product-sidebar-search-form">
											<form action="#">
												<div class="form-group">
													<input class="form-control" type="search" placeholder="Enter key words">
													<button type="submit" class="btn-src">Search</button>
												</div>
											</form>
										</div>
									</div>
								</div>
								<!--== End Product Sidebar Item ==-->

								<!--== Start Sidebar Item ==-->
								<div class="product-sidebar-item">
									<h4 class="product-sidebar-title">Categories</h4>
									<div class="product-sidebar-body">
										<div class="product-sidebar-nav-menu">
											<?php
											require_once "php/admin/productCategory/index.php";
											$productCatObj = new ProductCategory();
											$result = $productCatObj->select(false, "php/connect.php");
											foreach ($result as $res) { ?>
												<a class="product__info" href="#/"><?php echo $res->name ?> <span>(12)</span></a>
											<?php } ?>
										</div>
									</div>
								</div>
								<!--== End Sidebar Item ==-->

								<!--== Start Sidebar Item ==-->
								<div class="product-sidebar-item">
									<h4 class="product-sidebar-title">Products Types</h4>
									<div class="product-sidebar-body">
										<div class="product-sidebar-nav-menu">
											<?php
											require_once "php/admin/productType/index.php";
											$productCatObj = new ProductType();
											$result = $productCatObj->select(false, "php/connect.php");
											foreach ($result as $res) { ?>
												<a class="product__info" href="#/"><?php echo $res->name; ?> <span>(1)</span></a>
											<?php } ?>
										</div>
									</div>
								</div>
								<!--== End Sidebar Item ==-->

								<!--== Start Sidebar Item ==-->
								<div class="product-sidebar-item mb-5 pb-2">
									<h4 class="product-sidebar-title">Color</h4>
									<div class="product-sidebar-body">
										<div class="product-sidebar-color-menu">
											<?php
											require_once "php/admin/productColor/index.php";
											$colorObj = new ProductColor();
											$result = $colorObj->select(false, "php/connect.php");
											foreach ($result as $res) { ?>
												<div class="<?php echo $res->name ?>"></div>
											<?php } ?>
										</div>
									</div>
								</div>
								<!--== End Sidebar Item ==-->

								<!--== Start Sidebar Item ==-->
								<div class="product-sidebar-item mb-5 pb-2">
									<h4 class="product-sidebar-title">Size</h4>
									<div class="product-sidebar-body">
										<div class="product-sidebar-size-menu">
											<ul>
												<?php
												require_once "php/admin/productSize/index.php";
												$sizeObj = new ProductSize();
												$result = $sizeObj->select(false, "php/connect.php");
												foreach ($result as $res) { ?>
													<li><a href="#/"><?php echo $res->name ?></a></li>
												<?php } ?>
											</ul>
										</div>
									</div>
								</div>
								<!--== End Sidebar Item ==-->

								<!--== Start Sidebar Item ==-->
								<div class="product-sidebar-item mb-5 pb-2">
									<h4 class="product-sidebar-title">Tags</h4>
									<div class="product-sidebar-body">
										<div class="product-sidebar-tag-menu">
											<ul>
												<li><a href="#/">black</a></li>
												<li><a href="#/">blue</a></li>
												<li><a href="#/">fiber</a></li>
												<li><a href="#/">gold</a></li>
												<li><a href="#/">gray</a></li>
												<li><a href="#/">green</a></li>
												<li><a href="#/">l</a></li>
												<li><a href="#/">leather</a></li>
												<li><a href="#/">m</a></li>
												<li><a href="#/">magenta</a></li>
												<li><a href="#/">maroon</a></li>
												<li><a href="#/">metal</a></li>
												<li><a href="#/">navy</a></li>
												<li><a href="#/">orange</a></li>
												<li><a href="#/">pink</a></li>
											</ul>
										</div>
									</div>
								</div>
								<!--== End Sidebar Item ==-->

								<!--== Start Sidebar Item ==-->
								<div class="product-sidebar-item">
									<h4 class="product-sidebar-title">Banner</h4>
									<div class="product-sidebar-body">
										<!--== Start Product Item ==-->
										<div class="product-sidebar-item">
											<div class="thumb">
												<a href="single-product-simple.php">
													<img class="w-100" src="assets/img/slider/slider-05.jpg" alt="Image-HasTech">
												</a>
											</div>
										</div>
										<!--== End Product Item ==-->
									</div>
								</div>
								<!--== End Sidebar Item ==-->
							</div>
							<!--== End Product Sidebar Wrapper ==-->
						</div>
					</div>
				</div>
			</section>
			<!--== End Product Area Wrapper ==-->

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