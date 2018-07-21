<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>AME SOEUR</title>
</head>
<body>
<pre>
	<?php

		$ame_soeur = ['Intelligent','Aventurier','Pas Net', 'Blond', 'Yeux Bleu'];
		$Moi = ['Intelligent','Sympa', 'Aventurier', 'Folle', 'WTF'];

		$compatibilite = array_intersect($ame_soeur,$Moi);
		print_r($compatibilite);
		$merge = array_merge($ame_soeur,$Moi);
		print_r($merge);
	?>

</pre>	
	
</body>
</html>