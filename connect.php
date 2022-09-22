<?php
$host = "localhost";
$user  = "root";
$pass = "";
$database = "room";

$connection=mysql_connect($host,$user,$pass) or die("error in connection");

mysql_select_db($database);
?>