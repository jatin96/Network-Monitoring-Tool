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
<div id="wrapper3" align="center">
            <?php
            session_start();
                $conn=new mysqli("localhost","root","","packets");
                if($conn->connect_error)
                {
                        die('Could not connect: '. $conn->connect_error);
                }
                $sip=$_POST['sip'];
                 $t1=$_SESSION['a'];
                 $t2=$_SESSION['b'];
                  echo $sip,$t1,$t2;
                $query="SELECT * FROM udp WHERE Source_IpAddress = '$sip' AND Time_Stamp >= '$t1' AND Time_Stamp <= '$t2'";
               	$result = mysqli_query($conn,$query);
                echo "<table border='1'>
                      <tr>
                      <th>Timestamp</th>
                      <th>Source MAC</th>
                      <th>Destination MAC</th>
                      <th>Source IP</th>
                      <th>Destination IP</th>
                      <th>Source Port</th>
                      <th>Destination Port</th>
                      <th>Length</th>
                      </tr>";
               while($row = mysqli_fetch_array($result))
               {
                echo "<tr><td>" . $row['Time_Stamp'] . "</td><td>   " . $row['Source_Mac_Address'] ."</td><td> ".$row['Destination_Mac_Address']. "</td>
          <td> ".$row['Source_IpAddress']. "</td><td> ".$row['Destination_IpAddress']. "</td><td> ".$row['Source_Port']. "</td>
          <td> ".$row['Destination_Port']. "</td><td> ".$row['Length']. "</td></tr>"; 
               }
               echo "</table>";
        $conn->close();
           ?>    
</div>
</body>
</html>




