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
								$all_docs=$client->getAllDocs();
								echo "<table id=\"hor-minimalist-b\">\n<tr><th>Game Name</th><th>Developer</th><th>Platform</th><th>Genre</th><th>IGN Score</th></tr>\n\n";
								
								foreach ( $all_docs->rows as $row)
								{
									$doc = $client->getDoc($row->id);
									if($doc->platform != ""){
										$name = $doc->name;
										$developer = $doc->developer;
										$platform = $doc->platform;
										$genre = $doc->genre;
										$ign_score = $doc->ign_score;
										
										echo "<tr><td width = 1000>$name</td><td width = 1000>$developer</td><td width = 800>$platform</td><td width = 500>$genre</td>
												<td width = 500>$ign_score</td></tr>\n";
										
									}
	
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
	