<?php
// Include config file
require_once "db/index.php";
$pt = "Shopping Cart";
$ds = "Snipnetworks we bring good projects to life";
$kw = "Snipnetworks, snipnet";
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'include/head.php'; ?>
<body class="home1 mutlti-vendor">
<?php
include 'include/menu.php';
include 'include/breadcrumb.php';
?>
<!--================================
        START DASHBOARD AREA
=================================-->
<section class="cart_area section--padding bgcolor">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product_archive added_to__cart">
                    <div class="table-responsive single_product">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col"><h4>Product Details</h4></th>
                                <th scope="col"><h4>Category</h4></th>
                                <th scope="col"><h4>Price</h4></th>
                                <th scope="col"><h4>Remove</h4></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td colspan="1">
                                    <div class="product__description">
                                        <div class="p_image"><img src="images/pur1.jpg" alt="Purchase image"></div>
                                        <div class="short_desc">
                                            <a href="single-product.html">
                                                <h6>Finance and Consulting Business Theme</h6>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="category">Wordpress</a>
                                </td>
                                <td>
                                    <div class="item_price">
                                        <span>$59</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="item_action">
                                        <a href="#" class="remove_from_cart">
                                            <span class="icon-trash"></span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="product__description">
                                        <div class="p_image"><img src="images/pur2.jpg" alt="Purchase image"></div>
                                        <div class="short_desc">
                                            <a href="#">
                                                <h6>Visibility Manager Subscriptions</h6>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="category">Wordpress</a>
                                </td>
                                <td>
                                    <div class="item_price">
                                        <span>$59</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="item_action">
                                        <a href="#" class="remove_from_cart">
                                            <span class="icon-trash"></span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="row">
                        <div class="col-md-6 offset-md-6">
                            <div class="cart_calculation text-right">
                                <div class="cart--subtotal">
                                    <p>
                                        <span>Cart Subtotal</span>$120</p>
                                </div>
                                <div class="cart--total">
                                    <p>
                                        <span>total</span>$120</p>
                                </div>

                                <a href="checkout" class="btn btn--md checkout_link btn-primary">Proceed To
                                    Checkout</a>
                            </div>
                        </div>
                        <!-- end .col-md-12 -->
                    </div>
                    <!-- end .row -->
                </div>
                <!-- end /.product_archive2 -->
            </div>
            <!-- end .col-md-12 -->
        </div>
        <!-- end .row -->

    </div>
    <!-- end .container -->
</section>
<!--================================
        END DASHBOARD AREA
=================================-->
<?php include 'include/footer.php'; ?>
</body>

</html>