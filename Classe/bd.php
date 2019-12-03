<?php
	if (extension_loaded ('PDO')) {
	echo 'PDO OK'; 
	} else {
	echo 'PDO KO'; 
	}

	$dsn = 'mysql:host=localhost;dbname=Salaire;port=80;';
	$pdo = new PDO($dsn, 'root', '');

	try {
			$pdo = new PDO($dsn, 'root' , '');
		}
		catch (PDOException $exception) {
			 mail('', 'PDOException', $exception->getMessage());
			 exit('Erreur de connexion à la base de données');
		}
?>