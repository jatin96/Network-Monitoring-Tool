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
           <form name="form16" method="POST" action="tabicmp.php">
            <?php
                session_start();
                $conn=new mysqli("localhost","root","","packet");
                if($conn->connect_error)
                {
                        die('Could not connect: '. $conn->connect_error);
                }
                $t1=$_POST['ip1'];
                $t2=$_POST['ip2'];
                $_SESSION['a']=$t1;
                $_SESSION['b']=$t2;
                echo $t1;
                echo $t2;
                $query="Select DISTINCT Source_ip from icmpip6 WHERE Timestamp>='$t1' AND Timestamp<='$t2'";
               	$result = mysqli_query($conn,$query);
                 echo "</br></br> Select Source IP";
                echo "<select name='sip'>";
                while($row = mysqli_fetch_array($result))
                 {
                  echo '<option value="'.$row['Source_ip'].'">'.$row['Source_ip'].'</option>';
                 }
                 echo "</select>";

                  $conn->close();
                 ?>    
       <input type="submit" align="center" value="Submit">
</form>
</div>
</body>
</html>




