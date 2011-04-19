<?php
session_start();
?>

<html>
<head>
<style type="text/css">
th {text-align: left;}
th {border-bottom: 1px solid black;}

</style>
</head>
<Title>Search Results</title>

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
								<h1 align=left>Search Results:</h1>
								<form method="post">
								<?php
									include "db_connect.php";
									$username= $_SESSION['username'];
									
									if (isset($_POST['search']))
									{
										$searchterm = mysqli_real_escape_string($db, $_POST['search']);
										$searchtype = mysqli_real_escape_string($db, $_POST['type']);
										$query = "SELECT * FROM videogames WHERE ($searchtype LIKE '%$searchterm%') ORDER BY name";
										//$query = "SELECT * FROM videogames where zip = '$userzip' AND (name LIKE '%$searchterm%' OR type LIKE '%$searchterm') ORDER BY name";
										$result = mysqli_query($db, $query)
										or die("Error Querying Database");
										
										if ($_SESSION['username'] != NULL){
										?><table id="hor-minimalist-b" class="tablesorter">
											<thead>
											<tr>
											<th>Game Name</th>
											<th>Developer</th>
											<th>Platform</th>
											<th>Genre</th>
											<th>Rating</th>
											<th>IGN Score</th>
											<th>Favorite</th>
											</tr>
											</thead>
											<tbody>
										<?php
										
										while($row = mysqli_fetch_array($result)) 
										{
											$name = $row['name'];
											$gameid=$row['game_id'];
											$query2= "SELECT game_id FROM favorites INNER JOIN users ON users.user_id=favorites.user_id WHERE users.username = '$username' AND favorites.game_id='$gameid'";
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
											if($favorite==true){
												echo "<tr><td width = 1000>$name</td><td width = 1000>$developer</td><td width = 800>$platform</td><td width = 500>$genre</td>
												<td width = 500>$rating</td><td width = 500>$ign_score</td><td width = 500><a href='favorite.php?game=$gameid'><img src='star.png'></a></td></tr>\n";
											}else{
												echo "<tr><td width = 1000>$name</td><td width = 1000>$developer</td><td width = 800>$platform</td><td width = 500>$genre</td>
												<td width = 500>$rating</td><td width = 500>$ign_score</td><td width = 500><a href='favorite.php?game=$gameid'><img src='starempty.png'></a></td></tr>\n";
											}
											
										}
											?></tbody></table><?php
										}else{
											echo "<table id=\"hor-minimalist-b\" class=\"tablesorter\"><thead><tr><th>Game Name</th><th>Developer</th><th>Platform</th><th>Genre</th><th>Rating</th><th>IGN Score</th></tr></thead><tbody>";
											echo "";
											while($row = mysqli_fetch_array($result)){
												$name = $row['name'];
												$developer = $row['developer'];
												$platform = $row['platform'];
												$genre = $row['genre'];
												$rating = $row['rating'];
												$ign_score = $row['ign_score'];
												echo "<tr><td width = 1000>$name</td><td width = 1000>$developer</td><td width = 800>$platform</td><td width = 500>$genre</td>
													<td width = 500>$rating</td><td width = 500>$ign_score</td></tr>";
											}
										echo "</tbody></table>";
										}

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
	