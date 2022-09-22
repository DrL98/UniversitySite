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
if (isset($_POST['username'] ) AND isset($_POST['password'] ) AND isset($_POST['Fname'] ) AND isset($_POST['Lname'])){
$user = $_POST['username']; 
$pass = $_POST['password'];
$Fname = $_POST['Fname']; 
$Lname = $_POST['Lname'];
$pass2 = md5($pass);
if(!empty ($_POST['username'] ) AND !empty($_POST['password'] ) AND !empty($_POST['Fname'] ) AND !empty($_POST['Lname'] )){
// query to get username from database

		 // inserting values into database if username does not exist
		
             $queryinsert =  "INSERT INTO `room`.`organiser` (`organiserID`, `firstName`, `lastName`, `contact`, `password`) VALUES ('ID1', 'NAME1', 'FNAME1', '001909', 'PASS1231');"; 
			   
			mysql_query($queryinsert);
			
			 echo "<script>alert('you have been registered $Fname');</script>";
			 
}
}}
?>

        <form action= "database.php" method="post" id="commentform">
    
         User Name : <input type = "text" name = "username">
         Password  : <input type = "password" name = "password">
         First Name: <input type = "text" name = "Fname">
         Last Name : <input type = "text" name = "Lname"></pre><p>&nbsp;</p><p>
            <input type="hidden" name="comment_post_ID" />
            <input name="submit" type="submit" id="submit" tabindex="5" value="Submit" />
            <input type="reset" name="reset" id="reset" value="Reset" />
        </form>