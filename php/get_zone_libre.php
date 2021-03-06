<?php
	// Permet de récupérer les zones qui possèdent au moins
	// une machine libre
	// Paramètres : Aucun
	// Type de données attendu : JSON
	// Type de données retourné : JSON (tableau d'objets zone)
	$json = file_get_contents(dirname(__FILE__) . '/../json/machine.json');
	$machine_array = json_decode($json, true);

	$json = file_get_contents(dirname(__FILE__) . '/../json/zone.json');
	$zone_array = json_decode($json, true);

	$result = array();

	foreach ($zone_array as $zone) {
		$compte = 0;
		foreach ($machine_array as $machine) {
			if($machine["idZone"] == $zone["idZone"]){
				if($machine["idEtat"] == 1){
					$compte = $compte + 1;
				}
			}
		}
		if($compte > 0){
			$result[] = $zone;
		}		
	}

	echo json_encode($result);
?>