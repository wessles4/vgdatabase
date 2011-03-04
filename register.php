<html>
<title>The Stack - Register</title>
<body bgcolor=black>
<?PHP
	include("header.php");
?>
<div id="page">
	<div id="page-bgtop">
		<div id="page-bgbtm">
			<div id="content">
				<div class="post">
					<div class="post-bgtop">
						<div class="post-bgbtm">
							<div class="entry">
								<h1 align=rigth>REGISTER</h1>
								<br>
								<form method="post" action="registerController.php">
								Username: <input type="text" name="user" id="user"/><br>
								Password: <input type="password" name="pass" id="pass"/><br>
								Confirm Password: <input type="password" name="pass2" id="pass2"/><br>
								E-mail: <input type="text" name="email" id="email"/><br>
								Gender: <select name="gender">
								<option value="M">M</option>
								<option value="F">F</option>
								</select><br>
								<input type="submit" value="submit">
								</form>
							</div>	
						</div>
					</div>
				</div>
			</div>	
		</div>
	</div>
</div>
</body>
</html>