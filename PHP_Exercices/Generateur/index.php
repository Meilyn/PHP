

<?php 
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {

		$date = date('l jS \of F Y');
		$message ="";
		$name = $_POST['name'];
		$gender = $_POST['gender'];
		$gender2 = $_POST['gender2'];
		$prof =$_POST['prof'];
		$motive = $_POST['motive'];
		$parent = $_POST['signature'];


		//OPERATORS TERNAIRES 
		$d_Message = ($gender2 == "femme") ? "Madame $prof" : "Monsieur $prof";
		$D_genre = ($gender == "fille") ? "Ma fille $name" :"Mon fils $name";
		$ilElle = ($gender == "fille") ? "elle": "il";

		switch ($motive) {
			case 'malade':
				$message = "$d_Message <br>

				$D_genre , élève en classe de 4ième dans votre collège, ne pourra pas assister au cours aujourd’hui.  $date<br>
				Son état de santé justifie cette absence. Le médecin de famille lui a préconisé une période de repos.
				Notre enfant devrait reprendre la classe dans une semaine, 
				Pour tout complément d’informations n’hésitez surtout pas à nous contacter.

				Nos plus sincères salutations<br><br>
				Cordialment,	
				  $parent";
				break;
			case 'deces':
					$message = 
				"$d_Message,<br><br>

				$D_genre, sera absente et n’assistera donc pas aux cours de la journée du $date.<br>
				Notre fille sera absente et n’ira pas au lycée pour des raisons familiales et personnelles.<br>
				Si vous souhaitez avoir des précisions sur le motif de cette absence scolaire vous pouvez me contacter sur mon téléphone portable.<br><br>

				Cordialement,<br>
				$parent";
					break;	
			case 'retard':
				$message =
				 "$D_genre, est arrivé en retard au collège car elle a loupé son bus scolaire ce matin.<br>
				Ce mot d’excuse vous confirme que le retard de notre enfant s’explique bien par un problème de réveil<br> qui a occasionné une non-prise du bus scolaire.<br>

				Nous veillerons à ce que cette situation ne se renouvelle pas.<br>

				Merci<br>
				Cordialement,<br><br>
				$parent";
				break;
			default:
				$message = "Veuillez choisir un des 3 options";
				break;
		}
	}	
 ?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>Generateur d'Excuses</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">
				<!-- Header -->
					<header id="header" class="alt">
						<a href="index.html" class="logo"><strong>Generateur</strong><span>D'Excuses</span></a>
					</header>
				<!-- Banner -->
					<section id="banner" class="major">
						<div class="inner">
							<header class="major">
								<h1>Bonjour, Mon Nom est 'EXCUSE'</h1>
							</header>
							<div class="content">
								<p>VOUS MANQUEZ D'IMAGINATION? NE FAITE PAS UNE MALADIE. NOUS AVONS LA SOLUTION POUR QUE VOTRE FILS PUISSE GLANDER EN TOUTE IMPUNITÉ GÉNERATEUR DE EXCUSES POUR VOTRE ENFANT!.</p>
								<ul class="actions">
									<li><a href="#generator" class="button next scrolly">Donne moi une excuse</a></li>
								</ul>
							</div>
						</div>
					</section>
				<!-- Main -->
					<div id="main">
				<!-- Contact -->
					<section id="contact">
						<div class="inner">
							<section>
								<form method="POST" id="generator">
									<div class="fields">
										<div class="field half">
											<!--Sexe & Nom Enfant -->
											<label for="name">Nom Enfant:</label>
											<input type="text" name="name" id="name" placeholder="Nom & Prénom" />
										</div>
										<div class="field half Enfant">
											<label for="Sexe">Sexe</label>
											<input type="radio" id="fille" name="gender" value="fille" >
											<label for="fille">Fille</label>
											<input type="radio" id="Garçons" name="gender" value="garcon">
											<label for="Garçons">Garçon</label>
										</div>
										<!--Nom & Sexe Institutrice -->
										<div class="field half">
											<label for="prof">Instituteur(rice)</label>
											<input type="text" name="prof" id="prof"  placeholder="Nom OU Prénom" />
										</div>
										<div class="field half intitutrice">
											<label for="Genre">Sexe</label>
											<input type="radio" id="femme" name="gender2" value="femme" >
											<label for="femme">Femme</label>
											<input type="radio" id="homme" name="gender2" value="homme">
											<label for="homme">Homme</label>
										</div>
										<!-- Motive d'Absence-->
										<div class="field">
											<label><h4>Motive d'absence</h4></label>
											<input type="radio" name="motive" id="malade" value="malade">
											<label for="malade">Malade</label>
											<input type="radio" name="motive" id="deces" value="deces">
											<label for="deces">Décès</label>
											<input type="radio" name="motive" id="retard" value="retard">
											<label for="retard">Retard</label><br>
											Signature Parents<input type="text" name="signature" placeholder="Nom & Prénom"></li><br>
										</div>
									</div>
									<ul class="actions">
									<li> 
										<input type="submit" value="Generateur" href="#Generateur" class="button next scrolly">
									</ul>
								</form>
							</section>
							<section class="split">
								<section>
									<div class="contact-method">
										<span class="icon alt fa-envelope"></span>
										<h3>Email</h3>
										<a href="#">info@meicreations.com</a>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon alt fa-phone"></span>
										<h3>Phone</h3>
										<span>(+32) 495- 25-73-66</span>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon alt fa-home"></span>
										<h3>Address</h3>
										<span>1234 Somewhere Road #5432<br />
										Nashville, TN 00000<br />
										United States of America</span>
									</div>
								</section>
							</section>
						</div>
					</section>
						<div id="main">
						<!-- Two -->
							<section id="two">
								<div class="inner">
									<header class="major">
										<h2 id="Generateur">ATTESTATION</h2>
									</header>
									<p > <?php 
									echo $message ?>
									</p>
										<p>
									<?php  ?>
								</p>
								</div>
							</section>

					</div>
				<!-- Footer -->
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
	</body>
</html>