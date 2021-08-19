<header class="header-area header-default sticky-header">
	<div class="container">
		<div class="row align-items-center justify-content-between position-relative">
			<div class="col">
				<div class="header-logo-area">
					<a href="index.php">
						<img class="logo-main" src="assets/img/logo.png" alt="Logo" />
						<img class="logo d-none" src="assets/img/logo-light.png" alt="Logo" />
					</a>
				</div>
			</div>
			<div class="col">
				<div class="header-navigation-area">
					<ul class="main-menu nav">
						<?php
						require_once "php/admin/headerList/index.php";
						$objHeader = new HeaderList();
						$result = $objHeader->select(false, "php/connect.php");
						foreach ($result as $res) {
						?>
							<li class="has-submenu"><a href="<?php echo $res->link ?>"><span><?php echo $res->name ?></span></a></li>
						<?php } ?>
					</ul>
				</div>
			</div>
			<div class="col">
				<div class="header-action-area">
					<ul class="header-action">
						<li class="currency-menu">
							<a class="title" href="javascript:;">USD</a>
							<ul class="currency-dropdown">
								<li class="currency">
									<ul>
										<li class="active"><a href="#/">USD - US Dollar</a></li>
										<li class="#/"><a href="#/">EUR - Euro</a></li>
										<li class="#/"><a href="#/">GBP - British Pound</a></li>
										<li class="#/"><a href="#/">INR - Indian Rupee</a></li>
										<li class="#/"><a href="#/">USD - Bangladesh Taka</a></li>
										<li class="#/"><a href="#/">JPY - Japan Yen</a></li>
										<li class="#/"><a href="#/">CAD - Canada Dollar</a></li>
										<li class="#/"><a href="#/">AUD - Australian Dollar</a></li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
					<div class="header-action">
						<div class="header-search">
							<button class="search-toggle">
								<i class="search-icon bardy bardy-search"></i>
								<i class="close-icon bardy bardy-cancel"></i>
							</button>
							<div class="header-search-form">
								<form action="productSearch.php">
									<input type="search" name="search" placeholder="Search our store">
									<button type="submit"><i class="bardy bardy-search"></i></button>
								</form>
							</div>
						</div>
					</div>
					<div class="header-action">
						<div class="header-mini-cart">
							<button class="mini-cart-toggle">
								<i class="icon bardy bardy-shopping-cart"></i>
								<span class="number">2</span>
							</button>
							<div class="mini-cart-dropdown">
								<h4 class="cart-title">Your cart</h4>
								<div class="cart-item-wrap">
									<div class="cart-item">
										<div class="thumb">
											<a href="#/"><img class="w-100" src="assets/img/shop/cart/mini1.jpg" alt="Image-HasTech"></a>
											<a class="remove" href="javascript:void(0);"><i class="fa fa-trash-o"></i></a>
										</div>
										<div class="content">
											<h5 class="title"><a href="#/">5. Simple product</a></h5>
											<span>1 x Tk 50.00</span>
										</div>
									</div>
									<div class="cart-item">
										<div class="thumb">
											<a href="#/"><img class="w-100" src="assets/img/shop/cart/mini2.jpg" alt="Image-HasTech"></a>
											<a class="remove" href="javascript:void(0);"><i class="fa fa-trash-o"></i></a>
										</div>
										<div class="content">
											<h5 class="title"><a href="#/">2. New badge product - m / gold</a></h5>
											<span>1 x Tk 80.00</span>
										</div>
									</div>
								</div>
								<div class="mini-cart-footer">
									<h4>Subtotal: <span class="total">Tk 130.00</span></h4>
									<div class="cart-btn">
										<a href="shop-cart.php">View Cart</a>
										<a href="shop-checkout.php">Checkout</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="header-action d-block d-lg-none text-end">
						<button class="btn-menu" type="button"><i class="zmdi zmdi-menu"></i></button>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>