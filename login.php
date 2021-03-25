<?php include "deb.php"?>
<?php
if(is_authentified())
{
        header('location:redirection.php');
}
?><tr><td width=800 id=tout>

 
<?php
if(!isset($_SESSION['datecom']) ||  time()>$_SESSION['datecom']+86400) {
?>

<center><p span id="orange"><b>Inscrivez-vous sur notre site : </b></p></center>

 <form method=post>
 <table style=margin:auto;>
 <tr><td><br>
 <tr><td><p>Nom d'utilisateur :</p><td><input placeholder="Votre nom" autofocus name=login class="input1" pattern=\w{3,60} onkeypress="return verif(event);"><td><p><i>* Entre 3 et 60 caractères</i></p><br>
 <tr><td><p>Mail :</p><td><input name=mail class="input1" placeholder="Votre email" onkeypress="return verif(event);"><br>
 <tr><td><p>Mot de passe :</p><td><input placeholder="Votre mot de passe" type=password name=pwd class="input1" pattern=\w{3,60} onkeypress="return verif(event);"><td><p><i>* Entre 3 et 60 caractères</i></p><br>   
 <tr><td><p>Numéro de téléphone:</p><td><input placeholder="Votre numéro de téléphone" name=Numero class="input1" onkeypress="return verif(event);"><br>
 <tr><td><p>Ville :</p><td><input name=ville class="input1" placeholder="Le nom de votre ville" onkeypress="return verif(event);"><br>
 <tr><td><td><center><input type=button onclick="this.form.submit()" value="Je m'inscris !" class="input1"></center>
   <tr><td colspan=3>
 <br>
 <center><p>déjà inscrits ?</p>  <div class="table2"><nav class="nav2">
		 
            <ul>
			    <li class="menu-acc"><a href="aut.php">Cliquez ici pour vous connecter !</a></li>
				</ul>
</nav></div></center>
 </table>
 </form>
    
   <?php }
   else {
	   echo "<center><p id=rouge><b>Vous pouvez créer qu'un compte par jour ! </b></p></center>
	    <center><div class=table2><nav class=nav2>
		 
            <ul>
			    <li class=menu-acc><a href=aut.php>Cliquez ici pour vous connectez !</a></li>
				</ul>
				</nav></div>
				</center>
	   ";

	   }
	   
   ?>
   
  


<?php include "fin_page.php"?>