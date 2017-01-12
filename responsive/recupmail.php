<!-- barre de header principale avec logo, inscription et connexion -->
<?php require ('header.php'); ?>

	<!-- debut section avec le texte -->
	<section>
		<h1 class="titrerecup">Mot de passe oublié ?</h1>					
		<div>
			<h3 class="titreemail">Pour récuperer votre mot de passe, merci de nous indiquer votre adresse email</h3>
		</div>
		<div>
			<input class="inputmail form-control" type="email" name="mailrecup" required>
		</div>
		<div> 	
			<a href="#"><button class="btn btn-danger">Envoyer</button></a>
		</div>
	</section>
	<!-- fin section avec les dates et boutons -->

</div>	

<?php require('footer.php') ?>