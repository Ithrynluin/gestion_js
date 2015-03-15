<?php
	// Ajoute un certain montant au nombre de crédits d'un compte
	// à partir de l'identifiant du COMPTE
	// Paramètres (GET) :
	// 		- id : identifiant du COMPTE
	//		- montant : le nombre de crédits à ajouter
	// Type de données attendu : JSON
	// Type de données retourné : rien si tout se passe bien, un
	// message d'erreur sinon
	$jsonString = file_get_contents(dirname(__FILE__).'/../json/compte.json');
	$data = json_decode($jsonString);

	foreach ($data as $key => $value) {
		if($value->id == $_GET['id']){
			$id = $key;
			$pseudo = $value->id;
		}
	}
	if($pseudo == null){
		echo 'Ce pseudo n\'existe pas';
	}
	else{
		$credits = $data[$id]->nbCredit;
		$ajout = intval($_GET['montant']);
		$data[$id]->nbCredit = $credits + $ajout;

		$newJsonString = json_encode($data);
		file_put_contents(dirname(__FILE__) . '/../json/compte.json', $newJsonString);
	}
?>