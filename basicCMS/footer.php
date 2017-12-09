	<?php
		include_once("connection.php");
		
		if(!(isset($_SESSION["username"]))){
			HEADER("location:index.php");
		}
	?>
		<div class="clearfix"> </div>
				<div id="footer">
					<h4> This is the FOOTER </h4>
				</div>
			</div> <!-- end of content-wrapper div -->
		</div> <!-- end of wrapper div -->
	</body>
</html>
<?php
	//Close connection
	mysqli_close($connection);
?>