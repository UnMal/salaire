<?php
	class Projet{
		private $Title, $Description, $Asker, $Stat='Attente';

		public function __construct($Title, $Description, $Asker){
			$this->Title=$Title;
			$this->Description=$Description;
			$this->Asker=$Asker;
		}

		public function SetTitle($Title){
			$this->Title=$Title;
		}
		public function SetDescription($Description){
			$this->Description=$Description;
		}
		public function SetAsker($Asker){
			$this->Asker=$Asker;
		}
		public function SetStat($Stat){
			$this->Stat=$Stat;
		}

		public function GetDescription(){
			return $this->Description;
		}
		public function GetAsker(){
			return $this->Asker;
		}
		public function GetTitle(){
			return $this->Title;
		}
		public function GetStat(){
			return $this->Stat;
		}
	}
?>