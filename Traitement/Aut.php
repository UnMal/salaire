<?php
	/*
	* traitements d'authentification
	*/
	if(isset($_POST['submit'])){
		if((!empty($_POST['Pseudo']) && !empty($_POST['Password']))){
			echo "verification";
		}else{
			header("location: ../Public/Views/Error.php");
		}
	}
?>