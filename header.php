<!-- 1ère découpe (header.php)-->
<!doctype HTML>

<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<!-- rendre compatible la mise en forme sur edge -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta http-equiv="X-UA-Compatible" content="chrome=1" />
		<!-- comportement que le navigateur doit adopter concernant l'affiche du site (par rapport à l'écran)-->
		<?php $title=""; ?>
		<!-- Shortcut du logo du site -->
		<link rel="icon" type="image/png" href="img/shortcut_img.png"/> 
		<!-- import du fichier Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet"/>
		<!-- import du fichier de style CSS pour la page d'inscription -->
		
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		
		<link rel="stylesheet" type="text/css" href="css/styleheader.css">
		<link href="css/inscription.css" rel="stylesheet"/>	
		<link rel="stylesheet" type="text/css" href="css/styleC.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link href="css/styleFooter.css" rel="stylesheet"/>
		<link href="css/styleBAFA.css" rel="stylesheet" media="screen">	
		<link href="css/styleBAFD.css" rel="stylesheet" media="screen">	
		<link href="css/styleform.css" rel="stylesheet" media="screen">
		<link href="css/stylerecup.css" rel="stylesheet" media="screen">
		<link href="css/styleprofil.css" rel="stylesheet" media="screen">
		<link href="css/stylecgu.css" rel="stylesheet" media="screen">
		<link href="css/stylecgv.css" rel="stylesheet" media="screen">
		<link href="css/stylelegales.css" rel="stylesheet" media="screen">				
		<link href="css/styleformation.css" rel="stylesheet" media="screen">
	</head>
	
	<body>
		<div id="container"><!--  -->
			<main>
				<header>
					<div class="row"><!-- Entête des pages -->
						<div class="col-md-3 col-xs-12 logo"><!-- logo FSCF cliquable -->
							<a href="#"><img src="img/FSCF-Yonne RVB.png" alt="FSCF retour à l'accueil" style="width: 50%"></a>
						</div>
						<div class="col-md-4 col-xs-12 central"><!-- lien d'inscription -->
							<i class="fa fa-book fa-2x" aria-hidden="true"></i></im><a href="inscription.php">Je m'inscris au BAFA/BAFD</a>
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
					<nav class="navbar navbar-light bg-faded"><!-- barre de navigation -->
						<ul  id="topnav">
							<li class="nav-item active"><a href="index.php">ACCUEIL</a></li>
							<li class="barnav nav-item">FORMATIONS<!-- Classe "barnav" pour les règles css -->
								<ul class="list-group" id="menuScroll"><!-- sous-menu déroulant -->
									<li><a class="list-group-item"  href="include/bafa.php">BAFA</a></li>
									<li><a class="list-group-item" href="include/bafd.php">BAFD</a></li>
									<li><a class="list-group-item" href="include/formations.php">FORMATIONS CONTINUES</a></li>
									<li><a class="list-group-item" href="include/devenir.php">DEVENIR FORMATEUR</a></li>
								</ul>
							</li>
							<li class="barnav"><a href="include/faq.php">FAQ</a></li>
							<li class="barnav"><a href="contactmod.php">CONTACTEZ NOUS</a></li>
							<li class="barnav"><a href="../index.html#infos">QUI SOMMES NOUS ?</a></li>
						</ul>
					</nav>
				</header>
			<!-- Fin de 1ère découpe -->
