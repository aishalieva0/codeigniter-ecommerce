<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Basic page needs
	============================================ -->
	<title>E-commerce</title>
	<meta charset="utf-8">
	<meta name="keywords" content="boostrap, responsive, html5, css3, jquery, theme, multicolor, parallax, retina, business" />
	<meta name="author" content="Magentech">
	<meta name="robots" content="index, follow" />

	<!-- Mobile specific metas
	============================================ -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<!-- Favicon
	============================================ -->
	<link rel="shortcut icon" href="<?= base_url() ?>assets/frontend/ico/favicon.png">

	<!-- Google web fonts
	============================================ -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700|Roboto:400,500,700,900' rel='stylesheet' type='text/css'>

	<!-- Libs CSS
	============================================ -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/bootstrap/css/bootstrap.min.css">
	<link href="<?= base_url() ?>assets/frontend/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/frontend/js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/frontend/js/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/frontend/css/themecss/lib.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/frontend/js/jquery-ui/jquery-ui.min.css" rel="stylesheet">

	<!-- Theme CSS
	============================================ -->
	<link href="<?= base_url() ?>assets/frontend/css/themecss/so_megamenu.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/frontend/css/themecss/so-categories.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/frontend/css/themecss/so-listing-tabs.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/frontend/css/themecss/so-super-category.css" rel="stylesheet">
	<link id="color_scheme" href="<?= base_url() ?>assets/frontend/css/home2.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/frontend/css/responsive.css" rel="stylesheet">



</head>

<body class="common-home res layout-home2">
	<div id="wrapper" class="wrapper-full banners-effect-8">


		<!-- Header Container  -->
		<header id="header" class=" variantleft type_2">

			<!-- Header Top -->
			<div class="header-top compact-hidden">
				<div class="container">
					<div class="row">

						<div class="header-top-left  col-lg-4  hidden-sm col-md-5 hidden-xs">
							<ul class="list-inlines">
								<li class="hidden-xs">
									<div class="welcome-msg">
										<ul class="list-msg">
											<li><label class="label-msg">This week</label> <a href="#">Sale special too good to miss in every gear</a></li>
											<li><label class="label-msg">Tomorrow</label> <a href="#">Laten ipsum dolor sit amet. In gravida pellen</a></li>
										</ul>
									</div>
								</li>
							</ul>

						</div>



						<div class="header-top-right collapsed-block col-lg-8 col-sm-12 col-md-7 col-xs-12 ">
							<h5 class="tabBlockTitle visible-xs">More<a class="expander " href="#TabBlock-1"><i class="fa fa-angle-down"></i></a></h5>
							<div class="tabBlock" id="TabBlock-1">
								<ul class="top-link list-inline">
									<li class="account" id="my_account">
										<a href="#" title="My Account" class="btn btn-xs dropdown-toggle" data-toggle="dropdown"> <span>My Account</span> <span class="fa fa-angle-down"></span></a>
										<ul class="dropdown-menu ">
											<li><a href="<?= base_url('register'); ?>"><i class="fa fa-user"></i> Register</a></li>
											<li><a href="<?= base_url('login'); ?>"><i class="fa fa-pencil-square-o"></i> Login</a></li>
										</ul>
									</li>
									<li class="wishlist"><a href="<?= base_url('wishlist'); ?>" id="wishlist-total" class="top-link-wishlist" title="Wish List (2)"><span>Wish List (2)</span></a></li>
									<li class="checkout hidden"><a href="checkout.html" class="top-link-checkout" title="Checkout"><span>Checkout</span></a></li>
									<li class="login hidden"><a href="cart.html" title="Shopping Cart"><span>Shopping Cart</span></a></li>
									<li class="form-group currency currencies-block">
										<form action="index.html" method="post" enctype="multipart/form-data" id="currency">
											<a class="btn btn-xs dropdown-toggle" data-toggle="dropdown">
												<span class="icon icon-credit "></span> US Dollar <span class="fa fa-angle-down"></span>
											</a>
											<ul class="dropdown-menu btn-xs">
												<li> <a href="#">(€)&nbsp;Euro</a></li>
												<li> <a href="#">(£)&nbsp;Pounds </a></li>
												<li> <a href="#">($)&nbsp;US Dollar </a></li>
											</ul>
										</form>
									</li>
									<li class="form-group languages-block ">
										<form action="index.html" method="post" enctype="multipart/form-data" id="bt-language">
											<a class="btn btn-xs dropdown-toggle" data-toggle="dropdown">
												<img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?= base_url() ?>assets/frontend/image/demo/flags/gb.png" alt="English" title="English">
												<span class="">English</span>
												<span class="fa fa-angle-down"></span>
											</a>
											<ul class="dropdown-menu">
												<li><a href="index.html"><img class="image_flag lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?= base_url() ?>assets/frontend/image/demo/flags/gb.png" alt="English" title="English" /> English </a></li>
												<li> <a href="index.html"> <img class="image_flag lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?= base_url() ?>assets/frontend/image/demo/flags/lb.png" alt="Arabic" title="Arabic" /> Arabic </a> </li>
											</ul>
										</form>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //Header Top -->

			<!-- Header center -->
			<div class="header-center">
				<div class="container">
					<div class="row">
						<!-- Search -->
						<div class="col-sm-4 header_search">
							<div id="sosearchpro" class="search-pro">
								<form method="GET" action="index.html">
									<div id="search0" class="search input-group">
										<div class="select_category filter_type  icon-select">
											<select class="no-border" name="category_id">
												<option value="0">All Category</option>
												<option value="20">Desktops</option>
												<option value="26">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home 9</option>

												<option value="27">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home 8</option>

												<option value="18">Laptops &amp; Notebooks</option>
												<option value="46">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Macs</option>

												<option value="45">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Windows</option>

												<option value="25">Automotive</option>
												<option value="35">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gadgets &amp; Auto Parts</option>

												<option value="36">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;More Car Accessories</option>

												<option value="29">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Car Alarms and Security</option>

												<option value="28">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Car Audio &amp; Speakers</option>

												<option value="30">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Printers</option>

												<option value="31">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Scanners</option>

												<option value="32">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Web Cameras</option>
												<option value="57">Mobile &amp; Tablet </option>
												<option value="68">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hanet magente</option>

												<option value="69">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Knage unget</option>

												<option value="70">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Latenge mange</option>

												<option value="67">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Punge nenune</option>

												<option value="71">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Qunge genga</option>

												<option value="65">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tange manue</option>

												<option value="17">Electronics </option>
												<option value="64">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Angene mafin</option>

												<option value="60">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Egante mangetes</option>

												<option value="62">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gante extensg</option>

												<option value="61">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Guntes magesg</option>

												<option value="66">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rengae manges</option>

												<option value="63">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sine engain</option>

												<option value="33">Apparel</option>
												<option value="76">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Accessories</option>

												<option value="80">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bags</option>

												<option value="74">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Computers</option>

												<option value="72">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Electronics</option>

												<option value="79">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fashion</option>

												<option value="77">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Men</option>

												<option value="73">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mobiles</option>

												<option value="75">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sports</option>

												<option value="81">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Watches</option>

												<option value="78">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Women</option>

												<option value="34">Computer</option>
												<option value="43">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Camping &amp; Hiking</option>

												<option value="47">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cusen mariot</option>

												<option value="48">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Denta magela</option>

												<option value="55">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Engite nanet</option>

												<option value="44">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Theid cupensg</option>

												<option value="59">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Verture agoent</option>
											</select>
										</div>

										<input class="autosearch-input form-control" type="text" value="" size="50" autocomplete="off" placeholder="Search" name="search">
										<span class="input-group-btn">
											<button type="submit" class="button-search btn btn-primary" name="submit_search"><i class="fa fa-search"></i></button>
										</span>
									</div>
									<input type="hidden" name="route" value="product/search" />
								</form>
							</div>
						</div>
						<!-- //end Search -->
						<!-- Logo -->
						<div class="navbar-logo col-sm-4 col-xs-12 text-center">
							<a href="home2.html"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?= base_url() ?>assets/frontend/image/demo/logos/theme_logo.png" title="Your Store" alt="Your Store" /></a>
						</div>
						<!-- //End Logo -->
						<!-- Phone -->
						<div class="header-center-right col-sm-4">
							<div class="hidden-xs">
								<div class="phone-contact hidden-xs">
									<div class="inner-info">
										<h2>Hotline:</h2>
										<p>(801) 2345 - 6789</p>
									</div>
								</div>
							</div>
						</div>
						<!-- //End Phone -->
					</div>
				</div>
			</div>
			<!-- //Header center -->

			<!-- Header Bottom -->
			<div class="header-bottom compact-hidden">
				<div class="container">
					<div class="header-bottom-inner">
						<div class="row">
							<div class="header-bottom-menu col-md-10 col-sm-9 col-xs-4">
								<div class="responsive so-megamenu  megamenu-style-dev">
									<nav class="navbar-default">
										<div class=" container-megamenu  horizontal">
											<div class="navbar-header">
												<button type="button" id="show-megamenu" data-toggle="collapse" class="navbar-toggle">
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
												</button>
											</div>

											<div class="megamenu-wrapper ">
												<span id="remove-megamenu" class="fa fa-times"></span>
												<div class="megamenu-pattern">
													<div class="container">
														<ul class="megamenu " data-transition="slide" data-animationtime="250">
															<li class="home hover">
																<a href="index.html">Home <b class="caret"></b></a>
																<div class="sub-menu" style="width:100%;">
																	<div class="content">
																		<div class="row">
																			<div class="col-md-3">
																				<a href="index.html" class="image-link">
																					<span class="thumbnail">
																						<img class="img-responsive img-border lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?= base_url() ?>assets/frontend/image/demo/menu/home-1.jpg" alt="">
																						<span class="btn btn-default">Read More</span>
																					</span>
																					<h3 class="figcaption">Home page - (Default)</h3>
																				</a>

																			</div>
																			<div class="col-md-3">
																				<a href="home2.html" class="image-link">
																					<span class="thumbnail">
																						<img class="img-responsive img-border lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?= base_url() ?>assets/frontend/image/demo/menu/home-2.jpg" alt="">
																						<span class="btn btn-default">Read More</span>
																					</span>
																					<h3 class="figcaption">Home page - Layout 2</h3>
																				</a>

																			</div>
																			<div class="col-md-3">
																				<a href="home3.html" class="image-link">
																					<span class="thumbnail">
																						<img class="img-responsive img-border lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?= base_url() ?>assets/frontend/image/demo/menu/home-3.jpg" alt="">
																						<span class="btn btn-default">Read More</span>
																					</span>
																					<h3 class="figcaption">Home page - Layout 3</h3>
																				</a>

																			</div>
																			<div class="col-md-3">
																				<a href="home4.html" class="image-link">
																					<span class="thumbnail">
																						<img class="img-responsive img-border lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?= base_url() ?>assets/frontend/image/demo/menu/home-4.jpg" alt="">
																						<span class="btn btn-default">Read More</span>
																					</span>
																					<h3 class="figcaption">Home page - Layout 4</h3>
																				</a>

																			</div>

																			<div class="col-md-3">
																				<a href="home5.html" class="image-link">
																					<span class="thumbnail">
																						<img class="img-responsive img-border lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?= base_url() ?>assets/frontend/image/demo/menu/home-5.jpg" alt="">
																						<span class="btn btn-default">Read More</span>
																					</span>
																					<h3 class="figcaption">Home page - Layout 5</h3>
																				</a>

																			</div>
																			<div class="col-md-3">
																				<a href="home6.html" class="image-link">
																					<span class="thumbnail">
																						<img class="img-responsive img-border lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?= base_url() ?>assets/frontend/image/demo/menu/home-6.jpg" alt="">
																						<span class="btn btn-default">Read More</span>
																					</span>
																					<h3 class="figcaption">Home page - Layout 6</h3>
																				</a>

																			</div>
																			<div class="col-md-3">
																				<a href="home7.html" class="image-link">
																					<span class="thumbnail">
																						<img class="img-responsive img-border lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?= base_url() ?>assets/frontend/image/demo/menu/home-7.jpg" alt="">
																						<span class="btn btn-default">Read More</span>
																					</span>
																					<h3 class="figcaption">Home page - Layout 7</h3>
																				</a>

																			</div>
																			<div class="col-md-3">
																				<a href="home8.html" class="image-link">
																					<span class="thumbnail">
																						<img class="img-responsive img-border lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?= base_url() ?>assets/frontend/image/demo/menu/home-8.jpg" alt="">
																						<span class="btn btn-default">Read More</span>
																					</span>
																					<h3 class="figcaption">Home page - Layout 8</h3>
																				</a>

																			</div>
																			<div class="col-md-3">
																				<a href="home9.html" class="image-link">
																					<span class="thumbnail">
																						<img class="img-responsive img-border lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?= base_url() ?>assets/frontend/image/demo/menu/home-9.jpg" alt="">
																						<span class="btn btn-default">Read More</span>
																					</span>
																					<h3 class="figcaption">Home page - Layout 9</h3>
																				</a>

																			</div>
																			<div class="col-md-3">
																				<a href="home10.html" class="image-link">
																					<span class="thumbnail">
																						<img class="img-responsive img-border lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?= base_url() ?>assets/frontend/image/demo/menu/home-10.jpg" alt="">
																						<span class="btn btn-default">Read More</span>
																					</span>
																					<h3 class="figcaption">Home page - Layout 10</h3>
																				</a>

																			</div>
																			<div class="col-md-3">
																				<a href="#" class="image-link">
																					<span class="thumbnail">
																						<img class="img-responsive img-border lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?= base_url() ?>assets/frontend/image/demo/menu/home-11.jpg" alt="">
																						<span class="btn btn-default">Read More</span>
																					</span>
																					<h3 class="figcaption">Home page - Layout 11</h3>
																				</a>

																			</div>
																			<div class="col-md-3">
																				<a href="#" class="image-link">
																					<span class="thumbnail">
																						<img class="img-responsive img-border lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?= base_url() ?>assets/frontend/image/demo/menu/home-12.jpg" alt="">
																						<span class="btn btn-default">Read More</span>
																					</span>
																					<h3 class="figcaption">Home page - Layout 12</h3>
																				</a>

																			</div>
																		</div>
																	</div>
																</div>
															</li>
															<li class="with-sub-menu hover">
																<p class="close-menu"></p>
																<a href="#" class="clearfix">
																	<strong>

																		Features
																	</strong>

																	<b class="caret"></b>
																</a>
																<div class="sub-menu" style="width: 100%; right: auto;">
																	<div class="content">
																		<div class="row">
																			<div class="col-md-3">
																				<div class="column">
																					<a href="#" class="title-submenu">Listing pages</a>
																					<div>
																						<ul class="row-list">
																							<li><a href="category.html">Category Page 1 </a></li>
																							<li><a href="category-v2.html">Category Page 2</a></li>
																							<li><a href="category-v3.html">Category Page 3</a></li>
																						</ul>

																					</div>
																				</div>
																			</div>
																			<div class="col-md-3">
																				<div class="column">
																					<a href="#" class="title-submenu">Product pages</a>
																					<div>
																						<ul class="row-list">
																							<li><a href="product.html">Product Page 1</a></li>
																							<li><a href="product-v2.html">Product Page 2</a></li>
																							<li><a href="product-v3.html">Product Page 3</a></li>
																							<li><a href="product-v4.html">Product Page 4</a></li>
																						</ul>
																					</div>
																				</div>
																			</div>
																			<div class="col-md-3">
																				<div class="column">
																					<a href="#" class="title-submenu">Shopping pages</a>
																					<div>
																						<ul class="row-list">
																							<li><a href="<?= base_url('cart') ?>">Shopping Cart Page</a></li>
																							<li><a href="<?= base_url('checkout') ?>">Checkout Page</a></li>
																							<li><a href="<?= base_url('compare') ?>">Compare Page</a></li>
																							<li><a href="<?= base_url('wishlist') ?>">Wishlist Page</a></li>

																						</ul>
																					</div>
																				</div>
																			</div>
																			<div class="col-md-3">
																				<div class="column">
																					<a href="#" class="title-submenu">My Account pages</a>
																					<div>
																						<ul class="row-list">
																							<li><a href="<?= base_url('login') ?>">Login Page</a></li>
																							<li><a href="<?= base_url('register') ?>">Register Page</a></li>
																							<li><a href="<?= base_url('my-account') ?>">My Account</a></li>
																							<li><a href="<?= base_url('order-history') ?>">Order History</a></li>
																							<li><a href="<?= base_url('order-info') ?>">Order Information</a></li>
																							<li><a href="<?= base_url('return') ?>">Product Returns</a></li>
																							<li><a href="<?= base_url('gift-voucher') ?>">Gift Voucher</a></li>
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</li>
															<li class="with-sub-menu hover">
																<p class="close-menu"></p>
																<a href="#" class="clearfix">
																	<strong><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?= base_url() ?>assets/frontend/image/demo/menu/hot-icon.png" alt="">Pages</strong>
																	<b class="caret"></b>
																</a>
																<div class="sub-menu" style="width: 20%; ">
																	<div class="content">
																		<div class="row">
																			<div class="col-md-6">
																				<ul class="row-list">
																					<li><a class="subcategory_item" href="<?= base_url('faq') ?>">FAQ</a></li>
																					<li><a class="subcategory_item" href="<?= base_url('typography') ?>">Typography</a></li>
																					<li><a class="subcategory_item" href="<?= base_url('sitemap') ?>">Site Map</a></li>
																					<li><a class="subcategory_item" href="<?= base_url('contact') ?>">Contact us</a></li>
																					<li><a class="subcategory_item" href="<?= base_url('about_us') ?>">About Us</a></li>
																				</ul>
																			</div>
																		</div>
																	</div>
																</div>
															</li>
															<li class="with-sub-menu hover">
																<p class="close-menu"></p>
																<a href="#" class="clearfix">
																	<strong><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?= base_url() ?>assets/frontend/image/demo/menu/new-icon.png" alt="">Categories</strong>
																	<span class="label"></span>
																	<b class="caret"></b>
																</a>
																<div class="sub-menu" style="width: 100%; display: none;">
																	<div class="content">
																		<div class="row">
																			<div class="col-sm-12">
																				<div class="row">
																					<div class="col-md-3 img img1">
																						<a href="#"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?= base_url() ?>assets/frontend/image/demo/cms/img1.jpg" alt="banner1"></a>
																					</div>
																					<div class="col-md-3 img img2">
																						<a href="#"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?= base_url() ?>assets/frontend/image/demo/cms/img2.jpg" alt="banner2"></a>
																					</div>
																					<div class="col-md-3 img img3">
																						<a href="#"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?= base_url() ?>assets/frontend/image/demo/cms/img3.jpg" alt="banner3"></a>
																					</div>
																					<div class="col-md-3 img img4">
																						<a href="#"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?= base_url() ?>assets/frontend/image/demo/cms/img4.jpg" alt="banner4"></a>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="row">
																			<div class="col-md-3">
																				<a href="#" class="title-submenu">Automotive</a>
																				<div class="row">
																					<div class="col-md-12 hover-menu">
																						<div class="menu">
																							<ul>
																								<li><a href="#" class="main-menu">Car Alarms and Security</a></li>
																								<li><a href="#" class="main-menu">Car Audio &amp; Speakers</a></li>
																								<li><a href="#" class="main-menu">Gadgets &amp; Auto Parts</a></li>
																								<li><a href="#" class="main-menu">More Car Accessories</a></li>
																							</ul>
																						</div>
																					</div>
																				</div>
																			</div>
																			<div class="col-md-3">
																				<a href="#" class="title-submenu">Electronics</a>
																				<div class="row">
																					<div class="col-md-12 hover-menu">
																						<div class="menu">
																							<ul>
																								<li><a href="#" class="main-menu">Battereries &amp; Chargers</a></li>
																								<li><a href="#" class="main-menu">Headphones, Headsets</a></li>
																								<li><a href="#" class="main-menu">Home Audio</a></li>
																								<li><a href="#" class="main-menu">Mp3 Players &amp; Accessories</a></li>
																							</ul>
																						</div>
																					</div>
																				</div>
																			</div>
																			<div class="col-md-3">
																				<a href="#" class="title-submenu">Jewelry &amp; Watches</a>
																				<div class="row">
																					<div class="col-md-12 hover-menu">
																						<div class="menu">
																							<ul>
																								<li><a href="#" class="main-menu">Earings</a></li>
																								<li><a href="#" class="main-menu">Wedding Rings</a></li>
																								<li><a href="#" class="main-menu">Men Watches</a></li>
																								<li><a href="#" class="main-menu">Women Watches</a></li>
																							</ul>
																						</div>
																					</div>
																				</div>
																			</div>
																			<div class="col-md-3">
																				<a href="#" class="title-submenu">Bags, Holiday Supplies</a>
																				<div class="row">
																					<div class="col-md-12 hover-menu">
																						<div class="menu">
																							<ul>
																								<li><a href="#" class="main-menu">Gift &amp; Lifestyle Gadgets</a></li>
																								<li><a href="#" class="main-menu">Gift for Man</a></li>
																								<li><a href="#" class="main-menu">Gift for Woman</a></li>
																								<li><a href="#" class="main-menu">Lighter &amp; Cigar Supplies</a></li>
																							</ul>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</li>

															<li class="with-sub-menu hover">
																<p class="close-menu"></p>
																<a href="#" class="clearfix">
																	<strong>Accessories</strong>

																	<b class="caret"></b>
																</a>
																<div class="sub-menu" style="width: 100%; display: none;">
																	<div class="content" style="display: none;">
																		<div class="row">
																			<div class="col-md-8">
																				<div class="row">
																					<div class="col-md-6 static-menu">
																						<div class="menu">
																							<ul>
																								<li>
																									<a href="#" class="main-menu">Automotive</a>
																									<ul>
																										<li><a href="#">Car Alarms and Security</a></li>
																										<li><a href="#">Car Audio &amp; Speakers</a></li>
																										<li><a href="3#">Gadgets &amp; Auto Parts</a></li>
																									</ul>
																								</li>
																								<li>
																									<a href="#" class="main-menu">Smartphone &amp; Tablets</a>
																									<ul>
																										<li><a href="#">Accessories for i Pad</a></li>
																										<li><a href="#">Apparel</a></li>
																										<li><a href="#">Accessories for iPhone</a></li>
																									</ul>
																								</li>
																							</ul>
																						</div>
																					</div>
																					<div class="col-md-6 static-menu">
																						<div class="menu">
																							<ul>
																								<li>
																									<a href="#" class="main-menu">Sports &amp; Outdoors</a>
																									<ul>
																										<li><a href="#">Camping &amp; Hiking</a></li>
																										<li><a href="#">Cameras &amp; Photo</a></li>
																										<li><a href="#">Cables &amp; Connectors</a></li>
																									</ul>
																								</li>
																								<li>
																									<a href="#" class="main-menu">Electronics</a>
																									<ul>
																										<li><a href="#">Battereries &amp; Chargers</a></li>
																										<li><a href="#">Bath &amp; Body</a></li>
																										<li><a href="#">Outdoor &amp; Traveling</a></li>
																									</ul>
																								</li>
																							</ul>
																						</div>
																					</div>
																				</div>
																			</div>
																			<div class="col-md-4">
																				<span class="title-submenu">Bestseller</span>
																				<div class="col-sm-12 list-product">
																					<div class="product-thumb">
																						<div class="image pull-left">
																							<a href="#"><img class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?= base_url() ?>assets/frontend/image/demo/shop/product/35.jpg" width="80" alt="Filet Mign" title="Filet Mign"></a>
																						</div>
																						<div class="caption">
																							<h4><a href="#">Filet Mign</a></h4>
																							<div class="ratings">
																								<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																								<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																								<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																								<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																								<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																							</div>
																							<p class="price">$88.00</p>
																						</div>
																					</div>
																				</div>
																				<div class="col-sm-12 list-product">
																					<div class="product-thumb">
																						<div class="image pull-left">
																							<a href="#"><img class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?= base_url() ?>assets/frontend/image/demo/shop/product/W1.jpg" width="80" alt="Dail Lulpa" title="Dail Lulpa"></a>
																						</div>
																						<div class="caption">
																							<h4><a href="#">Dail Lulpa</a></h4>
																							<div class="ratings">
																								<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																								<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																								<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																								<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																								<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																							</div>
																							<p class="price">$78.00</p>
																						</div>
																					</div>
																				</div>
																				<div class="col-sm-12 list-product">
																					<div class="product-thumb">
																						<div class="image pull-left">
																							<a href="#"><img class="lazyload img-responsive" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?= base_url() ?>assets/frontend/image/demo/shop/product/141.jpg" width="80" alt="Canon EOS 5D" title="Canon EOS 5D"></a>
																						</div>
																						<div class="caption">
																							<h4><a href="#">Canon EOS 5D</a></h4>

																							<div class="ratings">
																								<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																								<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																								<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																								<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																								<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
																							</div>
																							<p class="price">
																								<span class="price-new">$60.00</span>
																								<span class="price-old">$145.00</span>

																							</p>
																						</div>
																					</div>
																				</div>

																			</div>
																		</div>
																	</div>
																</div>
															</li>
															<li class="">
																<p class="close-menu"></p>
																<a href="<?= base_url('blog') ?>" class="clearfix">
																	<strong>Blog</strong>
																	<span class="label"></span>
																</a>
															</li>

															<li class="hidden-md color-buy">
																<p class="close-menu"></p>
																<a href="#" class="clearfix">
																	<strong>Buy Theme!</strong>
																</a>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</nav>
								</div>
							</div>

							<!-- Cart Pro-->
							<div class="block-cart col-md-2 col-sm-3 col-xs-8">
								<div class="block-cart">
									<!--cart-->
									<div class="shopping_cart pull-right">
										<div id="cart" class=" btn-group btn-shopping-cart">
											<a data-loading-text="Loading..." class="btn-group top_cart dropdown-toggle" data-toggle="dropdown">
												<div class="shopcart">
													<span class="handle pull-left"></span>
													<span class="text-shopping-cart hidden-xs"> My cart </span>
													<span class="total-shopping-cart cart-total-full"> 2</span>
												</div>
											</a>
											<ul class="tab-content content dropdown-menu pull-right shoppingcart-box" role="menu">
												<li>
													<table class="table table-striped">
														<tbody>
															<tr>
																<td class="text-center" style="width:70px">
																	<a href="product.html"> <img class="lazyload preview" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?= base_url() ?>assets/frontend/image/demo/shop/product/35.jpg" style="width:70px" alt="Filet Mign" title="Filet Mign"> </a>
																</td>
																<td class="text-left"> <a class="cart_product_name" href="product.html">Filet Mign</a> </td>
																<td class="text-center"> x1 </td>
																<td class="text-center"> $1,202.00 </td>
																<td class="text-right">
																	<a href="product.html" class="fa fa-edit"></a>
																</td>
																<td class="text-right">
																	<a onclick="cart.remove('2');" class="fa fa-times fa-delete"></a>
																</td>
															</tr>
															<tr>
																<td class="text-center" style="width:70px">
																	<a href="product.html"> <img class="lazyload preview" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?= base_url() ?>assets/frontend/image/demo/shop/product/141.jpg" style="width:70px" alt="Canon EOS 5D" title="Canon EOS 5D"> </a>
																</td>
																<td class="text-left"> <a class="cart_product_name" href="product.html">Canon EOS 5D</a> </td>
																<td class="text-center"> x1 </td>
																<td class="text-center"> $60.00 </td>
																<td class="text-right">
																	<a href="product.html" class="fa fa-edit"></a>
																</td>
																<td class="text-right">
																	<a onclick="cart.remove('1');" class="fa fa-times fa-delete"></a>
																</td>
															</tr>
														</tbody>
													</table>
												</li>
												<li>
													<div>
														<table class="table table-bordered">
															<tbody>
																<tr>
																	<td class="text-left"><strong>Sub-Total</strong>
																	</td>
																	<td class="text-right">$1,060.00</td>
																</tr>
																<tr>
																	<td class="text-left"><strong>Eco Tax (-2.00)</strong>
																	</td>
																	<td class="text-right">$2.00</td>
																</tr>
																<tr>
																	<td class="text-left"><strong>VAT (20%)</strong>
																	</td>
																	<td class="text-right">$200.00</td>
																</tr>
																<tr>
																	<td class="text-left"><strong>Total</strong>
																	</td>
																	<td class="text-right">$1,262.00</td>
																</tr>
															</tbody>
														</table>
														<p class="text-center"> <a class="btn view-cart" href="<?= base_url('cart') ?>"><i class="fa fa-shopping-cart"></i>View Cart</a>&nbsp;&nbsp;&nbsp; <a class="btn btn-mega checkout-cart" href="<?= base_url('checkout') ?>"><i class="fa fa-share"></i>Checkout</a> </p>
													</div>
												</li>
											</ul>
										</div>
									</div>
									<!--//cart-->
								</div>
							</div>
							<!-- //End Cart Pro -->
						</div>
					</div>
				</div>
			</div>


		</header>


		<!-- //Header Container  -->