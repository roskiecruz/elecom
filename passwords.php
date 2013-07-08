<?php
// username and password sent from form 
$username=$_POST["inputStudentID"]; 
$password=$_POST["inputPassword"]; 
$defaultUser="CD";
$defaultpass="CD";

// If result matched $myusername and $mypassword, table row must be 1 row
if ($_POST["inputStudentID" == $password){
header("location:studentHome.html");
}
else {
echo "Wrong Username or Password";
}
?>