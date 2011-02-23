<html>
<title>The Stack - Login</title>
<body bgcolor=black>
<?PHP
	include("header.php");
?>
<br>
<br>
<center>
<table width=50% bgcolor=white border="5" bordercolorlight=red bordercolordark="dark red">
	<tr><td>
	<h1 align=rigth>LOGIN</h1>
	<br>
	<form method="post" action="loginController.php">
		Username: <input type="text" name="user" id="user"/><br>
		Password: <input type="password" name="pass" id="pass"/><br>
		<input type="submit" value="submit">
	</form>
	</td></tr>
</table>
</body>
</html>