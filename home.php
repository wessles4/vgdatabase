<?php
session_start();
?>

<html>
<Title>The Stack</title>
<body bgcolor=black>
<center>
<?php
	include('header.php');
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
//include('search.php');

?>
</center>

</body>
</html>