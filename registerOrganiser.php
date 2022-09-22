<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Design by http://www.bluewebtemplates.com
Released for free under a Creative Commons Attribution 3.0 License
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>website</title>
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
        <h1>University of Chelsea </h1>
      </div>
      <div class="menu_nav">
        <ul>
          <li class="active"><a href="adminHome.php">Back</a></li>
          
        </ul>
      </div>
      <div class="clr"></div>
    </div>
  </div>

  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">


<h2>Resgistration </h2>
          <form action="registerOrganiser.php" method="post" onSubmit="return validate(this)">
            
			<ol>
              <li>First Name</li>
              <li>
                <input type="text" name="firstname" />
              </li>
              <li></li>
              <li>Last Name</li>
              <li>
                <input type="text" name="lastname" />
              </li>
            </ol>
            <ol>
              <li>Organiser ID</li>
              <li>
                <input type="text" name="organiserid" />
              </li>
              <li>Contact Number</li>
              <li>
                <input type="text" name="contact" />
              </li>
              <li>Password</li>
              <li>
                <input type="text" name="pass" />
              </li>
              
			<input type="submit" value="Register">
          <p>&nbsp;</p>
        </div>
        </div>
        <div class="clr"></div>
    </div>
  </div>

  <div class="fbg"></div>
  <div class="footer">
    <div class="footer_resize">
      <p class="lf">&copy; Copyright OurUniversity. Designed by Evance, Simbani,Emmanuel, Stephen</p>
      <ul class="fmenu">
        <li class="active"><a href="index.html">Home</a></li>
     
      </ul>
      <div class="clr"></div>
    </div>
  </div>
</div>
</body>
</html>



<?

$mysql_host = "localhost";
$mysql_user  = "root";
$mysql_password = "";
$mysql_db = "room";
$conn = mysql_pconnect($mysql_host, $mysql_user, $mysql_password) or trigger_error(mysql_error(),E_USER_ERROR); 

if(!mysql_connect($mysql_host,$mysql_user,$mysql_password)|| !mysql_select_db($mysql_db)){
echo "no db";
}else{
$name = '';
// validate is fields are set
if (isset($_POST['organiserid'] ) AND isset($_POST['pass'] ) AND isset($_POST['firstname'] ) AND isset($_POST['lastname'])){
$organiserid = $_POST['organiserid']; 
$contact = $_POST['contact'];
$firstname = $_POST['firstname']; 
$lastname = $_POST['lastname'];
$pass = $_POST['pass'];
if(!empty ($_POST['organiserid'] ) AND !empty($_POST['pass'] ) AND !empty($_POST['firstname'] ) AND !empty($_POST['lastname'] )){
// query to get organiserid from database

		 // inserting values into database if organiserid does not exist
		
             $queryinsert =  "INSERT INTO `room`.`organiser` (`organiserID`, `firstName`, `lastName`, `contact`, `password`) VALUES ('$organiserid', '$firstname', '$lastname', '$contact', '$pass');"; 
			   
			mysql_query($queryinsert);
			
			 echo "<script>alert('you have been registered $firstname');</script>";
			 
}
}}
?>











 