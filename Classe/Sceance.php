<?php
	public class Sceance(){
		public $DateDebut,$DateFin;

		public function __construct(){
			$this->DateDebut=datetime();
		}

		public function getDateDebut(){
			return $this->DateDebut;
		}
		public function getDateFin(){
			return $this->DateFin;
		}

		public function setDateDebut(){
			$this->DateDebut=$DateDebut;
		}
		public function setDateFin(){
			$this->DateFin=$DateFin;
		}
	}
?>