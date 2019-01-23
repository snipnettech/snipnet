<?php
// Include config file
require_once "../db/index.php";
require_once "class/class.restrict.php";
$pt = "Clients";
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
                    <div class="col-md-8 col-md-offset-2">
                        <h4 class="page-title">Add Contact</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <form>
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" type="text">
                            </div>
                            <div class="form-group">
                                <label>Email Address</label>
                                <input class="form-control" type="text">
                            </div>
                            <div class="form-group">
                                <label>Contact Number</label>
                                <input class="form-control" type="text">
                            </div>
                            <div class="form-group">
                                <label class="block">Contact Status</label>
                                <label class="radio-inline">
                                    <input name="status" checked="checked" type="radio"> Active
                                </label>
                                <label class="radio-inline">
                                    <input name="status" type="radio"> Inactive
                                </label>
                            </div>
                            <div class="m-t-20 text-center">
                                <button class="btn btn-primary btn-lg">Add Contact</button>
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