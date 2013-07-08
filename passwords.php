<?php
// username and password sent from form 
$username=$_POST['inputStudentID'];
$userpass=$_POST['inputPassword'];

// If result matched $myusername and $mypassword, table row must be 1 row
if ($username == $userpass){
 header("location:studentHomeScroll.html");
 }
else if ($username == 'elecom' && $userpass == $username )
	header("location: elecomSetting.html");
 else {
echo "ERROR MUTHAFUCKA"; 
}

?>