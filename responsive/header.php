<!-- 1ère découpe (header.php)-->
<!doctype HTML>

<html lang="fr">
	<head>
		<meta charset="utf-8">
		<!-- comportement que le navigateur doit adopter concernant l'affiche du site (par rapport à l'écran)-->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<!-- rendre compatible la mise en forme sur edge et chrome -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta http-equiv="X-UA-Compatible" content="chrome=1" />
		<!-- Shortcut du logo du site -->
		<link rel="icon" type="image/png" href="img/shortcut_img.png"/> 
		<!-- import du fichier Bootstrap -->
		<link rel="stylesheet" type="text/css" href="css/styleheader.css">
		<link href="css/styleFooter.css" rel="stylesheet"/>

		
		<?php
		// echo $_SERVER['REQUEST_URI'];
		// die();
		if($_SERVER['REQUEST_URI'] == "/projet/inscription.php") // si la page inscription.php est bien présente
			echo '<link href="css/styleinscription.css" rel="stylesheet"/>'; // alors charger le css pour cette page et uniquement cette page
		else if($_SERVER['REQUEST_URI'] == "/projet/faq.php")
			echo '<link href="css/stylefaq.css" rel="stylesheet"/>';
		else if($_SERVER['REQUEST_URI'] == "/projet/index.php")
			echo '<link href="css/styleindex.css" rel="stylesheet"/>';
		else if($_SERVER['REQUEST_URI'] == "/projet/reinscription.php")
			echo '<link href="css/styleinscription.css" rel="stylesheet"/>';
		else if($_SERVER['REQUEST_URI'] == "/projet/contact.php")
			echo '<link href="css/stylecontact.css" rel="stylesheet"/>';
		else if($_SERVER['REQUEST_URI'] == "/projet/bafa.php")
			echo '<link href="css/stylebafa.css" rel="stylesheet"/>';
		else if($_SERVER['REQUEST_URI'] == "/projet/bafd.php")
			echo '<link href="css/stylebafd.css" rel="stylesheet"/>';
		else if($_SERVER['REQUEST_URI'] == "/projet/formcontinue.php")
			echo '<link href="css/styleformation.css" rel="stylesheet"/>';
		else if($_SERVER['REQUEST_URI'] == "/projet/formateur.php")
			echo '<link href="css/styleform.css" rel="stylesheet"/>';
		else if($_SERVER['REQUEST_URI'] == "/projet/mentionLegale.php")
			echo '<link href="css/stylelegales.css" rel="stylesheet"/>';
		else if($_SERVER['REQUEST_URI'] == "/projet/cgu.php")
			echo '<link href="css/stylecgu.css" rel="stylesheet"/>';
		else if($_SERVER['REQUEST_URI'] == "/projet/cgv.php")
			echo '<link href="css/stylecgv.css" rel="stylesheet"/>';
		else if($_SERVER['REQUEST_URI'] == "/projet/recupmail.php")
			echo '<link href="css/stylerecup.css" rel="stylesheet"/>';
		?>

	</head>

	<body>	
		<div class="container"><!-- ne pas oublier de fermer cette div dans les contenues principaux juste avant le footer -->			
			<header>
				<div><!-- Entête des pages -->
					<div class="col-md-3 col-xs-3"><!-- logo FSCF cliquable -->
						<a href="#">
							<img class="logo" src="img/FSCF-Yonne RVB.png" alt="FSCF retour à l'accueil">
						</a>
					</div>
					<div class="col-md-5 col-xs-9 central"><!-- lien d'inscription -->
						<div class="inscription ins">
							<a href="inscription.php"><i class="fa fa-book fa-2x" aria-hidden="true"></i><span>&nbsp Je m'inscris au BAFA/BAFD</span></a>
						</div>				
					</div>
					<div class="col-md-4 col-xs-12 connect"><!-- formulaire de connexion -->
						<form class="connect" method="post" action="login.php">
							<div class="form-group"> 
								<div class="form-group">
									<label for="connexion" class="connexion connect">Connexion</label>
									<input class="form-control auto" type="text" name="login" placeholder="Login"/>
									</br>
									<input class="form-control auto" type="password" name="password" placeholder="Mot de passe"/>
									</br>
									<div class="center"><button type="submit" class="buttonlogin">se connecter</button></div> 
									<div class="passforget"><a class="linkmdp" href="recupmail.php"> Vous avez oublié votre mot de passe ?</a></div>
								</div>
							</div>
						</form>
					</div>
				</div>
				<nav class="navbar navbar-light bg-faded col-md-12 col-xs-12 adjust"><!-- barre de navigation -->
					<ul id="topnav">
						<li class="nav-item active mg col-md-2 col-xs-2"><a class="blue" href="index.php">ACCUEIL</a></li>
						<li class="barnav md nav-item col-md-2 col-xs-2">FORMATIONS
							<ul class="list-group" id="menuScroll"><!-- sous-menu déroulant -->
								<li><a class="list-group-item hover1" href="bafa.php">BAFA</a></li>
								<li><a class="list-group-item " href="bafd.php">BAFD</a></li>
								<li><a class="list-group-item " href="formcontinue.php">FORMATIONS CONTINUES</a></li>
								<li><a class="list-group-item " href="formateur.php">DEVENIR FORMATEUR</a></li>
							</ul>
						</li>
						<li class="barnav col-md-2 col-xs-1"><a class="magenta" href="faq.php">FAQ</a></li>
						<li class="barnav col-md-3 col-xs-3"><a class="red" href="contact.php">CONTACTEZ NOUS</a></li>
						<li class="barnav col-md-3 col-xs-4"><a  class="yellow" href="index.php#infos">QUI SOMMES NOUS ?</a></li>
					</ul>
				</nav> 
				<!--menu uniquement visible en responsive -->
				<div class="hambouton">     <!--bouton hamburger et fermeture -->
					<button class="hamburger">&#9776;</button>
					<button class="cross">&#735;</button>
				</div>
				<div class="menu">  <!-- menu pour la version mobile -->
					<ul>
						<a href="index.php"><li>ACCUEIL</li></a>
						<a href="bafa.php"><li>BAFA</li></a>
						<a href="bafd.php"><li>BAFD</li></a>
						<a href="formcontinue.php"><li>FORMATIONS CONTINUES</li></a>
						<a href="formateur.php"><li>DEVENIR FORMATEUR</li></a>
						<a href="faq.php"><li>FAQ</li></a>
						<a href="contact.php"><li>CONTACTEZ NOUS</li></a>
						<a href="index.php#qsn"><li>QUI SOMMES NOUS ?</li></a>
					</ul>
				</div>
			</header>


