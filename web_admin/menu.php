
			<!--sidebar nav start-->
					<ul class="nav nav-pills nav-stacked custom-nav">
						
						
			<?php					  
					$IncMenu = 0;
					$resultHeader 	= mysql_query("	SELECT A.*,B.Auth
													FROM M_MENU AS A INNER JOIN
    												M_AUTH_USER AS B ON A.pg_no = B.pg_no
													WHERE A.type = 'M' And B.id_user = '".$_SESSION['Ses_User']."'
													ORDER BY A.nourut,A.pg_no ", $koneksidb) or die ("Gagal query 1");

					while ($rowHeader	= mysql_fetch_array($resultHeader))
					 {
						$IncMenu ++;
					 	$pg_name1 	= $rowHeader['pg_name'];
					 	$pg_title1 	= $rowHeader['pg_title'];
					 	$pg_link1 	= $rowHeader['pg_link'];
						$pg_image1 	= $rowHeader['pg_image'];
						$mn_no1 	= $rowHeader['mn_no'];
						$Auth = $rowHeader['Auth'];
		echo "				
					<li class='menu-list'><a href='$pg_link1'><i class='$pg_image1'></i>  <span> $pg_name1 </span></a> 
							<ul class='sub-menu-list'>";
							
							
						$resultSubMenu = mysql_query("SELECT A.*,B.Auth
														FROM M_MENU AS A INNER JOIN
														M_AUTH_USER  AS B ON A.pg_no = B.pg_no 
														AND B.id_user = '".$_SESSION['Ses_User']."' 
														AND A.Mn_No = '".trim($mn_no1)."' 
														AND A.type = 'S'
														Order By A.nourut,A.sm_no ", $koneksidb) or die ("Gagal query 2");
									
			while ($rowSubMenu	= mysql_fetch_array($resultSubMenu))
			{
									$pg_name2 	= $rowSubMenu['pg_name'];
									$pg_title2 	= $rowSubMenu['pg_title'];
									$pg_link2 	= $rowSubMenu['pg_link'];
									$pg_image2 	= $rowSubMenu['pg_image'];
									$mn_no2 	= $rowSubMenu['mn_no'];
									$sm_no2 	= $rowSubMenu['sm_no']; 
									$_SESSION['Auth'] = $rowSubMenu['Auth']; 
			echo "	
				 <li><a href='$pg_link2'>$pg_name2</a> </li>";
			}
				echo " 
			        </ul></li>";
					 }
			?>
						
						
					</ul>
				<!--sidebar nav end-->
			</div>
		</div>
		<!-- left side end-->
    
		<!-- main content start-->
		<div class="main-content">
			<!-- header-starts -->
			<div class="header-section">
			 
			<!--toggle button start-->
			<a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a>
			<!--toggle button end-->


			<!--notification menu start -->
			<div class="menu-right">
				<div class="user-panel-top">  	
					<div class="profile_details_left">
						<ul class="nofitications-dropdown">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge">3</span></a>
									
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>You have 3 new messages</h3>
												</div>
											</li>
											<li><a href="#">
											   <div class="user_img"><img src="images/1.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor sit amet</p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											 </a></li>
											 <li class="odd"><a href="#">
												<div class="user_img"><img src="images/1.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor sit amet </p>
												<p><span>1 hour ago</span></p>
												</div>
											  <div class="clearfix"></div>	
											 </a></li>
											<li><a href="#">
											   <div class="user_img"><img src="images/1.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor sit amet </p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											</a></li>
											<li>
												<div class="notification_bottom">
													<a href="#">See all messages</a>
												</div> 
											</li>
										</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">3</span></a>
									<ul class="dropdown-menu">
										<li>
											<div class="notification_header">
												<h3>You have 3 new notification</h3>
											</div>
										</li>
										<li><a href="#">
											<div class="user_img"><img src="images/1.png" alt=""></div>
										   <div class="notification_desc">
											<p>Lorem ipsum dolor sit amet</p>
											<p><span>1 hour ago</span></p>
											</div>
										  <div class="clearfix"></div>	
										 </a></li>
										 <li class="odd"><a href="#">
											<div class="user_img"><img src="images/1.png" alt=""></div>
										   <div class="notification_desc">
											<p>Lorem ipsum dolor sit amet </p>
											<p><span>1 hour ago</span></p>
											</div>
										   <div class="clearfix"></div>	
										 </a></li>
										 <li><a href="#">
											<div class="user_img"><img src="images/1.png" alt=""></div>
										   <div class="notification_desc">
											<p>Lorem ipsum dolor sit amet </p>
											<p><span>1 hour ago</span></p>
											</div>
										   <div class="clearfix"></div>	
										 </a></li>
										 <li>
											<div class="notification_bottom">
												<a href="#">See all notification</a>
											</div> 
										</li>
									</ul>
							</li>					   		
							<div class="clearfix"></div>	
						</ul>
					</div>
					<div class="profile_details">		
						<ul>
							<li class="dropdown profile_details_drop">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<div class="profile_img">	
										<span style="background:url(images/1.jpg) no-repeat center"> </span> 
										 <div class="user-name">
											<p><?php echo $_SESSION['Ses_User']; ?><span><?php echo $_SESSION['Ses_Nama']; ?></span></p>
										 </div>
										 <i class="lnr lnr-chevron-down"></i>
										 <i class="lnr lnr-chevron-up"></i>
										<div class="clearfix"></div>	
									</div>	
								</a>
								<ul class="dropdown-menu drp-mnu">
									<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
									<li> <a href="#"><i class="fa fa-user"></i>Profile</a> </li> 
									<li> <a href="login_out.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
								</ul>
							</li>
							<div class="clearfix"> </div>
						</ul>
					</div>		           	
					<div class="clearfix"></div>
				</div>
			  </div>
			<!--notification menu end -->