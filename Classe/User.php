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
		public function AfficherProjets(){
			include_once('bd.php');
			$req = $pdo->query('SELECT * from projet;');
			$Data = $req->fetchAll();
			return $Data;
		/** code coté vue utilisateur
		$test = new User();
		$Data = $test->AfficherProjets();
		foreach ($Data as $key => $value) {
		echo '| '.$value['Title'].' | '.$value['Description'].' | '.$value['Asker'].' | '.$value['Stat'].' | '.$value['DateDebut'].' |';
		}**/
		}
		public function ModifierProjet($Projet, $Title, $Description, $Asker, $Stat){
			require('bd.php');
			$Cond = $Projet->GetTitle();
			$req = $pdo->prepare('update projet set Title = :Title, Description = :Description, Asker = :Asker, Stat = :Stat where Title = :Cond');
			$req->execute(array(
				'Title' => $Title,
				'Description' => $Description,
				'Asker' => $Asker,
				'Stat' => $Stat,
				'Cond' => $Cond
			));
			}
		public function FermerProjet($Projet){
			$Title = $Projet->GetTitle();
			$Projet->SetDateFin($Title);
		}
		public function SupprimerProjet($Projet){
			require('bd.php');
			$Title = $Projet->GetTitle();
			$req = $pdo->prepare('delete from projet where Title = :Title');
			$req->execute(array('Title' => $Title));
		}
		public function OuvrirProjet($Projet){
				$_SESSION['Projet'] = $Projet;
				header('location:#');
		}
		public function OuvrirSceance(){
			include('Sceance.php');
			$Sceance = new Sceance();
			return $Sceance;
		}
		public function FermerSceance($Sceance){
			$Sceance->SetDateFin();
		}
		public function DonnerPresence($Presence, $Assiduite, $Debut, $Participation, $Discipline, $Fin){
			$Presence->SetAssiduite($Assiduite);
			$Presence->SetDebut($Debut);
			$Presence->SetParticipation($Participation);
			$Presence->SetDiscipline($Discipline);
			$Presence->SetFin($Fin);
		}
		public function FermerProjete($Projet){
			$Projet->SetDateFin($Projet->Title);
		}
		public function CalculerSalaire($Bail, $Workers, $TotalPoint){
			require('Salaire.php');
		}
	}
	
	/**include('Projet.php');
	$test = new User();
	$ptest = new Projet('td','ghvghn','hfvh','Attente');
	$test->SupprimerProjet($ptest);**/
?>