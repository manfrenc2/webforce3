<!-- 1ère découpe (header.php)-->
<!doctype HTML>

<html lang="fr">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>Accueil</title>
		<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		
		
	</head>
	
	<body>
		<div id="container"><!--  -->
			<main>
				<header>
					<div class="row"><!-- Entête des pages -->
						<div class="col-md-3 col-xs-12 logo"><!-- logo FSCF cliquable -->
							<a href="#"><img src="img/FSCF-Yonne RVB.png" alt="FSCF retour à l'accueil" style="width: 150px; height: 124px;"></a>
						</div>
						<div class="col-md-4 col-xs-12 central"><!-- lien d'inscription -->
							<i class="fa fa-book fa-2x" aria-hidden="true"></i></im><a href="include/inscription.php">Je m'inscris au BAFA/BAFD</a>
						</div>
						<div class="col-md-5 col-xs-12 connect"><!-- formulaire de connexion -->
							<form class="connect" method="post" action="login.php">
								<label for="connexion">Connexion</label>
								<input type="text" name="login" placeholder="Login" required>
								<input type="password" name="password" placeholder="Mot de passe" required>
								<button type="submit" name="submit">Valider</button><br>
								<a href="include/oubli.php">Identifiant ou mot de passe oublié</a>
							</form>
						</div>
					</div>
					<nav><!-- barre de navigation -->
						<ul id="topnav">
							<li><a href="#">Accueil</a></li>
							<li class="barnav">Formations<!-- Classe "barnav" pour les règles css -->
								<ul id="menuScroll"><!-- sous-menu déroulant -->
									<li><a href="include/bafa.php">BAFA</a></li>
									<li><a href="include/bafd.php">BAFD</a></li>
									<li><a href="include/formations.php">Formations continues</a></li>
									<li><a href="include/devenir.php">Devenir formateur</a></li>
								</ul>
							</li>
							<li><a href="include/faq.php">FAQ</a></li>
							<li><a href="include/contact.php">Contactez nous</a></li>
							<li class="barnav"><a href="../index.html#infos">Qui sommes-nous ?</a></li>
						</ul>
					</nav>
				</header>
			<!-- Fin de 1ère découpe -->
