<?php
	$server = "localhost";
	$user="root";
	$pass="";
	$db = "eduboost_db";

	$dbconn = mysql_connect($server,$user,$pass);

	$select_db = mysql_query("USE $db;");

	if (!$dbconn){
		echo "No connection.";
	}
	else{
	}

?>