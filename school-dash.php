<!DOCTYPE html>
<html>
	<head>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans|Quicksand|Roboto" rel="stylesheet"> 
		<script src="https://use.fontawesome.com/5d707990f5.js"></script>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link type="text/css" rel="stylesheet" href="css/nav-student.css">
		<link type="text/css" rel="stylesheet" href="css/school-dash.css">
	</head>
	<body>
		<nav>
			<img class="pull-left logo" style="margin-top:-20px;" src="images/eduboostlogo.png">
			<ul id="nav-menu" class="list-inline pull-left">
				<li><a href="#"><div class="active">MY STUDENTS</div></a></li>
				<li><a href="job-board-school.php"><div>JOB BOARD</div></a></li>
				<li><a href=""><div>MY PERFORMANCE</div></a></li>
				<li><a href=""><div>LINKAGES</div></a></li>
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
		<div id="students" class="container">
			<h3 class="pull-left">My Students</h3>
			<form>
				<input id="search-bar" type="text" class="underline-input pull-right" style="margin-top:20px; margin-right:-150px;" placeholder="Search...">
			</form>
			<ul id="student-list" class="list-unstyled">
				<li><a href="student-performance.php">
					<div class="container-fluid student-item">
						<div class="col-md-3">
							<img class="studentdp img-circle pull-left" src="images/dp.jpg">
							<h5 class="pull-left name">Chatur Dimapreeh</h5>
						</div>

						<div class="col-md-5">
							<p class="pull-left projection">Current Career Projection: UX/UI Designer</p>
						</div>

						<div class="col-md-4">
							<ul class="list-inline">
										<li>
											<h5 class="pull-left">Average Rating: </h5>
										</li>
										<li>
											<i class="fa fa-star pull-left rating-star" aria-hidden="true"></i>
										</li>
										<li>
											<i class="fa fa-star pull-left rating-star" aria-hidden="true"></i>
										</li>
										<li>
											<i class="fa fa-star pull-left rating-star" aria-hidden="true"></i>
										</li>
										<li>
											<i class="fa fa-star pull-left rating-star" aria-hidden="true"></i>
										</li>
									</ul>
						</div>
					</div></a>
				</li>

				<li><a href="">
					<div class="container-fluid student-item">
						<div class="col-md-3">
							<img class="studentdp img-circle pull-left" src="images/dp2.jpg">
							<h5 class="pull-left name">Angela Mcree</h5>
						</div>

						<div class="col-md-5">
							<p class="pull-left projection">Current Career Projection: Project Management</p>
						</div>

						<div class="col-md-4">
							<ul class="list-inline">
										<li>
											<h5 class="pull-left">Average Rating: </h5>
										</li>
										<li>
											<i class="fa fa-star pull-left rating-star" aria-hidden="true"></i>
										</li>
										<li>
											<i class="fa fa-star pull-left rating-star" aria-hidden="true"></i>
										</li>
										<li>
											<i class="fa fa-star pull-left rating-star" aria-hidden="true"></i>
										</li>
										<li>
											<i class="fa fa-star pull-left rating-star" aria-hidden="true"></i>
										</li>
										<li>
											<i class="fa fa-star pull-left rating-star" aria-hidden="true"></i>
										</li>
									</ul>
						</div>
					</div></a>
				</li>

				<li><a href="">
					<div class="container-fluid student-item">
						<div class="col-md-3">
							<img class="studentdp img-circle pull-left" src="images/dp3.jpg">
							<h5 class="pull-left name">Andrew Lee</h5>
						</div>

						<div class="col-md-5">
							<p class="pull-left projection">Current Career Projection: Quality Assurance</p>
						</div>

						<div class="col-md-4">
							<ul class="list-inline">
										<li>
											<h5 class="pull-left">Average Rating: </h5>
										</li>
										<li>
											<i class="fa fa-star pull-left rating-star" aria-hidden="true"></i>
										</li>
										<li>
											<i class="fa fa-star pull-left rating-star" aria-hidden="true"></i>
										</li>
										<li>
											<i class="fa fa-star pull-left rating-star" aria-hidden="true"></i>
										</li>
										
									</ul>
						</div>
					</div></a>
				</li>
			</ul>
		</div>
		</div>

		<script src="bootstrap.min.js"></script>
		<script src="js/jquery-2.2.0.min.js"></script>
	</body>
</html>