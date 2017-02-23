<!DOCTYPE HTML>
<html>
<body bgcolor="E6E6FA">
 <script type="text/javascript">

    function submitAction(act) {
     // var x= document.forms["myform"]["uname"].value;
     // document.write(x);
         document.myform.action = act;
         document.myform.submit();}
         


    
    </script>
<div>
<center><h1>WELCOME TO NMT</h1>
</div>
<div style="margin-top:5%;margin-left:28%;width:35%;padding-bottom:7%;padding-top:8%;padding-left:8%;background-color:E6E6FA;">

<form name="myform" action="try3a.php"  method="post">
<div style="padding:5%;margin-right:13%;margin-left:-11%;background-color:E6E6FA;">
<table style="padding:2%;background-color:E6E6FA;margin-left:7%">
<tr>
<td>Username</td><td>:</td><td> <input type="text" name="uname"></td>
<tr><td>Password</td><td>: </td><td><input type="password" name="pwd"></td>
<tr cellspacing="2"><td colspan="3"><center><button id="login" value="login" name="method" onClick="submitAction('try3a.php')">Login</button>

<button id="register" value="register" name="method" onClick="submitAction('try3b.php')">Register</button></td></center></tr>
</table>
</div>
</form>
</div>
</body>
</html>
