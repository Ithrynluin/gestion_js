<?php
	// Permet de récupérer un la liste des machines libres d'une zone
	// Paramètres (GET) :
	// 		- idZone : identifiant de la zone en question
	// Type de données attendu : JSON
	// Type de données retourné : JSON (tableau d'objets machine)
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
	
	echo json_encode($machines);
?>