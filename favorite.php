<?PHP
session_start();
include "db_connect.php";
$username= $_SESSION['username'];
$gameid= $_GET['game'];


$query="SELECT user_id FROM users WHERE username='$username'";
$result = mysqli_query($db, $query);
$row = mysqli_fetch_array($result);
$userid= $row['user_id'];
$query2= "SELECT * FROM favorites WHERE game_id='$gameid' AND user_id='$userid'";
$result2= mysqli_query($db, $query2);
if($row3 = mysqli_fetch_array($result2)){
	$delete= "DELETE FROM favorites WHERE game_id='$gameid' AND user_id='$userid'";
	$result3=mysqli_query($db, $delete);
	
}else{
		$add="INSERT INTO favorites (game_id,user_id) values ('$gameid','$userid')";
		$result4=mysqli_query($db, $add);

}
include "games.php";
?>