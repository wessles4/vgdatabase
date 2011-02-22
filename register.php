<html>
<title> The Stack - Register<\title>
<body bgcolor=black>
<?PHP
	include("header.html");
?>
<br>
<br>
<center>
<table width=50% bgcolor=white border="5" bordercolorlight=red bordercolordark="dark red">
	<tr><td>
	<h1 align=rigth>REGISTER</h1>
	<br>
	<form method="post" action="registerController.php">
		Username: <input type="text" name="user" id="user"/><br>
		Password: <input type="password" name="pass" id="pass"/><br>
		Confirm Password: <input tyep="password" name="pass2" id="pass2"/><br>
		<input type="submit" value="submit">
	</form>
	</td></tr>
</table>
</body>
</html>