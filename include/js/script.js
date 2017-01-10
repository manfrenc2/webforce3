$(document).ready(function(){
	//DATES DE FORMATIONS
	var choix, dates, voir;//je mets mes id dans des variables
	// Le visiteur veut voir toutes les dates
	$('#voir').click(function(){
		//on affiche toutes les dates correspondant aux formations en totalité
		$("#bafa").removeClass("hidden");//on supprime la classe hidden
		$("#bafd").removeClass("hidden");
		$("#formation").removeClass("hidden");
	});
	
	//Le visiteur veut voir les dates correspondant à une formation précise, et pas les autres
	$('#choix').change(function() {
		//je commence par cacher tous mes liens 
		$("#bafa").addClass("hidden");//on ajoute la classe hidden
		$("#bafd").addClass("hidden");
		$("#formation").addClass("hidden");
		var str = "";
		$( "select option:selected" ).each(function() {
			str += $( this ).text() + " ";
		});
		switch(str){//switch de sélection
			case "BAFA "://si le BAFA est sélectionné
				$("#bafa").removeClass("hidden");//j'affiche le tableau correspondant
			break;
			//pareil pour les autres liens ...
			case "BAFD ":
				$("#bafd").removeClass("hidden");
			break;
			case "Formations continues ":
				$("#formation").removeClass("hidden");
			break;
			default ://si aucun des liens n'est sélectionné, rien ne s'affiche affiche par défaut
		}
		
		
	});
	//fonction pour entrer le "-" après les 6 chiffres 
	$('#add').keypress(function(){//add correspond à l'id de l'input
		var value = $(this).val();
		console.log('disabled="disabled"');
		if(value.length == 6)//si 6 caractères sont tapés dans l'input...
			$(this).val(value+'-')//on ajoute le "-"
	});
	
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
				choix: {//les "select"
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
		$('#success_message').removeClass('hidden') // affichage du message "succès"
			$('#register-form').data('bootstrapValidator').resetForm();

		//Pour empêcher le navigateur de soumettre le formulaire
		e.preventDefault();
		console.log('disabled="disabled"');

		//Get the form instance
		var $form = $(e.target);

		//Get the BootstrapValidator instance
		var bv = $form.data('bootstrapValidator');

	   //Use Ajax to submit form data
		$.post($form.attr('action'), $form.serialize(), function(result) {
			console.log(result);
		}, 'json');
   })
   
   //fonction pour valider les radios et les checkbox
   .find('input[name="aide"], input[name="sexe"], input[name="termUse"]')
		.icheck({//initialisation des éléments
			checkboxClass: 'icheckbox_square-red',
			radioClass: 'iradio_square-red'
		})
		.on('ifChanged', function(e){//fonction appelée lors du changement des radios et des checkbox
			var field = $(this).attr('name');
		console.log('disabled="disabled"');
			$('#register-form')
				.boostrapValidator('revalidateField', field);
		});
   

    $('#register-form').on('submit', function (e) { // Est appelé lorsque l'utilisateur souhaite soumettre le formulaire
     
        e.preventDefault(); // On empêche le navigateur de soumettre le formulaire
  
        var $form = $(this); // $(this) = $('#theForm'); Le this defini l'élement en cours d'utilisation (ligne 166).
         
        // Vérification de l'explication. Les 2 variables renvoient les mêmes valeurs.
        console.log($form);
        console.info($('#register-form'));
        console.info(window.FormData);
        // Fin de la vérification
         
        /* Structure en ternaire.
            Lopérateur ternaire simplifie les if traditionnels. Elles sont plus optimisés et plus rapides à ecrire et à lire.
             
            ex : var mike = (travail == true)?300:0;
             
            ---- elle se traduit en : ----
            if(travail == true)
                mike = 300;
            else
                mike = 0;
                 
            ---- ou avec les crochets : ----
            if(travail == true){
                mike = 300;
            }else{
                mike = 0;
            }
             
            ---- En francais : ----
                Mike est payé 300 si le travail est fait (Oui) sinon il n'est pas payé (donc webforce3 ne le paye jamais)
        */
        var formdata = (window.FormData) ? new FormData($form[0]) : null;
        var data = (formdata !== null) ? formdata : $form.serialize();
  
        $.ajax({
            url: $form.attr('action'),
            type: $form.attr('method'),
            contentType: false, // obligatoire pour de l'upload. La Valeur par défaut est: "application / x-www-form-urlencoded"
            processData: false, // obligatoire pour de l'upload. Valeur booléenne. Indiquant si les données envoyées avec la requête doivent ou non être en chaîne de requêtes transformées. La valeur par défaut est true
            dataType: 'json', // selon le retour attendu
            data: data,
            success: function (response) {
                // La réponse du serveur
                $success = $('#success');
                $success.removeClass('hidden');
                 
                // Affiche les données envoyés par la page php
                console.log(response)
            }
        });
	});
   
   
   
   
});


