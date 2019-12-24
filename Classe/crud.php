<?php
	public function Read($id)
	{
		require_once('bd.php');
		$query=$pdo->prepare('select * from user where UserId:=id');
		$query=$pdo->exec(array(['id'=> $id]));
		
		$donne = $query -> fetchAll();

		foreach ($donne as $key => $donnes) {
			
		echo " ".$donnes['nom']." ".$donnes['prenom']."";

		}
	}
?>