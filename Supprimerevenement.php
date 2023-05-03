<?php
	include '../../../../Controller/evenementE.php';

	$message = "" ; 
	$evenementE=new evenementE();
	$evenementE->Supprimerevenement($_GET["IdEvenement"]);
	header('Location:Afficherevenement.php?message= evenement Supprimé avec succés');
?>