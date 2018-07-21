<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>ARRAYS</title>
	</head>
	<body>
		<pre>
		<?php
			$famille = ['Robert','Gabriela','Evelyn','Kevin']; 
			$food = ['Sopa de cangrejo', 'riz chinois', 'Bambou', 'insects', 'Fondue chinois'];
			$tv = ['Mr Robot', 'One Piece', 'dead note', 'La nausée','Berserk' ];
			
			print_r($famille);
			print_r($food);
			echo '<br>';
			print_r ("Ma serie prefere est : $tv[1]");
			echo '<br><br>';
		 	
			$moi = Array (
				'prenom' => 'Meilyn', 
				'Nom' => 'ANDRADE',
				'Naissance' => 1990,	
				'aime_chocolat' => false,
				'papa' => [
					'prenom' => 'Jair']
				
			);


			print_r($moi);
			echo ($moi['papa']['prenom']);

			$papa = Array (
					'prenom' => 'Robert',
					'Nom' => 'Thomas',
					'Naissance' => 1947,
					'aime_foot'	=> true,
					'hobbies' => array[]
			);

			
			$Moi = array(
				'prenom' => 'Gally' ,
				'Nom' => 'Thomas',
				'Naissance' => 1990,
				'aime_chocolat' => false, 
				'hobbies' => [],
				'papa' => $papa
			 );


			array_push($Moi['hobbies'],'informatique','Manga','Dessiner');//Exercice #1
			array_push($Moi['hobbies'],'Taxidermia');
			$Moi['Nom'] = 'JANSEN'; // Exercice Remplacer
			print_r($Moi);
			print_r($papa);

			array_push($papa['hobbies'],'Foot', 'Manger', 'Travailler');
			print_r($papa);
			echo $papa['prenom'];
			echo "<br>";
			echo "Papa as " .count($papa['hobbies']). " Hobbies <br/>";
			echo "Moi, J'ai " .count($Moi['hobbies']). " Hobbies<br/>";
			echo count($Moi['hobbies']) + count($papa['hobbies']); // compte des hobbies

			

		?>	
		
		</pre>
	</body>
</html>