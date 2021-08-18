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

	require_once "php/admin/blog/index.php";
	$obj = new Blog();

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
			$pagesTopSection = "Blog";
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
								$itemsCount = 2;
								$page = isset($_GET["page"]) ? $_GET["page"] : 1;
								$from = ($page - 1) * $itemsCount;

								$result = $obj->select(false, "php/connect.php", "LIMIT $from, $itemsCount");
								$result2 = $obj->select(false, "php/connect.php");
								$dataCount = ceil(count($result2) / $itemsCount);
								foreach ($result as $res) {
								?>
									<div class="col-md-6">
										<!--== Start Blog Item ==-->
										<div class="post-item">
											<div class="inner-content">
												<div class="thumb">
													<a href="single-blog.php?blog_id=<?php echo $res->id; ?>">
														<img class="w-100" src="assets/img/blogs/<?php echo $res->img; ?>" alt="<?php echo $res->title; ?>">
													</a>
												</div>
												<div class="content">
													<h4 class="title blog__title"><a href="single-blog.php"><?php echo $res->title; ?></a></h4>
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
													<a href="?page=<?php echo $page - 1 ?>"><i class="fa fa-angle-left"></i>Back</a>
												</li>
												<?php for ($i = 1; $i <= $dataCount; $i++) { ?>
													<li class="<?php if ($page == $i) {
																	echo 'active';
																} ?>">
														<a href="?page=<?php echo $i ?>"><?php echo $i ?></a>
													</li>
												<?php } ?>
												<li class="<?php if (isset($page) && $page == $dataCount) {
																echo 'disabled';
															} else {
																echo false;
															} ?>">
													<a href="?page=<?php echo $page + 1 ?>">Next <i class="fa fa-angle-right"></i></a>
												</li>
											</ul>
										</nav>
									</div>
								</div>
							</div>
							<!--== End Pagination Wrap ==-->
						</div>
						<div class="col-lg-4">
							<!--== Start Sidebar Wrapper ==-->
							<div class="sidebar-wrapper sidebar-left">
								<!--== Start Sidebar Item ==-->
								<div class="sidebar-item">
									<h4 class="sidebar-title">Search</h4>
									<div class="sidebar-body">
										<div class="sidebar-search-form">
											<form action="blogSearch.php">
												<div class="form-group">
													<input class="form-control blog__search_inp" name="search" type="text" placeholder="Enter key words">
													<button type="submit" class="btn-src">Search</button>
												</div>
											</form>
										</div>
									</div>
								</div>
								<!--== End Sidebar Item ==-->

								<!--== Start Sidebar Item ==-->
								<div class="sidebar-item sidebar-recent-post-item">
									<h4 class="sidebar-title">Recent Post</h4>
									<div class="sidebar-body">
										<div class="sidebar-post-item">
											<?php
											$objBlogName = new Blog();
											$result = $objBlogName->select(false, "php/connect.php");
											$result1 = array_slice($result, 0, 3);
											foreach ($result1 as $res) {
											?>
												<div class="post-item">
													<div class="thumb">
														<a href="single-blog.php?blog_id=<?php echo $res->id; ?>">
															<img src="assets/img/blogs/<?php echo $res->img; ?>" alt="<?php echo $res->title; ?>">
														</a>
													</div>
													<div class="content">
														<h4 class="title"><a href="single-blog.php?blog_id=<?php echo $res->id; ?>"><?php echo $res->title; ?></a></h4>
														<p class="blog__text_small"><?php echo $res->text; ?></p>
													</div>
												</div>
											<?php } ?>
										</div>
									</div>
								</div>
								<!--== End Sidebar Item ==-->

								<!--== Start Sidebar Item ==-->
								<div class="sidebar-item">
									<h4 class="sidebar-title">Archive</h4>
									<div class="sidebar-body">
										<?php
										?>
										<div class="category-sub-menu pt-1">
											<ul>
												<?php foreach ($result as $res) { ?>
													<li><a href="single-blog.php?blog_id=<?php echo $res->id ?>"><?php echo $res->title ?></a></li>
												<?php } ?>
											</ul>
										</div>
									</div>
								</div>
								<!--== End Sidebar Item ==-->
							</div>
							<!--== End Sidebar Wrapper ==-->
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
</body>

</html>