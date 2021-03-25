<?php include "deb.php"?>
<td id=tout><br><center>
<p class="text1">Bienvenue dans :</p><p class="text2"><i>l'espace commentaire </i></p></center><br>
</table>

<div class="div2">
</div>


<?php
if (isset($_POST["titre"]))
{
	$iduser = $_COOKIE['user_id'];
	$titre = mysqli_real_escape_string($CO, $_POST["titre"]);
	$commentaire = addslashes ($_POST["commentaire"]);
    $categorie = $_POST["categorie"];
    $sql = 	"insert into article (art_titre, art_commentaire, art_categorie, `art_date`,art_idadmin )
	values ('$titre', '$commentaire','$categorie', NOW(), $iduser)";
	mysqli_query($CO, $sql) or die(mysqli_error($CO));
    $message_ajout = "<b>Bien ajouté</b>";
	$_SESSION['datecome'] = time();
	header ('location:commentaire.php');
}

?>

<?php
if( is_authentified() ) 
	if(!isset($_SESSION['datecome']) ||  time()>$_SESSION['datecome']+60) {
?>
<table border class="table3">
   <tr>
   <td id="tout">
   
   <center>
   
   <form method=post> 
      <p span id="orange">Titre de l'article: 
	  <br>
	  <textarea autofocus type="text" name="titre" class="input1" placeholder="titre" pattern=\w{1,60} 
	  onkeypress="return verif(event);"></textarea></p> <p><i>* Entre 1 et 60 caractères</i></p><br>

      <p span id="orange">Commentaire: <br />
	  <textarea name="commentaire" rows="10" cols="50" class="input1" placeholder="Votre commentaire" pattern=\w{1,180} 
	  onkeypress="return verif(event);"></textarea></p><p><i>* Entre 1 et 180 caractères</i></p><br>

      <input type="hidden" name="MAX_FILE_SIZE" value="2097152"> 
	  
	  
      <br><input type="submit"value="Envoyer" class="input1"> 
	 <div id='myText' style='visibility: hidden'>	  
	  <select name="categorie">
      <option value=1>Laisser un commentaire </select></div>
   </form><br>   <?php if (isset($message_ajout)) echo "<a span id='orange'>$message_ajout</a>"; ?></table>
   
   <?php }
   else 
	   echo "<div class=div2>
</div><table border class=table3><tr><td id=tout> <center><p id=orange><b>Merci votre commentaire a bien été envoyé</b> !<p>Afin de réduire le spam nous avons réduis les commentaires à 1 par minute ! 
</p></center></table>";   
   else
	   echo "<div class=div2>
</div>  <table border class=table3><tr><td id=tout>
   
   <center>
   <td id=tout><center><p span id=orange><b>Laissez-nous un <u>petit message</u> :</b></p>
<br><center><p><b>Vous semblez ne pas être connectés sur notre site, pour écrire un commentaire vous devez être connecté !</b></p>
 
 <div class=table2><nav class=nav2>
		 
            <ul>
			    <li class=menu-acc><a href=auth2.php>Cliquez ici pour vous connecter !</a></li>
				</ul>
				</nav></div>
				</center>
   </center>
  
   
</table> ";
  
   ?>
   



<div class="div2">
</div>


   <?php 
    ;
	$rs_articles = mysqli_query($CO, $sql) or die(mysqli_error($CO));
	echo "<br><table border>"; 
	while ($article = mysqli_fetch_array($rs_articles)) 
	{
		
		$idadmin = $article['art_idadmin'];
		$titre = $article['art_titre'];
		$commentaire = $article['art_commentaire'];
        $categorie = $article['art_categorie'];
	    $date = $article ['art_date'];
		$user = $article['login'];
		
		$avatar='pdp/'.$idadmin.'.jpg';
   if(!file_exists($avatar))$avatar="pdp/default.jpg";

   
		
		echo "<br><table border class='table3'>
				<tr><td id=tout height=100px><center><p id='orange' height=30px style=border-radius:10px><img src=$avatar height=30px style=border-radius:10px></p><p id=orange><i> $user</i></p> </center> 
				<tr><td id=tout height=30px colspan=2><center><p id='orange' style=word-break:break-all;><b><i>$titre</i></b></p></center>
                <center><p style=word-break:break-all;> $commentaire</p> </center>
		<tr><td id=tout colspan=2 height=30px><center><p><i>Poster le : $date</i></p></center></table><br>";
	}
	echo "</table>  ";
   ?>

<?php 
    $sql = "SELECT * 
	from article, admin1
	where art_categorie = 5
	and admin1.id = article.art_idadmin";
	$rs_articles = mysqli_query($CO, $sql) or die(mysqli_error($CO));
	echo "<br><table border>"; 
	while ($article = mysqli_fetch_array($rs_articles)) 
	{
		$idadmin = $article['art_idadmin'];
		$titre = $article['art_titre'];
		$commentaire = $article['art_commentaire'];
        $categorie = $article['art_categorie'];
	    $date = $article ['art_date'];
		$user = $article['logina'];
			$avatar='pdp/'.$idadmin.'.jpg';
   if(!file_exists($avatar))$avatar="pdp/default.jpg";
	
	
		echo "<br><table border class='table3'>
		<tr><td id=tout height=100px><center><p id='orange' height=30px style=border-radius:10px><img src=$avatar height=30px style=border-radius:10px> <p id='rouge'><i>
		<b>Administrateur $user</i> :</b></p>
		<tr><td id=tout height=30px colspan=2><center><p id='orange'><b><i>$titre</i></b></p><p> $commentaire</p> </center>
		<tr><td id=tout colspan=2 height=30px><center><p><i>Poster le : $date</i></p></center></table><br>";
	}
	
	echo "</table>  ";
   ?>

 

<?php include "fin_page.php"?>