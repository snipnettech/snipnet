<?php
// Include config file
require_once "../db/index.php";
require_once "class/class.restrict.php";
$pt = "Leads";
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
							<h4 class="page-title">Leads</h4>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped custom-table m-b-0 datatable">
									<thead>
										<tr>
											<th>#</th>
											<th>Lead Name</th>
											<th>Email</th>
											<th>Phone</th>
											<th>Project</th>
											<th>Assigned Staff</th>
											<th>Status</th>
											<th>Created</th>
											<th class="text-right">Actions</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td><a href="profile.html">Wilmer Deluna</a></td>
											<td>wilmerdeluna@example.com</td>
											<td>9876543210</td>
											<td><a href="project-view.html">Harvey Clinic</a></td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" title="John Doe" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="John Doe"></a>
													</li>
													<li>
														<a href="#" title="Richard Miles" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="Richard Miles"></a>
													</li>
													<li>
														<a href="#" class="all-users">+15</a>
													</li>
												</ul>
											</td>
											<td><span class="label label-success-border">Working</span></td>
											<td>10 hrs ago</td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="#"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
													</ul>
												</div>
											</td>
										</tr>
										<tr>
											<td>2</td>
											<td><a href="profile.html">Lesley Grauer</a></td>
											<td>lesleygrauer@example.com</td>
											<td>9876543210</td>
											<td><a href="project-view.html">Penabook</a></td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" title="John Doe" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="John Doe"></a>
													</li>
													<li>
														<a href="#" title="Richard Miles" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="Richard Miles"></a>
													</li>
													<li>
														<a href="#" class="all-users">+15</a>
													</li>
												</ul>
											</td>
											<td><span class="label label-success-border">Working</span></td>
											<td>5 Dec 2017</td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="#"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
													</ul>
												</div>
											</td>
										</tr>
										<tr>
											<td>3</td>
											<td><a href="profile.html">Jeffery Lalor</a></td>
											<td>jefferylalor@example.com</td>
											<td>9876543210</td>
											<td><a href="project-view.html">Food and Drinks</a></td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" title="John Doe" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="John Doe"></a>
													</li>
													<li>
														<a href="#" title="Richard Miles" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="Richard Miles"></a>
													</li>
													<li>
														<a href="#" class="all-users">+15</a>
													</li>
												</ul>
											</td>
											<td><span class="label label-success-border">Working</span></td>
											<td>30 Nov 2017</td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="#"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
													</ul>
												</div>
											</td>
										</tr>
										<tr>
											<td>4</td>
											<td><a href="profile.html">Wilmer Deluna</a></td>
											<td>wilmerdeluna@example.com</td>
											<td>9876543210</td>
											<td><a href="project-view.html">Harvey Clinic</a></td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" title="John Doe" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="John Doe"></a>
													</li>
													<li>
														<a href="#" title="Richard Miles" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="Richard Miles"></a>
													</li>
													<li>
														<a href="#" class="all-users">+15</a>
													</li>
												</ul>
											</td>
											<td><span class="label label-success-border">Working</span></td>
											<td>10 hrs ago</td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="#"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
													</ul>
												</div>
											</td>
										</tr>
										<tr>
											<td>5</td>
											<td><a href="profile.html">Lesley Grauer</a></td>
											<td>lesleygrauer@example.com</td>
											<td>9876543210</td>
											<td><a href="project-view.html">Penabook</a></td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" title="John Doe" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="John Doe"></a>
													</li>
													<li>
														<a href="#" title="Richard Miles" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="Richard Miles"></a>
													</li>
													<li>
														<a href="#" class="all-users">+15</a>
													</li>
												</ul>
											</td>
											<td><span class="label label-success-border">Working</span></td>
											<td>5 Dec 2017</td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="#"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
													</ul>
												</div>
											</td>
										</tr>
										<tr>
											<td>6</td>
											<td><a href="profile.html">Jeffery Lalor</a></td>
											<td>jefferylalor@example.com</td>
											<td>9876543210</td>
											<td><a href="project-view.html">Food and Drinks</a></td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" title="John Doe" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="John Doe"></a>
													</li>
													<li>
														<a href="#" title="Richard Miles" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="Richard Miles"></a>
													</li>
													<li>
														<a href="#" class="all-users">+15</a>
													</li>
												</ul>
											</td>
											<td><span class="label label-success-border">Working</span></td>
											<td>30 Nov 2017</td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="#"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
													</ul>
												</div>
											</td>
										</tr>
										<tr>
											<td>7</td>
											<td><a href="profile.html">Wilmer Deluna</a></td>
											<td>wilmerdeluna@example.com</td>
											<td>9876543210</td>
											<td><a href="project-view.html">Harvey Clinic</a></td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" title="John Doe" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="John Doe"></a>
													</li>
													<li>
														<a href="#" title="Richard Miles" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="Richard Miles"></a>
													</li>
													<li>
														<a href="#" class="all-users">+15</a>
													</li>
												</ul>
											</td>
											<td><span class="label label-success-border">Working</span></td>
											<td>10 hrs ago</td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="#"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
													</ul>
												</div>
											</td>
										</tr>
										<tr>
											<td>8</td>
											<td><a href="profile.html">Lesley Grauer</a></td>
											<td>lesleygrauer@example.com</td>
											<td>9876543210</td>
											<td><a href="project-view.html">Penabook</a></td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" title="John Doe" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="John Doe"></a>
													</li>
													<li>
														<a href="#" title="Richard Miles" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="Richard Miles"></a>
													</li>
													<li>
														<a href="#" class="all-users">+15</a>
													</li>
												</ul>
											</td>
											<td><span class="label label-success-border">Working</span></td>
											<td>5 Dec 2017</td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="#"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
													</ul>
												</div>
											</td>
										</tr>
										<tr>
											<td>9</td>
											<td><a href="profile.html">Jeffery Lalor</a></td>
											<td>jefferylalor@example.com</td>
											<td>9876543210</td>
											<td><a href="project-view.html">Food and Drinks</a></td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" title="John Doe" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="John Doe"></a>
													</li>
													<li>
														<a href="#" title="Richard Miles" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="Richard Miles"></a>
													</li>
													<li>
														<a href="#" class="all-users">+15</a>
													</li>
												</ul>
											</td>
											<td><span class="label label-success-border">Working</span></td>
											<td>30 Nov 2017</td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="#"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
													</ul>
												</div>
											</td>
										</tr>
										<tr>
											<td>10</td>
											<td><a href="profile.html">Wilmer Deluna</a></td>
											<td>wilmerdeluna@example.com</td>
											<td>9876543210</td>
											<td><a href="project-view.html">Harvey Clinic</a></td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" title="John Doe" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="John Doe"></a>
													</li>
													<li>
														<a href="#" title="Richard Miles" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="Richard Miles"></a>
													</li>
													<li>
														<a href="#" class="all-users">+15</a>
													</li>
												</ul>
											</td>
											<td><span class="label label-success-border">Working</span></td>
											<td>10 hrs ago</td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="#"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
													</ul>
												</div>
											</td>
										</tr>
										<tr>
											<td>11</td>
											<td><a href="profile.html">Lesley Grauer</a></td>
											<td>lesleygrauer@example.com</td>
											<td>9876543210</td>
											<td><a href="project-view.html">Penabook</a></td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" title="John Doe" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="John Doe"></a>
													</li>
													<li>
														<a href="#" title="Richard Miles" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="Richard Miles"></a>
													</li>
													<li>
														<a href="#" class="all-users">+15</a>
													</li>
												</ul>
											</td>
											<td><span class="label label-success-border">Working</span></td>
											<td>5 Dec 2017</td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="#"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
													</ul>
												</div>
											</td>
										</tr>
										<tr>
											<td>12</td>
											<td><a href="profile.html">Jeffery Lalor</a></td>
											<td>jefferylalor@example.com</td>
											<td>9876543210</td>
											<td><a href="project-view.html">Food and Drinks</a></td>
											<td>
												<ul class="team-members">
													<li>
														<a href="#" title="John Doe" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="John Doe"></a>
													</li>
													<li>
														<a href="#" title="Richard Miles" data-toggle="tooltip"><img src="assets/img/user.jpg" alt="Richard Miles"></a>
													</li>
													<li>
														<a href="#" class="all-users">+15</a>
													</li>
												</ul>
											</td>
											<td><span class="label label-success-border">Working</span></td>
											<td>30 Nov 2017</td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="#"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
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
        </div>
<?php include 'include/footer.php'; ?>
    </body>
</html>