<?php include "deb.php"?>
<?php
if(!is_authentified())
{
        header('location:auth2.php');
}
?>
<?php
if (isset($_POST["titre"]))
{
	$iduser = $_COOKIE['user_id'];
	$titre = mysqli_real_escape_string($CO, $_POST["titre"]);
	$commentaire = $_POST["commentaire"];
    $categorie = $_POST["categorie"];
    $sql = 	"insert into article (art_titre, art_commentaire, art_categorie, `art_date`,art_idadmin )
	values ('$titre', '$commentaire','$categorie', NOW(), $iduser)";
	mysqli_query($CO, $sql) or die(mysqli_error($CO));
    $message_ajout = "<b>Bien ajouté</b>";
	
}

?>
   <tr>
   <td id="tout">
   <center>
   <h2> <p span id="orange">Espace administrateur</p span id="orange"></h2> 
   </center>
   <tr>
   <td>
   <center>
   <form method=post> 
      <p span id="orange">Titre de l'article: <br><input type="text" name="titre" /></p> 
      <p span id="orange">Commentaire: <br /><input name="commentaire" rows="10" cols="50"></p> 
      <input type="hidden" name="MAX_FILE_SIZE" value="2097152"> 
	  <p span id="orange">Catégorie :</p>
	  <select name="categorie">
      <option value=1>Événements en cours </select>
      <option value=2>Événements à venir

      <p span id="orange">Choisissez une photo avec une taille inférieure à 2 Mo.</p> 
      <input type="file" name="photo"> 
      <br/><br/> 
      <input type="submit"value="Envoyer"> 
   </form>
   <br><center>
   <?php if (isset($message_ajout)) echo "<a span id='orange'>$message_ajout</a>"; ?>
   </center>   
   <br> 
   
<?php include "fin_page.php"?>

