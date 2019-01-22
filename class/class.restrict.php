<?php
   $baseURL = basename($_SERVER["SCRIPT_FILENAME"], '.php');
// Check if the user is already logged in, if not then redirect him to the login page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){ 
if(isset($reg_process) == 2){
	if($baseURL == "setting"){
    $report = "<div class='alert alert-info' role='alert'>Please Update your billing information.<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span class='icon-close' aria-hidden='true'></span></button></div>";
		}else{
	// Store data in session variables
   if($baseURL == "logout"){ }else{
   $_SESSION["last_url"] = $baseURL;
   header("location: setting");
   exit();
   }
	}
}
}else{
	// Store data in session variables
   if($baseURL == "logout"){ }else{
   $_SESSION["last_url"] = $baseURL;
   header("location: login");
   exit();
   }
}
?>