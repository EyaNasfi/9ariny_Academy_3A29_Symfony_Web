<?php
	include '../../../../Controller/livraisonL.php';

	$message = "" ; 
	$livraisonL=new livraisonL();
	$livraisonL->Supprimerlivraison($_GET["Idlivreure"]);
	header('Location:Afficherlivraison.php?message= livraison Supprimé avec succés');
?>