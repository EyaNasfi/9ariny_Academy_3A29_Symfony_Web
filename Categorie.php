<?php
	class Categorie{
		private $idC=null;
		private $nomC=null;

		function __construct($nomC){
			$this->nomC=$nomC;

		}
		function getidC(){
			return $this->idC;
		}
		function getNomC(){
			return $this->nomC;
		}
		}
?>