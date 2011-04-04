<?PHP
session_start();

include "db_connect.php";
$newgame = $_POST['game'];
$newdeveloper= $_POST['developer'];
$newplatform= $_POST['platform'];
$newrating= $_POST['rating'];
$newgenre= $_POST['genre'];
$newsingle= $_POST['singleplayer'];
$newmulti= $_POST['multiplayer'];
$newign= $_POST['ignscore'];

$query = "SELECT name FROM videogames WHERE name LIKE '$newgame'";
$result = mysqli_query($db, $query);
$row = mysqli_fetch_array($result);
if($newgame!= $row['name'] && $newplatform != $row['platform']){
	if($newdeveloper != null){
		if($newplatform != null){
			if($newrating != null){
				if($newgenre != null){
					if($newsingle !=null || $newmulti != null){
						if ($newign != null){
							$add="INSERT INTO videogames (name,platform, genre, developer,rating,single_player,multi_player,ign_score) 
							values ('$newgame','$newplatform', '$newgenre','$newdeveloper','$newrating','$newsingle','$newmulti','$newign')";
							$result2=mysqli_query($db, $add);
							include "games.php";
						}else{
							include "addGame.php";
							echo "<center><font color='red'>Please include an IGN score</font></center>";
						}
					}else{
						include "addGame.php";
						echo "<center><font color='red'>Please indicate if the game is single or multiplayer</font></center>";
					}
				}else{
					include "addGame.php";
					echo "<center><font color='red'>Please select a genre</font></center>";
				}
			}else{
				include "addGame.php";
				echo "<center><font color='red'>Please select a genre</font></center>";
			}
		}else{
			include "addGame.php";
			echo "<center><font color='red'>Please include a platform</font></center>";
		}
	}else{
		include "addGame.php";
		echo "<center><font color='red'>Please include a developer</font></center>";
	}
}else{
	include "addGame.php";
	echo "<center><font color='red'>game already exists!</font></center>";
	
}
?>