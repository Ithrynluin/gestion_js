<?php
	// Permet mettre à jour l'état d'une machine
	// Paramètres (POST) :
	// 		- idMachine : identifiant de la machine
	// 		- idEtat : identifiant du nouvel état
	// Type de données attendu : JSON
	// Type de données retourné : -1 si
	//		une erreur se produit, rien sinon
	$machine = file_get_contents("php://input");
	$machine = json_decode($machine, true);

	$jsonString = file_get_contents(dirname(__FILE__).'/../json/machine.json');
	$data = json_decode($jsonString);

	if($data){
		foreach ($data as $key => $objet) {
			if ($objet->idMachine == $machine["idMachine"]) {
				$data[$key]->idEtat = $machine["idEtat"];
				break;
			}
		}

		$new = json_encode($data);
		file_put_contents(dirname(__FILE__).'/../json/machine.json', $new);
	}
?>