<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Elecom | Home</title>
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
session_start();

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
				<a href="#" class="brand">ELECOM Settings </a>
				<div class="nav-collapse collapse">
					<ul class="nav pull-right">
						<li class="active"><a href="elecomSettings2.php"><i class="icon-home"></i> Dashboard</a></li>
						<li><a href="elecomHomeScroll.php">Candidates</a></li>
						<li><a href="logout.php">logout</a></li>
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
	

                    
                   <div class="row-fluid"><br>
                   		<h1>Tally of Votes</h1>
                        <div class="row-fluid">
					    <div class="span4">
    				        <h2>Campus President</h2>
                            <div class="row-fluid">
                            	<div class="span4">
                                	<h4>Ernie</h4>
                                </div>
                                <div class="span8">
                                	<h4 align="center">
<?php

$result = mysql_query("SELECT COUNT(candidate_fname) 
FROM tally
WHERE candidate_fname = 'erns'") or die(mysql_error());

// Print out result
while($row = mysql_fetch_array($result)){
echo  $row['COUNT(candidate_fname)'] . " Votes" ;
}
?>
									
									</h4>
                                </div>
                            </div>
                            <div class="progress progress-striped progress-warning active">
                              
                            </div>
                            <div class="row-fluid">
                            	<div class="span4">
                                	<h4>Kermit</h4>
                                </div>
                                <div class="span8">
                                	<h4 align="center">
									<?php

$result = mysql_query("SELECT COUNT(candidate_fname) 
FROM tally
WHERE candidate_fname = 'kerms'") or die(mysql_error());

// Print out result
while($row = mysql_fetch_array($result)){
	echo  $row['COUNT(candidate_fname)'] . " Votes" ;
}
?>
</h4>
                                </div>
                            </div>
                            <div class="progress progress-striped progress-info active">
                                	 </div>
                            <div class="row-fluid">
                            	<div class="span4">
                                	<h4>Abstain</h4>
                                </div>
                                <div class="span8">
                                	<h4 align="center"><?php

$result = mysql_query("SELECT COUNT(candidate_fname) 
FROM tally
WHERE candidate_fname = 'abstainPres'") or die(mysql_error());

// Print out result
while($row = mysql_fetch_array($result)){
echo  $row['COUNT(candidate_fname)'] . " Votes" ;
}
?></h4>
                                </div>
                            </div>
                            <div class="row-fluid">
                            	<div class="span4">
                                	<h4>Total President Votes</h4>
                                </div>
                                <div class="span8">
                                	<h4 align="center"><?php

$result = mysql_query("SELECT COUNT(candidate_fname)
FROM candidate NATURAL JOIN Tally
WHERE candidate.position = 'president' ") or die(mysql_error());

// Print out result
while($row = mysql_fetch_array($result)){
echo  $row['COUNT(candidate_fname)'] . " Votes" ;
}
?></h4>
                                </div>
                            </div>
                            
					    </div>
                        
                        <div class="span4">
        			        <h2>College Reps</h2>
                            <div class="row-fluid">
                            	<div class="span4">
                                	<h4>Oscar</h4>
                                </div>
                                <div class="span8">
                                	<h4 align="center"><?php

$result = mysql_query("SELECT COUNT(candidate_fname) 
FROM tally
WHERE candidate_fname = 'oscar'") or die(mysql_error());

// Print out result
while($row = mysql_fetch_array($result)){
echo  $row['COUNT(candidate_fname)'] . " Votes" ;
}
?></h4>
                                </div>
                            </div>
                            <div class="progress progress-striped progress-warning active">
                                
                            </div>
                            <div class="row-fluid">
                            	<div class="span4">
                                	<h4>Norris</h4>
                                </div>
                                <div class="span8">
                                	<h4 align="center"><?php

$result = mysql_query("SELECT COUNT(candidate_fname) 
FROM tally
WHERE candidate_fname = 'chuck'") or die(mysql_error());

// Print out result
while($row = mysql_fetch_array($result)){
echo  $row['COUNT(candidate_fname)'] . " Votes" ;
}
?></h4>
                                </div>
                            </div>
                            <div class="progress progress-striped progress-info active">
                                
                            </div>
                            <div class="row-fluid">
                            	<div class="span4">
                                	<h4>Abstain</h4>
                                </div>
                                <div class="span8">
                                	<h4 align="center"><?php

$result = mysql_query("SELECT COUNT(candidate_fname) 
FROM tally
WHERE candidate_fname = 'abstainCCS'") or die(mysql_error());

// Print out result
while($row = mysql_fetch_array($result)){
echo  $row['COUNT(candidate_fname)'] . " Votes" ;
}
?>0</h4>
                                </div>
                            </div>
                            <div class="progress progress-striped progress-abstain active">
                                
                            </div>
					    </div>
                        
                        <div class="span4">
        			        <h2>Legislative Assembly Reps</h2>
                            <div class="row-fluid">
                            	<div class="span4">
                                	<h4>Bert</h4>
                                </div>
                                <div class="span8">
                                	<h4 align="center"><?php

$result = mysql_query("SELECT COUNT(candidate_fname) 
FROM tally
WHERE candidate_fname = 'bert'") or die(mysql_error());

// Print out result
while($row = mysql_fetch_array($result)){
echo  $row['COUNT(candidate_fname)'] . " Votes" ;
}
?></h4>
                                </div>
                            </div>
                            <div class="progress progress-striped progress-warning active">
                                
                            </div>
                            
                            <div class="row-fluid">
                            	<div class="span4">
                                	<h4>Bird</h4>
                                </div>
                                <div class="span8">
                                	<h4 align="center"><?php

$result = mysql_query("SELECT COUNT(candidate_fname) 
FROM tally
WHERE candidate_fname = 'bird'") or die(mysql_error());

// Print out result
while($row = mysql_fetch_array($result)){
echo  $row['COUNT(candidate_fname)'] . " Votes" ;
}
?></h4>
                                </div>
                            </div>
                            <div class="progress progress-striped progress-warning active">
                              
                            </div>
                            
                            <div class="row-fluid">
                            	<div class="span4">
                                	<h4>Piggie </h4>
                                </div>
                                <div class="span8">
                                	<h4 align="center"><?php

$result = mysql_query("SELECT COUNT(candidate_fname) 
FROM tally
WHERE candidate_fname = 'pig'") or die(mysql_error());

// Print out result
while($row = mysql_fetch_array($result)){
echo  $row['COUNT(candidate_fname)'] . " Votes" ;
}
?></h4>
                                </div>
                            </div>
                            <div class="progress progress-striped progress-info active">

                            </div>
                            
                            <div class="row-fluid">
                            	<div class="span4">
                                	<h4>Goku </h4>
                                </div>
                                <div class="span8">
                                	<h4 align="center"><?php

$result = mysql_query("SELECT COUNT(candidate_fname) 
FROM tally
WHERE candidate_fname = 'goku'") or die(mysql_error());

// Print out result
while($row = mysql_fetch_array($result)){
echo  $row['COUNT(candidate_fname)'] . " Votes" ;
}
?></h4>
                                </div>
                            </div>
                            <div class="progress progress-striped progress-info active">
                                
                            </div>
                            
                            <div class="row-fluid">
                            	<div class="span4">
                                	<h4>Abstain</h4>
                                </div>
                                <div class="span8">
                                	<h4 align="center">
<?php
	$result = mysql_query("SELECT COUNT(candidate_fname) 
								FROM tally
									WHERE candidate_fname = 'abstainLA'") or die(mysql_error());

									// Print out result
										while($row = mysql_fetch_array($result)){
											echo  $row['COUNT(candidate_fname)'] . " Votes" ;
											}
?>
									</h4>
                                </div>
                            </div>
                            <div class="progress progress-striped progress-abstain active">
                                	
                            </div>
					    </div> 
                    </div>
				</div>
			</div>
            
 
            
           
 

</body>
</html>