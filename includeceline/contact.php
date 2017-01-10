<?php include ('header.php'); ?>

	<div class="container">										

		<section class="container"> <!-- Début du contenue principale -->       
			<h1 class="title"> Nous contacter </h1>
			<div class="row">
				<form class="col-md-6" action="mail.php" method="post">
					<div class="form-group">
						<label for="usr">Nom <span>*</span>:</label>
						<input type="text" class="form-control" id="usr" name="nom" required>
					</div>
					<div class="form-group">
						<label for="pwd">Prénom <span>*</span>:</label>
						<input type="text" class="form-control" id="pwd" name="prenom" required>
					</div>
					<div class="form-group">
						<label for="email">Email <span>*</span>:</label>
						<input type="email" class="form-control" id="email" name="mail" required>
					</div>
					<div class="form-group">
						<label for="tel">Téléphone <span>*</span>:</label>
						<input type="tel" class="form-control" id="tel" name="tel">
					</div>
					<div class="form-group">
						<label for="comment">Votre message <span>*</span>:</label>
						<textarea class="form-control" rows="3" id="comment" name="msg" required></textarea>
					</div>
					<input type="submit" value="Valider" class="btn btn-danger" name="valider">
				</form>           
				</br>
				<div class="col-md-6">    <!-- Carte google maps -->
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1126.5609862051338!2d3.561016309678242!3d47.81190966003748!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47ee4f1eae8e88bb%3A0x8362d874d906c06f!2s16+Boulevard+de+la+Marne%2C+89000+Auxerre!5e0!3m2!1sfr!2sfr!4v1483534010984" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>                          
		</section>
	</div>		
</div> <!-- balise fermé ici pour que la div avec l'id container ne soit pas prise en compte dans le footer -->
</main> <!-- balise fermé ici par rapport à la page header pour que le footer ne prenne pas en compte les paramètres du main -->



<?php require ('footer.php'); ?>