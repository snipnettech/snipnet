<?php
// Include config file
require_once "db/index.php";
require_once "class/auth.redirect.php";
$pt = "Login";
$ds = "Snipnetworks we bring good projects to life";
$kw = "Snipnetworks, snipnet";

//Require the class
require('class/formkey.class.php');
//Start the class
$formKey = new formKey();

// Define variables and initialize with empty values
$username = $password = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
	
	//Validate the form key
    if(!isset($_POST['form_key']) || !$formKey->validate())
    {
        //Form key is invalid, show an error
        $error = 'Request error!';
    }
    else
    {
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT userID, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;                           
                            
                            // Redirect user to welcome page
							if(isset($_SESSION["last_url"])){
							$last_url = $_SESSION["last_url"];
                            header("location: $last_url");
							}else{
							header("location: index");
							}
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
}
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
        START LOGIN AREA
=================================-->
<section class="login_area section--padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                <form action="login" method="post">
				<?php $formKey->outputKey(); ?>
                    <div class="cardify login">
                        <div class="login--header">
                            <h3>Welcome Back</h3>
                            <p>You can sign in with your username</p>
							<?php
							      if(isset($error)) { echo("<div class='alert alert-warning' role='alert'>$error<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span class='icon-close' aria-hidden='true'></span></button></div>"); } 
								  if(isset($username_err)) { echo("<div class='alert alert-warning' role='alert'>$username_err<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span class='icon-close' aria-hidden='true'></span></button></div>"); }
							      if(isset($password_err)) { echo("<div class='alert alert-warning' role='alert'>$password_err<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span class='icon-close' aria-hidden='true'></span></button></div>"); }
								  
							?>
                        </div>
                        <!-- end .login_header -->

                        <div class="login--form">
                            <div class="form-group">
                                <label for="user_name">Username</label>
                                <input type="text" class="text_field"
                                       placeholder="Enter your username..." name="username" value="<?php echo $username; ?>">
                            </div>

                            <div class="form-group">
                                <label for="pass">Password</label>
                                <input name="password" type="password" class="text_field" placeholder="Enter your password...">
                            </div>

                            <div class="form-group">
                                <div class="custom_checkbox">
                                    <input type="checkbox" name="remember" value="1">
                                    <label for="ch2">
                                        <span class="shadow_checkbox"></span>
                                        <span class="label_text">Remember me</span>
                                    </label>
                                </div>
                            </div>

                            <button class="btn btn--md btn-primary" type="submit" value="Login">Login Now</button>

                            <div class="login_assist">
                                <p class="recover">Lost your
                                    <a href="recover-pass">username</a> or
                                    <a href="recover-pass">password</a>?</p>
                                <p class="signup">Don't have an
                                    <a href="signup">account</a>?</p>
                            </div>
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
        END LOGIN AREA
=================================-->
<?php include 'include/footer.php'; ?>
</body>

</html>