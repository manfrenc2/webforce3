

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
		
		<link rel="stylesheet" type="text/css" href="css/styleheader.css">
		<link href="css/styleFooter.css" rel="stylesheet"/>

		<?php
            if($_SERVER['REQUEST_URI'] == "/include/inscription.php")
                echo '<link href="css/inscription.css" rel="stylesheet"/>';
            else if($_SERVER['REQUEST_URI'] == "/include/faq.php")
                echo '<link href="css/faqcss.css" rel="stylesheet"/>';

        ?>
		

	</head>
	
	<body>
		<div class="container"><!--  -->
			<main>
				<header>
					<div><!-- Entête des pages -->
						<div class="col-md-3 col-xs-3"><!-- logo FSCF cliquable -->
							<a href="#">
								<img class="logo" src="img/FSCF-Yonne RVB.png" alt="FSCF retour à l'accueil">
							</a>
						</div>
						<div class="col-md-5 col-xs-9 central"><!-- lien d'inscription -->
							<i class="fa fa-book fa-2x" aria-hidden="true"></i><a class="ins" href="inscription.php">Je m'inscris au BAFA/BAFD</a>
						</div>
						<div class="col-md-4 col-xs-12 connect"><!-- formulaire de connexion -->
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
					<nav class="navbar navbar-light bg-faded col-md-12 col-xs-12"><!-- barre de navigation -->
						<ul  id="topnav">
							<li class="nav-item active mg col-md-2 col-xs-2"><a href="index.php">ACCUEIL</a></li>
							<li class="barnav md nav-item col-md-2 col-xs-2">FORMATIONS<!-- Classe "barnav" pour les règles css -->
								<ul class="list-group" id="menuScroll"><!-- sous-menu déroulant -->
									<li><a class="list-group-item"  href="include/bafa.php">BAFA</a></li>
									<li><a class="list-group-item" href="include/bafd.php">BAFD</a></li>
									<li><a class="list-group-item" href="include/formations.php">FORMATIONS CONTINUES</a></li>
									<li><a class="list-group-item" href="include/devenir.php">DEVENIR FORMATEUR</a></li>
								</ul>
							</li>
							<li class="barnav col-md-2 col-xs-1"><a href="include/faq.php">FAQ</a></li>
							<li class="barnav col-md-3 col-xs-3"><a href="contactmod.php">CONTACTEZ NOUS</a></li>
							<li class="barnav col-md-3 col-xs-4"><a href="../index.html#infos">QUI SOMMES NOUS ?</a></li>
						</ul>
					</nav>
					<div class="hambouton">
						<button class="hamburger">&#9776;</button>
      					<button class="cross">&#735;</button>
					</div>
				    <div class="menu">
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
				<?php require ("footer.php") ?>
			<!-- Fin de 1ère découpe -->
