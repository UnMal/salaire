<?php
	
	include_once('bd.php');//connexion a la base de données

	class Presence{
		//déclaration de variables
		private $Assiduite, $Debut, $Participation, $Discipline, $Fin, $Date;
		//constructeur avec insertion en base de données
		public function __construct($Assiduite, $Debut, $Participation, $Discipline, $Fin){
			/*$timestamp = date('Y-m-d');
			$Date = $timestamp;*/
			$this->Assiduite=$Assiduite;
			$this->Debut=$Debut;
			$this->Participation=$Participation;
			$this->Discipline=$Discipline;
			$this->Fin=$Fin;
			$this->Date=date('Y-m-d');

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
	}
?>