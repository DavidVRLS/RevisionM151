<?php
//require "./fonctionsBD.inc.php";
require "./htmlToPhp.inc.php";

/*if (isset($_GET["idActiviteModif"])) {
    changementDeNomActivite($_GET["idActiviteModif"]);
    /*if (isset($erreur)) {
        echo ($erreur);
    }
    else{ 
    "vous venez de supprimer un article";
    }
}*/
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
if (isset($_GET["idActiviteModif"]) && !is_null($_GET["idActiviteModif"])) {
    //changementDeNomActivite($_GET["idActiviteModif"]);
    $idActiviteModif = $_GET["idActiviteModif"];
    $_SESSION['idActivite'] = $idActiviteModif;
    ?>
<form action="" method="get">
<label for="fNouveauNomActivite">Nouveau nom de l'Activité</label><br>
  <input type="text" id="fNomActivite" name="insertNouveauNomActivite"><br>
  <label for="fNomClasse">Nouveau nom de la classe</label><br>
  <input type="text" id="fNouveauNomClasse" name="insertNouveauNomClasse"><br>


  <input type="submit" value="Submit">



   <?php 
 }
 
 $nouveauNomActivite = $_GET['insertNouveauNomActivite'];
var_dump($_SESSION['idActivite']);
var_dump($nouveauNomActivite);
 changementDeNomActivite($_SESSION['idActivite'],$nouveauNomActivite);
 
 
 ?>




</form>
  
  <?php
  if (($_GET['insertNomClasse']!= "" )) {
    inscription($_GET['insertNomClasse'],$_GET['insertNomActivite']);
  }
  
  ?>

  
  
</form> 
</body>
</html>