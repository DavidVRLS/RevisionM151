<?php
//require "./fonctionsBD.inc.php";
require "./htmlToPhp.inc.php";

afficherActivite();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

if (isset($_POST['insertPrenom'])) {
$prenom = $_POST['insertPrenom'];
$Nom = $_POST['insertNom'];
$Classe = $_POST['fClasse'];
$Choix1 = $_POST['fChoix1'];
$Choix2 = $_POST['fChoix2'];
$Choix3 = $_POST['fChoix3'];
}
//require("./inc/menu.inc.php")

?>    


<form action="" method="GET">
  <label for="fNomActivite">Nouveau nom de l'activité</label><br>
  <input type="text" id="fNomActivite" name="insertNouveauNomActivite"><br>
  
  </select>
  <br>

  <br>
  <input type="submit" value="Submit">
<br>


</form> 
</body>
</html>