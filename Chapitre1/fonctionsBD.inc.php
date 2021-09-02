<?php
function getConnexion(){
    try{
        session_start();
        $dbh = new PDO('mysql:host=localhost;dbname=journeesportive', 'root', '');
        
        //
        return $dbh;
        }
        catch (PDOException $e){
            echo("<p> Erreur: ".$e->getMessage());
            
            
            die();
        }
}
function getActivites(){
    $dbh = getConnexion();
    $select = $dbh->query('SELECT nomActivite FROM activite');
    return $select;
   /* while ($donnees = $select->fetch()){
        echo ($donnees['nomActivite']);
        }*/
}
function inscription($classe,$nomActivite){
    $dbh = getConnexion();
    $insertActivite = $dbh->prepare('INSERT INTO activite(nomActivite) values(?);');
    $insertActivite->execute([$nomActivite]);
    $insertClasse = $dbh->prepare('INSERT INTO classe(nomClasse) values(?);');
    $insertClasse->execute([$classe]);
}
?>