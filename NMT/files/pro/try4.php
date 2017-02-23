<html>
<head><title>NMT</title></head>
<body bgcolor="#80ffff">
<?php
$username = "root";
$password = "";
$hostname = "localhost";
$db_name = "packets";

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password)
  or die("Unable to connect to MySQL");
 // echo "Connected to MySQL<br>";

mysql_select_db($db_name) or die( "Unable to select database");


echo "<h1 align='center'>WELCOME TO NETWORK MONITORING TOOL</h1> <br><br><br>";
echo "<div style='width:55%;background-color:#efefef;margin-left:20%;'><form action='try4.php' method='post'><table cellspacing='20'>
<tr><td><label><input type='radio' value='arp' name='nmt[]'>ARP </label></td>
<td><label><input type='radio' value='udp' name='nmt[]'>UDP </label></td>
<td><label><input type='radio' value='ipv' name='nmt[]'>IPV4 </label></td>
<td><label>SELECT INFO:</label>&nbsp;<select  name='info[]'> <option value='abc'>--SELECT--</option>
<option value='Time_Stamp'>TimeStamp</option>
<option value='Source_Mac_Address'>Source Mac IP</option>
<option value='Destination_Mac_Address'>Destination Mac IP</option>
<option value='Length'>Length</option>
<option value='Source_IpAddress'>Source IP Address</option>
<option value='Destination_IpAddress'>Destination IP Address</option>
<option value='Source_Port'>Source Port</option>
<option value='Destination_Port'>Destination Port</option>
<option value='all'>All</option>
</select>
</td>
<td><input type='submit' value='Check' name='check' onClick='chk()'></input></td></tr>
</table>
</form>
</div>";
chk();
function chk(){
$nmts=$_POST['nmt'];
$selection=$_POST['info'];

if(empty($nmts)|| in_array("abc",$selection))
{
echo "<br>Nothing Selected";
exit;
}

if(in_array("udp",$nmts) && count($nmts)==1)
 { a:
if(in_array("Time_Stamp",$selection)) 
{

$query="SELECT $selection[0] FROM udp_1";
$result=mysql_query($query);
//$temp=mysql_result($result,0,"password");
$rows=mysql_num_rows($result);
$i=0;
echo "<h4>$selection[0]</h4>";
while($i<$rows){
echo "<div style='background-color:#efefef;'>
<table border='1'>
<tr><td>".
mysql_result($result,$i,$selection[0]).
"</tr></td>
</table>
</div>";
$i++;
}
}
if(in_array("Source_Mac_Address",$selection))
{

$query="SELECT Source_Mac_Address FROM udp_1";
$result=mysql_query($query);
//$temp=mysql_result($result,0,"password");
$rows=mysql_num_rows($result);
$i=0;
echo "<h4>$selection[0]</h4>";
while($i<$rows){
echo "<div style='background-color:#efefef;'>
<table border='1'>
<tr><td>".
mysql_result($result,$i,$selection[0]).
"</tr></td>
</table>
</div>";
$i++;
}
}
if(in_array("Destination_Mac_Address",$selection))
{

$query="SELECT $selection[0] FROM udp_1";
$result=mysql_query($query);
//$temp=mysql_result($result,0,"password");
$rows=mysql_num_rows($result);
$i=0;
echo "<h4>$selection[0]</h4>";
while($i<$rows){
echo "<div style='background-color:#efefef;'>
<table border='1'>
<tr><td>".
mysql_result($result,$i,$selection[0]).
"</tr></td>
</table>
</div>";
$i++;
}
}

if(in_array("Length",$selection))
{

$query="SELECT $selection[0] FROM udp_1";
$result=mysql_query($query);
//$temp=mysql_result($result,0,"password");
$rows=mysql_num_rows($result);
$i=0;
echo "<h4>$selection[0]</h4>";
while($i<$rows){
echo "<div style='background-color:#efefef;'>
<table border='1'>
<tr><td>".
mysql_result($result,$i,$selection[0]).
"</tr></td>
</table>
</div>";
$i++;
}
}

if(in_array("Destination_IpAddress",$selection))
{

$query="SELECT $selection[0] FROM udp_1";
$result=mysql_query($query);
//$temp=mysql_result($result,0,"password");
$rows=mysql_num_rows($result);
$i=0;
echo "<h4>$selection[0]</h4>";
while($i<$rows){
echo "<div style='background-color:#efefef;'>
<table border='1'>
<tr><td>".
mysql_result($result,$i,$selection[0]).
"</tr></td>
</table>
</div>";
$i++;
}
}

if(in_array("Source_IpAddress",$selection))
{

$query="SELECT $selection[0] FROM udp_1";
$result=mysql_query($query);
//$temp=mysql_result($result,0,"password");
$rows=mysql_num_rows($result);
$i=0;
echo "<h4>$selection[0]</h4>";
while($i<$rows){
echo "<div style='background-color:#efefef;'>
<table border='1'>
<tr><td>".
mysql_result($result,$i,$selection[0]).
"</tr></td>
</table>
</div>";
$i++;
}
}

if(in_array("Source_Port",$selection))
{

$query="SELECT $selection[0] FROM udp_1";
$result=mysql_query($query);
//$temp=mysql_result($result,0,"password");
$rows=mysql_num_rows($result);
$i=0;
echo "<h4>$selection[0]</h4>";
while($i<$rows){
echo "<div style='background-color:#efefef;'>
<table border='1'>
<tr><td>".
mysql_result($result,$i,$selection[0]).
"</tr></td>
</table>
</div>";
$i++;
}
}

if(in_array("Destination_Port",$selection))
{

$query="SELECT $selection[0] FROM udp_1";
$result=mysql_query($query);
//$temp=mysql_result($result,0,"password");
$rows=mysql_num_rows($result);
$i=0;
echo "<h4>$selection[0]</h4>";
while($i<$rows){
echo "<div style='background-color:#efefef;'>
<table border='1'>
<tr><td>".
mysql_result($result,$i,$selection[0]).
"</tr></td>
</table>
</div>";
$i++;
}
}
if(in_array("all",$selection))
{

$query="SELECT * FROM udp_1";
$result=mysql_query($query);
//$temp=mysql_result($result,0,"password");
$rows=mysql_num_rows($result);
$i=0;
echo "<div style='background-color:#efefef;'>
<table border='1'>
<tr>
<td>Time_Stamp</td><td>Source_Mac_Address</td><td>Destination_Mac_Address</td>
<td>Source_IpAddress</td><td>Destination_IpAddress</td><td>Source_Port</td><td>Destination_Port</td>
<td>Length</td>
</tr>";
while($i<$rows){
echo "

<tr><td>".
mysql_result($result,$i,"Time_Stamp").
"</td>
<td>".
mysql_result($result,$i,"Source_Mac_Address").
"</td>
<td>".
mysql_result($result,$i,"Destination_Mac_Address").
"</td>
<td>".
mysql_result($result,$i,"Source_IpAddress").
"</td>
<td>".
mysql_result($result,$i,"Destination_IpAddress").
"</td>
<td>".
mysql_result($result,$i,"Source_Port").
"</td>
<td>".
mysql_result($result,$i,"Destination_Port").
"</td>
<td>".
mysql_result($result,$i,"Length").
"</td>
</tr>";
$i++;
}
echo "</table></div>";
}


}
if(in_array("arp",$nmts) && count($nmts)==1)
{b:
if(in_array("Time_Stamp",$selection)) 
{

$query="SELECT $selection[0] FROM arp_1";
$result=mysql_query($query);
//$temp=mysql_result($result,0,"password");
$rows=mysql_num_rows($result);
$i=0;
echo "<h4>$selection[0]</h4>";
while($i<$rows){
echo "<div style='background-color:#efefef;'>
<table border='1'>
<tr><td>".
mysql_result($result,$i,$selection[0]).
"</tr></td>
</table>
</div>";
$i++;
}
}
if(in_array("Source_Mac_Address",$selection))
{

$query="SELECT Source_Mac_Address FROM arp_1";
$result=mysql_query($query);
//$temp=mysql_result($result,0,"password");
$rows=mysql_num_rows($result);
$i=0;
echo "<h4>$selection[0]</h4>";
while($i<$rows){
echo "<div style='background-color:#efefef;'>
<table border='1'>
<tr><td>".
mysql_result($result,$i,$selection[0]).
"</tr></td>
</table>
</div>";
$i++;
}
}
if(in_array("Destination_Mac_Address",$selection))
{

$query="SELECT $selection[0] FROM arp_1";
$result=mysql_query($query);
//$temp=mysql_result($result,0,"password");
$rows=mysql_num_rows($result);
$i=0;
echo "<h4>$selection[0]</h4>";
while($i<$rows){
echo "<div style='background-color:#efefef;'>
<table border='1'>
<tr><td>".
mysql_result($result,$i,$selection[0]).
"</tr></td>
</table>
</div>";
$i++;
}
}

if(in_array("Length",$selection))
{

$query="SELECT $selection[0] FROM arp_1";
$result=mysql_query($query);
//$temp=mysql_result($result,0,"password");
$rows=mysql_num_rows($result);
$i=0;
echo "<h4>$selection[0]</h4>";
while($i<$rows){
echo "<div style='background-color:#efefef;'>
<table border='1'>
<tr><td>".
mysql_result($result,$i,$selection[0]).
"</tr></td>
</table>
</div>";
$i++;
}
}

if(in_array("Destination_IpAddress",$selection))
{

$query="SELECT $selection[0] FROM arp_1";
$result=mysql_query($query);
//$temp=mysql_result($result,0,"password");
$rows=mysql_num_rows($result);
$i=0;
echo "<h4>$selection[0]</h4>";
while($i<$rows){
echo "<div style='background-color:#efefef;'>
<table border='1'>
<tr><td>".
mysql_result($result,$i,$selection[0]).
"</tr></td>
</table>
</div>";
$i++;
}
}

if(in_array("Source_IpAddress",$selection))
{

$query="SELECT $selection[0] FROM arp_1";
$result=mysql_query($query);
//$temp=mysql_result($result,0,"password");
$rows=mysql_num_rows($result);
$i=0;
echo "<h4>$selection[0]</h4>";
while($i<$rows){
echo "<div style='background-color:#efefef;'>
<table border='1'>
<tr><td>".
mysql_result($result,$i,$selection[0]).
"</tr></td>
</table>
</div>";
$i++;
}
}

if(in_array("Source_Port",$selection))
{
/*
$query="SELECT $selection[0] FROM udp_1";
$result=mysql_query($query);
//$temp=mysql_result($result,0,"password");
$rows=mysql_num_rows($result);
$i=0;
echo "<h4>$selection[0]</h4>";
while($i<$rows){
echo "<div style='background-color:#efefef;'>
<table border='1'>
<tr><td>".
mysql_result($result,$i,$selection[0]).
"</tr></td>
</table>
</div>";
$i++;
}*/
echo "Not availaible";
}

if(in_array("Destination_Port",$selection))
{
/*
$query="SELECT $selection[0] FROM udp_1";
$result=mysql_query($query);
//$temp=mysql_result($result,0,"password");
$rows=mysql_num_rows($result);
$i=0;
echo "<h4>$selection[0]</h4>";
while($i<$rows){
echo "<div style='background-color:#efefef;'>
<table border='1'>
<tr><td>".
mysql_result($result,$i,$selection[0]).
"</tr></td>
</table>
</div>";
$i++;
}*/
echo "Not Availaible";
}
if(in_array("all",$selection))
{

$query="SELECT * FROM arp_1";
$result=mysql_query($query);
//$temp=mysql_result($result,0,"password");
$rows=mysql_num_rows($result);
$i=0;
echo "<div style='background-color:#efefef;'>
<table border='1'>
<tr>
<td>Time_Stamp</td><td>Source_Mac_Address</td><td>Destination_Mac_Address</td>
<td>Source_IpAddress</td><td>Destination_IpAddress</td>
<td>Length</td>
</tr>";
while($i<$rows){
echo "

<tr><td>".
mysql_result($result,$i,"Time_Stamp").
"</td>
<td>".
mysql_result($result,$i,"Source_Mac_Address").
"</td>
<td>".
mysql_result($result,$i,"Destination_Mac_Address").
"</td>
<td>".
mysql_result($result,$i,"Source_IpAddress").
"</td>
<td>".
mysql_result($result,$i,"Destination_IpAddress").
"</td>
".
//mysql_result($result,$i,"Source_Port").
"
".
//mysql_result($result,$i,"Destination_Port").
"
<td>".
mysql_result($result,$i,"Length").
"</td>
</tr>";
$i++;
}
echo "</table></div>";
}

}
if(in_array("ipv",$nmts) && count($nmts)==1)
{c:
if(in_array("Time_Stamp",$selection)) 
{

$query="SELECT $selection[0] FROM ip_1";
$result=mysql_query($query);
//$temp=mysql_result($result,0,"password");
$rows=mysql_num_rows($result);
$i=0;
echo "<h4>$selection[0]</h4>";
while($i<$rows){
echo "<div style='background-color:#efefef;'>
<table border='1'>
<tr><td>".
mysql_result($result,$i,$selection[0]).
"</tr></td>
</table>
</div>";
$i++;
}
}
if(in_array("Source_Mac_Address",$selection))
{

$query="SELECT Source_Mac_Address FROM udp_1";
$result=mysql_query($query);
//$temp=mysql_result($result,0,"password");
$rows=mysql_num_rows($result);
$i=0;
echo "<h4>$selection[0]</h4>";
while($i<$rows){
echo "<div style='background-color:#efefef;'>
<table border='1'>
<tr><td>".
mysql_result($result,$i,$selection[0]).
"</tr></td>
</table>
</div>";
$i++;
}
}
if(in_array("Destination_Mac_Address",$selection))
{

$query="SELECT $selection[0] FROM ip_1";
$result=mysql_query($query);
//$temp=mysql_result($result,0,"password");
$rows=mysql_num_rows($result);
$i=0;
echo "<h4>$selection[0]</h4>";
while($i<$rows){
echo "<div style='background-color:#efefef;'>
<table border='1'>
<tr><td>".
mysql_result($result,$i,$selection[0]).
"</tr></td>
</table>
</div>";
$i++;
}
}

if(in_array("Length",$selection))
{

$query="SELECT $selection[0] FROM ip_1";
$result=mysql_query($query);
//$temp=mysql_result($result,0,"password");
$rows=mysql_num_rows($result);
$i=0;
echo "<h4>$selection[0]</h4>";
while($i<$rows){
echo "<div style='background-color:#efefef;'>
<table border='1'>
<tr><td>".
mysql_result($result,$i,$selection[0]).
"</tr></td>
</table>
</div>";
$i++;
}
}

if(in_array("Destination_IpAddress",$selection))
{

$query="SELECT $selection[0] FROM ip_1";
$result=mysql_query($query);
//$temp=mysql_result($result,0,"password");
$rows=mysql_num_rows($result);
$i=0;
echo "<h4>$selection[0]</h4>";
while($i<$rows){
echo "<div style='background-color:#efefef;'>
<table border='1'>
<tr><td>".
mysql_result($result,$i,$selection[0]).
"</tr></td>
</table>
</div>";
$i++;
}
}

if(in_array("Source_IpAddress",$selection))
{

$query="SELECT $selection[0] FROM ip_1";
$result=mysql_query($query);
//$temp=mysql_result($result,0,"password");
$rows=mysql_num_rows($result);
$i=0;
echo "<h4>$selection[0]</h4>";
while($i<$rows){
echo "<div style='background-color:#efefef;'>
<table border='1'>
<tr><td>".
mysql_result($result,$i,$selection[0]).
"</tr></td>
</table>
</div>";
$i++;
}
}

if(in_array("Source_Port",$selection))
{

$query="SELECT $selection[0] FROM ip_1";
$result=mysql_query($query);
//$temp=mysql_result($result,0,"password");
$rows=mysql_num_rows($result);
$i=0;
echo "<h4>$selection[0]</h4>";
while($i<$rows){
echo "<div style='background-color:#efefef;'>
<table border='1'>
<tr><td>".
mysql_result($result,$i,$selection[0]).
"</tr></td>
</table>
</div>";
$i++;
}
}

if(in_array("Destination_Port",$selection))
{

$query="SELECT $selection[0] FROM ip_1";
$result=mysql_query($query);
//$temp=mysql_result($result,0,"password");
$rows=mysql_num_rows($result);
$i=0;
echo "<h4>$selection[0]</h4>";
while($i<$rows){
echo "<div style='background-color:#efefef;'>
<table border='1'>
<tr><td>".
mysql_result($result,$i,$selection[0]).
"</tr></td>
</table>
</div>";
$i++;
}
}
if(in_array("all",$selection))
{

$query="SELECT * FROM ip_1";
$result=mysql_query($query);
//$temp=mysql_result($result,0,"password");
$rows=mysql_num_rows($result);
$i=0;
echo "<div style='background-color:#efefef;'>
<table border='1'>
<tr>
<td>Time_Stamp</td><td>Source_Mac_Address</td><td>Destination_Mac_Address</td>
<td>Source_IpAddress</td><td>Destination_IpAddress</td><td>Source_Port</td><td>Destination_Port</td>
<td>Length</td>
</tr>";
while($i<$rows){
echo "

<tr><td>".
mysql_result($result,$i,"Time_Stamp").
"</td>
<td>".
mysql_result($result,$i,"Source_Mac_Address").
"</td>
<td>".
mysql_result($result,$i,"Destination_Mac_Address").
"</td>
<td>".
mysql_result($result,$i,"Source_IpAddress").
"</td>
<td>".
mysql_result($result,$i,"Destination_IpAddress").
"</td>
<td>".
mysql_result($result,$i,"Source_Port").
"</td>
<td>".
mysql_result($result,$i,"Destination_Port").
"</td>
<td>".
mysql_result($result,$i,"Length").
"</td>
</tr>";
$i++;
}
echo "</table></div>";
}

}


}


?>
