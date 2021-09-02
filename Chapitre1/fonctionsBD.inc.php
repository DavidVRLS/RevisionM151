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
?>