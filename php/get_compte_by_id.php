<?php
	// Permet de récupérer un compte à partir de son identifiant
	// Paramètres (GET) :
	// 		- idCompte : identifiant du compte
	// Type de données attendu : JSON
	// Type de données retourné : JSON (objet compte) ou rien si
	//		le compte n'est pas trouvé
	$json = file_get_contents(dirname(__FILE__) . '/../json/compte.json');
	$input_arrays = json_decode($json, true);

	foreach ($input_arrays as $key => $value) {
		if($value["idCompte"] == $_GET["idCompte"]){
			$compte = $value;
		}
	}
	if(isset($compte))
		echo json_encode($compte);
?>