<?php
// Include config file
require_once "db/index.php";
require('class/blog.class.php');
$topic_slug = str_replace('.php', '', $_GET['id']);
$stmt = $db->prepare('SELECT * FROM forum_topics f, forum_posts p, forum_categories c WHERE f.topic_slug = :topic_slug and p.post_topic = f.topic_id and c.cat_id = f.topic_cat');
$stmt->execute(array(':topic_slug' => $topic_slug));
$row = $stmt->fetch();

//if post does not exists redirect user.
if($row['topic_id'] == ''){
	header("Location: $base_url/help");
	exit;
}
$tt = $row['topic_subject'];
$pt = "Question: $tt";
$ds = $row['topic_subject'];
$kw = $row['topic_subject'];
$topic_id = $row['topic_id'];
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
    START FORUM DETAILS AREA
=================================-->
<section class="support_details_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="dwqa-container">
                    <div class="dwqa-single-question">
                        <div class="dwqa-breadcrumbs">
                            <a href="<?php echo $base_url; ?>/help">Support Forum</a>
                            <span class="dwqa-sep"> › </span>
                            <a href="<?php echo $base_url; ?>/help-cat/<?php echo $row['cat_slug']; ?>">Category: <?php echo $row['cat_name']; ?></a>
                            <span class="dwqa-sep"> › </span>
                            <span class="dwqa-current"><?php echo $row['topic_subject']; ?></span>
                        </div>
                        <!-- Ends: .dwqa-breadcrumbs -->
                        <div class="dwqa-question-item">
                            <div class="dwqa-question-meta">
                                    <span>
									<?php 
										$topic_by = $row['topic_by'];
										$stmt2 = $db->prepare('SELECT *	FROM users u, users_billing_info b WHERE u.userID = :topic_by AND b.userID = :topic_by');
						$stmt2->execute(array(':topic_by' => $topic_by));

						$usrRow = $stmt2->fetchAll(PDO::FETCH_ASSOC);

						$ulinks = array();
						foreach ($usrRow as $usr)
						{
						    $ulinks[] = "<a href='".$base_url."/developer/profile/".$usr['username']."' rel='tag'><img alt='' src='".$base_url."/images/avatar/".$usr['avatar']."' class='avatar avatar-48 photo' width='48' height='48'/>".$usr['fname']." ".$usr['lname']."</a>";
						}
						echo implode(", ", $ulinks); 
						$td = $row['topic_date'];
						echo ' Asked ';
						echo get_time_ago(strtotime("$td"));
						?>
						</span>
                                <span class="dwqa-question-actions"></span>
                            </div>
                            <div class="dwqa-question-content">
                                <p><?php echo $row['post_content']; ?>
                                </p>
                            </div>
                        </div>
                        <!-- Ends: .dwqa-question-item -->
<?php
$sel_query="SELECT * FROM forum_posts WHERE post_topic = '$topic_id' and post_by <> '$topic_by';";
$result = $link->query($sel_query) or die($link->error);
$an_count = $result->num_rows;
?>
                        <div class="dwqa-answers">
                            <div class="dwqa-answers-title"><h5><?php echo $an_count; ?> <?php if($an_count == 1 or $an_count == 0){ echo "answer"; }else{ echo "answers"; } ?></h5></div>
                            <div class="dwqa-answers-list">
<?php
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()){
?>
                                <div class="dwqa-answer-item">
                                    <div class="dwqa-answer-meta">
                                            <span>
                                    <?php 
										$post_by = $row['post_by'];
										$stmt2 = $db->prepare('SELECT *	FROM users u, users_billing_info b WHERE u.userID = :post_by AND b.userID = :post_by');
						$stmt2->execute(array(':post_by' => $post_by));

						$usrRow = $stmt2->fetchAll(PDO::FETCH_ASSOC);

						$ulinks = array();
						foreach ($usrRow as $usr)
						{
						    $ulinks[] = "<a href='".$base_url."/developer/profile/".$usr['username']."' rel='tag'><img alt='' src='".$base_url."/images/avatar/".$usr['avatar']."' class='avatar avatar-48 photo' width='48' height='48'/>".$usr['fname']." ".$usr['lname']."</a>";
						}
						echo implode(", ", $ulinks); 
						$td = $row['post_date'];
						echo ' Answered ';
						echo get_time_ago(strtotime("$td"));
						?>
                         <!--  <span class="dwqa-label dwqa-staff">Staff</span> -->
						 </span>
                                    </div>
                                    <div class="dwqa-answer-content">
<?php
if($row['post_report'] == 1){
	echo "<right><span title='Correct Answer' class='icon-check color-primary' style='font-size:50px;'></span></right>";
}
?>
                                        <p><?php echo $row['post_content']; ?></p>
                                    </div>
                                </div>
<?php }

}

?>
                            </div>
                            <!-- dwqa-answers-list -->
                        </div>
                        <!-- Ends: .dwqa-answers -->
                    </div>
                    <!-- Ends: .dwqa-single-question -->
                </div>
                <!-- Ends: .dwqa-container -->
<br/><br/><br/>
<div class="question-form">
                        <form method="post" action="">
                            <div class="form-group">
                                <label>Reply</label>
                                <textarea name="post_content" id="trumbowyg-demo"></textarea>
                            </div>
                            <div class="form-group">
                                <div class="attachments">
                                    <label>Attachments</label>
                                    <label>
                                        <span class="icon-paper-clip"></span> Add File
                                        <span>or Drop Files Here</span>
                                        <input type="file" style="display:none;">
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn--md btn-primary">Submit Answer</button>
                            </div>
                        </form>
                    </div>
            </div>
            <!-- Ends: .col-lg-9 -->

<?php include 'include/help-sidebar.php'; ?>
        </div>
        <!-- end .row -->
    </div>
    <!-- end .container -->
</section>
<!--================================
        END FORUM DETAILS AREA
=================================-->
<?php include 'include/footer.php'; ?>
</body>

</html>