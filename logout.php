<?php
// Initialize the session
session_start();
require_once "db/index.php";
require_once "class/class.restrict.php";
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();
 
// Redirect to index page
header("location: index");
exit;
?>