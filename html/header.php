<!doctype html>
<html> 
<head> 
<meta charset="UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0">
<title>Dashboard</title>
<link rel="stylesheet/less" type="text/css" href="css/general.less">
<script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/3.8.0/less.min.js" type="text/javascript" language="JavaScript"></script>
<script type="text/javascript" src="js/jquery-3.4.1.js"></script>
<script src="js/bootstrap.min.js" type="text/javascript" language="JavaScript"></script>
<script src="js/common.js" type="text/javascript" language="JavaScript"></script>
<script type="text/javascript" src="js/circles.js"></script>


  <script type="text/javascript" src="js/jquery.datetimepicker.js"></script>
<link rel="stylesheet" href="css/jquery.datetimepicker.css" />
</head>
<body>

<!--Header Start From here-->
<header>
	<div class="header-container">
		<div class="header-left">
			<div class="toggle-menu">
             	<a href="javascript:void(0)" class="">
                    <span></span>
                    <span></span>
                   <span></span>
                </a>
            </div>
			<div class="logo"><a href="#"><img src="images/sgvu-logo-blue.png"/></a></div>
		</div>	
		<div class="header-right">
			<ul>
				<li>
					<div class="dropdown">
						<div class="dropdown-toggle" data-toggle="dropdown">
							<div class="profile-thumb"> 
								<img src="images/sgvu-logo-blue.png"/>
							</div>
							<span>Newark Deja</span>
							<span class="arrow"></span>
						</div>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						    <ul>
							    <li><a class="dropdown-item" href="#">Action</a></li>
							    <li><a class="dropdown-item" href="#">Another action</a></li>
							    <li><a class="dropdown-item" href="#">Something else here</a></li>
							</ul>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>	
</header>
<!--Header ends here-->
<script type="text/javascript">
	
$(document).ready(function () {

	
	$('.header-left .toggle-menu a').click(function(){
    	$('body').toggleClass('aside-position-change');
		$('section.main-section').toggleClass('aside-position-change');
		$(this).toggleClass('aside-hide');

	});

	

    
});
</script>
