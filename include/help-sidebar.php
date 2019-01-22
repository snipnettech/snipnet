            <div class="col-lg-3">
                <aside class="sidebar support--sidebar">
                    <?php if($baseURL == "help-form"){ }else{ ?><a href="<?php echo $base_url; ?>/help-form" class="login_promot"><?php if($usr_logged == 0){ echo "Ask a Question"; }else{ echo "Login to Ask a Question"; } ?></a><?php } ?>

                    <div class="sidebar-card card--forum_categories">
                        <div class="card-title">
                            <h4>Categories</h4>
                        </div>
                        <div class="collapsible-content">
                            <ul class="card-content">
<?php
$sel_query="SELECT * FROM forum_categories ORDER by cat_id desc;";
$result = $link->query($sel_query) or die($link->error);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
?>
                                <li>
                                    <a href="<?php echo $base_url; ?>/help-cat/<?php echo $row['cat_slug']; ?>">
                                        <?php echo $row['cat_name']; ?>
                                        <span class="item-count">
				<?php
				$cat_id = $row['cat_id'];
				$sel_query3="SELECT * FROM forum_topics WHERE topic_cat = '$cat_id';";
                $result3 = mysqli_query($link,$sel_query3);
                $CATcount = mysqli_num_rows($result3);
				echo $CATcount;
				?>
				</span>
                                    </a>
                                </li>
<?php
        }
    }else{
		echo 'No categories defined yet.';
}
?>
                            </ul>
                        </div>
                        <!-- end /.collapsible_content -->
                    </div>
                    <!-- end .card--forum_categories -->

                    <div class="sidebar-card card--top_discussion">
                        <div class="card-title">
                            <h4>Popular Questions</h4>
                        </div>
                        <div class="collapsible-content">
                            <ul class="card-content">
<?php
				try {

					$pages = new Paginator('5','p');

					$stmt = $db->query('SELECT topic_id FROM forum_topics');

					//pass number of records to
					$pages->set_total($stmt->rowCount());

					$stmt = $db->query('SELECT * FROM forum_topics WHERE topic_views > 10 ORDER BY topic_id DESC '.$pages->get_limit());
					while($row = $stmt->fetch()){
?>
                                <li>
                                    <a href="<?php echo $base_url; ?>/help/<?php echo $row['topic_slug']; ?>"><?php echo $row['topic_subject']; ?>
                                        <span>
										<?php
										$ptd = $row['topic_date'];
						                echo get_time_ago(strtotime("$ptd"));
						                ?></span>
                                    </a>
                                </li>
<?php
					}
				} catch(PDOException $e) {
				    echo $e->getMessage();
				}
?>
                            </ul>
                        </div>
                        <!-- end /.collapsible_content -->
                    </div>
                    <!-- end .card--forum_categories -->
                </aside>
                <!-- end .sidebar -->
            </div>
            <!-- end .col-md-4 -->