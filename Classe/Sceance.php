<?php
	class Sceance{
		public $DateDebut,$DateFin;

		public function __construct(){
			$DateDebut=date('Y-m-d H-m-s');

			$this->DateDebut=$DateDebut;

			include_once('bd.php');

			$req=$pdo->prepare('INSERT INTO Sceance (DateDebuT) VALUES (:DateDebuT)');
			$req->execute(array(
				'DateDebuT' => $DateDebut
			));
		}

		//setters begin
		public function SetDateFin(){
			$DateFin=date('Y-m-d H-m-s');
			$this->DateFin=$DateFin;

			include_once('bd.php');

			$req = $pdo->prepare('INSERT INTO Sceance (DateFin) VALUES (:DateFin)');
			$req->execute(array(
				'DateFin' => $DateFin
			));
		}//setters end

		//getters begin
		public function GetDateDebut(){
			return $this->DateDebut;
		}
		public function GetDateFin(){
			return $this->DateFin;
		}//getters end
	}
?>