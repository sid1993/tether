<?php
session_start();
include "connection/connection.php";

$qsql="SELECT uid FROM heroku_78c30c5595ce4d9.registration where status_code=1;";
	$qres=mysqli_query($conn,$qsql);
	$_SESSION['$selected_uid']="";
	$idle_user = array();
	while ($row = $qres->fetch_assoc()) {
    	$idle_user[] = $row;
	}
	if($idle_user)
	{
		//random uid selection
		$length=sizeof($idle_user);
		$randomIndex=rand(0,$length-1);
		$_SESSION['$selected_uid']=$idle_user[$randomIndex]['uid'];
		echo "<script>alert('Found one');</script>";
	}
?>