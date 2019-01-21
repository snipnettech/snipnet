<?php
// Include config file
require_once "db/index.php";
require('class/blog.class.php');
$pid = str_replace('.php', '', $_GET['id']);
$stmt = $db->prepare('SELECT catID,catTitle FROM blog_cats WHERE catSlug = :catSlug');
$stmt->execute(array(':catSlug' => $pid));
$row = $stmt->fetch();

//if post does not exists redirect user.
if($row['catID'] == ''){
	header('Location: $base_url/blog');
	exit;
}
$pt = "Articles on ".$row['catTitle'];
$ds = $pt;
$kw = $ds;
$catID = $row['catID'];
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
        START BLOG AREA
=================================-->
<section class="blog_area section--padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
			
<?php
try {

				$pages = new Paginator('10','p');

				$stmt = $db->prepare('SELECT blog_posts_seo.postID FROM blog_posts_seo, blog_post_cats WHERE blog_posts_seo.postID = blog_post_cats.postID AND blog_post_cats.catID = :catID');
				$stmt->execute(array(':catID' => $catID));

				//pass number of records to
				$pages->set_total($stmt->rowCount());

				$stmt = $db->prepare('
					SELECT 
						blog_posts_seo.postID, blog_posts_seo.postImg, blog_posts_seo.postTitle, blog_posts_seo.postSlug, blog_posts_seo.postDesc, blog_posts_seo.postDate 
					FROM 
						blog_posts_seo,
						blog_post_cats
					WHERE
						 blog_posts_seo.postID = blog_post_cats.postID
						 AND blog_post_cats.catID = :catID
					ORDER BY 
						postID DESC
					'.$pages->get_limit());
				$stmt->execute(array(':catID' => $catID));
				while($row = $stmt->fetch()){
?>
                <div class="single_blog blog--default">
                    <figure>
                        <img src="<?php echo $base_url; ?>/images/blog/<?php echo $row['postImg']; ?>" alt="Blog image">

                        <figcaption>
                            <div class="blog__content">
                                <a href="<?php echo $base_url; ?>/article/<?php echo $row['postSlug']; ?>" class="blog__title">
                                    <h3><?php echo $row['postTitle']; ?></h3>
                                </a>

                                <div class="blog__meta">
								<div class="author">
                                        <span class="icon-map"></span>
                                        <p>
										<?php 
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
                                        <p><?php 
										$td = $row['postDate'];
										echo get_time_ago(strtotime("$td")); ?></p>
                                    </div>
                                </div>
                            </div>

                            <div class="btn_text">
                                <p><?php echo $row['postDesc']; ?></p>
                                <a href="<?php echo $base_url; ?>/article/<?php echo $row['postSlug']; ?>" class="btn btn--md btn-primary">Read More</a>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <!-- end /.single_blog -->
<?php
					}

					echo $pages->page_links('category/'.$_GET['id'].'&');

				} catch(PDOException $e) {
				    echo $e->getMessage();
				}
?>
            </div>
            <!-- end /.col-md-8 -->

            <div class="col-lg-4 col-md-12">
                <aside class="sidebar sidebar--blog">
                    <div class="sidebar-card card--search card--blog_sidebar">
                        <div class="card-title">
                            <h4>Search Blog</h4>
                        </div>
                        <!-- end /.card-title -->

                        <div class="card_content">
                            <form action="#">
                                <div class="searc-wrap">
                                    <input type="text" placeholder="Search product here...">
                                    <button type="submit" class="search-wrap__btn">
                                        <span class="icon-magnifier"></span>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <!-- end /.card_content -->
                    </div>
                    <!-- end /.sidebar-card -->

                    <div class="sidebar-card card--blog_sidebar card--category">
                        <div class="card-title">
                            <h4>Categories</h4>
                        </div>
                        <div class="collapsible-content">
                            <ul class="card-content">
							<?php
$stmt = $db->query('SELECT catTitle, catSlug FROM blog_cats ORDER BY catID DESC');
while($row = $stmt->fetch()){
    echo '<li><a href="'.$base_url.'/category/'.$row['catSlug'].'">'.$row['catTitle'].'</a></li>';
}
?>
                            </ul>
                        </div>
                        <!-- end /.collapsible_content -->
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
        END BLOG AREA
=================================-->
<?php include 'include/footer.php'; ?>
</body>

</html>