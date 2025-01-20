<?php
include "../db_connection.php";
$Jr_Id = $_GET['Jr_Id'];
$Clubs_Id = $_GET["Clubs_Id"];
$debut = $_GET["debut"];
$Fin = $_GET["Fin"];

$sql = "INSERT INTO Carriere (Jr_Id, Clubs_Id, debut, Fin) VALUES('$Jr_Id', '$Clubs_Id', '$debut', '$Fin' )";
$resultat = $mysqli->query($sql);
include "../Carriere/Carriere.php";
 ?>
