<!-- barre de header principale avec logo, inscription et connexion -->
<?php require ('header.php'); ?>
<h1 class="titreprofil">PROFIL</h1>					
<div class="container">
	<!-- debut section avec le texte -->
	<section class="col-md-6 col-xs-6">
		<div class="listInfo">
			<p>Identifiant:<h4>XXXXXXXXX</h4></p>
			<br/>	
			<p>Adresse: <h4>(Adresse)</h4> <a href="#">Modifier</a></p>
			<br/>
			<p>Email: <h4>(Mail)</h4> <a href="#">Modifier</a></p>
			<br/>
			<p>Téléphone: <h4>(Tel)</h4> <a href="#">Modifier</a></p>
			<br/>
			<p>Mot de passe: <h4>(MDP)</h4> <a href="#">Modifier</a></p>
		</div>
		<div class="tempRestant">
			<u><p>Temps restant dans la formation:</u> 07/07/2020</p>
		</div>
	</section>
	<!-- section ressources -->
	<section class="col-md-6 col-xs-6">
		<div class="lienressource">
			<a href="#">Ressources Cours
			<img src="img/ressources.jpg" style="width:100%"></a>
		</div>
	</section>
	<!-- fin section avec les ressources -->
</div>
</div>	
</main>
<?php require('footer.php')  ?>