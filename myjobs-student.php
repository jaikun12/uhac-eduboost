<!DOCTYPE html>
<html>
	<head>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans|Quicksand|Roboto" rel="stylesheet"> 
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link type="text/css" rel="stylesheet" href="css/nav-student.css">
		<link type="text/css" rel="stylesheet" href="css/initview-student.css">
	</head>
	<body>
		<nav>
			<img class="pull-left logo" style="margin-top:-20px;" src="images/eduboostlogo.png">
			<ul id="nav-menu" class="list-inline pull-left">
				<li><a href="initview-student.php"><div>JOB BOARD</div></a></li>
				<li><a href="#"><div class="active">MY JOBS</div></a></li>
				<li><a href="myperformance.php"><div>MY PERFORMANCE</div></a></li>
				<li><a href="mycompanies-student.php"><div>COMPANIES</div></a></li>
			</ul>
			
			<ul class="list-inline pull-right">
				<li>
					<img class="img-circle profiledp" src="images/dp.jpg">
				</li>
				<li>
					<p class="pull-right">Welcome, Chatur!</p>
				</li>
				<li>
					<p class="pull-right"><a href="index.php" class="hollow">Logout</a></p>
				</li>
			</ul>
		</nav>
			<div class="wrapper">
				<center>
				<!-- boaz's fucked up codes php part 1-->
				<div class="container">
					<?php
						include("php/dbconnect.php");
					?>
				</div>
					<div id="job-board" class="container">
					<h3 class="pull-left">Job Board</h3>
					<form>
						<input id="search-bar" type="text" class="underline-input pull-right" style="margin-top:20px;" placeholder="Search...">

					</form>
						<ul id="job-list" class="list-unstyled">
							<?php 

									$completedjobs_table_query = mysql_query("SELECT * FROM completedjobs_table WHERE userid = 1;");

									while ($completedjobs_table = mysql_fetch_array($completedjobs_table_query)){
										$jobid = $completedjobs_table['jobid'];
										$success_rating = $completedjobs_table['success_rating'];
										$coj_timetable = $completedjobs_table['coj_timestamp'];

										$jobs_table_query = mysql_query("SELECT * FROM jobs_table WHERE jobid = $jobid;");
									// start of while for fetching job table
										while ($result = mysql_fetch_array($jobs_table_query)){
										
										$jobname = $result['jobname'];
										$jobcategory = $result['jobcategory'];
										$jobrole = $result['jobrole'];
										$company = $result['company'];
										$jobshortdesc = $result['jobshortdesc'];

									echo '
									<li><a href="">
									<div class="container-fluid job-item">
									<div class="col-md-3">
									<h4 class="pull-left">' . $jobcategory .'</h4>
									<h4 class="clear-both sm-font job-category">Rating: ' . $success_rating . '
									</h4>
									</div>

									<div class="col-md-6">
									<p class="pull-left job-short-description">' . $jobname .'</p>
									</div>

									<div class="col-md-3">
									<img src="images/ubanklogo.png" class="comp-logo">

									</div>	
									</div></a>
									</li>';
										}
										// end fetch of table
									}

							?>

							<!--li><a href="">
								<div class="container-fluid job-item">
									<div class="col-md-3">
									<h4 class="pull-left">Revamp design of Unionbank Website</h4>
									<h4 class="clear-both sm-font job-category">Category: UX/UI Designing</h4>
									</div>

									<div class="col-md-6">
									<p class="pull-left job-short-description">Enhance the aesthetics of the Unionbank website to attract more customers. </p>
									</div>

									<div class="col-md-3">
									<img src="images/ubanklogo.png" class="comp-logo">

									</div>
									
								</div></a>
							</li>

							<li><a href="">
								<div class="container-fluid job-item">
									<div class="col-md-3">
									<h4 class="pull-left">Create business continuity plan</h4>
									<h4 class="clear-both sm-font job-category">Category: Project Management</h4>
									</div>

									<div class="col-md-6">
									<p class="pull-left job-short-description">Perform QA testing on the unionbank website.</p>
									</div>

									<div class="col-md-3">
									<img src="images/ubanklogo.png" class="comp-logo">

									</div>
									
								</div></a>
							</li>

							<li><a href="">
								<div class="container-fluid job-item">
									<div class="col-md-3">
									<h4 class="pull-left">Create business continuity plan</h4>
									<h4 class="clear-both sm-font job-category">Category: Project Management</h4>
									</div>

									<div class="col-md-6">
									<p class="pull-left job-short-description">Perform QA testing on the unionbank website.</p>
									</div>

									<div class="col-md-3">
									<img src="images/ibmlogo.jpg" class="comp-logo">

									</div>
									
								</div></a>
							</li-->

						</ul>
					</div>
				</center>
			</div>

		<script src="bootstrap.min.js"></script>
		<script src="js/jquery-2.2.0.min.js"></script>
	</body>
</html>