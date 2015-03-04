<?php
function set_machine_occupe($idMacine){
	$json = file_get_contents(dirname(__FILE__) . '/../json/machine.json');
	$machines = json_decode($json, true);

	foreach ($machines as $key => $value) {
		if($value["idMachine"] == $idMacine){
			if($value["idEtat"] == 1){
				$machines[$key]["idEtat"] = 2;
			}
		}
	}

	$jsonArray = json_encode($machines);

	// Stockage des données dans un fichier
	file_put_contents(dirname(__FILE__) . '/../json/machine.json', $jsonArray);
}
?>