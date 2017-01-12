<?php include ('header.php'); ?>						
		<section  class="row"> <!-- Début du contenue principale -->       
			<h1 class="title"> Nous contacter </h1>
			<p class="horaire"> Nos horaires d'ouvertures sont du Lundi au Vendredi : de 9h00 à 17h00.
			<div>
				<form class="col-md-6" action="mail.php" method="post">
					<div class="form-group">
						<label for="usr">Nom <span>*</span>:</label>
						<input type="text" class="form-control" id="usr" name="nom" required/>
					</div>
					<div class="form-group">
						<label for="pwd">Prénom <span>*</span>:</label>
						<input type="text" class="form-control" id="pwd" name="prenom" required/>
					</div>
					<div class="form-group">
						<label for="email">Email <span>*</span>:</label>
						<input type="email" class="form-control" id="email" name="mail" required/>
					</div>
					<div class="form-group">
						<label for="tel">Téléphone <span>*</span>:</label>
						<input type="tel" class="form-control" id="tel" name="tel" required/>
					</div>
					<div class="form-group">
						<label for="comment">Votre message <span>*</span>:</label>
						<textarea class="form-control" rows="3" id="comment" name="msg" required></textarea>
					</div>
					<input type="submit" value="Valider" class="btn btn-danger" name="valider"/>
				</form>           
				</br>
				<div class="col-md-6 responcenter">    <!-- Carte google maps -->
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2679.43024808849!2d3.5595968156376703!3d47.81187927919873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47ee4f1eae8e88bb%3A0x3605cc10c371981c!2sFederation+Sportive+Et+Culturelle+de+France!5e0!3m2!1sfr!2sfr!4v1484208385580" width="90%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>                          
		</section>	
</div> <!-- balise fermé ici pour que la div avec l'id container ne soit pas prise en compte dans le footer -->




<?php require ('footer.php'); ?>