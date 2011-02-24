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
	<h1 align=left>ALL GAMES:</h1>
	<form method="post">
		<?php
			include "db_connect.php";
					$searchterm = mysqli_real_escape_string($db, $_POST['search']);
				 
					$query = "SELECT * FROM videogames ORDER BY name";
						//$query = "SELECT * FROM videogames where zip = '$userzip' AND (name LIKE '%$searchterm%' OR type LIKE '%$searchterm') ORDER BY name";

					$result = mysqli_query($db, $query)
						or die("Error Querying Database");
					echo "<table id=\"hor-minimalist-b\">\n<tr><th>Game Name</th><th>Developer</th><th>Platform</th><th>Genre</th><th>Rating</th><th>IGN Score</th></tr>\n\n";
					echo "";
					while($row = mysqli_fetch_array($result)) 
					{
						$name = $row['name'];
						$developer = $row['developer'];
						$platform = $row['platform'];
						$genre = $row['genre'];
						$rating = $row['rating'];
						$ign_score = $row['ign_score'];
						

						echo "<tr><td width = 1000>$name</td><td width = 1000>$developer</td><td width = 800>$platform</td><td width = 500>$genre</td><td width = 500>$rating</td><td width = 500>$ign_score</td></tr>\n";
					}
						echo "</table>\n"; 
		?>
	</form>
	</td>
	</tr>
</table>
</body>
</html>
	