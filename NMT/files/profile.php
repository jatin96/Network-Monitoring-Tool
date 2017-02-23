<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>
	Welcome
</title>
<link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css" />
<link href="http://fonts.googleapis.com/css?family=Bevan" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/style_profile.css" />
<link rel="stylesheet" type="text/css" href="css/style_menu.css" />

</head>
<body>
<div id="wrapper">
	<div id="header">
		<div id="logo">
			<h1>
				<a href="#">Network Monitoring Tool</a>
			</h1>
		</div>
		<div id="search">
			<form action="" method="post">
			</form>
		</div>
		<nav id="nav-3">
  <a class="link-3" href="profile.php">Home</a>
  <a class="link-3" href="ipv4page.php">IPv4</a>
  <a class="link-3" href="udppage.php">UDP</a>
  <a class="link-3" href="arppage.php">ARP</a>
  <a class="link-3" href="about.php">About</a>
  <a class="link-3" href="logout.php">Logout</a>
</nav>
    
	</div>
	
	<div id="page-bottom">
		<div id="page-bottom-content">
			<h3>
				<?php
include('session.php');
include('function.php');
?><div class="head"><?php echo "Hello,  ".$username."!";?></div>
			</h3>
			<?php
			system('chmod 777 /var/www/html/script_tcpdump.sh');
			system('/var/www/html/script_tcpdump.sh');
			?>
			<p>
				Welcome to the portal for network monitoring . Here you can get detailed information regarding different protocols
				like UDP,IPv4 etc which you can use for further analysis of the network . Please select the appropriate option from 
				the menu above. To logout of the portal, simply press the logout button.
				
			</p>
		</div>
		<div id="page-bottom-sidebar">
		</div><br class="clearfix" />
	</div>
</div>
<div id="footer">
	&copy; Network Monitoring Tool | Created by Jatin Narula | 2016
</div>
</body>
</html>