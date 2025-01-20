<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Joueurs Database</title>
    <link rel="stylesheet" href="../css/table.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
  </head>
  <body >
    <div class="nav">
      <ul>
        <li class="active"><a href="../Home.php">Home</a></li>
        <li><a href="../Carriere/Carriere.php">Carriere</a></li>
        <li><a href="../Clubs/Clubs.php">Clubs</a></li>
        <li><a href="../Joueur/Joueur.php">Joueurs</a></li>
        <li><a href="../Joueur/insertion_Joueur.php">InsererJoueurs</a></li>
        </ul>
    </div>
    <div class="insertionMessage">
        <h1>enregistrements de Joueurs Database</h1>
    </div>
  </body>
  </html>
<?php
if ($mysqli->connect_errno) {
    echo "Échec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "<br>";


$sql = "SELECT Jr_Id, Jr_Nom, Jr_Prenom, Jr_Naissance, Jr_Post, Jr_Nationalite FROM Joueurs";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  echo "<table class=center > ";
  echo "<tr>
        <th>Jr_Id</th>
        <th>Jr_Nom</th>
        <th>Jr_Prenom</th>
        <th>Jr_Naissance</th>
        <th>Jr_Post</th>
        <th>Jr_Nationalite</th>
        <th colspan='2' align='center'>Modifier/Supprimer</th>
        </tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row["Jr_Id"]."</td>";
    echo "<td>" . $row["Jr_Nom"]."</td>";
    echo "<td>" . $row["Jr_Prenom"]."</td>";
    echo "<td>" . $row["Jr_Naissance"]."</td>";
    echo "<td>" . $row["Jr_Post"]."</td>";
    echo "<td>" . $row["Jr_Nationalite"]."</td>";
    echo "<td><a href= '../SupprimerModifier_Joueur/supp_Joueur.php?supprimer=$row[Jr_Id]' class='btn btn-danger'>Supprimer</td>";
    echo "<td><a href= '../SupprimerModifier_Joueur/modifier_Joueur.php?Jr_Id=$row[Jr_Id]&Jr_Nom=$row[Jr_Nom]
    &Jr_Prenom=$row[Jr_Prenom]&Jr_Naissance=$row[Jr_Naissance]&Jr_Post=$row[Jr_Post]&Jr_Nationalite=$row[Jr_Nationalite]'
    class='btn btn-success'>Modifier</td>";
    echo "</tr>";
  }
    echo "</table>";
} else {
  echo "0 results";
}
?>
