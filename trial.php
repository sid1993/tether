<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Sign-Up/Login Form</title>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="css/normalize.css">

    
        <link rel="stylesheet" href="css/style.css">

    
	<?php
	include "connection/connection.php";
	include "js/all.js";
	include  "functions/upload.php";
	if(isset($_POST['login']))
	{
		$emailid=$_POST['email'];
		$pass=$_POST['pass'];
		$sql="SELECT * FROM heroku_78c30c5595ce4d9.registration where emailid='$emailid';";
		$res=mysqli_query($conn,$sql);
		$fres=mysqli_fetch_assoc($res);
		print_r($fres);
		$db_pass=$fres['password'];
		
		if($pass==$db_pass)
		{
			/*session_start();
			$_SESSION['name']=$fres['fname']." ".$fres['lname'];
			$_SESSION['uid']=$fres['uid'];
			$_SESSION['uiid']=$fres['uiid'];
			$_SESSION['uiphoto']=$fres['uiphoto'];
			$_SESSION['uphoto']=$fres['uphoto'];
			*/
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
		$uiid=$_POST['uiid'];
		$uname=$_POST['uname'];
		$pass=$_POST['pass'];
		$doctor_reg_code=$_POST['doctor_reg_code'];
		
		$uif=$_FILES['uiphoto'];
		$uf=$_FILES['uphoto'];
		$up1=upload($uif,$uiid);
		$up2=upload($uf,$uid);
		$uiphoto="$uiid"."."."$up1";
		$uphoto="$uid"."."."$up2";
		
		
		if($up1 == true && $up2==true)
		{
		$sql="insert into registration(emailid,uid,fname,lname,cno,address,state,pincode,profession,uiid,uiphoto,doctor_reg_code,username,password,uphoto,status_code) values('$email','$uid','$fname','$lname','$cno','$address','$state','$pincode','$prof','$uiid','$uiphoto','$doctor_reg_code','$uname','$pass','$uphoto',0);";
		$rec=mysql_query($sql);
		
		echo "<script> alert('Success');
				location.replace('login.php?');
				</script>";
		
		}
	}
?> 
    
  </head>

  <body>

    <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Sign Up !</h1>
          
          <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1" onSubmit="return chck_null_registration()">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input name="fname" type="text" id="fname" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input name="lname" type="text" id="lname" required autocomplete="off"/>
            </div>
          
          <div class="field-wrap">
              <label>
                Email Address<span class="req">*</span>
              </label>
              <input name="email" type="text" id="email" required autocomplete="off"/>
            </div>

          <div class="field-wrap">
            <label>
              Contact Number<span class="req">*</span>
            </label>
            <input name="cno" type="text" id="cno" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Address<span class="req">*</span>
            </label>
            <input name="address" type="text" id="address" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              State Code<span class="req">*</span>
            </label>
            <input name="state" type="text" id="state" required autocomplete="off"/>
          </div>
          <div class="field-wrap">
            <label>
              Pincode<span class="req">*</span>
            </label>
            <input name="pincode" type="text" id="pincode" required autocomplete="off"/>
          </div>
          <div class="field-wrap">
          <label>
              Profession<span class="req">*</span>
            </label>
            <input name="prof" type="text" id="prof" required autocomplete="off"/>
          </div>
          <div class="field-wrap">
          <label>
              Identity Number<span class="req">*</span>
            </label>
            <input name="uiid" type="text" id="uiid" required autocomplete="off"/>
          </div>
           <div class="field-wrap">
          <label>
              Identity Photo<span class="req">*</span>
            </label>
            <input name="uiphoto" type="file" id="uiphoto" required autocomplete="off"/>
          </div>
           <div class="field-wrap">
          <label>
              User Photo<span class="req">*</span>
            </label>
            <input name="uphoto" type="file" id="uphoto" required autocomplete="off"/>
          </div>
          <div class="field-wrap">
          <label>
              Doctor's Registration Number<span class="req">*</span>
            </label>
            <input name="doctor_reg_code" id="doctor_reg_code" required autocomplete="off"/>
          </div>
          <div class="field-wrap">
          <label>
             Username<span class="req">*</span>
            </label>
            <input name="uname" type="text" id="uname" required autocomplete="off"/>
          </div>
          <div class="field-wrap">
          <label>
              Password<span class="req">*</span>
            </label>
            <input name="pass" type="password" id="pass" required autocomplete="off"/>
          </div>
          <div class="field-wrap">
          <label>
              Confirm-Passowrd<span class="req">*</span>
            </label>
            <input name="repass" type="password" id="repass" required autocomplete="off"/>
          </div>
          
          <input name="register" type="submit" id="register" value="Register" class="button button-block"/>
          
          </form>

        </div>
        </div>
        </div>
        
        <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form form id="form1" name="form1" method="post" action="">
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off" name="email" id="email"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input name="pass" type="password" id="pass" required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <input name="login" type="submit" id="login" value="Login" class="button button-block"/>
          
          </form>

        </div>
        
      </div><!-- tab-content --><!-- /form -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>

    
    
    
  </body>
</html>
