   <?php 
    $sql = "SELECT * from article where art_categorie = 3";
	$rs_articles = mysqli_query($CO, $sql) or die(mysqli_error($CO));
	echo "<br><table border>"; 
	while ($article = mysqli_fetch_array($rs_articles)) 
	{
		$titre = $article['art_titre'];
		$commentaire = $article['art_commentaire'];
        $categorie = $article['art_categorie'];
	    $date = $article ['art_date'];
		$user = $article['art_idadmin'];
		echo "
		<tr><td width=600px id=dg height=30px><center><p span id='orange'><b><i>$titre</i></b></p></center>
		<tr><td id=tout height=100px><center><p>$commentaire</p></center>
		<tr><td id=dgb><center><p><i>Ajouté par l'utilisateur : $user</i></p></center>
		<tr><td id=dgh><center><p><i>Le : $date</i></p></center><br>";

	}
	echo "</table>  ";
   ?>
   <br>
   <?php include "fin_page.php"?>