<?php 
	include_once('./database/connection.php');
?>
<!doctype html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">

		<title>Our Shop - Cafenod HTML5 Template</title>
		<link rel="shortcut icon" href="assets/images/logo/favourite_icon.png">

		<!-- fraimwork - css include -->
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

		<!-- icon font - css include -->
		<link rel="stylesheet" type="text/css" href="assets/css/fontawesome.css">

		<!-- animation - css include -->
		<link rel="stylesheet" type="text/css" href="assets/css/animate.css">

		<!-- carousel - css include -->
		<link rel="stylesheet" type="text/css" href="assets/css/slick.css">
		<link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">

		<!-- popup - css include -->
		<link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">

		<!-- jquery-ui - css include -->
		<link rel="stylesheet" type="text/css" href="assets/css/jquery-ui.css">

		<!-- custom - css include -->
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">

	</head>


	<body>

		<!-- body_wrap - start -->
		<div class="body_wrap">

			<!-- backtotop - start -->
			<div class="backtotop">
				<a href="#" class="scroll">
					<i class="far fa-arrow-up"></i>
					<i class="far fa-arrow-up"></i>
				</a>
			</div>
			<!-- backtotop - end -->

			<!-- preloader - start -->
			<div id="preloader"></div>
			<!-- preloader - end -->

			<!-- header_section - start
			================================================== -->
			<?php include_once('./inc/headerTwo.php'); ?>
			<!-- header_section - end
			================================================== -->

			<!-- main body - start
			================================================== -->
			<main>

        <!-- cart_sidebar - start
        ================================================== -->
        <div class="sidebar-menu-wrapper">
        	<div class="cart_sidebar">
        		<button type="button" class="close_btn"><i class="fal fa-times"></i></button>
        		<h2 class="heading_title text-uppercase">Cart Items - <span>4</span></h2>

        		<div class="cart_items_list">
        			<div class="cart_item">
        				<div class="item_image">
        					<img src="assets/images/recent_post/img_03.jpg" alt="image_not_found">
        				</div>
        				<div class="item_content">
        					<h4 class="item_title">
        						Rorem ipsum dolor sit amet, sectetur adipisi cingey.
        					</h4>
        					<span class="item_price">$19.00</span>
        					<button type="button" class="remove_btn"><i class="fal fa-times"></i></button>
        				</div>
        			</div>

        			<div class="cart_item">
        				<div class="item_image">
        					<img src="assets/images/recent_post/img_04.jpg" alt="image_not_found">
        				</div>
        				<div class="item_content">
        					<h4 class="item_title">
        						Rorem ipsum dolor sit amet, sectetur adipisi cingey.
        					</h4>
        					<span class="item_price">$19.00</span>
        					<button type="button" class="remove_btn"><i class="fal fa-times"></i></button>
        				</div>
        			</div>

        			<div class="cart_item">
        				<div class="item_image">
        					<img src="assets/images/recent_post/img_05.jpg" alt="image_not_found">
        				</div>
        				<div class="item_content">
        					<h4 class="item_title">
        						Rorem ipsum dolor sit amet, sectetur adipisi cingey.
        					</h4>
        					<span class="item_price">$19.00</span>
        					<button type="button" class="remove_btn"><i class="fal fa-times"></i></button>
        				</div>
        			</div>

        			<div class="cart_item">
        				<div class="item_image">
        					<img src="assets/images/recent_post/img_06.jpg" alt="image_not_found">
        				</div>
        				<div class="item_content">
        					<h4 class="item_title">
        						Rorem ipsum dolor sit amet, sectetur adipisi cingey.
        					</h4>
        					<span class="item_price">$19.00</span>
        					<button type="button" class="remove_btn"><i class="fal fa-times"></i></button>
        				</div>
        			</div>
        		</div>
        		<div class="total_price text-uppercase">
        			<span>Sub Total:</span>
        			<span>$76.00</span>
        		</div>
        		<ul class="btns_group ul_li">
        			<li><a href="cart.html" class="btn btn_primary text-uppercase">View Cart</a></li>
        			<li><a href="checkout.html" class="btn btn_border border_black text-uppercase">Checkout</a></li>
        		</ul>
        	</div>
        	<div class="cart_sidebar_overlay"></div>
        </div>
        <!-- cart_sidebar - end
        ================================================== -->

				<!-- breadcrumb_section - start
				================================================== -->
				<section class="breadcrumb_section text-uppercase" style="background-image: url(assets/images/breadcrumb/breadcrumb_bg_01.jpg);">
					<div class="container">
						<h1 class="page_title text-white wow fadeInUp" data-wow-delay=".1s">Online Shop</h1>
						<ul class="breadcrumb_nav ul_li wow fadeInUp" data-wow-delay=".2s">
							<li><a href="index.html"><i class="fas fa-home"></i> Home</a></li>
							<li>Our Shop</li>
						</ul>
					</div>
					<div class="breadcrumb_icon_wrap">
						<div class="container">
							<div class="breadcrumb_icon wow fadeInUp" data-wow-delay=".3s">
								<img src="assets/images/feature/icon_01.png" alt="icon_not_found">
								<span class="bg_shape"></span>
							</div>
						</div>
					</div>
				</section>
				<!-- breadcrumb_section - end
				================================================== -->

				<!-- shop_section - start
        ================================================== -->
        <section class="shop_section sec_ptb_120 bg_default_gray">
          <div class="container">
          	<ul class="filters-button-group ul_li_center wow fadeInUp" data-wow-delay=".1s">
          		<li><button class="button text-uppercase active" data-filter="*">all</button></li>
          		<li><button class="button text-uppercase" data-filter=".ArtisanTea">Artisan Tea</button></li>
          		<li><button class="button text-uppercase" data-filter=".High-qualityspices">High-quality Spices</button></li>
          		<li><button class="button text-uppercase" data-filter=".Coirbrushes">Coir Brushes</button></li>
          		<li><button class="button text-uppercase" data-filter=".GemandJewellery">Gem and Jewellery</button></li>
          		<!-- <li><button class="button text-uppercase" data-filter=".blacktea">black tea</button></li> -->
          		<!-- <li><button class="button text-uppercase" data-filter=".greantea">grean tea</button></li> -->
          	</ul>

          	<!-- <div class="shop_filter_bar">
          		<div class="row">
          			<div class="col-lg-6">
          				<form action="#">
          					<div class="pricing_range wow fadeInUp" data-wow-delay=".2s">
          						<h4 class="item_title text-uppercase">Price range</h4>
          						<div class="price-range-area">
          							<div id="slider-range" class="slider-range"></div>
          							<div class="price-text d-flex align-items-center">
          								<span>Price:</span>
          								<input type="text" id="amount" readonly>
          							</div>
          						</div>
          					</div>
          				</form>
          			</div>

          			<div class="col-lg-6">
          				<div class="shop_filter_tags wow fadeInUp" data-wow-delay=".1s">
          					<h4 class="item_title text-uppercase">Popular tag</h4>
          					<ul class="ul_li">
          						<li><a href="#!">New</a></li>
          						<li><a href="#!">Top</a></li>
          						<li><a href="#!">Sale</a></li>
          						<li><a href="#!">Coffee</a></li>
          						<li><a href="#!">Beans</a></li>
          					</ul>
          				</div>
          			</div>
          		</div>
          	</div> -->

          	<div class="shop_filter_grid grid wow fadeInUp" data-wow-delay=".3s">
				<?php
					 $qry = "SELECT * FROM products";
					 $run = $db->query($qry);
					 if ($run -> num_rows > 0) {
						 while ($row = $run->fetch_assoc()) {
							 $id           = $row['id'];
							 $productName  = $row['productName'];
							 $productImage = $row['productImage'];
							 $category     = $row['productType'];
				?>
          		<div class="element-item <?php echo str_replace(' ', '', $category) ?>" data-category="<?php echo str_replace(' ', '', $category) ?>">
          			<div class="shop_card">
          				<!-- <a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a> -->
          				<div class="share_btns">
          					<button type="button" class="share_btn">
          						<i class="fal fa-share-alt"></i>
          					</button>
          					<ul class="ul_li">
          						<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
          						<li><a href="#"><i class="fab fa-twitter"></i></a></li>
          						<li><a href="#"><i class="fab fa-youtube"></i></a></li>
          						<li><a href="#"><i class="fab fa-instagram"></i></a></li>
          						<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
          					</ul>
          				</div>
          				<a class="item_image" href="shop_details.html">
							  <?php echo '<img src="./upload/products/'.$productImage.'" alt="image_not_found">' ?>
          				</a>
          				<div class="item_content">
          					<h3 class="item_title text-uppercase">
          						<a href="shop_details.html"><?php echo $productName ?></a>
          					</h3>
          					<div class="btns_group">
          						<!-- <span class="item_price bg_default_brown">$101</span> -->
          						<a class="btn btn_border border_black text-uppercase" href="shop_details.php?product=<?php echo $id ?>">View Details</a>
          					</div>
          				</div>
          			</div>
          		</div>
				<?php
					}
				}
				?>
          		<!-- <div class="element-item coffee blacktea " data-category="coffee">
          			<div class="shop_card">
          				<a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
          				<div class="share_btns">
          					<button type="button" class="share_btn">
          						<i class="fal fa-share-alt"></i>
          					</button>
          					<ul class="ul_li">
          						<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
          						<li><a href="#"><i class="fab fa-twitter"></i></a></li>
          						<li><a href="#"><i class="fab fa-youtube"></i></a></li>
          						<li><a href="#"><i class="fab fa-instagram"></i></a></li>
          						<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
          					</ul>
          				</div>
          				<a class="item_image" href="shop_details.html">
          					<img src="assets/images/shop/img_02.png" alt="image_not_found">
          				</a>
          				<div class="item_content">
          					<h3 class="item_title text-uppercase">
          						<a href="shop_details.html">americano pure grades</a>
          					</h3>
          					<div class="btns_group">
          						<span class="item_price bg_default_brown">$101</span>
          						<a class="btn btn_border border_black text-uppercase" href="#!">Add To Cart</a>
          					</div>
          				</div>
          			</div>
          		</div>

          		<div class="element-item sandwiches sweets " data-category="sandwiches">
          			<div class="shop_card">
          				<a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
          				<div class="share_btns">
          					<button type="button" class="share_btn">
          						<i class="fal fa-share-alt"></i>
          					</button>
          					<ul class="ul_li">
          						<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
          						<li><a href="#"><i class="fab fa-twitter"></i></a></li>
          						<li><a href="#"><i class="fab fa-youtube"></i></a></li>
          						<li><a href="#"><i class="fab fa-instagram"></i></a></li>
          						<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
          					</ul>
          				</div>
          				<a class="item_image" href="shop_details.html">
          					<img src="assets/images/shop/img_03.png" alt="image_not_found">
          				</a>
          				<div class="item_content">
          					<h3 class="item_title text-uppercase">
          						<a href="shop_details.html">indian Roasting pack</a>
          					</h3>
          					<div class="btns_group">
          						<span class="item_price bg_default_brown">$101</span>
          						<a class="btn btn_border border_black text-uppercase" href="#!">Add To Cart</a>
          					</div>
          				</div>
          			</div>
          		</div>

          		<div class="element-item w-100">
          			<div class="shop_offer_banner text-white" style="background-image: url(assets/images/backgrounds/bg_10.jpg);">
          				<div class="item_content">
          					<h4 class="item_title text-white text-uppercase">Coffee Bean & Super Cup</h4>
          					<div class="discount_percentage">20%</div>
          					<p>
          						Offer Foy Only Sunday
          					</p>
          				</div>
          			</div>
          		</div>

          		<div class="element-item sweets sandwiches " data-category="sweets">
          			<div class="shop_card">
          				<a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
          				<div class="share_btns">
          					<button type="button" class="share_btn">
          						<i class="fal fa-share-alt"></i>
          					</button>
          					<ul class="ul_li">
          						<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
          						<li><a href="#"><i class="fab fa-twitter"></i></a></li>
          						<li><a href="#"><i class="fab fa-youtube"></i></a></li>
          						<li><a href="#"><i class="fab fa-instagram"></i></a></li>
          						<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
          					</ul>
          				</div>
          				<a class="item_image" href="shop_details.html">
          					<img src="assets/images/shop/img_04.png" alt="image_not_found">
          				</a>
          				<div class="item_content">
          					<h3 class="item_title text-uppercase">
          						<a href="shop_details.html">bangladeshi organic grades</a>
          					</h3>
          					<div class="btns_group">
          						<span class="item_price bg_default_brown">$101</span>
          						<a class="btn btn_border border_black text-uppercase" href="#!">Add To Cart</a>
          					</div>
          				</div>
          			</div>
          		</div>

          		<div class="element-item blacktea coffee " data-category="blacktea">
          			<div class="shop_card">
          				<a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
          				<div class="share_btns">
          					<button type="button" class="share_btn">
          						<i class="fal fa-share-alt"></i>
          					</button>
          					<ul class="ul_li">
          						<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
          						<li><a href="#"><i class="fab fa-twitter"></i></a></li>
          						<li><a href="#"><i class="fab fa-youtube"></i></a></li>
          						<li><a href="#"><i class="fab fa-instagram"></i></a></li>
          						<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
          					</ul>
          				</div>
          				<a class="item_image" href="shop_details.html">
          					<img src="assets/images/shop/img_05.png" alt="image_not_found">
          				</a>
          				<div class="item_content">
          					<h3 class="item_title text-uppercase">
          						<a href="shop_details.html">arvica coffee pack</a>
          					</h3>
          					<div class="btns_group">
          						<span class="item_price bg_default_brown">$101</span>
          						<a class="btn btn_border border_black text-uppercase" href="#!">Add To Cart</a>
          					</div>
          				</div>
          			</div>
          		</div>

          		<div class="element-item greantea chocolate " data-category="greantea">
          			<div class="shop_card">
          				<a class="wishlist_btn" href="#!"><i class="fal fa-heart"></i></a>
          				<div class="share_btns">
          					<button type="button" class="share_btn">
          						<i class="fal fa-share-alt"></i>
          					</button>
          					<ul class="ul_li">
          						<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
          						<li><a href="#"><i class="fab fa-twitter"></i></a></li>
          						<li><a href="#"><i class="fab fa-youtube"></i></a></li>
          						<li><a href="#"><i class="fab fa-instagram"></i></a></li>
          						<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
          					</ul>
          				</div>
          				<a class="item_image" href="shop_details.html">
          					<img src="assets/images/shop/img_06.png" alt="image_not_found">
          				</a>
          				<div class="item_content">
          					<h3 class="item_title text-uppercase">
          						<a href="shop_details.html">americano pure grades</a>
          					</h3>
          					<div class="btns_group">
          						<span class="item_price bg_default_brown">$101</span>
          						<a class="btn btn_border border_black text-uppercase" href="#!">Add To Cart</a>
          					</div>
          				</div>
          			</div>
          		</div> -->
          	</div>

          	<!-- <ul class="pagination_nav ul_li_center">
          		<li><a href="#!"><i class="fal fa-angle-double-left"></i></a></li>
          		<li class="active"><a href="#!">1</a></li>
          		<li><a href="#!">2</a></li>
          		<li><a href="#!">3</a></li>
          		<li><a href="#!"><i class="fal fa-angle-double-right"></i></a></li>
          	</ul> -->
          </div>
        </section>
        <!-- shop_section - end
        ================================================== -->

			</main>
			<!-- main body - end
			================================================== -->

			<!-- footer_section - start
			================================================== -->
			<?php include_once('./inc/footer.php') ?>
			<!-- footer_section - end
			================================================== -->

		</div>
		<!-- body_wrap - end -->

		<!-- fraimwork - jquery include -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- animation - jquery include -->
		<script src="assets/js/wow.min.js"></script>

		<!-- carousel - jquery include -->
		<script src="assets/js/slick.min.js"></script>

		<!-- popup - jquery include -->
		<script src="assets/js/magnific-popup.min.js"></script>

		<!-- isotope filter - jquery include -->
		<script src="assets/js/isotope.pkgd.min.js"></script>

		<!-- google map - jquery include -->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDk2HrmqE4sWSei0XdKGbOMOHN3Mm2Bf-M&ver=2.1.6"></script>
		<script src="assets/js/gmaps.min.js"></script>

		<!-- jquery-ui - jquery include -->
		<script src="assets/js/jquery-ui.js"></script>

    <!-- off canvas sidebar - jquery include -->
    <script src="assets/js/mCustomScrollbar.js"></script>

		<!-- custom - jquery include -->
		<script src="assets/js/main.js"></script>

	</body>
</html>