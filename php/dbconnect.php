<?php
	$server = "localhost";
	$user="root";
	$pass="";
	$db = "eduboost_db";

	$dbconn = mysqli_connect($server,$user,$pass);

	$select_db = mysqli_query("USE $db;");

	if (!$dbconn){
		echo "No connection.";
	}
	else{
	}

?>