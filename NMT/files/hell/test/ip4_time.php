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
          <form name="form1" method="post" action="sourceip.php">

            <?php
                $conn=new mysqli("localhost","root","","packets");
                if($conn->connect_error)
                {
                        die('Could not connect: '. $conn->connect_error);
                }
                $query="Select DISTINCT Time_Stamp FROM ip";
                $execute=mysqli_query($conn,$query);
                echo "</br></br> Select start Time Stamp";
                echo '<select name="ip1">';
                while($row=mysqli_fetch_array($execute))
                {
                        echo '<option value="'.$row['Time_Stamp'].'">'.$row['Time_Stamp'].'</option>';
                }
                echo "</select></br></br>";
                $execute1=mysqli_query($conn,$query); 
                echo "</br></br> Select end Time Stamp";
                echo '<select name="ip2">';
                while($row=mysqli_fetch_array($execute1))
                {
                        echo '<option value="'.$row['Time_Stamp'].'">'.$row['Time_Stamp'].'</option>';
                }
                echo "</select></br></br>";
              $conn->close();
          ?>
             <input type="submit" align="center" value="submit"></input>
        </form>
</div>
</body>
</html>

