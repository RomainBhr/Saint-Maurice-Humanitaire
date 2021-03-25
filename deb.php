<!DOCTYPE html>

<html lang="fr">
    <head>
		<title>Saint Maurice Humanitaire</title>
		<meta charset="utf-8" />
            <link rel="stylesheet" href="style.css" />
		<script type="text/javascript">

    function verif(evt) {
    var keyCode = evt.which ? evt.which : evt.keyCode;
    var interdit = '*;\t#~"¨%$£²¤§%*]{}<>|\\`\;' 
    if (interdit.indexOf(String.fromCharCode(keyCode)) >= 0) {
        return false;
    }
}
	
		</script>

    </head>
    <body>
	

		<?php
	$CO = mysqli_connect("impactcowusme.mysql.db","impactcowusme",                                                                                                                                                                                                 "Kingman21",
	"impactcowusme")or die (myslqi_connect_error()); ?>
	
	
<table class="table6">
  <tr>
     <td width=150 ><center><a href="index.php" id=a><img width=100 src="image/logo.png"></a></center>

     <td> 
<h1 style="text-align:center"><p id="orange">Saint Maurice Humanitaire</p></h1>
     <td width=150><center>

<a href="https://www.facebook.com/groups/259033978228550/?multi_permalinks=319380228860591&notif_id=1541451002204136&notif_t=group_activity" target=_blank id=a><img width=50 src="image/facebook.png"></a>

<a href="https://www.leetchi.com/c/saint-maurice-humanitaire-senegal-2019?fbclid=IwAR3_YnhiFwwYklw2poNXNOdiH9qoGKKSuBYdFeUWY4IT0J2YOOWr2dc7dRM" target=_blank id=a><img width=47 src="image/timthumb.png"></a>
</center>
</table>
		<div class="div4">
		</div>
        <div class="table7"><center><nav class="nav1">
		 
            <ul>
			    <li class="menu-acc"><a href="acc.php"><b>Accueil</b></b></a></li>
			    <li class="menu-even"><a href="notreassociation.php"><b>Notre association</b></a>
				    <ul class="submenu">
                        <li><a href="notreassociation.php">Qui sommes-nous ?</a></li>
						<!-- <li><a href="nosvoyages.php">Nos actions au Sénégale</a></li>	-->	
                    </ul>
				</li>
                <li class="menu-voyage"><a href="aventure.php"><b>Nos actions</b></a>
                    <ul class="submenu">
                        <li><a href="hum2018">Humanitaire 2018</a></li>
                        <li><a href="Hum2019">Humanitaire 2019</a></li>						
					</ul>
                </li>
                <li class="menu-123"><a href="#"><b>Événements</b></a>
                    <ul class="submenu">
                        <li><a href="eveencours.php">Événement en cours</a></li>
                        <li><a href="evenementavenir.php">Événements à venir</a></li>
                    </ul> 
                </li>
				<li class="menu-presse"><a href="presse.php"><b>Dans la presse</b></b></a></li>
<?php if (is_authentified())
{
	echo "<li class='menu-jaune'><a href='compte.php'><b>Votre compte</b></a></li> <li class='menu-ave'><a href='commentaire.php'><b> Commentaire </b></a></li> <li class='menu-voyage'><a href='deco.php'><b>Déconnexion</b></a></li> ";
}

if(!is_authentified())
{
	echo " <li class='menu-jaune'><a href='commentaire.php'><b>Commentaire</b></a></li> <li class='menu-ave'><a href='login.php'><b> Adhésion </b></a><ul class='submenu'> <li><a href='aut.php'> Connexion</a></li></ul></li>";
}

?>
            </ul>
			
        </nav></center></div>

		<div class="espace" id="ancre4">
		</div>
	 
<table border class="table3">
  <tr>
<?php
function is_authentified() { return isset($_COOKIE['user_id']); } ?>
<?php
session_start();
?>

