<?php
session_start();
?>

<html>
<head>
<style type="text/css">
th {text-align: left;}
th {border-bottom: 1px solid black;}

</style>
<Title>The Stack - My Games</title>
<body bgcolor=black>

<?PHP
	include('header.php');
?>
<div id="page">
	<div id="page-bgtop">
		<div id="page-bgbtm">
			<div id="content">
				<div class="post">
					<div class="post-bgtop">
						<div class="post-bgbtm">
							<div class="entry">
							<h1 align=left>MY GAMES:</h1>
							<form method="post">
							<?php
								include "db_connect.php";
								$username= $_SESSION['username'];
								$getID= "SELECT user_id FROM users WHERE username='$username'";
								$idresult=mysqli_query($db, $getID);
								$idrow=mysqli_fetch_array($idresult);
								$userid= $idrow['user_id'];
								$searchterm = mysqli_real_escape_string($db, $_POST['search']);
								
				 				$query = "SELECT v.name, v.platform, v.genre, v.developer, v.rating, v.single_player, v.multi_player, v.ign_score 
								          FROM videogames v INNER JOIN users u INNER JOIN favorites f 
										  ON u.user_id = f.user_id AND v.game_id = f.game_id 
										  WHERE u.username = '$username' ORDER BY name";
								
								$result = mysqli_query($db, $query)
									or die("Error Querying Database");
								echo "<table id=\"hor-minimalist-b\">\n<tr><th>Game Name</th><th>Developer</th><th>Platform</th><th>Genre</th><th>Rating</th><th>IGN Score</th></tr>\n\n";
								echo "";
								
								while($row = mysqli_fetch_array($result)) 
								{
									
									$name = $row['name'];
									$gameid=$row['game_id'];
									$query2= "SELECT game_id FROM favorites WHERE user_id = '$userid' AND game_id='$gameid'";
									$result2 = mysqli_query($db, $query2)
									or die("Error Querying Database");
									$favorite= false;
									if($row2=mysqli_fetch_array($result2)!= NULL){
										$favorite= true;
									}
									$developer = $row['developer'];
									$platform = $row['platform'];
									$genre = $row['genre'];
									$rating = $row['rating'];
									$ign_score = $row['ign_score'];
									
										echo "<tr><td width = 1000>$name</td><td width = 1000>$developer</td><td width = 800>$platform</td><td width = 500>$genre</td>
											<td width = 500>$rating</td><td width = 500>$ign_score</td></tr>\n";
									
								}
								echo "</table>\n"; 
								
							?>
							</form>
							</div>	
						</div>
					</div>
				</div>
			</div>	
		</div>
	</div>
</div>
</body>
</html>
	