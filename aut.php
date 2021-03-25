<?php include "deb.php"?>
<?php
if (is_authentified())
{
        header('location:accueil2.php');
}
?>
<?php
 if(isset($_POST['login']))
 {
	 $login = addslashes ($_POST['login']);
	 $pwd = addslashes ($_POST['pwd']);
	 $sql = "select * from user
	     where login = '$login' and pwd = sha1('$pwd')";
	$rs_user = mysqli_query($CO,$sql) or die(mysqli_error($CO));
	if ($user = mysqli_fetch_assoc($rs_user))
	{
		setcookie("user_id",$user['id']);
		setcookie("user_login",$user['login']);
        header('location:accueil2.php');
	}
	else 
		echo "<td id=tout><center><h2><p id=rouge>Erreur dans le nom ou le mot de passe</p></h2></center>";
	
	 
 }
?>
<tr><td width=800 id=tout>
<center><p id="orange"><b>Connectez-vous sur notre site :</b></p></center>
<form method=post>
<table style=margin:auto;>
 <tr><td><br>
 <tr><td>Nom :<td><input autofocus name=login class="input1" placeholder="Votre nom" onkeypress="return verif(event);"><br>
 <tr><td>Mot de passe : <td><input name=pwd type=password class="input1" placeholder="Votre mot de passe" onkeypress="return verif(event);"><br>
 <tr><td><td><center><input type=button onclick="this.form.submit()" class="input1" value="Je me connecte !"></center><br>
  <tr><br><td colspan=2><center><p><b>Vous n'êtes pas inscrits ?</b></p>
 
 <div class="table2"><nav class="nav2">
		 
            <ul>
			    <li class="menu-acc"><a href="login.php">Cliquez ici pour vous inscrire !</a></li>
				</ul>
				</nav></div>
 </table>
</form>
<br>

<?php include "fin_page.php"?>