<?php include "deb.php"?>
<td id=tout><br><center>
<p class="text1">Bienvenue dans :</p><p class="text2"><i>les événements en cours</i></p></center><br>
</table>

<?php 
    $sql = "SELECT * 
	from article, admin1
	where art_categorie = 2
	and admin1.id = article.art_idadmin";
	$rs_articles = mysqli_query($CO, $sql) or die(mysqli_error($CO));
	echo "<br><table border>"; 
	while ($article = mysqli_fetch_array($rs_articles)) 
	{
		$titre = $article['art_titre'];
		$commentaire = $article['art_commentaire'];
        $categorie = $article['art_categorie'];
	    $date = $article ['art_date'];
		$user = $article['logina'];
		
		echo "<br><table border class='table3'>
		<tr><td id=tout height=30px colspan=2><center><p id='orange'><b><i>$titre</i></b></p></center>
		<tr><td id=tout height=100px><center>
		<p> $commentaire</p> </center>
		<tr><td id=tout colspan=2 height=30px><center><p><i>Le : $date</i></p></center></table><br>";
	}
	echo "</table>  ";
   ?>


<?php include "fin_page.php"?>