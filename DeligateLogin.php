<?php
session_start();
?>
<?php 

$host = "localhost";
$user  = "root";
$pass = "";
$database = "room";



$deligateID = $_POST['deligateID'];
$_SESSION["deligateID"]= $deligateID;
$password= $_POST['password'];
$connection=mysql_connect($host,$user,$pass) or die("error in connection");

mysql_select_db($database);



	
$sql= ("SELECT * FROM deligates WHERE (deligateID= '".$deligateID."' and password='".$password."')");
	$school=mysql_query($sql);
	 
while ($test = mysql_fetch_array($school))
	{
	if ($test ['deligateID'] ==$deligateID)
		{
		header('location:deligateHome.php');// Redirect to a specific page
	}	
		}
		echo "Password or Username is not valid";
?>