<html>
<head>
	<title>::Create Account | Lasu</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="Login-page">
		<div class="Form">
			<form class="register-from" action="insert.php" method="POST">
				<input type="text" name="username" placeholder="username" required/>
				<input type="email" name="email" placeholder="email" required/>
				<input type="password" name="password" placeholder="password" required/>
				
				<button>create</button>
				<p class="message">Already Registered? <a href="login.php">Login</a></p>
			</form>
			<!--<form class="Login-form">
				<input type="text"  placeholder="user name"/>
				<input type="text"  placeholder="password"/>
				<button>Login</button>
				<p class="message">Haven't Registered? <a href="a">Register</a></p>
			</form>-->
		</div>	
	</div>
<!--<script src='https://code.jquery.com/jquery-3.6.1.min.js'></script>
<script>
	$('.message a').click(function(){
	$('form').animate({height: "toggle", opacity: "toggle"}, "slow");
	}
</script>-->
</html>