<?php
	// Permet de récupérer un compte à partir de son login
	// Paramètres (GET) :
	// 		- login : login du compte
	// Type de données attendu : JSON
	// Type de données retourné : JSON (objet compte)
	$json = file_get_contents(dirname(__FILE__) . '/../json/compte.json');
	$input_arrays = json_decode($json, true);

	foreach ($input_arrays as $key => $value) {
		if($value["login"] == $_GET["login"]){
			$compte = $value;
		}
	}
	echo json_encode($compte);
?>