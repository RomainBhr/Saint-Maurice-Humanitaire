<?php include "deb.php"?>
<td id=tout>  

<?php 
    $sql = "SELECT * 
	from mail, user
	where mail_categorie = 4 
	and user.id = mail.mail_idadmin";
	$rs_mail = mysqli_query($CO, $sql) or die(mysqli_error($CO));
	echo "<br><table border>"; 
	while ($mail = mysqli_fetch_array($rs_articles)) 
	{
		$email = $mail['email'];
		$commentaire = $mail['mail_commentaire'];
        $categorie = $mail['mail_categorie'];
	    $date = $mail ['mail_date'];
		$user = $mail['login'];
		
		echo "<br><table border class='table3'>
		<tr><td id=tout height=30px colspan=2><center><p id='orange'><b><i>$email</i></b></p></center>
		<tr><td id=tout height=100px><center><p id='orange'><i> $user</i> :<p> $commentaire</p> </center>
		<tr><td id=tout colspan=2 height=30px><center><p><i>Poster le : $date</i></p></center></table><br>";
	}
	echo "</table>  ";
   ?>
   
   <?php include "fin_page.php"?>