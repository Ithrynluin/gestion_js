<?php
	// Enlève un certain montant au nombre de crédits d'un compte
	// à partir de l'identifiant du COMPTE
	// Paramètres (GET) :
	// 		- id : identifiant du COMPTE
	//		- montant : le nombre de crédits à ajouter
	// Type de données attendu : JSON
	// Type de données retourné : rien si tout se passe bien, un
	// message d'erreur sinon
	$jsonString = file_get_contents(dirname(__FILE__).'/../../json/compte.json');
	$data = json_decode($jsonString);

	foreach ($data as $key => $value) {
		if($value->id == $_POST['id']){
			$id = $key;
		}
	}
	$credits = $data[$id]->nbCredit;
	$sup = intval($_GET['montant']);
		
	if($credits > $sup){
		$data[$id]->nbCredit = $credits - $sup;
		$newJsonString = json_encode($data);
		file_put_contents(dirname(__FILE__) . '/../../json/compte.json', $newJsonString);
	}
	else{
		echo 'Vous n\'avez pas assez de crédits.';
	}
?>