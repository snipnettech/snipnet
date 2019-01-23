<?php
// Include config file
require_once "../db/index.php";
require_once "class/class.restrict.php";
$pt = "Tasks";
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
?>
            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div class="sidebar-menu">
						<ul>
							<li> 
								<a href="<?php echo $base_url; ?>/index"><i class="fa fa-home"></i> <span>Back to Home</span></a>
							</li>
							<li class="menu-title">Projects <a href="#" data-toggle="modal" data-target="#create_project"><i class="fa fa-plus"></i></a></li>
							<li> 
								<a href="tasks">School Guru</a>
							</li>
							<li class="active"> 
								<a href="tasks">Harvey Clinic</a>
							</li>
							<li> 
								<a href="tasks">Penabook</a>
							</li>
							<li> 
								<a href="tasks">Food and Drinks</a>
							</li>
						</ul>
					</div>
                </div>
            </div>
            <div class="page-wrapper">
				<div class="chat-main-row">
					<div class="chat-main-wrapper">
						<div class="col-xs-7 message-view task-view">
							<div class="chat-window">
								<div class="chat-header">
									<div class="navbar">
										<div class="pull-left">
											<div class="add-task-btn-wrapper">
												<span class="add-task-btn btn btn-default btn-xs">
													Add Task
												</span>
											</div>
										</div>
										<ul class="nav navbar-nav pull-right chat-menu">
											<li class="dropdown">
												<a href="" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-cog"></i></a>
												<ul class="dropdown-menu">
													<li><a href="javascript:void(0)">Pending Tasks</a></li>
													<li><a href="javascript:void(0)">Completed Tasks</a></li>
													<li><a href="javascript:void(0)">All Tasks</a></li>
												</ul>
											</li>
										</ul>
										<a class="task-chat profile-rightbar pull-right" href="#task_window"><i class="fa fa fa-comment"></i></a>
									</div>
								</div>
								<div class="chat-contents">
									<div class="chat-content-wrap">
										<div class="chat-wrap-inner">
											<div class="chat-box">
												<div class="task-wrapper">
													<div class="task-list-container">
														<div class="task-list-body">
															<ul id="task-list">
																<li class="task">
																	<div class="task-container">
																		<span class="task-action-btn task-check">
																			<span class="action-circle large complete-btn" title="Mark Complete">
																				<i class="material-icons">check</i>
																			</span>
																		</span>
																		<span class="task-label" contenteditable="true">Patient appointment booking</span>
																		<span class="task-action-btn task-btn-right">
																			<span class="action-circle large" title="Assign">
																				<i class="material-icons">person_add</i>
																			</span>
																			<span class="action-circle large delete-btn" title="Delete Task">
																				<i class="material-icons">delete</i>
																			</span>
																		</span>
																	</div>
																</li>
																<li class="task">
																	<div class="task-container">
																		<span class="task-action-btn task-check">
																			<span class="action-circle large complete-btn" title="Mark Complete">
																				<i class="material-icons">check</i>
																			</span>
																		</span>
																		<span class="task-label" contenteditable="true">Appointment booking with payment gateway</span>
																		<span class="task-action-btn task-btn-right">
																			<span class="action-circle large" title="Assign">
																				<i class="material-icons">person_add</i>
																			</span>
																			<span class="action-circle large delete-btn" title="Delete Task">
																				<i class="material-icons">delete</i>
																			</span>
																		</span>
																	</div>
																</li>
																<li class="completed task">
																	<div class="task-container">
																		<span class="task-action-btn task-check">
																			<span class="action-circle large complete-btn" title="Mark Complete">
																				<i class="material-icons">check</i>
																			</span>
																		</span>
																		<span class="task-label">Doctor available module</span>
																		<span class="task-action-btn task-btn-right">
																			<span class="action-circle large" title="Assign">
																				<i class="material-icons">person_add</i>
																			</span>
																			<span class="action-circle large delete-btn" title="Delete Task">
																				<i class="material-icons">delete</i>
																			</span>
																		</span>
																	</div>
																</li>
																<li class="task">
																	<div class="task-container">
																		<span class="task-action-btn task-check">
																			<span class="action-circle large complete-btn" title="Mark Complete">
																				<i class="material-icons">check</i>
																			</span>
																		</span>
																		<span class="task-label" contenteditable="true">Patient and Doctor video conferencing</span>
																		<span class="task-action-btn task-btn-right">
																			<span class="action-circle large" title="Assign">
																				<i class="material-icons">person_add</i>
																			</span>
																			<span class="action-circle large delete-btn" title="Delete Task">
																				<i class="material-icons">delete</i>
																			</span>
																		</span>
																	</div>
																</li>
																<li class="task">
																	<div class="task-container">
																		<span class="task-action-btn task-check">
																			<span class="action-circle large complete-btn" title="Mark Complete">
																				<i class="material-icons">check</i>
																			</span>
																		</span>
																		<span class="task-label" contenteditable="true">Private chat module</span>
																		<span class="task-action-btn task-btn-right">
																			<span class="action-circle large" title="Assign">
																				<i class="material-icons">person_add</i>
																			</span>
																			<span class="action-circle large delete-btn" title="Delete Task">
																				<i class="material-icons">delete</i>
																			</span>
																		</span>
																	</div>
																</li>
																<li class="task">
																	<div class="task-container">
																		<span class="task-action-btn task-check">
																			<span class="action-circle large complete-btn" title="Mark Complete">
																				<i class="material-icons">check</i>
																			</span>
																		</span>
																		<span class="task-label" contenteditable="true">Patient Profile add</span>
																		<span class="task-action-btn task-btn-right">
																			<span class="action-circle large" title="Assign">
																				<i class="material-icons">person_add</i>
																			</span>
																			<span class="action-circle large delete-btn" title="Delete Task">
																				<i class="material-icons">delete</i>
																			</span>
																		</span>
																	</div>
																</li>
															</ul>
														</div>
														<div class="task-list-footer">
															<div class="new-task-wrapper">
																<textarea  id="new-task" placeholder="Enter new task here. . ."></textarea>
																<span class="error-message hidden">You need to enter a task first</span>
																<span class="add-new-task-btn btn" id="add-task">Add Task</span>
																<span class="cancel-btn btn" id="close-task-panel">Close</span>
															</div>
														</div>
													</div>
												</div>
												<div class="notification-popup hide">
													<p>
														<span class="task"></span>
														<span class="notification-text"></span>
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-5 message-view task-chat-view" id="task_window">
							<div class="chat-window">
								<div class="chat-header">
									<div class="navbar">
										<div class="task-assign">
											<span class="assign-title">Assigned to </span> 
											<a href="#" data-toggle="tooltip" data-placement="bottom" title="John Doe">
												<img src="assets/img/user.jpg" class="avatar" alt="" height="20" width="20">
											</a>
											<a href="#" class="followers-add" title="Add Assignee" data-toggle="modal" data-target="#assignee"><i class="material-icons">add</i></a>
										</div>
										<ul class="nav navbar-nav pull-right chat-menu">
											<li class="dropdown">
												<a href="" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
												<ul class="dropdown-menu">
													<li><a href="javascript:void(0)">Delete Task</a></li>
													<li><a href="javascript:void(0)">Settings</a></li>
												</ul>
											</li>
										</ul>
									</div>
								</div>
								<div class="chat-contents task-chat-contents">
									<div class="chat-content-wrap">
										<div class="chat-wrap-inner">
											<div class="chat-box">
												<div class="chats">
													<h4>Harvey Clinic Phase 1</h4>
													<hr class="task-line" />
													<div class="task-information">
														<span class="task-info-line"><a class="task-user" href="#">Lesley Grauer</a> <span class="task-info-subject">created task</span></span>
														<div class="task-time">Jan 26, 2015</div>
													</div>
													<div class="task-information">
														<span class="task-info-line"><a class="task-user" href="#">Lesley Grauer</a> <span class="task-info-subject">added to Harvey Clinic</span></span>
														<div class="task-time">Jan 26, 2015</div>
													</div>
													<div class="task-information">
														<span class="task-info-line"><a class="task-user" href="#">Lesley Grauer</a> <span class="task-info-subject">assigned to John Doe</span></span>
														<div class="task-time">Jan 26, 2015</div>
													</div>
													<hr class="task-line" />
													<div class="task-information">
														<span class="task-info-line"><a class="task-user" href="#">John Doe</a> <span class="task-info-subject">changed the due date to Sep 28</span> </span>
														<div class="task-time">9:09pm</div>
													</div>
													<div class="task-information">
														<span class="task-info-line"><a class="task-user" href="#">John Doe</a> <span class="task-info-subject">assigned to you</span></span>
														<div class="task-time">9:10pm</div>
													</div>
													<div class="chat chat-left">
														<div class="chat-avatar">
															<a href="profile.html" class="avatar">
																<img alt="John Doe" src="assets/img/user.jpg" class="img-responsive img-circle">
															</a>
														</div>
														<div class="chat-body">
															<div class="chat-bubble">
																<div class="chat-content">
																	<span class="task-chat-user">John Doe</span> <span class="chat-time">8:35 am</span>
																	<p>I'm just looking around.</p>
																	<p>Will you tell me something about yourself? </p>
																</div>
															</div>
														</div>
													</div>
													<div class="completed-task-msg"><span class="task-success"><a href="#">John Doe</a> completed this task.</span> <span class="task-time">Today at 9:27am</span></div>
													<div class="chat chat-left">
														<div class="chat-avatar">
															<a href="profile.html" class="avatar">
																<img alt="John Doe" src="assets/img/user.jpg" class="img-responsive img-circle">
															</a>
														</div>
														<div class="chat-body">
															<div class="chat-bubble">
																<div class="chat-content">
																	<span class="task-chat-user">John Doe</span> <span class="file-attached">attached 3 files <i class="fa fa-paperclip" aria-hidden="true"></i></span> <span class="chat-time">Dec 17, 2014 at 4:32am</span>
																	<ul class="attach-list">
																		<li><i class="fa fa-file"></i> <a href="#">project_document.avi</a></li>
																		<li><i class="fa fa-file"></i> <a href="#">video_conferencing.psd</a></li>
																		<li><i class="fa fa-file"></i> <a href="#">landing_page.psd</a></li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
													<div class="chat chat-left">
														<div class="chat-avatar">
															<a href="profile.html" class="avatar">
																<img alt="John Doe" src="assets/img/user.jpg" class="img-responsive img-circle">
															</a>
														</div>
														<div class="chat-body">
															<div class="chat-bubble">
																<div class="chat-content">
																	<span class="task-chat-user">Jeffery Lalor</span> <span class="file-attached">attached file <i class="fa fa-paperclip" aria-hidden="true"></i></span> <span class="chat-time">Yesterday at 9:16pm</span>
																	<ul class="attach-list">
																		<li class="pdf-file"><i class="fa fa-file-pdf-o"></i> <a href="#">Document_2016.pdf</a></li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
													<div class="chat chat-left">
														<div class="chat-avatar">
															<a href="profile.html" class="avatar">
																<img alt="John Doe" src="assets/img/user.jpg" class="img-responsive img-circle">
															</a>
														</div>
														<div class="chat-body">
															<div class="chat-bubble">
																<div class="chat-content">
																	<span class="task-chat-user">Jeffery Lalor</span> <span class="file-attached">attached file <i class="fa fa-paperclip" aria-hidden="true"></i></span> <span class="chat-time">Today at 12:42pm</span>
																	<ul class="attach-list">
																		<li class="img-file">
																			<div class="attach-img-download"><a href="#">logo2.png</a></div>
																			<div class="task-attach-img"><img src="assets/img/logo2.png" alt=""></div>
																		</li>
																		<li class="img-file">
																			<div class="attach-img-download"><a href="#">avatar-1.jpg</a></div>
																			<div class="task-attach-img"><img src="assets/img/user.jpg" alt=""></div>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
													<div class="task-information"><span class="task-info-line"><a class="task-user" href="#">John Doe</a> <span class="task-info-subject">marked task as incomplete</span></span><div class="task-time">1:16pm</div></div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="chat-footer">
									<div class="message-bar">
										<div class="message-inner">
											<a class="link attach-icon" href="#" data-toggle="modal" data-target="#drag_files"><img src="assets/img/attachment.png" alt=""></a>
											<div class="message-area"><div class="input-group">
												<textarea class="form-control" placeholder="Type message..."></textarea>
												<span class="input-group-btn">
													<button class="btn btn-primary" type="button"><i class="fa fa-send"></i></button>
												</span>
												</div>
											</div>
										</div>
									</div>
									<div class="project-members task-followers">
										<span class="followers-title">Followers</span>
										<a href="#" data-toggle="tooltip" title="Jeffery Lalor">
											<img src="assets/img/user.jpg" class="avatar" alt="Jeffery Lalor" height="20" width="20">
										</a>
										<a href="#" data-toggle="tooltip" title="Richard Miles">
											<img src="assets/img/user.jpg" class="avatar" alt="Richard Miles" height="20" width="20">
										</a>
										<a href="#" data-toggle="tooltip" title="John Smith">
											<img src="assets/img/user.jpg" class="avatar" alt="John Smith" height="20" width="20">
										</a>
										<a href="#" data-toggle="tooltip" title="Mike Litorus">
											<img src="assets/img/user.jpg" class="avatar" alt="Mike Litorus" height="20" width="20">
										</a>
										<a href="#" class="followers-add" data-toggle="modal" data-target="#task_followers"><i class="material-icons">add</i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="create_project" class="modal custom-modal fade" role="dialog">
					<div class="modal-dialog">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<div class="modal-content modal-lg">
							<div class="modal-header">
								<h4 class="modal-title">Create Project</h4>
							</div>
							<div class="modal-body">
								<form>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Project Name</label>
												<input class="form-control" type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Client</label>
												<select class="select">
													<option>Global Technologies</option>
													<option>Delta Infotech</option>
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Start Date</label>
												<div class="cal-icon"><input class="form-control datetimepicker" type="text"></div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>End Date</label>
												<div class="cal-icon"><input class="form-control datetimepicker" style="" type="text"></div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-3">
											<div class="form-group">
												<label>Rate</label>
												<input placeholder="$50" class="form-control" type="text">
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label>&nbsp;</label>
												<select class="select">
													<option>Hourly</option>
													<option>Fixed</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Priority</label>
												<select class="select">
													<option>High</option>
													<option>Medium</option>
													<option>Low</option>
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Add Project Leader</label>
												<input class="form-control" type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Team Leader</label>
												<div class="project-members">
													<a href="#" data-toggle="tooltip" title="Jeffery Lalor">
														<img src="assets/img/user.jpg" class="avatar" alt="Jeffery Lalor" height="20" width="20">
													</a>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Add Team</label>
												<input class="form-control" type="text">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Team Members</label>
												<div class="project-members">
													<a href="#" data-toggle="tooltip" title="John Doe">
														<img src="assets/img/user.jpg" class="avatar" alt="John Doe" height="20" width="20">
													</a>
													<a href="#" data-toggle="tooltip" title="Richard Miles">
														<img src="assets/img/user.jpg" class="avatar" alt="Richard Miles" height="20" width="20">
													</a>
													<a href="#" data-toggle="tooltip" title="John Smith">
														<img src="assets/img/user.jpg" class="avatar" alt="John Smith" height="20" width="20">
													</a>
													<a href="#" data-toggle="tooltip" title="Mike Litorus">
														<img src="assets/img/user.jpg" class="avatar" alt="Mike Litorus" height="20" width="20">
													</a>
													<span class="all-team">+2</span>
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label>Description</label>
										<textarea rows="4" cols="5" class="form-control" placeholder="Enter your message here"></textarea>
									</div>
									<div class="m-t-20 text-center">
										<button class="btn btn-primary">Create Project</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div id="assignee" class="modal custom-modal fade center-modal" role="dialog">
					<div class="modal-dialog">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<div class="modal-content">
							<div class="modal-header">
								<h3 class="modal-title">Assign to this task</h3>
							</div>
							<div class="modal-body">
								<div class="input-group m-b-30">
									<input placeholder="Search to add" class="form-control search-input input-lg" type="text">
									<span class="input-group-btn">
										<button class="btn btn-primary btn-lg">Search</button>
									</span>
								</div>
								<div>
									<ul class="media-list media-list-linked chat-user-list">
										<li class="media">
											<a href="#" class="media-link">
												<div class="media-left"><span class="avatar">R</span></div>
												<div class="media-body media-middle text-nowrap">
													<div class="user-name">Richard Miles</div>
													<span class="designation">Web Developer</span>
												</div>
											</a>
										</li>
										<li class="media">
											<a href="#" class="media-link">
												<div class="media-left"><span class="avatar">J</span></div>
												<div class="media-body media-middle text-nowrap">
													<div class="user-name">John Smith</div>
													<span class="designation">Android Developer</span>
												</div>
											</a>
										</li>
										<li class="media">
											<a href="#" class="media-link">
												<div class="media-left">
													<span class="avatar">
														<img src="assets/img/user.jpg" alt="John Doe">
													</span>
												</div>
												<div class="media-body media-middle text-nowrap">
													<div class="user-name">Jeffery Lalor</div>
													<span class="designation">Team Leader</span>
												</div>
											</a>
										</li>
									</ul>
								</div>
								<div class="m-t-50 text-center">
								<button class="btn btn-primary btn-lg">Assign</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="task_followers" class="modal custom-modal fade center-modal" role="dialog">
					<div class="modal-dialog">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<div class="modal-content">
							<div class="modal-header">
								<h3 class="modal-title">Add followers to this task</h3>
							</div>
							<div class="modal-body">
								<div class="input-group m-b-30">
									<input placeholder="Search to add" class="form-control search-input input-lg" id="btn-input" type="text">
									<span class="input-group-btn">
										<button class="btn btn-primary btn-lg">Search</button>
									</span>
								</div>
								<div>
									<ul class="media-list media-list-linked chat-user-list">
										<li class="media">
											<a href="#" class="media-link">
												<div class="media-left"><span class="avatar">J</span></div>
												<div class="media-body media-middle text-nowrap">
													<div class="user-name">Jeffery Lalor</div>
													<span class="designation">Team Leader</span>
												</div>
											</a>
										</li>
										<li class="media">
											<a href="#" class="media-link">
												<div class="media-left"><span class="avatar">C</span></div>
												<div class="media-body media-middle text-nowrap">
													<div class="user-name">Catherine Manseau</div>
													<span class="designation">Android Developer</span>
												</div>
											</a>
										</li>
										<li class="media">
											<a href="#" class="media-link">
												<div class="media-left"><span class="avatar">W</span></div>
												<div class="media-body media-middle text-nowrap">
													<div class="user-name">Wilmer Deluna</div>
													<span class="designation">Team Leader</span>
												</div>
											</a>
										</li>
									</ul>
								</div>
								<div class="m-t-50 text-center">
									<button class="btn btn-primary btn-lg">Add to Follow</button>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
		<div class="task-overlay" data-reff="#task_window"></div>
<?php include 'include/footer.php'; ?>
		<script type="text/template" id="task-template">
			<li class="task">
				<div class="task-container">
					<span class="task-action-btn task-check">
						<span class="action-circle large complete-btn" title="Mark Complete">
							<i class="material-icons">check</i>
						</span>
					</span>
					<span class="task-label" contenteditable="true"></span>
					<span class="task-action-btn task-btn-right">
						<span class="action-circle large" title="Assign">
							<i class="material-icons">person_add</i>
						</span>
						<span class="action-circle large delete-btn" title="Delete Task">
							<i class="material-icons">delete</i>
						</span>
					</span>
				</div>
			</li>
		</script>
		<script type="text/javascript" src="assets/js/task.js"></script>
    </body>
</html>