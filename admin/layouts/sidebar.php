<?php
$messages=seeMessage($conn);
foreach ($messages as $key => $message){
}
	
?>
<div class="sidebar" id="sidebar">
					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
					</script>

					

					<ul class="nav nav-list">
						<li class="active">
							<a href="dashboard.php">
								<i class="icon-dashboard"></i>
								<span class="menu-text"> Dashboard </span>
							</a>
						</li>

						<li>
							<a  class="dropdown-toggle">
								<i class="icon-user"></i>
								<span class="menu-text"> Admin Users </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="adduser.php">
										<i class="icon-double-angle-right"></i>
										Add User
									</a>
								</li>

								<li>
									<a href="manageusers.php">
										<i class="icon-double-angle-right"></i>
										Manage Users
									</a>
								</li>

								
							</ul>
						</li>

						

					<ul class="nav nav-list">
						<li>
							<a class="dropdown-toggle">
								<i class="icon-desktop"></i>
								<span class="menu-text">TV Program</span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="addprogram.php">
										<i class="icon-double-angle-right"></i>
										Add TV Program
									</a>
								</li>

								<li>
									<a href="manageprogram.php">
										<i class="icon-double-angle-right"></i>
										Manage TV Programs
									</a>
								</li>

								
							</ul>
						</li>


					<ul class="nav nav-list">
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-camera"></i>
								<span class="menu-text"> Image Slider </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="addimageslider.php">
										<i class="icon-double-angle-right"></i>
										Add ImageSlider
									</a>
								</li>

								<li>
									<a href="manageimageslider.php">
										<i class="icon-double-angle-right"></i>
										Manage ImageSlider
									</a>
								</li>

								
							</ul>
						</li>
					<ul class="nav nav-list">
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-exchange"></i>
								<span class="menu-text"> Our Partners </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="addpartner.php">
										<i class="icon-double-angle-right"></i>
										Add Partner
									</a>
								</li>

								<li>
									<a href="managepartners.php">
										<i class="icon-double-angle-right"></i>
										Manage Partners									</a>
								</li>

								
							</ul>
						</li>


                    <ul class="nav nav-list">
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-certificate"></i>
								<span class="menu-text">Achievement</span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="addachievement.php">
										<i class="icon-double-angle-right"></i>
										Add Achievement
									</a>
								</li>

								<li>
									<a href="manageachievements.php">
										<i class="icon-double-angle-right"></i>
										 Manage Achievement
									</a>
								</li>

								
							</ul>
						</li>

                      
                      <ul class="nav nav-list">
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-comment"></i>
								<?php 
							
								if($message){?>

								<span  style="color:red" class="menu-text">Messages</span>
							
							<?php echo  "   (".$message.")";
							} 
							else { ?> <span class="menu-text">Messages</span> <?php } ?>
								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									
									
									<a href="managemessage.php" >
										<i class="icon-double-angle-right"></i>
										View Message
									</a>
								
								</li>

								

								
							</ul>
						</li>


						
					<div class="sidebar-collapse" id="sidebar-collapse">
						<i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
					</div>

					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}

						
					</script>

				</div>
				