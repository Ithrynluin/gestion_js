<?php
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