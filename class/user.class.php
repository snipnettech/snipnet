<?php
if(isset($_SESSION["id"])){
$ses_id = $_SESSION["id"];
$sel_query="Select * from users where userID = '$ses_id';";
$result = mysqli_query($link,$sel_query);
if($row = mysqli_fetch_assoc($result)) {
$usr_avatar = "images/avatar/".$row['avatar'];
$usr_id = $row['userID'];
$usr_name = $row['username'];
$usr_email = $row['email'];
}
$sel_query="Select * from users_billing_info where userID = '$ses_id';";
$result = $link->query($sel_query) or die($link->error);
if ($result->num_rows > 0) {
$row = $result->fetch_assoc();
if(empty($row['fname']) or empty($row['lname']) or empty($row['adr1']) or empty($row['zip']) or empty($row['country'])) {
$usr_fname = $row['fname'];
$usr_lname = $row['lname'];
$usr_cname = $row['cname'];
$usr_mnumber = $row['mnumber'];
$usr_adr1 = $row['adr1'];
$usr_adr2 = $row['adr2'];
$usr_city = $row['city'];
$usr_zip = $row['zip'];
$usr_country = $row['country'];
$reg_process = 2;
}else {
$usr_fname = $row['fname'];
$usr_lname = $row['lname'];
$usr_cname = $row['cname'];
$usr_mnumber = $row['mnumber'];
$usr_adr1 = $row['adr1'];
$usr_adr2 = $row['adr2'];
$usr_city = $row['city'];
$usr_zip = $row['zip'];
$usr_country = $row['country'];
}
}else {
	mysqli_query($link, "INSERT INTO users_billing_info(userID) VALUES('" . $ses_id . "')");
	header("location: #");
}
}
?>