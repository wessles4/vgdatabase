<?PHP
session_start();
?>
<table frame=below width=100% style="background-color:red">
<tr align=center>
<td colspan=100%>
<br>
<h1>
<img src="xbox360logo.jpg" width="100" hight="100"> 
<img src="playstation3logo.jpg" width="100" hight="100"> 
The Stack
<img src="psplogo.jpg" width="100" hight="100">
<img src="wiilogo.jpg" width="100" hight="100"> </h1></td>

</tr>
<tr align=center>
<td><a href="home.php"><b>HOME</b></a></td>
<td><a href="games.php"><b>GAMES</b></a></td>
<?PHP
	if ($_SESSION['username'] != NULL){
?>
<td><a href="mygames.php"><b>MY GAMES</b></a></td>
<td><a href="logout.php"><b>LOGOUT</b></a></td>
<?PHP
}else{
?>

<td><a href="login.php"><b>LOGIN</b></a></td>
<td><a href="register.php"><b>REGISTER</b></a></td>
<?PHP
}
?>
</tr>
</table>