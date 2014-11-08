<?php include("config.php"); ?>
<html>
<head>
<title>Dashboard-My Four Walls</title>
<link rel="stylesheet" href="adminPanel.css">
<script src="js/jquery-1.11.1.min.js"></script>
<script>
jQuery(document).ready(function()
	{
		jQuery('.dropdown-pages').hover(function()
		{
			jQuery(this).children('.sub-menu-pages').toggle(200);
		});
	});
</script>

<script>
jQuery(document).ready(function()
{
	jQuery(".new_project").click(function()
	{
				
		jQuery('#sidebar-left').unbind('click').click(function(e)
		{
			e.preventDefault();
			e.stopPropagation();
 
			var url = 'project_details_form.php';
 
		jQuery.post(url,
			function(data) 
			{
				if ('' !== data) 
				{
					jQuery('#test').empty().html(data);
				}
			}
		);
		});			
	});
});	
</script>
</head>
<body>
	<!-- Header starts here! -->
	
	<div class="navbar-header">
       
		<div class="logout"><a href="logout.php">Logout</a></div>
		<div class="header-logo"><a href="http://myfourwalls.in/"><img src="My Four Wallls.png"></a></div>
	</div>	<!-- Header Ends here! -->
	
	<!-- Sidebar-Left starts here! -->
	
	<div id="sidebar-left"  href="" class="sidebar">
		
			<div id="menu">
				<a href="index.php" class="dashboard">Dashboard</a>
				<a href="login.php" target="_self">Home</a>
			</div>
			
			<div class="dropdown-pages">
				<a href="#" class="projects">Projects</a>
					<div class="sub-menu-pages">
						<a href="" class="new_project">New Project</a>
					</div>
			</div>
			
			
			<div class="dropdown-media">
				<a href="#">Media</a>
					<div class="sub-menu-media">
						<a href="">Add Media</a>
					</div>
			</div>
			
		</div>	<!-- Sidebar-Left Ends here! -->

		<!-- This is Content-Area -->
		
	<div id="content">
		<div class="logo"><img src="My Four Wallls.png"><sup>Your Dashboard</sup></div>
		<div id="test"></div>
	</div>	<!-- Content-Area Ends here! -->

	<!-- This is Footer -->
	
	<div id="footer">
		<div align="center"><strong>Copyright @ 2011 - All Rights Reserved</strong></div>
	</div>	<!-- Footer Ends here! -->

	
</body>
</html>