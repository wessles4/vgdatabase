<?PHP
session_start();
include "db_connect.php";
$username= $_SESSION['username'];
$game= $_GET['game'];

$query= "SELECT game_id FROM videogames WHERE name='$game'";
$query2="SELECT user_id FROM users WHERE username='$username'";
$result = mysqli_query($db, $query);
$result2 = mysqli_query($db, $query2);
$row = mysqli_fetch_array($result);
$row2 = mysqli_fetch_array($result2);
$gameid= $row['game_id'];
$userid= $row2['user_id'];
$query3= "SELECT game_id, user_id FROM favorites WHERE game_id='$gameid' AND user_id='$userid'";
$result3= mysqli_query($db, $query3);
if($row3 = mysqli_fetch_array($result3)){
	$delete= "DELETE FROM favorites WHERE game_id='$gameid' AND user_id='$userid'";
	$result4=mysqli_query($db, $delete);
	
}else{
		$add="INSERT INTO favorites (game_id,user_id) values ('$gameid','$userid')";
		$result5=mysqli_query($db, $add);

}
include "games.php";
?>