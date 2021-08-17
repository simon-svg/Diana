<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Your Shopping Cart – Diana – Furniture Store eCommerce Bootstrap5 Template</title>
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
			<div class="page-header-area page-shopping-cart-area">
				<div class="container">
					<div class="row">
						<div class="col-12 text-center">
							<div class="page-header-content">
								<h4 class="title" data-aos="fade-down" data-aos-duration="1200">Your Shopping Cart</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--== End Page Header Area Wrapper ==-->

			<!--== Start Product Area Wrapper ==-->
			<section class="product-area shopping-cart-area">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="shopping-cart-wrap">
								<div class="cart-table table-responsive">
									<table class="table">
										<thead>
											<tr>
												<th class="pro-thumbnail">Image</th>
												<th class="pro-title">Product</th>
												<th class="pro-price">Price</th>
												<th class="pro-quantity">Quantity</th>
												<th class="pro-subtotal">Total</th>
												<th class="pro-remove">Remove</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="pro-thumbnail">
													<a href="shop.php"><img src="assets/img/shop/cart/table1.jpg" alt="Image-HasTech"></a>
												</td>
												<td class="pro-title">
													<h4 class="title"><a href="shop.php">2. New badge product</a></h4>
													<span>m / gold</span>
												</td>
												<td class="pro-price">
													<span class="amount">$80.00</span>
												</td>
												<td class="pro-quantity">
													<div class="pro-qty">
														<input type="text" id="quantity" title="Quantity" value="1">
													</div>
												</td>
												<td class="pro-subtotal">
													<span class="subtotal-amount">$80.00</span>
												</td>
												<td class="pro-remove">
													<a class="remove" href="#/"><i class="fa fa-trash-o"></i></a>
												</td>
											</tr>
											<tr>
												<td class="pro-thumbnail">
													<a href="shop.php"><img src="assets/img/shop/cart/table2.jpg" alt="Image-HasTech"></a>
												</td>
												<td class="pro-title">
													<h4 class="title"><a href="shop.php">5. Simple product</a></h4>
												</td>
												<td class="pro-price">
													<span class="amount">$50.00</span>
												</td>
												<td class="pro-quantity">
													<div class="pro-qty">
														<input type="text" id="quantity" title="Quantity" value="1">
													</div>
												</td>
												<td class="pro-subtotal">
													<span class="subtotal-amount">$50.00</span>
												</td>
												<td class="pro-remove">
													<a class="remove" href="#/"><i class="fa fa-trash-o"></i></a>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="row">
									<div class="col-12">
										<div class="cart-buttons">
											<a class="theme-default-button" href="#/">Update Cart</a>
											<a class="theme-default-button" href="shop.php">Continue Shopping</a>
											<a class="theme-default-button" href="#/">Clear Cart</a>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-12">
										<div class="cart-payment">
											<div class="row">
												<div class="col-lg-6">
													<div class="culculate-shipping">
														<h4 class="title">Get shipping estimatesss</h4>
														<div class="culculate-shipping-form">
															<form action="#">
																<div class="form-row">
																	<div class="col-12">
																		<div class="form-group">
																			<label class="sr-only" for="address_country" class="form-label">Address Country</label>
																			<select id="address_country" class="form-select" aria-label="Address Country">
																				<option selected>---</option>
																				<option value="1">Afghanistan</option>
																				<option value="2">Albania</option>
																				<option value="3">Anguilla</option>
																				<option value="4">Antigua & Barbuda</option>
																				<option value="5">Argentina</option>
																				<option value="6">Armenia</option>
																				<option value="7">Aruba</option>
																				<option value="8">Ascension Island</option>
																				<option value="9">Australia</option>
																				<option value="10">Austria</option>
																				<option value="11">Azerbaijan</option>
																				<option value="12">Bahamas</option>
																				<option value="13">Bahrain</option>
																				<option value="14">Bangladesh</option>
																				<option value="15">Barbados</option>
																				<option value="16">Belarus</option>
																				<option value="17">Belgium</option>
																				<option value="18">Belize</option>
																				<option value="19">Benin</option>
																				<option value="20">Brazil</option>
																			</select>
																		</div>
																	</div>
																	<div class="col-12">
																		<div class="form-group">
																			<label class="sr-only" for="address_zip" class="form-label">Zip/Postal Code</label>
																			<input type="text" class="form-control" id="address_zip" placeholder="Zip/Postal Code">
																		</div>
																	</div>
																	<div class="col-12">
																		<div class="form-group">
																			<a class="btn-calculate-shop" href="#/">Calculate shipping</a>
																		</div>
																	</div>
																</div>
															</form>
														</div>
													</div>
												</div>
												<div class="col-lg-6">
													<div class="cart-total">
														<h4 class="title">Cart Summary</h4>
														<table>
															<tbody>
																<tr class="cart-subtotal">
																	<th>Subtotal</th>
																	<td><span class="amount"><span>$130.00</span></span></td>
																</tr>
																<tr class="order-total">
																	<th>Grand Total</th>
																	<td>
																		<span class="amount"><span>$130.00</span></span>
																	</td>
																</tr>
															</tbody>
														</table>
														<div class="proceed-to-checkout">
															<a class="shop-checkout-button" href="shop-checkout.php">Proceed to Checkout</a>
														</div>
													</div>
												</div>
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