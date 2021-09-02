<?php
/*
Auteur : David vieira Luis
Projet : Revision php
Date : 02.09.2021




*/
//require "./fonctionsBD.inc.php";

// avec le require je connecte le fichier htmlToPhp.inc.php à ce fichier
require "./htmlToPhp.inc.php";

//j'appelle la fonction pour afficher les activités
afficherActivite();

?>
<br>
<?php
//j'appelle la fonction pour afficher les classes
afficherClasse();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <p><a href="./inscription.php">Inscription    </a>  <a href="./administration.php">administration</a></p>
</head>
<body>
<?php
/*
if (isset($_POST['insertPrenom'])) {
$prenom = $_POST['insertPrenom'];
$Nom = $_POST['insertNom'];
$Classe = $_POST['fClasse'];
$Choix1 = $_POST['fChoix1'];
$Choix2 = $_POST['fChoix2'];
$Choix3 = $_POST['fChoix3'];
}*/
//require("./inc/menu.inc.php")

?>    


<form action="" method="GET">
  <label for="fNomActivite">Nom de l'Activité</label><br>
  <input type="text" id="fNomActivite" name="insertNomActivite"><br>
  <label for="fNomClasse">Nom de la classe</label><br>
  <input type="text" id="fNomClasse" name="insertNomClasse"><br>
  
  </select>
  <br>
  <input type="submit" value="Submit">
<br> 
<?php

//je regarde si il a cliquer sur le lien et si il a cliquer je le mets dans une variable et ensuite je l'enregisre dans une session
// ensuite j'appelle la classe qui va supprimer la valeur rentré qui est la session
if (isset($_GET["idClasseSupprime"])&& !is_null($_GET["idClasseSupprime"])) {
    $idClasseSupprimer = $_GET["idClasseSupprime"];
    $_SESSION['idClasseASupprimer'] = $idClasseSupprimer;
  //  var_dump($_SESSION["idClasseASupprimer"]);
    suppresionClasse($_SESSION["idClasseASupprimer"]);
}




//
/// Pour les activités
//
//pour supprimer

//c'est la même chose que pour la classe on change juste lea clés ou on pointent
//et quelque variables
if (isset($_GET["idActiviteSupprime"])&& !is_null($_GET["idActiviteSupprime"])) {
    $idActiviteSupprimer = $_GET["idActiviteSupprime"];
    $_SESSION['idActiviteASupprimer'] = $idActiviteSupprimer;
   // var_dump($_SESSION["idActiviteASupprimer"]);
    suppresionActivite($_SESSION["idActiviteASupprimer"]);
}

//pour modifier

// je regarde si il a bien cliquer sur le lien et ensuite je met la valeur dans une variable et ensuite dans une session 
//j'ai aussi fait que c'est que quand on clique sur le lien que ca affiche une boite de texte pour rentrer nos valeurs
if (isset($_GET["idActiviteModif"]) && !is_null($_GET["idActiviteModif"])) {
    //changementDeNomActivite($_GET["idActiviteModif"]);
    $idActiviteModif = $_GET["idActiviteModif"];
    $_SESSION['idActivite'] = $idActiviteModif;




?>



<form action="" method="get">
<label for="fNouveauNomActivite">Nouveau nom de l'Activité</label><br>
  <input type="text" id="fNomActivite" name="insertNouveauNomActivite"><br>


  <input type="submit" value="Submit">



   <?php 

 }
 // ici je regarde si dans la boite de texte pour changer la valeur d'une activite si elle contient au moins un valeur
 //si oui j'appelle la fonction
 if ($_GET['insertNouveauNomActivite'] != "") {
     $nouveauNomActivite = "";
 $nouveauNomActivite = $_GET['insertNouveauNomActivite'];

 changementDeNomActivite($_SESSION['idActivite'],$nouveauNomActivite);
 }
 
 // ici on regarde si on a voulu modifier une classe et ensuiteon ouvre une boite de texte pour insérer notre nouveau pour ensuite utiliser la fonction
 if (isset($_GET["idClasseModif"]) && !is_null($_GET["idClasseModif"])) {
    //changementDeNomActivite($_GET["idActiviteModif"]);
    $idClasseModif = $_GET["idClasseModif"];
    $_SESSION['idClasse'] = $idClasseModif;
//
/// Pour les classes
//




?>
<form action="" method="get">
<label for="fNomClasse">Nouveau nom de la classe</label><br>
  <input type="text" id="fNouveauNomClasse" name="insertNouveauNomClasse"><br>


  <input type="submit" value="Submit">

  </form>



</form>
  
  <?php
 }
 // on regarde si on a une valeur dans la boite de texte  et ensuite on la met dans la fonction pour changer le nom
 if ($_GET["insertNouveauNomClasse"] != "") {
      $nouveauNomClasse = $_GET['insertNouveauNomClasse'];
 }


 changementDeNomClasse($_SESSION["idClasse"],$nouveauNomClasse);

// si il y a une valeur la boite de texte pour rajouter des activités on l'insère grace a la fonction
  if ((($_REQUEST["insertNomActivite"] != "") )) {
    inscriptionActivite($_GET['insertNomActivite']);
  }
  // si il y a une valeur la boite de texte pour rajouter des Classes on l'insère grace a la fonction
  if ((($_REQUEST["insertNomClasse"] != "") )) {
    inscriptionClasse($_GET['insertNomClasse']);
  }
  
  ?>

  
  
</form> 
</body>
</html>