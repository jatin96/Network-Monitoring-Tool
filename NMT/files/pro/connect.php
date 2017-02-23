<?php
//session_start();
$hostname ='localhost';
$dbname   ='project';
$username ='root'; 
$password ='';
$dbconnect=mysql_connect($hostname, $username, $password) or DIE('Connection to host isailed, perhaps the service is down!');
echo"connected<br>";
mysql_select_db($dbname) or DIE('Database name is not available!');
$userName=$_POST['username']; 
$passWord=$_POST['password']; 
echo "$userName<br>$passWord<br>";
$query="SELECT * FROM log where username='$userName'";
//$temp=mysql_query($query);
$res=mysql_query($query);
//$rows=mysql_num_rows($res);
//echo "$username<br>$password";
if(!$res)
{echo"wrong username or password";
}
$temp=mysql_result($res,0,"password");
//echo "$temp";
//$rows=mysql_num_rows($res);
//echo "check $rows";
if($temp==$passWord)
{echo "Successful";
}
else
{
echo "<br> Fail";
}
//header("Location:connect.php");


?>
