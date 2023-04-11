<?php
	class reclamation{
		private $idR=null;
		private $prenom=null;
		private $adresse=null;
		private $telephone=null;
        private $message=null;
      
		
		function __construct($prenom,$adresse,$telephone,$message){
			
			$this->prenom=$prenom;
			$this->adresse=$adresse;
		    $this->telephone=$telephone;
            $this->message=$message;
          
		}

        ////////Getters///////////
		function getidR(){
			return $this->idR;
		}
		
		function getprenom(){
			return $this->prenom;
		}
		function getadresse(){
			return $this->adresse;
		}
		function gettelephone(){
			return $this->telephone;
		}
		function getmessage(){
			return $this->message;
		}


                ////////Setters///////////
		
		function setprenom(string $prenom){
			$this->prenom=$prenom;
		}
		function setadresse(string $adresse){
			$this->adresse=$adresse;
		}
		function settelephone(int $telephone){
			$this->telephone=$telephone;
		}
		function setmessage(string $message){
			$this->message=$message;
		}
       
	}	
?>