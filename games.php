<?php
session_start();
?>

<html>
<head>
<style type="text/css">
th {text-align: left;}
th {border-bottom: 1px solid black;}

</style>
<Title>The Stack - Browse Games</title>
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
							<h1 align=left>ALL GAMES:</h1>
							<form method="post">
							<?php
								include "db_connect.php";
								$username= $_SESSION['username'];

								$searchterm = mysqli_real_escape_string($db, $_POST['search']);
				 				$query = "SELECT * FROM videogames ORDER BY name";
								if ($_SESSION['username'] != NULL){
								$query2= "SELECT name FROM videogames INNER JOIN users INNER JOIN favorites ON videogames.game_id=favorites.game_id AND users.user_id=favorites.user_id WHERE users.username = '$username'";
								//$query = "SELECT * FROM videogames where zip = '$userzip' AND (name LIKE '%$searchterm%' OR type LIKE '%$searchterm') ORDER BY name";
								
								$result = mysqli_query($db, $query)
									or die("Error Querying Database");
								$result2 = mysqli_query($db, $query2)
									or die("Error Querying Database");
								echo "<table id=\"hor-minimalist-b\">\n<tr><th>Game Name</th><th>Developer</th><th>Platform</th><th>Genre</th><th>Rating</th><th>IGN Score</th><th>Favorite</th></tr>\n\n";
								echo "";
								while($row = mysqli_fetch_array($result)) 
								{
									$name = $row['name'];
									$favorite= false;
									while($row2= mysqli_fetch_array($result2)){
										$name2= $row2['name'];
										if($name == $name2){
											$favorite=true;
										}
									}
									$developer = $row['developer'];
									$platform = $row['platform'];
									$genre = $row['genre'];
									$rating = $row['rating'];
									$ign_score = $row['ign_score'];
									if($favorite == true){
										echo "<tr><td width = 1000>$name</td><td width = 1000>$developer</td><td width = 800>$platform</td><td width = 500>$genre</td>
											<td width = 500>$rating</td><td width = 500>$ign_score</td><td width = 500><a href='favorite.php'><img src='star.png'></a></td></tr>\n";
									}else{
										echo "<tr><td width = 1000>$name</td><td width = 1000>$developer</td><td width = 800>$platform</td><td width = 500>$genre</td>
											<td width = 500>$rating</td><td width = 500>$ign_score</td><td width = 500><a href='favorite.php'><img src='starempty.png'></a></td></tr>\n";
									}
								}
								echo "</table>\n"; 
								}else{
									$result = mysqli_query($db, $query)
									or die("Error Querying Database");
									echo "<table id=\"hor-minimalist-b\">\n<tr><th>Game Name</th><th>Developer</th><th>Platform</th><th>Genre</th><th>Rating</th><th>IGN Score</th><th>Favorite</th></tr>\n\n";
									echo "";
									while($row = mysqli_fetch_array($result)) 
									{
										$name = $row['name'];
										$developer = $row['developer'];
										$platform = $row['platform'];
										$genre = $row['genre'];
										$rating = $row['rating'];
										$ign_score = $row['ign_score'];
										echo "<tr><td width = 1000>$name</td><td width = 1000>$developer</td><td width = 800>$platform</td><td width = 500>$genre</td>
											<td width = 500>$rating</td><td width = 500>$ign_score</td></tr>\n";
									}
									echo "</table>\n";
								}
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
	