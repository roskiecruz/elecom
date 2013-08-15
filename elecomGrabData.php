<?php 
header('Content-Type: application/x-www-form-urlencoded');
//Sessions start
	//----------------------------------------------------------
	session_start();
	$var1 = $_SESSION['inputStudentID'];
	//----------------------------------------------------------			

//Connect to the database	
	//-------------------------------------------------
	mysql_connect("localhost", "root", "")
			or die(mysql_error());
	//-------------------------------------------------
	
//Select Database
	//-------------------------------------------------
	mysql_select_db("elecom") 
		or die(mysql_error());
	//-------------------------------------------------
	
	$query = mysql_query("SELECT * FROM candidate");
	$rows = array();
	while($r = mysql_fetch_assoc($query))
		$rows[] = $r;
	echo json_encode($rows);
?>