<?php
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server =$url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);
$conn = new mysqli('p:'.$server, $username, $password, $db);


$status_code=$_POST['status_code'];
$emailid=$_POST['emailid'];

$sql="UPDATE `heroku_78c30c5595ce4d9`.`registration` SET `status_code`='$status_code' WHERE `emailid`='$emailid'";
$res=mysqli_query($conn,$sql);
?>