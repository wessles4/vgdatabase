<?php
session_start();
?>

<html>
<Title>Search Results</title>
<body bgcolor=black>
<center>
<?PHP
	include('header.php');
?>
<br>
<br>
<center>
<table width=75% bgcolor=white border="5" bordercolorlight=red bordercolordark="dark red">
	<tr>
	<td>
	<h1 align=left>Search Results:</h1>
	<form method="post">
		<?php
			include "db_connect.php";
			if (isset($_POST['search']))
				{
					$searchterm = mysqli_real_escape_string($db, $_POST['search']);
				 
					$query = "SELECT * FROM videogames WHERE (name LIKE '%$searchterm%') ORDER BY name";
						//$query = "SELECT * FROM videogames where zip = '$userzip' AND (name LIKE '%$searchterm%' OR type LIKE '%$searchterm') ORDER BY name";

					$result = mysqli_query($db, $query)
						or die("Error Querying Database");
					echo "<table id=\"hor-minimalist-b\">\n<tr><th>Game Name</th><th>Developer</th><th>Platform</th><th>Genre</th><th>Rating</th><th>IGN Score</th><tr>\n\n";
					while($row = mysqli_fetch_array($result)) 
					{
						$name = $row['name'];
						$developer = $row['developer'];
						$platform = $row['platform'];
						$genre = $row['genre'];
						$rating = $row['rating'];
						$ign_score = $row['ign_score'];
						

						echo "<tr><td  >$name</td><td >$developer</td><td >$platform</td><td>$genre</td><td>$rating</td><td>$ign_score</td></tr>\n";
					}
						echo "</table>\n"; 
				}
		?>
	</form>
	</td>
	</tr>
</table>
</body>
</html>
	