<!DOCTYPE html>
					<html lang="fr">
						<?php include ('header.php'); ?>

						<body>
							<div class="container">
										
					<!-- barre de header principale avec logo, inscription et connexion -->
					

					<!-- Début du contenue principale -->       
							<section class="container">
								<h1 style="    padding-bottom: 2%;" > Nous contacter </h1>
								<div class="row">
									<form class="col-md-6" action="mail.php" method="post">
										<div class="form-group">
											<label for="usr">Nom *:</label>
											<input type="text" class="form-control" id="usr" name="nom" required>
										</div>
										<div class="form-group">
											<label for="pwd">Prénom *:</label>
											<input type="text" class="form-control" id="pwd" name="prenom" required>
										</div>
										<div class="form-group">
											<label for="email">Email *:</label>
											<input type="email" class="form-control" id="email" name="mail" required>
										</div>
										<div class="form-group">
											<label for="tel">Téléphone *:</label>
											<input type="tel" class="form-control" id="tel" name="tel">
										</div>
										<div class="form-group">
											<label for="comment">Votre message *:</label>
											<textarea class="form-control" rows="3" id="comment" name="msg" required></textarea>
										</div>
										<input type="submit" value="valider" class="btn btn-danger" name="valider">
									</form>           
								  <!-- Carte google maps -->
									<div class="col-md-6">    
										<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key= AIzaSyB8g4enVOLDsjNAEf2x3ub-coz0-yipItM "></script>
										<div style="overflow:hidden;height:446px;width:582px;"><div id="gmap_canvas" style="height:446px;width:582px;"></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a href="http://mapswebsite.net/fr">MapsWebsite.net/fr</a> <script type="text/javascript" src="https://embedmaps.com/google-maps-authorization/script.js?id=fbfb42109206b8477744acf06c24594a9b3e49b3"></script><script type="text/javascript">function init_map(){var myOptions = {zoom:16,center:new google.maps.LatLng(47.8118793,3.561785500000042),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(47.8118793,3.561785500000042)});infowindow = new google.maps.InfoWindow({content:"<strong> Fédération Sportive et Culturelle Comité départemental de l\'Yonne</strong><br>16 bd de la Marne<br>89010  Auxerre<br>"});google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, "load", init_map);</script>
								   </div>
							</div>                          
						</section>
								
								<!-- import de JQUERY via google -->
								<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
								<!-- import du JS de bootsrap -->
								<script src="js/bootstrap.min.js"></script>
						</body>
					</html> ';