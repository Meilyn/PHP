<html>
<body>
	

<?php 
	
	$date =strftime("%Y-%m-%d");
	$message ="";
	$name = $_POST['name'];
	$gender = $_POST['gender'];
	$institutrice =$_POST['institutrice'];
	$motive = $_POST['motive'];
	$parent = $_POST['signature'];

		if ($gender == "female") {
			if ($motive == "maladie"){
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