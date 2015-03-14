<?php
	// Permet de savoir si un joueur utilise une machine
	// Paramètres (GET) :
	// 		- idJoueur : identifiant du joueur
	// Type de données attendu : JSON
	// Type de données retourné : JSON (objet joueur) si
	//		il utilise une machine, rien sinon
	$json = file_get_contents(dirname(__FILE__) . '/../json/utilise.json');
	$input_arrays = json_decode($json, true);

	foreach ($input_arrays as $key => $value) {
		if($value["idJoueur"] == $_GET["idJoueur"]){
			$joueur = $value;
		}
	}

	if(!empty($joueur)){
		echo json_encode($joueur);
	}
?>
