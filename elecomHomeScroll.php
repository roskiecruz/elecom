<!DOCTYPE html>
<html>
<?php
session_start();
 $_SESSION['inputStudentID'];
?>

<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>AniVote | Home</title>
	<link rel="stylesheet" href="css/bootstrap.css"/>
	<link rel="stylesheet" href="css/bootstrap-responsive.css"/>
</head>
<body data-spy="scroll" data-target=".navspy">
	<script src="js/jquery-2.0.2.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<style language="css" type="text/css">
		@media (max-width: 767px){
			.affix{
    			position:static;
			}
		}
	</style>
	
	<!-- Start navbar code here -->
	<div class="navbar navbar-fixed-top navbar-inverse">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-th-list"></span>
				</a>
				<a href="#" class="brand">DLSU | AniVote</a>
				<div class="nav-collapse collapse">
					<ul class="nav pull-right">
						<li><a href="studentHomeScroll.php"><i class="icon-home"></i> Home</a></li>
						<li class="active"><a href="studentVote.php">Candidates</a></li>
						<li><a href="logout.php">Log Out</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- End navbar code here -->
	
	<div class="hero-unit">
		<img src="img/Elecom_Logo.jpg" source width="152" height="114">
			<h1>Candidates</h1>
				<p>Get to know your candidates for this year's General Elections!
				Click the navigation bar on the left to view a description of your candidates and what they believe in.</p>
	</div>
	

<div class="container">
		<div class="row-fluid">
			<!--start navigation content here-->
			<div class="span4">
				<section class="navspy">
				<ul class="nav nav-list" data-spy="affix" data-offset-top="570">
					<li class="divider"></li>
					<li class="nav-header">Alyansang Taba</li>
					<li><a href="#taba1">Ernie for Campus President</a></li>
					<li><a href="#taba2">Bert for Legislative Assembly Representative</a></li>
					<li><a href="#taba3">Big Bird for Legislative Assembly Representative</a></li>
					<li><a href="#taba4">Oscar the Grouch for CCS Representative</a></li>
					<li class="nav-header">Isang Pugon</li>
					<li><a href="#tabo1">Kermit for Campus President</a></li>
					<li><a href="#tabo2">Ms. Piggie for Legislative Assembly Representative</a></li>
					<li><a href="#tabo3">Son Goku for Legislative Assembly Representative</a></li>
					<li><a href="#tabo4">Chuck Norris for CCS Representative</a></li>
					<li class="divider"></li>
				</ul>
				</section>
			</div>
			<!--end navigation content here-->

			<div class="span8" data-spy="scroll" data-target=".navspy">
				<!--start content here-->
				<h2>Alyansang Taba</h2>
				<div class="media" id="taba1">
					<img class="pull-left" src="img/ernie.jpg"/>
					<div class="media-body">
						<h4 class="media-heading">Ernie for Campus President</h4>
						<p>Hi! I am ernie and i would like to talk about your issues!!!</p>
					</div>
				</div>
				
						
				<div class="media" id="taba2">
					<img class="pull-left" src="img/bert.jpg"/>
					<div class="media-body">
						<h4 class="media-heading">Bert for Legislative Assembly Representative</h4>		
						<p>Hi! I am Bert and i would like to talk about your issues!!! and mine as well</p>		
					</div>
				</div>
				
				<div class="media" id="taba3">
					<img class="pull-left" src="img/Big_Bird_help.jpg"/>
					<div class="media-body">
						<h4 class="media-heading">Big Bird for Legislative Assembly Representative</h4>		
						<p>Hello everybody!!! A vote for me is a vote to kill Romney!!!</p>	
					</div>
				</div>
				
				<div class="media" id="taba4">
					<img class="pull-left" src="img/oscar.jpg"/>
					<div class="media-body">
						<h4 class="media-heading">Oscar the Grouch for CCS Representative</h4>		
						<p>Vote for me or don't vote for me...either way your f@#ked</p>
					</div>
				</div>
				<h2>Isang Pugon</h2>
				
				<div class="media" id="tabo1">
					<img class="pull-left" src="img/kermit_sexy.jpg"/>
					<div class="media-body">
						<h4 class="media-heading">Kermit the Frog for Campus President</h4>		
						<p>Hello everybody!!! If you love me, you will love me when I am president</p>
					</div>
				</div>
				
				<div class="media" id="tabo2">
					<img class="pull-left" src="img/piggy.jpg"/>
					<div class="media-body">
						<h4 class="media-heading">Ms. Piggie for Legislative Assembly Representative</h4>		
						<p>Vote for me!!! OR THE FROGGIE GETS IT!!!</p>
					</div>
				</div>
				
				<div class="media" id="tabo3">
					<img class="pull-left" src="img/son_goku.jpg"/>
					<div class="media-body">
						<h4 class="media-heading">Son Goku for Legislative Assembly Representative</h4>		
						<p>Hey everyone, I am Goku and I here to tell you that I am perfect for the role of LA.	</p>
					</div>
				</div>
				
				<div class="media" id="tabo4">
					<img class="pull-left" src="img/chuck.jpg"/>
					<div class="media-body">
						<h4 class="media-heading">Chuck Norris For CCS Representative</h4>		
						<p>I believe this man needs no introduction nor that he needs any help to win.
									With his bread made of the strongest fiber, known to the shield bullets and 
									tear off clothes of women. With his indestructable roundhouse kick, i dont</p>
					</div>
				</div>
				
				
			</div> <!-- end of span8 -->
		</div> <!-- end of row-fluid -->
	</div> <!-- end of container -->



</body>
</html>
