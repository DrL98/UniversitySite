
<?php
include_once 'adminHome.php';
$host = "localhost";
    $user = "root";
    $pass = "";
    $database = "room";
	
	
	
		

//connecting to the database
    $connection  = mysql_connect($host, $user, $pass) 
      or die ("Couldn't connect to database");  
    mysql_select_db ($database);
	
	//inserting data into the table parts

	$query="select o.organiserID, firstName, lastName, contact, title, overView from organiser as o, lectures as l where o.organiserID=l.organiserID";
	
    $ret = mysql_query ($query, $connection);
	
	$num=mysql_num_rows($ret);
	
	echo $num." "."result(s) found";
	
	
	
	echo "<table width = \"100%\">";    
    echo "<tr>";    
       
    	echo "<th align = \"left\">Organiser ID</th>";
		    	echo "<th align = \"left\">First Name</th>";
	echo "<th align = \"left\">Last Name</th>";
		echo "<th align = \"left\">Contact Number</th>";
	echo "<th align = \"left\">Title</th>";
		echo "<th align = \"left\">Over View</th>";
	   
      
   
	
    echo "</tr>";    

    for ($i = 0; $i < $num; $i++) {
      $row = mysql_fetch_assoc($ret);
	
      echo "<tr>";
     
        echo "<td>" . $row["organiserID"]. "</td>";
		   echo "<td>" . $row["firstName"]. "</td>";
    echo "<td>" . $row["lastName"]. "</td>";
	    echo "<td>" . $row["contact"]. "</td>";
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
?>
