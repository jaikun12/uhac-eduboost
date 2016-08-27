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
				<li><a href="company-dash.php"><div>MY JOB POSTINGS</div></a></li>
				<li><a href="company-linkages.php"><div class="active">MY LINKAGES</div></a></li>
				<li><a href="eduwatch.php"><div>EduWatch</div></a></li>
			</ul>
			
			<ul class="list-inline pull-right">
				<li>
					<img class="img-circle profiledp" src="images/ubankdp.png">
				</li>
				<li>
					<p class="pull-right">Welcome, Unionbank!</p>
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
					<h3 class="pull-left">Linkages</h3>
					<form>
						<input id="search-bar" type="text" class="underline-input pull-right" style="margin-top:20px;" placeholder="Search...">

					</form>
						<ul id="job-list" class="list-unstyled">
									<li><a href="school-performance.php">
									<div class="container-fluid job-item">
									<div class="col-md-3">
									<h4 class="pull-left">University of Santo Tomas</h4>
									<h4 class="clear-both sm-font job-category">Sampaloc, Manila
									</h4>
									</div>

									<div class="col-md-6">
									<p class="pull-left job-short-description"></p>
									</div>

									<div class="col-md-3">
									<img src="images/ustlogo.png" class="comp-logo">

									</div>	
									</div></a>
									</li>
						</ul>
					</div>
				</center>
			</div>

		<script src="bootstrap.min.js"></script>
		<script src="js/jquery-2.2.0.min.js"></script>
	</body>
</html>