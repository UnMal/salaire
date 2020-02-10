<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="Public/CSS/Style.css">
	<title>salaire</title>
</head>
<body>
	<?php include('Public/Views/Header.php'); ?>
	<h3 style="text-align: center;">Admin system</h3>
	<fieldset id="fieldset">
		<form method="POST" action="Traitement/Aut.php">
			<input type="text" name="Pseudo" placeholder="votre pseudo"><br>
			<input type="Password" name="Password" placeholder="votre Password"><br>
			<input type="submit" name="submit" value="register"><br>
		</form>
	</fieldset>
	<?php include('Public/Views/Footer.php'); ?>
</body>
</html>