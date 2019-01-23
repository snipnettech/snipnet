            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div class="sidebar-menu">
						<ul>
							<li> 
								<a href="<?php echo $base_url; ?>/index"><i class="la la-home"></i> <span>Back to Home</span></a>
							</li>
							<li class="menu-title">Settings</li>
							<li class="<?php if($baseURL === "settings"){ echo "active"; } ?>"> 
								<a href="<?php echo $base_url; ?>/settings"><i class="la la-building"></i> <span>Company Settings</span></a>
							</li>
							<li class="<?php if($baseURL === "localization"){ echo "active"; } ?>"> 
								<a href="<?php echo $base_url; ?>/localization"><i class="la la-clock-o"></i> <span>Localization</span></a>
							</li>
							<li class="<?php if($baseURL === "invoice-settings"){ echo "active"; } ?>"> 
								<a href="<?php echo $base_url; ?>/invoice-settings"><i class="la la-pencil-square"></i> <span>Invoice Settings</span></a>
							</li>
							<li class="<?php if($baseURL === "notifications-settings"){ echo "active"; } ?>"> 
								<a href="<?php echo $base_url; ?>/notifications-settings"><i class="la la-globe"></i> <span>Notifications</span></a>
							</li>
							<li class="<?php if($baseURL === "change-password"){ echo "active"; } ?>"> 
								<a href="<?php echo $base_url; ?>/change-password"><i class="la la-lock"></i> <span>Change Password</span></a>
							</li>
						</ul>
					</div>
                </div>
            </div>