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


	$connection=mysql_connect('us-cdbr-iron-east-03.cleardb.net:3306','b3934deb5eca6f','75eb4c64');
	echo $connection;
	$db=mysql_select_db($db);
?> 
