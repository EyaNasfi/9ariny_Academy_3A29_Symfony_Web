<?php
	include '../../../../Controller/reclamationC.php';

	$message = "" ; 
	$reclamationC=new reclamationC();
	$reclamationC->SupprimerReclamation($_GET["idR"]);
	header('Location:AfficherReclamation.php?message= Recalamtion Supprimé avec succés');
?>