<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>News – Diana – Furniture Store eCommerce Bootstrap5 Template</title>
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
	<?php

	require_once "php/admin/product/index.php";
	$obj = new Product();

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

			<!--== Start Blog Area Wrapper ==-->
			<section class="blog-area blog-inner-area">
				<div class="container">
					<div class="row flex-row-reverse">
						<div class="col-lg-8">
							<div class="row">
								<?php
								$itemsCount = 3;
								$page = isset($_GET["page"]) ? $_GET["page"] : 1;
								$from = ($page - 1) * $itemsCount;

								$result = $obj->search($_GET["search"], "LIMIT $from, $itemsCount");
								$result2 = $obj->search($_GET["search"]);
								$dataCount = ceil(count($result2) / $itemsCount);
								foreach ($result as $res) {
								?>
									<div class="col-sm-6 col-xl-4">
										<!--== Start Shop Item ==-->
										<div class="product-item">
											<div class="inner-content">
												<div class="product-thumb">
													<a href="shop-single.php?=<?php echo $res->id; ?>">
														<img class="w-100" src="assets/img/product/<?php echo $res->img; ?>" alt="<?php echo $res->img; ?>">
													</a>
													<div class="product-action">
														<div class="addto-wrap">
															<a class="add-cart" href="shop-cart.php?id=<?php echo $res->id; ?>">
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
													<?php if (!empty($res->stock_time)) { ?>
														<div class="ht-countdown ht-countdown-style" data-date="<?php echo $res->stock_time; ?>"></div>
													<?php } ?>
												</div>
												<div class="product-desc">
													<div class="product-info">
														<h4 class="title product__title"><a href="shop-single.php"><?php echo $res->name; ?></a></h4>
														<div class="star-content">
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
								<?php } ?>
							</div>
							<!--== Start Pagination Wrap ==-->
							<div class="row">
								<div class="col-12">
									<div class="pagination-content-wrap">
										<nav class="pagination-nav">
											<ul class="pagination justify-content-center">
												<li class="<?php if (isset($page) && $page == 1) {
																echo 'disabled';
															} else {
																echo false;
															} ?>">
													<a href="?search=<?php echo $_GET["search"] ?>&page=<?php echo $page - 1 ?>">
														<i class="fa fa-angle-left"></i>Back
													</a>
												</li>
												<?php for ($i = 1; $i <= $dataCount; $i++) { ?>
													<li class="<?php if ($page == $i) {
																	echo 'active';
																} ?>">
														<a href="?search=<?php echo $_GET["search"] ?>&page=<?php echo $i ?>"><?php echo $i ?></a>
													</li>
												<?php } ?>
												<li class="<?php if (isset($page) && $page == $dataCount) {
																echo 'disabled';
															} else {
																echo false;
															} ?>">
													<a href="?search=<?php echo $_GET["search"] ?>&page=<?php echo $page + 1 ?>">
														Next <i class="fa fa-angle-right"></i>
													</a>
												</li>
											</ul>
										</nav>
									</div>
								</div>
							</div>
							<!--== End Pagination Wrap ==-->
						</div>
						<div class="col-lg-3">
							<!--== Start Product Sidebar Wrapper ==-->
							<div class="product-sidebar-wrapper">
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

								<!--== Start Sidebar Item ==-->
								<div class="product-sidebar-item">
									<h4 class="product-sidebar-title">Categories</h4>
									<div class="product-sidebar-body">
										<div class="product-sidebar-nav-menu">
											<?php
											require_once "php/admin/productCategory/index.php";
											$productCatObj = new ProductCategory();
											$result = $productCatObj->select(false, "php/connect.php", "name");
											foreach ($result as $res) { ?>
												<a class="product__info" href="#/"><?php echo $res->name ?><span> (<?php echo $res->count ?>)</span></a>
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
											$result = $colorObj->select(false, "php/connect.php", "name");
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
												<?php
												require_once "php/admin/productTag/index.php";
												$tagObj = new ProductTag();
												$result = $tagObj->select(false, "php/connect.php");
												foreach ($result as $res) { ?>
													<li><a href="#/"><?php echo $res->name ?></a></li>
												<?php } ?>
											</ul>
										</div>
									</div>
								</div>
								<!--== End Sidebar Item ==-->
							</div>
							<!--== End Product Sidebar Wrapper ==-->
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

	<script src="assets/js/modernizr.js"></script>
	<script src="assets/js/jquery-main.js"></script>
	<script src="assets/js/jquery-migrate.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.appear.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/swiper.min.js"></script>
	<script src="assets/js/fancybox.min.js"></script>
	<script src="assets/js/slicknav.js"></script>
	<script src="assets/js/waypoint.js"></script>
	<script src="assets/js/parallax.min.js"></script>
	<script src="assets/js/aos.min.js"></script>
	<script src="assets/js/countdown.js"></script>
	<script src="assets/js/custom.js"></script>
	<script src="assets/js/blogSearch.js"></script>
</body>

</html>