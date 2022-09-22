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
          <script>
function validate(form) {
fail = validateFirstname(form.firstname.value)
fail += validateLastname(form.lastname.value)
fail += validateContact(form.contact.value)
fail += validatePassword(form.password.value)
fail += validateOrganiserid(form.organiserid.value)
if (fail == "") return true
else { alert(fail); return false }
}
</script>

<script>
function validateFirstname(field) {
if (field == "") return "No First Name was entered.\n"
return ""
}
function validateLastname(field) {
if (field == "") return "No Last Name was entered.\n"
return ""
}

function validatePassword(field) {
if (field == "") return "No Password was entered.\n"
else if (field.length < 6)
return "Passwords must be at least 6 characters.\n"
else if (!/[a-z]/.test(field) || ! /[A-Z]/.test(field) ||
!/[0-9]/.test(field))
return "Passwords require one each of a-z, A-Z and 0-9.\n"
return ""
}

function validateContact(field) {
if (field == "") return "No Phone Number was entered.\n"
return ""
}
function validateOrganiserid(field) {
if (field == "") return "No Username was entered.\n"
else if (field.length < 5)
return "Usernames must be at least 5 characters.\n"
else if (/[^a-zA-Z0-9_-]/.test(field))
return "Only a-z, A-Z, 0-9, - and _ allowed in Usernames.\n"
return ""
}
</script>

<h2>Resgistration </h2>
          <form action="adminHome.php" method="post" onSubmit="return validate(this)">
            
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
                <input type="password" name="password" />
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
}
else{
require 'connect.inc.php';
require 'core.inc.php';
  
// open connection 
$connection = mysql_connect($mysql_host, $mysql_user, $mysql_password) or die ("Unable to connect!"); 

// select database 
mysql_select_db($mysql_db) or die ("Unable to select database!"); 

// query to get username from database
	
             $queryinsert =  "INSERT INTO `room`.`organiser` (`organiserID`, `firstName`, `lastName`, `contact`, `password`) VALUES ('ID1', 'NAME1', 'FNAME1', '001909', 'PASS1231');"; 
               
			   
			mysql_query($queryinsert);
			
			 echo "<script>alert('you have been registered $Fname');</script>";
			 
	

// free result set memory 
mysql_free_result($result); 

// close connection 
mysql_close($connection); 
}
?>















 