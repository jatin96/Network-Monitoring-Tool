<?php
$username = "root";
$password = "";
$hostname = "localhost";
$db_name = "project";
//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password)
  or die("Unable to connect to MySQL");
 // echo "Connected to MySQL<br>";
@mysql_select_db($db_name) or die( "Unable to select database");
echo "connected";
if(isset($_POST["save"])){
   if($_POST["save"] == "save"){
   $first=$_POST['fname'];
   $last=$_POST['lname'];
   $email=$_POST['email'];
   $name=$_POST['user'];
   $pas=$_POST['pass'];
   echo "<br>username= $name";
   echo "<br> password= $pas";
$query="insert into logintest(username,password,firstname,lastname,email) values('$name','$pas','$first','$last','$email')";
$retval=mysql_query($query,$dbhandle);
if(!$retval){ die('Unable to prcess try different username'.mysql_error());}
echo "<br>Successful please login again";
mysql_close($dbhandle);
}}?>
<html>

<br><br>
<form action="try2.php">
<button name="back to login">Back to Login page</button>
</form>
</html>
