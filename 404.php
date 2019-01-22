<?php
// Include config file
require_once "db/index.php";
require_once "class/class.restrict.php";
$pt = "404";
$ds = "Page not found";
$kw = "Page, not, found";
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'include/head.php'; ?>
<body class="home1 mutlti-vendor">
<?php
include 'include/menu.php';
?>
<!--================================
        START 404 AREA
=================================-->
<section class="four_o_four_area section--padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 text-center">
                <img src="<?php echo $base_url; ?>/images/404.png" alt="404 page">
                <div class="not_found">
                    <h2>Oops! Page Not Found</h2>
                    <a href="<?php echo $base_url; ?>" class="btn btn--md btn-primary">Back to Home</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================================
            END 404 AREA
=================================-->
<?php include 'include/footer.php'; ?>
</body>

</html>