<?php
include "../db_connection.php";
if($_GET['envoyer']){
$JrId= $_GET['Jr_Id'];
$ClubId= $_GET['Clubs_Id'];
$debut= $_GET['debut'];
$Fin= $_GET['Fin'];
$query = "UPDATE Carriere SET Jr_Id='$JrId', Clubs_Id='$ClubId', debut='$debut', Fin='$Fin'
WHERE Jr_Id= '$JrId' AND Clubs_Id= '$ClubId' ";
$update= mysqli_query($mysqli,$query);
header("location: ../Carriere/Carriere.php");
}
 ?>
