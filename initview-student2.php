<!DOCTYPE html>
<html>
	<head>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans|Quicksand|Roboto" rel="stylesheet"> 
		<script src="https://use.fontawesome.com/5d707990f5.js"></script>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link type="text/css" rel="stylesheet" href="css/nav-student.css">
		<link type="text/css" rel="stylesheet" href="css/initview-student.css">
	</head>
	<body>
		<nav>
			<img class="pull-left logo" style="margin-top:-20px;" src="images/eduboostlogo.png">
			<ul id="nav-menu" class="list-inline pull-left">
				<li><a href="#"><div class="active">JOB BOARD</div></a></li>
				<li><a href="myjobs-student.php"><div>MY JOBS</div></a></li>
				<li><a href="myperformance.php"><div>MY PERFORMANCE</div></a></li>
				
			</ul>
			
			<ul class="list-inline pull-right">
				<li>
					<a href="initview-student.php">
					<img class="img-circle profiledp" src="images/dp.jpg">
					</a>
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
							$query = mysql_query("SELECT * FROM jobs_table WHERE jobcategory = 'Programming' or jobcategory = 'Project Management';");
								while ($jobs_table = mysql_fetch_array($query)){
									$jobid = $jobs_table['jobid'];
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
									<img src="images/thumbs-up.png" style="height:30px; width: 25px; margin:3px 0 0 10px;">
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
						</ul>
						<ul id="job-list" class="list-unstyled">
							<?php 	
					
									$query = mysql_query("SELECT * FROM jobs_table ORDER BY jobcategory ASC;");

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

						</ul>
					</div>
				</center>
			</div>

		<script src="bootstrap.min.js"></script>
		<script src="js/jquery-2.2.0.min.js"></script>
	</body>
</html>