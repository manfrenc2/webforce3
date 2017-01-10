//scripts .js pour les formulaires
$(document).ready(function(){
	//fonction pour entrer le "-" après les 6 chiffres 
	$('#add').keypress(function(){//add correspond à l'id de l'input
		var value = $(this).val();
		console.log('disabled="disabled"');
		if(value.length == 6)//si 6 caractères sont tapés dans l'input...
			$(this).val(value+'-')//on ajoute le "-"
	});
	

	$("#termUse").change(function() {
		if($("#termUse").is(":checked") == true)
			$("#submit").removeClass("hidden");
		else
			$("#submit").addClass("hidden");
	}).change();
	
	
	// Validation des champs de formulaire
    $('#register-form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
		// Pour utiliser ces icons, s'assurer de la bonne version de bootstrap (v3.1.0 ou ultérieure)
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
			fields: {//sur les champs
				choice: {//les "select"
					validators: {
						notEmpty: {//le champs ne doit pas être vide
							message: 'Sélectionnez une option'
						}
					}
				},
				
				phone: {//le numéro de téléphone de la personne à contacter et du candidat
					validators: {
						digits: true,//affichera une erreur si des lettres sont tapées au lieu de chiffres
						stringLength: {
							min: 10,
							max: 10,
						},
						phone: {
							country: 'FR',
							message: 'Entrez un numéro de téléphone valide'
						},
						notEmpty: {
							message: 'Entrez un numéro de téléphone'
						},
						regexp: {
							regexp: '^[0-9]{10}$'
						}
					}
				},
				
				
				firstnumber: {// champs numéro jeunesse et sport
					validators: {
						notEmpty: {
							message: 'Entrez votre numéro Jeunesse et Sport'
						},
						stringLength: {//nombre de caractères
							min: 11
						},
						regexp: {
							regexp: '^[0-9]{6}\-[a-zA-Z]{4}$',
							message: 'Entrez un numéro Jeunesse et Sport valide'
						}
					}
				},
				
				contacturg: {//nom du contact en cas d'urgence et ...
					validators: {
						stringLength: {
							min: 3,
							message: '3 caractère minimum'
						},
						notEmpty: {
							message: 'Entrez un nom'
						}
					}
				},
				
				
				aide: {//aide financière
					validators: {
						notEmpty: {
							message: 'Indiquez si vous disposez d\'une aide financière ou non'
						}
					}
				},
				
				sexe: {//sexe du candidat
					validators: {
						notEmpty: {
							message: 'Veuillez renseigner votre sexe'
						}
					}
				},
											
				lastname: {//le nom du candidat
					validators: {
						stringLength: {
							min: 3,
							message: '3 caractère minimum'
						},
						notEmpty: {
							message: 'Entrez votre nom'
						}
					}
				},
				
				firstname: {// le prénom du candidat
					validators: {
						stringLength: {
							min: 3,
							message: '3 caractère minimum'
						},
						notEmpty: {
							message: 'Entrez votre prénom'
						}
					}					
				},
				
				email: {//l'email
					validators: {
						notEmpty: {
							message: 'Entrez votre email'
						},
						emailAddress: {
							message: 'Entrez une adresse email valide'
						}
					}
				},
				
				adress: {//adresse du candidat
					validators: {
						stringLength: {
							min: 8,
							message: '8 caractère minimum'
						},
						notEmpty: {
							message: 'Entrez votre adresse complète'
						}
					}
				},
				
				zipCode: {//le code postal
					validators: {
						digits: true,
						minlength: 5,
						notEmpty: {
							message: 'Entrez un code postal'
						},
						zipCode: {
							country: 'FR',
							message: 'Entrez un code postal valide'
						}
					}
				},
				
				ville: {//la ville
					validators: {
						stringLength: {
							min: 2,
							message: '2 caractère minimum'
						},
						notEmpty: {
							message: 'Renseignez votre ville'
						}
					}
				},
								
				cq: {//numéro de sécurité sociale
					validators: {
						stringLength: {
							min: 13,
							max: 13
						},
						notEmpty: {
							message: 'Veuillez renseigner votre numéro de Sécurité Sociale'
						},
						regexp: {
							regexp: '^[12][0-9]{2}[0-1][0-9](2[AB]|[0-9]{2})[0-9]{3}[0-9]{3}$',
							message: 'Entrez un numéro de sécurité sociale valide'
						}
					}
				},
				
				alleregi: {//renseignements à propos des allergies et régimes alimentaires éventuels
					validators: {
						stringLength: {
							min: 0,
							max: 200,
							message:'200 caractères maximum'
						},
						notEmpty: {
							message: 'Renseignez vos allergies et/ou régimes alimentaires'
						}
					}
				},
				
				termUse: {//la case à cocher sur les conditions générales de ventes
					validators: {
						notEmpty: {
							message: 'Vous devez cocher cette case pour finaliser votre inscription'							
						}
					}
				}			
		}
    })
	.on('success.form.bv', function(e) {//si le formulaire est complété correctement
		// $('#success_message').slideDown({ opacity: "show" }, "slow") // affichage du message "succès"
			// $('#register-form').data('bootstrapValidator').resetForm();

		//Prevent form submission
		e.preventDefault();
		console.log('dzsacrefref');

		//Get the form instance
		var $form = $(e.target);

		//Get the BootstrapValidator instance
		var bv = $form.data('bootstrapValidator');

	   //Use Ajax to submit form data
		$.post($form.attr('action'), $form.serialize(), function(result) {
			console.log(result);
		}, 'json');
   })
   // .find('input[name="job"], input[name="languages[]"]')
        // .icheck({
            // tap: true,
            // ...
        // })
        // .on('ifChanged', function(e) {
            // ...
        // })
        // .end();


});