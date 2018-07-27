<html>
<body>
	

<?php 
	
	$date = date('l jS \of F Y');
	$message ="";
	$name = $_POST['name'];
	$gender = $_POST['gender'];
	$institutrice =$_POST['institutrice'];
	$motive = $_POST['motive'];
	$parent = $_POST['signature'];

	// echo $gender;
	// echo $motive;
		if ($gender == "fille") {
			if ($motive == "malade"){
				$message = "Monsieur/Madame $institutrice <br>

		Ma fille $name , élève en classe de 4ième dans votre collège, ne pourra pas assister au cours aujourd’hui.  $date
		Son état de santé justifie cette absence. Le médecin de famille lui a préconisé une période de repos.
		Notre enfant devrait reprendre la classe dans une semaine, 
		Pour tout complément d’informations n’hésitez surtout pas à nous contacter.

		Nos plus sincères salutations s $parent";
			}
			echo $message;
		};
 ?>
 </body>
</html>