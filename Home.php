<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="Style/Style.css">
	<title>salaire</title>
</head>
<body>
	<fieldset id="fieldset">
		<form method="POST" action="">
			<input type="Pseudo" name="Pseudo" placeholder="votre pseudo"><br>
			<input type="Password" name="Password" placeholder="votre Password"><br>
			<input type="submit" name="submit" value="GO"><br>
			<?php
				if(isset($_POST['submit']))
				{
					if(isset($_POST['Pseudo'])&&isset($_POST['Password']))
					{
						echo 'ok';
					}
					else
					{
						$error='erreur';
						echo $error;
					}
				}
			?>
			<a href="Tableau.php">tableau</a>
		</form>
	</fieldset>

</body>
</html>