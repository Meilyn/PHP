<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
	</head>
	<body>
	<h3>Expression conditionnelle</h3>
	<form method ="POST">
		<label>AGE : </label>
		<input type="number" name="age" placeholder="Quel est votre âge ?"><br><br>
		<input type="radio" name="sexe" value="femme">Femme
		<input type="radio" name="sexe" value="homme">Homme
		<input type="submit" name="submit" value="Valider">
	</form>	
	<?php
		if ($_SERVER['REQUEST_METHOD'] === 'POST'){
			$message = "";
			$age = $_POST['age'];
			$sexe = $_POST['sexe'];
			// var_dump ($age);
			// var_dump ($sexe);
			if ($sexe == 'femme') {
				if ($age >= 20 AND $age <= 40) {
						$message = "Bonjour, bienvenue parmi nous!";
				}
				else {
						$message = "Désolé, vous ne remplissez pas les critères de sélection.";
				}
			}
			else {
						$message = "Désolé, vous ne remplissez pas les critères de sélection.";
				}		
			echo $message;
		}				
	?>	
	</body>
</html>