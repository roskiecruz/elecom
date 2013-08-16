<?php
//Connect to the database	
	//-------------------------------------------------
	mysql_connect("localhost", "root", "")
			or die(mysql_error());
	//-------------------------------------------------
	
//Select Database
	//-------------------------------------------------
	mysql_select_db("elecom") 
		or die(mysql_error());
	//-----------------------
// Make a MySQL Connection

 
	 
$result = mysql_query("SELECT COUNT(candidate_name) 
FROM tally
WHERE candidate_name = 'erns'") or die(mysql_error());

// Print out result
while($row = mysql_fetch_array($result)){
	echo "There are ". $row['COUNT(candidate_name)'] ;
	echo "<br />";
}
									?>