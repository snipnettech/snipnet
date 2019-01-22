<?php
// Include config file
require_once "db/index.php";
require('class/blog.class.php');
$pid = str_replace('.php', '', $_GET['id']);
$stmt = $db->prepare('SELECT postID, postTitle, postImg, postCont, postDesc, postDate FROM blog_posts_seo WHERE postSlug = :postSlug');
$stmt->execute(array(':postSlug' => $pid));
$row = $stmt->fetch();

//if post does not exists redirect user.
if($row['postID'] == ''){
	header("Location: $base_url/blog");
	exit;
}
$pt = $row['postTitle'];
$ds = $row['postDesc'];
$kw = $row['postDesc'];
$postDate = $row['postDate'];
$postImg = $row['postImg'];
$postCont = $row['postCont'];
$postID = $row['postID'];
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
        START LOGIN AREA
=================================-->
<section class="blog_area p-top-100 p-bottom-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="single_blog blog--default">
                    <article>
                        <figure>
                            <img src="<?php echo $base_url; ?>/images/blog/<?php echo $postImg; ?>" alt="<?php echo $pt; ?>">
                        </figure>
                        <div class="blog__content">
                                <h3  class="blog__title"><?php echo $pt; ?></h3>
                            <div class="blog__meta">
                                <div class="author">
                                    <span class="icon-map"></span>
                                    <p><?php 
										$postID = $row['postID'];
										$stmt2 = $db->prepare('SELECT catTitle, catSlug	FROM blog_cats, blog_post_cats WHERE blog_cats.catID = blog_post_cats.catID AND blog_post_cats.postID = :postID');
						$stmt2->execute(array(':postID' => $postID));

						$catRow = $stmt2->fetchAll(PDO::FETCH_ASSOC);

						$links = array();
						foreach ($catRow as $cat)
						{
						    $links[] = "<a href='$base_url/category/".$cat['catSlug']."'>".$cat['catTitle']."</a>";
						}
						echo implode(", ", $links); ?>
                                    </p>
                                </div>
                                <div class="date_time">
                                    <span class="icon-clock"></span>
                                    <p><?php echo get_time_ago(strtotime("$postDate")); ?></p>
                                </div>
                            </div>
                        </div>

                        <div class="single_blog_content">
                         <?php echo $postCont; 
						 
						 $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
						 ?>
                            <div class="share_tags">
                                <div class="share">
                                    <p>Share this article</p>
                                    <div class="social_share">
                                        <ul class="social_icons">
                                            <li>
                                                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $actual_link; ?>" target="_BLANK">
                                                    <span class="fa fa-facebook"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://twitter.com/home?status=<?php echo $actual_link; ?>" target="_BLANK">
                                                    <span class="fa fa-twitter"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://plus.google.com/share?url=<?php echo $actual_link; ?>" target="_BLANK">
                                                    <span class="fa fa-google-plus"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $actual_link; ?>&title=<?php echo $pt; ?>&summary=<?php echo $ds; ?>&source=" target="_BLANK">
                                                    <span class="fa fa-linkedin"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- end social_share -->
                                </div>
                                <!-- end bog_share_ara  -->
                            </div>
                        </div>
                    </article>
                </div>
                <!-- end /.single_blog -->
            </div>
            <!-- end /.col-md-8 -->

            <div class="col-lg-4 col-md-12">
                <aside class="sidebar sidebar--blog">
                    <div class="sidebar-card card--blog_sidebar card--tags">
                        <div class="card-title">
                            <h4>Categories</h4>
                        </div>

                        <ul class="tags">
						<?php
$stmt = $db->query('SELECT catTitle, catSlug FROM blog_cats ORDER BY catID DESC');
while($row = $stmt->fetch()){
    echo '<li><a href="'.$base_url.'/category/'.$row['catSlug'].'">'.$row['catTitle'].'</a></li>';
}
?>
                        </ul>
                        <!-- end /.tags -->
                    </div>
                    <!-- end /.sidebar-card -->

                    <div class="banner">
                        <img src="<?php echo $base_url; ?>/images/banner.jpg" alt="Banner">
                        <div class="banner_content">
                            <h1>Banner</h1>
                            <p>360x270</p>
                        </div>
                    </div>
                    <!-- end /.banner -->
                </aside>
                <!-- end /.aside -->
            </div>
            <!-- end /.col-md-4 -->

        </div>
        <!-- end /.row -->
    </div>
    <!-- end /.container -->
</section>
<!--================================
        END LOGIN AREA
=================================-->
<?php include 'include/footer.php'; ?>
</body>

</html>