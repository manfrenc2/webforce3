<?php 
	require_once ('header.php'); 
?>

		<div>						
		
			<!-- Début du contenue principale -->					
			<section>
				<h1 class="title"> RÉ-INSCRIPTION </h1>	
				<!-- Début du formulaire de ré-inscription -->						
				<form method="post" action="" id="register-form" class="well form-horizontal">
					<!-- Organisation sous forme de colonnes -->	
					<div class="row form">								
					<div class="col-md-6 colonne">		
						<div class="form-group">						
							<label> Choisir sa formation <span class="asterisque">*</span></label>
							<select class="form-control formation" name="choice" >
								<option value=" ">Sélectionnez une formation</option>
								<option value="bafa1" name="bafa1"> BAFA#1 - session de formation générale  </option>
								<option value="bafa3" name="bafa3"> BAFA#3 - session d'approfondissement/qualification  </option>
								<option value="bafd1" name="bafd"> BAFD#1 - session de formation générale  </option>
								<option value="bafd2" name="bafd">  BAFD#3 - session de perfectionnement </option>
								<option value="formacontinue" name="formacontinue"> FORMATIONS CONTINUES  </option>
							</select>	
						</div>								
						<!-- Pour les formations continues, le thème de la formation continue devra également être spécifié -->
						<div class="form-group">		
							<label>Date, lieu de formation, tarif <span class="asterisque">*</span></label>
							<select class="form-control lieu" name="choice" value="choosedateforma" >
								<option value=" ">Sélectionnez une date</option>
								<option value="dateplaceprice" name="dateplaceprice"> BAFA 1 - 18 novembre 2017 - Auxerre - 452 € </option>
							</select>
						</div>
							<!-- Le choix des thèmes devra être uniquement possible lors du choix de la formation BAFA 3, BAFD 3 -->
						<div class="form-group">		
							<label>Thème <span class="asterisque">*</span></label>
							<select class="form-control theme" name="choice" value="theme" >
								<option value=" ">Choisissez un thème</option>
								<option value="periodappro" name="periodappro"> La petite enfance </option>
							</select>
						</div>
							<!-- Mettre en place une API pour vérifier que le numéro existe bien -->
							<div class="form-group">		
								<label> Numéro Jeunesse et Sport <span class="asterisque">*</span> (s'inscrire <a id="red" href="http://www.bafa-bafd.jeunes.gouv.fr/Region.aspx?MJSReg=21">ici</a> pour le récupérer) </label>
								<input class="form-control" id="add" type="text" name="firstnumber"  maxlength="11" placeholder="composé de 6 chiffres et 4 lettres"/>
							</div>
							<div class="form-group">		
								<label> Numéro license FSCF <button type="button" class="btn btn-xs resphidden" data-toggle="tooltip" data-placement="right" title="Si vous avez déjà une licence FSCF">?</button></label>
								<input class="form-control"  type="text" name="licence"/>
							</div>
							<div class="form-group">		
								<label> Personne à contacter en cas d'urgence <span class="asterisque">*</span></label>
								<input class="form-control" type="text" name="contacturg" />
							</div>
							<div class="form-group">
							<label class="control-label"> Téléphone de la personne <span class="asterisque">*</span></label>
							<input class="form-control" type="text" name="phone" id="telurg"/>
						</div>
							<div class="form-group">
								<label id="aide"> Je dispose d'une aide financière <span class="asterisque">*</span> </label></br>
								<input  type="radio" name="aide" value="yes"/> <span> Oui</span>
								<input  type="radio" name="aide" value="no"/> <span>Non</span>
							</div>
							<div class="form-group">
								<label> Nom de l'organisme <button type="button" class="btn btn-xs resphidden" data-toggle="tooltip" data-placement="right" title="L'organisme qui vous octroie cette aide financière">?</button></label>
								<input class="form-control" type="text" name="orgaide"/>	
							</div>
							<div class="form-group">
								<label> Montant de l'aide</label>
								<input class="form-control" type="text" name="montaide"/>
							</div>
							
							<!-- Selon le type de paiement, faire une redirection (via stripe; paypal ou message confirmant l'envoi du formulaire et l'envoi donc d'un email avec les informations pour payer (adresse, montant etc) -->
							<div class="form-group">
								<label> Choissisez votre moyen de paiement <span class="asterisque">*</span></label>
								<select class="form-control" name="choix" >
									<option value="" name="">Choisissez votre mode de paiement</option>
									<option value="cb" name="cb">CB</option>
									<option value="cheque" name="cheque">Chèque</option>
									<option value="paypal" name="paypal">Paypal</option>			
									<option value="especes" name="especes">Espèces</option>													
								</select>	
							</div>
						</div>						
						<div class="col-md-6 colonne">
							
							<div class="form-group">
								<label> Nom <span class="asterisque">*</span></label>
								<input class="form-control" type="text" name="lastname" id="lastname"/>
							</div>
							<div class="form-group">
								<label> Prénom <span class="asterisque">*</span></label>
								<input class="form-control" type="text" name="firstname" id="firstname"/>
							</div>
							<div class="form-group">
								<label> Code Postal <span class="asterisque">*</span></label>
								<input class="form-control" type="text" name="zipCode" id="zipCode" maxlength="5"/>
							</div>
							<div class="form-group">
								<label> Ville <span class="asterisque">*</span></label>
								<input class="form-control" type="text" name="ville" id="ville"/>
							</div>
							<div class="form-group">
								<label> N° de sécurité sociale <span class="asterisque">*</span></label>
								<input class="form-control" type="text" name="cq" id="cq"/>
							</div>
							<div class="form-group">
								<label> Allergies ou régimes alimentaires <span class="asterisque">*</span> <button type="button" class="btn btn-xs resphidden" data-toggle="tooltip" data-placement="right" title="Même si vous n'avez aucunes allergies ou régimes alimentaires, merci de le signifier dans ce champ.">?</button></label>
								<textarea class="form-control" name="alleregi" id="alleregi" rows="7" cols="40" > </textarea>
							</div>
						</div>					
					</div>
				<div class="pad">					
					<label><input  type="checkbox"/> Si paiement par un tiers, merci de cocher cette case <button type="button" class="btn btn-xs resphidden" data-toggle="tooltip" data-placement="right" title="Uniquement en cas de paiement par une autre personne que vous">?</button></label>
					<label><input type="checkbox" id="termUse" name="termUse" required /> En cochant cette case, j'atteste avoir les pré-requis de la formation et avoir pris connaissance des <a class="link modiflink" href="cgu.php" target="_blank">conditions générales de vente </a><span class="asterisque">*</span> <button type="button" class="btn btn-xs resphidden" data-toggle="tooltip" data-placement="right" title="Vous devez cocher cette case pour pouvoir valider votre inscription">?</button></label>
					<input type="submit" id="submit" name="submit" class="btn btn-warning hidden"/>					
				</div>
				</form>		
			</section>
			
		</div>
		</div>
<?php require_once 'footer.php'; ?>
		<!-- import de JQUERY via google -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- import du JS de bootsrap -->
		<script src="http://oss.maxcdn.com/icheck/1.0.2/icheck.min.js"></script>
		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
		<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
		<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>
		<script src="js/inscription.js"></script>
	</body>
</html>