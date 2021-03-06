<?php
// Include config file
require_once "../db/index.php";
require_once "class/class.restrict.php";
$pt = "Localization";
$ds = "Build your dream project using the snipnet easy to use project builder";
$kw = "Snipnetworks, snipnet, project, builder";
?>
<!DOCTYPE html>
<html>
<?php include 'include/head.php'; ?>
    <body>
        <div class="main-wrapper" id="wrapper">
<?php
include 'include/menu.php';
include 'include/sidebar-settings.php';
?>
            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-sm-8">
						</div>
					</div>
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
                            <form class="form-horizontal">
								<h4 class="page-title">Invoice Settings</h4>
								<div class="form-group">
									<label class="col-lg-3 control-label">Invoice prefix</label>
									<div class="col-lg-9">
										<input class="form-control" value="INV" type="text">
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-3 control-label">Invoice Logo</label>
									<div class="col-lg-5">
										<input class="form-control" type="file">
										<span class="help-block">Recommended image size is 200px x 40px</span>
									</div>
									<div class="col-lg-4">
										<div class="img-thumbnail pull-right"><img src="assets/img/logo3.png" class="img-responsive" alt="" width="140" height="40"></div>
									</div>
								</div>
								<div class="col-sm-12 m-t-20 text-center">
									<button type="button" class="btn btn-primary">Save &amp; update</button>
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