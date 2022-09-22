
<?
	session_start();
?>


<?
$userName1=$_POST['username'];
$_SESSION['username']=$userName1;
$Username =$_SESSION['username'];
$password =$_POST['password'];

$db = mysql_connect ("localhost","root","");
mysql_select_db ("university");


 $query = "select * from user where username ='$Username' && password = '$password'";
 $test=mysql_query($query);
 $results = mysql_num_rows ($test);
 
 
 
if ($results == 0)
{


echo "error";

}
else
header('location:successfull.html');

?>
