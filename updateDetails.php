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
<?php
$_SESSION["deligateID"];
?>
  <div class="header">
    <div class="header_resize">
      <div class="logo">
        <h1>University of Chelsea</h1></div>
      <div class="menu_nav">
        <ul>
          <li class="active"><a href="deligateHome.php">back</a></li>
      
		   
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
          <script>
function validate(form) {
fail = validateFirstname(form.firstname.value)
fail += validateLastname(form.lastname.value)
fail += validateGender(form.gender.value)
fail += validatePassword(form.password.value)
fail += validateAddress(form.address.value)
fail += validatePhonenumber(form.phonenumber.value)
fail += validateDeligateid(form.deligateid.value)
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
function validateGender(field) {
if (field == "") return "No Gender was entered.\n"
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
function validateAddress(field) {
if (field == "") return "No Address was entered.\n"
return ""
}
function validatePhonenumber(field) {
if (field == "") return "No Phone Number was entered.\n"
return ""
}
function validateDeligateid(field) {
if (field == "") return "No Username was entered.\n"
else if (field.length < 5)
return "Usernames must be at least 5 characters.\n"
else if (/[^a-zA-Z0-9_-]/.test(field))
return "Only a-z, A-Z, 0-9, - and _ allowed in Usernames.\n"
return ""
}
</script>


 <h2>Update Lecture Details </h2>
          <form action="upDetails.php" method="post" onSubmit="return validate(this)">
            
			<ol>
              <li>First Name</li>
              <li>
                <input type="text" name="firstname" class="text" />
              </li>
              <li></li>
              <li>Last Name</li>
              <li>
                <input type="text" name="lastname" class="text" />
              </li>
            </ol>
            <ol>
              <li>Gender</li>
              <li>
                <input type="text" name="gender" class="text" />
              </li>
              <li>Address</li>
              <li>
                <input type="text" name="address" class="text" />
              </li>
              <li>Phone Number</li>
              <li>
                <input type="text" name="phonenumber" class="text" />
              </li>
              <li>User Name</li>
              <li>
                <input type="text" name="deligateid" class="text" />
              </li>
              <li>Password</li>
              <li>
                <input type="password" name="password" class="text" />
              </li>
            </ol>
			<input type="submit" value="Update">
          
  <div class="fbg"></div>
  <div class="footer">
    <div class="footer_resize">
      <p class="lf">&copy; Copyright OurUniversity. Designed by Evance, Simbani,Emmanuel, Stephen</p>
      <ul class="fmenu">
        <li class="active"><a href="organiserHome.php">Home</a></li>
        
      </ul>
      <div class="clr"></div>
    </div>
  </div>
</div>
</body>
</html>
