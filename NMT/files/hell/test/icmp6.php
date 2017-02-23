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
                               <!-- <li><a href="arp.php" accesskey="3" title=""><font size=5>ARP</font></a></li>-->
                                <li><a href="udp6.php" accesskey="3" title=""><font size=5>UDP</font></a></li>
                                <li><a href="ip6.php" accesskey="4" title=""><font size=5>Refresh</font></a></li>
                                <li><a href="top6.php" accesskey="5" title=""><font size=5>TOP TALKERS</font></a></li>
                        </ul>
                </div>
</div>
<div id="wrapper3" align="center">
	<div id="portfolio">
		<div class="column1">
				<a href="icmp6_time.php" class="button button-small">TIME</a><br> 
				<p>Time based analysis</p>
		</div>
               <div class="column3">
                                <a href="icmp6_hop.php" class="button button-small">HLIM</a><br>    
                                <p>Hoplimit analysis</p>
                </div>

	</div>
</div>
<!--?php
shell_exec("/var/www/html/shellip.sh");
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
$sql = "SELECT * FROM icmpip6";
$result = mysqli_query($conn,$sql);

?>
<div id="wrapper3" align="center">
      <table>
      <thead>
        <tr>
          <th>Time stamp</th>
          <th>Source IP</th>
          <th>Dest IP</th>
          <th>Hop Limit</th>
          <th>Next-Header</th>
          <th>Payload Length</th>
          <th>Neighbour</th>
        </tr>
      </thead>
      <tbody>
        <?php
          while($row = mysqli_fetch_array($result))
          {
          echo "<tr><td>" . $row['Timestamp'] . "</td><td>   " . $row['Source_ip'] ."</td><td> ".$row['Des_ip']. "</td>
          <td> ".$row['hoplimit']. "</td><td> ".$row['nextheaderinfo']. "</td><td> ".$row['payloadlength']. "</td><td> ".$row['neighbour']. "</td></tr>";
          }
          $conn->close();
        ?>
      </tbody>
    </table>
</div>
</body>
</html>
