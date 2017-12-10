<?php
	include_once("connection.php");
	
	if(isset($_SESSION["username"])){
		HEADER("location:controller.php?home");
	}
?>

<!DOCTYPE html>
<html>
<style>

button:hover {
    opacity: 0.5;
}
input[type=text], input[type=password] {
    width: 20%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    font-family: "arial";	
    font-size: 16px;
}
	

</style>
	<head>
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
		<title>Online Shopping - Login</title>
		<link rel="icon" type="image/ico" href="icon2.ico" />
	</head>
	
	<body>
		<div class="header">
			<h2>LOG IN</h2>
		</div>
		<div id="login-form" class="centered form">
			<form method="POST" action="controller.php?login">
				<?php include('errors.php'); ?>
				<div class="input-group">
					<LABEL>Username</LABEL>
					<input type="text" placeholder="Enter Username" name="username" required>
				</div>
				<div class="input-group">
					<LABEL>Password</LABEL>
					<input type="password" placeholder="Enter Password" name="password_1" required>
				</div>
				<div class="input-group">
					<button type="submit" name="login" class="btn">LOG IN</button>
				</div>
				<p>
					Not yet a member? <a href="register.php">Sign up</a>
				</p>
			</form>
		</div>
	</body>
</html>
