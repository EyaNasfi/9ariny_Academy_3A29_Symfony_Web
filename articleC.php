<?php
	include 'C:/xampp/htdocs/marwan/Dashboard/Config.php';
	include_once 'C:/xampp/htdocs/marwan/Dashboard/Model/article.php';


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
    $sql="INSERT INTO article (nomA,quantite,prix,modeleA,idC,image) 
    VALUES (:nomA,:quantite,:prix,:modeleA,:idC,:image)";
    
    $db = config::GetConnexion();
    try{
        $query = $db->prepare($sql);
        $query->execute([
            
            'nomA' => $article->getnomA(),
            'quantite' => $article->getquantite(),
            'prix' => $article->getprix(),
            'modeleA' =>$article->getmodeleA(),
           
            'idC' => $article->getnomC(),
            'image' => $article->getimage(),
            
            
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
$query = $db->prepare('UPDATE article SET   nomA = :nomA, quantite = :quantite, prix = :prix , modeleA = :modeleA ,nomC = :nomC ,image = :image WHERE idA= :idA');
        $query->execute([
            'nomA' => $article->getnomA(),
            'quantite' => $article->getquantite(),
            'prix' => $article->getprix(),
            'modeleA' => $article->getmodeleA(),
          
            'nomC' => $article->getnomC(),
            'image' => $article->getimage(),
            'idA' => $idA
           
        ]);
        echo $query->rowCount() . " records UPDATED successfully <br>";
    } catch (PDOException $e) {
        $e->getMessage();
    }
}
function RecupererCategorie($idC){
 
    $sql="SELECT * from categorie where idC = idC";
    $db = config::getConnexion();
    try{
        $query=$db->prepare($sql);
        $query->execute();

        $categorie=$query->fetch();
        return $categorie;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}
 

 /////..............................search............................../////
 function Recherche($nomA){
    $sql="SELECT * from article where nomA like '".$nomA."%' ";
    $db = config::getConnexion();
    try{
        $liste = $db->query($sql);
        return $liste;
    }
    catch(Exception $e){
        die('Erreur:'. $e->getMessage());
    }
}
}
?>