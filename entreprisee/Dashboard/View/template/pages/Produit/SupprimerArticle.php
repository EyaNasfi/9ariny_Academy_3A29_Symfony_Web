<?php
	include '../../../../Controller/articleC.php';

	$message = "" ; 
	$articleC=new articleC();
	$articleC->Supprimerarticle($_GET["idA"]);
	header('Location:AfficherArticle.php?message= Article Supprimé avec succés');
?>