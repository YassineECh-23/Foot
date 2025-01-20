<?php
include "../db_connection.php";
if($_GET['envoyer']){
$JrId= $_GET['Jr_Id'];
$JrNom= $_GET['Jr_Nom'];
$JrPrenom= $_GET['Jr_Prenom'];
$JrNaissance= $_GET['Jr_Naissance'];
$JrPost= $_GET['Jr_Post'];
$JrNationalite= $_GET['Jr_Nationalite'];
$query = "UPDATE Joueurs SET Jr_Id='$JrId', Jr_Nom='$JrNom', Jr_Prenom='$JrPrenom', Jr_Naissance='$JrNaissance',
Jr_Post='$JrPost', Jr_Nationalite='$JrNationalite' WHERE Jr_Id= '$JrId' ";
$update= mysqli_query($mysqli,$query);
header("location: ../Joueur/Joueur.php");
}
 ?>
