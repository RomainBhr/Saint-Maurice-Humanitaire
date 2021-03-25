<?php include "debut_page.php"?>
<?php
$COF = mysqli_connect("sql.bts-sio.com","sig","sig","films");


$id = $_GET["id"];
$sql = "select * from film where film_id = $id";
$liste_d_un_film = mysqli_query($COF, $sql) or die(mysqli_error($COF));
$film = mysqli_fetch_assoc($liste_d_un_film);
$affiche = $film["film_url_affiche"];
	 $url = $film['film_url_affiche']; 
	 $id = $film['film_id']; 
	 echo "<center><img src=$url></center>";
$titre = $film["film_titre"];
echo "<br><h3><p span id=bleuf>Film :</p></h1>";
echo $titre;

$id = $_GET["id"];
$sql = "select * from film_artiste, 
     artiste where filmart_artiste_id = art_id 
	 and filmart_film_id = $id";
$liste_artistes = mysqli_query($COF, $sql) or die(mysqli_error($COF));
echo "<br><h3><p span id=bleuf>Artiste :</p></h1>";
while ($artiste = mysqli_fetch_assoc($liste_artistes))

{
$nom = $artiste["art_nom"];
echo $nom."-";
}
$resumer = $film["film_synopsis"];
echo "<br><h3><p span id=bleuf>Résumé :</p></h1>";
echo " $resumer";
$genre = $film["film_genre"];
$sql = "select * from film_genre where gnr_film_id = $id";
$liste_genre = mysqli_query($COF, $sql) or die(mysqli_error($COF));
echo "<br><h3><p span id=bleuf>Genre du film :</p></h1>";
while ($genre = mysqli_fetch_assoc($liste_genre))
{
echo $genre['gnr_libelle'];
}
?>
<?php include "fin_page.php"?>