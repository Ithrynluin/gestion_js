<?php
	// Permet de libérer une machine
	// Paramètres (GET) :
	// 		- idMachine : identifiant de la machine
	// Type de données attendu : JSON
	// Type de données retourné : Un message d'erreur si la 
	//		machine n'est pas utilisée, rien sinon
	require_once(dirname(__FILE__).'/util.php');
	$joueur = get_id_joueur_by_id_machine($_GET['idMachine']);

	if($joueur != 0){
		$json = file_get_contents(dirname(__FILE__) . '/../json/utilise.json');
		$utilise = json_decode($json, true);

		$result = [];

		// On recopie dans le tableau les couples joueur/machine
		// auxquels il ne faut pas toucher
		foreach($utilise as $value){
			if($value['idJoueur'] != $joueur){
				$result[] = $value;
			} else {
				$joueurTrouve = True;
			}
		}

		$jsonArray = json_encode($result);

		file_put_contents(dirname(__FILE__) . '/../json/utilise.json', $jsonArray);
	}
	if(!isset($joueurTrouve))
		echo "Cette machine n'est pas utilisée.";
?>