<?php
// Include config file
require_once "db/index.php";
$pt = "Our Web Projects";
$ds = "Snipnetworks we bring good projects to life";
$kw = "Snipnetworks, snipnet";
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'include/head.php'; ?>
<body class="home1 mutlti-vendor">
<?php
include 'include/menu.php';
include 'include/hero.php';
?>
<!--================================
    START FILTER AREA
=================================-->
<div class="filter-area product-filter-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="filter-bar">
                    <div class="filter__option filter--dropdown">
                        <a href="#" id="drop1" class="dropdown-trigger dropdown-toggle" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">Categories
                            <span class="icon-arrow-down"></span>
                        </a>
                        <ul class="custom_dropdown custom_drop2 dropdown-menu" aria-labelledby="drop1">
                            <li>
                                <a href="#">Wordpress
                                    <span>35</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">Landing Page
                                    <span>45</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">Psd Template
                                    <span>13</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">Plugins
                                    <span>08</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">HTML Template
                                    <span>34</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">Components
                                    <span>78</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- end /.filter__option -->

                    <div class="filter__option filter--dropdown">
                        <a href="#" id="drop2" class="dropdown-trigger dropdown-toggle" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">Filter By
                            <span class="icon-arrow-down"></span>
                        </a>
                        <ul class="custom_dropdown dropdown-menu" aria-labelledby="drop2">
                            <li>
                                <a href="#">Trending items</a>
                            </li>
                            <li>
                                <a href="#">Popular items</a>
                            </li>
                            <li>
                                <a href="#">New items </a>
                            </li>
                            <li>
                                <a href="#">Best seller </a>
                            </li>
                            <li>
                                <a href="#">Best rating </a>
                            </li>
                        </ul>
                    </div>
                    <!-- end /.filter__option -->

                    <div class="filter__option filter--dropdown filter--range">
                        <a href="#" id="drop3" class="dropdown-trigger dropdown-toggle" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">Price Range
                            <span class="icon-arrow-down"></span>
                        </a>
                        <div class="custom_dropdown dropdown-menu" aria-labelledby="drop3">
                            <div class="range-slider price-range"></div>

                            <div class="price-ranges">
                                <span class="from rounded">$30</span>
                                <span class="to rounded">$300</span>
                            </div>
                        </div>
                    </div>
                    <!-- end /.filter__option -->

                    <div class="filter__option filter--select">
                        <div class="select-wrap">
                            <select name="price">
                                <option value="12">12 Items per page</option>
                                <option value="15">15 Items per page</option>
                                <option value="25">25 Items per page</option>
                            </select>
                            <span class="icon-arrow-down"></span>
                        </div>
                    </div>
                    <!-- end /.filter__option -->
                </div>
                <!-- end /.filter-bar -->
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end filter-bar -->
    </div>
</div>
<!-- end /.filter-area -->
<!--================================
    END FILTER AREA
=================================-->

<!--================================
    START Product Grid
=================================-->
<section class="product-grid p-bottom-100">
    <div class="container">
        <div class="row">
            <!-- Start .product-list -->
            <div class="col-md-12 product-list">
                <div class="row">
                    <!-- Start .col-md-4 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="product-single latest-single">
                            <div class="product-thumb">
                                <figure>
                                    <img src="images/product1.png" alt="" class="img-fluid">
                                    <figcaption>
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="">
                                                    <span class="icon-basket"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">Live Demo</a>
                                            </li>
                                        </ul>
                                    </figcaption>
                                </figure>
                            </div>
                            <!-- Ends: .product-thumb -->
                            <div class="product-excerpt">
                                <h5>
                                    <a href="">E-commerce Shopping Cart</a>
                                </h5>
                                <ul class="titlebtm">
                                    <li>
                                        <img class="auth-img" src="images/auth-img2.png" alt="author image">
                                        <p>
                                            <a href="#">Theme-Valley</a>
                                        </p>
                                    </li>
                                    <li class="product_cat">
                                        in
                                        <a href="#">WordPress</a>
                                    </li>
                                </ul>
                                <ul class="product-facts clearfix">
                                    <li class="price">$20</li>
                                    <li class="sells">
                                        <span class="icon-basket"></span>81
                                    </li>
                                    <li class="product-fav">
                                        <span class="icon-heart" title="Add to collection" data-toggle="tooltip"></span>
                                    </li>
                                    <li class="product-rating">
                                        <ul class="list-unstyled">
                                            <li class="stars">
                                                    <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- Ends: .product-excerpt -->
                        </div>
                        <!-- Ends: .product-single -->
                    </div>
                    <!-- Ends: .col-md-4 -->
                    <!-- Start .col-md-4 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="product-single latest-single">
                            <div class="product-thumb">
                                <figure>
                                    <img src="images/product2.png" alt="" class="img-fluid">
                                    <figcaption>
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="">
                                                    <span class="icon-basket"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">Live Demo</a>
                                            </li>
                                        </ul>
                                    </figcaption>
                                </figure>
                            </div>
                            <!-- Ends: .product-thumb -->
                            <div class="product-excerpt">
                                <h5>
                                    <a href="">TheBizz Wordpress Theme</a>
                                </h5>
                                <ul class="titlebtm">
                                    <li>
                                        <img class="auth-img" src="images/auth-img3.png" alt="author image">
                                        <p>
                                            <a href="#">AazzTech</a>
                                        </p>
                                    </li>
                                    <li class="product_cat">
                                        in
                                        <a href="#">WordPress</a>
                                    </li>
                                </ul>
                                <ul class="product-facts clearfix">
                                    <li class="price">$49</li>
                                    <li class="sells">
                                        <span class="icon-basket"></span>71
                                    </li>
                                    <li class="product-fav">
                                        <span class="icon-heart" title="Add to collection" data-toggle="tooltip"></span>
                                    </li>
                                    <li class="product-rating">
                                        <ul class="list-unstyled">
                                            <li class="stars">
                                                    <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- Ends: .product-excerpt -->
                        </div>
                        <!-- Ends: .product-single -->
                    </div>
                    <!-- Ends: .col-md-4 -->
                    <!-- Start .col-md-4 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="product-single latest-single">
                            <div class="product-thumb">
                                <figure>
                                    <img src="images/product3.png" alt="" class="img-fluid">
                                    <figcaption>
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="">
                                                    <span class="icon-basket"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">Live Demo</a>
                                            </li>
                                        </ul>
                                    </figcaption>
                                </figure>
                            </div>
                            <!-- Ends: .product-thumb -->
                            <div class="product-excerpt">
                                <h5>
                                    <a href="">DigiPro EDD Template</a>
                                </h5>
                                <ul class="titlebtm">
                                    <li>
                                        <img class="auth-img" src="images/auth-img2.png" alt="author image">
                                        <p>
                                            <a href="#">EchoTheme</a>
                                        </p>
                                    </li>
                                    <li class="product_cat">
                                        in
                                        <a href="#">HTML</a>
                                    </li>
                                </ul>
                                <ul class="product-facts clearfix">
                                    <li class="price">$18</li>
                                    <li class="sells">
                                        <span class="icon-basket"></span>381
                                    </li>
                                    <li class="product-fav">
                                        <span class="icon-heart" title="Add to collection" data-toggle="tooltip"></span>
                                    </li>
                                    <li class="product-rating">
                                        <ul class="list-unstyled">
                                            <li class="stars">
                                                    <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- Ends: .product-excerpt -->
                        </div>
                        <!-- Ends: .product-single -->
                    </div>
                    <!-- Ends: .col-md-4 -->
                    <!-- Start .col-md-4 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="product-single latest-single">
                            <div class="product-thumb">
                                <div class="s-promotion">-40%</div>
                                <figure>
                                    <img src="images/product4.png" alt="" class="img-fluid">
                                    <figcaption>
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="">
                                                    <span class="icon-basket"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">Live Demo</a>
                                            </li>
                                        </ul>
                                    </figcaption>
                                </figure>
                            </div>
                            <!-- Ends: .product-thumb -->
                            <div class="product-excerpt">
                                <h5>
                                    <a href="">AppPress PSD Template</a>
                                </h5>
                                <ul class="titlebtm">
                                    <li>
                                        <img class="auth-img" src="images/auth-img3.png" alt="author image">
                                        <p>
                                            <a href="#">Theme-Valley</a>
                                        </p>
                                    </li>
                                    <li class="product_cat">
                                        in
                                        <a href="#">PSD</a>
                                    </li>
                                </ul>
                                <ul class="product-facts clearfix">
                                    <li class="price">$20</li>
                                    <li class="sells">
                                        <span class="icon-basket"></span>24
                                    </li>
                                    <li class="product-fav">
                                        <span class="icon-heart" title="Add to collection" data-toggle="tooltip"></span>
                                    </li>
                                    <li class="product-rating">
                                        <ul class="list-unstyled">
                                            <li class="stars">
                                                    <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- Ends: .product-excerpt -->
                        </div>
                        <!-- Ends: .product-single -->
                    </div>
                    <!-- Ends: .col-md-4 -->
                    <!-- Start .col-md-4 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="product-single latest-single">
                            <div class="product-thumb">
                                <figure>
                                    <img src="images/product5.png" alt="" class="img-fluid">
                                    <figcaption>
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="">
                                                    <span class="icon-basket"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">Live Demo</a>
                                            </li>
                                        </ul>
                                    </figcaption>
                                </figure>
                            </div>
                            <!-- Ends: .product-thumb -->
                            <div class="product-excerpt">
                                <h5>
                                    <a href="">Rida Wordpress Theme</a>
                                </h5>
                                <ul class="titlebtm">
                                    <li>
                                        <img class="auth-img" src="images/auth-img2.png" alt="author image">
                                        <p>
                                            <a href="#">Theme-Valley</a>
                                        </p>
                                    </li>
                                    <li class="product_cat">
                                        in
                                        <a href="#">WordPress</a>
                                    </li>
                                </ul>
                                <ul class="product-facts clearfix">
                                    <li class="price">$39</li>
                                    <li class="sells">
                                        <span class="icon-basket"></span>881
                                    </li>
                                    <li class="product-fav">
                                        <span class="icon-heart" title="Add to collection" data-toggle="tooltip"></span>
                                    </li>
                                    <li class="product-rating">
                                        <ul class="list-unstyled">
                                            <li class="stars">
                                                    <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- Ends: .product-excerpt -->
                        </div>
                        <!-- Ends: .product-single -->
                    </div>
                    <!-- Ends: .col-md-4 -->
                    <!-- Start .col-md-4 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="product-single latest-single">
                            <div class="product-thumb">
                                <div class="s-promotion">-30%</div>
                                <figure>
                                    <img src="images/product6.png" alt="" class="img-fluid">
                                    <figcaption>
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="">
                                                    <span class="icon-basket"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">Live Demo</a>
                                            </li>
                                        </ul>
                                    </figcaption>
                                </figure>
                            </div>
                            <!-- Ends: .product-thumb -->
                            <div class="product-excerpt">
                                <h5>
                                    <a href="">TableGen Wordpress Plugin</a>
                                </h5>
                                <ul class="titlebtm">
                                    <li>
                                        <img class="auth-img" src="images/auth-img2.png" alt="author image">
                                        <p>
                                            <a href="#">Theme-Valley</a>
                                        </p>
                                    </li>
                                    <li class="product_cat">
                                        in
                                        <a href="#">Plugins</a>
                                    </li>
                                </ul>
                                <ul class="product-facts clearfix">
                                    <li class="price">$20</li>
                                    <li class="sells">
                                        <span class="icon-basket"></span>281
                                    </li>
                                    <li class="product-fav">
                                        <span class="icon-heart" title="Add to collection" data-toggle="tooltip"></span>
                                    </li>
                                    <li class="product-rating">
                                        <ul class="list-unstyled">
                                            <li class="stars">
                                                    <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- Ends: .product-excerpt -->
                        </div>
                        <!-- Ends: .product-single -->
                    </div>
                    <!-- Ends: .col-md-4 -->
                    <!-- Start .col-md-4 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="product-single latest-single">
                            <div class="product-thumb">
                                <div class="s-promotion">-25%</div>
                                <figure>
                                    <img src="images/product1.png" alt="" class="img-fluid">
                                    <figcaption>
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="">
                                                    <span class="icon-basket"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">Live Demo</a>
                                            </li>
                                        </ul>
                                    </figcaption>
                                </figure>
                            </div>
                            <!-- Ends: .product-thumb -->
                            <div class="product-excerpt">
                                <h5>
                                    <a href="">E-commerce Shopping Cart</a>
                                </h5>
                                <ul class="titlebtm">
                                    <li>
                                        <img class="auth-img" src="images/auth-img2.png" alt="author image">
                                        <p>
                                            <a href="#">Theme-Valley</a>
                                        </p>
                                    </li>
                                    <li class="product_cat">
                                        in
                                        <a href="#">WordPress</a>
                                    </li>
                                </ul>
                                <ul class="product-facts clearfix">
                                    <li class="price">$20</li>
                                    <li class="sells">
                                        <span class="icon-basket"></span>81
                                    </li>
                                    <li class="product-fav">
                                        <span class="icon-heart" title="Add to collection" data-toggle="tooltip"></span>
                                    </li>
                                    <li class="product-rating">
                                        <ul class="list-unstyled">
                                            <li class="stars">
                                                    <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- Ends: .product-excerpt -->
                        </div>
                        <!-- Ends: .product-single -->
                    </div>
                    <!-- Ends: .col-md-4 -->
                    <!-- Start .col-md-4 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="product-single latest-single">
                            <div class="product-thumb">
                                <figure>
                                    <img src="images/product2.png" alt="" class="img-fluid">
                                    <figcaption>
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="">
                                                    <span class="icon-basket"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">Live Demo</a>
                                            </li>
                                        </ul>
                                    </figcaption>
                                </figure>
                            </div>
                            <!-- Ends: .product-thumb -->
                            <div class="product-excerpt">
                                <h5>
                                    <a href="">TheBizz Wordpress Theme</a>
                                </h5>
                                <ul class="titlebtm">
                                    <li>
                                        <img class="auth-img" src="images/auth-img3.png" alt="author image">
                                        <p>
                                            <a href="#">AazzTech</a>
                                        </p>
                                    </li>
                                    <li class="product_cat">
                                        in
                                        <a href="#">WordPress</a>
                                    </li>
                                </ul>
                                <ul class="product-facts clearfix">
                                    <li class="price">$49</li>
                                    <li class="sells">
                                        <span class="icon-basket"></span>71
                                    </li>
                                    <li class="product-fav">
                                        <span class="icon-heart" title="Add to collection" data-toggle="tooltip"></span>
                                    </li>
                                    <li class="product-rating">
                                        <ul class="list-unstyled">
                                            <li class="stars">
                                                    <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- Ends: .product-excerpt -->
                        </div>
                        <!-- Ends: .product-single -->
                    </div>
                    <!-- Ends: .col-md-4 -->
                    <!-- Start .col-md-4 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="product-single latest-single">
                            <div class="product-thumb">
                                <figure>
                                    <img src="images/product3.png" alt="" class="img-fluid">
                                    <figcaption>
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="">
                                                    <span class="icon-basket"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">Live Demo</a>
                                            </li>
                                        </ul>
                                    </figcaption>
                                </figure>
                            </div>
                            <!-- Ends: .product-thumb -->
                            <div class="product-excerpt">
                                <h5>
                                    <a href="">DigiPro EDD Template</a>
                                </h5>
                                <ul class="titlebtm">
                                    <li>
                                        <img class="auth-img" src="images/auth-img2.png" alt="author image">
                                        <p>
                                            <a href="#">EchoTheme</a>
                                        </p>
                                    </li>
                                    <li class="product_cat">
                                        in
                                        <a href="#">HTML</a>
                                    </li>
                                </ul>
                                <ul class="product-facts clearfix">
                                    <li class="price">$18</li>
                                    <li class="sells">
                                        <span class="icon-basket"></span>381
                                    </li>
                                    <li class="product-fav">
                                        <span class="icon-heart" title="Add to collection" data-toggle="tooltip"></span>
                                    </li>
                                    <li class="product-rating">
                                        <ul class="list-unstyled">
                                            <li class="stars">
                                                    <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- Ends: .product-excerpt -->
                        </div>
                        <!-- Ends: .product-single -->
                    </div>
                    <!-- Ends: .col-md-4 -->
                    <!-- Start .col-md-4 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="product-single latest-single">
                            <div class="product-thumb">
                                <figure>
                                    <img src="images/product4.png" alt="" class="img-fluid">
                                    <figcaption>
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="">
                                                    <span class="icon-basket"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">Live Demo</a>
                                            </li>
                                        </ul>
                                    </figcaption>
                                </figure>
                            </div>
                            <!-- Ends: .product-thumb -->
                            <div class="product-excerpt">
                                <h5>
                                    <a href="">AppPress PSD Template</a>
                                </h5>
                                <ul class="titlebtm">
                                    <li>
                                        <img class="auth-img" src="images/auth-img3.png" alt="author image">
                                        <p>
                                            <a href="#">Theme-Valley</a>
                                        </p>
                                    </li>
                                    <li class="product_cat">
                                        in
                                        <a href="#">PSD</a>
                                    </li>
                                </ul>
                                <ul class="product-facts clearfix">
                                    <li class="price">$20</li>
                                    <li class="sells">
                                        <span class="icon-basket"></span>24
                                    </li>
                                    <li class="product-fav">
                                        <span class="icon-heart" title="Add to collection" data-toggle="tooltip"></span>
                                    </li>
                                    <li class="product-rating">
                                        <ul class="list-unstyled">
                                            <li class="stars">
                                                    <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- Ends: .product-excerpt -->
                        </div>
                        <!-- Ends: .product-single -->
                    </div>
                    <!-- Ends: .col-md-4 -->
                    <!-- Start .col-md-4 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="product-single latest-single">
                            <div class="product-thumb">
                                <figure>
                                    <img src="images/product5.png" alt="" class="img-fluid">
                                    <figcaption>
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="">
                                                    <span class="icon-basket"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">Live Demo</a>
                                            </li>
                                        </ul>
                                    </figcaption>
                                </figure>
                            </div>
                            <!-- Ends: .product-thumb -->
                            <div class="product-excerpt">
                                <h5>
                                    <a href="">Rida Wordpress Theme</a>
                                </h5>
                                <ul class="titlebtm">
                                    <li>
                                        <img class="auth-img" src="images/auth-img2.png" alt="author image">
                                        <p>
                                            <a href="#">Theme-Valley</a>
                                        </p>
                                    </li>
                                    <li class="product_cat">
                                        in
                                        <a href="#">WordPress</a>
                                    </li>
                                </ul>
                                <ul class="product-facts clearfix">
                                    <li class="price">$39</li>
                                    <li class="sells">
                                        <span class="icon-basket"></span>881
                                    </li>
                                    <li class="product-fav">
                                        <span class="icon-heart" title="Add to collection" data-toggle="tooltip"></span>
                                    </li>
                                    <li class="product-rating">
                                        <ul class="list-unstyled">
                                            <li class="stars">
                                                    <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- Ends: .product-excerpt -->
                        </div>
                        <!-- Ends: .product-single -->
                    </div>
                    <!-- Ends: .col-md-4 -->
                    <!-- Start .col-md-4 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="product-single latest-single">
                            <div class="product-thumb">
                                <figure>
                                    <img src="images/product6.png" alt="" class="img-fluid">
                                    <figcaption>
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="">
                                                    <span class="icon-basket"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">Live Demo</a>
                                            </li>
                                        </ul>
                                    </figcaption>
                                </figure>
                            </div>
                            <!-- Ends: .product-thumb -->
                            <div class="product-excerpt">
                                <h5>
                                    <a href="">TableGen Wordpress Plugin</a>
                                </h5>
                                <ul class="titlebtm">
                                    <li>
                                        <img class="auth-img" src="images/auth-img2.png" alt="author image">
                                        <p>
                                            <a href="#">Theme-Valley</a>
                                        </p>
                                    </li>
                                    <li class="product_cat">
                                        in
                                        <a href="#">Plugins</a>
                                    </li>
                                </ul>
                                <ul class="product-facts clearfix">
                                    <li class="price">$20</li>
                                    <li class="sells">
                                        <span class="icon-basket"></span>281
                                    </li>
                                    <li class="product-fav">
                                        <span class="icon-heart" title="Add to collection" data-toggle="tooltip"></span>
                                    </li>
                                    <li class="product-rating">
                                        <ul class="list-unstyled">
                                            <li class="stars">
                                                    <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- Ends: .product-excerpt -->
                        </div>
                        <!-- Ends: .product-single -->
                    </div>
                    <!-- Ends: .col-md-4 -->
                    <!-- Start .col-md-4 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="product-single latest-single">
                            <div class="product-thumb">
                                <figure>
                                    <img src="images/product1.png" alt="" class="img-fluid">
                                    <figcaption>
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="">
                                                    <span class="icon-basket"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">Live Demo</a>
                                            </li>
                                        </ul>
                                    </figcaption>
                                </figure>
                            </div>
                            <!-- Ends: .product-thumb -->
                            <div class="product-excerpt">
                                <h5>
                                    <a href="">E-commerce Shopping Cart</a>
                                </h5>
                                <ul class="titlebtm">
                                    <li>
                                        <img class="auth-img" src="images/auth-img2.png" alt="author image">
                                        <p>
                                            <a href="#">Theme-Valley</a>
                                        </p>
                                    </li>
                                    <li class="product_cat">
                                        in
                                        <a href="#">WordPress</a>
                                    </li>
                                </ul>
                                <ul class="product-facts clearfix">
                                    <li class="price">$20</li>
                                    <li class="sells">
                                        <span class="icon-basket"></span>81
                                    </li>
                                    <li class="product-fav">
                                        <span class="icon-heart" title="Add to collection" data-toggle="tooltip"></span>
                                    </li>
                                    <li class="product-rating">
                                        <ul class="list-unstyled">
                                            <li class="stars">
                                                    <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- Ends: .product-excerpt -->
                        </div>
                        <!-- Ends: .product-single -->
                    </div>
                    <!-- Ends: .col-md-4 -->
                    <!-- Start .col-md-4 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="product-single latest-single">
                            <div class="product-thumb">
                                <figure>
                                    <img src="images/product2.png" alt="" class="img-fluid">
                                    <figcaption>
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="">
                                                    <span class="icon-basket"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">Live Demo</a>
                                            </li>
                                        </ul>
                                    </figcaption>
                                </figure>
                            </div>
                            <!-- Ends: .product-thumb -->
                            <div class="product-excerpt">
                                <h5>
                                    <a href="">TheBizz Wordpress Theme</a>
                                </h5>
                                <ul class="titlebtm">
                                    <li>
                                        <img class="auth-img" src="images/auth-img3.png" alt="author image">
                                        <p>
                                            <a href="#">AazzTech</a>
                                        </p>
                                    </li>
                                    <li class="product_cat">
                                        in
                                        <a href="#">WordPress</a>
                                    </li>
                                </ul>
                                <ul class="product-facts clearfix">
                                    <li class="price">$49</li>
                                    <li class="sells">
                                        <span class="icon-basket"></span>71
                                    </li>
                                    <li class="product-fav">
                                        <span class="icon-heart" title="Add to collection" data-toggle="tooltip"></span>
                                    </li>
                                    <li class="product-rating">
                                        <ul class="list-unstyled">
                                            <li class="stars">
                                                    <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- Ends: .product-excerpt -->
                        </div>
                        <!-- Ends: .product-single -->
                    </div>
                    <!-- Ends: .col-md-4 -->
                    <!-- Start .col-md-4 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="product-single latest-single">
                            <div class="product-thumb">
                                <figure>
                                    <img src="images/product3.png" alt="" class="img-fluid">
                                    <figcaption>
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="">
                                                    <span class="icon-basket"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">Live Demo</a>
                                            </li>
                                        </ul>
                                    </figcaption>
                                </figure>
                            </div>
                            <!-- Ends: .product-thumb -->
                            <div class="product-excerpt">
                                <h5>
                                    <a href="">DigiPro EDD Template</a>
                                </h5>
                                <ul class="titlebtm">
                                    <li>
                                        <img class="auth-img" src="images/auth-img2.png" alt="author image">
                                        <p>
                                            <a href="#">EchoTheme</a>
                                        </p>
                                    </li>
                                    <li class="product_cat">
                                        in
                                        <a href="#">HTML</a>
                                    </li>
                                </ul>
                                <ul class="product-facts clearfix">
                                    <li class="price">$18</li>
                                    <li class="sells">
                                        <span class="icon-basket"></span>381
                                    </li>
                                    <li class="product-fav">
                                        <span class="icon-heart" title="Add to collection" data-toggle="tooltip"></span>
                                    </li>
                                    <li class="product-rating">
                                        <ul class="list-unstyled">
                                            <li class="stars">
                                                    <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- Ends: .product-excerpt -->
                        </div>
                        <!-- Ends: .product-single -->
                    </div>
                    <!-- Ends: .col-md-4 -->
                </div>
                <!-- Start Pagination -->
                <nav class="pagination-default">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true"><i class="fa fa-long-arrow-left"></i></span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
                        <li class="page-item"><a class="page-link" href="#">10</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true"><i class="fa fa-long-arrow-right"></i></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- Ends: /pagination-default -->
            </div>
            <!-- Ends: .product-list -->
        </div>
    </div>
</section>
<!--================================
    START Product Grid
=================================-->
<?php
include 'include/ads.php';
include 'include/footer.php';
?>

</body>

</html>