<?php

 	session_start();
	$var1 = $_SESSION['inputStudentID'];
    
    session_destroy();
    header('Location: index.php');
    exit();

?>