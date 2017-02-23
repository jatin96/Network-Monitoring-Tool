<html>
<head>
<title>Welcome</title>
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<div id="header" class="container">
                <div id="logo">
                        <h1>NMT</h1>
                        <span>Welcome</span> </div>
                <div id="menu">
                        <ul>
                                <li class="current_page_item"><a href="home.php" accesskey="1" title=""><font size=5>HOME</font></a></li>
                                <li><a href="ipv4.php" accesskey="2" title=""><font size=5>IPv4</font></a></li>
                                <li><a href="arp.php" accesskey="3" title=""><font size=5>ARP</font></a></li>
                                <li><a href="udp.php" accesskey="3" title=""><font size=5>UDP</font></a></li>
                                <li><a href="ip4.php" accesskey="4" title=""><font size=5>Refresh</font></a></li>
                                <li><a href="top.php" accesskey="5" title=""><font size=5>TOP TALKERS</font></a></li>
                        </ul>
                </div>
</div>
<!--?php
shell_exec("/var/www/html/shellarp.sh");
?-->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "packets";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sqlip = "SELECT Source_IpAddress,COUNT(Source_IpAddress) FROM ip GROUP BY Source_IpAddress ORDER BY COUNT(Source_IpAddress) DESC LIMIT 5";
$resultip = mysqli_query($conn,$sqlip);
$sqlarp = "SELECT Source_IpAddress,COUNT(Source_IpAddress) FROM arp GROUP BY Source_IpAddress ORDER BY COUNT(Source_IpAddress) DESC LIMIT 5";
$resultarp = mysqli_query($conn,$sqlarp);
$sqludp = "SELECT Source_IpAddress,COUNT(Source_IpAddress) FROM udp GROUP BY Source_IpAddress ORDER BY COUNT(Source_IpAddress) DESC LIMIT 5";
$resultudp = mysqli_query($conn,$sqludp);
$arpbyte="SELECT Source_IpAddress,sum(Length) FROM arp GROUP BY Source_IpAddress ORDER BY sum(Length) DESC LIMIT 5";
$resarpbyte = mysqli_query($conn,$arpbyte);
$udpbyte="SELECT Source_IpAddress,sum(Length) FROM udp GROUP BY Source_IpAddress ORDER BY sum(Length) DESC LIMIT 5";
$resudpbyte = mysqli_query($conn,$udpbyte);
$ipbyte="SELECT Source_IpAddress,sum(Length) FROM ip GROUP BY Source_IpAddress ORDER BY sum(Length) DESC LIMIT 5";
$resipbyte = mysqli_query($conn,$ipbyte);
?>
<div id="wrapper3" align="center">
   <table>
<thead>
<tr>
<th></th>
<th>BASED ON FREQUENCY</th>
<th></th>
</tr> 
</thead>
<tbody>
<tr></tr>  
 <tr>
   <td>
    <h2 align="center">IPV4</h2>
      <table>
      <thead>
        <tr>
          <th>Source IP</th>
          <th>Count</th>
        </tr>
      </thead>
      <tbody>
       <?php
          while($row = mysqli_fetch_array($resultip))
          {
          echo "<tr><td>".$row['Source_IpAddress']. "</td><td>".$row['COUNT(Source_IpAddress)']. "</td></tr>";
          }
          $conn->close();
        ?>
      </tbody>
    </table>
</td>
<td>
      <h2 align="center">ARP</h2>
      <table>
      <thead>
        <tr>
          <th>Source IP</th>
          <th>Count</th>
        </tr>
      </thead>
      <tbody>
       <?php
          while($row = mysqli_fetch_array($resultarp))
          {
          echo "<tr><td>".$row['Source_IpAddress']. "</td><td>".$row['COUNT(Source_IpAddress)']. "</td></tr>";
          }
          $conn->close();
        ?>
      </tbody>
    </table>
</td>
<td>
     <h2 align="center">UDP</h2>
      <table>
      <thead>
        <tr>
          <th>Source IP</th>
          <th>Count</th>
        </tr>
      </thead>
      <tbody>
       <?php
          while($row = mysqli_fetch_array($resultudp))
          {
          echo "<tr><td>".$row['Source_IpAddress']. "</td><td>".$row['COUNT(Source_IpAddress)']. "</td></tr>";
          }
          $conn->close();
        ?>
      </tbody>
    </table>
</td>
</tr>
</tbody>
</table>
<br><br><br>
<table>
<thead>
<tr>
<th></th>
<th>BASED ON SIZE</th>
<th></th>
</tr> 
</thead>
<tbody>
<tr></tr>  
 <tr>
   <td>
    <h2 align="center">IPV4</h2>
      <table>
      <thead>
        <tr>
          <th>Source IP</th>
          <th>Size</th>
        </tr>
      </thead>
      <tbody>
       <?php
          while($row = mysqli_fetch_array($resipbyte))
          {
          echo "<tr><td>".$row['Source_IpAddress']. "</td><td>".$row['sum(Length)']. "</td></tr>";
          }
          $conn->close();
        ?>
      </tbody>
    </table>
</td>
<td>
      <h2 align="center">ARP</h2>
      <table>
      <thead>
        <tr>
          <th>Source IP</th>
          <th>Size</th>
        </tr>
      </thead>
      <tbody>
       <?php
          while($row = mysqli_fetch_array($resarpbyte))
          {
          echo "<tr><td>".$row['Source_IpAddress']. "</td><td>".$row['sum(Length)']. "</td></tr>";
          }
          $conn->close();
        ?>
      </tbody>
    </table>
</td>
<td>
     <h2 align="center">UDP</h2>
      <table>
      <thead>
        <tr>
          <th>Source IP</th>
          <th>Size</th>
        </tr>
      </thead>
      <tbody>
       <?php
          while($row = mysqli_fetch_array($resudpbyte))
          {
          echo "<tr><td>".$row['Source_IpAddress']. "</td><td>".$row['sum(Length)']. "</td></tr>";
          }
          $conn->close();
        ?>
      </tbody>
    </table>
</td>
</tr>
</tbody>
</table>
</div>

</body>
</html>


