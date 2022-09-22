<?php 
include_once 'registerPresenter.php';
include_once 'connect.php';


$firstName=$_POST['firstname'];
$lastName=$_POST['lastname'];
$presenterID = $_POST['presenterid'];
//$contact=$_POST['contact'];
//$password=$_POST['password'];

$query="insert into presenter(presenterID,firstName,lastName)
 values('$presenterID','$firstName','$lastName')";

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
		  
		  alert ("Presenter has been registered");
		  
		 
		  </script>

<?php 	}
		
	 

?>