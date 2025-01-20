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
  $Jr_Id= $_GET['Jr_Id'];
  $Jr_Nom= $_GET['Jr_Nom'];
  $Jr_Prenom= $_GET['Jr_Prenom'];
  $Jr_Naissance= $_GET['Jr_Naissance'];
  $Jr_Post= $_GET['Jr_Post'];
  $Jr_Nationalite= $_GET['Jr_Nationalite'];
   ?>

<div class="nav">
  <ul>
    <li class="active"><a href="../Home.php">Home</a></li>
    <li><a href="../Carriere/Carriere.php">Carriere</a></li>
    <li><a href="../Clubs/Clubs.php">Clubs</a></li>
    <li><a href="../Joueur/insertion_Clubs.php">InsererClubs</a></li>
    <li><a href="../Joueur/Joueur.php">Joueurs</a></li>
    </ul>
</div>
<section class="newEnregistrement">
  <h1 class="titre">Modifer cet enregistrement</h1>
  <div class="container">
    <div class="contact-form row">
      <div class="form-field col-lg-6">
        <form class="" action="modifier_Joueur_get.php">
          <input id="name" class="input-text" type="text" value="<?php echo "$Jr_Id" ?>" name="Jr_Id">
          <label for="name" class="label">Jr_Id</label>
        </div>
      <div class="form-field col-lg-6">
          <input id="name" class="input-text" type="text" value="<?php echo "$Jr_Nom" ?>" name="Jr_Nom">
          <label for="name" class="label">Jr_Nom</label>
        </div>
        <div class="form-field col-lg-6">
          <input id="name2" class="input-text" type="text" value="<?php echo "$Jr_Prenom" ?>" name="Jr_Prenom" >
          <label for="name2" class="label">Jr_Prenom</label>
        </div>
        <div class="form-field col-lg-12">
          <input id="name3" class="input-text" type="text" value="<?php echo "$Jr_Naissance" ?>" name="Jr_Naissance" >
          <label for="name3" class="label">Jr_Naissance</label>
        </div>
        <div class="form-field col-lg-12">
          <input id="name3" class="input-text" type="text" value="<?php echo "$Jr_Post" ?>" name="Jr_Post" >
          <label for="name3" class="label">Jr_Post</label>
        </div>
        <div class="form-field col-lg-12">
          <input id="name3" class="input-text" type="text" value="<?php echo "$Jr_Nationalite" ?>" name="Jr_Nationalite" >
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
