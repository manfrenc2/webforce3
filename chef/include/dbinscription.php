<?php
	include_once 'dbconfig.php'; // appel du fichier de connexion à la db

if (isset($_POST["submit"])) { //On vérifie que l'utilisateur a bien rempli le champs "mail".
    $pseudoi = $_POST["mail"]; // On stock le mail entré par l'utilisateur dans la variable pseudoi.
    //$mdpi = $_POST["mdpi"]; //  On stock le mot de passe entré par l'utilisateur dans la variable mdpi.
    $verif = "SELECT * FROM stagiaire WHERE Email = '$pseudoi'"; // Mise en forme de la requête que l'on va envoyer, on récolte la ligne qui associe le contenu du champs email au contenu entré par l'utilisateur.
  	$formation = $_POST["chooseformation"]; //je récupère la valeur de l'input formation
  	$fordate = $_POST["choosedateforma"]; //je récupère la valeur de l'input date formation
  	$theme = $_POST["theme"]; //je récupère la valeur de l'input theme
  	$numjs = $_POST["firstnumber"]; //je récupère la valeur de l'input numerojs
  	$licence = $_POST["licence"]; //je récupère la valeur de l'input licence
  	$contacturg = $_POST["contacturg"]; //je récupère la valeur de l'input contact urgence
  	$telurg = $_POST["telurg"]; //je récupère la valeur de l'input numero urgence
  	$aide = $_POST["aide"]; //je récupère la valeur de l'input aide formation
  	$orgaide = $_POST["orgaide"]; //je récupère la valeur de l'input organisme d'aide
  	$montaide = $_POST["montaide"]; //je récupère la valeur de l'input montant de l'aide
  	$paiement = $_POST["choosepay"]; //je récupère la valeur de l'input paiement
  	$sex = $_POST["sexe"]; //je récupère la valeur de l'input sexe
  	$name = mysql_real_escape_string($_POST["name"]); //je récupère la valeur de l'input nom
  	$firstname = mysql_real_escape_string($_POST["firstname"]); //je récupère la valeur de l'input prenom
  	$date = date('Y-d-m', strtotime($_POST['date'])); //je récupère la valeur de la date, que je convertie de string a time dans le format YDM
  	$mail = mysql_real_escape_string($_POST["mail"]); //je récupère la valeur de l'input mail
  	$adress = $_POST["adress"]; //je récupère la valeur de l'input adresse
  	$codepo = $_POST["codepo"]; //je récupère la valeur de l'input code postal
  	$city = $_POST["ville"]; //je récupère la valeur de l'input ville
  	$tel = $_POST["tel"]; //je récupère la valeur de l'input telephone
  	$secu = mysql_real_escape_string($_POST["cq"]); //je récupère la valeur de l'input numero de secu
  	$alleregi = $_POST["alleregi"]; //je récupère la valeur de l'input allergie

  	$image = array();

  	foreach ($_FILES as $key => $value) {
	    $nomOrigine = $_FILES[$key]['name'];
	    $elementsChemin = pathinfo($nomOrigine);
	    $extensionFichier = $elementsChemin['extension'];
	    $extensionsAutorisees = array("jpeg", "jpg", "gif");
	    if (!(in_array($extensionFichier, $extensionsAutorisees))) {
	        echo "Le fichier n'a pas l'extension attendue";
	    } else {    
	        // Copie dans le repertoire du script avec un nom
	        // incluant l'heure a la seconde pres 
	        $repertoireDestination = dirname(__FILE__)."/";
	        $nomDestination = "fichier_du_".date("YmdHis")."-".$key.".".$extensionFichier;

	        if (move_uploaded_file($_FILES[$key]["tmp_name"], 
	                                         $repertoireDestination.$nomDestination)) {
	            echo "Le fichier temporaire ".$_FILES[$key]["tmp_name"].
	                    " a été déplacé vers ".$repertoireDestination.$nomDestination;
	                   $image[$key] = $repertoireDestination.$nomDestination;
	        } else {
	            echo "Le fichier n'a pas été uploadé (trop gros ?) ou ".
	                    "Le déplacement du fichier temporaire a échoué".
	                    " vérifiez l'existence du répertoire ".$repertoireDestination;
	        }
	    }
  	}


    $result2 = mysqli_query($conn, $verif); //Envoi de la requête à la base de donnée.
    if(mysqli_num_rows($result2) > 0) { // Si la base de donnée nous retourne au moins un élément (ce qui signifie que le pseudo existe déjà), alors exécuter la suite :
        // PS : on n'aura toujours qu'un seul élément puisque le champs email est configuré en unique.
        echo "ce pseudo existe déjà";
        die;
    }else { // Sinon
    	$sql = "
INSERT INTO stagiaire(`formation`,`nom`, `prenom`, `date de naissance`, `adresse`, `code_postal`, `Ville`, `num_inscription_JS`, `num_securite_social`, `tel`, `Email`, `sexe`, `statut`, `mdp`,
 `numeroLicence`, `priseEnChargeFinanciere`, `montantaide`, `organisme`, `personne_urgence`, `tel_urgence`, `medical`, `attestation`) 
 VALUES ('$formation','$name','$firstname','$date','$adress','$codepo','$city','$numjs','$secu','$tel','$pseudoi','$sex','','',
 '$licence','$aide','$montaide','$orgaide','$contacturg','$telurg','$alleregi',1)";
      //$sql2 = "INSERT INTO `client`(`email`, `pass`) VALUES ('$pseudoi','".crypt_password($mdpi)."')"; //Requête qui permet d'insérer un nouvel utilisateur désigné par son mail et mot de passe (que l'on crypte), on entre pas l'id puisque cette dernière s'autoincrémente déjà.
        mysqli_query($conn, $sql); // Envoie de la requête à la base de donnée.
        echo "ok<br>".$sql;
        die;
    }
}



?>