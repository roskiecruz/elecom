<?php 
//Sessions start
	//----------------------------------------------------------
	session_start();
	$var1 = $_SESSION['inputStudentID'];
	//----------------------------------------------------------

//verifies if the voters ID and password are carried to this file	
	//----------------------------------------------------------
	echo "verifying the student_ID in student_info "; 
		echo $var1; 
			echo "<br/>";
			

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


	//----------------------------------------------------------

//this the where voters chosen candidate will be placed
	//----------------------------------------------------------		
	echo "<br/>";	
	echo "<br/>";
	echo "the Voters Results";
	echo "<br/>";
	echo "<br/>";

		echo $pres=$_POST['CampPresVar']; 
			echo "<br/>";
		echo $LA=$_POST['LegAsemblVar']; 
			echo"<br/>";
		echo $Batch=$_POST['ColRepVar']; 
			echo"<br />";
			
mysql_query("

INSERT INTO `tally` (student_id, candidate_name) VALUES
( '" . $var1 . "' , '" . $pres ."' ),
( '" . $var1 . "' , '" . $LA ."' ),
( '" . $var1 . "' , '" . $Batch ."' );

")		
			
	//----------------------------------------------------------	
		
		
?>
	

