                                                                                                                                                                                    
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
			<h2>LOG IN</h2>
		</div>
		<div id="login-form" class="centered form">
			<form method="POST" action="login.php">
				<?php include('errors.php'); ?>

				<div class="input-group">
					<LABEL>Username</LABEL>
					<input type="text" name="username">
				</div>
				<div class="input-group">
					<LABEL>Password</LABEL>
					<input type="password" name="password">
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