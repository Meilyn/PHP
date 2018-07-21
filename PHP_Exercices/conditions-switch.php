<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Conditions SWITCH</title>
	</head>
	<body>
		<h3>VOTRE SCORE</h3>
		<form  method="POST">
			<select name="score" requiere>
				<option >Choisissez votre score</option>
				<option value="nul">1 - 3 points</option>
				<option value="terrible">6 - 9 points</option>
				<option value="juste">10 points</option>
				<option value="pasmal">11 - 14 points</option>
				<option value="bravo">15 - 18 points</option>
				<option value="tricheur">19 - 20 points</option><br>
			</select>
			<input type="submit" name="submit" value="Valider">
		</form>
		<?php
			if ($_SERVER['REQUEST_METHOD']==='POST'){
				$scores = $_POST['score'];
				switch ($scores) {
					case 'nul':
						echo "Ce travaile est nul";
						break;
					case 'terrible':
						echo "Ce travail n'est pas terrible";
						break;	
					case 'juste':
						echo "Tout juste!";
						break;
					case 'pasmal':
						echo "C'est pas mal.";
						break;
					case 'bravo':
						echo "Bravo!";
						break;
					case 'tricheur':
						echo "Police! Arrêtez ce tricheur!";		
						break;	
					default:
						echo "Veuillez choisir un score";
				}
			}	
		?>
</body>
</html>