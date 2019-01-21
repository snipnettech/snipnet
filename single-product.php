<?php
// Include config file
require_once "db/index.php";
$pt = "Single product";
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
<!--============================================
    START SINGLE PRODUCT DESCRIPTION AREA
==============================================-->
<section class="single-product-desc">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="item-preview">
                    <div class="item-prev-area">
                        <div class="item__preview-slider">
                            <div class="prev-slide">
                                <img src="images/single1.jpg"
                                     alt="Keep calm this isn't the end of the world, the preview is just missing.">
                            </div>
                            <div class="prev-slide">
                                <img src="images/single2.jpg"
                                     alt="Keep calm this isn't the end of the world, the preview is just missing.">
                            </div>
                            <div class="prev-slide">
                                <img src="images/single3.jpg"
                                     alt="Keep calm this isn't the end of the world, the preview is just missing.">
                            </div>
                            <div class="prev-slide">
                                <img src="images/single1.jpg"
                                     alt="Keep calm this isn't the end of the world, the preview is just missing.">
                            </div>
                            <div class="prev-slide">
                                <img src="images/single2.jpg"
                                     alt="Keep calm this isn't the end of the world, the preview is just missing.">
                            </div>
                            <div class="prev-slide">
                                <img src="images/single3.jpg"
                                     alt="Keep calm this isn't the end of the world, the preview is just missing.">
                            </div>
                            <div class="prev-slide">
                                <img src="images/single1.jpg"
                                     alt="Keep calm this isn't the end of the world, the preview is just missing.">
                            </div>
                            <div class="prev-slide">
                                <img src="images/single2.jpg"
                                     alt="Keep calm this isn't the end of the world, the preview is just missing.">
                            </div>
                            <div class="prev-slide">
                                <img src="images/single3.jpg"
                                     alt="Keep calm this isn't the end of the world, the preview is just missing.">
                            </div>
                            <div class="prev-slide">
                                <img src="images/single1.jpg"
                                     alt="Keep calm this isn't the end of the world, the preview is just missing.">
                            </div>
                        </div>
                        <!-- end /.item--preview-slider -->
                        <div class="prev-nav thumb-nav">
                            <span class="lnr nav-left icon-arrow-left"></span>
                            <span class="lnr nav-right icon-arrow-right"></span>
                        </div>
                        <!-- end /.prev-nav -->
                    </div>
                    <!-- Ends: /.item-prev-area -->

                    <div class="item__preview-thumb">
                        <div class="prev-thumb">
                            <div class="thumb-slider">
                                <div class="item-thumb">
                                    <img src="images/thumb1.jpg" alt="This is the thumbnail of the item">
                                </div>
                                <div class="item-thumb">
                                    <img src="images/thumb2.jpg" alt="This is the thumbnail of the item">
                                </div>
                                <div class="item-thumb">
                                    <img src="images/thumb3.jpg" alt="This is the thumbnail of the item">
                                </div>
                                <div class="item-thumb">
                                    <img src="images/thumb4.jpg" alt="This is the thumbnail of the item">
                                </div>
                                <div class="item-thumb">
                                    <img src="images/thumb5.jpg" alt="This is the thumbnail of the item">
                                </div>
                                <div class="item-thumb">
                                    <img src="images/thumb1.jpg" alt="This is the thumbnail of the item">
                                </div>
                                <div class="item-thumb">
                                    <img src="images/thumb2.jpg" alt="This is the thumbnail of the item">
                                </div>
                                <div class="item-thumb">
                                    <img src="images/thumb3.jpg" alt="This is the thumbnail of the item">
                                </div>
                                <div class="item-thumb">
                                    <img src="images/thumb4.jpg" alt="This is the thumbnail of the item">
                                </div>
                                <div class="item-thumb">
                                    <img src="images/thumb5.jpg" alt="This is the thumbnail of the item">
                                </div>
                            </div>
                            <!-- end /.thumb-slider -->
                        </div>

                        <div class="item-action">
                            <div class="action-btns">
                                <a href="#" class="btn btn--lg btn-primary">Live Preview</a>
                                <a href="#" class="btn btn--lg btn--icon btn-outline-primary">
                                    <span class="lnr icon-heart"></span>Add To Favorites</a>
                            </div>
                        </div>
                        <!-- end /.item__action -->

                        <div class="item-activity">
                            <div class="activity-single">
                                <p>
                                    <span class="icon-basket"></span> Total Sales
                                </p>
                                <p>2451</p>
                            </div>
                            <div class="activity-single">
                                <p>
                                    <span class="icon-star"></span> Reviews
                                </p>
                                <ul class="list-unstyled">
                                    <li>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </li>
                                    <li>(35)</li>
                                </ul>
                            </div>
                            <div class="activity-single">
                                <p>
                                    <span class="icon-heart"></span>Favorities
                                </p>
                                <p>425</p>
                            </div>
                        </div>
                        <!-- Ends: /.item-activity -->

                    </div>
                    <!-- end /.item__preview-thumb-->


                </div>
                <!-- end /.item-preview-->

                <div class="item-info">
                    <div class="item-navigation">
                        <ul class="nav nav-tabs" role="tablist">
                            <li>
                                <a href="#product-details" class="active" id="tab1" aria-controls="product-details"
                                   role="tab" data-toggle="tab" aria-selected="true">
                                    <span class="icon icon-docs"></span> Item Details</a>
                            </li>
                            <li>
                                <a href="#product-comment" id="tab2" aria-controls="product-comment" role="tab"
                                   data-toggle="tab">
                                    <span class="icon icon-bubbles"></span> Comments </a>
                            </li>
                            <li>
                                <a href="#product-review" id="tab3" aria-controls="product-review" role="tab"
                                   data-toggle="tab">
                                    <span class="icon icon-star"></span> Reviews
                                    <span>(35)</span>
                                </a>
                            </li>
                            <li>
                                <a href="#product-support" id="tab4" aria-controls="product-support" role="tab"
                                   data-toggle="tab">
                                    <span class="icon icon-support"></span> Support</a>
                            </li>
                            <li>
                                <a href="#product-faq" id="tab5" aria-controls="product-faq" role="tab"
                                   data-toggle="tab">
                                    <span class="icon icon-question"></span> item FAQ</a>
                            </li>
                        </ul>
                    </div>
                    <!-- end /.item-navigation -->

                    <div class="tab-content">
                        <div class="fade show tab-pane product-tab active" id="product-details" role="tabpanel"
                             aria-labelledby="tab1">
                            <div class="tab-content-wrapper">
                                <h3>Landing Page Details</h3>
                                <p class="p-bottom-30">Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the
                                    mattis, leo quam aliquet congue placerat mi id nisi interdum mollis. Praesent
                                    pharetra,
                                    justo ut scel erisque the mattis, leo quam aliquet congue justo ut scelerisque.
                                    Praesent
                                    pharetra, justo ut scelerisque the mattis, leo quam aliquet congue justo ut
                                    scelerisque.</p>
                                <h3>Features With Image:</h3>
                                <img src="images/prodesc.jpg" alt="This is product description thumbnail">

                                <h3>Features With HTML List Unordered:</h3>
                                <ul>
                                    <li>Six different themes for product slider</li>
                                    <li>Featured products slider form selected categories.</li>
                                    <li>Product slider form specific categories of products. Include or exclude
                                        categories.
                                    </li>
                                    <li>Product slider form specific tags of products. Include or exclude tags. New</li>
                                </ul>

                                <h3>Features With HTML List Ordered:</h3>
                                <ol>
                                    <li>Six different themes for product slider</li>
                                    <li>Featured products slider form selected categories.</li>
                                    <li>Product slider form specific categories of products. Include or exclude
                                        categories.
                                    </li>
                                    <li>Product slider form specific tags of products. Include or exclude tags. New</li>
                                </ol>

                                <h3>Features With HTML List Ordered:</h3>
                                <iframe width="100" height="400" src="https://www.youtube.com/embed/w2zIUJrglR4"
                                        allowfullscreen></iframe>
                            </div>
                        </div>
                        <!-- end /.tab-content -->

                        <div class="fade tab-pane product-tab" id="product-comment" role="tabpanel"
                             aria-labelledby="tab2">
                            <div class="thread">
                                <ul class="media-list thread-list">
                                    <li class="single-thread">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="images/m1.png"
                                                         alt="Commentator Avatar">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <div>
                                                    <div class="media-heading">
                                                        <a href="author.html">
                                                            <h4>Themexylum</h4>
                                                        </a>
                                                        <span>9 Hours Ago</span>
                                                    </div>
                                                    <span class="comment-tag buyer">Purchased</span>
                                                    <a href="#" class="reply-link">Reply</a>
                                                </div>
                                                <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut
                                                    sceleris que the mattis, leo quam aliquet congue placerat mi id nisi
                                                    interdum mollis. </p>
                                            </div>
                                        </div>

                                        <!-- nested comment markup -->
                                        <ul class="children">
                                            <li class="single-thread depth-2">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <a href="#">
                                                            <img class="media-object" src="images/m2.png"
                                                                 alt="Commentator Avatar">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="media-heading">
                                                            <h4>AazzTech</h4>
                                                            <span>6 Hours Ago</span>
                                                        </div>
                                                        <span class="comment-tag author">Author</span>
                                                        <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra,
                                                            justo ut sceleris que the mattis, leo quam aliquet congue
                                                            placerat mi id nisi interdum mollis. </p>
                                                    </div>
                                                </div>

                                            </li>
                                            <li class="single-thread depth-2">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <a href="#">
                                                            <img class="media-object" src="images/m1.png"
                                                                 alt="Commentator Avatar">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="media-heading">
                                                            <h4>Themexylum</h4>
                                                            <span>9 Hours Ago</span>
                                                        </div>
                                                        <span class="comment-tag buyer">Purchased</span>
                                                        <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra,
                                                            justo ut sceleris que the mattis, leo quam aliquet congue
                                                            placerat mi id nisi interdum mollis. </p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>

                                        <!-- comment reply -->
                                        <div class="media depth-2 reply-comment">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="images/m2.png"
                                                         alt="Commentator Avatar">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <form action="#" class="comment-reply-form">
                                                    <textarea class="bla" name="reply-comment"
                                                              placeholder="Write your comment..."></textarea>
                                                    <button class="btn btn--md btn-primary">Post Comment</button>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- comment reply -->
                                    </li>
                                    <!-- end single comment thread /.comment-->

                                    <li class="single-thread">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="images/m3.png"
                                                         alt="Commentator Avatar">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <div>
                                                    <div class="media-heading">
                                                        <a href="author.html">
                                                            <h4>Themexylum</h4>
                                                        </a>
                                                        <span>9 Hours Ago</span>
                                                    </div>
                                                    <a href="#" class="reply-link">Reply</a>
                                                </div>
                                                <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut
                                                    sceleris que the mattis, leo quam aliquet congue placerat mi id nisi
                                                    interdum mollis. </p>
                                            </div>
                                        </div>

                                        <!-- comment reply -->
                                        <div class="media depth-2 reply-comment">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="images/m2.png"
                                                         alt="Commentator Avatar">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <form action="#" class="comment-reply-form">
                                                    <textarea name="reply-comment"
                                                              placeholder="Write your comment..."></textarea>
                                                    <button class="btn btn--sm btn-primary">Post Comment</button>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- comment reply -->
                                    </li>
                                    <!-- end single comment thread /.comment-->

                                    <li class="single-thread">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="images/m4.png"
                                                         alt="Commentator Avatar">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <div>
                                                    <div class="media-heading">
                                                        <a href="author.html">
                                                            <h4>Themexylum</h4>
                                                        </a>
                                                        <span>9 Hours Ago</span>
                                                    </div>
                                                    <a href="#" class="reply-link">Reply</a>
                                                </div>
                                                <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut
                                                    sceleris que the mattis, leo quam aliquet congue placerat mi id nisi
                                                    interdum mollis. </p>
                                            </div>
                                        </div>

                                        <!-- comment reply -->
                                        <div class="media depth-2 reply-comment">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="images/m2.png"
                                                         alt="Commentator Avatar">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <form action="#" class="comment-reply-form">
                                                    <textarea name="reply-comment"
                                                              placeholder="Write your comment..."></textarea>
                                                    <button class="btn btn--sm btn-primary">Post Comment</button>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- comment reply -->
                                    </li>
                                    <!-- end single comment thread /.comment-->

                                    <li class="single-thread">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="images/m5.png"
                                                         alt="Commentator Avatar">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <div>
                                                    <div class="media-heading">
                                                        <a href="author.html">
                                                            <h4>Themexylum</h4>
                                                        </a>
                                                        <span>9 Hours Ago</span>
                                                    </div>
                                                    <a href="#" class="reply-link">Reply</a>
                                                </div>
                                                <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut
                                                    sceleris que the mattis, leo quam aliquet congue placerat mi id nisi
                                                    interdum mollis. </p>
                                            </div>
                                        </div>

                                        <!-- comment reply -->
                                        <div class="media depth-2 reply-comment">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="images/m2.png"
                                                         alt="Commentator Avatar">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <form action="#" class="comment-reply-form">
                                                    <textarea name="reply-comment"
                                                              placeholder="Write your comment..."></textarea>
                                                    <button class="btn btn--sm btn-primary">Post Comment</button>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- comment reply -->
                                    </li>
                                    <!-- end single comment thread /.comment-->
                                </ul>
                                <!-- end /.media-list -->

                                <!-- Start Pagination -->
                                <nav class="pagination-default comments-pagination">
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

                                <div class="comment-form-area">
                                    <h4>Leave a comment</h4>
                                    <!-- comment reply -->
                                    <div class="media comment-form">
                                        <div class="media-left">
                                            <a href="#">
                                                <img class="media-object" src="images/m7.png" alt="Commentator Avatar">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <form action="#" class="comment-reply-form">
                                                <textarea name="reply-comment"
                                                          placeholder="Write your comment..."></textarea>
                                                <button class="btn btn--sm btn-primary">Post Comment</button>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- comment reply -->
                                </div>
                                <!-- end /.comment-form-area -->
                            </div>
                            <!-- end /.comments -->
                        </div>
                        <!-- end /.product-comment -->

                        <div class="fade tab-pane product-tab" id="product-review" role="tabpanel"
                             aria-labelledby="tab3">
                            <div class="thread thread_review">
                                <ul class="media-list thread-list">
                                    <li class="single-thread">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="images/m1.png"
                                                         alt="Commentator Avatar">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <div class="clearfix">
                                                    <div class="pull-left">
                                                        <div class="media-heading">
                                                            <a href="author.html">
                                                                <h4>Themexylum</h4>
                                                            </a>
                                                            <span>9 Hours Ago</span>
                                                        </div>
                                                        <div class="rating product--rating">
                                                            <ul>
                                                                <li>
                                                                    <span class="fa fa-star"></span>
                                                                </li>
                                                                <li>
                                                                    <span class="fa fa-star"></span>
                                                                </li>
                                                                <li>
                                                                    <span class="fa fa-star"></span>
                                                                </li>
                                                                <li>
                                                                    <span class="fa fa-star"></span>
                                                                </li>
                                                                <li>
                                                                    <span class="fa fa-star-half-o"></span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <span class="review_tag">support</span>
                                                    </div>
                                                    <a href="#" class="reply-link">Reply</a>
                                                </div>
                                                <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut
                                                    sceleris que the mattis, leo quam aliquet congue placerat mi id nisi
                                                    interdum mollis.</p>
                                            </div>
                                        </div>

                                        <!-- comment reply -->
                                        <div class="media depth-2 reply-comment">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="images/m2.png"
                                                         alt="Commentator Avatar">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <form action="#" class="comment-reply-form">
                                                    <textarea class="bla" name="reply-comment"
                                                              placeholder="Write your comment..."></textarea>
                                                    <button class="btn btn--md btn-primary">Post Comment</button>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- comment reply -->
                                    </li>
                                    <!-- end single comment thread /.comment-->

                                    <li class="single-thread">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="images/m4.png"
                                                         alt="Commentator Avatar">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <div class="clearfix">
                                                    <div class="pull-left">
                                                        <div class="media-heading">
                                                            <a href="author.html">
                                                                <h4>Jhon Oliver</h4>
                                                            </a>
                                                            <span>9 Hours Ago</span>
                                                        </div>
                                                        <div class="rating product--rating">
                                                            <ul>
                                                                <li>
                                                                    <span class="fa fa-star"></span>
                                                                </li>
                                                                <li>
                                                                    <span class="fa fa-star"></span>
                                                                </li>
                                                                <li>
                                                                    <span class="fa fa-star"></span>
                                                                </li>
                                                                <li>
                                                                    <span class="fa fa-star"></span>
                                                                </li>
                                                                <li>
                                                                    <span class="fa fa-star-half-o"></span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <span class="review_tag">code quality</span>
                                                    </div>
                                                    <a href="#" class="reply-link">Reply</a>
                                                </div>
                                                <p>Awesome theme. All in one Business Website Solutions.</p>
                                            </div>
                                        </div>

                                        <!-- comment reply -->
                                        <div class="media depth-2 reply-comment">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="images/m2.png"
                                                         alt="Commentator Avatar">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <form action="#" class="comment-reply-form">
                                                    <textarea class="bla" name="reply-comment"
                                                              placeholder="Write your comment..."></textarea>
                                                    <button class="btn btn--md btn-primary">Post Comment</button>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- comment reply -->
                                    </li>
                                    <!-- end single comment thread /.comment-->

                                    <li class="single-thread">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="images/m5.png"
                                                         alt="Commentator Avatar">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <div class="clearfix">
                                                    <div class="pull-left">
                                                        <div class="media-heading">
                                                            <a href="author.html">
                                                                <h4>PaglaGhora</h4>
                                                            </a>
                                                            <span>9 Hours Ago</span>
                                                        </div>
                                                        <div class="rating product--rating">
                                                            <ul>
                                                                <li>
                                                                    <span class="fa fa-star"></span>
                                                                </li>
                                                                <li>
                                                                    <span class="fa fa-star"></span>
                                                                </li>
                                                                <li>
                                                                    <span class="fa fa-star"></span>
                                                                </li>
                                                                <li>
                                                                    <span class="fa fa-star"></span>
                                                                </li>
                                                                <li>
                                                                    <span class="fa fa-star-half-o"></span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <span class="review_tag">design quality</span>
                                                    </div>
                                                    <a href="#" class="reply-link">Reply</a>
                                                </div>
                                                <p>Best theme ever....</p>
                                            </div>
                                        </div>

                                        <!-- comment reply -->
                                        <div class="media depth-2 reply-comment">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="images/m2.png"
                                                         alt="Commentator Avatar">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <form action="#" class="comment-reply-form">
                                                    <textarea class="bla" name="reply-comment"
                                                              placeholder="Write your comment..."></textarea>
                                                    <button class="btn btn--md btn-primary">Post Comment</button>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- comment reply -->
                                    </li>
                                    <!-- end single comment thread /.comment-->

                                    <li class="single-thread">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="images/m6.png"
                                                         alt="Commentator Avatar">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <div class="clearfix">
                                                    <div class="pull-left">
                                                        <div class="media-heading">
                                                            <a href="author.html">
                                                                <h4>Hearingorg</h4>
                                                            </a>
                                                            <span>12 days Ago</span>
                                                        </div>
                                                        <div class="rating product--rating">
                                                            <ul>
                                                                <li>
                                                                    <span class="fa fa-star"></span>
                                                                </li>
                                                                <li>
                                                                    <span class="fa fa-star"></span>
                                                                </li>
                                                                <li>
                                                                    <span class="fa fa-star"></span>
                                                                </li>
                                                                <li>
                                                                    <span class="fa fa-star"></span>
                                                                </li>
                                                                <li>
                                                                    <span class="fa fa-star-half-o"></span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <span class="review_tag">support</span>
                                                    </div>
                                                    <a href="#" class="reply-link">Reply</a>
                                                </div>
                                                <p>Very helpful support - above and beyond is my experience and I have
                                                    purchased
                                                    this theme many times for my clients.</p>
                                            </div>
                                        </div>

                                        <!-- comment reply -->
                                        <div class="media depth-2 reply-comment">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="images/m2.png"
                                                         alt="Commentator Avatar">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <form action="#" class="comment-reply-form">
                                                    <textarea class="bla" name="reply-comment"
                                                              placeholder="Write your comment..."></textarea>
                                                    <button class="btn btn--md btn-primary">Post Comment</button>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- comment reply -->
                                    </li>
                                    <!-- end single comment thread /.comment-->

                                    <li class="single-thread">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="images/m7.png"
                                                         alt="Commentator Avatar">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <div class="clearfix">
                                                    <div class="pull-left">
                                                        <div class="media-heading">
                                                            <a href="author.html">
                                                                <h4>ecom1206</h4>
                                                            </a>
                                                            <span>5 Hours Ago</span>
                                                        </div>
                                                        <div class="rating product--rating">
                                                            <ul>
                                                                <li>
                                                                    <span class="fa fa-star"></span>
                                                                </li>
                                                                <li>
                                                                    <span class="fa fa-star"></span>
                                                                </li>
                                                                <li>
                                                                    <span class="fa fa-star"></span>
                                                                </li>
                                                                <li>
                                                                    <span class="fa fa-star"></span>
                                                                </li>
                                                                <li>
                                                                    <span class="fa fa-star-half-o"></span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <span class="review_tag">code quality</span>
                                                    </div>
                                                    <a href="#" class="reply-link">Reply</a>
                                                </div>
                                                <p>Awesome theme. All in one Business Website Solutions.</p>
                                            </div>
                                        </div>

                                        <!-- comment reply -->
                                        <div class="media depth-2 reply-comment">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="images/m2.png"
                                                         alt="Commentator Avatar">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <form action="#" class="comment-reply-form">
                                                    <textarea class="bla" name="reply-comment"
                                                              placeholder="Write your comment..."></textarea>
                                                    <button class="btn btn--md btn-primary">Post Comment</button>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- comment reply -->
                                    </li>
                                    <!-- end single comment thread /.comment-->

                                    <li class="single-thread">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="images/m8.png"
                                                         alt="Commentator Avatar">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <div class="clearfix">
                                                    <div class="pull-left">
                                                        <div class="media-heading">
                                                            <a href="author.html">
                                                                <h4>Mr.Mango</h4>
                                                            </a>
                                                            <span>1 month day</span>
                                                        </div>
                                                        <div class="rating product--rating">
                                                            <ul>
                                                                <li>
                                                                    <span class="fa fa-star"></span>
                                                                </li>
                                                                <li>
                                                                    <span class="fa fa-star"></span>
                                                                </li>
                                                                <li>
                                                                    <span class="fa fa-star-o"
                                                                          aria-hidden="true"></span>
                                                                </li>
                                                                <li>
                                                                    <span class="fa fa-star-o"
                                                                          aria-hidden="true"></span>
                                                                </li>
                                                                <li>
                                                                    <span class="fa fa-star-o"
                                                                          aria-hidden="true"></span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <span class="review_tag">design quality</span>
                                                    </div>
                                                    <a href="#" class="reply-link">Reply</a>
                                                </div>
                                                <p>Retina logo won't work retina logo won't work</p>
                                            </div>
                                        </div>

                                        <!-- nested comment markup -->
                                        <ul class="children">
                                            <li class="single-thread depth-2">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <a href="#">
                                                            <img class="media-object" src="images/m2.png"
                                                                 alt="Commentator Avatar">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="media-heading">
                                                            <h4>AazzTech</h4>
                                                            <span>6 Hours Ago</span>
                                                        </div>
                                                        <span class="comment-tag author">Author</span>
                                                        <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra,
                                                            justo ut sceleris que the mattis, leo quam aliquet congue
                                                            placerat mi id nisi interdum mollis. </p>
                                                    </div>
                                                </div>

                                            </li>
                                        </ul>

                                        <!-- comment reply -->
                                        <div class="media depth-2 reply-comment">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="images/m2.png"
                                                         alt="Commentator Avatar">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <form action="#" class="comment-reply-form">
                                                    <textarea class="bla" name="reply-comment"
                                                              placeholder="Write your comment..."></textarea>
                                                    <button class="btn btn--md btn-primary">Post Comment</button>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- comment reply -->
                                    </li>
                                    <!-- end single comment thread /.comment-->

                                    <li class="single-thread">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="images/m6.png"
                                                         alt="Commentator Avatar">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <div class="clearfix">
                                                    <div class="pull-left">
                                                        <div class="media-heading">
                                                            <a href="author.html">
                                                                <h4>Hearingorg</h4>
                                                            </a>
                                                            <span>12 days Ago</span>
                                                        </div>
                                                        <div class="rating product--rating">
                                                            <ul>
                                                                <li>
                                                                    <span class="fa fa-star"></span>
                                                                </li>
                                                                <li>
                                                                    <span class="fa fa-star"></span>
                                                                </li>
                                                                <li>
                                                                    <span class="fa fa-star"></span>
                                                                </li>
                                                                <li>
                                                                    <span class="fa fa-star"></span>
                                                                </li>
                                                                <li>
                                                                    <span class="fa fa-star-half-o"></span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <span class="review_tag">support</span>
                                                    </div>
                                                    <a href="#" class="reply-link">Reply</a>
                                                </div>
                                                <p>Very helpful support - above and beyond is my experience and I have
                                                    purchased
                                                    this theme many times for my clients.</p>
                                            </div>
                                        </div>

                                        <!-- comment reply -->
                                        <div class="media depth-2 reply-comment">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="images/m2.png"
                                                         alt="Commentator Avatar">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <form action="#" class="comment-reply-form">
                                                    <textarea class="bla" name="reply-comment"
                                                              placeholder="Write your comment..."></textarea>
                                                    <button class="btn btn--md btn-primary">Post Comment</button>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- comment reply -->
                                    </li>
                                    <!-- end single comment thread /.comment-->

                                    <li class="single-thread">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="images/m9.png"
                                                         alt="Commentator Avatar">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <div class="clearfix">
                                                    <div class="pull-left">
                                                        <div class="media-heading">
                                                            <a href="author.html">
                                                                <h4>Tueld</h4>
                                                            </a>
                                                            <span>23 Minutes Ago</span>
                                                        </div>
                                                        <div class="rating product--rating">
                                                            <ul>
                                                                <li>
                                                                    <span class="fa fa-star"></span>
                                                                </li>
                                                                <li>
                                                                    <span class="fa fa-star"></span>
                                                                </li>
                                                                <li>
                                                                    <span class="fa fa-star"></span>
                                                                </li>
                                                                <li>
                                                                    <span class="fa fa-star"></span>
                                                                </li>
                                                                <li>
                                                                    <span class="fa fa-star-half-o"></span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <span class="review_tag">code quality</span>
                                                    </div>
                                                    <a href="#" class="reply-link">Reply</a>
                                                </div>
                                                <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut
                                                    sceleris que the mattis, leo quam aliquet congue placerat mi id nisi
                                                    interdum mollis. </p>
                                            </div>
                                        </div>

                                        <!-- comment reply -->
                                        <div class="media depth-2 reply-comment">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="images/m2.png"
                                                         alt="Commentator Avatar">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <form action="#" class="comment-reply-form">
                                                    <textarea class="bla" name="reply-comment"
                                                              placeholder="Write your comment..."></textarea>
                                                    <button class="btn btn--md btn-primary">Post Comment</button>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- comment reply -->
                                    </li>
                                    <!-- end single comment thread /.comment-->

                                    <li class="single-thread">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="images/m3.png"
                                                         alt="Commentator Avatar">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <div class="clearfix">
                                                    <div class="pull-left">
                                                        <div class="media-heading">
                                                            <a href="author.html">
                                                                <h4>Living Potato</h4>
                                                            </a>
                                                            <span>3 months ago</span>
                                                        </div>
                                                        <div class="rating product--rating">
                                                            <ul>
                                                                <li>
                                                                    <span class="fa fa-star"></span>
                                                                </li>
                                                                <li>
                                                                    <span class="fa fa-star"></span>
                                                                </li>
                                                                <li>
                                                                    <span class="fa fa-star"></span>
                                                                </li>
                                                                <li>
                                                                    <span class="fa fa-star"></span>
                                                                </li>
                                                                <li>
                                                                    <span class="fa fa-star-half-o"></span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <span class="review_tag">customization</span>
                                                    </div>
                                                    <a href="#" class="reply-link">Reply</a>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- comment reply -->
                                        <div class="media depth-2 reply-comment">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="images/m2.png"
                                                         alt="Commentator Avatar">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <form action="#" class="comment-reply-form">
                                                    <textarea class="bla" name="reply-comment"
                                                              placeholder="Write your comment..."></textarea>
                                                    <button class="btn btn--md btn-primary">Post Comment</button>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- comment reply -->
                                    </li>
                                    <!-- end single comment thread /.comment-->

                                    <li class="single-thread">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="images/m6.png"
                                                         alt="Commentator Avatar">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <div class="clearfix">
                                                    <div class="pull-left">
                                                        <div class="media-heading">
                                                            <a href="author.html">
                                                                <h4>Visual-Eggs</h4>
                                                            </a>
                                                            <span>125 years ago</span>
                                                        </div>
                                                        <div class="rating product--rating">
                                                            <ul>
                                                                <li>
                                                                    <span class="fa fa-star"></span>
                                                                </li>
                                                                <li>
                                                                    <span class="fa fa-star"></span>
                                                                </li>
                                                                <li>
                                                                    <span class="fa fa-star"></span>
                                                                </li>
                                                                <li>
                                                                    <span class="fa fa-star"></span>
                                                                </li>
                                                                <li>
                                                                    <span class="fa fa-star-half-o"></span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <span class="review_tag">support</span>
                                                    </div>
                                                    <a href="#" class="reply-link">Reply</a>
                                                </div>
                                                <p>This is the finest art in the history of whateverland. Pastor: No
                                                    it's
                                                    a witchcraft.</p>
                                            </div>
                                        </div>

                                        <!-- comment reply -->
                                        <div class="media depth-2 reply-comment">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="images/m2.png"
                                                         alt="Commentator Avatar">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <form action="#" class="comment-reply-form">
                                                    <textarea class="bla" name="reply-comment"
                                                              placeholder="Write your comment..."></textarea>
                                                    <button class="btn btn--md btn-primary">Post Comment</button>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- comment reply -->
                                    </li>
                                    <!-- end single comment thread /.comment-->
                                </ul>
                                <!-- end /.media-list -->

                                <!-- Start Pagination -->
                                <nav class="pagination-default comments-pagination">
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
                            <!-- end /.comments -->
                        </div>
                        <!-- end /.product-comment -->

                        <div class="fade tab-pane product-tab" id="product-support" role="tabpanel"
                             aria-labelledby="tab4">
                            <div class="support">
                                <div class="support__title">
                                    <h3>Contact the Author</h3>
                                </div>
                                <div class="support__form">
                                    <div class="usr-msg">
                                        <p>Please
                                            <a href="login.html">sign in</a> to contact this author.</p>

                                        <form action="#" class="support_form">
                                            <div class="form-group">
                                                <label for="subj">Support Subject:</label>
                                                <input type="text" id="subj" class="text_field"
                                                       placeholder="Enter your subject">
                                            </div>

                                            <div class="form-group">
                                                <label for="supmsg">Support Query: </label>
                                                <textarea class="text_field" id="supmsg" name="supmsg"
                                                          placeholder="Enter your text..."></textarea>
                                            </div>
                                            <button type="submit" class="btn btn--lg btn-primary">Submit Now</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end /.product-support -->

                        <div class="fade tab-pane product-tab" id="product-faq" role="tabpanel" aria-labelledby="tab5">

                            <div class="tab-content-wrapper">
                                <div class="panel-group accordion" role="tablist" id="accordion">
                                    <div class="panel accordion__single" id="panel-one">
                                        <div class="single_acco_title">
                                            <h4>
                                                <a data-toggle="collapse" href="#collapse1" class="collapsed"
                                                   aria-expanded="false" data-target="#collapse1"
                                                   aria-controls="collapse1">
                                                    <span>How to write the changelog for theme updates?</span>
                                                    <i class="lnr icon-arrow-right-circle indicator"></i>
                                                </a>
                                            </h4>
                                        </div>

                                        <div id="collapse1" class="panel-collapse collapse" aria-labelledby="panel-one"
                                             data-parent="#accordion">
                                            <div class="panel-body">
                                                <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut
                                                    sceleris que the mattis, leo quam aliquet congue placerat mi id nisi
                                                    interdum mollis. Aliquip placeat salvia cillum iphone. Seitan
                                                    aliquip
                                                    quis cardigan american apparel, butcher. Nunc placerat mi id nisi
                                                    interdum mollis. Praesent pharetra, justo ut sceleris que the
                                                    mattis,
                                                    leo quam aliquet congue placerat mi id nisi interdum mollis. Aliquip
                                                    placeat salvia cillum iphone. Seitan aliquip quis cardigan american
                                                    apparel, butcher .</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end /.accordion__single -->
                                    <div class="panel accordion__single" id="panel-two">
                                        <div class="single_acco_title">
                                            <h4>
                                                <a data-toggle="collapse" href="#collapse2" class="collapsed"
                                                   aria-expanded="false" data-target="#collapse2"
                                                   aria-controls="collapse2">
                                                    <span>Why do I need to login to purchase an item on DigiPro?</span>
                                                    <i class="lnr icon-arrow-right-circle indicator"></i>
                                                </a>
                                            </h4>
                                        </div>

                                        <div id="collapse2" class="panel-collapse collapse" aria-labelledby="panel-two"
                                             data-parent="#accordion">
                                            <div class="panel-body">
                                                <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut
                                                    sceleris que the mattis, leo quam aliquet congue placerat mi id nisi
                                                    interdum mollis. Aliquip placeat salvia cillum iphone. Seitan
                                                    aliquip
                                                    quis cardigan american apparel, butcher. Nunc placerat mi id nisi
                                                    interdum mollis. Praesent pharetra, justo ut sceleris que the
                                                    mattis,
                                                    leo quam aliquet congue placerat mi id nisi interdum mollis. Aliquip
                                                    placeat salvia cillum iphone. Seitan aliquip quis cardigan american
                                                    apparel, butcher .</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end /.accordion__single -->
                                    <div class="panel accordion__single" id="panel-three">
                                        <div class="single_acco_title">
                                            <h4>
                                                <a data-toggle="collapse" href="#collapse3" class="collapsed"
                                                   aria-expanded="false" data-target="#collapse3"
                                                   aria-controls="collapse3">
                                                    <span>How to create an account on DigiPro?</span>
                                                    <i class="lnr icon-arrow-right-circle indicator"></i>
                                                </a>
                                            </h4>
                                        </div>

                                        <div id="collapse3" class="panel-collapse collapse"
                                             aria-labelledby="panel-three" data-parent="#accordion">
                                            <div class="panel-body">
                                                <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut
                                                    sceleris que the mattis, leo quam aliquet congue placerat mi id nisi
                                                    interdum mollis. Aliquip placeat salvia cillum iphone. Seitan
                                                    aliquip
                                                    quis cardigan american apparel, butcher. Nunc placerat mi id nisi
                                                    interdum mollis. Praesent pharetra, justo ut sceleris que the
                                                    mattis,
                                                    leo quam aliquet congue placerat mi id nisi interdum mollis. Aliquip
                                                    placeat salvia cillum iphone. Seitan aliquip quis cardigan american
                                                    apparel, butcher .</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end /.accordion__single -->
                                    <div class="panel accordion__single" id="panel-four">
                                        <div class="single_acco_title">
                                            <h4>
                                                <a data-toggle="collapse" href="#collapse4" class="collapsed"
                                                   aria-expanded="false" data-target="#collapse4"
                                                   aria-controls="collapse4">
                                                    <span>How to write the changelog for theme updates?</span>
                                                    <i class="lnr icon-arrow-right-circle indicator"></i>
                                                </a>
                                            </h4>
                                        </div>

                                        <div id="collapse4" class="panel-collapse collapse" aria-labelledby="panel-four"
                                             data-parent="#accordion">
                                            <div class="panel-body">
                                                <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut
                                                    sceleris que the mattis, leo quam aliquet congue placerat mi id nisi
                                                    interdum mollis. Aliquip placeat salvia cillum iphone. Seitan
                                                    aliquip
                                                    quis cardigan american apparel, butcher. Nunc placerat mi id nisi
                                                    interdum mollis. Praesent pharetra, justo ut sceleris que the
                                                    mattis,
                                                    leo quam aliquet congue placerat mi id nisi interdum mollis. Aliquip
                                                    placeat salvia cillum iphone. Seitan aliquip quis cardigan american
                                                    apparel, butcher .</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end /.accordion__single -->
                                    <div class="panel accordion__single" id="panel-five">
                                        <div class="single_acco_title">
                                            <h4>
                                                <a data-toggle="collapse" href="#collapse5" class="collapsed"
                                                   aria-expanded="false" data-target="#collapse5"
                                                   aria-controls="collapse5">
                                                    <span>Do you recommend using a download manager software?</span>
                                                    <i class="lnr icon-arrow-right-circle indicator"></i>
                                                </a>
                                            </h4>
                                        </div>

                                        <div id="collapse5" class="panel-collapse collapse" aria-labelledby="panel-five"
                                             data-parent="#accordion">
                                            <div class="panel-body">
                                                <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut
                                                    sceleris que the mattis, leo quam aliquet congue placerat mi id nisi
                                                    interdum mollis. Aliquip placeat salvia cillum iphone. Seitan
                                                    aliquip
                                                    quis cardigan american apparel, butcher. Nunc placerat mi id nisi
                                                    interdum mollis. Praesent pharetra, justo ut sceleris que the
                                                    mattis,
                                                    leo quam aliquet congue placerat mi id nisi interdum mollis. Aliquip
                                                    placeat salvia cillum iphone. Seitan aliquip quis cardigan american
                                                    apparel, butcher .</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end /.accordion__single -->
                                    <div class="panel accordion__single" id="panel-six">
                                        <div class="single_acco_title">
                                            <h4>
                                                <a data-toggle="collapse" href="#collapse6" class="collapsed"
                                                   aria-expanded="false" data-target="#collapse6"
                                                   aria-controls="collapse6">
                                                    <span>How to purchase an item on DigiPro?</span>
                                                    <i class="lnr icon-arrow-right-circle indicator"></i>
                                                </a>
                                            </h4>
                                        </div>

                                        <div id="collapse6" class="panel-collapse collapse" aria-labelledby="panel-six"
                                             data-parent="#accordion">
                                            <div class="panel-body">
                                                <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut
                                                    sceleris que the mattis, leo quam aliquet congue placerat mi id nisi
                                                    interdum mollis. Aliquip placeat salvia cillum iphone. Seitan
                                                    aliquip
                                                    quis cardigan american apparel, butcher. Nunc placerat mi id nisi
                                                    interdum mollis. Praesent pharetra, justo ut sceleris que the
                                                    mattis,
                                                    leo quam aliquet congue placerat mi id nisi interdum mollis. Aliquip
                                                    placeat salvia cillum iphone. Seitan aliquip quis cardigan american
                                                    apparel, butcher .</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end /.accordion__single -->
                                </div>
                                <!-- end /.accordion -->
                            </div>

                        </div>
                        <!-- end /.product-faq -->
                    </div>
                    <!-- end /.tab-content -->
                </div>
                <!-- end /.item-info -->
            </div>
            <!-- end /.col-md-8 -->

            <div class="col-lg-4 col-md-12">
                <aside class="sidebar sidebar--single-product">
                    <div class="sidebar-card card-pricing">
                        <div class="price">
                            <h1>
                                <sup>$</sup>20 -
                                <sup>$</sup>60</h1>
                        </div>
                        <ul class="pricing-options">
                            <li>
                                <div class="custom-radio">
                                    <input type="radio" id="opt1" class="" name="filter_opt" checked>
                                    <label for="opt1">
                                        <span class="circle"></span>Single Site License –
                                        <span class="pricing__opt">$20.00</span>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="custom-radio">
                                    <input type="radio" id="opt2" class="" name="filter_opt">
                                    <label for="opt2">
                                        <span class="circle"></span>2 Sites License –
                                        <span class="pricing__opt">$40.00</span>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="custom-radio">
                                    <input type="radio" id="opt3" class="" name="filter_opt">
                                    <label for="opt3">
                                        <span class="circle"></span>Multi Site License –
                                        <span class="pricing__opt">$60.00</span>
                                    </label>
                                </div>
                            </li>
                        </ul>
                        <!-- end /.pricing-options -->

                        <div class="purchase-button">
                            <a href="#" class="btn btn--lg btn-primary">Purchase Now</a>
                            <a href="#" class="btn btn--lg cart-btn btn-secondary">
                                <span class="icon-basket"></span> Add To Cart</a>
                        </div>
                        <!-- end /.purchase-button -->
                    </div>
                    <!-- end /.sidebar--card -->

                    <div class="sidebar-card card--product-infos">
                        <div class="card-title">
                            <h4>Product Information</h4>
                        </div>

                        <ul class="infos">
                            <li>
                                <p class="data-label">Released</p>
                                <p class="info">16 June 2015</p>
                            </li>
                            <li>
                                <p class="data-label">Updated</p>
                                <p class="info">28 July 2016 </p>
                            </li>
                            <li>
                                <p class="data-label">Version</p>
                                <p class="info">1.2</p>
                            </li>
                            <li>
                                <p class="data-label">Category</p>
                                <p class="info">Corporate & Business</p>
                            </li>
                            <li>
                                <p class="data-label">Layout</p>
                                <p class="info">Responsive</p>
                            </li>
                            <li>
                                <p class="data-label">Retina Ready</p>
                                <p class="info">No</p>
                            </li>
                            <li>
                                <p class="data-label">Files Included</p>
                                <p class="info">Html, CSS, JavaScript</p>
                            </li>
                            <li>
                                <p class="data-label">Browser</p>
                                <p class="info">IE10, IE11, Firefox, Safari, Opera, Chrome5</p>
                            </li>
                            <li>
                                <p class="data-label">Bootstrap</p>
                                <p class="info">Bootstrap 4</p>
                            </li>
                            <li>
                                <p class="data-label">Tags</p>
                                <p class="info">
                                    <a href="#">business</a>,
                                    <a href="#">template</a>,
                                    <a href="#">onepage</a>,
                                    <a href="#">creative</a>,
                                    <a href="#">responsive</a>,
                                    <a href="#">corporate</a>,
                                    <a href="#">Bootstrap3</a>,
                                    <a href="#">html5</a>
                                </p>
                            </li>
                        </ul>
                    </div>
                    <!-- end /.aside -->

                    <div class="social-share-card sidebar-card">
                        <p>Social Share:</p>
                        <ul class="list-unstyled">
                            <li>
                                <a href="">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fa fa-pinterest"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- Ends: /.social-share-card -->

                    <div class="author-card sidebar-card ">
                        <div class="card-title">
                            <h4>Product Information</h4>
                        </div>

                        <div class="author-infos">
                            <div class="author-top">
                                <div class="author_avatar">
                                    <img src="images/author-avatar.jpg" alt="Presenting the broken author avatar :D">
                                </div>

                                <div class="author">
                                    <h5>AazzTech</h5>
                                    <p>Signed Up: 08 April 2016</p>
                                </div>
                            </div>
                            <!-- end /.author -->

                            <div class="social social--color--filled">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <span class="fa fa-facebook"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="fa fa-twitter"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="fa fa-dribbble"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="fa fa-linkedin"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="fa fa-google-plus"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- end /.social -->

                            <div class="author-btn">
                                <a href="#" class="btn btn--sm btn-primary">View Profile</a>
                                <a href="#" class="btn btn--sm btn-secondary">Send Message</a>
                            </div>
                            <!-- end /.author-btn -->
                        </div>
                        <!-- end /.author-infos -->


                    </div>
                    <!-- end /.author-card -->
                </aside>
                <!-- end /.aside -->
            </div>
            <!-- end /.col-md-4 -->
        </div>
        <!-- end /.row -->
    </div>
    <!-- end /.container -->
</section>
<!--===========================================
        END SINGLE PRODUCT DESCRIPTION AREA
    ===============================================-->

<!--============================================
        START MORE PRODUCT ARE
    ==============================================-->
<section class="more_product_area p-top-105 p-bottom-75">
    <div class="container">
        <div class="row">
            <!-- start col-md-12 -->
            <div class="col-md-12">
                <div class="section-title">
                    <h2>More Items by
                        <span class="highlighted">Aazztech</span>
                    </h2>
                </div>
            </div>
            <!-- end /.col-md-12 -->


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
        <!-- end /.container -->
    </div>
    <!-- end /.container -->
</section>
<!--============================================
        END MORE PRODUCT AREA
    ==============================================-->
<?php include 'include/footer.php'; ?>
</body>

</html>