<?php
$adresseBdd = "localhost:8889";
$utilisateurBdd = "root";
$mdpBdd = "root";
$nomBdd = "restaurant";

try {

    $connexion = new PDO("mysql:host=" . $adresseBdd . ";dbname=" . $nomBdd . ";charset=utf8", $utilisateurBdd, $mdpBdd);
}
catch(PDOException $erreur) {

    echo "Erreur: " . $erreur->getMessage();
}