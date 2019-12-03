<?php
	class Presence{
		private $Assiduite=0, $Debut=0, $Participation=0, $Discipline=0, $Fin=0, $Date=date("d-m-Y");

		public function __construct($Assiduite, $Debut, $Participation, $Discipline, $Fin){
			$this->Assiduite=$Assiduite;
			$this->Debut=$Debut;
			$this->Participation=$Participation;
			$this->Discipline=$Discipline;
			$this->Fin=$Fin;
		}

		public function SetAssiduite($Assiduite){
			$this->Assiduite=$Assiduite;
		}
		public function SetDebut($Debut){
			$this->Debut=$Debut;
		}
		public function SetParticipation($Participation){
			$this->Participation=$Participation;
		}
		public function SetDiscipline($Discipline){
			$this->Discipline=$Discipline;
		}
		public function SetFin($Fin){
			$this->Fin=$Fin;
		}

		public function GetAssiduite(){
			return $this->Assiduite;
		}
		public function GetDebut(){
			return $this->Debut;
		}
		public function GetParticipation(){
			return $this->Participation;
		}
		public function GetDiscipline(){
			return $this->Discipline;
		}
		public function Fin(){
			return $this->Fin;
		}
	}
?>