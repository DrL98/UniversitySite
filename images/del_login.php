
<?php
session_start();
?>


<?php

include_once 'functions.php';



$username=$_POST['username'];

$_SESSION['username']=$username;
$username=$_SESSION['username'];

$Password=$_POST['password'];


	
$sql= ("SELECT * FROM delegate WHERE (username= '".$username."' and password='".$password."')");
	$query=mysql_query($sql);

	 
while ($test = mysql_fetch_assoc($query))
	{
	if ($test ['username'] ==$username)
		{
		header('location:index.html');// Redirect to a specific page
	}
 	
		}
		echo " Please Register An Account";
		