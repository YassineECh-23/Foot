<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/form.css">
  <title> Inserer Dans Joueurs Database</title>
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
    <li><a href="../Joueur/Joueur.php">Joueurs</a></li>
    <li><a href="../Joueur/insertion_Joueur.php">InsererJoeurs</a></li>
    </ul>
</div>
<section class="newEnregistrement">
  <h1 class="titre">INSEREZ un nouvel enregistrement</h1>
  <div class="container">
    <div class="contact-form row">
      <div class="form-field col-lg-6">
        <form class="" action="insertion_Joueur_Forum_Dans_Table.php">
          <input id="name" class="input-text" type="text" name="Jr_Nom" required>
          <label for="name" class="label">Jr_Nom</label>
        </div>
        <div class="form-field col-lg-6">
          <input id="name2" class="input-text" type="text" name="Jr_Prenom" requiredrequired>
          <label for="name2" class="label">Jr_Prenom</label>
        </div>
        <div class="form-field col-lg-6">
          <input id="name3" class="input-text" type="text" name="Jr_Naissance" required>
          <label for="name3" class="label">Jr_Naissance aa-jj-mm</label>
        </div>
        <div class="form-field col-lg-6">
          <input id="name3" class="input-text" type="text" name="Jr_Post" required>
          <label for="name3" class="label">Jr_Post</label>
        </div>
        <div class="form-field col-lg-6">
          <input id="name3" class="input-text" type="text" name="Jr_Nationalite" required>
          <label for="name3" class="label">Jr_Nationalite</label>
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
