<?php /*?><?php
	include "connection/connection.php";
	include "js/all.js";
	include  "functions/upload.php";
	if(isset($_POST['register']))
	{
		$email=$_POST['email'];
		$uid=uniqid();
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$cno=$_POST['cno'];
		$address=$_POST['address'];
		$state=$_POST['state'];
		$pincode=$_POST['pincode'];
		$prof=$_POST['prof'];
		$pass=$_POST['pass'];
		$father_name=$_POST['father_name'];
		$father_aadhar=$_POST['father_aadhar'];
		$mother_name=$POST['mother_name'];
		$mother_aadhar=$_POST['mother_aadhar'];
		$age=$_POST['age'];
		$sex=$_POST['sex'];
		
		
		
		$uf=$_FILES['uphoto'];
		$up1=upload($uif,$uiid);
		$up2=upload($uf,$uid);
		$uiphoto="$uiid"."."."$up1";
		$uphoto="$uid"."."."$up2";
		
		
		if($up1 == true && $up2==true)
		{
		$sql="insert into registration(emailid,fname,lname,cno,address,state,pincode,profession,password,uphoto) values('$email',,'$sex','$age','$fname','$lname','$cno','$address','$state','$pincode','$prof','$pass','$uphoto');";
		$rec=mysql_query($sql);
		
		echo "<script> alert('Success');
				location.replace('login.php?');
				</script>";
		
		}
	}
?><?php */?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<script>
function chck_null_registration()
{
	if(document.getElementById("fname").value=="")
	{
		alert("First name cannot be blank!!");
		document.getElementById('fname').focus();
		return false;
	}
	else if(document.getElementById('lname').value=="")
	{
		alert("Last name cannot be blank!!");
		document.getElementById('lname').focus();
					return false;
	}
	else if(document.getElementById('age').value=="")
	{
		alert("Age cannot be blank!!");
		document.getElementById('age').focus();
					return false;
	}
	else if(document.getElementById('sex').value=="")
	{
		alert("Sex cannot be blank!!");
		document.getElementById('sex').focus();
					return false;
	}
	else if(document.getElementById('blood_group').value=="")
	{
		alert("Blood Group cannot be blank!!");
		document.getElementById('blood_group').focus();
					return false;
	}
	else if(document.getElementById('email').value=="")
	{
		alert("Email ID cannot be blank!!");
		document.getElementById('email').focus();
					return false;
	}
	else if(document.getElementById('cno').value=="")
	{
		alert("Contact Number cannot be blank!!");
		document.getElementById('cno').focus();
					return false;
	}
	else if(document.getElementById('user_aadhar').value=="")
	{
		alert("User's Aadhar Number cannot be blank!!");
		document.getElementById('user_aadhar').focus();
					return false;
	}
	else if(document.getElementById('father_name').value=="")
	{
		alert("Father's Name cannot be blank!!");
		document.getElementById('father_name').focus();
					return false;
	}
	else if(document.getElementById('father_aadhar').value=="")
	{
		alert("Father's Aadhar Number cannot be blank!!");
		document.getElementById('father_aadhar').focus();
					return false;
	}
	else if(document.getElementById('mother_name').value=="")
	{
		alert("Mother's Name cannot be blank!!");
		document.getElementById('mother_name').focus();
					return false;
	}
	else if(document.getElementById('mother_aadhar').value=="")
	{
		alert("Mother's Aadhar Number cannot be blank!!");
		document.getElementById('mother_aadhar').focus();
					return false;
	}
	else if(document.getElementById('address').value=="")
	{
		alert("Address cannot be blank!!");
		document.getElementById('address').focus();
					return false;
	}
	else if(document.getElementById('state').value=="")
	{
		alert("State Code cannot be blank!!");
		document.getElementById('state').focus();
					return false;
	}
	else if(document.getElementById('pincode').value=="")
	{
		alert("Pincode cannot be blank!!");
		document.getElementById('pincode').focus();
					return false;
	}
	else if(document.getElementById('pass').value=="")
	{
		alert("Pincode cannot be blank!!");
		document.getElementById('pass').focus();
					return false;
	}
	else if(document.getElementById('prof').value=="")
	{
		alert("Profession cannot be blank!!");
		document.getElementById('prof').focus();
					return false;
	}
	else if(document.getElementById('uphoto').value=="")
	{
		alert("First name cannot be blank!!");
		document.getElementById('uphoto').focus();
					return false;
	}
	return true;
}
</script>
</head>

<body>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1" onSubmit="return chck_null_registration()">
  <div align="center">
    <h1 class="style3">	Basic Info   </h1>
    <table width="50%"  cellpadding="0" cellspacing="0" style="background-color: white;filter:alpha(opacity=60); -moz-opacity:0.8; opacity: 0.8;border:3px dashed #FF9933">
      <tr>
        <td width="48%" height="31" align="right"><span class="style1">First Name</span></td>
        <td width="4%" align="center">:</td>
        <td width="48%" align="left"><input name="fname" type="text" id="fname" style="background-color:#D7F2FF" /></td>
      </tr>
      <tr>
        <td height="39" align="right"><span class="style1">Last Name</span></td>
        <td align="center">:</td>
        <td align="left"><input name="lname" type="text" id="lname" style="background-color:#D7F2FF"/></td>
      </tr>
      <tr>
        <td height="42" align="right"><span class="style1">Age</span></td>
        <td align="center">:</td>
        <td align="left"><input name="age" type="text" id="age" style="background-color:#D7F2FF"/></td>
      </tr>
      <tr>
        <td height="42" align="right"><span class="style1">Sex</span></td>
        <td align="center">:</td>
        <td align="left"><input name="sex" type="text" id="sex" style="background-color:#D7F2FF"/></td>
      </tr>
      <tr>
        <td height="42" align="right"><span class="style1">Blood Group</span></td>
        <td align="center">:</td>
        <td align="left"><input name="blood_group" type="text" id="blood_group" style="background-color:#D7F2FF"/></td>
      </tr>
      <tr>
        <td height="38" align="right"><span class="style1">Contact Number</span></td>
        <td align="center">:</td>
        <td align="left"><input name="cno" type="text" id="cno" style="background-color:#D7F2FF"/></td>
      </tr>
	  <tr>
        <td width="48%" height="31" align="right"><span class="style1">Email Id </span></td>
        <td width="4%" align="center">:</td>
        <td width="48%" align="left"><input name="email" type="text" id="email" style="background-color:#D7F2FF" /></td>
      </tr>
      
      <tr>
        <td height="44" align="right"><span class="style1">Address</span></td>
        <td align="center">:</td>
        <td align="left"><input name="address" type="text" id="address" style="background-color:#D7F2FF"/></td>
      </tr>
      <tr>
        <td height="39" align="right"><span class="style1">State Code </span> </td>
        <td align="center">:</td>
        <td align="left"><input name="state" type="text" id="state" style="background-color:#D7F2FF"/></td>
      </tr>
      <tr>
        <td height="41" align="right"><span class="style1">Pincode</span> </td>
        <td align="center">:</td>
        <td align="left"><input name="pincode" type="text" id="pincode" style="background-color:#D7F2FF"/></td>
      </tr>
      <tr>
        <td height="42" align="right"><span class="style1">Profession</span></td>
        <td align="center">:</td>
        <td align="left"><input name="prof" type="text" id="prof" style="background-color:#D7F2FF"/></td>
      </tr>
      <tr>
        <td height="36" align="right"><span class="style1">Aadhar Number</span> </td>
        <td align="center">:</td>
        <td align="left"><input name="user_aadhar" type="text" id="user_aadhar" style="background-color:#D7F2FF"/></td>
      </tr>
      <tr>
        <td height="48" align="right"><span class="style1">User Photo</span> </td>
        <td align="center">:</td>
        <td align="left"><input name="uphoto" type="file" id="uphoto" style="background-color:#D7F2FF"/></td>
      </tr>
      <tr>
        <td height="42" align="right"><span class="style1">Father's Name</span></td>
        <td align="center">:</td>
        <td align="left"><input name="father_name" type="text" id="father_name" style="background-color:#D7F2FF"/></td>
      </tr>
      <tr>
        <td height="42" align="right"><span class="style1">Father's Aadhar Number</span></td>
        <td align="center">:</td>
        <td align="left"><input name="father_aadhar" type="text" id="father_aadhar" style="background-color:#D7F2FF"/></td>
      </tr>
      <tr>
        <td height="42" align="right"><span class="style1">Mother's Name</span></td>
        <td align="center">:</td>
        <td align="left"><input name="mother_name" type="text" id="mother_name" style="background-color:#D7F2FF"/></td>
      </tr>
      <tr>
        <td height="42" align="right"><span class="style1">Mother's Aadhar Number</span></td>
        <td align="center">:</td>
        <td align="left"><input name="mother_aadhar" type="text" id="mother_aadhar" style="background-color:#D7F2FF"/></td>
      </tr>
      <tr>
        <td height="42" align="right"><span class="style1">Password</span></td>
        <td align="center">:</td>
        <td align="left"><input name="pass" type="text" id="pass" style="background-color:#D7F2FF"/></td>
      </tr>
      
      
      
      <tr>
        <td height="64" colspan="3" align="center"><input name="update" type="submit" id="update" value="Update" /></td>
      </tr>
    </table>
    <p align="center" class="style5"><span class="style2"><span class="style6"> <span class="style2">*</span>all fields are compulsory</span></span></p>
  </div>
</form>
</body>
</html>
