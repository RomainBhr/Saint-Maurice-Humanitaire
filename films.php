<?php include "deb.php"?>
<form><center><h1><p span id='bleuf'><u><i>Rechercher un film</u> :</i></p></h1><input name=search placeholder=Rechercher></center><br></form>
<?php
    $CO = mysqli_connect("sql.bts-sio.com","sig","sig","films");
    if(isset($_GET['search']))
	{
	$search = $_GET['search'];
	$sql = "select * from film where film_titre like '%$search%' limit 100";
	}
	else $sql ="select * from film limit 100";
	
	$liste_de_films = mysqli_query($CO,$sql) or die(myssqli_error($CO));
	
	while ($un_film = mysqli_fetch_assoc($liste_de_films))
	{
	 $titre = $un_film['film_titre']; 	
	 $url = $un_film['film_url_affiche']; 
	 $id = $un_film['film_id']; 
	 echo "<center><img src=$url><br><h3><i><a href=fiche.php?id=$id>$titre</a></i></h3></center>";
	}


?>
<?php include "fin_page.php"?>