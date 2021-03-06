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
					<br><br><hr>
					<h5 style="margin:-12px 0 -8px 0;text-align:left;color:#EC9A1A">
						Ongoing Jobs
					</h5>
					<hr>
						<ul id="job-list" class="list-unstyled">
							<?php 

									$ongoingjobs_table_query = mysql_query("SELECT * FROM ongoingjobs_table WHERE userid = 1;");
									

									while ($ongoingjobs_table = mysql_fetch_array($ongoingjobs_table_query)){
										$jobid = $ongoingjobs_table['jobid'];
										$per_completed = $ongoingjobs_table['per_completion'];
										$ong_timestamp = $ongoingjobs_table['ong_timestamp'];

										$jobs_table_query = mysql_query("SELECT * FROM jobs_table WHERE jobid = $jobid;"); 

										while ($result = mysql_fetch_array($jobs_table_query)){
										
										$jobname = $result['jobname'];
										$jobcategory = $result['jobcategory'];
										$jobrole = $result['jobrole'];
										$company = $result['company'];
										$jobshortdesc = $result['jobshortdesc'];
										$jobpay = $result['job_pay'];
									echo '
									<li><a href="">
									<div class="container-fluid job-item">
									<div class="col-md-3">
									<h4 class="pull-left">' . $jobcategory .'</h4>
									<h4 class="clear-both sm-font job-category">Percentage Completed: ' . ($per_completed*100) .'%</h4>
									</div>

									<div class="col-md-4">
									<p class="pull-left job-short-description"> Time accepted: <br>' . $ong_timestamp .'</p>
									</div>

									<div class="col-md-2">
									<p class="pull-left job-short-description"> Payout: <br>' . $jobpay .' Pesos</p>
									</div>

									<div class="col-md-3">
									<img src="images/ubanklogo.png" class="comp-logo">

									</div>	
									</div></a>';
										
										// end fetch of table
									}
								}
							?>
					<h5 style="margin:12px 0 -8px 0;text-align:left;color:green;">Completed Jobs</h5>
					<hr>
						<ul id="" class="list-unstyled">
							<?php 

									$completedjobs_table_query = mysql_query("SELECT * FROM completedjobs_table WHERE userid = 1;");

									while ($completedjobs_table = mysql_fetch_array($completedjobs_table_query)){
										$jobid = $completedjobs_table['jobid'];
										$success_rating = $completedjobs_table['success_rating'];
										$coj_timestamp = $completedjobs_table['coj_timestamp'];

										$jobs_table_query = mysql_query("SELECT * FROM jobs_table WHERE jobid = $jobid;");
									// start of while for fetching job table
										while ($result = mysql_fetch_array($jobs_table_query)){
										
										$jobname = $result['jobname'];
										$jobcategory = $result['jobcategory'];
										$jobrole = $result['jobrole'];
										$company = $result['company'];
										$jobshortdesc = $result['jobshortdesc'];

									echo '
									<li>
									<div class="container-fluid job-item">
									<div class="col-md-3">
									<h4 class="pull-left">' . $jobcategory .'</h4>
									<h4 class="clear-both sm-font job-category">Rating: ';

									if ($success_rating == 1){
										 echo '<ul class="list-inline">
										 <li><img src="images/star.png" class="rating-star"></li>
										 <li></li>
										 <li></li>
										 <li></li>
										 <li></li>';
									}
									elseif ($success_rating == 2){
										 echo '<ul class="list-inline">
										 <li><img src="images/star.png" class="rating-star"></li>
										 <li><img src="images/star.png" class="rating-star"></li>
										 <li></li>
										 <li></li>
										 <li></li>';
									}
									elseif ($success_rating == 3){
										 echo '<ul class="list-inline">
										 <li><img src="images/star.png" class="rating-star"></li>
										 <li><img src="images/star.png" class="rating-star"></li>
										 <li><img src="images/star.png" class="rating-star"></li>
										 <li></li>
										 <li></li>';
									}
									elseif ($success_rating == 4){
										 echo '<ul class="list-inline">
										 <li><img src="images/star.png" class="rating-star"></li>
										 <li><img src="images/star.png" class="rating-star"></li>
										 <li><img src="images/star.png" class="rating-star"></li>
										 <li><img src="images/star.png" class="rating-star"></li>
										 <li></li>';
									}
									else{
										 echo '<ul class="list-inline">
										 <li><img src="images/star.png" class="rating-star"></li>
										 <li><img src="images/star.png" class="rating-star"></li>
										 <li><img src="images/star.png" class="rating-star"></li>
										 <li><img src="images/star.png" class="rating-star"></li>
										 <li><img src="images/star.png" class="rating-star"></li>';
									}
								}

									echo '</h4>
									</div>

									<div class="col-md-3">
									<p class="pull-left job-short-description"> Time completed:<br>' . $coj_timestamp .'</p>
									</div>

									<a href="#"><div class="hollow col-md-3">
									<p class="pull-left job-short-description"> Cash Out: ' . $jobpay .' Pesos on Registered Account.</p>
									</div></a>

									<div class="col-md-3">
									<img src="images/ubanklogo.png" class="comp-logo">

									</div>	
									</div>';
										
										// end fetch of table
									}
							?>
					<h5 style="margin:12px 0 -8px 0;text-align:left;color:red">Cancelled Jobs</h5>
					<hr>
					<?php

									$cancelledjobs_table_query = mysql_query("SELECT * FROM cancelledjobs_table WHERE userid = 1;");

									while ($cancelledjobs_table = mysql_fetch_array($cancelledjobs_table_query)){
										$jobid = $cancelledjobs_table['jobid'];
										$per_completed = $cancelledjobs_table['per_completed'];
										$caj_timestamp = $cancelledjobs_table['caj_timestamp'];

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
									<h4 class="clear-both sm-font job-category">Percentage Completed: ' . ($per_completed*100) .'%</h4>
									</div>

									<div class="col-md-6">
									<p class="pull-left job-short-description"> Time cancelled:<br>' . $caj_timestamp .'</p>
									</div>

									<div class="col-md-3">
									<img src="images/ubanklogo.png" class="comp-logo">

									</div>	
									</div></a>
									</li>';

										}
									}

							?>

						</ul>
					</div>
				</center>
			</div>

		<script src="bootstrap.min.js"></script>
		<script src="js/jquery-2.2.0.min.js"></script>
		<script src="https://use.fontawesome.com/5d707990f5.js"></script>
	</body>
</html>