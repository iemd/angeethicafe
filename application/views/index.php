<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from d29u17ylf1ylz9.cloudfront.net/aahar/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Apr 2018 07:58:59 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Angeethi Cafe</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicons -->
	<link rel="shortcut icon" href="<?php echo base_url('images/favicon.ico'); ?>">
	<link rel="apple-touch-icon" href="<?php echo base_url('images/icon.png'); ?>">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('css/plugins.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('style.css'); ?>">

	<!-- Cusom css -->
   <link rel="stylesheet" href="<?php echo base_url('css/custom.css'); ?>">

	<!-- Modernizer js -->
	<script src="<?php echo base_url('js/vendor/modernizr-3.5.0.min.js'); ?>"></script>
</head>
<body>
	<!-- Main wrapper -->
	<div class="wrapper" id="wrapper">
		<!-- Start Header Area -->
        <header class="htc__header bg--white">
            <!-- Start Mainmenu Area -->
            <div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-sm-4 col-md-6 order-1 order-lg-1">
                            <div class="logo">
                                <a href="index.html">
                                    <!--<img src="images/logo/foody.png" alt="logo images">-->
									<h2><i>Angeethi Cafe</i></h2>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-sm-4 col-md-2 order-3 order-lg-2">
                            <div class="main__menu__wrap">
                                <nav class="main__menu__nav d-none d-lg-block">
                                    <ul class="mainmenu">
                                        <li class="drop"><a href="index.html">Home</a>
                                            
                                        </li>
                                        <li><a href="about-us.html">About</a></li>
                                        <li class="drop"><a href="menu-grid.html">Menu</a>
                                            
                                        </li>
                                        <li><a href="gallery.html">Gallery</a></li>
                                        <li class="drop"><a href="blog-list.html">Blog</a>
                                            
                                        </li>
                                        <!--<li class="drop"><a href="#">Pages</a>
                                            <ul class="dropdown__menu">
                                                <li><a href="service.html">Service</a></li>
                                                <li><a href="cart.html">Cart Page</a></li>
                                                <li><a href="checkout.html">Checkout Page</a></li>
                                                <li><a href="contact.html">Contact Page</a></li>
                                            </ul>
                                        </li>-->
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </nav>
                                
                            </div>
                        </div>
                        <div class="col-lg-1 col-sm-4 col-md-4 order-2 order-lg-3">
                            <div class="header__right d-flex justify-content-end">
							<?php if(empty($userData)){ ?>
                                <div class="log__in">
                                    <a class="accountbox-trigger" href="#"><i class="zmdi zmdi-account-o"></i></a>
                                </div>
							<?php }else { ?>
							<div class="log__in">
							<a class="accountbox-trigger" href="#"><?php foreach($userData as $row){ echo $row['name'];  } ?></a>
                                    
                                </div>
							<?php } ?>
                                <div class="shopping__cart">
                                    <a class="minicart-trigger" href="#"><i class="zmdi zmdi-shopping-basket"></i></a>
                                    <div class="shop__qun">
                                        <span>03</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                        <div class="mobile-menu d-block d-lg-none"></div>
                    <!-- Mobile Menu -->
                </div>
            </div>
            <!-- End Mainmenu Area -->
        </header>
		<?php //print_r($userData); ?>
        <!-- End Header Area -->
        <!-- Start Slider Area -->
        <div class="slider__area slider--one">
            <div class="slider__activation--1">
                <!-- Start Single Slide -->
                <div class="slide fullscreen bg-image--1">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="slider__content">
                                    <div class="slider__inner">
									<h4 style="color:green;"><b><?php echo $this->session->flashdata('message1'); ?></b></h4>
					<h3 style="color:red;"><?php echo $this->session->flashdata('Error'); ?></h3>
                                        <h2>“Welcome to Angeethi Cafe”</h2>
                                        <h3>A complete family dine in a place with quality service &amp; taste.</h3>
                                        <div class="slider__input">
                                            <input type="text" placeholder="Type Place, City.Division">
                                            <input class="res__search" type="text" placeholder="Restaurant">
                                            <div class="src__btn">
                                                <a href="#">Search</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Slide -->
            </div>
        </div>
        <!-- End Slider Area -->
        <!-- Start Service Area -->
        <section class="fd__service__area bg-image--2 section-padding--xlg">
            <div class="container">
                <div class="service__wrapper bg--white">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="section__title service__align--left">
                                <p>The process of our service</p>
                                <h2 class="title__line">How it work</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row mt--30">
                        <!-- Start Single Service -->
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="service">
                                <div class="service__title">
                                    <div class="ser__icon">
                                        <img src="<?php echo base_url('images/icon/color-icon/1.png'); ?>" alt="icon image">
                                    </div>
                                    <h2><a href="service.html">Quality Food Taste.</a></h2>
                                </div>
                                <div class="service__details">
                                    <p>We specially take care of the taste and the perfect blend of spices into our dishes.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Service -->
                        <!-- Start Single Service -->
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="service">
                                <div class="service__title">
                                    <div class="ser__icon">
                                        <img src="<?php echo base_url('images/icon/color-icon/2.png'); ?>" alt="icon image">
                                    </div>
                                    <h2><a href="service.html">Assured 100% Satisfactory.</a></h2>
                                </div>
                                <div class="service__details">
                                    <p>We guarantee with our approach and dicipline to attend any our orders and cusine.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Service -->
                        <!-- Start Single Service -->
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="service">
                                <div class="service__title">
                                    <div class="ser__icon">
                                        <img src="<?php echo base_url('images/icon/color-icon/3.png'); ?>" alt="icon image">
                                    </div>
                                    <h2><a href="service.html">Pleasant Ambience Surrounding.</a></h2>
                                </div>
                                <div class="service__details">
                                    <p>Stress out with a busy schedule and get complete relaxation with having your meal at peace.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Service -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End Service Area -->
        <!-- Start Food Category -->
        <section class="food__category__area bg--white section-padding--lg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="section__title service__align--left">
                            
                            <h2 class="title__line">Special Offers from Angeethi</h2>
                        </div>
                    </div>
                </div>
                <div class="food__category__wrapper mt--40">
                    <div class="row">
                        <!-- Start Single Category -->
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="food__item foo">
                                <div class="food__thumb">
                                    <a href="menu-details.html">
                                        <img src="<?php echo base_url('images/product/md-product/1.jpg'); ?>" alt="product images">
                                    </a>
                                </div>
                                <div class="food__title">
                                    <h2><a href="menu-details.html">Chinese & Soups</a></h2>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Category -->
                        <!-- Start Single Category -->
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="food__item foo">
                                <div class="food__thumb">
                                    <a href="menu-details.html">
                                        <img src="<?php echo base_url('images/product/md-product/2.jpg'); ?>" alt="product images">
                                    </a>
                                </div>
                                <div class="food__title">
                                    <h2><a href="menu-details.html">Thalis</a></h2>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Category -->
                        <!-- Start Single Category -->
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="food__item foo">
                                <div class="food__thumb">
                                    <a href="menu-details.html">
                                        <img src="<?php echo base_url('images/product/md-product/3.jpg'); ?>" alt="product images">
                                    </a>
                                </div>
                                <div class="food__title">
                                    <h2><a href="menu-details.html">Dessert</a></h2>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Category -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End Food Category -->
        <!-- Start Special Menu -->
        <section class="fd__special__menu__area bg-image--3 section-pt--lg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="section__title service__align--left">
                           
                            <h2 class="title__line">Angeethi with Special Menu</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="special__food__menu mt--80">
                <div class="food__menu__prl bg-image--4">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="food__nav nav nav-tabs" role="tablist">
                                    <a class="active" id="nav-all-tab" data-toggle="tab" href="#nav-all" role="tab">All</a>
                                    <a id="nav-breakfast-tab" data-toggle="tab" href="#SHORBA" role="tab">SHORBA</a>
                                    <a id="nav-lunch-tab" data-toggle="tab" href="#STARTER" role="tab">STARTER</a>
                                    <a id="nav-dinner-tab" data-toggle="tab" href="#SALADS" role="tab">SALADS</a>
                                    <a id="nav-coffee-tab" data-toggle="tab" href="#MAIN-COURSE" role="tab">MAIN COURSE</a>
                                    <a id="nav-snacks-tab" data-toggle="tab" href="#RICE-ROTI" role="tab">RICE & ROTI</a>
									<a id="nav-coffee-tab" data-toggle="tab" href="#CHINESE-STARTER" role="tab">CHINESE STARTER</a>
                                    <a id="nav-snacks-tab" data-toggle="tab" href="#CHINESE" role="tab">CHINESE</a>
                                </div>
                                <div class="fd__tab__content tab-content" id="nav-tabContent">
                                    <!-- Start Single tab -->
                                    <!--<div class="single__tab__panel tab-pane fade show active" id="nav-all" role="tabpanel">
                                        <div class="tab__content__wrap">
                                           
                                            <div class="single__tab__content">
                                                
												<div class="food__menu">
                                                    <div class="food__menu__thumb">
                                                        <a href="menu-details.html">
                                                            <img src="<?php echo base_url('images/product/sm-img/1.jpg'); ?>" alt="product images">
                                                        </a>
                                                    </div>
                                                    <div class="food__menu__details">
                                                        <div class="fd__menu__title__prize">
                                                            <h4><a href="menu-details.html">Kabab Ghor</a></h4>
                                                            <span class="menu__prize">22</span>
                                                        </div>
                                                        <div class="fd__menu__details">
                                                            <p>Food Type : Chicken Stack</p>
                                                            <div class="delivery__time__rating">
                                                                <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                                <ul class="fd__rating">
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
											  
                                            </div>
                                            
                                            <div class="single__tab__content">
                                               
                                                <div class="food__menu">
                                                    <div class="food__menu__thumb">
                                                        <a href="menu-details.html">
                                                            <img src="<?php echo base_url('images/product/sm-img/1.jpg'); ?>" alt="product images">
                                                        </a>
                                                    </div>
                                                    <div class="food__menu__details">
                                                        <div class="fd__menu__title__prize">
                                                            <h4><a href="menu-details.html">Kabab Ghor</a></h4>
                                                            <span class="menu__prize">22</span>
                                                        </div>
                                                        <div class="fd__menu__details">
                                                            <p>Food Type : Chicken Stack</p>
                                                            <div class="delivery__time__rating">
                                                                <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                                <ul class="fd__rating">
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                            </div>
                                            
                                        </div>
                                    </div>-->
                                    
                                    <div class="single__tab__panel tab-pane fade" id="SHORBA" role="tabpanel">
                                        <div class="tab__content__wrap">
                                            <!-- Start Single Tab Content -->
                                            <div class="single__tab__content">
                                                <!-- Start Single Food -->
												<div class="row mt--40">
                                                <?php foreach($shorba as $row) { ?>
												<?php //print_r($row); die;?>
                                               
												<!------------------>
												
												<div class="col-md-6 col-sm-12 foo" style="margin-top:20px;">
                        <div class="food__menu" style="width:500px;">
                                                    <div class="food__menu__thumb">
                                                        <a href="menu-details.html">
                                                            <img style="height:105px; width:109px;" src="<?php echo base_url(''); ?>uploads/<?php echo $row['prod_img'];?>" alt="product images">
                                                        </a>
                                                    </div>
                                                    <div class="food__menu__details">
                                                        <div class="fd__menu__title__prize">
                                                            <h4><a href="menu-details.html"><?php echo $row['prod_name'];?></a></h4>
                                                            <span class="menu__prize"><?php echo $row['base_price'];?></span>
                                                        </div>
                                                       <div class="fd__menu__details">
                                                            <p>Food Type : <?php echo $row['type'];?></p>
                                                            <div class="delivery__time__rating">
                                                                <p>Delivery Time : <?php echo $row['delivery_time'];?>, </p>
                                                                <ul class="fd__rating">
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                    </div>
					
					
												<?php } ?>
                                                
                                            </div></div>
                                            <!-- End Single Tab Content -->
                                            <!-- Start Single Tab Content -->
                                            
                                            <!-- End Single Tab Content -->
                                        </div>
                                    </div>
                                    <!-- End Single tab -->
                                    <!-- Start Single tab -->
                                    <div class="single__tab__panel tab-pane fade" id="STARTER" role="tabpanel">
                                        <div class="tab__content__wrap">
                                            <!-- Start Single Tab Content -->
                                            <div class="single__tab__content">
                                                <!-- Start Single Food -->
                                                <?php foreach($starter as $row) { ?>
												<?php //print_r($row); die;?>
                                                <div class="food__menu">
                                                    <div class="food__menu__thumb">
                                                        <a href="menu-details.html">
                                                            <img style="height:105px; width:109px;" src="<?php echo base_url(''); ?>uploads/<?php echo $row['prod_img'];?>" alt="product images">
                                                        </a>
                                                    </div>
                                                    <div class="food__menu__details">
                                                        <div class="fd__menu__title__prize">
                                                            <h4><a href="menu-details.html"><?php echo $row['prod_name'];?></a></h4>
                                                            <span class="menu__prize"><?php echo $row['base_price'];?></span>
                                                        </div>
                                                        <div class="fd__menu__details">
                                                            <p>Food Type : <?php echo $row['type'];?></p>
                                                            <div class="delivery__time__rating">
                                                                <p>Delivery Time : <?php echo $row['delivery_time'];?>, Delivery Cost : Free</p>
                                                                <ul class="fd__rating">
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
												<?php } ?>
                                                
                                            </div>
                                            <!-- End Single Tab Content -->
                                        </div>
                                    </div>
                                    <!-- End Single tab -->
                                    <!-- Start Single tab -->
                                    <div class="single__tab__panel tab-pane fade" id="SALADS" role="tabpanel">
                                        <div class="tab__content__wrap">
                                            <!-- Start Single Tab Content -->
                                            <div class="single__tab__content">
											
											
                                                <!-- Start Single Food -->
												
												
												<div class="row mt--50">
                                                 <?php foreach($salads as $row) { ?>
												<?php //print_r($row); die;?>
												
												
                                               
					
					
					
					
					
					<div class="col-md-6 col-sm-12 foo" style="margin-top:30px;">
                        <div class="food__menu">
                                                    <div class="food__menu__thumb">
                                                        <a href="menu-details.html">
                                                            <img style="height:105px; width:109px;" src="<?php echo base_url(''); ?>uploads/<?php echo $row['prod_img'];?>" alt="product images">
                                                        </a>
                                                    </div>
                                                    <div class="food__menu__details">
                                                        <div class="fd__menu__title__prize">
                                                            <h4><a href="menu-details.html">Kabab Ghor</a></h4>
                                                            <span class="menu__prize">22</span>
                                                        </div>
                                                        <div class="fd__menu__details">
                                                            <p>Food Type : Chicken Stack</p>
                                                            <div class="delivery__time__rating">
                                                                <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                                <ul class="fd__rating">
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                    </div>
					
					
					
																
												<?php } ?>
                                                 </div>
                                               
                                            </div>
                                            <!-- End Single Tab Content -->
                                            <!-- Start Single Tab Content -->
                                            
                                            <!-- End Single Tab Content -->
                                        </div>
                                    </div>
                                    <!-- End Single tab -->
                                    <!-- Start Single tab -->
                                    <div class="single__tab__panel tab-pane fade" id="MAIN-COURSE"" role="tabpanel">
                                        <div class="tab__content__wrap">
                                            <!-- Start Single Tab Content -->
                                            <div class="single__tab__content">
                                                <!-- Start Single Food -->
                                                <?php foreach($MainCourse as $row) { ?>
												<?php //print_r($row); die;?>
                                                <div class="food__menu">
                                                    <div class="food__menu__thumb">
                                                        <a href="menu-details.html">
                                                            <img style="height:105px; width:109px;" src="<?php echo base_url(''); ?>uploads/<?php echo $row['prod_img'];?>" alt="product images">
                                                        </a>
                                                    </div>
                                                    <div class="food__menu__details">
                                                        <div class="fd__menu__title__prize">
                                                            <h4><a href="menu-details.html"><?php echo $row['prod_name'];?></a></h4>
                                                            <span class="menu__prize"><?php echo $row['base_price'];?></span>
                                                        </div>
                                                        <div class="fd__menu__details">
                                                            <p>Food Type : <?php echo $row['type'];?></p>
                                                            <div class="delivery__time__rating">
                                                                <p>Delivery Time : <?php echo $row['delivery_time'];?>, Delivery Cost : Free</p>
                                                                <ul class="fd__rating">
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
												<?php } ?>
                                                
                                                
                                                <!-- End Single Food -->
                                            </div>
                                            <!-- End Single Tab Content -->
                                        </div>
                                    </div>
                                    <!-- End Single tab -->
                                    <!-- Start Single tab -->
                                    <div class="single__tab__panel tab-pane fade" id="RICE-ROTI" role="tabpanel">
                                        <div class="tab__content__wrap">
                                            <!-- Start Single Tab Content -->
                                            <div class="single__tab__content">
                                                <!-- Start Single Food -->
                                                <?php foreach($RiceRoti as $row) { ?>
												<?php //print_r($row); die;?>
                                                <div class="food__menu">
                                                    <div class="food__menu__thumb">
                                                        <a href="menu-details.html">
                                                            <img style="height:105px; width:109px;" src="<?php echo base_url(''); ?>uploads/<?php echo $row['prod_img'];?>" alt="product images">
                                                        </a>
                                                    </div>
                                                    <div class="food__menu__details">
                                                        <div class="fd__menu__title__prize">
                                                            <h4><a href="menu-details.html"><?php echo $row['prod_name'];?></a></h4>
                                                            <span class="menu__prize"><?php echo $row['base_price'];?></span>
                                                        </div>
                                                        <div class="fd__menu__details">
                                                            <p>Food Type : <?php echo $row['type'];?></p>
                                                            <div class="delivery__time__rating">
                                                                <p>Delivery Time : <?php echo $row['delivery_time'];?>, Delivery Cost : Free</p>
                                                                <ul class="fd__rating">
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
												<?php } ?>
                                                
                                               
                                            </div>
                                            <!-- End Single Tab Content -->
                                            <!-- Start Single Tab Content -->
                                            
                                            <!-- End Single Tab Content -->
                                        </div>
                                    </div>
									
									<div class="single__tab__panel tab-pane fade" id="CHINESE-STARTER" role="tabpanel">
                                        <div class="tab__content__wrap">
                                            <!-- Start Single Tab Content -->
                                            <div class="single__tab__content">
                                                <!-- Start Single Food -->
                                                <?php foreach($ChineseStarter as $row) { ?>
												<?php //print_r($row); die;?>
                                                <div class="food__menu">
                                                    <div class="food__menu__thumb">
                                                        <a href="menu-details.html">
                                                            <img style="height:105px; width:109px;" src="<?php echo base_url(''); ?>uploads/<?php echo $row['prod_img'];?>" alt="product images">
                                                        </a>
                                                    </div>
                                                    <div class="food__menu__details">
                                                        <div class="fd__menu__title__prize">
                                                            <h4><a href="menu-details.html"><?php echo $row['prod_name'];?></a></h4>
                                                            <span class="menu__prize"><?php echo $row['base_price'];?></span>
                                                        </div>
                                                        <div class="fd__menu__details">
                                                            <p>Food Type : <?php echo $row['type'];?></p>
                                                            <div class="delivery__time__rating">
                                                                <p>Delivery Time : <?php echo $row['delivery_time'];?>, Delivery Cost : Free</p>
                                                                <ul class="fd__rating">
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
												<?php } ?>
                                                
                                               
                                            </div>
                                            <!-- End Single Tab Content -->
                                            <!-- Start Single Tab Content -->
                                            
                                            <!-- End Single Tab Content -->
                                        </div>
                                    </div>
									
									
									<div class="single__tab__panel tab-pane fade" id="CHINESE" role="tabpanel">
                                        <div class="tab__content__wrap">
                                            <!-- Start Single Tab Content -->
                                            <div class="single__tab__content">
                                                <!-- Start Single Food -->
                                                <?php foreach($Chinese as $row) { ?>
												<?php //print_r($row); die;?>
                                                <div class="food__menu">
                                                    <div class="food__menu__thumb">
                                                        <a href="menu-details.html">
                                                            <img style="height:105px; width:109px;" src="<?php echo base_url(''); ?>uploads/<?php echo $row['prod_img'];?>" alt="product images">
                                                        </a>
                                                    </div>
                                                    <div class="food__menu__details">
                                                        <div class="fd__menu__title__prize">
                                                            <h4><a href="menu-details.html"><?php echo $row['prod_name'];?></a></h4>
                                                            <span class="menu__prize"><?php echo $row['base_price'];?></span>
                                                        </div>
                                                        <div class="fd__menu__details">
                                                            <p>Food Type : <?php echo $row['type'];?></p>
                                                            <div class="delivery__time__rating">
                                                                <p>Delivery Time : <?php echo $row['delivery_time'];?>, Delivery Cost : Free</p>
                                                                <ul class="fd__rating">
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
												<?php } ?>
                                                
                                               
                                            </div>
                                            <!-- End Single Tab Content -->
                                            <!-- Start Single Tab Content -->
                                            
                                            <!-- End Single Tab Content -->
                                        </div>
                                    </div>
                                    <!-- End Single tab -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>      
        <!-- End Special Menu -->
        <!-- Start Download App Area -->
        <!--<section class="food__download__app__area section-padding--lg bg--white bg__shape--1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="section__title service__align--left">
                            <p>the process of our service </p>
                            <h2 class="title__line">Download our app</h2>
                        </div>
                    </div>
                </div>
                <div class="row mt--80">
                    <div class="col-lg-12 poss--relative">
                        <div class="app__download__container">
                            <div class="app__download__inner inline__image__css--1" style="background-image: url(images/app/bg.png);">
                                <h2>Aahar now in your hand</h2>
                                <h6>Download! to get this app Faster way to order food</h6>
                            </div>
                            <ul class="dwn__app__list">
                                <li class="wow lightSpeedIn" data-wow-delay="0.2s"><a href="#"><img src="images/app/2.png" alt="app images"></a></li>
                                <li class="wow lightSpeedIn" data-wow-delay="0.3s"><a href="#"><img src="images/app/3.png" alt="app images"></a></li>
                            </ul>
                        </div>
                        <div class="app__phone wow fadeInLeft" data-wow-delay="0.2s">
                            <img src="images/app/1.png" alt="app images">
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
        <!-- End Download App Area -->
        <!-- Start Testimonail Area -->
        <section class="fd__testimonial__area section-padding--lg bg-image--5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-md-12 col-sm-12">
                        <div class="testimonial__activation--1 text-center bg--white owl-carousel owl-theme clearfix">
                            <!-- Start Single Testimonial -->
                            <div class="testimonial">
                                <div class="testimonial__thumb">
                                    <img src="<?php echo base_url('images/testimonial/clint/1.png'); ?>" alt="testimonial images">
                                </div>
                                <div class="testimonial__details">
                                    <h4>Mily Cyrus</h4>
                                    <h6>Food Expert</h6>
                                    <p>Lorem ipsum dolor sit amconsectetuadipisicing elit, kjjnin khk seeiusmod tempor incididunt ut labore et dolore maaliqua. Ut enim ad minim veniam,</p>
                                </div>
                            </div>
                            <!-- End Single Testimonial -->
                            <!-- Start Single Testimonial -->
                            <div class="testimonial">
                                <div class="testimonial__thumb">
                                    <img src="<?php echo base_url('images/testimonial/clint/1.png'); ?>" alt="testimonial images">
                                </div>
                                <div class="testimonial__details">
                                    <h4>Mily Cyrus</h4>
                                    <h6>Food Expert</h6>
                                    <p>Lorem ipsum dolor sit amconsectetuadipisicing elit, kjjnin khk seeiusmod tempor incididunt ut labore et dolore maaliqua. Ut enim ad minim veniam,</p>
                                </div>
                            </div>
                            <!-- End Single Testimonial -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Testimonail Area -->
        <!-- Start Blog Area -->
        <section class="fb__blog__ara section-padding--lg bg--white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="section__title service__align--left">
                            <p>the process of our service </p>
                            <h2 class="title__line">Latest from Blog</h2>
                        </div>
                    </div>
                </div>
                <div class="row mt--40">
                    <!-- Start Single Blog -->
                    <div class="col-md-6 col-lg-4 col-sm-12 foo">
                        <div class="blog">
                            <div class="blog__thumb">
                                <a href="blog-details.html">
                                    <img src="<?php echo base_url('images/blog/md-blog/1.jpg'); ?>" alt="blog images">
                                </a>
                            </div>
                            <div class="blog__details">
                                <h2><a href="blog-details.html">Maxican Food Fev</a></h2>
                                <span>1st Feb, 2o17</span>
                                <p>Lorem ipsum dolor sit amadipisicing elit, seddo eiusmoddolore magna aliqua. Ut enim ad miveniam, quis noion ullamco laboris nisi umt aliquip ex ea cequat.</p>
                                <div class="blog__btn">
                                    <a class="food__btn btn--green theme--hover" href="blog-details.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Start Single Blog -->
                    <!-- Start Single Blog -->
                    <div class="col-md-6 col-lg-4 col-sm-12 foo">
                        <div class="blog">
                            <div class="blog__thumb">
                                <a href="blog-details.html">
                                    <img src="<?php echo base_url('images/blog/md-blog/2.jpg'); ?>" alt="blog images">
                                </a>
                            </div>
                            <div class="blog__details">
                                <h2><a href="blog-details.html">Italian Pizza Fev</a></h2>
                                <span>1st jan, 2o17</span>
                                <p>Lorem ipsum dolor sit amadipisicing elit, seddo eiusmoddolore magna aliqua. Ut enim ad miveniam, quis noion ullamco laboris nisi umt aliquip ex ea cequat.</p>
                                <div class="blog__btn">
                                    <a class="food__btn btn--green theme--hover" href="blog-details.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
					
                    <!-- Start Single Blog -->
                    <!-- Start Single Blog -->
                    <div class="col-md-6 col-lg-4 col-sm-12 foo">
                        <div class="blog">
                            <div class="blog__thumb">
                                <a href="blog-details.html">
                                    <img src="<?php echo base_url('images/blog/md-blog/3.jpg'); ?>" alt="blog images">
                                </a>
                            </div>
                            <div class="blog__details">
                                <h2><a href="blog-details.html">Asian Food Fev</a></h2>
                                <span>1st Dec, 2o17</span>
                                <p>Lorem ipsum dolor sit amadipisicing elit, seddo eiusmoddolore magna aliqua. Ut enim ad miveniam, quis noion ullamco laboris nisi umt aliquip ex ea cequat.</p>
                                <div class="blog__btn">
                                    <a class="food__btn btn--green theme--hover" href="blog-details.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Start Single Blog -->
                </div>
            </div>
        </section>
        <!-- End Blog Area -->
        <!-- Start Subscribe Area -->
        <section class="fd__subscribe__area bg-image--6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="subscribe__inner">
                            <h2>Subscribe to our newsletter</h2>
                            <div id="mc_embed_signup">
                                <div id="enter__email__address">
                                    <form action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                        <div id="mc_embed_signup_scroll" class="htc__news__inner">
                                            <div class="news__input">
                                                <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Enter Your E-mail Address" required>
                                            </div>
                                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                                            <div class="clearfix subscribe__btn"><input type="submit" value="Send Now" name="subscribe" id="mc-embedded-subscribe" class="sign__up food__btn">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Subscribe Area -->
        <!-- Start Footer Area -->
        <footer class="footer__area footer--1">
            <div class="footer__wrapper bg__cat--1 section-padding--lg">
                <div class="container">
                    <div class="row">
                        <!-- Start Single Footer -->
                        <div class="col-md-6 col-lg-3 col-sm-12">
                            <div class="footer">
                                <h2 class="ftr__title">About Angeethi</h2>
                                <div class="footer__inner">
                                    <div class="ftr__details">
                                        <p></p>
                                        <div class="ftr__address__inner">
                                            <div class="ftr__address">
                                                <div class="ftr__address__icon">
                                                    <i class="zmdi zmdi-home"></i>
                                                </div>
                                                <div class="frt__address__details">
                                                    <p>Opp. Bijli Office, Raghopur Bihta, Patna – 800103. Bihar</p>
                                                </div>
                                            </div>
                                            <div class="ftr__address">
                                                <div class="ftr__address__icon">
                                                    <i class="zmdi zmdi-phone"></i>
                                                </div>
                                                <div class="frt__address__details">
                                                    <p><a href="#">06115-252222</a></p>
                                                    <p><a href="#">077639-99400</a></p>
                                                </div>
                                            </div>
                                            <div class="ftr__address">
                                                <div class="ftr__address__icon">
                                                    <i class="zmdi zmdi-email"></i>
                                                </div>
                                                <div class="frt__address__details">
                                                    <p><a href="#">info@angeethicafe.co.in

</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="social__icon">
                                            <li><a href="https://www.facebook.com/pages/Angeethi/1060845154012492"><i class="zmdi zmdi-facebook"></i></a></li>
                                            <li><a href="https://www.google.co.in/maps/uv?hl=en&pb=!1s0x398d55e66b295e19:0xf8c910cf1ebcfd87!2m22!2m2!1i80!2i80!3m1!2i20!16m16!1b1!2m2!1m1!1e1!2m2!1m1!1e3!2m2!1m1!1e5!2m2!1m1!1e4!2m2!1m1!1e6!3m1!7e115!4shttps://lh5.googleusercontent.com/p/AF1QipORTQpf2EsBuFNeWwIa9kpk1GCgrhiAK4vlPpjP%3Dw284-h160-k-no!5sangeethi+restaurant+bihta+-+Google+Search&imagekey=!1e10!2sAF1QipORTQpf2EsBuFNeWwIa9kpk1GCgrhiAK4vlPpjP&sa=X&ved=0ahUKEwjX8YjKhNvZAhWHuo8KHcJmBywQoioIiQEwCg"><i class="zmdi zmdi-google"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-instagram"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-rss"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Footer -->
                        <!-- Start Single Footer -->
                        <div class="col-md-6 col-lg-3 col-sm-12 sm--mt--40">
                            <div class="footer gallery">
                                <h2 class="ftr__title">Our Gallery</h2>
                                <div class="footer__inner">
                                    <ul class="sm__gallery__list">
                                        <li><a href="#"><img src="<?php echo base_url('images/gallery/sm-img/1.jpg'); ?>" alt="gallery images"></a></li>
                                        <li><a href="#"><img src="<?php echo base_url('images/gallery/sm-img/2.jpg'); ?>" alt="gallery images"></a></li>
                                        <li><a href="#"><img src="<?php echo base_url('images/gallery/sm-img/3.jpg'); ?>" alt="gallery images"></a></li>
                                        <li><a href="#"><img src="<?php echo base_url('images/gallery/sm-img/4.jpg'); ?>" alt="gallery images"></a></li>
                                        <li><a href="#"><img src="<?php echo base_url('images/gallery/sm-img/5.jpg'); ?>" alt="gallery images"></a></li>
                                        <li><a href="#"><img src="<?php echo base_url('images/gallery/sm-img/6.jpg'); ?>" alt="gallery images"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Footer -->
                        <!-- Start Single Footer -->
                        <div class="col-md-6 col-lg-3 col-sm-12 md--mt--40 sm--mt--40">
                            <div class="footer">
                                <h2 class="ftr__title">Opening Time</h2>
                                <div class="footer__inner">
                                    <ul class="opening__time__list">
                                        <li>Saturday<span>.......</span>9am to 11pm</li>
                                        <li>Sunday<span>.......</span>9am to 11pm</li>
                                        <li>Monday<span>.......</span>9am to 11pm</li>
                                        <li>Tuesday<span>.......</span>9am to 11pm</li>
                                        <li>Wednesday<span>.......</span>9am to 11pm</li>
                                        <li>Thursday<span>.......</span>9am to 11pm</li>
                                        <li>Friday<span>.......</span>9am to 11pm</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Footer -->
                        <!-- Start Single Footer -->
                        <div class="col-md-6 col-lg-3 col-sm-12 md--mt--40 sm--mt--40">
                            <div class="footer">
                                <h2 class="ftr__title">Latest Post</h2>
                                <div class="footer__inner">
                                    <div class="lst__post__list">
                                        <div class="single__sm__post">
                                            <div class="sin__post__thumb">
                                                <a href="blog-details%2chtml">
                                                    <img src="images/blog/sm-img/1.jpg" alt="blog images">
                                                </a>
                                            </div>
                                            <div class="sin__post__details">
                                                <h6><a href="blog-details.html">Chicken Shawarma </a></h6>
                                                <p>Lordo loram consecte turadip isicing</p>
                                            </div>
                                        </div>
                                        <div class="single__sm__post">
                                            <div class="sin__post__thumb">
                                                <a href="blog-details%2chtml">
                                                    <img src="images/blog/sm-img/2.jpg" alt="blog images">
                                                </a>
                                            </div>
                                            <div class="sin__post__details">
                                                <h6><a href="blog-details.html">Fruits Desert</a></h6>
                                                <p>Lordo loramcon secte turadipi sicing</p>
                                            </div>
                                        </div>
                                        <div class="single__sm__post">
                                            <div class="sin__post__thumb">
                                                <a href="blog-details%2chtml">
                                                    <img src="images/blog/sm-img/3.jpg" alt="blog images">
                                                </a>
                                            </div>
                                            <div class="sin__post__details">
                                                <h6><a href="blog-details.html">Vanilla Pastry</a></h6>
                                                <p>Lordo loramcon secte turadip isicing</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Footer -->
                    </div>
                </div>
            </div>
            <div class="copyright bg--theme">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="copyright__inner">
                                <div class="cpy__right--left">
                                    <p>@All Right Reserved. <a href="http://aytis.in/">AYTIS CLOUD SOLUTIONS PVT. LTD.</a></p>
                                </div>
                                <div class="cpy__right--right">
                                    <a href="#">
                                        <img src="images/icon/shape/2.png" alt="payment images">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer Area -->
        <!-- Login Form -->
        <div class="accountbox-wrapper">
            <div class="accountbox text-left">
                <ul class="nav accountbox__filters" id="myTab" role="tablist">
                    <li>
                        <a class="active" id="log-tab" data-toggle="tab" href="#log" role="tab" aria-controls="log" aria-selected="true">Login</a>
                    </li>
                    <li>
                        <a id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Register</a>
                    </li>
                </ul>
				
                <div class="accountbox__inner tab-content" id="myTabContent">
                    <div class="accountbox__login tab-pane fade show active" id="log" role="tabpanel" aria-labelledby="log-tab">
                        <form action="<?php echo base_url(); ?>Home/adminloginAction/" method="post">
                            <div class="single-input">
                                <input class="cr-round--lg" name="email" id="email" type="text" placeholder="User name or email">
                            </div>
                            <div class="single-input">
                                <input class="cr-round--lg" name="password" id="password" type="password" placeholder="Password">
                            </div>
                            <div class="single-input">
                                <button type="submit" class="food__btn"><span>Go</span></button>
                            </div>
                            <div class="accountbox-login__others">
                                <h6>Or login with</h6>
                                <div class="social-icons">
                                    <ul>
                                        <li class="facebook"><a href="https://www.facebook.com/pages/Angeethi/1060845154012492"><i class="fa fa-facebook"></i></a></li>
                                        <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li class="pinterest"><a href="https://www.google.co.in/maps/uv?hl=en&pb=!1s0x398d55e66b295e19:0xf8c910cf1ebcfd87!2m22!2m2!1i80!2i80!3m1!2i20!16m16!1b1!2m2!1m1!1e1!2m2!1m1!1e3!2m2!1m1!1e5!2m2!1m1!1e4!2m2!1m1!1e6!3m1!7e115!4shttps://lh5.googleusercontent.com/p/AF1QipORTQpf2EsBuFNeWwIa9kpk1GCgrhiAK4vlPpjP%3Dw284-h160-k-no!5sangeethi+restaurant+bihta+-+Google+Search&imagekey=!1e10!2sAF1QipORTQpf2EsBuFNeWwIa9kpk1GCgrhiAK4vlPpjP&sa=X&ved=0ahUKEwjX8YjKhNvZAhWHuo8KHcJmBywQoioIiQEwCg"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="accountbox__register tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <form action="<?php echo base_url(); ?>Home/Register/" method="post">
                            <div class="single-input">
                                <input class="cr-round--lg" name="name" id="name" type="text" placeholder="User name">
                            </div>
                            <div class="single-input">
                                <input class="cr-round--lg" name="email" id="email" type="email" placeholder="Email address">
                            </div>
                            <div class="single-input">
                                <input class="cr-round--lg" name="number" id="number" type="text" placeholder="Mobile Number">
                            </div>
                            <!--<div class="single-input">
                                <input class="cr-round--lg" type="password" placeholder="Confirm password">
                            </div>-->
                            <div class="single-input">
                                <button type="submit" class="food__btn"><span>Sign Up</span></button>
                            </div>
                        </form>
                    </div>
                    <span class="accountbox-close-button"><i class="zmdi zmdi-close"></i></span>
                </div>
            </div>
        </div><!-- //Login Form -->
            <!-- Cartbox -->
        <div class="cartbox-wrap">
            <div class="cartbox text-right">
                <button class="cartbox-close"><i class="zmdi zmdi-close"></i></button>
                <div class="cartbox__inner text-left">
                    <div class="cartbox__items">
                        <!-- Cartbox Single Item -->
                        <div class="cartbox__item">
                            <div class="cartbox__item__thumb">
                                <a href="product-details.html">
                                    <img src="images/blog/sm-img/1.jpg" alt="small thumbnail">
                                </a>
                            </div>
                            <div class="cartbox__item__content">
                                <h5><a href="product-details.html" class="product-name">Vanila Muffin</a></h5>
                                <p>Qty: <span>01</span></p>
                                <span class="price">15</span>
                            </div>
                            <button class="cartbox__item__remove">
                                <i class="fa fa-trash"></i>
                            </button>
                        </div><!-- //Cartbox Single Item -->
                        <!-- Cartbox Single Item -->
                        <div class="cartbox__item">
                            <div class="cartbox__item__thumb">
                                <a href="product-details.html">
                                    <img src="images/blog/sm-img/2.jpg" alt="small thumbnail">
                                </a>
                            </div>
                            <div class="cartbox__item__content">
                                <h5><a href="product-details.html" class="product-name">Wheat Bread</a></h5>
                                <p>Qty: <span>01</span></p>
                                <span class="price">25</span>
                            </div>
                            <button class="cartbox__item__remove">
                                <i class="fa fa-trash"></i>
                            </button>
                        </div><!-- //Cartbox Single Item -->
                        <!-- Cartbox Single Item -->
                        <div class="cartbox__item">
                            <div class="cartbox__item__thumb">
                                <a href="product-details.html">
                                    <img src="images/blog/sm-img/3.jpg" alt="small thumbnail">
                                </a>
                            </div>
                            <div class="cartbox__item__content">
                                <h5><a href="product-details.html" class="product-name">Mixed Fruits Pie</a></h5>
                                <p>Qty: <span>01</span></p>
                                <span class="price">30</span>
                            </div>
                            <button class="cartbox__item__remove">
                                <i class="fa fa-trash"></i>
                            </button>
                        </div><!-- //Cartbox Single Item -->
                    </div>
                    <div class="cartbox__total">
                        <ul>
                            <li><span class="cartbox__total__title">Subtotal</span><span class="price">70</span></li>
                            <li class="shipping-charge"><span class="cartbox__total__title">Shipping Charge</span><span class="price">05</span></li>
                            <li class="grandtotal">Total<span class="price">75</span></li>
                        </ul>
                    </div>
                    <div class="cartbox__buttons">
                        <a class="food__btn" href="cart.html"><span>View cart</span></a>
                        <a class="food__btn" href="checkout.html"><span>Checkout</span></a>
                    </div>
                </div>
            </div>
        </div><!-- //Cartbox -->  
	</div><!-- //Main wrapper -->

	<!-- JS Files -->
	<script src="<?php echo base_url('js/vendor/jquery-3.2.1.min.js'); ?>"></script>
	<script src="<?php echo base_url('js/popper.min.js'); ?>"></script>
	<script src="<?php echo base_url('js/bootstrap.min.js'); ?>"></script>
	<script src="<?php echo base_url('js/plugins.js'); ?>"></script>
	<script src="<?php echo base_url('js/active.js'); ?>"></script>
</body>

<!-- Mirrored from d29u17ylf1ylz9.cloudfront.net/aahar/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Apr 2018 07:59:19 GMT -->
</html>
