<html>
<head><title>NMT</title>
</head>
<body bgcolor="#80ffff">
<?php
$username = "root";
$password = "";
$hostname = "localhost";
$db_name = "project";
$code=0;
//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password)
  or die("Unable to connect to MySQL");
 // echo "Connected to MySQL<br>";

mysql_select_db($db_name) or die( "Unable to select database");
//if(isset($_POST["method"])){
 // if($_POST["method"] == "login"){
      
   $name=$_POST['uname'];
   $pass=$_POST['pwd'];
  
  // echo "<br>username= $name";
  // echo "<br> password= $pass";
$query="SELECT * FROM logintest where username='$name'";
$result=mysql_query($query);
$temp=mysql_result($result,0,"password");
$num= mysql_num_rows($result);
$i=0;
//$temp=$pass=123;
if($temp==$pass && $pass!="")
{
shell_exec("/var/www/html/script1.sh");

//echo "$temp<br>$pass<br>";
echo "<h1 align='center'>WELCOME TO NETWORK MONITORING TOOL</h1> <br><br><br>";
echo "<div style='width:55%;background-color:#efefef;margin-left:20%;'><form action='try4.php' method='post'><table cellspacing='20'>
<tr><td>Login Successful.....Please continue 
</td>
<td><input type='submit' name='check' value='Continue'></input></td></tr>
</table>
</form>
</div> ";
}
/*while(i<num)
{
$field1sno=mysql_result($result,$i,"sno");
$field2username=mysql_result($result,$i,"username");
$field3email=mysql_result($result,$i,"email");
$field4firstname=mysql_result($result,$i,"firstname");
$field5lastname=mysql_result($result,$i,"lastname");
echo "$field1sno &nbsp;&nbsp;$field2username<br>$field3email<br>$field4firstname&nbsp; $field5lastname";
$i++;
}*/
if($name=="" || $pass=="")
{
echo
 "incorrect username or password";
}  

?>
