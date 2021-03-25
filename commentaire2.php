<?php include "deb.php"?>
<td id=tout><br><center>
<p class="text1">Bienvenue dans :</p><p class="text2"><i>l'espace commentaire </i></p></center><br>
</table>
<div class="div2">
</div>
<table border class="table3">
<tr>
<td id=tout>
<center>
<br><center><p><b>Vous semblez ne pas être connectés sur notre site, pour écrire un commentaire vous devez être connecté !</b></p>
 
 <div class="table2"><nav class="nav2">
		 
            <ul>
			    <li class="menu-acc"><a href="auth2.php">Cliquez ici pour vous connecter !</a></li>
				</ul>
				</nav></div>
				</center>
</center>

</table>
<br>


<?php 
    $sql = "SELECT * 
	from article, user, admin1
	where art_categorie = 1
    and	art_categorie = 5
	and user.id = article.art_idadmin
	and admin1.id = article.art_idadmin";
	$rs_articles = mysqli_query($CO, $sql) or die(mysqli_error($CO));
	echo "<br><table border>"; 
	while ($article = mysqli_fetch_array($rs_articles)) 
	{
		$titre = $article['art_titre'];
		$commentaire = $article['art_commentaire'];
        $categorie = $article['art_categorie'];
	    $date = $article ['art_date'];
		$user = $article['login'];
		
		echo "<br><table border class='comm'>
		<tr><td id=tout height=30px colspan=2><center><p id='orange'><b><i>$titre</i></b></p></center>
		<tr><td id=tout height=100px><center><p id='orange'><i> $user</i> :<p> $commentaire</p> </center>
		<tr><td id=tout colspan=2 height=30px><center><p><i>Poster le : $date</i></p></center></table><br>";
	}
   ?>



<?php include "fin_page.php"?>