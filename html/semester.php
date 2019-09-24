<?php include 'header.php';?>

<!--Main wrapper start from here-->
<main>

	<!--Aside start from here-->
		<?php include 'aside.php';?>
	<!--Aside ends here-->
	
	
	<!-- Module Page Start From here-->
	<section class="main-section">
		
		<section class="semester-courseCard">
				<div class="breadcrumb">
					<ol>
                    	<li><a href="javascript:void(0)">Home</a></li>
                        <li class="active">MBA - Hurman Resource...</li>
                    </ol>
				</div>
				<div class="course-info-wrapper">
					<div class="course-info">
						<div class="course-thumb"><img src="images/sgvu-dashboard-logo.png"/></div>
						<div class="course-detail">
							<h3>MBA-Human Resource Management</h3>
							<p>Suresh Gyan Vihar University (DE)</p>
							<p>Jan 2016</p>
						</div>
					</div>
					<div class="resumeButton"><a href="#"><i><img src="images/icons/resume-icon.png"/></i><div>Resume Learning<span>Markets and Welfare...</span></div></a></div>
				</div>	
		</section>	

		<section class="semesterSection">
			<ul class="nav nav-tabs">
			  <li class="active"><a data-toggle="tab" href="#semester-1"><i></i>Semester-1</a></li>
			  <li><a data-toggle="tab" href="#semester-2"><i></i>Semester-2</a></li>
			  <li><a data-toggle="tab" href="#semester-3"><i></i>Semester-3</a></li>
			</ul>
				<div class="tab-content">
					  <div id="semester-1" class="tab-pane fade in active">
					    
					  			<fieldset>
								    <legend>Subjects</legend>
									  <ul>
									   	<li><a href="module.php">Business Communication Skills</a></li>
									   	<li><a href="module.php">Modern Business Organization & Management</a></li>
									   	<li><a href="module.php">Accounting & Financial Management</a></li>
									   	<li><a href="module.php">Fundamentals of IT</a></li>
									   	<li><a href="module.php">HR & OB</a></li>
									   	<li><a href="module.php">Business & Corporate Law</a></li>
									  </ul>
								</fieldset>

					  </div>
					   <div id="semester-2" class="tab-pane fade">
					    
					   	<fieldset>
						    <legend>Subjects</legend>
							  <ul>
							   	<li><a href="module.php">Business Communication Skills</a></li>
							   	<li><a href="module.php">Modern Business Organization & Management</a></li>
							   	<li><a href="module.php">Accounting & Financial Management</a></li>
							   	<li><a href="module.php">Fundamentals of IT</a></li>
							   	<li><a href="module.php">HR & OB</a></li>
							   	<li><a href="module.php">Business & Corporate Law</a></li>
							  </ul>
						</fieldset>

					  </div>
					   <div id="semester-3" class="tab-pane fade">
					   	
					   <fieldset>
						    <legend>Subjects</legend>
							  <ul>
							   	<li><a href="module.php">Business Communication Skills</a></li>
							   	<li><a href="module.php">Modern Business Organization & Management</a></li>
							   	<li><a href="module.php">Accounting & Financial Management</a></li>
							   	<li><a href="module.php">Fundamentals of IT</a></li>
							   	<li><a href="module.php">HR & OB</a></li>
							   	<li><a href="module.php">Business & Corporate Law</a></li>
							  </ul>
						</fieldset>

					  </div>
					  
				</div>	  




			</section>	

	


		
		<!--Footer-->
			<?php include 'footer.php';?>
		<!--Footer-->
	</section>
	<!-- Module Page Ends here-->



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