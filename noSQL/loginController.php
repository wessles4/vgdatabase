<?php
session_start();

include "db_connect.php";
$username = $_POST['user'];
$pw = $_POST['pass'];

$found = false;
$pfound = false;

$all_docs=$client->getAllDocs();
foreach ( $all_docs->rows as $row)
{
	$doc = $client->getDoc($row->id);
	//echo "Username: " . $doc->_id . "<br />";
	//echo "Password: " . $doc->password . "<br />";
	
	if($username == $doc->_id){
		$found = true;
	}
	if($password == $doc->password){
		$pfound = true;
	}
}
if($found && $pfound){
  $_SESSION['username'] = $username;
  echo "this was correct!";
  include "home.php";
}else{
    include "login.php";
	echo "<p><font color = white>Incorrect username or password</font></p>\n";
}

?>