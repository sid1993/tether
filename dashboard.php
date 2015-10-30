<?php
session_start();
//echo "Welcome"." ".$_SESSION['name'];
include "connection/connection.php";
$uid=$_SESSION['uid'];
$sql="select * from registration where uid='$uid'";
$res=mysql_query($sql);
$fres=mysql_fetch_assoc($res);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>HOME</title>
<style type="text/css">
<!--
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
body {
	background-image: url();
	background-color: #336666;
}
.style2 {color: #000000}
.style5 {font-size: x-large}
.style6 {color: #000000; font-size: x-large; }
-->
</style>
</head>

<body>
<table width="100%" height="196" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="100%" height="196" colspan="3"><table width="59%" height="178" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="21%" rowspan="3" align="center" valign="top"><a href="#"><img src="<?php echo "upload/".$_SESSION['uphoto']?>" name="dp" width="217" height="176" id="dp" style="background-color: gray;filter:alpha(opacity=60); -moz-opacity:0.8; opacity: 0.8;border:3px dashed #FF9933" /></a></td>

        <td width="57%" height="44"><h1><span >
          <?php 
			echo $_SESSION['name'];
		?>
        </span></h1></td>
        </tr>
      <tr>
        <td height="76" align="left" >
		  <?php
			echo "User ID :".$_SESSION['uid']."<br>";
			//echo "User Indentity ID :".$_SESSION['uiid']."<br>";
			echo $fres['address']." , ".$fres['state']." , "."PIN :".$fres['pincode']."<br>";
			echo "Contact Number :".$fres['cno']."<br>";
			echo "Email ID :".$fres['emailid'];
		?>
<h1>&nbsp;</h1></td>
        </tr>
      <tr>
        <td height="52">&nbsp;</td>
        </tr>
    </table></td>
  </tr>
</table>
<table width="100%" height="330" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="330" align="center"><table width="95%" height="95%" border="0" align="center" cellpadding="1" cellspacing="1">
        <tr>
		<?php
			$i=0;
			while($i<10)
			{
				if($i%4!=0)
				{
			?>
		  <td width="30%" height="30%" align="center"><input type="image" name="imageField" src="<?php echo "images/".$i.".png";?>" /></td>
		   <?php 
		   		}
				else
				{
					echo "</td><tr>";
				}
				$i++;
			}
		   ?>
        </tr>
        </table></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
