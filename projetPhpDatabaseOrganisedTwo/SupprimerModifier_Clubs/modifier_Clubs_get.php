<?php
include "../db_connection.php";
if($_GET['envoyer']){
$ClubId= $_GET['ClubId'];
$ClubNm= $_GET['ClubNm'];
$ClubNmcourt= $_GET['ClubNmcourt'];
$ClubP= $_GET['ClubP'];
$query = "UPDATE Clubs SET Clubs_Id='$ClubId', Clubs_Nom='$ClubNm', Clubs_NomCourt='$ClubNmcourt', Clubs_Pays='$ClubP'
WHERE Clubs_Id= '$ClubId' ";
$update= mysqli_query($mysqli,$query);
header("location: ../Clubs/Clubs.php");
}
 ?>
