<?PHP
include('db_connect.php');
$username = $_POST['user'];
$pw = $_POST['pass'];
$pw2 = $_POST['pass2'];
$email= $_POST['email'];

$doc1=new couchDocument($client);

if($pw == $pw2){
	$doc1->set( array('_id'=>$username, 'email'=>$email, 'password'=>$pw));
	echo "you made it!";
}else{
	include ("register.php");
}
?>