<?php 
include_once 'registerOrganiser.php';
include_once 'connect.php';


$firstName=$_POST['firstname'];
$lastName=$_POST['lastname'];
$organiserID = $_POST['organiserid'];
$contact=$_POST['contact'];
$password=$_POST['password'];

$query="insert into organiser(organiserID,firstName,lastName,contact, password)
 values('$organiserID','$firstName','$lastName','$contact', '$password')";

	$ret=mysql_query($query,$connection);
	
	
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
		  
		  alert ("Organiser has been registered");
		  
		 
		  </script>

<?php 	}
		
	 

?>