<?php
// Include config file
require_once "../db/index.php";
require_once "class/class.restrict.php";
$pt = "Change Password";
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
include 'include/sidebar-settings.php';
?>
            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-md-6 col-md-offset-3">
							<h4 class="page-title">Change Password</h4>
							<form>
								<div class="row">
									<div class="col-xs-12 col-sm-12">
										<div class="form-group">
											<label>Old password</label>
											<input type="password" class="form-control" />
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-6">
										<div class="form-group">
											<label>New password</label>
											<input type="password" class="form-control" />
										</div>
									</div>
									<div class="col-xs-12  col-sm-6">
										<div class="form-group">
											<label>Confirm password</label>
											<input type="password" class="form-control" />
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 text-center m-t-20">
										<button type="button" class="btn btn-primary">Update Password</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
<?php include 'include/chat-aside.php'; ?>
			</div>
        </div>
<?php include 'include/footer.php'; ?>
    </body>
</html>