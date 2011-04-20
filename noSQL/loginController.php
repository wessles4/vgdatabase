<?php
session_start();

include "db_connect.php";
$username = $_POST['user'];
$pw = $_POST['pass'];

$found = false;
$pfound = true;

$all_docs=$client->getAllDocs();
foreach ( $all_docs->rows as $row)
{
	//echo "Username: " . $row->_id . "<br />";
	//echo "Password: " . $row->password . "<br />";
	if($username == $row->_id){
		$found = true;
	}
	if($password == $row->password){
		$pfound = true;
	}
}
if(!$found && $pfound){
  $_SESSION['username'] = $username;
  include "home.php";
}else{
    include "login.php";
	echo "<p><font color = white>Incorrect username or password</font></p>\n";
}

?>