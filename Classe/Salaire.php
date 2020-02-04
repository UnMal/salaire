<?php
	class Salaire{
		public $Bail, $TotalPoint, $Tech, $APartager, $Workers, $Commun, $ATravailler, $max;

		public function __construct($Bail, $Workers, $TotalPoint){
			$this->Bail = $Bail;
			$this->Workers = $Workers;
			$this->TotalPoint = $TotalPoint;
		}
		
		//calcul du montant a partager
		public function Tech(){
			$res = $this->Bail;
			$Tech = (($res*30)/100);
			return $this->APartager = $res - $Tech;
		}

		public function Commun(){
			$APartager = $this->APartager;
			return $this->Commun = (($APartager * 2)/100);
		}//salaire minimum par employé

		public function MaxIndividuel(){
			$Commun = $this->Commun;
			$work = $this->Workers;
			$this->ATravailler = $this->APartager - ($this->Commun*$work);
			return $this->max = $this->ATravailler/$work;
		}//retourne la somme max que chaque individu peut travailler

		public function Individuel( $PointsInd){
			$max = $this->max;
			$PointMaxInd = ($this->TotalPoint/$this->Workers);
			return $SalaireInd = $this->Commun + (($this->max * $PointsInd) / $PointMaxInd);
		}//retourne le salaire individuel

		public function Salaire($PointsInd){			
			$this->Tech();
			$this->Commun();
			$this->MaxIndividuel();
			return $this->Individuel( $PointsInd);
		}//appell toute les fonctions pour calculer le salaire individuel en une ligne
		//roud($val,-3);
	}
?>