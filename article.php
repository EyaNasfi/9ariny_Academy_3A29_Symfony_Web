<?php
	class article{
		private $idA=null;
		private $nomA=null;
		private $quantite=null;
		private $prix=null;
        private $modeleA=null;
      
		
		function __construct($nomA,$quantite,$prix,$modeleA){
			
			$this->nomA=$nomA;
			$this->quantite=$quantite;
		    $this->prix=$prix;
            $this->modeleA=$modeleA;
          
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
       
	}	
?>