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
	<!-- import de JQUERY via google -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- import du JS de bootsrap -->
	<script src="js/bootstrap.min.js"></script>
	
	<?php
	if($_SERVER['REQUEST_URI'] == "/include/inscription.php") // si la page inscription.php est bien présente
		echo '<link href="css/inscription.css" rel="stylesheet"/>'; // alors charger le css pour cette page et uniquement cette page
	else if($_SERVER['REQUEST_URI'] == "/include/faq.php")
		echo '<link href="css/stylefaq.css" rel="stylesheet"/>';
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
								<input class="form-control" type="text" name="login" placeholder="Login"/>
								</br>
								<input class="form-control" type="password" name="password" placeholder="Mot de passe"/>
								</br>
								<div class="center"><button type="submit" class="buttonlogin">se connecter</button></div> 
								<div class="passforget"><a class="linkmdp" href="include/oubli.php">Identifiant ou mot de passe oublié</a></div>
							</div>
						</div>
					</form>
				</div>
			</div>
			<nav class="navbar navbar-light bg-faded col-md-12 col-xs-12"><!-- barre de navigation -->
				<ul id="topnav">
					<li class="nav-item active mg col-md-2 col-xs-2"><a class="blue" href="index.php">ACCUEIL</a></li>
					<li class="barnav md nav-item col-md-2 col-xs-2">FORMATIONS
						<ul class="list-group" id="menuScroll"><!-- sous-menu déroulant -->
							<li><a class="list-group-item hover1" href="include/bafa.php">BAFA</a></li>
							<li><a class="list-group-item " href="include/bafd.php">BAFD</a></li>
							<li><a class="list-group-item " href="include/formations.php">FORMATIONS CONTINUES</a></li>
							<li><a class="list-group-item " href="include/devenir.php">DEVENIR FORMATEUR</a></li>
						</ul>
					</li>
					<li class="barnav col-md-2 col-xs-1"><a class="magenta" href="faq.php">FAQ</a></li>
					<li class="barnav col-md-3 col-xs-3"><a class="red" href="contactmod.php">CONTACTEZ NOUS</a></li>
					<li class="barnav col-md-3 col-xs-4"><a  class="yellow" href="../index.html#infos">QUI SOMMES NOUS ?</a></li>
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
					<a href="include/bafa.php"><li>BAFA</li></a>
					<a href="include/bafd.php"><li>BAFD</li></a>
					<a href="include/formations.php"><li>FORMATIONS CONTINUES</li></a>
					<a href="include/devenir.php"><li>DEVENIR FORMATEUR</li></a>
					<a href="include/faq.php"><li>FAQ</li></a>
					<a href="contactmod.php"><li>CONTACTEZ NOUS</li></a>
					<a href="../index.html#infos"><li>QUI SOMMES NOUS ?</li></a>
				</ul>
			</div>
		</header>


