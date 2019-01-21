<?php
// Include config file
require_once "db/index.php";
require_once "class/auth.redirect.php";
$pt = "Create an account";
$ds = "Snipnetworks we bring good projects to life";
$kw = "Snipnetworks, snipnet";

//Require the class
require('class/formkey.class.php');
//Start the class
$formKey = new formKey();

// Define variables and initialize with empty values
$username = $password = $confirm_password = $email = "";

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
 
     // Validate email
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter a valid email.";
    } else{
        // Prepare a select statement
        $sql = "SELECT userID FROM users WHERE email = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
            // Set parameters
            $param_email = trim($_POST["email"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $email_err = "This email is already taken.";
                } else{
                    $email = trim($_POST["email"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
	
	
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT userID FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($email_err) && empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (email, username, password) VALUES (?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_email, $param_username, $param_password);
            
            // Set parameters
			$param_email = $email;
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login");
            } else{
                echo "Something went wrong. Please try again later.";
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
        START SIGNUP AREA
=================================-->
<section class="signup_area section--padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <form action="signup" method="post">
				<?php $formKey->outputKey(); ?>
                    <div class="cardify signup_form">
                        <div class="login--header">
                            <h3>Create Your Account</h3>
                            <p>Please fill the following fields with appropriate information to register a new DigiPro
                                account.
                            </p>
						 <?php
							      if(isset($error)) { echo("<div class='alert alert-warning' role='alert'>$error<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span class='icon-close' aria-hidden='true'></span></button></div>"); } 
							      if(isset($email_err)) { echo("<div class='alert alert-warning' role='alert'>$email_err<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span class='icon-close' aria-hidden='true'></span></button></div>"); }
								  if(isset($username_err)) { echo("<div class='alert alert-warning' role='alert'>$username_err<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span class='icon-close' aria-hidden='true'></span></button></div>"); }
							      if(isset($password_err)) { echo("<div class='alert alert-warning' role='alert'>$password_err<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span class='icon-close' aria-hidden='true'></span></button></div>"); }
								  if(isset($confirm_password_err)) { echo("<div class='alert alert-warning' role='alert'>$confirm_password_err<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span class='icon-close' aria-hidden='true'></span></button></div>"); }
							?>
							</strong>
                        </div>
                        <!-- end .login_header -->

                        <div class="login--form">
                            <div class="form-group">
                                <label for="email_ad">Email Address</label>
                                <input name="email" value="<?php echo $email; ?>" type="email" class="text_field"
                                       placeholder="Enter your email address">
                            </div>

                            <div class="form-group">
                                <label for="user_name">Username</label>
                                <input name="username" type="text" value="<?php echo $username; ?>" class="text_field"
                                       placeholder="Enter your username...">
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input name="password" type="password" value="<?php echo $password; ?>" class="text_field"
                                       placeholder="Enter your password...">
                            </div>

                            <div class="form-group">
                                <label for="con_pass">Confirm Password</label>
                                <input name="confirm_password" type="password" value="<?php echo $confirm_password; ?>" class="text_field" placeholder="Confirm password">
                            </div>

                            <button class="btn btn--md register_btn btn-primary" type="submit" value="Submit">Register Now</button>

                            <div class="login_assist">
                                <p>Already have an account?
                                    <a href="login">Login</a>
                                </p>
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
        END SIGNUP AREA
=================================-->
<?php include 'include/footer.php'; ?>
</body>

</html>