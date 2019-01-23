            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="<?php if($baseURL === "index"){ echo "active"; } ?>"> 
								<a href="<?php echo $base_url; ?>/index"><i class="la la-dashboard"></i> <span>Dashboard</span></a>
							</li>
							<li class="<?php if($baseURL === "clients"){ echo "active"; } ?>"> 
								<a href="<?php echo $base_url; ?>/clients"><i class="la la-users"></i> <span>Clients</span></a>
							</li>
							<li class="<?php if($baseURL === "projects"){ echo "active"; } ?>"> 
								<a href="<?php echo $base_url; ?>/projects"><i class="la la-rocket"></i> <span>Projects</span></a>
							</li>
							<li class="<?php if($baseURL === "tasks"){ echo "active"; } ?>"> 
								<a href="<?php echo $base_url; ?>/tasks"><i class="la la-tasks"></i> <span>Tasks</span></a>
							</li>
							<li class="<?php if($baseURL === "contacts"){ echo "active"; } ?>"> 
								<a href="<?php echo $base_url; ?>/contacts"><i class="la la-book"></i> <span>Contacts</span></a>
							</li>
							<li class="<?php if($baseURL === "leads"){ echo "active"; } ?>"> 
								<a href="<?php echo $base_url; ?>/leads"><i class="la la-user-secret"></i> <span>Leads</span></a>
							</li>
							<li class="submenu">
								<a href="#"><i class="la la-files-o"></i> <span> Accounts </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li class="<?php if($baseURL === "estimates"){ echo "active"; } ?>"><a href="<?php echo $base_url; ?>/estimates">Estimates</a></li>
									<li class="<?php if($baseURL === "invoices"){ echo "active"; } ?>"><a href="<?php echo $base_url; ?>/invoices">Invoices</a></li>
								</ul>
							</li>
							<li class="<?php if($baseURL === "chat"){ echo "active"; } ?>"> 
								<a href="<?php echo $base_url; ?>/chat"><i class="la la-comments"></i> <span>Chat</span> <span class="badge bg-primary pull-right">5</span></a>
							</li>
							<li class="<?php if($baseURL === "settings"){ echo "active"; } ?>"> 
								<a href="<?php echo $base_url; ?>/settings"><i class="la la-cog"></i> <span>Settings</span></a>
							</li>
						</ul>
					</div>
                </div>
            </div>