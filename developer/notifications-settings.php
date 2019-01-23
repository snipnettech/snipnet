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
        <div class="main-wrapper">
<?php
include 'include/menu.php';
include 'include/sidebar-settings.php';
?>
            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-md-6 col-md-offset-3">
							<h4 class="page-title">Notifications Settings</h4>
							<div class="panel">
								<ul class="list-group">
									<li class="list-group-item">
										Employee
										<div class="material-switch pull-right">
											<input id="staff_module" type="checkbox" checked="checked"/>
											<label for="staff_module" class="label-success"></label>
										</div>
									</li>
									<li class="list-group-item">
										Holidays
										<div class="material-switch pull-right">
											<input id="holidays_module" type="checkbox"/>
											<label for="holidays_module" class="label-success"></label>
										</div>
									</li>
									<li class="list-group-item">
										Leave Request
										<div class="material-switch pull-right">
											<input id="leave_module" type="checkbox"/>
											<label for="leave_module" class="label-success"></label>
										</div>
									</li>
									<li class="list-group-item">
									   Events 
										<div class="material-switch pull-right">
											<input id="events_module" type="checkbox"/>
											<label for="events_module" class="label-success"></label>
										</div>
									</li>
									<li class="list-group-item">
									   Chat 
										<div class="material-switch pull-right">
											<input id="chat_module" type="checkbox"/>
											<label for="chat_module" class="label-success"></label>
										</div>
									</li>
								</ul>
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