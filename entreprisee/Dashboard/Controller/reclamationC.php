
<?php
	include 'C:/xampp/htdocs/Works/entreprisee/Dashboard/Config.php';
	include_once 'C:/xampp/htdocs/Works/entreprisee/Dashboard/Model/reclamation.php';


class reclamationC {
/////..............................Afficher............................../////
function AfficherReclamation(){
    $sql="SELECT * FROM reclamation";
    $db = Config::getConnexion();
    try{
        $liste = $db->query($sql);
        return $liste;
    }
    catch(Exception $e){
        die('Erreur:'. $e->getMessage());
    }
}


/////..............................Supprimer............................../////
function SupprimerReclamation($idR){
    $sql="DELETE FROM reclamation WHERE idR=:idR";
    $db = Config::getConnexion();
    $req=$db->prepare($sql);
    $req->bindValue(':idR', $idR);   
    try{
        $req->execute();
    }
    catch(Exception $e){
        die('Erreur:'. $e->getMessage());
    }
}

/////..............................Ajouter............................../////
function AjouterReclamation($reclamation){
    $sql="INSERT INTO reclamation (prenom,adresse,telephone,message) 
    VALUES (:prenom,:adresse,:telephone,:message)";
    
    $db = Config::GetConnexion();
    try{
        $query = $db->prepare($sql);
        $query->execute([
            
            'prenom' => $reclamation->getprenom(),
            'adresse' => $reclamation->getadresse(),
            'telephone' => $reclamation->gettelephone(),
            'message' =>$reclamation->getmessage(),
            
            
    ]);			
    }
    catch (Exception $e){
        echo 'Erreur: '.$e->GetMessage();
    }			
}

/////..............................Affichage par la cle Primaire............................../////
function RecupererReclamation($idR){
    $sql="SELECT * from reclamation where idR = idR";
    $db = Config::getConnexion();
    try{
        $query=$db->prepare($sql);
        $query->execute();

        $reclamation=$query->fetch();
        return $reclamation;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}

/////..............................Update............................../////
function ModifierReclamation($reclamation, $idR){
    try {
        $db = Config::getConnexion();
$query = $db->prepare('UPDATE reclamation SET   prenom = :prenom, adresse = :adresse, telephone = :telephone , message = :message WHERE idR= :idR');
        $query->execute([
            'prenom' => $reclamation->getprenom(),
            'adresse' => $reclamation->getadresse(),
            'telephone' => $reclamation->gettelephone(),
            'message' => $reclamation->getmessage(),
            'idR' => $idR
           
        ]);
        echo $query->rowCount() . " records UPDATED successfully <br>";
    } catch (PDOException $e) {
        $e->getMessage();
    }
}
 }

?>