<?php
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server =$url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);
$hostname="p:"+$server;

$conn = new mysqli($hostname, $username, $password, $db);
?>