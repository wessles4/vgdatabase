<?php
session_start();
?>

<html>
<head>
<style type="text/css">
th {text-align: left;}
th {border-bottom: 1px solid black;}

</style>
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
									
									#if (isset($_POST['game']))
									
										$searchtitle = $_POST['game'];
										$searchdeveloper= $_POST['developer'];
										$searchplatform= $_POST['platform'];
										$searchrating= $_POST['rating'];
										$searchgenre= $_POST['genre'];
										#$searchsingle= $_POST['singleplayer'];
										#$searchmulti= $_POST['multiplayer'];
										
										#$searchterm = mysqli_real_escape_string($db, $_POST['search']);
										#$searchtype = mysqli_real_escape_string($db, $_POST['type']);
										$query = "SELECT * FROM videogames WHERE (name LIKE '%$searchtitle%' AND developer LIKE '%$searchdeveloper%' AND platform LIKE '%$searchplatform%' AND rating LIKE '%$searchrating%' AND genre LIKE '%$searchgenre%') ORDER BY name";
										//$query = "SELECT * FROM videogames where zip = '$userzip' AND (name LIKE '%$searchterm%' OR type LIKE '%$searchterm') ORDER BY name";
										$result = mysqli_query($db, $query)
										or die("Error Querying Database");
										
										
										
										echo "<table id=\"hor-minimalist-b\">\n<tr><th>Game Name</th><th>Developer</th><th>Platform</th><th>Genre</th><th>Rating</th><th>IGN Score</th></tr>\n\n";
										echo "";
										while($row = mysqli_fetch_array($result)){
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
	