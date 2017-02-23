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
<div id="wrapper3" align="center">
            <?php
                $conn=new mysqli("localhost","root","","packet");
                if($conn->connect_error)
                {
                        die('Could not connect: '. $conn->connect_error);
                }
                $dest_port=$_POST['port_number'];
                echo $dest_port;
                $query="Select * from icmpip6 WHERE hoplimit=$dest_port";
               	$result = mysqli_query($conn,$query);
                echo "<table border='1'>
                      <tr>
                        <th>Time stamp</th>
                          <th>Source IP</th>
                          <th>Dest IP</th>
                          <th>Hop Limit</th>
                          <th>Next-Header</th>
                          <th>Payload Length</th>
                          <th>Neighbour</th>
                      </tr>";
               while($row = mysqli_fetch_array($result))
               {
                echo "<tr><td>" . $row['Timestamp'] . "</td><td>   " . $row['Source_ip'] ."</td><td> ".$row['Des_ip']. "</td>
          <td> ".$row['hoplimit']. "</td><td> ".$row['nextheaderinfo']. "</td><td> ".$row['payloadlength']. "</td><td> ".$row['neighbour']. "</td></tr>";
               }
               echo "</table>";
        $conn->close();
           ?>    
</div>
</body>
</html>
