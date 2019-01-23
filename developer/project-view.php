<?php
// Include config file
require_once "../db/index.php";
require_once "class/class.restrict.php";
$pt = "Project View";
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
						<div class="col-xs-8">
							<h4 class="page-title">Harvey Clinic</h4>
						</div>
						<div class="col-sm-4 text-right m-b-30">
							<a href="#" class="btn btn-primary rounded" data-toggle="modal" data-target="#edit_project"><i class="fa fa-plus"></i> Edit Project</a>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-9">
							<div class="panel">
								<div class="panel-body">
									<div class="project-title">
										<h5 class="panel-title">Harvey Clinic</h5>
										<small class="block text-ellipsis m-b-15"><span class="text-xs">2</span> <span class="text-muted">open tasks, </span><span class="text-xs">5</span> <span class="text-muted">tasks completed</span></small>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel elit neque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum sollicitudin libero vitae est consectetur, a molestie tortor consectetur. Aenean tincidunt interdum ipsum, id pellentesque diam suscipit ut. Vivamus massa mi, fermentum eget neque eget, imperdiet tristique lectus. Proin at purus ut sem pellentesque tempor sit amet ut lectus. Sed orci augue, placerat et pretium ac, hendrerit in felis. Integer scelerisque libero non metus commodo, et hendrerit diam aliquet. Proin tincidunt porttitor ligula, a tincidunt orci pellentesque nec. Ut ultricies maximus nulla id consequat. Fusce eu consequat mi, eu euismod ligula. Aliquam porttitor neque id massa porttitor, a pretium velit vehicula. Morbi volutpat tincidunt urna, vel ullamcorper ligula fermentum at. </p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel elit neque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum sollicitudin libero vitae est consectetur, a molestie tortor consectetur. Aenean tincidunt interdum ipsum, id pellentesque diam suscipit ut. Vivamus massa mi, fermentum eget neque eget, imperdiet tristique lectus. Proin at purus ut sem pellentesque tempor sit amet ut lectus. Sed orci augue, placerat et pretium ac, hendrerit in felis. Integer scelerisque libero non metus commodo, et hendrerit diam aliquet. Proin tincidunt porttitor ligula, a tincidunt orci pellentesque nec. Ut ultricies maximus nulla id consequat. Fusce eu consequat mi, eu euismod ligula. Aliquam porttitor neque id massa porttitor, a pretium velit vehicula. Morbi volutpat tincidunt urna, vel ullamcorper ligula fermentum at. </p>
								</div>
							</div>
							<div class="panel">
								<div class="panel-body">
				                    <h5 class="panel-title m-b-20">Uploaded image files</h5>
									<div class="row">
										<div class="col-md-3 col-sm-6">
											<div class="thumbnail">
												<div class="thumb">
													<img src="assets/img/placeholder.png" class="img-responsive" alt="">
												</div>
												<div class="caption text-center">
													 demo.png
												</div>
											</div>
										</div>
										<div class="col-md-3 col-sm-6">
											<div class="thumbnail">
												<div class="thumb">
													<img src="assets/img/placeholder.png" class="img-responsive" alt="">
												</div>
												<div class="caption text-center">
													 demo.png
												</div>
											</div>
										</div>
										<div class="col-md-3 col-sm-6">
											<div class="thumbnail">
												<div class="thumb">
													<img src="assets/img/placeholder.png" class="img-responsive" alt="">
												</div>
												<div class="caption text-center">
													 demo.png
												</div>
											</div>
										</div>
										<div class="col-md-3 col-sm-6">
											<div class="thumbnail">
												<div class="thumb">
													<img src="assets/img/placeholder.png" class="img-responsive" alt="">
												</div>
												<div class="caption text-center">
													 demo.png
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="panel">
								<div class="panel-body">
									<h5 class="panel-title m-b-20">Uploaded files</h5>
									<ul class="files-list">
										<li>
											<div class="files-cont">
												<div class="file-type">
													<span class="files-icon"><i class="fa fa-file-pdf-o"></i></span>
												</div>
												<div class="files-info">
													<span class="file-name text-ellipsis"><a href="#">AHA Selfcare Mobile Application Test-Cases.xls</a></span>
													<span class="file-author"><a href="#">John Doe</a></span> <span class="file-date">May 31st at 6:53 PM</span>
													<div class="file-size">Size: 14.8Mb</div>
												</div>
												<ul class="files-action">
													<li class="dropdown">
														<a href="" class="dropdown-toggle btn btn-default btn-xs" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
														<ul class="dropdown-menu">
															<li><a href="javascript:void(0)">Download</a></li>
															<li><a href="#" data-toggle="modal" data-target="#share_files">Share</a></li>
															<li><a href="javascript:void(0)">Delete</a></li>
														</ul>
													</li>
												</ul>
											</div>
										</li>
										<li>
											<div class="files-cont">
												<div class="file-type">
													<span class="files-icon"><i class="fa fa-file-pdf-o"></i></span>
												</div>
												<div class="files-info">
													<span class="file-name text-ellipsis"><a href="#">AHA Selfcare Mobile Application Test-Cases.xls</a></span>
													<span class="file-author"><a href="#">Richard Miles</a></span> <span class="file-date">May 31st at 6:53 PM</span>
													<div class="file-size">Size: 14.8Mb</div>
												</div>
												<ul class="files-action">
													<li class="dropdown">
														<a href="" class="dropdown-toggle btn btn-default btn-xs" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
														<ul class="dropdown-menu">
															<li><a href="javascript:void(0)">Download</a></li>
															<li><a href="#" data-toggle="modal" data-target="#share_files">Share</a></li>
														</ul>
													</li>
												</ul>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<div class="project-task">
								<div class="tabbable">
									<ul class="nav nav-tabs nav-tabs-top nav-justified m-b-0">
										<li class="active"><a href="#all_tasks" data-toggle="tab" aria-expanded="true">All Tasks</a></li>
										<li><a href="#pending_tasks" data-toggle="tab" aria-expanded="false">Pending Tasks</a></li>
										<li><a href="#completed_tasks" data-toggle="tab" aria-expanded="false">Completed Tasks</a></li>
									</ul>
									<div class="tab-content">
										<div class="tab-pane active" id="all_tasks">
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
										</div>
										<div class="tab-pane" id="pending_tasks"></div>
										<div class="tab-pane" id="completed_tasks"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="panel">
								<div class="panel-body">
									<h6 class="panel-title m-b-15">Project details</h6>
									<table class="table table-striped table-border">
										<tbody>
											<tr>
												<td>Cost:</td>
												<td class="text-right">$1200</td>
											</tr>
											<tr>
												<td>Total Hours:</td>
												<td class="text-right">100 Hours</td>
											</tr>
											<tr>
												<td>Created:</td>
												<td class="text-right">25 Feb, 2017</td>
											</tr>
											<tr>
												<td>Deadline:</td>
												<td class="text-right">12 Nov, 2017</td>
											</tr>
											<tr>
												<td>Priority:</td>
												<td class="text-right">
													<div class="btn-group">
														<a href="#" class="label label-danger dropdown-toggle" data-toggle="dropdown">Highest <span class="caret"></span></a>
														<ul class="dropdown-menu dropdown-menu-right">
															<li><a href="#"><i class="fa fa-dot-circle-o text-danger"></i> Highest priority</a></li>
															<li><a href="#"><i class="fa fa-dot-circle-o text-info"></i> High priority</a></li>
															<li><a href="#"><i class="fa fa-dot-circle-o text-primary"></i> Normal priority</a></li>
															<li><a href="#"><i class="fa fa-dot-circle-o text-success"></i> Low priority</a></li>
														</ul>
													</div>
												</td>
											</tr>
											<tr>
												<td>Created by:</td>
												<td class="text-right"><a href="profile.html">Barry Cuda</a></td>
											</tr>
											<tr>
												<td>Status:</td>
												<td class="text-right">Working</td>
											</tr>
										</tbody>
									</table>
									<p class="m-b-5">Progress <span class="text-success pull-right">40%</span></p>
									<div class="progress progress-xs m-b-0">
										<div class="progress-bar progress-bar-success" role="progressbar" data-toggle="tooltip" title="40%" style="width: 40%"></div>
									</div>
								</div>
							</div>
							<div class="panel project-user">
								<div class="panel-body">
									<h6 class="panel-title m-b-20">Assigned Leader <a class="pull-right btn btn-primary btn-xs" data-toggle="modal" data-target="#assign_leader"><i class="fa fa-plus"></i> Add</a></h6>
									<ul class="list-box">
										<li>
											<a href="profile.html">
												<div class="list-item">
													<div class="list-left">
														<span class="avatar">W</span>
													</div>
													<div class="list-body">
														<span class="message-author">Wilmer Deluna</span>
														<div class="clearfix"></div>
														<span class="message-content">Team Leader</span>
													</div>
												</div>
											</a>
										</li>
										<li>
											<a href="profile.html">
												<div class="list-item">
													<div class="list-left">
														<span class="avatar">L</span>
													</div>
													<div class="list-body">
														<span class="message-author">Lesley Grauer</span>
														<div class="clearfix"></div>
														<span class="message-content">Team Leader</span>
													</div>
												</div>
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="panel project-user">
								<div class="panel-heading">
									<h6 class="panel-title">Assigned users <a class="pull-right btn btn-primary btn-xs" data-toggle="modal" data-target="#assign_user"><i class="fa fa-plus"></i> Add</a></h6>
								</div>
								<div class="panel-body">
									<ul class="list-box">
										<li>
											<a href="profile.html">
												<div class="list-item">
													<div class="list-left">
														<span class="avatar">J</span>
													</div>
													<div class="list-body">
														<span class="message-author">John Doe</span>
														<div class="clearfix"></div>
														<span class="message-content">Web Designer</span>
													</div>
												</div>
											</a>
										</li>
										<li>
											<a href="profile.html">
												<div class="list-item">
													<div class="list-left">
														<span class="avatar">V</span>
													</div>
													<div class="list-body">
														<span class="message-author">Richard Miles</span>
														<div class="clearfix"></div>
														<span class="message-content">Web Developer</span>
													</div>
												</div>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
                </div>
<?php include 'include/chat-aside.php'; ?>
            </div>
			<div id="assign_leader" class="modal custom-modal fade center-modal" role="dialog">
				<div class="modal-dialog">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<div class="modal-content">
						<div class="modal-header">
							<h3 class="modal-title">Assign Leader to this project</h3>
						</div>
						<div class="modal-body">
							<div class="input-group m-b-30">
								<input placeholder="Search to add a leader" class="form-control search-input input-lg" type="text">
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
								<button class="btn btn-primary btn-lg">Add Leader</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="assign_user" class="modal custom-modal fade center-modal" role="dialog">
				<div class="modal-dialog">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<div class="modal-content">
						<div class="modal-header">
							<h3 class="modal-title">Assign the user to this project</h3>
						</div>
						<div class="modal-body">
							<div class="input-group m-b-30">
								<input placeholder="Search a user to assign" class="form-control search-input input-lg" id="btn-input" type="text">
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
								<button class="btn btn-primary btn-lg">Add User</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="edit_project" class="modal custom-modal fade" role="dialog">
				<div class="modal-dialog">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<div class="modal-content modal-lg">
						<div class="modal-header">
							<h4 class="modal-title">Edit Project</h4>
						</div>
						<div class="modal-body">
							<form>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Project Name</label>
											<input class="form-control" value="School Guru" type="text">
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
											<input placeholder="$50" class="form-control" value="$5000" type="text">
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label>&nbsp;</label>
											<select class="select">
												<option>Hourly</option>
												<option selected>Fixed</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Priority</label>
											<select class="select">
												<option selected>High</option>
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
								<div class="form-group">
									<label>Upload Files</label>
									<input class="form-control" type="file">
								</div>
								<div class="m-t-20 text-center">
									<button class="btn btn-primary">Save Changes</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
        </div>
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