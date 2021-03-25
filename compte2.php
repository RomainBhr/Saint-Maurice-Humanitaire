<?php include "deb3.php"?>
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
$CO = mysqli_connect('127.0.0.1','rboehler',                                                                                                                                                                                                                                                                                    'Kingman21','rboehler_db');

$admin1_id = $_COOKIE["admin1_id"];
if(isset($_POST['logina']))
{
	$logina = $_POST['logina'];
	$pwda = $_POST['pwda'];
	$sql = "UPDATE admin1 SET
	login = '$logina',
    pwd = sha1('$pwda'),
	WHERE id =$admin1_id
	";
	mysqli_query($CO, $sql) or die(mysqli_error($CO));
	$message = "Vous avez bien modifier vos informations";
}

$sql = "select * from admin1 where id = $admin1_id";
$rs_user = mysqli_query($CO, $sql) or die(mysqli_error($CO));
$user = mysqli_fetch_assoc($rs_admin1);
$logina = $user['logina'];
$pwda = $user['pwda'];


echo "<form method=post action='' enctype='multipart/form-data'>

<table>

<tr><p><b>Voici vos information que vous pouvez modifier :</b></p>
<tr><td><p>Nom d'utilisateur :</p><td><input placeholder='Votre nom' autofocus name=login class='input1' pattern=\w{3,60} value=$login ><td><p><i>* Entre 3 et 60 caractères</i></p><br>

 <tr><td><p>Mot de passe :</p><td><input placeholder='Votre mot de passe' type=password name=pwd class='input1' pattern=\w{3,60} value=$pwd ><td><p><i>* Entre 3 et 60 caractères</i></p><br> 

<tr><td><td><center><input class='input1' type=submit value='Modifier mes informations'></center>
</table><br>
</form>";

if (isset($message)) 
	echo "<span id='orange'> $message </span>";



?>

</center>
<br>
<?php include "fin_page.php"?>