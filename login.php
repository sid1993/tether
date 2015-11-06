<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login Portal</title>
<h2 align="right" class="style2">

</h1>

<style type="text/css">
<!--
.style1 {
	font-size: x-large;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.style2 {font-size: medium; }
.style3 {font-size: small;
		font-family: Verdana, Arial, Helvetica, sans-serif}
body {
	background-image: url(images/bg.jpg);
}
-->
</style>
</head>
<?php
	include "connection/connection.php";
	if(isset($_POST['login']))
	{
		$aadhar_number=$_POST['aadhar_number'];
		$pass=$_POST['pass'];
		$sql="select * from registration where aadhar_number='$aadhar_number';";
		$res=mysql_query($sql);
		$fres=mysql_fetch_assoc($res);
		$db_pass=$fres['password'];
		if($pass==$db_pass)
		{
			session_start();
			$_SESSION['name']=$fres['fname']." ".$fres['lname'];
			$_SESSION['aadhar_number']=$fres['aadhar_number'];
			$_SESSION['address']=$fres['address'];
			$_SESSION['uphoto']=$fres['uphoto'];
			
			echo "<script>
					alert('Login Succesful !!');
					location.replace('dashboard.php');
				</script>";
		}
		else
		{
			echo "<script>
					alert('Login UnSuccesful !!');
					location.replace('login.php?');
				</script>";
		}
	}
?>

<body>
<form id="form1" name="form1" method="post" action="">
  <h1 align="center" class="style1">	
  <div align="center"><span class="style3">
    <input type="image" name="imageField" id="imageField" src="images/final logo.png" />
  </span></div>
  <p align="center" class="style1">&nbsp;</p>
  <p align="center" class="style1"><img src="images/guest.png" width="128" height="128" /></p>
  <table width="30%" height="110"  align="center" cellpadding="1" cellspacing="1"style="background-color: #E5F2FF;filter:alpha(opacity=60); -moz-opacity:0.1; opacity: 0.8;border:3px dashed #FF9933">
    <tr>
      <td width="22%" height="37"  align="right"><span class="style2">Aadhar Number</span></td>
      <td width="12%" align="center">:</td>
      <td width="66%" align="left"><input name="aadhar_number" type="text" id="aadhar_number" /></td>
    </tr>
    <tr>
      <td height="39"  align="right"><span class="style2">Password</span></td>
      <td align="center">:</td>
      <td align="left"><input name="pass" type="password" id="pass" /></td>
    </tr>
    <tr>
      <td height="26" colspan="3"  align="center"><input name="login" type="submit" id="login" value="login" /></td>
    </tr>
  </table>
  <p align="center" class="style3"><a href="registration.php">Contact us</a> , if you have no account.</p>
  <p align="center" class="style3">&nbsp;</p>
</form>
</body>
</html>
