<html>
<head>
	<title>::Login|Page</title>
	<link rel="stylesheet" href="css/login.css">
</head>
<body>

<?php

require('db.php');

session_start();
if(isset($_POST['username'])){
    $usernamee = stripslashes($_REQUEST['username']);
    $usernamee = mysqli_real_escape_string($con, $usernamee);
    
	$password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con, $password);
    
    $query = "SELECT * FROM `registered_user` WHERE username='$usernamee' AND pass='$password'";
    //$result = mysqli_query($con,$query) or die(mysqli_error());
    $result = mysqli_query($con, $query) or die (mysqli_error($con)); 
    $rows = mysqli_num_rows($result);
    
  
    if($rows==1){
        while ($rows = $result->fetch_assoc()) {
            $id =  $rows['id'];
            $user = $rows['username'];

            
            
        }
       
        $_SESSION["userid"] = $id;
        $_SESSION["log_in_user"] = $user;
        
        
        header("location: Quiz.php");
}
    else{
        echo ( '<script>alert(" Incorrect Username  or Password ")</script>');
        }
        
        }else{

        }



?>

	<div class="Login-page">
		<div class="Form">
			<form class="register-from" action="" method="POST">
				<input type="text" name="username" placeholder="username"/>
				<input type="password" name="password" placeholder="password"/>
				
				<button type="submit" value="log in">Log in </button><br><br>
				<!--<p class="message">Not Sign? <a href="a">Login</a></p>-->
			</form>
		</div>
	</div>
	

</body>
</html>