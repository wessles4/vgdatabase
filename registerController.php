<?PHP
include('db_connect.php');
$username = $_POST['user'];
$pw = $_POST['pass'];
$pw2 = $_POST['pass2'];
$email= $_POST['email'];
$gender= $_POST['gender'];

if($pw != $pw2){
	include('register.php');
	echo "<p><font color = white>Please enter the same password for both forms</p></font>\n";
}else{

$query = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($db, $query);
if ($row = mysqli_fetch_array($result)){
    include ('register.php');
	echo "<p><font color = white>Username already taken</font></p>\n";
}

$query = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($db, $query);
if ($row = mysqli_fetch_array($result)){
    include ('register.php');
	echo "<p><font color = white>Email address already used for another account.</font></p>\n";

}else{
	session_start();
	$_SESSION['username'] = $username;
	$add="INSERT INTO users (email,username, gender, password) values ('$email','$username', '$gender','$pw')";
	$result2=mysqli_query($db, $add);
	include "home.php";

}
}