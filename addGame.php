<html>
<title>The Stack - Add Game</title>
<body bgcolor=black>
<?PHP
	include("header.html");
?>
<br>
<br>
<center>
<table width=50% bgcolor=white border="5" bordercolorlight=red bordercolordark="dark red">
	<tr><td>
	<h1>ADD NEW GAME</h1>
	<br>
	<form method="post" action="gameController.php">
	Title:<input type="text"  name="game" id="game"/><br>
	Developer:<input type="text" name="developer" id="developer"/><br>
	Platform: <select name="platform">
	<option value="xbox">Xbox 360</option>
	<option value="ps3">Playstation 3</option>
	<option value="wii">Wii</option>
	<option value="pc">PC</option>
	</select>
	ESRB Rating: <select name="rating">
	<option value="ao">AO</option>
	<option value="m">M</option>
	<option value="t">T</option>
	<option value="e">E</option>
	<option value="e10">E 10+</option>
	<option value="ec">EC</option>
	</select>
	<br>
	Genre: <select name="genre">
	<option value="mmorpg">MMORPG</option>
	<option value="fps">FPS</option>
	<option value="racing">Racing</option>
	<option value="sports">Sports</option>
	<option value="openworld">Open World</option>
	<option value="music">Music</option>
	<option value="platform">Platform</option>
	<option value="horror">Horror</option>
	</select><br>
	Single Player:<input type="checkbox" name="singleplayer" value="true"><br>
	Multi-Player:<input type="checkbox" name="multiplayer" value="true"><br>
	IGN Score:<input type="text" name="ignscore" id="ignscore"/><br>
	Your Score:<input type="text" name="userscore" id="userscore"/><br>
	<input type="submit" value=submit>
	</form>
	</body>
	</html>