<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Conditions</title>
	</head>
	<body>
		<h3>Exercise 1 : TEMPERATURE</h3>
	    <?php 
	    	$temperature = 10;
	    	if ($temperature > 15 ) {
		 		echo "Bonjour aujourd'hui veuillez porter un  "; 
		 		echo $vetement_du_jour = "T-shirt <br />";
			}
	 		else {
				echo "Bonjour aujourd'hui veuillez porter un "; 
				echo $vetement_du_jour = "Pull-over <br>";
			}
		?>
    	<h3>Exercise 2 : CHAMBRE</h3>
    	<?php
	    	//Chambre Sale
	    	$chambre_sale = false;
	    	if ($chambre_sale == true) {
	    		echo "Range ta chambre, on dirait la cage d'un bonobo!";
	    	}
	    	else {
	    		echo "Ta chambre est trop propre, vis un peu!</br>";
	    	}	
    	?>
		<h3>EXERCISE 3 : ETAT CHAMBRE</h3>
		 <?php
			$etat_chambre = "immaculée";
			if ($etat_chambre == "sale"){
			    $message_c= "Ta chambre est sale!!!";
			}
			elseif ($etat_chambre == "degoutante"){
			    $message_c= "Ta chambre est degoutante";
			}
			elseif ($etat_chambre == "immaculée"){
			    $message_c= "Ta chambre est immaculée";
			}
			elseif ($etat_chambre == "maniaque"){
			    $message_c= "Ta chambre est superbement arrangé";
			}
			else{
			    $message_c= "Ta chambre est en ordre :-)<br/>";
			}
			echo $message_c;
		?>
		<h3>EXERCISE 4 : MESSAGE SELON HEURE</h3>
		<?php
			$today = date("H:i");
			// var_dump($today);
			if($today >= 5 AND $today = 9 ){
				$message= "Bonjour";
			}
			elseif ($today >= 9 AND $today <= 12 ){
				$message= "Bonne journée";
			}
			elseif ($today > 12 AND $today <= 16){
				$message= "Bonne après-midi";
			}
			elseif ($today > 16 AND $today <= 21){
				$message= "Bonne soirée!";
			}
			elseif ($today > 21 OR $today < 5) {
				$message= "Bonne nuit!";
			}
			else {
				$message = "AUTRE DIMENSION";
			}
	 		echo ($message);
	 	?>
		<h3>AGE DE L'UTILISATEUR</h3>
		<form  method="POST">
			<label>Veuillez rentrer votre âge:</label>	
			<input type="number" name="age" placeholder="Entrez votre âge">
			<input type="radio" name="gender" value="homme">Homme
			<input type="radio" name="gender" value="femme">Femme <br/>
			<label for="langue">Parles-tu anglais?</label>
			<input type="radio" name="langue" value="anglais">Yes
			<input type="radio" name="langue" value="francais">Non<br><br>
			<label for="select">NOTE:</label>
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
			if ($_SERVER['REQUEST_METHOD'] === 'POST') {
				$message_age = ""; //age de la personne 
				$age = $_POST['age'];
				$gender = $_POST['gender'];
				$langue = $_POST['langue'];
				$resultat = "";
				$scores = $_POST['score'];
				// var_dump($langue);
				// echo $age;
				// echo $langue;
				// echo $gender;
				// echo $message_age;
				if ($gender == "femme") {
					if ($age <= 12 AND $langue == "francais") {
						$message_age = "Salut petite";		
					}
					elseif ($age > 12 AND $age < 18 AND $langue == "francais") {
						$message_age = "Salut l'adolescente!";
					} 
					elseif ($age >= 18 AND $age < 115 AND $langue == "francais") {
						$message_age = "Salut l'adulte";
					}
					elseif ($age > 115 AND $langue == "francais") {
						$message_age = "Wow! toujours vivante?";
					}
					elseif ($age <= 12 AND $langue == "anglais") {
						$message_age = "Hello Girl";	
					}
					elseif ($age > 12 AND $age < 18 AND $langue == "anglais") {
						$message_age = "Hello Teenage Girl!";
					} 	 
					elseif ($age >= 18 AND $age < 115 AND $langue == "anglais") {
						$message_age = "Hello Lady!";
					}
					elseif ($age > 115 AND $langue == "anglais") {
						$message_age = "Wow! Still alive, old lady?";
					}		 
				}
				else {
					if($age <= 12 AND $langue =="francais") {
						$message_age = "Salut petit";	
					}
					elseif ($age > 12 AND $age < 18 AND $langue == "francais") {
					 	$message_age ="Salut l'adolescent";
					} 
					elseif ($age >= 18 AND $age < 115 AND $langue == "francais") {
					 	$message_age = "Salut l'adult";
					}
					elseif ($age > 115 AND $langue == "francais") {
					 	$message_age = "Wow! toujours vivant?";
					}
					elseif($age <= 12 AND $langue == "anglais") {
						$message_age = "Hello Boy";
					}
					elseif ($age > 12 AND $age < 18 AND $langue == "anglais") {
					 	$message_age ="Hello Teenage boy!";
					 } 
					elseif ($age >= 18 AND $age < 115 AND $langue == "anglais") {
					 	$message_age = "Hello Sir!";
					 }
					elseif ($age > 115 AND $langue == "anglais") {
					 	$message_age = "Wow! Still alive, old man?";
					}
				}
				if ($scores != null) {
					if ($scores == "nul") {
						$resultat = "Ce travaile est nul";
					}
					elseif ($scores == "terrible") {
						$resultat = "Ce travail n'est pas terrible";
					}
					elseif ($scores == "juste") {
						$resultat = "Tout juste!";
					}
					elseif ($scores == "pasmal") {
						$resultat = "C'est pas mal.";
					}
					elseif ($scores == "bravo") {
						$resultat = "C'est pas mal.";
					}
					elseif ($scores == "tricheur") {
						$resultat = "Police! Arrêtez ce tricheur!";
					}
					else{
						$resultat = "Veuillez selectionner votre score";
					}
				}
				echo $message_age . "<br/>";
				echo $resultat;
			}		
		?>	
</body>
</html>