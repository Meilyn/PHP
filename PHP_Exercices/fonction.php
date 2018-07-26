<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Fonctions</title>
</head>
<body>
	<?php 
		//Exercice #1 Première lettre de l'argument en majuscule	
		// function firstCappital($fname){
		// 	echo ucfirst($fname)."<br>";
	
		// 	};

		// firstCappital('amalia');
		// firstCappital('jochen');	
		// firstCappital('jair');	

		//Exercice #2 Afficher l'année en cours.

		// function fecha($date){
		// 	echo date('l jS \of F Y ');
		// };

		// fecha($date);

		//Exercice # 3 DATE 

		// function fecha($date){
		// 	echo date('l jS \of F Y H:i:s A');
		// };

		// fecha($date);

		//Exercice #5  de 2 arguments 

		// function sum($num1,$num2){
		// 	$total = $num1 + $num2;
		// 	return $total ."<br>";
		// };

		// echo "La somme total est: " .sum(10,20);
		// echo "La somme total est: " .sum(40,20);

		//Exercice # 6 Errors
		// function sum($num1,$num2){
		// 	$total = $num1 + $num2;
		// 		if((is_numeric($num1))&&(is_numeric($num2))){
		// 			return $total ."<br>";
		// 		}
		// 		else {
		// 			echo ("Erreur, argument non numérique <br>");
					
		// 		};
		// };

		// echo "La somme total est: " .sum(10,30);
		// echo "La somme total est: " .sum(40,20);

		//EXERCICE ACRONYMES
		// function acronyme($string){
		// 	$abreviation ="";
		// 	$string = ucwords($string);
		// 	$phrase = explode(" ", "$string");
		// 		foreach ($phrase as $phrase) {
		// 			$abreviation .= $phrase[0];
		// 		}
		// 		return $abreviation."<br>";;
		// }
		// echo acronyme('hello world');
		// echo acronyme ('bonjour tout le monde');
		// echo acronyme ('asscociation intenational tactique  police');

		//EXERCICE REMPLACE AB PAR æ 
		// function replaceCharacters($string){
		// 	return str_replace("ae", "æ", "$string")."<br>";
		// }
		// echo replaceCharacters("caecotrophie");
		// echo replaceCharacters("chaenichthys");
		// echo replaceCharacters("microsphaera");
		// echo replaceCharacters("sphaerotheca");

		//EXERCICE REMPLACE  æ PAR AB (inverse)
			// function replaceAB($string){
			// 	return str_replace("æ", "ae", $string)."<br>";
			// }

			// echo replaceAB('cæcotrophie');
			// echo replaceAB('chænichthys');
			// echo replaceAB('microsphæra');
			// echo replaceAB('sphærotheca');

		//CONVERTIR UNE CHAINE EN MINUSCULES

		// function string($string){
		// 	return strtolower($string);
		// }

		// echo string ('ARRETE DE CRIER JE N\'ENTENDS PLUS RIEN!!!');

		//REVERSE STRING
		// function reverseString($string){
		// 	return strrev($string);
		// }
		// echo reverseString('Me llamo Meilyn ANDRADE');

	 ?>
	
</body>
</html>