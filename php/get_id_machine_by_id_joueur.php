<?php
	$json = file_get_contents(dirname(__FILE__) . '/../json/utilise.json');
	$input_arrays = json_decode($json, true);
	$idJoueur = $_GET['idJoueur'];
	$machine = 0;
	foreach ($input_arrays as $key => $value) {
		if($value["idJoueur"] == $idJoueur){
			$machine = $value;
		}
	}
	echo json_encode($machine);
?>