<?php $baseURL = basename($_SERVER["SCRIPT_FILENAME"], '.php'); ?>
    <div class="<?php if($baseURL == "about" or $baseURL == "blog" or $baseURL == "help"){ echo "bg-primary"; } ?>">
	<!-- start menu-area -->
    <div class="menu-area <?php if($baseURL == "index" or $baseURL == "about" or $baseURL == "blog" or $baseURL == "help"){ echo "menu--light"; } ?>">
        <div class="top-menu-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="menu-fullwidth">
                            <div class="logo-wrapper">
                                <div class="logo logo-top">
                                    <a href="<?php echo $base_url; ?>/"><img src="<?php echo $base_url; ?>/images/logo<?php if($baseURL === "index" or $baseURL == "about" or $baseURL == "blog" or $baseURL == "help"){ echo "-light"; }else{ echo "-blue"; } ?>.png" alt="logo image"
                                                              class="img-fluid"></a>
                                </div>
                            </div>

                            <div class="menu-container">
                                <div class="d_menu">
                                    <nav class="navbar navbar-expand-lg mainmenu__menu">
                                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                                data-target="#bs-example-navbar-collapse-1"
                                                aria-controls="bs-example-navbar-collapse-1"
                                                aria-expanded="false" aria-label="Toggle navigation">
                                            <span class="navbar-toggler-icon icon-menu"></span>
                                        </button>
                                        <!-- Collect the nav links, forms, and other content for toggling -->
                                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                            <ul class="navbar-nav">
											<li>
                                                    <a href="<?php echo $base_url; ?>/">Home</a>
                                               </li>
                                                <li>
                                                    <a href="<?php echo $base_url; ?>/projects">Projects</a>
                                                </li>
												 <li>
                                                    <a href="<?php echo $base_url; ?>/article/snipnet-reseller">Reseller</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url; ?>/developer/">Developer</a>
                                                </li>
												<li>
                                                    <a href="<?php echo $base_url; ?>/article/snipnet-installer">Installer</a>
                                                </li>
												<li>
                                                    <a href="<?php echo $base_url; ?>/blog">Blog</a>
                                                </li>
												 <li>
                                                    <a href="<?php echo $base_url; ?>/help">Help</a>
                                                </li>
												<?php if($usr_logged == 1){ ?>
												<li>
                                                    <a href="<?php echo $base_url; ?>/login">Login</a>
                                                </li>
												<li>
                                                    <a href="<?php echo $base_url; ?>/signup">Register</a>
                                                </li>
												<?php } ?>
                                            </ul>
                                        </div>
                                        <!-- /.navbar-collapse -->
                                    </nav>
                                </div>
                            </div>

                            <div class="author-menu">
                                <!-- start .author-area -->
                                <div class="author-area">
                                    
                                    <div class="author__notification_area">
                                        <ul>
                                            <li class="has_dropdown">
                                                <div class="icon_wrap">
                                                    <span class="icon-basket-loaded"></span>
                                                    <span class="notification_count purch">2</span>
                                                </div>

                                                <div class="dropdown dropdown--cart">
                                                    <div class="cart_area">
                                                        <div class="cart_list">
                                                            <div class="cart_product">
                                                                <div class="product__info">
                                                                    <div class="thumbn">
                                                                        <img src="images/capro1.jpg"
                                                                             alt="cart product thumbnail">
                                                                    </div>

                                                                    <div class="info">
                                                                        <a class="title" href="single-product.html">Finance
                                                                            and Consulting Business Theme</a>
                                                                        <div class="cat">
                                                                            <a href="#">
                                                                                <img src="images/catword.png" alt="">Wordpress</a>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="product__action">
                                                                    <a href="#">
                                                                        <span class="icon-trash"></span>
                                                                    </a>
                                                                    <p>$60</p>
                                                                </div>
                                                            </div>
                                                            <div class="cart_product">
                                                                <div class="product__info">
                                                                    <div class="thumbn">
                                                                        <img src="images/capro2.jpg"
                                                                             alt="cart product thumbnail">
                                                                    </div>

                                                                    <div class="info">
                                                                        <a class="title" href="single-product.html">Flounce
                                                                            - Multipurpose OpenCart Theme</a>
                                                                        <div class="cat">
                                                                            <a href="#">
                                                                                <img src="images/catword.png" alt="">Wordpress</a>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="product__action">
                                                                    <a href="#">
                                                                        <span class="icon-trash"></span>
                                                                    </a>
                                                                    <p>$60</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="total">
                                                            <p>
                                                                <span>Total :</span>$80</p>
                                                        </div>
                                                        <div class="cart_action">
                                                            <a class="btn btn-primary" href="cart">View Cart</a>
                                                            <a class="btn btn-secondary"
                                                               href="checkout">Checkout</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
									<?php if($usr_logged == 0){ ?>
                                    <!--start .author-author__info-->
                                    <div class="author-author__info has_dropdown">
                                        <div class="author__avatar online">
                                            <img src="<?php echo $base_url; ?>/<?php echo $usr_avatar;  ?>" alt="<?php if(empty($usr_fname)){ echo "@".$usr_name; }else{ echo "$usr_fname $usr_lname"; } ?>" class="rounded-circle" width="50px" height="50px">
                                        </div>

                                        <div class="dropdown dropdown--author">
                                            <div class="author-credits d-flex">
                                                <div class="author__avatar">
                                                    <img src="<?php echo $base_url; ?>/<?php echo $usr_avatar;  ?>" alt="<?php if(empty($usr_fname)){ echo "@".$usr_name; }else{ echo "$usr_fname $usr_lname"; } ?>"
                                                         class="rounded-circle" width="50px" height="45px">
                                                </div>
                                                <div class="autor__info">
                                                    <p class="name">
                                                        <?php if(empty($usr_fname)){ echo "@".$usr_name; }else{ echo "$usr_fname $usr_lname <br/> @$usr_name"; } ?>
                                                    </p>
													</div>
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="<?php echo $base_url; ?>/purchase">
                                                        <span class="icon-basket"></span>Purchases</a>
                                                </li>
												<li>
                                                    <a href="<?php echo $base_url; ?>/setting">
                                                        <span class="icon-settings"></span> Settings</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url; ?>/logout">
                                                        <span class="icon-logout"></span>Logout</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--end /.author-author__info-->
									<?php } ?>
                                </div>
                                <!-- end .author-area -->

                                <!-- author area restructured for mobile -->
							  <?php if($usr_logged == 0){ ?>
                                <div class="mobile_content ">
                                    <div class="author__avatar menu_icon">
                                            <img src="<?php echo $base_url; ?>/<?php echo $usr_avatar;  ?>" alt="<?php if(empty($usr_fname)){ echo "@".$usr_name; }else{ echo "$usr_fname $usr_lname"; } ?>" class="rounded-circle" width="50px" height="50px">
                                    </div>
                                    <!-- offcanvas menu -->
                                    <div class="offcanvas-menu closed">
                                        <span class="icon-close close_menu"></span>

                                        <div class="author__notification_area">
                                            <ul>

                                                <li>
                                                    <a href="cart">
                                                        <div class="icon_wrap">
                                                            <span class="icon-basket"></span>
                                                            <span class="notification_count purch">2</span>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!--start .author__notification_area -->

                                        <div class="dropdown dropdown--author">
                                            <ul>
                                                <li>
                                                     <p class="name">
                                                        <?php if(empty($usr_fname)){ echo "@".$usr_name; }else{ echo "$usr_fname $usr_lname <br/> @$usr_name"; } ?>
                                                    </p>
													<hr/>
                                                </li>
                                              <li>
                                                    <a href="<?php echo $base_url; ?>/purchase">
                                                        <span class="icon-basket"></span>Purchases</a>
                                                </li>
												<li>
                                        <a href="<?php echo $base_url; ?>/statement">
                                <span class="lnr icon-chart"></span>Statements</a>
                                          </li>
												<li>
                                                    <a href="<?php echo $base_url; ?>/setting">
                                                        <span class="icon-settings"></span> Settings</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo $base_url; ?>/logout">
                                                        <span class="icon-logout"></span>Logout</a>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
							  <?php } ?>
                                <!-- end /.mobile_content -->
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end  -->
    </div>
    <!-- end /.menu-area -->
	</div>