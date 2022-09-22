<?php 

$host = "localhost";
$user  = "root";
$pass = "";
$database = "room";

$adminID = $_POST['adminID'];
$password= $_POST['password'];
$connection=mysql_connect($host,$user,$pass) or die("error in connection");

mysql_select_db($database);



	
$sql= ("SELECT * FROM admin WHERE (adminID= '".$adminID."' and password='".$password."')");
	$school=mysql_query($sql);
	 
while ($test = mysql_fetch_array($school))
	{
	if ($test ['deligateID'] ==$deligateID)
		{
		header('location:adminHome.php');// Redirect to a specific page
	}	
		}
		echo "Password or Username is not valid";
?>