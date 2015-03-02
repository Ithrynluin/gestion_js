<?php


// Récupération des données du client
$input_arrays = file_get_contents("php://input");

$data = json_decode($input_arrays, true);

$compteur = 1;
foreach ($data as $cle=>$event) {
	foreach ($event as $key => $value) {
		if($key == "_id"){
			$data[$cle][$key] = $compteur;
		}
	}
	$compteur ++;
}

$jsonArray = json_encode($data);
//var_dump(dirname(__FILE__) . '/../json/events.json');

// Stockage des données dans un fichier
var_dump(file_put_contents(dirname(__FILE__) . '/../json/events.json', $jsonArray));

