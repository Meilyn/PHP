<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Generateur</title>
</head>
<body>
	<?php include 'script.php';?>
	<form method="POST" action="script.php">
		<label for="genExcuses"><h3>Generateur d'excuses</h3></label><br>
		Nom Enfant:<input type="text" name="name"><br>
		Garçon<input type="radio" name="gender" value="male">
		Fille<input type="radio" name="gender" value="female"><br>
		Nom de l'Institutrice<input type="text" name="institutrice"><br>
		<label><h4>Motive d'absence</h4></label>
		Maladie<input type="radio" name="motive" value="maladie">
		décès<input type="radio" name="motive" value="deceAnimal">
		activité extra-scolaire importante<input type="radio" name="motive" value="activite">
		La flemme<input type="radio" name="motive" value="flemme"><br>
		Signature<input type="text" name="signature" placeholder="signature">
		<input type="submit" name="submit" value="C'est parti">	
	</form>

	
	
</body>
</html>