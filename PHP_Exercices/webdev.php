<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Web Dev</title>
</head>
<body>
	<pre>
	<?php 
		 $webDev =  [
		 	'frontend' =>  [],
		 	'backend' => []
		 ];
		array_push($webDev["frontend"],"xhtml");
		array_push($webDev["backend"], "Ruby on Rails");
		array_push($webDev["frontend"], "CSS");
		array_push($webDev["backend"], "Flash");
		array_push($webDev["frontend"], "Javascript");
		$webDev["frontend"][0] = 'html';
		unset($webDev["backend"][1]);
		print_r($webDev);

	 ?>
	</pre>	
</body>
</html>