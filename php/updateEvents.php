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
var_dump($data);

$jsonArray = json_encode($data);

// Stockage des données dans un fichier
file_put_contents(dirname(__FILE__) . '/../json/events.json', $jsonArray);

