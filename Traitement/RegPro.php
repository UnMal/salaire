<?php
	/* enregistrement des projet */
	$Title = $_POST['Title'];
	$Description = $_POST['Description'];
	$Asker = $_POST['Asker'];
	if(!empty($Title && $Description && $Asker)){
		include("../Classe/User.php");
		$user->CreerProjet($Title, $Description, $Asker);
		echo "succès";
		header('Refresh: 0.3; URL= ../Public/Home.php');
	}else{
		header('Refresh: 0.3; URL= ../Public/Views/Error.php');
	}
	
?>