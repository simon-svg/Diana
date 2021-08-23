<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Single Product – Diana – Furniture Store eCommerce Bootstrap5 Template</title>
	<link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,400i,600,700" rel="stylesheet">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/headroom.css" rel="stylesheet" />
	<link href="assets/css/animate.css" rel="stylesheet" />
	<link href="assets/css/font-awesome.min.css" rel="stylesheet" />
	<link href="assets/css/bardy.icon.css" rel="stylesheet" />
	<link href="assets/css/shopify-icon.css" rel="stylesheet" />
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
			$pagesTopSection = "Product";
			require_once "components/pagesTopSection.php";
			?>
			<!--== End Page Header Area Wrapper ==-->

			<!--== Start Product Area Wrapper ==-->
			<?php
			require_once "php/admin/product/index.php";
			$product = new Product();
			$res = $product->select($_GET["id"], "php/connect.php")[0];
			?>
			<section class="product-area product-single-area">
				<div class="container">
					<div class="row flex-row-reverse">
						<div class="col-lg-9">
							<div class="product-single-item">
								<div class="row">
									<div class="col-lg-6">
										<div class="product-single-slider">
											<!--== Start Product Thumbnail Area ==-->
											<div class="product-thumb">
												<div class="swiper-container single-product-thumb-slider">
													<div class="swiper-wrapper">
														<div class="swiper-slide">
															<div class="zoom zoom-hover">
																<a class="lightbox-image" data-fancybox="gallery" href="assets/img/shop/product-single/1.jpg">
																	<img src="assets/img/product/<?php echo $res->img ?>" alt="<?php echo $res->name ?>">
																</a>
															</div>
														</div>
														<div class="swiper-slide">
															<div class="zoom zoom-hover">
																<a class="lightbox-image" data-fancybox="gallery" href="assets/img/shop/product-single/2.jpg">
																	<img src="assets/img/shop/product-single/2.jpg" alt="Image-HasTech">
																</a>
															</div>
														</div>
														<div class="swiper-slide">
															<div class="zoom zoom-hover">
																<a class="lightbox-image" data-fancybox="gallery" href="assets/img/shop/product-single/3.jpg">
																	<img src="assets/img/shop/product-single/3.jpg" alt="Image-HasTech">
																</a>
															</div>
														</div>
														<div class="swiper-slide">
															<div class="zoom zoom-hover">
																<a class="lightbox-image" data-fancybox="gallery" href="assets/img/shop/product-single/4.jpg">
																	<img src="assets/img/shop/product-single/3.jpg" alt="Image-HasTech">
																</a>
															</div>
														</div>
														<div class="swiper-slide">
															<div class="zoom zoom-hover">
																<a class="lightbox-image" data-fancybox="gallery" href="assets/img/shop/product-single/4.jpg">
																	<img src="assets/img/shop/product-single/4.jpg" alt="Image-HasTech">
																</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!--== End Product Thumbnail Area ==-->

											<!--== Start Product Nav Area ==-->
											<div class="swiper-container single-product-nav-slider product-nav">
												<div class="swiper-wrapper">
													<div class="swiper-slide">
														<img src="assets/img/shop/product-single/nav1.jpg" alt="Image-HasTech">
													</div>
													<div class="swiper-slide">
														<img src="assets/img/shop/product-single/nav2.jpg" alt="Image-HasTech">
													</div>
													<div class="swiper-slide">
														<img src="assets/img/shop/product-single/nav3.jpg" alt="Image-HasTech">
													</div>
													<div class="swiper-slide">
														<img src="assets/img/shop/product-single/nav3.jpg" alt="Image-HasTech">
													</div>
													<div class="swiper-slide">
														<img src="assets/img/shop/product-single/nav4.jpg" alt="Image-HasTech">
													</div>
												</div>

												<!--== Add Swiper navigation Buttons ==-->
												<div class="swiper-button-prev"><i class="fa fa-angle-left"></i></div>
												<div class="swiper-button-next"><i class="fa fa-angle-right"></i></div>
											</div>
											<!--== End Product Nav Area ==-->
										</div>
									</div>
									<div class="col-lg-6">
										<!--== Start Product Info Area ==-->
										<div class="product-single-info">
											<h4 class="title"><?php echo $res->name ?></h4>
											<div class="prices">
												<?php if (!empty($res->sale)) { ?>
													<span class="price">$<?php echo $res->sale; ?></span>
													<span class="price-old">$<?php echo $res->price; ?></span>
												<?php } else { ?>
													<span class="price">$<?php echo $res->price; ?></span>
												<?php } ?>
											</div>
											<div class="star-content">
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
												<i class="fa fa-star-o"></i>
											</div>
											<p><?php echo $res->info; ?></p>
											<div class="product-select-action">
												<div class="select-item">
													<div class="select-size-wrap">
														<span>Size :</span>
														<ul>
															<?php
															require_once "php/admin/size/index.php";
															$objSize = new Size();
															$result = $objSize->selectGroup("php/connect.php", $_GET["id"]);
															foreach ($result as $res) { ?>
																<li class=""><a href="#/"><?php echo $res->name ?></a></li>
															<?php } ?>
														</ul>
													</div>
												</div>
												<div class="select-item">
													<div class="select-color-wrap">
														<span>Color :</span>
														<ul>
															<?php
															require_once "php/admin/productColor/index.php";
															$objColor = new ProductColor();
															$result = $objColor->selectGroup("php/connect.php", $_GET["id"]);
															foreach ($result as $res) { ?>
																<a class="single-page__color" href="#/" style="background-color: <?php echo $res->name ?>;"></a>
															<?php } ?>
														</ul>
													</div>
												</div>
												<div class="select-item">
													<div class="select-material-wrap">
														<span>Material :</span>
														<ul>
															<?php
															require_once "php/admin/type/index.php";
															$objType = new Type();
															$result = $objType->selectIdAll("php/connect.php", $_GET["id"]);
															foreach ($result as $res) { ?>
																<li class=""><a href="#/"><?php echo $res->name ?></a></li>
															<?php } ?>
														</ul>
													</div>
												</div>
											</div>
											<div class="product-action-simple">
												<div class="product-quick-action">
													<div class="product-quick-qty">
														<span>Quantity:</span>
														<div class="pro-qty">
															<input type="text" id="quantity" title="Quantity" value="1">
														</div>
													</div>
												</div>
												<div class="cart-wishlist-button">
													<a href="shop-cart.php" class="btn-cart">Add to cart</a>
													<div class="product-wishlist">
														<a class="add-wishlist" href="wishlist.php">
															<span class="icon">
																<i class="bardy bardy-wishlist"></i>
																<i class="hover-icon bardy bardy-wishlist"></i>
															</span>
														</a>
													</div>
												</div>
												<div class="buy-now-btn">
													<button class="btn btn-Buy">Buy it now</button>
												</div>
											</div>
											<div class="product-action-bottom">
												<div class="social-sharing">
													<span>Share:</span>
													<div class="social-icons">
														<a href="#/"><i class="shopify-social-icon-facebook-rounded color"></i></a>
														<a href="#/"><i class="shopify-social-icon-twitter-rounded color"></i></a>
														<a href="#/"><i class="shopify-social-icon-googleplus-rounded color"></i></a>
														<a href="#/"><i class="shopify-social-icon-pinterest-rounded color"></i></a>
													</div>
												</div>
												<div class="text-info">
													<p>Guaranteed safe checkout</p>
												</div>
											</div>
										</div>
										<!--== End Product Info Area ==-->
									</div>
								</div>
								<div class="row">
									<div class="col-12">
										<div class="product-review-tabs-content">
											<div class="nav nav-tabs product-tab-nav" id="ReviewTab" role="tablist">
												<button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" aria-controls="description" aria-selected="true">Description</button>
												<button class="nav-link" id="comments-tab" data-bs-toggle="tab" data-bs-target="#comments" type="button" aria-controls="comments" aria-selected="false">Comments</button>
												<button class="nav-link" id="shipping-policy-tab" data-bs-toggle="tab" data-bs-target="#shipping-policy" type="button" aria-controls="shipping-policy" aria-selected="false">Shipping Policy</button>
												<button class="nav-link" id="size-chart-tab" data-bs-toggle="tab" data-bs-target="#size-chart" type="button" aria-controls="size-chart" aria-selected="false">Size Chart</button>
											</div>
											<div class="tab-content product-tab-content" id="ReviewTabContent">
												<div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
													<div class="product-description">
														<p><?php echo $res->description; ?></p>
													</div>
												</div>
												<div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
													<div class="product-review-content">
														<div class="review-content-header">
															<h3>Customer Reviews</h3>
															<div class="review-info">
																<ul class="review-rating">
																	<li class="fa fa-star"></li>
																	<li class="fa fa-star"></li>
																	<li class="fa fa-star"></li>
																	<li class="fa fa-star"></li>
																	<li class="fa fa-star-o"></li>
																</ul>
																<span class="review-caption">Based on 7 reviews</span>
																<span class="review-write-btn">Write a review</span>
															</div>
														</div>
													</div>
												</div>
												<div class="tab-pane fade" id="comments" role="tabpanel" aria-labelledby="comments-tab">
													<div class="product-comment-content">
														<form action="#">
															<div class="product-comment">
																<img src="assets/img/photos/comment.png" alt="Image-HasTech">
																<textarea name="con_message" placeholder="Start the discussion…"></textarea>
															</div>
															<button class="btn-theme" type="submit">Post as Product</button>
														</form>
													</div>
												</div>
												<div class="tab-pane fade" id="shipping-policy" role="tabpanel" aria-labelledby="shipping-policy-tab">
													<div class="product-shipping-policy">
														<div class="section-title">
															<h2 class="title">Shipping policy for our store</h2>
															<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate</p>
														</div>
														<ul class="shipping-policy-list">
															<li>1-2 business days (Typically by end of day)</li>
															<li><a href="#/">30 days money back guaranty</a></li>
															<li>24/7 live support</li>
															<li>odio dignissim qui blandit praesent</li>
															<li>luptatum zzril delenit augue duis dolore</li>
															<li>te feugait nulla facilisi.</li>
														</ul>
														<p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum</p>
														<p>claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per</p>
														<p>seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
													</div>
												</div>
												<div class="tab-pane fade" id="size-chart" role="tabpanel" aria-labelledby="size-chart-tab">
													<div class="product-size-chart">
														<h4>Size Chart</h4>
														<table class="table">
															<tbody>
																<tr>
																	<td class="cun-name"><span>UK</span></td>
																	<td>18</td>
																	<td>20</td>
																	<td>22</td>
																	<td>24</td>
																	<td>26</td>
																</tr>
																<tr>
																	<td class="cun-name"><span>European</span></td>
																	<td>46</td>
																	<td>48</td>
																	<td>50</td>
																	<td>52</td>
																	<td>54</td>
																</tr>
																<tr>
																	<td class="cun-name"><span>usa</span></td>
																	<td>14</td>
																	<td>16</td>
																	<td>18</td>
																	<td>20</td>
																	<td>22</td>
																</tr>
																<tr>
																	<td class="cun-name"><span>Australia</span></td>
																	<td>28</td>
																	<td>10</td>
																	<td>12</td>
																	<td>14</td>
																	<td>16</td>
																</tr>
																<tr>
																	<td class="cun-name"><span>Canada</span></td>
																	<td>24</td>
																	<td>18</td>
																	<td>14</td>
																	<td>42</td>
																	<td>36</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3">
							<!--== Start Product Sidebar Wrapper ==-->
							<div class="product-sidebar-wrapper product-sidebar-left">
								<!--== Start Product Sidebar Item ==-->
								<div class="product-sidebar-item">
									<h4 class="product-sidebar-title">Search</h4>
									<div class="product-sidebar-body">
										<div class="product-sidebar-search-form">
											<form action="productSearch.php">
												<div class="form-group">
													<input class="form-control" name="search" type="search" placeholder="Enter key words">
													<button type="submit" class="btn-src">Search</button>
												</div>
											</form>
										</div>
									</div>
								</div>
								<!--== End Product Sidebar Item ==-->
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
	<!--=== jQuery Zoom Min Js ===-->
	<script src="assets/js/jquery-zoom.min.js"></script>

	<!--=== jQuery Custom Js ===-->
	<script src="assets/js/custom.js"></script>

	<script>
		// Images Zoom
		$('.zoom-hover').zoom();
	</script>

</body>

</html>