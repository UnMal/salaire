<?php
	class Projet{
		private $Title, $Description, $Asker, $Stat, $DateDebut, $DateFin;

		public function __construct($Title, $Description, $Asker){
			$DateDebut=date('Y-m-d');
			$Stat='Attente';
			$this->Title=$Title;
			$this->Description=$Description;
			$this->Asker=$Asker;
			$this->Stat=$Stat;
			$this->DateDebut=$DateDebut;

			include_once('bd.php');

			$req=$pdo->prepare('insert into Projet (Title, Description, Asker, Stat, DateDebut) values (:Title, :description, :Asker, :Stat, :DateDebut)');
			$req->execute(array(
				'Title'=>$Title,
				'description'=>$Description,
				'Asker'=>$Asker,
				'Stat'=>$Stat,
				'DateDebut'=>$DateDebut
			));
		}

		//getters begin
		public function GetTitle(){
			return $this->Title;
		}
		public function GetDescription(){
			return $this->description;
		}
		public function GetAsker(){
			return $this->Asker;
		}
		public function GetStat(){
			return $this->Stat;
		}
		public function GetDateDebut(){
			return $this->DateDebut;
		}//getters end

		//setters begin
		public function SetTitle($Title){
			$this->Title=$Title;

			include_once('bd.php');

			$req=$pdo->prepare('INSERT INTO Projet (Title) VALUES (:Title)');
			$req->execute(array(
				'Title'=>$Title
			));
		}
		public function SetDescription($description){
			$this->description=$description;

			include_once('bd.php');

			$req=$pdo->prepare('INSERT INTO Projet (description) VALUES (:description)');
			$req->execute(array(
				'description'=>$description
			));
		}
		public function SetAsker($Asker){
			$this->Asker=$Asker;

			include_once('bd.php');

			$req=$pdo->prepare('INSERT INTO Projet (Asker) VALUES (:Asker)');
			$req->execute(array(
				'Asker'=>$Asker
			));
		}
		public function SetStat($Stat){
			$this->Stat=$Stat;

			include_once('bd.php');

			$req=$pdo->prepare('INSERT INTO Projet (Stat) VALUES (:Stat)');
			$req->execute(array(
				'Stat'=>$Stat
			));
		}//setters end
	}
?>