<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>AniVote | Home</title>
	<link rel="stylesheet" href="css/bootstrap.css"/>
	<link rel="stylesheet" href="css/bootstrap-responsive.css"/>
    <link rel="stylesheet" href="css/bootstrap-editable.css"/>

	
	</head>
	
	
<body>
<?php
//Connect to the database	
	//-------------------------------------------------
	mysql_connect("localhost", "root", "")
			or die(mysql_error());
	//-------------------------------------------------
	
//Select Database
	//-------------------------------------------------
	mysql_select_db("elecom") 
		or die(mysql_error());
	//-----------------------
// Make a MySQL Connection

 ?>

	<script src="js/jquery-2.0.2.min.js"></script>
	<script src="js/bootstrap.js"></script>
    <script src="js/bootstrap-editable.js"></script>

	
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
						<li class="active"><a href="elecomSettings.html"><i class="icon-home"></i> Dashboard</a></li>
						<li><a href="elecomEditCandidate.html">Candidates</a></li>
						<li><a href="#">Calendar</a></li>
						<li><a href="#">Manage</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- End navbar code here -->
	
	<center>
	<div class="hero-unit">
		<img src="img/Elecom_Logo.jpg" width="304" height="228">
		<h1>Welcome Back Mr. Chairman!</h1>
		<br/>
		
	</div>
	</center>
	
	<div class="container">            
			    <h1>Voter Turnout</h1>
					<div class="row-fluid">
                    
					    <div class="span3">
    				        <h2>CLA</h2>
                            <div class="progress progress-striped progress-success active">
                                <div class="bar" style="width: 80%;"></div>
                            </div>
                            <p>8 out of 10</p>
					    </div>
                        
                        <div class="span3">
        			        <h2>RVR-COB</h2>
                            <div class="progress progress-striped progress-success active">
                                <div class="bar" style="width: 80%;"></div>
                            </div>
                            <p>8 out of 10</p>
					    </div>
                        
                        <div class="span3">
        			        <h2>CCS</h2>
                            <div class="progress progress-striped progress-success active">
                                <div class="bar" style="width: 100%;"></div>
                            </div>
                            <p>10 out of 10</p>
					    </div>
                        
                        <div class="span3">
        			        <h2>GCOE</h2>
                            <div class="progress progress-striped progress-success active">
                                <div class="bar" style="width: 80%;"></div>
                            </div>
                            <p>8 out of 10</p>
					    </div>
                        
				    </div>
                    
                   <div class="row-fluid"><br>
                   		<h1>Tally of Votes</h1>
                        <div class="row-fluid">
					    <div class="span4">
    				        <h2>Campus President</h2>
                            <div class="row-fluid">
                            	<div class="span4">
                                	<h4>Ernie (TABA)</h4>
                                </div>
                                <div class="span8">
                                	<h4 align="center">
<?php
$result = mysql_query("SELECT COUNT(candidate_name) 
FROM tally
WHERE candidate_name = 'erns'") or die(mysql_error());

// Print out result
while($row = mysql_fetch_array($result)){
	echo  $row['COUNT(candidate_name)'] . " Votes" ;
	echo "<br />";
}
?>
									
									</h4>
                                </div>
                            </div>
                            <div class="progress progress-striped progress-warning active">
                                	<div class="bar" style="width: 80%;"></div>
                            </div>
                            <div class="row-fluid">
                            	<div class="span4">
                                	<h4>Kermit (PUGON)</h4>
                                </div>
                                <div class="span8">
                                	<h4 align="center">
									
									<?php

$result = mysql_query("SELECT COUNT(candidate_name) 
FROM tally
WHERE candidate_name = 'kerms'") or die(mysql_error());

// Print out result
while($row = mysql_fetch_array($result)){
	echo  $row['COUNT(candidate_name)'] . " Votes" ;
	echo "<br />";
}
?>
									
									</h4>
                                </div>
                            </div>
                            <div class="progress progress-striped progress-info active">
                                	<div class="bar" style="width: 30%;"></div>
                            </div>
                            <div class="row-fluid">
                            	<div class="span4">
                                	<h4>Abstain</h4>
                                </div>
                                <div class="span8">
                                	<h4 align="center"><?php

$result = mysql_query("SELECT COUNT(candidate_name) 
FROM tally
WHERE candidate_name = 'abstainPres'") or die(mysql_error());

// Print out result
while($row = mysql_fetch_array($result)){
	echo  $row['COUNT(candidate_name)'] . " Votes" ;
	echo "<br />";
}
?></h4>
                                </div>
                            </div>
                            <div class="progress progress-striped progress-abstain active">
                                	<div class="bar" style="width: 30%;"></div>
                            </div>
					    </div>
                        
                        <div class="span4">
        			        <h2>College Reps</h2>
                            <div class="row-fluid">
                            	<div class="span4">
                                	<h4>Oscar (TABA CCS)</h4>
                                </div>
                                <div class="span8">
                                	<h4 align="center"><?php

$result = mysql_query("SELECT COUNT(candidate_name) 
FROM tally
WHERE candidate_name = 'oscar'") or die(mysql_error());

// Print out result
while($row = mysql_fetch_array($result)){
	echo  $row['COUNT(candidate_name)'] . " Votes" ;
	echo "<br />";
}
?></h4>
                                </div>
                            </div>
                            <div class="progress progress-striped progress-warning active">
                                	<div class="bar" style="width: 80%;"></div>
                            </div>
                            <div class="row-fluid">
                            	<div class="span4">
                                	<h4>Norris (PUGON CCS)</h4>
                                </div>
                                <div class="span8">
                                	<h4 align="center"><?php

$result = mysql_query("SELECT COUNT(candidate_name) 
FROM tally
WHERE candidate_name = 'chuck'") or die(mysql_error());

// Print out result
while($row = mysql_fetch_array($result)){
	echo  $row['COUNT(candidate_name)'] . " Votes" ;
	echo "<br />";
}
?></h4>
                                </div>
                            </div>
                            <div class="progress progress-striped progress-info active">
                                	<div class="bar" style="width: 30%;"></div>
                            </div>
                            <div class="row-fluid">
                            	<div class="span4">
                                	<h4>Abstain</h4>
                                </div>
                                <div class="span8">
                                	<h4 align="center">3 out of 10</h4>
                                </div>
                            </div>
                            <div class="progress progress-striped progress-abstain active">
                                	<div class="bar" style="width: 30%;"></div>
                            </div>
					    </div>
                        
                        <div class="span4">
        			        <h2>Legislative Assembly Reps</h2>
                            <div class="row-fluid">
                            	<div class="span4">
                                	<h4>Bert (TABA)</h4>
                                </div>
                                <div class="span8">
                                	<h4 align="center"><?php

$result = mysql_query("SELECT COUNT(candidate_name) 
FROM tally
WHERE candidate_name = 'bert'") or die(mysql_error());

// Print out result
while($row = mysql_fetch_array($result)){
	echo  $row['COUNT(candidate_name)'] . " Votes" ;
	echo "<br />";
}
?></h4>
                                </div>
                            </div>
                            <div class="progress progress-striped progress-warning active">
                                	<div class="bar" style="width: 80%;"></div>
                            </div>
                            
                            <div class="row-fluid">
                            	<div class="span4">
                                	<h4>Bird (TABA)</h4>
                                </div>
                                <div class="span8">
                                	<h4 align="center"><?php

$result = mysql_query("SELECT COUNT(candidate_name) 
FROM tally
WHERE candidate_name = 'bird'") or die(mysql_error());

// Print out result
while($row = mysql_fetch_array($result)){
	echo  $row['COUNT(candidate_name)'] . " Votes" ;
	echo "<br />";
}
?></h4>
                                </div>
                            </div>
                            <div class="progress progress-striped progress-warning active">
                                	<div class="bar" style="width: 80%;"></div>
                            </div>
                            
                            <div class="row-fluid">
                            	<div class="span4">
                                	<h4>Piggie (PUGON)</h4>
                                </div>
                                <div class="span8">
                                	<h4 align="center"><?php

$result = mysql_query("SELECT COUNT(candidate_name) 
FROM tally
WHERE candidate_name = 'pig'") or die(mysql_error());

// Print out result
while($row = mysql_fetch_array($result)){
	echo  $row['COUNT(candidate_name)'] . " Votes" ;
	echo "<br />";
}
?></h4>
                                </div>
                            </div>
                            <div class="progress progress-striped progress-info active">
                                	<div class="bar" style="width: 30%;"></div>
                            </div>
                            
                            <div class="row-fluid">
                            	<div class="span4">
                                	<h4>Goku (PUGON)</h4>
                                </div>
                                <div class="span8">
                                	<h4 align="center"><?php

$result = mysql_query("SELECT COUNT(candidate_name) 
FROM tally
WHERE candidate_name = 'goku'") or die(mysql_error());

// Print out result
while($row = mysql_fetch_array($result)){
	echo  $row['COUNT(candidate_name)'] . " Votes" ;
	echo "<br />";
}
?></h4>
                                </div>
                            </div>
                            <div class="progress progress-striped progress-info active">
                                	<div class="bar" style="width: 30%;"></div>
                            </div>
                            
                            <div class="row-fluid">
                            	<div class="span4">
                                	<h4>Abstain</h4>
                                </div>
                                <div class="span8">
                                	<h4 align="center"><?php

$result = mysql_query("SELECT COUNT(candidate_name) 
FROM tally
WHERE candidate_name = 'abstainLA'") or die(mysql_error());

// Print out result
while($row = mysql_fetch_array($result)){
	echo  $row['COUNT(candidate_name)'] . " Votes" ;
	echo "<br />";
}
?></h4>
                                </div>
                            </div>
                            <div class="progress progress-striped progress-abstain active">
                                	<div class="bar" style="width: 30%;"></div>
                            </div>
					    </div> 
                    </div>
				</div>
			</div>
            
 
            
           
 

</body>
</html>