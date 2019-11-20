
<!DOCTYPE html>
<html lang="en">
<head>
    
    <!-- Basic page needs
  ============================================ -->
  <base href="{{ asset('') }}">
	<title>Maxshop Home 10 - Premium Multipurpose HTML5/CSS3 Theme</title>
	<meta charset="utf-8">
  <title>@yield('title')</title>
	<!-- Mobile specific metas
	============================================ -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	
	<!-- Favicon
	============================================ -->

  <link rel="shortcut icon" href="ico/favicon.png">
	
	<!-- Google web fonts
	============================================ -->
	<link href="../../../../https@fonts.googleapis.com/css@family=Poppins_3A400,500,600,700_7CRoboto_3A400,500,700,900" rel="stylesheet">
	
    <!-- Libs CSS
	============================================ -->
  <link rel="stylesheet" href="clients/css/bootstrap/css/bootstrap.min.css">
	<link href="clients/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="clients/js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
  <link href="clients/js/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link href="clients/css/themecss/lib.css" rel="stylesheet">
	<link href="clients/js/jquery-ui/jquery-ui.min.css" rel="stylesheet">
	
	<!-- Theme CSS
	============================================ -->
  <link href="clients/css/themecss/so_megamenu.css" rel="stylesheet">
  <link href="clients/css/themecss/so-categories.css" rel="stylesheet">
	<link href="clients/css/themecss/so-listing-tabs.css" rel="stylesheet">
	<link href="clients/css/themecss/slider.css" rel="stylesheet">
	<link href="clients/css/themecss/so-super-category.css" rel="stylesheet">
	<link id="color_scheme" href="clients/css/home10.css" rel="stylesheet">
	<link href="clients/css/responsive.css" rel="stylesheet">
	
   

</head>

<body class="common-home res layout-home10 pattern-28">
    <div id="wrapper" class="wrapper-boxed banners-effect-7">
		<!-- Header Container  -->
		<header id="header" class=" variantleft type_10">
			<!-- Header Top -->
			<div class="header-top compact-hidden">
				<div class="container">
					<div class="header-top-left pull-left">
						<ul class="top-link">
							<li class="form-group languages-block ">
								<form action="index.html" method="post" enctype="multipart/form-data" id="bt-language">
									<a class="btn btn-xs dropdown-toggle" data-toggle="dropdown">
										<img src="clients/images/demo/flags/gb.png" alt="English" title="English">
										<span class="">English</span>
										<span class="fa fa-angle-down"></span>
									</a>
									<ul class="dropdown-menu">
										<li><a href="index.html"><img class="image_flag" src="clients/images/demo/flags/gb.png" alt="English" title="English" /> English </a></li>
										<li> <a href="index.html"> <img class="image_flag" src="clients/images/demo/flags/lb.png" alt="Arabic" title="Arabic" /> Arabic </a> </li>
									</ul>
								</form>
							</li>
							<li class="form-group currency currencies-block">
								<form action="index.html" method="post" enctype="multipart/form-data" id="currency">
									<a class="btn btn-xs dropdown-toggle" data-toggle="dropdown">
										<span class="icon icon-credit "></span> USD <span class="fa fa-angle-down"></span>
									</a>
									<ul class="dropdown-menu btn-xs">
										<li> <a href="#">(€)&nbsp;Euro</a></li>
										<li> <a href="#">(£)&nbsp;Pounds	</a></li>
										<li> <a href="#">($)&nbsp;USD	</a></li>
									</ul>
								</form>
							</li>
						</ul>
						
					</div>
					<div class="block-cart pull-right">
						<!--cart-->
						<div class="shopping_cart ">
							<div id="cart" class=" btn-group btn-shopping-cart">
								<a data-loading-text="Loading..." class="btn-group top_cart dropdown-toggle" data-toggle="dropdown">
									<div class="shopcart">
										<span class="handle pull-left"></span>
										<span>My Cart</span>
										<span class="total-shopping-cart cart-total-full">	02</span>
									</div>
								</a>
								<ul class="tab-content content dropdown-menu pull-right shoppingcart-box" role="menu">							
									<li>
										<table class="table table-striped">
											<tbody>
												<tr>
													<td class="text-center" style="width:70px">
														<a href="product.html"> <img src="clients/images/demo/shop/product/35.jpg" style="width:70px" alt="Filet Mign" title="Filet Mign" class="preview"> </a>
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
														<a href="product.html"> <img src="clients/images/demo/shop/product/141.jpg" style="width:70px" alt="Canon EOS 5D" title="Canon EOS 5D" class="preview"> </a>
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
											<p class="text-center"> <a class="btn view-cart" href="cart.html"><i class="fa fa-shopping-cart"></i>View Cart</a>&nbsp;&nbsp;&nbsp; <a class="btn btn-mega checkout-cart" href="checkout.html"><i class="fa fa-share"></i>Checkout</a> </p>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<!--//cart-->
					</div>
					<div class="header-top-right collapsed-block pull-right">
						<h5 class="tabBlockTitle visible-xs">More<a class="expander " href="#TabBlock-1"><i class="fa fa-angle-down"></i></a></h5>
						<div class="tabBlock" id="TabBlock-1">
							<ul class="top-link list-inline">
								<li class="account" id="my_account">
									<a href="#" title="My Account" class="btn btn-xs dropdown-toggle" data-toggle="dropdown"> <span >My Account</span> <span class="fa fa-angle-down"></span></a>
									<ul class="dropdown-menu ">
										<li><a href="register.html"><i class="fa fa-user"></i> Register</a></li>
										<li><a href="login.html"><i class="fa fa-pencil-square-o"></i> Login</a></li>
									</ul>
								</li>
								<li class="wishlist "><a href="wishlist.html" id="wishlist-total" class="top-link-wishlist" title="Wish List (2)"><span>Wish List (2)</span></a></li>
								<li class="checkout "><a href="checkout.html" class="top-link-checkout" title="Checkout"><span >Checkout</span></a></li>
								<li class="compare"><a href="compare.html" title="compare"><span >compare</span></a></li>
							</ul>
						</div>

					</div>
					
					

				</div>
			</div>
			<!-- //Header Top --> 
			<!-- Header center -->
			<div class="header-center">
				<div class="container">
					<div class="row">
						<!-- Logo -->
						<div class="navbar-logo col-md-3 col-sm-4 col-xs-12">
							<a href="home10.html"><img src="clients/images/demo/logos/theme_logo_orange.png" title="Your Store" alt="Your Store" /></a>
						</div>
						<!-- //End Logo -->
						<div class="header-center-right col-md-9 col-sm-8 col-xs-12">			
							<div class=" header_search">
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
							<!-- Phone -->
							<div class="phone-contact hidden-xs">
								<div class="inner-info">
									<h2>Hotline:</h2><p>(801) 2345 - 6789</p>
								</div>
							</div>
							<!-- //End Phone -->
						</div>
					</div>
				</div>
			</div>
			<!-- //Header center -->
			<!-- Header Bottom -->
			<div class="header-bottom compact-hidden">
				<div class="container">
				<div class="rows">
					<div class="header-bottom-inner">
						<div class="header-bottom-menu-vertical col-md-3 hidden-sm col-xs-6">
							<!-- Mod Vertical Menu -->
							<div class="responsive so-megamenu megamenu-style-dev">
								<div class="so-vertical-menu no-gutter compact-hidden">
									<nav class="navbar-default">	
										
										<div class="container-megamenu vertical open">
											<div id="menuHeading">
												<div class="megamenuToogle-wrapper">
													<div class="megamenuToogle-pattern">
														<div class="container">
															<div>
																<span></span>
																<span></span>
																<span></span>
															</div>
															Categories							
															<i class="fa pull-right arrow-circle fa-chevron-circle-up"></i>
														</div>
													</div>
												</div>
											</div>
											<div class="navbar-header">
												<button type="button" id="show-verticalmenu" data-toggle="collapse" class="navbar-toggle">
													<span class="icon-bar" style="width: 12px;"></span>
													<span class="icon-bar" style="width: 16px;"></span>
													<span class="icon-bar"></span>
												</button>	
											</div>
											<div class="vertical-wrapper" >
												<span id="remove-verticalmenu" class="fa fa-times"></span>
												<div class="megamenu-pattern">
													<div class="container">
														<ul class="megamenu">
															<li class="item-vertical style1 with-sub-menu hover">
																<p class="close-menu"></p>
																<a href="#" class="clearfix">
																	<img src="clients/images/theme/icons/icon1.png" alt="icon">
																	<strong>
																	<span>Fruit &amp;  Vegetables</span>
																	<b class="fa fa-angle-right"></b>
																	</strong> 
																</a>
																<div class="sub-menu" data-subwidth="100" >
																	<div class="content" >
																		<div class="row">
																			<div class="col-sm-8">
																				<div class="categories ">
																					<div class="row">
																						<div class="col-sm-6 static-menu">
																							<div class="menu">
																								<ul>
																									<li>
																										<a href="#" class="main-menu">Automotive</a>
																										<ul>
																											<li> <a href="#">Car Alarms and Security</a>	</li>
																											<li> <a href="#">Car Audio &amp; Speakers</a>   </li>
																											<li> <a href="#">Gadgets &amp; Auto Parts</a>	</li>
																											<li> <a href="#">More Car Accessories</a>		</li>
																										</ul>
																									</li>
																									<li>
																										<a href="#" class="main-menu">Computer</a>
																										<ul>
																											<li> <a href="#">Camping &amp; Hiking</a>	</li>
																											<li> <a href="#">Cusen mariot</a>			</li>
																											<li> <a href="#">Denta magela</a>			</li>
																											<li> <a href="#">Engite nanet</a>			</li>
																										</ul>
																									</li>
																								</ul>
																							</div>
																						</div>
																						<div class="col-sm-6 static-menu">
																							<div class="menu">
																								<ul>
																									<li>
																										<a href="#" class="main-menu">Electronics </a>
																										<ul>
																											<li>	<a href="#">Angene mafin</a>	</li>
																											<li>	<a href="#">Egante mangetes</a>	</li>
																											<li>	<a href="#">Gante extensg</a>	</li>
																											<li>	<a href="#">Guntes magesg</a>	</li>
																										</ul>
																									</li>
																									<li>
																										<a href="#" class="main-menu">Mobile &amp; Tablet </a>
																										<ul>
																											<li>	<a href="#">Hanet magente</a>	</li>
																											<li>	<a href="#">Knage unget</a>		</li>
																											<li>	<a href="#">Latenge mange</a>	</li>
																											<li>	<a href="#">Punge nenune</a>	</li>
																										</ul>
																									</li>
																								</ul>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																			<div class="col-sm-4">
																				<div class="row img-banner">
																					<a href="#"><img src="clients/images/demo/cms/img-static-megamenu-h.png" alt="banner"></a>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</li>
															<li class="item-vertical">
																<p class="close-menu"></p>
																<a href="#" class="clearfix">
																	<img src="clients/images/theme/icons/icon2.png" alt="icon">
																	<strong>
																	<span>Hot Care  &amp; Foods</span>
																	</strong>
																</a>
															</li>
															<li class="item-vertical with-sub-menu hover">
																<p class="close-menu"></p>
																<a href="#" class="clearfix">
																	<img src="clients/images/theme/icons/icon3.png" alt="icon">
																	<span class="label"></span>
																	<strong>
																	<span>fish &amp; Outdoors</span>
																	<b class="fa fa-angle-right"></b>
																	</strong>
																</a>
																<div class="sub-menu" data-subwidth="60" >
																	<div class="content">
																		<div class="row">
																			<div class="col-md-6">
																				<div class="row">
																					<div class="col-md-12 static-menu">
																						<div class="menu">
																							<ul>
																								<li>
																									<a href="#" onclick="window.location = '81';" class="main-menu">Mobile Accessories</a>
																									<ul>
																										<li><a href="#" onclick="window.location = '33_63';">Gadgets &amp; Auto Parts</a></li>
																										<li><a href="#" onclick="window.location = '24_64';">Bath &amp; Body</a></li>
																										<li><a href="#" onclick="window.location = '17';">Bags, Holiday Supplies</a></li>
																									</ul>
																								</li>
																								<li>
																									<a href="#" onclick="window.location = '18_46';" class="main-menu">Battereries &amp; Chargers</a>
																									<ul>
																										<li><a href="#" onclick="window.location = '25_28';">Outdoor &amp; Traveling</a></li>
																										<li><a href="#" onclick="window.location = '80';">Flashlights &amp; Lamps</a></li>
																										<li><a href="#" onclick="window.location = '24_66';">Fragrances</a></li>
																									</ul>
																								</li>
																								<li>
																									<a href="#" onclick="window.location = '25_31';" class="main-menu">Fishing</a>
																									<ul>
																										<li><a href="#" onclick="window.location = '57_73';">FPV System &amp; Parts</a></li>
																										<li><a href="#" onclick="window.location = '18';">Electronics</a></li>
																										<li><a href="#" onclick="window.location = '20_76';">Earings</a></li>
																										<li><a href="#" onclick="window.location = '33_60';">More Car Accessories</a></li>
																									</ul>
																								</li>
																							</ul>
																						</div>
																					</div>
																				</div>
																			</div>
																			<div class="col-md-6">
																				<div class="row banner">
																					<a href="#">
																						<img src="clients/images/demo/cms/menu_bg2.jpg" alt="banner1">
																						</a>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</li>
																<li class="item-vertical with-sub-menu hover">
																	<p class="close-menu"></p>
																	<a href="#" class="clearfix">
																		<img src="clients/images/theme/icons/icon4.png" alt="icon">
																		<strong>
																		<span>Ecofor &amp; Raical</span>
																		<b class="fa fa-angle-right"></b>
																		</strong>
																	</a>
																	<div class="sub-menu" data-subwidth="100" >
																		<div class="content" >
																			<div class="row">
																				<div class="col-md-12">
																					<div class="row">
																						<div class="col-md-4 static-menu">
																							<div class="menu">
																								<ul>
																									<li>
																										<a href="#" class="main-menu">Car Alarms and Security</a>
																										<ul>
																											<li><a href="#" >Car Audio &amp; Speakers</a></li>
																											<li><a href="#" >Gadgets &amp; Auto Parts</a></li>
																											<li><a href="#" >Gadgets &amp; Auto Parts</a></li>
																											<li><a href="#" >Headphones, Headsets</a></li>
																										</ul>
																									</li>
																									<li>
																										<a href="24" onclick="window.location = '24';" class="main-menu">Health &amp; Beauty</a>
																										<ul>
																											<li>
																												<a href="#" >Home Audio</a>
																											</li>
																											<li>
																												<a href="#" >Helicopters &amp; Parts</a>
																											</li>
																											<li>
																												<a href="#" >Outdoor &amp; Traveling</a>
																											</li>
																											<li>
																												<a href="#">Toys &amp; Hobbies</a>
																											</li>
																										</ul>
																									</li>
																								</ul>
																							</div>
																						</div>
																						<div class="col-md-4 static-menu">
																							<div class="menu">
																								<ul>
																									<li>
																										<a href="#"  class="main-menu">Electronics</a>
																										<ul>
																											<li>
																												<a href="#">Earings</a>
																											</li>
																											<li>
																												<a href="#" >Salon &amp; Spa Equipment</a>
																											</li>
																											<li>
																												<a href="#" >Shaving &amp; Hair Removal</a>
																											</li>
																											<li>
																												<a href="#">Smartphone &amp; Tablets</a>
																											</li>
																										</ul>
																									</li>
																									<li>
																										<a href="#"  class="main-menu">Sports &amp; Outdoors</a>
																										<ul>
																											<li>
																												<a href="#" >Flashlights &amp; Lamps</a>
																											</li>
																											<li>
																												<a href="#" >Fragrances</a>
																											</li>
																											<li>
																												<a href="#" >Fishing</a>
																											</li>
																											<li>
																												<a href="#" >FPV System &amp; Parts</a>
																											</li>
																										</ul>
																									</li>
																								</ul>
																							</div>
																						</div>
																						<div class="col-md-4 static-menu">
																							<div class="menu">
																								<ul>
																									<li>
																										<a href="#" class="main-menu">More Car Accessories</a>
																										<ul>
																											<li>
																												<a href="#" >Lighter &amp; Cigar Supplies</a>
																											</li>
																											<li>
																												<a href="#" >Mp3 Players &amp; Accessories</a>
																											</li>
																											<li>
																												<a href="#" >Men Watches</a>
																											</li>
																											<li>
																												<a href="#" >Mobile Accessories</a>
																											</li>
																										</ul>
																									</li>
																									<li>
																										<a href="#" class="main-menu">Gadgets &amp; Auto Parts</a>
																										<ul>
																											<li>
																												<a href="#" >Gift &amp; Lifestyle Gadgets</a>
																											</li>
																											<li>
																												<a href="#" >Gift for Man</a>
																											</li>
																											<li>
																												<a href="#" >Gift for Woman</a>
																											</li>
																											<li>
																												<a href="#" >Gift for Woman</a>
																											</li>
																										</ul>
																									</li>
																								</ul>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</li>
																<li class="item-vertical css-menu with-sub-menu hover">
																	<p class="close-menu"></p>
																	<a href="#" class="clearfix">
																		<img src="clients/images/theme/icons/icon5.png" alt="icon">
																		<strong>
																			<span>water &amp; Juice</span>
																			<b class="fa fa-angle-right"></b>
																		</strong>
																	</a>
																	<div class="sub-menu" data-subwidth="30" style="width: 270px; display: none; right: 0px;">
																		<div class="content"  style="display: none;">
																			<div class="row">
																				<div class="col-sm-12">
																					<div class="categories ">
																						<div class="row">
																							<div class="col-sm-12 hover-menu">
																								<div class="menu">
																									<ul>
																										<li><a href="#" class="main-menu">Headphones, Headsets <b class="fa fa-angle-right"></b></a>
																											<ul>
																												<li><a href="#">Head Magente</a></li>
																												<li><a href="#">Head Unget</a></li>
																												<li><a href="#">Latenge mange</a></li>
																												<li><a href="#">Car Alarms and Security</a></li>
																											</ul>
																										</li>
																										<li><a href="#" class="main-menu">Home Audio</a></li>
																										<li><a href="#" class="main-menu">Health &amp; Beauty<b class="fa fa-angle-right"></b></a>
																											<ul>
																												<li><a href="#">Rengae manges</a></li>
																												<li><a href="#">Mobiles</a></li>
																												<li><a href="#">Macs</a></li>
																												<li><a href="#">Punge nenune</a></li>
																											</ul>
																										</li>
																										<li><a href="#" class="main-menu">Helicopters &amp; Parts</a></li>
																										<li><a href="#" class="main-menu">Car Audio &amp; Speakers<b class="fa fa-angle-right"></b></a>
																											<ul>
																												<li><a href="#">Qunge genga</a></li>
																												<li><a href="#">Accessories</a></li>
																												<li><a href="#">Laptops &amp; Notebooks</a></li>
																											</ul>
																										</li>
																									</ul>

																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</li>
																<li class="item-vertical">
																	<p class="close-menu"></p>
																	<a href="#" class="clearfix">
																		<img src="clients/images/theme/icons/icon6.png" alt="icon">
																		<strong>
																			<span>Flashlights &amp; Lamps</span>
																		</strong>
																	</a>
																</li>
																<li class="item-vertical">
																	<p class="close-menu"></p>
																	<a href="#" class="clearfix">
																		<img src="clients/images/theme/icons/icon7.png" alt="icon">
																		<strong>
																			<span>Ready &amp; meals</span>
																		</strong>
																	</a>
																</li>
																
																<li class="item-vertical" style="display: none;">
																	<p class="close-menu"></p>
																	
																	<a href="#" class="clearfix">
																		<img src="clients/images/theme/icons/icon8.png" alt="icon">
																		<strong>
																			<span>Health &amp; Beauty</span>
																		</strong>
																	</a>
																</li>
																<li class="item-vertical" >
																	<p class="close-menu"></p>
																	<a href="#" class="clearfix">
																		<img src="clients/images/theme/icons/icon9.png" alt="icon">
																		<strong>
																			<span>Sausages &amp; Hobbies </span>
																		</strong>
																	</a>
																</li>
																
																<li class="loadmore">
																	<i class="fa fa-plus-square-o"></i>
																	<span class="more-view">More Categories</span>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</nav>
								</div>
							</div>
							<!-- //End Mod -->
						</div>
						<div class="header-bottom-menu col-md-9 col-sm-2 col-xs-6">
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
															<div class="sub-menu" style="width:100%;" >
																<div class="content" >
																	<div class="row">
																		<div class="col-md-3">
																			<a href="index.html" class="image-link"> 
																				<span class="thumbnail">
																					<img class="img-responsive img-border" src="clients/images/demo/menu/home-1.jpg" alt="">
																					<span class="btn btn-default">Read More</span>
																				</span> 
																				<h3 class="figcaption">Home page - (Default)</h3> 
																			</a> 
																			
																		</div>
																		<div class="col-md-3">
																			<a href="home2.html" class="image-link"> 
																				<span class="thumbnail">
																					<img class="img-responsive img-border" src="clients/images/demo/menu/home-2.jpg" alt="">
																					<span class="btn btn-default">Read More</span>
																				</span> 
																				<h3 class="figcaption">Home page - Layout 2</h3> 
																			</a> 
																			
																		</div>
																		<div class="col-md-3">
																			<a href="home3.html" class="image-link"> 
																				<span class="thumbnail">
																					<img class="img-responsive img-border" src="clients/images/demo/menu/home-3.jpg" alt="">
																					<span class="btn btn-default">Read More</span>
																				</span> 
																				<h3 class="figcaption">Home page - Layout 3</h3> 
																			</a> 
																			
																		</div>
																		<div class="col-md-3">
																			<a href="home4.html" class="image-link"> 
																				<span class="thumbnail">
																					<img class="img-responsive img-border" src="clients/images/demo/menu/home-4.jpg" alt="">
																					<span class="btn btn-default">Read More</span>
																				</span> 
																				<h3 class="figcaption">Home page - Layout 4</h3> 
																			</a> 
																			
																		</div>
																		
																		<div class="col-md-3">
																			<a href="home5.html" class="image-link"> 
																				<span class="thumbnail">
																					<img class="img-responsive img-border" src="clients/images/demo/menu/home-5.jpg" alt="">
																					<span class="btn btn-default">Read More</span>
																				</span> 
																				<h3 class="figcaption">Home page - Layout 5</h3> 
																			</a> 
																			
																		</div>
																		<div class="col-md-3">
																			<a href="home6.html" class="image-link"> 
																				<span class="thumbnail">
																					<img class="img-responsive img-border" src="clients/images/demo/menu/home-6.jpg" alt="">
																					<span class="btn btn-default">Read More</span>
																				</span> 
																				<h3 class="figcaption">Home page - Layout 6</h3> 
																			</a> 
																			
																		</div>
																		<div class="col-md-3">
																			<a href="home7.html" class="image-link"> 
																				<span class="thumbnail">
																					<img class="img-responsive img-border" src="clients/images/demo/menu/home-7.jpg" alt="">
																					<span class="btn btn-default">Read More</span>
																				</span> 
																				<h3 class="figcaption">Home page - Layout 7</h3> 
																			</a> 
																			
																		</div>
																		<div class="col-md-3">
																			<a href="home8.html" class="image-link"> 
																				<span class="thumbnail">
																					<img class="img-responsive img-border" src="clients/images/demo/menu/home-8.jpg" alt="">
																					<span class="btn btn-default">Read More</span>
																				</span> 
																				<h3 class="figcaption">Home page - Layout 8</h3> 
																			</a> 
																			
																		</div>
																		<div class="col-md-3">
																			<a href="home9.html" class="image-link"> 
																				<span class="thumbnail">
																					<img class="img-responsive img-border" src="clients/images/demo/menu/home-9.jpg" alt="">
																					<span class="btn btn-default">Read More</span>
																				</span> 
																				<h3 class="figcaption">Home page - Layout 9</h3> 
																			</a> 
																			
																		</div>
																		<div class="col-md-3">
																			<a href="home10.html" class="image-link"> 
																				<span class="thumbnail">
																					<img class="img-responsive img-border" src="clients/images/demo/menu/home-10.jpg" alt="">
																					<span class="btn btn-default">Read More</span>
																				</span> 
																				<h3 class="figcaption">Home page - Layout 10</h3> 
																			</a> 
																			
																		</div>
																		<div class="col-md-3">
																			<a href="#" class="image-link"> 
																				<span class="thumbnail">
																					<img class="img-responsive img-border" src="clients/images/demo/menu/home-11.jpg" alt="">
																					<span class="btn btn-default">Read More</span>
																				</span> 
																				<h3 class="figcaption">Home page - Layout 11</h3> 
																			</a> 
																			
																		</div>
																		<div class="col-md-3">
																			<a href="#" class="image-link"> 
																				<span class="thumbnail">
																					<img class="img-responsive img-border" src="clients/images/demo/menu/home-12.jpg" alt="">
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
																<div class="content" >
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
																						<li><a href="cart.html">Shopping Cart Page</a></li>
																						<li><a href="checkout.html">Checkout Page</a></li>
																						<li><a href="compare.html">Compare Page</a></li>
																						<li><a href="wishlist.html">Wishlist Page</a></li>
																					
																					</ul>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-3">
																			<div class="column">
																				<a href="#" class="title-submenu">My Account pages</a>
																				<div>
																					<ul class="row-list">
																						<li><a href="login.html">Login Page</a></li>
																						<li><a href="register.html">Register Page</a></li>
																						<li><a href="my-account.html">My Account</a></li>
																						<li><a href="order-history.html">Order History</a></li>
																						<li><a href="order-information.html">Order Information</a></li>
																						<li><a href="return.html">Product Returns</a></li>
																						<li><a href="gift-voucher.html">Gift Voucher</a></li>
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
																<strong><img src="clients/images/demo/menu/hot-icon.png" alt="">Pages</strong>
																<b class="caret"></b>
															</a>
															<div class="sub-menu" style="width: 40%; ">
																<div class="content" >
																	<div class="row">
																		<div class="col-md-6">
																			<ul class="row-list">
																				<li><a class="subcategory_item" href="faq.html">FAQ</a></li>
																				<li><a class="subcategory_item" href="typography.html">Typography</a></li>
																				<li><a class="subcategory_item" href="sitemap.html">Site Map</a></li>
																				<li><a class="subcategory_item" href="contact.html">Contact us</a></li>
																				<li><a class="subcategory_item" href="banner-effect.html">Banner Effect</a></li>
																			</ul>
																		</div>
																		<div class="col-md-6">
																			<ul class="row-list">
																				<li><a class="subcategory_item" href="about-us.html">About Us 1</a></li>
																				<li><a class="subcategory_item" href="about-us-2.html">About Us 2</a></li>
																				<li><a class="subcategory_item" href="about-us-3.html">About Us 3</a></li>
																				<li><a class="subcategory_item" href="about-us-4.html">About Us 4</a></li>
																			</ul>
																		</div>
																	</div>
																</div>
															</div>
														</li>
														<li class="with-sub-menu hover">
															<p class="close-menu"></p>
															<a href="#" class="clearfix">
																<strong><img src="clients/images/demo/menu/new-icon.png" alt="">Categories</strong>
																<span class="label"></span>
																<b class="caret"></b>
															</a>
															<div class="sub-menu" style="width: 100%; display: none;">
																<div class="content">
																	<div class="row">
																		<div class="col-sm-12">
																			<div class="row">
																				<div class="col-md-3 img img1">
																					<a href="#"><img src="clients/images/demo/cms/img1.jpg" alt="banner1"></a>
																				</div>
																				<div class="col-md-3 img img2">
																					<a href="#"><img src="clients/images/demo/cms/img2.jpg" alt="banner2"></a>
																				</div>
																				<div class="col-md-3 img img3">
																					<a href="#"><img src="clients/images/demo/cms/img3.jpg" alt="banner3"></a>
																				</div>
																				<div class="col-md-3 img img4">
																					<a href="#"><img src="clients/images/demo/cms/img4.jpg" alt="banner4"></a>
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
																							<li><a href="#"  class="main-menu">Car Alarms and Security</a></li>
																							<li><a href="#"  class="main-menu">Car Audio &amp; Speakers</a></li>
																							<li><a href="#"  class="main-menu">Gadgets &amp; Auto Parts</a></li>
																							<li><a href="#"  class="main-menu">More Car Accessories</a></li>
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
																							<li><a href="#"  class="main-menu">Battereries &amp; Chargers</a></li>
																							<li><a href="#"  class="main-menu">Headphones, Headsets</a></li>
																							<li><a href="#"  class="main-menu">Home Audio</a></li>
																							<li><a href="#"  class="main-menu">Mp3 Players &amp; Accessories</a></li>
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
																							<li><a href="#"  class="main-menu">Earings</a></li>
																							<li><a href="#"  class="main-menu">Wedding Rings</a></li>
																							<li><a href="#"  class="main-menu">Men Watches</a></li>
																							<li><a href="#"  class="main-menu">Women Watches</a></li>
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
																							<li><a href="#"  class="main-menu">Gift &amp; Lifestyle Gadgets</a></li>
																							<li><a href="#"  class="main-menu">Gift for Man</a></li>
																							<li><a href="#"  class="main-menu">Gift for Woman</a></li>
																							<li><a href="#"  class="main-menu">Lighter &amp; Cigar Supplies</a></li>
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
																								<a href="#"  class="main-menu">Automotive</a>
																								<ul>
																									<li><a href="#">Car Alarms and Security</a></li>
																									<li><a href="#" >Car Audio &amp; Speakers</a></li>
																									<li><a href="3#" >Gadgets &amp; Auto Parts</a></li>
																								</ul>
																							</li>
																							<li>
																								<a href="#"  class="main-menu">Smartphone &amp; Tablets</a>
																								<ul>
																									<li><a href="#" >Accessories for i Pad</a></li>
																									<li><a href="#" >Apparel</a></li>
																									<li><a href="#" >Accessories for iPhone</a></li>
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
																									<li><a href="#" >Camping &amp; Hiking</a></li>
																									<li><a href="#" >Cameras &amp; Photo</a></li>
																									<li><a href="#" >Cables &amp; Connectors</a></li>
																								</ul>
																							</li>
																							<li>
																								<a href="#"  class="main-menu">Electronics</a>
																								<ul>
																									<li><a href="#" >Battereries &amp; Chargers</a></li>
																									<li><a href="#" >Bath &amp; Body</a></li>
																									<li><a href="#" >Outdoor &amp; Traveling</a></li>
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
																						<a href="#"><img src="clients/images/demo/shop/product/35.jpg" width="80" alt="Filet Mign" title="Filet Mign" class="img-responsive"></a>
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
																						<a href="#"><img src="clients/images/demo/shop/product/W1.jpg" width="80" alt="Dail Lulpa" title="Dail Lulpa" class="img-responsive"></a>
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
																						<a href="#"><img src="clients/images/demo/shop/product/141.jpg" width="80" alt="Canon EOS 5D" title="Canon EOS 5D" class="img-responsive"></a>
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
															<a href="blog-page.html" class="clearfix">
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
						
					</div>
				</div>
				</div>
			</div>
		</header>
		<!-- //Header Container  -->
		<!-- Main Container  -->
		<main id="content" class="page-main">
			<!-- Block Spotlight1  -->
			<div class="so-spotlight1 ">
				<div class="container">
					<div class="row">
						<div class="col-lg-offset-3 col-lg-9 col-md-12 box_slider">
							<div id="sohomepage-slider-home3">
								<div class="slider-container "> 
									<div id="so-slideshow" class="">
										<div class="module slideshow no-margin">
											<div class="item">
												<a href="#"><img src="clients/images/demo/slider/sl10/2.jpg" alt="slider1" class="img-responsive"></a>
											</div>
											<div class="item">
												<a href="#"><img src="clients/images/demo/slider/sl10/1.jpg" alt="slider1" class="img-responsive"></a>
											</div>
											<div class="item">
												<a href="#"><img src="clients/images/demo/slider/sl10/3.jpg" alt="slider1" class="img-responsive"></a>
											</div>
										</div>
										<div class="loadeding"></div>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>  
			</div>
			<!--Block Spotlight2  -->
			<div class="so-spotlight2">
				<div class="container">
					<!-- Banner Bottom -->
					<div class="module box-bn-top row">
					    <div class="col-sm-3 img-item"><a href="#"><img src="clients/images/demo/cms/img-2-h10.png" alt="Static Image"></a></div>
					    <div class="col-sm-3 img-item"><a href="#"><img src="clients/images/demo/cms/img-3-h10.png" alt="Static Image"></a></div>
					    <div class="col-sm-3 img-item"><a href="#"><img src="clients/images/demo/cms/img-4-h10.png" alt="Static Image"></a></div>
					    <div class="col-sm-3 img-item"><a href="#"><img src="clients/images/demo/cms/img-5-h10.png" alt="Static Image"></a></div>
					</div>
					<!-- End Banner -->
					<div class="text-center bottom-space">
						<h1 class="size-lg no-padding">WELCOME TO <span class="logo-font custom-color">Maxshop</span> STORE</h1>
						<div class="line-divider"></div>
						<p class="custom-color-alt">Lorem ipsum dolor sit amet, ex eam mundi populo accusamus, aliquam quaestio petentium te cum.
							<br> Vim ei oblique tacimates, usu cu iudico graeco. Graeci eripuit inimicus vel eu, eu mel unum laoreet splendide, cu integre apeirian has.
						</p>
					</div>
					<div class="module box-services row">
					     <div class="item-ser col-sm-4 col-xs-4"><a href="#"><img src="clients/images/demo/banner/h10-01.png" alt="Banner"></a></div>
					     <div class="item-ser col-sm-4 col-xs-4"><a href="#"><img src="clients/images/demo/banner/h10-02.png" alt="Banner"></a></div>
					     <div class="item-ser col-sm-4 col-xs-4"><a href="#"><img src="clients/images/demo/banner/h10-03.png" alt="Banner"></a></div>
					</div>
				</div>
			</div>
			<!--Block Spotlight3  -->
			<div class="so-spotlight3">
				<div class="container">
					<!-- Mod Supercategory 1 -->
					<div class="module cus-style-supper-cate">
						<div class="header">
							<h3 class="modtitle">
								<span class="icon-color">
									<i class="fa fa-empire   #8ec319"></i>
									FRUIT &amp; VEGETABLES			
								</span>
							</h3>	
						</div>
						
						<div id="so_super_category_1" class="so-sp-cat first-load">
							<div class="spcat-wrap ">
								<div class="spcat-tabs-container" data-delay="300" data-duration="600" data-effect="flip" data-ajaxurl="#" data-modid="155">
									<!--Begin Tabs-->
									    <div class="spcat-tabs-wrap">
									        <span class="spcat-tab-selected">	Rating	</span>
									        <span class="spcat-tab-arrow">▼</span>
									        <ul class="spcat-tabs cf">
					                            <li class="spcat-tab  tab-sel tab-loaded" data-active-content=".items-category-sales" data-field_order="sales">
													<span class="spcat-tab-label">Sale</span>
								                </li>
								                <li class="spcat-tab " data-active-content=".items-category-p_date_added" data-field_order="p_date_added">
													<span class="spcat-tab-label">Date Add</span>
								                </li>
								                <li class="spcat-tab " data-active-content=".items-category-p_sort_order" data-field_order="p_sort_order">
													<span class="spcat-tab-label">Sort Order</span>
								                </li>
								                <li class="spcat-tab" data-active-content=".items-category-rating" data-field_order="rating">
													<span class="spcat-tab-label">Rating</span>
								                </li>
								                <li class="spcat-tab " data-active-content=".items-category-p_quantity" data-field_order="p_quantity">
													<span class="spcat-tab-label">Quantity</span>
								                </li>
								                <li class="spcat-tab " data-active-content=".items-category-p_price" data-field_order="p_price">
													<span class="spcat-tab-label">Price</span>
								                </li>
						                    </ul>
									    </div>
									<!-- End Tabs-->
								</div>
								<div class="main-left">
									<div class="banner-post-text">
										 <a href="#" title="banner"> <img src="clients/images/demo/banner/1-h10.jpg" alt="banner">  </a>                        				
									</div>
									
								</div>
								<div class="main-right">									
									<div class="spcat-items-container products-list grid show-pre show-row"><!--Begin Items-->	
										<div class="spcat-items spcat-items-loaded items-category-p_date_added product-layout" data-total="9">
											<div class="spcat-items-inner spcat00-4 spcat01-4 spcat02-3 spcat03-2 spcat04-1 flip">
												<div class="ltabs-items-inner ltabs-slider ">
													<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Duidem rerum facilis">
																			<img  src="clients/images/demo/shop/product/t15.jpg" alt="img" title="Duidem rerum facilis" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/t16.jpg" alt="img" title="Duidem rerum facilis" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																<span class="label label-new">New</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Duidem rerum facilis" target="_self">
																		   Duidem rerum facilis							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$85.00</span> <span class="price-old">$99.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Lande sincut inste">
																			<img  src="clients/images/demo/shop/product/t7.jpg" alt="img" title="Lande sincut inste" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/t8.jpg" alt="img" title="Lande sincut inste" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																<span class="label label-sale">Sale</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Verty nolen max.." target="_self">
																		   Lande sincut inste							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$95.00</span><span class="price-old">$135.00</span>


											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																			<img  src="clients/images/demo/shop/product/t17.jpg" alt="img" title="Emdcu meagi" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/t18.jpg" alt="img" title="Emdcu meagi" class="img-2 img-responsive" />
																		</a>
																	</div>			
																</div>
																<span class="label label-sale">Sale</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Emdcu meagi" target="_self">
																		   Emdcu meagi inges							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$115.00</span><span class="price-old">$149.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>			
													<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																			<img  src="clients/images/demo/shop/product/t2.jpg" alt="img" title="Verty nolen laben" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/t1.jpg" alt="img" title="Verty nolen laben" class="img-2 img-responsive" />
																		</a>
																	</div>				
																</div>
																<span class="label label-new">New</span>
																<span class="label label-sale">Sale</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Verty nolen max.." target="_self">
																		   Verty nolen laben							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$45.00</span> <span class="price-old">$69.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																			<img  src="clients/images/demo/shop/product/t6.jpg" alt="img" title="Verty nolen laben" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/t1.jpg" alt="img" title="Verty nolen laben" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																<span class="label label-sale">Sale</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Verty nolen max.." target="_self">
																		   Sende cuisei inges							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$145.00</span> <span class="price-old">$169.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Lande sincut inste">
																			<img  src="clients/images/demo/shop/product/t11.jpg" alt="img" title="Lande sincut inste" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/t12.jpg" alt="img" title="Lande sincut inste" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																<span class="label label-sale">Sale</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Verty nolen max.." target="_self">
																		   Lande sincut inste							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$95.00</span><span class="price-old">$135.00</span>


											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																			<img  src="clients/images/demo/shop/product/t10.jpg" alt="img" title="Emdcu meagi" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/t10.jpg" alt="img" title="Emdcu meagi" class="img-2 img-responsive" />
																		</a>
																	</div>			
																</div>
																<span class="label label-sale">Sale</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Emdcu meagi" target="_self">
																		   Emdcu meagi inges							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$115.00</span><span class="price-old">$149.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																			<img  src="clients/images/demo/shop/product/t13.jpg" alt="img" title="Verty nolen laben" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/t14.jpg" alt="img" title="Verty nolen laben" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																<span class="label label-sale">Sale</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Verty nolen max.." target="_self">
																		   Sende cuisei inges							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$145.00</span> <span class="price-old">$169.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							
												</div>
											</div>
										</div>								
										<div class="spcat-items spcat-items-loaded items-category-sales product-layout spcat-items-selected" data-total="9">
											<div class="spcat-items-inner spcat00-4 spcat01-4 spcat02-3 spcat03-2 spcat04-1 flip">
												<div class="ltabs-items-inner ltabs-slider ">				
													<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																			<img  src="clients/images/demo/shop/product/t2.jpg" alt="img" title="Verty nolen laben" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/t1.jpg" alt="img" title="Verty nolen laben" class="img-2 img-responsive" />
																		</a>
																	</div>				
																</div>
																<span class="label label-new">New</span>
																<span class="label label-sale">Sale</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Verty nolen max.." target="_self">
																		   Verty nolen laben							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$45.00</span> <span class="price-old">$69.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																			<img  src="clients/images/demo/shop/product/t6.jpg" alt="img" title="Verty nolen laben" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/t1.jpg" alt="img" title="Verty nolen laben" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																<span class="label label-sale">Sale</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Verty nolen max.." target="_self">
																		   Sende cuisei inges							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$145.00</span> <span class="price-old">$169.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Lande sincut inste">
																			<img  src="clients/images/demo/shop/product/t11.jpg" alt="img" title="Lande sincut inste" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/t12.jpg" alt="img" title="Lande sincut inste" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																<span class="label label-sale">Sale</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Verty nolen max.." target="_self">
																		   Lande sincut inste							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$95.00</span><span class="price-old">$135.00</span>


											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																			<img  src="clients/images/demo/shop/product/t10.jpg" alt="img" title="Emdcu meagi" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/t10.jpg" alt="img" title="Emdcu meagi" class="img-2 img-responsive" />
																		</a>
																	</div>			
																</div>
																<span class="label label-sale">Sale</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Emdcu meagi" target="_self">
																		   Emdcu meagi inges							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$115.00</span><span class="price-old">$149.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																			<img  src="clients/images/demo/shop/product/t13.jpg" alt="img" title="Verty nolen laben" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/t14.jpg" alt="img" title="Verty nolen laben" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																<span class="label label-sale">Sale</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Verty nolen max.." target="_self">
																		   Sende cuisei inges							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$145.00</span> <span class="price-old">$169.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Duidem rerum facilis">
																			<img  src="clients/images/demo/shop/product/t15.jpg" alt="img" title="Duidem rerum facilis" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/t16.jpg" alt="img" title="Duidem rerum facilis" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																<span class="label label-new">New</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Duidem rerum facilis" target="_self">
																		   Duidem rerum facilis							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$85.00</span> <span class="price-old">$99.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Lande sincut inste">
																			<img  src="clients/images/demo/shop/product/t7.jpg" alt="img" title="Lande sincut inste" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/t8.jpg" alt="img" title="Lande sincut inste" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																<span class="label label-sale">Sale</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Verty nolen max.." target="_self">
																		   Lande sincut inste							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$95.00</span><span class="price-old">$135.00</span>


											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																			<img  src="clients/images/demo/shop/product/t17.jpg" alt="img" title="Emdcu meagi" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/t18.jpg" alt="img" title="Emdcu meagi" class="img-2 img-responsive" />
																		</a>
																	</div>			
																</div>
																<span class="label label-sale">Sale</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Emdcu meagi" target="_self">
																		   Emdcu meagi inges							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$115.00</span><span class="price-old">$149.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
												</div>
											</div>
										</div>	
										
										<div class="spcat-items spcat-items-loaded items-category-p_sort_order product-layout" data-total="9">
											<div class="spcat-items-inner spcat00-4 spcat01-4 spcat02-3 spcat03-2 spcat04-1 flip">
												<div class="ltabs-items-inner ltabs-slider ">				
													
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Lande sincut inste">
																			<img  src="clients/images/demo/shop/product/t11.jpg" alt="img" title="Lande sincut inste" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/t12.jpg" alt="img" title="Lande sincut inste" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																<span class="label label-sale">Sale</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Verty nolen max.." target="_self">
																		   Lande sincut inste							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$95.00</span><span class="price-old">$135.00</span>


											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																			<img  src="clients/images/demo/shop/product/t10.jpg" alt="img" title="Emdcu meagi" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/t10.jpg" alt="img" title="Emdcu meagi" class="img-2 img-responsive" />
																		</a>
																	</div>			
																</div>
																<span class="label label-sale">Sale</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Emdcu meagi" target="_self">
																		   Emdcu meagi inges							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$115.00</span><span class="price-old">$149.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																			<img  src="clients/images/demo/shop/product/t13.jpg" alt="img" title="Verty nolen laben" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/t14.jpg" alt="img" title="Verty nolen laben" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																<span class="label label-sale">Sale</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Verty nolen max.." target="_self">
																		   Sende cuisei inges							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$145.00</span> <span class="price-old">$169.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Duidem rerum facilis">
																			<img  src="clients/images/demo/shop/product/t15.jpg" alt="img" title="Duidem rerum facilis" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/t16.jpg" alt="img" title="Duidem rerum facilis" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																<span class="label label-new">New</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Duidem rerum facilis" target="_self">
																		   Duidem rerum facilis							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$85.00</span> <span class="price-old">$99.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Lande sincut inste">
																			<img  src="clients/images/demo/shop/product/t7.jpg" alt="img" title="Lande sincut inste" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/t8.jpg" alt="img" title="Lande sincut inste" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																<span class="label label-sale">Sale</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Verty nolen max.." target="_self">
																		   Lande sincut inste							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$95.00</span><span class="price-old">$135.00</span>


											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																			<img  src="clients/images/demo/shop/product/t17.jpg" alt="img" title="Emdcu meagi" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/t18.jpg" alt="img" title="Emdcu meagi" class="img-2 img-responsive" />
																		</a>
																	</div>			
																</div>
																<span class="label label-sale">Sale</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Emdcu meagi" target="_self">
																		   Emdcu meagi inges							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$115.00</span><span class="price-old">$149.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																			<img  src="clients/images/demo/shop/product/t2.jpg" alt="img" title="Verty nolen laben" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/t1.jpg" alt="img" title="Verty nolen laben" class="img-2 img-responsive" />
																		</a>
																	</div>				
																</div>
																<span class="label label-new">New</span>
																<span class="label label-sale">Sale</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Verty nolen max.." target="_self">
																		   Verty nolen laben							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$45.00</span> <span class="price-old">$69.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																			<img  src="clients/images/demo/shop/product/t6.jpg" alt="img" title="Verty nolen laben" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/t1.jpg" alt="img" title="Verty nolen laben" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																<span class="label label-sale">Sale</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Verty nolen max.." target="_self">
																		   Sende cuisei inges							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$145.00</span> <span class="price-old">$169.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
												</div>
											</div>
										</div>
										<div class="spcat-items spcat-items-loaded items-category-rating product-layout" data-total="9">
											<div class="spcat-items-inner spcat00-4 spcat01-4 spcat02-3 spcat03-2 spcat04-1 flip">
												<div class="ltabs-items-inner ltabs-slider ">				
													
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Lande sincut inste">
																			<img  src="clients/images/demo/shop/product/t11.jpg" alt="img" title="Lande sincut inste" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/t12.jpg" alt="img" title="Lande sincut inste" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						clients/
																</div>
																<span class="label label-sale">Sale</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Verty nolen max.." target="_self">
																		   Lande sincut inste							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$95.00</span><span class="price-old">$135.00</span>


											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Lande sincut inste">
																			<img  src="clients/images/demo/shop/product/t7.jpg" alt="img" title="Lande sincut inste" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/t8.jpg" alt="img" title="Lande sincut inste" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																<span class="label label-sale">Sale</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Verty nolen max.." target="_self">
																		   Lande sincut inste							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$95.00</span><span class="price-old">$135.00</span>


											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																			<img  src="clients/images/demo/shop/product/t17.jpg" alt="img" title="Emdcu meagi" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/t18.jpg" alt="img" title="Emdcu meagi" class="img-2 img-responsive" />
																		</a>
																	</div>			
																</div>
																<span class="label label-sale">Sale</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Emdcu meagi" target="_self">
																		   Emdcu meagi inges							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$115.00</span><span class="price-old">$149.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																			<img  src="clients/images/demo/shop/product/t10.jpg" alt="img" title="Emdcu meagi" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/t10.jpg" alt="img" title="Emdcu meagi" class="img-2 img-responsive" />
																		</a>
																	</div>			
																</div>
																<span class="label label-sale">Sale</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Emdcu meagi" target="_self">
																		   Emdcu meagi inges							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$115.00</span><span class="price-old">$149.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																			<img  src="clients/images/demo/shop/product/t13.jpg" alt="img" title="Verty nolen laben" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/t14.jpg" alt="img" title="Verty nolen laben" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																<span class="label label-sale">Sale</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Verty nolen max.." target="_self">
																		   Sende cuisei inges							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$145.00</span> <span class="price-old">$169.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Duidem rerum facilis">
																			<img  src="clients/images/demo/shop/product/t15.jpg" alt="img" title="Duidem rerum facilis" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/t16.jpg" alt="img" title="Duidem rerum facilis" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																<span class="label label-new">New</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Duidem rerum facilis" target="_self">
																		   Duidem rerum facilis							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$85.00</span> <span class="price-old">$99.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																			<img  src="clients/images/demo/shop/product/t2.jpg" alt="img" title="Verty nolen laben" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/t1.jpg" alt="img" title="Verty nolen laben" class="img-2 img-responsive" />
																		</a>
																	</div>				
																</div>
																<span class="label label-new">New</span>
																<span class="label label-sale">Sale</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Verty nolen max.." target="_self">
																		   Verty nolen laben							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$45.00</span> <span class="price-old">$69.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																			<img  src="clients/images/demo/shop/product/t6.jpg" alt="img" title="Verty nolen laben" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/t1.jpg" alt="img" title="Verty nolen laben" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																<span class="label label-sale">Sale</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Verty nolen max.." target="_self">
																		   Sende cuisei inges							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$145.00</span> <span class="price-old">$169.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
												</div>
											</div>
										</div>
										<div class="spcat-items spcat-items-loaded items-category-p_quantity product-layout" data-total="9">
											<div class="spcat-items-inner spcat00-4 spcat01-4 spcat02-3 spcat03-2 spcat04-1 flip">
												<div class="ltabs-items-inner ltabs-slider ">
													<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Lande sincut inste">
																			<img  src="clients/images/demo/shop/product/t11.jpg" alt="img" title="Lande sincut inste" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/t12.jpg" alt="img" title="Lande sincut inste" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																<span class="label label-sale">Sale</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Verty nolen max.." target="_self">
																		   Lande sincut inste							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$95.00</span><span class="price-old">$135.00</span>


											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																			<img  src="clients/images/demo/shop/product/t10.jpg" alt="img" title="Emdcu meagi" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/t10.jpg" alt="img" title="Emdcu meagi" class="img-2 img-responsive" />
																		</a>
																	</div>			
																</div>
																<span class="label label-sale">Sale</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Emdcu meagi" target="_self">
																		   Emdcu meagi inges							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$115.00</span><span class="price-old">$149.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																			<img  src="clients/images/demo/shop/product/t13.jpg" alt="img" title="Verty nolen laben" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/t14.jpg" alt="img" title="Verty nolen laben" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																<span class="label label-sale">Sale</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Verty nolen max.." target="_self">
																		   Sende cuisei inges							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$145.00</span> <span class="price-old">$169.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Duidem rerum facilis">
																			<img  src="clients/images/demo/shop/product/t15.jpg" alt="img" title="Duidem rerum facilis" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/t16.jpg" alt="img" title="Duidem rerum facilis" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																<span class="label label-new">New</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Duidem rerum facilis" target="_self">
																		   Duidem rerum facilis							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$85.00</span> <span class="price-old">$99.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Lande sincut inste">
																			<img  src="clients/images/demo/shop/product/t7.jpg" alt="img" title="Lande sincut inste" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/t8.jpg" alt="img" title="Lande sincut inste" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																<span class="label label-sale">Sale</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Verty nolen max.." target="_self">
																		   Lande sincut inste							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$95.00</span><span class="price-old">$135.00</span>


											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																			<img  src="clients/images/demo/shop/product/t17.jpg" alt="img" title="Emdcu meagi" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/t18.jpg" alt="img" title="Emdcu meagi" class="img-2 img-responsive" />
																		</a>
																	</div>			
																</div>
																<span class="label label-sale">Sale</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Emdcu meagi" target="_self">
																		   Emdcu meagi inges							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$115.00</span><span class="price-old">$149.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>				
													<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																			<img  src="clients/images/demo/shop/product/t2.jpg" alt="img"  title="Verty nolen laben" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/t1.jpg" alt="img" title="Verty nolen laben" class="img-2 img-responsive" />
																		</a>
																	</div>				
																</div>
																<span class="label label-new">New</span>
																<span class="label label-sale">Sale</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Verty nolen max.." target="_self">
																		   Verty nolen laben							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$45.00</span> <span class="price-old">$69.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																			<img  src="clients/images/demo/shop/product/t6.jpg" alt="img" title="Verty nolen laben" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/t1.jpg" alt="img" title="Verty nolen laben" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																<span class="label label-sale">Sale</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Verty nolen max.." target="_self">
																		   Sende cuisei inges							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$145.00</span> <span class="price-old">$169.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							
												</div>
											</div>
										</div>
										<div class="spcat-items spcat-items-loaded items-category-p_price product-layout" data-total="9">
											<div class="spcat-items-inner spcat00-4 spcat01-4 spcat02-3 spcat03-2 spcat04-1 flip">
												<div class="ltabs-items-inner ltabs-slider ">
													<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Duidem rerum facilis">
																			<img  src="clients/images/demo/shop/product/t15.jpg" alt="img" title="Duidem rerum facilis" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/t16.jpg" alt="img" title="Duidem rerum facilis" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																<span class="label label-new">New</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Duidem rerum facilis" target="_self">
																		   Duidem rerum facilis							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$85.00</span> <span class="price-old">$99.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Lande sincut inste">
																			<img  src="clients/images/demo/shop/product/t7.jpg" alt="img" title="Lande sincut inste" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/t8.jpg" alt="img" title="Lande sincut inste" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																<span class="label label-sale">Sale</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Verty nolen max.." target="_self">
																		   Lande sincut inste							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$95.00</span><span class="price-old">$135.00</span>


											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																			<img  src="clients/images/demo/shop/product/t17.jpg" alt="img" title="Emdcu meagi" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/t18.jpg" alt="img" title="Emdcu meagi" class="img-2 img-responsive" />
																		</a>
																	</div>			
																</div>
																<span class="label label-sale">Sale</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Emdcu meagi" target="_self">
																		   Emdcu meagi inges							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$115.00</span><span class="price-old">$149.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>				
													<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																			<img  src="clients/images/demo/shop/product/t2.jpg" alt="img" title="Verty nolen laben" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/t1.jpg" alt="img" title="Verty nolen laben" class="img-2 img-responsive" />
																		</a>
																	</div>				
																</div>
																<span class="label label-new">New</span>
																<span class="label label-sale">Sale</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Verty nolen max.." target="_self">
																		   Verty nolen laben							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$45.00</span> <span class="price-old">$69.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																			<img  src="clients/images/demo/shop/product/t6.jpg" alt="img" title="Verty nolen laben" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/t1.jpg" alt="img" title="Verty nolen laben" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																<span class="label label-sale">Sale</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Verty nolen max.." target="_self">
																		   Sende cuisei inges							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$145.00</span> <span class="price-old">$169.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Lande sincut inste">
																			<img  src="clients/images/demo/shop/product/t11.jpg" alt="img" title="Lande sincut inste" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/t12.jpg" alt="img" title="Lande sincut inste" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																<span class="label label-sale">Sale</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Verty nolen max.." target="_self">
																		   Lande sincut inste							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$95.00</span><span class="price-old">$135.00</span>


											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																			<img  src="clients/images/demo/shop/product/t10.jpg" alt="img" title="Emdcu meagi" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/t10.jpg" alt="img" title="Emdcu meagi" class="img-2 img-responsive" />
																		</a>
																	</div>			
																</div>
																<span class="label label-sale">Sale</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Emdcu meagi" target="_self">
																		   Emdcu meagi inges							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$115.00</span><span class="price-old">$149.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																			<img  src="clients/images/demo/shop/product/t13.jpg" alt="img" title="Verty nolen laben" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/t14.jpg" alt="img" title="Verty nolen laben" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																<span class="label label-sale">Sale</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Verty nolen max.." target="_self">
																		   Sende cuisei inges							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$145.00</span> <span class="price-old">$169.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							
												</div>
											</div>
										</div>
									</div>
									<!--End Items-->
								</div>
							</div>
						</div>
					</div>
					<!-- End Mod -->
					<!-- Banner Content -->
					<div class="module box-bn-content">
						<a title="Static Image" href="category.html"><img src="clients/images/demo/cms/img-1-h10.jpg" alt="Static Image"></a>
					</div>
					<!-- End Banner -->
					<!-- Mod Supercategory 2 -->
					<div class="module cus-style-supper-cate cate-v2">
						<div class="header">
							<h3 class="modtitle">
								<span class="icon-color">
									<i class="fa fa-empire   #8ec319"></i>
									MEAT &amp; FISH			
								</span>
							</h3>	
						</div>
						
						<div id="so_super_category_2" class="so-sp-cat first-load">
							<div class="spcat-wrap ">
								<div class="spcat-tabs-container" data-delay="300" data-duration="600" data-effect="flip" data-ajaxurl="#" data-modid="155">
									<!--Begin Tabs-->
									    <div class="spcat-tabs-wrap">
									        <span class="spcat-tab-selected">	Rating	</span>
									        <span class="spcat-tab-arrow">▼</span>
									        <ul class="spcat-tabs cf">
					                            <li class="spcat-tab" data-active-content=".items-category-sales" data-field_order="sales">
													<span class="spcat-tab-label">Sale</span>
								                </li>
								                <li class="spcat-tab" data-active-content=".items-category-p_date_added" data-field_order="p_date_added">
													<span class="spcat-tab-label">Date Add</span>
								                </li>
								                <li class="spcat-tab" data-active-content=".items-category-p_sort_order" data-field_order="p_sort_order">
													<span class="spcat-tab-label">Sort Order</span>
								                </li>
								                <li class="spcat-tab tab-sel tab-loaded" data-active-content=".items-category-rating" data-field_order="rating">
													<span class="spcat-tab-label">Rating</span>
								                </li>
								                <li class="spcat-tab " data-active-content=".items-category-p_quantity" data-field_order="p_quantity">
													<span class="spcat-tab-label">Quantity</span>
								                </li>
								                <li class="spcat-tab " data-active-content=".items-category-p_price" data-field_order="p_price">
													<span class="spcat-tab-label">Price</span>
								                </li>
						                    </ul>
									    </div>
									<!-- End Tabs-->
								</div>
								<div class="main-left">
									<div class="banner-post-text">
										 <a href="#" title="banner"> <img src="clients/images/demo/banner/2-h10.jpg" alt="banner">  </a>                        				
									</div>
									
								</div>
								<div class="main-right">									
									<div class="spcat-items-container products-list grid show-pre show-row"><!--Begin Items-->	
										<div class="spcat-items spcat-items-loaded items-category-p_date_added product-layout" data-total="9">
											<div class="spcat-items-inner spcat00-4 spcat01-4 spcat02-3 spcat03-2 spcat04-1 flip">
												<div class="ltabs-items-inner ltabs-slider ">				
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																			<img  src="clients/images/demo/shop/product/fo2.jpg" alt="img" title="Verty nolen laben" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/fo2.jpg" alt="img" title="Verty nolen laben" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																<span class="label label-sale">Sale</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Verty nolen max.." target="_self">
																		   Sende cuisei inges							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$145.00</span> <span class="price-old">$169.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Duidem rerum facilis">
																			<img  src="clients/images/demo/shop/product/fo4.jpg" alt="img" title="Duidem rerum facilis" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/fo4.jpg" alt="img" title="Duidem rerum facilis" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																<span class="label label-new">New</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Duidem rerum facilis" target="_self">
																		   Duidem rerum facilis							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$85.00</span>
											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																			<img  src="clients/images/demo/shop/product/fo6.jpg" alt="img" title="Verty nolen laben" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/fo5.jpg" alt="img" title="Verty nolen laben" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																<span class="label label-new">New</span>
																<span class="label label-sale">Sale</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Verty nolen max.." target="_self">
																		   Verty nolen laben							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$45.00</span> <span class="price-old">$69.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Lande sincut inste">
																			<img  src="clients/images/demo/shop/product/fo7.jpg" alt="img" title="Lande sincut inste" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/fo8.jpg" alt="img" title="Lande sincut inste" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Verty nolen max.." target="_self">
																		   Lande sincut inste							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$95.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																			<img  src="clients/images/demo/shop/product/fo8.jpg" alt="img" title="Emdcu meagi" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/fo8.jpg" alt="img" title="Emdcu meagi" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Emdcu meagi" target="_self">
																		   Emdcu meagi inges							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$145.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																			<img  src="clients/images/demo/shop/product/fo2.jpg" alt="img" title="Verty nolen laben" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/fo2.jpg" alt="img" title="Verty nolen laben" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																<span class="label label-sale">Sale</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Verty nolen max.." target="_self">
																		   Sende cuisei inges							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$145.00</span> <span class="price-old">$169.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Lande sincut inste">
																			<img  src="clients/images/demo/shop/product/fo14.jpg" alt="img" title="Lande sincut inste" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/fo14.jpg" alt="img" title="Lande sincut inste" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Verty nolen max.." target="_self">
																		   Lande sincut inste							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$95.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																			<img  src="clients/images/demo/shop/product/fo15.jpg" alt="img" title="Verty nolen laben" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/fo16.jpg" alt="img" title="Verty nolen laben" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																<span class="label label-sale">Sale</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Verty nolen max.." target="_self">
																		   Sende cuisei inges							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$145.00</span> <span class="price-old">$169.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
												</div>
											</div>
										</div>								
										<div class="spcat-items spcat-items-loaded items-category-sales product-layout spcat-items-selected" data-total="9">
											<div class="spcat-items-inner spcat00-4 spcat01-4 spcat02-3 spcat03-2 spcat04-1 flip">
												<div class="ltabs-items-inner ltabs-slider ">
													<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Duidem rerum facilis">
																			<img  src="clients/images/demo/shop/product/fo4.jpg" alt="img" title="Duidem rerum facilis" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/fo4.jpg" alt="img" title="Duidem rerum facilis" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																<span class="label label-new">New</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Duidem rerum facilis" target="_self">
																		   Duidem rerum facilis							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$85.00</span>
											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																			<img  src="clients/images/demo/shop/product/fo6.jpg" alt="img" title="Verty nolen laben" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/fo5.jpg" alt="img" title="Verty nolen laben" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																<span class="label label-new">New</span>
																<span class="label label-sale">Sale</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Verty nolen max.." target="_self">
																		   Verty nolen laben							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$45.00</span> <span class="price-old">$69.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Lande sincut inste">
																			<img  src="clients/images/demo/shop/product/fo7.jpg" alt="img" title="Lande sincut inste" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/fo8.jpg" alt="img" title="Lande sincut inste" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Verty nolen max.." target="_self">
																		   Lande sincut inste							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$95.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																			<img  src="clients/images/demo/shop/product/fo8.jpg" alt="img" title="Emdcu meagi" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/fo8.jpg" alt="img" title="Emdcu meagi" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Emdcu meagi" target="_self">
																		   Emdcu meagi inges							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$145.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																			<img  src="clients/images/demo/shop/product/fo2.jpg" alt="img" title="Verty nolen laben" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/fo2.jpg" alt="img" title="Verty nolen laben" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																<span class="label label-sale">Sale</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Verty nolen max.." target="_self">
																		   Sende cuisei inges							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$145.00</span> <span class="price-old">$169.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>				
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																			<img  src="clients/images/demo/shop/product/fo2.jpg" alt="img" title="Verty nolen laben" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/fo2.jpg" alt="img" title="Verty nolen laben" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																<span class="label label-sale">Sale</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Verty nolen max.." target="_self">
																		   Sende cuisei inges							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$145.00</span> <span class="price-old">$169.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Lande sincut inste">
																			<img  src="clients/images/demo/shop/product/fo14.jpg" alt="img" title="Lande sincut inste" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/fo14.jpg" alt="img" title="Lande sincut inste" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Verty nolen max.." target="_self">
																		   Lande sincut inste							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$95.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																			<img  src="clients/images/demo/shop/product/fo15.jpg" alt="img" title="Verty nolen laben" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/fo16.jpg" alt="img" title="Verty nolen laben" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																<span class="label label-sale">Sale</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Verty nolen max.." target="_self">
																		   Sende cuisei inges							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$145.00</span> <span class="price-old">$169.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
												</div>
											</div>
										</div>	
										
										<div class="spcat-items spcat-items-loaded items-category-p_sort_order product-layout" data-total="9">
											<div class="spcat-items-inner spcat00-4 spcat01-4 spcat02-3 spcat03-2 spcat04-1 flip">
												<div class="ltabs-items-inner ltabs-slider ">
													<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																			<img  src="clients/images/demo/shop/product/fo8.jpg" alt="img" title="Emdcu meagi" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/fo8.jpg" alt="img" title="Emdcu meagi" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Emdcu meagi" target="_self">
																		   Emdcu meagi inges							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$145.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																			<img  src="clients/images/demo/shop/product/fo2.jpg" alt="img" title="Verty nolen laben" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/fo2.jpg" alt="img" title="Verty nolen laben" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																<span class="label label-sale">Sale</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Verty nolen max.." target="_self">
																		   Sende cuisei inges							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$145.00</span> <span class="price-old">$169.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Lande sincut inste">
																			<img  src="clients/images/demo/shop/product/fo14.jpg" alt="img" title="Lande sincut inste" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/fo14.jpg" alt="img"  title="Lande sincut inste" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Verty nolen max.." target="_self">
																		   Lande sincut inste							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$95.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																			<img  src="clients/images/demo/shop/product/fo15.jpg" alt="img" title="Verty nolen laben" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/fo16.jpg" alt="img" title="Verty nolen laben" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																<span class="label label-sale">Sale</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Verty nolen max.." target="_self">
																		   Sende cuisei inges							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$145.00</span> <span class="price-old">$169.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>				
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																			<img  src="clients/images/demo/shop/product/fo2.jpg" alt="img" title="Verty nolen laben" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/fo2.jpg" alt="img" title="Verty nolen laben" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																<span class="label label-sale">Sale</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Verty nolen max.." target="_self">
																		   Sende cuisei inges							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$145.00</span> <span class="price-old">$169.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Duidem rerum facilis">
																			<img  src="clients/images/demo/shop/product/fo4.jpg" alt="img" title="Duidem rerum facilis" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/fo4.jpg" alt="img" title="Duidem rerum facilis" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																<span class="label label-new">New</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Duidem rerum facilis" target="_self">
																		   Duidem rerum facilis							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$85.00</span>
											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																			<img  src="clients/images/demo/shop/product/fo6.jpg" alt="img" title="Verty nolen laben" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/fo5.jpg" alt="img" title="Verty nolen laben" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																<span class="label label-new">New</span>
																<span class="label label-sale">Sale</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Verty nolen max.." target="_self">
																		   Verty nolen laben							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$45.00</span> <span class="price-old">$69.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Lande sincut inste">
																			<img  src="clients/images/demo/shop/product/fo7.jpg" alt="img" title="Lande sincut inste" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/fo8.jpg" alt="img" title="Lande sincut inste" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Verty nolen max.." target="_self">
																		   Lande sincut inste							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$95.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							
												</div>
											</div>
										</div>
										<div class="spcat-items spcat-items-loaded items-category-rating product-layout" data-total="9">
											<div class="spcat-items-inner spcat00-4 spcat01-4 spcat02-3 spcat03-2 spcat04-1 flip">
												<div class="ltabs-items-inner ltabs-slider ">
													<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																			<img  src="clients/images/demo/shop/product/fo6.jpg" alt="img" title="Verty nolen laben" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/fo5.jpg" alt="img" title="Verty nolen laben" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																<span class="label label-new">New</span>
																<span class="label label-sale">Sale</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Verty nolen max.." target="_self">
																		   Verty nolen laben							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$45.00</span> <span class="price-old">$69.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Lande sincut inste">
																			<img  src="clients/images/demo/shop/product/fo7.jpg" alt="img" title="Lande sincut inste" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/fo8.jpg" alt="img" title="Lande sincut inste" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Verty nolen max.." target="_self">
																		   Lande sincut inste							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$95.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>				
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																			<img  src="clients/images/demo/shop/product/fo2.jpg" alt="img" title="Verty nolen laben" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/fo2.jpg" alt="img" title="Verty nolen laben" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																<span class="label label-sale">Sale</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Verty nolen max.." target="_self">
																		   Sende cuisei inges							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$145.00</span> <span class="price-old">$169.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Duidem rerum facilis">
																			<img  src="clients/images/demo/shop/product/fo4.jpg" alt="img" title="Duidem rerum facilis" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/fo4.jpg" alt="img" title="Duidem rerum facilis" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																<span class="label label-new">New</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Duidem rerum facilis" target="_self">
																		   Duidem rerum facilis							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$85.00</span>
											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Lande sincut inste">
																			<img  src="clients/images/demo/shop/product/fo14.jpg" alt="img" title="Lande sincut inste" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/fo14.jpg" alt="img" title="Lande sincut inste" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Verty nolen max.." target="_self">
																		   Lande sincut inste							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$95.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																			<img  src="clients/images/demo/shop/product/fo15.jpg" alt="img" title="Verty nolen laben" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/fo16.jpg" alt="img" title="Verty nolen laben" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																<span class="label label-sale">Sale</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Verty nolen max.." target="_self">
																		   Sende cuisei inges							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$145.00</span> <span class="price-old">$169.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																			<img  src="clients/images/demo/shop/product/fo8.jpg" alt="img" title="Emdcu meagi" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/fo8.jpg" alt="img" title="Emdcu meagi" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Emdcu meagi" target="_self">
																		   Emdcu meagi inges							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$145.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																			<img  src="clients/images/demo/shop/product/fo2.jpg" alt="img" title="Verty nolen laben" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/fo2.jpg" alt="img" title="Verty nolen laben" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																<span class="label label-sale">Sale</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Verty nolen max.." target="_self">
																		   Sende cuisei inges							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$145.00</span> <span class="price-old">$169.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
												</div>
											</div>
										</div>
										<div class="spcat-items spcat-items-loaded items-category-p_quantity product-layout" data-total="9">
											<div class="spcat-items-inner spcat00-4 spcat01-4 spcat02-3 spcat03-2 spcat04-1 flip">
												<div class="ltabs-items-inner ltabs-slider ">
													<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																			<img  src="clients/images/demo/shop/product/fo2.jpg" alt="img" title="Verty nolen laben" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/fo2.jpg" alt="img" title="Verty nolen laben" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																<span class="label label-sale">Sale</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Verty nolen max.." target="_self">
																		   Sende cuisei inges							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$145.00</span> <span class="price-old">$169.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Lande sincut inste">
																			<img  src="clients/images/demo/shop/product/fo14.jpg" alt="img" title="Lande sincut inste" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/fo14.jpg" alt="img" title="Lande sincut inste" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Verty nolen max.." target="_self">
																		   Lande sincut inste							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$95.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																			<img  src="clients/images/demo/shop/product/fo15.jpg" alt="img" title="Verty nolen laben" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/fo16.jpg" alt="img" title="Verty nolen laben" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																<span class="label label-sale">Sale</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Verty nolen max.." target="_self">
																		   Sende cuisei inges							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$145.00</span> <span class="price-old">$169.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>				
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																			<img  src="clients/images/demo/shop/product/fo2.jpg" alt="img" title="Verty nolen laben" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/fo2.jpg" alt="img" title="Verty nolen laben" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																<span class="label label-sale">Sale</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Verty nolen max.." target="_self">
																		   Sende cuisei inges							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$145.00</span> <span class="price-old">$169.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Duidem rerum facilis">
																			<img  src="clients/images/demo/shop/product/fo4.jpg" alt="img" title="Duidem rerum facilis" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/fo4.jpg" alt="img" title="Duidem rerum facilis" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																<span class="label label-new">New</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Duidem rerum facilis" target="_self">
																		   Duidem rerum facilis							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$85.00</span>
											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																			<img  src="clients/images/demo/shop/product/fo6.jpg" alt="img" title="Verty nolen laben" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/fo5.jpg" alt="img" title="Verty nolen laben" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																<span class="label label-new">New</span>
																<span class="label label-sale">Sale</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Verty nolen max.." target="_self">
																		   Verty nolen laben							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$45.00</span> <span class="price-old">$69.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Lande sincut inste">
																			<img  src="clients/images/demo/shop/product/fo7.jpg" alt="img" title="Lande sincut inste" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/fo8.jpg" alt="img" title="Lande sincut inste" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Verty nolen max.." target="_self">
																		   Lande sincut inste							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$95.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																			<img  src="clients/images/demo/shop/product/fo8.jpg" alt="img"  title="Emdcu meagi" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/fo8.jpg" alt="img" title="Emdcu meagi" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Emdcu meagi" target="_self">
																		   Emdcu meagi inges							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$145.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							
												</div>
											</div>
										</div>
										<div class="spcat-items spcat-items-loaded items-category-p_price product-layout" data-total="9">
											<div class="spcat-items-inner spcat00-4 spcat01-4 spcat02-3 spcat03-2 spcat04-1 flip">
												<div class="ltabs-items-inner ltabs-slider ">
													<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																			<img  src="clients/images/demo/shop/product/fo15.jpg" alt="img" title="Verty nolen laben" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/fo16.jpg" alt="img" title="Verty nolen laben" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																<span class="label label-sale">Sale</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Verty nolen max.." target="_self">
																		   Sende cuisei inges							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$145.00</span> <span class="price-old">$169.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>				
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																			<img  src="clients/images/demo/shop/product/fo2.jpg" alt="img" title="Verty nolen laben" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/fo2.jpg" alt="img" title="Verty nolen laben" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																<span class="label label-sale">Sale</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Verty nolen max.." target="_self">
																		   Sende cuisei inges							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$145.00</span> <span class="price-old">$169.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Duidem rerum facilis">
																			<img  src="clients/images/demo/shop/product/fo4.jpg" alt="img" title="Duidem rerum facilis" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/fo4.jpg" alt="img" title="Duidem rerum facilis" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																<span class="label label-new">New</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Duidem rerum facilis" target="_self">
																		   Duidem rerum facilis							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$85.00</span>
											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Lande sincut inste">
																			<img  src="clients/images/demo/shop/product/fo7.jpg" alt="img" title="Lande sincut inste" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/fo8.jpg" alt="img" title="Lande sincut inste" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Verty nolen max.." target="_self">
																		   Lande sincut inste							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$95.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																			<img  src="clients/images/demo/shop/product/fo8.jpg" alt="img" title="Emdcu meagi" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/fo8.jpg" alt="img" title="Emdcu meagi" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Emdcu meagi" target="_self">
																		   Emdcu meagi inges							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$145.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																			<img  src="clients/images/demo/shop/product/fo2.jpg" alt="img" title="Verty nolen laben" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/fo2.jpg" alt="img" title="Verty nolen laben" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																<span class="label label-sale">Sale</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Verty nolen max.." target="_self">
																		   Sende cuisei inges							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$145.00</span> <span class="price-old">$169.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Lande sincut inste">
																			<img  src="clients/images/demo/shop/product/fo14.jpg" alt="img"  title="Lande sincut inste" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/fo14.jpg" alt="img" title="Lande sincut inste" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Verty nolen max.." target="_self">
																		   Lande sincut inste							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$95.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
					    							<div class="ltabs-item ">
														<div class="item-inner product-thumb product-item-container transition ">
															<div class="left-block">
																<div class="product-image-container">
																	<div class="image">
																	   	<a class="lt-image" href="product.html" target="_self" title="Verty nolen max..">
																			<img  src="clients/images/demo/shop/product/fo6.jpg" alt="img" title="Verty nolen laben" class="img-1 img-responsive" />
																			<img  src="clients/images/demo/shop/product/fo5.jpg" alt="img" title="Verty nolen laben" class="img-2 img-responsive" />
																		</a>
																	</div>
															   						
																</div>
																<span class="label label-new">New</span>
																<span class="label label-sale">Sale</span>
															</div>
															<div class="right-block">
																<div class="caption">
																	<div class="rating">
																		<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	  	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
																	</div>					
																	<h4>
																		<a href="product.html" title="Verty nolen max.." target="_self">
																		   Verty nolen laben							</a>
																	</h4>				
																	<p class="price">
											  							<span class="price-new">$45.00</span> <span class="price-old">$69.00</span>

											  						</p>
																</div>
															</div>
															<div class="button-group">
																<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
																<button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"></span></button>
																<button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
																<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="" data-fancybox-type="iframe" href="quickview.html" data-original-title="Quickview"> <i class="fa fa-search"></i> </a>
															</div>
														</div>
					    							</div>
												</div>
											</div>
										</div>
									</div>
									<!--End Items-->
								</div>
							</div>
						</div>
					</div>
					<!-- End Mod -->
					
				</div>
			</div>
			<!--Block Spotlight4  -->
			<div class="so-spotlight4">
				<div class="container">
					<div class="module box-bn-bottom row">
					    <div class="col-sm-6 item-bt"><a href="#"><img src="clients/images/demo/cms/img-6-h10.jpg" alt="Static Image"></a></div>
					    <div class="col-sm-6"><a href="#"><img src="clients/images/demo/cms/img-7-h10.jpg" alt="Static Image"></a></div>
					    
					</div>
					<div class="row box-bestseller">
						<div class="bestseller col-md-4 col-sm-6 col-xs-12">
							<div class="bestseller-inner">
								<div>
									<h3>Best sellers</h3>
									
									<div class="product-layout ">
										<div class="product-thumb transition">
											<div class="image"><a href="product.html"><img  src="clients/images/demo/shop/product/t8.jpg" alt="" title="Duidem rerum facilis" class="img-1 img-responsive" /></a></div>
											<div class="caption">
												<div class="rating">
													<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
												</div>
												<h4><a href="product.html">Facilis duidem gokensie rerum </a></h4>

												<p class="price">
												<span class="price-new"> $9.00</span>
												<span class="price-old">$12.00</span>
												</p>
											</div>
											
										</div>
									</div>
									<div class="product-layout ">
										<div class="product-thumb transition">
											<div class="image"><a href="product.html"><img  src="clients/images/demo/shop/product/t13.jpg" alt="" title="Duidem rerum facilis" class="img-1 img-responsive" /></a></div>
											<div class="caption">
												<div class="rating">
													<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
												</div>
												<h4><a href="product.html">Duidem gokensie rerum facilis</a></h4>

												<p class="price">
												<span class="price-new"> $23.00</span>
												<span class="price-old">$29.00</span>
												</p>
											</div>
											
										</div>
									</div>
									<div class="product-layout ">
										<div class="product-thumb transition">
											<div class="image"><a href="product.html"><img  src="clients/images/demo/shop/product/t12.jpg" alt="" title="Duidem rerum facilis" class="img-1 img-responsive" /></a></div>
											<div class="caption">
												<div class="rating">
													<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
												</div>
												<h4><a href="product.html">Gokensie Duidem  rerum facilis</a></h4>

												<p class="price">
												<span class="price-new"> $2.00</span>
												<span class="price-old">$3.00</span>
												</p>
											</div>
											
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="bestseller col-md-4 col-sm-6 col-xs-12">
							<div class="bestseller-inner">
								<div>
									<h3>SPECIALS</h3>
									
									<div class="product-layout ">
										<div class="product-thumb transition">
											<div class="image"><a href="product.html"><img  src="clients/images/demo/shop/product/t1.jpg" alt="" title="Duidem rerum facilis" class="img-1 img-responsive" /></a></div>
											<div class="caption">
												<div class="rating">
													<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
												</div>
												<h4><a href="product.html">Thicin gokensie rerum facilis</a></h4>

												<p class="price">
												<span class="price-new"> $13.00</span>
												<span class="price-old">$19.00</span>
												</p>
											</div>
											
										</div>
									</div>
									<div class="product-layout ">
										<div class="product-thumb transition">
											<div class="image"><a href="product.html"><img  src="clients/images/demo/shop/product/t6.jpg" alt="" title="Duidem rerum facilis" class="img-1 img-responsive" /></a></div>
											<div class="caption">
												<div class="rating">
													<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
												</div>
												<h4><a href="product.html">Gokensie rerum facilis Loene</a></h4>

												<p class="price">
												<span class="price-new"> $23.00</span>
												<span class="price-old">$39.00</span>
												</p>
											</div>
											
										</div>
									</div>
									<div class="product-layout ">
										<div class="product-thumb transition">
											<div class="image"><a href="product.html"><img  src="clients/images/demo/shop/product/fo4.jpg" alt="" title="Duidem rerum facilis" class="img-1 img-responsive" /></a></div>
											<div class="caption">
												<div class="rating">
													<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
												</div>
												<h4><a href="product.html">Duidem gokensie rerum facilis</a></h4>

												<p class="price">
												<span class="price-new"> $13.00</span>
												<span class="price-old">$15.00</span>
												</p>
											</div>
											
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="bestseller col-md-4 hidden-sm col-xs-12">
							<div class="bestseller-inner">
								<div>
									<h3>RECOMENDED</h3>
									
									<div class="product-layout ">
										<div class="product-thumb transition">
											<div class="image"><a href="product.html"><img  src="clients/images/demo/shop/product/t15.jpg" alt=""  title="Duidem rerum facilis" class="img-1 img-responsive" /></a></div>
											<div class="caption">
												<div class="rating">
													<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
												</div>
												<h4><a href="product.html">Facilis Rerum Duidem gokensie  </a></h4>

												<p class="price">
												<span class="price-new"> $13.00</span>
												<span class="price-old">$19.00</span>
												</p>
											</div>
											
										</div>
									</div>
									<div class="product-layout ">
										<div class="product-thumb transition">
											<div class="image"><a href="product.html"><img  src="clients/images/demo/shop/product/fo16.jpg" alt="" title="Duidem rerum facilis" class="img-1 img-responsive" /></a></div>
											<div class="caption">
												<div class="rating">
													<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
												</div>
												<h4><a href="product.html">Duidem gokensie rerum facilis</a></h4>

												<p class="price">
												<span class="price-new"> $23.00</span>
												<span class="price-old">$29.00</span>
												</p>
											</div>
											
										</div>
									</div>
									<div class="product-layout ">
										<div class="product-thumb transition">
											<div class="image"><a href="product.html"><img  src="clients/images/demo/shop/product/b2.png" alt="" title="Duidem rerum facilis" class="img-1 img-responsive" /></a></div>
											<div class="caption">
												<div class="rating">
													<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
													<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
												</div>
												<h4><a href="product.html">Duidem gokensie rerum facilis</a></h4>

												<p class="price">
												<span class="price-new"> $123.00</span>
												<span class="price-old">$159.00</span>
												</p>
											</div>
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main >
		<!-- //Main Container -->
		
		<script type="text/javascript"><!--
			var $typeheader = 'header-home10';
			//-->
		</script>
		<!-- Footer Container -->
		<footer class="footer-container typefooter-4">
			<!-- Footer Top -->
			
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="module social_block col-md-3 col-sm-12 col-xs-12" >
								<ul class="social-block ">
									<li class="facebook"><a class="_blank" href="../../../../https@www.facebook.com/MagenTech" target="_blank"><i class="fa fa-facebook"></i></a></li>
									<li class="twitter"><a class="_blank" href="../../../../https@twitter.com/smartaddons" target="_blank"><i class="fa fa-twitter"></i></a></li>
									<li class="rss"><a class="_blank" href="#" target="_blank"><i class="fa fa-rss"></i></a></li>
									<li class="google_plus"><a class="_blank" href="../../../../https@plus.google.com/u/0/+Smartaddons/posts" target="_blank"><i class="fa  fa-google-plus"></i></a></li>
									<li class="pinterest"><a class="_blank" href="../../../../https@www.pinterest.com/smartaddons/default.htm" target="_blank"><i class="fa fa-pinterest"></i></a></li>
								</ul>
							</div>
							<div class="module news-letter col-md-9 col-sm-12 col-xs-12">
								<div class="newsletter">
									<div class="title-block">
										<div class="page-heading">SIGN UP FOR OUR NEWSLETTER</div>
										<div class="pre-text">
											Duis at ante non massa consectetur iaculis id non tellus			
										</div>
									</div>
									<div class="block_content">
										<form method="post" name="signup" id="signup" class="btn-group form-inline signup">
											<div class="form-group required send-mail">
												<div class="input-box">
													<input type="email" placeholder="Your email address..." value="" class="form-control" id="txtemail" name="txtemail" size="55">
												</div>
												<div class="subcribe">
													<button class="btn btn-default btn-lg" type="submit" onclick="return subscribe_newsletter();" name="submit">
														Subscribe						</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> 
			</div>
			<!-- Footer Center -->
			<div class="footer-center">
				<div class="container content">
					<div class="row">
						<!-- Box Info -->
						<div class="col-md-3 col-sm-6 col-xs-12 collapsed-block footer-links box-footer">
							<div class="module ">
								<div class="content-block-footer">
									<div class="footer-logo">
										<a href="home10.html"><img src="clients/images/demo/logos/theme_logo_orange.png" title="Your Store" alt="Your Store" /></a>
									</div>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								</div>
							</div>				
						</div>
						<!-- Box Accout -->
						<div class="col-md-3 col-sm-6 box-account box-footer">
							<div class="module clearfix">
								<h3 class="modtitle">My Account</h3>
								<div class="modcontent">
									<ul class="menu">
										<li><a href="#">Brands</a></li>
										<li><a href="#">Gift Certificates</a></li>
										<li><a href="#">Affiliates</a></li>
										<li><a href="#">Specials</a></li>
									</ul>
								</div>
							</div>
						</div>
						<!-- Box Infomation -->
						<div class="col-md-3 col-sm-6 box-information box-footer">
							<div class="module clearfix">
								<h3 class="modtitle">Information</h3>
								<div class="modcontent">
									<ul class="menu">
										<li><a href="#">About Us</a></li>
										<li><a href="#">FAQ</a></li>
										<li><a href="#">Pricing Tables</a></li>
										<li><a href="#">Terms And Conditions</a></li>
									</ul>
								</div>
							</div>
						</div>
						<!-- Box About -->
						<div class="col-md-3  col-sm-6 collapsed-block box-footer">
							<div class="module ">
								<h3 class="modtitle">About Us</h3>
								<div class="modcontent">
									<ul class="contact-address">
										<li><span class="fa fa-home"></span> My Company, 42 avenue des Champs</li>
										<li><span class="fa fa-envelope"></span> Email: <a href="#"> sales@yourcompany.com</a></li>
										<li><span class="fa fa-phone">&nbsp;</span> Phone 1: 0123456789</li>
									</ul>
									<ul class="payment-method">
										<li><a title="Payment Method" href="#"><img src="clients/images/demo/cms/payment/payment-1.png" alt="Payment"></a></li>
										<li><a title="Payment Method" href="#"><img src="clients/images/demo/cms/payment/payment-2.png" alt="Payment"></a></li>
										<li><a title="Payment Method" href="#"><img src="clients/images/demo/cms/payment/payment-3.png" alt="Payment"></a></li>
										<li><a title="Payment Method" href="#"><img src="clients/images/demo/cms/payment/payment-4.png" alt="Payment"></a></li>
										<li><a title="Payment Method" href="#"><img src="clients/images/demo/cms/payment/payment-5.png" alt="Payment"></a></li>
									</ul>
								</div>
							</div>				
						</div>
					</div>
				</div>
			</div>		
			<!-- FOOTER BOTTOM -->
			<div class="footer-bottom">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
						Maxshop © 2016 - 2017. MAGENTECH Store. All Rights Reserved.				
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- //end Footer Container -->

    </div>
	<!-- Social widgets -->
	<section class="social-widgets visible-lg">
		<ul class="items">
			<li class="item item-01 facebook"> <a href="php/facebook.php@account=envato" class="tab-icon"><span class="fa fa-facebook"></span></a>
				<div class="tab-content">
					<div class="title">
						<h5>FACEBOOK</h5>
					</div>
					<div class="loading">
						<img src="clients/images/theme/lazy-loader.gif" class="ajaxloader" alt="loader">
					</div>
				</div>
			</li>
			<li class="item item-02 twitter"> <a href="php/twitter.php@account_twitter=envato" class="tab-icon"><span class="fa fa-twitter"></span></a>
				<div class="tab-content">
					<div class="title">
						<h5>TWITTER FEEDS</h5> 
					</div>
					<div class="loading">
						<img src="clients/images/theme/lazy-loader.gif" class="ajaxloader" alt="loader">
					</div>
				</div>
			</li>
			<li class="item item-03 youtube"> <a href="php/youtubevideo.php@account_video=PY2RLgTmiZY" class="tab-icon"><span class="fa fa-youtube"></span></a>
				<div class="tab-content">
					<div class="title">
						<h5>YouTube</h5>
					</div>
					<div class="loading"> <img src="clients/images/theme/lazy-loader.gif" class="ajaxloader" alt="loader"></div>
				</div>
			</li>
		</ul>
	</section>	<!-- End Social widgets -->
	
	<!-- Cpanel Block -->
	<div id="sp-cpanel_btn" class="isDown visible-lg">
		<i class="fa fa-cog fa-spin"></i>
	</div>		
	<div id="sp-cpanel" class="sp-delay">
		<h2 class="sp-cpanel-title"> Demo Options <span class="sp-cpanel-close"> <i class="fa fa-times"> </i></span></h2>
		<div id="sp-cpanel_settings">
			<div class="panel-group">
				<label>Color Scheme</label>
				<div class="group-schemes" >
					<a data-scheme="default" title="Orange"  data-toggle="tooltip" class="item_scheme selected"><span style="background: #ea3a3c;"></span></a>
					<a data-scheme="blue" title="Blue"  data-toggle="tooltip" class="item_scheme"><span style="background: #5f87d1;"></span></a>
					<a data-scheme="orange"  title="Orange"  data-toggle="tooltip" class="item_scheme"><span style="background: #F4A137;"></span></a>
					<a data-scheme="cyan" title="Cyan"  data-toggle="tooltip" class="item_scheme"><span style="background: #009688;"></span></a>
					<a data-scheme="green" title="Green" data-toggle="tooltip" class="item_scheme "><span style="background: #20bc5a;"></span></a>
					
				 </div>
			</div>
			
			<div class="panel-group ">
				<label>Header style</label>
				<div class="group-boxed">
					<select id="change_header_type" name="cpheaderstype" class="form-control" onchange="headerTypeChange(this.value);">
						<option value="header-home1" >Header 1</option>
						<option value="header-home2" >Header 2</option>
						<option value="header-home3" >Header 3</option>
						<option value="header-home4" >Header 4</option>
						<option value="header-home5" >Header 5</option>
						<option value="header-home6" >Header 6</option>
						<option value="header-home7" >Header 7</option>
						<option value="header-home8" >Header 8</option>
						<option value="header-home9" >Header 9</option>
						<option value="header-home10" >Header 10</option>
					</select>
				</div>
			</div>
			
			
			<div class="panel-group ">
				<label>Layout Box</label>
				<div class="group-boxed">
					<select id="cp-layoutbox" name="cplayoutbox" class="form-control" onchange="changeLayoutBox(this.value);">
						<option value="full">Wide</option>
						<option value="boxed">Boxed</option>
						<option value="iframed">Iframed</option>
						<option value="rounded">Rounded</option>
					</select>
				</div>
			</div>
			
			<div class="panel-group">
				<label>Body Image</label>
				
				<div class="group-pattern">
					<div data-pattern="28"  class="img-pattern"><img src="clients/images/theme/patterns/28.png" alt="pattern 28"></div>
					<div data-pattern="29"  class="img-pattern"><img src="clients/images/theme/patterns/29.png" alt="pattern 29"></div>
					<div data-pattern="30"  class="img-pattern"><img src="clients/images/theme/patterns/30.png" alt="pattern 30"></div>
					<div data-pattern="31"  class="img-pattern"><img src="clients/images/theme/patterns/31.png" alt="pattern 31"></div>
					<div data-pattern="32"  class="img-pattern"><img src="clients/images/theme/patterns/32.png" alt="pattern 32"></div>
					<div data-pattern="33"  class="img-pattern"><img src="clients/images/theme/patterns/33.png" alt="pattern 33"></div>
					<div data-pattern="34"  class="img-pattern"><img src="clients/images/theme/patterns/34.png" alt="pattern 34"></div>
					<div data-pattern="35"  class="img-pattern"><img src="clients/images/theme/patterns/35.png" alt="pattern 35"></div>
					<div data-pattern="36"  class="img-pattern"><img src="clients/images/theme/patterns/36.png" alt="pattern 36"></div>
					<div data-pattern="37"  class="img-pattern"><img src="clients/images/theme/patterns/37.png" alt="pattern 37"></div>
					<div data-pattern="38"  class="img-pattern"><img src="clients/images/theme/patterns/38.png" alt="pattern 38"></div>
					<div data-pattern="39"  class="img-pattern"><img src="clients/images/theme/patterns/39.png" alt="pattern 39"></div>
					<div data-pattern="40"  class="img-pattern"><img src="clients/images/theme/patterns/40.png" alt="pattern 40"></div>
					<div data-pattern="41"  class="img-pattern"><img src="clients/images/theme/patterns/41.png" alt="pattern 41"></div>
					<div data-pattern="42"  class="img-pattern"><img src="clients/images/theme/patterns/42.png" alt="pattern 42"></div>
					<div data-pattern="43"  class="img-pattern"><img src="clients/images/theme/patterns/43.png" alt="pattern 43"></div>
					<div data-pattern="44"  class="img-pattern"><img src="clients/images/theme/patterns/44.png" alt="pattern 44"></div>
					<div data-pattern="45"  class="img-pattern"><img src="clients/images/theme/patterns/45.png" alt="pattern 45"></div>
				</div>
				<p class="label-sm">Background only applies for Boxed,Framed, Rounded Layout</p>
			</div>
			
			<div class="reset-group">
				<a href="home2.html" class="btn btn-success " onclick="ResetAll()">Reset</a>
			</div>
			
		</div>
	</div>

	<link rel='stylesheet' property='stylesheet'  href='clients/css/themecss/cpanel.css' type='text/css' media='all' />
	
	<!-- Preloading Screen -->
	<div id="loader-wrapper">
		<div id="loader"></div>
		<div class="loader-section section-left"></div>
		<div class="loader-section section-right"></div>
	 </div>
	<!-- End Preloading Screen -->
	
	<!-- Include Libs & Plugins
	============================================ -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script type="text/javascript" src="clients/js/jquery-2.2.4.min.js"></script>
	<script type="text/javascript" src="clients/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="clients/js/owl-carousel/owl.carousel.js"></script>
	<script type="text/javascript" src="clients/js/themejs/libs.js"></script>
	<script type="text/javascript" src="clients/js/unveil/jquery.unveil.js"></script>
	<script type="text/javascript" src="clients/js/countdown/jquery.countdown.min.js"></script>
	<script type="text/javascript" src="clients/js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
	<script type="text/javascript" src="clients/js/datetimepicker/moment.js"></script>
	<script type="text/javascript" src="clients/js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
	<script type="text/javascript" src="clients/js/jquery-ui/jquery-ui.min.js"></script>


	<!-- Theme files
	============================================ -->
	<script type="text/javascript" src="clients/js/themejs/application.js"></script>
	<!-- <script type="text/javascript" src="js/themejs/toppanel.js"></script> -->
	<script type="text/javascript" src="clients/js/themejs/so_megamenu.js"></script>
	<script type="text/javascript" src="clients/js/themejs/addtocart.js"></script>
	
	<script type="text/javascript" src="clients/js/themejs/accordion.js"></script>	
	<script type="text/javascript" src="clients/js/themejs/cpanel.js"></script>
</body>
</html>