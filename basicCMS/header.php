<?php
	include_once("connection.php");
	
	if(!(isset($_SESSION["username"]))){
		HEADER("location:index.php");
	}
?>


<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="assets/css/style.css" />
	</head>
	
	<body>
		<div id="wrapper">
				<div id="header"> 	<!-- start of header section -->
					<div id="header-wrapper">
							&nbsp;
							<div id="header-top">
								<a href="controller.php?logout" class="header-item f-right">Log Out</a>
							</div>
							<div id="header-bottom">
								<a href="index.php"><img src="assets/images/logo.png" class="header-logo" /></a>
							</div>
						
					</div>
					
				</div>				<!-- end of header section -->
				<div id="content-wrapper">
	