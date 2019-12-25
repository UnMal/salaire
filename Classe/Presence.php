<?php
	class Presence{
		private $Assiduite, $Debut, $Participation, $Discipline, $Fin, $Date;

		public function __construct($Assiduite, $Debut, $Participation, $Discipline, $Fin){
			$this->Assiduite=$Assiduite;
			$this->Debut=$Debut;
			$this->Participation=$Participation;
			$this->Discipline=$Discipline;
			$this->Fin=$Fin;
		}
	}
?>