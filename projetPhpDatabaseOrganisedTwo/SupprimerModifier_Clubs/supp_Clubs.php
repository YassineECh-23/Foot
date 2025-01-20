<?php
include "../db_connection.php";
if (isset($_GET['supprimer'])) {
  $Club_Id = $_GET['supprimer'];
  $sql = "DELETE FROM Clubs WHERE Clubs_Id =$Club_Id";
  $mysqli->query($sql) or die($mysqli->error()) ;
  header("location: ../Clubs/Clubs.php");
}
 ?>
