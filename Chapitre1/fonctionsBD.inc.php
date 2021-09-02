<?php
/*
Auteur : David vieira Luis
Projet : Revision php
Date : 02.09.2021




*/
session_start();
function getConnexion(){
    try{
        
        $dbh = new PDO('mysql:host=localhost;dbname=journeesportive', 'root', '');
        
        //
        return $dbh;
        }
        catch (PDOException $e){
            echo("<p> Erreur: ".$e->getMessage());
            
            
            die();
        }
}
//on affiche tout les activités
function getActivites(){
    $dbh = getConnexion();
    $select = $dbh->query('SELECT nomActivite FROM activite');
    return $select;
   /* while ($donnees = $select->fetch()){
        echo ($donnees['nomActivite']);
        }*/
}
//on rajoute l'activité dans la base de donnée avec cette fonction
function inscriptionActivite($nomActivite){
    $dbh = getConnexion();
    $insertActivite = $dbh->prepare('INSERT INTO activite(nomActivite) values(?);');
    $insertActivite->execute([$nomActivite]);
    
}
//on rajoute la classe dans la base de donnée avec cette fonction
function inscriptionClasse($nomClasse){
    $dbh = getConnexion();
$insertClasse = $dbh->prepare('INSERT INTO classe(nomClasse) values(?);');
    $insertClasse->execute([$nomClasse]);
}
  //on affiche toute les Activité  et donne des valeurs sur les liens pour pouvoir les utilisers dans les autres fonctions
function afficherActivite(){
    $dbh = getConnexion();
    $select = $dbh->query('SELECT idActivite,nomActivite FROM activite');
    while ($donnees = $select->fetch()){
        echo ("<p>".$donnees['nomActivite']."<a href=administartion.php?idActiviteModif=".$donnees['idActivite']."> éditer     </a><a href=administartion.php?idActiviteSupprime=".$donnees['idActivite']."> supprimer </a>");
    }


    //on affiche toute les classes  et donne des valeurs sur les liens pour pouvoir les utilisers dans les autres fonctions
    function afficherClasse(){
        $dbh = getConnexion();
        $select = $dbh->query('SELECT idClasse,nomClasse FROM classe');
        while ($donnees = $select->fetch()){
            echo ("<p>".$donnees['nomClasse']."<a href=administartion.php?idClasseModif=".$donnees['idClasse']."> éditer     </a><a href=administartion.php?idClasseSupprime=".$donnees['idClasse']."> supprimer </a>");
        }
    
    }

}
//on change le nom de l'activité grace a son idée et on change la valeur grace a la 2 ieme variable
function changementDeNomActivite($idActivite,$nomActivite)
{
    $dbh = getConnexion();
    $sql = "SELECT * FROM activite ";
    $cherche = $dbh->query($sql);
       
       
    $modifie = $dbh->prepare('UPDATE activite set nomActivite = ? WHERE idActivite = ?');
    while ($result = $cherche->fetch()) {
        if ($result['idActivite'] == $idActivite) {
        $modifie->execute([$nomActivite,$idActivite]);
       // var_dump($result);
    }
    }
    
}
// on supprime l'activiter séléctonner grace a son id mit en valeur dans la fonction
function suppresionActivite($idASupprimer){
    $dbh = getConnexion();
    $supprime = $dbh->prepare('DELETE FROM activite WHERE idActivite = ?');
    $supprime->execute([$idASupprimer]);
  //  var_dump($supprime);
}
// on change de nom la classe prise en valeur et on la trouve grace a son id
function changementDeNomClasse($idClasse,$nomClasse)
{
    $dbh = getConnexion();
    $sql = "SELECT * FROM classe ";
    $cherche = $dbh->query($sql);
       
       
    $modifie = $dbh->prepare('UPDATE classe set nomClasse = ? WHERE idClasse = ?');
    while ($result = $cherche->fetch()) {
        if ($result['idClasse'] == $idClasse) {
        $modifie->execute([$nomClasse,$idClasse]);
      // var_dump($result);
    }
    }
    
}
//on supprime la classe prise dans la fonction
function suppresionClasse($idASupprimer){
    $dbh = getConnexion();
    $supprime = $dbh->prepare('DELETE FROM classe WHERE idClasse = ?');
    $supprime->execute([$idASupprimer]);
  //  var_dump($supprime);
}
?>