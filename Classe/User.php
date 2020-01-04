<?php
	class User{
		//déclaration de variables
		private $pseudo, $password;
		
		public function __construct(){

		}

		public function Getpseudo(){
			include_once('bd.php');
			$req = $pdo->prepare('SELECT pseudo from user');
			$req->execute();
			$res=$req->fetch(PDO::FETCH_OBJ);
			return $res;
		}
		public function Getpassword($id){
			include_once('bd.php');
			$req = $pdo->prepare('SELECT password from user where :password=?');
			$pseudo=$req->execute(array('password'=>$id));
			$this->password=$password;
			return $this->password;
		}
	}
<<<<<<< Updated upstream

	
=======
>>>>>>> Stashed changes
?>