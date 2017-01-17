//scripts .js pour les formulaires
$(document).ready(function(){
	
	
	//fonction pour entrer le "-" après les 6 chiffres 
	$('#add').keypress(function(){//add correspond à l'id de l'input
		var value = $(this).val();
		//console.log('disabled="disabled"');
		if(value.length == 6)//si 6 caractères sont tapés dans l'input...
			$(this).val(value+'-')//on ajoute le "-"
	});
	
		//fonction permettant d'entrer le "/" automatiquement (pour la date de naissance)
	$('#bdate').keypress(function(){
		var value = $(this).val();
		if(value.length == 2)
			$(this).val(value+'/')
		if(value.length == 5)
			$(this).val(value+'/')
	});

	//affichage du bouton d'envoi selon que la case est cochée ou non
	$("#termUse").change(function() {
		if($("#termUse").is(":checked") == true)
			$("#submit").removeClass("hidden");
		else
			$("#submit").addClass("hidden");
	}).change();
	
	//bouton d'envoi...
	$('#submit').click(function(e){
		var names = document.getElementsByName("name").value;
		//var envoi;
		//rules correspond au nom des champs à valider, mis sous forme de tableau
		var rules = [ "choice", "choice2", "choice3", "choice4", "firstnumber", "contacturg", "telurg", "aide", "sexe", "file", "file2", "lastname", "firstname", "email", "bdate", "adress", "zipCode", "ville", "cq", "allergi", "termUse", "submit" ];
		//name est la méthode de validatio, sous forme de tableau
		var name = [ "required", "valueNotEquals", "phoneFR", "numjs", "accept", "email", "dateFR", "cpFR", "lettersonly", "adresse", "numss", "digits", "ecrit" ];
		//fonction de vérification des champs selon les rules, méthodes et leur valeur
		jQuery.each( rules, function (){
			if(rules == name && (name.val == " " || name.val() == true)){// si les champs sont vides ou incorrectement remplis ...
				e.preventDefault();//on empêche le navigateur d'envoyer le formulaire pour traitement
				return false;
			}else{//si tous les champs sont validés, on envoie le formulaire pour traitement
				return true;
				// envoi = document.location.href='#success_message.display';
				// $('#success_message').removeClass("hidden");
				// $('#register_form').addClass("hidden");
				
			}
		})
	});

	//Validation des champs de formulaire
	$("#register-form").validate({
		rules: {//sur les champs
			
			choice: {//"choisir sa formation"
				valueNotEquals: " ",//méthode + valeur à valider
				required: true
				
			},
			
			choice2: {//"date, lieu, tarif"
				valueNotEquals: " ",
				required: true
				
			},
			
			choice3: {//"thème"
				valueNotEquals: " ",
				required: true
				
			},
			
			choice4: {//"moyen de paiement"
				valueNotEquals: " ",
				required: true
				
			},
			
			phone: {//le numéro de téléphone du candidat
				phoneFR: true,
				required: true
			},
			
			
			firstnumber: {// champs numéro jeunesse et sport
				numjs: true,
				required: true
			},
			
			contacturg: {//nom du contact en cas d'urgence et ...
				required:true
			},
			
			telurg: {//le numéro de téléphone de la personne à contacter
				required: true,
				phoneFR: true
			},
			
			aide: {//aide financière
				required: true
			},
			
			sexe: {//sexe du candidat
				required: true
			},
			
			file: {//CNI
				accept: true,
				required: true
			},
			
			file2: {//photo identité
				accept: true,
				required: true
			},
			
			file3: {//justificatif de domicile
				accept: true,
				required: true
			},
										
			lastname: {//le nom du candidat
				lettersonly: true,
				required: true
			},
			
			firstname: {// le prénom du candidat
				required: true
			},
			
			email: {//son email
				email: true,
				required: true
			},
			
			bdate: {//la date de naissance du candidat
				required: true,
				dateFR: true
			},
			
			adress: {//adresse du candidat
				adresse: true,
				required: true
			},
			
			zipCode: {//le code postal
				digits: true,
				cpFR: true,
				required: true
			},
			
			ville: {//la ville
				lettersonly: true,
				required: true
			},
			
			phone: {
				required: true,
				phoneFR: true
			},
							
			cq: {//numéro de sécurité sociale
				numss: true,
				required: true
			},
			
			alleregi: {//renseignements à propos des allergies et régimes alimentaires éventuels
				required: true,
				// ecrit: true
			},
			
			termUse: {//la case à cocher sur les conditions générales de ventes
				required: true
			}			
		}
	});
	$("#register-form").validate();//appel de la fonction
	 
});