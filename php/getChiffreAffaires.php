<?php
	// Permet de récupérer le chiffre d'affaires d'aujourd'hui
	// d'une certaine zone
	// Paramètres (GET) :
	// 		- idZone : identifiant de la zone
	// Type de données attendu : JSON
	// Type de données retourné : int


	$json = file_get_contents(dirname(__FILE__) . '/../json/chiffreAffaires.json');
	$input_arrays = json_decode($json, true);

	$chiffreAffaires = 0;

	foreach ($input_arrays as $key => $value) {
		if($value["idZone"] == $_GET["idZone"] && $value["date"] == date("d/m/Y")){
			$chiffreAffaires = $value["chiffreAffaire"];
		}
	}

	echo json_encode($chiffreAffaires);
?>