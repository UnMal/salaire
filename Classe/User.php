<?php
	class User{
		//déclaration de variables
		private $pseudo, $password;
		
		public function __construct(){
		}
		//getters begins
		public function Getpseudo(){
			include_once('bd.php');
			$req = $pdo->query('SELECT pseudo from user;');
			$Data = $req->fetch();
			$this->pseudo = $Data['pseudo'];
			return $this->pseudo;
		}
		public function Getpassword(){
			include_once('bd.php');
			$req = $pdo->query('SELECT password from user;');
			$Data = $req->fetch();
			$this->password = $Data['password'];
			return $this->password;
		}//getters end

		public function CreerProjet($Title, $Description, $Asker){
			include_once('Projet.php');
			$Projet = new Projet($Title, $Description, $Asker);
		}
		public function AfficherProjet(){
			include_once('bd.php');
			include_once('Projet.php');
			$req = $pdo->query('SELECT * from projet;');
			$Data = $req->fetchAll();
			return $Data;
		/** code coté vue utilisateur
		$test = new User();
		$Data = $test->AfficherProjet();
		foreach ($Data as $key => $value) {
		echo '| '.$value['Title'].' | '.$value['Description'].' | '.$value['Asker'].' | '.$value['Stat'].' | '.$value['DateDebut'].' |';
		}**/
		}
		public function ModifierProjet($Projet, $Title, $Description, $Asker, $Stat, $DateDebut){
			include_once('Projet.php');
		}
		public function ModifierDateFin($Projet, $Datefin){
			include_once('Projet.php');			
		}
	}

	$test = new User();
	$test1 = new User();

	$test->ModifierProjet($test1, $description);
	$test->ModifierProjet($Projet, $description, $Title);
?>