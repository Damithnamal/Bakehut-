<?php

$connection = mysqli_connect("localhost", "root", "","admin_details");

if(isset($_POST['LOGIN'])){

	$uname = $_POST['Username'];
	$password = $_POST['Password'];

	$sql =mysqli_query($connection,"SELECT * FROM ladmin_login1 WHERE user_name = '".$uname."' AND password='".$password."' limit 1 ");
	
	//$result = mysqli_query($sql);
	$counter=mysqli_num_rows($sql);
	//if(mysql_num_rows($result)==1){
	if($counter==1){
		echo "<script type='text/javascript'>document.location='adminhome.php'</script>";
		exit();
	}
	else{
		echo "<script type=''text/javascript>alert('Invalid Username or Password!'); document.location='login.php'</script>";
		exit();
	}
}

?>
<!DOCTYPE html>

<html>
<head>
<meta charset="utf-8">
<title>Login Page</title>
<link rel="stylesheet" type="text/css" href="Login.css">
</head>
	<body>
<div class="loginbox">
	
	<form method="post" action="login.php">
	<h1>Login Here</h1>
		<p>Username</p>
		<input type="text" name="Username" placeholder="Enter Username">
		<p>Password</p>
		<input type="password" name="Password" placeholder="Enter Password">
		<input type="submit" name="LOGIN" value="Login">
		
	</form>
</div>
</body>
</html>



</body>
</html>