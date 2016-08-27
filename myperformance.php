<!DOCTYPE html>
<html>
	<head>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans|Quicksand|Roboto" rel="stylesheet"> 
		<script src="https://use.fontawesome.com/5d707990f5.js"></script>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link type="text/css" rel="stylesheet" href="css/nav-student.css">
		<link type="text/css" rel="stylesheet" href="css/myperformance.css">
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
   		<script type="text/javascript">
      		google.charts.load('current', {'packages':['corechart']});
      		google.charts.setOnLoadCallback(drawChart);
      		function drawChart() {

       		 var jobperf = google.visualization.arrayToDataTable([
       		   ['Jobs', 'Quantity'],
       		   ['Completed',     11],
       		   ['Ongoing',      2],
       		   ['Cancelled',  2],
       		 ]);
		
       		 var jobperfops = {
       		   title: 'Experience Summary'
       		 };
		
       		 var jobperfchart = new google.visualization.PieChart(document.getElementById('jobperfchart'));

       		 var keywords = google.visualization.arrayToDataTable([
       		   ['Keyword', 'Times Searched'],
       		   ['UX',     11],
       		   ['design',      11],
       		   ['testing',  2],
       		 ]);
		
       		 var keywordsops = {
       		   title: 'Searches Summary'
       		 };
		
       		 var keywordchart = new google.visualization.PieChart(document.getElementById('keywordschart'));

       		 var jobscat = google.visualization.arrayToDataTable([
       		   ['Category', 'Times Completed'],
       		   ['Programming',     11],
       		   ['Project Management',      5],
       		   ['Testing',  2],
       		 ]);
		
       		 var jobscatops = {
       		   title: 'Job Completion Summary'
       		 };
		
       		 var jobscatchart = new google.visualization.PieChart(document.getElementById('jobscatchart'));
		
       		 jobperfchart.draw(jobperf, jobperfops);
       		 keywordchart.draw(keywords, keywordsops);
       		 jobscatchart.draw(jobscat, jobscatops);
     		 }
    	</script>

	</head>
	<body>
		<nav>
			<img class="pull-left logo" style="margin-top:-20px;" src="images/eduboostlogo.png">
			<ul id="nav-menu" class="list-inline pull-left">
				<li><a href="initview-student.php"><div>JOB BOARD</div></a></li>
				<li><a href="myjobs-student.php"><div>MY JOBS</div></a></li>
				<li><a href="#"><div class="active">MY PERFORMANCE</div></a></li>
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
				<div id="myperformance" class="container">
					<h3 class="pull-left">My Performance</h3>
					<div class="container divider">
					</div>
					<div id="performance-section" class="row">
						<div class="col-md-4 sub-section" style="border-left:none;">
							<h4>Job Performance</h4>
							<center>
								<div id="jobperfchart" style="width: 350px; height: 300px;"></div>
								<div>
									<ul class="list-inline">
										<li>
											<h4 class="pull-left">Average Rating: </h4>
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
							</center>
						</div>

						<div class="col-md-4 sub-section">
							<h4>Career</h4>
							<center>
								<div id="keywordschart" style="width: 350px; height: 300px;"></div>

								<div id="jobscatchart" style="width: 350px; height: 300px;"></div>			

								<div>
									<h5>Projected Career Path: UX Designer/Developer</h5>	

							</center>

						</div>

						<div class="col-md-4 sub-section">
							<h4>Where can you improve on?</h4>
							<center>
								<ul id="suggestion-list" class="list-unstyled">
									<li>Take on more back-end developer roles to proceed into being a full-stack developer</li>

									<li>Take on more back-end developer roles to proceed into being a full-stack developer</li>

									<li>Take on more back-end developer roles to proceed into being a full-stack developer</li>
								</ul>
							</center>

						</div>
					</div>
				</div>
			</center>
		</div>


		<script src="bootstrap.min.js"></script>
		<script src="js/jquery-2.2.0.min.js"></script>
	</body>
</html>