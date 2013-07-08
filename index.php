<!DOCTYPE html>
<!-- 
Copyright 2013
Layout by Kristoffer Ross Cruz and Ian De Jesus
Made with Bootstrap v2.3.2
 *
 * Copyright 2012 Twitter, Inc
 * Licensed under the Apache License v2.0
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * CSS Designed and built with all the love in the world @twitter by @mdo and @fat.
-->
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>AniVote | Login</title>
	<link rel="stylesheet" href="css/bootstrap.css"/>
	<link rel="stylesheet" href="css/bootstrap-responsive.css"/>
</head>
<body>
	<script src="js/jquery-2.0.2.min.js"></script>
	<script src="js/bootstrap.js"></script>
	
	<center>
	
	<div class="hero-unit">
		<!-- Start header -->
		<img src="img/stc-header2.png"/>
		<h1>Exercise your right to vote!</h1>
		<br/>
		<!-- End header -->
		<!-- Start login page -->
		<div class="container row-fluid">
			<div class="span4">
			</div>
			<div class="span4">
			<!--I added this to test out the passwords.php-->
				<form class="form-signin" class="login-form" action="passwords.php" method="post">
      			<input name="inputStudentID" type="text" class="input-block-level" id="inputStudentID" name="inputStudentID" placeholder="Student Number">
      			<input name="inputPassword" type="password" class="input-block-level" id="inputPassword"name="inputPassword" placeholder="Password">
				<button type="submit">Start voting!</a>
				</form>
			</div>
			<div class="span4">
			</div>
		</div>
		<!-- End login page -->
	</div>
	</center>
	
<!-- Start pop-up --><!--
	<div id="termsAndConditions" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  		<div class="modal-header">
    		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    		<h3 id="modalLabel">Terms and Conditions</h3>
  		</div>
 		 <div class="modal-body">
    		<p>You are under oath that you will not share your vote to anyone and that you are protecting the confidentiality of your vote, just as we will.
			</p>
 		 </div>
  		<div class="modal-footer">
    		<button class="btn" data-dismiss="modal" aria-hidden="true">I Disagree</button>
    		<button class="btn btn-success">I Agree</button>
			
 		 </div>
	</div>
<!-- End pop-up -->




</body>
</html>