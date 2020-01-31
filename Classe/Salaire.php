<?php
	class Salaire{
		public $Bail, $TotalPoint, $Tech, $APartager, $Workers, $Individuel, $ATravailler, $max;

		public function __construct($Bail, $Workers, $TotalPoint){
			$this->Bail = $Bail;
			$this->Workers = $Workers;
			$this->TotalPoint = $TotalPoint;
		}
		
		//calcul du pourcentage M3HEENK TECH
		public function Tech(){
			$res = $this->Bail;
			$Tech = (($res*30)/100);
			return $this->APartager = $res - $Tech;
		}

		public function Individuel($APartager){
			return $this->Individuel = (($APartager * 2)/100);
		}

		public function MaxIndividuel($Individuel){
			$work = $this->Workers;
			$this->ATravailler = $this->APartager - ($this->Individuel*$work);
			return $this->max = $this->ATravailler/$work;
		}

		public function Sal(){
			$points = array( 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20);

			for ($i=0; $i < $this->Workers ; $i++){ 
				echo $x = ($this->max * $points[$i])/$this->TotalPoint.'<br>';
			}
		}
	}
?>