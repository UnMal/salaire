<?php
	class User{
		private $Name, $Surename, $Type;
		public $ProfilId, $PresenceId;

		public function __construct(){
		}
		public function __construct($Name, $Surename, $Type, $ProfilId, $PresenceId){
			$this->Name=$Name;
			$this->Surname=$Surname;
			$this->Type=$Type;
			$this->ProfilId=$ProfilId;
			$this->PresenceId=$PresenceId;
		}

		public function SetName($Name){
			$this->Name=$Name;
		}
		public function SetSurname($Surname){
			$this->Surname=$Surname;
		}
		public function SetType($Type){
			$this->Type=$Type;
		}
		public function SetProfilId($ProfilId){
			$this->ProfilId=$ProfilId;
		}
		public function SetPresenceId($PresenceId){
			$this->PresenceId=$PresenceId;
		}

		public function GetName(){
			return $this->Name;
		}
		public function GetSurname(){
			return $this->Surname;
		}
		public function GetType(){
			return $this->Type;
		}
		public function GetProfilId(){
			return $this->ProfilId;
		}
		public function GetPresenceId(){
			return $this->PresenceId;
		}

		public function DonnerPresence($Presence){
			$Presence.SetAssiduite($Assiduite){
				$Presence->Assiduite=$Assiduite;
			}
			$Presence.SetDebut($Debut){
				$Presence->Debut=$Debut;
			}
			$Presence.SetParticipation($Participation){
				$Presence->Participation=$Participation;
			}
			$Presence.SetDiscipline($Discipline){
				$Presence->Discipline=$Discipline;
			}
			$Presence.SetFin($Fin){
				$Presence->Fin=$Fin;
			}
		}

		public function ModifierProfil($Profil){
			$Profil.SetPseudo($Pseudo){
				$Profil->Pseudo=$Pseudo;
			}
			$Profil.SetPassword($Password){
				$Profil->Password=$Password;
			}
			$Profil.SetNumber($Number){
				$Profil->Number=$Number;
			}
			$Profil.SetMail($Mail){
				$Profil->Mail=$Mail;
			}
		}
	}
?>