<?php
session_start();
include "connection/connection.php";
header('Content-type: application/json');

$qsql="SELECT uid FROM heroku_78c30c5595ce4d9.registration where status_code=1;";
	$qres=mysqli_query($conn,$qsql);
	$idle_user = array();
	while ($row = $qres->fetch_assoc()) {
    	$idle_user[] = $row;
	}
	$return=$_POST;
	if($idle_user)
	{
		$return["available"] = "yes";
	}
	else
	{
		$return["available"] = "no";
	}
	echo json_encode($return);
?>