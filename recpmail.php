<?php include "deb3.php"?>
<?php
if(!is_authentified())
{
        header('location:accueil2.php');
}
?>

<td id=tout><br><center>
<p class="text1">Bienvenue dans :</p><p class="text2"><i>la reception des mails </i></p></center><br>
</table>
<div class="div2">
</div> 

<?php 
    $sql = "SELECT * 
	from mail, user
	where mail_categorie = 4 
	and user.id = mail.mail_idadmin";
	$rs_mail = mysqli_query($CO, $sql) or die(mysqli_error($CO));
	echo "<br><table border>"; 
	while ($mail = mysqli_fetch_array($rs_mail)) 
	{
		$titre = $mail['mail_titre'];
		$commentaire = $mail['mail_commentaire'];
        $categorie = $mail['mail_categorie'];
	    $date = $mail ['mail_date'];
		$user = $mail['login'];
		
		echo "<br><table border class='table3'>
		<tr><td id=tout height=30px colspan=2><center><p id='orange'><b><i>$titre</i></b></p></center>
		<tr><td id=tout height=100px><center><p id='orange'><i> $user</i> :<p> $commentaire</p> </center>
		<tr><td id=tout colspan=2 height=30px><center><p><i>Poster le : $date</i></p></center></table><br>";
	}
	echo "</table>  ";
   ?>
   
   <?php include "fin_page.php"?>