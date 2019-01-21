<?php
// Include config file
require_once "db/index.php";
$pt = "Blog";
$ds = "Latest news and insights from Snipnetworks";
$kw = "Snipnetworks, snipnet";
require('class/blog.class.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'include/head.php'; ?>
<body class="home1 mutlti-vendor">
<?php include 'include/menu.php'; ?>
<!--================================
        START BLOG AREA
=================================-->
<?php
				try {

					$pages = new Paginator('1','p');

					$stmt = $db->query('SELECT postID FROM blog_posts_seo');

					//pass number of records to
					$pages->set_total($stmt->rowCount());

					$stmt = $db->query('SELECT postID, postTitle, postImg, postSlug, postDesc, postDate FROM blog_posts_seo ORDER BY RAND() DESC '.$pages->get_limit());
					while($row = $stmt->fetch()){
?>
<section class="about_hero bgimage">
    <div class="bg_image_holder">
        <img src="images/blog/<?php echo $row['postImg']; ?>" alt="">
    </div>

    <div class="container content_above">
        <div class="row">
            <div class="col-md-12">
                <div class="about_hero_contents">
                    <h1 class="display-4"><?php echo $row['postTitle']; ?></h1>
                    <font style="color:#fff;"><?php echo $row['postDesc']; ?></font>

                    <div class="about_hero_btns">
                        <a href="article/<?php echo $row['postSlug']; ?>" class="btn btn-primary btn--lg">Read more</a>
                    </div>
                </div>
                <!-- end /.about_hero_contents -->
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end /.row-->
    </div>
    <!-- end /.container -->
</section>
<?php
					}

				} catch(PDOException $e) {
				    echo $e->getMessage();
				}
?>
<section class="blog_area section--padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
			
<?php
				try {

					$pages = new Paginator('5','p');

					$stmt = $db->query('SELECT postID FROM blog_posts_seo');

					//pass number of records to
					$pages->set_total($stmt->rowCount());

					$stmt = $db->query('SELECT postID, postTitle, postImg, postSlug, postDesc, postDate FROM blog_posts_seo ORDER BY postID DESC '.$pages->get_limit());
					while($row = $stmt->fetch()){
?>
                <div class="single_blog blog--default">
                    <figure>
                        <img src="images/blog/<?php echo $row['postImg']; ?>" alt="Blog image">

                        <figcaption>
                            <div class="blog__content">
                                <a href="article/<?php echo $row['postSlug']; ?>" class="blog__title">
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
						    $links[] = "<a href='category/".$cat['catSlug']."'>".$cat['catTitle']."</a>";
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
                                <a href="article/<?php echo $row['postSlug']; ?>" class="btn btn--md btn-primary">Read More</a>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <!-- end /.single_blog -->
<?php
					}

					echo $pages->page_links();

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
    echo '<li><a href="category/'.$row['catSlug'].'">'.$row['catTitle'].'</a></li>';
}
?>
                            </ul>
                        </div>
                        <!-- end /.collapsible_content -->
                    </div>
                    <!-- end /.sidebar-card -->

                    <div class="banner">
                        <img src="images/banner.jpg" alt="Banner">
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