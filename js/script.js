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
		if(value.length == 6)//si 6 caractères sont tapés dans l'input...
			$(this).val(value+'-')//on ajoute le "-"
	});
});


