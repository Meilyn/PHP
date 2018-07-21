<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
	</head>
	<body>
	<h3>Expression conditionnelle Ternaire</h3>
	<form method ="POST">
		<input type="radio" name="sexe" value="femme">Femme
		<input type="radio" name="sexe" value="homme">Homme
		<input type="submit" name="submit" value="Valider">
	</form>	
	<?php 
		if ($_SERVER['REQUEST_METHOD'] === 'POST'){
			$sexe = $_POST['sexe'];
			$bonjour = ($sexe == "femme") ? "Bonjour, Madame" : " Bonjour, Monsieur";
	  		echo $bonjour;
	  	}		
	?>	
	</body>
</html>