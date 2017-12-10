<?php

include_once("connection.php");

?>



<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="icon" type="image/ico" href="icon2.ico" />
</head>
<body>
	<div class="header">
		<h2>SIGN UP</h2>
	</div>

	<form method="post" action="register.php">
		<?php
			include('errors.php');
		?>

		<div class="input-group">
			<LABEL>Username</LABEL>
			<input type="text" placeholder="Enter Username" name="username" required>
		</div>
		<div class="input-group">
			<LABEL>Firstname</LABEL>
			<input type="text" placeholder="Enter First Name" name="firstname" required>
		</div>
		<div class="input-group">
			<LABEL>Lastname</LABEL>
			<input type="text" placeholder="Enter Last Name" name="lastname" required>
		</div>
		<div class="input-group">
			<LABEL>E-mail</LABEL>
			<input type="text" placeholder="Enter Email" name="email" required>
		</div>
		<div class="input-group">
			<LABEL>Password</LABEL>
			<input type="password" placeholder="Enter Password" name="password_1" required>
		</div>
		<div class="input-group">
			<LABEL>Confirm Password</LABEL>
			<input type="password" placeholder="Enter Password" name="password_2" required>
		</div>
		<div class="input-group">
			<button type="submit" name="register" class="btn">SIGN UP</button>
		</div>
		<p>
			Already a member? <a href="index.php">Log in</a>
		</p>
	</form>

</body>
</html>
