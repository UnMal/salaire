<?php
	class Profil{
		private $Pseudo, $Password, $Number, $Mail;

		public function __construct($Pseudo, $Password, $Number, $Mail){
			$this->Pseudo=$Pseudo;
			$this->Password=$Password;
			$this->Number=$Number;
			$this->Mail=$Mail;
		}

		public function SetPseudo($Pseudo){
			$this->Pseudo=$Pseudo;
		}
		public function SetPassword($Password){
			$this->Password=$Password;
		}
		public function SetNumber($Number){
			$this->Number=$Number;
		}
		public function SetMail($Mail){
			$this->Mail=$Mail;
		}

		public function GetPseudo(){
			return $this->Pseudo;
		}
		public function GetPassword(){
			return $this->Password;
		}
		public function GetNumber(){
			return $this->Number;
		}
		public function GetMail(){
			return $this->Mail;
		}
	}
?>