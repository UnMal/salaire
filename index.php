<!DOCTYPE html>
<html>
<head>
	<title>salaire</title>
</head>
<body>
	<p1>le salaire de ca!</p1>
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
	</form>

</body>
</html>