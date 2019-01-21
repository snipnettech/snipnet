<?php
// Include config file
require_once "db/index.php";
require('class/blog.class.php');
$cat_slug = str_replace('.php', '', $_GET['id']);
$stmt = $db->prepare('SELECT * FROM forum_categories WHERE cat_slug = :cat_slug');
$stmt->execute(array(':cat_slug' => $cat_slug));
$row = $stmt->fetch();

//if post does not exists redirect user.
if($row['cat_id'] == ''){
	header('Location: $base_url/help');
	exit;
}
$pt = "Questions on ".$row['cat_name'];
$ds = $pt;
$kw = $ds;
$catID = $row['cat_id'];
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
    START SUPPORT FORUM AREA
=================================-->
<section class="support_threads_area section--padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="dwqa-container">
                    <div class="dwqa-questions-archive">
                        <form id="dwqa-search" class="dwqa-search">
                            <input data-nonce="8c3dbe4be6" type="text" placeholder="What do you want to know?" name="qs"
                                   value="" class="ui-autocomplete-input"
                                   autocomplete="off">
                        </form>
                        <!-- Ends: .dwqa-search -->
                        <div class="dwqa-question-filter">
                            <span>Filter:</span>
                            <a href="" class="active"><?php echo $row['cat_name']; ?></a>
                        </div>
                        <!-- Ends: .dwqa-question-filter -->
                        <div class="dwqa-questions-list">
<?php
				try {

					$pages = new Paginator('5','p');

					$stmt = $db->query("SELECT topic_id FROM forum_topics WHERE topic_cat ='$catID'");

					//pass number of records to
					$pages->set_total($stmt->rowCount());

					$stmt = $db->query("SELECT * FROM forum_topics WHERE topic_cat ='$catID' ORDER BY topic_id DESC ".$pages->get_limit());
					while($row = $stmt->fetch()){
?>
                            <div class="dwqa-question-item">
                                <div class="dwqa-question-title">
                                    <a href="<?php echo $base_url; ?>/help/<?php echo $row['topic_slug']; ?>"><?php echo $row['topic_subject']; ?></a>
                                </div>
                                <div class="dwqa-question-meta">
                                    <span title="Open" class="dwqa-status dwqa-status-<?php
								if($row['topic_status'] == 0){
									echo 'open';
								}elseif($row['topic_status'] == 1){
									echo 'answered';
								}elseif($row['topic_status'] == 2){
									echo 'resolved';
								}elseif($row['topic_status'] == 3){
									echo 'closed';
								}
								?>"><?php
								if($row['topic_status'] == 0){
									echo 'Open';
								}elseif($row['topic_status'] == 1){
									echo 'Answered';
								}elseif($row['topic_status'] == 2){
									echo 'Resolved';
								}elseif($row['topic_status'] == 3){
									echo 'Closed';
								}
								?></span>
                                    <span>
                                    <?php 
										$topic_by = $row['topic_by'];
										$stmt2 = $db->prepare('SELECT *	FROM users u, users_billing_info b WHERE u.userID = :topic_by AND b.userID = :topic_by');
						$stmt2->execute(array(':topic_by' => $topic_by));

						$usrRow = $stmt2->fetchAll(PDO::FETCH_ASSOC);

						$ulinks = array();
						foreach ($usrRow as $usr)
						{
						    $ulinks[] = "<a href='".$base_url."/developer/profile/".$usr['username']."' rel='tag'><img alt='' src='".$base_url."/images/avatar/".$usr['avatar']."' class='avatar avatar-48 photo avatar-default' width='30px' height=''/>".$usr['fname']." ".$usr['lname']."</a>";
						}
						echo implode(", ", $ulinks); 
						$td = $row['topic_date'];
						echo get_time_ago(strtotime("$td"));
						?></span>
                                    <span class="dwqa-question-category">&nbsp;•&nbsp;
									<?php 
									$cat_id = $row['topic_cat'];
									$stmt2 = $db->prepare('SELECT *	FROM  forum_categories WHERE cat_id = :cat_id');
						$stmt2->execute(array(':cat_id' => $cat_id));

						$catRow = $stmt2->fetchAll(PDO::FETCH_ASSOC);

						$links = array();
						foreach ($catRow as $cat)
						{
						    $links[] = "<a href='".$base_url."/help-cat/".$cat['cat_slug']."' rel='tag'>".$cat['cat_name']."</a>";
						}
						echo implode(", ", $links); ?>
                                        </span>
                                </div>
                                <div class="dwqa-question-stats">
                                        <span class="dwqa-views-count">
                                            <strong><?php echo $row['topic_views']; ?></strong><?php if($row['topic_views'] == 1 or $row['topic_views'] == 0){ echo "view"; }else{ echo "views"; } ?></span>
                                    <span class="dwqa-answers-count">
                                            <strong>
				<?php
				$topic_id = $row['topic_id'];
				$sel_query="SELECT * FROM forum_posts WHERE post_by <> '$topic_by' and post_topic = '$topic_id';";
                $result = mysqli_query($link,$sel_query);
                $count = mysqli_num_rows($result);
				echo $count;
				?></strong> <?php if($count == 1 or $count == 0){ echo "answer"; }else{ echo "answers"; } ?></span>
                                </div>
                            </div>
                            <!-- Ends: .dwqa-question-item -->
<?php
					}
?>
                        </div>
                        <!-- Ends: .dwqa-questions-list -->
                        <div class="dwqa-questions-footer">
<?php
					echo $pages->page_links();

				} catch(PDOException $e) {
				    echo $e->getMessage();
				}
?>
                        </div>
                        <!-- Ends: .dwqa-questions-footer -->
                    </div>
                    <!-- Ends: .dwqa-questions-archive -->
                </div>
                <!-- Ends: .dwqa-container -->
            </div>
            <!-- end .col-md-8 -->

<?php include 'include/help-sidebar.php'; ?>
        </div>
        <!-- end .row -->
    </div>
    <!-- end .container -->
</section>
<!--================================
        END SUPPORT FORUM AREA
=================================-->
<?php include 'include/footer.php'; ?>
</body>

</html>