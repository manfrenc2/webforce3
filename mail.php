<?php
	$destinataire = 'desvaux.brendon@gmail.com';
	// Pour les champs $expediteur / $copie / $destinataire, séparer par une virgule s'il y a plusieurs adresses
	$expediteur = 'mabite@alwaysdata.net';
	//$copie = 'adresse@fai.com';
	//$copie_cachee = 'adresse@fai.com';
	$objet = 'Commentaire fscf de '. ' ' . ' ' .$_POST['nom']. ' ' .$_POST['prenom']; // Objet du message
	$headers  = 'MIME-Version: 1.0' . "\n"; // Version MIME
	$headers .= 'Reply-To: '.$expediteur."\n"; // Mail de reponse
	$headers .= 'From: "'.$_POST['nom'].' '.$_POST['prenom'].'"<'.$expediteur.'>'."\n"; // Expediteur
	$headers .= 'Delivered-to: '.$destinataire."\n"; // Destinataire
	// $headers .= 'Cc: '.$copie."\n"; // Copie Cc
	// $headers .= 'Bcc: '.$copie_cachee."\n\n"; // Copie cachée Bcc        
	$message = ''.$_POST['msg'].' '.$_POST['tel'];
	if (isset($_POST['valider'])) {
	
		if (mail($destinataire, $objet, $message, $headers)) // Envoi du message
		{
			require('confirmmail.php');
		}
		else // Non envoyé
		{
			require('errormail.php');
		}
	}
?>
