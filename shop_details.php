<?php 
   include_once('./database/connection.php');
    if(isset($_GET['product'])){
		$id = $_GET['product'];
		$qry = "SELECT * FROM products WHERE id = $id";
		$run = $db->query($qry);
		if($run-> num_rows > 0) {
			while($row = $run->fetch_assoc()) {
				$productName = $row['productName'];
				$productImage = $row['productImage'];
				$category = $row['productType'];
				$productDetails = $row['productDetails'];
			}
		}
	}
?>
<!doctype html>
<html lang="zxx">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Shop Details - SinekloApS</title>
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
        <?php include_once('./inc/headerTwo.php') ?>

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
                        <li><a href="cart.php" class="btn btn_primary text-uppercase">View Cart</a></li>
                        <li><a href="checkout.php" class="btn btn_border border_black text-uppercase">Checkout</a></li>
                    </ul>
                </div>
                <div class="cart_sidebar_overlay"></div>
            </div>
            <!-- cart_sidebar - end
        ================================================== -->

            <!-- breadcrumb_section - start
				================================================== -->
            <section class="breadcrumb_section text-uppercase"
                style="background-image: url(assets/images/breadcrumb/breadcrumb_bg_01.jpg);">
                <div class="container">
                    <h1 class="page_title text-white wow fadeInUp" data-wow-delay=".1s">Shop Details</h1>
                    <ul class="breadcrumb_nav ul_li wow fadeInUp" data-wow-delay=".2s">
                        <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                        <li>Shop Details</li>
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

            <!-- details_section - start
        ================================================== -->
            <section class="details_section shop_details sec_ptb_120 bg_default_gray">
                <div class="container">

                    <div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center">
                        <div class="col-lg-6 col-md-7">
                            <div class="details_image_wrap wow fadeInUp" data-wow-delay=".1s">
                                <div class="details_image_carousel">
                                    <div class="slider_item">
										<?php echo '<img src="./upload/products/'.$productImage.'" alt="image_not_found">' ?>
                                        
                                    </div>
                                    <!-- <div class="slider_item">
                                        <img src="assets/images/shop/img_02.png" alt="image_not_found">
                                    </div>
                                    <div class="slider_item">
                                        <img src="assets/images/shop/img_03.png" alt="image_not_found">
                                    </div>
                                    <div class="slider_item">
                                        <img src="assets/images/shop/img_04.png" alt="image_not_found">
                                    </div>
                                    <div class="slider_item">
                                        <img src="assets/images/shop/img_05.png" alt="image_not_found">
                                    </div>
                                    <div class="slider_item">
                                        <img src="assets/images/shop/img_06.png" alt="image_not_found">
                                    </div>
                                    <div class="slider_item">
                                        <img src="assets/images/shop/img_02.png" alt="image_not_found">
                                    </div>
                                    <div class="slider_item">
                                        <img src="assets/images/shop/img_04.png" alt="image_not_found">
                                    </div>
                                    <div class="slider_item">
                                        <img src="assets/images/shop/img_06.png" alt="image_not_found">
                                    </div> -->
                                </div>

                                <!-- <div class="details_image_carousel_nav">
          					<div class="slider_item">
          						<img src="assets/images/shop/img_01.png" alt="image_not_found">
          					</div>
          					<div class="slider_item">
          						<img src="assets/images/shop/img_02.png" alt="image_not_found">
          					</div>
          					<div class="slider_item">
          						<img src="assets/images/shop/img_03.png" alt="image_not_found">
          					</div>
          					<div class="slider_item">
          						<img src="assets/images/shop/img_04.png" alt="image_not_found">
          					</div>
          					<div class="slider_item">
          						<img src="assets/images/shop/img_05.png" alt="image_not_found">
          					</div>
          					<div class="slider_item">
          						<img src="assets/images/shop/img_06.png" alt="image_not_found">
          					</div>
          					<div class="slider_item">
          						<img src="assets/images/shop/img_02.png" alt="image_not_found">
          					</div>
          					<div class="slider_item">
          						<img src="assets/images/shop/img_04.png" alt="image_not_found">
          					</div>
          					<div class="slider_item">
          						<img src="assets/images/shop/img_06.png" alt="image_not_found">
          					</div>
          				</div> -->
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-7">
                            <div class="details_content wow fadeInUp" data-wow-delay=".2s">
                                <div class="details_flex_title">
                                    <h2 class="details_title text-uppercase"><?php echo $productName ?></h2>
                                    <!-- <div class="details_review">
          						<ul class="rating_star ul_li">
          							<li><i class="fas fa-star"></i></li>
          							<li><i class="fas fa-star"></i></li>
          							<li><i class="fas fa-star"></i></li>
          							<li><i class="fas fa-star"></i></li>
          							<li><i class="far fa-star"></i></li>
          						</ul>
          						<span class="review_text">04 - Customar Review</span>
          					</div> -->
                                </div>
                                <p style="white-space: pre-line; white-space: pre-wrap;"><?php echo $productDetails ?></p>
                                <!-- <ul class="">
                                    <li>green coffee beans over hot coals</li>
                                    <li>beans are roasted</li>
                                    <li>coffee beans over hot coals</li>
                                    <li>coffee beans over hot coals</li>
                                    <li>coffee beans over hot coals</li>
                                </ul>
                                <div class="details_price">
                                    <strong class="price_text">$25.00</strong> -->
                                    <!-- <span class="in_stuck"><i class="fal fa-check"></i> In stock</span> -->
                                <!-- </div> -->
                                <!-- <ul class="details_item_color ul_li">
          					<li class="bg_brown"><input type="radio" name="item_color"></li>
          					<li class="bg_browndark"><input type="radio" name="item_color" checked></li>
          					<li class="bg_brownlight"><input type="radio" name="item_color"></li>
          				</ul> -->
                                <!-- <ul class="btns_group ul_li"> -->
                                    <!-- <li>
          						<div class="quantity_input quantity_boxed">
          							<h4 class="quantity_title text-uppercase">Quantity</h4>
          							<form action="#">
          								<button type="button" class="input_number_decrement">–</button>
          								<input class="input_number" type="text" value="2">
          								<button type="button" class="input_number_increment">+</button>
          							</form>
          						</div>
          					</li> -->
                                    <!-- <li><a class="btn btn_secondary text-uppercase" href="#!">Add To Cart</a></li> -->
                                <!-- </ul> -->
                                <!-- <div class="details_wishlist_btn">
          					<a href="#!"><i class="fas fa-heart mr-1"></i> Add to watch list</a>
          				</div> -->
                                <!-- <div class="details_share_links">
          					<h4 class="list_title"><i class="fas fa-share mr-1"></i> Share</h4>
          					<ul class="social_links social_icons ul_li">
          						<li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
          						<li><a href="#!"><i class="fab fa-twitter"></i></a></li>
          						<li><a href="#!"><i class="fab fa-instagram"></i></a></li>
          						<li><a href="#!"><i class="fab fa-youtube"></i></a></li>
          						<li><a href="#!"><i class="fab fa-behance"></i></a></li>
          					</ul>
          				</div> -->
                            </div>
                        </div>
                    </div>
                    <!-- 
          	<div class="product_description_wrap wow fadeInUp" data-wow-delay=".3s">
          		<ul class="tabs_nav ul_li nav" role="tablist">
          			<li>
          				<button class="active" data-bs-toggle="tab" data-bs-target="#product_description" type="button" role="tab" aria-selected="true">Product Details</button>
          			</li>
          			<li>
          				<button data-bs-toggle="tab" data-bs-target="#product_additional_info" type="button" role="tab" aria-selected="false">Additionnal Imformation</button>
          			</li>
          			<li>
          				<button data-bs-toggle="tab" data-bs-target="#product_review" type="button" role="tab" aria-selected="false">Review (3)</button>
          			</li>
          		</ul>
          		<div class="tab-content">
          			<div class="tab-pane fade show active" id="product_description" role="tabpanel">
          				<p class="mb-0">
          					Rorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proideny.mco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  cupidaey.
          				</p>
          			</div>
          			<div class="tab-pane fade" id="product_additional_info" role="tabpanel">
          				<p class="mb-0">
          					Rorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proideny.mco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  cupidaey.
          				</p>
          			</div>
          			<div class="tab-pane fade" id="product_review" role="tabpanel">
          				<p class="mb-0">
          					Rorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proideny.mco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  cupidaey.
          				</p>
          			</div>
          		</div>
          	</div> -->

                    <div class="related_products">
                        <h4 class="area_title text-uppercase mb-0 wow fadeInUp" data-wow-delay=".1s">Related Product
                        </h4>
                        <div class="row">
						<?php
                            $i   = 1;
                            $qry = "SELECT * FROM products WHERE productType='$category' AND id != '$id' ORDER BY id DESC limit 3";
                            $run = $db->query($qry);
                            if ($run -> num_rows > 0) {
                                while ($row = $run->fetch_assoc()) {
                                    $r_id           = $row['id'];
                                    $r_productName  = $row['productName'];
                                    $r_productImage = $row['productImage'];
                        ?>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="shop_card wow fadeInUp" data-wow-delay=".2s">
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
                                    <a class="item_image" href="shop_details.php">
										<?php echo '<img src="./upload/products/'.$r_productImage.'" alt="image_not_found">' ?>
                                    </a>
                                    <div class="item_content">
                                        <h3 class="item_title text-uppercase">
                                            <a href="shop_details.php"><?php echo $r_productName ?></a>
                                        </h3>
                                        <div class="btns_group">
                                            <!-- <span class="item_price bg_default_brown">$101</span> -->
                                            <a class="btn btn_border border_black text-uppercase" href="shop_details.php?product=<?php echo $r_id ?>">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
						<?php
								}
							}else{
						?>
							<h1>No Realated Products</h1>
						<?php
							}
						?>
                           
                        </div>
                    </div>

                </div>
            </section>
            <!-- details_section - end
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDk2HrmqE4sWSei0XdKGbOMOHN3Mm2Bf-M&ver=2.1.6">
    </script>
    <script src="assets/js/gmaps.min.js"></script>

    <!-- jquery-ui - jquery include -->
    <script src="assets/js/jquery-ui.js"></script>

    <!-- off canvas sidebar - jquery include -->
    <script src="assets/js/mCustomScrollbar.js"></script>

    <!-- custom - jquery include -->
    <script src="assets/js/main.js"></script>

</body>

<.php>