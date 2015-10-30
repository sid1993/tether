<title>Registration</title>
<style type="text/css">
<!--
.style1 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style2 {color: #FF0000}
body {
	background-color: #CCCCCC;
	background-image: url(images/bg.jpg);
}
.style3 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: xx-large;
	color: #000000;
}
.style5 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: small; }
.style6 {color: #000000}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: underline;
}
a:active {
	text-decoration: none;
}
body,td,th {
	color: #000000;
}
-->
</style>
</head>

<body>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1" onSubmit="return chck_null_registration()">
  <div align="center">
    <h1 class="style3">Registration Form    </h1>
    <table width="50%"  cellpadding="0" cellspacing="0" style="background-color: gray;filter:alpha(opacity=60); -moz-opacity:0.8; opacity: 0.8;border:3px dashed #FF9933">
      <tr>
        <td width="48%" height="31" align="right"><span class="style1">First Name</span></td>
        <td width="4%" align="center">:</td>
        <td width="48%" align="left"><input name="fname" type="text" id="fname" style="background-color:#9999FF" /></td>
      </tr>
      <tr>
        <td height="39" align="right"><span class="style1">Last Name</span></td>
        <td align="center">:</td>
        <td align="left"><input name="lname" type="text" id="lname" style="background-color:#9999FF"/></td>
      </tr>
	  <tr>
        <td width="48%" height="31" align="right"><span class="style1">Email Id </span></td>
        <td width="4%" align="center">:</td>
        <td width="48%" align="left"><input name="email" type="text" id="email" style="background-color:#9999FF" /></td>
      </tr>
      <tr>
        <td height="38" align="right"><span class="style1">Contact Number</span></td>
        <td align="center">:</td>
        <td align="left"><input name="cno" type="text" id="cno" style="background-color:#9999FF"/></td>
      </tr>
      <tr>
        <td height="44" align="right"><span class="style1">Address</span></td>
        <td align="center">:</td>
        <td align="left"><input name="address" type="text" id="address" style="background-color:#9999FF"/></td>
      </tr>
      <tr>
        <td height="39" align="right"><span class="style1">State Code </span> </td>
        <td align="center">:</td>
        <td align="left"><input name="state" type="text" id="state" style="background-color:#9999FF"/></td>
      </tr>
      <tr>
        <td height="41" align="right"><span class="style1">Pincode</span> </td>
        <td align="center">:</td>
        <td align="left"><input name="pincode" type="text" id="pincode" style="background-color:#9999FF"/></td>
      </tr>
      <tr>
        <td height="42" align="right"><span class="style1">Profession</span></td>
        <td align="center">:</td>
        <td align="left"><input name="prof" type="text" id="prof" style="background-color:#9999FF"/></td>
      </tr>
      <tr>
        <td height="36" align="right"><span class="style1">Identity Number</span> </td>
        <td align="center">:</td>
        <td align="left"><input name="uiid" type="text" id="uiid" style="background-color:#9999FF"/></td>
      </tr>
      <tr>
        <td height="43" align="right"><span class="style1">Identity Photo</span> </td>
        <td align="center">:</td>
        <td align="left"><input name="uiphoto" type="file" id="uiphoto" style="background-color:#9999FF"/></td>
      </tr>
      <tr>
        <td height="48" align="right"><span class="style1">User Photo</span> </td>
        <td align="center">:</td>
        <td align="left"><input name="uphoto" type="file" id="uphoto" style="background-color:#9999FF"/></td>
      </tr>
      <tr>
        <td height="34" align="right"><span class="style1">Username</span> </td>
        <td align="center">:</td>
        <td align="left"><input name="uname" type="text" id="uname" style="background-color:#9999FF"/></td>
      </tr>
      <tr>
        <td height="45" align="right"><span class="style1">Password</span> </td>
        <td align="center">:</td>
        <td align="left"><input name="pass" type="password" id="pass" style="background-color:#9999FF"/></td>
      </tr>
      <tr>
        <td height="47" align="right"><span class="style1">Confirm-Passowrd</span></td>
        <td align="center">:</td>
        <td align="left"><input name="repass" type="password" id="repass" style="background-color:#9999FF"/></td>
      </tr>
      <tr>
        <td height="64" colspan="3" align="center"><p>&nbsp;</p>
            <p>
              <input name="register" type="submit" id="register" value="Register" />
          </p></td>
      </tr>
    </table>
    <p align="center" class="style5"><span class="style2"><span class="style6"> <span class="style2">*</span>all fields are compulsory</span></span></p>
  </div>
</form>
</body>
</html>
