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
        <h1> University of Chelsea </h1>
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
          
                <div class="clr"></div>
              </li>
            </ol>
          </form>
          <p>&nbsp;</p>
        </div>
        <div class="article">
          <h2>&nbsp;</h2>
        </div>
      </div>
      <div class="sidebar">
        <div class="gadget">
        <html>

        <div align="left">
          <script>
function validate(form) {
fail = validateFirstname(form.firstname.value)
fail += validateLastname(form.lastname.value)

fail += validatePresenterid(form.presenterid.value)
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

function validatePresenterid(field) {
if (field == "") return "No Presenter ID was entered.\n"
else if (field.length < 5)
return "Usernames must be at least 5 characters.\n"
else if (/[^a-zA-Z0-9_-]/.test(field))
return "Only a-z, A-Z, 0-9, - and _ allowed in Usernames.\n"
return ""
}
          </script> 
          
        </div>
		
        </div>
		<div align="left"> 
        <h2>Resgistration </h2>
          <form action="regPresenter.php" method="post" onSubmit="return validate(this)">
            
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
              <li>Presenter ID</li>
              <li>
                <input type="text" name="presenterid" />
              </li>
              
              
			<input type="submit" value="Register">
  
</div>
</div>
        
        <div class="gadget">
          <h2 class="star">&nbsp;</h2>
        </div>
      </div>
      <div class="clr"></div>
    </div>
  </div>

  <div class="fbg"></div>
  <div class="footer">
    <div class="footer_resize">
      <p class="lf">&copy; Copyright University of Chelsea. Designed by Evance, Simbani,Emmanuel, Stephen</p>
      <ul class="fmenu">
        <li class="active"><a href="index.html">Home</a></li>
        <li></li>
        <li><a href="blog.html"></a></li>
        <li><a href="contact.html"></a></li>
      </ul>
      <div class="clr"></div>
    </div>
  </div>
</div>
</body>
</html>
