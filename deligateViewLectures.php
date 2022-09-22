
<?php
include_once 'deligateHome.php';
$host = "localhost";
    $user = "root";
    $pass = "";
    $database = "room";
	
	
	
		

//connecting to the database
    $connection  = mysql_connect($host, $user, $pass) 
      or die ("Couldn't connect to database");  
    mysql_select_db ($database);
	
	//inserting data into the table parts

	$query="select * from lectures";
	
    $ret = mysql_query ($query, $connection);
	
	$num=mysql_num_rows($ret);
	
	echo $num." "."result(s) found";
	
	
	
	echo "<table width = \"100%\">";    
    echo "<tr>";    
       
    	echo "<th align = \"left\">Lecture ID</th>";
		    	echo "<th align = \"left\">Organiser ID</th>";
	echo "<th align = \"left\">Presenter ID</th>";
		echo "<th align = \"left\">Title</th>";
	echo "<th align = \"left\">Date</th>";
		echo "<th align = \"left\">Room Number</th>";
		echo "<th align = \"left\">Over View</th>";
	   
      
   
	
    echo "</tr>";    

    for ($i = 0; $i < $num; $i++) {
      $row = mysql_fetch_assoc($ret);
	
      echo "<tr>";
     
        echo "<td>" . $row["lectureID"]. "</td>";
		   echo "<td>" . $row["organiserID"]. "</td>";
    echo "<td>" . $row["presenterID"]. "</td>";
	    echo "<td>" . $row["title"]. "</td>";
		  echo "<td>" . $row["dates"]. "</td>";
		    echo "<td>" . $row["room"]. "</td>";
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
