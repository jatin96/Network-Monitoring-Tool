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
<?php

include('session.php');?>
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
	</div>
	
	<div id="page-bottom">
		<div id="page-bottom-content">
			<h3>
				<?php
include('session.php');
?><div class="head"><?php echo "You have successfully logged out."?></div>
<?php
session_destroy();
?>
			</h3>
			<p>
				<a href="login.html">Click Here</a> to go to homepage.
				
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