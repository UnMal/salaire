<?php
	class User{
		//déclaration de variables
		private $pseudo, $password;

		public function Getpseudo($id){
			include_once('bd.php');
			$req = $pdo->prepare('SELECT pseudo from user where :UserId=?');
			$pseudo=$req->execute(array('UserId'=>$id));
			$this->pseudo=$pseudo;
			return $this->pseudo;
		}
		public function Getpassword($id){
			include_once('bd.php');
			$req = $pdo->prepare('SELECT password from user where :password=?');
			$pseudo=$req->execute(array('password'=>$id));
			$this->password=$password;
			return $this->password;
		}
	}

	
?>