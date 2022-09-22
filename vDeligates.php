<?php
include_once 'adminHome.php';
$host='localhost';
$pass='';
$user='root';
$db='room';

$connection=mysql_connect($host, $user, $pass) or die ("Error, failed to connect to database");
mysql_select_db($db);
//$roomID=$_POST['roomID'];
$lectureID =$_POST['lectureID'];
$roomID=$_POST['room'];
 if($roomID=='1')
 {
 
	$query="SELECT firstName, lastName, gender, title, overView
FROM lectures AS l, deligates AS d, lectureDeligates AS dl
WHERE l.lectureID = dl.lectureID
AND dl.deligateID = d.deligateID
AND l.lectureID = '$lectureID' LIMIT 2";
	
    $ret = mysql_query ($query, $connection);
	
	$num=mysql_num_rows($ret);
	
	echo $num." "."result(s) found";
	
	
	
	echo "<table width = \"100%\">";    
    echo "<tr>";    
       
    	
		    	echo "<th align = \"left\">First Name</th>";
    	echo "<th align = \"left\">Last Name</th>"; 
	echo "<th align = \"left\">Gender</th>";
		    	echo "<th align = \"left\">Title</th>";
    echo "<th align = \"left\">Over View</th>";
	
      
   
	
    echo "</tr>";    

    for ($i = 0; $i < $num; $i++) {
      $row = mysql_fetch_assoc($ret);
	
      echo "<tr>";
     
     
		   echo "<td>" . $row["firstName"]. "</td>";
    echo "<td>" . $row["lastName"]. "</td>";
	    echo "<td>" . $row["gender"]. "</td>";
		   echo "<td>" . $row["title"]. "</td>";
    echo "<td>" . $row["overView"]. "</td>";
     
            
			   
      echo "</tr>";
    }

  echo "</table>";

	
if ($ret)
	{
      echo "<p>Search Results Above</p>";
    }
    
	  else
	  {
	  echo " No results for search";
	  }
}
else if($roomID == '2')
{
	$query="SELECT firstName, lastName, gender, title, overView
FROM lectures AS l, deligates AS d, lectureDeligates AS dl
WHERE l.lectureID = dl.lectureID
AND dl.deligateID = d.deligateID
AND l.lectureID = '$lectureID'LIMIT 30";
	
    $ret = mysql_query ($query, $connection);
	
	$num=mysql_num_rows($ret);
	
	echo $num." "."result(s) found";
	
	
	
	echo "<table width = \"100%\">";    
    echo "<tr>";    
       
    	echo "<th align = \"left\">First Name</th>";
    	echo "<th align = \"left\">Last Name</th>"; 
	echo "<th align = \"left\">Gender</th>";
		    	echo "<th align = \"left\">Title</th>";
    echo "<th align = \"left\">Over View</th>";
		
	
      
   
	
    echo "</tr>";    

    for ($i = 0; $i < $num; $i++) {
      $row = mysql_fetch_assoc($ret);
	
      echo "<tr>";
     
       
		   echo "<td>" . $row["firstName"]. "</td>";
    echo "<td>" . $row["lastName"]. "</td>";
	    echo "<td>" . $row["gender"]. "</td>";
		   echo "<td>" . $row["title"]. "</td>";
    echo "<td>" . $row["overView"]. "</td>";
	   
     
            
			   
      echo "</tr>";
    }

  echo "</table>";

	
if ($ret)
	{
      echo "<p>Search Results Above</p>";
    }
    
	  else
	  {
	  echo " No results for search";
	  }
}
?>