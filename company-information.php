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
                        <li><a href="school-dash.php"><div>MY STUDENTS</div></a></li>
                        <li><a href="job-board-school.php"><div>JOB BOARD</div></a></li>
                        <li><a href="myperformance-school.php"><div>MY PERFORMANCE</div></a></li>
                        <li><a href="#"><div class="active">LINKAGES</div></a></li>
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
				<!-- boaz's fucked up codes php part 1-->
				<div class="container">
					<?php
						include("php/dbconnect.php");
					?>
				</div>
					<div id="job-board" class="container">
					<h3 class="pull-left">Linkage Information</h3>
					<form>
						<input id="search-bar" type="text" class="underline-input pull-right" style="margin-top:20px;" placeholder="Search...">
					</form>
					<br><br><hr>
					<h5 style="margin:-12px 0 -8px 0;text-align:left;">Completed</h5>
					<hr>
						<ul id="job-list" class="list-unstyled" style="margin:-8px 0 0 0">
							<?php 

									$query = mysql_query("SELECT * FROM jobs_table WHERE company = 'Unionbank' and request_status = 3 ORDER BY jobcategory ASC;");

									while ($jobs_table = mysql_fetch_array($query)){
										$jobname = $jobs_table['jobname'];
										$jobcategory = $jobs_table['jobcategory'];
										$jobrole = $jobs_table['jobrole'];
										$company = $jobs_table['company'];
										$jobshortdesc = $jobs_table['jobshortdesc'];

									echo '
									<li>
									<div class="container-fluid job-item">
									<div class="col-md-2">
									<h4 class="pull-left">' . $jobcategory .'</h4>
									<h4 class="clear-both sm-font job-category">' . $jobrole . '
									</h4>
									</div>
									
									<div class="col-md-1">
									</div>

									<div class="col-md-6">
									<p class="pull-left job-short-description">' . $jobname .'</p>
									</div>

									<div class="col-md-3">
									<img src="images/ubanklogo.png" class="comp-logo">

									</div>	
									</div>
									</li>';
									}
							?>

						</ul>
					<h5 style="margin:12px 0 -8px 0;text-align:left;color:#2AB824">Approved</h5>
					<hr>
						<ul id="job-list" class="list-unstyled" style="margin:-8px 0 0 0">
							<?php 

									$query = mysql_query("SELECT * FROM jobs_table WHERE company = 'Unionbank' and request_status = 1 ORDER BY jobcategory ASC;");

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
					<h5 style="margin:12px 0 -8px 0;text-align:left;color:red">Rejected</h5>
					<hr>
						<ul id="job-list" class="list-unstyled" style="margin:-8px 0 0 0">
							<?php 

									$query = mysql_query("SELECT * FROM jobs_table WHERE request_status = 2 ORDER BY jobcategory ASC;");

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
						<h5 style="margin:12px 0 -8px 0;text-align:left;color:#EC9A1A">Pending</h5>
					<hr>
						<ul id="job-list" class="list-unstyled" style="margin:-8px 0 0 0">
							<?php 

									$query = mysql_query("SELECT * FROM jobs_table WHERE company = 'Unionbank' AND request_status = 0 ORDER BY jobcategory ASC;");

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