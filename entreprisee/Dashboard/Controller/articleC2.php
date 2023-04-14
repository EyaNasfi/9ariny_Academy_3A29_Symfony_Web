<?php
	include 'C:/xampp/htdocs/Works/marwan/Dashboard/Config.php';
	include_once 'C:/xampp/htdocs/Works/marwan/Dashboard/Model/article2.php';


class articleC2 {
/////..............................Afficher............................../////
function AfficherArticle2(){
    $sql="SELECT * FROM article2";
    $db = config::getConnexion();
    try{
        $liste = $db->query($sql);
        return $liste;
    }
    catch(Exception $e){
        die('Erreur:'. $e->getMessage());
    }
}


/////..............................Supprimer............................../////
function Supprimerarticle2($idA){
    $sql="DELETE FROM article2 WHERE idA=:idA";
    $db = config::getConnexion();
    $req=$db->prepare($sql);
    $req->bindValue(':idA', $idA);   
    try{
        $req->execute();
    }
    catch(Exception $e){
        die('Erreur:'. $e->getMessage());
    }
}

/////..............................Ajouter............................../////
function Ajouterarticle2($article2){
    $sql="INSERT INTO article2 (nomA,quantite,prix,modeleA) 
    VALUES (:nomA,:quantite,:prix,:modeleA)";
    
    $db = config::GetConnexion();
    try{
        $query = $db->prepare($sql);
        $query->execute([
            
            'nomA' => $article2->getnomA(),
            'quantite' => $article2->getquantite(),
            'prix' => $article2->getprix(),
            'modeleA' =>$article2->getmodeleA(),
            
            
    ]);			
    }
    catch (Exception $e){
        echo 'Erreur: '.$e->GetMessage();
    }			
}

/////..............................Affichage par la cle Primaire............................../////
function Recupererarticle2($idA){
 
    $sql="SELECT * from article2 where idA = idA";
    $db = config::getConnexion();
    try{
        $query=$db->prepare($sql);
        $query->execute();

        $article2=$query->fetch();
        return $article2;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}

/////..............................Update............................../////
function Modifierarticle2($article2, $idA){
    try {
        $db = config::getConnexion();
$query = $db->prepare('UPDATE article2 SET   nomA = :nomA, quantite = :quantite, prix = :prix , modeleA = :modeleA WHERE idA= :idA');
        $query->execute([
            'nomA' => $article2->getnomA(),
            'quantite' => $article2->getquantite(),
            'prix' => $article2->getprix(),
            'modeleA' => $article2->getmodeleA(),
            'idA' => $idA
           
        ]);
        echo $query->rowCount() . " records UPDATED successfully <br>";
    } catch (PDOException $e) {
        $e->getMessage();
    }
}
 }

?>