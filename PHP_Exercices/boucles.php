<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Boucles</title>
</head>
<body>
	<?php
		//Exercise #1 
		$pronoms_personnels = ['Je', 'Tu', 'Il/Elle','Nous', 'Vous', 'Elles/Ils'];
			foreach ($pronoms_personnels as $value) {
				echo "$value <br>";
			};	
					// if (in_array($pronoms_personnels = $value)){
					// echo $pronoms_personnels[0]. " code <br>";
					// }

		//Exercice #2	
		$nombre_de_lignes = 1;

		while ($nombre_de_lignes <= 100){
    		echo $nombre_de_lignes . ': Je ne dois pas regarder les mouches voler quand j\'apprends le PHP.<br />';
    		$nombre_de_lignes++; 
		};

<<<<<<< HEAD
=======

>>>>>>> a0ae4beeab618e0b5b5f9070269ac9514ac4158e
	 ?>
	
</body>
</html>