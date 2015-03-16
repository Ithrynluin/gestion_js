<?php
	// Permet de récupérer le nombre de crédits d'un compte 
	// à partir du pseudo d'un joueur
	// Paramètres (GET) :
	// 		- pseudo : pseudo du joueur
	// Type de données attendu : JSON
	// Type de données retourné : entier (nombre de crédit
	// 		si tout va bien, -1 si une erreur s'est produite,
	//		pseudo non existant par exemple)
	$json = file_get_contents(dirname(__FILE__) . '/../json/joueur.json');
	$input_arrays = json_decode($json, true);

	// Récupération des données du joueur à partir de son pseudo
	foreach ($input_arrays as $key => $value) {
		if($value["pseudo"] == $_GET["pseudo"]){
			$joueur = $value;
		}
	}
	
	if(!empty($joueur)){
		$json = file_get_contents(dirname(__FILE__) . '/../json/compte.json');
		$input_arrays = json_decode($json, true);

		// Recherche du compte 
		foreach ($input_arrays as $key => $value) {
			if($value["idCompte"] == $joueur["idCompte"]){
				$compte = $value;
			}
		}

		// Résultat
		if(!empty($compte)){
			echo $compte["nbCredit"];
		}else{
			echo -1;
		}
	}else{
		echo -1;
	}
?>