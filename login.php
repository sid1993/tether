<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login Portal</title>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<style type="text/css">
<!--
.style1 {
	font-size: x-large;
	
}
.style2 {font-size: medium; }
.style3 {font-size: small;
		}
body {
	background-image: url(img/doctor.jpg);
}

-->
</style>
</head>
<?php
	include "connection/connection.php";
	if(isset($_POST['login']))
	{
		$emailid=$_POST['email'];
		$pass=$_POST['pass'];
		$sql="SELECT * FROM heroku_78c30c5595ce4d9.registration where emailid='$emailid';";
		$res=mysqli_query($conn,$sql);
		$fres=mysqli_fetch_assoc($res);
		#print_r($fres);
		mysqli_close();
		$db_pass=$fres['password'];
		
		if($pass==$db_pass)
		{
			session_start();
			$_SESSION['name']=$fres['fname']." ".$fres['lname'];
			$_SESSION['uid']=$fres['uid'];
			$_SESSION['uiid']=$fres['uiid'];
			$_SESSION['status_code']=$fres['status_code'];
			$_SESSION['emailid']=$fres['emailid'];
			
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
  <div align="center">
    <h1>Login Portal</h1>
  </div>
  <p align="center" class="style1">&nbsp;</p>
  <p align="center" class="style1"><img src="img/guest.png" width="128" height="128" /></p>
  <table width="26%" height="110"  align="center" cellpadding="1" cellspacing="1">
    <tr>
      <td width="22%" height="37"  align="right"><span class="style2">Email ID </span></td>
      <td width="12%" align="center"></td>
      <td width="66%" align="left"><input name="email" type="text" id="email" /></td>
    </tr>
    <tr>
      <td height="39"  align="right"><span class="style2">Password</span></td>
      <td align="center"></td>
      <td align="left"><input name="pass" type="password" id="pass" /></td>
    </tr>
    <tr>
      <td height="26" colspan="3"  align="center"><input name="login" type="submit" id="login" value="login" /></td>
    </tr>
  </table>
  <p align="center" class="style3">New to Tether? Join Us! <a href="registration.php">Register</a></p>
</form>
</body>
</html>
