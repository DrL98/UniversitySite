<?php
	$host="localhost";
	$database="university";
	$user="root";
	$pass="";

	
	mysql_connect($host,$user,$pass) or die (mysql_error());
	mysql_select_db($database)or die(mysql_error());
	?>