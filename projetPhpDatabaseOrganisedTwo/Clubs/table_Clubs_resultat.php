<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Football Database</title>
    <link rel="stylesheet" href="../css/table.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
  </head>
  <body >
    <div class="nav">
      <ul>
        <li class="active"><a href="../Home.php">Home</a></li>
        <li><a href="../Carriere/Carriere.php">Carriere</a></li>
        <li><a href="../Clubs/Clubs.php">Clubs</a></li>
        <li><a href="../Clubs/insertion_Clubs.php">InsererClubs</a></li>
        <li><a href="../Joueur/Joueur.php">Joueurs</a></li>
        </ul>
    </div>
    <div class="insertionMessage">
        <h1>enregistrements de Clubs Database</h1>
    </div>
  </body>
  </html>
<?php
if ($mysqli->connect_errno) {
    echo "Échec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "<br>";


$sql = "SELECT Clubs_Id, Clubs_Nom,Clubs_NomCourt, Clubs_Pays FROM Clubs";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  echo "<table class=center > ";
  echo "<tr>
        <th>Clubs_Id</th>
        <th>Clubs_Nom</th>
        <th>Clubs_NomCourt</th>
        <th>Clubs_Pays</th>
        <th colspan='2' align='center'>Modifier/Supprimer</th>
        </tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row["Clubs_Id"]."</td>";
    echo "<td>" . $row["Clubs_Nom"]."</td>";
    echo "<td>" . $row["Clubs_NomCourt"]."</td>";
    echo "<td>" . $row["Clubs_Pays"]."</td>";
    echo "<td><a href= '../SupprimerModifier_Clubs/supp_Clubs.php?supprimer=$row[Clubs_Id]' class='btn btn-danger'>Supprimer</td>";
    echo "<td><a href= '../SupprimerModifier_Clubs/modifier_Clubs.php?Clubs_Id=$row[Clubs_Id]&Clubs_Nom=$row[Clubs_Nom]
    &Clubs_NomCourt=$row[Clubs_NomCourt]&Clubs_Pays=$row[Clubs_Pays]' class='btn btn-success'>Modifier</td>";
    echo "</tr>";
  }
    echo "</table>";
} else {
  echo "0 results";
}
?>
