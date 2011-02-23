<?php
session_start();
?>

<html>
<Title>The Stack</title>
<body bgcolor=black>
<center>
<?php
	include('header.html');
?>
</td>
</tr>
</table>
<?php
if($_SESSION['username'] != NULL){
$name = $_SESSION['username'];
echo "<p><font color=white>Welcome $name!</font></p>";
}else{
echo "<p><font color=white>Welcome Guest!<font></p>";
}
echo "<p><font color=white>Search for games based on title, platform, genre or ERSB rating.</font></p>";
include('search.php');

?>
<table width=50% bgcolor=white border="5" bordercolorlight=red bordercolordark="dark red">
	<tr>
	<td>
	<h1 align=left>Search</h1>
	<form method="post" action="search.php">
		<p>Query our database for videogame information. Search by game name.</p>
		<br>
		<label for="username">Search:</label>
		<input type="text" id="search" name="search" />
		<input type="submit" value="go" name="submit" />
	</form>
	</td></tr>
</table>
</center>

</body>
</html>