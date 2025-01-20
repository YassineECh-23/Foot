<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/form.css">
  <title> Inserer Dans Clubs Database</title>
</head>
<body>
 <?php
include "../db_connection.php";
?>
<div class="nav">
  <ul>
    <li class="active"><a href="../Home.php">Home</a></li>
    <li><a href="../Carriere/Carriere.php">Carriere</a></li>
    <li><a href="../Clubs/Clubs.php">Clubs</a></li>
    <li><a href="../Clubs/insertion_Clubs.php">InsererClubs</a></li>
    <li><a href="../Joueur/Joueur.php">Joueurs</a></li>
    </ul>
</div>
<section class="newEnregistrement">
  <h1 class="titre">INSEREZ un nouvel enregistrement</h1>
  <div class="container">
    <div class="contact-form row">
      <div class="form-field col-lg-6">
        <form class="" action="insertion_Clubs_Forum_Dans_Table.php">
          <input id="name" class="input-text" type="text" name="ClubNm" required>
          <label for="name" class="label">Club Nom</label>
        </div>
        <div class="form-field col-lg-6">
          <input id="name2" class="input-text" type="text" name="ClubNmcourt" required >
          <label for="name2" class="label">Club Nom Court</label>
        </div>
        <div class="form-field col-lg-12">
          <input id="name3" class="input-text" type="text" name="ClubP" required >
          <label for="name3" class="label">Club Pays</label>
        </div>
        <div class="form-field col-lg-12">
          <input class="submit-btn" type="submit" value="Envoyer" name="envoyer">
        </div>
        </form>
    </div>
  </div>
</section>
<?php

$mysqli->close();
 ?>
</body>
</html>
