<?php
//require "./fonctionsBD.inc.php";
require "./htmlToPhp.inc.php";

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


<form action="" method="POST">
  <label for="fNomActivite">Nom de l'Activité</label><br>
  <input type="text" id="fNomActivite" name="insertNomActivite"><br>
  <label for="fNomClasse">Nom de la classe</label><br>
  <input type="text" id="fNomClasse" name="insertNomClasse"><br>
  
  </select>
  <br>
  <!--<select name="fChoix1" id="">
  <option value="Accrobranche">Accrobranche</option>
  <option value="vélo">Vélo</option>
  <option value="Football">Football</option> 
  
  </select>-->
  <br>

  <!--
  <select name="fChoix2" id="">
  <option value="Accrobranche">Accrobranche</option>
  <option value="vélo">Vélo</option>
  <option value="Football">Football</option>
  
  </select>
-->
  <br>
  <input type="submit" value="Submit">
<br>

  
  <?php
  if (isset($_POST['insertNomClasse'])) {
    inscription($_POST['insertNomClasse'],$_POST['insertNomActivite']);
  }
  
  ?>

  
  
</form> 
</body>
</html>