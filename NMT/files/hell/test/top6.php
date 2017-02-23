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
                                <li><a href="icmp6.php" accesskey="2" title=""><font size=5>ICMP6</font></a></li>
                                <li><a href="udp6.php" accesskey="3" title=""><font size=5>UDP</font></a></li>
                                <li><a href="ip6.php" accesskey="4" title=""><font size=5>Refresh</font></a></li>
                                <li><a href="top6.php" accesskey="5" title=""><font size=5>TOP TALKERS</font></a></li>
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
$dbname = "packet";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sqlicmp6 = "SELECT Source_ip,COUNT(Source_ip) FROM icmpip6 GROUP BY Source_ip ORDER BY COUNT(Source_ip) DESC LIMIT 5";
$resulticmp6 = mysqli_query($conn,$sqlicmp6);
$sqludp6 = "SELECT Source_ip,COUNT(Source_ip) FROM udpip6 GROUP BY Source_ip ORDER BY COUNT(Source_ip) DESC LIMIT 5";
$resultudp6 = mysqli_query($conn,$sqludp6);
$udpbyte="SELECT Source_ip,sum(payloadlength) FROM udpip6 GROUP BY Source_ip ORDER BY sum(payloadlength) DESC LIMIT 5";
$resudpbyte = mysqli_query($conn,$udpbyte);
$icmpbyte="SELECT Source_ip,sum(payloadlength) FROM icmpip6 GROUP BY Source_ip ORDER BY sum(payloadlength) DESC LIMIT 5";
$resicmpbyte = mysqli_query($conn,$icmpbyte);

?>
<div id="wrapper3" align="center">
<br><br>
<h2 align="center">BASED ON FREQUENCY</h2>
<table>
<thead>
<tr>
<th>ICMP6</th>
<th>UDP</th>
</thead>
<tbody>
<tr></tr>
 <tr>
   <td>
      <table>
      <thead>
        <tr>
          <th>Source IP</th>
          <th>Count</th>
        </tr>
      </thead>
      <tbody>
       <?php
          while($row = mysqli_fetch_array($resulticmp6))
          {
          echo "<tr><td>".$row['Source_ip']. "</td><td>".$row['COUNT(Source_ip)']. "</td></tr>";
          }
          $conn->close();
        ?>
      </tbody>
    </table>
</td>
<td>
      <table>
      <thead>
        <tr>
          <th>Source IP</th>
          <th>Count</th>
        </tr>
      </thead>
      <tbody>
       <?php
          while($row = mysqli_fetch_array($resultudp6))
          {
          echo "<tr><td>".$row['Source_ip']. "</td><td>".$row['COUNT(Source_ip)']. "</td></tr>";
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
<h2 align="center">BASED ON PAYLOAD LENGTH</h2>
<table>
<thead>
<tr>
<th>ICMP6</th>
<th>UDP</th>
</tr>
</thead>
<tbody>
<tr></tr>
 <tr>
   <td>
      <table>
      <thead>
        <tr>
          <th>Source IP</th>
          <th>Size</th>
        </tr>
      </thead>
      <tbody>
       <?php
          while($row = mysqli_fetch_array($resicmpbyte))
          {
          echo "<tr><td>".$row['Source_ip']. "</td><td>".$row['sum(payloadlength)']. "</td></tr>";
          }
          $conn->close();
        ?>
      </tbody>
    </table>
</td>
<td>
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
          echo "<tr><td>".$row['Source_ip']. "</td><td>".$row['sum(payloadlength)']. "</td></tr>";
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



