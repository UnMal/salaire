<?php

	class User{
		private $pseudo, $password;
		public $PreseId, $ProjetId, $IdSceance;

		public function __construct($pseudo, $password){
			$this->pseudo=$pseudo;
			$this->password=$password;
		}

		public function getpseudo(){
			return $this->pseudo;
		}
		public function getpassword(){
			return $this->password;
		}

		public function setpseudo($pseudo){
			$this->pseudo=$pseudo;
		}
		public function setpassword($password){
			$this->password=$password;
		}

		public function ajouterprojet($title='valeurs eternelles', $description='appli internet de preparation de ceremonie de fin d annee', $asker='pasteur', $stat='Attente'){
			require_once('Classe/bd.php');
			$query=$pdo->prepare('INSERT INTO projet VALUES(:Title, :Description, :Asker, :Stat, :DateDebut');
			$query->execute(array(
				'Title'=>$title,
				'Description'=>$description,
				'Asker'=>$asker,
				'Stat'=>$stat,
				'DateDebut'=>datetime()
			));
		}
	}
?>