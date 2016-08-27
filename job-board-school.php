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
				<li><a href="linkages.php"><div>LINKAGES</div></a></li>
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
					<h3 class="pull-left">Job Board</h3>
					<div class="pull-left sub-nav">
					<a href="#"><h4 class="pull-left active-page">Approved &nbsp;</h4></a>
					<h4 class="pull-left">|</h4>
					<a href="job-board-school-approval.php"><h4 class="pull-left">&nbsp;For Approval</h4>
					</a></div>
					<form>
						<input id="search-bar" type="text" class="underline-input pull-right" style="margin-top:20px; margin-bottom:20px;" placeholder="Search...">
						
					</form>
						<ul id="job-list" class="list-unstyled">
							<li><a href="">
								<div class="container-fluid job-item">
									<div class="col-md-3">
									<h4 class="pull-left">QA test existing software</h4>
									<h4 class="clear-both sm-font job-category">Category: Quality Assurance Testing</h4>
									</div>

									<div class="col-md-6">
									<p class="pull-left job-short-description">Perform QA testing on the Unionbank website.</p>
									</div>

									<div class="col-md-3">
									<img src="images/ubanklogo.png" class="comp-logo">

									</div>
									
								</div></a>
							</li>

							<li><a href="">
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
							</li>

						</ul>
					</div>
				</center>
			</div>


		<script src="bootstrap.min.js"></script>
		<script src="js/jquery-2.2.0.min.js"></script>
	</body>
</html>