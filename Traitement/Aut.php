<?php
	/*
	* traitements d'authentification
	*/
	if(isset($_POST['submit'])){
		if((!empty($_POST['Pseudo']) && !empty($_POST['Password']))){
			require("../Classe/bd.php");
			$Pseudo = $_POST['Pseudo'];
			$Password = $_POST['Password'];
			$req = $pdo->prepare("select * from user where pseudo = :Pseudo and password = :Password;");
			$req->execute(array(
				':Pseudo' => $Pseudo,
				':Password' => $Password				
			));
			$res = $req->fetch();
			if($res['pseudo'] == $Pseudo && $res['password'] == $Password)
			{
				echo "succès";
				header('Refresh: 0.3; URL= ../Public/Home.php');
			}else{
				header('Refresh: 0.3; URL= ../Public/Views/Error.php');			
			}
		}else{
			header("location: ../Public/Views/Error.php");
		}
	}
?>