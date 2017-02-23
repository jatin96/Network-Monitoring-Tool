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
<div id="wrapper3">
        <div id="portfolio">
                <div class="column1">
                                <a href="udp_time.php" class="button button-small">TIME</a><br>
                                <p>Time based analysis</p>
                </div>
               <div class="column3">
                                <a href="udp_port.php" class="button button-small">PORT</a><br>
                                <p>Port based analysis</p>
                </div>

        </div>
</div>

<!--?php
shell_exec("/var/www/html/shelludp.sh");
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
$sql = "SELECT * FROM udp";
$result = mysqli_query($conn,$sql);

?>
<div id="wrapper3" align="center">
      <table>
      <thead>
        <tr>
          <th>Time stamp</th>
          <th>Source MAC</th>
          <th>DEST MAC</th>
          <th>Source IP</th>
          <th>Dest IP</th>
          <th>Source port</th>
          <th>Dest port</th>
          <th>Length</th>
        </tr>
      </thead>
      <tbody>
        <?php
          while($row = mysqli_fetch_array($result))
          {
          echo "<tr><td>" . $row['Time_Stamp'] . "</td><td>   " . $row['Source_Mac_Address'] ."</td><td> ".$row['Destination_Mac_Address']. "</td>
          <td> ".$row['Source_IpAddress']. "</td><td> ".$row['Destination_IpAddress']. "</td><td> ".$row['Source_Port']. "</td>
          <td> ".$row['Destination_Port']. "</td><td> ".$row['Length']. "</td></tr>";
           }
          $conn->close();
        ?>
      </tbody>
    </table>
</div>
</body>
</html>


