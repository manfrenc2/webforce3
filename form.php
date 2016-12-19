<!DOCTYPE html>
	<html lang="fr">
		<head>
	<!-- spécifie le type d'encodage de la page -->
			<meta charset="utf-8">
	<!-- rendre compatible la mise en forme sur edge -->
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Titre du Site -->
			<title>FSCF - YONNE | Fédération Sportive et Culturelle de France</title>
	<!-- Shortcut du logo du site -->
			<link rel="icon" type="image/png" href="img/shortcut_img.png" /> 
	<!-- import du fichier Bootstrap -->
			<link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- import du fichier de style CSS -->
			<link href="css/style.css" rel="stylesheet">	
		</head>

		<body>
			<div class="container">
						
	<!-- barre de header principale avec logo, inscription et connexion -->
	
	
			<header>
				<div class="row">
					<div class="col-md-4"><img alt="logo" id="width" href="#" src="img/logo.png"> </div>				  
	<!-- bouton à travailler avec une favicon ??  -->
					<div class="col-md-4 petitpad"><a href="#"> Je m'inscris au BAFA/ BAFD / FORMATION CONTINUE</a></div>
	<!-- emplacement pour se connecter -->		  
					<div class="col-md-4 petitpad">
						<input>Login</input>
						<input type="password">Mot de passe</input>
						<button>Login</button>
					</div> 					
				</div>
			</header>
	<!-- barre de navigation  -->

			<nav class="navbar navbar-inverse">
				<ul class="nav navbar-nav">
					<li><a href="#">Accueil</a></li>
					<li><a href="#">Formations</a></li>  
					<ul class="dropdown-menu">
						<li><a href="#">Page 1-1</a></li>
						<li><a href="#">Page 1-2</a></li>
						<li><a href="#">Page 1-3</a></li>
					</ul>
					<li><a href="#">FAQ</a></li>  
					<li><a href="#">Contactez-nous</a></li>  
					<li><a href="#">Qui sommes-nous ?</a></li>  
				</ul>
			</nav>
	<!-- Début du contenue principale -->		
			<section class="container">
				<h1 style="    padding-bottom: 2%;" > Nous contacter </h1>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="usr">Nom *:</label>
							<input type="text" class="form-control" id="usr">
						</div>
						<div class="form-group">
							<label for="pwd">Prénom *:</label>
							<input type="password" class="form-control" id="pwd">
						</div>
						<div class="form-group">
							<label for="email">Email *:</label>
							<input type="email" class="form-control" id="email">
						</div>
						<div class="form-group">
							<label for="tel">Téléphone *:</label>
							<input type="tel" class="form-control" id="tel">
						</div>
						<div class="form-group">
							<label for="comment">Votre message *:</label>
							<textarea class="form-control" rows="3" id="comment"></textarea>
						</div>
						<a href="#" class="btn btn-info"><span class="glyphicon glyphicon-arrow-right"></span> Envoyer</a>
					</div>			  
				  <!-- Carte google maps -->
					<div class="col-md-6">	  
						<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key= AIzaSyB8g4enVOLDsjNAEf2x3ub-coz0-yipItM '></script>
						<div style='overflow:hidden;height:446px;width:582px;'><div id='gmap_canvas' style='height:446px;width:582px;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a href='http://mapswebsite.net/fr'>MapsWebsite.net/fr</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=fbfb42109206b8477744acf06c24594a9b3e49b3'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:16,center:new google.maps.LatLng(47.8118793,3.561785500000042),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(47.8118793,3.561785500000042)});infowindow = new google.maps.InfoWindow({content:'<strong> Fédération Sportive et Culturelle Comité départemental de l\'Yonne</strong><br>16 bd de la Marne<br>89010  Auxerre<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
				   </div>
			</div>							
		</section>
				
				<!-- import de JQUERY via google -->
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
				<!-- import du JS de bootsrap -->
				<script src="js/bootstrap.min.js"></script>
		</body>
	</html>