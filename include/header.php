<!-- 1ère découpe (header.php)-->
<!doctype HTML>
	<html lang="fr">
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
			<!-- rendre compatible la mise en forme sur edge et chrome -->
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta http-equiv="X-UA-Compatible" content="chrome=1" />
			<!-- comportement que le navigateur doit adopter concernant l'affiche du site (par rapport à l'écran)-->
			<?php $title=""; ?>
			<!-- Shortcut du logo du site -->
			<link rel="icon" type="image/png" href="img/shortcut_img.png"/> 
			<!-- import du fichier Bootstrap -->
			<link href="css/bootstrap.min.css" rel="stylesheet"/>
			<!-- import du fichier de style CSS pour la page d'inscription -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
			<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
			<link rel="stylesheet" type="text/css" href="css/styleheader.css">
			<link href="css/inscription.css" type="text/css" rel="stylesheet"/>	
			

		</head>
		
		<body>
			<div id="container"><!--  -->
				<main>
					<header>
						<div class="row"><!-- Entête des pages -->
							<div class="col-md-3 col-xs-12 logo"><!-- logo FSCF cliquable -->
								<a href="#"><img src="img/FSCF-Yonne RVB.png" alt="FSCF retour à l'accueil" style="width: 70%"></a>
							</div>
							<div class="col-md-4 col-xs-12 central"><!-- lien d'inscription -->
								<i class="fa fa-book fa-2x" aria-hidden="true"></i></im><a href="inscription.php">Je m'inscris au BAFA/BAFD</a>
							</div>
							<div class="col-md-5 col-xs-12 connect"><!-- formulaire de connexion -->
								<form class="connect" method="post" action="login.php">
									<div class="form-group"> 
										<div class="form-group">
											<label for="connexion">Connexion</label>
											<input class="form-control" type="text" name="login" placeholder="Login">
											<input class="form-control" type="password" name="password" placeholder="Mot de passe">
											<button type="submit" name="submit">Valider</button><br>
											<a href="include/oubli.php">Identifiant ou mot de passe oublié</a>
										</div>
									</div>
								</form>
							</div>
						</div>
						<nav class="navbar navbar-light bg-faded"><!-- barre de navigation -->
							<ul  id="topnav">
								<li class="nav-item active col-md-2"><a href="index.php">ACCUEIL</a></li>
								<li class="barnav nav-item col-md-3">FORMATIONS<!-- Classe "barnav" pour les règles css -->
									<ul class="list-group" id="menuScroll"><!-- sous-menu déroulant -->
										<li><a class="dropdown-item"  href="bafa.php">BAFA</a></li>
										<li><a class="list-group-item" href="bafd.php">BAFD</a></li>
										<li><a class="list-group-item" href="formations.php">FORMATIONS CONTINUES</a></li>
										<li><a class="list-group-item" href="devenir.php">DEVENIR FORMATEUR</a></li>
									</ul>
								</li>
								<li class="barnav col-md-1"><a href="faq.php">FAQ</a></li>
								<li class="barnav col-md-2"><a href="contactmod.php">CONTACTEZ NOUS</a></li>
								<li class="barnav col-md-4"><a href="index.php#infos">QUI SOMMES NOUS ?</a></li>
							</ul>
						</nav>
					</header>
				<!-- Fin de 1ère découpe -->
