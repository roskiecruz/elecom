<!--
This PHP file is used to confirm the voters username as well as their password

-->
<!--START OF PHP FILE-->
<?php

	session_start();//STARTS OF SESSION
	
//Retrieves USERNAME & PASSWORD from loginForm.php
	//-------------------------------------------------		
	$username=$_POST['inputStudentID'];
	$userpass=$_POST['inputPassword'];
	//-------------------------------------------------

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

//Query to see if password & username matches in db
		//-------------------------------------------------
		$result = mysql_query("
		SELECT student_info.is_enrolled, voter.student_id, voter.password 
			FROM voter, student_info
				WHERE student_info.student_id LIKE voter.student_id 
				AND voter.student_id LIKE '" . $username . "' 
		        AND voter.password LIKE '" . $userpass . "'	
							
		"); //END OF QUERY
		$course=mysql_query("
		SELECT deg_prog_code
		FROM degree_program Natural JOIN student_info
			WHERE student_id LIKE '" . $username . "'
		");
//Check if query returned a result (meaning the password and username match)
		//-------------------------------------------------
$degree=mysql_fetch_array($course);
$voting=mysql_fetch_array($result);
	if($voting['is_enrolled'] == 'Y')
		{
		//Saves user's details to session
			$_SESSION['inputStudentID'] = $username;
			$_SESSION['deg_prog_code'] = $Deg;
				header("location:studentHomeScroll.php");	
		}
		else if( $username == '200907409696' && $userpass == '1ateneo1' )
		{
			header('location:elecomSettings2.php');
		}
		else{
			echo "Wrong Username or Password. Try again.";
				header("location:index.php");
	}

?><!--END OF PHP -->