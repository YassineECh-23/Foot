<?php
include "../db_connection.php";
if (isset($_GET['supprimer'])) {
  $Jr_Id = $_GET['supprimer'];
  $ClubsId = $_GET['supprimerClubId'];
  $sql = "DELETE FROM Carriere WHERE Jr_Id =$Jr_Id AND Clubs_Id= $ClubsId";
  $mysqli->query($sql) or die($mysqli->error()) ;
  header("location: ../Carriere/Carriere.php");
}
 ?>
