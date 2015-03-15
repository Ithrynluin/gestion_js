<?php
	// Permet de récupérer un la liste des machines libres d'une zone
	// Paramètres (GET) :
	// 		- idZone : identifiant de la zone en question
	// Type de données attendu : JSON
	// Type de données retourné : JSON (tableau d'objets machine) ou
	// rien s'il n'y a pas de machines ou si la zone n'existe pas
	$json = file_get_contents(dirname(__FILE__) . '/../json/machine.json');
	$input_arrays = json_decode($json, true);

	$machines = array();
	foreach ($input_arrays as $key => $value) {
		if($value["idZone"] == $_GET["idZone"]){
			if($value["idEtat"] == 1){
				$machines[] = $value;
			}
		}
	}
	
	if(!empty($machines))
		echo json_encode($machines);
?>