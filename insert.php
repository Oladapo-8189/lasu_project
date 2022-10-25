<?php
$con = mysqli_connect("localhost", "root", "", "active_lasu");
if($con===false){
    die("ERROR: Couid not connect." . mysqli_connect_error());
}
 


$username = mysqli_real_escape_string($con, $_REQUEST['username']);
$email  = mysqli_real_escape_string($con, $_REQUEST['email']);
$password  = mysqli_real_escape_string($con, $_REQUEST['password']);



$sql = "INSERT INTO registered_user ( username, email, pass ) VALUES('$username', '$email','$password')";
if(mysqli_query($con,$sql)){
    echo "<script> alert ('You Have Successfully Rgistered, You can now Login '); 
	window.location.href='login.html';
	</script>" ;
}
else{
    echo"ERROR: Could not execute $sql." . mysqli_error($con);
}

mysqli_close($con);
?>