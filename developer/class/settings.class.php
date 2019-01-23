<?php
$set_id = 2;
$sel_query="Select * from settings WHERE id = '$set_id' ORDER BY id desc;";
$result = mysqli_query($link,$sel_query);
while($row = mysqli_fetch_assoc($result)) {
$base_url = $row["b_url"];
$short_name = $row["short_name"];
$site_title=$row["title"];
$foot_desc=$row["foot_desc"];
$acc_curency=$row["default_curency"];
}
$sel_query="Select * from settings WHERE id = '1' ORDER BY id desc;";
$result = mysqli_query($link,$sel_query);
while($row = mysqli_fetch_assoc($result)) {
$main_base_url = $row["b_url"];
$main_short_name = $row["short_name"];
$main_site_title=$row["title"];
}
?>