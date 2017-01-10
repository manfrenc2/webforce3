		<?php include ('header.php'); ?>
		<div class="container">						
		
			<!-- Début du contenue principale -->					
			<section>
				<h1 class="title"> Inscription </h1>	
				<!-- Début du formulaire d'inscription -->						
				<form method="post" action="#confirm">
					<!-- Organisation sous forme de colonnes -->	
					<div class="row form">								
						<div class="col-md-6 colonne">		
							<div class="form-group">						
								<label> Choisir sa formation <span class="asterisque">*</span></label>
								<select class="form-control formation" name="chooseformation">
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
								<select class="form-control lieu" name="choosedateforma" value="choosedateforma">
									<option value="dateplaceprice" name="dateplaceprice"> BAFA 1 - 18 novembre 2017 - Auxerre - 452 € </option>
								</select>
							</div>
							<!-- Le choix des thèmes devra être uniquement possible lors du choix de la formation BAFA 3, BAFD 3 -->
							<div class="form-group">		
								<label>Thème <span class="asterisque">*</span></label>
								<select class="form-control theme" name="theme" value="theme">
									<option value="" name="">  </option>
									<option value="periodappro" name="periodappro"> La petite enfance </option>
								</select>
							</div>
							<!-- Mettre en place une API pour vérifier que le numéro existe bien -->
							<div class="form-group">		
								<label> Numéro Jeunesse et Sport <span class="asterisque">*</span> (s'inscrire <a id="red" href="http://www.bafa-bafd.jeunes.gouv.fr/Region.aspx?MJSReg=21">ici</a> pour le récupérer) </label>
								<input class="form-control" id="add" type="text" name="firstnumber"  maxlength="11" placeholder="composé de 6 chiffres et 4 lettres"/>
							</div>
							<div class="form-group">		
								<label> Numéro license FSCF (facultatif) </label>
								<input class="form-control"  type="text" name="licence"/>
							</div>
							<div class="form-group">		
								<label> Personne à contacter en cas d'urgence <span class="asterisque">*</span></label>
								<input class="form-control" type="text" name="contacturg"/>
							</div>
							<div class="form-group">
								<label> Téléphone de la personne <span class="asterisque">*</span></label>
								<input class="form-control" type="text" name="telurg"/>
							</div>
							<div class="form-group">
								<label> Je dispose d'une aide financière <span class="asterisque">*</span> </label></br>
								<input  type="radio" name="aide" value="yes"/> <span> Oui</span>
								<input  type="radio" name="aide" value="no"/> <span>Non</span>
							</div>
							<div class="form-group">
								<label> Nom de l'organisme </label>
								<input class="form-control" type="text" name="orgaide"/>	
							</div>
							<div class="form-group">
								<label> Montant de l'aide</label>
								<input class="form-control" type="text" name="montaide"/>
							</div>
							<div class="form-group">
								<label> Carte d'identité  <span class="asterisque">*</span></label>
								<input type="file" name="carteid" accept="image/*"/>
							</div>
							<div class="form-group">
								<label> Photo d'identité <span class="asterisque">*</span></label>
								<input type="file" name="photoid" accept="image/*"/>
							</div>
							<!-- Selon le type de paiement, faire une redirection (via stripe; paypal ou message confirmant l'envoi du formulaire et l'envoi donc d'un email avec les informations pour payer (adresse, montant etc) -->
							<div class="form-group">
								<label> Choissisez votre moyen de paiement <span class="asterisque">*</span></label>
								<select class="form-control" name="choosepay">
									<option value="cb" name="cb">CB</option>
									<option value="cheque" name="cheque">Chèque</option>
									<option value="paypal" name="paypal">Paypal</option>			
									<option value="especes" name="especes">Espèces</option>													
								</select>	
							</div>
						</div>		
						
						<div class="col-md-6 colonne">
							<div class="form-group">
								<label> Sexe <span class="asterisque">*</span></label></br>
								<input type="radio" name="sexe" value="Homme"/> <span>Homme</span>
								<input type="radio" name="sexe" value="Femme"/> <span>Femme</span>
							</div>
							<div class="form-group">
								<label> Nom <span class="asterisque">*</span></label>
								<input class="form-control" type="text" name="name"/>
							</div>
							<div class="form-group">
								<label> Prénom <span class="asterisque">*</span></label>
								<input class="form-control" type="text" name="firstname"/>
							</div>
							<div class="form-group">
								<label> Adresse E-mail <span class="asterisque">*</span></label>
								<input class="form-control" type="text" name="firstname"/>
							</div>
							<div class="form-group">					
								<label> Date de naissance <span class="asterisque">*</span</label>
								<input class="form-control" type="date" name="date"/>
							</div>
							<div class="form-group">
								<label> Adresse <span class="asterisque">*</span></label>
								<input class="form-control" type="text" name="adress"/>
							</div>
							<div class="form-group">
								<label> Code Postal <span class="asterisque">*</span></label>
								<input class="form-control" type="text" name="codepo"/>
							</div>
							<div class="form-group">
								<label> Ville <span class="asterisque">*</span></label>
								<input class="form-control" type="text" name="ville"/>
							</div>
							<div class="form-group">
								<label> Téléphone <span class="asterisque">*</span></label>
								<input class="form-control" type="text" name="tel"/>
							</div>
							<div class="form-group">
								<label> N° de sécurité sociale <span class="asterisque">*</span></label>
								<input class="form-control" type="text" name="securitesociale"/>
							</div>
							<div class="form-group">
								<label> Allergies ou régimes alimentaires <span class="asterisque">*</span></label>
								<textarea name="alleregi" rows="7" cols="40"> </textarea>
							</div>
						</div>					
					</div>
					<div class="pad">					
						<label><input  type="checkbox"/> Si paiement par un tiers, merci de cocher cette case</label>
						<label><input type="checkbox" required /> En cochant cette case, j'atteste avoir les pré-requis de la formation et d'avoir pris connaissance des <a class="link">conditions générales de vente </a><span class="asterisque">*</span></label>
						 <input type="submit" id="submit" name="submit" class="btn btn-warning"/>					
					</div>
				</form>		
			</section>
		</div>

		



		</div>	
</div>		
<?php require ('footer.php'); ?>
