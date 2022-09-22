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
echo "Welcome"." ".$_SESSION['deligateID'];
?>
  <div class="header">
    <div class="header_resize">
      <div class="logo">
        <h1>Our University</h1></div>
      <div class="menu_nav">
        <ul>
          <li class="active"><a href="deligateHome.php">Home</a></li>
         
		   <li><a href="deligateViewLectures.php">View Lectures</a></li>
          <li><a href="updateDetails.php">Update your details</a></li>
		  <li><a href="viewYourDetails.php">View your details</a></li>
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
         
        </div>
      </div>
      <div class="sidebar">
        <div class="gadget">
         <script language="JavaScript">    
    function setupAjax() {
      var request;
      
      var request;

if (window.XMLHttpRequest) {
  // Code for modern browsers
  request=new XMLHttpRequest();
}
else {
  // code for older versions of Internet Explorer
  request = new ActiveXObject("Microsoft.XMLHTTP");
}


      // Here, we set up the code to handle the response from the server.
      request.onreadystatechange=function() {
        if (request.readyState==4 && request.status==200) {
          document.getElementById("contents").innerHTML= 
            request.responseText;
        }
      }      
      
      // Here we send the request to the server to GET the file called 
      // test.txt.
      request.open ("GET", "registerLecture.html", true);
      request.send();      
    }
</script>

<button type="button" onclick="setupAjax()">
  Register for lecture Here</button>
<p id = "contents">In order to register for a lecture, please enter the 'LectureID' of that particular lecture</p>
 
          </ul>
        </div>
        <div class="gadget">
          <h2 class="star"></h2>
          <ul class="ex_menu">
           
          </ul>
        </div>
      </div>
      <div class="clr"></div>
    </div>
  </div>

  <div class="fbg"></div>
  <div class="footer">
    <div class="footer_resize">
      <p class="lf">Details will Appear Below</p>
      <ul class="fmenu">
        
      </ul>
      <div class="clr"></div>
    </div>
  </div>
</div>
</body>
</html>
