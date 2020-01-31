<?php
	class Presence{
		//déclaration de variables
		private $Assiduite, $Debut, $Participation, $Discipline, $Fin, $Date;

		//constructeur avec insertion en base de données
		public function __construct($Assiduite, $Debut, $Participation, $Discipline, $Fin){
			$Date = date('Y-m-d H-m-s');
			$this->Assiduite=$Assiduite;
			$this->Debut=$Debut;
			$this->Participation=$Participation;
			$this->Discipline=$Discipline;
			$this->Fin=$Fin;
			$this->Date=$Date;

			include_once('bd.php');//connexion a la base de données

			$req=$pdo->prepare('INSERT INTO presence (Assiduite, Debut, Participation, Discipline, fin, Date1) VALUES (:Assiduite, :Debut, :Participation, :Discipline, :fin, :Date1)');
			$req->execute(array(
				'Assiduite'=>$Assiduite,
				'Debut'=>$Debut,
				'Participation'=>$Participation,
				'Discipline'=>$Discipline,
				'fin'=>$Fin,
				'Date1'=>$Date
			));
		}
		//seters begins
		public function SetAssiduite($Assiduite){
			$this->Assiduite=$Assiduite;

			include_once('bd.php');//connexion a la base de données

			$req=$pdo->prepare('UPDATE presence Assiduite = :Assiduite');
			$req->execute(array(
				'Assiduite'=>$Assiduite
			));
		}

		public function SetDebut($Debut){
			$this->Debut=$Debut;

			include_once('bd.php');//connexion a la base de données

			$req=$pdo->prepare('UPDATE presence Debut = :Debut');
			$req->execute(array(
				'Debut'=>$Debut
			));
		}

		public function SetParticipation($Participation){
			$this->Participation=$Participation;

			include_once('bd.php');//connexion a la base de données

			$req=$pdo->prepare('UPDATE presence Participation = :Participation');
			$req->execute(array(
				'Participation'=>$Participation
			));
		}

		public function SetDiscipline($Discipline){
			$this->Discipline=$Discipline;

			include_once('bd.php');//connexion a la base de données

			$req=$pdo->prepare('UPDATE presence Discipline = :Discipline');
			$req->execute(array(
				'Discipline'=>$Discipline
			));
		}

		public function SetFin($Fin){
			$this->Fin=$Fin;

			include_once('bd.php');//connexion a la base de données

			$req=$pdo->prepare('UPDATE presence Fin = :Fin');
			$req->execute(array(
				'Fin'=>$Fin
			));
		}
		//setters end

		//getters begin
		public function GetAssiduite($Assiduite){
			return $this->Assiduite=$Assiduite;
		}

		public function GetDebut($Debut){
			return $this->Debut=$Debut;
		}

		public function GetParticipation($Participation){
			return $this->Participation=$Participation;
		}

		public function GetDiscipline($Discipline){
			return $this->Discipline=$Discipline;
		}

		public function GetFin($Fin){
			return $this->Fin=$Fin;
		}
	}
?>