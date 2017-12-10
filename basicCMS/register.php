<?php

include('controller.php');

?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<div class="header">
		<h2>SIGN UP</h2>
	</div>

	<form method="post" action="register.php">
		<?php include('errors.php'); ?>

		<div class="input-group">
			<LABEL>Username</LABEL>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<LABEL>Firstname</LABEL>
			<input type="text" name="firstname" value="<?php echo $firstname; ?>">
		</div>
		<div class="input-group">
			<LABEL>Lastname</LABEL>
			<input type="text" name="lastname" value="<?php echo $lastname; ?>">
		</div>
		<div class="input-group">
			<LABEL>E-mail</LABEL>
			<input type="text" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<LABEL>Password</LABEL>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<LABEL>Confirm Password</LABEL>
			<input type="password" name="password_2">
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