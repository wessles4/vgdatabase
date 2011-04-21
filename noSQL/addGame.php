<?php
session_start();
?>
<html>
<title>The Stack - Add Game</title>
<body bgcolor=black>
<?PHP
	include("header.php");
?>
<div id="page">
	<div id="page-bgtop">
		<div id="page-bgbtm">
			<div id="content">
				<div class="post">
					<div class="post-bgtop">
						<div class="post-bgbtm">
							<div class="entry">
								<h1>ADD NEW GAME</h1>
								<br>
								<form method="post" action="gameController.php">
								Title:<input type="text"  name="game" id="game"/><br>
								Developer:<input type="text" name="developer" id="developer"/><br>
								Platform: <select name="platform">
								<option value=NULL></option>
								<option value="XBOX">Xbox 360</option>
								<option value="PS3">Playstation 3</option>
								<option value="WII">Wii</option>
								<option value="PC">PC</option>
								</select>
								<br>
								Genre: <select name="genre">
								<option value=NULL> </option>
								<option value="MMORPG">MMORPG</option>
								<option value="FPS">FPS</option>
								<option value="Racing">Racing</option>
								<option value="Sports">Sports</option>
								<option value="Open World">Open World</option>
								<option value="Music">Music</option>
								<option value="Platform">Platform</option>
								<option value="Horror">Horror</option>
								</select><br>
								IGN Score:<input type="text" name="ignscore" id="ignscore"/><br>
								<input type="submit" value=submit>
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