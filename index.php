<?php require ('header.php'); ?>
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
						<button class="btn btn-hero btn-lg" href="inscription.php" role="button"><a href="inscription.php"> JE M'INSCRIS</a></button>
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
					<p id="qsn"> Qui sommes-nous ? </p>
					</div>
				</div>		

</div>		
</div>
<?php require ('footer.php'); ?>