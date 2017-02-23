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
<table>
<th>
          <form name="form1" method="post" action="porto.php">

            <?php
                $conn=new mysqli("localhost","root","","packets");
                if($conn->connect_error)
                {
                        die('Could not connect: '. $conn->connect_error);
                }
                $query="Select DISTINCT Destination_Port FROM udp WHERE Destination_Port!=53 AND Destination_Port!=161 AND Destination_Port!=162 AND Destination_Port!=137 AND Destination_Port!=138 AND Destination_Port!=139";
                $execute=mysqli_query($conn,$query);
		echo "</br></br> Select a Port Number for Other Applications Analysis: ";
                echo '<select name="port_number">';
                while($row=mysqli_fetch_array($execute))
                {
                        echo '<option value="'.$row['Destination_Port'].'">'.$row['Destination_Port'].'</option>';
                }
                echo "</select></br></br>";
          $conn->close();
          ?>
             <input type="submit" align="center" value="submit"></input>
	</form>
</th>
<th>
          <form name="form2" method="post" action="porto.php">

            <?php
                $conn=new mysqli("localhost","root","","packets");
                if($conn->connect_error)
                {
                        die('Could not connect: '. $conn->connect_error);
                }
                $query="Select DISTINCT Destination_Port FROM udp WHERE Destination_Port=53 OR Destination_Port=161 OR Destination_Port=162 OR Destination_Port=137 OR Destination_Port=138 OR Destination_Port=139";
                $execute=mysqli_query($conn,$query);
                echo "</br></br> Select a Port Number for Other Applications Analysis: ";
                echo '<select name="port_number">';
                while($row=mysqli_fetch_array($execute))
                {
                        echo '<option value="'.$row['Destination_Port'].'">'.$row['Destination_Port'].'</option>';
                }
                echo "</select></br></br>";
          $conn->close();
          ?>
         <input type="submit" align="center" value="submit"></input>
</form>
        </th>

</tr></table></Br>
	<table border='2'><tr> 
   </Br><center  style="font-size:16px;"align="left"><h3> UDP Reserved Port Numbers</h3> </center></tr></Br>
	   <tr><th>Label</th><th>Service Name</th><th>UDP Port Numbers</th></tr>
	   <tr><td>DNS</td><td>Domain Name Service</td><td>53</td></tr>
           <tr><td>NETBIOS</td><td>NetBIOS (Windows)</td><td>137-139</td></tr>
           <tr><td>SNMP</td><td>Simple Network Management</td><td>161,162</td></tr>
	</table>
	</Br>
        </center>
</div>
  </body>
</html>

