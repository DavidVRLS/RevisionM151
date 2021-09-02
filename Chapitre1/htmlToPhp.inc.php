
<?php
require "./fonctionsBD.inc.php";
function afficherSelectActivities($name){
  echo "<select name=\"$name\">";
 $test =  getActivites()->fetchall();
 foreach ($test as $key => $value) {
  echo "<option value=$value[nomActivite]>$value[nomActivite]</option>";
 }
  
  //var_dump(getActivites());
  
  
  
  
  /*while ($donnees = getActivites()->fetch()){
    echo "<option value=$donnees[nomActivite]>$donnees[nomActivite]</option>";
    }*/


    
 /* echo "<option value=\"Accrobranche\">Accrobranche</option>";
  echo "<option value=\"vélo\">Vélo</option>";
  echo "<option value=\"Football\">Football</option>";*/
  echo "</select>";
}
//echo ($donnees['nomActivite']);

?>