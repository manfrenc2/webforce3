<!DOCTYPE html>
<html lang="fr">
	<head>
		<!-- spécifie le type d'encodage de la page -->
		<meta charset="utf-8">
		<!-- rendre compatible la mise en forme sur edge -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- comportement que le navigateur doit adopter concernant l'affiche du site (par rapport à l'écran)-->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Titre du Site -->
		<title>FSCF - YONNE | Fédération Sportive et Culturelle de France</title>
		<!-- Shortcut du logo du site -->
		<link rel="icon" type="image/png" href="img/shortcut_img.png"/> 
		<!-- import du fichier Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet"/>
		<!-- import du fichier de style CSS pour la page d'inscription -->
		<link href="css/inscription.css" rel="stylesheet"/>	
	</head>

	<body>
		<div class="container">						
			<!-- barre de header principale avec logo, inscription et connexion A RETRAVAILLER -->
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
			<!-- barre de navigation A RETRAVAILLER  -->
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
			<section>
				<h1 class="title"> Inscription </h1>	
				<!-- Début du formulaire d'inscription -->						
				<form action="" method="">
					<!-- Organisation sous forme de colonnes -->	
					<div class="row">								
						<div class="col-md-6">							
							<p> Choisir sa formation </p>
							<select name="chooseformation">
								<option value="bafa1" name="bafa1"> BAFA étape 1 - session de formation générale  </option>
								<option value="bafa2" name="bafa2"> BAFA étape 2 - stage pratique  </option>
								<option value="bafa3" name="bafa3"> BAFA étape 3 - session d'approfondissement ou qualification  </option>					
								<option value="bafd1" name="bafd"> BAFD étape 1 - session de formation générale  </option>
								<option value="bafd2" name="bafd"> BAFD étape 2 - stage pratique </option>
								<option value="bafd3" name="bafd"> BAFD étape 3 - session de perfectionnement </option>
								<option value="bafd4" name="bafd"> BAFD étape 4 - second stage pratique </option>
								<option value="formacontinue" name="formacontinue"> FORMATIONS CONTINUES  </option>
							</select>				
							<!-- Pour les formations continues, le thème de la formation continue devra également être spécifié -->
							<p></br> Date, lieu de formation, tarif </p>
							<select name="choosedateforma" value="choosedateforma">
								<option value="dateplaceprice" name="dateplaceprice"> BAFA 1 - 18 novembre 2017 - Auxerre - 452 € </option>
							</select>
							<!-- Le choix des thèmes devra être uniquement possible lors du choix de la formation BAFA 3, BAFD 3 -->
							<p></br>Thème </p>
							<select name="theme" value="theme">
								<option value="" name="">  </option>
								<option value="periodappro" name="periodappro"> La petite enfance </option>
							</select>
							<!-- Mettre en place une API pour vérifier que le numéro existe bien -->
							<p></br> Numéro Jeunesse et Sport (s'inscrire <a id="red" href="http://www.bafa-bafd.jeunes.gouv.fr/Region.aspx?MJSReg=21">ici</a> pour le récupérer) </p>
							<input type="text" name="firstnumber"  maxlength="6" placeholder="composé de 6 chiffres"/> <input type="text" name="secondnumber"  maxlength="4" placeholder="composé de 4 lettres"/>
							<p></br> Numéro license FSCF (facultatif) </p>
							<input  type="text" name="licence"/>
							<p></br> Personne à contacter en cas d'urgence </p>
							<input type="text" name="contacturg"/>
							<p></br> Téléphone de la personne </p>
							<input type="text" name="telurg"/>
							<p></br> Je dispose d'une aide financière </p>
							<input type="radio" name="aide" value="yes"/> <span>Oui</span>
							<input type="radio" name="aide" value="no"/><span>Non</span>
							<p></br> Nom de l'organisme </p>
							<input type="text" name="orgaide"/>	
							<p></br> Montant de l'aide</p>
							<input type="text" name="montaide"/>
							<p></br> Carte d'identité </p>
							<input type="file" name="carteid" accept="image/*"/>
							<p></br> Photo d'identité </p>
							<input type="file" name="photoid" accept="image/*"/>
							<!-- Selon le type de paiement, faire une redirection (via stripe; paypal ou message confirmant l'envoi du formulaire et l'envoi donc d'un email avec les informations pour payer (adresse, montant etc) -->
							<p></br> Choissisez votre moyen de paiement </p>
							<select name="choosepay">
								<option value="cb" name="cb">CB</option>
								<option value="cheque" name="cheque">Chèque</option>
								<option value="paypal" name="paypal">Paypal</option>			
								<option value="especes" name="especes">Espèces</option>													
							</select>		
						</div>						
						<div class="col-md-6">
							<p> Sexe </p>
							<input type="radio" name="sexe" value="Homme"/> <span>Homme</span>
							<input type="radio" name="sexe" value="Femme"/> <span>Femme</span>
							<p></br> Nom </p>
							<input type="text" name="name"/>
							<p></br> Prénom </p>
							<input type="text" name="firstname"/>
							<p></br> Date de naissance </p>
							<input type="date" name="date"/>
							<p></br> Adresse </p>
							<input type="text" name="adress"/>
							<p></br> Code Postal </p>
							<input type="text" name="codepo"/>
							<p></br> Ville </p>
							<input type="text" name="ville"/>
							<p></br> Téléphone </p>
							<input type="text" name="tel"/>
							<p></br> N° de sécurité sociale </p>
							<input type="text" name="securitesociale"/>
							<p></br> Allergies ou régimes alimentaires </p>
							<textarea name="alleregi" rows="7" cols="50"> </textarea>
						</div>					
					</div>
					<div class="pad">					
						</br><p><input type="checkbox"/> Si paiement par un tier, merci de cocher cette case</p>
						<p><input type="checkbox" required /> En cochant cette case, j'atteste avoir les pré-requis de la formation et d'avoir pris connaissance des <a class="link">conditions générales de vente</a></p>
						 </br><input type="submit" name="submit" class="btn btn-warning"/>					
					</div>
				</form>		
			</section>
		</div>

		
		<!-- ne pas oublier le footer -->
		
		<!-- import de JQUERY via google -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- import du JS de bootsrap -->
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>