<!DOCTYPE html>
	<html lang="fr">
						<?php include ('header.php'); ?>
						<head>
								<link rel="stylesheet" type="text/css" href="css/styleC.css">
						</head>

		<body>
			<div class="container plus">
						
	<!-- barre de header principale avec logo, inscription et connexion -->
	
	
			
			
	<!-- Début du slider, temps qui s'écoule entre chaque slide -->
			<div class="carousel fade-carousel slide carousel-fade" data-ride="carousel" data-interval="4000" id="bs-carousel">


	<!-- Indicateur du slide -->
			<ol class="carousel-indicators">
				<li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
				<li data-target="#bs-carousel" data-slide-to="1"></li>
				<li data-target="#bs-carousel" data-slide-to="2"></li>
			</ol>

	<!-- Contenue des slides -->
			<div class="carousel-inner">
				<div class="item slides active">
					<div class="slide-1">
						<div class="overlay"></div>
					</div>
					<div class="hero">
	<!-- Titre slide -->
						<hgroup>
							<h1>BAFA / BAFD / FORMATION CONTINUE</h1>        
						</hgroup>
						<button class="btn btn-hero btn-lg" role="button">JE M'INSCRIS</button>
					</div>
				</div>
				<div class="item slides">
					<div class="slide-2">
						<div class="overlay"></div>
					</div>
					<div class="hero">  
	<!-- Titre slide -->				
						<hgroup>
							<h1>DEVENIR FORMATEUR ?</h1>        
						</hgroup>       
						<button class="btn btn-hero btn-lg" role="button">En savoir plus</button>
					</div>
				</div>
				<div class="item slides">
					<div class="slide-3">
						<div class="overlay"></div>
					</div>
					<div class="hero">  
	<!-- Titre slide -->						
						<hgroup>
							<h1>TOUTES LES QUESTIONS FRÉQUENTES</h1>        
						</hgroup>
						<button class="btn btn-hero btn-lg" role="button">En savoir plus</button>
					</div>
				</div>
			</div>
 <!-- fin du slider -->
 
				<div>	
					<div class="center">
						<button type="button" class="btn btn-hero btn-lg btn-forma"><center></center>Voir toutes les dates de formation</button>
					</div>
					<form>
						<select class="selectpicker">
							<option>BAFA</option>
							<option>BAFD</option>
							<option>FORMATION CONTINUE</option>
						</select>
					</form>		
	<!-- section à créer pour le "qui sommes nous" -->
					<div>
					<p> Qui sommes-nous ? </p>
					</div>
				</div>		

				<footer>
					<div class="row">
						<div class="col-md-4"><p> &copy; FSCF</p></div>
						<div class="col-md-4">adresse de blablabla</div>
						<div class="col-md-4">Mentions légales conditions générales de vente </div>
						
					</div>
				</footer>


				<!-- import de JQUERY via google -->
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
				<!-- import du JS de bootsrap -->
				<script src="js/bootstrap.min.js"></script>
		</body>
	</html>