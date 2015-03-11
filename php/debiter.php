<?php
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