<?PHP
session_start();
include('db_connect.php');
$username = $_POST['user'];
$pw = $_POST['pass'];
$pw2 = $_POST['pass2'];
$email= $_POST['email'];

$doc1=new couchDocument($client);

if($pw == $pw2){
	try{
		$doc1->set( array('_id'=>$username, 'email'=>$email, 'password'=>$pw));
		$_SESSION['username'] = $username;
		include ("home.php");
		}catch(couchException $c){
			echo "<center><font color='red'>Username already exists.</font></center>";
			include "register.php";
		}
}else{
	include ("register.php");
}
?>