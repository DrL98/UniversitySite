

<?php 
include_once 'updateLectureDetails.php';
include_once 'connect.php';


$lectureID=$_POST['lectureID'];


$room=$_POST['room'];

$query="update lectures set room = '$room' where lectureID = '$lectureID'";

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
		  
		  alert ("Room assigned to Lecture.");
		  
		 
		  </script>

<?php 	}
		
	 

?>