<!DOCTYPE html>
<html>
	<head>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans|Quicksand|Roboto" rel="stylesheet"> 
		<script src="https://use.fontawesome.com/5d707990f5.js"></script>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link type="text/css" rel="stylesheet" href="css/nav-student.css">
		<link type="text/css" rel="stylesheet" href="css/myperformance.css">
		<link type="text/css" rel="stylesheet" href="css/student-performance.css">

		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
   		<script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Status', 'Quantity'],
          ['Completed',  112],
          ['Ongoing',  56],
          ['Cancelled', 25]
      
        ]);

      var options = {
        legend: 'none',
        pieSliceText: 'label',
        title: 'Summary of jobs taken by students',
        pieStartAngle: 100,
      };


        var keywords = google.visualization.arrayToDataTable([
          ['keywords', 'Quantity'],
          ['Project',  72],
          ['Management',  72],
          ['UX', 25],
          ['Analytics', 78]
      
        ]);

      var keywordsoptions = {
        legend: 'none',
        pieSliceText: 'label',
        title: 'Top search keywords by students',
        pieStartAngle: 100,
      };

      var jobstaken = google.visualization.arrayToDataTable([
          ['Job Category', 'Quantity'],
          ['Project Management',  72],
          ['Business Analytics',  72],
          ['Database Management', 56],
          ['Programming', 35]
      
        ]);

      var jobsoptions = {
        pieSliceText: 'label',
        title: 'Top Job Categories taken by students',
        pieStartAngle: 100,
      };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        var keychart = new google.visualization.PieChart(document.getElementById('keywordschart'));

        var jobstakenchart = new google.visualization.PieChart(document.getElementById('jobschart'));


        chart.draw(data, options);
        keychart.draw(keywords, keywordsoptions);
        jobstakenchart.draw(jobstaken, jobsoptions);
      }
    </script>

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
				<div id="myperformance" class="container">
					<center><img src="images/ustlogo.png" class="profpic img-circle" style="margin-left:85px;">
					<h3 class="">University of Santo Tomas</h3></center>
					<div class="container divider">
					</div>
					<div id="performance-section" class="row">
                                    <div class="col-md-4 sub-section" style="border-left:none;">
                                          <h4>Students' Performance</h4>
                                          <center>
                                                <div id="piechart" style="width: 350px; height: 300px;"></div>
                                                <div>
                                                      <h4 class="">Completion Rate: 81.75%</h4>
                                                </div>
                                          </center>
                                    </div>

                                    <div class="col-md-4 sub-section">
                                          <h4>Career</h4>
                                          <center>
                                                <div id="keywordschart" style="width: 350px; height: 300px;"></div>

                                                <div id="jobschart" style="width: 350px; height: 300px;"></div>

                                                <div>
                                                      <ul style="text-align:left;">
                                                      <h4 class="">Feasible Specialization Tracks:</h4>
                                                      <li>Project Management</li>
                                                      <li>Business analytics</li>
                                                      </ul>
                                                </div>
                                          </center>

                                    </div>

                                    <div class="col-md-4 sub-section">
                                          <h4>Where can you improve on?</h4>
                                          <center>
                                                <ul id="suggestion-list" class="list-unstyled">
                                                      <li>Most cancelled projects are on the programming category.</li>

                                                      <li>Students are capable of performing data science tasks. Consider creating a track surrounding that industry.</li>

                                                      
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