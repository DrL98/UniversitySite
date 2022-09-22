<?php
session_start();
?>
<?php 

$host = "localhost";
$user  = "root";
$pass = "";
$database = "room";

$organiserID = $_POST['organiserID'];
$_SESSION["organiserID"]= $organiserID;

$password= $_POST['password'];
$connection=mysql_connect($host,$user,$pass) or die("error in connection");

mysql_select_db($database);



	
$sql= ("SELECT * FROM organiser WHERE (organiserID= '".$organiserID."' and password='".$password."')");
	$school=mysql_query($sql);
	 
while ($test = mysql_fetch_array($school))
	{
	if ($test ['organiserID'] ==$organiserID)
		{
		header('location:organiserHome.php');// Redirect to a specific page
	}	
		}
		echo "Password or Username is not valid";
?>