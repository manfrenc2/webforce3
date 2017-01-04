<?php
	session_start();
	
	$host = "localhost"; //var host = "localhost";
	$user = "root";
	$password = "";
	$database = "bob_bob";//nom de la base de données
	
	$conn = mysqli_connect($host, $user, $password, $database);
	// require_once('crud.php');
	// require_once('convert.php');

	if(!$conn)//lorsqu'il n'y a qu'une seule ligne, les accolades ne sont pas obligatoires
		die("Error 502 - " .mysqli_connect_error());//die("Error 502 - " + mysqli_connect_error());	


	/*=======================================================*/
	/*============= le crud de manière générale =============*/
	/*=======================================================*/

	//CRÉATION DES FONCTIONS
	
	// Fonction de sélection applicable à toutes les tables de la bdd
	function select ($conn, $table){
		$resultat = array();//création d'un tableau vide pour commencer
		$primary_keys = array();//
		
		$sql = "SELECT * FROM ".$table;//requête de sélection de la table choisie
		$resultat_requete = mysqli_query($conn, $sql);
		
		while($tableau_result = mysqli_fetch_assoc($resultat_requete)){//boucle pour afficher le résultat par tableau
			$resultat[] = $tableau_result;
		}
		ob_start();//tamporisation de sortie
			echo "<table border='1'>";
			foreach($resultat[0] as $k => $v){//boucle pour afficher les clés et leur valeur
				echo "<th>".$k."</th>";
			}
			echo "<td>Opérations</td>";//ajout des options pour chaque ligne récupérée
			for($i = 0 ; $i < sizeof($resultat) ; $i++){//boucle qui va parcourir le tableau comparé au nombre de lignes esistantes
				echo "<tr>";
				$j = 0;
				foreach($resultat[$i] as $k => $v){
					if($j == 0) $id = $v ;
					echo "<td>".$v."</td>";
					$j++;
				}
				//affichage des options
				echo "	<td><a href='tableau.php?update=".$id."&table=".$table."'>Update</a>
						<a href='tableau.php?delete=".$id."&table=".$table."'>Delete</a></td>";
				echo "</tr>";
			}
			echo "</table>";
		return $selection = ob_get_clean();//
	}
	
	//fonction pour les dates
	/*function dates(){
		if(isset($_POST['table'])){
			
			echo'
			<form method="post" action="tableau.php">
				<label for date>Date de location :</label><br><br>
					Du : <input type="date" name="debut" >
					Au : <input type="date" name="debut" ><br><br>
				<input type="submit" name="envoi" value="Selectionner">
			</form>';
			
		}
	}*/
	
	//fonction "update"
	function update($conn, $post, $clé){
		$sql = "UPDATE ".$_GET['table']." SET ";//création de ma requête SQL
		foreach($_POST as $k => $v){//je parcours un tableau clé=>valeur
			if($k == $clé){//si c'est la clé primaire
					$pri = $v ;
			}else{
				if($k != 'update'){//
					$sql.= $k." = '".$v."', ";	
				}
			}
		}
		$sql = substr($sql, 0, -2);//je supprime la dernière virgule
		
		$sql .= " WHERE ".$clé." = ".$pri ;//je sélectionne l'id de l'élément à modifier
		if($result = mysqli_query($conn, $sql)) return true ;//si ma requête a bien fonctionné, je retourne la valeur 1
		else return false ;//sinon, c'est la valeur 0 qui sera retrounée
	}
	
	//fonction "create"
	function create($conn, $elem){
		$sql = "INSERT INTO ".$elem['table']." (";//pareil que pour l'update
		
		foreach($elem as $k => $v){
			if($v !='' && $k != 'table' && $k != 'create'){//si la valeur est vide, et qu'elle n'est pas la "table" ni "Create"
				$sql .= $k.", ";//je mets les diffferentes clés
			}
		}
		$sql = substr($sql, 0, -2);//suppression de la dernière virgule
		$sql .= ") VALUES (";
		foreach($elem as $k => $v){
			if($v !='' && $k != 'table' && $k != 'create'){
				$sql .= "'".$v."', ";//et j'y ajoute les valeurs correspondantes
			}
		}
		$sql = substr($sql, 0, -2);
		$sql .= ")";
		
		$result = mysqli_query($conn, $sql);
		if($result){//je vérifie que ma requête fonctionne
			return true ;
		}else return false ;
	}
	
	/******************** READ ********************/
	//FORMULAIRE DE SÉLECTION DES TABLES 
	echo'
		<form method="post" action="tableau.php">
			<label for choix>Table à consulter :</label>
				<select name="table">
					<option></option>
					<option>Agences</option>
					<option>Clients</option>
					<option>Commentaires</option>
					<option>Locations</option>
					<option>Marques</option>
					<option>Photos</option>
					<option>Reservations</option>
					<option>Tarifs</option>
					<option>Voitures</option>
				</select><br><br>
			<input type="submit" name="envoi" value="Selectionner">
		</form>';
		
	
	if(isset($_POST['table']) && !empty($_POST['table'])){//je vérifie la présence de la table sélectionnée
		$selection = select($conn, $_POST['table']);//appel de la fonction
		echo $selection;//affichage du résultat, donc la table sélectionnée
		
		// Affiche un formulaire pour remplir la table
		$p_k = '';
		$sql = "DESCRIBE ".$_POST['table'];
		$res = mysqli_query($conn, $sql);
		while($line = mysqli_fetch_array($res)){//tant qu'il y des lignes dans ma table...
			if($line['Key'] == 'PRI') $p_k = $line['Field'];//recherche de la clé primaire
		}
		
		$sql = "SELECT * FROM ".$_POST['table'];//requête de sélection de la table choisie
		
		$resultat_requete = mysqli_query($conn, $sql);
		$resultat = array();
		
		while($tableau_result = mysqli_fetch_assoc($resultat_requete)){//boucle pour afficher le résultat par tableau
			$resultat[] = $tableau_result;
		}
		//le formulaire
		$form = "<form action='' method='post'><br>";
		foreach($resultat[0] as $k => $v){
			if($k != $p_k){
				$form .= $k."<input type='text' name='".$k."' id='".$k."'><br>";
			}
		}
		$form .= "<input type='text' id='table' name='table' hidden value=".$_POST['table'].">
		<input type='submit' name='create' id='create'></form>";
		echo $form;
	}
	/******************** END READ ********************/
	

	/******************** DELETE ********************/
	//
	if(isset($_GET["delete"]) && !empty($_GET["delete"]) || isset($_POST['choice']) && !empty($_POST["choice"])){
		//le formulaire qui affichera la confirmation 
		if(isset($_GET['delete'])){
			echo'
				<form method="post" action="tableau.php">
					Garder ce véhicule<input type="radio" name="choice" value="parc" checked> <!-- pour annuler la suppression -->
					Envoyer ce véhicule à la casse <input type="radio" name="choice" value="casse"><!-- pour supprimer -->
					<input value="'.$_GET["table"].'" name="table" type="hidden"></br>
					<input value="'.$_GET["delete"].'" name="id" type="hidden"></br>
					<input id="envoi-delete" name="envoi-delete" type="submit"></br>
				</form>';
		}else{
			//var_dump($_POST);
			$primary_keys = '';//variable clé primaire
			
			$sql = "DESCRIBE ".$_POST['table'];//requête de description de la table sélectionnée
			$res = mysqli_query($conn, $sql);
		
			while($line = mysqli_fetch_array($res)){//tant qu'il y des lignes dans ma table...
				if($line['Key'] == 'PRI') $primary_keys = $line['Field'];//recherche de la clé primaire
			}
			$sql = "DELETE FROM ".$_POST['table']." WHERE `".$primary_keys."` = '".$_POST["id"]."'";//suppression de la ligne sélectionnée

			mysqli_query($conn, $sql); // Execution de la request
		}
		
	}
	/******************** END DELETE ********************/


	/******************** UPDATE ********************/
	if((isset($_GET["update"]) && !empty($_GET["update"])) || (isset($_POST["choice"]) && !empty($_POST["choice"]))){
		if(isset($_GET['update'])){
			$primary_keys ='';
			$field='';
			$sql = "DESCRIBE ".$_GET['table'];
			
			$res = mysqli_query($conn, $sql);
			while($line = mysqli_fetch_array($res)){
				if($line['Key'] == 'PRI') $primary_keys = $line['Field'];//recherche de la clé primaire
			}
		
			$sql = "SELECT * FROM ".$_GET['table']." WHERE ".$primary_keys." = '".$_GET['update']."'";
			$res = mysqli_query($conn, $sql);
			$line = array();
			while($row = mysqli_fetch_assoc($res)){
				$line[] = $row;
			}
			//l'affichage du formulaire
			echo '<form method="post" action="">';
			foreach($line[0] as $k => $v){
				if($k != $primary_keys){
					echo '<label>'.$k.'</label>';
					echo '<input type="text" name="'.$k.'" value='.$v.'><br>';
				}
			}
			echo '<input type="text" id="'.$primary_keys.'" name="'.$primary_keys.'" value='.$_GET['update'].' hidden>
					<input type="submit" id="update" name="update">';
			echo '</form>';
		}
		if(isset($_POST['update'])){//je vérifie l'envoi du formulaire
			if(update($conn, $_POST, $primary_keys)) {//appel de la fonction
				echo "Modification réussie";//affichage en cas de réussite
			}else echo "Erreur dans la modification";//ou en cas d'erreur
		}
	}
	/******************** END UPDATE ********************/


	/******************** CREATE ********************/
	if(isset($_POST['create']) && !empty($_POST['create'])){//si je clique sur le bouton de validation et que les champs ne sont pas vides ...
		$res = create($conn, $_POST);//j'appelle ma fonction pour l'ajout de l'élément
	}
	/******************** END CREATE ********************/
	

	mysqli_close($conn);
?>
 

