<?php
/*
Auteur : David vieira Luis
Projet : Revision php
Date : 02.09.2021




*/
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
    <p><a href="./inscription.php">Inscription    </a>  <a href="./administartion.php">administration</a></p>
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
  <label for="fNom">Nom</label><br>
  <input type="text" id="fNom" name="insertNom"><br>
  <label for="fNom">Prénom</label><br>
  <input type="text" id="fPrenom" name="insertPrenom"><br>
  <select name="fClasse" id="">
  <option value="Classe1">Classe1</option>
  <option value="Classe2">Classe2</option>
  <option value="Classe3">Classe3</option>
  
  </select>
  <br>

  <?php
// on affiche toute les activité disponibles
  afficherSelectActivities("fChoix1");
  ?>
  <br>

<?php
// on affiche toute les activité disponibles
afficherSelectActivities("fChoix2");
?>
  <br>
  <?php
  // on affiche toute les activité disponibles
   afficherSelectActivities("fChoix3");
  ?>
  <br>
  <input type="submit" value="Submit">
<br>

  
  <?php
  
  ?>

  <?php
  // on affiche toute les valeurs rentrés dans le formulaire
 if (isset($_POST['insertPrenom'])) {
     echo ("Nom: ".$Nom);
     echo("<br>");
     echo ("Prenom: ".$prenom);
     echo("<br>");
     echo ("Classe: ".$Classe);
     echo("<br>");
     echo ("Choix1: ".$Choix1);
     echo("<br>");
     echo ("Choix2: ".$Choix2);
     echo("<br>");
     echo ("Choix3: ".$Choix3);
    // $test = getActivites()->fetchall();

    
     //var_dump($test);
 }

  ?>
  
</form> 
</body>
</html>