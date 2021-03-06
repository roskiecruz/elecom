<!DOCTYPE html>
<html>
<?php
//session starts here
	//----------------------------------------------
	session_start();
		$_SESSION['inputStudentID'];
	//----------------------------------------------

	
	
?>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>AniVote | Home</title>
	<link rel="stylesheet" href="css/bootstrap.css"/>
	<link rel="stylesheet" href="css/bootstrap-responsive.css"/>
</head>
<body>
	<script src="js/jquery-2.0.2.min.js"></script>
	<script src="js/bootstrap.js"></script>
	
<!-- Start navbar code here -->
	<div class="navbar navbar-fixed-top navbar-inverse">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-th-list"></span>
				</a>
				<a href="#" class="brand">ELECOM AniVote</a>
				<div class="nav-collapse collapse">
					<ul class="nav pull-right">
						<li><a href="studentHomeScroll.php"><i class="icon-home"></i> Home</a></li>
						<li class="active"><a href="#">Vote</a></li>
						<li><a href="logout.php">logout</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
<!-- End navbar code here -->
	
	<div class="hero-unit">
	<h1>Ballot</h1>
	<p>Get to vote for your candidates!</p>
	</div>
	
	<div class="container">
		<div class="row-fluid">
			<div class="span4">
				<ul class="nav nav-list">
					<li class="nav-header">Positions to Vote For</li>
					<li class="">1 Campus President</li>
					<li class="">2 Legislative Assembly Representatives</li>
					<li class="">College Representative</li>
					<li class="divider"></li>
					<li class="nav-header">Notice</li>
					<li class="">Once you make your choice, you will no longer be able to edit your vote so... vote wisely. </li>
				</ul>
			</div> 
			
<!-- code for notice on the left -->

			<div class="span8">
			
				<form id="ballot" action="success.php" method="post">
				<h3>Campus President</h3>
				<div class="btn-group" data-toggle="buttons-radio" id="CampPres">
  					<button type="button" class="btn btn-success" id="erns">Ernie</button>
  					<button type="button" class="btn btn-success" id="kerms">Kermit Frog</button>
					<button type="button" class="btn btn-success" id="abstainPres">Abstain</button>
				</div>
				<input type="hidden" name="CampPresVar" id="CampPresVar">
				
				<script type="text/javascript" language="javascript">
					$('#CampPres button').click(function(){
						$("#CampPresVar").attr('value', $(this).attr('id'));
					})
				</script>
				
<!-- as button gets clicked, value of input -->
				
				<h3>Legislative Assembly Representatives</h3>
				<div class="btn-group" data-toggle="buttons-radio" id="LegAsembl">
  					<button type="button" class="btn btn-success" id="bert">Bert</button>
  					<button type="button" class="btn btn-success" id="bird">Big Bird</button>
					<button type="button" class="btn btn-success" id="pig">Ms. Piggie</button>
					<button type="button" class="btn btn-success" id="goku">Son Goku</button>
					<button type="button" class="btn btn-success" id="abstainLA">Abstain</button>
				</div>
				
				<input type="hidden" name="LegAsemblVar" id="LegAsemblVar">
				
				<script type="text/javascript" language="javascript">
					$('#LegAsembl button').click(function(){
						$("#LegAsemblVar").attr('value', $(this).attr('id'));
					})
				</script>
				
				<h3>College Representative</h3>
				<div class="btn-group" data-toggle="buttons-radio" id="ColRep">
  					<button type="button" class="btn btn-success" id="oscar">Oscar the Grouch</button>
  					<button type="button" class="btn btn-success" id="chuck">Chuck Norris</button>
					<button type="button" class="btn btn-success" id="abstainB1">Abstain</button>
				</div>
				<br/>
				<br/>
				<br/>
				
  					<input type="hidden" name="ColRepVar" id="ColRepVar">
				
				<script type="text/javascript" language="javascript">
					$('#ColRep button').click(function(){
						$("#ColRepVar").attr('value', $(this).attr('id'));
					})
				</script>
				
				<input href="#confirmModal" type="submit" class="btn btn-large btn-success" value="Submit my vote" data-toggle="modal"/>
				
<!-- Start pop-up -->
				<div id="confirmModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  					<div class="modal-header">
    					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> <!-- close button -->
    					<h3 id="modalLabel">Confirm Data Submission</h3>
  					</div>
 					 <div class="modal-body">
							<p>Are you sure with your choices?</p>
 					 </div>
  				<div class="modal-footer">
    				<button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
    				<button class="btn btn-success">Yes</button>
 		 		</div>
				</div>
<!-- End pop-up -->
				</form>
				
			</div> <!-- end of "span8" -->
		</div> <!-- end of "row-fluid" -->
	</div> <!-- end of class "container" -->



</body>
</html>