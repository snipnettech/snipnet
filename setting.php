<?php
// Include config file
require_once "db/index.php";
require_once "class/class.restrict.php";
$pt = "Account Settings";
$ds = "Configure account, billing & notification settings.";
$kw = "Configure, account, billing, notification, settings";

//Start the formkey class
$formKey = new formKey();

if(isset($_FILES["file"])) {
        $imgname = mt_rand(100000,999999).".png";
        $target_dir = "images/avatar/";
        $target_file = $target_dir . basename($_FILES["file"]["name"]);

        // Select file type
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Valid file extensions
        $extensions_arr = array("jpg","jpeg","png","gif");

        // Check extension
        if( in_array($imageFileType,$extensions_arr) ){
            
            // Convert to base64 
            $image_base64 = base64_encode(file_get_contents($_FILES['file']['tmp_name']) );
            $image = 'data:image/'.$imageFileType.';base64,'.$image_base64;

  chown($usr_avatar, 666);
  if($usr_avatar == "images/avatar/default.png") { }else {
	  unlink($usr_avatar);
  }
  // Insert record
$update="update users set avatar='".$imgname."' where userID='".$usr_id."'";
if(mysqli_query($link, $update) or die(mysqli_error($link))) {
  $report = "<div class='alert alert-success' role='alert'>Profile photo updated<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span class='icon-close' aria-hidden='true'></span></button></div>";
}else {
	$report = "<div class='alert alert-warning' role='alert'>Failed to update profile photo<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span class='icon-close' aria-hidden='true'></span></button></div>";
}
            
            // Upload file
            move_uploaded_file($_FILES['file']['tmp_name'],'images/avatar/'.$imgname);

        }
if (!file_exists($usr_avatar)) {
    $usr_avatar = "images/avatar/default.png";
}
}
if(isset($_POST["delete_avatar"])) {
chown($usr_avatar, 666);
  if($usr_avatar == "images/avatar/default.png") {
	$report = "<div class='alert alert-warning' role='alert'>You have no photos on our server<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span class='icon-close' aria-hidden='true'></span></button></div>";
	  }else {
	  unlink($usr_avatar);
$def_avatar = "default.png";
$update="update users set avatar='".$def_avatar."' where userID='".$usr_id."'";
if(mysqli_query($link, $update) or die(mysqli_error($link))) {
	$report = "<div class='alert alert-success' role='alert'>Your profile photo has been deleted.<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span class='icon-close' aria-hidden='true'></span></button></div>";
	if (!file_exists($usr_avatar)) {
    $usr_avatar = "images/avatar/default.png";
}
}
  }
}

if(isset($_POST["emailad"])) {
		//Validate the form key
    if(!isset($_POST['form_key']) || !$formKey->validate())
    {
        //Form key is invalid, show an error
		$report = "<div class='alert alert-warning' role='alert'>Invalid Request. Please try again!<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span class='icon-close' aria-hidden='true'></span></button></div>";
    }
    else
    {
$new_email = $_POST["emailad"];
$update="update users set email='".$new_email."' where userID='".$usr_id."'";
if(mysqli_query($link, $update) or die(mysqli_error($link))) {
	$report = "<div class='alert alert-success' role='alert'>Your email has been updated.<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span class='icon-close' aria-hidden='true'></span></button></div>";
}else {
	$report = "<div class='alert alert-warning' role='alert'>Failed to update, please try again.<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span class='icon-close' aria-hidden='true'></span></button></div>";
}
}
}
if(isset($_POST["billing"])) {
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$cname = $_POST['cname'];
$mnumber = $_POST['mnumber'];
$adr1 = $_POST['adr1'];
$adr2 = $_POST['adr2'];
$city = $_POST['city'];
$zip = $_POST['zip'];
$country = $_POST['country'];
$update="update users_billing_info set fname='".$fname."', lname='".$lname."', cname='".$cname."', mnumber='".$mnumber."', adr1='".$adr1."', adr2='".$adr2."', city='".$city."', zip='".$zip."', country='".$country."' where userID='".$usr_id."'";
if(mysqli_query($link, $update) or die(mysqli_error($link))) {
	                        // Redirect user to welcome page
							if(isset($_SESSION["last_url"])){
							$last_url = $_SESSION["last_url"];
                            header("location: $last_url");
							}else{
							$report = "<div class='alert alert-success' role='alert'>Your billing information has been updated.<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span class='icon-close' aria-hidden='true'></span></button></div>";
							}
}else {
	$report = "<div class='alert alert-warning' role='alert'>Failed to update, please try again.<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span class='icon-close' aria-hidden='true'></span></button></div>";
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
        START DASHBOARD AREA
=================================-->
<section class="dashboard-area">
<?php include 'include/sub-menu.php'; ?>
    <div class="dashboard_contents section--padding">
        <div class="container">

                <div class="row">
                    <div class="col-md-12">
					<?php if(isset($report)){ echo $report; } ?>
                        <div class="information_module">
                            <div class="information__set profile_images">
                                <div class="information_wrapper">
                                    <div class="profile_image_area">
                                        <div>
                                            <img src="<?php echo $usr_avatar;  ?>" alt="Author profile area" width="100px" height="100px">
                                            <div class="img_info">
                                                <p class="bold">Profile photo</p>
                                                <p class="subtitle">JPG, GIF or PNG 100x100 px</p>
                                            </div>
                                        </div>
										<form method="post" enctype='multipart/form-data'>
                                        <label for="cover_photo" class="upload_btn">
                                            <input type="file" name="file" id="cover_photo" onchange='if(this.value != 0) { this.form.submit(); }'>
                                            <span class="btn btn-sm btn-primary"
                                                  aria-hidden="true">Upload New Photo</span>
										  <form method="post" enctype='multipart/form-data'>
										  <button type="submit" class="btn btn-sm btn-danger" name="delete_avatar" >Delete Photo</button>
											</form>
                                        </label>
										</form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end /.information_module -->
                    </div><!-- ends: .col-md-12 -->
<form method="post" enctype='multipart/form-data' class="setting_form">
<?php $formKey->outputKey(); ?>
                    <div class="col-md-12">
                        <div class="information_module">
                            <div class="toggle_title">
                                <h4>Personal Information</h4>
                            </div>

                            <div class="information__set">
                                <div class="information_wrapper form--fields row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="username">Username
                                                <sup>*</sup>
                                            </label>
                                            <input type="text" name="username" class="text_field"
                                                   placeholder="Username" value="<?php echo $usr_name; ?>" disabled>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailad">Email Address
                                                <sup>*</sup>
                                            </label>
                                            <input type="text" name="emailad" class="text_field"
                                                   placeholder="Email address" value="<?php echo $usr_email; ?>" required="">
                                        </div>
                                    </div>

                    <div class="col-md-12">
                        <div class="dashboard_setting_btn">
                            <button type="submit" class="btn btn--md btn-primary">Save Change</button>
							 <a href="" class="btn btn-sm btn-danger">Cancel</a>
                        </div>
                    </div>
                    <!-- end /.col-md-12 -->
                                </div>
                                <!-- end /.information_wrapper -->
                            </div>
                            <!-- end /.information__set -->
                        </div>
                        <!-- end /.information_module -->
                    </div><!-- ends: .col-md-12 -->
</form>
<form method="post" enctype='multipart/form-data' class="setting_form">
                    <div class="col-md-12">
                        <div class="information_module">
                            <div class="toggle_title">
                                <h4>Billing Information</h4>
                            </div>

                            <div class="information__set">
                                <div class="information_wrapper form--fields">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="fname">First Name
                                                    <sup>*</sup>
                                                </label>
                                                <input type="text" name="fname" class="text_field" value="<?php echo $usr_fname; ?>" required="">
                                            </div>
                                        </div><!-- ends: .col-md-6 -->

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="lname">Last Name
                                                    <sup>*</sup>
                                                </label>
                                                <input type="text" name="lname" class="text_field" value="<?php echo $usr_lname; ?>" required="">
                                            </div>
                                        </div><!-- ends: .col-md-6 -->

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="cname">Company Name
                                                </label>
                                                <input type="text" name="cname" class="text_field" value="<?php echo $usr_cname; ?>">
                                            </div>
                                        </div><!-- ends: .col-md-6 -->

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="mnumber">Mobile Number
                                                </label>
                                                <input type="text" name="mnumber" class="text_field" value="<?php echo $usr_mnumber; ?>">
                                            </div>
                                        </div><!-- ends: .col-md-6 -->

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="addr1">Address Line 1
												<sup>*</sup>
												</label>
                                                <input type="text" name="adr1" class="text_field" value="<?php echo $usr_adr1; ?>" required="">
                                            </div>
                                        </div><!-- ends: .col-md-6 -->

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="addr2">Address Line 2</label>
                                                <input type="text" name="adr2" value="<?php echo $usr_adr2; ?>" class="text_field">
                                            </div>
                                        </div><!-- ends: .col-md-6 -->

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="city">City
                                                    <sup>*</sup>
                                                </label>
                                                <input type="text" name="city" class="text_field" value="<?php echo $usr_city; ?>" required="">
                                            </div>
                                        </div><!-- ends: .col-md-6 -->

                                        <div class="col-md-6">
                                            <div class="">
                                                <label for="zipcode">Zip / Postal Code
                                                    <sup>*</sup>
                                                </label>
                                                <input type="text" name="zip" value="<?php echo $usr_zip; ?>" class="text_field" required="">
                                            </div>
                                        </div><!-- ends: .col-md-6 -->
										
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="country1">Country
                                                    <sup>*</sup>
                                                </label>
                                                <div class="select-wrap select-wrap2">
                                                    <select name="country" class="text_field" required="">

<option value="<?php echo $usr_country; ?>"><?php if(empty($usr_country)){ echo "--Select an option--"; }else{ echo $usr_country; } ?></option>
<option value="Afganistan">Afghanistan</option>
<option value="Albania">Albania</option>
<option value="Algeria">Algeria</option>
<option value="American Samoa">American Samoa</option>
<option value="Andorra">Andorra</option>
<option value="Angola">Angola</option>
<option value="Anguilla">Anguilla</option>
<option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
<option value="Argentina">Argentina</option>
<option value="Armenia">Armenia</option>
<option value="Aruba">Aruba</option>
<option value="Australia">Australia</option>
<option value="Austria">Austria</option>
<option value="Azerbaijan">Azerbaijan</option>
<option value="Bahamas">Bahamas</option>
<option value="Bahrain">Bahrain</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Barbados">Barbados</option>
<option value="Belarus">Belarus</option>
<option value="Belgium">Belgium</option>
<option value="Belize">Belize</option>
<option value="Benin">Benin</option>
<option value="Bermuda">Bermuda</option>
<option value="Bhutan">Bhutan</option>
<option value="Bolivia">Bolivia</option>
<option value="Bonaire">Bonaire</option>
<option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
<option value="Botswana">Botswana</option>
<option value="Brazil">Brazil</option>
<option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
<option value="Brunei">Brunei</option>
<option value="Bulgaria">Bulgaria</option>
<option value="Burkina Faso">Burkina Faso</option>
<option value="Burundi">Burundi</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Canary Islands">Canary Islands</option>
<option value="Cape Verde">Cape Verde</option>
<option value="Cayman Islands">Cayman Islands</option>
<option value="Central African Republic">Central African Republic</option>
<option value="Chad">Chad</option>
<option value="Channel Islands">Channel Islands</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Christmas Island">Christmas Island</option>
<option value="Cocos Island">Cocos Island</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Congo">Congo</option>
<option value="Cook Islands">Cook Islands</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Cote DIvoire">Cote D'Ivoire</option>
<option value="Croatia">Croatia</option>
<option value="Cuba">Cuba</option>
<option value="Curaco">Curacao</option>
<option value="Cyprus">Cyprus</option>
<option value="Czech Republic">Czech Republic</option>
<option value="Denmark">Denmark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominica">Dominica</option>
<option value="Dominican Republic">Dominican Republic</option>
<option value="East Timor">East Timor</option>
<option value="Ecuador">Ecuador</option>
<option value="Egypt">Egypt</option>
<option value="El Salvador">El Salvador</option>
<option value="Equatorial Guinea">Equatorial Guinea</option>
<option value="Eritrea">Eritrea</option>
<option value="Estonia">Estonia</option>
<option value="Ethiopia">Ethiopia</option>
<option value="Falkland Islands">Falkland Islands</option>
<option value="Faroe Islands">Faroe Islands</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="French Guiana">French Guiana</option>
<option value="French Polynesia">French Polynesia</option>
<option value="French Southern Ter">French Southern Ter</option>
<option value="Gabon">Gabon</option>
<option value="Gambia">Gambia</option>
<option value="Georgia">Georgia</option>
<option value="Germany">Germany</option>
<option value="Ghana">Ghana</option>
<option value="Gibraltar">Gibraltar</option>
<option value="Great Britain">Great Britain</option>
<option value="Greece">Greece</option>
<option value="Greenland">Greenland</option>
<option value="Grenada">Grenada</option>
<option value="Guadeloupe">Guadeloupe</option>
<option value="Guam">Guam</option>
<option value="Guatemala">Guatemala</option>
<option value="Guinea">Guinea</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haiti</option>
<option value="Hawaii">Hawaii</option>
<option value="Honduras">Honduras</option>
<option value="Hong Kong">Hong Kong</option>
<option value="Hungary">Hungary</option>
<option value="Iceland">Iceland</option>
<option value="India">India</option>
<option value="Indonesia">Indonesia</option>
<option value="Iran">Iran</option>
<option value="Iraq">Iraq</option>
<option value="Ireland">Ireland</option>
<option value="Isle of Man">Isle of Man</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jordan">Jordan</option>
<option value="Kazakhstan">Kazakhstan</option>
<option value="Kenya">Kenya</option>
<option value="Kiribati">Kiribati</option>
<option value="Korea North">Korea North</option>
<option value="Korea Sout">Korea South</option>
<option value="Kuwait">Kuwait</option>
<option value="Kyrgyzstan">Kyrgyzstan</option>
<option value="Laos">Laos</option>
<option value="Latvia">Latvia</option>
<option value="Lebanon">Lebanon</option>
<option value="Lesotho">Lesotho</option>
<option value="Liberia">Liberia</option>
<option value="Libya">Libya</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lithuania">Lithuania</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Macau">Macau</option>
<option value="Macedonia">Macedonia</option>
<option value="Madagascar">Madagascar</option>
<option value="Malaysia">Malaysia</option>
<option value="Malawi">Malawi</option>
<option value="Maldives">Maldives</option>
<option value="Mali">Mali</option>
<option value="Malta">Malta</option>
<option value="Marshall Islands">Marshall Islands</option>
<option value="Martinique">Martinique</option>
<option value="Mauritania">Mauritania</option>
<option value="Mauritius">Mauritius</option>
<option value="Mayotte">Mayotte</option>
<option value="Mexico">Mexico</option>
<option value="Midway Islands">Midway Islands</option>
<option value="Moldova">Moldova</option>
<option value="Monaco">Monaco</option>
<option value="Mongolia">Mongolia</option>
<option value="Montserrat">Montserrat</option>
<option value="Morocco">Morocco</option>
<option value="Mozambique">Mozambique</option>
<option value="Myanmar">Myanmar</option>
<option value="Nambia">Nambia</option>
<option value="Nauru">Nauru</option>
<option value="Nepal">Nepal</option>
<option value="Netherland Antilles">Netherland Antilles</option>
<option value="Netherlands">Netherlands (Holland, Europe)</option>
<option value="Nevis">Nevis</option>
<option value="New Caledonia">New Caledonia</option>
<option value="New Zealand">New Zealand</option>
<option value="Nicaragua">Nicaragua</option>
<option value="Niger">Niger</option>
<option value="Nigeria">Nigeria</option>
<option value="Niue">Niue</option>
<option value="Norfolk Island">Norfolk Island</option>
<option value="Norway">Norway</option>
<option value="Oman">Oman</option>
<option value="Pakistan">Pakistan</option>
<option value="Palau Island">Palau Island</option>
<option value="Palestine">Palestine</option>
<option value="Panama">Panama</option>
<option value="Papua New Guinea">Papua New Guinea</option>
<option value="Paraguay">Paraguay</option>
<option value="Peru">Peru</option>
<option value="Phillipines">Philippines</option>
<option value="Pitcairn Island">Pitcairn Island</option>
<option value="Poland">Poland</option>
<option value="Portugal">Portugal</option>
<option value="Puerto Rico">Puerto Rico</option>
<option value="Qatar">Qatar</option>
<option value="Republic of Montenegro">Republic of Montenegro</option>
<option value="Republic of Serbia">Republic of Serbia</option>
<option value="Reunion">Reunion</option>
<option value="Romania">Romania</option>
<option value="Russia">Russia</option>
<option value="Rwanda">Rwanda</option>
<option value="St Barthelemy">St Barthelemy</option>
<option value="St Eustatius">St Eustatius</option>
<option value="St Helena">St Helena</option>
<option value="St Kitts-Nevis">St Kitts-Nevis</option>
<option value="St Lucia">St Lucia</option>
<option value="St Maarten">St Maarten</option>
<option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
<option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
<option value="Saipan">Saipan</option>
<option value="Samoa">Samoa</option>
<option value="Samoa American">Samoa American</option>
<option value="San Marino">San Marino</option>
<option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
<option value="Saudi Arabia">Saudi Arabia</option>
<option value="Senegal">Senegal</option>
<option value="Serbia">Serbia</option>
<option value="Seychelles">Seychelles</option>
<option value="Sierra Leone">Sierra Leone</option>
<option value="Singapore">Singapore</option>
<option value="Slovakia">Slovakia</option>
<option value="Slovenia">Slovenia</option>
<option value="Solomon Islands">Solomon Islands</option>
<option value="Somalia">Somalia</option>
<option value="South Africa">South Africa</option>
<option value="Spain">Spain</option>
<option value="Sri Lanka">Sri Lanka</option>
<option value="Sudan">Sudan</option>
<option value="Suriname">Suriname</option>
<option value="Swaziland">Swaziland</option>
<option value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>
<option value="Syria">Syria</option>
<option value="Tahiti">Tahiti</option>
<option value="Taiwan">Taiwan</option>
<option value="Tajikistan">Tajikistan</option>
<option value="Tanzania">Tanzania</option>
<option value="Thailand">Thailand</option>
<option value="Togo">Togo</option>
<option value="Tokelau">Tokelau</option>
<option value="Tonga">Tonga</option>
<option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
<option value="Tunisia">Tunisia</option>
<option value="Turkey">Turkey</option>
<option value="Turkmenistan">Turkmenistan</option>
<option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
<option value="Tuvalu">Tuvalu</option>
<option value="Uganda">Uganda</option>
<option value="Ukraine">Ukraine</option>
<option value="United Arab Erimates">United Arab Emirates</option>
<option value="United Kingdom">United Kingdom</option>
<option value="United States of America">United States of America</option>
<option value="Uraguay">Uruguay</option>
<option value="Uzbekistan">Uzbekistan</option>
<option value="Vanuatu">Vanuatu</option>
<option value="Vatican City State">Vatican City State</option>
<option value="Venezuela">Venezuela</option>
<option value="Vietnam">Vietnam</option>
<option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
<option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
<option value="Wake Island">Wake Island</option>
<option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
<option value="Yemen">Yemen</option>
<option value="Zaire">Zaire</option>
<option value="Zambia">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option>		
                                                    </select>
                                                    <span class="lnr icon-arrow-down"></span>
                                                </div>
                                            </div>
                                        </div><!-- ends: .col-md-6 -->
							<div class="col-md-12">
                        <div class="dashboard_setting_btn">
                            <button type="submit" class="btn btn--md btn-primary" name="billing">Save Change</button>
                            <a href="" class="btn btn-sm btn-danger">Cancel</a>
                        </div>
                    </div>
                    <!-- end /.col-md-12 -->
                                    </div>
                                    <!-- end /.row -->
                                </div>
                            </div>
                            <!-- end /.information__set -->
                        </div>
                        <!-- end /.information_module -->
                    </div><!-- end /.col-md-12 -->
</form>
                    <div class="col-md-12">
                        <div class="information_module">
                            <div class="toggle_title">
                                <h4>Notifications</h4>
                            </div>

                            <div class="information__set mail_setting">
                                <div class="information_wrapper">
                                    <div class="custom_checkbox">
                                        <label class="toggle-switch">
                                            <input type="checkbox" checked>
                                            <span class="slider round"></span>
                                            <span class="radio_title">Rating Reminders</span>
                                            <span class="desc">Send an email reminding me to rate an item after purchase</span>
                                        </label>
                                    </div>
                                    <!-- end /.custom-checkbox -->

                                    <div class="custom_checkbox">
                                        <label class="toggle-switch">
                                            <input type="checkbox" checked>
                                            <span class="slider round"></span>
                                            <span class="radio_title">Item Update Notifications</span>
                                            <span class="desc">Send an email reminding me to rate an item after purchase</span>
                                        </label>
                                    </div>
                                    <!-- end /.custom-checkbox -->

                                </div>
                                <!-- end /.information_wrapper -->
                            </div>
                            <!-- end /.information_module -->
                        </div>
                        <!-- end /.information_module -->
                    </div><!-- ends: .col-md-12 -->

                </div>
                <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </div>
    <!-- end /.dashboard_menu_area -->
</section>
<!--================================
        END DASHBOARD AREA
=================================-->
<?php include 'include/footer.php'; ?>
</body>

</html>