<?php
session_start();
?>

<html>
<Title>The Stack</title>
<body>
<?php
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
<?php
if($_SESSION['username'] != NULL){
$name = $_SESSION['username'];
echo "<h1>Welcome $name!</h1>";
}else{
echo "<h1>Welcome Guest!</h1>";
}
echo "<p><font size=3 color=grey>Search for games based on title, platform, genre or ERSB rating.</font></p>";
?>
							<h2 align=left>Search</h2>
							<form method="post" action="search.php">
							<p><font color=grey size=3>Query our database for videogame information.</p>
							<br>
							Search By:</font>
							<select name="type">
							<option value="name">Title</option>
							<option value="platform">Platform</option>
							<option value="genre">Genre</option>
							<option value="developer">Developer</option>
							<option value="rating">Rating</option>
							</SELECT>
							<br>
							
							<input style="font-size:default"  type="text" name="search" id="search" size=78%/><br><br>
							<input type="submit" value="Submit Search" name="submit" />
							</form>
							</div>
						</div>
					</div>
				</div>
				<?PHP
				if($_SESSION['username'] != NULL){
				?>
				<div class="post">
					<div class="post-bgtop">
						<div class="post-bgbtm">
							<div class="entry">
							<h2>GAMES YOU MIGHT LIKE</h2>
							<!-- include a php that recomends 3 games for the user -->
							YAY FILLING IN SPACE!!!
							</div>
						</div>
					</div>
				</div>
				<?PHP
				}
				?>
			</div>
			<div id="sidebar">
				<ul>
					<li>
						<h2>LATEST GAMES</h2>
						<ul>
						<!--- INCLUDE A PHP FILE THAT BRINGS UP THE 10 LATEST GAMES ON THE LIST --->
						<?PHP
							include "db_connect.php";
							$query= "SELECT name, platform FROM videogames ORDER BY game_id DESC LIMIT 5";
							$result=mysqli_query($db, $query);
							while($row = mysqli_fetch_array($result)){
								$title= $row['name'];
								$platform=$row['platform'];
								echo "<li>$title ($platform) </li>";
							}
						?>
						
						</ul>
					</li>
					<li>
						<h2>TOP RATED GAMES</h2>
						<ul>
						<?PHP
							$query2="SELECT name, platform, ign_score FROM videogames ORDER BY ign_score DESC LIMIT 5";
							$result2= mysqli_query($db, $query2);
							while($row2 = mysqli_fetch_array($result2)){
								$title= $row2['name'];
								$platform=$row2['platform'];
								$ign=$row2['ign_score'];
								echo "<li>$title ($platform) <b>$ign</b> </li>";
							}
						?>
						
						</ul>
					</li>
				</ul>
			</div>	
		</div>
	</div>
</div>
</body>
</html>