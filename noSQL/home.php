<?php
session_start();
?>

<html>
<Title>The Stack</title>
<body>
<?php
	include('header.php');
	include('db_connect.php');
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
echo "<p><font size=3 color=grey>Search for games based on title.</font></p>";
?>
							<h2 align=left>Search</h2>
							<form method="post" action="search.php">
							<p><font color=grey size=3>Query our database for videogame information. Search by game title. Searches are case sensitive.</p>
							<br>
							Search:<br></font><input style="font-size:default"  type="text" name="search" id="search" size=78%/>
							<input type="submit" value="Go" name="submit" /><br><br>
							<br>
							</form>
							</div>
						</div>
					</div>
				</div>
				<?PHP
				if($_SESSION['username'] != NULL){
				?>
				
				<?PHP
				}
				?>
			</div>
			<div id="sidebar">
				<ul>
					<li>
						<h2>TOP RATED</h2>
						<ul>
						<!--- Top rated games on the site --->
						<?php
						include "db_connect.php";
						$username= $_SESSION['username'];
						$all_docs=$client->getAllDocs();
						
						
						
						foreach ( $all_docs->rows as $row)
						{
							
							$doc = $client->getDoc($row->id);
							if($first == NULL){
								$first = $doc;
							}else if(($doc->ign_score) > $first->ign_score){
								$third = $second;
								$second = $first;
								$first=$doc;
							}else if(($doc->ign_score) > $second->ign_score){
								$third = $second;
								$second=$doc;
							}else if(($doc->ign_score) > $third->ign_score){
								$third=$doc;
							}
						}
						
						echo "<li>";
							echo $first->name;
							echo "    |    <b>";
							echo $first->ign_score;
							echo "</b></li>";
						echo "<li>";
							echo $second->name;
							echo "    |    <b>";
							echo $second->ign_score;
							echo "</b></li>";
						echo "<li>";
							echo $third->name;
							echo "    |    <b>";
							echo $third->ign_score;
							echo "</b></li>";
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