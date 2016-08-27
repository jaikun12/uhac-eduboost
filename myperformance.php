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
		
       		 jobperfchart.draw(jobperf, jobperfops);
     		 }
    	</script>

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
				<div id="myperformance" class="container">
					<h3 class="pull-left">My Performance</h3>
					<div class="container divider">
					</div>
					<div id="performance-section" class="row">
						<div class="col-md-4 sub-section" style="border-left:none;">
							<h4>Job Performance</h4>
							<center>
								<div id="jobperfchart" style="width: 350px; height: 300px;"></div>
								<div class="container">
									<h4>Average Rating: </h4>
									<i class="fa fa-star pull-left" aria-hidden="true"></i>
									<i class="fa fa-star pull-left" aria-hidden="true"></i>
									<i class="fa fa-star pull-left" aria-hidden="true"></i>
									<i class="fa fa-star pull-left" aria-hidden="true"></i>

								</div>
							</center>
						</div>

						<div class="col-md-4 sub-section">
							<h4>Career</h4>
							<center>
								

							</center>

						</div>

						<div class="col-md-4 sub-section">
							<h4>Where can you improve on?</h4>
							<center>
								

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