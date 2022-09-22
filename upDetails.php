

<?php 
include_once 'deligateHome.php';
include_once 'connect.php';

$deligateID=$_SESSION['deligateID'];
$firstName=$_POST['firstname'];
$lastName=$_POST['lastname'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$phoneNumber=$_POST['phonenumber'];
$password=$_POST['password'];


$query="update deligates set firstName = '$firstName' where deligateID = '$deligateID'";

	$ret=mysql_query($query,$connection);
	
	$query2="update deligates set lastName = '$lastName' where deligateID = '$deligateID'";

	$ret2=mysql_query($query2,$connection);
	$query3="update deligates set gender = '$gender' where deligateID = '$deligateID'";

	$ret3=mysql_query($query3,$connection);
	$query4="update deligates set address = '$address' where deligateID = '$deligateID'";

	$ret4=mysql_query($query4,$connection);
	$query5="update deligates set phoneNumber = '$phoneNumber' where deligateID = '$deligateID'";

	$ret5=mysql_query($query5,$connection);
	$query6="update deligates set password = '$password' where deligateID = '$deligateID'";

	$ret6=mysql_query($query6,$connection);
	
	if(!$ret)
	{
		   ?>
 <script type="text/javascript">
		  
		   alert ("Failed");
		  
		 
		  </script>
          
<?php }
	
	else
	{
	?>

<script type="text/javascript">
		  
		  alert ("Your Details have been Updated.");
		  
		 
		  </script>

<?php 	}
		
	 

?>