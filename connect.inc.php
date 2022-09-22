<?

$mysql_host = "localhost";
$mysql_user  = "root";
$mysql_password = "";
$mysql_db = "roomg";
$conn = mysql_pconnect($mysql_host, $mysql_user, $mysql_password) or trigger_error(mysql_error(),E_USER_ERROR); 

if(!mysql_connect($mysql_host,$mysql_user,$mysql_password)|| !mysql_select_db($mysql_db)){
echo "no db";
}else{
echo "ok db";
}

?>