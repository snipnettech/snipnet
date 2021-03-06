<?php
// Include config file
require_once "../db/index.php";
require_once "class/class.restrict.php";
$pt = "Notification";
$ds = "Build your dream project using the snipnet easy to use project builder";
$kw = "Snipnetworks, snipnet, project, builder";
?>
<!DOCTYPE html>
<html>
<?php include 'include/head.php'; ?>
    <body>
        <div class="main-wrapper">
<?php
include 'include/menu.php';
include 'include/sidebar.php';
?>
            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-sm-8">
							<h4 class="page-title">Activities</h4>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="activity">
								<div class="activity-box">
									<ul class="activity-list">
										<li>
											<div class="activity-user">
												<a href="profile.html" title="Lesley Grauer" data-toggle="tooltip" class="avatar">
													<img alt="Lesley Grauer" src="assets/img/user.jpg" class="img-responsive img-circle">
												</a>
											</div>
											<div class="activity-content">
												<div class="timeline-content">
													<a href="profile.html" class="name">Lesley Grauer</a> added new task <a href="#">Harvey Clinic</a>
													<span class="time">4 mins ago</span>
												</div>
											</div>
										</li>
										<li>
											<div class="activity-user">
												<a href="profile.html" class="avatar" title="Jeffery Lalor" data-toggle="tooltip" style="background-color: #ff6d00">L</a>
											</div>
											<div class="activity-content">
												<div class="timeline-content">
													<a href="profile.html" class="name">Jeffery Lalor</a> added <a href="profile.html" class="name">Loren Gatlin</a> and <a href="profile.html" class="name">Tarah Shropshire</a> to project <a href="#">Patient appointment booking</a>
													<span class="time">6 mins ago</span>
												</div>
											</div>
										</li>
										<li>
											<div class="activity-user">
												<a href="profile.html" title="Catherine Manseau" data-toggle="tooltip" class="avatar">
													<img alt="Catherine Manseau" src="assets/img/user.jpg" class="img-responsive img-circle">
												</a>
											</div>
											<div class="activity-content">
												<div class="timeline-content">
													<a href="profile.html" class="name">Catherine Manseau</a> completed task <a href="#">Appointment booking with payment gateway</a>
													<span class="time">12 mins ago</span>
												</div>
											</div>
										</li>
										<li>
											<div class="activity-user">
												<a href="#" title="Bernardo Galaviz" data-toggle="tooltip" class="avatar">
													<img alt="Bernardo Galaviz" src="assets/img/user.jpg" class="img-responsive img-circle">
												</a>
											</div>
											<div class="activity-content">
												<div class="timeline-content">
													<a href="profile.html" class="name">Bernardo Galaviz</a> changed the task name <a href="#">Doctor available module</a>
													<span class="time">1 day ago</span>
												</div>
											</div>
										</li>
										<li>
											<div class="activity-user">
												<a href="profile.html" title="Mike Litorus" data-toggle="tooltip" class="avatar">
													<img alt="Mike Litorus" src="assets/img/user.jpg" class="img-responsive img-circle">
												</a>
											</div>
											<div class="activity-content">
												<div class="timeline-content">
													<a href="profile.html" class="name">Mike Litorus</a> added new task <a href="#">Patient and Doctor video conferencing</a>
													<span class="time">2 days ago</span>
												</div>
											</div>
										</li>
										<li>
											<div class="activity-user">
												<a href="profile.html" title="Jeffery Lalor" data-toggle="tooltip" class="avatar">
													<img alt="Jeffery Lalor" src="assets/img/user.jpg" class="img-responsive img-circle">
												</a>
											</div>
											<div class="activity-content">
												<div class="timeline-content">
													<a href="profile.html" class="name">Jeffery Lalor</a> added <a href="profile.html" class="name">Jeffrey Warden</a> and <a href="profile.html" class="name">Bernardo Galaviz</a> to the task of <a href="#">Private chat module</a>
													<span class="time">7 days ago</span>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
                </div>
<?php include 'include/chat-aside.php'; ?>
            </div>
        </div>
<?php include 'include/footer.php'; ?>
    </body>
</html>