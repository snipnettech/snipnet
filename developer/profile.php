<?php
// Include config file
require_once "../db/index.php";
require_once "class/class.restrict.php";
$pt = "My Profile";
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
							<h4 class="page-title">My Profile</h4>
						</div>
						
						<div class="col-sm-4 text-right m-b-30">
							<a href="edit-profile.html" class="btn btn-primary rounded"><i class="fa fa-plus"></i> Edit Profile</a>
						</div>
					</div>
					<div class="card-box">
						<div class="row">
							<div class="col-md-12">
								<div class="profile-view">
									<div class="profile-img-wrap">
										<div class="profile-img">
											<a href="#"><img class="avatar" src="assets/img/user.jpg" alt=""></a>
										</div>
									</div>
									<div class="profile-basic">
										<div class="row">
											<div class="col-md-5">
												<div class="profile-info-left">
													<h3 class="user-name m-t-0 m-b-0">John Doe</h3>
													<small class="text-muted">Web Designer</small>
													<div class="staff-id">Employee ID : FT-0001</div>
													<div class="staff-msg"><a href="chat.html" class="btn btn-primary">Send Message</a></div>
												</div>
											</div>
											<div class="col-md-7">
												<ul class="personal-info">
													<li>
														<span class="title">Phone:</span>
														<span class="text"><a href="">9876543210</a></span>
													</li>
													<li>
														<span class="title">Email:</span>
														<span class="text"><a href="">johndoe@example.com</a></span>
													</li>
													<li>
														<span class="title">Birthday:</span>
														<span class="text">24th July</span>
													</li>
													<li>
														<span class="title">Address:</span>
														<span class="text">1861 Bayonne Ave, Manchester Township, NJ, 08759</span>
													</li>
													<li>
														<span class="title">Gender:</span>
														<span class="text">Male</span>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="card-box m-b-0">
								<h3 class="card-title">Skills</h3>
								<div class="skills">
									<span>IOS</span>
									<span>Android</span> 
									<span>Html</span>
									<span>CSS</span>
									<span>Codignitor</span>
									<span>Php</span>
									<span>Javascript</span>
									<span>Wordpress</span>
									<span>Jquery</span>
								</div>
							</div>
						</div>
						<div class="col-md-9">
							<div class="card-box">
								<h3 class="card-title">Education Informations</h3>
								<div class="experience-box">
									<ul class="experience-list">
										<li>
											<div class="experience-user">
												<div class="before-circle"></div>
											</div>
											<div class="experience-content">
												<div class="timeline-content">
													<a href="#/" class="name">International College of Arts and Science (UG)</a>
													<div>Bsc Computer Science</div>
													<span class="time">2000 - 2003</span>
												</div>
											</div>
										</li>
										<li>
											<div class="experience-user">
												<div class="before-circle"></div>
											</div>
											<div class="experience-content">
												<div class="timeline-content">
													<a href="#/" class="name">International College of Arts and Science (PG)</a>
													<div>Msc Computer Science</div>
													<span class="time">2000 - 2003</span>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<div class="card-box m-b-0">
								<h3 class="card-title">Experience</h3>
								<div class="experience-box">
									<ul class="experience-list">
										<li>
											<div class="experience-user">
												<div class="before-circle"></div>
											</div>
											<div class="experience-content">
												<div class="timeline-content">
													<a href="#/" class="name">Web Designer at Zen Corporation</a>
													<span class="time">Jan 2013 - Present (5 years 2 months)</span>
												</div>
											</div>
										</li>
										<li>
											<div class="experience-user">
												<div class="before-circle"></div>
											</div>
											<div class="experience-content">
												<div class="timeline-content">
													<a href="#/" class="name">Web Designer at Ron-tech</a>
													<span class="time">Jan 2013 - Present (5 years 2 months)</span>
												</div>
											</div>
										</li>
										<li>
											<div class="experience-user">
												<div class="before-circle"></div>
											</div>
											<div class="experience-content">
												<div class="timeline-content">
													<a href="#/" class="name">Web Designer at Dalt Technology</a>
													<span class="time">Jan 2013 - Present (5 years 2 months)</span>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
							
						</div>
					</div>
					<br/>
			<h3 class="card-title">My Projects</h3>
			<br/>
			<div id="myprojects" class="tab-pane fade in active">
									<div class="row">
										<div class="col-lg-3 col-sm-4">
											<div class="card-box project-box">
												<div class="dropdown profile-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#" data-toggle="modal" data-target="#edit_project"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="#" data-toggle="modal" data-target="#delete_project"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
													</ul>
												</div>
												<h4 class="project-title"><a href="project-view.html">Food and Drinks</a></h4>
												<small class="block text-ellipsis m-b-15">
													<span class="text-xs">1</span> <span class="text-muted">open tasks, </span>
													<span class="text-xs">9</span> <span class="text-muted">tasks completed</span>
												</small>
												<p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
													typesetting industry. When an unknown printer took a galley of type and
													scrambled it...
												</p>
												<div class="pro-deadline m-b-15">
													<div class="sub-title">
														Deadline:
													</div>
													<div class="text-muted">
														8 Sep 2017
													</div>
												</div>
												<div class="project-members m-b-15">
													<div>Project Leader :</div>
													<ul class="team-members">
														<li>
															<a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img src="assets/img/user.jpg" alt="Jeffery Lalor"></a>
														</li>
													</ul>
												</div>
												<div class="project-members m-b-15">
													<div>Team :</div>
													<ul class="team-members">
														<li>
															<a href="#" data-toggle="tooltip" title="John Doe"><img src="assets/img/user.jpg" alt="John Doe"></a>
														</li>
														<li>
															<a href="#" data-toggle="tooltip" title="Richard Miles"><img src="assets/img/user.jpg" alt="Richard Miles"></a>
														</li>
														<li>
															<a href="#" data-toggle="tooltip" title="John Smith"><img src="assets/img/user.jpg" alt="John Smith"></a>
														</li>
														<li>
															<a href="#" data-toggle="tooltip" title="Mike Litorus"><img src="assets/img/user.jpg" alt="Mike Litorus"></a>
														</li>
														<li>
															<a href="#" class="all-users">+15</a>
														</li>
													</ul>
												</div>
												<p class="m-b-5">Progress <span class="text-success pull-right">40%</span></p>
												<div class="progress progress-xs m-b-0">
													<div class="progress-bar progress-bar-success" role="progressbar" data-toggle="tooltip" title="40%" style="width: 40%"></div>
												</div>
											</div>
										</div>
										<div class="col-lg-3 col-sm-4">
											<div class="card-box project-box">
												<div class="dropdown profile-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#" data-toggle="modal" data-target="#edit_project"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="#" data-toggle="modal" data-target="#delete_project"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
													</ul>
												</div>
												<h4 class="project-title"><a href="project-view.html">School Guru</a></h4>
												<small class="block text-ellipsis m-b-15">
													<span class="text-xs">2</span> <span class="text-muted">open tasks, </span>
													<span class="text-xs">5</span> <span class="text-muted">tasks completed</span>
												</small>
												<p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
													typesetting industry. When an unknown printer took a galley of type and
													scrambled it...
												</p>
												<div class="pro-deadline m-b-15">
													<div class="sub-title">
														Deadline:
													</div>
													<div class="text-muted">
														8 Sep 2017
													</div>
												</div>
												<div class="project-members m-b-15">
													<div>Project Leader :</div>
													<ul class="team-members">
														<li>
															<a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img src="assets/img/user.jpg" alt="Jeffery Lalor"></a>
														</li>
													</ul>
												</div>
												<div class="project-members m-b-15">
													<div>Team :</div>
													<ul class="team-members">
														<li>
															<a href="#" data-toggle="tooltip" title="John Doe"><img src="assets/img/user.jpg" alt="John Doe"></a>
														</li>
														<li>
															<a href="#" data-toggle="tooltip" title="Richard Miles"><img src="assets/img/user.jpg" alt="Richard Miles"></a>
														</li>
														<li>
															<a href="#" data-toggle="tooltip" title="John Smith"><img src="assets/img/user.jpg" alt="John Smith"></a>
														</li>
														<li>
															<a href="#" data-toggle="tooltip" title="Mike Litorus"><img src="assets/img/user.jpg" alt="Mike Litorus"></a>
														</li>
														<li>
															<a href="#" class="all-users">+15</a>
														</li>
													</ul>
												</div>
												<p class="m-b-5">Progress <span class="text-success pull-right">40%</span></p>
												<div class="progress progress-xs m-b-0">
													<div class="progress-bar progress-bar-success" role="progressbar" data-toggle="tooltip" title="40%" style="width: 40%"></div>
												</div>
											</div>
										</div>
										<div class="col-lg-3 col-sm-4">
											<div class="card-box project-box">
												<div class="dropdown profile-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#" data-toggle="modal" data-target="#edit_project"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="#" data-toggle="modal" data-target="#delete_project"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
													</ul>
												</div>
												<h4 class="project-title"><a href="project-view.html">Penabook</a></h4>
												<small class="block text-ellipsis m-b-15">
													<span class="text-xs">3</span> <span class="text-muted">open tasks, </span>
													<span class="text-xs">3</span> <span class="text-muted">tasks completed</span>
												</small>
												<p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
													typesetting industry. When an unknown printer took a galley of type and
													scrambled it...
												</p>
												<div class="pro-deadline m-b-15">
													<div class="sub-title">
														Deadline:
													</div>
													<div class="text-muted">
														8 Sep 2017
													</div>
												</div>
												<div class="project-members m-b-15">
													<div>Project Leader :</div>
													<ul class="team-members">
														<li>
															<a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img src="assets/img/user.jpg" alt="Jeffery Lalor"></a>
														</li>
													</ul>
												</div>
												<div class="project-members m-b-15">
													<div>Team :</div>
													<ul class="team-members">
														<li>
															<a href="#" data-toggle="tooltip" title="John Doe"><img src="assets/img/user.jpg" alt="John Doe"></a>
														</li>
														<li>
															<a href="#" data-toggle="tooltip" title="Richard Miles"><img src="assets/img/user.jpg" alt="Richard Miles"></a>
														</li>
														<li>
															<a href="#" data-toggle="tooltip" title="John Smith"><img src="assets/img/user.jpg" alt="John Smith"></a>
														</li>
														<li>
															<a href="#" data-toggle="tooltip" title="Mike Litorus"><img src="assets/img/user.jpg" alt="Mike Litorus"></a>
														</li>
														<li>
															<a href="#" class="all-users">+15</a>
														</li>
													</ul>
												</div>
												<p class="m-b-5">Progress <span class="text-success pull-right">40%</span></p>
												<div class="progress progress-xs m-b-0">
													<div class="progress-bar progress-bar-success" role="progressbar" data-toggle="tooltip" title="40%" style="width: 40%"></div>
												</div>
											</div>
										</div>
										<div class="col-lg-3 col-sm-4">
											<div class="card-box project-box">
												<div class="dropdown profile-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#" data-toggle="modal" data-target="#edit_project"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="#" data-toggle="modal" data-target="#delete_project"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
													</ul>
												</div>
												<h4 class="project-title"><a href="project-view.html">Harvey Clinic</a></h4>
												<small class="block text-ellipsis m-b-15">
													<span class="text-xs">12</span> <span class="text-muted">open tasks, </span>
													<span class="text-xs">4</span> <span class="text-muted">tasks completed</span>
												</small>
												<p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
													typesetting industry. When an unknown printer took a galley of type and
													scrambled it...
												</p>
												<div class="pro-deadline m-b-15">
													<div class="sub-title">
														Deadline:
													</div>
													<div class="text-muted">
														8 Sep 2017
													</div>
												</div>
												<div class="project-members m-b-15">
													<div>Project Leader :</div>
													<ul class="team-members">
														<li>
															<a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img src="assets/img/user.jpg" alt="Jeffery Lalor"></a>
														</li>
													</ul>
												</div>
												<div class="project-members m-b-15">
													<div>Team :</div>
													<ul class="team-members">
														<li>
															<a href="#" data-toggle="tooltip" title="John Doe"><img src="assets/img/user.jpg" alt="John Doe"></a>
														</li>
														<li>
															<a href="#" data-toggle="tooltip" title="Richard Miles"><img src="assets/img/user.jpg" alt="Richard Miles"></a>
														</li>
														<li>
															<a href="#" data-toggle="tooltip" title="John Smith"><img src="assets/img/user.jpg" alt="John Smith"></a>
														</li>
														<li>
															<a href="#" data-toggle="tooltip" title="Mike Litorus"><img src="assets/img/user.jpg" alt="Mike Litorus"></a>
														</li>
														<li>
															<a href="#" class="all-users">+15</a>
														</li>
													</ul>
												</div>
												<p class="m-b-5">Progress <span class="text-success pull-right">40%</span></p>
												<div class="progress progress-xs m-b-0">
													<div class="progress-bar progress-bar-success" role="progressbar" data-toggle="tooltip" title="40%" style="width: 40%"></div>
												</div>
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