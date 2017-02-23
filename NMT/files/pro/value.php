<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'sonu';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
 if(! $conn )
{
die('Could not connect: ' . mysql_error());
}
$sql='INSERT INTO ''(emp_name,emp_address, emp_salary, join_date) '.
      'VALUES ( "guest", "XYZ", 2000, NOW() )';
mysql_select_db('');
$retval = mysql_query( $sql, $conn );
   
   if(! $retval )
   {
      die('Could not enter data: ' . mysql_error());
   }
   
   echo "Entered data successfully\n";
   
   mysql_close($conn);
?>
$conn = new mysqli("localhost","" ,"" );
f (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
$roll=$POST['rollno'];
$fname=$POST['name'];
$Adress=$POST['address'];
$sql=insert into student(rollno,name,address)values('".$roll."','".fname."','".Address."');
$pq=mysql_query($sql)or die("cannot execute");
if($pq)
{
echo"inserted successful";
}
?>

