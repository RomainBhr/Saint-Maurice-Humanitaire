<?php include "deb.php"?>
<?php
if(!is_authentified())
{
        header('location:index.php');
}
?>
<tr><td id=tout>
<center>
<p span id="orange"><b>Modification de votre compte : </b></p>

<?php 
$CO = mysqli_connect('127.0.0.1','rboehler',                                                                                                                                                                                                                                                                                    'Kingman21','rboehler_articles');

$usr_id = $_COOKIE["user_id"];
if (isset($_FILES['avatar']))
{

// déplace depuis le dossier temporaire vers les avatars
move_uploaded_file($_FILES['avatar']['tmp_name'], 'pdp/'.$_FILES['avatar']['name']);
$avatar = @imagecreatefromgif('pdp//'.$_FILES['avatar']['name']);
if (!$avatar) $avatar = @imagecreatefromjpeg('pdp/'.$_FILES['avatar']['name']);
if (!$avatar) $avatar =  @imagecreatefrompng('pdp/'.$_FILES['avatar']['name']);
imagejpeg($avatar, 'pdp/'.$_COOKIE['user_id'].'.jpg');
unlink( 'pdp/'.$_FILES['avatar']['name']);
}

if(isset($_POST['login']))
{
	$login = addslashes ($_POST['login']);
	$email = addslashes ($_POST['email']);
	$pwd = addslashes ($_POST['pwd']);
	$Numero = addslashes ($_POST['Numero']);
	$ville =addslashes ($_POST['ville']);
	$sql = "UPDATE user SET
	login = '$login',
	email = '$email',
    pwd = sha1('$pwd'),
	Numero = '$Numero',
	ville = '$ville'
	WHERE id =$usr_id
	";
	mysqli_query($CO, $sql) or die(mysqli_error($CO));
	$message = "Vous avez bien modifier vos informations";
}

$sql = "select * from user where id = $usr_id";
$rs_user = mysqli_query($CO, $sql) or die(mysqli_error($CO));
$user = mysqli_fetch_assoc($rs_user);
$login = htmlspecialchars($user['login'], ENT_QUOTES);
$email = htmlspecialchars($user['email'], ENT_QUOTES);
$pwd = htmlspecialchars($user['pwd'], ENT_QUOTES);
$Numero = htmlspecialchars($user['Numero'], ENT_QUOTES);
$ville = htmlspecialchars($user['ville'], ENT_QUOTES);


echo "<form method=post action='' enctype='multipart/form-data'>

<table>

<tr><p><b>Voici vos information que vous pouvez modifier :</b></p>
<tr><td><p>Nom d'utilisateur :</p><td>
<input placeholder='Votre nom' autofocus name=login class='input1' pattern=\w{3,60} value='$login' onkeypress='return verif(event);'><td><p><i>* Entre 3 et 60 caractères</i></p><br>

<tr><td><p>Mail :</p><td><input name=email class='input1' placeholder='Votre email' value='$email' onkeypress='return verif(event);'><br>

<tr><td><p>Numéro de téléphone:</p><td><input placeholder='Votre numéro de téléphone' name=Numero class='input1' value='$Numero' onkeypress='return verif(event);'><br>

 <tr><td><p>Ville :</p><td><input name=ville class='input1' placeholder='Le nom de votre ville' value='$ville' onkeypress='return verif(event);'><br>

 <tr><td><p>Mot de passe :</p><td><input placeholder='Votre mot de passe' type=password name=pwd class='input1' pattern=\w{3,60} value='$pwd' onkeypress='return verif(event);'><td><p><i>* Entre 3 et 60 caractères</i></p><br> 

<tr><td><td><center><input class='input1' type=submit value='Modifier mes informations'></center>
</table><br>
</form>";

?>
<p><b>choisissez votre avatar :</b></p>
<form method="post" enctype="multipart/form-data">
   <input type="file" name="avatar">
   <button>Envoyer</button>
 </form>

<?php
if (isset($message)) 
	echo "<span id='orange'> $message </span>";



?>

</center>
<br>
<?php include "fin_page.php"?>