<?php require ('header.php'); ?>
<!-- Début du slider, temps qui s'écoule entre chaque slide -->

	<div class="carousel fade-carousel slide carousel-fade" data-ride="carousel" data-interval="4000" id="bs-carousel">	
	<!-- Indicateur du slide -->
		<ol class="carousel-indicators">
			<li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
			<li data-target="#bs-carousel" data-slide-to="1"></li>
			<li data-target="#bs-carousel" data-slide-to="2"></li>
			<li data-target="#bs-carousel" data-slide-to="3"></li>
			<li data-target="#bs-carousel" data-slide-to="4"></li>
		</ol>
			<!-- Contenue des slides -->
		<div class="carousel-inner">
			<div class="item slides active">
				<div class="slide-1">
					<div class="imgenplace"></div>
				</div>
				<div class="hero">
					<!-- Titre slide -->
					<hgroup>
					<h1>BAFA</h1>        
					</hgroup>
					<button class="btn btn-hero btn-lg" href="inscription.php" role="button"><a href="inscription.php"> JE M'INSCRIS</a></button>
				</div>
			</div>
			<div class="item slides">
				<div class="slide-2">
					<div class="imgenplace"></div>
				</div>
				<div class="hero">  
					<!-- Titre slide -->				
					<hgroup>
						<h1>BAFD</h1>        
					</hgroup>       
					<button class="btn btn-hero btn-lg" href="inscription.php" role="button"><a href="inscription.php"> JE M'INSCRIS</a></button>
				</div>
			</div>
			<div class="item slides">
				<div class="slide-3">
					<div class="imgenplace"></div>
				</div>
				<div class="hero">  
					<!-- Titre slide -->						
					<hgroup>
						<h1>FORMATIONS CONTINUES</h1>        
					</hgroup>
					<button class="btn btn-hero btn-lg" href="inscription.php" role="button"><a href="inscription.php"> JE M'INSCRIS</a></button>
				</div>
			</div>
			<div class="item slides">
				<div class="slide-4">
					<div class="imgenplace"></div>
				</div>
				<div class="hero">  
					<!-- Titre slide -->						
					<hgroup>
						<h1>DEVENIR FORMATEUR ?</h1>        
					</hgroup>
					<button class="btn btn-hero btn-lg" href="inscription.php" role="button"><a href="formateur.php">En savoir plus</a></button>
				</div>
			</div>
			<div class="item slides">
				<div class="slide-5">
					<div class="imgenplace"></div>
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
	</div>
	<!-- fin du slider -->	
	<section class="dates"><!-- dates des stages -->
		<div class="row " id="date">
			<div class="col-md-6 col-xs-12">
				<a href="#dates" class="btn" id="voir"><h3>VOIR TOUTES LES DATES DE FORMATIONS</h3></a>
				<div id="dates"><!-- cette partie cachée par défaut s'affichera au clic sur le lien du dessus -->
					<div id="bafa" class="hidden "><!-- Elle apparaitra également à la sélection de l'ancre (javascript) -->
						<h1>Stages BAFA</h1>
						<table border="1">
							<th></th>
							<td></td>
						</table>
					</div>
					<div id="bafd" class="hidden">
						<h1>Stages BAFD</h1>
						<table border="1">
							<th></th>
							<td></td>
						</table>					
					</div>
					<div id="formation" class="hidden">
						<h1>Stages Formation continue</h1>
						<table border="1">
							<th></th>
							<td></td>
						</table>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-xs-12  taille">
				<select class="choix form-control" id="choix">
					<option value="" class="desactived">------</option>
					<option value="bafa">BAFA</option><!-- chaque choix sera redirigé vers l'ancre correspondante -->
					<option value="bafd">BAFD</option>
					<option value="formation">Formations continues</option>
					
				</select>
			</div>
		</div>
	</section>
	<section class="row" >
		<div class="col-xs-12"<!-- ancre Qui sommes nous -->
			<br><br><h1 class="infos" id="infos">Qui sommes-nous ?</h1>
			<br><br><br>
			<p>Créée en 1898, la Fédération Sportive et Culturelle de France (FSCF) est ouverte à tous sans distinction, dans le respect des idées, des possibilités et des particularités de chacun.<br>
			Reconnue d'Utilité Publique, elle défend un projet éducatif basé sur des valeurs universelles et humanistes telles que : l'Ouverture, le Respect, l'Autonomie, la Solidarité et la Responsabilité.</p>
			<p>Forte des ses 230 000 licenciés et 1 650 associations affiliées, la FSCF propose des activités innovantes dans les domaines sportifs, culturels et socio-éducatifs. La fédération encourage l'accès 
			à la pratique d'une activité sous toutes les formes : initiation, découverte, loisir ou compétition. Afin d'illustrer sa capacité à mobiliser et à développer le sport pour tous, la FSCF organise de 
			nombreuses compétitions, manifestations et autres rencontres, toutes placées sous le signe des valeurs qui l'animent.</p>
		</div>
	</section>
	
	<!---- encore un slide avec les partenaires éventuellement -->

				<div> 
				<br><br><h1 class="infos" id="infos">NOS PARTENAIRES<br></h1>

			  </div>

</div><!-- fermeture de la div container dans le header -->
<?php require ('footer.php'); ?>




<script>  // script pour améliorer la fluidité quand on clique sur l'encre "info"
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash === "#infos") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

    // Utilisation de .animate pour faire scroller avec transition
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
       
        window.location.hash = hash;
      });
    } 
  });
  
	// Make sure this.hash has a value before overriding default behavior
	var hash = window.location.hash; // on récupère l'ancre
	window.location.hash = ""; 
	if (hash === "#infos") { // et si l'ancre est bien info
		// Prevent default anchor click behavior
		event.preventDefault(); // alors réinitialisé les paramètres par défaut de l'evenement (donc descendre directement)

		// Utilisation de .animate pour faire scroller avec transition
		$('html, body').animate({
			scrollTop: $(hash).offset().top
		}, 1000, function(){
			window.location.hash = hash;
		});
	} 
});
</script>

