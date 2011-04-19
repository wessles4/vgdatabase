<?php
session_start();
?>
<html>
<title>Advanced Search</title>
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
								<h1 align=rihgt>Specific Search</h1>
								<br>
								<p><font color=grey size=3>Search for a specific game based on game attributes.</font></p>
								<br>
								<form method="post" action="newsearch.php">
								Title:<input type="text"  name="game" id="game"/><br>
								Developer:<input type="text" name="developer" id="developer"/><br>
								Platform: <select name="platform">
								<option value=NULL></option>
								<option value="XBOX">Xbox 360</option>
								<option value="PS3">Playstation 3</option>
								<option value="WII">Wii</option>
								<option value="PC">PC</option>
								</select>
								ESRB Rating: <select name="rating">
								<option value=NULL> </option>
								<option value="AO">AO</option>
								<option value="M">M</option>
								<option value="T">T</option>
								<option value="E">E</option>
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
								<!-- 
								</select><br>
								Single Player:<input type="checkbox" name="singleplayer" value="1"><br>
								Multi-Player:<input type="checkbox" name="multiplayer" value="1"><br>
								<!--IGN Score:<input type="text" name="ignscore" id="ignscore"/><br> -->
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