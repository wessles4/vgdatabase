<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="header">
	<div id="menu">
		<ul>
			<li><a href="home.php">HOME</a></li>
			<li><a href="games.php">GAMES</a></li>
<?PHP
	if ($_SESSION['username'] != NULL){
?>
			<li><a href="mygames.php">MY GAMES</a></li>
			<li><a href="logout.php">LOGOUT</a></li>
<?PHP
}else{
?>
			<li><a href="login.php">LOGIN</a></li>
			<li><a href="register.php">REGISTER</a></li>
<?PHP
}
?>
		</ul>
	</div>
	<!-- end #menu -->
</div>
<div id="logo">
	<h1><a href="home.php">The Stack </a></h1>
</div>
</body>