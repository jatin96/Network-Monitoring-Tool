<?php 
  $ip1=$_POST['ip1'];
  $ip2=$_POST['ip2'];
  $port=$_POST['port'];
      echo $ip1,$ip2,$port;
  $page= system("sh rescr.sh $ip1 $ip2 $port");
   header("location:new.html");
?>
