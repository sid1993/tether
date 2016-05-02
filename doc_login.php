<?php
	include "connection/connection.php";
	if(isset($_POST['login']))
	{
		$emailid=$_POST['email'];
		$pass=$_POST['pass'];
		$sql="SELECT * FROM heroku_78c30c5595ce4d9.registration where emailid='$emailid';";
		$res=mysqli_query($conn,$sql);
		$fres=mysqli_fetch_assoc($res);
		print_r($fres);
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
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Login Portal</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Sid Chat" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="log_css/demo.css" />
        <link rel="stylesheet" type="text/css" href="log_css/style.css" />
		<link rel="stylesheet" type="text/css" href="log_css/animate-custom.css" />
    </head>
    

    <body>
        <div class="container">
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  method="post" action="" autocomplete="on"> 
                                <h1>Log in</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Your email</label>
                                    <input id=name="email" id="email" required type="email" placeholder="mymail@mail.com"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input name="pass" type="password" id="pass" required placeholder="eg. X8df!90EO" /> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Keep me logged in</label>
								</p>
                                <p class="login button"> 
                                    <input name="login" type="submit" id="login" value="Login" /> 
								</p>
                                <p class="change_link">
									Not a member yet ?
									<a href="registration.php" class="to_register">Join us</a>
								</p>
                            </form>
                        </div>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>