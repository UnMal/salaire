<?php
	include("../Classe/User.php");
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="CSS/Style.css">
	<title>Acceuil</title>
</head>
<body>
	<div>
		<!--bloc de présentation de l'admin-->
		<div><!-- photo de profil -->
			<?php include("../Classe/bd.php");
				$req = $pdo->prepare("select photo from user where pseudo = 'Un_Mal';");
				$req->execute(array());
				$res = $req->fetch();
				$chemin = $res['photo'];
			?>
			<img src="<?php echo $chemin ?>" alt="photo profil">
		</div>
		<!-- nom -->
			<?php include("../Classe/bd.php");
				$req = $pdo->prepare("select pseudo from user where pseudo = 'Un_Mal';");
				$req->execute(array());
				$res = $req->fetch();
				$chemin = $res['pseudo'];
				echo $chemin;
			?>
	</div>
	<div>
		<!--formulaire d'ajout de projet-->
		<fieldset>
			<form method="POST" action="../Traitement/RegPro.php">
				<label>title</label><input type="text" name="Title">
				<label>description</label><input type="text" name="Description">
				<label>asker</label><input type="text" name="Asker">
				<input type="submit" name="submit" value="enregister">
			</form>
		</fieldset>	
	</div>
	<div>
		<!--bloc de liste des projet-->
		<h1>liste de projet</h1>
		<?php
			$Data = $user->AfficherProjets();
				echo '<table>
						<tr>
							<td> TITRE </td>
							<td> DESCRIPTION </td>
							<td> DEMANDEUR </td>
							<td> STATUT </td>
						</tr>
					</table>';
			foreach ($Data as $key => $value){
				echo '<table>
						<tr>
							<td>'.$value['Title'].'  </td>
							<td>'.$value['Description'].'  </td>
							<td>'.$value['Asker'].'  </td>
							<td>'.$value['Stat'].'  </td>
						</tr>
					</table>';
				/*| '.$value['Title'].' | '.$value['Description'].' | '.$value['Asker'].' | '.$value['Stat'].' |<br>*/
			}
		?>
	</div>
	<div>
		<!--bloc de liste de projet en cour-->
		<h1>liste de projet en cour</h1>
		<?php
			$Data = $user->AfficherProjetsEnCour();
				echo '<table>
						<tr>
							<td> TITRE </td>
							<td> DESCRIPTION </td>
							<td> DEMANDEUR </td>
							<td> STATUT </td>
							<td> DATE DEBUT </td>
						</tr>
					</table>';
			foreach ($Data as $key => $value){
				echo '<table>
						<tr>
							<td>'.$value['Title'].'  </td>
							<td>'.$value['Description'].'  </td>
							<td>'.$value['Asker'].'  </td>
							<td>'.$value['Stat'].'  </td>
							<td>'.$value['DateDebut'].'  </td>
						</tr>
					</table>';
			}
		?>
	</div>
	<div>
		<!--bloc de liste de projet terminé-->
		<h1>liste de projet terminér</h1>
		<?php
			$Data = $user->AfficherProjetsTermine();
				echo '<table>
						<tr>
							<td> TITRE </td>
							<td> DESCRIPTION </td>
							<td> DEMANDEUR </td>
							<td> STATUT </td>
							<td> DATE DEBUT </td>
							<td> DATE FIN </td>
						</tr>
					</table>';
			foreach ($Data as $key => $value){
				echo '<table>
						<tr>
							<td>'.$value['Title'].'  </td>
							<td>'.$value['Description'].'  </td>
							<td>'.$value['Asker'].'  </td>
							<td>'.$value['Stat'].'  </td>
							<td>'.$value['DateDebut'].'  </td>
							<td>'.$value['DateFin'].'  </td>
						</tr>
					</table>';
			}
		?>	
	</div>
</body>
</html>