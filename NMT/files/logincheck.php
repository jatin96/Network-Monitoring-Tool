<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<link rel="stylesheet" href="css/style.css" type="text/css"/>
</head>
<body>
<?php
include('function.php');
$error='';
if(empty(validate($_POST['username']))||empty(validate($_POST['password'])))
{ 
echo "Invalid username or password";
}
else
{
$username=validate($_POST['username']);
$password=validate($_POST['password']);
$con=dbconnect();
$email=mysql_real_escape_string($email);
$pass=mysql_real_escape_string($pass);
$query="select username,password from table1 WHERE username LIKE '$username'";
$res=$con->query($query);
if($res->num_rows==0)
{
echo "Invalid username or password";
}
else{
	while($arr=$res->fetch_array()){
		if($arr['password']==$password){
			session_start();
			$_SESSION['username']=$username;
			//$_SESSION['name']=$arr['name'];
			//header("location: profile.php");
			header("location: profile.php");
		}
		else
		{
		echo "Error !!! Wrong username or password";

		}
			}
}
}
?>
</body>
</html>