<?php include('./database/connection.php') ?>
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>SinekloApS</title>
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

        <?php include('./inc/headerOne.php') ?>

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

            <!-- slider_section - start
        ================================================== -->
            <section class="slider_section slider_dark"
                style="background-image: url(assets/images/backgrounds/bg_01.png);">
                <div class="main_slider pb-0 wow fadeInUp" data-wow-delay=".1s">

            <?php 
                $qry = "SELECT * FROM banner";
                $data = mysqli_query($db, $qry)or die('error');
                if(mysqli_num_rows($data) > 0){
                  while($row = mysqli_fetch_assoc($data)){
                    $id = $row['id'];
                    $img = $row['img'];
                 
            ?>
                    <div class="slider_item text-white"
                        <?php echo 'style="background-image: url(./upload/banner/' .$img. ');' ?>">
                        <div class="container">
                            <div class="row justify-content-lg-start justify-content-md-center">
                                <div class="col-lg-6 col-md-8">
                                    <h3 class="title_text text-white text-uppercase" data-animation="fadeInUp"
                                        data-delay=".2s">
                                        Time to discover coffee house
                                    </h3>
                                    <p data-animation="fadeInUp" data-delay=".4s">
                                        The coffee is brewed by first roasting the green coffee beans over hot coals in
                                        a brazier. given an opportunity to sample.
                                    </p>
                                    <ul class="btns_group ul_li" data-animation="fadeInUp" data-delay=".6s">
                                        <li><a class="btn btn_primary text-uppercase" href="menu.html">testy Coffee</a>
                                        </li>
                                        <li><a class="btn btn_border border_white text-uppercase"
                                                href="shop_details.html">Learn more</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="shape_image">
                            <img src="assets/images/slider/shape_01.png" alt="image_not_found">
                        </div>
                    </div>
            <?php
               }
              }
            ?>
                    <!-- <div class="slider_item text-white" style="background-image: url(assets/images/slider/img_01.png);">
              <div class="container">
                <div class="row justify-content-lg-start justify-content-md-center">
                  <div class="col-lg-6 col-md-8">
                    <h3 class="title_text text-white text-uppercase" data-animation="fadeInUp" data-delay=".2s">
                      Time to discover coffee house
                    </h3>
                    <p data-animation="fadeInUp" data-delay=".4s">
                      The coffee is brewed by first roasting the green coffee beans over hot coals in a brazier. given an opportunity to sample.
                    </p>
                    <ul class="btns_group ul_li" data-animation="fadeInUp" data-delay=".6s">
                      <li><a class="btn btn_primary text-uppercase" href="menu.html">testy Coffee</a></li>
                      <li><a class="btn btn_border border_white text-uppercase" href="shop_details.html">Learn more</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="shape_image">
                <img src="assets/images/slider/shape_01.png" alt="image_not_found">
              </div>
            </div> -->
                    <!-- 
            <div class="slider_item text-white" style="background-image: url(assets/images/slider/img_01.png);">
              <div class="container">
                <div class="row justify-content-lg-start justify-content-md-center">
                  <div class="col-lg-6 col-md-8">
                    <h3 class="title_text text-white text-uppercase" data-animation="fadeInUp" data-delay=".2s">
                      Time to discover coffee house
                    </h3>
                    <p data-animation="fadeInUp" data-delay=".4s">
                      The coffee is brewed by first roasting the green coffee beans over hot coals in a brazier. given an opportunity to sample.
                    </p>
                    <ul class="btns_group ul_li" data-animation="fadeInUp" data-delay=".6s">
                      <li><a class="btn btn_primary text-uppercase" href="menu.html">testy Coffee</a></li>
                      <li><a class="btn btn_border border_white text-uppercase" href="shop_details.html">Learn more</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="shape_image">
                <img src="assets/images/slider/shape_01.png" alt="image_not_found">
              </div>
            </div> -->
                    <!-- 
            <div class="slider_item text-white" style="background-image: url(assets/images/slider/img_01.png);">
              <div class="container">
                <div class="row justify-content-lg-start justify-content-md-center">
                  <div class="col-lg-6 col-md-8">
                    <h3 class="title_text text-white text-uppercase" data-animation="fadeInUp" data-delay=".2s">
                      Time to discover coffee house
                    </h3>
                    <p data-animation="fadeInUp" data-delay=".4s">
                      The coffee is brewed by first roasting the green coffee beans over hot coals in a brazier. given an opportunity to sample.
                    </p>
                    <ul class="btns_group ul_li" data-animation="fadeInUp" data-delay=".6s">
                      <li><a class="btn btn_primary text-uppercase" href="menu.html">testy Coffee</a></li>
                      <li><a class="btn btn_border border_white text-uppercase" href="shop_details.html">Learn more</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="shape_image">
                <img src="assets/images/slider/shape_01.png" alt="image_not_found">
              </div>
            </div> -->
                </div>
                <div class="carousel_nav">
                    <button class="main_left_arrow" type="button"><i class="fal fa-arrow-up"></i></button>
                    <button class="main_right_arrow" type="button"><i class="fal fa-arrow-down"></i></button>
                </div>
                <div class="slider_social_wrap">
                    <div class="container maxw_1560">
                        <div class="row align-items-center justify-content-lg-between">
                            <div class="col-lg-6 col-md-4 order-last">
                                <a class="popup_video video_btn1 text-uppercase wow fadeInRight"
                                    href="http://www.youtube.com/watch?v=0O2aH4XLbto">
                                    <span class="pulse"><i class="fas fa-play"></i></span>
                                    <small>Play video</small>
                                </a>
                            </div>
                            <div class="col-lg-6 col-md-8">
                                <ul class="social_links social_text ul_li text-uppercase wow fadeInLeft">
                                    <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i>
                                            facebook</a></li>
                                    <li><a href="https://twitter.com/"><i class="fab fa-twitter"></i> twitter</a></li>
                                    <li><a href="https://www.youtube.com/"><i class="fab fa-youtube"></i> youtube</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- slider_section - end
        ================================================== -->

            <!-- feature_primary_section - start
        ================================================== -->
            <section class="feature_primary_section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="feature_primary wow fadeInUp" data-wow-delay=".1s">
                                <div class="item_icon">
                                    <span class="item_serial">1</span>
                                    <img src="assets/images/feature/icon_01.png" alt="icon_not_found">
                                </div>
                                <h3 class="item_title text-uppercase">awesomae aroma</h3>
                                <p class="mb-0">
                                    The coffee is brewed by first roasting the green coffee beans
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="feature_primary wow fadeInUp" data-wow-delay=".2s">
                                <div class="item_icon">
                                    <span class="item_serial">2</span>
                                    <img src="assets/images/feature/icon_02.png" alt="icon_not_found">
                                </div>
                                <h3 class="item_title text-uppercase">high quality</h3>
                                <p class="mb-0">
                                    The coffee is brewed by first roasting the green coffee beans
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="feature_primary wow fadeInUp" data-wow-delay=".3s">
                                <div class="item_icon">
                                    <span class="item_serial">3</span>
                                    <img src="assets/images/feature/icon_03.png" alt="icon_not_found">
                                </div>
                                <h3 class="item_title text-uppercase">pure grades</h3>
                                <p class="mb-0">
                                    The coffee is brewed by first roasting the green coffee beans
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="feature_primary wow fadeInUp" data-wow-delay=".4s">
                                <div class="item_icon">
                                    <span class="item_serial">4</span>
                                    <img src="assets/images/feature/icon_04.png" alt="icon_not_found">
                                </div>
                                <h3 class="item_title text-uppercase">proper roasting</h3>
                                <p class="mb-0">
                                    The coffee is brewed by first roasting the green coffee beans
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- feature_primary_section - end
        ================================================== -->

            <!-- about_section - start
        ================================================== -->
            <section class="about_section sec_ptb_120">
                <div class="container">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-lg-6 col-md-6 order-last">
                            <div class="about_image1 wow fadeInRight" data-wow-delay=".1s">
                                <img src="assets/images/about/img_01.png" alt="image_not_found">
                                <div class="year_content_wrap text-uppercase"
                                    style="background-image: url(assets/images/about/bg_01.png);">
                                    <div class="content_wrap">
                                        <span>27 <small>+ years of</small></span>
                                        <strong>experience</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="about_content">
                                <div class="section_title text-uppercase">
                                    <h2 class="small_title"><i class="fas fa-coffee"></i> about us</h2>
                                    <h3 class="big_title wow fadeInUp" data-wow-delay=".1s">
                                        There is all about cafenod coffee house
                                    </h3>
                                </div>
                                <p class="wow fadeInUp" data-wow-delay=".2s">
                                    From a cultural standpoint, coffeehouses largely serve as centers of social
                                    interaction: the coffeehouse provides patrons with a place to congregate, talk,
                                    read, write, entertain one another, or pass the time,
                                    whether individually or in small groups.
                                </p>
                                <ul class="about_info ul_li_block">
                                    <li class="wow fadeInUp" data-wow-delay=".3s">
                                        <h4 class="text-uppercase"><i class="far fa-square-full"></i> There is all about
                                            our cafenod coffee shops</h4>
                                        <p class="mb-0">
                                            The coffee is brewed by first roasting the green coffee beans over hot coals
                                            in a brazier. Once the beans are roasted each participant is given an
                                            opportunity to sample
                                        </p>
                                    </li>
                                    <li class="wow fadeInUp" data-wow-delay=".4s">
                                        <h4 class="text-uppercase"><i class="far fa-square-full"></i> This is followed
                                            by the grinding</h4>
                                        <p class="mb-0">
                                            The coffee is brewed by first roasting the green coffee beans over hot coals
                                            in a brazier. Once the beans are roasted each participant is given an
                                            opportunity to sample the aromatic smoke by wafting it towards them.
                                        </p>
                                    </li>
                                </ul>
                                <ul class="btns_group ul_li wow fadeInUp" data-wow-delay=".5s">
                                    <li>
                                        <a class="btn btn_primary text-uppercase" href="about.html">Learn more</a>
                                    </li>
                                    <li>
                                        <div class="chip_item">
                                            <div class="chip_thumbnail">
                                                <img src="assets/images/meta/img_01.png" alt="image_not_found">
                                            </div>
                                            <div class="chip_content text-uppercase">
                                                <h5 class="chip_name">rasalina De Willamson</h5>
                                                <span class="chip_title">Founder & CO</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- about_section - end
        ================================================== -->

            <!-- recipe_menu_section - start
        ================================================== -->
            <section class="recipe_menu_section sec_ptb_120 bg_gray deco_wrap">
                <div class="container">
                    <div class="section_title text-uppercase text-center">
                        <h2 class="small_title wow fadeInUp" data-wow-delay=".1s"><i class="fas fa-coffee"></i> Our
                            special Menu</h2>
                        <h3 class="big_title wow fadeInUp" data-wow-delay=".2s">
                            cafenod coffee house
                        </h3>
                    </div>

                    <ul class="filters-button-group ul_li_center wow fadeInUp" data-wow-delay=".3s">
                        <li><button class="button text-uppercase active" data-filter="*">all</button></li>
                        <li><button class="button text-uppercase" data-filter=".chocolate">chocolate</button></li>
                        <li><button class="button text-uppercase" data-filter=".coffee">coffee</button></li>
                        <li><button class="button text-uppercase" data-filter=".sandwiches">sandwiches</button></li>
                        <li><button class="button text-uppercase" data-filter=".sweets">sweets</button></li>
                        <li><button class="button text-uppercase" data-filter=".blacktea">black tea</button></li>
                        <li><button class="button text-uppercase" data-filter=".greantea">grean tea</button></li>
                    </ul>

                    <div class="recipe_item_grid grid wow fadeInUp" data-wow-delay=".4s">
                        <div class="element-item chocolate greantea " data-category="chocolate">
                            <div class="recipe_item">
                                <div class="content_col">
                                    <a class="item_image" href="shop_details.html">
                                        <img src="assets/images/menu/img_01.png" alt="image_not_found">
                                    </a>
                                    <div class="item_content">
                                        <h3 class="item_title text-uppercase">
                                            <a href="shop_details.html">americano Super hot coffee</a>
                                        </h3>
                                        <p class="mb-0">
                                            The coffee is brewed by first roasting the green coffee beans over hot coals
                                            in a brazier. Once the beans are roasted each participant is given an
                                        </p>
                                    </div>
                                </div>
                                <div class="content_col">
                                    <strong class="item_price">
                                        <sub>$</sub>3.5
                                    </strong>
                                </div>
                            </div>
                        </div>

                        <div class="element-item coffee blacktea " data-category="coffee">
                            <div class="recipe_item">
                                <div class="content_col">
                                    <a class="item_image" href="shop_details.html">
                                        <img src="assets/images/menu/img_02.png" alt="image_not_found">
                                    </a>
                                    <div class="item_content">
                                        <h3 class="item_title text-uppercase">
                                            <a href="shop_details.html">special raw coffee</a>
                                        </h3>
                                        <p class="mb-0">
                                            The coffee is brewed by first roasting the green coffee beans over hot coals
                                            in a brazier. Once the beans are roasted each participant is given an
                                        </p>
                                    </div>
                                </div>
                                <div class="content_col">
                                    <strong class="item_price">
                                        <sub>$</sub>4.8
                                    </strong>
                                </div>
                            </div>
                        </div>

                        <div class="element-item sandwiches sweets " data-category="sandwiches">
                            <div class="recipe_item">
                                <div class="content_col">
                                    <a class="item_image" href="shop_details.html">
                                        <img src="assets/images/menu/img_03.png" alt="image_not_found">
                                    </a>
                                    <div class="item_content">
                                        <h3 class="item_title text-uppercase">
                                            <a href="shop_details.html">indian pure tea</a>
                                        </h3>
                                        <p class="mb-0">
                                            The coffee is brewed by first roasting the green coffee beans over hot coals
                                            in a brazier. Once the beans are roasted each participant is given an
                                        </p>
                                    </div>
                                </div>
                                <div class="content_col">
                                    <strong class="item_price">
                                        <sub>$</sub>1.6
                                    </strong>
                                </div>
                            </div>
                        </div>

                        <div class="element-item sweets sandwiches " data-category="sweets">
                            <div class="recipe_item">
                                <div class="content_col">
                                    <a class="item_image" href="shop_details.html">
                                        <img src="assets/images/menu/img_04.png" alt="image_not_found">
                                    </a>
                                    <div class="item_content">
                                        <h3 class="item_title text-uppercase">
                                            <a href="shop_details.html">Bangladeshi green tea</a>
                                        </h3>
                                        <p class="mb-0">
                                            The coffee is brewed by first roasting the green coffee beans over hot coals
                                            in a brazier. Once the beans are roasted each participant is given an
                                        </p>
                                    </div>
                                </div>
                                <div class="content_col">
                                    <strong class="item_price">
                                        <sub>$</sub>9.3
                                    </strong>
                                </div>
                            </div>
                        </div>

                        <div class="element-item blacktea coffee " data-category="blacktea">
                            <div class="recipe_item">
                                <div class="content_col">
                                    <a class="item_image" href="shop_details.html">
                                        <img src="assets/images/menu/img_05.png" alt="image_not_found">
                                    </a>
                                    <div class="item_content">
                                        <h3 class="item_title text-uppercase">
                                            <a href="shop_details.html">Rolatina Sweets cafe house</a>
                                        </h3>
                                        <p class="mb-0">
                                            The coffee is brewed by first roasting the green coffee beans over hot coals
                                            in a brazier. Once the beans are roasted each participant is given an
                                        </p>
                                    </div>
                                </div>
                                <div class="content_col">
                                    <strong class="item_price">
                                        <sub>$</sub>0.8
                                    </strong>
                                </div>
                            </div>
                        </div>

                        <div class="element-item greantea chocolate " data-category="greantea">
                            <div class="recipe_item">
                                <div class="content_col">
                                    <a class="item_image" href="shop_details.html">
                                        <img src="assets/images/menu/img_02.png" alt="image_not_found">
                                    </a>
                                    <div class="item_content">
                                        <h3 class="item_title text-uppercase">
                                            <a href="shop_details.html">special raw coffee</a>
                                        </h3>
                                        <p class="mb-0">
                                            The coffee is brewed by first roasting the green coffee beans over hot coals
                                            in a brazier. Once the beans are roasted each participant is given an
                                        </p>
                                    </div>
                                </div>
                                <div class="content_col">
                                    <strong class="item_price">
                                        <sub>$</sub>4.8
                                    </strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="deco_item shape_1">
                    <img src="assets/images/menu/shape_01.png" alt="image_not_found">
                </div>
                <div class="deco_item shape_2">
                    <img src="assets/images/menu/shape_02.png" alt="image_not_found">
                </div>
            </section>
            <!-- recipe_menu_section - end
        ================================================== -->

            <!-- offer_section - start
        ================================================== -->
            <section class="offer_section">
                <div class="container-fluid p-0">
                    <div class="row g-0">
                        <div class="col-lg-4">
                            <div class="offer_video wow fadeIn" data-wow-delay=".1s">
                                <div class="overlay"></div>
                                <img src="assets/images/offer/img_01.jpg" alt="image_not_found">
                                <a class="popup_video video_btn2" href="http://www.youtube.com/watch?v=0O2aH4XLbto">
                                    <span class="pulse"><i class="fas fa-play"></i></span>
                                    <small class="text-uppercase">Play Video</small>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-8">
                            <div class="offer_area">
                                <div class="offer_image">
                                    <img src="assets/images/offer/img_02.png" alt="image_not_found">
                                </div>
                                <div class="offer_content">
                                    <div class="section_title text-uppercase">
                                        <h2 class="small_title wow fadeInUp" data-wow-delay=".1s"><i
                                                class="fas fa-coffee"></i> what we offer</h2>
                                        <h3 class="big_title wow fadeInUp" data-wow-delay=".2s">
                                            divine aroma in every single cup
                                        </h3>
                                    </div>

                                    <p class="wow fadeInUp" data-wow-delay=".3s">
                                        From a cultural standpoint, coffeehouses largely serve as centers of social
                                        interaction: the coffeehouse provides patrons with a place to congregate, talk,
                                        read, write, entertain one another, or pass the time, whether individually or in
                                        small groups.
                                    </p>
                                    <p class="mb-0 wow fadeInUp" data-wow-delay=".4s">
                                        From a cultural standpoint, coffeehouses largely serve as centers of social
                                        interaction: the coffeehouse provides patrons with a place to congregate,
                                    </p>
                                </div>
                            </div>

                            <div class="row g-0">
                                <div class="offerinfo_col col-lg-4">
                                    <div class="offer_info_item table_reservation_contact wow fadeInUp"
                                        data-wow-delay=".1s">
                                        <h3 class="offer_info_title text-uppercase">table Reservation. . . .<i
                                                class="fal fa-heart"></i></h3>
                                        <ul class="ul_li_block">
                                            <li>
                                                <div class="item_icon">
                                                    <i class="fas fa-phone"></i>
                                                </div>
                                                <div class="item_content">
                                                    <span>(008) 01869018907</span>
                                                    <span>+897 989 543 2344</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item_icon"><i class="fas fa-envelope"></i></div>
                                                <div class="item_content">
                                                    <span>info.@webmail.com</span>
                                                    <span>israfilsupol@mail.com</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item_icon"><i class="fas fa-fax"></i></div>
                                                <div class="item_content">
                                                    <span>08744,Sadar pur 8973</span>
                                                    <span>08744,Sadar pur 8973</span>
                                                </div>
                                            </li>
                                        </ul>
                                        <a class="btn btn_secondary text-uppercase" href="contact.html">Contact Us</a>
                                    </div>
                                </div>

                                <div class="offerinfo_col col-lg-4">
                                    <div class="offer_info_item opening_time text-uppercase text-white wow fadeInUp"
                                        data-wow-delay=".2s"
                                        style="background-image: url(assets/images/offer/bg_01.png);">
                                        <h3 class="offer_info_title text-white">Opening hours. . . . <i
                                                class="fal fa-clock"></i></h3>
                                        <ul class="ul_li_block">
                                            <li>
                                                Monday
                                                <span>9:00 - 18:00</span>
                                            </li>
                                            <li>
                                                tuesday
                                                <span>10:00 - 18:00</span>
                                            </li>
                                            <li>
                                                wednestday
                                                <span>11:00 - 18:00</span>
                                            </li>
                                            <li>
                                                Thusday
                                                <span>12:00 - 18:00</span>
                                            </li>
                                            <li>
                                                Friday
                                                <span>14:00 - 18:00</span>
                                            </li>
                                            <li>
                                                saterday
                                                <span>16:00 - 18:00</span>
                                            </li>
                                            <li>
                                                Sunday
                                                <span>closed</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="offerinfo_col col-lg-4">
                                    <div class="offer_info_item friday_offer text-center wow fadeInUp"
                                        data-wow-delay=".3s">
                                        <h3 class="offer_info_title text-uppercase">Friday Offer. . . . <i
                                                class="fal fa-gift"></i></h3>
                                        <img src="assets/images/offer/img_03.png" alt="image_not_found">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- offer_section - end
        ================================================== -->

            <!-- testimonial_section - start
        ================================================== -->
            <section class="testimonial_section sec_ptb_120 deco_wrap"
                style="background-image: url(assets/images/backgrounds/bg_02.png);">
                <div class="container">
                    <div class="testimonial_slider wow fadeInUp" data-wow-delay=".2s">
                        <div class="testimonial_item_1 slider_item">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="item_image">
                                        <img src="assets/images/testimonial/img_01.png" alt="image_not_found">
                                        <div class="quote_icon">
                                            <img src="assets/images/testimonial/icon_01.png" alt="image_not_found">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="item_content">
                                        <div class="section_title text-uppercase">
                                            <h3 class="small_title"><i class="fas fa-coffee"></i> Client Testimonial
                                            </h3>
                                            <h4 class="big_title">
                                                Our client say something about cafenod
                                            </h4>
                                        </div>
                                        <p>
                                            Rorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatuey.
                                        </p>
                                        <div class="testimonial_admin text-uppercase">
                                            <h5 class="admin_name">rasalina De Willamson</h5>
                                            <ul class="rating_star ul_li">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <span class="admin_title">Founder & CO</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial_item_1 slider_item">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="item_image">
                                        <img src="assets/images/testimonial/img_01.png" alt="image_not_found">
                                        <div class="quote_icon">
                                            <img src="assets/images/testimonial/icon_01.png" alt="image_not_found">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="item_content">
                                        <div class="section_title text-uppercase">
                                            <h3 class="small_title"><i class="fas fa-coffee"></i> Client Testimonial
                                            </h3>
                                            <h4 class="big_title">
                                                Our client say something about cafenod
                                            </h4>
                                        </div>
                                        <p>
                                            Rorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatuey.
                                        </p>
                                        <div class="testimonial_admin text-uppercase">
                                            <h5 class="admin_name">rasalina De Willamson</h5>
                                            <ul class="rating_star ul_li">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <span class="admin_title">Founder & CO</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial_item_1 slider_item">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="item_image">
                                        <img src="assets/images/testimonial/img_01.png" alt="image_not_found">
                                        <div class="quote_icon">
                                            <img src="assets/images/testimonial/icon_01.png" alt="image_not_found">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="item_content">
                                        <div class="section_title text-uppercase">
                                            <h3 class="small_title"><i class="fas fa-coffee"></i> Client Testimonial
                                            </h3>
                                            <h4 class="big_title">
                                                Our client say something about cafenod
                                            </h4>
                                        </div>
                                        <p>
                                            Rorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatuey.
                                        </p>
                                        <div class="testimonial_admin text-uppercase">
                                            <h5 class="admin_name">rasalina De Willamson</h5>
                                            <ul class="rating_star ul_li">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <span class="admin_title">Founder & CO</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial_item_1 slider_item">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="item_image">
                                        <img src="assets/images/testimonial/img_01.png" alt="image_not_found">
                                        <div class="quote_icon">
                                            <img src="assets/images/testimonial/icon_01.png" alt="image_not_found">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="item_content">
                                        <div class="section_title text-uppercase">
                                            <h3 class="small_title"><i class="fas fa-coffee"></i> Client Testimonial
                                            </h3>
                                            <h4 class="big_title">
                                                Our client say something about cafenod
                                            </h4>
                                        </div>
                                        <p>
                                            Rorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatuey.
                                        </p>
                                        <div class="testimonial_admin text-uppercase">
                                            <h5 class="admin_name">rasalina De Willamson</h5>
                                            <ul class="rating_star ul_li">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <span class="admin_title">Founder & CO</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="deco_item thumbnail_1 wow fadeInUp" data-wow-delay=".1s">
                    <img src="assets/images/testimonial/thumbnail_01.png" alt="image_not_found">
                </div>
                <div class="deco_item thumbnail_2 wow fadeInUp" data-wow-delay=".2s">
                    <img src="assets/images/testimonial/thumbnail_02.png" alt="image_not_found">
                </div>
                <div class="deco_item thumbnail_3 wow fadeInUp" data-wow-delay=".3s">
                    <img src="assets/images/testimonial/thumbnail_03.png" alt="image_not_found">
                </div>
                <div class="deco_item thumbnail_4 wow fadeInUp" data-wow-delay=".4s">
                    <img src="assets/images/testimonial/thumbnail_04.png" alt="image_not_found">
                </div>
            </section>
            <!-- testimonial_section - end
        ================================================== -->

            <!-- shop_section - start
        ================================================== -->
            <section class="shop_section sec_ptb_120 bg_gray">
                <div class="container">
                    <div class="section_title text-uppercase">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-8">
                                <h2 class="small_title wow fadeInUp" data-wow-delay=".1s"><i class="fas fa-coffee"></i>
                                    special online shop</h2>
                                <h3 class="big_title wow fadeInUp" data-wow-delay=".2s">
                                    Our popular product
                                </h3>
                            </div>

                            <div class="col-lg-6 col-md-4">
                                <div class="abtn_wrap text-lg-end text-md-end wow fadeInUp" data-wow-delay=".3s">
                                    <a class="btn btn_border border_black" href="shop.html">See all product</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="shop_card wow fadeInUp" data-wow-delay=".1s">
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
                                    <img src="assets/images/shop/img_01.png" alt="image_not_found">
                                </a>
                                <div class="item_content">
                                    <h3 class="item_title text-uppercase">
                                        <a href="shop_details.html">Testy coffee stimy</a>
                                    </h3>
                                    <div class="btns_group">
                                        <span class="item_price bg_default_brown">$101</span>
                                        <a class="btn btn_border border_black text-uppercase" href="#!">Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="shop_card wow fadeInUp" data-wow-delay=".2s">
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

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="shop_card wow fadeInUp" data-wow-delay=".3s">
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

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="shop_card wow fadeInUp" data-wow-delay=".1s">
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

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="shop_card wow fadeInUp" data-wow-delay=".2s">
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

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="shop_card wow fadeInUp" data-wow-delay=".3s">
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
                        </div>
                    </div>
                </div>
            </section>
            <!-- shop_section - end
        ================================================== -->

            <!-- blog_section - start
        ================================================== -->
            <section class="blog_section sec_ptb_120"
                style="background-image: url(assets/images/backgrounds/bg_03.png);">
                <div class="container">

                    <div class="section_title text-uppercase text-center">
                        <h2 class="small_title wow fadeInUp" data-wow-delay=".1s"><i class="fas fa-coffee"></i> News &
                            Blog</h2>
                        <h3 class="big_title wow fadeInUp" data-wow-delay=".2s">Latest news & Blog</h3>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="blog_grid wow fadeInUp" data-wow-delay=".1s">
                                <a class="item_image" href="blog_details.html">
                                    <img src="assets/images/blog/img_01.png" alt="image_not_found">
                                </a>
                                <div class="item_content">
                                    <h3 class="item_title text-uppercase">
                                        <a href="blog_details.html">Americano Spacial Coffee</a>
                                    </h3>
                                    <p>
                                        The coffee is brewed by first roasting the green coffee beans over hot coals in
                                        a brazier.Once the beans are roasted each participant is given...
                                    </p>
                                    <a class="btn_text text-uppercase" href="blog_details.html"><span>Read More</span>
                                        <i class="far fa-angle-double-right"></i></a>
                                    <ul class="post_meta ul_li">
                                        <li><a href="#!"><i class="fal fa-user"></i> Rasalina De</a></li>
                                        <li><a href="#!"><i class="fal fa-heart"></i> 36 like</a></li>
                                        <li><a href="#!"><i class="fal fa-comment-alt"></i> 8 comments</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="blog_grid wow fadeInUp" data-wow-delay=".2s">
                                <a class="item_image" href="blog_details.html">
                                    <img src="assets/images/blog/img_02.png" alt="image_not_found">
                                </a>
                                <div class="item_content">
                                    <h3 class="item_title text-uppercase">
                                        <a href="blog_details.html">Americano Spacial Coffee</a>
                                    </h3>
                                    <p>
                                        The coffee is brewed by first roasting the green coffee beans over hot coals in
                                        a brazier.Once the beans are roasted each participant is given...
                                    </p>
                                    <a class="btn_text text-uppercase" href="blog_details.html"><span>Read More</span>
                                        <i class="far fa-angle-double-right"></i></a>
                                    <ul class="post_meta ul_li">
                                        <li><a href="#!"><i class="fal fa-user"></i> Rasalina De</a></li>
                                        <li><a href="#!"><i class="fal fa-heart"></i> 36 like</a></li>
                                        <li><a href="#!"><i class="fal fa-comment-alt"></i> 8 comments</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="blog_grid wow fadeInUp" data-wow-delay=".3s">
                                <a class="item_image" href="blog_details.html">
                                    <img src="assets/images/blog/img_03.png" alt="image_not_found">
                                </a>
                                <div class="item_content">
                                    <h3 class="item_title text-uppercase">
                                        <a href="blog_details.html">Americano Spacial Coffee</a>
                                    </h3>
                                    <p>
                                        The coffee is brewed by first roasting the green coffee beans over hot coals in
                                        a brazier.Once the beans are roasted each participant is given...
                                    </p>
                                    <a class="btn_text text-uppercase" href="blog_details.html"><span>Read More</span>
                                        <i class="far fa-angle-double-right"></i></a>
                                    <ul class="post_meta ul_li">
                                        <li><a href="#!"><i class="fal fa-user"></i> Rasalina De</a></li>
                                        <li><a href="#!"><i class="fal fa-heart"></i> 36 like</a></li>
                                        <li><a href="#!"><i class="fal fa-comment-alt"></i> 8 comments</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="load_more text-center wow fadeInUp" data-wow-delay=".1s">
                        <a class="btn btn_border border_black text-uppercase" href="blog.html">See all Blog</a>
                    </div>

                </div>
            </section>
            <!-- blog_section - end
        ================================================== -->

        </main>
        <!-- main body - end
      ================================================== -->

        <?php include('./inc/footer.php'); ?>

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

</html>