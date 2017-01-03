$(document).ready(function(){

	function comparerTxt(element){
		if(element.val().length > 9){//le nombre de caractère doit être supérieur à 10 caractères
			element.css('border', '2px inset green');// si c'est le cas, le textarea s'encadre de vert
			return true ;
		}
		else{
			element.css('border', '2px inset red');// sinon, le textarea s'encadre de rouge
			return false ;
		}
	}
	
}