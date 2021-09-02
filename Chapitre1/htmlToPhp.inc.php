
<?php
/*
Auteur : David vieira Luis
Projet : Revision php
Date : 02.09.2021




*/
require "./fonctionsBD.inc.php";
//avec la function j'affiche les  activités
function afficherSelectActivities($name){
  echo "<select name=\"$name\">";
  //je fais un foreach pour parcourir tout le tableau et ensuite j'affiche toute les valeurs se trouvant dans la base de donnée
 $test =  getActivites()->fetchall();
 foreach ($test as $key => $value) {
  echo "<option value=$value[nomActivite]>$value[nomActivite]</option>";
 }
  echo "</select>";
}

?>