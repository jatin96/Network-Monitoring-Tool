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
  <a class="link-3" href="arppage.php">Refresh</a>
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
function dbconnect(){
$dbhost="localhost";
     $dbuname="root";
     $dbpassword="";
     $dbname="packets";
	 $con=new MySQLi($dbhost,$dbuname,$dbpassword,$dbname);
if($con->connect_errno){
	die("Not able to".$con->connect_error);	
}
return $con;	
}
?>
<div class="head">ARP table</div>
			</h3>

			<p>	
			<?php
					system("chmod 777 /var/www/html/script_arp.sh");
					system("/var/www/html/script_arp.sh");
					$con=dbconnect();
					$query="SELECT * FROM arp_1";
					$res=$con->query($query);
					if(!$res)
					{
						echo "hello!";
						die('Invalid query'.mysql_error());
					}
					//echo "hello!*123";echo "<br>";
					$num=$res->num_rows;
					//echo "hello!*123";echo "<br>";
					//echo "row-->".$num;
					//echo "hello!*123";echo "<br>";
					echo "total no. of rows = ".$num;echo '<br>';
					echo "<table border='1' cellpadding='10'>";
    				echo "<tr> 
    				<th>Timestamp</th> 
    				<th>Source mac Address</th> 
    				<th>Destination mac Address</th>
    				<th>source IP Address</th>
    				<th>destination IP Address</th>
    				<th>packet length</th>
    				</tr>"
    				;
 					while($row = $res->fetch_array())
 					{
  							echo '<td>' . $row['Time_Stamp'] . '</td>';
  							echo '<td>' . $row['Sourec_Mac_Address'] . '</td>';
  							echo '<td>' . $row['Destination_Mac_Address'] . '</td>';
  							echo '<td>' . $row['Source_IpAddress'] . '</td>';
  							echo '<td>' . $row['Destination_IpAddress'] . '</td>';
  							echo '<td>' . $row['Length'] . '</td>';
  							echo "</tr>"; 
  					}
 					echo "</table>";
				?>
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
