<?php
echo "hello!";
$connection = mysql_connect('localhost','root','','jatin');
if(!$connection)
{
die("error!".mysql_error());
}
$select_db = mysql_select_db('jatin');
if(!$select_db)
{
die("error!",mysql_error());
}
?>


