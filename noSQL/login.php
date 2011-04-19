<html>
<title>The Stack - Login</title>
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
								<h1 align=rigth>LOGIN</h1>
								<br>
								<form method="post" action="loginController.php">
								Username: <input type="text" name="user" id="user"/><br>
								Password: <input type="password" name="pass" id="pass"/><br>
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