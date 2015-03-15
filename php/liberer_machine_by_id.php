<?php
	// Permet de libérer une machine
	// Paramètres (GET) :
	// 		- idMachine : identifiant de la machine
	// Type de données attendu : JSON
	// Type de données retourné : 
	require_once(dirname(__FILE__).'/util.php');
	$joueur = get_id_joueur_by_id_machine($_GET['idMachine']);

	if($joueur != 0){
		$json = file_get_contents(dirname(__FILE__) . '/../json/utilise.json');
		$utilise = json_decode($json, true);

		$result = [];

		foreach($utilise as $value){
			if($value['idJoueur'] != $joueur){
				$result[] = $value;
			}
		}

		$jsonArray = json_encode($result);

		file_put_contents(dirname(__FILE__) . '/../json/utilise.json', $jsonArray);
	}
	echo json_encode($result);
?>