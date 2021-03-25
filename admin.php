<?php include "deb3.php"?>

<td id=tout><br><center>
<p class="text1">Bienvenue dans :</p><p class="text2"><i>l'espace administrateur</i></p></center><br>
</table>
<div class="div2">
</div> 
<?php
if(!is_authentified())
{
        header('location:coadmin.php');
}
?>
<?php
if (isset($_POST["titre"]))
{
	$iduser = $_COOKIE['admin1_id'];
	$titre = mysqli_real_escape_string($CO, $_POST["titre"]);
	$commentaire = addslashes ($_POST["commentaire"]);
    $categorie = $_POST["categorie"];
    $sql = 	"insert into article (art_titre, art_commentaire, art_categorie, `art_date`,art_idadmin )
	values ('$titre', '$commentaire','$categorie', NOW(), $iduser)";
	mysqli_query($CO, $sql) or die(mysqli_error($CO));
    $message_ajout = "<b>Bien ajouté</b>";
	
}

?>
<table border class="table3">
   <tr>
   <td id="tout">
   <center>
   <form method=post> 
     <p span id="orange">Titre de l'article: <br><textarea autofocus type="text" name="titre" class="input1" placeholder="titre" /></textarea></p> 
      <p span id="orange">Commentaire: <br /><textarea name="commentaire" rows="10" cols="60" class="input1" placeholder="Votre commentaire"></textarea></p> 
	  <p span id="orange">Catégorie :</p>
	  <select name="categorie"> 
	  <option value=5>Commentaire
      <option value=2>Événements en cours 
      <option value=3>Événements à venir

	  </select>
	  <br>

      <!--<p span id="orange">Choisissez une photo avec une taille inférieure à 2 Mo.</p> 
      <input type="file" name="photo"> 
      <br/><br/> -->
	  <br>
<input type="submit"value="Envoyer" class="input1">  
   </form>
   <br><center>
   <?php if (isset($message_ajout)) echo "<a span id='orange'>$message_ajout</a>"; ?>
   </center>   
   <br> 
   
<?php include "fin_page.php"?>

