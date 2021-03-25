<?php include "deb.php"?>
<center>
<?php
if(isset($_GET['proposition']))
{
	if($_GET['proposition'] == $_COOKIE['nbd'])
		echo "Bravo !<a href=#>Recommencer</a>";
    elseif($_GET['proposition'] > $_COOKIE['nbd'])
        echo "<h3><p span id=bleuf>Le nombre est plus petit que ça</p></h3>"; 
	else 
		echo"<h3><p span id=bleuf>Le nombre à deviner est plus grand</p></h3>";
	echo"<form><input type=text name=proposition autofocus><input type=submit></form><br>";
	
}
else
{
$nbd = rand(1,100);
setcookie('nbd', $nbd);
echo "<form>
<h3><p span id=bleuf>J'ai choisi un nombre au hasard entre 1 et 100, essayez de deviner :</p></h3><br>
<input type=text name=proposition autofocus placeholder='Votre proposition'>
<input type=submit>
</form><br>";
}
?>
</center>
<?php include "fin_page.php"?>