<?php
	class Presence{
		private $Assiduite, $Debut, $Participation, $Discipline, $Fin, $Date;

		public function __construct($Assiduite, $Debut, $Participation, $Discipline, $Fin, $Total/*nombre total de points*/){
			$this->Assiduite=$Assiduite;
			$this->Debut=$Debut;
			$this->Participation=$Participation;
			$this->Discipline=$Discipline;
			$this->Fin=$Fin;
			$this->Total=0;
			$this->Date=date("d-m-Y");
		}

		include_once('bd.php');

		$query=$pdo->prepare('INSERT INTO presence VALUES (UserId:=id');
		$query=$pdo->exec(array(['id'=> $id]));
		
		$donne = $query -> fetchAll();

		foreach ($donne as $key => $donnes) {
			
		echo " ".$donnes['nom']." ".$donnes['prenom']."";

		}
	}
?>