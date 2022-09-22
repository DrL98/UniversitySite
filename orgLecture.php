<?php
session_start();
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Design by http://www.bluewebtemplates.com
Released for free under a Creative Commons Attribution 3.0 License
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>WELCOME TO OUR UNIVERSITY</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<!-- CuFon: Enables smooth pretty custom font rendering. 100% SEO friendly. To disable, remove this section -->
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>
<!-- CuFon ends -->
</head>
<body>
<div class="main">

  <div class="header">
    <div class="header_resize">
      <div class="logo">
        <h1>Our University</h1></div>
      <div class="menu_nav">
        <ul>
          <li class="active"><a href="organiserHome.php">Home</a></li>
          <li><a href="organiseLecture.php">Organise Lecture</a></li>
		  <li><a href="updateLectureDetails.html">Update Lecture Details</a></li>
		   
           <li><a href="index.html">Logout</a></li>
        </ul>
      </div>
      <div class="clr"></div>
    </div>
  </div>

  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2>Registration of Lectures.....</h2>
           <h2> </h2>
          <form action="orgLecture.php" method="post" id="sendemail">
            
			<ol>
              <li>Lecture ID</li>
              <li>
                <input id="name" name="lectureID" class="text" />
              </li>
              <li></li>
              <li>Presenter ID</li>
              <li>
                <input id="password" name="presenterID" class="text" />
              </li>
            </ol>
            <ol>
              <li>Title</li>
              <li>
                <input id="gender" name="title" class="text" />
              </li>
              <li>Lecture Date</li>
              <li>
                <input id="address" name="dates" class="text" />
              </li>
              <li>Over View</li>
              <li>
                <input id="phonenumber" name="overView" class="text" />
              </li>
             
			<input type="submit" value="Register">
          <p><a href="#">Read more</a> | March 16, 2015</p>
        
  <div class="fbg"></div>
  <div class="footer">
    <div class="footer_resize">
      <p class="lf">&copy; Copyright OurUniversity. Designed by Evance, Simbani,Emmanuel, Stephen</p>
      <ul class="fmenu">
        <li class="active"><a href="organiserHome.php">Home</a></li>
        <li><a href="organiseLecture.php">Organise Lecture</a></li>
        <li><a href="updateLecture.php">update Details</a></li>
        
      </ul>
      <div class="clr"></div>
    </div>
  </div>
</div>
</body>
</html>

<?php 

include_once 'connect.php';


$lectureID=$_POST['lectureID'];
$presenterID=$_POST['presenterID'];
$title = $_POST['title'];
$dates=$_POST['dates'];
$overView=$_POST['overView'];
$organiserID=$_SESSION["organiserID"];
$romm="";

$query="insert into lectures(lectureID, organiserID, presenterID,title,dates, room, overView)
 values('$lectureID', '$organiserID', '$presenterID','$title','$dates','$room','$overView')";

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
		  
		  alert ("Lecture Schedule set.");
		  
		 
		  </script>

<?php 	}
		
	 

?>