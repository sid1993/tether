<?php
	$url = parse_url(getenv("CLEARDB_DATABASE_URL"));
	$server = $url["host"];
	$username = $url["user"];
	$password = $url["pass"];
	$db = substr($url["path"], 1);
	echo $server;
	echo $username;
	echo $password;
	echo $db;


	$connection=mysql_connect('$server:3306','$username','$password');
	$db=mysql_select_db($db);
?> 
