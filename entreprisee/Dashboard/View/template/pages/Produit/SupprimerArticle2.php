<?php
	include '../../../../Controller/articleC2.php';

	$message = "" ; 
	$articleC2=new articleC2();
	$articleC2->Supprimerarticle2($_GET["idA"]);
	header('Location:AfficherArticle2.php?message= Article Supprimé avec succés');
?>