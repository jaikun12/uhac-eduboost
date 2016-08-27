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
			<h3 class="pull-left" style="margin:0;">Place logo here</h3>
			<ul id="nav-menu" class="list-inline pull-left">
				<li><a href=""><div>JOB BOARD</div></a></li>
				<li><a href=""><div>MY JOBS</div></a></li>
				<li><a href=""><div>MY PERFORMANCE</div></a></li>
				<li><a href=""><div>COMPANIES</div></a></li>
			</ul>
			
			<ul class="list-inline pull-right">
				<li>
					<img class="img-circle profiledp" src="images/dp.jpg">
				</li>
				<li>
					<p class="pull-right">Welcome, Chatur!</p>
				</li>
				<li>
					<p class="pull-right"><a href="" class="hollow">Logout</a></p>
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

									$query = mysql_query("SELECT * FROM jobs_table;");

									while ($jobs_table = mysql_fetch_array($query)){
										$jobname = $jobs_table['jobname'];
										$jobcategory = $jobs_table['jobcategory'];
										$jobrole = $jobs_table['jobrole'];
										$company = $jobs_table['company'];
										$jobshortdesc = $jobs_table['jobshortdesc'];

									echo '
									<li><a href="">
									<div class="container-fluid job-item">
									<div class="col-md-3">
									<h4 class="pull-left">' . $jobcategory .'</h4>
									<h4 class="clear-both sm-font job-category">' . $jobrole . '
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