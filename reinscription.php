<!DOCTYPE html>
<html lang="fr">
		<?php include ('header.php'); ?>

	<body>
		<div class="container">						
		
			<!-- Début du contenue principale -->					
			<section>
				<h1 class="title"> Ré-inscription </h1>	
				<!-- Début du formulaire de ré-inscription -->						
				<form method="post" action="#confirm">
					<!-- Organisation sous forme de colonnes -->	
					<div class="row form">								
						<div class="col-md-6 colonne">							
							<p> Choisir sa formation <span class="asterisque">*</span></p>
							<select class="form-control formation" name="chooseformation">
								<option value="bafa1" name="bafa1"> BAFA#1 - session de formation générale  </option>
								<option value="bafa3" name="bafa3"> BAFA#3 - session d'approfondissement/qualification  </option>					
								<option value="bafd1" name="bafd"> BAFD#1 - session de formation générale  </option>
								<option value="bafd2" name="bafd">  BAFD#3 - session de perfectionnement </option>
								<option value="formacontinue" name="formacontinue"> FORMATIONS CONTINUES  </option>
							</select>				
							<!-- Pour les formations continues, le thème de la formation continue devra également être spécifié -->
							<p></br> Date, lieu de formation, tarif <span class="asterisque">*</span></p>
							<select class="form-control lieu" name="choosedateforma" value="choosedateforma">
								<option value="dateplaceprice" name="dateplaceprice"> BAFA 1 - 18 novembre 2017 - Auxerre - 452 € </option>
							</select>
							<!-- Le choix des thèmes devra être uniquement possible lors du choix de la formation BAFA 3, BAFD 3 -->
							<p></br>Thème <span class="asterisque">*</span></p>
							<select class="form-control theme" name="theme" value="theme">
								<option value="" name="">  </option>
								<option value="periodappro" name="periodappro"> La petite enfance </option>
							</select>
							<!-- Mettre en place une API pour vérifier que le numéro existe bien -->
							<p></br> Numéro Jeunesse et Sport <span class="asterisque">*</span> (s'inscrire <a id="red" href="http://www.bafa-bafd.jeunes.gouv.fr/Region.aspx?MJSReg=21">ici</a> pour le récupérer) </p>
							<input class="form-control" id="add" type="text" name="firstnumber"  maxlength="11" placeholder="composé de 6 chiffres et 4 lettres"/>
							<p></br> Numéro license FSCF (facultatif) </p>
							<input class="form-control"  type="text" name="licence"/>
							<p></br> Personne à contacter en cas d'urgence <span class="asterisque">*</span></p>
							<input class="form-control" type="text" name="contacturg"/>
							<p></br> Téléphone de la personne <span class="asterisque">*</span></p>
							<input class="form-control" type="text" name="telurg"/>
							<p></br> Je dispose d'une aide financière <span class="asterisque">*</span> </p>
							<input  type="radio" name="aide" value="yes"/> <span> Oui</span>
							<input  type="radio" name="aide" value="no"/> <span>Non</span>
							<p></br> Nom de l'organisme </p>
							<input class="form-control" type="text" name="orgaide"/>	
							<p></br> Montant de l'aide</p>
							<input class="form-control" type="text" name="montaide"/>
							
							<!-- Selon le type de paiement, faire une redirection (via stripe; paypal ou message confirmant l'envoi du formulaire et l'envoi donc d'un email avec les informations pour payer (adresse, montant etc) -->
							<p></br> Choissisez votre moyen de paiement <span class="asterisque">*</span></p>
							<select class="form-control" name="choosepay">
								<option value="cb" name="cb">CB</option>
								<option value="cheque" name="cheque">Chèque</option>
								<option value="paypal" name="paypal">Paypal</option>			
								<option value="especes" name="especes">Espèces</option>													
							</select>		
						</div>						
						<div class="col-md-6 colonne">
							
							<p></br> Nom <span class="asterisque">*</span></p>
							<input class="form-control" type="text" name="name"/>
							<p></br> Prénom <span class="asterisque">*</span></p>
							<input class="form-control" type="text" name="firstname"/>			
							<p></br> Code Postal <span class="asterisque">*</span></p>
							<input class="form-control" type="text" name="codepo"/>
							<p></br> Ville <span class="asterisque">*</span></p>
							<input class="form-control" type="text" name="ville"/>
							<p></br> N° de sécurité sociale <span class="asterisque">*</span></p>
							<input class="form-control" type="text" name="securitesociale"/>
							<p></br> Allergies ou régimes alimentaires <span class="asterisque">*</span></p>
							<textarea name="alleregi" rows="7" cols="40"> </textarea>
						</div>					
					</div>
					<div class="pad">					
						</br><p><input  type="checkbox"/> Si paiement par un tiers, merci de cocher cette case</p>
						<p><input type="checkbox" /> En cochant cette case, j'atteste avoir les pré-requis de la formation et d'avoir pris connaissance des <a class="link">conditions générales de vente </a><span class="asterisque">*</span></p>
						 </br><input id="submit" type="submit" name="submit" class="btn btn-warning"/>					
					</div>
				</form>		
			</section>
		</div>

		
		<!-- ne pas oublier le footer -->
		
		<!-- import de JQUERY via google -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- import du JS de bootsrap -->
		<script src="js/bootstrap.min.js"></script>
		<script src="js/script.js"></script>
		<script src="js/redborder.js"></script>
	</body>
</html>