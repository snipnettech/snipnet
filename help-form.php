<?php
// Include config file
require_once "db/index.php";
require_once "class/class.restrict.php";
require('class/blog.class.php');
$pt = "Ask a Question";
$ds = "Ask questions, get help from different snipnetworkers worldwide";
$kw = "Snipnetworks, snipnet";
if(isset($_POST['topic_subject'])){
$topic_subject = mysqli_real_escape_string($link, $_POST['topic_subject']);
$topic_cat = mysqli_real_escape_string($link, $_POST['topic_cat']);
$post_content = mysqli_real_escape_string($link, $_POST['post_content']);
$slug = str_replace(" ","-",$topic_subject);
if(mysqli_query($link, "INSERT INTO forum_topics(topic_subject,
                               topic_slug,
                               topic_date,
                               topic_cat,
                               topic_by) VALUES('" . $topic_subject . "','" . $slug . "',NOW(),'" . $topic_cat . "','" . $usr_id . "')")){
	
	$topicid = mysqli_insert_id($link);
	
	if(mysqli_query($link, "INSERT INTO
                            forum_posts(post_content,
                                  post_date,
                                  post_topic,
                                  post_by) VALUES('" . $post_content . "',NOW(),'" . $topicid . "','" . $usr_id . "')")){
									  
		header("location: help/$slug");
	}else{
		$report = "<div class='alert alert-warning' role='alert'>Unknown error occured.<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span class='icon-close' aria-hidden='true'></span></button></div>";
	}
}else{
	$report = "<div class='alert alert-warning' role='alert'>Unknown error occured, please try again<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span class='icon-close' aria-hidden='true'></span></button></div>";
}
}
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
        START FORUM FORM AREA
    =================================-->
    <section class="support_threads_area section--padding2">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
				<?php if(isset($report)){ echo $report; } ?>
                    <div class="question-form">
                        <form method="post" action="">
                            <div class="form-group">
                                <label>Question Title</label>
                                <input type="text" name="topic_subject" placeholder="Enter title here" required>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="post_content" id="trumbowyg-demo"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Category</label>
                                <div class="select-wrap select-wrap2">
                                    <select name="topic_cat">
                                     <?php
$sel_query="SELECT * FROM forum_categories ORDER by cat_id desc;";
$result = $link->query($sel_query) or die($link->error);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
?>
          <option value="<?php echo $row['cat_id']; ?>"><?php echo $row['cat_name']; ?></option>
<?php
        }
    }else{
		echo "<option>No categories defined yet.</option>";
}
?>
                                    </select>
                                    <span class="icon-arrow-down"></span>
                                </div>
                                <!-- end /.select-wrap -->
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
                                <button type="submit" class="btn btn--md btn-primary">Submit Question</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end .col-md-8 -->

<?php include 'include/help-sidebar.php'; ?>
            </div>
            <!-- end .row -->
        </div>
        <!-- end .container -->
    </section>
    <!--================================
            END FORUM FORM AREA
    =================================-->
<?php include 'include/footer.php'; ?>
</body>

</html>