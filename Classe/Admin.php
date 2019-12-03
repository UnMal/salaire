<?php
	class Admin extends User{
		public $UserId, $ProjetId;

		public function __construct($UserId, $ProjetId){
			$this->UserId=$UserId;
			$this->ProjetId=$ProjetId;
		}

		public function SetUserId($UserId){
			$this->UserId=$UserId;
		}
		public function SetProjetId($ProjetId){
			$this->ProjetId=$ProjetId;
		}

		public function GetUserId(){
			return $this->UserId;
		}
		public function GetProjetId(){
			return $this->ProjetId;
		}

		public function GererUser($Switch,$Name, $Surename, $Type, $ProfilId, $PresenceId){			
			switch ($Switch) {
				case '1'://afficher utilisateur
					# code...
					break;
				case '2'://modifier utilisateur
					# code...
					break;
				case '3'://supprimer utilisateur
					# code...
					break;
				
				default://creer utilisateur
					$User= new User();				
					break;
			}
		}
	}
?>