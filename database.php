<?php
    $host = "172.18.22.7"; // adresse (en réseau loal) de mon serveur. L'adresse publique est sql.bts-sio.com
    $user = "vbourgues"; // votre nom d'utilisateur de BDD sur mon serveur
    $pwd = "this is not a password"; // votre mot de passe, par défaut j'ai mis votre login
    $bdd_name = "vbourgues_db"; // nom de votre base de données sur mon serveur
    $CONNEXION = mysqli_connect($host, $user, $pwd, $bdd_name) or die(mysqli_connect_error());
?>