<?php
	class Sceance{
		public $DateDebut,$DateFin;

		public function __construct(){
			$DateDebut=datetime('Y-m-d H-m-s');

			$this->DateDebut=$DateDebut;

			include_once('bd.php');

			$req=$pdo->prepare('INSERT INTO Sceance (DateDebuT) VALUES (:DateDebuT)');
			$req->execute(array(
				'DateDebuT' => $DateDebut
			));
		}

		//setters begin
		public function SetDateFin(){
			$DateFin=datetime('Y-m-d H-m-s');
			$this->DateFin=$DateFin;
			$DateDebut = $this->DateDebut;

			require('bd.php');

			$req = $pdo->prepare('update Sceance DateFin = :DateFin where DateDebuT = :DateDebut');
			$req->execute(array(
				'DateFin' => $DateFin,
				'DateDebut' => $DateDebut
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