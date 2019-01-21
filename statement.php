<?php
// Include config file
require_once "db/index.php";
require_once "class/class.restrict.php";
$pt = "Statements";
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
    <section class="dashboard-area">
 <?php include 'include/sub-menu.php'; ?>
        <div class="dashboard_contents dashboard_statement_area section--padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="dashboard_title_area">
                            <div class="dashboard__title">
                                <h3>Sales Statements</h3>
                                <div class="date_area">
                                    <form action="#">
                                        <div class="input_with_icon">
                                            <input type="text" class="dattaPikkara" placeholder="From">
                                            <span class="icon-calendar"></span>
                                        </div>

                                        <div class="input_with_icon">
                                            <input type="text" class="dattaPikkara" placeholder="To">
                                            <span class="icon-calendar"></span>
                                        </div>
                                        <div class="select-wrap">
                                            <select name="transaction_type" id="#">
                                                <option value="all">All Transaction</option>
                                                <option value="sale">Sale</option>
                                                <option value="sale">Purchase</option>
                                                <option value="credited">Withdraw</option>
                                            </select>
                                            <span class="icon-arrow-down"></span>
                                        </div>

                                        <button type="submit" class="btn btn--sm btn-primary">Search</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end /.col-md-12 -->
                </div>
                <!-- end /.row -->

                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="statement_info_card">
                            <div class="info_wrap">
                                <div><span class="icon-handbag icon primarybg transparent-bg primary"></span></div>
                                <div class="info">
                                    <p class="primary">$4,563</p>
                                    <span>Total Sales</span>
                                </div>
                            </div>
                            <!-- end /.info_wrap -->
                        </div>
                        <!-- end /.statement_info_card -->
                    </div>
                    <!-- end /.col-md-3 -->

                    <div class="col-lg-3 col-sm-6">
                        <div class="statement_info_card">
                            <div class="info_wrap">
                                <div><span class="icon-basket-loaded icon secondarybg transparent-bg secondary"></span></div>
                                <div class="info">
                                    <p class="secondary">$340</p>
                                    <span>Total Purchases</span>
                                </div>
                            </div>
                            <!-- end /.info_wrap -->
                        </div>
                        <!-- end /.statement_info_card -->
                    </div>
                    <!-- end /.col-md-3 -->

                    <div class="col-lg-3 col-sm-6">
                        <div class="statement_info_card">
                            <div class="info_wrap">
                                <div><span class="icon-wallet icon mcolorbg3 transparent-bg info"></span></div>
                                <div class="info">
                                    <p class="info">$4,563</p>
                                    <span>Total Credited</span>
                                </div>
                            </div>
                            <!-- end /.info_wrap -->
                        </div>
                        <!-- end /.statement_info_card -->
                    </div>
                    <!-- end /.col-md-3 -->

                    <div class="col-lg-3 col-sm-6">
                        <div class="statement_info_card">
                            <div class="info_wrap">
                                <div><span class="icon-briefcase icon mcolorbg4 transparent-bg danger"></span></div>
                                <div class="info">
                                    <p class="danger">$3,690</p>
                                    <span>Total Withdraw</span>
                                </div>
                            </div>
                            <!-- end /.info_wrap -->
                        </div>
                        <!-- end /.statement_info_card -->
                    </div>
                    <!-- end /.col-md-3 -->
                </div>
                <!-- end /.row -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="statement_table table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Order ID</th>
                                        <th>Author</th>
                                        <th>Detail</th>
                                        <th>Type</th>
                                        <th>Price</th>
                                        <th>Earning</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>09 Jul 2017</td>
                                        <td>MP810094</td>
                                        <td class="author">AazzTech</td>
                                        <td class="detail">
                                            <a href="single-product.html">Visibility Manager Subscriptions</a>
                                        </td>
                                        <td class="type">
                                            <span class="sale">Sale</span>
                                        </td>
                                        <td class="price">$49</td>
                                        <td class="earning">$24.50</td>
                                        <td class="action">
                                            <a href="invoice.html">view</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>03 Jul 2017</td>
                                        <td>MP810094</td>
                                        <td class="author">Markober</td>
                                        <td class="detail">
                                            <a href="single-product.html">DigiPro Coffee Shop</a>
                                        </td>
                                        <td class="type">
                                            <span class="purchase">Purchase</span>
                                        </td>
                                        <td class="price">$30</td>
                                        <td class="earning subtract">-$30</td>
                                        <td class="action">
                                            <a href="invoice.html">view</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>09 Jul 2017</td>
                                        <td>MP810094</td>
                                        <td class="author">Themexylum</td>
                                        <td class="detail">
                                            <a href="single-product.html">DigiPro Extension Bundle</a>
                                        </td>
                                        <td class="type">
                                            <span class="sale">Sale</span>
                                        </td>
                                        <td class="price">$49</td>
                                        <td class="earning">$24.50</td>
                                        <td class="action">
                                            <a href="invoice.html">view</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>05 Apr 2017</td>
                                        <td>MP810094</td>
                                        <td class="author">AazzTech</td>
                                        <td class="detail">
                                            <a href="single-product.html">Stack - Responsive Bootstrap 4 Admin Template</a>
                                        </td>
                                        <td class="type">
                                            <span class="sale">Sale</span>
                                        </td>
                                        <td class="price">$20</td>
                                        <td class="earning">$10</td>
                                        <td class="action">
                                            <a href="invoice.html">view</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>25 Dec 2016</td>
                                        <td>MP810394</td>
                                        <td class="author text-center" colspan="2">Via Payoneer</td>
                                        <td class="type">
                                            <span class="credited">Credited</span>
                                        </td>
                                        <td class="price">$49</td>
                                        <td class="earning">$24.50</td>
                                        <td class="action">
                                            <a href="invoice.html">view</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>09 Jul 2017</td>
                                        <td>MP810094</td>
                                        <td class="author text-center" colspan="2">Via Paypal</td>
                                        <td class="type">
                                            <span class="withdrawal">Withdraw</span>
                                        </td>
                                        <td class="price">$350</td>
                                        <td class="earning subtract">-$350</td>
                                        <td class="action">
                                            <a href="invoice.html">view</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>0 Feb 2017</td>
                                        <td>MP810094</td>
                                        <td class="author">Artcorner</td>
                                        <td class="detail">
                                            <a href="single-product.html">Rida - Applanding Onepage </a>
                                        </td>
                                        <td class="type">
                                            <span class="purchase">Purchase</span>
                                        </td>
                                        <td class="price">$30</td>
                                        <td class="earning subtract">-$30</td>
                                        <td class="action">
                                            <a href="invoice.html">view</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>26 May 2016</td>
                                        <td>MP81024</td>
                                        <td class="author">Awesomaiya</td>
                                        <td class="detail">
                                            <a href="single-product.html">Table Generator extension bundle</a>
                                        </td>
                                        <td class="type">
                                            <span class="sale">Sale</span>
                                        </td>
                                        <td class="price">$49</td>
                                        <td class="earning">$24.50</td>
                                        <td class="action">
                                            <a href="invoice.html">view</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>26 Aug 2017</td>
                                        <td>MP810654</td>
                                        <td class="author">Codepoets</td>
                                        <td class="detail">
                                            <a href="single-product.html">Kamla One page portfolio</a>
                                        </td>
                                        <td class="type">
                                            <span class="sale">Sale</span>
                                        </td>
                                        <td class="price">$49</td>
                                        <td class="earning">$24.50</td>
                                        <td class="action">
                                            <a href="invoice.html">view</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>09 Jul 2017</td>
                                        <td>MP810094</td>
                                        <td class="author">Designing</td>
                                        <td class="detail">
                                            <a href="single-product.html">Ajaxified karma loader</a>
                                        </td>
                                        <td class="type">
                                            <span class="purchase">Purchased</span>
                                        </td>
                                        <td class="price">$29</td>
                                        <td class="earning">-$29</td>
                                        <td class="action">
                                            <a href="invoice.html">view</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

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
                    </div>
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end /.dashboard_menu_area -->
    </section>
    <!--================================
            END DASHBOARD AREA
    =================================-->
<?php include 'include/footer.php'; ?>
</body>

</html>