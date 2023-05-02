<?php
	include 'C:/xampp/htdocs/marwan/Dashboard/Config.php';
	include 'C:/xampp/htdocs/marwan/Dashboard/Model/Categorie.php';

	class CategorieC {




/////..............................Afficher............................../////
		function AfficherCategorie(){
			$sql="SELECT * FROM categorie";
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
		function SupprimerCategorie($idC){
			$sql="DELETE FROM categorie WHERE idC=:idC";
			$db = Config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':idC', $idC);   
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());	
			}
		}







/////..............................Ajouter............................../////
		function AjouterCategorie($categorie){
			$sql="INSERT INTO categorie (nomC) 
			VALUES (:nomC)";
			
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'nomC' => $categorie->getnomC(),
			]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}







/////..............................Affichage par la cle Primaire............................../////
		function RecupererCategorie($idC){
			$sql="SELECT * from categorie where idC=$idC";
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
/////..............................Tri............................../////
		function triCategorie(){
			$sql="SELECT * FROM categorie order by nomC ASC";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		




/////..............................Update............................../////
		function ModifierCategorie($categorie, $id){
			try {
				$db = config::getConnexion();
		$query = $db->prepare('UPDATE categorie SET  nomC = :nomC WHERE idC= :id');
				$query->execute([
					'nomC' => $categorie->getNomC(),
					'id' => $id
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
	}	
?>
