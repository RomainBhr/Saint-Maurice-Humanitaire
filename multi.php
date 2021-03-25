<?php include "deb.php"?>
<center><h3><p span id='bleuf'><u><i>Calcule mentale</u> :</i></p></h3></center>
<?php
if (isset($_GET['réponse']))
{
	$nb1 = $_COOKIE['nombre1'];
	$nb2 = $_COOKIE['nombre2'];
	$réponse = $_GET['réponse'];
	$bonne_réponse = $nb1 * $nb2;
	if ($réponse == $bonne_réponse)
     echo "<center><p span id='bleuf'>C'est la bonne réponse ! =) La bonne réponse est bien = $nb1 x $nb2 = $bonne_réponse</p></center>";
    else 
		echo "<center><p span id='bleuf'>NUL NUL NUL NUL même GERMAIN est meilleur fils de maÏs ! La bonne réponse est = $nb1 x $nb2 = $bonne_réponse</p></center>";
	
}
$nb1 = rand(2, 10);
$nb2 = rand(2, 10);
setcookie('nombre1',$nb1);
setcookie('nombre2',$nb2);
echo "<br><form>
  <center>Combien font $nb1 x $nb2 = <input type=text autofocus placeholder=Calcule name=réponse>
  <input type=submit value='Essayer'></center><br>
  </form>";
?>
<?php include "fin_page.php"?>
