<?php
	$url = parse_url(getenv("
mysql://b3934deb5eca6f:75eb4c64@us-cdbr-iron-east-03.cleardb.net/heroku_78c30c5595ce4d9?reconnect=true"));
	$server = $url["host"];
	$username = $url["user"];
	$password = $url["pass"];
	$db = substr($url["path"], 1);


	$connection=mysql_connect($server,$username,$password);
	$db=mysql_select_db($db);
?> 
