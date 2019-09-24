<!doctype html>
<html> 
<head> 
<meta charset="UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0">
<title>Login</title>
<link rel="stylesheet/less" type="text/css" href="css/login.less">
<script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/3.8.0/less.min.js" type="text/javascript" language="JavaScript"></script>
</head>
<body>
<div class="loginWrapper">
	<div class="loginLeft">
		<div class="login-overlay-wrapper">	
			<div class="login-overlay ">
				Continuing higher education<br/>to enhance your career
			</div>
		</div>
	</div>	
	<div class="loginRight">
		<div class="loginFormWrapper">
			<div class="logo"><img src="images/sgvu-logo.png"/></div>
			<div class="loginFormContainer">
				<div class="form-block">
					<label>User name</label>
					<input type="text" placeholder="Enter user name" />
					<div class="error-msg">Please enter user name</div>
				</div>

				<div class="form-block">
					<label>Password</label>
					<input type="text" placeholder="Enter password" />
					<div class="error-msg">Please enter password</div>
				</div>
				<div class="forgot-password"><a href="#">Forgot Password</a></div>
				<div class="login-button"><button class="login-button-gradient" onclick="location.href='dashboard.html';">Login</button></div>
			</div>
			<div class="login-poweredby">
				<p>Powered by</p>
				<img src="images/talentedge-logo.png"/>
			</div>	
		</div>
	</div>	
</div>
</body>
</html>	