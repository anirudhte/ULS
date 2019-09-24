<?php include 'header.php';?>

<!--Main wrapper start from here-->
<main>

	<!--Aside start from here-->
		<?php include 'aside.php';?>
	<!--Aside ends here-->

	
	<!-- Dashboard Page Start From here-->
	<section class="main-section">
		<section class="switchCoursesBlock">
				<label>Swich Courses</label>
				<a href="#" class="selected">MBA - Human resources</a>
				<a href="#">Mba - Finance</a>
		</section>
		<div class="page-wrapper">
			<div class="page-content-left">
				<section class="course-card">
					<div class="placeholder"></div>
					<div class="courseCardOverlay">
						<div class="courseCardTop">
							<div class="courseCardLogo"><img src="images/sgvu-dashboard-logo.png"/></div>
							<div class="circular-progress">
								<div class="circle" id="circles-1"></div>
								<div class="circular-status">Completed</div>
							</div>
						</div>
						<div class="courseCardBottom">
							<h3>MBA-Human Resource Management</h3>
							<p>Session 2019- 2020</p>
							<div class="resumeButton"><a href="module.php"><i><img src="images/icons/resume-icon.png"/></i>Resume Learning</a></div>
						</div>
					</div>
				</section>	
				<section class="recent-activity">
					<h3>Recent Activity</h3>
					<ol>
						<li>
							<div><i><img src="images/icons/recent-activity-assignment-icon.png"/></i>Completed <b>Assignment</b> on <b>Business Organisation</b></div>
							<div><i><img src="images/icons/recent-activity-clock-icon.png"/></i>06 Sep 2019 16:38</div>
						</li>
						<li>
							<div><i><img src="images/icons/recent-activity-liveclass-icon.png"/></i>Attended<b>Live Class</b> on <b>Business Strategy II</b></div>
							<div><i><img src="images/icons/recent-activity-clock-icon.png"/></i>06 Sep 2019 16:38</div>
						</li>
						<li>
							<div><i><img src="images/icons/recent-activity-liveclass-icon.png"/></i>Attended<b>Live Class</b> on <b>Business Strategy II</b></div>
							<div><i><img src="images/icons/recent-activity-clock-icon.png"/></i>06 Sep 2019 16:38</div>
						</li>
						<li>
							<div><i><img src="images/icons/recent-activity-assignment-icon.png"/></i>Completed <b>Assignment</b> on <b>Business Organisation</b></div>
							<div><i><img src="images/icons/recent-activity-clock-icon.png"/></i>06 Sep 2019 16:38</div>
						</li>
						<li>
							<div><i><img src="images/icons/recent-activity-liveclass-icon.png"/></i>Attended<b>Live Class</b> on <b>Business Strategy II</b></div>
							<div><i><img src="images/icons/recent-activity-clock-icon.png"/></i>06 Sep 2019 16:38</div>
						</li>
						<li>
							<div><i><img src="images/icons/recent-activity-liveclass-icon.png"/></i>Attended<b>Live Class</b> on <b>Business Strategy II</b></div>
							<div><i><img src="images/icons/recent-activity-clock-icon.png"/></i>06 Sep 2019 16:38</div>
						</li>
					</ol>
					<div class="view-all"><a href="#">View All</a></div>
				</section>	
			</div>			
			<div class="page-content-right">
				<section class="dashboardTabs">
					<ul class="nav nav-tabs">
					  <li><a data-toggle="tab" href="#liveClass"><i></i>Live class</a></li>
					  <li class="active"><a data-toggle="tab" href="#attendance"><i></i>Attendance</a></li>
					  <li><a data-toggle="tab" href="#monthly"><i></i>Monthly</a></li>
					  <li><a data-toggle="tab" href="#dueDates"><i></i>Due Dates</a></li>
					</ul>
					<div class="tab-content">
					  <div id="liveClass" class="tab-pane fade">
					    liveClass
					  </div>
					  <div id="attendance" class="tab-pane fade in active">
					    <div id="datetimepicker11"></div>
					    <div class="calender-lagend">
					    	<label><i></i> Present</label>
					    	<label><i></i> Absent</label>
					    	<label><i></i> Current Date</label>
					    </div>
					  </div>
					  <div id="monthly" class="tab-pane fade">
					    Monthly
					  </div>
					  <div id="dueDates" class="tab-pane fade">
					    Due Dates
					  </div>
					</div>
				</section>	
				<section class="batchmates">
					<h3>Batchmates</h3>
					<ol>
						<li>
							<div><i><img src="images/pittsburgh.jpg"/></i>Rahul Mathur</div>
							<div><a href="#"><i><img src="images/icons/batchmates-info-icon.png"/></i></a></div>
						</li>
						<li>
							<div><i><img src="images/pittsburgh.jpg"/></i>Rahul Mathur</div>
							<div><a href="#"><i><img src="images/icons/batchmates-info-icon.png"/></i></a></div>
						</li>
						<li>
							<div><i><img src="images/pittsburgh.jpg"/></i>Rahul Mathur</div>
							<div><a href="#"><i><img src="images/icons/batchmates-info-icon.png"/></i></a></div>
						</li>
						<li>
							<div><i><img src="images/pittsburgh.jpg"/></i>Rahul Mathur</div>
							<div><a href="#"><i><img src="images/icons/batchmates-info-icon.png"/></i></a></div>
						</li>
					</ol>
					<div class="view-all"><a href="#">View All</a></div>		
				</section>
			</div>			
		</div>
		<!--Footer-->
			<?php include 'footer.php';?>
		<!--Footer-->
	</section>
	<!-- Dashboard Page Ends here-->



</main>
<!--Main wrapper ends here-->

<script type="text/javascript">
	
$(document).ready(function () {

	  var myCircle = Circles.create({
	  id:                  'circles-1',
	  radius:              50,
	  value:               38,
	  maxValue:            100,
	  width:               6,
	  text:                function(value){return value + '%';},
	  colors:              ['#254878', '#9cd6d2'],
	  duration:            400,
	  wrpClass:            'circles-wrp',
	  textClass:           'circles-text',
	  valueStrokeClass:    'circles-valueStroke',
	  maxValueStrokeClass: 'circles-maxValueStroke',
	  styleWrapper:        true,
	  styleText:           true
	});



	$('#datetimepicker11').datetimepicker({
        inline:true,
        timepicker:false
    }); 


    
});



</script>

</body>
</html>	