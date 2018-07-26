<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<label for="country">Veuillez choisir votre pays:</label><br>
	 	<select name="country" value="country">
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
				echo '<option value ="' .$key. '">' .$key.'</option>';
			}	
			
 	 ?>	

	 	</select>

	
	
</body>
</html>