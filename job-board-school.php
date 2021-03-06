<!DOCTYPE html>
<html>
	<head>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans|Quicksand|Roboto" rel="stylesheet"> 
		<script src="https://use.fontawesome.com/5d707990f5.js"></script>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link type="text/css" rel="stylesheet" href="css/nav-student.css">
		<link type="text/css" rel="stylesheet" href="css/initview-student.css">
		<link type="text/css" rel="stylesheet" href="css/job-board-school.css">
	</head>
	<body>
		<nav>
			<img class="pull-left logo" style="margin-top:-20px;" src="images/eduboostlogo.png">
			<ul id="nav-menu" class="list-inline pull-left">
				<li><a href="school-dash.php"><div>MY STUDENTS</div></a></li>
				<li><a href="#"><div class="active">JOB BOARD</div></a></li>
				<li><a href="myperformance-school.php"><div>MY PERFORMANCE</div></a></li>
				<li><a href="school-linkages.php"><div>LINKAGES</div></a></li>
			</ul>
			
			<ul class="list-inline pull-right">
				<li>
					<img class="img-circle profiledp" src="images/ustlogo.png">
				</li>
				<li>
					<p class="pull-right">Welcome, University of Santo Tomas!</p>
				</li>
				<li>
					<p class="pull-right"><a href="index.php" class="hollow">Logout</a></p>
				</li>
			</ul>
		</nav>
		
		<div class="wrapper">
				<center>
					<div id="job-board" class="container">
					<div class="pull-left sub-nav">
					<h3 class="pull-left">Job Board</h3>
					<a href="#"><h4 class="pull-left active-page" style="margin-left:40px;margin-top:20px;">Approved &nbsp;</h4></a>
					<h4 class="pull-left" style="margin-top:20px;">|</h4>
					<a href="job-board-school-approval.php"><h4 class="pull-left" style="margin-top:20px;">&nbsp;For Approval</h4>
					</a></div>
					<form>
						<input id="search-bar" type="text" class="underline-input pull-right" style="margin-top:20px; margin-bottom:20px;" placeholder="Search...">
						
					</form>
						<ul id="job-list" class="list-unstyled">
							<?php
							include("php/dbconnect.php");

							$query = mysqli_query("SELECT * FROM jobs_table ORDER BY company DESC;");

							while ($jobs_table = mysql_fetch_array($query)){
								$jobname = $jobs_table['jobname'];
								$jobcategory = $jobs_table['jobcategory'];
								$jobrole = $jobs_table['jobrole'];
								$company = $jobs_table['company'];
								$jobshortdesc = $jobs_table['jobshortdesc'];
								$jobpay = $jobs_table['job_pay'];

							echo '<li><a href="">
									<div class="container-fluid job-item">
									<div class="col-md-3">
									<h4 class="pull-left">' . $jobcategory .'</h4>
									<h4 class="clear-both sm-font job-category">' . $jobrole . '
									</h4>
									<span class="clear-both sm-font job-category" style="color:#2ED529">Payout: ' . $jobpay . ' pesos</span>
									</div>

									<div class="col-md-6">
									<p class="pull-left job-short-description">' . $jobname .'</p>
									</div>

									<div class="col-md-3">
									<img src="images/ubanklogo.png" class="comp-logo">
									</div>	
									</div></a>
									</li>';
									};
						?>
						</ul>
					</div>
				</center>
			</div>


		<script src="bootstrap.min.js"></script>
		<script src="js/jquery-2.2.0.min.js"></script>
	</body>
</html>