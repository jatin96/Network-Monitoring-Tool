<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$dbhost="localhost";
     $dbuname="root";
     $dbpassword="";
     $dbname="database1";
	 $con=new MySQLi($dbhost,$dbuname,$dbpassword,$dbname);
if($con->connect_errno){
	die("Not able to ".$con->connect_error);	
}
session_start();
$username=$_SESSION['username'];
$password=$_SESSION['password'];
?>
</body>
</html>