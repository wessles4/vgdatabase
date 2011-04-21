<?PHP
session_start();

include "db_connect.php";
$newgame = $_POST['game'];
$newdeveloper= $_POST['developer'];
$newplatform= $_POST['platform'];
$newgenre= $_POST['genre'];
$newign= $_POST['ignscore'];

$doc1 = new couchDocument($client);

$namefound = false;
$all_docs=$client->getAllDocs();
foreach ( $all_docs->rows as $row)
{
	//echo "Username: " . $row->_id . "<br />";
	//echo "Password: " . $row->password . "<br />";
	if($newgame == $row->name){
		$namefound = true;
	}
}
	if($namefound == false){
		if($newdeveloper != null){
			if($newplatform != null){
				if($newgenre != null){
						if ($newign != null){
							try{
								$doc1->set( array('_id'=>$newgame, 'name'=>$newgame, 'platform'=>$newplatform, 'genre'=>$newgenre, 'developer'=>$newdeveloper, 'ign_score'=>$newign));
								include "home.php";
								}catch(couchException $c){

									include "addGame.php";
									echo "<center><font color='red'>game already exists!</font></center>";
								}
						}else{
							include "addGame.php";
							echo "<center><font color='red'>Please include an IGN score</font></center>";
						}
				}else{
					include "addGame.php";
					echo "<center><font color='red'>Please select a genre</font></center>";
				}
			}else{
				include "addGame.php";
				echo "<center><font color='red'>Please include a platform</font></center>";
			}
		}else{
			include "addGame.php";
			echo "<center><font color='red'>Please include a developer</font></center>";
		}
	}else{
		include "addGame.php";
		echo "<center><font color='red'>game already exists!</font></center>";
	}

?>