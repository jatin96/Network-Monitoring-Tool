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
          <form name="form1" method="post" action="hopdis.php">

            <?php
                $conn=new mysqli("localhost","root","","packet");
                if($conn->connect_error)
                {
                        die('Could not connect: '. $conn->connect_error);
                }
                $query="Select DISTINCT hoplimit from icmpip6";
                $execute=mysqli_query($conn,$query);
		echo "</br></br> Select Hoplimit ";
                echo '<select name="port_number">';
                while($row=mysqli_fetch_array($execute))
                {
                        echo '<option value="'.$row['hoplimit'].'">'.$row['hoplimit'].'</option>';
                }
                echo "</select></br></br>";
          $conn->close();
          ?>
             <input type="submit" align="center" value="submit"></input>
	</form>
</div>
  </body>
</html>

