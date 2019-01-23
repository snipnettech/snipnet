<?php
// Include config file
require_once "../db/index.php";
require_once "class/class.restrict.php";
$pt = "Project List View";
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
						<div class="col-sm-4">
							<h4 class="page-title">Projects</h4>
						</div>
						<div class="col-sm-8 text-right m-b-20">
							<a href="#" class="btn btn-primary rounded pull-right" data-toggle="modal" data-target="#create_project"><i class="fa fa-plus"></i> Create Project</a>
							<div class="view-icons">
								<a href="projects.html" class="grid-view btn btn-link"><i class="fa fa-th"></i></a>
								<a href="project-list.html" class="list-view btn btn-link active"><i class="fa fa-bars"></i></a>
							</div>
						</div>
					</div>
					<div class="row filter-row">
						<div class="col-sm-3 col-xs-6">  
							<div class="form-group form-focus">
								<label class="control-label">Project Name</label>
								<input type="text" class="form-control floating" />
							</div>
						</div>
						<div class="col-sm-3 col-xs-6">  
							<div class="form-group form-focus">
								<label class="control-label">Employee Name</label>
								<input type="text" class="form-control floating" />
							</div>
						</div>
						<div class="col-sm-3 col-xs-6"> 
							<div class="form-group form-focus select-focus">
								<label class="control-label">Role</label>
								<select class="select floating"> 
									<option value="">Select Roll</option>
									<option value="">Web Developer</option>
									<option value="1">Web Designer</option>
									<option value="1">Android Developer</option>
									<option value="1">Ios Developer</option>
								</select>
							</div>
						</div>
						<div class="col-sm-3 col-xs-6">  
							<a href="#" class="btn btn-success btn-block"> Search </a>  
						</div>     
                    </div>
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped custom-table datatable">
									<thead>
										<tr>
											<th>Project</th>
											<th>Project Id</th>
											<th>Leader</th>
											<th>Team</th>
											<th>Deadline</th>
											<th>Priority</th>
											<th>Status</th>
											<th class="text-right">Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<h2><a href="project-view.html">Food and Drinks</a></h2>
											</td>
											<td>PRO-0001</td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img src="assets/img/user.jpg" alt="Jeffery Lalor"></a>
													</li>
												</ul>
											</td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" title="John Doe" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="John Doe"></a>
													</li>
													<li>
														<a href="#" title="Richard Miles" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="Richard Miles"></a>
													</li>
													<li>
														<a href="#" title="John Smith" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="John Smith"></a>
													</li>
													<li>
														<a href="#" title="Mike Litorus" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="Mike Litorus"></a>
													</li>
													<li>
														<a href="#" class="all-users">+15</a>
													</li>
												</ul>
											</td>
											<td>8 Sep 2017 </td>
											<td>
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-danger"></i> High <i class="caret"></i></a>
													<ul class="dropdown-menu">
														<li><a href="#"><i class="fa fa-dot-circle-o text-danger"></i> High</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-warning"></i> Medium</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-success"></i> Low</a></li>
													</ul>
												</div>
											</td>
											<td>
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-success"></i> Active <i class="caret"></i></a>
													<ul class="dropdown-menu">
														<li><a href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a></li>
													</ul>
												</div>
											</td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#" data-toggle="modal" data-target="#edit_project"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="#" data-toggle="modal" data-target="#delete_project"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
													</ul>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<h2><a href="project-view.html">School Guru</a></h2>
											</td>
											<td>PRO-0002</td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img src="assets/img/user.jpg" alt="Jeffery Lalor"></a>
													</li>
												</ul>
											</td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" title="John Doe" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="John Doe"></a>
													</li>
													<li>
														<a href="#" title="Richard Miles" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="Richard Miles"></a>
													</li>
													<li>
														<a href="#" title="John Smith" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="John Smith"></a>
													</li>
													<li>
														<a href="#" title="Mike Litorus" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="Mike Litorus"></a>
													</li>
													<li>
														<a href="#" class="all-users">+15</a>
													</li>
												</ul>
											</td>
											<td>8 Sep 2017 </td>
											<td>
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-warning"></i> Medium <i class="caret"></i></a>
													<ul class="dropdown-menu">
														<li><a href="#"><i class="fa fa-dot-circle-o text-danger"></i> High</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-warning"></i> Medium</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-success"></i> Low</a></li>
													</ul>
												</div>
											</td>
											<td>
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-danger"></i> Inactive <i class="caret"></i></a>
													<ul class="dropdown-menu">
														<li><a href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a></li>
													</ul>
												</div>
											</td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#" data-toggle="modal" data-target="#edit_project"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="#" data-toggle="modal" data-target="#delete_project"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
													</ul>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<h2><a href="project-view.html">Penabook</a></h2>
											</td>
											<td>PRO-0003</td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img src="assets/img/user.jpg" alt="Jeffery Lalor"></a>
													</li>
												</ul>
											</td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" title="John Doe" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="John Doe"></a>
													</li>
													<li>
														<a href="#" title="Richard Miles" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="Richard Miles"></a>
													</li>
													<li>
														<a href="#" title="John Smith" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="John Smith"></a>
													</li>
													<li>
														<a href="#" title="Mike Litorus" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="Mike Litorus"></a>
													</li>
													<li>
														<a href="#" class="all-users">+15</a>
													</li>
												</ul>
											</td>
											<td>8 Sep 2017 </td>
											<td>
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-success"></i> Low <i class="caret"></i></a>
													<ul class="dropdown-menu">
														<li><a href="#"><i class="fa fa-dot-circle-o text-danger"></i> High</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-warning"></i> Medium</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-success"></i> Low</a></li>
													</ul>
												</div>
											</td>
											<td>
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-success"></i> Active <i class="caret"></i></a>
													<ul class="dropdown-menu">
														<li><a href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a></li>
													</ul>
												</div>
											</td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#" data-toggle="modal" data-target="#edit_project"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="#" data-toggle="modal" data-target="#delete_project"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
													</ul>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<h2><a href="project-view.html">Harvey Clinic</a></h2>
											</td>
											<td>PRO-0004</td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img src="assets/img/user.jpg" alt="Jeffery Lalor"></a>
													</li>
												</ul>
											</td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" title="John Doe" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="John Doe"></a>
													</li>
													<li>
														<a href="#" title="Richard Miles" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="Richard Miles"></a>
													</li>
													<li>
														<a href="#" title="John Smith" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="John Smith"></a>
													</li>
													<li>
														<a href="#" title="Mike Litorus" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="Mike Litorus"></a>
													</li>
													<li>
														<a href="#" class="all-users">+15</a>
													</li>
												</ul>
											</td>
											<td>8 Sep 2017 </td>
											<td>
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-danger"></i> High <i class="caret"></i></a>
													<ul class="dropdown-menu">
														<li><a href="#"><i class="fa fa-dot-circle-o text-danger"></i> High</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-warning"></i> Medium</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-success"></i> Low</a></li>
													</ul>
												</div>
											</td>
											<td>
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-success"></i> Active <i class="caret"></i></a>
													<ul class="dropdown-menu">
														<li><a href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a></li>
													</ul>
												</div>
											</td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#" data-toggle="modal" data-target="#edit_project"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="#" data-toggle="modal" data-target="#delete_project"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
													</ul>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<h2><a href="project-view.html">Food and Drinks</a></h2>
											</td>
											<td>PRO-0005</td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img src="assets/img/user.jpg" alt="Jeffery Lalor"></a>
													</li>
												</ul>
											</td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" title="John Doe" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="John Doe"></a>
													</li>
													<li>
														<a href="#" title="Richard Miles" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="Richard Miles"></a>
													</li>
													<li>
														<a href="#" title="John Smith" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="John Smith"></a>
													</li>
													<li>
														<a href="#" title="Mike Litorus" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="Mike Litorus"></a>
													</li>
													<li>
														<a href="#" class="all-users">+15</a>
													</li>
												</ul>
											</td>
											<td>8 Sep 2017 </td>
											<td>
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-danger"></i> High <i class="caret"></i></a>
													<ul class="dropdown-menu">
														<li><a href="#"><i class="fa fa-dot-circle-o text-danger"></i> High</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-warning"></i> Medium</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-success"></i> Low</a></li>
													</ul>
												</div>
											</td>
											<td>
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-success"></i> Active <i class="caret"></i></a>
													<ul class="dropdown-menu">
														<li><a href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a></li>
													</ul>
												</div>
											</td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#" data-toggle="modal" data-target="#edit_project"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="#" data-toggle="modal" data-target="#delete_project"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
													</ul>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<h2><a href="project-view.html">School Guru</a></h2>
											</td>
											<td>PRO-0006</td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img src="assets/img/user.jpg" alt="Jeffery Lalor"></a>
													</li>
												</ul>
											</td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" title="John Doe" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="John Doe"></a>
													</li>
													<li>
														<a href="#" title="Richard Miles" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="Richard Miles"></a>
													</li>
													<li>
														<a href="#" title="John Smith" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="John Smith"></a>
													</li>
													<li>
														<a href="#" title="Mike Litorus" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="Mike Litorus"></a>
													</li>
													<li>
														<a href="#" class="all-users">+15</a>
													</li>
												</ul>
											</td>
											<td>8 Sep 2017 </td>
											<td>
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-danger"></i> High <i class="caret"></i></a>
													<ul class="dropdown-menu">
														<li><a href="#"><i class="fa fa-dot-circle-o text-danger"></i> High</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-warning"></i> Medium</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-success"></i> Low</a></li>
													</ul>
												</div>
											</td>
											<td>
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-success"></i> Active <i class="caret"></i></a>
													<ul class="dropdown-menu">
														<li><a href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a></li>
													</ul>
												</div>
											</td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#" data-toggle="modal" data-target="#edit_project"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="#" data-toggle="modal" data-target="#delete_project"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
													</ul>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<h2><a href="project-view.html">Penabook</a></h2>
											</td>
											<td>PRO-0007</td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img src="assets/img/user.jpg" alt="Jeffery Lalor"></a>
													</li>
												</ul>
											</td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" title="John Doe" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="John Doe"></a>
													</li>
													<li>
														<a href="#" title="Richard Miles" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="Richard Miles"></a>
													</li>
													<li>
														<a href="#" title="John Smith" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="John Smith"></a>
													</li>
													<li>
														<a href="#" title="Mike Litorus" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="Mike Litorus"></a>
													</li>
													<li>
														<a href="#" class="all-users">+15</a>
													</li>
												</ul>
											</td>
											<td>8 Sep 2017 </td>
											<td>
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-danger"></i> High <i class="caret"></i></a>
													<ul class="dropdown-menu">
														<li><a href="#"><i class="fa fa-dot-circle-o text-danger"></i> High</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-warning"></i> Medium</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-success"></i> Low</a></li>
													</ul>
												</div>
											</td>
											<td>
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-success"></i> Active <i class="caret"></i></a>
													<ul class="dropdown-menu">
														<li><a href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a></li>
													</ul>
												</div>
											</td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#" data-toggle="modal" data-target="#edit_project"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="#" data-toggle="modal" data-target="#delete_project"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
													</ul>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<h2><a href="project-view.html">Harvey Clinic</a></h2>
											</td>
											<td>PRO-0008</td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img src="assets/img/user.jpg" alt="Jeffery Lalor"></a>
													</li>
												</ul>
											</td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" title="John Doe" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="John Doe"></a>
													</li>
													<li>
														<a href="#" title="Richard Miles" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="Richard Miles"></a>
													</li>
													<li>
														<a href="#" title="John Smith" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="John Smith"></a>
													</li>
													<li>
														<a href="#" title="Mike Litorus" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="Mike Litorus"></a>
													</li>
													<li>
														<a href="#" class="all-users">+15</a>
													</li>
												</ul>
											</td>
											<td>8 Sep 2017 </td>
											<td>
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-danger"></i> High <i class="caret"></i></a>
													<ul class="dropdown-menu">
														<li><a href="#"><i class="fa fa-dot-circle-o text-danger"></i> High</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-warning"></i> Medium</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-success"></i> Low</a></li>
													</ul>
												</div>
											</td>
											<td>
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-success"></i> Active <i class="caret"></i></a>
													<ul class="dropdown-menu">
														<li><a href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a></li>
													</ul>
												</div>
											</td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#" data-toggle="modal" data-target="#edit_project"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="#" data-toggle="modal" data-target="#delete_project"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
													</ul>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<h2><a href="project-view.html">Food and Drinks</a></h2>
											</td>
											<td>PRO-0009</td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img src="assets/img/user.jpg" alt="Jeffery Lalor"></a>
													</li>
												</ul>
											</td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" title="John Doe" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="John Doe"></a>
													</li>
													<li>
														<a href="#" title="Richard Miles" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="Richard Miles"></a>
													</li>
													<li>
														<a href="#" title="John Smith" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="John Smith"></a>
													</li>
													<li>
														<a href="#" title="Mike Litorus" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="Mike Litorus"></a>
													</li>
													<li>
														<a href="#" class="all-users">+15</a>
													</li>
												</ul>
											</td>
											<td>8 Sep 2017 </td>
											<td>
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-danger"></i> High <i class="caret"></i></a>
													<ul class="dropdown-menu">
														<li><a href="#"><i class="fa fa-dot-circle-o text-danger"></i> High</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-warning"></i> Medium</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-success"></i> Low</a></li>
													</ul>
												</div>
											</td>
											<td>
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-success"></i> Active <i class="caret"></i></a>
													<ul class="dropdown-menu">
														<li><a href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a></li>
													</ul>
												</div>
											</td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#" data-toggle="modal" data-target="#edit_project"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="#" data-toggle="modal" data-target="#delete_project"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
													</ul>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<h2><a href="project-view.html">School Guru</a></h2>
											</td>
											<td>PRO-0010</td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img src="assets/img/user.jpg" alt="Jeffery Lalor"></a>
													</li>
												</ul>
											</td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" title="John Doe" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="John Doe"></a>
													</li>
													<li>
														<a href="#" title="Richard Miles" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="Richard Miles"></a>
													</li>
													<li>
														<a href="#" title="John Smith" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="John Smith"></a>
													</li>
													<li>
														<a href="#" title="Mike Litorus" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="Mike Litorus"></a>
													</li>
													<li>
														<a href="#" class="all-users">+15</a>
													</li>
												</ul>
											</td>
											<td>8 Sep 2017 </td>
											<td>
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-danger"></i> High <i class="caret"></i></a>
													<ul class="dropdown-menu">
														<li><a href="#"><i class="fa fa-dot-circle-o text-danger"></i> High</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-warning"></i> Medium</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-success"></i> Low</a></li>
													</ul>
												</div>
											</td>
											<td>
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-success"></i> Active <i class="caret"></i></a>
													<ul class="dropdown-menu">
														<li><a href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a></li>
													</ul>
												</div>
											</td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#" data-toggle="modal" data-target="#edit_project"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="#" data-toggle="modal" data-target="#delete_project"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
													</ul>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<h2><a href="project-view.html">Penabook</a></h2>
											</td>
											<td>PRO-0011</td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" data-toggle="tooltip" title="Jeffery Lalor"><img src="assets/img/user.jpg" alt="Jeffery Lalor"></a>
													</li>
												</ul>
											</td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" title="John Doe" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="John Doe"></a>
													</li>
													<li>
														<a href="#" title="Richard Miles" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="Richard Miles"></a>
													</li>
													<li>
														<a href="#" title="John Smith" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="John Smith"></a>
													</li>
													<li>
														<a href="#" title="Mike Litorus" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="Mike Litorus"></a>
													</li>
													<li>
														<a href="#" class="all-users">+15</a>
													</li>
												</ul>
											</td>
											<td>8 Sep 2017 </td>
											<td>
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-danger"></i> High <i class="caret"></i></a>
													<ul class="dropdown-menu">
														<li><a href="#"><i class="fa fa-dot-circle-o text-danger"></i> High</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-warning"></i> Medium</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-success"></i> Low</a></li>
													</ul>
												</div>
											</td>
											<td>
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-success"></i> Active <i class="caret"></i></a>
													<ul class="dropdown-menu">
														<li><a href="#"><i class="fa fa-dot-circle-o text-success"></i> Active</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a></li>
													</ul>
												</div>
											</td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#" data-toggle="modal" data-target="#edit_project"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="#" data-toggle="modal" data-target="#delete_project"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
													</ul>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
                </div>
<?php include 'include/chat-aside.php'; ?>
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
												<option value="">Global Technologies</option>
												<option value="1">Delta Infotech</option>
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
									<textarea rows="4" cols="5" class="form-control summernote" placeholder="Enter your message here"></textarea>
								</div>
								<div class="form-group">
									<label>Upload Files</label>
									<input class="form-control" type="file">
								</div>
								<div class="m-t-20 text-center">
									<button class="btn btn-primary">Create Project</button>
								</div>
							</form>
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
			<div id="delete_project" class="modal custom-modal fade" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content modal-md">
						<div class="modal-header">
							<h4 class="modal-title">Delete Project</h4>
						</div>
						<div class="modal-body card-box">
							<p>Are you sure want to delete this?</p>
							<div class="m-t-20"> <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
								<button type="submit" class="btn btn-danger">Delete</button>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
<?php include 'include/footer.php'; ?>
    </body>
</html>