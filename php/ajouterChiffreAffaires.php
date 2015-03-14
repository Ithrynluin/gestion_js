<?php
	// Ajoute un certain montant au chiffre d'affaires d'aujourd'hui
	// dans une certaine zone
	// Paramètres (GET) :
	// 		- idZone : identifiant de la zone
	//		- montant : le montant à ajouter au chiffre d'affaires
	// Type de données attendu : JSON
	// Type de données retourné : int (chiffre d'affaires final)

	$json = file_get_contents(dirname(__FILE__) . '/../json/chiffreAffaires.json');
	$input_arrays = json_decode($json, true);

	foreach ($input_arrays as $key => $value) {
		// Changement du chiffre d'affaires
		if($value["idZone"] == $_GET["idZone"] && $value["date"] == date("d/m/Y")){
			$input_arrays[$key]["chiffreAffaire"] += $_GET["montant"];
			$chiffreAffaires = $input_arrays[$key]["chiffreAffaire"];
		}
	}

	var_dump($chiffreAffaires);

	// Chiffre d'affaires nul pour aujourd'hui
	if(empty($chiffreAffaires)){
		$chiffreAffaires = $_GET["montant"];
		$input_arrays[] = array(
			"idZone"=>$_GET["idZone"],
			"date"=>date("d/m/Y"),
			"chiffreAffaire"=>$_GET["montant"]
		);
	}

	$jsonArray = json_encode($input_arrays);
	file_put_contents(dirname(__FILE__) . '/../json/chiffreAffaires.json', $jsonArray);
	echo json_encode($chiffreAffaires);
?>