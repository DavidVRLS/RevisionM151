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
function afficherActivite(){
    $dbh = getConnexion();
    $select = $dbh->query('SELECT idActivite,nomActivite FROM activite');
    while ($donnees = $select->fetch()){
        echo ("<p>".$donnees['nomActivite']."<a href=administartion.php?idActiviteModif=".$donnees['idActivite']."> éditer </a>");
    }

}
function changementDeNomActivite($idActivite,$nomActivite)
{
    $dbh = getConnexion();
    $sql = "SELECT * FROM activite ";
    $cherche = $dbh->query($sql);
       
       
    $modifie = $dbh->prepare('UPDATE activite set nomActivite = ? WHERE idActivite = ?');
    while ($result = $cherche->fetch()) {
        if ($result['idActivite'] == $idActivite) {
        $modifie->execute([$nomActivite,$idActivite]);
        var_dump($result);
    }
    }
    
}
?>