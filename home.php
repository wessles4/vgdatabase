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
?>
							
							<form method="post" action="search.php">
							<font color=grey size=3>Query our database for videogame information. Search by game name. </br></br>
							Search: 
							<input type="text" name="search" id="search input" /> 
							<input type="submit" value="Go" name="submit" />  
							</font> 
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
						</ul>
					</li>
				</ul>
			</div>	
		</div>
	</div>
</div>
</body>
</html>