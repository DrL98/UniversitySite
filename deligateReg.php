<?php 
include_once 'support.html';
include_once 'connect.php';


$firstName=$_POST['firstname'];
$lastName=$_POST['lastname'];
$gender = $_POST['gender'];
$address=$_POST['address'];
$phoneNumber=$_POST['phonenumber'];
$deligateID = $_POST['deligateid'];
$password = $_POST['password'];

$query="insert into deligates(deligateID,firstName,lastName,gender, address, phoneNumber, password)
 values('$deligateID','$firstName','$lastName','$gender','$address','$phoneNumber','$password')";

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
		  
		  alert ("Thank you for registering");
		  
		 
		  </script>

<?php 	}
		
	 

?>