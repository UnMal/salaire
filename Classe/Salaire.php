<?php
	class Salaire{
		public $Bail, $TotalPoint, $Tech, $APartager, $Workers, $Individuel, $ATravailler, $max;

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

		public function Individuel($APartager){
			return $this->Individuel = (($APartager * 2)/100);
		}//salaire minimum par employé

		public function MaxIndividuel($Individuel){
			$work = $this->Workers;
			$this->ATravailler = $this->APartager - ($this->Individuel*$work);
			return $this->max = $this->ATravailler/$work;
		}//retourne la somme max que chaque individu peut travailler
	}/*effectuer toutes les transactions en une fonction pour la classe salaire*/
?>