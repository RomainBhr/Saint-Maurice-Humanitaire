<?php include "deb.php"?>
<td id=tout colspan=3>
<center><br>
<p class="text1">Bienvenue dans :</p><p class="text2"><i>Nous contacter </i></p>
<br>
</center>
</table>
<br>
<?php
if (isset($_POST["titre"]))
{
	$iduser = $_COOKIE['user_id'];
	$titre = mysqli_real_escape_string($CO, $_POST["titre"]);
	$commentaire = addslashes ($_POST["commentaire"]);
    $categorie = $_POST["categorie"];
    $sql = 	"insert into mail (mail_titre, mail_commentaire, mail_categorie, `mail_date`,mail_idadmin )
	values ('$titre', '$commentaire','$categorie', NOW(), $iduser)";
	mysqli_query($CO, $sql) or die(mysqli_error($CO));
    $message_ajout = "<b>Bien ajouté</b>";
	$_SESSION['datecom1'] = time();
	header ('location:contacter2.php');
	
}

?>

<?php
if( is_authentified() ) 
	if(!isset($_SESSION['datecom1']) ||  time()>$_SESSION['datecom1']+60) {
?>
   <div class="div2">
</div>
<table border class=table3>
<tr>
   <td id="tout">
   
   <center>
   <td id=tout><center><p span id="orange"><b>Laissez-nous un <u>petit message</u> :</b></p></center>
   
   
   <form method=post> 
   <center>
      <p span id="orange">Votre email : <br><textarea autofocus type="text" name="titre" class="input1" 
	  placeholder="email ex: humanitaire@gmail.com" pattern=\w{1,60} onkeypress="return verif(event);"></textarea></p><p><i>* Entre 1 et 60 caractères</i></p><br> 
	  <p span id="orange">Votre message: <br /><textarea name="commentaire" rows="10" cols="50" class="input1" 
	  placeholder="Votre mail" pattern=\w{1,180} onkeypress="return verif(event);"></textarea></p><p><i>* Entre 1 et 180 caractères</i></p><br>
      <input type="hidden" name="MAX_FILE_SIZE" value="2097152"> 
	  
	   
	  
      <br><input type="submit"value="Envoyer" class="input1"> 
	 <div id='myText' style='visibility: hidden'>	  
	  <select name="categorie">
      <option value=4>mail </select></div>
	  </center>
	  </table>
   </form>
      <?php }
   else 
	   echo "<div class=div2>
</div><table border class=table3><tr><td id=tout> <center><p id=orange>Merci <b> votre mail a bien été envoyé</b> !<p>Afin de réduire le spam nous avons réduis les mails à 1 par minute ! </p></center></table>";   
   else
	   echo "<div class=div2>
</div>  <table border class=table3><tr><td id=tout>
   
   <center>
   <td id=tout><center><p span id=orange><b>Laissez-nous un commenatire :</b></p>
<br><center><p><b>Vous semblez ne pas être connectés sur notre site, pour écrire un commenatire vous devez être connecté !</b></p>
 
 <div class=table2><nav class=nav2>
		 
            <ul>
			    <li class=menu-acc><a href=auth3.php>Cliquez ici pour vous connecter !</a></li>
				</ul>
				</nav></div>
				</center>
   </center>
  
   
</table> ";
  
   ?>
    
   </table>
   <div class=div2>
</div>
  <table border class="table3"> 
<tr>
<td id=tout>
<CENTER>
                             <p id=orange><u><i>Siège social</p></i></u><br>
                             60 ZA les grands prés maison des associations
                             26110 Saint Maurice sur Eygues
                             
							 <p id=orange><u><i>Ou nous contacter avec</p></i></u><br>
							 
                             Tel : 06.38.81.72.33     mail : benoit.defrance@orange.fr<br>
</center>
</table>
<br>
<table border class="table3">
<tr>
<td id=tout>
<center><p span id="orange"><u><b>Où nous trouver :</u></b></p></center>
<tr>
<td id=tout>
<center>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12820.273058944404!2d5.003172371490177!3d44.30190831304961!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b57f727a17d001%3A0x408ab2ae4bfb850!2s26110+Saint-Maurice-sur-Eygues!5e0!3m2!1sfr!2sfr!4v1557737939292!5m2!1sfr!2sfr" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</center>
<center><p span id="orange">(Cliquez sur l'image)</p></center>
<?php include "fin_page.php"?>