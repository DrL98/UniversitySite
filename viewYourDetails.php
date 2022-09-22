
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

	$deligateID=$_SESSION['deligateID'];	
	$query="select * from deligates where deligateID='$deligateID'";
	
    $ret = mysql_query ($query, $connection);
	
	$num=mysql_num_rows($ret);
	
	echo $num." "."result(s) found";
	
	
	
	echo "<table width = \"100%\">";    
    echo "<tr>";    
       
    	echo "<th align = \"left\">Deligate ID</th>";
		    	echo "<th align = \"left\">First Name</th>";
	echo "<th align = \"left\">Last Name</th>";
		echo "<th align = \"left\">Gender</th>";
	echo "<th align = \"left\">Address</th>";
		echo "<th align = \"left\">Phone Number</th>";
		echo "<th align = \"left\">Password</th>";
	   
      
   
	
    echo "</tr>";    

    for ($i = 0; $i < $num; $i++) {
      $row = mysql_fetch_assoc($ret);
	
      echo "<tr>";
     
        echo "<td>" . $row["deligateID"]. "</td>";
		   echo "<td>" . $row["firstName"]. "</td>";
    echo "<td>" . $row["lastName"]. "</td>";
	    echo "<td>" . $row["gender"]. "</td>";
		  echo "<td>" . $row["address"]. "</td>";
		    echo "<td>" . $row["phoneNumber"]. "</td>";
			  echo "<td>" . $row["password"]. "</td>";
			   
     
            
			   
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
