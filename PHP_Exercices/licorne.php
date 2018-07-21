<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
	</head>
	<body>
	<h3>Es-tu un humain, un chat ou une licorne ?</h3>
	<form method ="POST">
		<input type="radio" name="genre" value="humain">Humain
		<input type="radio" name="genre" value="chat">Chat
		<input type="radio" name="genre" value="licorne">Licorne
		<input type="submit" name="submit" value="Valider">
	</form>	
	<?php 
		if ($_SERVER['REQUEST_METHOD'] === 'POST'){
			$image = "";
			$imageh = '<img src ="https://media.giphy.com/media/oiGCnybFPh6Q8/giphy.gif">';
			$imagec = '<img src ="https://media.giphy.com/media/JIX9t2j0ZTN9S/giphy.gif">';
			$imagel = '<img src ="https://media.giphy.com/media/NL1KH2WwfZCIU/giphy.gif">';
			$genre = $_POST['genre'];
			// var_dump($genre);

		$image = ($genre == 'humain') ? $imageh : (($genre == 'chat') ? $imagec : $imagel);

		// if ($genre == "humain") {
			// 	$image = '<img src ="https://media.giphy.com/media/oiGCnybFPh6Q8/giphy.gif">';
			// }	
			// elseif ($genre == "chat") {
			// 	$image = '<img src ="https://media.giphy.com/media/JIX9t2j0ZTN9S/giphy.gif">';
			// }
			// else{
			// 	$image = '<img src = "https://media.giphy.com/media/NL1KH2WwfZCIU/giphy.gif">';
			// }
		 	echo $image;
	  	}		
	?>	
	</body>
</html>