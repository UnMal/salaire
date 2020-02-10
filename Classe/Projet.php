<?php
	class Projet{
		private $Title, $Description, $Asker, $Stat, $DateDebut, $DateFin;

		public function __construct($Title, $Description, $Asker){
			$Stat='Attente';
			$this->Title=$Title;
			$this->Description=$Description;
			$this->Asker=$Asker;
			$this->Stat=$Stat;
			include_once('bd.php');

			$req=$pdo->prepare('insert into 
Projet (Title, Description, Asker, Stat) values (:Title, :description, :Asker, :Stat)');
			$req->execute(array(
				'Title'=>$Title,
				'description'=>$Description,
				'Asker'=>$Asker,
				'Stat'=>$Stat,
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
		}
		public function GetDateFin(){
			return $this->DateFin;
		}//getters end

		//setters begin
		public function SetTitle($Title){
			$this->Title=$Title;

			include_once('bd.php');

			$req=$pdo->prepare('update Projet Title = :Title');
			$req->execute(array(
				'Title'=>$Title
			));
		}
		public function SetDescription($description){
			$this->description=$description;

			include_once('bd.php');

			$req=$pdo->prepare('update Projet description = :description');
			$req->execute(array(
				'description'=>$description
			));
		}
		public function SetAsker($Asker){
			$this->Asker=$Asker;

			include_once('bd.php');

			$req=$pdo->prepare('update Projet Asker = :Asker');
			$req->execute(array(
				'Asker'=>$Asker
			));
		}
		public function SetStat($Stat){
			$this->Stat=$Stat;

			include_once('bd.php');

			$req=$pdo->prepare('update Projet Stat = :Stat');
			$req->execute(array(
				'Stat'=>$Stat
			));
		}
		public function SetDatefin($Title){

			$DateFin=date('Y-m-d H-m-s');
			$this->DateFin=$DateFin;

			require('bd.php');
			$req=$pdo->prepare('update projet set DateFin = :DateFin where Title = :Title');

			$req->execute(array(
				'DateFin'=>$DateFin,
				'Title' =>$Title
			));
		}//setters end
	}
?>