<?php 
//Sessions start
	//----------------------------------------------------------
	session_start();
	$var1 = $_SESSION['inputStudentID'];
	$var2 = $_SESSION['inputPassword'];
	//----------------------------------------------------------

//verifies if the voters ID and password are carried to this file	
	//----------------------------------------------------------
	echo "verifying the student_ID in student_info "; 
		echo $var1; 
			echo "<br/>";
			
	echo "verifying the password in Voter ";
		echo $var2;
			echo "<br/>";	
	//----------------------------------------------------------

//this the where voters chosen candidate will be placed
	//----------------------------------------------------------		
	echo "<br/>";	
	echo "<br/>";
	echo "the Voters Results";
	echo "<br/>";
	echo "<br/>";

		echo $_POST['CampPresVar']; 
			echo "<br/>";
		echo $_POST['LegAsemblVar']; 
			echo"<br/>";
		echo $_POST['ColRepVar']; 
			echo"<br />";
	//----------------------------------------------------------	
		
		
?>
	

