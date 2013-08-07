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
		SELECT first_name,last_name, mid_name, deg_prog_name
			FROM voter, student_info, degree_program
				WHERE voter.student_id = '" . $username . "' 
						AND voter.password = '" . $userpass . "'
						AND voter.student_id = student_info.student_id
						AND student_info.deg_prog_id = degree_program.deg_prog_id
		");//END OF QUERY
		
//Check if query returned a result (meaning the password and username match)
		//-------------------------------------------------
		
	if ($userpass == $elecom_pass && $username== $elecomname)
		{//directs the user to the elecm control panel
			header("location: elecomSetting.html");
		}
	else if($result)
		{
			echo "Successfully logged in.";	
		//Saves user's details to session
			$_SESSION['inputStudentID'] = $username;
			$_SESSION['inputPassword'] = $userpass;
		//directs the user to the voter homepage	
		 header("location:studentHomeScroll.html");	
		}
		else
			echo "Wrong Username or Password. Try again.";
	

?><!--END OF PHP -->