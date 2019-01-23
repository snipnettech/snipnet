<?php
/* Database credentials. */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'snipnet');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: FAILED. " . mysqli_connect_error());
}

try{
    $db = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    // Set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}
// Set the Time Zone
date_default_timezone_set('Africa/Lagos');


//load settings classes as needed

   //if call from within main folder adjust the path
   $auth_class = 'class/auth.class.php';
   $user_class = 'class/user.class.php';
   $time_class = 'class/time.class.php';
   $formkey_class = 'class/formkey.class.php';
   if ( file_exists($auth_class) && file_exists($user_class) && file_exists($time_class) && file_exists($formkey_class)) {
      require_once $auth_class;
	  require_once $user_class;
	  require_once $time_class;
	  require_once $formkey_class;
   }  
   
   //if call from within sub folders adjust the path
   $auth_class = '../class/auth.class.php';
   $user_class = '../class/user.class.php';
   $time_class = '../class/time.class.php';
   $formkey_class = '../class/formkey.class.php';
   if ( file_exists($auth_class) && file_exists($user_class) && file_exists($time_class ) && file_exists($formkey_class)) {
      require_once $auth_class;
	  require_once $user_class;
	  require_once $time_class;
	  require_once $formkey_class;
   }
   
   //if call from within sub folders adjust the path
   $auth_class = '../../class/auth.class.php';
   $user_class = '../../class/user.class.php';
   $time_class = '../../class/time.class.php';
   $formkey_class = '../../class/formkey.class.php';
   if ( file_exists($auth_class) && file_exists($user_class) && file_exists($time_class ) && file_exists($formkey_class)) {
      require_once $auth_class;
	  require_once $user_class;
	  require_once $time_class;
	  require_once $formkey_class;
   }
?>