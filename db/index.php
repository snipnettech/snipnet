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

require_once "class/auth.class.php";

$sel_query="Select * from settings ORDER BY id desc;";
$result = mysqli_query($link,$sel_query);
while($row = mysqli_fetch_assoc($result)) {
$base_url = $row["b_url"];
$short_name = $row["short_name"];
$site_title=$row["title"];
$foot_desc=$row["foot_desc"];
$acc_curency=$row["default_curency"];
}
require_once "class/user.class.php";
require_once "class/time.class.php";
?>