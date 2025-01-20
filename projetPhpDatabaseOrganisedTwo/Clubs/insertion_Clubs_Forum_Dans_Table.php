<?php
include "../db_connection.php";
$newClubNom = $_GET['ClubNm'];
$newClubNomCourt = $_GET["ClubNmcourt"];
$newClubPays = $_GET["ClubP"];

$sql = "INSERT INTO Clubs (Clubs_Nom, Clubs_NomCourt, Clubs_Pays) VALUES('$newClubNom', '$newClubNomCourt', '$newClubPays' )";
$resultat = $mysqli->query($sql);
include "../Clubs/Clubs.php";
 ?>
