<?php
session_start();

include "db_connect.php";
$username = $_POST('user');
$pw = $_POST('pass');



$query = "SELECT * FROM users WHERE username = '$username' AND password = '$pw'";
$result = mysqli_query($db, $query);
if ($row = mysqli_fetch_array($result)){

  $_SESSION['username'] = $username;
  $_SESSION['pass'] = $pw;
  
  include "home.php";
}else{
   	echo "<p>Incorrect username or password</p>\n";
   	include "login.php";
}
	
?>