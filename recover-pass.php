<?php
// Include config file
require_once "db/index.php";
$pt = "Recover lost password";
$ds = "Snipnetworks we bring good projects to life";
$kw = "Snipnetworks, snipnet";
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'include/head.php'; ?>
<body class="home1 mutlti-vendor">
<?php
include 'include/menu.php';
include 'include/breadcrumb.php';
?>
<!--================================
        START DASHBOARD AREA
=================================-->
<section class="pass_recover_area section--padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <form action="#">
                    <div class="cardify recover_pass">
                        <div class="login--header">
                            <p>Please enter the email address for your account. A verification code will be sent to you.
                                Once you have received the verification code, you will be able to choose a new password
                                for your account.</p>
                        </div>
                        <!-- end .login_header -->

                        <div class="login--form">
                            <div class="form-group">
                                <label for="email_ad">Email Address</label>
                                <input id="email_ad" type="text" class="text_field"
                                       placeholder="Enter your email address">
                            </div>

                            <button class="btn btn--md register_btn btn-primary" type="submit">Send Recovery Email
                            </button>
                        </div>
                        <!-- end .login--form -->
                    </div>
                    <!-- end .cardify -->
                </form>
            </div>
            <!-- end .col-md-6 -->
        </div>
        <!-- end .row -->
    </div>
    <!-- end .container -->
</section>
<!--================================
        END DASHBOARD AREA
=================================-->
<?php include 'include/footer.php'; ?>
</body>

</html>