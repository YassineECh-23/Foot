<?php
include "../db_connection.php";
if (isset($_GET['supprimer'])) {
  $JrId = $_GET['supprimer'];
  $sql = "DELETE FROM Joueurs WHERE Jr_Id =$JrId";
  $mysqli->query($sql) or die($mysqli->error()) ;
  header("location: ../Joueur/Joueur.php");
}
 ?>
