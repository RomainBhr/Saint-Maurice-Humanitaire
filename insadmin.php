<?php include "deb.php"?>
<?php
if(is_authentified())
{
        header('location:index.php');
}
?><tr><td width=800 id=tout>
<?php
  if(isset($_POST['logina']))
 {
	 $logina = $_POST['logina'];
	 $pwd = $_POST['pwd'];
	 $sql ="INSERT INTO admin1
	 VALUES(null,'$logina', sha1('$pwd'))";
	 mysqli_query($CO,$sql) or die(mysqli_error($CO));
	 echo "<center><h1><p id=orange>Vous êtes bien inscrit !</p></h1></center>";
 }
 ?>

<center><p span id="orange"><b>Inscrivez-vous sur notre site : </b></p></center>

 <form method=post>
 <table style=margin:auto;>
 <tr><td><br>
 <tr><td><p>Nom d'utilisateur :</p><td><input placeholder="Votre nom" autofocus name=logina class="input1" pattern=\w{3,60}><td><p><i>* Entre 3 et 60 caractères</i></p><br>
 <tr><td><p>Mot de passe :</p><td><input placeholder="Votre mot de passe" type=password name=pwd class="input1" pattern=\w{3,60}><td><p><i>* Entre 3 et 60 caractères</i></p><br>   
  <tr><td><td><center><input type=button onclick="this.form.submit()" value="Je m'inscris !" class="input1"></center>
   <tr><td colspan=3>
 <br>
 <center><p>déjà inscris ?</p>  <div class="table2"><nav class="nav2">
		 
            <ul>
			    <li class="menu-acc"><a href="aut.php">Cliquer ici pour vous connectez !</a></li>
				</ul>
</nav></div></center>
 </table>
 </form>
 <br>

<?php include "fin_page.php"?>