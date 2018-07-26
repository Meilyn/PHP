<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>While</title>
</head>
<body>
	<?php 
	//Exercise # 1
		// $nlignes = 1;
		// while ( $nlignes <= 120) {
		// 	echo $nlignes ."<br>";
		// 	$nlignes++;
		// };

	//Exercise # 2
		// $nlignes = 1;
		// 	for ($nlignes = 1; $nlignes <= 120 ; $nlignes++) { 
		// 		echo $nlignes ."<br>";
		// 	};

	// Exercice # 3
	// $classMate = ['Anthony', 'Batiste', 'Julie','Morgan','Moustpha','Claudio','Andrea','Sourech','Marianne','Geoffrey','Michael','Alex','Bertrand'];
	// 	foreach ($classMate as $value) {
	// 		echo $value ."<br>";
	// 	};
?>
<!--  <label for="country">Veuillez choisir votre pays:</label><br>
	 	<select name="country" value="country">
	 		<option value="">Veuillez selectioner un pays</option>
	 	
<?php 
	//Exercise # 4
	$country = ['Honduras','Belgium','Holland','Japan','Mexico','China','Korea','Canada','Roumanie','Brasil'];
			foreach ($country as $key =>$value) {
				echo '<option value ="' .$key. '">' .$value.'</option>';
			}	
 ?>
 		</select> -->

 	<!-- Exercice #5 -->
 	<label for="countr">Veuillez choisir votre pays:</label><br>
	 	<select name="country" value="country" Method='POST'>
	 		<option value="">Veuillez selectioner un pays</option>
 	<?php 
	 	$country = [
	 		'HN'=> 'Honduras',
	 		'BE'=>'Belgium',
	 		'NL'=> 'Holland',
	 		'JP'=> 'Japan',
	 		'MX'=> 'Mexico',
	 		'CH'=>'China',
	 		'KR'=>'Korea',
	 		'CA'=>'Canada',
	 		'RO'=> 'Roumanie',
	 		'BR'=>'Brasil'
	 	];
			foreach ($country as $key =>$key) {
				echo '<option value =""' .$key. '">' .$key.'</option>';
				
			};	
			
 	 ?>	
		</select>

</body>
</html>