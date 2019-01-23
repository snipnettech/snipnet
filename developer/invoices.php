<?php
// Include config file
require_once "../db/index.php";
require_once "class/class.restrict.php";
$pt = "Invoices";
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
							<h4 class="page-title">Invoices</h4>
						</div>
						<div class="col-sm-4 text-right m-b-30">
							<a href="create-invoice.html" class="btn btn-primary rounded"><i class="fa fa-plus"></i> Create New Invoice</a>
						</div>
					</div>
					<div class="row filter-row">
						<div class="col-sm-3 col-xs-6">  
							<div class="form-group form-focus">
								<label class="control-label">From</label>
								<div class="cal-icon"><input class="form-control floating datetimepicker" type="text"></div>
							</div>
						</div>
						<div class="col-sm-3 col-xs-6">  
							<div class="form-group form-focus">
								<label class="control-label">To</label>
								<div class="cal-icon"><input class="form-control floating datetimepicker" type="text"></div>
							</div>
						</div>
						<div class="col-sm-3 col-xs-6"> 
							<div class="form-group form-focus select-focus">
								<label class="control-label">Status</label>
								<select class="select floating"> 
									<option value="">Select Status</option>
									<option value="">Pending</option>
									<option value="1">Paid</option>
									<option value="1">Partially Paid</option>
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
								<table class="table table-striped custom-table m-b-0">
									<thead>
										<tr>
											<th>#</th>
											<th>Invoice Number</th>
											<th>Client</th>
											<th>Created Date</th>
											<th>Due Date</th>
											<th>Amount</th>
											<th>Status</th>
											<th class="text-right">Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td><a href="invoice-view.html">#INV-0001</a></td>
											<td>Global Technologies</td>
											<td>1 Sep 2017</td>
											<td>7 Sep 2017</td>
											<td>$2099</td>
											<td><span class="label label-success-border">Paid</span></td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="edit-invoice.html"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="invoice-view.html"><i class="fa fa-eye m-r-5"></i> View</a></li>
														<li><a href="#"><i class="fa fa-file-pdf-o m-r-5"></i> Download</a></li>
														<li><a href="#"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
													</ul>
												</div>
											</td>
										</tr>
										<tr>
											<td>2</td>
											<td><a href="invoice-view.html">#INV-0002</a></td>
											<td>Delta Infotech</td>
											<td>1 Sep 2017</td>
											<td>7 Sep 2017</td>
											<td>$2099</td>
											<td><span class="label label-info-border">Sent</span></td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="edit-invoice.html"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="invoice-view.html"><i class="fa fa-eye m-r-5"></i> View</a></li>
														<li><a href="#"><i class="fa fa-file-pdf-o m-r-5"></i> Download</a></li>
														<li><a href="#"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
													</ul>
												</div>
											</td>
										</tr>
										<tr>
											<td>3</td>
											<td><a href="invoice-view.html">#INV-0003</a></td>
											<td>Cream Inc</td>
											<td>1 Sep 2017</td>
											<td>7 Sep 2017</td>
											<td>$2099</td>
											<td><span class="label label-warning-border">Partially Paid</span></td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="edit-invoice.html"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="invoice-view.html"><i class="fa fa-eye m-r-5"></i> View</a></li>
														<li><a href="#"><i class="fa fa-file-pdf-o m-r-5"></i> Download</a></li>
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
			<div id="delete_holiday" class="modal fade" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header bg-danger"> <button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Delete Holiday</h4>
						</div>
						<form>
							<div class="modal-body">
								<p>Are you sure want to delete this?</p>
								<input value="6" type="hidden"> 
							</div>
							<div class="modal-footer"> <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
								<button type="submit" class="btn btn-danger">Delete</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div id="add_holiday" class="modal fade" role="dialog">
				<div class="modal-dialog modal-md">
					<div class="modal-content">
						<div class="modal-header bg-primary">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Add Holiday</h4>
						</div>
						<div class="modal-body">
							<form>
								<div class="form-group">
									<label>Holiday Name <span class="text-danger">*</span></label>
									<input class="form-control" required="" type="text">
								</div>
								<div class="form-group">
									<label>Holiday Date <span class="text-danger">*</span></label>
									<input class="form-control" required="" type="text">
								</div>
								<div class="m-t-20 text-center">
									<button class="btn btn-primary">Create Holiday</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div id="edit_holiday" class="modal fade" role="dialog">
				<div class="modal-dialog modal-md">
					<div class="modal-content">
						<div class="modal-header bg-success">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Edit Holiday</h4>
						</div>
						<div class="modal-body">
							<form>
								<div class="form-group">
									<label>Holiday Name <span class="text-danger">*</span></label>
									<input class="form-control" value="New Year" required="" type="text">
								</div>
								<div class="form-group">
									<label>Holiday Date <span class="text-danger">*</span></label>
									<input class="form-control" value="01-01-2017" required="" type="text">
								</div>
								<div class="m-t-20 text-center">
									<button class="btn btn-success">Edit Holiday</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
        </div>
<?php include 'include/footer.php'; ?>
    </body>
</html>