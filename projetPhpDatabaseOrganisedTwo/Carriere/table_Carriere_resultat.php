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
        <li><a href="../Carriere/insertion_Carriere.php">InsererCarriere</a></li>
        <li><a href="../Clubs/Clubs.php">Clubs</a></li>
        <li><a href="../Joueur/Joueur.php">Joueurs</a></li>
        </ul>
    </div>
    <div class="insertionMessage">
        <h1>enregistrements de Carriere Database</h1>
    </div>
  </body>
  </html>
<?php
if ($mysqli->connect_errno) {
    echo "Échec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "<br>";


$sql = "SELECT Jr_Id, Clubs_Id, debut, Fin FROM Carriere";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  echo "<table class=center > ";
  echo "<tr>
        <th>Jr_Id</th>
        <th>Clubs_Id</th>
        <th>debut</th>
        <th>Fin</th>
        <th colspan='2' align='center'>Modifier/Supprimer</th>
        </tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row["Jr_Id"]."</td>";
    echo "<td>" . $row["Clubs_Id"]."</td>";
    echo "<td>" . $row["debut"]."</td>";
    echo "<td>" . $row["Fin"]."</td>";
    echo "<td><a href= '../SupprimerModifier_Carriere/supp_Carriere.php?supprimer=$row[Jr_Id] & supprimerClubId=$row[Clubs_Id]' class='btn btn-danger'>Supprimer</td>";
    echo "<td><a href= '../SupprimerModifier_Carriere/modifier_Carriere.php?Jr_Id=$row[Jr_Id]&Clubs_Id=$row[Clubs_Id]
    &debut=$row[debut]&Fin=$row[Fin]' class='btn btn-success'>Modifier</td>";
    echo "</tr>";
  }
    echo "</table>";
} else {
  echo "0 results";
}
?>
