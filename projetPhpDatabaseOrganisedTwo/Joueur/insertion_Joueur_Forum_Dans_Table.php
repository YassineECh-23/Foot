<?php
include "../db_connection.php";
$Jr_Nom = $_GET["Jr_Nom"];
$Jr_Prenom = $_GET["Jr_Prenom"];
$Jr_Naissance = $_GET["Jr_Naissance"];
$Jr_Post= $_GET["Jr_Post"];
$Jr_Nationalite= $_GET["Jr_Nationalite"];

$sql = "INSERT INTO joueurs(Jr_Nom, Jr_Prenom, Jr_Naissance, Jr_Post, Jr_Nationalite) VALUES('$Jr_Nom', '$Jr_Prenom', '$Jr_Naissance', '$Jr_Post', '$Jr_Nationalite' )";
$resultat = $mysqli->query($sql);
include "../Joueur/Joueur.php";
 ?>
