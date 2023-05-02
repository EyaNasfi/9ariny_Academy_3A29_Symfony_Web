<?php
	class article{
		private $idA=null;
		private $nomA=null;
		private $quantite=null;
		private $prix=null;
        private $modeleA=null;
		
		private $nomC=null;
		private $image=null;
		
		function __construct($nomA,$quantite,$prix,$modeleA,$nomC,$image){
			
			$this->nomA=$nomA;
			$this->quantite=$quantite;
		    $this->prix=$prix;
            $this->modeleA=$modeleA;
			$this->nomC=$nomC;
			$this->image=$image;
        
		}

        ////////Getters///////////
		function getidA(){
			return $this->idA;
		}
		
		function getnomA(){
			return $this->nomA;
		}
		function getquantite(){
			return $this->quantite;
		}
		function getprix(){
			return $this->prix;
		}
		function getmodeleA(){
			return $this->modeleA;
		}
		function getnomC(){
			return $this->nomC;
		}
		function getimage(){
			return $this->image;
		}
		

                ////////Setters///////////
		
		function setnomA(string $nomA){
			$this->nomA=$nomA;
		}
		function setquantite(string $quantite){
			$this->quantite=$quantite;
		}
		function setprix(int $prix){
			$this->prix=$prix;
		}
		function setmodeleA(string $modeleA){
			$this->modeleA=$modeleA;
		}
		function setnomC(string $nomC){
			$this->nomC=$nomC;
		}
       
		function setimage(string $image){
			$this->image=$image;
		}
	
	}	
?>