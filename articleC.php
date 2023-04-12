<?php
	include 'C:/xampp/htdocs/Works/marwan/Dashboard/Config.php';
	include_once 'C:/xampp/htdocs/Works/marwan/Dashboard/Model/article.php';


class articleC {
/////..............................Afficher............................../////
function AfficherArticle(){
    $sql="SELECT * FROM article";
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
function Supprimerarticle($idA){
    $sql="DELETE FROM article WHERE idA=:idA";
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
function Ajouterarticle($article){
    $sql="INSERT INTO article (nomA,quantite,prix,modeleA) 
    VALUES (:nomA,:quantite,:prix,:modeleA)";
    
    $db = config::GetConnexion();
    try{
        $query = $db->prepare($sql);
        $query->execute([
            
            'nomA' => $article->getnomA(),
            'quantite' => $article->getquantite(),
            'prix' => $article->getprix(),
            'modeleA' =>$article->getmodeleA(),
            
            
    ]);			
    }
    catch (Exception $e){
        echo 'Erreur: '.$e->GetMessage();
    }			
}

/////..............................Affichage par la cle Primaire............................../////
function Recupererarticle($idA){
 
    $sql="SELECT * from article where idA = idA";
    $db = config::getConnexion();
    try{
        $query=$db->prepare($sql);
        $query->execute();

        $article=$query->fetch();
        return $article;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}

/////..............................Update............................../////
function Modifierarticle($article, $idA){
    try {
        $db = config::getConnexion();
$query = $db->prepare('UPDATE article SET   nomA = :nomA, quantite = :quantite, prix = :prix , modeleA = :modeleA WHERE idA= :idA');
        $query->execute([
            'nomA' => $article->getnomA(),
            'quantite' => $article->getquantite(),
            'prix' => $article->getprix(),
            'modeleA' => $article->getmodeleA(),
            'idA' => $idA
           
        ]);
        echo $query->rowCount() . " records UPDATED successfully <br>";
    } catch (PDOException $e) {
        $e->getMessage();
    }
}
 }

?>