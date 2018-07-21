<?php
		$age = $_POST['age'];
		$gender = $_POST['gender'];
		$langue = $_POST['langue'];
		// var_dump($langue);
		
		echo $age;
		echo $langue;
		echo $gender;


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
				 	$message_age = "Wow! toujours vivantée?";
				 }

				if ($age <= 12 AND $langue == "anglais") {
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
				 if($age <= 12 AND $langue == "anglais") {
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
				
			 echo $message_age ."<br/>" ;

	?>			 